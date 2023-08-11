<?php include('./include/header.php'); ?>
<style>
    .vactore_calender {
        position: absolute;
        top: 14px;
        right: 22px;
    }
</style>
<div class="container-fluid bg-white">
    <div class="layout-specing">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="image_top">
                    <img src="assets/images/sidebar_logo/denir.png" alt="">
                </div>
            </div>
        </div>
        <div class="heading_w_content d-flex justify-content-between align-items-center">
            <h2 class="order_text mb-0">Nová objednávka</h2>
            <div class="main_top_images">
                <img src="assets/images/client/vectore_1.png" alt="">Automatické ukladanie
            </div>

        </div>
        <div class="row">
            <div class="col-md-5">
                <form action="">
                    <div class="row m-auto">
                        <div class="col-lg-8 col-md-6">
                            <div class="form-group order_group">
                                <!-- <label for="">Názov objednávky</label> -->
                                <input type="text" name="" class="form-control order_input" placeholder="Názov objednávky">
                            </div>
                            <div class="form-group order_group">
                                <!-- <label for="">Termín dodania</label> -->
                                <input type="date" name="" class="form-control order_input" placeholder="Zvoľte termín dodania">
                                <!-- <img src="assets/images/client/vectore.png" alt="" class="vactore_calender"> -->
                            </div>
                            <div class="form-group order_group">
                                <!-- <label for="">Poznámka</label> -->
                                <select class="form-select order_input">
                                    <option value="">Zvoľte spôsob dopravy</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="new-parts">
            <div class="new_text">
                <h2>Nové časti</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="new_part_box">
                        <div class="new_part_img text-center">
                            <img src="assets/images/client/new_cost.png" alt="">
                            <h6 class="nova_text">Nová časť</h6>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="new_part_1">
                        <div class="main_row">
                            <div class="row mb-3">
                                <div class="col-lg-4 col-lg-4 col-md-6 col-6">
                                    <div class="box_new_part text-center">
                                        <div class="new_box">
                                            <img src="assets/images/client/new_1.png" alt="">
                                        </div>
                                        <!-- <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dvere <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.5176 0.260254H0.482354C0.0547936 0.260254 -0.16302 0.776558 0.143533 1.08311L4.66116 5.60077C4.8467 5.78632 5.15325 5.78632 5.33888 5.60077L9.8565 1.08311C10.163 0.776558 9.94516 0.260254 9.5176 0.260254Z" fill="black" />
                                                </svg>

                                            </button>
                                            <ul class="dropdown-menu menu_item_list1" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Atyp</a></li>
                                                <li><a class="dropdown-item" href="#">Delené</a></li>

                                            </ul>
                                        </div> -->
                                        <div class="mt-4">
                                            <select class="form-select coustom_select"  aria-label=".form-select-sm example">
                                                <option >Dvere</option>
                                                <option value="1">Atyp</option>
                                                <option value="2">Delené</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-lg-4 col-md-6 col-6">
                                    <div class="box_new_part_2 text-center">
                                        <div class="new_box">
                                            <img src="assets/images/client/new_2.png" alt="">
                                        </div>
                                        <!-- <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Skrinka <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.5176 0.260254H0.482354C0.0547936 0.260254 -0.16302 0.776558 0.143533 1.08311L4.66116 5.60077C4.8467 5.78632 5.15325 5.78632 5.33888 5.60077L9.8565 1.08311C10.163 0.776558 9.94516 0.260254 9.5176 0.260254Z" fill="black" />
                                                </svg>

                                            </button>
                                            <ul class="dropdown-menu menu_item_list1" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Atyp</a></li>

                                            </ul>
                                        </div> -->
                                        <div class="mt-4">
                                            <select class="form-select  coustom_select" aria-label=".form-select-sm example">
                                                <option selected>Skrinka</option>
                                                <option value="1">Atyp</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-lg-4 col-md-6 col-6">
                                    <div class="box_new_part_3 text-center">
                                        <div class="new_box">
                                            <img src="assets/images/client/new_3.png" alt="">
                                        </div>
                                        <!-- <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Interiér <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.5176 0.260254H0.482354C0.0547936 0.260254 -0.16302 0.776558 0.143533 1.08311L4.66116 5.60077C4.8467 5.78632 5.15325 5.78632 5.33888 5.60077L9.8565 1.08311C10.163 0.776558 9.94516 0.260254 9.5176 0.260254Z" fill="black" />
                                                </svg>

                                            </button>
                                            <ul class="dropdown-menu menu_item_list1" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Atyp</a></li>
                                                <li><a class="dropdown-item" href="#">Delené</a></li>
                                            </ul>
                                        </div> -->
                                        <div class="mt-4">
                                            <select class="form-select   coustom_select" aria-label=".form-select-sm example">
                                                <option selected>Interiér </option>
                                                <option value="1">Atyp</option>
                                                <option value="2">Delené</option>
                                         
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- secound new -->
        <div class="new-parts">
            <div class="new_text">
                <h2>Súhrn objednávky</h2>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-6 col-12">
                    <div class="new_part_box_1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="new_part_img d-flex">
                                    <img src="assets/images/client/dore.png" alt="" class="dore_image">
                                    <h6 class="nova_text_1">Dvere</h6>
                                    <div class="decore">
                                        <span class="ks"> Ks: <span class="number_2">2</span></span>
                                        <br>
                                        <span class="ks">Dekor: <span class="number_2">Biely</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="new_part_img d-flex justify-content-around">
                                    <div class="decore_1">
                                        <span class="ks">Výška: <span class="number_2">2000 mm</span></span>
                                        <br>
                                        <span class="ks">Šírka: <span class="number_2">2000 mm</span></span>
                                    </div>
                                    <h6 class="nova_zobra">Zobraziť</h6>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('./include/footer.php'); ?>