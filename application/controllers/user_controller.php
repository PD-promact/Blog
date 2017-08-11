<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

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
	
Class User_controller extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    public function find_all_get()
    {
        echo json_encode($this->user_model->all());
    }
    
     public function find_get($user_id)
    {
        echo json_encode($this->user_model->find($user_id));
    }
    
     public function create_user()
    {
        $user=array(
            'user_name' => $this->user('user_name'),
            'email' => $this->user('email'),
            'password' => $this->user('password'),
        );
        
        $this->user_model->insert($user);
    }
    
     public function update_put()
    {
        $user=array(
            'user_name' => $this->put('user_name')
        );
        
        $this->user_model->update($this->put('user_id'),$user);
    }
   
}

