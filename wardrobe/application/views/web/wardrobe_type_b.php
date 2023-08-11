<?php include("include/header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="assets/css/built_in_cabinets.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="assets/css/preloader.css">

<!--<div id="page100">-->
<!--	<div class="loader"></div>-->
<!--</div>-->

<div class="container wide">
	<div class="row">
		<div class="col-md-12">
			<div class="form-outer wardrobe1">
				<form action="#">
				    <div class="page">
						<div class="row">
							<div class="col-md-9 mt-70">
								<div class="account-details-form">
									<!-- code -->
									<div class="row">
										<div class="col-md-3 d-flex flex-column justify-content-center">
											<div class="align-items-center d-flex">
												<label class="lbl_sides font-weight-bolder">Left height <br><small class="font-weight-bolder"></small></label>
												<input type="text" placeholder="" id="length_check_0" class="mx-1 para_lfh2 vyskaleft1 left_cuboid setInpWidth" maxlength="5" > <span class="font-weight-bolder text-dark"> mm </span>
											</div>
											<p class="text-danger font-weight-bolder" id="err-left" style="display:none;">Minimum: 600mm </p>
										</div>

										<div class="col-md-6 position-relative">
											<img src="assets/img_web/Parametre_type_b_1.png" class="img-fluid w-100 lazy" alt="">
											<!--<div class="depth1 form-inline">-->
												<!-- <label>Depth</label> -->
												
											<!--</div>-->
											<div class="row">
											    <div class="col-md-6">
											        <div class="text-center">
    													<label class="font-weight-bolder">Depth</label>
    													<input type="text" placeholder="" id="length_check_1" class="mx-1 para_depth2 hlbka1 depth_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
    												</div>
											        <p class="text-danger text-center font-weight-bolder" id="err-hlbka" style="display:none;">(Minimum: 300mm)</p>
											    </div>
											    <div class="col-md-6">
											        <div class="text-center">
    													<label class="font-weight-bolder">Width</label>
    													<input type="text" placeholder="" id="length_check_2" class="para_width2  sirka1 width_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
    												</div>
    												<p class="text-danger text-center font-weight-bolder" id="err-sirka" style="display:none;">Minimum: 800mm </p>
											    </div>
											</div>
											
										</div>

										<div class="col-md-3 d-flex flex-column justify-content-around">
										    <div class="align-items-center d-flex">
												<label class="lbl_sides font-weight-bolder">Pravá zadná výška<br><small class="font-weight-bolder"></small></label>
												<input type="text" placeholder="" id="length_check_3" class="para_rfh2 mx-1 vyskaRight1 height_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
											</div>
											<p class="text-danger font-weight-bolder" id="err-right" style="display:none;">Minimum: 600mm </p>
										    
											<div class="align-items-center d-flex">
												<label class="lbl_sides font-weight-bolder">The right height <br><small class="font-weight-bolder"></small></label>
												<input type="text" placeholder="" id="length_check_3" class="para_rfh2 mx-1 vyskaRight1 height_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
											</div>
											<p class="text-danger font-weight-bolder" id="err-right" style="display:none;">Minimum: 600mm </p>
										</div>

										<div class="col-md-1"></div>
										
										<div class="col-md-11">
											<h4 class="font-weight-bolder">Rozmery</h4>
											<div class="row tabDiv2 justify-content-center">
												<div class="col-md-4 py-1">
													<div class="row">
														<div class="col align-items-center d-flex">
															<label class="lbl_sides font-weight-bolder mb-0">Left <br><small class="font-weight-bolder cstmFont">height</small></label>
															<input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaleft2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
														</div>
														
														<div class="col align-items-center d-flex left_borde_111">
															<label class="lbl_sides font-weight-bolder mb-0">Right <br><small class="font-weight-bolder cstmFont">height</small></label>
															<input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaRight2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
														</div>
													</div>
												</div>
												<div class="col-md-3 bd_left_right py-1 px-0">
													<div class="text-center">
														<label class="font-weight-bolder mb-0">Width</label>
														<input type="text" placeholder="" id="" class="para_width2 setInpWidth sirka2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
													</div>
												</div>
												<div class="col-md-2 py-1 px-0">
													<div class="text-center">
														<label class="font-weight-bolder mb-0">Depth</label>
														<input type="text" placeholder="" id="" class="para_width2 setInpWidth hlbka2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
													</div>
												</div>
												<div class="col-md-3 py-1 left_borde_111">
													<div class="text-center">
														<label class="font-weight-bolder mb-0">Rear height</label>
														<input type="text" placeholder="" id="" class="para_width2 setInpWidth hlbka2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="tabDiv_right">
									<h4 class="font-weight-bolder">Rozmery</h4>
									<div class="row">
										<div class="col-md-6 d-flex justify-content-between">
											<label class="font-weight-bolder label-reduce-dark">Width&nbsp;</label>
											<input type="text" placeholder="" id="" class="para_width2 setInpWidth sirka1 h25" maxlength="3"> <span class="font-weight-bolder text-dark font12"> mm </span>
										</div>
										<div class="col-md-6 d-flex justify-content-between">
											<label class="lbl_sides font-weight-bolder label-reduce-dark">&nbsp;Left <br><small class="font-weight-bolder cstmFont">height</small></label>
											<input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaleft1 h25" maxlength="3"> <span class="font-weight-bolder text-dark font12"> mm </span>
										</div>

										<div class="col-md-6 d-flex justify-content-between">
											<label class="font-weight-bolder label-reduce-dark">Depth</label>
											<input type="text" placeholder="" id="" class="para_width2 setInpWidth hlbka1 h25" maxlength="3"> <span class="font-weight-bolder text-dark font12"> mm </span>
										</div>
										<div class="col-md-6 d-flex justify-content-between">
											<label class="lbl_sides font-weight-bolder label-reduce-dark">Right <br><small class="font-weight-bolder cstmFont">height</small></label>
											<input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaRight1 h25" maxlength="3"> <span class="font-weight-bolder text-dark font12"> mm </span>
										</div>
										<div class="col-md-6 d-flex justify-content-between">
											<label class="line_hi_hi font-weight-bolder label-reduce-dark mr-10">Right <br><small class="font-weight-bolder rear_font">Rear</small></label>
											<input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaRight1 h25" maxlength="3"> <span class="font-weight-bolder text-dark font12"> mm </span>
										</div>
									</div> 
									<div class="row">
										<div class="col-md-6">
											<h5 class="font-weight-bolder mt-3">Interiér skrine</h5>
											<p class="pb-50"></p>
										</div>
										<div class="col-md-6">
											<h5 class="font-weight-bolder mt-3">ABS</h5>
											<p class="pb-50"></p>
										</div>
										<div class="col-md-6">
											<h6 class="font-weight-bolder mt-3">Bočná stena - lišta</h6>
											<p class="pb-50"></p>
										</div>
										<div class="col-md-6">
											<h5 class="font-weight-bolder mt-3">Profil</h5>
											<p class="pb-50"></p>
										</div>
										<div class="col-md-6">
											<h5 class="font-weight-bolder mt-3">Výplne dvier</h5>
											<p class="pb-50"></p>
										</div>
									</div>
								</div>
								<div class="field btns justify-content-center align-items-center mx-auto">
    								<!-- <button class="prev-1 prev">Previous</button> -->
    								<button class="next-1 next btn-green" id="btn_second" disabled>Ďalej</button>
    							</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include("include/footer.php"); ?>
<!-- Wardobe JS -->
<script src="assets/js/wardrobe_js.js"></script>
<!-- slider js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>