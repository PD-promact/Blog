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
              
        if($query->num_rows()>0)
        {
            return $query->result();
        }    
    }
    
    public function record_count()
    {
         $this->db->select('
                           posts.post_id,
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
    
    public function search_post($post_title)
    {
        $this->db->select('
                        posts.post_id,
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
        $this->db->like('post_title',$post_title);
          
           $query = $this->db->get();
           if($query->num_rows()>0)
           {
               return $query->result();
           }else{
               return $query->result();
           }
    }
        
     public function fetch_cat($category_id)
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
        $this->db->join('categories','categories.category_id=posts.category_id','right');
        $this->db->where("categories.category_id",$category_id);
     
        $query = $this->db->get();
              
        if($query->num_rows()>0)
        {
            return $query->result();
        }    
    }
    
     public function fetch_tag($tag_id)
    {             
        $query = $this->db->query("SELECT p.post_id,
						 p.post_title,
						 p.post_content,
						 p.date,
						 group_concat(DISTINCT u.user_name ORDER BY p.post_id) AS user_name,
						 group_concat(DISTINCT c.category_name ORDER BY p.post_id) AS category_name,
			 			 group_concat(DISTINCT t.tag_name ORDER BY p.post_id) AS tag_name		
						FROM posts p
                                                INNER JOIN users u ON u.user_id=p.user_id
						INNER JOIN categories c ON c.category_id=p.category_id
						INNER JOIN tags t ON t.tag_id=p.tag_id
                                                WHERE FIND_IN_SET($tag_id,p.tag_id)
						GROUP BY p.post_id");
              
        if($query->num_rows()>0)
        {
            return $query->result();
        }    
    }
    
    public function read_more($post_id)
    {    
        $this->db->select('
                        posts.post_id,
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
        $this->db->where("posts.post_id",$post_id);
        $query = $this->db->get();
              
        if($query->num_rows()>0)
        {
            return $query->result();
        }    
    }
    
 }