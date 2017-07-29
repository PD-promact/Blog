<?php

Class books_m extends CI_Model
{
     public function insert_cat($data)
    {
        $this->db->insert("categories",$data);
    }
    
     public function fetch_single_cat($category_id)
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
}