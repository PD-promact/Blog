<?php

Class After_login_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('email')== '')
        {
            redirect('register_controller/login');
        }
        $this->load->helper('text');
    }
    
    public function index()
    {
        $this->load->model('after_login_model');
        $data["getCat"]= $this->after_login_model->getCat();
        $data["getTag"]= $this->after_login_model->getTag();
        $data["fetch_data"]= $this->after_login_model->fetch_data();
        $data['email'] = $this->session->userdata('email');
        $this->load->view('after_login_view',$data);
    } 
    
     public function admin()
    {
         $this->load->view('admin_view');
    }
           
    public function logout()
    {
        $this->session->unset_userdata('email');
        session_destroy();
        redirect('register_controller/login');
    }
    
}