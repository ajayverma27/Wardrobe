<?php include('include/header.php'); ?>

<div class="container-fluid bg-white">
    <div class="layout-specing">
        <div class="row">
            <div class="col-md-8">



                <div>
                    <img src="assets/images/sidebar_logo/dashboard_img.png" class="red_image mt-3 " alt="">
                </div>
                <div class="mt-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active zalozene" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Založené</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link profile position-relative  " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Vo výrobe <span class="position-absolute top-4 start-100 translate-middle p-2 bg-danger border border-light rounded-circle profile_link ">

                                </span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link profile" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Dokončené</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link profile" id="nacenene-tab" data-bs-toggle="tab" data-bs-target="#nacenene" type="button" role="tab" aria-controls="contact" aria-selected="false">Nacenené</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link profile" id="hladat-tab" data-bs-toggle="tab" data-bs-target="#hladat" type="button" role="tab" aria-controls="contact" aria-selected="false"> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4898 14.5735L11.6818 10.6129C12.6609 9.44901 13.1973 7.98455 13.1973 6.45999C13.1973 2.89801 10.2993 0 6.73734 0C3.17535 0 0.277344 2.89801 0.277344 6.45999C0.277344 10.022 3.17535 12.92 6.73734 12.92C8.07456 12.92 9.34886 12.5167 10.4384 11.751L14.2753 15.7416C14.4357 15.9082 14.6514 16 14.8825 16C15.1013 16 15.3089 15.9166 15.4665 15.7649C15.8013 15.4428 15.8119 14.9085 15.4898 14.5735ZM6.73734 1.68522C9.37021 1.68522 11.5121 3.82713 11.5121 6.45999C11.5121 9.09286 9.37021 11.2348 6.73734 11.2348C4.10447 11.2348 1.96256 9.09286 1.96256 6.45999C1.96256 3.82713 4.10447 1.68522 6.73734 1.68522Z" fill="#757575" />
                                </svg>
                                Hľadať</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active mt-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p class="dnes_content">Dnes</p>

                            <table class="table">

                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="nubmer_content">#0278</span><br>
                                            <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                            <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                        </td>
                                        <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                        <td class="nubmer_content2"> 896,98€</td>
                                        <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="nubmer_content">#0278</span><br>
                                            <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                            <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                        </td>
                                        <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                        <td class="nubmer_content2"> 896,98€</td>
                                        <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="nubmer_content">#0278</span><br>
                                            <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                            <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                        </td>
                                        <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                        <td class="nubmer_content2"> 896,98€</td>
                                        <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="tab-pane fade show active mt-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class="dnes_content">Dnes</p>

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="nubmer_content">#0278</p>
                                                <p class="pastircak">Pastirčák - vstavaná skriňa</p>
                                                <p class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</p>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="nubmer_content">#0278</p>
                                                <p class="pastircak">Pastirčák - vstavaná skriňa</p>
                                                <p class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</p>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="nubmer_content">#0278</p>
                                                <p class="pastircak">Pastirčák - vstavaná skriňa</p>
                                                <p class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</p>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="tab-pane fade show active mt-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class="dnes_content">Dnes</p>

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="nubmer_content">#0278</span><br>
                                                <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                                <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="nubmer_content">#0278</span><br>
                                                <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                                <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="nubmer_content">#0278</span><br>
                                                <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                                <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nacenene" role="tabpanel" aria-labelledby="nacenene-tab">
                            <div class="tab-pane fade show active mt-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class="dnes_content">Dnes</p>

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="nubmer_content">#0278</span><br>
                                                <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                                <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="nubmer_content">#0278</span><br>
                                                <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                                <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="nubmer_content">#0278</span><br>
                                                <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                                <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hladat" role="tabpanel" aria-labelledby="hladat-tab">
                            <div class="tab-pane fade show active mt-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p class="dnes_content">Dnes</p>

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="nubmer_content">#0278</span><br>
                                                <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                                <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="nubmer_content">#0278</span><br>
                                                <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                                <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="nubmer_content">#0278</span><br>
                                                <span class="pastircak">Pastirčák - vstavaná skriňa</span><br>
                                                <span class="pastircak2">Pastirčák - vstavaná skriňa 1 z 2</span>
                                            </td>
                                            <td class="vytvorene">Vytvorené: 27.7.2022</td>
                                            <td class="nubmer_content2"> 896,98€</td>
                                            <td><button type="button" class="btn dokoncit ">DOKONČIŤ</button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="justify-content-center d-flex">
                        <p class="zobrazit">Zobraziť všetky</p>
                    </div>
                </div>


            </div>




            <div class="col-md-4" style="border-left: 1px solid #ddd;">
                <div class="d-flex justify-content-center">
                    <img src="assets/images/sidebar_logo/denir.png" class="logo-light-mode mt-3 " alt="">
                </div>
                <div class="sidebar_box">
                    <h4 style="font-weight: 700;">Novinky</h4>
                    <p class="zobrazit">Zobraziť všetky</p>
                    <p>Dnes</p>
                    <div class="small_box">
                        <div class="small1_box">
                            <p class="Novinka">Nový objednávkový systém</p>

                            <p class="mt-2" style="font-size: 12px; ">Predstavujeme Vám náš nový objednávkový systém DENIR</p>
                        </div>
                    </div>
                    <div class="small_white_box shadow-md mt-3">
                        <div class="small1_box">
                            <p class="Novinka">Nový objednávkový systém</p>

                            <p class="mt-2" style="font-size: 12px; ">Predstavujeme Vám náš nový objednávkový systém DENIR</p>
                        </div>
                    </div>
                    <div class="small_white_box shadow-md mt-3">
                        <div class="small1_box">
                            <p class="Novinka">Nový objednávkový systém</p>

                            <p class="mt-2" style="font-size: 12px; ">Predstavujeme Vám náš nový objednávkový systém DENIR</p>
                        </div>
                    </div>

                </div>
                <div class="sidebox2">
                    <h4 style="font-weight: 700;">Správy</h4>
                    <p>Dnes</p>
                    <div class="small2_box shadow-md ">
                        <div class="">
                            <p style="font-size: 12px;font-weight:300;color:#ED2B34">Pripomienka</p>
                            <p class="Novinka">Nezabudnite odoslať objednávku</p>

                            <p class="mt-2" style="font-size: 12px; ">Nezabudnite odoslať objednávku #0278 - Pastirčák vstavaná skriňa!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('./include/footer.php'); ?>