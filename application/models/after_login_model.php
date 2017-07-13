<?php 

Class After_login_model extends CI_Model
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
    
    public function fetch_data()
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
        
         if($query->num_rows()<1)
        {
            return FALSE;
        }
        return $query->result();

   }
     
}