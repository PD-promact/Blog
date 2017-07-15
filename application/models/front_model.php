<?php

Class Front_model extends CI_Model
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
    
    public function fetch_data($limit,$start)
    {
       $this->db->limit($limit,$start);
        $this->db->select('
                        posts.post_title,
                        posts.post_content,
                        posts.date,
                        users.user_name,
                        categories.category_name,
                        tags.tag_name
                ');
        $this->db->from('posts');
        $this->db->join('users','users.user_id=posts.user_id');
        $this->db->join('categories','categories.category_id=posts.category_id');
        $this->db->join('tags','tags.tag_id=posts.tag_id');
        $query = $this->db->get();
              
        if($query->num_rows()>0)
        {
            return $query->result();
        }    
    }
    
    public function record_count()
    {
         $this->db->select('
                           posts.post_title,
                           posts.post_content,
                           posts.date,
                           users.user_name,
                           categories.category_name,
                           tags.tag_name
                   ');
           $this->db->from('posts');
           $this->db->join('users','users.user_id=posts.user_id');
           $this->db->join('categories','categories.category_id=posts.category_id');
           $this->db->join('tags','tags.tag_id=posts.tag_id');
           $query = $this->db->get();
           return $totalPosts = $query->num_rows();
    }
    
    public function search_post($post_title,$category_name,$tag_name)
    {
        $this->db->select('
                           posts.post_title,
                           categories.category_name,
                           tags.tag_name
                   ');
           $this->db->from('posts');
           $this->db->join('categories','categories.category_id=posts.category_id');
           $this->db->join('tags','tags.tag_id=posts.tag_id');
           $this->db->like('post_title',$post_title);
           $this->db->like('category_name',$category_name);
           $this->db->like('tag_name',$tag_name);
           $query = $this->db->get();
           if($query->num_rows()>0)
           {
               return $query->result();
           }else{
               return $query->result();
           }
    }
            
}