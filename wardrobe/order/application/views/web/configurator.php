<?php include("include/header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="<?=base_url()?>assests/web_assets/css/built_in_cabinets.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">

<img src="<?=base_url()?>assests/web_assets/img_web/denir.png" alt="" class="position-absolute w345">
<div class="section-title-container mb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-50">
                <div class="section-title section-title--one text-center">
                    <h1 class="config_head">Konfigurátor</h1>
                    <h4 class="config_subHead">Zvoľte si, aký nábytok chcete konfigurovať</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="justify-content-center row choose-configurator">
        <div class="col-md-3">
            <a href="wardrobe">
                <img src="<?=base_url()?>assests/web_assets/img_web/Vstavaná_skriňa.jpg" alt="" class="shadow w-100">
                <span class="tab1_head">Vstavaná skriňa</span>
            </a>
        </div>
        <div class="col-md-3">
            <a href="cabinet">
                <img src="<?=base_url()?>assests/web_assets/img_web/Skrinka.jpg" alt="" class="shadow w-100">
                <span class="tab1_head">Skrinka</span>
            </a>
        </div>
        <div class="col-md-3">
            <a href="<?=base_url('web')?>">
                <img src="<?=base_url()?>assests/web_assets/img_web/Ohranená_doska.jpg" alt="" class="shadow w-100">
                <span class="tab1_head">Ohranená doska</span>
            </a>
        </div>
        <div class="col-md-5 mt-20">
        <a href="<?=base_url('web/image_configurator')?>">
            <img src="<?=base_url()?>assests/web_assets/img_web/Konfigurácia_podľa_obrázka.jpg" alt="" class=" shadow w-100 mobile-mb">
              </a>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>