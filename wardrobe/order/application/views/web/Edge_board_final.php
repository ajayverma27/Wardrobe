<?php include("include/header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="<?=base_url()?>assests/web_assets/css/built_in_cabinets.css">
<style>
.cab_tab_4 {
    width: auto !important;
}
</style>
<div class="container-fluid">
    <img src="<?=base_url()?>assests/web_assets/img_web/denir.png" alt="" class="img-fluid logo_width" style="
    position: absolute;
    width: 207px;
    height: 86px;
    top: 0;
    left: 0;">
    <div class="row shadow_cstm">
        <div class="col-md-6"></div>
        <div class="col-md-6 d-flex justify-content-end my-3">
            <a href="<?=base_url().$reloadurl?>" class="w-url-change">
                <button type="button" class="btn btn-danger font14 mr-20 tab11_btn">Nová konfigurácia</button>
            </a>
            <a href="https://denir.sk/">
                <button type="button" class="bg-white btn btn-danger font-weight-bold text-danger font14 tab11_btn">Späť na denir.sk</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3 text-center right-border order_place">
            <h1 class="font-weight-bolder mt-4 mb-2">Hotovo.</h1>
            
            <div class="final_wardrobe_thank">
                <img src="<?=base_url()?>assests/web_assets/img_web/edge_final_img.jpg" class="img-fluid mb-20 mt-20" alt="">
            </div>
            <h1 class="font-weight-bolder my-5">Ďakujeme za objednávku!</h1>
            <p class="font14 mb-3 mobile-text-767">Náš tím už začal pracovať na Vašej objednávke.<br>O jej doručení Vás budeme informovať prostredníctvom emailu a SMS.</p>
        </div>
        <div class="col-md-6 mb-3 order_place">
            <h3 class="font-weight-bolder mt-4 mb-10 ml-110">Stiahnite si appku Denir a<br> sledujte, ako vyrobíme vašu<br>vstavanú skriňu.</h3>
            <div class="d-flex justify-content-around align-items-center">
                <img src="<?=base_url()?>assests/web_assets/img_web/ward_iphone.png" class="img-fluid ward_iphone" alt="">
                <div class="side_section">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="javascript:void(0)" class="mr-3"><img src="<?=base_url()?>assests/web_assets/img_web/store_ward.png" alt="app_store" class="img-flui
                            d common-class-side w_148"></a>
                        <a href="javascript:void(0)"><img src="<?=base_url()?>assests/web_assets/img_web/qr_code.jpg" alt="app_store" class="img-fluid common-class-side w_148"></a>
                    </div>
                    <p class="text-dark font-weight-bolder mt-4">Kód objednávky:</p>
                    <h3 class="font-weight-bolder mb-10">248975</h3>
                    <p class="text-dark font-weight-bolder mt-3">Kód objednávky, ktorý zadáte do <br> aplikácie pre sledovanie objednávky <br> sme Vám poslali aj na email.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <h4 class="font-weight-bolder text-center mr-3">Nakonfigurujte si tiež:</h4>
            <div class="d-flex justify-content-center align-items-center mx-auto mt-3 mb-3">
                <a href="<?=base_url().$link1?>"><img src="<?=base_url().$url1?>" class="img-fluid configure_img w_148" alt=""></a>
                <a href="<?=base_url().$link2?>" class="ml-3"><img src="<?=base_url().$url2?>" class="img-fluid configure_img w_148" alt=""></a>
            </div>
        </div>
    </div>
    <!-- <div class="field btns">
								<button class="prev-2 prev">Previous</button>
								<button class="next-2 next btn-green">Next</button>
							</div> -->
</div>

<?php include("include/footer.php"); ?>