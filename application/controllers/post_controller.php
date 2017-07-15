<?php

Class Post_controller extends CI_Controller
{
    public function index()
    {
        $this->load->model('post_model');
        $data["getCat"]= $this->post_model->getCat();
        $data["getTag"]= $this->post_model->getTag();
        $this->load->view('add_post_view',$data);
    }
    
    public function edit()
    {
        $this->load->model('post_model');
        $data["getCat"]= $this->post_model->getCat();
        $data["getTag"]= $this->post_model->getTag();
        $this->load->view('edit_post_view',$data);
    }
    
    public function post()
    {
        $this->load->model('post_model');
        $data["fetch_post"]= $this->post_model->fetch_post();
        $this->load->view('list_post_view',$data);
    }
    
     public function post_form_validation()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules("post_title","Post Title",'required');
            $this->form_validation->set_rules("post_content","Post Content",'required');
            $this->form_validation->set_rules("category","Category",'required');
            $this->form_validation->set_rules("tag[]","Tag",'required');

            if($this->form_validation->run())
            {
                $this->load->model('post_model');
               
                $data=array(
                    'post_title'=> $this->input->post('post_title'),
                    'post_content'=> $this->input->post('post_content'),
                    'category_id'=> $this->input->post('category'),
                    'tag_id'=> implode(',',$this->input->post('tag[]')),
                     'user_id' => $this->session->userdata('user_id'),
                );
                if($this->input->post("update_post"))
                {
                    $this->post_model->update_post($data,$this->input->post("hidden_id"));
//                         echo "<script>alert('Your details are updated successfully');history.go(-1);</script>";
                     redirect(base_url()."post_controller/updated_post");
                }
                if($this->input->post("update_your_post"))
                {
                    $this->post_model->update_post($data,$this->input->post("hidden_id"));
//                         echo "<script>alert('Your details are updated successfully');history.go(-1);</script>";
                     redirect(base_url()."post_controller/updated_your_post");
                }
                if($this->input->post("insert_post"))
                {
                    $this->post_model->insert_post($data);
                    redirect(base_url()."post_controller/inserted_post");
                }
            }
            else
            {
                $this->index();
            }
        }

        public function inserted_post()
        {
            $this->index();
        }
        
        public function update_post()
        {
         $post_id= $this->uri->segment(3);   
         $this->load->model('post_model');
         $data["user_data"]=$this->post_model->fetch_single_post($post_id);
         $data["fetch_post"]= $this->post_model->fetch_post();
         $data["getCat"]= $this->post_model->getCat();
         $data["getTag"]= $this->post_model->getTag();
         $this->load->view("edit_post_view",$data);
        }

        public function updated_post()
        { 
            if($this->uri->segment(2)=="updated_post")
            {
                echo "<script>alert('Post Is Updated');history.go(-1);</script>";
            }
        }
        
          public function update_your_post()
        {
         $post_id= $this->uri->segment(3);   
         $this->load->model('post_model');
         $data["user_data"]=$this->post_model->fetch_single_post($post_id);
         $data["fetch_post"]= $this->post_model->fetch_post();
         $data["getCat"]= $this->post_model->getCat();
         $data["getTag"]= $this->post_model->getTag();
         $this->load->view("edit_your_post_view",$data);
        }

        public function updated_your_post()
        { 
            if($this->uri->segment(2)=="updated_your_post")
            {
                echo "<script>alert('Post Is Updated');history.go(-1);</script>";
            }
        }
        
        public function delete_post()
        {
            $post_id= $this->uri->segment(3);
            $this->load->model('post_model');
            $this->post_model->delete_post($post_id);
            redirect(base_url()."post_controller/deleted_post");
        }

        public function deleted_post()
        {
            $this->post();
        }
        
}