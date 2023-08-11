<?php include('./include/header.php'); ?>

<div class="container-fluid bg-white">
    <div class="layout-specing">
        <div class="row">
            <div class="col-md-9">
                <!-- <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="heading_w_content d-flex justify-content-between align-items-center">
                    </div>
                </div> -->
                <div class="heading_w_content d-flex justify-content-between align-items-center">
                    <h2 class="order_text mb-0">Nová objednávka</h2>

                </div>
                <form action="">
                    <div class="row">
                        <div class=" col-md-5">

                            <div class="form-group order_group">
                                <label for="">Názov objednávky</label>
                                <input type="text" name="" class="form-control order_input">
                            </div>
                            <div class="form-group order_group">
                                <label for="">Termín dodania</label>
                                <input type="text" name="" class="form-control order_input" placeholder="Zvoľte termín dodania">
                                <img src="assets/images/client/vectore.png" alt="" class="vactore_calender">
                            </div>
                            <div class="form-group order_group">
                                <label for="">Poznámka</label>
                                <input type="text" name="" class="form-control order_input_text" placeholder="">

                            </div>

                        </div>
                        <div class="col-md-4">

                            <div class="form-group order_group_new">
                                <label for="">Spôsob dopravy</label>
                                <div class="order_group_img d-flex">
                                    <div class="factory_images">
                                        <img src="assets/images/client/factory.png" alt="">
                                    </div>
                                    <div class="troll_images">
                                        <img src="assets/images/client/trolly.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <h6 class="address_text">Dodacia adresa</h6>
                            <div class="group_lable d-flex gap-4">
                                <div class="form-group address_group">
                                    <label for="">Ulica a číslo</label>
                                    <input type="text" name="" class="form-control order_input" placeholder="">
                                </div>
                                <div class="form-group address_group">
                                    <label for="">Mesto</label>
                                    <input type="text" name="" class="form-control order_input" placeholder="">
                                </div>
                            </div>
                            <div class="form-group psc_group mt-3">
                                <label for="">PSČ</label>
                                <input type="text" name="" class="form-control order_input_psc" placeholder="">
                            </div>

                        </div>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>
</div>
<?php include('./include/footer.php'); ?>