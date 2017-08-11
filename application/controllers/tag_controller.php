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
            header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }
	
Class Tag_controller extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('tag_model');
    }
    
    public function find_all_get()
    {
        echo json_encode($this->tag_model->all());
    }
    
     public function find_get($tag_id)
    {
        echo json_encode($this->tag_model->find($tag_id));
    }
    
     public function create_post()
    {
        $tag=array(
            'tag_name' => $this->post('tag_name')
        );
        
        $this->tag_model->insert($tag);
    }
    
     public function update_put()
    {
        $tag=array(
            'tag_name' => $this->put('tag_name')
        );
        
        $this->tag_model->update($this->put('tag_id'),$tag);
    }
    
      public function delete_delete($tag_id)
    {
        $this->tag_model->delete($tag_id);
    }
}

