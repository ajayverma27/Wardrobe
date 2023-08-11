<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->user =  $this->session->userdata('userdata');
        if (empty($this->user)) {
            redirect('user_login');
        }
	}

    function logout()
    {
        $this->session->sess_destroy();
        redirect('user-logout');
    }

	function dashboard()
	{
        $user =  $this->session->userdata('userdata');
        if(!empty($user))
        {
		    $this->load->view('admin/analytics');
        }
	}

	function order_data(){
		$form_data = array(
			"order_name" => $this->input->post('order_name'),
			"delivery_date" => $this->input->post('delivery_date'),
			"transport_type" => $this->input->post('transport_type'),
			"address" => $this->input->post('address'),
			"city" => $this->input->post('city'),
			"zip_code" => $this->input->post('zip_code'),
			"note" => $this->input->post('note'),
		);
		$this->session->set_userdata('form_data', $form_data);
		redirect('order_cart');
	}

	function update_user_address(){
		
			$udata['address'] = $this->input->post('address');
			$udata['city'] = $this->input->post('city');
			$udata['zip_code'] = $this->input->post('zip_code');
			$this->Common_model->update_data('users',$udata,array('id'=>$this->user['users_id']));
		
	}

	function create_order(){

			$product_id = $this->input->post('product_id');
			$quantity = $this->input->post('quantity');
			if($quantity > 0){
				$data['quantity'] = $this->input->post('quantity');
			}else{
				$data['quantity'] = 1;
			}
			$data['product_id'] = $product_id;
			$data['user_id'] = $this->user['users_id'];
			$data['created_at'] = date('Y-m-d H:i:s');
			$data['updated_at'] = date('Y-m-d H:i:s');
			
			$cart_data = $this->Common_model->get_singel('cart',array('product_id'=>$product_id));
			if(empty($cart_data)){
				$this->Common_model->insert('cart',$data);
			}
			redirect('order_cart');
		
	}
	
	function configuration()
	{
			$sql = "SELECT SUM(p.price*c.quantity) AS price FROM cart AS c JOIN wardrobe_products AS p ON c.product_id=p.id WHERE c.user_id=".$this->user['users_id']." ";
			$data['total_price'] = $this->db->query($sql)->row();
			$data['cart'] = $this->Common_model->get_all('cart',null,array('user_id'=>$this->user['users_id']));
			$data['user_address'] = $this->Common_model->get_singel('users',array('id'=>$this->user['users_id']));
			$data['wardrobe_type'] = $this->Common_model->get_all('wardrobe_type',null,null);
			$data['wardrobe_category'] = $this->Common_model->get_all('wardrobe_category',null,null);
			$data['wardrobe_subcategory'] = $this->Common_model->get_all('wardrobe_subcategory',null,null);
			
			$data['materials'] = $this->Common_model->get_all('sunmica_price','id DESC',array('type'=>'cabinet','img_type'=>'ABS'));

			$data['frame_data'] = $this->Common_model->get_all('frame','id DESC',null);

			$data['typea_data'] = $this->Common_model->get_all('type_a','id DESC',null);

			$data['typeb_data'] = $this->Common_model->get_all('type_b','id DESC',null);
			
			$this->load->view('admin/configuration',$data);
		
	}

	function config_cart(){
		$user =  $this->session->userdata('userdata');
		if(!empty($user))
		{
		$this->form_validation->set_rules('sub_cat_id', 'sub_cat_id', 'required');

		$this->form_validation->set_rules('width[]', 'Width', 'required');
		$this->form_validation->set_rules('height[]', 'Height', 'required');
		$this->form_validation->set_rules('depth[]', 'Depth', 'required');
		$this->form_validation->set_rules('pcs[]', 'PCS', 'required');
		$this->form_validation->set_rules('dtd_thickenss[]', 'dtd_thickenss', 'required');
		$this->form_validation->set_rules('dtd_material[]', 'dtd_material', 'required');
		$this->form_validation->set_rules('galss_thickness[]', 'galss_thickness', 'required');
		$this->form_validation->set_rules('galss_material[]', 'galss_material', 'required');
		$this->form_validation->set_rules('frame_id[]', 'frame_id', 'required');
		$this->form_validation->set_rules('typea_id[]', 'typea_id', 'required');
		$this->form_validation->set_rules('typeb_id[]', 'typeb_id', 'required');
		

		if ($this->form_validation->run() === FALSE) {
			redirect('configuration');
		} else {
			$sub_cat_id = $this->input->post('sub_cat_id');

			$width = $this->input->post('width');
			$height = $this->input->post('height');
			$depth = $this->input->post('depth');
			$pcs = $this->input->post('pcs');
			$typea_id = $this->input->post('typea_id');
			$typeb_id = $this->input->post('typeb_id');
			$frame_id = $this->input->post('frame_id');
			$galss_material = $this->input->post('galss_material');
			$galss_thickness = $this->input->post('galss_thickness');
			$dtd_material = $this->input->post('dtd_material');
			$dtd_thickenss = $this->input->post('dtd_thickenss');
			$exist = $this->input->post('exist');
			$exist_ids = $this->input->post('exist_ids');


			for ($i=0; $i < count($frame_id); $i++) { 
			   $products_detail['width']=$width[$i];
			   $products_detail['height']=$height[$i];
			   $products_detail['depth']=$depth[$i];

			   $products_detail['pcs']=$pcs[$i];
			   $products_detail['frame']=$frame_id[$i];

			   $products_detail['dtdt']=$dtd_thickenss[$i];
			   $products_detail['dtdm']=$dtd_material[$i];	
			  
			   $products_detail['glasst']=$galss_thickness[$i];
			   $products_detail['glassm']=$galss_material[$i];

			   $products_detail['typea']=$typea_id[$i];
			   $products_detail['typeb']=$typeb_id[$i];



			    $cartdata['sub_catid']=$sub_cat_id;
			    $cartdata['quantity']=1;
				$cartdata['product_details']=json_encode($products_detail);
				$cartdata['user_id']=$this->user['users_id'];
				$cartdata['created_at']=date('Y-m-d H:i:s');
				$cartdata['updated_at']=date('Y-m-d H:i:s');

				if($exist[$i]==1){
					$this->Common_model->update_data('cart',$cartdata,array('id'=>$exist_ids[$i]));
				}else{
				 $res = $this->Common_model->insert('cart',$cartdata);
				}


			}
			
			redirect('order_cart');
			
		}
	}else{
		redirect('user_login');
	}
		
	}

	function get_configure_cart(){
		
		   $subcid = $this->input->post('subcid');
		   $cartdata = $this->Common_model->get_all('cart',null,array('user_id'=>$this->user['users_id'],'sub_catid'=>$subcid));
		 
		   if(!empty($cartdata)){
		   	$data['materials'] = $this->Common_model->get_all('sunmica_price','id DESC',array('type'=>'cabinet','img_type'=>'ABS'));
			$data['frame_data'] = $this->Common_model->get_all('Frame','id DESC',null);
			$data['typea_data'] = $this->Common_model->get_all('type_A','id DESC',null);
			$data['typeb_data'] = $this->Common_model->get_all('type_B','id DESC',null);

		   	  $data['cartdata'] = $cartdata;
		      $data['config_html'] = $this->load->view('admin/configuration-html',$data,true);	
		      echo $data['config_html'];die;
		   }else{
		   	 echo 0;
		   }
		  
		
	}
	function delete_cart(){
		
		   $id = $this->input->post('id');
		   $cartdata = $this->Common_model->delete('cart',array('id'=>$id));
		 
		   if($cartdata){
		      echo 1;die;
		   }else{
		   	 echo 0;die;
		   }
	}

	function file_uploads($path,$name){
	
            $filename = time().'.'.pathinfo($_FILES[$name]["name"], PATHINFO_EXTENSION);

	        $config['upload_path']          = $path;
            $config['allowed_types']        = '*';
            
            $config['file_name']            = $filename;	

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload($name))
            {
               return false;
            }
            else
            {
               return $filename;
            }
	}

	function custom_order_place(){


		$filename='';
		if(!empty($_FILES['fileUpload']["name"])){
			$path = 'assests/admin-assets/images/custom_order/';
		    $filename = $this->file_uploads($path,'fileUpload');
		    $filename = $path.$filename;
		}

		$width = $this->input->post('width');
		$height = $this->input->post('height');
		$depth = $this->input->post('depth');

		$products_detail = json_encode(array('w'=>$width,'h'=>$height,'d'=>$depth,'fname'=>$filename));

		$odata['user_id'] = $this->user['users_id'];
		$odata['order_no'] = rand(10000,99999);
		$odata['delivery_date'] = $this->input->post('delivery_date');
		$odata['description'] = $this->input->post('description');
		$ddata['created_at']=$odata['created_at'] = date('Y-m-d H:i:s');
		$ddata['created_at']=$odata['created_at'] = date('Y-m-d H:i:s');

		$res = $this->Common_model->insert('order',$odata);
		if($res){
			$ddata['product_details'] = $products_detail;
			$ddata['order_id'] = $res;
			$this->Common_model->insert('order_detail',$ddata);
			echo $this->db->last_query();die;
		}

		redirect('my_orders');
		
	}

	function report_problem(){
		$filename='';
		if(!empty($_FILES['fileUpload']["name"])){
			$path = 'assests/admin-assets/images/report/';
		    $filename = $this->file_uploads($path,'fileUpload');
		    $filename = $path.$filename;
		}
		$odata['file'] = $filename;
		$odata['order_id'] = $this->input->post('order_id');
		$odata['problem_type'] = $this->input->post('problem_type');
		$odata['description'] = $this->input->post('description');
		$odata['title'] = $this->input->post('title');
		$odata['created_at'] = date('Y-m-d H:i:s');
		$res = $this->Common_model->insert('report_problem',$odata);
	    redirect('my_orders');
		
	}

	function order_place(){
		
		$crtdata = $this->Common_model->get_singel('cart',array('user_id'=>$this->user['users_id']));
		if(!empty($crtdata)){
			$order_data = $this->session->userdata('form_data');

			
			$data['user_id'] = $this->user['users_id'];
			$data['order_no'] = $this->input->post('order_no')?$this->input->post('order_no'):0;
			$data['transport_type'] = $order_data['transport_type']?$order_data['transport_type']:0;
			$data['delivery_date'] = $order_data['delivery_date']?$order_data['delivery_date']:NULL;
			$data['note'] = $order_data['note'];
			$data['created_at'] = date('Y-m-d H:i:s');
			$data['updated_at'] = date('Y-m-d H:i:s');

			
			$gtotal=0;
			$cart = $this->Common_model->get_all('cart',null,array('user_id'=>$this->user['users_id']));
			foreach($cart as $cart_data){
		       if($cart_data->product_id > 0){
                    $product_data = $this->Common_model->get_singel('wardrobe_products',array('id'=>$cart_data->product_id));
                    $gtotal = $gtotal + ($product_data->price - $product_data->discount_price);
                }
                else
                {
                    $product_details = json_decode($cart_data->product_details);
                    $frame_data = $this->Common_model->get_singel('frame',array('id'=>$product_details->frame));
                    $typea_data = $this->Common_model->get_singel('type_a',array('id'=>$product_details->typea));
                    $typeb_data = $this->Common_model->get_singel('type_b',array('id'=>$product_details->typeb));
                    $dtd_data = $this->Common_model->get_singel('sunmica_price',array('id'=>$product_details->dtdm));
                    $glass_data = $this->Common_model->get_singel('sunmica_price',array('id'=>$product_details->glassm));
                    $pprice = $frame_data->price + $typea_data->price + $typeb_data->price + $dtd_data->price + $glass_data->price;

                    $gtotal = $gtotal + $pprice;
                }
			}

			
			$data['total_price'] = number_format($gtotal, 2, '.', '');

			$res = $this->Common_model->insert('order',$data);

			if($res > 0){
				foreach($cart as $cart_data){
					
					if($cart_data->product_id > 0){
						$product_data = $this->Common_model->get_singel('wardrobe_products',array('id'=>$cart_data->product_id));
						$data1['product_id'] = $product_data->id;
						$data1['price'] = $product_data->price;
						$data1['discount'] = $product_data->price - $product_data->discount_price;
						$data1['quantity'] = $cart_data->quantity;
					}else{
						$product_details = json_decode($cart_data->product_details);
                        $frame_data = $this->Common_model->get_singel('frame',array('id'=>$product_details->frame));
                        $typea_data = $this->Common_model->get_singel('type_a',array('id'=>$product_details->typea));
                        $typeb_data = $this->Common_model->get_singel('type_b',array('id'=>$product_details->typeb));
                        $dtd_data = $this->Common_model->get_singel('sunmica_price',array('id'=>$product_details->dtdm));
                        $glass_data = $this->Common_model->get_singel('sunmica_price',array('id'=>$product_details->glassm));
                       
						$data1['price'] = $frame_data->price + $typea_data->price + $typeb_data->price + $dtd_data->price + $glass_data->price;
                        $data1['product_details'] = $cart_data->product_details;
                        $data1['sub_catid'] = $cart_data->sub_catid;
						
					}
					$data1['order_id'] = $res;
					
					$data1['created_at'] = date('Y-m-d H:i:s');
					$data1['updated_at'] = date('Y-m-d H:i:s');
					$this->Common_model->insert('order_detail',$data1);

				}

				$delete_cart_item = $this->Common_model->delete('cart',array('user_id'=>$this->user['users_id']));
			}
			$this->session->unset_userdata('form_data');
			redirect('my_orders');
			
		}else{
			redirect('order_details');
		}
		
	}
	
	function fitting()
	{
		$id = $this->uri->segment(2);
		$user =  $this->session->userdata('userdata');
		if(!empty($user))
		{
			$data['wardrobe_sub_subcategory'] = $this->Common_model->get_all('wardrobe_sub_subcategory',null,array('subcategory_id'=>$id));
			$this->load->view('admin/fitting',$data);
		}
	}

	function furniture()
	{
		$id = $this->uri->segment(2);
		
		$data['wardrobe_products'] = $this->Common_model->get_all('wardrobe_products',null,array('sub_subcategory_id'=>$id));
		$this->load->view('admin/furniture',$data);
		
	}

	function product_detail()
	{
		
        $id = $this->input->post('id');
        $data['product_detail'] = $this->Common_model->get_singel("wardrobe_products",array("id"=>$id));
		echo json_encode($data);
		
	}

	function my_orders()
	{
		
		$data['order_name'] = $this->Common_model->get_singel("users",array('id'=>$this->user['users_id']));
		$data['order_data'] = $this->Common_model->get_all("order",'id DESC',array('user_id'=>$this->user['users_id']));

		$data['draft_order'] = $this->Common_model->row_counts("order",array('order_status'=>1));
		$data['production_order'] = $this->Common_model->row_counts("order",array('order_status'=>2));
		$data['priced_order'] = $this->Common_model->row_counts("order",array('order_status'=>3));
		$data['complete_order'] = $this->Common_model->row_counts("order",array('order_status'=>4));
		

		$this->load->view('admin/my_orders',$data);
		
	}
	function filter_order()
	{
		$status = $this->input->post('status');
		$where=null;
		
		if($status[0] != 'all'){
			$status = implode(',',$status);
			$where = " order_status IN($status)";

			$min = $this->input->post('min');
			$max = $this->input->post('max');
			if($max > 0){
				$where .= " AND total_price >= $min AND total_price <= $max";
			}

			$sdate = $this->input->post('sdate');
			$edate = $this->input->post('edate');

			if(!empty($sdate) && !empty($edate)){
				$sdate1 = date('Y-m-d',strtotime($sdate));
				$edate1 = date('Y-m-d',strtotime($edate));

				$sdate = $sdate1;
				$edate = $edate1;
				if($sdate1 > $edate1){
					$sdate = $edate1;
					$edate = $sdate1;
				}
				$where .= " AND created_at >= '".$sdate." 00:00:01' AND created_at <= '".$edate." 23:23:59' ";
			}

		}

		$data['order_name'] = $this->Common_model->get_singel("users",array('id'=>$this->user['users_id']));
		$data['order_data'] = $this->Common_model->get_all("order",null,$where);
		
		echo $this->load->view('admin/order-render',$data,true);
	}
	function get_order_detail(){
		$id = $this->input->post('id');
		$data['order_data'] = $this->Common_model->get_singel("order",array('id'=>$id));
		$data['users_data'] = $this->Common_model->get_singel("users",array('id'=>$this->user['users_id']));
		$data['order_detail'] = $this->Common_model->get_all("order_detail",null,array('order_id'=>$id));
		
		$rdata['html'] = $this->load->view('admin/order-detail-render',$data,true);
		$rdata['order_num'] = $data['order_data']->order_no;

		echo json_encode($rdata);
	}
	function analytics()
	{
		$data['draft_order'] = $this->Common_model->row_counts("order",array('order_status'=>1));
		$data['production_order'] = $this->Common_model->row_counts("order",array('order_status'=>2));
		$data['priced_order'] = $this->Common_model->row_counts("order",array('order_status'=>3));
		$data['complete_order'] = $this->Common_model->row_counts("order",array('order_status'=>4));

		$data['order_name'] = $this->Common_model->get_singel("users",array('id'=>$this->user['users_id']));
		
		for($i=0;$i<7;$i++){
			$datecheck = date("Y-m-d", strtotime("-".$i." days"));
			$sum= $this->Common_model->sum_colom("order",'total_price',array('created_at >='=>$datecheck.' 00:00:01','created_at <='=>$datecheck.' 23:23:59'));
			
			$data['order_day_'.$i] = $sum->total_price?$sum->total_price:0;
		}

		$start = date("Y-m-d", strtotime("-6 days"));
		$end = date('Y-m-d');

		$where = ' created_at >= "'.$start.'" and created_at <= "'.$end.'" and user_id= '.$this->user["users_id"].' ';
		$data['recent_order'] = $this->Common_model->get_all("order",null,$where);
		
		$this->load->view('admin/analytics',$data);
	}
	function chk_old_password(){
		$udata = $this->Common_model->get_singel('users', array('id' =>$this->user["users_id"]));
		$old_password = md5($this->input->post('old_password'));
		if ($udata->password == $old_password) {
			echo json_encode(TRUE);
		} else {
			echo json_encode(FALSE); 
		}
	}
	function change_password()
    {
        $new_password = md5($this->input->post('new_password'));
		$res = $this->Common_model->update_data('users',array('password'=>$new_password),array('id'=>$this->user["users_id"]));
		if($res > 0)
		{
			redirect('settings');
		}
        
    }
	function order_cart() 
	{
		$sql = "SELECT SUM(p.price*c.quantity) AS price FROM cart AS c JOIN wardrobe_products AS p ON c.product_id=p.id WHERE c.user_id=".$this->user['users_id']." ";
		$data['total_price'] = $this->db->query($sql)->row();
		$data['cart'] = $this->Common_model->get_all('cart',null,array('user_id'=>$this->user['users_id']));
		$this->load->view('admin/order_cart',$data);
	}
	function update_product_qty(){
		$id = $this->input->post('id');
		$quantity = $this->input->post('quantity');
		$this->Common_model->update_data('cart',array('quantity'=>$quantity),array('id'=>$id));
	}
	public function order_details()
	{
		$this->load->view('admin/order_details');
	}
	public function message()
	{
		$this->load->view('admin/message');
	}
	public function documents()
	{
		$this->load->view('admin/documents');
	}
	public function contact()
	{
		$this->load->view('admin/contact');
	}
	public function sales_support()
	{
		$this->load->view('admin/sales_support');
	}
	public function refund()
	{
		$this->load->view('admin/refund');
	}
	public function settings()
	{
		$this->load->view('admin/settings');
	}
	public function forgot_psw()
	{
		$this->load->view('admin/forgot_psw');
	}
	public function reset()
	{
		$this->load->view('admin/reset');
	}
	public function product_details()
	{
		$id = $this->uri->segment(2);
		$data['wardrobe_products'] = $this->Common_model->get_singel('wardrobe_products',array('id'=>$id));
		$data['wardrobe_all_products'] = $this->Common_model->get_all('wardrobe_products',null,array('sub_subcategory_id'=>$data['wardrobe_products']->sub_subcategory_id));
		$this->load->view('admin/product_detail',$data);
	}

	// Dynamic delete function

	function delete_dynamic()
	{
		$user =  $this->session->userdata('admindata');
		if(!empty($user))
		{
			$id = $this->input->post('id');
			$table_name = $this->input->post('table_name');
			$column_name = $this->input->post('value');
			if(!empty($id) && !empty($table_name) && !empty($column_name))
			{
				$result = $this->Common_model->delete($table_name,array($column_name=>$id));
				if($result > 0)
				{
					echo "1";
				}
				else
				{
					echo "0";
				}
			}
			else
			{
				echo "Something Error";
			}
		}
	}
}
