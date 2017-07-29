<?php
defined('BASEPATH') OR exit('No  direct script access allowed');

class category_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($category_id=null)
    {
       if(!is_null($category_id)){
           $query = $this->db->query('select category_id,category_name from categories where category_id='.$category_id.'');

           if($query->num_rows()===1){
               return $query->row_array();
           }

           return false;
      }

      $query = $this->db->query('select category_id,category_name from categories');

      if($query->num_rows()>0){
          return $query->result_array();
    }

    return false;
}

public function save($category){
    $this->db->set($this->_setCategory($category))->insert('categories');

    if($this->db->affected_rows()===1){
        return $this->db->insert_id();
    }

    return false;
}

public function update($category_id,$category){
    $this->db->set($this->_setCategory($category))->where('category_id',$category_id)->insert('categories');

    if($this->db->affected_rows()===1){
        return true;
    }

    return false;
}

public function delete($category_id){
   $this->db->query('delete category_name from categories where category_id='.$category_id.'');

   if($this->db->affected_rows()===1){
        return true;
    }

    return false;
}

private function _setCategory($category)
{
    return array(
        'category_id'=>$category['category_id'],
        'category_name'=>$category['category_name']
    );
}

}

