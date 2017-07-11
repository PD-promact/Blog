<?php

Class Register_model extends CI_Model
{   
    public function insert_data($data)
    {
        $this->db->insert("users",$data);
    }
    
     public function fetch_single_data($emp_id)
    {
        $this->db->where("user_id",$emp_id);
        $query = $this->db->get("users");
        return $query;
    }
    
    public function update_data($data,$emp_id)
    {
        $this->db->where("emp_id",$emp_id);
        $this->db->update("users",$data);
    }
    
    public function can_login($data)
    {
       $query= $this->db->get_where('users',$data);
            return $query;
                
    }
}


