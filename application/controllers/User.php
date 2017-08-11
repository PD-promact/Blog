<?php

require_once APPPATH.'/libraries/REST_Controller.php';
require_once APPPATH.'/libraries/JWT.php';

use \Firebase\JWT\JWT;

 // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST,PUT,DELETE OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }
	
class User extends REST_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
	} 
	
	public function login_post(){
		$user_name=$this->post('user_name');
		$password=$this->post('password');
		$invalidLogin= ['invalid'=>$user_name];
		
		if(!$user_name || !$password) $this->response($invalidLogin,REST_Controller::HTTP_NOT_FOUND);
		$user_id=$this->users_model->login($user_name,$password);
		
		if($user_id){
			$token['user_id']=$user_id;
			$token['user_name']=$user_name;
			$date=new DateTime();
			$token['iat']=$date->getTimestamp();
			$token['exp']=$date->getTimestamp()+ 60*60*5;
			$output['id_token']=JWT::encode($token, "my Secret key!");
			$this->set_response($output,REST_Controller::HTTP_OK);
		}
		else{
			$this->set_response($invalidLogin,REST_Controller::HTTP_NOT_FOUND);
		}
	}
}

