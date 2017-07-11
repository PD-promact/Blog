<?php

Class Cat_tag_model extends CI_Model
{
     public function insert_cat($data)
    {
        $this->db->insert("categories",$data);
    }
    
     public function fetch_single_category($category_id)
    {
        $this->db->where("category_id",$category_id);
        $query = $this->db->get("categories");
        return $query;
    }
    
    public function update_cat($data,$category_id)
    {
        $this->db->where("category_id",$category_id);
        $this->db->update("categories",$data);
    }
    
    public function fetch_cat()
    {
        $query = $this->db->get("categories");
        return $query;
    }
    
    public function delete_cat($category_id)
    {
        $this->db->where("category_id",$category_id);
        $this->db->delete("categories");
    }
    
     public function insert_tag($data)
    {
        $this->db->insert("tags",$data);
    }
    
     public function fetch_single_tag($tag_id)
    {
        $this->db->where("tag_id",$tag_id);
        $query = $this->db->get("tags");
        return $query;
    }
    
    public function update_tag($data,$tag_id)
    {
        $this->db->where("tag_id",$tag_id);
        $this->db->update("tags",$data);
    }
    
    public function fetch_tag()
    {
        $query = $this->db->get("tags");
        return $query;
    }
    
    public function delete_tag($tag_id)
    {
        $this->db->where("tag_id",$tag_id);
        $this->db->delete("tags");
    }
    
    
}

