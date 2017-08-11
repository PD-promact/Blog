<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Front_model extends CI_Model
{
    public function all()
    {
		$this->db->select('
                        posts.post_id,
                        posts.post_title,
                        posts.post_content,
                        posts.date,
                        users.user_name,
                        categories.category_name,                        
                ');
        $this->db->from('posts');
        $this->db->join('users','users.user_id=posts.user_id');
        $this->db->join('categories','categories.category_id=posts.category_id');
        $query = $this->db->get();
		return $query->result();
    }
  
 }

