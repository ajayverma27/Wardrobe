<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Login extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin_view/sign_in');
	}

	function admin_login()
    {
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == false) 
        {
            redirect('admin_login');
        }
        else
        {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $user = $this->Common_model->get_singel("admin",array("email"=>$email,"password"=>$password,));
            if (!empty($user)) 
            {
                $admindata = array(
                    'admin_id' => $user->id,
                    'admin_email' => $user->email,
                    'admin_name' => $user->name,
                );
                $this->session->set_userdata('admindata', $admindata);
                $msg = "<div class='alert alert-success'>Admin login successfully. </div>";
				$this->session->set_flashdata("msg", $msg);
                redirect('admin-dashboard');
            }
            else
            {
                $msg = "<div class='alert alert-danger'>failed-authentication. </div>";
				$this->session->set_flashdata("msg", $msg);
				redirect('admin_login');
            }
        }
    }

    public function chk_duplicate() 
	{
		$res = $this->Common_model->get_singel('users', array('email' => $this->input->post('email')));

		if (!empty($res)) {
			echo json_encode(FALSE);
		} else {
			echo json_encode(TRUE);
		}
	}
}