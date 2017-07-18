<?php  

Class Register_controller extends CI_Controller
{
      
        public function index()
        {
            $this->load->model('register_model');
            $this->load->view('register_view');
        }

        public function form_validation()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('user_name',"User Name",'required|alpha');
            $this->form_validation->set_rules("email","Email",'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules("password","Password",'required|min_length[8]');
            $this->form_validation->set_rules('passconf',"Password Confirmation",'required|matches[password]');
           
            if($this->form_validation->run())
            {
                $this->load->model('register_model');
                $data=array(
                    'user_name'=> $this->input->post('user_name'),
                    'email'=> $this->input->post('email'),
                    'password'=> $this->input->post('password'), 
                );
                if($this->session->userdata('role')=='admin')
                {
                    if($this->input->post("update"))
                    {
                        $this->register_model->update_data($data,$this->input->post("hidden_id"));
//                         echo "<script>alert('Your details are updated successfully');history.go(-1);</script>";
                         redirect(base_url()."register_controller/updated");
                    }
                }elseif($this->session->userdata('role')=='user')
                {
                     if($this->input->post("update"))
                    {
                        $this->register_model->update_data($data,$this->input->post("hidden_id"));
                        redirect(base_url()."register_controller/updated");
                    }
                }
                if($this->input->post("insert"))
                {
                    $this->register_model->insert_data($data);
                    redirect(base_url()."register_controller/inserted");
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
   
        public function update_data()
        {
         $user_id= $this->uri->segment(3);   
         $this->load->model('register_model');
         $this->load->model('users_list_model');
         $data["user_data"]=$this->register_model->fetch_single_data($user_id);
         $data["fetch_data"]= $this->users_list_model->fetch_data();
         $this->load->view("register_view",$data);
        }

        public function updated()
        { 
            if($this->uri->segment(2)=="updated")
            {
                echo "<script>alert('Your details are updated');history.go(-1);</script>";
            }
        }
        
           public function login()
        {
            $data['title']="Codeigniter Simple Login Form";
            $data['email']= $this->input->post('email');
            $data['password']= $this->input->post('password');
            $this->load->view("login_view",$data);
        }
        
        public function login_validation()
        {
            $this->load->library("form_validation");
            $this->form_validation->set_rules("email","Email",'required|valid_email');
            $this->form_validation->set_rules("password","Password",'required|min_length[8]');
            
            if($this->form_validation->run())
            {
                $data=array(
                 'email' => $this->input->post('email',TRUE),
                 'password' => $this->input->post('password',TRUE)
            );     
//                $username= $this->input->post("login_name");
//                $password= $this->input->post("password");
                
                $this->load->model('register_model');
                
                $result = $this->register_model->can_login($data);
                echo '<pre>';
                print_r($result);
                echo '<pre>';
                if($result->num_rows()==1)
                {
                    foreach($result->result() as $user)
                    {
                        $session_data= array();
                                $session_data['logged_in'] = 1;
                                $session_data['user_id']= $user->user_id;
                                $session_data['email']= $user->email;
                                $session_data['password']= $user->password;
                                $session_data['role']= $user->role;
                                $this->session->set_userdata($session_data);
                                redirect(base_url().'front_controller/logged_in');
                    }
                }
                   else
                {
                    $this->session->set_flashdata('error',"<div style='color:red;'>Invalid login name and password.</div>");
                    redirect(base_url().'register_controller/login');
                } 
              
            }
                 else
                {
                    $this->session->set_flashdata('error',"<div style='color:red;'>You Must Register First.</div>");
                    redirect(base_url().'register_controller/login');
                } 
        }
}
