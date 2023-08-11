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

    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/admin.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>

</head>
	<body id="kt_body" class="app-blank app-blank">
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
					    <img src="assets/images/Logo_DENIR.png" class="logo_denir mb-7">
						<div class="w-lg-500px p-10 cstm_card">
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="" action="#">
								<div class="text-center mb-11">
									<h1 class="head_txt">Get started</h1>
									<div class="supporting_text">
									    Already have an account? 
								        <a href="sign_in.php" class="cstm_primary txt_underline">Sign in</a>
								    </div>
								</div>
								
								<div class="mb-8">
								    <label for="Company" class="form-label">Company or Freelance name</label>
									<input type="text" placeholder="Type here" name="Company" autocomplete="off" id="Company" class="form-control bg-transparent" />
								</div>
								<div class="mb-8">
								    <label for="Identification" class="form-label">Identification Number</label>
									<input type="text" placeholder="Type here" name="Identification" autocomplete="off" id="Identification" class="form-control bg-transparent" />
								</div>
								<div class="mb-8">
								    <label for="Phone" class="form-label">Phone Number</label>
									<input type="text" placeholder="Type here" name="Phone" autocomplete="off" id="Phone" class="form-control bg-transparent" />
								</div>
								<div class="mb-8">
								    <label for="email" class="form-label">Email</label>
									<input type="text" placeholder="example@email.com" name="email" autocomplete="off" id="email" class="form-control bg-transparent" />
								</div>
								<div class="mb-8">
								    <label for="password" class="form-label">Password</label>
									<input type="password" placeholder="Password here" id="password" name="password" autocomplete="off" class="form-control bg-transparent" />
								</div>
								<div class="mb-8">
								    <label for="re-password" class="form-label">Re-Type password</label>
									<input type="password" placeholder="re-Type password here" id="re-password" name="password" autocomplete="off" class="form-control bg-transparent" />
								</div>
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submit" class="btn cstm_primary_btn btn-outline">
										<span class="indicator-label">Sign up</span>
										<span class="indicator-progress">Please wait... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<div class="d-flex justify-content-center flex-wrap gap-3 fs-base fw-semibold mb-8">
									<a href="javascript:void(0)" class="supporting_text cstm_neutral">By signing up, I agree to Denir <span class="txt_underline">Terms of Service</span> &
<span class="txt_underline">Privacy Policy</span>.</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="assets/js/custom/authentication/sign-in/general.js"></script>
	</body>
</html>