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

Class Category_controller extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }
    
    public function find_all_get()
    {
        echo json_encode($this->category_model->all());
    }
    
     public function find_get($category_id)
    {
        echo json_encode($this->category_model->find($category_id));
    }
    
     public function create_post()
    {
        $category=array(
            'category_name' => $this->post('category_name')
        );
        
        $this->category_model->insert($category);
    }
    
     public function update_put()
    {
        $category=array(
            'category_name' => $this->put('category_name')
        );
        
        $this->category_model->update($this->put('category_id'),$category);
    }
    
      public function delete_delete($category_id)
    {
        $this->category_model->delete($category_id);
    }
}
