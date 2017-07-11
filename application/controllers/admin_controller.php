<?php

Class Admin_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('login_name')== '')
        {
            redirect('register_controller/login');
        }
        $this->load->helper('text');
    }
    
    public function index()
    {
        $data['login_name'] = $this->session->userdata('login_name');
        $this->load->view('admin_view',$data);
    }
    
    public function logout()
    {
        $this->session->unset_userdata('login_name');
        $this->session->unset_userdata('role');
        session_destroy();
        redirect('register_controller/login');
    }
}
