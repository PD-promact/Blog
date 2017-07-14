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
        $this->load->library("pagination");
        $data["getCat"]= $this->after_login_model->getCat();
        $data["getTag"]= $this->after_login_model->getTag();
        $limit=5;
        $start=0;
        $data["fetch_data"]= $this->after_login_model->fetch_data($limit,$start);
        $data['email'] = $this->session->userdata('email');
        $this->load->view('after_login_view',$data);
    } 
    
    public function pagination()
    {
        $config=array();
        $config["base_url"] = base_url() ."front_controller/front_view";
        $config["total_rows"] = $this->front_model->record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["fetch_data"] = $this->front_model->fetch_data($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("front_view", $data);
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