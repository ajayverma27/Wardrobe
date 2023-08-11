<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->user =  $this->session->userdata('admindata');
		if (empty($this->user)) {
			redirect('admin_login');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin-logout');
	}

	function dashboard()
	{
		$data['order_data'] = $this->Common_model->get_all("order", null, null);
		$data['total_users'] = $this->Common_model->row_counts("users", null);
		$data['draft_order'] = $this->Common_model->row_counts("order", array('order_status' => 1));
		$data['production_order'] = $this->Common_model->row_counts("order", array('order_status' => 2));
		$data['priced_order'] = $this->Common_model->row_counts("order", array('order_status' => 3));
		$data['complete_order'] = $this->Common_model->row_counts("order", array('order_status' => 4));

		for ($i = 0; $i < 7; $i++) {
			$datecheck = date("Y-m-d", strtotime("-" . $i . " days"));
			$sum = $this->Common_model->sum_colom("order", 'total_price', array('created_at >=' => $datecheck . ' 00:00:01', 'created_at <=' => $datecheck . ' 23:23:59'));

			$data['order_day_' . $i] = $sum->total_price ? $sum->total_price : 0;
		}

		$this->load->view('admin_view/analytics2', $data);
	}

	function order_management()
	{

		$data['order_data'] = $this->Common_model->get_all("order", null, null);
		$data['draft_order'] = $this->Common_model->row_counts("order", array('order_status' => 1));
		$data['production_order'] = $this->Common_model->row_counts("order", array('order_status' => 2));
		$data['priced_order'] = $this->Common_model->row_counts("order", array('order_status' => 3));
		$data['complete_order'] = $this->Common_model->row_counts("order", array('order_status' => 4));
		$this->load->view('admin_view/order_management', $data);
	}

	function customer_filter_order()
	{
		$email = $this->input->post('email');
		$sdate = $this->input->post('sdate');
		$edate = $this->input->post('edate');
		$where = null;

		if (!empty($sdate) || !empty($edate) || !empty($email)) {
			$sdate1 = date('Y-m-d', strtotime($sdate));
			$edate1 = date('Y-m-d', strtotime($edate));

			$sdate = $sdate1;
			$edate = $edate1;
			if ($sdate1 > $edate1) {
				$sdate = $edate1;
				$edate = $sdate1;
			}
			$where .= " email = '" . $email . "' OR (created_at >= '" . $sdate . " 00:00:01' AND created_at <= '" . $edate . " 23:23:59') ";
		}

		$data['user_data'] = $this->Common_model->get_all("users", null, $where);

		echo $this->load->view('admin_view/customers-render', $data, true);
	}

	function filter_order()
	{
		$status = $this->input->post('status');
		$where = null;

		if ($status[0] != 'all') {
			$status = implode(',', $status);
			$where = " order_status IN($status)";

			$min = $this->input->post('min');
			$max = $this->input->post('max');
			if ($max > 0) {
				$where .= " AND total_price >= $min AND total_price <= $max";
			}

			$sdate = $this->input->post('sdate');
			$edate = $this->input->post('edate');

			if (!empty($sdate) && !empty($edate)) {
				$sdate1 = date('Y-m-d', strtotime($sdate));
				$edate1 = date('Y-m-d', strtotime($edate));

				$sdate = $sdate1;
				$edate = $edate1;
				if ($sdate1 > $edate1) {
					$sdate = $edate1;
					$edate = $sdate1;
				}
				$where .= " AND created_at >= '" . $sdate . " 00:00:01' AND created_at <= '" . $edate . " 23:23:59' ";
			}
		}

		$data['order_data'] = $this->Common_model->get_all("order", null, $where);

		echo $this->load->view('admin_view/order-render', $data, true);
	}

	function employee_date_filter()
	{
		$sdate = $this->input->post('sdate');
		$edate = $this->input->post('edate');
		$where = null;

		if (!empty($sdate) && !empty($edate)) {
			$sdate1 = date('Y-m-d', strtotime($sdate));
			$edate1 = date('Y-m-d', strtotime($edate));

			$sdate = $sdate1;
			$edate = $edate1;
			if ($sdate1 > $edate1) {
				$sdate = $edate1;
				$edate = $sdate1;
			}
			$where .= " created_at >= '" . $sdate . " 00:00:01' AND created_at <= '" . $edate . " 23:23:59' ";
		}

		$data['emp'] = $this->Common_model->get_all("employee", null, $where);

		echo $this->load->view('admin_view/employee-render', $data, true);
	}

	function order_management_details()
	{
		$id = $this->uri->segment(2);
		$data['order_data'] = $this->Common_model->get_singel("order", array('id' => $id));
		$data['report'] = $this->Common_model->get_singel("report_problem", array('order_id' => $id));
		$data['users_data'] = $this->Common_model->get_singel("users", array('id' => $data['order_data']->user_id));
		$data['order_detail'] = $this->Common_model->get_all("order_detail", null, array('order_id' => $id));
		$this->load->view('admin_view/order_management_details', $data);
	}

	function notification()
	{
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('order_management_details');
		} else {
			$id = $this->input->post('id');
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$res = $this->Common_model->insert('notification', $data);
			redirect('order_management_details/' . $id);
		}
	}

	function status_update()
	{
		$status = $this->input->post('status');
		$id = $this->input->post('id');
		$res = $this->Common_model->update_data('order', array('order_status' => $status), array('id' => $id));

		if ($res > 0) {
			$order_data = $this->Common_model->get_singel('order', array('id' => $id));
			echo $order_data->order_status;
		}
	}

	function customer_management()
	{
		$data['user_data'] = $this->Common_model->get_all('users', 'id DESC', null);
		$this->load->view('admin_view/customer_management', $data);
	}

	function customer_management_profile()
	{
		$id = $this->uri->segment(2);
		$data['user_data'] = $this->Common_model->get_singel('users', array('id' => $id));
		$sql = "SELECT * FROM `order` AS o JOIN `order_detail` AS od ON o.id=od.order_id where o.user_id = " . $id . " ";
		$data['order_data'] = $this->db->query($sql)->result();
		$this->load->view('admin_view/customer_management_profile', $data);
	}

	function get_user_detail()
	{
		$id = $this->input->post('id');
		$data['user_data'] = $this->Common_model->get_singel('users', array('id' => $id));
		echo json_encode($data);
	}

	function delete_user()
	{
		$id = $this->input->post('user_id');
		$delete_user = $this->Common_model->delete('users', array('id' => $id));
		if ($delete_user > 0) {
			redirect('customer_management');
		}
	}

	function add_customer()
	{
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() === FALSE) {
			redirect('customer_management');
		} else {
			$data['company'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['password'] = md5($this->input->post('password'));
			$res = $this->Common_model->insert('users', $data);
			redirect('customer_management');
		}
	}

	function get_order_detail()
	{
		$id = $this->input->post('id');
		$data['order_data'] = $this->Common_model->get_singel("order", array('id' => $id));
		$data['users_data'] = $this->Common_model->get_singel("users", array('id' => $data['order_data']->user_id));
		$data['order_detail'] = $this->Common_model->get_all("order_detail", null, array('order_id' => $id));

		$rdata['html'] = $this->load->view('admin_view/order-detail-render', $data, true);
		$rdata['order_num'] = $data['order_data']->order_no;

		echo json_encode($rdata);
	}

	function generate_pdf()
	{
		$html = '
		<style type="text/css">
			.img_pdf{
				width: 74px;
				height: 74px;
				border-radius: 4px;
				margin-right: 10px;
			}
			.discound_border{
                border: 1px solid #ddd;
                padding: 12px 12px 12px 12px;
                border-radius: 4px;
                display: inline-block;
			}
            .table_data {
                font-size: 14px;
                font-weight: 400;
                color: #0F172A;
            }
            .table_heading {
                font-size: 12px;
                font-weight: 400;
                color: #475569;
            }
            .order_name {
                color: #475569;
                font-family: Inter;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 24px;
            }
            .order_modal_data {
                color: #0F172A;
                font-family: Inter;
                font-size: 16px;
                font-style: normal;
                font-weight: 500;
                line-height: 24px;
            }
            .total_bill_p {
                font-size: 14px;
                font-weight: 500;
                color: #475569;
                line-height: 30px;
                margin: 0px;
            }
		</style>
	<table cellspacing="0" border="0" cellpadding="0" 
        
		style="margin: 0 auto; border-collapse: collapse; width:100%;">

	 <tr>
		 <td>
			 <table style=" margin:0 auto;" width="100%;" border="0" align="center"
				 cellpadding="0" cellspacing="0">
				 

				 <tr>
					 <td style="height:20px;">&nbsp;</td>
				 </tr>
				 <tr>
					 <td>
						 <table border="0" align="center" cellpadding="0" cellspacing="0"
							 style=" background:#fff; border-radius:3px; text-align:center;margin-bottom:30px; width:100%;">
							 <tr>
								 <td style="padding: 20px 10px 15px;font-size: 14px;">
									 <table style="width: 100%; border-collapse: collapse;">


										 <tbody>
											 <tr>
												 <td style="padding:0px; text-align: start; width:20%;"class="order_name">
													 Customer Name</td>
												 <td style="text-align: left; padding: 0px 15px; " class="order_modal_data">
													 : Courtney Henry</td>

											 </tr>

											 <tr>
												 <td style=" padding: 0px;text-align: start; width:20%;"class="order_name">
													 Delivery Date</td>
												 <td style="text-align: left; padding: 0px 15px;" class="order_modal_data">
													 : 28 Mar 2023</td>

											 </tr>
											 <tr>
												 <td style=" padding: 0px;text-align: start; width:20%;"class="order_name">
													 Transport Type</td>
												 <td style="text-align: left; padding: 0px 15px;" class="order_modal_data">
													 : Seller</td>

											 </tr>
											 <tr>
												 <td style=" padding: 0px;text-align: start; width:20%;"class="order_name">
													 Delivery Address</td>
												 <td style="text-align: left; padding: 0px 15px;" class="order_modal_data">
													 : 2118 Thornridge Cir. Syracuse, Connecticut 35624</td>

											 </tr>

										 </tbody>
									 </table>
								 </td>
							</tr>
							 <tr>
								 <td style="font-size: 14px;">
									 <table style="width:100%; border-collapse: collapse;">
										 <thead>
											 <tr>
												 <th
													 style="background-color: #f2f3f8; padding: 15px; text-align: left;" class="table_heading">
													 Product Name
												 </th>
												 <th
													 style="background-color: #f2f3f8; padding: 15px; text-align:left;"class="table_heading">
													 Price
												 </th>
												 <th
													 style="background-color: #f2f3f8; padding: 15px; text-align: left;" class="table_heading">
													 MO Discount
												 </th>
											 
											 </tr>
										 </thead>

										 <tbody>
											 <tr>
												 <td
													 style="padding: 10px 15px; text-align: start;">
                                                     <table>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/images/timer.svg" class="img_pdf" >
                                                            </td>
                                                             <td class="table_data">
                                                                Door
                                                            </td>
                                                        </tr>
                                                     </table>
													 </td>
												 <td
													 style="text-align: left; padding: 10px 15px; "class="table_data">
													 $25,120.55</td>
													 <td
													 style="text-align: center; padding: 10px 15px; ">
													 <p class="discound_border" style="">2%</p></td>
											 </tr>
											 <tr>
												 <td
												 style="padding: 10px 15px; text-align: start;">
												 <table>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/images/timer.svg" class="img_pdf" >
                                                            </td>
                                                             <td class="table_data">
                                                                Door
                                                            </td>
                                                        </tr>
                                                     </table>
												 <td
													 style="text-align: left; padding: 10px 15px; "class="table_data">
													 $25,120.55</td>
												 <td
													 style="text-align: center; padding: 10px 15px; " >
													 <span class="discound_border" style="">2%</span></td> 
											 </tr>
										 </tbody>
									 </table>
								 </td>
							 </tr>
							 <tr>
								 <td>
									 <table style=" background: #f2f3f8; width: 100%; padding-bottom:10px;">
										 <tr>
											 <td
												 style=" padding-left: 14px; width: 180px; white-space: nowrap; vertical-align: top;">
												 <p style="text-align: left; " class="total_bill_p">
													 Subtotal<br>
													 VAT<br>
													 Total Discount
												 </p>
											 </td>
											 <td
												 style="padding-right: 14px; width: 120px; white-space: nowrap; vertical-align: top; text-align: right;">
												 <p style="text-align: right;" class="total_bill_p">
													 598,485€
													 51 51<br>
													 125,56€<br>

													 586,82€
												 </p>
											 </td>
										 </tr>
									 </table>
									 <table style=" background: #f2f3f8; width: 100%;border-top:1px solid #ddd;">
										 <tr>
											 <td
												 style="padding: 0px 0; padding-left: 14px; width: 180px; white-space: nowrap; vertical-align: top;">
												 <p style="color:#475569; text-align: left; padding: 0;line-height: 19px;
											 font-size: 14px;">
													 <b>Total price</b>
												 </p>
											 </td>
											 <td
												 style="padding: 15px 14px; width: 120px; white-space: nowrap; vertical-align: top; padding-top: 6px; text-align: right;">
												 <p
													 style="color: #475569;  padding: 0; text-align: right;font-size: 14px;">
													 <b>527,247€</b>
												 </p>
											 </td>
										 </tr>
									 </table>
								 </td>
							 </tr>
						 </table>
					 </td>
				 </tr>
			 </table>
		 </td>
	 </tr>
 </table>
		';
		$pdfContent = $this->dompdf_lib->generatePDF($html, 'output.pdf');

		// header('Content-Type: application/pdf');
		// header('Content-Disposition: attachment; filename="output.pdf"');
		// echo $pdfContent;
	}

	public function employee_management()
	{
		$data['emp'] = $this->Common_model->get_all('employee', 'id DESC', null);
		$this->load->view('admin_view/employee_management', $data);
	}

	public function chk_duplicate()
	{
		$res = $this->Common_model->get_singel('employee', array('email' => $this->input->post('email')));
		if (!empty($res)) {
			echo json_encode(FALSE);
		} else {
			echo json_encode(TRUE);
		}
	}


	public function add_employee()
	{
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('cpassword', 'cpassword', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin_new/admin_orders');
		} else {
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),

			);
			$check = $this->Common_model->insert('employee', $data);

			if ($check) {
				$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Success!</strong> Employee Added successfully.
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
				redirect('employee_management');
			} else {

				$this->session->set_flashdata('failed', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <strong>Error!</strong> This email is already exist. Please write a new email.
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
				redirect('employee_management');
			}
		}
	}

	public function get_employee()
	{
		$id = $this->input->get('id');
		$result = $this->Common_model->get_singel('employee', $id);
		$this->load->view('employee', $result);
	}

	public function delete_profile()
	{
		$id = $this->input->post('id');
		$response = $this->Common_model->delete('employee', array('id' => $id));

		if ($response > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}

	function changePassword()
	{
		$user = $this->session->userdata('userdata');
		if (!empty($user)) {
			$this->form_validation->set_rules('npassword', 'New Password', 'required');
			$this->form_validation->set_rules('cpassword', 'Re-Type Password', 'required');

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('failed', 'Field Cannot Be empty');
				redirect("employee_management");
			} else {

				$new_pass = $this->input->post('npassword');
				$cpass = $this->input->post('cpassword');
				$id = $this->input->post('id');

				if ($new_pass == $cpass) {

					$data['password'] = md5($new_pass);

					$this->load->model('Common_model');
					$this->Common_model->update_data('employee', $data, array('id' => $id));
					$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show" role="alert">
							  <strong>Success!</strong> Password Change Successfully.
							  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>');
					redirect('employee_management');
				} else {
					$this->session->set_flashdata('failed', '<div class="alert alert-danger"><strong>Error!</strong> Password Not Updated.</div>');
					redirect('employee_management');
				}
			}
		} else {

			$this->load->view('employee_management');
		}
	}
}
