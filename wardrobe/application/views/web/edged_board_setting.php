<?php include("include/header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="<?=base_url()?>assests/web_assets/css/built_in_cabinets.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<style>
    .set_swiperImgs img.zoom {
        width: auto;
        height: 70px;
    }
    
    .red-border{
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
    
    .search_icon{
        position: absolute;
        top: 5px;
        right: 0px;
        opacity: .5;
    }

    tr .remove-table-btn {
        background: #ff0000;
        color: #fff;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        font-size: 12px;
        /* display: flex;
        justify-content: center;
        align-items: center; */
        padding: 5px;
    }

    tr .remove-table-btn:hover{
        color: #fff;
    }

    .lh_{
        line-height: 1.2;
    }

    .img-sizze {
        width: 262px;
        height: 77px;
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
    
    @media screen and (max-width: 767px){
        
        .field{
            margin-top:1.2rem;
        }
        
        .modal-header h4 {
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .search i {
            display: none;
        }
    }

    .active-dekor-img,.active-abs-img{
        border:3px solid red;
    }

    .dekor-confirm-btn,.abs-confirm-btn{
        width:115px;
    }
    .add_btn{
        background: #ff0000;
        color: #fff;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        font-size: 12px;
        display: flex;
        justify-content: center;
        align-items: end;
    }
</style>


<div class="product-category-container mb-md-90 mb-sm-90 pb-1 shadow_cstm">
    <div class="container wide">
        <div class="row">
            <input type="hidden" value="<?=base_url()?>" id="base-url" />
            <div class="col-md-10">
                <div class="progress-bar mt-35">
                    <div class="step-1">
                        <div class="bullet bullet_first active" data-toggle="tooltip" data-placement="bottom" title="Parametre">
                            <span>Parametre</span>
                        </div>
                    </div>

                    <div class="step">
                        <div class="bullet" data-toggle="tooltip" data-placement="bottom" title="Objednávka">
                            <!--<span>Výber materiálu</span>-->
                            <span>Objednávka</span>
                        </div>
                    </div>

                    <div class="step d-none">
                        <div class="bullet" data-toggle="tooltip" data-placement="bottom">
                            <!--<span>Výber materiálu</span>-->
                            <!--<span>Objednávka</span> -->
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-2 modal_btnns mt-30">
              
                <button type="button" class="bg-white btn btn-danger font-weight-bolder tab9_btn text-danger font14 btn_chngg" data-toggle="modal" data-target="#modal_num_20"><img class="lazy tab1_imgg mr-1" src="<?=base_url()?>assests/web_assets/img_web/setting_edge.png" alt="">Exportovať do OS</button>
            </div>
        </div>
    </div>
<div class="container wide mt-30">
<div class="row">
<div class="col-md-12">

<div class="form-outer">
<form action="submit_edge_board" method="post">

<!-- tab 1 -->

<div class="page slide-page">
    <a href="<?=base_url()?>web" class="btn btn-basic Späť_btn mb-2"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
    <div class="row mt-2">
        <div class="col-md-10 mt-0">
            <div class="account-details-form">
                <div class="col-md-12 table-responsive justify-content-center" style="min-height: 500px">
                    <table class="table border-bottom table-hover table-rows">
                       


        <tr id="tr-0">
            <td class="font12 align-middle p-0"><button type="button" class="btn add_btn1 duplicate-row-btn" data-row="0" ><img src="<?=base_url()?>assests/web_assets/images/copy.png" alt="" class="image-fluid h35 "></button></td>
            <td class="align-middle p-0">
                 <input type="hidden" id="ld-0" value="0">
                 <input type="hidden" id="rd-0" value="0">
                 <input type="hidden" id="fd-0" value="0">
                 <input type="hidden" id="bd-0" value="0">
                <img src="<?=base_url()?>assests/web_assets/img_web/Edged_tab2_img2.png" alt="" class="image-fluid h35 main-tbl-img">
                <p></p>
                <img src="<?=base_url()?>assests/web_assets/img_web/edge_board4.png" alt="" class="image-fluid h35 main-tbl-abs">
            </td>    
            <td class="font12 align-middle"><b>Hrúbka:</b></td>
            <td class="px-0 align-middle">
            <input type="hidden" class="main-tbl-thick-1" value="" >
                <select class="font14 form-control w_100 main-tbl-thick" name="thickness[]">
                    <option value="">Vyberte</option>
                    <option value="10">10 mm</option>
                    <option value="18">18 mm</option>
                    <option value="28">28 mm</option>
                    <option value="36">36 mm</option>
            </select>
            </td>
            <td class="font12 align-middle"><b>Šírka:</b></td>
            <td class="px-0 align-middle"><input type="text" min="0" class="form-control w49 Šírka1 h-100 setInpWidth mt-20 main-tbl-width" name="width[]"> mm</td>
            <td class="font12 align-middle"><b>Dĺžka:</b></td>
            <td class="px-0 align-middle"><input type="text" min="0" class="form-control w49 Dĺžka1 h-100 setInpWidth mt-20 main-tbl-length" name="length[]"> mm</td>
            <td class="font12 align-middle">
                
                <div class="align-items-center d-flex justify-content-start mb-2">
                    <b class="w45">Dekor:</b>
                    
                    <div class="align-items-center card flex-row p-1 ml-1" >
                        <img data-dekor="0" src="<?=base_url()?>assests/web_assets/img_web/button_imgg.png" alt="" class="h25 mo_edge_h main-dekor-img">
                        <h6 class="font-weight-bolder m-0 ml-1 dekor-color-name"></h6>
                    </div>
                </div>
                <div class="align-items-center d-flex justify-content-start">
                    <b class="w45">ABS:&nbsp;&nbsp;&nbsp;</b>
                    
                    <div class="align-items-center card flex-row p-1 ml-1" >
                        <img data-abs="0" src="<?=base_url()?>assests/web_assets/img_web/button_imgg.png" alt="" class="h25 mo_edge_h main-abs-img">
                        <h6 class="font-weight-bolder m-0 ml-1 abs-color-name"></h6>
                    </div>
                </div>
            </td>
            <td class="font12 align-middle p-0"><b>Počet ks:</b></td>
            <td class="align-middle">
                <input min="1" value="1" type="number" class="form-control w49 po_2 h-100 setInpWidth main-no-pcs" name="qtys[]">
            </td>
            <td class="align-middle p-0">
                <input type="hidden" class="dtd-price">
                <input type="hidden" class="abs-price">
                <h6 class="edge_tab_3_txt w_now"><b class="main-row-price-1">0</b><b class="lh_">€ s DPH</b></h6>
                <small class="font12"><span class="main-row-price">0</span>€ bez DPH</small>
            </td>
            <td  class="align-middle"> <a href="javascript:void(0);" class="btn remove-table-btn"> X </a></td>
        </tr>
                    
                    </table>
                    <button type="button" class="btn btn-basic Pridat_polozku justify-content-between append-tbl-data"><img src="<?=base_url()?>assests/web_assets/img_web/plus2.png">Pridať položku</button>
                </div>
                
                <div class="">
                    <hr class="" style="border:1px solid #ccc">
                    <div class="row">
                        
                        <div class="col-md-7">
                            <h3 class="font-weight-bolder">Spolu</h3>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex justify-content-end">
                                <div class="text-center">
                                    <h3 class="font-weight-bolder mb-0"><span class="g-total-1">0</span><span>€</span></h3>
                                    <small class="font-weight-bold"><span class="g-total">0</span>€ bez DPH</small>
                                    
                                </div>
                                <div class="ml-3">
                                   
                                    <button type="button" class="btn btn-danger tab10_btn mb-2 next-1 next final-step s-1" style="width: 178px;" disabled><img src="<?=base_url()?>assests/web_assets/img_web/tab9_img3.png" alt="" > Objednať</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
       
    </div>
    
</div>

<!-- tab 2 -->
<div class="page">
    <a href="javascript:void(0);" class="btn btn-basic Späť_btn mb-2 prev-1 prev"><i class="font-weight-bolder icon mr-1 text-danger ti-arrow-left"></i> Späť</a>
    <div class="row mt-2">
        <div class="col-md-9">
            <div class="tabDiv_right tab10_ht padding_tab_10">
                <div class="d-flex justify-content-between"> 
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input tab_10_check" id="Nakupujem_na_firmu_11">
                        <label class="form-check-label ml-10 tab_10_lable" for="Nakupujem_na_firmu_11">Nakupujem na firmu</label>
                    </div>
                    <div class="mr-145" id="top_check_h_s" style="display:block;">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input tab_10_check mt-10" id="Nakupujem_na_firmu">
                            <label class="form-check-label ml-10 tab_10_lable" for="Nakupujem_na_firmu">Fakturačná adresa je <br> rovnaká ako dodacia</label>
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
                    <div class="col-md-6">
                        <h4 class="font-weight-bolder">Poznámka</h4>
                        <div class="form-group">
                            <textarea name="Poznámka" id="" rows="5" class="w-100 form-control"></textarea>
                        </div>
                    </div>
                    <!--<div class="col-md-6 tab_10_end_pddng">
                        <h4 class="font-weight-bolder">Cena s DPH</h4>
                        <p class="Pre_zobrazenie">Pre zobrazenie cenovej ponuky zadajte váš e-mail: </p>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Váš e-mail" class="Vas_e_mail">
                                        <button type="button" class="btn Zobrazit_cenovu email-check-btn">Zobraziť cenovú ponuku</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <div class="ttl_price" style="display: block;">
                                        <h3 class="font-weight-bolder mb-0 wardrobe-tcost">280.71 €</h3>
                                        <h5>vrátane montáže</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-md-3 position-relative">
            <div class="">
                <!--<h4 class="font-weight-bolder">Rozmery</h4>-->
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
                                    <img src="<?=base_url()?>assests/web_assets/img_web/Drevodekor_img.jpg" alt="" class="h25 mo_edge_h">
                                    <h6 class="font-weight-bolder m-0 ml-1"></h6>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="align-items-center d-flex mb-2 mt-20 edge_width_big" style="gap: 26px;">
                                    <span class="font-weight-bold label-reduce-dark">ABS:</span>
                                    <div class="align-items-center card flex-row p-1">
                                        <img src="<?=base_url()?>assests/web_assets/img_web/Drevodekor_img.jpg" alt="" class="h25 mo_edge_h">
                                        <h6 class="font-weight-bolder m-0 ml-1"></h6>
                                    </div>
                                </div>
                                <div class="mt-20">
                                    <h6 class="edge_tab_3_txt"><b>17,89€ s DPH</b></h6>
                                    <small class="font12 ml-20">14,90€ bez DPH</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="font-weight-bolder tab_10_cena">Spolu</h4>
                                <!-- <small class="font-weight-bold">Cena bez DPH</small> -->
                            </div>
                            <div class="col-md-6 text-right">
                                <h4 class="font-weight-bolder tab_10_cena final-price-1">35,78€</h4>
                                <small class="font-weight-bold tab_10_small_txt final-price">28,62€</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-30">
                <button type="button" class="btn btn-danger tab10_btn mb-2 w-100  tab10-btn-1 next-1 next" disabled>
                    <img src="<?=base_url()?>assests/web_assets/img_web/tab9_img3.png" alt=""> Objednať
                </button>
                <p class="tab10_font tab_10_text_end">
                    Kliknutím na tlačidlo záväzne potvrdzujete objednávku<br>a súhlasíte s našimi <u>obchodnými podmienkami</u>.
                </p>
            </div>
        </div>
    </div>
    <!-- <div class="field btns">
        <button class="prev-2 prev">Previous</button>
        <button class="next-2 next btn-green">Next</button>
    </div> -->
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
        <tbody id="summary-body"> </tbody>
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
<!-- </div> -->

<!-- </div> -->
</div>
</div>

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
                            <img src="<?=base_url()?>assests/web_assets/img_web/setting_denir_1.png" alt="" class="img-fluid img-sizze">
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
                    

                <?php if($sunmicapricemodal){
                        foreach($sunmicapricemodal as $k => $price){
                    ?>
               

                <div data-thick="<?=$price['thickness']?>" data-clr="<?=$price['color']?>"  class="col-md-3 mb-3 color_fill_ins woodColorCls"  >
                    <div class="border">
                        <img data-colorcode="<?=$price['color']?>" src="<?=base_url().$price['image']?>" alt="" class="w-h-252 inside_clr">
                    </div>
                    <div class="px-2 border">
                        <small><?=$price['thickness']?> mm</small>
                        <h5><?=$price['color']?></h5>
                    </div>
                </div>



             <?php } }  ?> 
            </div>

            <div class="ml-3">
                <button type="button" class="btn btn-danger dekor-confirm-btn" >Potvrdiť</button>
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
                                    <input type="checkbox" class="form-check-input select-sunmica" id="check-ld" onclick="check_sunmica('ld')" >
                                    <label class="form-check-label label-small" for="check-1">1.šírka</label>
                                </div>
                                <div class="form-check mt-2 d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input select-sunmica" id="check-rd" onclick="check_sunmica('rd')">
                                    <label class="form-check-label label-small" for="check-2">2.šírka</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="text-muted l-on-abs">(2200 mm)</label>
                                <div class="form-check d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input select-sunmica" id="check-fd" onclick="check_sunmica('fd')">
                                    <label class="form-check-label label-small" for="check-3">3.dĺžka</label>
                                </div>
                                <div class="form-check mt-2 d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input select-sunmica" id="check-bd" onclick="check_sunmica('bd')">
                                    <label class="form-check-label label-small" for="check-4">4.dĺžka</label>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    

                    <?php if($sunmicapricemodal){
                        foreach($sunmicapricemodal as $k => $price){
                    ?>
               

                    <div data-thick="<?=$price['thickness']?>" data-clr="<?=$price['color']?>"  class="col-md-3 mb-3 color_fill_ins absColorCls" >
                        <div class="border">
                            <img data-colorcode="<?=$price['color']?>" src="<?=base_url().$price['image']?>" alt="" class="w-h-252 inside_clr2">
                        </div>
                        <div class="px-2 border">
                            <small><?=$price['thickness']?> mm</small>
                            <h5><?=$price['color']?></h5>
                        </div>
                    </div>



             <?php } }  ?> 
                   

                </div>
            <div class="ml-3">
                <button type="button" class="btn btn-danger abs-confirm-btn" >Potvrdiť</button>
                <button type="button" class="btn btn-danger abs-confirm-btn-1 px-4" >Vymazať</button>
            </div>
            </div>
        </div>
    </div>
</div>




<input type="hidden" id="selected-dimensions-1" value="2">
<input type="hidden" id="selected-dimensions-2" value="2">
<input type="hidden" id="thick-price" value="0">

<input type="hidden" id="current-thick-tr" value="0">
<!-- Modal Number 1 -->



<?php include("include/footer.php"); ?>


<script>
    window.onbeforeunload = function () {
        return 'Are you sure? Your work will be lost.';
    };

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
            setLeftHeight.not(this).val(this.value);

        });

        var setŠírka = $('.Šírka1, .Šírka2').keyup(function() {
            setŠírka.not(this).val(this.value);

        });

        var setVýška = $('.Výška1, .Výška2').keyup(function() {
            setVýška.not(this).val(this.value);

        });

        var setPocet = $('.po_1, .po_2').keyup(function() {
            setPocet.not(this).val(this.value);
        });
        
        // deepak
        // $("#Nakupujem_na_firmu").click(function () {
        //     if ($(this).is(":checked")) {       
        //         $("#check_hide_show_edge").show();
        //         // $("#check_hide_show_edge_1").show();
        //         // $("#top_check_h_s").hide();
        //     } 
        //     else {
        //         $("#check_hide_show_edge").hide();
        //         // $("#check_hide_show_edge_1").hide();
        //         // $("#top_check_h_s").show();
        //     }
        // });

        $('#Nakupujem_na_firmu_11').change(function() {
            if(this.checked) {
                $('#check_hide_show_edge').show();
            }
            else{
                $('#check_hide_show_edge').hide();
            }   
            
            $('.padding_tab_10 .tab_10_input').trigger('keyup');  
        })


        $('#Nakupujem_na_firmu').on('click',function(){
    
            var ulica = $('#address').val()
            var mesto = $('#city-name').val()
            var psc = $('#zip-code').val()
            if($("#Nakupujem_na_firmu").prop('checked') == true){
                $('#address-1').val(ulica)
                $('#city-name-1').val(mesto)
                $('#zip-code-1').val(psc)
            }else{
                $('#address-1').val('')
                $('#city-name-1').val('')
                $('#zip-code-1').val('')
            }
            $('.padding_tab_10 .tab_10_input').trigger('keyup');
        });
    });
    
</script>

<script>
    // var current = 1;
    initMultiStepForm();

    // function initMultiStepForm() {
    //     const progressNumber = document.querySelectorAll(".step").length;
    //     const slidePage = document.querySelector(".slide-page");
    //     const submitBtn = document.querySelector(".submit");
    //     const progressText = document.querySelectorAll(".step");
    //     const progressCheck = document.querySelectorAll(".step .check");
    //     const bullet = document.querySelectorAll(".step .bullet");
    //     const pages = document.querySelectorAll(".page");
    //     const nextButtons = document.querySelectorAll(".next");
    //     const prevButtons = document.querySelectorAll(".prev");
    //     const stepsNumber = pages.length;

    //     document.documentElement.style.setProperty("--stepNumber", stepsNumber);

    //     //let current = 1;

    //     for (let i = 0; i < nextButtons.length; i++) {
          
    //         nextButtons[i].addEventListener("click", function(event) {
    //             event.preventDefault();

    //             inputsValid = validateInputs(this);
    //             // inputsValid = true;

    //             if (inputsValid) {
    //                 slidePage.style.marginLeft = `-${
    //                 (100 / stepsNumber) * current
    //             }%`;
    //                 bullet[current - 1].classList.add("active");
    //                 // progressCheck[current - 1].classList.add("active");
    //                 progressText[current - 1].classList.add("active");
    //                 current += 1;
    //             }
    //         });
    //     }

    //     for (let i = 0; i < prevButtons.length; i++) {
    //         prevButtons[i].addEventListener("click", function(event) {
    //             event.preventDefault();
    //             slidePage.style.marginLeft = `-${
    //             (100 / stepsNumber) * (current - 2)
    //         }%`;
    //             bullet[current - 1].classList.remove("active");
    //             // progressCheck[current - 2].classList.remove("active");
    //             progressText[current - 2].classList.remove("active");
    //             current -= 1;
    //         });
    //     }
       

    //     function validateInputs(ths) {
    //         let inputsValid = true;

    //         const inputs =
    //             ths.parentElement.parentElement.querySelectorAll("input");
    //         for (let i = 0; i < inputs.length; i++) {
    //             const valid = inputs[i].checkValidity();
    //             if (!valid) {
    //                 inputsValid = false;
    //                 inputs[i].classList.add("invalid-input");
    //             } else {
    //                 inputs[i].classList.remove("invalid-input");
    //             }
    //         }
    //         return inputsValid;
    //     }
    // }
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
    //  console.warn(
    //      "Error, number of steps in progress bar do not match number of pages"
    //  );
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
            bullet[current - 2].classList.remove("active");
            // progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
    }
    // submitBtn.addEventListener("click", function() {
    //  bullet[current - 1].classList.add("active");
    //  progressCheck[current - 1].classList.add("active");
    //  progressText[current - 1].classList.add("active");
    //  current += 1;
    //  setTimeout(function() {
    //      alert("Your Form Successfully Signed up");
    //      location.reload();
    //  }, 800);
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
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>

<script>
    $('.cust_width').click(function() {
        $('.cust_width').removeClass('box_select');
        $(this).addClass('box_select');
    })
    $('.select_imgs').click(function() {
        $('.select_imgs').removeClass('red-border');
        $(this).addClass('red-border');
        var img = $(this).attr('src');
        // $('.box_select').html('<img src="' + img + '">');
        $('.box_select').css({"background-image":"url(" + img + ")", "background-size":"contain"});
        $('.table-hover td').find('img').css("background-image", "url(" + img + ")")
        $('.final_tab_img').find('img').css("background-image", "url(" + img + ")")
    })


    // $('.inside_clr').click(function() {
    //     var img = $(this).attr('src');
    //     // alert(img);
    //     $('.bg_image_ch').css("background-image", "url(" + img + ")");
    // })

    // $('.inside_clr2').click(function() {
    //     var img = $(this).attr('src');
    //     $('.bg_image_ch2').css("background-image", "url(" + img + ")");
    // })

    //======== ONLY NUMBERS ALLOWED IN INPUT FIELD ======
    // $('input').bind('keyup paste', function() {
    //     this.value = this.value.replace(/[^0-9]/g, '');
    // });

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
            slidesPerView: 3,
            paginationClickable: true,
            spaceBetween: 20,
            breakpoints: {
                1920: {
                    slidesPerView: 6,
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

    var trinc=1;
    $('.append-tbl-data').click(function(){
        var burl = '<?=base_url()?>';
         var row = `<tr id="tr-${trinc}">
            <td class="font12 align-middle p-0"><button type="button" class="btn add_btn1 duplicate-row-btn" data-row="${trinc}" ><img src="${burl}assests/web_assets/images/copy.png" alt="" class="image-fluid h35 "></button></td>
            <td class="align-middle p-0">
                 <input type="hidden" id="ld-${trinc}" value="0">
                 <input type="hidden" id="rd-${trinc}" value="0">
                 <input type="hidden" id="fd-${trinc}" value="0">
                 <input type="hidden" id="bd-${trinc}" value="0">
                <img src="${burl}assests/web_assets/img_web/Edged_tab2_img2.png" alt="" class="image-fluid h35 main-tbl-img">
                <p></p>
                <img src="${burl}assests/web_assets/img_web/edge_board4.png" alt="" class="image-fluid h35 main-tbl-abs">
            </td>
            <td class="font12 align-middle"><b>Hrúbka:</b></td>
            <td class="px-0 align-middle">
                <select class="font14 form-control w_100 main-tbl-thick" name="thickness[]">
                    <option value="">Vyberte</option>
                    <option value="10">10 mm</option>
                    <option value="18">18 mm</option>
                    <option value="28">28 mm</option>
                    <option value="36">36 mm</option>
            </select>
            </td>
            <td class="font12 align-middle"><b>Šírka:</b></td>
            <td class="px-0 align-middle"><input type="text" min="1" value="" class="form-control w49 Šírka1 h-100 setInpWidth mt-20 main-tbl-width" name="width[]"> mm</td>
            <td class="font12 align-middle"><b>Dĺžka:</b></td>
            <td class="px-0 align-middle"><input type="text" min="1" value="" class="form-control w49 Dĺžka1 h-100 setInpWidth mt-20 main-tbl-length" name="length[]"> mm</td>
            <td class="font12 align-middle">
                <div class="align-items-center d-flex justify-content-around mb-2">
                    <b class="w45">Dekor:</b>
                    <div class="align-items-center card flex-row p-1" >
                        <img data-dekor="0" src="${burl}assests/web_assets/img_web/button_imgg.png" alt="" class="h25 mo_edge_h main-dekor-img">
                        <h6 class="font-weight-bolder m-0 ml-1 dekor-color-name"></h6>
                    </div>
                </div>
                <div class="align-items-center d-flex justify-content-around">
                    <b class="w45">ABS:&nbsp;&nbsp;&nbsp;</b>
                    <div class="align-items-center card flex-row p-1" >
                        <img data-abs="0" src="${burl}assests/web_assets/img_web/button_imgg.png" alt="" class="h25 mo_edge_h main-abs-img">
                        <h6 class="font-weight-bolder m-0 ml-1 abs-color-name"></h6>
                    </div>
                </div>
            </td>
            <td class="font12 align-middle p-0"><b>Počet ks:</b></td>
            <td class="align-middle">
                <input min="1" value="1" type="number" class="form-control w49 po_2 h-100 setInpWidth main-no-pcs" name="qtys[]">
            </td>
            <td class="align-middle p-0">
                <input type="hidden" class="dtd-price">
                <input type="hidden" class="abs-price">
                <h6 class="edge_tab_3_txt w_now"><b class="main-row-price-1">0</b><b class="lh_">€ s DPH</b></h6>
                <small class="font12"><span class="main-row-price">0</span>€ bez DPH</small>
            </td>
            <td class="align-middle"><a href="javascript:void(0);" class="btn remove-table-btn"> X </a></td>
        </tr>`;
        $(".table-rows").append(row);
        count_table();
        trinc++;
        
    });

     count_table();
    $(document).on('click','.remove-table-btn',function(){
       if(! confirm('Naozaj to chcete odstrániť?')){
           return false;
       }
       var id = $(this).closest("tr").attr('id');
       var mp= $('#'+id).find('.main-row-price').text();
       var mp1= $('#'+id).find('.main-row-price-1').text();

       var gt = $('.g-total').text()
       var gt1 = $('.g-total-1').text()
       var ft = parseFloat(gt)-parseFloat(mp);
       var ft1 = parseFloat(gt1)-parseFloat(mp1);
       $('.g-total').text(ft.toFixed(2))
       $('.g-total-1').text(ft1.toFixed(2))
       $('#'+id).remove();

  let total = $('.g-total-1').text();
  if(parseFloat(total) > 0){
      $('.final-step').attr('disabled',false);
  }else{
      $('.final-step').attr('disabled',true);
  }
       count_table();
    });





    //change on 03-05
    $(document).on('click','.dekor-confirm-btn',function(){
        
        if( $('#woodColor').find('.active-dekor-img').hasClass('active-dekor-img') == false ){
            alert('Vyberte prosím drevodekor dosky.');
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

     $(document).on('click','.abs-confirm-btn',function(){
         let check = 0;
        $('#absMod').find('.select-sunmica').each(function(){
            if($(this).is(':checked')){
                check = 1;
                return false;
            }
        });

        if(check == 0){
            alert('Nepridali ste ABS hranu na žiadnu stranu dosky. Chcete pokračovať bez ohranenia?');
            return false;
        }
        
        if( $('#absMod').find('.active-abs-img').hasClass('active-abs-img') == false ){
            alert('Nepridali ste ABS hranu na žiadnu stranu dosky. Chcete pokračovať bez ohranenia?');
            return false;
        }
       
        var img = $('.active-abs-img').attr('src');
        var burl = '<?=base_url()?>';

        $('.active-img').attr('src',img);
        $('.active-img').attr('data-abs',1)
        var id = $('.active-img').closest("tr").attr('id');
        $('.main-abs-img').removeClass('active-img');

        var color = $('.active-abs-img').attr('data-colorcode');
        $('.abs-color-active').text(color);
        $('.abs-color-name').removeClass('abs-color-active');

        var inc = 0;
        var id = $('#current-thick-tr').val();
        var spl = id.split('-');


        if( $('#ld-'+spl[1]).val() == 1  && $('#fd-'+spl[1]).val() == 1 ){
            inc=3;
        }else if($('#ld-'+spl[1]).val() == 1  || $('#fd-'+spl[1]).val() == 1){
            if($('#fd-'+spl[1]).val() == 1){
              inc=1;
            }
            if($('#ld-'+spl[1]).val() == 1){
              inc=2;
            }
        }else{
            inc=4;
        }

        var setimg = burl+'assests/web_assets/img_web/edge_board'+inc+'.png';
        $('#'+id).find('.main-tbl-abs').attr("src", setimg);
        $('#'+id).find('.main-tbl-abs').css("background-image","url(" + img + ")");
        $('#absMod').modal('hide');
        calculation(id);
        
    })

    //end change on 03-05

    

    $(document).on('click', '.main-dekor-img', function() {
        $('#woodColor').find('.active-dekor-img').removeClass('active-dekor-img')
        var id = $(this).closest("tr").attr('id');
        $('#current-thick-tr').val(id)
        var t= $('#'+id).find('.main-tbl-thick').val();
        if(t == ''){
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
        $('.woodColorCls').each(function(){
            var tt = $(this).attr('data-thick');
            if(t==tt){
                $(this).css('display','block')
            }else{
                 $(this).css('display','none')
            }
        });
        
        $(this).addClass('active-img');
        $('#'+id).find('.main-tbl-img').addClass('active-img-1');
        $('#'+id).find('.dekor-color-name').addClass('dekor-color-active');
        $('#woodColor').modal('show');
        
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

    $(document).on('click', '.main-abs-img', function() {
        $('#absMod').find('.active-abs-img').removeClass('active-abs-img');

        $('.main-abs-img').removeClass('active-img');
        var id = $(this).closest("tr").attr('id');
        $('#current-thick-tr').val(id);
        var t= $('#'+id).find('.main-tbl-thick').val();
        if(t == ''){
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

        $('.absColorCls').each(function(){
            var tt = $(this).attr('data-thick');
            if(t==tt){
                $(this).css('display','block')
            }else{
                 $(this).css('display','none')
            }
        });

      

        $(this).addClass('active-img');
        $('#'+id).find('.abs-color-name').addClass('abs-color-active');
        $('#absMod').modal('show');


        var spl = id.split('-');
       var ld = $("#ld-"+spl[1]).val();
       var rd = $("#rd-"+spl[1]).val();
       var fd = $("#fd-"+spl[1]).val();
       var bd = $("#bd-"+spl[1]).val();
       //alert(ld +'-'+ rd +'-'+ fd +'-'+ bd)
       if(ld == 1){
           $('#check-ld').prop("checked",true)
       }else{
          $('#check-ld').prop("checked",false)  
       }
        if(rd == 1){
           $('#check-rd').prop("checked",true)
       }else{
          $('#check-rd').prop("checked",false)  
       }
        if(fd == 1){
           $('#check-fd').prop("checked",true)
       }else{
          $('#check-fd').prop("checked",false)  
       }
       if(bd == 1){
           $('#check-bd').prop("checked",true)
       }else{
          $('#check-bd').prop("checked",false)  
       }
    });


function check_sunmica(check){
      var id = $('#current-thick-tr').val();
      var spl = id.split('-');

      if($("#check-"+check).prop('checked') == true){
         $("#"+check+"-"+spl[1]).val(1)
      }else{
         $("#"+check+"-"+spl[1]).val(0)
      }
     
}



 $(document).on('keyup', '.woodColorSearch', function() {
        var search = $(this).val()
        var id = $('#current-thick-tr').val()
        var t= $('#'+id).find('.main-tbl-thick').val();
        search = search.toLowerCase();
        $('.woodColorCls').each(function(){
            var cls = $(this).attr('data-clr');
            cls = cls.toLowerCase();
            var tt = $(this).attr('data-thick');
            if(t==tt && (cls.includes(search))){
                $(this).css('display','block')
            }else{
                 $(this).css('display','none')
            }
        })
    });


    $(document).on('keyup', '.absColorSearch', function() {
        var search = $(this).val()
        var id = $('#current-thick-tr').val()
        var t= $('#'+id).find('.main-tbl-thick').val();
        search = search.toLowerCase();
        $('.absColorCls').each(function(){
            var cls = $(this).attr('data-clr');
            cls = cls.toLowerCase();
            
            var tt = $(this).attr('data-thick');
            if(t==tt && (cls.includes(search))){
                $(this).css('display','block')
            }else{
                 $(this).css('display','none')
            }
        })
    });

   
    
    
     

   
$(document).on('keyup', '.main-tbl-width', function() {
    this.value.replace(/[^0-9]/g, '');
    var w = '<?=$edge['width']?>'; 
    var inw =  $(this).val();
    if(parseFloat(w) < parseFloat(inw)){
        var nn = inw.substring(0,inw.length - 1);
        alert('Maximum width is '+w);
        $(this).val(nn);
        //return false;
    }
    calculation($(this).closest("tr").attr('id'));
});

$(document).on('keyup', '.main-tbl-length', function() {
    var l = '<?=$edge['length']?>'; 
    var inl =  $(this).val();
    if(parseFloat(l) < parseFloat(inl)){
        var nn = inl.substring(0,inl.length - 1);
        alert('Maximum length is '+l);
        $(this).val(nn);
        //return false;
       
    }
    calculation($(this).closest("tr").attr('id'));
});

$(document).on('change', '.main-tbl-thick', function() {
     var id = $(this).closest("tr").attr('id');
     $('#'+id).find('.main-dekor-img').attr('src','<?=base_url("assests/web_assets/img_web/button_imgg.png")?>');
     $('#'+id).find('.main-abs-img').attr('src','<?=base_url("assests/web_assets/img_web/button_imgg.png")?>');
     $('#'+id).find('.main-dekor-img').attr('data-dekor',0);
     $('#'+id).find('.main-abs-img').attr('data-abs',0);

      $('#' + id).find('.dekor-color-name').text('');
     $('#' + id).find('.abs-color-name').text('');


       var mp= $('#'+id).find('.main-row-price').text();
       var mp1= $('#'+id).find('.main-row-price-1').text();


       var gt = $('.g-total').text()
       var gt1 = $('.g-total-1').text()
       var ft = parseFloat(gt)-parseFloat(mp);
       var ft1 = parseFloat(gt1)-parseFloat(mp1);
       $('.g-total').text(ft.toFixed(2))
       $('.g-total-1').text(ft1.toFixed(2))

       $('#'+id).find('.main-row-price').text(0)
       $('#'+id).find('.main-row-price-1').text(0)

     //calculation(id);
});

$(document).on('keyup change', '.main-no-pcs', function() {
    let id = $(this).parents("tr").attr('id');
   calculation(id);
});
 
function calculation(id){
   var t = $('#'+id).find('.main-tbl-thick').val();
   var l = $('#'+id).find('.main-tbl-length').val();
   var w = $('#'+id).find('.main-tbl-width').val();
   var p = $('#'+id).find('.main-no-pcs').val();

   var checkimg = $('#'+id).find('.main-dekor-img').attr('data-dekor');
   var checkimg1 = $('#'+id).find('.main-abs-img').attr('data-abs');
   
   //if(checkimg == 0 || checkimg1==0){
    if(checkimg == 0){
       return false;
    }

   if(t > 0 && l > 0 && w > 0 && p > 0){
   }else{
     return false;
   }
 
    var spl = id.split('-');
    var ld = $("#ld-"+spl[1]).val();
    var rd = $("#rd-"+spl[1]).val();
    var fd = $("#fd-"+spl[1]).val();
    var bd = $("#bd-"+spl[1]).val();

   
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
    //let gcostvat = gcost *1.2;
    price = parseFloat(price)+parseFloat(gcost);
}

    $('#'+id).find('.main-row-price').text(price.toFixed(2));
    $('#'+id).find('.main-row-price-1').text((price*1.2).toFixed(2));

    $('#'+id).find('.abs-price').val(absmaterialcost.toFixed(2));
    $('#'+id).find('.dtd-price').val(dtdmaterialcost.toFixed(2));

    var pp=0;
    var pp1=0;

    $('.main-row-price').each(function(){
       pp = parseFloat(pp)+parseFloat($(this).text())
    })
    $('.main-row-price-1').each(function(){
       pp1 = parseFloat(pp1)+parseFloat($(this).text())
    })
    $('.g-total').text(pp.toFixed(2))
    $('.g-total-1').text(pp1.toFixed(2))

    
  let total = $('.g-total-1').text();
  if(parseFloat(total) > 0){
      $('.final-step').attr('disabled',false);
  }else{
      $('.final-step').attr('disabled',true);
  }

}      


function calculation_old(id){
   var t = $('#'+id).find('.main-tbl-thick').val();
   var l = $('#'+id).find('.main-tbl-length').val();
   var w = $('#'+id).find('.main-tbl-width').val();
   var p = $('#'+id).find('.main-no-pcs').val();

   var checkimg = $('#'+id).find('.main-dekor-img').attr('data-dekor');
   var checkimg1 = $('#'+id).find('.main-abs-img').attr('data-abs');
   
   //if(checkimg == 0 || checkimg1==0){
    if(checkimg == 0){
       return false;
    }

   if(t > 0 && l > 0 && w > 0 && p > 0){
   }else{
     return false;
   }
   //var s1 = $('#selected-dimensions-1').val();
   //var s2 = $('#selected-dimensions-2').val();
    var spl = id.split('-');
    var ld = $("#ld-"+spl[1]).val();
    var rd = $("#rd-"+spl[1]).val();
    var fd = $("#fd-"+spl[1]).val();
    var bd = $("#bd-"+spl[1]).val();

    var s1 = parseInt(ld)+parseInt(rd);
    var s2 = parseInt(fd)+parseInt(bd);

    if(t == 10){
      tp1=1.2;  //4
      tp2=13.68; //14
    }else if(t == 18){
      tp1=5;tp2=15;
    }else if(t == 28){
      tp1=6;tp2=16;
    }else if(t == 36){
      tp1=7;tp2=17;
    }

    tp1=1.2;  //4
    tp2=13.68; //14
        
    var d1 = parseFloat(s1*w)+parseFloat(s1*100);
    var d2 = parseFloat(s2*l)+parseFloat(s2*100);
    var absprice = (parseFloat(d1)+parseFloat(d2))*tp1*p/1000;
   
    var boardprice = l*w*tp2*p/1000000;
    var price = parseFloat(absprice)+parseFloat(boardprice);
    $('#'+id).find('.main-row-price').text(price.toFixed(2));
    $('#'+id).find('.main-row-price-1').text((price*1.2).toFixed(2));
    var pp=0;
    var pp1=0;
    $('.main-row-price').each(function(){
       pp = parseFloat(pp)+parseFloat($(this).text())
    })
    $('.main-row-price-1').each(function(){
       pp1 = parseFloat(pp1)+parseFloat($(this).text())
    })
    $('.g-total').text(pp.toFixed(2))
    $('.g-total-1').text(pp1.toFixed(2))

    
  let total = $('.g-total-1').text();
  if(parseFloat(total) > 0){
      $('.final-step').attr('disabled',false);
  }else{
      $('.final-step').attr('disabled',true);
  }

}      

$('.final-step').click(function(){
        var html = '';
        var tp = 0;
        var tp1 = 0;
        var summary = '';
        var incc = 0;
        $(".table-rows tr").each(function(index){
            var thick = $(this).find('.main-tbl-thick').val()
            var w = $(this).find('.main-tbl-width').val()
            var l = $(this).find('.main-tbl-length').val()
            
            var dimg  = $(this).find('.main-dekor-img').attr('src')
            var absimg  = $(this).find('.main-abs-img').attr('src')
            
            var price  =  $(this).find('.main-row-price').text();
            var price1  =  $(this).find('.main-row-price-1').text();

            var dtdprice  =  $(this).find('.dtd-price').val();
            var absprice  =  $(this).find('.abs-price').val();

     
            // var price1 = price*1.2;
            var pcs  =  $(this).find('.main-no-pcs').val();
            tp = parseFloat(tp)+parseFloat(price);
            tp1 = parseFloat(tp1)+parseFloat(price1);

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
                    <h6 class="edge_tab_3_txt"><b>${price1} € s DPH</b></h6>
                    <small class="font12 ml-20">${price} € bez DPH</small>
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
                <span class="calc_panel ">DTD cena : ${dtdprice}€</span>
                <span class="calc_panel ">ABS cena : ${absprice}€</span>
                ${thickht}<br><br>
                <span class="calc_panel ">Celková cena : ${price1}€ s DPH</span>
                <span class="calc_panel ">Celková cena : ${price}€ bez DPH</span>
            </td>
            </tr>`;

            incc++;
            
        });

        // let glueprice = 10;
        // let gcost = 10*incc;
        // summary += `<tr>
        //     <th style="width:50%;">ABS glue calculation</th>
        //     <td style="width:50%;">
        //         <span class="calc_panel ">${incc} Edge board =</span>
        //         <span class="calc_panel ">${gcost}€</span>
        //     </td>
        //     </tr>`;

        // let gcostvat = gcost *1.2; 
        // tp1 = parseFloat(tp1)+parseFloat(gcostvat);
        // tp = parseFloat(tp)+parseFloat(gcost);

        $('.final-price').text(tp.toFixed(2)+' €')
        $('.final-price-1').text(tp1.toFixed(2)+' €')
        $('.final-div').html(html);

        $('#summary-body').html(summary)


       // terminal_summary();
    })

   
   function count_table(){
      var l =  $('.table-rows tr').length;
      if(l == 1){
         $('.remove-table-btn').css('display','none')
      }else{
         $('.remove-table-btn').css('display','block')
      }
   }

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
                 $('.shadow_cstm').html(data);
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

    if($('#Nakupujem_na_firmu_11').is(':checked') == true && check == 1){
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

        var door = $('.table-rows tr').length;
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

function terminal_summary(){
    let html = '';
    $('.table-rows tr').each(function(ind){
        let t = $(this).find('.main-tbl-thick').val()
        let w = $(this).find('.main-tbl-width').val()
        let l = $(this).find('.main-tbl-length').val()
        let p = $(this).find('.main-no-pcs').val()
        let pricev = $(this).find('.main-row-price-1').text()
        let price = $(this).find('.main-tbl-thick').text();

        
    })
}
    
</script>