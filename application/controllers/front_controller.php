<?php

Class Front_controller extends CI_Controller
{
    public function index()
    {
        $this->load->model('front_model');
        $this->load->library("pagination");
        $data["getCat"]= $this->front_model->getCat();
        $data["getTag"]= $this->front_model->getTag();
        $limit=5;
        $start=0;
        $data["fetch_data"]= $this->front_model->fetch_data($limit,$start);
        $this->load->view('front_view',$data);
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
          
   
}