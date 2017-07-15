<?php

Class Post_model extends CI_Model
{
    public function getCat()
    {
        $query= $this->db->get('categories');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    
    public function getTag()
    {
        $query= $this->db->get('tags');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    
    public function insert_post($data)
    {
        $this->db->insert("posts",$data);
    }
    
     public function fetch_single_post($post_id)
    {
        $this->db->where("post_id",$post_id);
        $query = $this->db->get("posts");
        return $query;
    }
    
    public function update_post($data,$post_id)
    {
        $this->db->where("post_id",$post_id);
        $this->db->update("posts",$data);
    }
    
    public function fetch_post()
    {
        $query = $this->db->get("posts");
        return $query;
    }
    
    public function delete_post($post_id)
    {
        $this->db->where("post_id",$post_id);
        $this->db->delete("posts");
    }
    
    public function get_my_profile($user_id = NULL)
    {
        $user_id = $this->session->userdata('user_id');

        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('users','users.user_id = posts.user_id');
        $this->db->where('users.user_id',$user_id);
        $query = $this->db->get();

        return $query;
    }
}