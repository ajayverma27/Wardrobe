<?php
class Common extends CI_Model
{

    function get_singel($table,$where)
    {
        $this->db->where($where);
        $query = $this->db->get($table);
        return $query->row_array();
    }
    
    function update_data($table,$data,$where)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
        return $query = $this->db->affected_rows();
    }

    function insert($table,$formArray)
    {
        $this->db->insert($table,$formArray);
        return $this->db->insert_id();
    }

    function get_all($table,$order_by,$where)
    {
        if(!empty($order_by))
        {
            $this->db->order_by($order_by);
        }
        if(!empty($where))
        {
            $this->db->where($where);
        }
        return $query =  $this->db->get($table)->result_array();
    }
    
    function delete($table,$where)
    {
        $this->db->where($where);
        $this->db->delete($table);
        return $query = $this->db->affected_rows();
    }
    
    
}