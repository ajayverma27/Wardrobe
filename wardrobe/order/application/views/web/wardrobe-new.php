 <?php include("include/header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="<?=base_url()?>assests/web_assets/css/built_in_cabinets.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="<?=base_url()?>assests/web_assets/css/preloader.css">

<div id="page100">
	<div class="loader"></div>
</div>

<div class="mb-md-90 mb-sm-90 pb-1">
<div class="container-fluid shadow_cstm pt-0 pb-2 v_hide V_hidden">
<div class="row">
	<div class="col-md-10">
		<h5 class="starting_text fw-bolder wizard-form-text">Vyberte si typ vstavanej skrine podľa pôdorysu <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i></h5>
		<div class="progress-bar">
			<div class="step-1">
				<div class="bullet bullet_first active">
					<span>Výber typu</span>
				</div>
			</div>

			<div class="step" style="width: 40%;">
				<div class="hov1 a1 bullet" >
					<span style="margin-left: 3.6rem;z-index: 9;" class="a1_dnone">Parametre</span>
					<span class="hov1 a1_show">Rozmery</span>
				</div>
			</div>
			<div class="step" style="width: 40%;">
				<div class="hov1 a1 bullet">
					<span class="hov1 a1_show a1_show2">Počet <br>priestorov</span>
				</div>
			</div>

			<div class="step" style="width: 40%;border-left: 1px solid white;">
				<div class="hov3 a3 bullet">
				    <span style="margin-left: 3.3rem;z-index: 9;" class="a3_dnone">Skladanie vnútra</span>
					<span class="hov3 a3_show">Skladanie<br> vnútra</span>
				</div>
			</div>
			<div class="step" style="width: 40%;">
				<div class="hov3 a3 bullet">
					<span class="hov3 a3_show a3_show2">Dekor<br> interiéru</span>
				</div>
			</div>


			<div class="step" style="width: 40%;border-left: 1px solid white;">
				<div class="hov4 a4 bullet">
				    <span style="margin-left: 3rem;z-index: 9;" class="a4_dnone">Výber dverí</span>
					<span class="hov4 a4_show">Typ dverí</span>
				</div>
			</div>
			<div class="step" style="width: 40%;">
				<div class="hov4 a4 bullet">
					<span class="hov4 a4_show a4_show2">Profil</span>
				</div>
			</div>

			<div class="step">
				<div class="bullet">
					<span>Výplň dverí</span>
				</div>
			</div>

			<div class="step" style="width: 40%;border-left: 1px solid white;">
				<div class="hov6 a6 bullet">
				    <span style="margin-left: 3.5rem;z-index: 9;" class="a6_dnone">Cena + objednávka</span>
					<span class="hov6 a6_show">Súhrn <br>objednávky</span>
				</div>
			</div>
			<div class="step" style="width: 40%;">
				<div class="hov6 a6 bullet bullet_six">
					<span class="hov6 a6_show a6_show6">Dodacie <br>údaje</span>
				</div>
			</div>
			<div class="step d-none">
				<div class="bullet">
					<span>new</span>
				</div>
				<div class="check fas fa-check"></div>
			</div>
			<div class="step d-none">
				<div class="bullet">
					<span>new</span>
				</div>
				<div class="check fas fa-check"></div>
			</div>
			<div class="step d-none">
				<div class="bullet">
					<span>new</span>
				</div>
				<div class="check fas fa-check"></div>
			</div>
            <div class="step d-none">
				<div class="bullet">
					<span>new</span>
				</div>
				<div class="check fas fa-check"></div>
			</div>
		</div>
	</div>
	<div class="col-md-2 modal_btnns">
		<button type="button" class="align-items-center btn btn-danger btn_chngg d-flex font14 justify-content-around mb-10 tab9_btn mt-1" data-toggle="modal" data-target="#modal_num2"><img class="lazy tab1_imgg" src="<?=base_url()?>assests/web_assets/img_web/save_btn.png" alt=""> Uložiť konfiguráciu</button>
		<button type="button" class="bg-white btn btn-danger font-weight-bolder tab9_btn text-danger font14 btn_chngg tabBtn" data-toggle="modal" data-target="#modal_num1"><img class="lazy tab1_imgg" src="<?=base_url()?>assests/web_assets/img_web/share_btn.png" alt=""> Zdieľať</button> 

	</div>
</div>
</div>
<div class="container wide product-category-container ">
<div class="row">
	<div class="col-md-12">
		<div class="form-outer wardrobe1">
			<form action="#">
				<!-- tab 1 -->
<div class="page slide-page">
	<!-- <div class="title">Floor Plan</div> -->
	<div class="row mt-2">
		<div class="col-md-12 col-lg-12">
			<a href="configurator" class="btn btn-basic Späť_btn mt-25"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
		</div>
		<div class="col-md-6 grid_center">
			<img src="<?=base_url()?>assests/web_assets/img_web/Vstavaná_skriňa2.jpg" alt="" class="lazy mob_h200">
		</div>
		
		<input type="hidden" id="max-height">
		<input type="hidden" id="max-width">
		<input type="hidden" id="max-depth">
		<input type="hidden" id="radio-img-count">
		<input type="hidden" id="wardrobe-type-id">
		
		<div class="col-md-6 mobile-tab1">
			<div class="radio-with-Icon floorPlan1">
				<p class="radioOption-Item">
					<input type="radio" name="floor_plan" id="planfloor1" value="true" class="next-1 next ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false" style="" data-img-src="<?=base_url()?>assests/web_assets/img_web/Typ_A_Podorys.jpg">
					<label for="planfloor1">
						<img data-wcls="type-a-sidebar" data-wtype="wtype-A" data-dimension="<?=$edge_typea['length'].'-'.$edge_typea['width'].'-'.$edge_typea['depth']?>" src="<?=base_url()?>assests/web_assets/img_web/Typ_A_Podorys.jpg" alt="" class="lazy calculate-hwd">
					</label>
				</p>

				<p class="radioOption-Item">
					<input type="radio" name="floor_plan" id="planfloor2" value="true" class="next-1 next ng-valid ng-dirty ng-touched ng-empty " aria-invalid="false" style="" data-img-src="<?=base_url()?>assests/web_assets/img_web/Typ_B_Podorys.jpg">
					<label for="planfloor2">
						<img data-wcls="type-b-sidebar" data-wtype="wtype-B" data-dimension="<?=$edge_typeb['length'].'-'.$edge_typeb['width'].'-'.$edge_typeb['depth']?>" src="<?=base_url()?>assests/web_assets/img_web/Typ_B_Podorys.jpg" alt="" class="lazy calculate-hwd">
					</label>
				</p>
                <br>

				<p class="radioOption-Item">
					<input type="radio" name="floor_plan" id="planfloor3" value="false" class="next-1 next ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false" style="" data-img-src="<?=base_url()?>assests/web_assets/img_web/Typ_C_Podorys.jpg">
					<label for="planfloor3">
						<img data-wcls="type-c-sidebar" data-wtype="wtype-C" data-dimension="<?=$edge_typec['length'].'-'.$edge_typec['width'].'-'.$edge_typec['depth']?>" src="<?=base_url()?>assests/web_assets/img_web/Typ_C_Podorys.jpg" alt="" class="lazy calculate-hwd">
					</label>
				</p>
				<p class="radioOption-Item">
					<input type="radio" name="floor_plan" id="planfloor4" value="false" class="next-1 next ng-valid ng-dirty ng-touched ng-empty " aria-invalid="false" style="" data-img-src="<?=base_url()?>assests/web_assets/img_web/Typ_D_Podorys.jpg">
					<label for="planfloor4">
						<img data-wcls="type-d-sidebar" data-wtype="wtype-D" data-dimension="<?=$edge_typed['length'].'-'.$edge_typed['width'].'-'.$edge_typed['depth']?>" src="<?=base_url()?>assests/web_assets/img_web/Typ_D_Podorys.jpg" alt="" class="lazy calculate-hwd">
					</label>
				</p>
			</div>
			<a href="<?=base_url()?>web/image_configurator" class="hrefLink-Item mt-3">
					<img src="<?=base_url()?>assests/web_assets/img_web/ATYP_Konfigurácia_podľa_obrázka.jpg" class="link_imgg lazy" alt="">
				</a>
		</div>
		
	</div>

</div>


<!-- tab 2 -->

<div class="page">
	<div class="row">
		<div class="col-md-9">
            <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev" id="parameter_tab_two"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
			<div class="account-details-form">
				
				<div class="row type-abcd-sidebar type-a-sidebar wtype-A-cls" style="display: none;">
					<div class="col-md-3 d-flex flex-column justify-content-center">
						<div class="align-items-center d-flex">
							<label class="lbl_sides font-weight-bolder">Výška <br><small class="font-weight-bolder cstmFont">ľavá predná</small></label>
							<input type="text" placeholder="" id="length_check_0" class="mx-1 para_lfh2 vyskaleft1 left_cuboid setInpWidth min-1 each-height" maxlength="5" > <span class="font-weight-bolder text-dark"> mm </span>
						</div>
						<p class="text-danger font-weight-bolder err-left" id="" style="display:none;">Minimum: 600mm </p>
					</div>

					<div class="col-md-6 position-relative findImg">
						<img src="<?=base_url()?>assests/web_assets/img_web/Parametre.png" class="img-fluid w-100 lazy" alt="" data-left-img="<?=base_url()?>assests/web_assets/img_web/Parametre.png">
						<div class="row">
						    <div class="col-md-6">
						        <div class="text-center">
									<label class="font-weight-bolder">Hĺbka</label>
									<input type="text" placeholder="" id="length_check_1" class="mx-1 para_depth2 hlbka1 depth_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
								</div>
						        <p class="text-danger text-center font-weight-bolder err-hlbka" id="" style="display:none;">Hĺbka(Minimum: 300mm)</p>
						    </div>
						    <div class="col-md-6">
						        <div class="text-center">
									<label class="font-weight-bolder">Šírka</label>
									<input type="text" placeholder="" id="length_check_2" class="para_width2  sirka1 width_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
								</div>
								<p class="text-danger text-center font-weight-bolder err-sirka" id="" style="display:none;">Minimum: 800mm </p>
						    </div>
						</div>
						
					</div>

					<div class="col-md-3 d-flex flex-column justify-content-center">
						<div class="align-items-center d-flex">
							<label class="lbl_sides font-weight-bolder">Výška <br><small class="font-weight-bolder cstmFont">pravá predná</small></label>
							<input type="text" placeholder="" id="length_check_3" class="para_rfh2 mx-1 vyskaRight1 height_cuboid setInpWidth min-2 each-height" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
						</div>
						<p class="text-danger font-weight-bolder err-right" id="" style="display:none;">Minimum: 600mm </p>
					</div>

					<div class="col-md-1"></div>
					
					<div class="col-md-10">
						<h4 class="font-weight-bolder">Rozmery</h4>
						<div class="row tabDiv2">
							<div class="col-md-6 py-1">
								<div class="row">
									<div class="col align-items-center d-flex">
										<label class="lbl_sides font-weight-bolder mb-0">Výška:<br><small class="font-weight-bolder tab_2_lable">ľavá predná</small></label>
										<input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaleft2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
									</div>
									<div class="col align-items-center d-flex">
										<label class="lbl_sides font-weight-bolder mb-0">Výška: <br><small class="font-weight-bolder tab_2_lable">pravá predná</small></label>
										<input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaRight2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
									</div>
								</div>
							</div>
							<div class="col-md-3 bd_left_right py-1">
								<div class="text-center">
									<label class="font-weight-bolder mb-0">Šírka:</label>
									<input type="text" placeholder="" id="" class="para_width2 setInpWidth sirka2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
								</div>
							</div>
							<div class="col-md-3 py-1">
								<div class="text-center">
									<label class="font-weight-bolder mb-0">Hĺbka:</label>
									<input type="text" placeholder="" id="" class="para_width2 setInpWidth hlbka2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
								</div>
							</div>
						</div>
					</div>
				</div>

			
            
            
            	<!-- type b start -->
				<div class="row type-abcd-sidebar type-b-sidebar wtype-B-cls" >
					<div class="col-md-3 d-flex flex-column justify-content-center">
						<div class="align-items-center d-flex">
							<label class="lbl_sides font-weight-bolder"> Ľavá výška<br><small class="font-weight-bolder"></small></label>
							<input type="text" placeholder="" id="length_check_0" class="mx-1 para_lfh2 vyskaleft2 left_cuboid setInpWidth min-1 each-height" maxlength="5" > <span class="font-weight-bolder text-dark"> mm </span>
						</div>
						<p class="text-danger font-weight-bolder err-left" id="" style="display:none;">Minimum: 600mm </p>
					</div>

					<div class="col-md-6 position-relative">
						<img src="<?=base_url()?>assests/web_assets/img_web/Parametre_type_b_1.png" class="img-fluid w-100 lazy" alt="">
						<div class="row">
						    <div class="col-md-6">
						        <div class="text-center">
									<label class="font-weight-bolder">Hĺbka</label>
									<input type="text" placeholder="" id="length_check_1" class="mx-1 para_depth2 hlbka1 depth_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
								</div>
						        <p class="text-danger text-center font-weight-bolder err-hlbka" id="" style="display:none;">(Minimum: 300mm)</p>
						    </div>
						    <div class="col-md-6">
						        <div class="text-center">
									<label class="font-weight-bolder">Šírka</label>
									<input type="text" placeholder="" id="length_check_2" class="para_width2  sirka1 width_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
								</div>
								<p class="text-danger text-center font-weight-bolder err-sirka" id="" style="display:none;">Minimum: 800mm </p>
						    </div>
						</div>
						
					</div>

					<div class="col-md-3 d-flex flex-column justify-content-around">
					    <div class="align-items-center d-flex">
							<label class="lbl_sides font-weight-bolder">Pravá zadná výška<br><small class="font-weight-bolder"></small></label>
							<input type="text" placeholder="" id="length_check_4" class="para_rfh2 mx-1 vyskaRight3 height_cuboid setInpWidth min-2 each-height" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
						</div>
						<p class="text-danger font-weight-bolder err-right err-right-1" id="" style="display:none;">Minimum: 600mm </p>
					    
						<div class="align-items-center d-flex">
							<label class="lbl_sides font-weight-bolder"> Pravá predná výška <br><small class="font-weight-bolder"></small></label>
							<input type="text" placeholder="" id="length_check_3" class="para_rfh2 mx-1 vyskaRight1 height_cuboid setInpWidth min-3 each-height" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
						</div> 
						<p class="text-danger font-weight-bolder err-right" id="" style="display:none;">Minimum: 600mm </p>
					</div>

					<div class="col-md-1"></div>
					
					<div class="col-md-11">
						<h4 class="font-weight-bolder">Rozmery</h4>
						<div class="row tabDiv2 justify-content-center">
                            <div class="col-12 col-lg align-items-center d-flex justify-content-center">
                                <label class="lbl_sides font-weight-bolder mb-0">Ľavá:  <br>
                                    <small class="font-weight-bolder cstmFont">výška</small>
                                </label>
                                <input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaleft2" maxlength="5"> 
                                <span class="font-weight-bolder text-dark"> mm </span>
                            </div>
                            
                            <div class="col-12 col-lg align-items-center d-flex left_borde_111 justify-content-center">
                                <label class="lbl_sides font-weight-bolder mb-0">Pravá: <br>
                                    <small class="font-weight-bolder cstmFont">predná výška</small>
                                </label>
                                <input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaRight2" maxlength="5"> 
                                <span class="font-weight-bolder text-dark"> mm </span>
                            </div>
							<div class="col-12 col-lg bd_left_right py-1 px-0">
								<div class="text-center">
									<label class="font-weight-bolder mb-0">Šírka:</label>
									<input type="text" placeholder="" id="" class="para_width2 setInpWidth sirka2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
								</div>
							</div>
							<div class="col-12 col-lg py-1 px-0">
								<div class="text-center">
									<label class="font-weight-bolder mb-0">Hĺbka:</label>
									<input type="text" placeholder="" id="" class="para_width2 setInpWidth hlbka2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
								</div>
							</div>
							<div class="col-12 col-lg py-1 left_borde_111">
								<div class="align-items-center d-flex justify-content-center text-center">
									<!-- <label class="font-weight-bolder mb-0">zadná výška</label> -->
                                    <label class="lbl_sides font-weight-bolder mb-0">Pravá:  <br><small class="font-weight-bolder cstmFont">zadná výška&nbsp;</small></label>
									<input type="text" placeholder="" id="" class="para_width2 setInpWidth vyskaRight3" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- type b end -->



			
            
            
            	<!-- type c start -->
        <div class="row type-abcd-sidebar type-c-sidebar wtype-C-cls">
		<div class="col-md-3 d-flex flex-column justify-content-around">
		    <div class="align-items-center d-flex">
				<label class="lbl_sides font-weight-bolder">Ľavá zadná výška<br><small class="font-weight-bolder"></small></label>
				<input type="text" placeholder="" id="length_check_4" class="para_rfh2 mx-1 vyskaleft3 height_cuboid setInpWidth min-1 each-height" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
			</div>
			<p class="text-danger font-weight-bolder err-right err-left-1" id="" style="display:none;">Minimum: 600mm </p>
		    
			<div class="align-items-center d-flex">
				<label class="lbl_sides font-weight-bolder">Ľavá výška <br><small class="font-weight-bolder"></small></label>
				<input type="text" placeholder="" id="length_check_0" class="mx-1 para_lfh2 vyskaleft1 left_cuboid setInpWidth min-2 each-height" maxlength="5" > <span class="font-weight-bolder text-dark"> mm </span>
			</div>
			<p class="text-danger font-weight-bolder err-left" id="" style="display:none;">Minimum: 600mm </p>
		</div>

		<div class="col-md-6 position-relative">
			<img src="<?=base_url()?>assests/web_assets/img_web/Parametre_type_c_1.png" class="img-fluid w-100 lazy" alt="">
		
			<div class="row">
			    <div class="col-md-6">
			        <div class="text-center">
						<label class="font-weight-bolder">Hĺbka</label>
						<input type="text" placeholder="" id="length_check_1" class="mx-1 para_depth2 hlbka1 depth_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
			        <p class="text-danger text-center font-weight-bolder err-hlbka" id="" style="display:none;">(Minimum: 300mm)</p>
			    </div>
			    <div class="col-md-6">
			        <div class="text-center">
						<label class="font-weight-bolder">Šírka</label>
						<input type="text" placeholder="" id="length_check_2" class="para_width2  sirka1 width_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
					<p class="text-danger text-center font-weight-bolder err-sirka" id="" style="display:none;">Minimum: 800mm </p>
			    </div>
			</div>
			
		</div>

		<div class="col-md-3 d-flex flex-column justify-content-center">
		    
			<div class="align-items-center d-flex">
				<label class="lbl_sides font-weight-bolder"> Pravá výška<br><small class="font-weight-bolder"></small></label>
				<input type="text" placeholder="" id="length_check_3" class="para_rfh2 mx-1 vyskaRight1 height_cuboid setInpWidth min-3 each-height" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
			</div>
			<p class="text-danger font-weight-bolder err-right" id="" style="display:none;">Maximum: 600mm </p>
		</div>

		<div class="col-md-1"></div>
		
		<div class="col-md-11">
			<h4 class="font-weight-bolder">Rozmery</h4>
			<div class="row tabDiv2">
			
				<div class="col-12 col-lg py-1">
				    <div class="align-items-center d-flex">
						<label class="lbl_sides font-weight-bolder mb-0">Ľavá:&nbsp;<br><small class="font-weight-bolder cstmFont">výška&nbsp;</small></label>
						<input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaleft2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
				</div>
				<div class="col-12 col-lg py-1 bd_left_right">
				    <div class="align-items-center d-flex">
					    <label class="lbl_sides font-weight-bolder mb-0">Pravá:&nbsp;<br><small class="font-weight-bolder cstmFont">výška&nbsp;</small></label>
						<input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaRight2" maxlength="5"><span class="font-weight-bolder text-dark"> mm </span>
					</div>
				</div>
				<div class="col-12 col-lg bd_left_right py-1">
					<div class="text-center">
						<label class="font-weight-bolder mb-0">Šírka:</label>
						<input type="text" placeholder="" id="" class="para_width2 setInpWidth sirka2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
				</div>
				<div class="col-12 col-lg py-1 bd_left_right">
					<div class="text-center">
						<label class="font-weight-bolder mb-0">Hĺbka:</label>
						<input type="text" placeholder="" id="" class="para_width2 setInpWidth hlbka2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
				</div>
				<div class="col-12 col-lg py-1">
					<div class="align-items-center d-flex justify-content-center text-center">
						<!-- <label class="font-weight-bolder mb-0">zadná výška</label> -->
                        <label class="lbl_sides font-weight-bolder mb-0">Ľavá:&nbsp;<br><small class="font-weight-bolder cstmFont">zadná výška&nbsp;</small></label>
						<input type="text" placeholder="" id="" class="para_width2 setInpWidth vyskaleft3 hlbka3" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- type c end -->
    
    
    
    
    <!-- type d start -->
       <div class="row type-abcd-sidebar type-d-sidebar wtype-D-cls">
		<div class="col-md-3 d-flex flex-column justify-content-around">
		    <div class="align-items-center d-flex">
				<label class="lbl_sides font-weight-bolder">Ľavá zadná výška<br><small class="font-weight-bolder"></small></label>
				<input type="text" placeholder="" id="length_check_4" class="para_rfh2 mx-1 vyskaleft3 height_cuboid setInpWidth min-1 each-height" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
			</div>
			<p class="text-danger font-weight-bolder err-right err-left-1" id="" style="display:none;">Minimum: 600mm </p>
		    
			<div class="align-items-center d-flex">
				<label class="lbl_sides font-weight-bolder">Ľavá výška <br><small class="font-weight-bolder"></small></label>
				<input type="text" placeholder="" id="length_check_0" class="mx-1 para_lfh2 vyskaleft1 left_cuboid setInpWidth min-2 each-height" maxlength="5" > <span class="font-weight-bolder text-dark"> mm </span>
			</div>
			<p class="text-danger font-weight-bolder err-left" id="" style="display:none;">Minimum: 600mm </p>
		</div>

		<div class="col-md-6 position-relative">
			<img src="<?=base_url()?>assests/web_assets/img_web/Parametre_type_d_1.png" class="img-fluid w-100 lazy" alt="">
			<!--<div class="depth1 form-inline">-->
				<!-- <label>Depth</label> -->
				
			<!--</div>-->
			<div class="row">
			    <div class="col-md-6">
			        <div class="text-center">
						<label class="font-weight-bolder">Hĺbka</label>
						<input type="text" placeholder="" id="length_check_1" class="mx-1 para_depth2 hlbka1 depth_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
			        <p class="text-danger text-center font-weight-bolder err-hlbka" id="" style="display:none;">(Minimum: 300mm)</p>
			    </div>
			    <div class="col-md-6">
			        <div class="text-center">
						<label class="font-weight-bolder">Šírka</label>
						<input type="text" placeholder="" id="length_check_2" class="para_width2  sirka1 width_cuboid setInpWidth" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
					<p class="text-danger text-center font-weight-bolder err-sirka" id="" style="display:none;">Minimum: 800mm </p>
			    </div>
			</div>
			
		</div>

		<div class="col-md-3 d-flex flex-column justify-content-around">
		    <div class="align-items-center d-flex">
				<label class="lbl_sides font-weight-bolder">Pravá zadná výška<br><small class="font-weight-bolder"></small></label>
				<input type="text" placeholder="" id="length_check_5" class="para_rfh2 mx-1 vyskaRight3 height_cuboid setInpWidth min-3 each-height" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
			</div>
		    
			<div class="align-items-center d-flex">
				<label class="lbl_sides font-weight-bolder">Pravá výška<br><small class="font-weight-bolder"></small></label>
				<input type="text" placeholder="" id="length_check_3" class="para_rfh2 mx-1 vyskaRight1 height_cuboid setInpWidth min-4 each-height" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
			</div>
			<p class="text-danger font-weight-bolder err-right" id="" style="display:none;">Minimum: 600mm </p>
		</div>

		<div class="col-md-1"></div>
		
		<div class="col-md-12">
			<h4 class="font-weight-bolder">Rozmery</h4>
			<div class="row tabDiv2">
				<div class="col-12 col-lg align-items-center d-flex">
                    <label class="lbl_sides font-weight-bolder mb-0">Ľavá:  <br><small class="font-weight-bolder cstmFont">výška</small></label>
                    <input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaleft1" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
                </div>
                <div class="col-12 col-lg align-items-center d-flex left_borde_111">
                    <label class="lbl_sides font-weight-bolder mb-0">Pravá: <br><small class="font-weight-bolder cstmFont">výška</small></label>
                    <input type="text" placeholder="" id="" class="mx-1 para_lfh2 setInpWidth vyskaRight1" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
                </div>
				<div class="col-12 col-lg bd_left_right py-1 px-0">
					<div class="text-center">
						<label class="font-weight-bolder mb-0">Šírka:</label>
						<input type="text" placeholder="" id="" class="para_width2 setInpWidth sirka2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
				</div>
				<div class="col-12 col-lg py-1 px-0">
					<div class="text-center">
						<label class="font-weight-bolder mb-0">Hĺbka:</label>
						<input type="text" placeholder="" id="" class="para_width2 setInpWidth hlbka2" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
				</div>
				<div class="col-12 col-lg py-1 px-0 left_borde_111">
					<div class="align-items-center d-flex justify-content-center text-center">
						<!-- <label class="font-weight-bolder mb-0">Ľavá zadná </label> -->
                        <label class="lbl_sides font-weight-bolder mb-0">Ľavá:  <br><small class="font-weight-bolder cstmFont">zadná výška</small></label>
						<input type="text" placeholder="" id="" class="para_width2 setInpWidth vyskaleft3  hlbka3" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
				</div>
				<div class="col-12 col-lg py-1 px-0 left_borde_111">
					<div class="align-items-center d-flex justify-content-center text-center">
						<!-- <label class="font-weight-bolder mb-0"> Pravá zadná</label> -->
                        <label class="lbl_sides font-weight-bolder mb-0">Pravá:  <br><small class="font-weight-bolder cstmFont">zadná výška</small></label>
						<input type="text" placeholder="" id="" class="para_width2 setInpWidth vyskaRight3 hlbka3" maxlength="5"> <span class="font-weight-bolder text-dark"> mm </span>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- type d end -->



			</div>
		</div>
		<div class="col-lg-3">
			<span class="type-abcd-sidebar type-a-sidebar" style="display: none;">
			   <?php include("include/wardrobe_sidebar1.php"); ?>
            </span> 
			<!-- type b sidebar -->
			<span class="type-abcd-sidebar type-b-sidebar" >
				<?php include("include/wardrobe_sidebar_type_b.php"); ?>
			</span>

			<span class="type-abcd-sidebar type-c-sidebar" >
				<?php include("include/wardrobe_sidebar_type_c.php"); ?>
			</span>

			<span class="type-abcd-sidebar type-d-sidebar" >
				<?php include("include/wardrobe_sidebar_type_d.php"); ?>
			</span>


			<div class="field btns justify-content-center align-items-center mx-auto">
				<!-- <button class="prev-1 prev">Previous</button> -->
				<button class="next-1 next btn-green" id="btn_second" disabled>Ďalej</button>
			</div>
		</div>
	</div>

</div>



<!-- tab 3 -->

<div class="page">
	<div class="row">
		<div class="col-md-9">
            <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev" id="disableNone"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
			<div class="account-details-form">
                
				<div class="row">
					<div class="col-md-3 d-flex flex-column justify-content-center">
						
					</div>
					<div class="col-md-6">
						<table class="grid_center td400 cuboid-rt cuboid" id="table_1">
							<tbody>
								<tr>
									<td>
									
										<div class="cust_width_cuboid" style="display: grid;place-items: center;">
											<p class="added_sirka_value"></p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>

						<table class="grid_center td400 cuboid-rt cuboid" id="table_2" style="display: none;">
							<tbody>
								<tr>
									<td>
										<div class="cust_width_cuboid" style="display: grid;place-items: center;">
											<p class="added_sirka_value"></p>
										</div>
									</td>
									<td>
										<div class="cust_width_cuboid" style="display: grid;place-items: center;">
											<p class="added_sirka_value"></p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>

						<table class="grid_center td400 cuboid-rt cuboid" id="table_3" style="display: none;">
							<tbody>
								<tr>
									<td>
										<div class="cust_width_cuboid" style="display: grid;place-items: center;">
											<p class="added_sirka_value"></p>
										</div>
									</td>
									<td>
										<div class="cust_width_cuboid" style="display: grid;place-items: center;">
											<p class="added_sirka_value"></p>
										</div>
									</td>
									<td>
										<div class="cust_width_cuboid" style="display: grid;place-items: center;">
											<p class="added_sirka_value"></p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>

	<table class="grid_center td400 cuboid-rt cuboid" id="table_4" style="display: none;">
		<tbody>
			<tr>
				<td>
					<div class="cust_width_cuboid" style="display: grid;place-items: center;">
						<p class="added_sirka_value"></p>
					</div>
				</td>
				<td>
					<div class="cust_width_cuboid" style="display: grid;place-items: center;">
						<p class="added_sirka_value"></p>
					</div>
				</td>
				<td>
					<div class="cust_width_cuboid" style="display: grid;place-items: center;">
						<p class="added_sirka_value"></p>
					</div>
				</td>
				<td>
					<div class="cust_width_cuboid" style="display: grid;place-items: center;">
						<p class="added_sirka_value"></p>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
						
		<table class="grid_center td400 cuboid-rt cuboid" id="table_5" style="display: none;">
			<tbody>
				<tr>
					<td>
						<div class="cust_width_cuboid" style="display: grid;place-items: center;">
							<p class="added_sirka_value"></p>
						</div>
					</td>
					<td>
						<div class="cust_width_cuboid" style="display: grid;place-items: center;">
							<p class="added_sirka_value"></p>
						</div>
					</td>
					<td>
						<div class="cust_width_cuboid" style="display: grid;place-items: center;">
							<p class="added_sirka_value"></p>
						</div>
					</td>
					<td>
						<div class="cust_width_cuboid" style="display: grid;place-items: center;">
							<p class="added_sirka_value"></p>
						</div>
					</td>
					<td>
						<div class="cust_width_cuboid" style="display: grid;place-items: center;">
							<p class="added_sirka_value"></p>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
					</div>
					<div class="col-md-3 d-flex flex-column justify-content-center">
						
					</div>
					<div class="col-md-1"></div>
					
                    <!-- checnges -->
	<div class="col-md-10">
		<h4 class="font-weight-bolder pocet_heading">Počet priestorov</h4>
		<div class="row tabDiv2">
			<div class="col-md-12 p-0">
				<div class="radio_container pocet-priestorov">
					 <input type="radio" name="radio_img" id="one_priestorov" value="imge_1" checked>
					<label for="one_priestorov" class="col lbl_sides font-weight-bolder mb-0 px-1">1 časť &nbsp;<small class="font14">135 mm</small></label> 

					 <input type="radio" name="radio_img" id="two_one_priestorov" value="imge_2">
					<label for="two_one_priestorov" class="col lbl_sides font-weight-bolder mb-0 px-1">2 častí &nbsp;<small class="font14">135 mm</small></label>

					<input type="radio" name="radio_img" id="three_priestorov" value="imge_3">
					<label for="three_priestorov" class="col lbl_sides font-weight-bolder mb-0 px-1">3 častí &nbsp;<small class="font14">135 mm</small></label>

					<input type="radio" name="radio_img" id="four_priestorov" value="imge_4">
					<label for="four_priestorov" class="col lbl_sides font-weight-bolder mb-0 px-1">4 častí &nbsp;<small class="font14">135 mm</small></label>
					
					<input type="radio" name="radio_img" id="five_priestorov" value="imge_5">
					<label for="five_priestorov" class="col lbl_sides font-weight-bolder mb-0 px-1">5 častí &nbsp;<small class="font14">135 mm</small></label>
				</div>
			</div>
		</div>
	</div>



					
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			
            
            <span class="type-abcd-sidebar type-a-sidebar" style="display: none;">
			   <?php include("include/wardrobe_sidebar1.php"); ?>
            </span> 
			<!-- type b sidebar -->
			<span class="type-abcd-sidebar type-b-sidebar" >
				<?php include("include/wardrobe_sidebar_type_b.php"); ?>
			</span>

			<span class="type-abcd-sidebar type-c-sidebar" >
				<?php include("include/wardrobe_sidebar_type_c.php"); ?>
			</span>

			<span class="type-abcd-sidebar type-d-sidebar" >
				<?php include("include/wardrobe_sidebar_type_d.php"); ?>
			</span>

			<div class="field btns justify-content-center align-items-center mx-auto">
				<!-- <button class="prev-2 prev">Previous</button> -->
				<button class="next-2 next btn-green" id="tab_btn_3" >Ďalej</button>
			</div>
		</div>
	</div>
	
</div>

<!-- tab 4 -->

<div class="page">
	<div class="row">
		<div class="col-md-9">
        <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
		<!--mg_top_75-->
			<div class="account-details-form">
<div class="row shad">
	<div class="col-md-10 ms-auto getResponse">
	     <!--deepak-->
	         <div class="tab_4_top_table">
     <table class="grid_end">
         <tbody>
             <tr id="tab_4_top_table_tr">
                 <td>
                    <div class="tab_4_arrow_table border-left border-right">
                         <span class="fold_numbb">87.3cm</span> <br>
                         <span>  <--------------> </span>
                    </div>
                 </td>
                 <td>
                    <div class="tab_4_arrow_table border-right">
                        <span class="fold_numbb">87.3cm</span> <br>
                        <span> <--------------> </span>
                    </div>
                 </td>
                 <td>
                    <div class="tab_4_arrow_table border-right">
                        <span class="fold_numbb">87.3cm</span> <br>
                        <span> <--------------> </span>
                    </div>
                 </td>
                 <td>
                    <div class="tab_4_arrow_table border-right">
                        <span class="fold_numbb">87.3cm</span> <br>
                        <span> <--------------> </span>
                    </div> 
                 </td>
             </tr>
             
         </tbody>
     </table>
	         </div>
	     <!--deepak-->
	    <div class="table_inpField_top font14">
	        <label for="top-height_inpField">Zadajte výšku vrchnej police</label>
		    <input type="text" class="" id="top-height_inpField" placeholder=""> <span class="font14">mm</span>
            <p class="err-top-height" style="color:red"></p>
	    </div>
	    <div class="get_table4Dom">
		    <input type="hidden" id="for-inside-td">
<table class="grid_end">
	<tr id="tab4-inside-tr">
		<td>
			<div class="cust_width tabtab_4 active_t4 opt1" id="divider1" data-id="1">
				<span class="opt1_a">at1</span>
                <span class="opt1_b">at2</span>
                <span class="opt1_c">at3</span>
                <span class="opt1_d">at4</span>
                <img class="newImageAdds" src="https://wardrobe.zarfrestauracia.sk/assests/web_assets/img_web/tab4_int1.png">
			</div>
			<div class="form-check fs_reduce">
				<input type="checkbox" class="form-check-input added_table_1" data-id="divider1" id="check-div-1" data-iid="1">
				<label class="form-check-label" for="divider1">Delená</label>
			</div>
		</td>

        <!-- <td>
			<div class="cust_width tabtab_4 active_t4" id="divider1" data-id="1">
				
			</div>
			<div class="form-check fs_reduce">
				<input type="checkbox" class="form-check-input added_table_1" data-id="divider1" id="check-div-1">
				<label class="form-check-label" for="divider1">Delený</label>
			</div>
		</td> -->

		<td>
			<div class="cust_width tabtab_4 opt1" id="divider2" data-id="2">
			    <span class="opt3_a">100cm</span>
                <span class="opt3_b">200cm</span>
                <span class="opt3_c">cm</span>
                <img class="newImageAdds" src="https://wardrobe.zarfrestauracia.sk/assests/web_assets/img_web/tab4_int3.png">
			</div>
			<div class="form-check fs_reduce">
				<input type="checkbox" class="form-check-input added_table_1" data-id="divider2" id="check-div-2" data-iid="2">
				<label class="form-check-label" for="divider2">Delená</label>
			</div>
		</td>
		<td>
			<div class="cust_width tabtab_4 opt1" id="divider3" data-id="3">
                <span class="opt4_a">100cm</span>
                <span class="opt4_b">200cm</span>
                <span class="opt4_c">cm</span>
                <span class="opt4_d">cm</span>
                <span class="opt4_e">cm</span>
                <img class="newImageAdds" src="https://wardrobe.zarfrestauracia.sk/assests/web_assets/img_web/tab4_int4.png">
			</div>
			<div class="form-check fs_reduce">
				<input type="checkbox" class="form-check-input added_table_1" data-id="divider3" id="check-div-3" data-iid="3">
				<label class="form-check-label" for="divider3">Delená</label>
			</div>
		</td>
		<td>
			<div class="cust_width tabtab_4 opt1" id="divider4" data-id="4">
				<span class="opt5_a">100cm</span>
                <span class="opt5_b">200cm</span>
                <span class="opt5_c">cm</span>
                <img class="newImageAdds" src="https://wardrobe.zarfrestauracia.sk/assests/web_assets/img_web/tab4_int5.png">
			</div>
			<div class="form-check fs_reduce">
				<input type="checkbox" class="form-check-input added_table_1" data-id="divider4" id="check-div-4">
				<label class="form-check-label" for="divider4">Delená</label>
			</div>
		</td>
        <!-- extra option 6 -->
        <td>
			<div class="cust_width tabtab_4 opt1" id="divider4" data-id="4">
				<span class="opt6_a">100cm</span>
                <span class="opt6_b">200cm</span>
                <span class="opt6_c">cm</span>
                <img class="newImageAdds" src="https://wardrobe.zarfrestauracia.sk/assests/web_assets/img_web/tab4_int6.png">
			</div>
			<div class="form-check fs_reduce">
				<input type="checkbox" class="form-check-input added_table_1" data-id="divider4" id="check-div-4" data-iid="4">
				<label class="form-check-label" for="divider4">Delená</label>
			</div>
		</td>
	</tr>
</table>
		</div>

	</div>
	<div class="col-md-2 me-auto">
	    <!--deepak-->
	    
		<div>
		    <!--<div class="small_vertical_arrow">
		         <span class="ml-10">0mm</span>
		    </div>-->
		    <div class="vertical_arrow">
		         <span class="ml-10">220cm</span>
		    </div>
		</div>
		<!--deepak-->
		<img src="<?=base_url()?>assests/web_assets/img_web/lady_wardrobe.png" class="img-responsive lazy tab4_girl" alt="lady_wardrobe" />
	</div>
</div>

<div class="container">
    <div class="pl-25 pr-25 pt-50">
		<div class="d-flex gap10 mbile-slider-create">
			<div class="int_img-name d-flex mbile-slider-items">
				<div class="position-relative">
					<span class="overlay-text interior_text">Dlhé vešanie </span>
					<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int1.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="1" data-interior-img="Interior 1" onmouseout="showLargeImageOut('container_imgs')">
				</div>
				<div class="container_imgs"></div>
			</div>

			<div class="int_img-name d-flex mbile-slider-items">
				<div class="position-relative">
					<span class="overlay-text interior_text">Dlhé vešanie </span>
					<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int2_new.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="2" data-interior-img="Interior 2" onmouseout="showLargeImageOut('container_imgs1')">
				</div>
				<div class="container_imgs1"></div>
			</div>

			<div class="int_img-name d-flex mbile-slider-items">
				<div class="position-relative">
					<span class="overlay-text interior_text">Krátke vešanie </span>
					<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int3.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="3" data-interior-img="Interior 3" onmouseout="showLargeImageOut('container_imgs2')">
				</div>
				<div class="container_imgs2"></div>
			</div>

			<div class="int_img-name d-flex mbile-slider-items">
				<div class="position-relative">
					<span class="overlay-text interior_text">Krátke vešanie </span>
					<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int4.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="4" data-interior-img="Interior 4" onmouseout="showLargeImageOut('container_imgs3')">
				</div>
				<div class="container_imgs3"></div>
			</div>

			<div class="int_img-name d-flex mbile-slider-items">
				<div class="position-relative">
					<span class="overlay-text interior_text">Krátke vešanie </span>
					<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int5.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="5" data-interior-img="Interior 5" onmouseout="showLargeImageOut('container_imgs4')">
				</div>
				<div class="container_imgs4"></div>
			</div>

			<div class="int_img-name d-flex mbile-slider-items">
				<div class="position-relative">
					<span class="overlay-text interior_text">Krátke vešanie </span>
					<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int6.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="6" data-interior-img="Interior 6" onmouseout="showLargeImageOut('container_imgs5')">
				</div>
				<div class="container_imgs5"></div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="container">
    <div class="swiper-container slid_4 pl-25 pr-25 pt-50">
		
		<div class="swiper-wrapper">
			<div class="swiper-slide">
            <div>
                <span class="overlay-text interior_text">Interior 1 </span>
				<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int1.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="1" onmouseout="showLargeImageOut('container_imgs')">
            </div>
				<div class="container_imgs"></div>
			</div>

			<div class="swiper-slide">
            <div>
                <span class="overlay-text interior_text">Interior 2 </span>
				<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int1.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="2" onmouseout="showLargeImageOut('container_imgs1')">
            </div>
				<div class="container_imgs1"></div>
			</div>
			<div class="swiper-slide">
            <div>
                <span class="overlay-text interior_text">Interior 3 </span>
				<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int3.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="3" onmouseout="showLargeImageOut('container_imgs2')">
            </div>
				<div class="container_imgs2"></div>
			</div>
			<div class="swiper-slide">
            <div>
                <span class="overlay-text interior_text">Interior 4 </span>
				<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int4.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="4" onmouseout="showLargeImageOut('container_imgs3')">
            </div>
				<div class="container_imgs3"></div>
			</div>
			<div class="swiper-slide">
            <div>
                <span class="overlay-text interior_text">Interior 5 </span>
				<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int5.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="5" onmouseout="showLargeImageOut('container_imgs4')">
            </div>
				<div class="container_imgs4"></div>
			</div>
			<div class="swiper-slide">
            <div>
                <span class="overlay-text interior_text">Interior 6 </span>
				<img src="<?=base_url()?>assests/web_assets/img_web/tab4_int6.png" alt="" class="lazy folding_inside_img select_imgs interiorr_imgg" data-imgg="6" onmouseout="showLargeImageOut('container_imgs5')">
            </div>
				<div class="container_imgs5"></div>
			</div>
			
		</div>

		
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
   
</div> -->
</div>
</div>
	<div class="col-lg-3">
		

		    <span class="type-abcd-sidebar type-a-sidebar" style="display: none;">
			   <?php include("include/wardrobe_sidebar1.php"); ?>
            </span> 
			<!-- type b sidebar -->
			<span class="type-abcd-sidebar type-b-sidebar" >
				<?php include("include/wardrobe_sidebar_type_b.php"); ?>
			</span>

			<span class="type-abcd-sidebar type-c-sidebar" >
				<?php include("include/wardrobe_sidebar_type_c.php"); ?>
			</span>
			<span class="type-abcd-sidebar type-d-sidebar" >
				<?php include("include/wardrobe_sidebar_type_d.php"); ?>
			</span>
		
		<div class="field btns justify-content-center align-items-center mx-auto">
			<button class="next-2 next btn-green" id="tab_id_btn4" disabled>Ďalej</button>
		</div>
	</div>
</div>

</div>

<!-- tab 5 -->

<div class="page tab-5-main">
	<div class="row">
		<div class="col-md-9">
            <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
			<div class="account-details-form">

	<div class="col-md-6 mx-auto get_table5Dom">
		<table class="grid_center table_num5 ">
			<tr id="table_num5_tr">
			
			</tr>
		</table>
		<div class="depth1 form-inline">
		</div>
	</div>

<div class="container mt-20">
	<div class="swiper-container pl-25 pr-25 pt-50 pb-3">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
           
            <?php
                    $increment = 1;
                     if($interior){
                        foreach($interior as $k => $price){
                          
                    ?>
               <div class="swiper-slide d-flex flex-column">
                 <?php
                  foreach ($price as $key => $value) { 
                  
                  ?>        
                    
<div>
    <span class="overlay-text dekor-text-cls" id="tab5-mname-<?=$increment?>"><?=$value['color']?> <br> <span class="font-weight-light"></span></span>
    <img data-color="<?=$value['color']?>" data-namesrc="<?=base_url().$value['image']?>" data-nameid="<?=$increment?>" src="<?=base_url().$value['image']?>" alt="" class="lazy mb-20 zoom select_imgs_tab5 reduce_box">
</div>



                  <?php $increment++;  } ?>
               </div>     
             <?php } }  ?>     


			
			
		</div>

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</div>
			</div>
		</div>
		<div class="col-lg-3">
			
			<span class="type-abcd-sidebar type-a-sidebar" style="display: none;">
			   <?php include("include/wardrobe_sidebar1.php"); ?>
            </span> 
			<!-- type b sidebar -->
			<span class="type-abcd-sidebar type-b-sidebar" >
				<?php include("include/wardrobe_sidebar_type_b.php"); ?>
			</span>

			<span class="type-abcd-sidebar type-c-sidebar" >
				<?php include("include/wardrobe_sidebar_type_c.php"); ?>
			</span>
			<span class="type-abcd-sidebar type-d-sidebar" >
				<?php include("include/wardrobe_sidebar_type_d.php"); ?>
			</span>
			
			<div class="field btns justify-content-center align-items-center mx-auto">
				<!-- <button class="prev-2 prev">Previous</button> -->
				<button class="next-2 next btn-green" id="tab_5_btn" disabled>Ďalej</button>
			</div>
		</div>
	</div>
	
</div>

<!-- tab 6 -->

<div class="page section-tab6">
<div class="row">
<div class="col-md-9">
<a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
<!-- <center>
<small>Pohľad zhora</small>
</center> -->
<div class="account-details-form">
<div class="row">
<div class="col-md-3 d-flex flex-column justify-content-center">

</div>
<div class="col-md-6">
<div class="mx-2 mb-1">
    <img src="<?=base_url()?>assests/web_assets/img_web/View_from_above2.png" class="ml_12 lazy" id="top-image-tab5" alt="">
</div>

<input type="hidden" id="profile-type-1" >
<div class="dom_table6">
	<table class="grid_start ml_1_3rem" id="table_tab_6">
		<tbody>
			<tr id="table_tab_6_tr">
				<td>
					<div class="table_6_click active_t6">
						
					</div>
				</td>
				<td>
					<div class="table_6_click">
						
					</div>
				</td>
				<td>
					<div class="table_6_click">
						
					</div>
				</td>
				<td>
					<div class="table_6_click">
						
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
<div class="col-md-3 d-flex flex-column align-items-center pt-20">
<div class="open_closet">
	<button type="button" class="btn closet-btn bg-transparent" id="closet_open">Otvoriť skriňu</button>
</div>
<div class="door_division mt-2" style="visibility: hidden;">
	<div class="door_dd">
		<label class="c_box mb-0">Delenie dverí bez profilu
			<input type="checkbox">
			<span class="checkmark"></span>
		</label>
		
	</div>
</div>
<img src="<?=base_url()?>assests/web_assets/img_web/question_mark.png" class="tab_6_margin_img" style="float: right;margin-left: auto; visibility: hidden;" id="door_d1">
<img src="<?=base_url()?>assests/web_assets/img_web/Door_division_without_profile-min.png" class="Door_division_without_profile" style="visibility: hidden;">

<div class="bg-dark px-1 pb-2 tab6_modal_info" id="door_d2" style="display:none;">
    <button type="button" class="bg-dark border-0 d-block justify-content-end m-auto mr-0 ms-auto text-white" id="door_d3">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
    <p class="Door_division_info_box font14">V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená.</p>
</div>

</div>
</div>

<div class="container mt-50">

<div class="swiper-container pl-25 pr-25">
<!-- Additional required wrapper -->
<div class="swiper-wrapper justify-content-center">
	<div class="swiper-slide">
	    <span class="overlay-text">Dub Kansas <br> <span class="font-weight-light">001 - EGER 7</span></span>
		<!-- <img src="<?=base_url()?>assests/web_assets/img_web/tab6_img4.png" alt="" class="folding_inside_img"> -->
		<a href="javascript:void(0)" class="select_div" onclick="getDom('table_1')">
			<table id="table_1">
				<tbody>
					<tr class="set_frame_color">
						<td class="door_frame">
							<table class="inside_table_tr">
								<tr class="set_inside_framer">
									<td class="framer_selections door1">

									</td>
								</tr>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</a>
	</div>



    <div class="swiper-slide">
	    <span class="overlay-text">Dub Kansas <br> <span class="font-weight-light">001 - EGER 7</span></span>
		<!-- <img src="<?=base_url()?>assests/web_assets/img_web/tab6_img4.png" alt="" class="folding_inside_img"> -->
		<a href="javascript:void(0)" class="select_div" onclick="getDom('table_8')">
<table id="table_8">
<tbody>
<tr class="set_frame_color">
	<td class="door_frame">
		<table class="inside_table_tr" style="border-collapse: separate;border-spacing: 0 2px;">
			<tr class="set_inside_framer">
				<td class="framer_selections door2">
                      <!-- <input type="text" class="para_width2 setInpWidth h25">  -->
				</td>
			</tr>

			<tr class="set_inside_framer">
				<td class="framer_selections door2">
				   <input type="text" class="para_width2 setInpWidth h25 input-1" > 
				</td>
			</tr>
		</table>
	</td>
</tr>
</tbody>
</table>
		</a>
	</div>
	
    
    <div class="swiper-slide">
	    <span class="overlay-text">Dub Kansas <br> <span class="font-weight-light">001 - EGER 7</span></span>
		<!-- <img src="<?=base_url()?>assests/web_assets/img_web/tab6_img4.png" alt="" class="folding_inside_img"> -->
		<a href="javascript:void(0)" class="select_div" onclick="getDom('table_2')">
<table id="table_2">
<tbody>
<tr class="set_frame_color">
	<td class="door_frame">
		<table class="inside_table_tr" style="border-collapse: separate;border-spacing: 0 2px;">
			<tr class="set_inside_framer">
				<td class="framer_selections door2">

				</td>
			</tr>

			<tr class="set_inside_framer">
				<td class="framer_selections door2">
				    <!-- <input type="text" class="para_width2 setInpWidth h25"> -->
				</td>
			</tr>
		</table>
	</td>
</tr>
</tbody>
</table>
		</a>
	</div>




     <div class="swiper-slide">
	    <span class="overlay-text">Dub Kansas <br> <span class="font-weight-light">001 - EGER 7</span></span>
		<!-- <img src="<?=base_url()?>assests/web_assets/img_web/tab6_img4.png" alt="" class="folding_inside_img"> -->
		<a href="javascript:void(0)" class="select_div" onclick="getDom('table_9')">
			<span id="table_9">
<table>
	<tbody>
		<tr class="set_frame_color">
			<td class="set_frame_color door_frame">
				<table class="inside_table_tr" style="border-collapse: separate;border-spacing: 0 2px;">
					<tr class="set_inside_framer">
						<td class="framer_selections door3">
						    
						</td>
					</tr>

					<tr class="set_inside_framer">
						<td class="framer_selections door3">
                            
						</td>
					</tr>
					<tr class="set_inside_framer">
						<td class="framer_selections door3">
						    
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</tbody>
</table>
			</span>
		</a>
	</div>
	
    
    <div class="swiper-slide">
	    <span class="overlay-text">Dub Kansas <br> <span class="font-weight-light">001 - EGER 7</span></span>
		<!-- <img src="<?=base_url()?>assests/web_assets/img_web/tab6_img4.png" alt="" class="folding_inside_img"> -->
		<a href="javascript:void(0)" class="select_div" onclick="getDom('table_3')">
			<span id="table_3">
<table>
	<tbody>
		<tr class="set_frame_color">
			<td class="set_frame_color door_frame">
				<table class="inside_table_tr" style="border-collapse: separate;border-spacing: 0 2px;">
					<tr class="set_inside_framer">
						<td class="framer_selections door3">
						    <input type="text" class="para_width2 setInpWidth h25 input-1" >
						</td>
					</tr>

					<tr class="set_inside_framer">
						<td class="framer_selections door3">
                            
						</td>
					</tr>
					<tr class="set_inside_framer">
						<td class="framer_selections door3">
						    <input type="text" class="para_width2 setInpWidth h25 input-2" >
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</tbody>
</table>
			</span>
		</a>
	</div>



  <div class="swiper-slide">
	    <span class="overlay-text">Dub Kansas <br> <span class="font-weight-light">001 - EGER 7</span></span>
		<!-- <img src="<?=base_url()?>assests/web_assets/img_web/tab6_img4.png" alt="" class="folding_inside_img"> -->
		<a href="javascript:void(0)" class="select_div" onclick="getDom('table_7')">
			<span id="table_7">
<table>
	<tbody>
		<tr class="set_frame_color">
			<td class="set_frame_color door_frame">
				<table class="inside_table_tr" style="border-collapse: separate;border-spacing: 0 2px;">
					<tr class="set_inside_framer">
						<td class="framer_selections door3">
						   
						</td>
					</tr>

					<tr class="set_inside_framer">
						<td class="framer_selections door3">
                            <input type="text" class="para_width2 setInpWidth h25 input-1" >
						</td>
					</tr>
					<tr class="set_inside_framer">
						<td class="framer_selections door3">
						  
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</tbody>
</table>
			</span>
		</a>
	</div>




	<div class="swiper-slide">
	    <span class="overlay-text">Dub Kansas <br> <span class="font-weight-light">001 - EGER 7</span></span>
		<a href="javascript:void(0)" class="select_div" onclick="getDom('table_4')">
			<span id="table_4">
<table>
<tbody>
	<tr class="set_frame_color">
		<td class="set_frame_color door_frame">
			<table class="inside_table_tr" style="border-collapse: separate;border-spacing: 0 2px;">
				<tr class="set_inside_framer">
					<td class="framer_selections door4">
					</td>
				</tr>
				<tr class="set_inside_framer">
					<td class="framer_selections door4">
					</td>
				</tr>
				<tr class="set_inside_framer">
					<td class="framer_selections door4">
					</td>
				</tr>
				<tr class="set_inside_framer">
					<td class="framer_selections door4">
					</td>
				</tr>
			</table>
		</td>
	</tr>
</tbody>
</table>
			</span>
		</a>
	</div>



<div class="swiper-slide">
	    <span class="overlay-text">Dub Kansas <br> <span class="font-weight-light">001 - EGER 7</span></span>
		<a href="javascript:void(0)" class="select_div" onclick="getDom('table_10')">
			<span id="table_10">
<table>
	<tbody>
		<tr class="set_frame_color">
			<td class="set_frame_color door_frame">
				<table class="inside_table_tr" style="border-collapse: separate;border-spacing: 0 2px;">
					<tr class="set_inside_framer">
						<td class="framer_selections door5">
						</td>
					</tr>
					<tr class="set_inside_framer">
						<td class="framer_selections door5">
						    
						</td>
					</tr>
					<tr class="set_inside_framer">
						<td class="framer_selections door5">
						</td>
					</tr>
					<tr class="set_inside_framer">
						<td class="framer_selections door5">
						    
						</td>
					</tr>
					<tr class="set_inside_framer">
						<td class="framer_selections door5">
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</tbody>
</table>
			</span>
		</a>
	</div>

	
	<div class="swiper-slide">
	    <span class="overlay-text">Dub Kansas <br> <span class="font-weight-light">001 - EGER 7</span></span>
		<a href="javascript:void(0)" class="select_div" onclick="getDom('table_5')">
			<span id="table_5">
<table>
	<tbody>
		<tr class="set_frame_color">
			<td class="set_frame_color door_frame">
				<table class="inside_table_tr" style="border-collapse: separate;border-spacing: 0 2px;">
					<tr class="set_inside_framer">
						<td class="framer_selections door5">
						</td>
					</tr>
					<tr class="set_inside_framer">
						<td class="framer_selections door5">
						    <input type="text" class="para_width2 setInpWidth h25 input-1" >
						</td>
					</tr>
					<tr class="set_inside_framer">
						<td class="framer_selections door5">
						</td>
					</tr>
					<tr class="set_inside_framer">
						<td class="framer_selections door5">
						    <input type="text" class="para_width2 setInpWidth h25 input-2" >
						</td>
					</tr>
					<tr class="set_inside_framer">
						<td class="framer_selections door5">
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</tbody>
</table>
			</span>
		</a>
	</div>
	
<div class="swiper-slide">
    <span class="overlay-text">Dub Kansas <br> <span class="font-weight-light">001 - EGER 7</span></span>
    <a href="javascript:void(0)" class="select_div" onclick="getDom('table_6')">
        <span id="table_6">
<table>
<tbody>
    <tr class="set_frame_color">
        <td class="set_frame_color door_frame">
            <table class="inside_table_tr" style="border-collapse: separate;border-spacing: 0 2px;">
                <tr class="set_inside_framer">
                    <td class="framer_selections door6">
                    </td>
                </tr>
                <tr class="set_inside_framer">
                    <td class="framer_selections door6">
                    </td>
                </tr>
                <tr class="set_inside_framer">
                    <td class="framer_selections door6">
                    </td>
                </tr>
                <tr class="set_inside_framer">
                    <td class="framer_selections door6">
                    </td>
                </tr>
                <tr class="set_inside_framer">
                    <td class="framer_selections door6">
                    </td>
                </tr>
                <tr class="set_inside_framer">
                    <td class="framer_selections door6">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</tbody>
</table>
        </span>
    </a>
</div>
</div>

<!-- If we need navigation buttons -->
<div class="swiper-button-prev"></div>
<div class="swiper-button-next" id="tab_six"></div>
</div>
</div>
</div>
</div>
<div class="col-lg-3">

<span class="type-abcd-sidebar type-a-sidebar" style="display: none;">
   <?php include("include/wardrobe_sidebar1.php"); ?>
</span> 
<span class="type-abcd-sidebar type-b-sidebar" >
	<?php include("include/wardrobe_sidebar_type_b.php"); ?>
</span>

<span class="type-abcd-sidebar type-c-sidebar" >
	<?php include("include/wardrobe_sidebar_type_c.php"); ?>
</span>
<span class="type-abcd-sidebar type-d-sidebar" >
				<?php include("include/wardrobe_sidebar_type_d.php"); ?>
			</span>
<!--<p class="tip1 mt-20"><b>TIP</b>: Pri dverách delených na polovicu,<br>-->
<!--	tretinu resp. na pätinu si môžete<br>-->
<!--	ľubovoľne zmeniť výšku deliaceho priestoru.</p>-->
<div class="field btns justify-content-center align-items-center mx-auto">
<!-- <button class="prev-2 prev">Previous</button> -->
<button class="next-2 next btn-green" id="btn_tab_6" disabled>Ďalej</button>
</div>
</div>
</div>
<!--<div class="row">-->
<!--    <div class="col-md-9">-->

</div>

	<!-- tab 7 -->

	<div class="page">
		<div class="row">
			<div class="col-md-9">
                <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
				<!-- <center>
					<small>Pohľad zhora</small>
				</center> -->
				<div class="account-details-form">
					<img src="<?=base_url()?>assests/web_assets/img_web/info.png" alt="" class="lazy info_imgg mt-2">
					<div class="row">
						<div class="col-md-3 d-flex flex-column justify-content-center">
							<div class="align-items-center d-flex">
								
							</div>
						</div>
						<div class="col-md-5">
							<div class="tab7_tableDom">
							</div>

							<div class="mt-20">
								<div class="text-center">
									
								</div>
							</div>
						</div>
						<div class="col-md-3 d-flex flex-column justify-content-around">
							<div class="align-items-center d-flex">
								
							</div>
							<div class="mt-50">
								
							</div>
						</div>
					</div>

					<div class="container mt-50">
						<div class="swiper-container pl-25 pr-25 py-3 pt-4">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper int_img-name">
<?php if($doorfiller_data){
 foreach($doorfiller_data as $mm=>$int){
     $profile = $int['type']=='open'?'Open':'Close';
?>
	<div class="swiper-slide position-relative">
        <span class="newnew overlay-text"><?=$profile?></span>
		<img src="<?=base_url().$int['image']?>" alt="" data-frame-color="<?=base_url().$int['image']?>" class="lazy image-fluid tab7zoom reduce_box" data-color="<?=$int['color']?>" data-type="<?=$int['type']?>">
	</div>

<?php } } ?>
							
							</div>

							<!-- If we need navigation buttons -->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-3">
				
				<span class="type-abcd-sidebar type-a-sidebar" style="display: none;">
				   <?php include("include/wardrobe_sidebar1.php"); ?>
				</span> 
				<span class="type-abcd-sidebar type-b-sidebar" >
					<?php include("include/wardrobe_sidebar_type_b.php"); ?>
				</span>

				<span class="type-abcd-sidebar type-c-sidebar" >
				  <?php include("include/wardrobe_sidebar_type_c.php"); ?>
			    </span>
			    <span class="type-abcd-sidebar type-d-sidebar" >
				<?php include("include/wardrobe_sidebar_type_d.php"); ?>
			</span>
				
				<div class="field btns justify-content-center align-items-center mx-auto">
					<!-- <button class="prev-2 prev" id="prev-btn7">Previous</button> -->
					<button class="next-2 next btn-green" id="btn_tab_7" disabled>Ďalej</button>
				</div>
			</div>
		</div>
		<!--<div class="row">-->
		<!--    <div class="col-md-9">-->

	</div>

	<!-- tab 8 -->

	<div class="page">
		<div class="row">
			<div class="col-md-9">
                <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
				<div class="account-details-form">
					<div class="row">
						<div class="col-md-3 d-flex flex-column justify-content-center">
							<div class="align-items-center d-flex">
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="p-0">
								<div class="tab-8-table">
								</div>
							</div>
							<div class="mt-20">
								<div class="text-center">
									
								</div>
							</div>
						</div>
						<div class="col-md-3 d-flex flex-column justify-content-around">
							<div class="align-items-center d-flex">
								
							</div>
							<div class="mt-50">
								
							</div>
						</div>
					</div>

					<div class="container mt-10">
                        <div class="row">
                            <div class="col-md-3">
                                <h2 class="rad_sletn">Hrúbka dverí</h2>
                                <div class="switch-field">
                                    <input type="radio" id="thick_one" name="switch_thickness" value="yes" checked/>
                                    <label for="thick_one">10mm</label>
                                    <input type="radio" id="thick_two" name="switch_thickness" value="no" />
                                    <label for="thick_two">18mm</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="selection_all_woodImgs">
                                    <input id="lk" type="checkbox" id="checkbox-woodImgs" name="lk" value="lk"/>
                                    <label for="lk"><img src="<?=base_url()?>assests/web_assets/img_web/check-light.png"> Označiť všetky výplne</label>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
					   
						<div class="swiper-container pl-25 pr-25 pt-50 pb-3">
							<div class="swiper-wrapper ">
			

    <?php
     if($absdata){
        foreach($absdata as $k => $price){
          
    ?>
     <div class="swiper-slide d-flex flex-column">
     <?php foreach ($price as $key => $value) { ?>
        <div>        
            <span class="overlay-text"><?=$value['color']?> <br> <span class="font-weight-light">001 - EGER 5</span></span>
		    <img data-id="<?=$value['id']?>" data-color="<?=$value['color']?>" src="<?=base_url().$value['image']?>" alt="" class="mb-20 zoom select_imgs tab_8_img reduce_box lazy">
        </div>
      <?php } ?>
   </div>     
 <?php } }  ?>  

								
							</div>

							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next" id="tab_8_btn"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
			
				<span class="type-abcd-sidebar type-a-sidebar" style="display: none;">
				   <?php include("include/wardrobe_sidebar1.php"); ?>
				</span> 
				<span class="type-abcd-sidebar type-b-sidebar" >
					<?php include("include/wardrobe_sidebar_type_b.php"); ?>
				</span>

				<span class="type-abcd-sidebar type-c-sidebar" >
				  <?php include("include/wardrobe_sidebar_type_c.php"); ?>
			    </span>
			    <span class="type-abcd-sidebar type-d-sidebar" >
				<?php include("include/wardrobe_sidebar_type_d.php"); ?>
			</span>
			
				<div class="field btns justify-content-center align-items-center mx-auto">
					<!--<button class="prev-2 prev" id="prev-btn8">Previous</button>-->
			        <button class="next-2 next btn-green" id="tab-btn-8">Ďalej</button>
				</div>
			</div>
		</div>
		
		
	</div>

	<!-- tab 9 -->

	<div class="page">
		<div class="row">
			<div class="col-md-9 mt-0">
            <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
				<div class="account-details-form">
					<div class="row">
						<div class="col-md-6 mx-auto">
							<div class="justify-content-center row">
								<div class="col-md-10 appended_frstImg">
									<img src="" alt="" class="ml-auto w-100 lazy" id="floorpln">
								</div>
								<div class="col-md-12 p-0">
									<div class="final_image_col_table_5 table-responsive"></div>
								</div>
							</div>
						</div>
						<div class="align-items-end col-md-6 d-flex">
							<div class="final_image_col" id="tab9_img_final">

							</div>
							
                            <!-- <div class="final_image_tab4"> -->
							<!-- </div> -->

							<div class="col-md-12 mt-2 text-right">
								<!-- <img src="<?=base_url()?>assests/web_assets/img_web/tab9_img1.png" class="img-fluid lazy" alt="">
								<img src="<?=base_url()?>assests/web_assets/img_web/tab9_img2.png" class="img-fluid lazy" alt=""> -->
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<hr class="col-md-11" style="border:1px solid #ccc">
							<div class="col-md-3">
								<h3 class="font-weight-bolder">Cena bez DPH</h3>
							</div>
							<div class="col-md-6">
							    <div class="row">
							        <div class="align-items-center col-md-6 d-flex">
							            <p class="Pre_zobrazenie">Pre zobrazenie cenovej ponuky<br>zadajte váš e-mail: </p>
							        </div>
							        <div class="col-md-6">
							            <input type="text" placeholder="Váš e-mail" class="Vas_e_mail">
							            <button type="button" class="btn Zobrazit_cenovu email-check-btn">Zobraziť cenovú ponuku</button>
							        </div>
							    </div>
							</div>
							<div class="col-md-3">
								<div class="d-flex justify-content-end">
									<div class="ttl_price" style="display:none">
										<h3 class="font-weight-bolder mb-0 wardrobe-total-cost wardrobe-tcost">1480,95€</h3>
									</div>
									<div class="ml-3">
									
									</div>
								</div>
								
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="col-lg-3">
			
				<span class="type-abcd-sidebar type-a-sidebar" style="display: none;">
				   <?php include("include/wardrobe_sidebar1.php"); ?>
				</span> 
				<span class="type-abcd-sidebar type-b-sidebar" >
					<?php include("include/wardrobe_sidebar_type_b.php"); ?>
				</span>
				<span class="type-abcd-sidebar type-c-sidebar" >
				  <?php include("include/wardrobe_sidebar_type_c.php"); ?>
			    </span>
			    <span class="type-abcd-sidebar type-d-sidebar" >
				<?php include("include/wardrobe_sidebar_type_d.php"); ?>
			</span>
				
				<div class="d-flex justify-content-center mt-2 mx-auto">
				    <button type="button" class="next-2 next btn btn-danger tab9_btn tab_9_btn_9"><img src="<?=base_url()?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať</button>
				</div>
			
			</div>
		</div>
		
	
	</div>

	<!-- tab 10 -->
	<div class="page tab-10-page">
		<div class="row">
			<div class="tab10-col-9 col-md-9">
            <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
				<div class="tabDiv_right tab10_ht padding_tab_10">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input tab_10_check" id="Nakupujem_na_firmu">
                                <label class="form-check-label ml-10 tab_10_lable" for="Nakupujem_na_firmu">Nakupujem na firmu</label>
                            </div>
                        </div>
                        <div class="col-md-6">
						    <div class="d-flex justify-content-center">
							    <div class="form-group form-check">
									<input type="checkbox" class="form-check-input tab_10_check mt-10" id="Nakupujem_na_firmu_1">
									<label class="form-check-label ml-10 tab_10_lable" for="Nakupujem_na_firmu_1">Fakturačná adresa je <br> rovnaká ako dodacia</label>
								</div>
							</div>
						</div>
                    </div>
					
					<div class="row">
						<div class="col-md-4">
							<h4 class="font-weight-bolder">Kontaktné údaje</h4>
							<div class="form-group">
								<input type="text" class="form-control tab_10_input f-name-1" id="Meno" placeholder="Meno">
							</div>

							<div class="form-group">
								<input type="text" class="form-control tab_10_input f-surname-1" id="Priezvisko" placeholder="Priezvisko">
							</div>

							<div class="form-group">
								<input type="text" class="form-control tab_10_input f-phone-1" id="Telefón" placeholder="Telefón">
							</div>

							<div class="form-group">
								<input type="text" class="form-control tab_10_input f-email-1" id="Email" placeholder="Email">
							</div>

						</div>

						<div class="col-md-4">
							<h4 class="font-weight-bolder">Dodacia adresa</h4>
							<div class="form-group">
								<input type="text" class="form-control tab_10_input f-address" id="address" placeholder="Ulica a číslo">
							</div>

							<div class="form-group">
								<input type="text" class="form-control tab_10_input f-city" id="city-name" placeholder="Mesto">
							</div>

							<div class="form-group">
								<input type="text" class="form-control tab_10_input f-zip" id="zip-code" placeholder="PSČ">
							</div>
						</div>

						<div class="col-md-4">
							<h4 class="font-weight-bolder">Fakturačná adresa</h4>
							<div class="form-group">
								<input type="text" class="form-control tab_10_input address-1" id="address-1" placeholder="Ulica a číslo">
							</div>

							<div class="form-group">
								<input type="text" class="form-control tab_10_input city-name-1" id="city-name-1" placeholder="Mesto">
							</div>

							<div class="form-group">
								<input type="text" class="form-control tab_10_input zip-code-1" id="zip-code-1" placeholder="PSČ">
							</div>
						</div>
						<!-- <div class="col-md-12">
						    <div class="d-flex justify-content-center">
							    <div class="form-group form-check">
									<input type="checkbox" class="form-check-input tab_10_check mt-10" id="Nakupujem_na_firmu_1">
									<label class="form-check-label ml-10 tab_10_lable" for="Nakupujem_na_firmu_1">Fakturačná adresa je <br> rovnaká ako dodacia</label>
								</div>
							</div>
						</div> -->


                  <div class="col-md-12">
					    <div class="d-flex">
						    <div class="" id="check_hide_show_edge" style="display: none">
						        <h4 class="font-weight-bolder">Firemné údaje</h4>
						        <div class="d-flex">
							        <div class="form-group">
									    <input type="text" class="form-control w-75 tab_10_input" id="Ulica_a_číslo" placeholder="Firma">
									</div>

									<div class="form-group">
										<input type="text" class="form-control w-75 tab_10_input" id="Mesto" placeholder="IČ DPH">
									</div>
								</div>
								<div>
								    <div class="form-group">
										<input type="text" class="form-control width_input_edge tab_10_input" id="Mesto" placeholder="IČO">
									</div>
								</div>
						    </div>
						    <div class="" id="check_hide_show_edge_1" style="display:none !important;">
							    <div class="form-group form-check">
									<input type="checkbox" class="form-check-input tab_10_check mt-10" id="Nakupujem_na_firmu_1">
									<label class="form-check-label ml-10 tab_10_lable" for="Nakupujem_na_firmu_1">Fakturačná adresa je <br> rovnaká ako dodacia</label>
								</div>
							</div>
					    </div>
					</div>


						<div class="col-md-8">
							<h4 class="font-weight-bolder">Poznámka</h4>
							<div class="form-group">
								<textarea name="Poznámka" id="" rows="5" class="w-100 form-control"></textarea>
							</div>
						</div>
						<div class="col-md-4 grid_end tab_10_end_pddng">
							<div>
								<!-- <a href="order_place.php"> -->
									<button type="button" class="btn btn-danger tab10_btn mb-2 next-1 next w-100 tab10-btn-1" disabled><img src="<?=base_url()?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať</button>
								<!-- </a> -->
								<p class="tab10_font tab_10_text_end">Kliknutím na tlačidlo záväzne potvrdzujete objednávku<br>a súhlasíte s našimi <u>obchodnými podmienkami</u>.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab10-col-3 col-md-3 position-relative mt-90">
				<!-- <img src="<?//=base_url()?>assests/web_assets/img_web/tab8_img1.jpg" class="img-fluid w-100 lazy mt-1" alt=""> -->
				<div id="last-clone-app">
					
				</div>
				<div class="row">
					<div class="col-md-6">
						<h4 class="font-weight-bolder tab_10_cena">Cena bez DPH</h4>
					</div>
					<div class="col-md-6 text-right ttl_price" style="display:none">
						<h4 class="font-weight-bolder mb-0 tab_10_cena wardrobe-tcost">1 480,95€</h4>
						<!-- <small class="font-weight-bold tab_10_small_txt">vrátane montáže</small> -->
					</div>
				</div>
				<div class="tab_10_abs">
				    <p class="text-danger">Potrebujete poradiť? Kliknite sem.</p>
				</div>
			</div>
		</div>
		
	</div>

    <!-- tab 11 -->
   <!-- <div class="page">
        <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
        <div class="mt-10 text-center title">REVIEW YOUR BUILD</div>
        <p class="text-center">Please now review your build and continue to the payment page when you are happy to proceed.</p>
		<table class="w-100">
			<tr>
				<td colspan="">
					<div id="last-clone-app-two">
					
					</div>
				</td>
			</tr>
		</table>
        <table class="mx-auto table w-75">
            <tbody>
                <tr>
                    <th style="width:50%;">Výber typu</th>
                    <td style="width:50%;" id="ward-img"></td>
                </tr>
                <tr>
                    <th>Výška ľavá predná</th>
                    <td>
						<span id="left-h-imgs">
							<img src="" class="img-fluid" style="width:150px;">
						</span><br>
						<span id="h-add-left"></span>
					mm</td>
                </tr>
                <tr>
                    <th>Hĺbka</th>
                    <td>
					<span id="depth-h-img">
							<img src="" class="img-fluid" style="width:150px;">
						</span><br>
						<span id="h-add-depth"></span>
					mm</td>
                </tr>
                <tr>
                    <th>Šírka</th>
                    <td>
					<span id="width-h-img">
							<img src="" class="img-fluid" style="width:150px;">
						</span><br>
						<span id="h-add-width"></span>
					mm</td>
                </tr>
                <tr>
                    <th>Výška pravá predná</th>
                    <td>
					<span id="right-h-img">
							<img src="" class="img-fluid" style="width:150px;">
						</span><br>
						<span id="h-add-frontRight"></span>
						mm</td> 
                </tr>
                <tr>
                    <th>Počet priestorov</th>
                    <td id="add-premises"> časť</td>
                </tr>
                <tr>
                    <th>Interior Section</th>
                    <td id="interior-names-collection"></td>
                </tr>
                <tr>
                    <th>Interior Color</th>
                    <td id="interior-color"></td>
                </tr>
                <tr>
                    <th>Door Design</th>
                    <td id="door-3">GSH3</td>
                </tr>
               
                <tr>
                    <th>Frame</th>
                    <td>
						<span id="door-frames"></span><br>
						<span id="frame_name1"></span>
					</td>
                </tr>
                <tr>
                    <th>Door Filler</th>
                    <td id="door-fillerzz"></td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a href="order_place.php">
                <button type="button" class="btn btn-danger tab10_btn mb-2"><img src="<?=base_url()?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať</button>
            </a>
        </div>
    </div> -->


    <div class="page">
        <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
        <div class="mt-10 text-center title">SKONTROLUJTE SVOJU STAVBU</div>
        <p class="text-center">Teraz skontrolujte svoju zostavu a pokračujte na platobnú stránku, keď budete chcieť pokračovať.</p>
		<div class="tab11_height">
            <table class="mx-auto table w-75">
                <tbody id="calc-body">
                
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="javascript:void(0)">
                <button type="button" class="btn btn-danger tab10_btn mb-2 cal-btn1 tab10-btn-2"><img src="<?=base_url()?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať</button>
            </a>
        </div>
    </div>
				

			</form>
		</div>
	</div>

</div>
</div>
</div>

<?php include("include/footer.php"); ?>

<!-- Modal Number 1 -->
<div class="modal fade model_num1" id="modal_num1" tabindex="-1" role="dialog" aria-labelledby="modalLabel_num1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered first_modal_width" role="document">

<div class="modal-content">
	<div class="modal-header justify-content-center mx-auto">
		<h5 class="modal-title" id="modalLabel_num1">Zdieľajte dizajn so známymi a priateľmi</h5>
	</div>
	<div class="modal-body p-0">
		<div class="d-flex flex-column justify-content-center align-items-center mx-auto">
			<p class="text-center modal_paragraph_1">
				Podeľte sa o Vašu konfiguráciu s ostatnými.<br> Zadajte email alebo vyberte inú možnosť zdieľania.
			</p>
			<div class="form-check mt-3 lbl-sec">
				<input class="form-check-input" type="checkbox" value="" id="agreement">
				<label class="form-check-label checkLabel" for="agreement">
					Zobraziť cenovú ponuku a možnosť objednať
				</label>
			</div>
		</div>

		<div class="d-flex justify-content-between align-items-center mt-3 subscribe_section">
			<div class="subscribe_email d-flex flex-column justify-content-center">
				<form action="#" method="post">
					<input type="text" name="email" id="emailsend" class="form-control modal_input_11" placeholder="Email známeho" />
					<button type="button" class="btn btn-danger w-100 mt-2 setredBtn" style="background: #ff0000;">Zdieľať</button>
				</form>
			</div>

			<div class="or_section mt-2">
				<p class="font-weight-bolder text-center">alebo</p>
			</div>

			<div class="modal_social_icons d-flex justify-content-center align-items-center">
				<a href="javascript:void(0)" target="_blank" class="text-decoration-none mr-2">
					<img src="<?=base_url()?>assests/web_assets/img_web/fb.jpg" alt="facebook" class="img-responsive d-block m-auto lazy modal1_ss">
				</a>
				<a href="javascript:void(0)" target="_blank" class="text-decoration-none mr-2">
					<img src="<?=base_url()?>assests/web_assets/img_web/whtsapp.jpg" alt="whatsapp" class="img-responsive d-block m-auto lazy modal1_ss">
				</a>
				<a href="javascript:void(0)" target="_blank" class="text-decoration-none mr-2">
					<img src="<?=base_url()?>assests/web_assets/img_web/msgner.jpg" alt="messagener" class="img-responsive d-block m-auto lazy modal1_ss">
				</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<!-- Modal Number 2 -->
<div class="modal fade" id="modal_num2" tabindex="-1" role="dialog" aria-labelledby="modalLabel_num2" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg modal_number_2" role="document">
<div class="modal-content p-0">
	<div class="modal-body p-0">
	
		<div class="row">
			<div class="col-md-6 col-sm-12 koi_acc px-4 py-5" style="display:flex; align-items: center;">
				<form action="#" method="post" class="text-center">
					<h4 class="text-center  font-weight-bolder modal_n_txt">
						Uložte si vašu konfiguráciu na neskôr
					</h4>
					<input type="text" name="email_koiAcc" id="email_koi_11" class="form-control mt-50 mx-auto w-75 modal_input_11" placeholder="Váš email" />
					<button type="button" class="btn btn-danger mt-20 w-75 share-mail-link" style="background: #ff0000;"> <span><img src="<?=base_url()?>assests/web_assets/img_web/save.png" class="img-responsive mr-2"></span>Uložiť konfiguráciu
					</button>
				</form>
			</div>
			<div class="col-md-6 col-sm-12" style="display:flex; align-items: center;">
				<form action="#" method="post" class="text-center">
					<h4 class="text-center font-weight-bolder modal_n_txt">
						Máte otázky?
					</h4>
					<p class="mt-20 custom_email_text">Nechajte nám na seba kontaktamy
						sa Vám čoskoro ozveme.</p>
					<input type="text" name="email_koiAcc" id="email_koi" class="form-control mx-auto mt-30 w-75 modal_input_11" placeholder="Vaše číslo" />
					<button type="submit" class="btn btn-danger mt-20 mx-auto w-75" style="background: #ff0000;"> <img src="<?=base_url()?>assests/web_assets/img_web/phone.png" class="img-responsive mr-2">Ozvite sa mi
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<!-- Wardobe JS -->
<script src="<?=base_url()?>assests/web_assets/js/wardrobe_js.js"></script>
<!-- slider js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script>
    $(document).on('mouseenter','.interiorr_imgg',function(){
        var getDataAttr = $(this).data('imgg');
        if(getDataAttr == '1'){
            $('.container_imgs').html('<img src="'+baseurl+'assests/web_assets/img_web/int_sideImg_1.jpg" alt="abc" class="showing_zoomed_images"/>');
        }
        else if(getDataAttr == '2'){
            $('.container_imgs1').html('<img src="'+baseurl+'assests/web_assets/img_web/int_sideImg_2.jpg" alt="abc" class="showing_zoomed_images"/>');
        }else if(getDataAttr == '3'){
            $('.container_imgs2').html('<img src="'+baseurl+'assests/web_assets/img_web/int_sideImg_3.jpg" alt="abc" class="showing_zoomed_images"/>');
        }else if(getDataAttr == '4'){
            $('.container_imgs3').html('<img src="'+baseurl+'assests/web_assets/img_web/int_sideImg_4.jpg" alt="abc" class="showing_zoomed_images"/>');
        }else if(getDataAttr == '5'){
            $('.container_imgs4').html('<img src="'+baseurl+'assests/web_assets/img_web/int_sideImg_5.jpg" alt="abc" class="showing_zoomed_images"/>');
        }else if(getDataAttr == '6'){
            $('.container_imgs5').html('<img src="'+baseurl+'assests/web_assets/img_web/int_sideImg_6.jpg" alt="abc" class="showing_zoomed_images"/>');
        }
        else{
            $('.container_imgs'+getDataAttr).html('');
        }
        
    });
</script>

<script>
	$(document).on('click','.cal-btn1',function(){
		 $.ajax({
         type: "POST",
         url: baseurl + "web/submit_wardrobe", 
         data: { },
         dataType: "text", 
         cache:false,
         success: 
              function(data){
              	 //let ht = $('#tab9_img_final').html()
                    var ht = $('#tab9_img_final').find('.tab-8-table').clone();
                 $('.shadow_cstm').html(data);
                 $('.final_wardrobe_thank').html(ht);
                 $('.product-category-container').addClass('d-none')
              }
          });
     
	})

   $(document).on('click','.setredBtn',function(){
		 $(this).addClass('confirm-mail-btn');
		 $(this).removeClass('setredBtn');
		 
         $(this).html('<i class="fa fa-spinner fa-spin"></i>Zdieľať');
         let email = $('#emailsend').val();
         if(email == ''){
         	return false;
         }
		 $.ajax({
         type: "POST",
         url: baseurl + "web/send_mail", 
         data: { email:email },
         dataType: "text", 
         cache:false,
         success: 
              function(data){
              	alert('Zdieľanie úspešné');
              	$('#modal_num1').modal('hide');
                $('.confirm-mail-btn').html('Zdieľať');
                $('.confirm-mail-btn').addClass('setredBtn')
                $('.setredBtn').removeClass('confirm-mail-btn')
              }
          });
     
	});

     $(document).on('click','.share-mail-link',function(){
         $(this).find('span').html('<i class="fa fa-spinner fa-spin"></i>');
         $(this).addClass('confirm-mail-btn-1');
         $(this).removeClass('share-mail-link');

         let email = $('#email_koi_11').val();
         if(email == ''){
         	return false;
         }
		 $.ajax({
         type: "POST",
         url: baseurl + "web/send_mail", 
         data: { email:email },
         dataType: "text", 
         cache:false,
         success: 
              function(data){
                  
              	 alert('Zdieľanie úspešné');
              	 $('#modal_num2').modal('hide');
                  $('.confirm-mail-btn-1').find('span').html('<img src="'+baseurl+'assests/web_assets/img_web/save.png" class="img-responsive mr-2">');

                  $('.confirm-mail-btn-1').addClass('share-mail-link')
                  $('.share-mail-link').removeClass('confirm-mail-btn-1')
              }
          });
     
	});


    $(document).on('click','.tab10-btn-2',function(){
         let name = $('.f-name-1').val()
         let surname = $('.f-surname-1').val()
         let phone = $('.f-phone-1').val()
         let email = $('.f-email-1').val()

         let address = $('.f-address').val()
         let city = $('.f-city').val()
         let zip = $('.f-zip').val()

         let address1 = $('.address-1').val()
         let city1 = $('.city-name-1').val()
         let zip1 = $('.zip-code-1').val();

        let height = $('#length_check_0').val();
        let depth = $('#length_check_1').val();
        let width = $('#length_check_2').val();

        var door = $('#radio-img-count').val();
        let subtotal = $('.wardrobe-total-cost').text();

		 $.ajax({
         type: "POST",
         url: baseurl + "web/submit_form", 
         data: { 
         	name:name,
         	surname:surname,
         	phone:phone,
         	email:email,
         	address:address,
         	city:city,
         	zip:zip,
         	address1:address1,
         	city1:city1,
         	zip1:zip1,
         	subtotal:subtotal,
         	width:width,
         	height:height,
         	depth:depth,
         	door:door,
            image:'Vstavaná_skriňa.jpg' 
         },
         dataType: "text", 
         cache:false,
         success: 
              function(data){
              	alert('Odoslanie potvrdzovacieho e-mialu bolo úspešné.')
              }
          });
     
	});
</script>