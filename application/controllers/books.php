<?php 

include(APPPATH.'libraries/REST_Controller.php');

Class Books extends REST_Controller
{
  

   public function __construct()	{
  $this->load->database(); 
}

    public function index_get()
    {
         $this->load->model('books_m');
    //   $this->response($this->db->get('categories')->result());
    
    $data= $this->books_m->fetch_cat();
    $this->response($data);
    }

    public function index_post()
    {
          $this->load->model('books_m');
         $result = $this->books_m->update_cat( $this->post('category_id'), 
         array(
            'category_name' => $this->post('category_name')
        ));
         echo "Hello";
        if($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
         
        else
        {
            $this->response(array('status' => 'success'));
        }
    }

     public function index_put()
    {

    }

     public function index_delete()
    {

    }
}