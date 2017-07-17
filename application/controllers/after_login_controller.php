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
        $this->load->view('front_view',$data);
    } 
    
    public function pagination()
    {
        $config=array();
        $config["base_url"] = base_url() ."front_controller/index";
        $config["total_rows"] = $this->after_login_model->record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination">';
        $config["full_tag_close"] = '</ul>';
        $config["first_tag_open"] = '<li>';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"] = '<li>';
        $config["last_tag_close"] = '</li>';
        $config["next_link"] = '&gt';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["prev_link"] = '&lt';
        $config["prev_tag_open"] = '<li>';
        $config["prev_tag_close"] = '</li>';
        $config["cur_tag_open"] = "<li class='active'><a href='#'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        
        $this->pagination->initialize($config);
        
         if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;
            }
            else{
            $page = 0;
        }
        $start=($page-1)*$config["per_page"];
             
        $data["fetch_data"] = $this->after_login_model->fetch_data($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("front_view", $data);
    }
    
    public function get_profile($user_id='')
    {
        $this->load->model('post_model');
        $user_id = $this->session->userdata('user_id');
        $data['my_data'] = $this->post_model->get_my_profile($user_id);
        $this->load->view('your_post_view',$data);
    }
         
    public function delete_post()
    {
        $post_id= $this->uri->segment(3);
        $this->load->model('post_model');
        $this->post_model->delete_post($post_id);
        redirect(base_url()."after_login_controller/deleted_post");
    }

    public function deleted_post()
    {
        $this->get_profile();
    }
        
    public function admin()
    {
         $this->load->view('admin_view');
    }
           
    public function logout()
    {
        $this->session->unset_userdata('email');
        session_destroy();
        redirect(base_url()."front_controller/index");
    }
    
}