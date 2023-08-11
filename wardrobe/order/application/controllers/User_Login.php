<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function user_login()
	{
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('user_login');
		} else {
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));

			$user = $this->Common_model->get_singel("users", array("email" => $email, "password" => $password,));

			if (!empty($user)) {
				$userdata = array(
					'users_id' => $user->id,
					'email' => $user->email,
				);
				$this->session->set_userdata('userdata', $userdata);
				$msg = "<div class='alert alert-success'>User login successfully. </div>";
				$this->session->set_flashdata("msg", $msg);
				redirect('my_orders');
			} else {
				$msg = "<div class='alert alert-danger'>failed-authentication. </div>";
				$this->session->set_flashdata("msg", $msg);
				redirect('user_login');
			}
		}
	}

	public function user_register()
	{
		$this->form_validation->set_rules('company', 'Company', 'required');
		$this->form_validation->set_rules('identification', 'Identification', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|callback_check_duplicate_email|valid_email');
		$this->form_validation->set_message('check_duplicate_email', 'This email is already exist');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('cpassword', 'Re-Type Password', 'required');
		if ($this->form_validation->run() === FALSE) {

			$this->load->view('admin/sign_up');
		} else {
			$data = array(
				'company' => $this->input->post('company'),
				'id_number' => $this->input->post('identification'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
			);
			$check = $this->Common_model->insert('users',$data);
			redirect('user_login');
		}
	}

	public function chk_duplicate() 
	{
		if(!empty($this->input->post('phone'))){
			$res = $this->Common_model->get_singel('users', array('phone' => $this->input->post('phone')));
		}else{
			$res = $this->Common_model->get_singel('users', array('email' => $this->input->post('email')));
		}

		if (!empty($res)) {
			echo json_encode(FALSE);
		} else {
			echo json_encode(TRUE);
		}
	}

	
}
