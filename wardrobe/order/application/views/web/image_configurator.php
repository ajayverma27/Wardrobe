<?php include("include/header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="<?= base_url() ?>assests/web_assets/css/built_in_cabinets.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<style>
#img-fluid-pre1{
    border-radius: 25px;
    width: 666px;
    height: 336px;
    /* object-fit: cover; */
}
#img-fluid-pre2{
    width: 225px;
    height: 336px;
    border-radius: 25px;
    /* object-fit: cover; */
}
    .set_swiperImgs img.zoom {
        width: 90px;
        height: 90px;
    }

    .red-border {
        border: 4px solid red !important;
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

    .main-row-price-1 {
        line-height: 2;
    }

    .main-tbl-img {
        background-size: cover;
    }

    .desc__export {
        font-weight: 400;
        font-size: 14px;
        text-align: center;
        color: #000000;
    }

    .setting_modal_text {
        font-size: 24px;
    }

    tr .remove-table-btn {
        background: #ff0000;
        color: #fff;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        font-size: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    tr .remove-table-btn:hover {
        color: #fff;
    }

    .lh_ {
        line-height: 1.2;
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

    .main-tbl-img:hover {
        transform: scale(1.5);
    }

    .main-tbl-abs:hover {
        transform: scale(1.5);
    }

    .cust_width img {
        /* height:auto; */
    }
</style>


<div class="product-category-container mb-md-90 mb-sm-90 pb-1">
    <img src="<?= base_url() ?>assests/web_assets/img_web/denir.png" class="img-fluid logo_width" alt="">
    <div class="container-fluid shadow_cstm pt-0 pb-2">
        <div class="row">
            <div class="col-md-6">
                <div class="progress-bar mt-35 d-none">
                    <div class="step-1 prev-1 active" data-no="0" id="sp-0">
                        <div class="bullet bullet_first active" data-toggle="tooltip" data-placement="bottom" title="Parametre">
                            <span>Parametre</span>
                        </div>
                    </div>

                    <div class="step prev-1" data-no="1" id="sp-1">
                        <div class="bullet" data-toggle="tooltip" data-placement="bottom" title="Drevodekor">
                            <!--<span>Výber materiálu</span>-->
                            <span>Drevodekor</span>
                        </div>
                    </div>

                    <div class="step prev-1" data-no="2" id="sp-2">
                        <div class="bullet" data-toggle="tooltip" data-placement="bottom" title="ABS">
                            <!--<span>Cena + objednávka</span>-->
                            <span>ABS</span>
                        </div>
                    </div>
                    
                    <!-- <div class="step prev-1" data-no="3" id="sp-3">
                        <div class="bullet" data-toggle="tooltip" data-placement="bottom" title="Súhrn">
                            <span>Súhrn</span>
                        </div>
                    </div>
                    <div class="step prev-1" data-no="4" id="sp-4">
                        <div class="bullet" data-toggle="tooltip" data-placement="bottom" title="Objednávka">
                            <span>Objednávka1</span>
                        </div>
                    </div> -->

                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end my-3">
                <a href="https://wardrobe.zarfrestauracia.sk/web/image_configurator">
                    <button type="button" class="btn btn-danger font14 mr-20 tab11_btn">Nová konfigurácia</button>
                </a>
                <a href="https://denir.sk">
                    <button type="button" class="bg-white btn btn-danger font-weight-bold text-danger font14 tab11_btn">Späť na denir.sk</button>
                </a>
            </div>
            <!-- <div class="col-md-2 modal_btnns mt-30 modal_btn_edge" style="display:none;">
                <button type="button" class="bg-white btn btn-danger font-weight-bolder tab9_btn text-danger font14 btn_chngg" data-toggle="modal" data-target="#modal_num_20"><img class="lazy tab1_imgg mr-1" src="<?= base_url() ?>assests/web_assets/img_web/setting_edge.png" alt="">Exportovať do OS</button>
            </div> -->
        </div>
    </div>
    <div class="container wide mt-30">
        <div class="row">
            <div class="col-md-12">
                <div class="form-outer">
                    <form action="<?= base_url() ?>web/submit_edge_board" method="post">
                        <!-- tab 1 -->
                        <div class="page slide-page">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="account-details-form" method="post">
                                        <?php
                                        //echo $this->session->flashdata('message');
                                        ?>
                                        <div class="row mt-30">
                                            <div class="col-md-12">
                                                <div class="align-items-center d-flex gap10">
                                                    <!--configurator link-->
                                                    <a href="https://wardrobe.zarfrestauracia.sk/web/configurator" class="btn btn-basic Späť_btn"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
                                                    <h2 class="font-weight-bold">Konfigurácia podľa obrázka</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-30">
                                            <div class="col-md-4 col-lg-4">
                                                <div class="col-md-10">
                                                    <!--<h3 class="font-weight-bold">Obrázok skrinky</h3> -->
                                                    <div>

                                                    <div class="image-upload-container">

                                                        <!-- image upload -->
      
                                                        <div class="image-upload-one">
                                                            <div class="center_img_file">
                                                                <div class="form-input_img_file">
                                                                    <label for="file_ip_1">
                                                                    <h6 class="font-weight-bold pt-20 text-center">Nahrajte obrázok skrinky alebo vzorovej zostavy</h6>
                                                                    <img id="file_ip_1_preview" src="https://i.ibb.co/ZVFsg37/default.png">
                                                                    <button type="button" class="imgRemove" onclick="myImgRemove(1)"></button>
                                                                    </label>
                                                                    <input type="file"  name="img_one" id="file_ip_1" accept="image/*" onchange="showPreview(event, 1);">
                                                                </div>
                                                                <small class="small_img2">Use the &#8634; icon to reset the image</small>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="image-upload-two">
                                                            <div class="center_img_file">
                                                                <div class="form-input_img_file">
                                                                    <label for="file_ip_2">
                                                                    <h6 class="font-weight-bold pt-20 text-center">Nahrajte obrázok Vášho priestoru, v ktorom by sa mala <br>skrinka alebo skriňa nachádzať</h6>
                                                                    <img id="file_ip_2_preview" src="https://i.ibb.co/ZVFsg37/default.png">
                                                                    <button type="button" class="imgRemove" onclick="myImgRemove(2)"></button>
                                                                    </label>
                                                                    <input type="file" name="img_two" id="file_ip_2" accept="image/*" onchange="showPreview(event, 2);">
                                                                </div>
                                                                <small class="small_img2">Use the &#8634; icon to reset the image</small>
                                                            </div>
                                                        </div>

                                                    </div>
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-8">
                                                
                                                <!-- <h3 class="font-weight-bold">Rozmery skrinky</h3> -->
                                                <div class="row">
                                                    <div class="col-md-3 d-flex flex-column justify-content-center">
                                                        <div class="align-items-center d-flex">
                                                            <label class="lbl_sides label-reduce-dark font-weight-bold">Výška</label>
                                                            <input type="text" placeholder="" id="length_check_0" class="mx-1 para_lfh2 vyskaleft1 left_cuboid setInpWidth" maxlength="4" minlength="3" onkeyup="check_height()">
                                                            <span class="font-weight-bolder text-dark font12"> mm </span>
                                                        </div>
                                                        <p class="text-danger" id="err-left" style="display:none;">Maximum : 6000mm </p>
                                                    </div>
                                                    <div class="col-md-6 position-relative">
                                                        <img src="<?=base_url()?>assests/web_assets/img_web/tab3_img1.png" class="img-fluid w-100 mt-10" alt="">
                                                        <div class="text-center my-4 sirkkkkka">
                                                            <label class="label-reduce-dark font-weight-bold">Šírka</label>
                                                            <input type="text" placeholder="" id="length_check_2" class="para_width2  sirka1 width_cuboid setInpWidth" maxlength="4" onkeyup="check_width()">
                                                            <span class="font-weight-bolder text-dark font12"> mm </span>
                                                            <p class="text-danger" id="err-sirka" style="display:none;">Maximum: 6000mm </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 d-flex flex-column justify-content-center">
                                                        <div class="align-items-center d-flex">
                                                            <label class="lbl_sides label-reduce-dark font-weight-bold">Hĺbka</label>
                                                            <input type="text" placeholder="" id="length_check_1" class="setInpWidth mx-1 para_depth2 hlbka1 depth_cuboid " maxlength="4" onkeyup="check_depth()">
                                                            <span class="font-weight-bolder text-dark font12"> mm </span>
                                                        </div>
                                                        <p class="text-danger" id="err-hlbka" style="display:none;">Maximum: 1600mm</p>
                                                    </div>
                                                    <h3 class="font-weight-bold col-md-12 col-lg-12">Výber materiálu</h3>
                                                    <div class="col-md-3 col-lg-3">
                                                        <div class="material_box" data-toggle="modal" data-target="#img1Modal">
                                                            <img src="<?=base_url()?>assests/web_assets/img_web/two_board.png" alt="" class="img-fluid">
                                                            <h5 class="material_text">Kliknite a zvoľte materiál <br>z našej ponuky</h5>
                                                        </div>
                                                    </div>
                                                    <div class="align-items-center col-lg-2 col-md-2 d-flex justify-content-center">
                                                        <h4 class="font-weight-bold">alebo</h4>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3">
                                                        <div class="material_box" data-toggle="modal" data-target="#img2Modal">
                                                            <img src="<?=base_url()?>assests/web_assets/img_web/send_material.jpg" alt="" class="img-fluid">
                                                            <h5 class="material_text">Pošlite fotku materiálu a my<br>Vám ho dopasujeme za Vás</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-50 dekor_box">
                                                    
                                                </div>

                                                <div class="row mt-50 drag_drop__images">
                                                    <div class="col-md-3">
                                                        <div class="drag__img-1"></div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="drag__img-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-2 mb-50 field btns justify-content-center align-items-center mx-auto">
                                            <button id="img-config-1-btn" class="next-2 next btn-green w_auto scrollTop" disabled>Ďalej</button>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <!-- tab 2 -->

                        <div class="page tab2_wd3">
                            <div class="row">
                                    <a href="javascript:void(0)" class="btn btn-basic Späť_btn mt-25 prev-1 prev">
                                        <i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť
                                    </a>
                                <div class="col-md-7 mx-auto">
                                    <div class="col-md-12 grid_center mt-40">
                                        <div class="col-md-12">
                                            <h4 class="font-weight-bolder">Poznámka</h4>
                                            <div class="form-group">
                                                <textarea name="Poznamka" id="" rows="7" class="w-100 form-control" placeholder="Chcete nám niečo odkázať alebo upresniť?"></textarea>
                                            </div>
                                            <h4 class="font-weight-bolder">Kontaktné údaje</h4>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control tab_10_input contact__details" id="Meno" placeholder="Meno">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control tab_10_input contact__details" id="Priezvisko" placeholder="Priezvisko">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control tab_10_input contact__details" id="Telefon" placeholder="Telefón">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control tab_10_input contact__details" id="Email" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5 mt-40 field btns justify-content-center align-items-center mx-auto">
                                            <button class="next-2 next btn-green w_auto" id="img-config-2-btn" disabled>Odoslať</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- tab 3 -->
                        <div class="page tab2_wd3">
                            <div class="row">
                                <div class="col-md-12 mb-3 text-center order_place">
                                    <h2 class="font-weight-bolder mb-10 mb-50">Ďakujeme za objednávku!</h2>
                                    <div class="d-flex justify-content-center">
                                        <img src="<?=base_url()?>assests/web_assets/img_web/user_img1.png" alt="" class="img-fluid mr-30" id="img-fluid-pre1">
                                        <img src="<?=base_url()?>assests/web_assets/img_web/user_img2.png" alt="" class="img-fluid" id="img-fluid-pre2">
                                    </div>
                                    <p class="font14 mb-3 mt-20">Náš tím si prejde podklady, ktoré ste nám zaslali a ozve sa vám s<br> cenovou ponukou alebo prípadnými otázkami.</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h4 class="font-weight-bolder text-center mr-3">Nakonfigurujte si tiež:</h4>
                                    <div class="d-flex justify-content-center align-items-center mx-auto mt-3 mb-3">
                                        <a href="https://wardrobe.zarfrestauracia.sk/web">
                                            <img src="<?=base_url()?>assests/web_assets/img_web/Ohranená_doska_orderplace.png" alt="" class="img-fluid w_148">
                                        </a>
                                        <a href="https://wardrobe.zarfrestauracia.sk/web/cabinet">
                                            <img src="<?=base_url()?>assests/web_assets/img_web/tab10_img3.png" alt="" class="img-fluid w_148 mx-3">
                                        </a>
                                        <a href="https://wardrobe.zarfrestauracia.sk/web/wardrobe">
                                            <img src="<?=base_url()?>assests/web_assets/img_web/Vstavan_skriu1.png" alt="" class="img-fluid w_148">
                                        </a>
                                        <!-- <a href="javascript:void(0)"><img src="<?=base_url()?>assets/web_assets/img_web/tab10_img3.jpg" class="img-fluid configure_img" alt=""></a> -->
                                        <a href="javascript:void(0)" class="ml-3"><img src="<?=base_url()?>assets/img_web/tab10_img3.jpg" class="img-fluid configure_img" alt=""></a>
                                    </div>
                                </div>
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

<?php include("include/footer.php"); ?>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>

<!-- material modal new start -->
<div class="modal fade" id="img1Modal" tabindex="-1" role="dialog" aria-labelledby="woodColorModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
                <div class="w-100">
                    <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

                    <h2 class="font-weight-bold">Dekor</h2>
                    <h4 class="modal-title vw_point8" id="woodColorModal">Kliknutím na dekor ho vyberiete na použitie pri výrobe vašej skrinky.</h4>
                </div>
				<!-- <div class="search-section col-md-4">
					<div class="search w-100">
						<input type="text" class="form-control" placeholder="Vyhľadávanie">
						<i class="fas fa-search search_icon btn"></i>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div> -->
			</div>
			<div class="modal-body">
				<div class="row">

                    <div class="col-md-9">
                        <div class="row">

                        <?php if($image_configurator){
                            foreach($image_configurator as $configurator){
                            ?>
                            <div class="col-md mb-3 color_fill_ins col-6">
                                <div class="">
                                    <img src="<?=base_url().$configurator['image']?>" alt="" data-img-name="Dub Kansas Hnedý" data-img-id="006 - EGER" class="w145 img_modal_cls">
                                </div>
                                <div class="">
                                    <h5 class="cab_interior_title font-weight-bold mt-2 mb-0 img_cls_name"><?=$configurator['color']?></h5>
                                    <small class="img_id_num"><?=$configurator['color']?></small>
                                </div>
                            </div>
<?php } } ?>
                           
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h4 class="font-weight-bold">Interiér skrinky</h4>
                        <div class="drop-zone" id="interior_shrinky_img">
                            <span class="drop-zone__prompt">
                                Kliknite a nahrajte obrázok materiálu z počítača, alebo ho potiahnite pusťte na toto miesto.
                            </span>
                            <span class="drop-zone__imgg">
                                <img src="https://wardrobe.zarfrestauracia.sk/assests/web_assets/images/add_btn_01.png" class="img__set" alt="add_image"/>
                            </span>
                            <!-- <input type="file" name="myFile" class="drop-zone__input"> -->
                        </div>
                        <br>
                        <h4 class="font-weight-bold">ABS Hrany</h4>
                        <div class="drop-zone" id="ABS_Hrany_img">
                            <span class="drop-zone__prompt">
                                Nie je vybrané žiadne ABS
                            </span>
                            <span class="drop-zone__imgg">
                                <img src="https://wardrobe.zarfrestauracia.sk/assests/web_assets/images/add_btn_01.png" class="img__set" alt="add_image"/>
                            </span>
                            <!-- <input type="file" name="myFile" class="drop-zone__input"> -->
                        </div>

                    </div>
                    
                    <div class="d-flex justify-content-end align-items-end ml-auto mr-4">
                        <a href="javascript:void(0);" class="btn btn-danger cust-hotovo-btn cust-modal-close" >Hotovo</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="img2Modal" tabindex="-1" role="dialog" aria-labelledby="woodColorModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
                <div class="w-100">
                    <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

                    <h2 class="font-weight-bold">Dekor dopasujeme za Vás!</h2>
                    <h4 class="modal-title vw_point8" id="woodColorModal">Nemusíte prácne hľadať ten pravý dekor. My ho pre Vás nájdeme!</h4>
                </div>
			</div>
			<div class="modal-body">
				<div class="row">

                    <div class="col-md-7">
                        <div class="align-items-center d-flex flex-column justify-content-center">
                            <h4 class="font-weight-bold">Nahrajte obrázok dekoru</h4>
                            <div class="image-upload-one mt-3">
                                <div class="center_img_file">
                                    <div class="form-input_img_file2 input5">
                                        <label for="file_ip_3">
                                        <h6 class="pt-10 text-center drop-zone__prompt">
                                            Kliknite a nahrajte obrázok <br>materiálu z počítača, alebo ho <br>potiahnite pusťte na toto miesto.
                                        </h6>
                                        <img id="file_ip_3_preview" src="<?=base_url()?>assests/web_assets/images/add_btn_01.png" class="img-fluid add_btn-sm">
                                        <button type="button" class="imgRemove" onclick="myImgRemove(3)"></button>
                                        </label>
                                        <input type="file"  name="img_one" id="file_ip_3" accept="image/*" onchange="showPreview(event, 3);">
                                    </div>
                                    <small class="small_img2">Use the &#8634; icon to reset the image</small>
                                </div>
                            </div> 

                            <!-- <div class="drop-zone">
                                <span class="drop-zone__prompt">
                                    Kliknite a nahrajte obrázok materiálu z počítača, alebo ho potiahnite pusťte na toto miesto.
                                </span>
                                <span class="drop-zone__imgg">
                                    <img src="https://wardrobe.zarfrestauracia.sk/assests/web_assets/images/add_btn_01.png" class="img__set" alt="add_image"/>
                                </span>
                                <input type="file" name="myFile" class="drop-zone__input">
                            </div> -->
                        </div>
                        <div class="align-items-center d-flex flex-column justify-content-center mt-50">
                            <a href="javascript:void(0);" class="btn btn-danger cust-hotovo-btn" data-dismiss="modal" aria-label="Close">Hotovo</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="<?=base_url()?>assests/web_assets/img_web/Click-and-upload-an-image.png" class="img-fluid">
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
    
    // ========= IMAGE CONFIGURATOR JS =================
    var check_material_exists = false;
    var incNum = 1;
    // $(document).on('click', '.img_modal_cls', function(){
    //     let scr = $('#file_ip_3_preview').attr('src');
    //     if(scr == 'https://i.ibb.co/ZVFsg37/default.png'  || scr == 'https://wardrobe.zarfrestauracia.sk/assests/web_assets/images/add_btn_01.png' ){
    //         if($(this).hasClass('red_bdr')){
    //             $(this).removeClass('red_bdr');
    //         }else{
    //             if($('#img1Modal').find('.red_bdr').length < 2){
    //                 $(this).addClass('red_bdr');
    //                 check_material_exists = true;
    //                 updateButtonState();
    //             }else{
    //                 alert('Vyberte iba 2 materiály.')
    //                 check_material_exists = false;
    //                 updateButtonState();
    //             }  
    //         }
    //     }else{
    //         alert('Uploaded image remove first.');
    //         $('#img1Modal').modal('hide')
    //         check_material_exists = false;
    //         updateButtonState();
    //     }                        
    // });

    $(document).on('click', '.imgRemove', function(){
        var getParentID = $(this).parent().parent().attr('id');
        $('.appended_box_dekor-'+getParentID).remove();
        check_appended_boxes();
    })

    function check_appended_boxes(){
        var alert_box_count = $('.chk_app_bxx').length;
        if(alert_box_count == '0'){
            check_material_exists = false;
            updateButtonState();
        }
        else{
            check_material_exists = true;
            updateButtonState();
        }
    }

    $(document).on('click','.cust-modal-close',function(){
        $('.dekor_box').html('')
        $('#img1Modal').find('.red_bdr').each(function(incNum){
             var getSrc = $(this).attr('src');
            var getName = $(this).data('img-name');
            var getID = $(this).data('img-id');
            var htmlCreate = `<div class="col-md-3 col-lg-3 mb-3 chk_app_bxx appended_box_dekor-${incNum}" id="${incNum}">
                <div class="material_box position-relative">
                    <button type="button" class="imgRemove"></button>
                    <h5 class="material_text mt-0">Dekor skrinky</h5>
                    <img src="${getSrc}"  class="w145">
                    <div class="container text-left">
                        <h5 class="cab_interior_title font-weight-bold mt-2 mb-0">${getName}</h5>
                        <small>${getID}</small>
                    </div>
                </div>
            </div>`

           $('.dekor_box').append(htmlCreate); 
        })

        $('#img1Modal').modal('hide')
    })

    // ================ FILE UPLOAD USING DRAG AND DROP FUNCTIONALITY USING JS ================
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => 	{
      const dropZoneElement = inputElement.closest(".drop-zone");

      dropZoneElement.addEventListener("click", (e) => {
        inputElement.click();
      });

      inputElement.addEventListener("change", (e) => {
        if (inputElement.files.length) {
          updateThumbnail(dropZoneElement, inputElement.files[0]);
        }
  	});

    dropZoneElement.addEventListener("dragover", (e) => {
      e.preventDefault();
      dropZoneElement.classList.add("drop-zone--over");
    });

    ["dragleave", "dragend"].forEach((type) => {
      dropZoneElement.addEventListener(type, (e) => {
        dropZoneElement.classList.remove("drop-zone--over");
      });
    });

    dropZoneElement.addEventListener("drop", (e) => {
      e.preventDefault();

      if (e.dataTransfer.files.length) {
        inputElement.files = e.dataTransfer.files;
        updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
      }

      dropZoneElement.classList.remove("drop-zone--over");
    });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
    dropZoneElement.querySelector(".drop-zone__imgg").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;

        var createCardImgHTML = `<i class="fas fa-times remove-icon-1" onclick="deleteDD_1()"></i><div class="card drag__card"><div class="card-body"><div                      class="prev__img-1__dd" style="background: url(${reader.result});"></div></div></div>`
      document.querySelector('.drag__img-1').innerHTML  = createCardImgHTML
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

const deleteDD_1 = () =>{
    document.querySelector('.drag__img-1').innerHTML = '';
    document.querySelector('.drop-zone__thumb').remove();

    var parentElem = document.querySelector('.drop-zone');
    var createSpan_1 = document.createElement('span');
    var createSpan_2 = document.createElement('span');

    createSpan_1.classList.add('drop-zone__prompt');
    createSpan_2.classList.add('drop-zone__imgg');

    const newImg = document.createElement("img");
    newImg.classList.add('img__set');
    newImg.setAttribute("src", "<?=base_url()?>assests/web_assets/images/add_btn_01.png");
    newImg.setAttribute("alt", "add_image")

    createSpan_1.textContent = 'Kliknite a nahrajte obrázok materiálu z počítača, alebo ho potiahnite pusťte na toto miesto.'
    createSpan_2.appendChild(newImg);

    parentElem.appendChild(createSpan_1);
    parentElem.appendChild(createSpan_2);
}
</script>

<script>
  initMultiStepForm();
    var incg = 1000;
function initMultiStepForm() {
    const progressNumber = document.querySelectorAll(".step").length;
    const slidePage = document.querySelector(".slide-page");
    const submitBtn = document.querySelector(".submit");
    const progressText = document.querySelectorAll(".step");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    const pages = document.querySelectorAll(".page");
    const nextButtons = document.querySelectorAll(".next");
    const prevButtons = document.querySelectorAll(".prev");
    const stepsNumber = pages.length;

    // if (progressNumber !== stepsNumber) {
    // 	console.warn(
    // 		"Error, number of steps in progress bar do not match number of pages"
    // 	);
    // }

    document.documentElement.style.setProperty("--stepNumber", stepsNumber);

    let current = 1;

    for (let i = 0; i < nextButtons.length; i++) {
        nextButtons[i].addEventListener("click", function (event) {
            event.preventDefault();

            inputsValid = validateInputs(this);
            // inputsValid = true;

            if (inputsValid) {
                slidePage.style.marginLeft = `-${(100 / stepsNumber) * current
                    }%`;
                bullet[current - 1].classList.add("active");
                // progressCheck[current - 1].classList.add("active");
                progressText[current - 1].classList.add("active");
                current += 1;
            }
        });
    }

    for (let i = 0; i < prevButtons.length; i++) {
        prevButtons[i].addEventListener("click", function (event) {
            event.preventDefault();
            slidePage.style.marginLeft = `-${(100 / stepsNumber) * (current - 2)
                }%`;
            bullet[current - 1].classList.remove("active");
            // progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
    }
    // submitBtn.addEventListener("click", function() {
    // 	bullet[current - 1].classList.add("active");
    // 	progressCheck[current - 1].classList.add("active");
    // 	progressText[current - 1].classList.add("active");
    // 	current += 1;
    // 	setTimeout(function() {
    // 		alert("Your Form Successfully Signed up");
    // 		location.reload();
    // 	}, 800);
    // });

    function validateInputs(ths) {
        let inputsValid = true;

        const inputs =
            ths.parentElement.parentElement.querySelectorAll("input");
        for (let i = 0; i < inputs.length; i++) {
            const valid = inputs[i].checkValidity();
            if (!valid) {
                inputsValid = false;
                inputs[i].classList.add("invalid-input");
            } else {
                inputs[i].classList.remove("invalid-input");
            }
        }
        return inputsValid;
    }
}
</script>

<script>
    
    //======== ONLY NUMBERS ALLOWED IN INPUT FIELD ======
    $('.Dĺžka1,.Šírka1').bind('keyup paste', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>

<!-- slider js -->





<!-- img file upload new -->
<script>
var check_img_exists = false;
var number = 1;
do {
  function showPreview(event, number){
    if(event.target.files.length > 0){
      let src = URL.createObjectURL(event.target.files[0]);
      let preview = document.getElementById("file_ip_"+number+"_preview");
      preview.src = src;
      preview.style.display = "block";

      let pre2 = document.getElementById("img-fluid-pre"+number);
      pre2.src = src;
      pre2.style.display = "block";
      check_img_exists = true;
      updateButtonState();
    }
  }
    function myImgRemove(number) {
      document.getElementById("file_ip_"+number+"_preview").src = "https://i.ibb.co/ZVFsg37/default.png";
      document.getElementById("file_ip_"+number).value = null;
      check_img_exists = false;
      updateButtonState();
    }
    number++;
}
while (number < 3);



// ********* Button Validation *********
// flag = false :- disabled, flag = true :- enabled
var flag_height; var flag_width; var flag_depth; var contact_details__flag;

// *********** PAGE 1 Validation ****************
function check_height(){
    var cub_height = $('.left_cuboid').val();
    var cub_height_numb = parseInt(cub_height);
    if(cub_height_numb > 6000){
        $('#err-left').show();
        flag_height = false;
        updateButtonState();
    }
    else{
        $('#err-left').hide();
        flag_height = true;
        updateButtonState();
    }
}

function check_width(){
    var cub_width = $('.width_cuboid').val();
    var cub_width_numb = parseInt(cub_width);

    if(cub_width_numb > 6000){
        $('#err-sirka').show();
        flag_width = false;
        updateButtonState();
    }else{
        $('#err-sirka').hide();
        flag_width = true;
        updateButtonState();
    }
}

function check_depth(){
    var cub_depth = $('.depth_cuboid').val();
    var cub_depth_numb = parseInt(cub_depth)

    if(cub_depth_numb > 1600){
        $('#err-hlbka').show();
        flag_depth = false;
        updateButtonState();
    }else{
        $('#err-hlbka').hide();
        flag_depth = true;
        updateButtonState();
    }
}

function updateButtonState(){
    if((flag_height == true) && (flag_width == true) && (flag_depth == true) && (check_img_exists == true) && (check_material_exists == true)){
        $('#img-config-1-btn').attr('disabled', false)
    }else{
        $('#img-config-1-btn').attr('disabled', true)
    }
}

// ************* PAGE 2 Validation ***************
$('.contact__details').on('blur', function(){
    var allInputsFilled;

    $('.contact__details').each(function(){
        if($(this).val().trim() === ''){
            allInputsFilled = false;
            return false;
        }
        else{
            allInputsFilled = true;
        }
    });

    if(allInputsFilled == true){
        contact_details__flag = true;
        updateContactValidation();
    }
    else{
        contact_details__flag = false;
        updateContactValidation();
    }

})



function updateContactValidation(){
    if(contact_details__flag == true){
        $('#img-config-2-btn').attr('disabled', false);
    }
    else{
        $('#img-config-2-btn').attr('disabled', true);
    }
}


</script>

<script>
// dekor image add new
$(document).on('click', '.drop-zone', function(){
    $('.red_color_bdr').removeClass('red_color_bdr')
    if($(this).hasClass('red_color_bdr')) {
        $(this).removeClass('red_color_bdr')
    }else{
        $(this).addClass('red_color_bdr')
    }
    
});




$(document).on('click', '.img_modal_cls', function(){
    let src = $(this).attr('src');

    let getName2 = $(this).parent('div').siblings('div').find('.img_cls_name').text();
    let getID2 = $(this).parent('div').siblings('div').find('.img_id_num').text(); 

    $('.red_color_bdr').html('<img src="'+src+'" class="w145 red_bdr" data-img-name="'+getName2+'" data-img-id="'+getID2+'">');
    // $('.red_color_bdr').html('<h5 class="cab_interior_title font-weight-bold mt-2 mb-0"> '+ getName2 +'</h5>');
    // $('.red_color_bdr').html('<small>'+ getID2 +'</small>');
    check_material_exists = true;
    updateButtonState();
});

// scroll top
const scrollToTopBtn = document.querySelector('.scrollTop');

scrollToTopBtn.addEventListener('click', () => {
  const scrollDuration = 300; // duration in milliseconds
  const scrollStep = -window.scrollY / (scrollDuration / 15);
  const scrollInterval = setInterval(() => {
    if (window.scrollY !== 0) {
      window.scrollBy(0, scrollStep);
    } else {
      clearInterval(scrollInterval);
    }
  }, 15);
});
</script>