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

Class Post_controller extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
    }
    
    public function find_all_get()
    {
        echo json_encode($this->post_model->all());
    }
    
     public function find_get($post_id)
    {
        echo json_encode($this->post_model->find($post_id));
    }
    
     public function create_post()
    {
        $post=array(
            'post_title' => $this->post('post_title'),
            'post_content' => $this->post('post_content'),
            'category_id' => $this->post('category'),
            'tag_id' => $this->post('tag'),
        );
        
        $this->post_model->insert($post);
    }
    
     public function update_put()
    {
        $post=array(
            'post_name' => $this->put('post_name')
        );
        
        $this->post_model->update($this->put('post_id'),$post);
    }
    
      public function delete_delete($post_id)
    {
        $this->post_model->delete($post_id);
    }
}

