<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';

class Category extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }

  public function index_get()
  {
      $categories=$this->category_model->get();

      if(!is_null($categories)){
          $this->response(array('response'=>$categories),200);
      }else{
          $this->response(array('error'=>'No Categories to show'),404);
      }
  }

   public function find_get($category_id)
  {
      if(!$category_id){
          $this->response(null,400);
      }

      $categories=$this->category_model->get($category_id);

      if(!is_null($categories)){
          $this->response(array('response'=>$categories),200);
      }else{
           $this->response(array('error'=>'No Categories to show'),404);
      }
  }

   public function index_post()
  {
      if(!$this->post('category_name')){
           $this->response(null,400);
      }

      $category_id=$this->category_model->save($this->post('category_name'));

      if(!is_null($category_id)){
          $this->response(array('response'=>$category_id),200);
      }else{
          $this->response(array('error'=>'No Categories to show'),400);
      }
  }

   public function index_put($category_id)
  {
      if(!$this->post('category_name') || !$category_id){
          $this->response(null,400);
      }

      $update = $this->category_model->update($category_id,$this->post('category_name'));

      if(!is_null($update)){
             $this->response(array('response'=>'Category is updated'),200);
      }else{
           $this->response(array('error'=>'No Categories to show'),400);
      }
  }

   public function index_delete($category_id)
  {
       if(!$category_id){
          $this->response(null,400);
      }

      $delete = $this->category_model->delete($category_id);

       if(!is_null($delete)){
             $this->response(array('response'=>'Category is deleted'),200);
      }else{
           $this->response(array('error'=>'No Categories to show'),400);
      }
  }
}