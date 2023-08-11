<?php include("include/header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="<?=base_url()?>assests/web_assets/css/built_in_cabinets_new.css">
<link rel="stylesheet" href="<?=base_url()?>assests/web_assets/css/d_cabinet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="<?=base_url()?>assests/web_assets/css/preloader.css">
<style>
	i#tooltip_id {
		font-size: 1.15rem;
		color: #000;
	}

	.cabinet_headingText {
		font-size: 1.3rem;
	}

	.search-section {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.search {
		position: relative;
	}

	.search_icon {
		position: absolute;
		top: 5px;
		right: 0px;
		opacity: .5;
	}

	.form-check .label-small {
		font-size: 0.86rem;
	}

	@media screen and (max-width: 767px) {

		.field {
			margin-top: 1.2rem;
		}

		.modal-header h4 {
			font-size: 0.8rem;
			font-weight: 500;
		}

		.search i {
			display: none;
		}
	}
</style>
<div id="page100">
	<div class="loader"></div>
</div>

<div class="container-fluid shadow_cstm pt-0 pb-2 wide ">
	<div class="row v_hide V_hidden">

    <input type="hidden" id="max-height" value="<?=$cabinet_dimension['length']?>">
	<input type="hidden" id="max-width" value="<?=$cabinet_dimension['width']?>">
	<input type="hidden" id="max-depth" value="<?=$cabinet_dimension['depth']?>">
	<input type="hidden" id="radio-img-count">
	<input type="hidden" id="wardrobe-type-id">

		<div class="col-lg-10">
			<div class="d-flex align-items-center">
				<h5 class="starting_text fw-bolder cabinet_headingText"></h5>&nbsp;<span class="ml-2"><i class="fas fa-question-circle ml-1 red-tooltip" id="tooltip_id" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená." style="display:none"></i></span>
			</div>
			<div class="progress-bar">
				
				<div class="step prev-1 prev">
					<div class="bullet bullet_first active V_hidden" data-toggle="tooltip" data-placement="bottom" title="Späť na tento krok">
						<span>Parametre</span>
					</div>
					<!-- <div class="check fas fa-check"></div> -->
				</div>


				<div class="step">
					<div class="bullet" data-toggle="tooltip" data-placement="bottom" title="Späť na tento krok">
						<span>Nastavenia</span>
					</div>
					<!-- <div class="check fas fa-check"></div> -->
				</div>

				<div class="step d-none">
					<div class="bullet">
						<span>new</span>
					</div>
					<div class="check fas fa-check"></div>
				</div>

				<div class="step">
					<div class="bullet">
						<span>Vnútro</span>
					</div>
					<div class="check fas fa-check"></div>
				</div>

				<div class="step">
					<div class="bullet">
						<span class="font12">Dvierka</span>
					</div>
					<div class="check fas fa-check"></div>
				</div>

				<div class="step">
					<div class="bullet" data-toggle="tooltip" data-placement="bottom" title="Späť na tento krok">
						<span class="font12">Výplň dvierok</span>
					</div>
					<!-- <div class="check fas fa-check"></div> -->
				</div>

				<div class="step">
					<div class="bullet" data-toggle="tooltip" data-placement="bottom" title="Späť na tento krok">
						<span class="font12">Úchytky</span>
					</div>
					<!-- <div class="check fas fa-check"></div> -->
				</div>

				<div class="step">
					<div class="bullet bullet_six" data-toggle="tooltip" data-placement="bottom" title="Späť na tento krok">
						<span>Cena + objednávka</span>
					</div>
					<!-- <div class="check fas fa-check"></div> -->
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
		<div class="col-lg-2 cabi_d_btn_top">
			<button type="button" class="align-items-center btn btn-danger btn_chngg d-flex font14 justify-content-around mb-10 tab9_btn mt-1" data-toggle="modal" data-target="#modal_num2"><img class="lazy tab1_imgg" src="<?=base_url()?>assests/web_assets/img_web/save_btn.png" alt=""> Uložiť konfiguráciu</button>
			<button type="button" class="bg-white btn btn-danger font-weight-bold tab9_btn text-danger font14 btn_chngg btn_chngg_11" data-toggle="modal" data-target="#modal_num1"><span class="loader-cls"></span><img class="lazy tab1_imgg" src="<?=base_url()?>assests/web_assets/img_web/share_btn.png" alt=""> Zdieľať</button>
		</div>
	</div>
</div>

<div class="product-category-container mb-md-90 mb-sm-90 pb-1">	
<div class="container wide">

<div class="row">

<div class="col-md-12">
	<div class="form-outer">
		<form action="#">
					

	<!-- tab 1 -->

	<div class="page slide-page">
		<!-- <div class="title">Floor Plan</div> -->
		<div class="row mt-3">
			<div class="col-md-12 col-lg-12">
				<a href="configurator" class="btn btn-basic Späť_btn mt-25"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
			</div>
			<div class="col-md-6 grid_center cabinet_main_img mt-10">
				<img src="<?=base_url()?>assests/web_assets/img_web/shrinka2.jpg" alt="" class="mob_h200">
			</div>
			<div class="align-items-center col-md-6 d-flex justify-content-center">
				<div class="radio-with-Icon floorPlan1 d-flex">
					<p class="radioOption-Item cabn">
						<input type="radio" name="floor_plan" id="planfloor1" value="true" class="next-1 next ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false">
						<label for="planfloor1">
							<img src="<?=base_url()?>assests/web_assets/img_web/Klasický_konfigurátor.jpg" alt="">
						</label>
					</p>

					<p class="radioOption-Item cabn">
						<a href="<?=base_url()?>web/image_configurator" class="mt-4">
							<img src="<?=base_url()?>assests/web_assets/img_web/ATYP - Konfigurácia_podľa_obrázka.jpg" alt="">
						</a>
					</p>
				</div>
			</div>
		</div>


		<div class="field btns">
			<!-- <button class="prev-1 prev">Previous</button> -->
			<!-- <button class="next-1 next btn-green">Next</button> -->
		</div>
	</div>

						<!-- tab 2 -->

<div class="page">
	<div class="row">
		<div class="col-lg-9">
			<div class="account-details-form">
                <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
				<div class="row">
					<div class="col-md-3 d-flex flex-column justify-content-center">
						<div class="align-items-center d-flex">
							<label class="lbl_sides label-reduce-dark font-weight-bold">Výška</label>
							<input type="text" placeholder="" id="length_check_0" class="mx-1 para_lfh2 vyskaleft1 left_cuboid setInpWidth" maxlength="4"><span class="font-weight-bolder text-dark font12"> mm </span>
						</div>
						<p class="text-danger" id="err-left" style="display:none;">Maximum: 600mm </p>
					</div>
					<div class="col-md-6 position-relative">
						<img src="<?=base_url()?>assests/web_assets/img_web/tab3_img1.png" class="img-fluid w-100 mt-10" alt="">
						<div class="text-center my-4 sirkkkkka">
							<label class="label-reduce-dark font-weight-bold">Šírka</label>
							<input type="text" placeholder="" id="length_check_2" class="para_width2  sirka1 width_cuboid setInpWidth" maxlength="4"><span class="font-weight-bolder text-dark font12"> mm </span>
							<p class="text-danger" id="err-sirka" style="display:none;">Maximum: 800mm </p>
						</div>
					</div>
					<div class="col-md-3 d-flex flex-column justify-content-center">
						<div class="align-items-center d-flex">
							<label class="lbl_sides label-reduce-dark font-weight-bold">Hĺbka</label>
							<input type="text" placeholder="" id="length_check_1" class="setInpWidth mx-1 para_depth2 hlbka1 depth_cuboid " maxlength="4"><span class="font-weight-bolder text-dark font12"> mm </span>
						</div>
						<p class="text-danger" id="err-hlbka" style="display:none;">Maximum: 300mm</p>
					</div>
					<div class="col-md-7 mx-auto mt-10">
						<div class="row tabDiv2">
							<div class="col-md-4 py-1">
								<div class="text-center">
									<label class="lbl_sides text-dark font-weight-bold mb-0">Výška</label>
									<input type="text" placeholder="" id="" class="mx-1 para_lfh2 vyskaleft2 Výška setInpWidth">mm
								</div>
							</div>
							<div class="col-md-4 bd_left_right py-1">
								<div class="text-center">
									<label class="font-weight-bold mb-0 text-dark">Šírka</label>
									<input type="text" placeholder="" id="" class="para_width2 sirka2 setInpWidth">mm
								</div>
							</div>
							<div class="col-md-4 py-1">
								<div class="text-center">
									<label class="font-weight-bold mb-0 text-dark">Hĺbka:</label>
									<input type="text" placeholder="" id="" class="para_width2 h25 hlbka1 setInpWidth">mm
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<?php include("include/cabinet_right_sidebar.php"); ?>
			<div class="field btns justify-content-center align-items-center mx-auto">
				<!-- <button class="prev-1 prev">Previous</button> -->
				<button class="next-1 next btn-green" id="btn_second" disabled>Ďalej</button>
			</div>
		</div>
	</div>

</div>

<!-- tab 3 -->

<div class="page">
<a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
<div class="row">
	<div class="col-lg-9">
		<div class="account-details-form">
			<div class="row justify-content-center">

<div class="col-md-6 tab_number_three">
	<table class="grid_center td400 cuboid-rt cuboid" id="table_1">
		<tbody>
			<tr>
				<td>
					<div class="cust_width_cuboid cabi_cust_width" style="display: grid;place-items: center;">
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
					<div class="cust_width_cuboid cabi_cust_width" style="display: grid;place-items: center;">
						<p class="added_sirka_value"></p>
					</div>
				</td>
				<td>
					<div class="cust_width_cuboid cabi_cust_width" style="display: grid;place-items: center;">
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
					<div class="cust_width_cuboid cabi_cust_width" style="display: grid;place-items: center;">
						<p class="added_sirka_value"></p>
					</div>
				</td>
				<td>
					<div class="cust_width_cuboid cabi_cust_width" style="display: grid;place-items: center;">
						<p class="added_sirka_value"></p>
					</div>
				</td>
				<td>
					<div class="cust_width_cuboid cabi_cust_width" style="display: grid;place-items: center;">
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
					<div class="cust_width_cuboid cabi_cust_width" style="display: grid;place-items: center;">
						<p class="added_sirka_value"></p>
					</div>
				</td>
				<td>
					<div class="cust_width_cuboid cabi_cust_width" style="display: grid;place-items: center;">
						<p class="added_sirka_value"></p>
					</div>
				</td>
				<td>
					<div class="cust_width_cuboid cabi_cust_width" style="display: grid;place-items: center;">
						<p class="added_sirka_value"></p>
					</div>
				</td>
				<td>
					<div class="cust_width_cuboid cabi_cust_width" style="display: grid;place-items: center;">
						<p class="added_sirka_value"></p>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
	<div class="col-md-9 mt-20">
		<h4 class="font-weight-bolder">Počet priestorov</h4>
		<div class="row tabDiv2">
			<div class="col-md-12 p-0">
				<div class="radio_container pocet-priestorov">

					<input type="radio" name="radio_img" id="one_priestorov" value="imge_1">
					<label for="one_priestorov" class="col lbl_sides font-weight-bolder mb-0"><span>1 časti</span>&nbsp;<small class="font14">135 mm</small></label>
				</div>
			</div>
		</div>
	</div>
				<!-- <div class="col-md-12">
					<button type="button" class="btn btn-danger Dalej_btn">Ďalej</button>
				</div> -->
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<?php include("include/cabinet_right_sidebar.php"); ?>
		<div class="field btns justify-content-center align-items-center mx-auto">
			<!-- <button class="prev-2 prev">Previous</button> -->
			<button class="next-2 next btn-green" id="tab_btn_3">Ďalej</button>
		</div>
	</div>
</div>

</div>

						<!--  NEW ADDED TAB (TAB 4) -->

	<div class="page">
    <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
		<div class="row newly-added-tab">
			<div class="col-lg-9 mt-30">
<div class="row">
	<!--<div class="row">-->
	<div class="col-md-9">
		<h3 class="font-weight-bold text-dark">Čielka</h3>
		<div class="card card-shadow">
			<div class="card-body py-2">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div id="chelkaBx_1" class="chelkaBx_1">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets" value="Vložené" />
							<div data-id="f-1" data-val="Vložené" class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)">
								<div class="fixed-box-image">
									<p class="text-center cus_text">Vložené</p>
								</div>
							</div>
						</label>
					</div>

					<div id="chelkaBx_2" class="chelkaBx_2">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets" value="Naložené-1" />
							<div data-id="f-2" data-val="Naložené-na-boky" class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)">
								<div class="fixed-box-image">
									<p class="text-center cus_text mb-0">Naložené</p>
									<p class="text-center small_texts">na boky</p>
								</div>
							</div>
						</label>
					</div>

					<div id="chelkaBx_3" class="chelkaBx_3">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets" value="Naložené-2" />
							<div data-id="f-3" data-val="Naložené-na-boky-a-dno" class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)">
								<div class="fixed-box-image">
									<p class="text-center cus_text mb-0">Naložené </p>
									<p class="text-center small_texts">na boky a dno</p>
								</div>
							</div>
						</label>
					</div>

					<div id="chelkaBx_4" class="chelkaBx_4">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets" value="Naložené-3" />
							<div data-id="f-4" data-val="Naložené-na-všetko" class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)">
								<div class="fixed-box-image">
									<p class="text-center cus_text mb-0">Naložené</p>
									<p class="text-center small_texts">na všetko</p>
								</div>
							</div>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<h3 class="font-weight-bold text-dark mob-margin">Interiér skrinky</h3>
		<div class="card card-shadow right-card interir-card-right">
			<div class="card-body p-1">
				<div class="center-content">
					<img class="img-responsive img-fluid cuss_img" src="<?=base_url()?>assests/web_assets/img_web/button_imgg.png" alt="fssad" data-toggle="modal" data-target="#img1Modal">
					<h4 class="font-weight-bold text-center px-2 mt-2 font12 decor_in_ext_text">Zvoľte dekor interéru a exteriéru skrinky</h4>
				</div>
			</div>
		</div>
	</div>
	<!--</div>-->
</div>

<div class="row mt-4">
	<div class="col-md-9">
		<h3 class="font-weight-bold text-dark">Vrch a dno</h3>
		<div class="card card-shadow">
			<div class="card-body py-2">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="topBttmBx_1" id="topBttmBx_1">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets_1" value="val-1" data-vrch="Naložený" data-dno=" vložené medzi boky
" />
							<div data-id="tb-1" data-val="Naložený-Dno-vložené-na-boky" class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)" >
								<div class="fixed-box-image">
									<p class="text-start text-dark mb-0 fs-x"><b class="bolder">Vrch: </b>Naložený</p>
									<p class="text-start text-dark fs-x"><b class="bolder">Dno: </b>vložené medzi boky</p>
								</div>
							</div>
						</label>
					</div>

					<div class="topBttmBx_2" id="topBttmBx_2">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets_1" value="val-2" data-vrch="Vložený" data-dno="Naložené medzi boky" />
							<div data-id="tb-2" data-val="Vložený-Dno-Naložené-na-boky"  class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)">
								<div class="fixed-box-image">
									<p class="text-start mb-0 text-dark fs-x"><b class="bolder">Vrch: </b>Vložený</p>
									<p class="text-start text-dark fs-x"><b class="bolder">Dno: </b>Naložené medzi boky</p>
								</div>
							</div>
						</label>
					</div>

					<div class="topBttmBx_3" id="topBttmBx_3">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets_1" value="val-3" data-vrch="Naložený" data-dno="Naložené" />
							<div data-id="tb-3" data-val="Naložený-Dno-Naložené" class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)">
								<div class="fixed-box-image">
									<p class="text-start mb-0 text-dark fs-x"><b class="bolder">Vrch: </b>Naložený</p>
									<p class="text-start text-dark fs-x"><b class="bolder">Dno: </b>Naložené</p>
								</div>
							</div>
						</label>
					</div>

					<div class="topBttmBx_4" id="topBttmBx_4">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets_1" value="val-4" data-vrch="Vložený" data-dno="Vložené" />
							<div data-id="tb-4" data-val="Vložený-Dno-Vložené" class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)">
								<div class="fixed-box-image">
									<p class="text-start text-dark mb-0 fs-x"><b class="bolder">Vrch: </b>Vložený</p>
									<p class="text-start text-dark fs-x"><b class="bolder">Dno: </b>Vložené</p>
								</div>
							</div>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<h3 class="font-weight-bold text-dark mob-margin">ABS</h3>
		<div class="card card-shadow right-card abss_right_card">
			<div class="card-body p-1">
				<div class="center-content">
					<img class="img-responsive img-fluid abs_imggg" src="<?=base_url()?>assests/web_assets/img_web/button_imgg.png" alt="fssad" data-toggle="modal" data-target="#absMod">
					<h4 class="font-weight-bold text-center px-2 mt-2 abs_decor_texxt">Zvoľte dekor ABS hrán</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row mt-4">
	<!--<div class="row">-->
	<div class="col-md-9">
		<h3 class="font-weight-bold text-dark">Chrbát</h3>
		<div class="card card-shadow">
			<div class="card-body py-2">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="backBx_1" id="backBx_1">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets_2" value="chrbat-1" data-back="Naložený sololit" data-diameter="(HDF 3mm)" />
							<div data-id="b-1" data-val="Naložený-sololit" class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)">
								<div class="fixed-box-image">
									<p class="text-center charbat_text"> Naložený sololit</p>
									<p class="text-center text-muted small_texts">(HDF 3mm)</p>
								</div>
							</div>
						</label>
					</div>

					<div class="backBx_2" id="backBx_2">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets_2" value="chrbat-2" data-back="Zafrézovaný sololit" data-diameter="(HDF 3mm)" />
							<div data-id="b-2" data-val="Zafrézovaný-sololit" class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)">
								<div class="fixed-box-image">
									<p class="text-center charbat_text mb-0">Zafrézovaný sololit</p>
									<p class="text-center text-muted small_texts">(HDF 3mm)</p>
								</div>
							</div>
						</label>
					</div>


					<div class="backBx_3" id="backBx_3">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets_2" value="chrbat-3" data-back="Zafrézovaná DTD" data-diameter="(10mm)" />
							<div data-id="b-3" data-val="Zafrézovaná-DTD" class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)">
								<div class="fixed-box-image">
									<p class="text-center charbat_text mb-0">Zafrézovaná DTD </p>
									<p class="text-center small_texts text-muted">(10mm)</p>
								</div>
							</div>
						</label>
					</div>

					<div class="backBx_4" id="backBx_4">
						<label class="radio-img mb-0">
							<input type="radio" name="box_cabinets_2" value="chrbat-4" data-back="Vložená DTD" data-diameter="(18mm)" />
							<div data-id="b-4" data-val="Vložená-DTD" class="image setBoxImag" style="background-image: url(<?=base_url()?>assests/web_assets/img_web/box_cabinets.png)">
								<div class="fixed-box-image">
									<p class="text-center charbat_text mb-0">Vložená DTD</p>
									<p class="text-center small_texts text-muted">(18mm)</p>
								</div>
							</div>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<input type="hidden" id="front-setboximg">
	<input type="hidden" id="topbottom-setboximg">
	<input type="hidden" id="back-setboximg">

	<div class="col-md-3">
		<div class="d-flex flex-column justify-content-start align-items-start">
			<div class="card_one">
				<h6 class="font-weight-bold text-dark mob-margin small_box_h3">Spoje</h6>
				<div class="card card-shadow small_card mt-20 spo_card-right">
					<div class="card-body p-1">
						<div class="center-content p-0">
							<img class="img-responsive img-fluid cuss_img_small spoja_img_f" src="<?=base_url()?>assests/web_assets/img_web/button_imgg.png" alt="fssad" data-toggle="modal" data-target="#Spoje_Modal">
							<h4 class="font-weight-bold text-center px-2 mt-1 spoje-text cab_conne-text">Zvoľte, čím bude skrinka spojená</h4>
						</div>
					</div>
				</div>
			</div>

			<div class="card_two mt-3">
				<h6 class="font-weight-bold text-dark small_box_h3">Pohľadovosť skrinky</h6>
				<div class="card card-shadow small_card mt-20 shrink-right-card">
					<div class="card-body p-1" data-toggle="modal" data-target="#skrinky_Modal">
						<div class="center-content p-0 skrinky_text_1">
							<img class="img-responsive img-fluid cuss_img_small text_change122 hideaftrappend" src="<?=base_url()?>assests/web_assets/img_web/button_imgg.png" alt="spoje">
							<h4 class="font-weight-bold text-center mt-1 view-text hideviewtextaftrapppend">Vyberte, na ktorej strane bude ABS hrana</h4>
                            <div class="appended_area-text-view">
                                <h4 class="font-weight-bold text-center mt-1 appended_text-view"></h4>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--</div>-->
</div>



		</div>
		<div class="col-lg-3">
			<?php include("include/cabinet_right_sidebar.php"); ?>
			<div class="field btns justify-content-center align-items-center mx-auto">
				<!-- <button class="prev-1 prev">Previous</button> -->
				<button class="next-1 next btn-green tab-3-next" id="t4next-btn" disabled>Ďalej</button>
			</div>
		</div>
	</div>
</div>

				<!-- tab 4 -->

		<div class="page">
        <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
			<div class="row">

				<div class="col-lg-9">
					<!-- <center>
						<small>Pohľad zhora</small>
					</center> -->

					<div class="account-details-form mt-30">
						<div class="row">
							<div class="col-md-3 d-flex flex-column justify-content-center">
								<div class="align-items-center d-flex justify-content-center">
									<label class="lbl_sides">Výška: <strong class="set-length-cls">180 mm</strong></label>

								</div>

							</div>
							<div class="col-md-6 table-responsive-mobile">
								<!-- <div class="create_table"> -->
								<!-- <div class="shadow_up"></div> -->
								<table class="grid_center cuboid-rt2 cuboid2">
									<tbody>
										<tr id="tab-4-tr">
											<td>
												<div class="table_6_click cab_tab_4 find-tbl-radio grid_center">
													<div class="text-center f10">
														<label>Kliknutím upravíte</label>
													</div>
												</div>
												<div class="text-center">
													<label>100 mm</label>
												</div>
											</td>
											<td>
												<div class="table_6_click cab_tab_4 find-tbl-radio grid_center">

													<div class="text-center f10">
														<label>Kliknutím upravíte</label>

													</div>
												</div>
												<div class="text-center">
													<label>100 mm</label>

												</div>
											</td>
											<td>
												<div class="table_6_click cab_tab_4 find-tbl-radio grid_center">

													<div class="text-center f10">
														<label>Kliknutím upravíte</label>

													</div>
												</div>
												<div class="text-center">
													<label>100 mm</label>

												</div>
											</td>

										</tr>
									</tbody>
								</table>
								<!-- </div> -->
								<div class="">
									<div class="text-center">
										<label>Šírka: <strong class="set-width-cls">300 mm</strong></label>

									</div>
								</div>
							</div>
							

						</div>

<div class="row">
<!-- <div class="col-md-3"></div>  -->
<div class="col-md-12">
<div class="cabi_h4_head" style="margin-top: 20px;">
<h4 class="font-weight-bolder">Zvoľte časť, ktorú chcete pridať</h4>
</div>

<div class="tables-selection-list">
<a href="javascript:void(0)" id="tab4-table-1-New" class="select_div mr-20 tab4-tbls-list" onclick="getDom('table_2_new')">
<span id="table_2_new">
	<table id="check-radio-tbl">
		<tbody>
			<tr class="set_frame_color">
				<td class="part_frame">
					<table class="inside_table_tr">
						<tr class="set_inside_framer">
							<td class="framer_selections part2_section_new "> 
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" id="single-door-input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</span>
</a>

<a href="javascript:void(0)" id="tab4-table-1" class="select_div mr-20 tab4-tbls-list" onclick="getDom('table_2')">
<span id="table_2">
	<table id="check-radio-tbl">
		<tbody>
			<tr class="set_frame_color">
				<td class="part_frame">
					<table class="inside_table_tr">
						<tr class="set_inside_framer">
							<td class="framer_selections part2_section "> 
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>

						<tr class="set_inside_framer">
							<td class="framer_selections part2_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
								
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</span>
</a>

<a href="javascript:void(0)" id="tab4-table-2" class="select_div mr-20 tab4-tbls-list" onclick="getDom('table_3')">
<span id="table_3">
	<table id="check-radio-tbl">
		<tbody>
			<tr class="set_frame_color">
				<td class="set_frame_color part_frame">
					<table class="inside_table_tr">
						<tr class="set_inside_framer">
							<td class="framer_selections part1_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>

						<tr class="set_inside_framer">
							<td class="framer_selections part1_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
						<tr class="set_inside_framer">
							<td class="framer_selections part1_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</span>
</a>

<a href="javascript:void(0)" id="tab4-table-3" class="select_div mr-20 tab4-tbls-list" onclick="getDom('table_4')">
<span id="table_4">
	<table id="check-radio-tbl">
		<tbody>
			<tr class="set_frame_color">
				<td class="set_frame_color part_frame">
					<table class="inside_table_tr">
						<tr class="set_inside_framer">
							<td class="framer_selections part3_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>

						<tr class="set_inside_framer">
							<td class="framer_selections part3_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
						<tr class="set_inside_framer">
							<td class="framer_selections part3_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
						<tr class="set_inside_framer">
							<td class="framer_selections part3_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</span>
</a>

<a href="javascript:void(0)" id="tab4-table-4" class="select_div mr-20 tab4-tbls-list" onclick="getDom('table_5')">
<span id="table_5">
	<table id="check-radio-tbl">
		<tbody>
			<tr class="set_frame_color">
				<td class="set_frame_color part_frame">
					<table class="inside_table_tr">
						<tr class="set_inside_framer">
							<td class="framer_selections part5_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>

						<tr class="set_inside_framer">
							<td class="framer_selections part5_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
						<tr class="set_inside_framer">
							<td class="framer_selections part5_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
						<tr class="set_inside_framer">
							<td class="framer_selections part5_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
						<tr class="set_inside_framer">
							<td class="framer_selections part5_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</span>
</a>

<a href="javascript:void(0)" id="tab4-table-5" class="select_div mr-20 tab4-tbls-list" onclick="getDom('table_6')">
<span id="table_6">
	<table id="check-radio-tbl">
		<tbody>
			<tr class="set_frame_color">
				<td class="set_frame_color part_frame">
					<table class="inside_table_tr">
						<tr class="set_inside_framer">
							<td class="framer_selections part6_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>

						<tr class="set_inside_framer">
							<td class="framer_selections part6_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
						<tr class="set_inside_framer">
							<td class="framer_selections part6_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
						<tr class="set_inside_framer">
							<td class="framer_selections part6_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
						<tr class="set_inside_framer">
							<td class="framer_selections part6_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
							</td>
						</tr>
						<tr class="set_inside_framer">
							<td class="framer_selections part6_section">
								<span class="t4-btn">
									<div class="d-flex-center-relative">
										<img src="<?=base_url()?>assests/web_assets/img_web/add_icon.png" alt="" class="t4_add-img">
										<img src="<?=base_url()?>assests/web_assets/img_web/plus_green.png" alt="" class="t4_add_green">
										<input type="text" class="cab_table_input" readonly>&nbsp;mm
									</div>
								</span>
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
</div>

		</div>
	</div>
	<div class="col-lg-3">
		<?php include("include/cabinet_right_sidebar.php"); ?>
		<div class="field btns justify-content-center align-items-center mx-auto">
			<!-- <button class="prev-2 prev">Previous</button> -->
			<button class="next-2 next btn-green" id="tab_btn_4_4">Ďalej</button>
		</div>
	</div>
</div>
		
		</div>

<!-- TAB 4 FINAL -->
<div class="page tab4-html">
	<a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev" id="tab4-prev"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
	<div class="row">
		<div class="col-lg-9">
			<div class="d-flex justify-content-center align-items-center flex-column">
				<div>
					<table class="grid_center cuboid-rt2 cuboid2" id="table_tab_4final">
					</table>
				</div>
				<div class="">
					<h4 class="font-weight-bolder">Kliknite na priestor, ktorý chcete vyplniť šuflíkom</h4>
					<p>Po dokončení kliknite na tlačidlo ďalej </p>
				</div>
			</div>
			<!-- <div class="col-3">
				<div class="d-flex-center-relative t4_bdr flex-column">
					<img src="<?=base_url()?>assests/web_assets/img_web/cross-white.png" alt="" class="cross_t4_remove-img">
					60&nbsp;cm
					<img src="<?=base_url()?>assests/web_assets/img_web/drawer4.png" alt="" class="">
				</div>
			</div> -->
			
		</div>
		<div class="col-lg-3">
			<?php include("include/cabinet_right_sidebar.php"); ?>
			<div class="field btns justify-content-center align-items-center mx-auto">
				<!-- <button class="prev-2 prev">Previous</button> -->
				<button class="next-2 next btn-green" id="tab_btn_4_5">Ďalej</button>
			</div>
		</div>
	</div>
</div>

<!-- tab 5 -->
<div class="page tab5_html">
<a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev" id="inner_img_remove"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
<div class="row">
<div class="col-lg-9">

<div class="account-details-form">

<div class="row">
<div class="col-md-3 d-flex flex-column justify-content-center"></div>
<div class="col-md-8 mt-10 getHtmlStrct">
<div class="create_table" id="pushing_tab5">
	<table class="grid_center cuboid-rt2 cuboid2" id="table_tab_5">
	<tbody>
	<tr>
	<td>
		<div class="table_6_click cab_tab_4 position-relative find-tbl-radio_1 push_off_1" onclick="remove_drawer()">
		<table>
			<tbody>
				<tr class="set_frame_color">
					<td class="set_frame_color part_frame">
						<table class="inside_table_tr">
						<tbody>
							<tr class="set_inside_framer">
								<td class="framer_selections bg_img_table part_selected_frame drawer_add"></td>
							</tr>
							<tr class="set_inside_framer">
								<td class="framer_selections bg_img_table part_selected_frame drawer_add"></td>
							</tr>
							<tr class="set_inside_framer">
								<td class="framer_selections bg_img_table part_selected_frame drawer_add"></td>
							</tr>
						</tbody>
					 </table>
					</td>
					</tr>
				</tbody>
		</table>
		</div>

		<div class="text-center 100_mm_hide">
			<label>100 mm</label>
		</div>
		
	</td>
		<td>
			<div class="table_6_click cab_tab_4 position-relative find-tbl-radio_1 push_off_2" onclick="remove_drawer()">
				<table>
					<tbody>
						<tr class="set_frame_color">
							<td class="set_frame_color part_frame">
								<table class="inside_table_tr">
		<tbody>
		<tr class="set_inside_framer">
		<td class="framer_selections part_selected_frame drawer_add">

		</td>
		</tr>

		<tr class="set_inside_framer">
		<td class="framer_selections part_selected_frame drawer_add">

		</td>
		</tr>
		<tr class="set_inside_framer">
		<td class="framer_selections part_selected_frame drawer_add">

		</td>
		</tr>
		</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="text-center 100_mm_hide">
				<label>100 mm</label>

			</div>
			
		</td>
		<td>
			<div class="table_6_click cab_tab_4 position-relative find-tbl-radio_1 push_off_3" onclick="remove_drawer()">
				<table>
					<tbody>
						<tr class="set_frame_color">
							<td class="set_frame_color part_frame">
		<table class="inside_table_tr">
		<tbody>
		<tr class="set_inside_framer">
		<td class="framer_selections part_selected_frame drawer_add">

		</td>
		</tr>

		<tr class="set_inside_framer">
		<td class="framer_selections part_selected_frame drawer_add">

		</td>
		</tr>
		<tr class="set_inside_framer">
		<td class="framer_selections part_selected_frame drawer_add">

		</td>
		</tr>
		</tbody>
		</table>
		</td>
		</tr>
		</tbody>
		</table>
		</div>
		<div class="text-center 100_mm_hide">
		<label>100 mm</label>

		</div>

		</td>

	</tr>
	</tbody>
	</table>
</div>
		
		<div class="col-md-12 three-push-systems d-none">
        <table style="width:423px;">
            <tr>
                <td id="push-sys-1">
                    <div class="">
                        <div class="card card-shadow">
                            <div class="card-body p-1">
                                <div class="check-box">
                                    <input type="checkbox" name="switch" class="check check-right" id="cb__1">
                                    <label for="cb__1">
                                        Push systém
                                    </label>
                                </div>
                                <small class="f9">Otvorí sa po stlačení</small>
                            </div>
                        </div>
                    </div>
                </td>
                <td id="push-sys-2">
                    <div class="">
                        <div class="card card-shadow">
                            <div class="card-body p-1">
                                <div class="check-box">
                                    <input type="checkbox" name="switch" class="check check-right" id="cb__2">
                                    <label for="cb__2">
                                        Push systém
                                    </label>
                                </div>
                                <small class="f9">Otvorí sa po stlačení</small>
                            </div>
                        </div>
                    </div>
                </td>
                <td id="push-sys-3">
                    <div class="">
                        <div class="card card-shadow">
                            <div class="card-body p-1">
                                <div class="check-box">
                                    <input type="checkbox" name="switch" class="check check-right" id="cb__3">
                                    <label for="cb__3">
                                        Push systém
                                    </label>
                                </div>
                                <small class="f9">Otvorí sa po stlačení</small>
                            </div>
                        </div>
                    </div>
                </td>
                <td id="push-sys-4">
                    <div class="">
                        <div class="card card-shadow">
                            <div class="card-body p-1">
                                <div class="check-box">
                                    <input type="checkbox" name="switch" class="check check-right" id="cb__4" >
                                    <label for="cb__4">
                                        Push systém
                                    </label>
                                </div>
                                <small class="f9">Otvorí sa po stlačení</small>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        
			<!--<div class="row" style="gap: 15px;">
				<div class="">
					<div class="card card-shadow">
						<div class="card-body p-1">
							<div class="check-box">
								<input type="checkbox" name="switch" class="check check-right" id="cb__1">
								<label for="cb__1">
									Push systém
								  <p>Otvorí sa po stlačení</p>
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="">
					<div class="card card-shadow">
						<div class="card-body p-1">
							<div class="check-box">
								<input type="checkbox" name="switch" class="check check-right" id="cb__2">
								<label for="cb__2">
									Push systém
                                    <p>Otvorí sa po stlačení</p>
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="">
					<div class="card card-shadow">
						<div class="card-body p-1">
							<div class="check-box">
								<input type="checkbox" name="switch" class="check check-right" id="cb__3">
								<label for="cb__3">
									Push systém
									<p>Otvorí sa po stlačení</p>
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="">
					<div class="card card-shadow">
						<div class="card-body p-1">
							<div class="check-box">
								<input type="checkbox" name="switch" class="check check-right" id="cb__4">
								<label for="cb__4">
									Lägg till låda
									<p>Otvorí sa po stlačení</p>
								</label>
							</div>

						</div>
					</div>
				</div>
			</div>-->


		</div>
	</div>
</div>
<div class="row d-none">
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<h4 class="font-weight-bolder mt-20">Zvoľte dvierka, ktoré chcete pridať</h4>
		<div class="mt-30 tables-section-tab5">

			<a href="javascript:void(0)" class="select_div drawer_unclick" onclick="getDom('table_7')">
				<span id="table_7">
	    <table id="check-radio-tbl-5">
		<tbody>
			<tr class="set_frame_color">
				<td class="set_frame_color part_frame">
					<table class="inside_table_tr">
						<tr class="set_inside_framer">
							<td class="framer_selections frame1slide part_selection_door1">
								<div class="right_door text-center">
									<h5>
										Smer otvárania <i class="fa fa-arrow-left" aria-hidden="true"></i>
									</h5>
								</div>
							</td>
						</tr>

					</table>
				</td>
			</tr>
		</tbody>
	</table>

	<div class="plusoo" style="display: none;">
		
		<span class="plus_ico bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
		<span class="plus_ico1 bg-transparent click_plus rotet_only" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
		<span class="plus_ico2 bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
		<span class="plus_ico3 bg-transparent click_plus rotet_only" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
		<span class="plus_ico4 bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
	</div>
		<div class="rotate" style="display:none;">
			<span class="rot pr-10"><i class="fas fa-sync"></i></span>
			<span class="rot delet pl-10"><i class="fas fa-trash-alt"></i></span>
		</div>
		<div class="arr_door text-center" style="display: none;">
			<span class="font-weight-bold text-dark" style="font-size: 11px;">Smer otvárania</span> <br>
			<img src="<?=base_url()?>assests/web_assets/img_web/right_arrow.png" alt="" class="mt-2">
		</div>
		<div class="card cross_card" style="display: none;">
			<img src="<?=base_url()?>assests/web_assets/img_web/cross_img_1.png" alt="" height="20px">
		</div>
		</span>
		</a>

		<a href="javascript:void(0)" class="select_div drawer_unclick" onclick="getDom('table_8')">
			<span id="table_8">
				<table id="check-radio-tbl-5">
					<tbody>
						<tr class="set_frame_color">
							<td class="part_frame">
								<table class="inside_table_tr">
									<tr class="set_inside_framer">
										<td class="framer_selections part_selection_door1">
											<div class="right_door text-center">
												<h5>
													Smer otvárania <i class="fa fa-arrow-right" aria-hidden="true"></i>
												</h5>
											</div>
										</td>
									</tr>

								</table>
							</td>
						</tr>
					</tbody>
				</table>

				<div class="plusoo" style="display:none;">
					
					<span class="plus_ico5 bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
					<span class="plus_ico6 bg-transparent click_plus rotet_only" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
					<span class="plus_ico7 bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
					<span class="plus_ico8 bg-transparent click_plus rotet_only" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
					<span class="plus_ico9 bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
				</div>
				<div class="rotate" style="display:none;">
					<span class="rot pr-10"><i class="fas fa-sync"></i></span>
					<span class="rot delet pl-10"><i class="fas fa-trash-alt"></i></span>
				</div>
				<div class="arr_door text-center" style="display: none;">
					<span class="font-weight-bold text-dark" style="font-size: 11px;">Smer otvárania</span> <br>
					<img src="<?=base_url()?>assests/web_assets/img_web/left_arrow.png" alt="" class="mt-2">
				</div>
				<div class="card cross_card" style="display: none;">
					<img src="<?=base_url()?>assests/web_assets/img_web/cross_img_1.png" alt="" height="20px">
				</div>
			</span>
		</a>
		<a href="javascript:void(0)" class="select_div drawer_unclick" onclick="getDom('table_9')">
			<span id="table_9">
				<table id="check-radio-tbl-5">
					<tbody>
						<tr class="set_frame_color">
							<td class="part_frame">
								<table class="inside_table_tr">
									<tr class="set_inside_framer">
										<td class="framer_selections part_selection_door2">
											<div class="right_door text-center">

												<h4><i class="fa fa-arrow-left" aria-hidden="true"></i></h4>
											</div>
										</td>
										<td class="framer_selections part_selection_door2">
											<div class="right_door text-center">

												<h4><i class="fa fa-arrow-right" aria-hidden="true"></i></h4>

											</div>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="plusoo" style="display:none;">
					<!-- left -->
					
					<span class="plus_ico1__2_door bg-transparent click_plus rotet_only" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
					<span class="plus_ico2__2_door bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
					<span class="plus_ico3__2_door bg-transparent click_plus rotet_only" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
				</div>
				<div class="plusoo" style="display:none;">
					<!-- right -->
					<span class="plus_ico6_2_door bg-transparent click_plus rotet_only" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
					<span class="plus_ico7_2_door bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
					<span class="plus_ico8_2_door bg-transparent click_plus rotet_only" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>

				</div>
				<div class="arr_door text-center" style="display: none;">
					<span class="font-weight-bold text-dark" style="font-size: 11px;">Smer otvárania</span> <br>
					<img src="<?=base_url()?>assests/web_assets/img_web/right_arrow.png" alt="" class="mt-2"> <img src="<?=base_url()?>assests/web_assets/img_web/left_arrow.png" alt="" class="mt-2">
				</div>
				<div class="card cross_card" style="display: none;">
					<img src="<?=base_url()?>assests/web_assets/img_web/cross_img_1.png" alt="" height="20px">
				</div>
			</span>
		</a>
		<!-- <a href="javascript:void(0)" class="select_div select_div_2 position-relative" onclick="getDom('table_10')">
			<span id="table_10">
				<table id="check-radio-tbl-5">
					<tbody>
						<tr class="set_frame_color">
							<td class="part_frame_drawer">
								<table class="inside_table_tr">
									<tr class="set_inside_framer">
										<td class="framer_selections part_selection_door2_2">
											<div class="right_door text-center drawer_handle" style="height: 74px !important;">
												<div class="td_under_border">
													<div class="plusoo" style="display:none">
														<span class="plus_ico_drawer bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
													</div>
												</div>
											</div>
										</td>
									</tr>


								</table>
							</td>
						</tr>
					</tbody>
				</table>
				 <div class="plusoo" >
					<span class="plus_ico_drawer bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?//=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
					<span class="plus_ico_drawer_1 bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?//=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
					<span class="plus_ico_drawer_2 bg-transparent click_plus" onclick="get_ses_id(this)"><img src="<?//=base_url()?>assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)"></span>
				</div> 
			</span>
		</a> -->

					</div>
				</div>
			</div>

			
		</div>
	</div>
	<div class="col-lg-3">
		<?php include("include/cabinet_right_sidebar.php"); ?>
		
		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editDoorModal">
		Door Section
		</button> -->

		<div class="field btns justify-content-center align-items-center mx-auto">
			<!-- <button class="prev-2 prev">Previous</button> -->
			<button class="next-2 next btn-green" id="tab_btn_5_5" disabled>Ďalej</button>
		</div>
	</div>
</div>
</div>

<!-- tab 5 new design modal -->
<div class="modal fade" id="editDoorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Potvrdiť</h5> -->
        <button type="button" class="close pt-0 pr-0" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
			<div class="col-md-12 mb-20 door-section-cls-main" id="door-section-cls-2">
				<div class="card d-types-clr">
					<div class="row">
						<input type="hidden" id="door-section-count">
						<div class="col-md-6 col-6 right-bdr mx-auto">
							<p>Osobitne</p>
							<img src="<?=base_url()?>assests/web_assets/img_web/Osobitne2.png" alt="" class="door-section-cls" data-section="2">
						</div>
						<div class="col-md-6 col-6 mx-auto">
							<p>Spolu</p>
							<img src="<?=base_url()?>assests/web_assets/img_web/Spolu2.png" alt="" class="door-section-cls" data-section="1">
						</div>
						<div class="col-md-12 pt-20">
							<p>Smer otvárania</p>
						</div>
						<div class="col-md-12 pt-1">
							<div class="d-flex-center-relative">
								<button type="button" class="btn mr-10 left-arrow-btn arrow-btn" data-check="left">
									<img src="<?=base_url()?>assests/web_assets/img_web/right_arrow.png" alt="" class="px-1 w40" >
								</button>
								<button type="button" class="btn mr-10 right-arrow-btn arrow-btn" data-check="right">
									<img src="<?=base_url()?>assests/web_assets/img_web/left_arrow.png" alt="" class="px-1 w40">
								</button>
							</div>
						</div>
						<div class="col-md-12">
							<div class="pt-15">
								<div class="card card-shadow">
									<div class="card-body p-1">
										<div class="check-box">
											<input type="checkbox" name="switch" class="check check-right" id="cb__4">
											<label for="cb__4">
												<span class="f16">Push systém</span><br><small class="f9">Otvorí sa po stlačení</small>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 mb-20 door-section-cls-main" id="door-section-cls-3">
				<div class="card d-types-clr">
					<div class="row">
						<div class="col-md-6 col-6 right-bdr">
							<p>Osobitne</p>
							<img src="<?=base_url()?>assests/web_assets/img_web/Osobitne3.png" alt="" class="door-section-cls" data-section="3">
						</div>
						<div class="col-md-6 col-6">
							<p>Spolu</p>
							<img src="<?=base_url()?>assests/web_assets/img_web/Spolu3.png" alt="" class="door-section-cls" data-section="1">
						</div>
						<div class="col-md-12 pt-20">
							<p>Smer otvárania</p>
						</div>
						<div class="col-md-12 pt-1">
							<div class="d-flex-center-relative">
								<button type="button" class="btn mr-10 left-arrow-btn arrow-btn" data-check="left">
									<img src="<?=base_url()?>assests/web_assets/img_web/right_arrow.png" alt="" class="px-1 w40">
								</button>
								<button type="button" class="btn mr-10 right-arrow-btn arrow-btn" data-check="right">
									<img src="<?=base_url()?>assests/web_assets/img_web/left_arrow.png" alt="" class="px-1 w40">
								</button>
							</div>
						</div>
						<div class="col-md-12">
							<div class="pt-15">
								<div class="card card-shadow">
									<div class="card-body p-1">
										<div class="check-box">
											<input type="checkbox" name="switch" class="check check-right" id="cb__4">
											<label for="cb__4">
												<span class="f16">Push systém</span><br><small class="f9">Otvorí sa po stlačení</small>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 mb-20 door-section-cls-main" id="door-section-cls-4">
				<div class="card d-types-clr">
					<div class="row">
						<div class="col-md-6 col-6 right-bdr">
							<p>Osobitne</p>
							<img src="<?=base_url()?>assests/web_assets/img_web/Osobitne4.png" alt="" class="door-section-cls" data-section="4">
						</div>
						<div class="col-md-6 col-6">
							<p>Spolu</p>
							<img src="<?=base_url()?>assests/web_assets/img_web/Spolu4.png" alt="" class="door-section-cls" data-section="1">
						</div>
						<div class="col-md-12 pt-20">
							<p>Smer otvárania</p>
						</div>
						<div class="col-md-12 pt-1">
							<div class="d-flex-center-relative">
								<button type="button" class="btn mr-10 left-arrow-btn arrow-btn" data-check="left">
									<img src="<?=base_url()?>assests/web_assets/img_web/right_arrow.png" alt="" class="px-1 w40">
								</button>
								<button type="button" class="btn mr-10 right-arrow-btn arrow-btn" data-check="right">
									<img src="<?=base_url()?>assests/web_assets/img_web/left_arrow.png" alt="" class="px-1 w40">
								</button>
							</div>
						</div>
						<div class="col-md-12">
							<div class="pt-15">
								<div class="card card-shadow">
									<div class="card-body p-1">
										<div class="check-box">
											<input type="checkbox" name="switch" class="check check-right" id="cb__4">
											<label for="cb__4">
												<span class="f16">Push systém</span><br><small class="f9">Otvorí sa po stlačení</small>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 mb-20 door-section-cls-main" id="door-section-cls-5">
				<div class="card d-types-clr">
					<div class="row">
						<div class="col-md-6 col-6 right-bdr">
							<p>Osobitne</p>
							<img src="<?=base_url()?>assests/web_assets/img_web/Osobitne5.png" alt="" class="door-section-cls" data-section="5">
						</div>
						<div class="col-md-6 col-6">
							<p>Spolu</p>
							<img src="<?=base_url()?>assests/web_assets/img_web/Spolu5.png" alt="" class="door-section-cls" data-section="1">
						</div>
						<div class="col-md-12 pt-20">
							<p>Smer otvárania</p>
						</div>
						<div class="col-md-12 pt-1">
							<div class="d-flex-center-relative">
								<button type="button" class="btn mr-10 left-arrow-btn arrow-btn" data-check="left">
									<img src="<?=base_url()?>assests/web_assets/img_web/right_arrow.png" alt="" class="px-1 w40">
								</button>
								<button type="button" class="btn mr-10 right-arrow-btn arrow-btn" data-check="right">
									<img src="<?=base_url()?>assests/web_assets/img_web/left_arrow.png" alt="" class="px-1 w40">
								</button>
							</div>
						</div>
						<div class="col-md-12">
							<div class="pt-15">
								<div class="card card-shadow">
									<div class="card-body p-1">
										<div class="check-box">
											<input type="checkbox" name="switch" class="check check-right" id="cb__4">
											<label for="cb__4">
												<span class="f16">Push systém</span><br><small class="f9">Otvorí sa po stlačení</small>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 mb-20 door-section-cls-main" id="door-section-cls-6">
				<div class="card d-types-clr">
					<div class="row">
						<div class="col-md-6 col-6 right-bdr">
							<p>Osobitne</p>
							<img src="<?=base_url()?>assests/web_assets/img_web/Osobitne6.png" alt="" class="door-section-cls" data-section="6">
						</div>
						<div class="col-md-6 col-6">
							<p>Spolu</p>
							<img src="<?=base_url()?>assests/web_assets/img_web/Spolu6.png" alt="" class="door-section-cls" data-section="1">
						</div>
						<div class="col-md-12 pt-20">
							<p>Smer otvárania</p>
						</div>
						<div class="col-md-12 pt-1">
							<div class="d-flex-center-relative">
								<button type="button" class="btn mr-10 left-arrow-btn arrow-btn" data-check="left">
									<img src="<?=base_url()?>assests/web_assets/img_web/right_arrow.png" alt="" class="px-1 w40">
								</button>
								<button type="button" class="btn mr-10 right-arrow-btn arrow-btn" data-check="right">
									<img src="<?=base_url()?>assests/web_assets/img_web/left_arrow.png" alt="" class="px-1 w40">
								</button>
							</div>
						</div>
						<div class="col-md-12">
							<div class="pt-15">
								<div class="card card-shadow">
									<div class="card-body p-1">
										<div class="check-box">
											<input type="checkbox" name="switch" class="check check-right" id="cb__4">
											<label for="cb__4">
												<span class="f16">Push systém</span><br><small class="f9">Otvorí sa po stlačení</small>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="field btns justify-content-center align-items-center mx-auto d-flex">
		   <button class="btn btn-danger door-section-confirm" type="button">Potvrdiť</button>
	    </div>
      </div>
      
    </div>
  </div>
</div>
						

<!-- tab 6 -->
<div class="page tab6-inside-div">
<a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
	<div class="row">
	<div class="col-lg-9 mt-20">
		<div class="account-details-form">

			<div class="col-md-6 mx-auto">
				<div class="final_table" id="gt_tb">
					
				</div>

			</div>
			<div class="col-md-12">
				<div class="selection_all_woodImgs">
					<input id="lk" type="checkbox" id="checkbox-woodImgs" name="lk" value="lk"/>
					<label for="lk"><img src="<?=base_url()?>assests/web_assets/img_web/check-light.png"> Označiť všetky výplne</label>
				</div>
			</div>

			<div class="container mt-20">
			
				<div class="swiper-container pl-25 pr-25 pb-4 pt-70">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">

						<?php if($doorfiller){
foreach($doorfiller as $door){
							?>
						<div class="swiper-slide d-flex flex-column">
							<span class="overlay-text">Dub Kansas <br> <span class="font-weight-light">001 - <?=$door['color']?></span></span>
							<img data-id="<?=$door['id']?>" src="<?=base_url().$door['image']?>" alt="" class="mb-20 zoom select_imgs tab_8_img reduce_box">
							
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
		<?php include("include/cabinet_right_sidebar.php"); ?>
		<div class="field btns justify-content-center align-items-center mx-auto">
			<!-- <button class="prev-2 prev">Previous</button> -->
			<button class="next-2 next btn-green" id="btn_tab_66" disabled>Ďalej</button>
		</div>
	</div>
	</div>

</div>


<!-- tab 7 -->

<div class="page">
<a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
<div class="row">
<div class="col-lg-9 mt-20">
	<div class="account-details-form">

		<div class="col-md-7 mx-auto">
			<!-- <img src="<?=base_url()?>assests/web?=base_url()?_assests/web_assets/img_web/shrinka_tab7_img1.png" class="img-fluid" alt=""> -->
			<div class="tab-7-table">
			</div>
			<div class="col-md-9">
				<div class="row handles_append_show_append">
				</div>
			</div>
		</div>

		<div class="container mt-20">
			
			<div class="swiper-container pl-25 pr-25 pb-4 pt-50">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<div class="swiper-slide d-flex flex-column">
						<div class="handles_add">
							<span class="overlay-text"><span class="hndle_1_xt"> Dub Kansas </span> <br> <span class="font-weight-light hndle_pp">001 - EGER 5</span></span>
							<img src="<?=base_url()?>assests/web_assets/img_web/shrinka_tab7_img2.png" alt="" class="mb-20 zoom select_imgss tab_8_img reduce_box handles-img">
							<!--<img src="<?=base_url()?>assests/web_assets/img_web/shrinka_tab7_img5.png" alt="" class="zoom">-->
						</div>
					</div>
					<div class="swiper-slide d-flex flex-column">
						<div class="handles_add">
							<span class="overlay-text"><span class="hndle_1_xt"> Dub Kansas </span> <br> <span class="font-weight-light hndle_pp">001 - EGER 5</span></span>
							<img src="<?=base_url()?>assests/web_assets/img_web/shrinka_tab7_img5.png" alt="" class="mb-20 zoom select_imgss tab_8_img reduce_box handles-img">
						</div>
					</div>
					<div class="swiper-slide d-flex flex-column">
						<div class="handles_add">
							<span class="overlay-text"><span class="hndle_1_xt"> Dub Kansas </span> <br> <span class="font-weight-light hndle_pp">001 - EGER 5</span></span>
							<img src="<?=base_url()?>assests/web_assets/img_web/shrinka_tab7_img5.png" alt="" class="mb-20 zoom select_imgss tab_8_img reduce_box handles-img">
						</div>
					</div>
					<div class="swiper-slide d-flex flex-column">
						<div class="handles_add">

							<span class="overlay-text"><span class="hndle_1_xt"> Dub Kansas </span> <br> <span class="font-weight-light hndle_pp">001 - EGER 5</span></span>
							<img src="<?=base_url()?>assests/web_assets/img_web/shrinka_tab7_img5.png" alt="" class="mb-20 zoom select_imgss tab_8_img reduce_box handles-img">
						</div>
					</div>
					<div class="swiper-slide d-flex flex-column">
						<div class="handles_add">
							<span class="overlay-text"><span class="hndle_1_xt"> Dub Kansas </span> <br> <span class="font-weight-light hndle_pp">001 - EGER 5</span></span>
							<img src="<?=base_url()?>assests/web_assets/img_web/shrinka_tab7_img5.png" alt="" class="mb-20 zoom select_imgss tab_8_img reduce_box handles-img">
						</div>
					</div>
					<div class="swiper-slide d-flex flex-column">
						<div class="handles_add">
							<span class="overlay-text"><span class="hndle_1_xt"> Dub Kansas </span> <br> <span class="font-weight-light hndle_pp">001 - EGER 5</span></span>
							<img src="<?=base_url()?>assests/web_assets/img_web/shrinka_tab7_img5.png" alt="" class="mb-20 zoom select_imgss tab_8_img reduce_box handles-img">
						</div>
					</div>
					<div class="swiper-slide d-flex flex-column">
						<div class="handles_add">
							<span class="overlay-text"><span class="hndle_1_xt"> Dub Kansas </span> <br> <span class="font-weight-light hndle_pp">001 - EGER 5</span></span>
							<img src="<?=base_url()?>assests/web_assets/img_web/shrinka_tab7_img5.png" alt="" class="mb-20 zoom select_imgss tab_8_img reduce_box handles-img">
						</div>
					</div>
					<div class="swiper-slide d-flex flex-column">
						<div class="handles_add">
							<span class="overlay-text"><span class="hndle_1_xt"> Dub Kansas </span> <br> <span class="font-weight-light hndle_pp">001 - EGER 5</span></span>
							<img src="<?=base_url()?>assests/web_assets/img_web/shrinka_tab7_img5.png" alt="" class="mb-20 zoom select_imgss tab_8_img reduce_box handles-img">
						</div>
					</div>
					<div class="swiper-slide d-flex flex-column">
						<div class="handles_add">
							<span class="overlay-text"><span class="hndle_1_xt"> Dub Kansas </span> <br> <span class="font-weight-light hndle_pp">001 - EGER 5</span></span>
							<img src="<?=base_url()?>assests/web_assets/img_web/shrinka_tab7_img5.png" alt="" class="mb-20 zoom select_imgs tab_8_img reduce_box handles-img">
						</div>
					</div>
					<div class="swiper-slide d-flex flex-column">
						<div class="handles_add">
							<span class="overlay-text"><span class="hndle_1_xt"> Dub Kansas </span> <br> <span class="font-weight-light hndle_pp">001 - EGER 5</span></span>
							<img src="<?=base_url()?>assests/web_assets/img_web/shrinka_tab7_img5.png" alt="" class="mb-20 zoom select_imgs tab_8_img reduce_box handles-img">
						</div>
					</div>
				</div>

				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
</div>
	</div>
</div>
<div class="col-lg-3">
	<?php include("include/cabinet_right_sidebar.php"); ?>
	
	<div class="field btns justify-content-center align-items-center mx-auto">
		<!-- <button class="prev-2 prev">Previous</button> -->
		<button class="next-2 next btn-green" id="btn_tab_77" onclick="final_remove()" disabled>Ďalej</button>
	</div>
</div>
</div>

</div>

		<!-- tab 8 -->

<div class="page">
<a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
	<div class="row tabb__8">
		<div class="col-lg-9 mt-20">
			<div class="account-details-form">
				<div class="col-md-6 mx-auto mt-10 verti-relative">
					<!-- <img src="<?=base_url()?>assests/web?=base_url()?_assests/web_assets/img_web/shrinka_tab7_img1.png" class="img-fluid" alt=""> -->
					<div class="verti-arrow">
						<span class="vert_title">Výška: <b class="set-length-cls">190 cm</b></span>
					</div>
					<div class="tab-end-table">
					</div>
				</div>
				<div class="pt-10 arrow-section">
					<div class="horizontal-arrow"></div>
					<span class="hor_title">Šírka: <b class="set-width-cls">300 cm</b></span>
				</div>
				<div class="pt-40 append_tab_5_table_final">
				</div>

				<div class="col-md-12">
					<div class="d-flex justify-content-start align-items-center mt-15">
						<h4 class="font-weight-bolder finalHedding">Zvolené nastavenia skrinky</h4>
						<span class="text-muted ml-2">(kliknutím upravíte)</span>
					</div>
					<div class="row mt-4">
						<div class="col">
							<h5 class="fonts__smaller">Čielka</h5>
							<div id="append_radioBx_1" class="append_radioBx_1 append_radio_Bxes mt-4"></div>
						</div>
						<div class="col">
							<h5 class="fonts__smaller">Vrch a dno</h5>
							<div id="append_radioBx_2" class="append_radioBx_2 append_radio_Bxes mt-4"></div>
						</div>
						<div class="col">
							<h5 class="fonts__smaller">Chrbát</h5>
							<div id="append_radioBx_3" class="append_radioBx_3 append_radio_Bxes mt-4"></div>
						</div>
						<div class="col">
							<h5 class="fonts__smaller">Spoje</h5>
							<div id="append_radioBx_4" class="append_radioBx_4 append_radio_Bxes"></div>
						</div>
						<div class="col">
							<h5 class="fonts__smaller">Pohľadovosť</h5>
							<div id="append_radioBx_5" class="append_radioBx_5 append_radio_Bxes">
                                <div class="card card-shadow small_card box_design_final_page mt-20">
                                    <div class="card-body p-1 h-100 grid_center">
                                        <div class="center-content p-0">
                                            <h3 class="appended_text-view"></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
				<div class="">
					<hr class="" style="border:1px solid #ccc">
					<div class="row">

						<div class="col-md-3">
							<h2 class="font-weight-bold">Cena bez DPH</h2>
						</div>
						<div class="col-md-9">
							<div class="d-flex justify-content-end align-items-cente Cena_s_PH" style="gap:18px;">
								<div class="d-flex align-items-center">
									<div class="col-6">
										<p>Pre zobrazenie cenovej ponuky zadajte váš e-mail:</p>
									</div>
									<div class="col-6">
										<input type="email" class="form-control Vas_e_mail" placeholder="Váš e-mail">
										<button type="button" class="btn btn-danger tab9_btn mt-3 w-100 price-offer-btn-show">Zobraziť cenovú ponuku</button>
									</div>
								</div>
								<div class="">
									<h3 class="font-weight-bold mb-0 ttl_price" style="display:none">450,95€</h3>
									<button type="button" class="btn btn-danger tab9_btn btn-green mt-4" style="visibility:hidden;"><img src="<?=base_url()?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať</button>
									<!-- <h5>vrátane montáže</h5> -->
								</div>
								<!--<div class="ml-3">-->

								<!--</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<?php include("include/cabinet_right_sidebar.php"); ?>
			
			<div class="d-flex justify-content-center mt-3">
				<button type="button" class="btn btn-danger tab9_btn next-2 next btn-green mt-4"><img src="<?=base_url()?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať</button>
			</div>
		</div>
	</div>

</div>

		<!-- LAST PAGE OF CABINET (NEW) - NITIN -->
        <!-- tab 9 -->
		<div class="page padding_tab_10">
        <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
			<div class="row mt-20 address-cabinet">
				<div class="col-md-8">
					<div class="card ">
						<div class="card-body">
							

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
										<input type="text" class="form-control w-75 tab_10_input f-name-1" id="Meno" placeholder="Meno">
									</div>

									<div class="form-group">
										<input type="text" class="form-control w-75 tab_10_input f-surname-1" id="Priezvisko" placeholder="Priezvisko">
									</div>

									<div class="form-group">
										<input type="text" class="form-control w-75 tab_10_input f-phone-1" id="Telefón" placeholder="Telefón">
									</div>

									<div class="form-group">
										<input type="text" class="form-control w-75 tab_10_input f-email-1" id="Email" placeholder="Email">
									</div>
								</div>

								<div class="col-md-4">
									<h4 class="font-weight-bolder">Dodacia adresa</h4>
									<div class="form-group">
										<input type="text" class="form-control w-75 tab_10_input address f-address" id="Ulica_a_číslo" placeholder="Ulica a číslo">
									</div>

									<div class="form-group">
										<input type="text" class="form-control w-75 tab_10_input city-name f-city" id="Mesto" placeholder="Mesto">
									</div>

									<div class="form-group">
										<input type="text" class="form-control w-75 tab_10_input zip-code f-zip" id="PSČ" placeholder="PSČ">
									</div>
								</div>

								<div class="col-md-4">
									<h4 class="font-weight-bolder">Fakturačná adresa</h4>
									<div class="form-group">
										<input type="text" class="form-control w-75 tab_10_input address-1" id="Ulica_a_číslo" placeholder="Ulica a číslo">
									</div>

									<div class="form-group">
										<input type="text" class="form-control w-75 tab_10_input city-name-1" id="Mesto" placeholder="Mesto">
									</div>

									<div class="form-group">
										<input type="text" class="form-control w-75 tab_10_input zip-code-1" id="PSČ" placeholder="PSČ">
									</div>
								</div>

								<div class="col-md-12">
									<div class="d-flex">
										<div class="" id="check_hide_show_edge" style="display:none">
											<h4 class="font-weight-bolder">Firemné údaje</h4>
											<div class="d-flex">
												<div class="form-group">
													<input type="text" class="form-control w-75 tab_10_input" id="Ulica_a_číslo" placeholder="Ulica a číslo">
												</div>

												<div class="form-group">
													<input type="text" class="form-control w-75 tab_10_input" id="Mesto" placeholder="Mesto">
												</div>
											</div>
											<div>
												<div class="form-group">
													<input type="text" class="form-control width_input_edge tab_10_input" id="Mesto" placeholder="Mesto">
												</div>
											</div>
										</div>
										<div class="" id="check_hide_show_edge_1" style="display:none">
										    <div class=" form-group form-check">
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
									<a href="javascript:void(0);" class="cal-btn w-100">
										<button type="button" class="btn btn-danger w-100  mb-2 next-2 next tab10-btn-1" disabled><img src="<?=base_url()?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať</button>
									</a>
									<p class="tab10_font tab_10_text_end">Kliknutím na tlačidlo záväzne potvrdzujete objednávku<br>a súhlasíte s našimi <u>obchodnými podmienkami</u>.</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="col-md-4 mobile-img-final">
				<img src="<?=base_url()?>assests/web_assets/img_web/cupboard.png" class="img-fluid img-responsive final_img_cupB" alt="final_image">
				<div class="row mt-4">
					<div class="col-md-6 col-6">
						<h4 class="text-dark font-weight-bolder text-center">Cena bez DPH</h4>
					</div>
					<div class="col-md-6 col-6">
						<h4 class="text-dark font-weight-bolder text-center">1480,95€</h4>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- tab 10 -->
    <div class="page tab10_bg">
        <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev"><i class="font-weight-bold icon mr-1 ti-arrow-left"></i> Späť</a>
        <div class="mt-10 text-center title">REVIEW YOUR BUILD</div>
        <p class="text-center">Please now review your build and continue to the payment page when you are happy to proceed.</p>
        <table class="mx-auto table w-75">
            <tbody id="calc-tbl">
                <tr>
                    <th>Side Panel Cost</th>
                    <td>
                        <span class="calc_panel">DTD Material (x1)</span>
                    </td>
                </tr>
                <tr>
                    <th>Side Panel Cost
                        <div class="align-items-center d-flex gap11">
                            <span>
                                <table class="tabtab" style="height:50px; width:50px">
                                    <tbody>
                                        <tr>
                                            <td style="height:50px; width:50px"></td>
                                        </tr>
                                        <tr>
                                            <td style="height:50px; width:50px"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </span>
                        </div>
                    </th>
                    <td>
                        <span class="calc_panel">DTD Material (x1)</span>
                    </td>
                </tr>
                <tr>
                    <th>Side Panel Cost
                        <div class="align-items-center d-flex gap11">
                            <span>
                                <table class="tabtab" style="height:80px;">
                                    <tbody>
                                        <tr>
                                            <td style="width:70px"></td>
                                            <td style="width:70px"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </span>
                        </div>
                    </th>
                    <td>
                        <span class="calc_panel">DTD Material (x1)</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a href="javascript:void(0)">
                <button type="button" class="btn btn-danger tab10_btn mb-2 cal-btn1 tab10-btn-2"><img src="<?=base_url()?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať</button>
            </a>
        </div>
    </div>

	</form>
	</div>
</div>

</div>
	<!-- </div> -->

	<!-- </div> -->
</div>
</div>

<!-- hidden fields -->
<input type="hidden" id="tab5-btn-valid" value="0">
<input type="hidden" id="tab4-btn-valid" value="0">

<?php include("include/footer.php"); ?>
<!-- wood color Modal -->
<div class="modal fade" id="woodColor" tabindex="-1" role="dialog" aria-labelledby="woodColorModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="woodColorModal">Click to choose a fill</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/ST9_Vanilla_yellow.jpg" alt="" class="w-h-252 inside_clr nitzz">
						</div>
						<div class="px-2 border">
							<small>0108U</small>
							<h5>ST9 Vanilla yellow</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/ST22_Fineline_cream.jpg" alt="" class="w-h-252 inside_clr">
						</div>
						<div class="px-2 border">
							<small>1424H</small>
							<h5>ST22 Fineline cream</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/ST9_Birch_Mainau.jpg" alt="" class="w-h-252 inside_clr">
						</div>
						<div class="px-2 border">
							<small>1733H</small>
							<h5>ST9 Birch Mainau</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/K080_White_Oak.jpg" alt="" class="w-h-252 inside_clr">
						</div>
						<div class="px-2 border">
							<small>K080</small>
							<h5>White Oak</h5>
						</div>
					</div>

					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/ST9_Vanilla_yellow.jpg" alt="" class="w-h-252 inside_clr">
						</div>
						<div class="px-2 border">
							<small>0108U</small>
							<h5>ST9 Vanilla yellow</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/ST22_Fineline_cream.jpg" alt="" class="w-h-252 inside_clr">
						</div>
						<div class="px-2 border">
							<small>1424H</small>
							<h5>ST22 Fineline cream</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/ST9_Birch_Mainau.jpg" alt="" class="w-h-252 inside_clr">
						</div>
						<div class="px-2 border">
							<small>1733H</small>
							<h5>ST9 Birch Mainau</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/K080_White_Oak.jpg" alt="" class="w-h-252 inside_clr">
						</div>
						<div class="px-2 border">
							<small>K080</small>
							<h5>White Oak</h5>
						</div>
					</div>

				</div>
			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div> -->
		</div>
	</div>
</div>

<!-- VISIBLE PARTS Modal -->
<div class="modal fade" id="visible_parts" tabindex="-1" role="dialog" aria-labelledby="visible_partsModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="visible_partsModal">Click to choose a fill</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/Ceresňa.jpg" alt="" class="w-h-252 inside_clr2">
						</div>
						<div class="px-2 border">
							<small>0344 PR</small>
							<h5>Ceresňa</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/Maple.jpg" alt="" class="w-h-252 inside_clr2">
						</div>
						<div class="px-2 border">
							<small>0375 PR</small>
							<h5>Maple</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/Beech_Bavaria.jpg" alt="" class="w-h-252 inside_clr2">
						</div>
						<div class="px-2 border">
							<small>0381 PR</small>
							<h5>Beech Bavaria</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/ST_9_Limetková.jpg" alt="" class="w-h-252 inside_clr2">
						</div>
						<div class="px-2 border">
							<small>0630 U</small>
							<h5>ST 9 Limetková</h5>
						</div>
					</div>

					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/ST22_Whitewood.jpg" alt="" class="w-h-252 inside_clr2">
						</div>
						<div class="px-2 border">
							<small>1122H</small>
							<h5>ST22 Whitewood</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/ST12_Black_brown_Sorano_oak.jpg" alt="" class="w-h-252 inside_clr2">
						</div>
						<div class="px-2 border">
							<small>1137H</small>
							<h5>ST12 Black-brown Sorano oak</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/ST10_Bardolino_oak_natural.jpg" alt="" class="w-h-252 inside_clr2">
						</div>
						<div class="px-2 border">
							<small>1145H</small>
							<h5>ST10 Bardolino oak natural</h5>
						</div>
					</div>
					<div class="col-md-3 mb-3 color_fill_ins" data-dismiss="modal" aria-label="Close">
						<div class="border">
							<img src="<?=base_url()?>assests/web_assets/img_web/ST36_Navarra_Ash.jpg" alt="" class="w-h-252 inside_clr2">
						</div>
						<div class="px-2 border">
							<small>1250H</small>
							<h5>ST36 Navarra Ash</h5>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Number 1 -->
<div class="modal fade model_num1" id="modal_num1" tabindex="-1" role="dialog" aria-labelledby="modalLabel_num1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered first_modal_width" role="document">
		<!-- <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button> -->
		<div class="modal-content">
			<div class="modal-header justify-content-center mx-auto">
				<h5 class="modal-title" id="modalLabel_num1">Zdieľajte dizajn so známymi a priateľmi</h5>
			</div>
			<div class="modal-body p-0">
				<div class="d-flex flex-column justify-content-center align-items-center mx-auto">
					<p class="text-center modal_paragraph_1">
						Podeľte sa o Vašu konfiguráciu s ostatnými.<br> Zadajte email alebo vyberte inú možnosť
						zdieľania.
					</p>
					<div class="form-check mt-3 lbl-sec">
						<input class="form-check-input" type="checkbox" value="" id="agreement">
						<label class="form-check-label checkLabel" for="agreement">
							Zobrazit cenovú ponukuamožnosť objednat
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
				<!--<div class="d-flex flex-row-reverse mb-3">-->
				<!--	<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
				<!--		<span aria-hidden="true">&times;</span>-->
				<!--	</button>-->
				<!--</div>-->
				<div class="row">
					<div class="col-md-6 col-sm-12 koi_acc px-4 py-5" style="display:flex; align-items: center;">
						<form action="#" method="post" class="text-center"> 
							<h4 class="text-center  font-weight-bolder modal_n_txt">
								Uložte si vašu konfiguráciu na neskôr
							</h4>
							<input type="text" name="email_koiAcc" id="email_koi_11" class="form-control mt-50 mx-auto w-75 modal_input_11" placeholder="Váš email" />
							<button type="button" class="btn btn-danger mt-20 w-75 share-mail-link" style="background: #ff0000;"><span><img src="<?=base_url()?>assests/web_assets/img_web/save.png" class="img-responsive mr-2"></span>Uložiť konfiguráciu
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

<!-- Using on new 4th tab wood color Modal -->
<div class="modal fade" id="img1Modal" tabindex="-1" role="dialog" aria-labelledby="woodColorModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="woodColorModal">Vyberte dekor pre interiér a exteriér skrinky</h4>
				<div class="search-section col-md-4">
					<div class="search w-100">
						<input type="text" class="form-control woodColorSearch" placeholder="Vyhľadávanie">
						<i class="fas fa-search search_icon btn"></i>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<div class="modal-body">
				<div class="row">
					
<?php 
   if($interior_data){

      foreach($interior_data as $interior){
?>
					<div data-clr="<?=$interior['color']?>"  class="col-md-3 mb-3 color_fill_ins woodColorCls" data-dismiss="modal" aria-label="Close">
						<div class="border" data-clr-name="<?=$interior['color']?>">
							<img src="<?=base_url().$interior['image']?>" alt="" class="w-h-252 inside_clr nitzz">
						</div>
						<div class="px-2 border">
							<small>0108U</small>
							<h5 class="cab_interior_title"><?=$interior['color']?></h5>
						</div>
					</div>
			<?php } } ?>		

				</div>
			</div>
		</div>
	</div>
</div>


<!-- ABS BAsed  Modal -->
<div class="modal fade" id="absMod" tabindex="-1" role="dialog" aria-labelledby="absModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="absModal">Vyberte dekor pre ABS hrany skrinky</h4>
				<div class="search-section col-md-4">
					<div class="search w-100">
						<input type="text" class="form-control absColorSearch" placeholder="Vyhľadávanie">
						<i class="fas fa-search search_icon btn"></i>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<div class="modal-body">
				<div class="row">
					<!-- <div class="d-flex font-weight-bolder justify-content-center flex-column col-md-12">
						<h3 class="font-weight-bolder text-center">ABS bude na</h3>
						<div class="row mb-3">
							<div class="col-md-4 col-5">
								<label class="text-muted abswidth">(600 mm)</label>
								<div class="form-check d-flex align-items-center">
									<input type="checkbox" class="form-check-input" id="check-1">
									<label class="form-check-label label-small" for="check-1">Ľavej strane</label>
								</div>
								<div class="form-check mt-2 d-flex align-items-center">
									<input type="checkbox" class="form-check-input" id="check-2">
									<label class="form-check-label label-small" for="check-2">Pravej strane</label>
								</div>
							</div>
							<div class="col-md-4 col-5">
								<label class="text-muted absheight">(2200 mm)</label>
								<div class="form-check d-flex align-items-center">
									<input type="checkbox" class="form-check-input" id="check-3">
									<label class="form-check-label label-small" for="check-3">Prednej strane</label>
								</div>
								<div class="form-check mt-2 d-flex align-items-center">
									<input type="checkbox" class="form-check-input" id="check-4">
									<label class="form-check-label label-small" for="check-4">Zadnej strane</label>
								</div>
							</div>
						</div>
					</div> -->


<?php 
   if($abs_data){

      foreach($abs_data as $abs){
?>
					<div data-clr="<?=$abs['color']?>" class="col-md-3 mb-3 color_fill_abs absColorCls" data-dismiss="modal" aria-label="Close">
						<div class="border" data-abs-clr="<?=$abs['color']?>">
							<img src="<?=base_url().$abs['image']?>" alt="" class="w-h-252 abs-inside-clr">
						</div>
						<div class="px-2 border">
							<small>0108U</small>
							<h5 class="abs_intr_title"><?=$abs['color']?></h5>
						</div>
					</div>
					
<?php } } ?>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- skrinky_Modal -->


<div class="modal fade" id="skrinky_Modal" tabindex="-1" role="dialog" aria-labelledby="skrinky_Modal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content mx-auto skrinky_mod_hw">
			<div class="modal-header">
				<h4 class="modal-title" id="skrinky_Modal" style="font-size: 27px;font-weight: 600;">Vyberte, na ktorej strane skrinky budú ABS hrany</h4>
				<div class="search-section col-md-4">
					<div class="search w-100">
						<input type="text" class="form-control" placeholder="Hľadať">
						<i class="fas fa-search search_icon btn"></i>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<div class="modal-body">
				<div class="row mt-4">
					<div class="col-md-4">
						<div class="card skrinky_card">
							<div class="card-body mx-auto">
                                <img src="<?=base_url()?>assests/web_assets/img/connection_images/view_cab_1.png" alt="" class="cabinetside_view_img"     data-img-details-view="Zľava">
                                <h5 class="cabSide_view_text text-dark">Zľava</h5>
							</div>
						</div>
					</div>

                    <div class="col-md-4">
						<div class="card skrinky_card">
							<div class="card-body mx-auto">
                                <img src="<?=base_url()?>assests/web_assets/img/connection_images/view_cab_2.png" alt="" class="cabinetside_view_img"     data-img-details-view="Sprava">
                                <h5 class="cabSide_view_text text-dark">Sprava</h5>
							</div>
						</div>
					</div>

                    <div class="col-md-4">
						<div class="card skrinky_card">
							<div class="card-body mx-auto">
                                <img src="<?=base_url()?>assests/web_assets/img/connection_images/view_cab_4.png" alt="" class="cabinetside_view_img"     data-img-details-view="Zhora">
                                <h5 class="cabSide_view_text text-dark">Zhora</h5>
							</div>
						</div>
					</div>

                    <div class="col-md-4">
						<div class="card skrinky_card">
							<div class="card-body mx-auto">
                                <img src="<?=base_url()?>assests/web_assets/img/connection_images/view_cab_4.png" alt="" class="cabinetside_view_img"     data-img-details-view="Zozadu">
                                <h5 class="cabSide_view_text text-dark">Zozadu</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="modal-footer p-0 border-0">
                <button type="button" class="btn btn-danger hotovo__btn" data-dismiss="modal">Hotovo</button>
            </div>
		</div>
	</div>
</div>


<!-- skrinky_Modal -->


<!-- Spoje_Modal -->

<div class="modal fade" id="Spoje_Modal" tabindex="-1" role="dialog" aria-labelledby="skrinky_Modal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content mx-auto skrinky_mod_hw">
			<div class="modal-header">
				<h4 class="modal-title" id="skrinky_Modal" style="font-size: 27px;font-weight: 600; color: #000000">Vyberte spoje skrinky</h4>
				<div class="search-section col-md-4">
					<div class="search w-100">
						<input type="text" class="form-control" placeholder="Hľadať">
						<i class="fas fa-search search_icon btn"></i>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<div class="modal-body">
				<div class="row mt-4">
					<div class="col-md-4 col-12">
						<div class="card spoje_card" data-dismiss="modal" aria-label="Close">
							<div class="card-body mx-auto">
								<img src="<?=base_url()?>assests/web_assets/img_web/spoje_img.jpg" alt="" class="spoje_img" data-img-details="Uholníky (kov)">
                                <h5 class="spoje_title-text text-dark">Uholníky (kov)</h5>
							</div>
						</div>
					</div>

                    <div class="col-md-4 col-12">
						<div class="card spoje_card" data-dismiss="modal" aria-label="Close">
							<div class="card-body mx-auto">
								<img src="<?=base_url()?>assests/web_assets/img/connection_images/conn_img_2.png" alt="" class="spoje_img" data-img-details="Uholníky (plast)">
                                <h5 class="spoje_title-text text-dark font-18px">Uholníky (plast)</h5>
							</div>
						</div>
					</div>

                    <div class="col-md-4 col-12">
						<div class="card spoje_card" data-dismiss="modal" aria-label="Close">
							<div class="card-body mx-auto">
								<img src="<?=base_url()?>assests/web_assets/img/connection_images/conn_img_3.png" alt="" class="spoje_img" data-img-details="Skrutkovanie">
                                <h5 class="spoje_title-text text-dark">Skrutkovanie</h5>
							</div>
						</div>
					</div>

                    <div class="col-md-4 col-12">
						<div class="card spoje_card" data-dismiss="modal" aria-label="Close">
							<div class="card-body mx-auto">
								<img src="<?=base_url()?>assests/web_assets/img/connection_images/conn_img_4.png" alt="" class="spoje_img"          data-img-details="Skrutkovanie">
                                <h5 class="spoje_title-text text-dark">Skrutkovanie<br>
                                    <small class="text-dark">+ lepiace krytky</span>
                                </h5>
							</div>
						</div>
					</div>

                    <div class="col-md-4 col-12">
						<div class="card spoje_card" data-dismiss="modal" aria-label="Close">
							<div class="card-body mx-auto">
								<img src="<?=base_url()?>assests/web_assets/img/connection_images/conn_img_5.png" alt="" class="spoje_img" data-img-details="Lamelovanie">
                                <h5 class="spoje_title-text text-dark">Lamelovanie</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Spoje_Modal -->

<script src="<?=base_url()?>assests/web_assets/js/cabinet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>

<script>
	$(document).on('click','.cal-btn1',function(){
		 $.ajax({
         type: "POST",
         url: baseurl + "web/submit_cabinet", 
         data: { },
         dataType: "text", 
         cache:false,
         success: 
              function(data){
              	 let ht = $('.tab-end-table').html()
                 $('.shadow_cstm').html(data);
                 $('.final_wardrobe_thank').html(ht);
                 $('.final_wardrobe_thank').find('.new-td-parents').removeAttr('style');
                 $('.product-category-container').addClass('d-none')
              }
          });
     
	});

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
         $(this).removeClass('confirm-mail-btn');

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

        let subtotal = $('.ttl_price').text();
        subtotal = parseFloat(subtotal);

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
            image:'Skrinka.jpg' 
         },
         dataType: "text", 
         cache:false,
         success: 
              function(data){
                setTimeout(function(){
              	    alert('Odoslanie potvrdzovacieho e-mialu bolo úspešné.')
                }, 2000);
              }
          });
     
	});
</script>