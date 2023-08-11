<?php
class Admin_model extends CI_Model {
	public function __construct()
		{
			$this->load->database();
		}
	
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

    function insert($data)
    {
        $this->db->insert('users', $data);
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
	
    public function auth_check($data)
        {
            $query = $this->db->get_where('users', $data);
        if($query)
        {   
            return $query->row();
        }
        return false;
        }

    public function checkDuplicateEmail($email) 
    {

        $this->db->where('email', $email);

        $query = $this->db->get('users');

        $count_row = $query->num_rows();

        if ($count_row > 0) {
            return FALSE; 
         } else {
          
            return TRUE; 
         }
    }

    function email_check($email)
    {
        $this->db->where('email',$email);
        $query = $this->db->get('users');

        if($query->num_rows() > 0)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    } 

    function email_otp($userId,$formArray)
    {
        $this->db->where('id',$userId);
        $this->db->update('users',$formArray);
    } 

    function verifyAdminOtp()
    {
        $this->load->view('admin/verify_admin_otp');
    }  
}