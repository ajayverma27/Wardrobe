<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Wardrobe</title>
    <meta charset="utf-8" />
    <meta name="description" content="Wardrobe" />
    <meta name="keywords" content="Wardrobe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Wardrobe" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Wardrobe" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link href="<?=base_url()?>assets/admin-assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />


    <link href="<?=base_url()?>assests/admin-assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

    <link href="assests/admin-assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin-assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin-assets/css/admin.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin-assets/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin-assets/css/main.css" rel="stylesheet" type="text/css" />

	<style>
		.error{
			color:red;
		}
        .border-error{
            border: 1px red solid !important;
        }
	</style>
</head>
	<body id="kt_body" class="app-blank app-blank">
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
					    <img src="<?=base_url()?>assests/admin-assets/images/Logo_DENIR.png" class="logo_denir mb-7">
						<div class="w-lg-500px p-10 cstm_card">
							<?php $msg = $this->session->flashdata('msg'); ?> 
							<p style="color:red;"><?php echo $msg = $this->session->flashdata('msg'); ?></p>
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="post" data-kt-redirect-url="" action='<?php echo base_url('User_Login/user_login') ?>'>
								<div class="text-center mb-11">
									<h1 class="head_txt">Welcome back</h1>
									<div class="supporting_text">
									    Don’t have an account? 
								        <a href='<?php echo base_url('register') ?>' class="cstm_primary txt_underline">Sign up</a>
								    </div>
								</div>
								<div class="fv-row mb-8">
								    <label for="email" class="form-label">Email</label>
									<input type="text" placeholder="example@email.com" name="email" autocomplete="off" id="email" class="form-control bg-transparent error" />
								</div>
								<div class="fv-row mb-3">
								    <label for="password" class="form-label">Password</label>
									<input type="password" placeholder="Password" id="password" name="password" autocomplete="off" class="form-control bg-transparent" />
									<i class="fas fa-eye icon_img2"  style="display:none;"></i>
                                    <i class="fas fa-eye-slash icon_img2" id="eye"></i>
                                    <?php echo form_error('password'); ?>
								</div>
								<div class="d-grid mb-10">
									<button type="submit" name="submit" value='Sign In' id="kt_sign_in_submit" class="btn cstm_primary_btn btn-outline">
										<span class="indicator-label">Sign In</span>
										<span class="indicator-progress">Please wait... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<div class="d-flex justify-content-center flex-wrap gap-3 fs-base fw-semibold mb-8">
									<a href="#" class="supporting_text cstm_primary txt_underline">Forgot Password?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<script src="<?php echo base_url()?>assests/admin-assets//plugins/global/plugins.bundle.js"></script>
<script src="<?=base_url()?>assests/admin-assets/js/scripts.bundle.js"></script>
<!-- Validation JQuery Start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
<!-- Validation JQuery End -->
<script>
$(document).ready(function () {
    $("#kt_sign_in_form").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            },
        },
        messages: {
            email: {
                required: "Email is required",
                email: "Please Enter Valid Email",
            },
            password: {
                required: "password is required",
            },
        },
        highlight: function (element) {
            $(element).addClass("border-error");
        },
        unhighlight: function (element) {
            $(element).removeClass("border-error");
        },
    });
});
</script>

<script>
$(function(){
  
  	$('#eye').click(function(){
       
        if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#password').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#password').attr('type','password');
        }
    });
});
</script>
	</body>
</html>
