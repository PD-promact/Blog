<?php

Class Cat_tag_controller extends CI_Controller
{
    public function index()
    {
        $this->load->model('cat_tag_model');
        $data["fetch_cat"]= $this->cat_tag_model->fetch_cat();
        $this->load->view('category_view',$data);
    }
    
    public function tag()
    {
        $this->load->model('cat_tag_model');
        $data["fetch_tag"]= $this->cat_tag_model->fetch_tag();
        $this->load->view('tag_view',$data);
    }
    
    public function form_cat()
    {
           $this->load->view('add_edit_cat_view');
    }
    
     public function form_tag()
    {
           $this->load->view('add_edit_tag_view');
    }
        
       public function cat_validation()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules("category","Category",'required');
            
            if($this->form_validation->run())
            {
                $this->load->model('cat_tag_model');
                $data=array(
                    'category_name'=> $this->input->post('category'),
                );
                if($this->input->post("update_cat"))
                    {
                        $this->cat_tag_model->update_cat($data,$this->input->post("hidden_id"));
//                         echo "<script>alert('Your details are updated successfully');history.go(-1);</script>";
                         redirect(base_url()."cat_tag_controller/updated_cat");
                    }
                if($this->input->post("insert_cat"))
                {
                    $this->cat_tag_model->insert_cat($data);
                    redirect(base_url()."cat_tag_controller/inserted_cat");
                }
            }
            else
            {
                $this->index();
            }
        }

        public function inserted_cat()
        {
            $this->index();
        }
   
        public function update_cat()
        {
         $category_id= $this->uri->segment(3);   
         $this->load->model('cat_tag_model');
         $data["user_data"]=$this->cat_tag_model->fetch_single_cat($category_id);
         $data["fetch_cat"]= $this->cat_tag_model->fetch_cat();
         $this->load->view("add_edit_cat_view",$data);
        }

        public function updated_cat()
        { 
            if($this->uri->segment(2)=="updated_cat")
            {
                echo "<script>alert('Category Is Updated');history.go(-1);</script>";
            }
        }
        
        public function delete_cat()
        {
            $category_id= $this->uri->segment(3);
            $this->load->model('cat_tag_model');
            $this->cat_tag_model->delete_cat($category_id);
            redirect(base_url()."cat_tag_controller/deleted_cat");
        }

        public function deleted_cat()
        {
            $this->index();
        }
        
         public function tag_validation()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules("tag","Tag",'required');
            
            if($this->form_validation->run())
            {
                $this->load->model('cat_tag_model');
                $data=array(
                    'tag_name'=> $this->input->post('tag'),
                );
                if($this->input->post("update_tag"))
                    {
                        $this->cat_tag_model->update_tag($data,$this->input->post("hidden_id"));
//                         echo "<script>alert('Your details are updated successfully');history.go(-1);</script>";
                         redirect(base_url()."cat_tag_controller/updated_tag");
                    }
                if($this->input->post("insert_tag"))
                {
                    $this->cat_tag_model->insert_tag($data);
                    redirect(base_url()."cat_tag_controller/inserted_tag");
                }
            }
            else
            {
                $this->index();
            }
        }
        
         public function inserted_tag()
        {
            $this->tag();
        }
   
        public function update_tag()
        {
         $tag_id= $this->uri->segment(3);   
         $this->load->model('cat_tag_model');
         $data["user_data"]=$this->cat_tag_model->fetch_single_tag($tag_id);
         $data["fetch_tag"]= $this->cat_tag_model->fetch_tag();
         $this->load->view("add_edit_tag_view",$data);
        }

        public function updated_tag()
        { 
            if($this->uri->segment(2)=="updated_tag")
            {
                echo "<script>alert('Tag Value Is Updated');history.go(-1);</script>";
            }
        }
        
        public function delete_tag()
        {
            $tag_id= $this->uri->segment(3);
            $this->load->model('cat_tag_model');
            $this->cat_tag_model->delete_tag($tag_id);
            redirect(base_url()."cat_tag_controller/deleted_tag");
        }

        public function deleted_tag()
        {
            $this->tag();
        }
}

