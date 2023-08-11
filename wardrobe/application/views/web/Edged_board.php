<?php include("include/header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="<?= base_url() ?>assests/web_assets/css/built_in_cabinets.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<style>
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
    .dekor-confirm-btn,.abs-confirm-btn{
        width:115px;
    }
    .active-dekor-img,.active-abs-img{
        border:3px solid red;
    }
</style>


<div class="product-category-container mb-md-90 mb-sm-90 pb-1 shadow_cstm">
   <input type="hidden" value="<?=base_url()?>" id="base-url" />
    <div class="container wide">
        <div class="row">
            <div class="col-md-10">
                <div class="progress-bar mt-35">
                    <div class="step-1 active" data-no="0" id="sp-0">
                        <div class="bullet bullet_first active" data-toggle="tooltip" data-placement="bottom" title="Parametre">
                            <span>Parametre</span>
                        </div>
                    </div>

                    <div class="step" data-no="1" id="sp-1">
                        <div class="bullet" data-toggle="tooltip" data-placement="bottom" title="Drevodekor">
                            <!--<span>Výber materiálu</span>-->
                            <span>Drevodekor</span>
                        </div>
                    </div>

                    <div class="step" data-no="2" id="sp-2">
                        <div class="bullet" data-toggle="tooltip" data-placement="bottom" title="ABS">
                            <!--<span>Cena + objednávka</span>-->
                            <span>ABS</span>
                        </div>
                    </div>
                    <div class="step" data-no="3" id="sp-3">
                        <div class="bullet" data-toggle="tooltip" data-placement="bottom" title="Súhrn">
                            <!--<span>Cena + objednávka</span>-->
                            <span>Súhrn</span>
                        </div>
                    </div>
                    <div class="step" data-no="4" id="sp-4">
                        <div class="bullet" data-toggle="tooltip" data-placement="bottom" title="Objednávka">
                            <!--<span>Cena + objednávka</span>-->
                            <span>Objednávka</span>
                        </div>
                    </div>
                    <!-- <div class="step d-none" data-no="5" id="sp-5">
                        <div class="bullet" data-toggle="tooltip" data-placement="bottom" title="Objednávka">
                            <span>Objednávka</span>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-2 modal_btnns mt-30 modal_btn_edge" style="display:none;">
                <button type="button" class="bg-white btn btn-danger font-weight-bolder tab9_btn text-danger font14 btn_chngg" data-toggle="modal" data-target="#modal_num_20"><img class="lazy tab1_imgg mr-1" src="<?= base_url() ?>assests/web_assets/img_web/setting_edge.png" alt="">Exportovať do OS</button>
            </div>
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
                                <div class="col-md-9">
                                    <div class="account-details-form" method="post">
                                        <?php
                                        //echo $this->session->flashdata('message');
                                        ?>
                                        <div class="row mt-30">
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between">
                                                    <!--configurator link-->
                                                    <a href="<?= base_url() ?>web/configurator" class="btn btn-basic Späť_btn"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>

                                                    <a href="<?= base_url() ?>web/edged_board" class="btn btn-basic float-right tab_btn profes_btn"><img src="<?= base_url() ?>assests/web_assets/img_web/edge_setting.png"> Profesionálne zobrazenie</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-30">
                                            <div class="col-md-2 d-flex flex-column justify-content-center">

                                            </div>
                                            <div class="col-md-8 position-relative box_center_wd3">
                                                <div class="align-items-center d-flex">
                                                    <label class="lbl_sides font-weight-bolder">Dĺžka</label>
                                                    <input type="text" placeholder="" id="dizkal-1" class="mx-1 para_lfh2 w49 Dĺžka1 form-control setInpWidth" maxlength="4"> <span class="font14">mm</span>
                                                </div>
                                                <img src="<?= base_url() ?>assests/web_assets/img_web/edge_image_2.png" class="img-fluid w-100" alt="">
                                                <!-- <img src="<?= base_url() ?>assests/web_assets/img_web/edge_board_hd.png" class="img-fluid w-100" alt=""> -->
                                                <div class="my-4 d-flex align-items-center">
                                                    <label class="font-weight-bolder lbl_sides">Šírka&nbsp;</label>
                                                    <input type="text" placeholder="" id="sirka-1" class="para_width2 w49 Šírka1 form-control setInpWidth" maxlength="4"> <span class="font14">&nbsp;mm</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 d-flex flex-column justify-content-center">
                                                <div class="align-items-center d-flex">
                                                    <label class="lbl_sides font-weight-bolder mr-1">Hrúbka</label>
                                                    <select class="font14 form-control w_100" id="hrubka-1" onchange="change_thickness(this.value)">
                                                        <option value="">Vyberte</option>
                                                        <option value="10">10 mm</option>
                                                        <option value="18">18 mm</option>
                                                        <option value="28">28 mm</option>
                                                        <option value="36">36 mm</option>
                                                    </select>
                                                    <!--<input type="text" placeholder="" id="" class="w-25 para_rfh2 mx-1 Výška1 form-control setInpWidth" maxlength="4"> <span class="font14">mm</span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="tabDiv_right position-relative">
                                        <h4 class="font-weight-bolder">Rozmery</h4>
                                        <div class="row mb-150">
                                            <div class="col-md-6 d-flex justify-content-between mb-1 mt-10 align-items-center">
                                                <label class="font-weight-bolder label-reduce-dark mm-text-90vw mb-0">Šírka&nbsp;</label>
                                                <input type="text" placeholder="" id="" class="para_width2 setInpWidth Šírka2 h25" maxlength="4"> <span class="font-weight-bolder font12 mr-15">&nbsp;mm </span>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-between mb-1 mt-10 align-items-center pl-2">
                                                <label class="font-weight-bolder label-reduce-dark mm-text-90vw mb-0">Hrúbka&nbsp;</label>
                                                <input type="text" placeholder="" id="thickness-id" class="Výška2 para_width2 setInpWidth h25" maxlength="4"> <span class="font-weight-bolder font12 mr-15">&nbsp;mm </span>
                                            </div>

                                            <div class="col-md-6 d-flex justify-content-between mb-1 mt-10 align-items-center">
                                                <label class="font-weight-bolder label-reduce-dark mm-text-90vw mb-0">Dĺžka&nbsp;</label>
                                                <input type="text" placeholder="" id="" class="Dĺžka2 para_width2 setInpWidth  h25" maxlength="4"> <span class="font-weight-bolder font12 mr-15">&nbsp;mm </span>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-between">
                                                <!-- <label class="lbl_sides font-weight-bolder">Výška <br><small>pravá predná</small></label>
                                                <input type="text" placeholder="" id="" class="mx-1 para_lfh2 w-25 h30">cm -->
                                            </div>
                                            <div class="col-md-6 col-6 mt-10">
                                                <h5 class="font-weight-bolder mt-2 ">Drevodekor</h5>
                                                <div class="card p-1">
                                                    <img src="<?= base_url() ?>assests/web_assets/img_web/White.jpg" alt="" class="Dub_img d-block img-fluid img-responsive drevodekor-img">
                                                    <h6 class="f9 font-weight-bolder my-1 dekor-color-code"></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6 mt-10">
                                                <h5 class="font-weight-bolder mt-2">ABS</h5>
                                                <div class="card p-1">
                                                    <img src="<?= base_url() ?>assests/web_assets/img_web/White.jpg" alt="" class="Dub_img d-block img-fluid img-responsive abs-img">
                                                    <h6 class="f9 font-weight-bolder my-1 abs-color-code"></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12 mt-10 mx-auto edge_next_btn_bottom">
                                                <div class="field btns justify-content-center align-items-center mx-auto mt-3">
                                                    <button class="next-1 next btn-green" >Pokračovať</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="field btns justify-content-center align-items-center mx-auto mt-3">-->

                                    <!--    <button class="next-1 next btn-green">Ďalej</button>-->
                                    <!--</div>-->
                                </div>
                            </div>


                        </div>

                        <!-- tab 2 -->

                        <div class="page tab2_wd3">
                            <a href="javascript:void(0);" class="btn btn-basic Späť_btn mb-2 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
                            <div class="row mt-2">
                                <div class="col-md-9">
                                    <div class="account-details-form mt-55">

                                        <div class="row">
                                            <div class="col-md-2 d-flex flex-column justify-content-center">

                                            </div>
                                            <div class="col-md-8 position-relative">
                                                <div class="align-items-center d-flex">
                                                    <label class="lbl_sides font-weight-bolder">Dĺžka</label>
                                                    <input type="text" placeholder="" id="" class="mx-1 para_lfh2 w49 Dĺžka1 form-control setInpWidth" readonly="readonly"> <span class="font-weight-bolder font12"> mm </span>
                                                </div>
                                                <div class="cust_width w-100 box_select">
                                                    <img src="<?= base_url() ?>assests/web_assets/img_web/Edged_tab2_img2.png" class="img-fluid w-100" alt="">
                                                </div>
                                                <div class="mt-3 d-flex align-items-center">
                                                    <label class="font-weight-bolder">Šírka&nbsp;</label>
                                                    <input type="text" placeholder="" id="" class="para_width2 w49 Šírka1 form-control setInpWidth" readonly="readonly"> <span class="font-weight-bolder font12">&nbsp;mm </span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 d-flex flex-column justify-content-center">
                                                <div class="align-items-center d-flex">
                                                    <label class="lbl_sides font-weight-bolder">Hrúbka </label>
                                                    <input type="text" placeholder="" id="" class="w-25 para_rfh2 mx-1 Výška1 form-control setInpWidth" readonly="readonly"> <span class="font-weight-bolder font12"> mm </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container set_swiperImgs">
                                            <div class="px-5 my-4">

                                                <h4 for="" class="align-items-center d-flex font-weight-bolder justify-content-end text-center"><span style="color:red" id="content-1"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Počet ks: &nbsp;<input min="1" type="number" value="1" class="h-100 w49 po_1 form-control setInpWidth no-pcs"></h4>
                                            </div>
                                            <div class="swiper-container pl-25 pr-25 pt-40">
                                                <!-- Additional required wrapper 1-->
                                                <div class="swiper-wrapper pt-4">
                                                    <?php
                                                    if ($sunmica_prices) {
                                                        foreach ($sunmica_prices as $k => $price) {

                                                    ?>
                                                            <div class="swiper-slide d-flex flex-column">
                                                                <?php foreach ($price as $key => $value) { ?>
                                                                    <div>
                                                                        <span id="dekor-k-<?= $k ?>" class="overlay-text dekor-text-cls"><span class="font-weight-light"><?= $value['color'] ?></span></span>
                                                                        <img data-key="<?= $k ?>" data-text="Dub Kansas 001 <?= $value['color'] ?>" data-price="<?= $value['price'] ?>" data-color="<?= $value['color'] ?>" src="<?= base_url() . $value['image'] ?>" alt="" class="mb-20 zoom select_imgs">
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                    <?php }
                                                    }  ?>


                                                </div>

                                                <!-- If we need navigation buttons -->
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="tabDiv_right position-relative">
                                        <h4 class="font-weight-bolder">Rozmery</h4>
                                        <div class="row mb-150">
                                            <div class="col-md-6 d-flex justify-content-between mb-1 mt-10 align-items-center">
                                                <label class="font-weight-bolder label-reduce-dark mb-0">Šírka&nbsp;</label>
                                                <input type="text" placeholder="" id="" class="para_width2 setInpWidth Šírka2 h25" readonly="readonly"> <span class="font-weight-bolder font12 mr-15">&nbsp;mm </span>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-between mb-1 mt-10 align-items-center pl-2">
                                                <label class="font-weight-bolder label-reduce-dark mb-0">Hrúbka&nbsp;</label>
                                                <input type="text" placeholder="" id="" class="Výška2 para_width2 setInpWidth h25" readonly="readonly"> <span class="font-weight-bolder font12 mr-15">&nbsp;mm </span>
                                            </div>

                                            <div class="col-md-6 d-flex justify-content-between mb-1 mt-10 align-items-center">
                                                <label class="font-weight-bolder label-reduce-dark mb-0">Dĺžka&nbsp;</label>
                                                <input type="text" placeholder="" id="" class="Dĺžka2 para_width2 setInpWidth h25" readonly="readonly"> <span class="font-weight-bolder font12 mr-15">&nbsp;mm </span>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-between">
                                                <!-- <label class="lbl_sides font-weight-bolder">Výška <br><small>pravá predná</small></label>
                                                <input type="text" placeholder="" id="" class="mx-1 para_lfh2 w-25 h30">cm -->
                                            </div>
                                            <div class="col-md-6 col-6 mt-10">
                                                <h5 class="font-weight-bolder mt-2">Drevodekor</h5>
                                                <div class="card p-1">
                                                    <img src="<?= base_url() ?>assests/web_assets/img_web/White.jpg" alt="" class="Dub_img d-block img-fluid img-responsive drevodekor-img">
                                                    <h6 class="f9 font-weight-bolder my-1 dekor-color-code"></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6 mt-10">
                                                <h5 class="font-weight-bolder mt-2">ABS</h5>
                                                <div class="card p-1">
                                                    <img src="<?= base_url() ?>assests/web_assets/img_web/White.jpg" alt="" class="Dub_img d-block img-fluid img-responsive abs-img">
                                                    <h6 class="f9 font-weight-bolder my-1 abs-color-code"></h6>
                                                </div>
                                            </div>
                                            <!--<div class="col-md-12 mt-150">-->
                                            <!--    <button type="button" class="btn btn-danger tab9_btn font14 mb-10 w-100"><img src="<?= base_url() ?>assests/web_assets/img_web/save_btn.png" alt=""> Prejsť do košíka</button>-->
                                            <!--    <button type="button" class="bg-white btn btn-danger font-weight-bolder tab9_btn text-danger font14 w-100"><img src="<?= base_url() ?>assests/web_assets/img_web/Dokončiť_objednávku.png" alt=""> Dokončiť objednávku</button>-->
                                            <!--</div>-->
                                            <div class="col-md-12 col-12 mt-10 mx-auto edge_next_btn_bottom">
                                                <div class="field btns justify-content-center align-items-center mx-auto mt-3">
                                                    <button class="next-1 next btn-green tab_2_edge_btn">Pokračovať</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="field btns justify-content-center align-items-center mx-auto">-->
                                    <!--    <button class="prev-2 prev">Previous</button>-->
                                    <!--</div>-->
                                    <!--<div class="field btns justify-content-center align-items-center mx-auto mt-3">-->
                                    <!--    <button class="next-2 next btn-green tab_2_edge_btn">Ďalej</button>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>

                        <!-- tab 3 -->
                        <div class="page tab2_wd3">
                            <a href="javascript:void(0);" class="btn btn-basic Späť_btn mb-2 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
                            <div class="row mt-2">
                                <div class="col-md-9">
                                    <div class="account-details-form mt-55">

                                        <div class="row">
                                            <div class="col-md-2 d-flex flex-column justify-content-center">
                                                <!-- <img src="<?= base_url() ?>assests/web_assets/img_web/Edged_tab2_img2.png" class="img-fluid w-100 clone-dekor-img" alt=""> -->
                                            </div>
                                            <div class="col-md-8 position-relative">
                                                <div class="align-items-center d-flex">
                                                    <label class="lbl_sides font-weight-bolder">Dĺžka</label>
                                                    <input type="text" placeholder="" id="length-input" class="mx-1 para_lfh2 w49 Dĺžka1 form-control setInpWidth" readonly="readonly"> <span class="font-weight-bolder font12"> mm </span>
                                                </div>
                                                <div class="cust_width w-100 box_select_edge position-relative">
                                                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" alt="" class="img1_clip drevodekor-img">
                                                    <!-- <img src="<? //=base_url()
                                                                    ?>assests/web_assets/img_web/Edged_tab2_img_1.png" class="img-fluid w-100" alt=""> -->
                                                    <img src="<?= base_url() ?>assests/web_assets/img_web/edge_board4.png" class="img-fluid w-100 change-img" alt="">
                                                </div>
                                                <div class="mt-3 d-flex align-items-center">
                                                    <label class="font-weight-bolder">Šírka&nbsp;</label>
                                                    <input type="text" placeholder="" id="width-input" class="para_width2 w49 Šírka1 form-control setInpWidth" readonly="readonly"> <span class="font-weight-bolder font12">&nbsp;mm </span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 d-flex flex-column justify-content-center">
                                                <div class="align-items-center d-flex">
                                                    <label class="lbl_sides font-weight-bolder">Hrúbka</label>
                                                    <input type="text" placeholder="" id="thick-input" class="w-25 para_rfh2 mx-1 Výška1 form-control setInpWidth" readonly="readonly"> <span class="font-weight-bolder font12"> mm </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container set_swiperImgs">
                                            <div class="px-5 my-4 row">
                                                <div class="col-md-8"></div>
                                                <div class="d-flex font-weight-bolder justify-content-center flex-column col-md-4">
                                                    <h3 class="font-weight-bolder text-left changethis">ABS bude na</h3>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="text-muted w-on-abs">(600 mm)</label>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input type="checkbox" class="form-check-input select-sunmica" onclick="check_sunmica('left')" id="check-1" value="left">
                                                                <label class="form-check-label label-small " for="check-1">1.šírka</label>
                                                            </div>
                                                            <div class="form-check mt-2 d-flex align-items-center">
                                                                <input type="checkbox" class="form-check-input select-sunmica" id="check-2" onclick="check_sunmica('right')" value="right">
                                                                <label class="form-check-label label-small" for="check-2">2.šírka</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="text-muted l-on-abs">(2200 mm)</label>
                                                            <div class="form-check d-flex align-items-center">
                                                                <input type="checkbox" class="form-check-input select-sunmica" id="check-3" onclick="check_sunmica('front')" value="front">
                                                                <label class="form-check-label label-small" for="check-3">3.dĺžka</label>
                                                            </div>
                                                            <div class="form-check mt-2 d-flex align-items-center">
                                                                <input type="checkbox" class="form-check-input select-sunmica" id="check-4" onclick="check_sunmica('back')" value="back">
                                                                <label class="form-check-label label-small" for="check-4">4.dĺžka</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <span style="color:red" id="content-2"></span>

                                                </div>
                                            </div>
                                            <div class="swiper-container pl-25 pr-25 pt-40">
                                                <!-- Additional required wrapper -->
                                                <div class="swiper-wrapper pt-4">

                                                    <?php
                                                    if ($sunmica_prices) {
                                                        foreach ($sunmica_prices as $k => $price) {

                                                    ?>
                                                            <div class="swiper-slide d-flex flex-column">
                                                                <?php foreach ($price as $key => $value) { ?>
                                                                    <div>
                                                                        <span id="abs-k-<?= $k ?>" class="overlay-text abs-text-cls"><span class="font-weight-light"><?= $value['color'] ?></span></span>
                                                                        <img data-key="<?= $k ?>" data-text="Dub Kansas 001 <?= $value['color'] ?>" data-price="<?= $value['price'] ?>" data-color="<?= $value['color'] ?>" src="<?= base_url() . $value['image'] ?>" alt="" class="mb-20 zoom select_imgs_2">
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                    <?php }
                                                    }  ?>

                                                </div>

                                                <!-- If we need navigation buttons -->
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="tabDiv_right position-relative">
                                        <h4 class="font-weight-bolder">Rozmery</h4>
                                        <div class="row mb-150">
                                            <div class="col-md-6 d-flex justify-content-between mb-1 mt-10 align-items-center">
                                                <label class="font-weight-bolder label-reduce-dark mb-0">Šírka&nbsp;</label>
                                                <input type="text" placeholder="" id="" class="para_width2 setInpWidth Šírka2 h25" readonly="readonly"> <span class="font-weight-bolder font12 mr-15">&nbsp;mm </span>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-between mb-1 mt-10 align-items-center pl-2">
                                                <label class="font-weight-bolder label-reduce-dark mb-0">Hrúbka&nbsp;</label>
                                                <input type="text" placeholder="" id="" class="Výška2 para_width2 setInpWidth h25" readonly="readonly"> <span class="font-weight-bolder font12 mr-15">&nbsp;mm </span>
                                            </div>

                                            <div class="col-md-6 d-flex justify-content-between mb-1 mt-10 align-items-center">
                                                <label class="font-weight-bolder label-reduce-dark mb-0">Dĺžka&nbsp;</label>
                                                <input type="text" placeholder="" id="" class="Dĺžka2 para_width2 setInpWidth h25" readonly="readonly"> <span class="font-weight-bolder font12 mr-15">&nbsp;mm </span>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-between">
                                                <!-- <label class="lbl_sides font-weight-bolder">Výška <br><small>pravá predná</small></label>
                <input type="text" placeholder="" id="" class="mx-1 para_lfh2 w-25 h30">cm -->
                                            </div>
                                            <div class="col-md-6 col-6 mt-10">
                                                <h5 class="font-weight-bolder mt-2">Drevodekor</h5>
                                                <div class="card p-1">
                                                    <img src="<?= base_url() ?>assests/web_assets/img_web/white_wood.png" alt="" class="Dub_img d-block img-fluid img-responsive drevodekor-img">
                                                    <h6 class="f9 font-weight-bolder my-1 dekor-color-code" id="dekorcc"></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6 mt-10">
                                                <h5 class="font-weight-bolder mt-2">ABS</h5>
                                                <div class="card p-1">
                                                    <img src="<?= base_url() ?>assests/web_assets/img_web/white_wood.png" alt="" class="Dub_img d-block img-fluid img-responsive abs-img">
                                                    <h6 class="f9 font-weight-bolder my-1 abs-color-code" id="abscc"></h6>
                                                </div>
                                            </div>
                                            <!--<div class="col-md-12 mt-150">-->
                                            <!--    <button type="button" class="btn btn-danger tab9_btn font14 mb-10 w-100"><img src="<?= base_url() ?>assests/web_assets/img_web/save_btn.png" alt=""> Prejsť do košíka</button>-->
                                            <!--    <button type="button" class="bg-white btn btn-danger font-weight-bolder tab9_btn text-danger font14 w-100"><img src="<?= base_url() ?>assests/web_assets/img_web/Dokončiť_objednávku.png" alt=""> Dokončiť objednávku</button>-->
                                            <!--</div>-->
                                            <div class="col-md-12 col-12 mt-10 mx-auto edge_next_btn_bottom">
                                                <div class="field btns justify-content-center align-items-center mx-auto mt-3">
                                                    <button class="next-1 next btn-green next-3">Pokračovať</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="field btns justify-content-center align-items-center mx-auto">-->
                                    <!--    <button class="prev-2 prev">Previous</button>-->
                                    <!--</div>-->

                                    <!--<div class="field btns justify-content-center align-items-center mx-auto mt-3">-->
                                    <!--    <button class="next-3 next btn-green">Ďalej</button>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>

                        <!-- tab 4 -->

                        <div class="page">
                            <a href="javascript:void(0);" class="btn btn-basic Späť_btn mb-2 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
                            <div class="row">
                                <div class="col-md-10 mt-0">
                                    <div class="account-details-form">
                                        <div class="col-md-12 table-responsive justify-content-center" style="min-height: 500px">
                                            <table class="table border-bottom table-hover table-rows">
                                            </table>
                                            <button type="button" class="btn btn-basic Pridat_polozku justify-content-between append-tbl-data">
                                                <img src="<?= base_url() ?>assests/web_assets/img_web/plus2.png">Pridať položku
                                            </button>
                                        </div>

                                        <div class="">
                                            <hr class="" style="border:1px solid #ccc">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h3 class="font-weight-bolder">Spolu</h3>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <div class="">
                                                            <!--<h3 class="font-weight-bolder mb-0"><span class="g-total">58,95</span><span>€</span></h3>-->
                                                            <h3 class="font-weight-bolder mb-0"><span class="g-total-1">0</span><span>€</span></h3>
                                                            <small class="font-weight-bold"><span class="g-total">0</span>€ bez DPH</small>
                                                        </div>
                                                        <div class="ml-3">
                                                            <button type="button" class="btn btn-danger tab10_btn next final-step" style="width: 178px;">
                                                                <img src="<?= base_url() ?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--- TAB 5 -->
                        <div class="page">
                            <a href="javascript:void(0);" class="btn btn-basic Späť_btn mb-2 prev-1 prev">
                                <i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť
                            </a>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="tabDiv_right tab10_ht padding_tab_10">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input tab_10_check" id="Nakupujem_na_firmu">
                                                <label class="form-check-label ml-10 tab_10_lable" for="Nakupujem_na_firmu">Nakupujem na firmu</label>
                                            </div>
                                            <div class="mr-145" id="top_check_h_s">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input tab_10_check mt-10" id="Nakupujem_na_firmu_1">
                                                    <label class="form-check-label ml-10 tab_10_lable" for="Nakupujem_na_firmu_1">Fakturačná adresa je <br> rovnaká ako dodacia</label>
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
							<input type="text" class="form-control w-75 tab_10_input f-address" id="address" placeholder="Ulica a číslo">
						</div>

						<div class="form-group">
							<input type="text" class="form-control w-75 tab_10_input f-city" id="city-name" placeholder="Mesto">
						</div>

						<div class="form-group">
							<input type="text" class="form-control w-75 tab_10_input f-zip" id="zip-code" placeholder="PSČ">
						</div>
					</div>

					<div class="col-md-4">
						<h4 class="font-weight-bolder">Fakturačná adresa</h4>
						<div class="form-group">
							<input type="text" class="form-control w-75 tab_10_input address-1" id="address-1" placeholder="Ulica a číslo">
						</div>

						<div class="form-group">
							<input type="text" class="form-control w-75 tab_10_input city-name-1" id="city-name-1" placeholder="Mesto">
						</div>

						<div class="form-group">
							<input type="text" class="form-control w-75 tab_10_input zip-code-1" id="zip-code-1" placeholder="PSČ">
						</div>
					</div>
                    <div class="col-md-12">
                        <div class="d-flex">
                            <div class="" id="check_hide_show_edge" style="display: none;">
                                <h4 class="font-weight-bolder">Firemné údaje</h4>
                                <div class="d-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control w-75 tab_10_input" id="address-2" placeholder="Firma">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control w-75 tab_10_input" id="city-name-2" placeholder="IČ DPH">
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <input type="text" class="form-control width_input_edge tab_10_input" id="zip-code-2" placeholder="IČO">
                                    </div>
                                </div>
                            </div>
                            <div class="" id="check_hide_show_edge_1" style="display:none;">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input tab_10_check mt-10" id="">
                                    <label class="form-check-label ml-10 tab_10_lable" for="Nakupujem_na_firmu_1">
                                        Fakturačná adresa je <br> rovnaká ako dodacia
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="font-weight-bolder">Poznámka</h4>
                        <div class="form-group">
                            <textarea name="Poznámka" id="" rows="5" class="w-100 form-control"></textarea>
                        </div>
                    </div>
                                            
                    </div>
                </div>
            </div>

    <!-- last form -->
    <div class="col-md-3 position-relative">
        <div class="">
            <!--<h4 class="font-weight-bolder">Rozmery 1</h4>-->
            <div class="mt-30">
                <div class="final-div">
                    <div class="d-flex" style="gap: 30px;">
                        <div>
                            <h4 class="font-weight-bold">ks</h4>
                            <p>3</p>
                        </div>
                        <div>
                            <h4 class="font-weight-bold">Hrúbka</h4>
                            <p>18mm</p>
                        </div>
                        <div>
                            <h4 class="font-weight-bold">Šírka</h4>
                            <p>200mm</p>
                        </div>
                        <div>
                            <h4 class="font-weight-bold">Dĺžka</h4>
                            <p>1000mm</p>
                        </div>
                    </div>
                    <div class="mt-20">
                        <div class="align-items-center d-flex mb-2 edge_width_big" style="gap: 10px;">
                            <span class="font-weight-bold label-reduce-dark">Dekor:</span>
                            <div class="align-items-center card flex-row p-1">
                                <img src="<?= base_url() ?>assests/web_assets/img_web/white_wood.png" alt="" class="h25 mo_edge_h">
                                <h6 class="font-weight-bolder m-0 ml-1 dekor-color-code"></h6>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="align-items-center d-flex mb-2 mt-20" style="gap: 26px;">
                                <span class="font-weight-bold label-reduce-dark">ABS:&nbsp;&nbsp;</span>
                                <div class="align-items-center card flex-row p-1">
                                    <img src="<?= base_url() ?>assests/web_assets/img_web/white_wood.png" alt="" class="h25 mo_edge_h">
                                    <h6 class="font-weight-bolder m-0 ml-1 abs-color-code"></h6>
                                </div>
                            </div>
                            <div class=" mt-20">
                                <h6 class="edge_tab_3_txt"><b>17,89€ s DPH</b></h6>
                                <small class="font12 ml-20">14,90€ bez DPH</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-30">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="font-weight-bolder tab_10_cena">Cena bez DPH</h4>
                                <small class="font-weight-bold">Cena bez DPH</small>
                            </div>
                            <div class="col-md-6 text-right">
                                <h4 class="font-weight-bolder tab_10_cena final-price-1">35,78€</h4>
                                <small class="font-weight-bold tab_10_small_txt final-price">28,62€</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-30">
                    <button type="button" class="btn btn-danger tab10_btn mb-2 w-100 tab10-btn-1 next-1 next" disabled>
                        <img src="<?= base_url() ?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať
                    </button>
                    <p class="tab10_font tab_10_text_end">
                        Kliknutím na tlačidlo záväzne potvrdzujete objednávku<br>a súhlasíte s našimi <u>obchodnými podmienkami</u>.
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>



    <!-- tab 3 -->
<div class="page">
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
        <tbody id="summary-body">
            
        </tbody>
    </table>
    <div class="text-center">
        <a href="javascript:void(0)">
            <button type="button" class="btn btn-danger cal-btn1  mb-2"><img src="<?=base_url()?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať</button>
        </a>
    </div>
</div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
                    
        <?php include("include/footer.php"); ?>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script>
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>

        <!-- ========== Export Modal ======== -->
        <div class="modal fade" id="modal_num_20" tabindex="-1" role="dialog" aria-labelledby="modalLabel_num2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="d-flex flex-row-reverse">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-sm-12 mx-auto">
                                <div class="text-center">
                                    <img src="https://wardrobe.zarfrestauracia.sk/assests/web_assets/img_web/setting_denir_1.png" alt="" class="img-fluid img-sizze">
                                    <h4 class="font-weight-bolder mt-3 setting_modal_text">Objednávkový systém sa otvoril na novej karte<h4>
                                            <p class="mt-3 desc__export">Ak nie ste prihlásený, prihláste sa prosím.
                                                Vytvorená objednávka sa automaticky prenesie
                                                do Vášho konta - medzi koncepty.
                                            </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- wood color Modal -->
        <div class="modal fade" id="woodColor" tabindex="-1" role="dialog" aria-labelledby="woodColorModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="woodColorModal">Vyberte drevodekor ohranenej dosky</h4>
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
                            <?php if ($sunmicapricemodal) {
                                foreach ($sunmicapricemodal as $k => $price) {
                            ?>


                            <div data-thick="<?= $price['thickness'] ?>" data-clr="<?= $price['color'] ?>" class="col-md-3 mb-3 color_fill_ins woodColorCls" >
                                <div class="border">
                                    <img data-colorcode="<?= $price['color'] ?>" src="<?= base_url() . $price['image'] ?>" alt="" class="w-h-252 inside_clr">
                                </div>
                                <div class="px-2 border">
                                    <small><?= $price['thickness'] ?> mm</small>
                                    <h5><?= $price['color'] ?></h5>
                                </div>
                            </div>



                            <?php }
                            }  ?>


                        </div>
                        
                    </div>
                    <div class="ml-3">
                        <button type="button" class="btn btn-danger dekor-confirm-btn" >Potvrdiť</button>
                    </div>
                </div>
            </div>
        </div>


    <!-- ABS BAsed  Modal -->
    <div class="modal fade" id="absMod" tabindex="-1" role="dialog" aria-labelledby="absModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="absModal">Vyberte dekor pre ABS hranu</h4>
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
                <div class="d-flex font-weight-bolder justify-content-center flex-column col-md-12">
                    <h3 class="font-weight-bolder text-start">ABS bude na</h3>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="text-muted w-on-abs">(600 mm)</label>
                            <div class="form-check d-flex align-items-center">
                                <input type="checkbox" class="form-check-input abs-selection-cls" id="check-ld" onclick="check_sunmica1('ld')">
                                <label class="form-check-label label-small" for="check-1">1.šírka</label>
                            </div>
                            <div class="form-check mt-2 d-flex align-items-center">
                                <input type="checkbox" class="form-check-input abs-selection-cls" id="check-rd" onclick="check_sunmica1('rd')">
                                <label class="form-check-label label-small" for="check-2">2.šírka</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="text-muted l-on-abs">(2200 mm)</label>
                            <div class="form-check d-flex align-items-center">
                                <input type="checkbox" class="form-check-input abs-selection-cls" id="check-fd" onclick="check_sunmica1('fd')">
                                <label class="form-check-label label-small" for="check-3">3.dĺžka</label>
                            </div>
                            <div class="form-check mt-2 d-flex align-items-center">
                                <input type="checkbox" class="form-check-input abs-selection-cls" id="check-bd" onclick="check_sunmica1('bd')">
                                <label class="form-check-label label-small" for="check-4">4.dĺžka</label>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>


                <?php if ($sunmicapricemodal) {
                    foreach ($sunmicapricemodal as $k => $price) {
                ?>


                        <div data-thick="<?= $price['thickness'] ?>" data-clr="<?= $price['color'] ?>" class="col-md-3 mb-3 color_fill_ins absColorCls" >
                            <div class="border">
                                <img data-colorcode="<?= $price['color'] ?>" src="<?= base_url() . $price['image'] ?>" alt="" class="w-h-252 inside_clr2">
                            </div>
                            <div class="px-2 border">
                                <small><?= $price['thickness'] ?> mm</small>
                                <h5><?= $price['color'] ?></h5>
                            </div>
                        </div>



                <?php }
                }  ?>

                </div>
            </div>
            <div class="ml-3">
                <button type="button" class="btn btn-danger abs-confirm-btn">Potvrdiť</button>
                <button type="button" class="btn btn-danger abs-confirm-btn-1">&nbsp;&nbsp;Vymazať&nbsp;&nbsp;</button>
            </div>
        </div>
    </div>
</div>


            <input type="hidden" id="step_1" value="">

            <input type="hidden" id="select-imgs-1" value="">
            <input type="hidden" id="dekor-imgs-1" value="">
            <input type="hidden" id="abs-imgs-1" value="">
            <input type="hidden" id="selected-dimensions-1" value="0">
            <input type="hidden" id="selected-dimensions-2" value="0">
            <input type="hidden" id="thick-price" value="0">

            <input type="hidden" id="current-thick-tr" value="0">

<script>
    window.onbeforeunload = function() {
        return 'Are you sure? Your work will be lost.';
    };

    function check_sunmica1(check) {
        var id = $('#current-thick-tr').val();
        var spl = id.split('-');
        var inc = 0;
        if ($("#check-" + check).prop('checked') == true) {
            $("#" + check + "-" + spl[1]).val(1)
        } else {
            $("#" + check + "-" + spl[1]).val(0)
        }
    }


    function check_sunmica(check) {
        var values = '';
        var check = 0;
        var inc = 0;
        var s1 = 0;
        var s2 = 0;

        $('.select-sunmica').each(function(index) {

            if ($(this).prop('checked') == true) {

                if ($(this).val() == 'left' || $(this).val() == 'front') {
                    values = values + ',' + $(this).val();
                    check++;
                }

                if ($(this).val() == 'left' || $(this).val() == 'right') {
                    s1++;
                }

                if ($(this).val() == 'back' || $(this).val() == 'front') {
                    s2++;
                }
            }


        })

        values = values.substr(1);

        $('#selected-dimensions-1').val(s1);
        $('#selected-dimensions-2').val(s2);

        if (values == 'left') {
            inc = 2;
        } else if (values == 'front') {
            inc = 1;
        } else if (values == 'left,front') {
            inc = 3;
        } else {
            inc = 4
        }
        var setimg = '<?= base_url() ?>assests/web_assets/img_web/edge_board' + inc + '.png';
        $('.change-img').attr("src", setimg);

        let d1 = $('#selected-dimensions-1').val();
        let d2 = $('#selected-dimensions-2').val();
        if(d1==0 && d2==0){
            $('.select_imgs_2').removeClass('red-border');
            $('.abs-color-code').text('');
            let src = $('#base-url').val()+'assests/web_assets/img_web/White.jpg';
            let src1 = $('#base-url').val()+'assests/web_assets/img_web/edge_board4.png'
            $('.abs-img').attr("src", src);
            $('#abs-imgs-1').val('');

            $('.change-img').attr("src", src1);

            $('.abs-text-cls').css('display', 'none')
        }
    }

    function change_thickness(thk) {
        $('#thickness-id').val(thk);
        $('.Výška1').val(thk);
        $('.Výška2').val(thk);
    }
    $(document).ready(function() {
        $("#Built_in").click(function() {
            $(".three_ctg").hide();
            $(".four_opt").show();
            $(".parameter_1").hide();
        });
        $("#plan_type_A").click(function() {
            $(".three_ctg").hide();
            $(".four_opt").hide();
            $(".parameter_1").show();
        });


        // ============= TAB 1 JS ==============================
        var setLeftHeight = $('.Dĺžka1, .Dĺžka2').keyup(function() {
            var l = '<?= $edge['length'] ?>';
            if (parseInt(this.value) > parseInt(l)) {
                alert('Maximálna dĺžka dosky je ' + l + ' mm');
                return false;
            }
            setLeftHeight.not(this).val(this.value);
            $('.l-on-abs').text('(' + this.value + 'mm)')
        });

        var setŠírka = $('.Šírka1, .Šírka2').keyup(function() {
            var w = '<?= $edge['width'] ?>';
            if (parseInt(this.value) > parseInt(w)) {
                alert('Maximálna šírka dosky je ' + w + ' mm')
                return false;
            }
            setŠírka.not(this).val(this.value);
            $('.w-on-abs').text('(' + this.value + 'mm)')

        });

        var setVýška = $('.Výška1, .Výška2').keyup(function() {
            setVýška.not(this).val(this.value);

        });

        var setPocet = $('.po_1, .po_2').keyup(function() {
            setPocet.not(this).val(this.value);
        });


        // deepak btn modal show
        $(".tab_2_edge_btn").click(function() {

            $(".modal_btn_edge").show();
            $('.clone-dekor-img').css("background-image", "url(" + $('#select-imgs-1').val() + ")")
        });

        $('#Nakupujem_na_firmu').change(function() {
            if (this.checked) {
                $('#check_hide_show_edge').show();
            } else {
                $('#check_hide_show_edge').hide();
            }
            $('.padding_tab_10 .tab_10_input').trigger('keyup');
        })
        // $(function () {
        //     $("#Nakupujem_na_firmu").click(function () {
        //         if ($(this).is(":checked")) {
        //             $("#check_hide_show_edge").show();
        //             $("#check_hide_show_edge_1").show();
        //             $("#top_check_h_s").hide();
        //         } else {
        //             $("#check_hide_show_edge").hide();
        //             $("#check_hide_show_edge_1").hide();
        //             $("#top_check_h_s").show();
        //         }
        //     });
        // });
    });
</script>

<script>
    // function thicknewPrice(t,d){
    //    if(t == 10){
    //      return [5,15];
    //    }else if(t == 18){
    //       return [6,16];
    //    }
    //    else if(t == 28){
    //       return [7,17];
    //    }
    //    else if(t == 38){
    //      return [7,17];
    //    }
    // }



function set_summary() {
    var img1 = $('.change-img').attr("src");
    var row = '<tr id="tr-0">\
    <td class="align-middle p-0">\
    <input type="hidden" id="ld-0" value="0">\
    <input type="hidden" id="rd-0" value="0">\
    <input type="hidden" id="fd-0" value="0">\
    <input type="hidden" id="bd-0" value="0">\
    <img src="<?= base_url() ?>assests/web_assets/img_web/Edged_tab2_img2.png" alt="" class="image-fluid h35 main-tbl-img">\
    <p></p>\
    <img src="' + img1 + '" alt="" class="image-fluid h35 main-tbl-abs">\
    </td>\
    <td class="font12 align-middle"><b>Hrúbka:</b></td>\
    <td class="px-0 align-middle">\
    <input type="hidden" class="main-tbl-thick-1" value="" >\
    <select class="font14 form-control w_100 main-tbl-thick" name="thickness[]">\
        <option value="select">Vyberte</option>\
        <option value="10">10 mm</option>\
        <option value="18">18 mm</option>\
        <option value="28">28 mm</option>\
        <option value="36">36 mm</option>\
    </select>\
    </td>\
    <td class="font12 align-middle"><b>Šírka:</b></td>\
    <td class="px-0 align-middle"><input type="text" min="0" class="form-control w49 Šírka1 h-100 setInpWidth mt-20 main-tbl-width" name="width[]"> mm</td>\
    <td class="font12 align-middle"><b>Dĺžka:</b></td>\
    <td class="px-0 align-middle"><input type="text" min="0" class="form-control w49 Dĺžka1 h-100 setInpWidth mt-20 main-tbl-length" name="length[]"> mm</td>\
    <td class="font12 align-middle">\
    <div class="align-items-center d-flex justify-content-start mb-2">\
        <b class="w45">Dekor:</b>\
        <div class="align-items-center card flex-row p-1" >\
            <img data-dekor="1" src="<?= base_url() ?>assests/web_assets/img_web/button_imgg.png" alt="" class="h25 mo_edge_h main-dekor-img">\
            <h6 class="font-weight-bolder m-0 ml-1 dekor-color-name dekor-color-code"></h6>\
        </div>\
    </div>\
    <div class="align-items-center d-flex justify-content-start mb-2">\
        <b class="w45">ABS:&nbsp;&nbsp;&nbsp;</b>\
        <div class="align-items-center card flex-row p-1" >\
            <img data-abs="1" src="<?= base_url() ?>assests/web_assets/img_web/button_imgg.png" alt="" class="h25 mo_edge_h main-abs-img">\
            <h6 class="font-weight-bolder m-0 ml-1 abs-color-name abs-color-code"></h6>\
        </div>\
    </div>\
    </td>\
    <td class="font12 align-middle "><b>Počet ks:</b></td>\
    <td class="align-middle">\
    <input min="1" value="1" type="number" class="form-control w49 po_2 h-100 setInpWidth main-no-pcs" name="qtys[]">\
    </td>\
    <td class="align-middle p-0">\
    <input type="hidden" class="dtd-price">\
    <input type="hidden" class="abs-price">\
    <h6 class="edge_tab_3_txt w_now"><b class="main-row-price-1">0</b><b>€ s DPH</b></h6>\
    <small class="font12"><span class="main-row-price">0</span> € bez DPH</small>\
    </td>\
    <td class="align-middle"></td>\
    </tr>';


    $(".table-rows tr:first-child").remove();
    $('.table-rows').prepend(row);

    var dmn = {
        0: "ld",
        1: "rd",
        2: "fd",
        3: "bd"
    };
    $('.select-sunmica').each(function(index) {
        if ($(this).prop('checked') == true) {
            $('#' + dmn[index] + '-0').val(1)
        } else {
            $('#' + dmn[index] + '-0').val(0)
        }
    });


    var p = $('.no-pcs').val()
    var t = $('#hrubka-1').val();
    var l = $('#length-input').val();
    var w = $('#width-input').val();

    var s1 = $('#selected-dimensions-1').val();
    var s2 = $('#selected-dimensions-2').val();
    var tp = $('#thick-price').val();

    var dc = $('#dekorcc').text();
    var ac = $('#abscc').text();


    // if (t == 10) {
    //     tp1 = 1.2;  //4
    //     tp2 = 13.68; //14
    // } else if (t == 18) {
    //     tp1 = 5;
    //     tp2 = 15;
    // } else if (t == 28) {
    //     tp1 = 6;
    //     tp2 = 16;
    // } else if (t == 36) {
    //     tp1 = 7;
    //     tp2 = 17;
    // }
    // //new 2-05-2023 
    // tp1 = 1.2;  //4
    // tp2 = 13.68; //14

    // var d1 = parseFloat(s1 * w) + parseFloat(s1 * 100);
    // var d2 = parseFloat(s2 * l) + parseFloat(s2 * 100);
    // var absprice = (parseFloat(d1) + parseFloat(d2)) * tp1 * p / 1000;
    // var boardprice = l * w * tp2 * p / 1000000;

    var numl = parseInt(s1)+parseInt(s2);
    var dtdcost = 13.68;
    var abscost = 0;
    var incnum = 0;
    if(t == 10 || t == 18){
      incnum = 1;
      abscost = 2;
    }
    else if(t == 36 || t == 28){
      incnum = 2;
      abscost = 5;
    }
    var dtdmaterial = (w*l*incnum)/1000000;
    var dtdmaterialcost = dtdmaterial*dtdcost*p;
    var absmaterial = (numl*l)/1000;
    var absmaterialcost = absmaterial*abscost*p;
    var price = parseFloat(dtdmaterialcost)+parseFloat(absmaterialcost);

    if(t == 36 || t == 28){
      let gcost = 10*p;
      price = parseFloat(price)+parseFloat(gcost);
    }
   


    var price1 = price * 1.2;

    price = parseFloat(price).toFixed(2);
    price1 = parseFloat(price1).toFixed(2);


    $('.main-row-price').text(price);
    $('.main-row-price-1').text(price1);

    $('.main-tbl-thick').val(t);
    $('.main-tbl-thick-1').val(t);
    $('.main-tbl-length').val(l);
    $('.main-tbl-width').val(w);
    $('.main-no-pcs').val(p);

    $('.g-total').text(price);
    $('.g-total-1').text(price1);

    $('.dekor-color-code').text(dc);
    $('.abs-color-code').text(ac);

    $('.dtd-price').val(dtdmaterialcost);
    $('.abs-price').val(absmaterialcost);

    $('.main-tbl-img').css("background-image", "url(" + $('#select-imgs-1').val() + ")")
    $('.main-dekor-img').attr('src', $('#dekor-imgs-1').val())

    let absimgs = $('#abs-imgs-1').val();
    if(absimgs != ''){
    $('.main-abs-img').attr('src', absimgs)
    }

    $('.main-tbl-abs').css("background-image", "url(" + $('#abs-imgs-1').val() + ")")
}




$(document).on('click', '.remove-table-btn', function() {
if (!confirm('Naozaj to chcete odstrániť?')) {
    return false;
}
var id = $(this).closest("tr").attr('id');
var mp = $('#' + id).find('.main-row-price').text();
var mp1 = $('#' + id).find('.main-row-price-1').text();

var gt = $('.g-total').text()
var gt1 = $('.g-total-1').text()
var ft = parseFloat(gt) - parseFloat(mp);
var ft1 = parseFloat(gt1) - parseFloat(mp1);
$('.g-total').text(ft.toFixed(2))
$('.g-total-1').text(ft1.toFixed(2))
$('#' + id).remove();
});

var trinc = 1;
$('.append-tbl-data').click(function() {
//var cln = $(".table-rows").find("tr:last").clone(true);
//  $(".table-rows").append(cln);
var row = '<tr id="tr-' + trinc + '">\
            <td class="align-middle p-0">\
                <input type="hidden" id="ld-' + trinc + '" value="0">\
                <input type="hidden" id="rd-' + trinc + '" value="0">\
                <input type="hidden" id="fd-' + trinc + '" value="0">\
                <input type="hidden" id="bd-' + trinc + '" value="0">\
                <img src="<?= base_url() ?>assests/web_assets/img_web/Edged_tab2_img2.png" alt="" class="image-fluid h35 main-tbl-img">\
                <p></p>\
                <img src="<?= base_url() ?>assests/web_assets/img_web/edge_board4.png" alt="" class="image-fluid h35 main-tbl-abs">\
            </td>\
            <td class="font12 align-middle"><b>Hrúbka:</b></td>\
            <td class="px-0 align-middle">\
                <select class="font14 form-control w_100 main-tbl-thick" name="thickness[]">\
                    <option value="">Vyberte</option>\
                    <option value="10">10 mm</option>\
                    <option value="18">18 mm</option>\
                    <option value="28">28 mm</option>\
                    <option value="36">36 mm</option>\
            </select>\
            </td>\
            <td class="font12 align-middle"><b>Šírka:</b></td>\
            <td class="px-0 align-middle"><input type="text" min="1" value="" class="form-control w49 Šírka1 h-100 setInpWidth mt-20 main-tbl-width" name="width[]"> mm</td>\
            <td class="font12 align-middle"><b>Dĺžka:</b></td>\
            <td class="px-0 align-middle"><input type="text" min="1" value="" class="form-control w49 Dĺžka1 h-100 setInpWidth mt-20 main-tbl-length" name="length[]"> mm</td>\
            <td class="font12 align-middle">\
                <div class="align-items-center d-flex justify-content-start mb-2">\
                    <b class="w45">Dekor:</b>\
                    <div class="align-items-center card flex-row p-1" >\
                        <img src="<?= base_url() ?>assests/web_assets/img_web/button_imgg.png" alt="" class="h25 mo_edge_h main-dekor-img">\
                        <h6 class="font-weight-bolder m-0 ml-1 dekor-color-name dekor-color-code"></h6>\
                    </div>\
                </div>\
                <div class="align-items-center d-flex justify-content-start mb-2">\
                    <b class="w45">ABS:&nbsp;&nbsp;&nbsp;</b>\
                    <div class="align-items-center card flex-row p-1" >\
                        <img src="<?= base_url() ?>assests/web_assets/img_web/button_imgg.png" alt="" class="h25 mo_edge_h main-abs-img">\
                        <h6 class="font-weight-bolder m-0 ml-1 abs-color-name  abs-color-code"></h6>\
                    </div>\
                </div>\
            </td>\
            <td class="font12 align-middle "><b>Počet ks:</b></td>\
            <td class="align-middle">\
                <input min="1" value="" type="number" class="form-control w49 po_2 h-100 setInpWidth main-no-pcs" name="qtys[]">\
            </td>\
            <td class="align-middle p-0">\
                <input type="hidden" class="dtd-price">\
                <input type="hidden" class="abs-price">\
                <h6 class="edge_tab_3_txt "><b class="main-row-price-1">0</b><b>€ s DPH</b></h6>\
                <small class="font12"><span class="main-row-price">0</span> € bez DPH</small>\
            </td>\
            <td class="align-middle"><a href="javascript:void(0);" class="btn remove-table-btn"> X </a></td>\
        </tr>';
$(".table-rows").append(row);
// var tk = cln.find('.main-tbl-thick-1').val();
// cln.find('.main-tbl-thick').val(tk);
// var pr = cln.find('.main-row-price').text();
// var gt = $('.g-total').text();

// var tt = parseFloat(pr)+parseFloat(gt);
// $('.g-total').text(tt);
trinc++;

});

$('.final-step').click(function() {

//   let total = $('.g-total-1').text();
//   if(parseFloat(total) > 0){
//       return true
//   }else{
//       alert('Please insert all the inputs.')
//       return false;
//   }

var html = '';
var tp = 0;
var tp1 = 0;
var summary = '';
var incc = 0;
$(".table-rows tr").each(function(index) {
    var thick = $(this).find('.main-tbl-thick').val()
    var w = $(this).find('.main-tbl-width').val()
    var l = $(this).find('.main-tbl-length').val()
    var dimg = $(this).find('.main-dekor-img').attr('src')
    var absimg = $(this).find('.main-abs-img').attr('src')
    var pcs = $(this).find('.main-no-pcs').val();
    var price = parseFloat($(this).find('.main-row-price').text());
    var price1  =  parseFloat($(this).find('.main-row-price-1').text());

    var dtdprice  =  parseFloat($(this).find('.dtd-price').val());
    var absprice  =  parseFloat($(this).find('.abs-price').val());
    // var price1 = (price * 1.2);
    tp = parseFloat(tp) + parseFloat(price);
    tp1 = parseFloat(tp1) + parseFloat(price1);
   
    // price = parseFloat(price).toFixed(2);
    // price1 = parseFloat(price1).toFixed(2);

          html += `<div class="d-flex" style="gap: 30px;" >
            <div>
            <h4 class="font-weight-bold">ks</h4>
            <p>${pcs}</p>
            </div>
            <div>
            <h4 class="font-weight-bold">Hrúbka</h4>
            <p>${thick}mm</p>
            </div>
            <div>
            <h4 class="font-weight-bold">Šírka</h4>
            <p>${w}mm</p>
            </div>
            <div>
            <h4 class="font-weight-bold">Dĺžka</h4>
            <p>${l}mm</p>
            </div>
            </div>
            <div class="mt-20">
            <div class="align-items-center d-flex mb-2 edge_width_big" style="gap: 10px;">
            <span class="font-weight-bold label-reduce-dark">Dekor:</span>
            <div class="align-items-center card flex-row p-1">
                <img src="${dimg}" alt="" class="h25 mo_edge_h">
                <h6 class="font-weight-bolder m-0 ml-1"></h6>
            </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
            <div class="align-items-center d-flex mb-2 mt-20 edge_width_big" style="gap: 26px;">
                <span class="font-weight-bold label-reduce-dark">ABS:</span>
                <div class="align-items-center card flex-row p-1">
                    <img src="${absimg}" alt="" class="h25 mo_edge_h">
                    <h6 class="font-weight-bolder m-0 ml-1"></h6>
                </div>
            </div>
            <div class="mt-20">
                <h6 class="edge_tab_3_txt"><b>${price1}€ s DPH</b></h6>
                <small class="font12">${price} € bez DPH</small>
            </div>
            </div>
            </div><hr>`;
let thickht = '';
if(thick == 28 || thick == 36){
    thickht = `<span class="calc_panel ">Cena lepenia : ${pcs*10}€</span>`;
}
            summary += `<tr>
            <th>
                Položka ${index+1}
                <p class="m-0 pt-10">${thick}mm</p>
                <div class="align-items-center d-flex gap11">
                    <span class="green_box_2 mt-3"></span>
                    <span class="">${w}mm</span>
                </div>
                 <span class="">${l}mm</span>
            </th>
            <td style="width:50%;">
                <span class="calc_panel ">Hrúbka : ${thick}mm</span>
                <span class="calc_panel ">Šírka : ${w}mm</span>
                <span class="calc_panel ">Dĺžka : ${l}mm</span><br><br>
                <span class="calc_panel ">DTD cena : ${dtdprice.toFixed(2)}€</span>
                <span class="calc_panel ">ABS cena : ${absprice.toFixed(2)}€</span>
                ${thickht}<br><br>
                <span class="calc_panel ">Celková cena : ${price1.toFixed(2)}€ s DPH</span>
                <span class="calc_panel ">Celková cena : ${price.toFixed(2)}€ bez DPH</span>
            </td>
            </tr>`;
            incc++;
    });

    // let glueprice = 10;
    // let gcost = 10*incc;
    // summary += `<tr>
    // <th style="width:50%;">ABS glue calculation</th>
    // <td style="width:50%;">
    //     <span class="calc_panel ">${incc} Edge board = </span>
    //     <span class="calc_panel ">${gcost}€</span>
    // </td>
    // </tr>`;

    // let gcostvat = gcost *1.2; 
    // tp1 = parseFloat(tp1)+parseFloat(gcostvat);
    // tp = parseFloat(tp)+parseFloat(gcost);

    $('.final-price').text(tp.toFixed(2) + ' €')
    $('.final-price-1').text(tp1.toFixed(2) + ' €')
    $('.final-div').html(html)
    $('#summary-body').html(summary)
})


        var current = 1;
        initMultiStepForm();

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

            document.documentElement.style.setProperty("--stepNumber", stepsNumber);
            for (let i = 0; i < nextButtons.length; i++) {
                nextButtons[i].addEventListener("click", function(event) {
                    event.preventDefault();
                    if (i == 0) {
                        if ($('#dizkal-1').val() == '' || $('#sirka-1').val() == '' || $('#hrubka-1').val() == '') {
                            alert('Zadajte prosím všetky parametre - dĺžku, šírku a hrúbku dosky.')
                            return false;
                        }else{
                            var l = '<?= $edge['length'] ?>';
                            if (parseInt($('#dizkal-1').val()) > parseInt(l)) {
                                alert('Maximálna šírka dosky je ' + l + ' mm');
                                return false;
                            }

                            var w = '<?= $edge['width'] ?>';
                            if (parseInt($('#sirka-1').val()) > parseInt(w)) {
                                alert('Maximálna dĺžka dosky je ' + w + ' mm')
                                return false;
                            }
                        }

                    }
                    if (i == 1) {
                        if ($('#select-imgs-1').val() == '') {
                            alert('Vyberte prosím drevodekor dosky.')
                            return false;
                        }
                    }
                    if (i == 2) {
                        var d1 = $('#selected-dimensions-1').val()
                        var d2 = $('#selected-dimensions-2').val()
                        if (d1 == 0 && d2 == 0) {
                            if(confirm('Nepridali ste ABS hranu na žiadnu stranu dosky. Chcete pokračovať bez ohranenia?') == false){
                                //alert('Vyberte prosím drevodekor ABS.');
                                return false;
                            }
                           
                        }else{
                            if ($('.select_imgs_2').hasClass('red-border') == false) {
                                alert('Vyberte prosím drevodekor ABS.');
                                return false;
                           }
                        }
                        
                        
                        set_summary();
                    }
                    inputsValid = validateInputs(this);
                    // inputsValid = true;

                    if (inputsValid) {
                        slidePage.style.marginLeft = `-${(100 / stepsNumber) * current}%`;
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
                    bullet[current - 2].classList.remove("active");
                    // progressCheck[current - 2].classList.remove("active");
                    progressText[current - 2].classList.remove("active");
                    current -= 1;
                });
            }                          

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
    $('.cust_width').click(function() {
        $('.cust_width').removeClass('box_select');
        $(this).addClass('box_select');
    })
    $('.select_imgs').click(function() {
        $('.select_imgs').removeClass('red-border');
        $(this).addClass('red-border');
        var p = $(this).attr("data-price");
        var c = $(this).attr("data-color");
        $('.dekor-color-code').text(c)
        var img = $(this).attr('src');
        $('#thick-price').val(p)
        $('#select-imgs-1').val(img);
        $('#dekor-imgs-1').val(img);
        // $('.box_select').html('<img src="' + img + '">');
        $('.box_select').css({
            "background-image": "url(" + img + ")",
            "background-size": "contain"
        });
        $('.table-hover td').find('img').css("background-image", "url(" + img + ")")
        $('.final_tab_img').find('img').css("background-image", "url(" + img + ")")
        $('.drevodekor-img').attr("src", img);
        // alert( $(this).closest('span').html())
        // $(this).closest('span').css('display','block');

        $('.dekor-text-cls').css('display', 'none')
        var key = $(this).attr("data-key");
        $('span#dekor-k-' + key).css('display', 'block');
        // var con = $(this).attr("data-text")
        // $('#content-1').text(con)

    })
    $('.select_imgs_2').click(function() {
        $('.select_imgs_2').removeClass('red-border');

        let d1 = $('#selected-dimensions-1').val();
        let d2 = $('#selected-dimensions-2').val();
        if(d1==0 && d2==0){
            return false;
        }

        $(this).addClass('red-border');
        var img = $(this).attr('src');

        var c = $(this).attr("data-color");
        $('.abs-color-code').text(c)
        // $('.box_select').html('<img src="' + img + '">');
        $('.box_select_edge').css({
            "background-image": "url(" + img + ")",
            "background-size": "contain"
        });
        $('.abs-img').attr("src", img);
        $('#abs-imgs-1').val(img);

        $('.abs-text-cls').css('display', 'none')
        var key = $(this).attr("data-key");
        $('span#abs-k-' + key).css('display', 'block')

        // var con = $(this).attr("data-text")
        // $('#content-2').text(con)
    })




    //======== ONLY NUMBERS ALLOWED IN INPUT FIELD ======
    $('.Dĺžka1,.Šírka1').bind('keyup paste', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>

<!-- slider js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script>
    $(document).ready(function() {
        // Swiper: Slider
        new Swiper('.swiper-container', {
            loop: false,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 'auto',
            paginationClickable: true,
            spaceBetween: 5,
            breakpoints: {
                1920: {
                    slidesPerView: 8,
                    spaceBetween: 10
                },
                1028: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }
            }
        });
    });


     //old start
    // $('.inside_clr').click(function() {
    //     var img = $(this).attr('src');
    //     $('.active-img').attr('src', img);
    //     $('.active-img').attr('data-dekor', 1);
    //     $('.active-img-1').css("background-image", "url(" + img + ")")
    //     var id = $('.active-img').closest("tr").attr('id');
    //     $('.main-dekor-img').removeClass('active-img');
    //     $('.main-tbl-img').removeClass('active-img-1');

    //     var color = $(this).attr('data-colorcode');
    //     $('.dekor-color-active').text(color);
    //     $('.dekor-color-name').removeClass('dekor-color-active');

    //     calculation(id);
    // });


    // $('.inside_clr2').click(function() {
    //     var img = $(this).attr('src');

    //     $('.active-img').attr('src', img);
    //     $('.active-img').attr('data-abs', 1)
    //     var id = $('.active-img').closest("tr").attr('id');
    //     $('.main-abs-img').removeClass('active-img');

    //     var color = $(this).attr('data-colorcode');

    //     $('.abs-color-active').text(color);
    //     $('.abs-color-name').removeClass('abs-color-active');

    //     var inc = 0;
    //     var id = $('#current-thick-tr').val();
    //     var spl = id.split('-');


    //     if ($('#ld-' + spl[1]).val() == 1 && $('#fd-' + spl[1]).val() == 1) {
    //         inc = 3;
    //     } else if ($('#ld-' + spl[1]).val() == 1 || $('#fd-' + spl[1]).val() == 1) {
    //         if ($('#fd-' + spl[1]).val() == 1) {
    //             inc = 1;
    //         }
    //         if ($('#ld-' + spl[1]).val() == 1) {
    //             inc = 2;
    //         }
    //     } else {
    //         inc = 4;
    //     }

    //     var setimg = '<?//= base_url() ?>//assests/web_assets/img_web/edge_board' + inc + '.png';
    //     $('#' + id).find('.main-tbl-abs').attr("src", setimg);

    //     $('#' + id).find('.main-tbl-abs').css("background-image", "url(" + img + ")");

    //     calculation(id);
    // });
    //old end


    
    //change on 03-05
    $(document).on('click','.dekor-confirm-btn',function(){
        
        if( $('#woodColor').find('.active-dekor-img').hasClass('active-dekor-img') == false ){
            alert('Vyberte prosím drevodekor dosky');
            return false;

        }
        var img = $('.active-dekor-img').attr('src');
        $('.active-img').attr('src',img);
        $('.active-img').attr('data-dekor',1);
        $('.active-img-1').css("background-image", "url(" + img + ")")
        var id = $('.active-img').closest("tr").attr('id');
        $('.main-dekor-img').removeClass('active-img');
        
        
        $('.main-tbl-img').removeClass('active-img-1');
        var color = $('.active-dekor-img').attr('data-colorcode');
        $('.dekor-color-active').text(color);
        $('.dekor-color-name').removeClass('dekor-color-active');
        $('#woodColor').modal('hide');
        calculation(id);
  
    })

    $('.inside_clr').click(function(){
        $('#woodColor').find('.active-dekor-img').removeClass('active-dekor-img');
        $(this).addClass('active-dekor-img');  
        
    });

    $('.inside_clr2').click(function(){
        $('#absMod').find('.active-abs-img').removeClass('active-abs-img');
        $(this).addClass('active-abs-img');  
        
    });

$(document).on('click','.abs-confirm-btn-1',function(){
        let baseurl = $('#base-url').val()
        var id = $('#current-thick-tr').val();
        var spl = id.split('-');
        $("#ld-" + spl[1]).val(0);
        $("#rd-" + spl[1]).val(0);
        $("#fd-" + spl[1]).val(0);
        $("#bd-" + spl[1]).val(0); 
        $('.main-abs-img.active-img').prop('src',baseurl+'assests/web_assets/img_web/button_imgg.png')
        $('.abs-color-name.abs-color-active').text('')

        $('.main-abs-img.active-img').removeClass('active-img')
        $('.abs-color-name.abs-color-active').removeClass('abs-color-active')

        $('#absMod').modal('hide');
        calculation(id);
     });

    //change
     $(document).on('click','.abs-confirm-btn',function(){
         let check = 0;
        $('#absMod').find('.abs-selection-cls').each(function(){
            if($(this).is(':checked')){
                check = 1;
                return false;
            }
        });

        if(check == 0){
            alert('Zvoľte prosím umiestnenie ABS');
            return false;
        }
        
        if( $('#absMod').find('.active-abs-img').hasClass('active-abs-img') == false ){
            alert('Zvoľte prosím materiál ABS');
            return false;
        }
       
        var img = $('.active-abs-img').attr('src');
        $('.active-img').attr('src', img);
        $('.active-img').attr('data-abs', 1)
        var id = $('.active-img').closest("tr").attr('id');
        $('.main-abs-img').removeClass('active-img');

        var color = $('.active-abs-img').attr('data-colorcode');

        $('.abs-color-active').text(color);
        $('.abs-color-name').removeClass('abs-color-active');

        var inc = 0;
        var id = $('#current-thick-tr').val();
        var spl = id.split('-');


        if ($('#ld-' + spl[1]).val() == 1 && $('#fd-' + spl[1]).val() == 1) {
            inc = 3;
        } else if ($('#ld-' + spl[1]).val() == 1 || $('#fd-' + spl[1]).val() == 1) {
            if ($('#fd-' + spl[1]).val() == 1) {
                inc = 1;
            }
            if ($('#ld-' + spl[1]).val() == 1) {
                inc = 2;
            }
        } else {
            inc = 4;
        }

        var setimg = '<?= base_url() ?>assests/web_assets/img_web/edge_board' + inc + '.png';
        $('#' + id).find('.main-tbl-abs').attr("src", setimg);

        $('#' + id).find('.main-tbl-abs').css("background-image", "url(" + img + ")");
         $('#absMod').modal('hide');
        calculation(id);
        
    })

    //end change on 03-05



    $(document).on('click', '.main-dekor-img', function() {
        $('#woodColor').find('.active-dekor-img').removeClass('active-dekor-img')
        let id = $(this).closest("tr").attr('id');
        $('#current-thick-tr').val(id)
        let t = $('#' + id).find('.main-tbl-thick').val();
        if (t == '') {
            alert('Najprv prosím zadajte hrúbku dosky.');
            return false;
        }

        let w = $('#' + id).find('.main-tbl-width').val();
        if (w == '') {
            alert('Najprv zadajte šírku dosky.');
            return false;
        }

        let l = $('#' + id).find('.main-tbl-length').val();
        if (l == '') {
            alert('Najprv zadajte Dĺžka dosky.');
            return false;
        }
        $('.woodColorCls').each(function() {
            let tt = $(this).attr('data-thick');
            if (t == tt) {
                $(this).css('display', 'block')
            } else {
                $(this).css('display', 'none')
            }
        });

        $(this).addClass('active-img');
        $('#' + id).find('.main-tbl-img').addClass('active-img-1');
        $('#' + id).find('.dekor-color-name').addClass('dekor-color-active');
        $('#woodColor').modal('show');

    });

   

    $(document).on('click', '.main-abs-img', function() {
        $('#absMod').find('.active-abs-img').removeClass('active-abs-img');
        $('.main-abs-img').removeClass('active-img');
        var id = $(this).closest("tr").attr('id');
        $('#current-thick-tr').val(id)
        var t = $('#' + id).find('.main-tbl-thick').val();
        if (t == '') {
            alert('Najprv prosím zadajte hrúbku dosky.');
            return false;
        }

        let w = $('#' + id).find('.main-tbl-width').val();
        if (w == '') {
            alert('Najprv zadajte šírku dosky.');
            return false;
        }

        let l = $('#' + id).find('.main-tbl-length').val();
        if (l == '') {
            alert('Najprv zadajte Dĺžka dosky.');
            return false;
        }

       

        $('.l-on-abs').text('(' + l + 'mm)')
        $('.w-on-abs').text('(' + w + 'mm)')

        $('.absColorCls').each(function() {
            var tt = $(this).attr('data-thick');
            if (t == tt) {
                $(this).css('display', 'block')
            } else {
                $(this).css('display', 'none')
            }
        });






        $(this).addClass('active-img');
        $('#' + id).find('.abs-color-name').addClass('abs-color-active');
        $('#absMod').modal('show');

        var spl = id.split('-');
        var ld = $("#ld-" + spl[1]).val();
        var rd = $("#rd-" + spl[1]).val();
        var fd = $("#fd-" + spl[1]).val();
        var bd = $("#bd-" + spl[1]).val();

        if (ld == 1) {
            $('#check-ld').prop("checked", true)
        } else {
            $('#check-ld').prop("checked", false)
        }
        if (rd == 1) {
            $('#check-rd').prop("checked", true)
        } else {
            $('#check-rd').prop("checked", false)
        }
        if (fd == 1) {
            $('#check-fd').prop("checked", true)
        } else {
            $('#check-fd').prop("checked", false)
        }
        if (bd == 1) {
            $('#check-bd').prop("checked", true)
        } else {
            $('#check-bd').prop("checked", false)
        }

    });



    



    $(document).on('keyup', '.main-tbl-width', function() {
        this.value.replace(/[^0-9]/g, '');
        var w = '<?= $edge['width'] ?>';
        var inw = $(this).val();
        if (parseFloat(w) < parseFloat(inw)) {
            var nn = inw.substring(0, inw.length - 1);

            $(this).val(nn);
            //return false;
        }

        calculation($(this).closest("tr").attr('id'));

    });

    $(document).on('keyup', '.main-tbl-length', function() {
        var l = '<?= $edge['length'] ?>';
        var inl = $(this).val()
        if (parseFloat(l) < parseFloat(inl)) {
            var nn = inl.substring(0, inl.length - 1);

            $(this).val(nn);
            //return false;
        }
        calculation($(this).closest("tr").attr('id'));
    });


    $(document).on('change', '.main-tbl-thick', function() {

        var id = $(this).closest("tr").attr('id');
        $('#' + id).find('.main-dekor-img').attr('src', '<?= base_url("assests/web_assets/img_web/button_imgg.png") ?>');
        $('#' + id).find('.main-abs-img').attr('src', '<?= base_url("assests/web_assets/img_web/button_imgg.png") ?>');
        $('#' + id).find('.main-dekor-img').attr('data-dekor', 0);
        $('#' + id).find('.main-abs-img').attr('data-abs', 0);

        $('#' + id).find('.dekor-color-name').text('');
        $('#' + id).find('.abs-color-name').text('');


        var mp = $('#' + id).find('.main-row-price').text();
        var mp1 = $('#' + id).find('.main-row-price-1').text();
        var gt = $('.g-total').text()
        var gt1 = $('.g-total-1').text()
        var ft = parseFloat(gt) - parseFloat(mp);
        var ft1 = parseFloat(gt1) - parseFloat(mp1);
        $('.g-total').text(ft.toFixed(2))
        $('.g-total-1').text(ft1.toFixed(2))

        $('#' + id).find('.main-row-price').text(0)
        $('#' + id).find('.main-row-price-1').text(0)


        //calculation($(this).closest("tr").attr('id'));
    });


    function calculation(id) {
        var t = $('#' + id).find('.main-tbl-thick').val();
        var l = $('#' + id).find('.main-tbl-length').val();
        var w = $('#' + id).find('.main-tbl-width').val();
        var p = $('#' + id).find('.main-no-pcs').val();

        var checkimg = $('#' + id).find('.main-dekor-img').attr('data-dekor');
        var checkimg1 = $('#' + id).find('.main-abs-img').attr('data-abs');

        if (checkimg == 0) {
            return false;
        }

        if (t > 0 && l > 0 && w > 0 && p > 0) {

        } else {
            return false;
        }

        //var s1 = $('#selected-dimensions-1').val();
        //var s2 = $('#selected-dimensions-2').val();

        var spl = id.split('-');
        var ld = $("#ld-" + spl[1]).val();
        var rd = $("#rd-" + spl[1]).val();
        var fd = $("#fd-" + spl[1]).val();
        var bd = $("#bd-" + spl[1]).val();



    var numl = parseInt(ld)+parseInt(rd)+parseInt(fd)+parseInt(bd);
    var dtdcost = 13.68;
    var abscost = 0;
    var incnum = 0;
    if(t == 10 || t == 18){
      incnum = 1;
      abscost = 2;
    }
    else if(t == 36 || t == 28){
      incnum = 2;
      abscost = 5;
    }
    var dtdmaterial = (w*l*incnum)/1000000;
    var dtdmaterialcost = dtdmaterial*dtdcost*p;
    var absmaterial = (numl*l)/1000;
    var absmaterialcost = absmaterial*abscost*p;
    var price = parseFloat(dtdmaterialcost)+parseFloat(absmaterialcost);


if(t == 36 || t == 28){
     let gcost = 10*p;
     price = parseFloat(price)+parseFloat(gcost);
}
    


        $('#' + id).find('.main-row-price').text(price.toFixed(2));
        $('#' + id).find('.main-row-price-1').text((price * 1.2).toFixed(2));

        $('#' + id).find('.dtd-price').val(dtdmaterialcost);
        $('#' + id).find('.abs-price').val(absmaterialcost);

        var pp = 0;
        var pp1 = 0;
        $('.main-row-price').each(function() {
            pp = parseFloat(pp) + parseFloat($(this).text())
        })
        $('.main-row-price-1').each(function() {
            pp1 = parseFloat(pp1) + parseFloat($(this).text())
        })
        $('.g-total').text(pp.toFixed(2))
        $('.g-total-1').text(pp1.toFixed(2))

    }

    $(document).on('keyup', '.woodColorSearch', function() {
        var search = $(this).val()
        var id = $('#current-thick-tr').val()
        var t = $('#' + id).find('.main-tbl-thick').val();
        search = search.toLowerCase();
        $('.woodColorCls').each(function() {
            var cls = $(this).attr('data-clr');
            cls = cls.toLowerCase();
            var tt = $(this).attr('data-thick');
            if (t == tt && (cls.includes(search))) {
                $(this).css('display', 'block')
            } else {
                $(this).css('display', 'none')
            }
        })
    });


    $(document).on('keyup', '.absColorSearch', function() {
        var search = $(this).val()
        var id = $('#current-thick-tr').val()
        var t = $('#' + id).find('.main-tbl-thick').val();
        search = search.toLowerCase();
        $('.absColorCls').each(function() {
            var cls = $(this).attr('data-clr');
            cls = cls.toLowerCase();
            var tt = $(this).attr('data-thick');
            if (t == tt && (cls.includes(search))) {
                $(this).css('display', 'block')
            } else {
                $(this).css('display', 'none')
            }
        })
    });


    $('#Nakupujem_na_firmu_1').on('click', function() {

        var ulica = $('#address').val()
        var mesto = $('#city-name').val()
        var psc = $('#zip-code').val()
        if ($("#Nakupujem_na_firmu_1").prop('checked') == true) {
            $('#address-1').val(ulica)
            $('#city-name-1').val(mesto)
            $('#zip-code-1').val(psc)
        } else {
            $('#address-1').val('')
            $('#city-name-1').val('')
            $('#zip-code-1').val('')
        }

        $('.padding_tab_10 .tab_10_input').trigger('keyup');
    });


    $(document).on('keyup change', '.main-no-pcs', function() {
        calculation($(this).closest("tr").attr('id'));
    });



    $(document).on('click', '.prev-1', function() {

        if ($(this).find('.active').length) {
            var step = $(this).attr('data-no');
            var cp = step * 20;
            const slidePage = document.querySelector(".slide-page");
            slidePage.style.marginLeft = '-' + cp + '%';

            // var sp = parseInt(step)+1;
            $('.prev-1').each(function() {
                var step1 = $(this).attr('data-no');
                if (step < step1) {
                    $(this).removeClass("active");
                    $(this).find('.bullet').removeClass("active");
                }
            });

            current = parseInt(step) + 1
            //  initMultiStepForm();
        }

    });


      $(document).on('click','.cal-btn1',function(){
       let baseurl = $('#base-url').val()
		 $.ajax({
         type: "POST",
         url: baseurl + "web/submit_edge_board", 
         data: { },
         dataType: "text", 
         cache:false,
         success: 
              function(data){
                 submit_detail();
              	 let ht = $('.box_select_edge').clone()
                 $('.shadow_cstm').html(data);
                
                 $('.final_wardrobe_thank').html(ht);
                 
              }
          });
     
	});


$(document).on('keyup','.padding_tab_10 .tab_10_input',function(){
    let check = 1;
    $('.padding_tab_10').find('.tab_10_input').not('#check_hide_show_edge .tab_10_input').each(function(ind){
        if($(this).val() == ''){
            check = 0;
            return false;
        }
    });

    if($('#Nakupujem_na_firmu').is(':checked') == true && check == 1){
        $('#check_hide_show_edge').find('.tab_10_input').each(function(ind){
            if($(this).val() == ''){
                check = 0;
                return false;
            }
        });
    }


    if(check == 1){
        $('.tab10-btn-1').prop('disabled',false)
    }else{
      $('.tab10-btn-1').prop('disabled',true)   
    }

})



 function submit_detail(){
          let baseurl = $('#base-url').val()
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
        let subtotal = $('.final-price-1').text();

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
            image:"Ohranená_doska.jpg" 
         },
         dataType: "text", 
         cache:false,
         success: 
              function(data){
              	 alert('Odoslanie potvrdzovacieho e-mialu bolo úspešné.')
              }
          });
     
	}


    $(document).on('click','.duplicate-row-btn',function(){
        let id = $(this).attr('data-row');
        var html = $('#tr-'+id).clone().prop('id','tr-'+trinc);
        html.find('#ld-'+id).prop('id','ld-'+trinc)
        html.find('#rd-'+id).prop('id','rd-'+trinc)
        html.find('#fd-'+id).prop('id','fd-'+trinc)
        html.find('#bd-'+id).prop('id','bd-'+trinc)

        html.find('.duplicate-row-btn').attr('data-row',trinc);
        let dtd = $('#tr-'+id).find('.main-tbl-thick').val();
        html.find('.main-tbl-thick').val(dtd)

        $('#tr-'+id).after(html);
        count_table();
        calculation('tr-'+trinc);
        trinc++;
    });
</script>