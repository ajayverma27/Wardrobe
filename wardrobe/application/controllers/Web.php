<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct()
	{
	    parent::__construct();
		$this->load->model('Common','common');
	}
      public function image_configurator()
    {
        $data['image_configurator'] = $this->common->get_all('sunmica_price',null,array('type'=>'cabinet','img_type'=>'interior'));
        $this->load->view('web/image_configurator',$data);
    }

	public function index()
	{
        $data['edge'] = $this->common->get_singel('dimensions',array('type'=>'edged_board'));
        $sunmica_price = $this->common->get_all('sunmica_price',null,array('type'=>'edged_board','img_type'=>'drevodekor'));
        $sunmicapricemodal = $this->common->get_all('sunmica_price',null,array('type'=>'edged_board','img_type'=>'drevodekor'));
        
        $sunmicapriceabs=array();
        
       
        $sunmicaprice=array();
        if($sunmica_price){
            $count=0;
            $arr=0;
            foreach($sunmica_price as $k=>$price){
               $div = $k % 2; 
               $sunmicaprice[$count][$arr]=$price;
               $arr++;
               if($div == 1){

                  $count++;
                  $arr=0;  
               }

           }
        }

        $data['sunmica_prices'] = $sunmicaprice;
        $data['sunmicapricemodal'] = $sunmicapricemodal;
		$this->load->view('web/Edged_board',$data);
	}

   
   public function edged_board()
   {
       $data['sunmicapricemodal'] = $this->common->get_all('sunmica_price',null,array('type'=>'edged_board','img_type'=>'drevodekor'));
       $data['edge'] = $this->common->get_singel('dimensions',array('type'=>'edged_board'));
      $this->load->view('web/edged_board_setting',$data);
   }
   public function configurator()
   {
      $data['edge'] = $this->common->get_singel('dimensions',array('type'=>'edged_board'));
      $this->load->view('web/configurator',$data);
   }
   
   public function wardrobe()
   {
      $data['edge_typea'] = $this->common->get_singel('dimensions',array('type'=>'wardrobe','wtype'=>'A'));
      $data['edge_typeb'] = $this->common->get_singel('dimensions',array('type'=>'wardrobe','wtype'=>'B'));
      $data['edge_typec'] = $this->common->get_singel('dimensions',array('type'=>'wardrobe','wtype'=>'C'));
      $data['edge_typed'] = $this->common->get_singel('dimensions',array('type'=>'wardrobe','wtype'=>'D'));


        $data['interior_data'] = $interior_data = $this->common->get_all('sunmica_price','id DESC',array('type'=>'wardrobe','img_type'=>'interior'));
        $abs_data = $this->common->get_all('sunmica_price',null,array('type'=>'wardrobe','img_type'=>'ABS'));
        $doorfiller_data = $this->common->get_all('door_fillers',null,null);
        
      
       
        $interiordata=array();
        if($interior_data){
            $count=0;
            $arr=0;
            foreach($interior_data as $k=>$price){
               $div = $k % 2; 
               $interiordata[$count][$arr]=$price;
               $arr++;
               if($div == 1){

                  $count++;
                  $arr=0;  
               }

           }
        }

        $absdata=array();
        if($interior_data){
            $count=0;
            $arr=0;
            foreach($interior_data as $k=>$price){
               $div = $k % 2; 
               $absdata[$count][$arr]=$price;
               $arr++;
               if($div == 1){

                  $count++;
                  $arr=0;  
               }

           }
        }
      $data['interior'] = $interiordata;
      $data['absdata'] = $absdata;
      $data['doorfiller_data'] = $doorfiller_data;
      $this->load->view('web/wardrobe-new',$data);
   }
   
   public function submit_form()
    {
        $data['name']=$this->input->post('name');
        $data['surname']=$this->input->post('surname');
        $data['phone']=$this->input->post('phone');
        $data['email']=$this->input->post('email');
        $data['address']=$this->input->post('address');
        $data['city']=$this->input->post('city');
        $data['zip']=$this->input->post('zip');
        $data['address1']=$this->input->post('address1');
        $data['city1']=$this->input->post('city1');
        $data['zip1']=$this->input->post('zip1');
        $data['subtotal']=$this->input->post('subtotal');

        $data['width']=$this->input->post('height');
        $data['depth']=$this->input->post('depth');
        $data['height']=$this->input->post('height');
        $data['door']=$this->input->post('door');
        $data['image']=$this->input->post('image');
        $data['door']=$this->input->post('door');
        // $data['door']=1;

        $html = $this->load->view('web/email_submit',$data,true);
        $fields = array(
            'emailto' => $data['email'],
            'sender_email' => "shrinksoftware@gmail.com",
            'sender_name' => "User",
            'subject' => "Share wardrobe",
            'body' => $html,
            'host' => "smtp.gmail.com",
            'port' => 587,
            'encryption_type' => "TLS",
            'username' => "shrinkcomaditya@gmail.com",
            'password' => "pntuykzaakeeizix",
        );
        $url = 'http://development81.shrinkcom.com/water-billing/smtp_mailsss/index.php';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USE_SSL, CURLUSESSL_ALL);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        $server_output = curl_exec($ch);
        if($server_output == 1){
            return $server_output;
        }else{
            return 2;
        }
    }
  

   public function send_mail()
    {
        
        //$html = $this->load->view('web/email_template','',true);
        $html = '<img width="300" src="'.base_url("assests/web_assets/img/web-logo.png").'" ><br><br><br>Pre otvorenie konfigurátora prosím kliknite na link: <br>'.base_url('web/configurator');
        $email = $_POST['email'];
        $fields = array(
            'emailto' => $email,
            'sender_email' => "shrinksoftware@gmail.com",
            'sender_name' => "User",
            'subject' => "Share Link of wardrobe",
            'body' =>  $html,
            'host' => "smtp.gmail.com",
            'port' => 587,
            'encryption_type' => "TLS",
            'username' => "shrinkcomaditya@gmail.com",
            'password' => "pntuykzaakeeizix",
        );
        $url = 'http://development81.shrinkcom.com/water-billing/smtp_mailsss/index.php';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USE_SSL, CURLUSESSL_ALL);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        $server_output = curl_exec($ch);
        if($server_output == 1){
            return $server_output;
        }else{
            return 2;
        }
    }

    public function submit_edge_board()
   {
       $msg='<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>Requirement send successfully!
        </div>';
      $this->session->set_flashdata('message', $msg);
    
       $data['url1']='assests/web_assets/img_web/tab10_img3.png';  
       $data['url2']='assests/web_assets/img_web/Vstavan_skriu1.png';   //Vstavaná_skriňa.jpg       
       $data['link1']='web/cabinet'; 
       $data['link2']='web/wardrobe'; 
       $data['reloadurl']='web';
       return $this->load->view('web/Edge_board_final',$data);
   }

    public function submit_cabinet()
   {
       $msg='<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>Requirement send successfully!
        </div>';
      $this->session->set_flashdata('message', $msg);
    
       $data['url1']='assests/web_assets/img_web/Ohranená_doska_orderplace.png';  
       $data['url2']='assests/web_assets/img_web/Vstavan_skriu1.png';  //Vstavaná_skriňa.jpg
       
       $data['link1']='web'; 
       $data['link2']='web/wardrobe'; 
       $data['reloadurl']='web/cabinet';
       return $this->load->view('web/Edge_board_final',$data);
   }
   
   public function submit_wardrobe()
   {
      $msg='<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>Requirement send successfully!
        </div>';
      $this->session->set_flashdata('message', $msg);
    
       $data['url1']='assests/web_assets/img_web/Ohranená_doska_orderplace.png';  
       $data['url2']='assests/web_assets/img_web/tab10_img3.png';  
       
       $data['link1']='web'; 
       $data['link2']='web/cabinet'; 
       $data['reloadurl']='web/wardrobe';
       return $this->load->view('web/Edge_board_final',$data);
   }


   public function cabinet(){

     $data['interior_data'] = $this->common->get_all('sunmica_price','id DESC',array('type'=>'cabinet','img_type'=>'interior'));
     $data['abs_data'] = $this->common->get_all('sunmica_price','id DESC',array('type'=>'cabinet','img_type'=>'ABS'));
     $data['doorfiller'] = $this->common->get_all('sunmica_price','id DESC',array('type'=>'cabinet','img_type'=>'doorfiller'));

      $data['cabinet_dimension'] = $this->common->get_singel('dimensions',array('type'=>'cabinet'));
      $this->load->view('web/cabinet-new',$data);
   }


}
