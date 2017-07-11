<?php

Class Create_blog_controller extends CI_Controller
{
    public function index()
    {
        $this->load->model('create_blog_model');
        $data["getCat"]= $this->create_blog_model->getCat();
        $data["getTag"]= $this->create_blog_model->getTag();
        $this->load->view('create_blog_view',$data);
    }
    
     public function blog_form_validation()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules("post_title","Post Title",'required');
            $this->form_validation->set_rules("post_content","Post Content",'required');
            $this->form_validation->set_rules("category","Category",'required');
            $this->form_validation->set_rules("tag","Tag",'required');

            if($this->form_validation->run())
            {
                $this->load->model('create_blog_model');
                $data=array(
                    'post_title'=> $this->input->post('post_title'),
                    'post_content'=> $this->input->post('post_content'),
                    'category_id'=> $this->input->post('category'),
                     'tag_id'=> $this->input->post('tag'),
                );
                if($this->input->post("insert"))
                {
                    $this->register_model->insert_data($data);
                    redirect(base_url()."create_blog_controller/inserted");
                }
            }
            else
            {
                $this->index();
            }
        }

        public function inserted()
        {
            $this->index();
        }
}