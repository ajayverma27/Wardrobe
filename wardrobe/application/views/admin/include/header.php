<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>wardrobes - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="wardrobes_admin" />
    <meta name="keywords" content="wardrobes_admin" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="wardrobes.in" />
    <meta name="website" content="https://wardrobes.in/" />
    <meta name="Version" content="v4.2.0" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
    <link href="assets/css/style2.css" class="theme-opt" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.2/daterangepicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        .heading_side {
            font-size: 20px;
            font-weight: 600 !important;
        }
    </style>

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <div class="page-wrapper toggled">
        <!-- sidebar-wrapper -->
        <nav id="sidebar" class="sidebar-wrapper sidebar-light">
            <div class="sidebar-content" data-simplebar  id="sidebar_active">
                <div class="sidebar-brand">
                    <a href="#">
                        <img src="assets/images/sidebar_logo/denir.png" class="logo-light-mode  " alt="">
                    </a>

                </div>
                <div class="d-flex flex-row">
                    <div>
                        <p class="zarf">WARDROBES</p>
                    </div>
                    <div class="setting"><a href=""><img src="./assets/images/sidebar_logo/setting.png" class="img-fluid me-3 red_sidebarLogo" alt="logo"></a></div>
                </div>



                <ul class="sidebar-menu side_drop">

                    <li class="menu" id="myTab11"><a class="sidebar_links" href="dashboard.php"><img src="./assets/images/sidebar_logo/dash.png" class="img-fluid me-3 red_sidebarLogo" alt="logo" /> Hlavný panel</a></li>
                    <li class="menu" id="myTab12"><a class="sidebar_links" href="Spravy_notifikacie.php"><img src="./assets/images/sidebar_logo/mail_1.png" class="img-fluid me-3 red_sidebarLogo" alt="logo" /> Správy</a></li>
                    <li class="menu" id="myTab13"><a class="sidebar_links" href="Individualna_preprava.php"><img src="./assets/images/sidebar_logo/box_1.png" class="img-fluid me-3 red_sidebarLogo" alt="logo" /> Moje objednávky</a></li>
                    <li class="menu" id="myTab14"><a class="sidebar_links" href="verstony.php"><img src="./assets/images/sidebar_logo/register_1.png" class="img-fluid me-3 red_sidebarLogo" alt="logo" /> Moje faktúry</a></li>
                    <li class="menu" id="myTab15"><a class="sidebar_links" href="#"><img src="./assets/images/sidebar_logo/mobile_1.png" class="img-fluid me-3 red_sidebarLogo" alt="logo" /> Cenníky</a></li>
                    <li class="menu" id="myTab16"><a class="sidebar_links" href="Objednavka_Dvere.php"><img src="./assets/images/sidebar_logo/up_arrow_1.png" class="img-fluid me-3 red_sidebarLogo" alt="logo" /> Maloobchodné marže</a></li>
                    <li class="menu" id="myTab17"><a class="sidebar_links" href="#"><img src="./assets/images/sidebar_logo/group_1.png" class="img-fluid me-3 red_sidebarLogo" alt="logo" /> Kontakty</a></li>
                </ul>
                <ul class="sidebar-menu bottom_menu">
                    <li class="menu" id="myTab18"><a class="sidebar_links" href="#"><img src="./assets/images/sidebar_logo/setting.png" class="img-fluid me-3 red_sidebarLogo" alt="logo" /> Nastavenia</a></li>
                    <li class="menu" id="myTab19"><a class="sidebar_links" href="#" ><img src="./assets/images/sidebar_logo/bell.png" class="img-fluid me-3 " alt="logo" /> Odhlásiť sa</a></li>
                    <li class="menu" id="myTab19"><a class="sidebar_links" href="#" ><img src="./assets/images/sidebar_logo/setting2.png" class="img-fluid me-3" alt="logo" /> Kontakt na vývojárov</a></li>
                </ul>
            </div>
            <!-- Sidebar Footer
             <ul class="sidebar-footer list-unstyled mb-0">
                    <li class="list-inline-item mb-0">
                        <a href="https://1.envato.market/landrick" target="_blank" class="btn btn-icon btn-soft-light"><i class="ti ti-shopping-cart"></i></a> <small class="text-muted fw-medium ms-1">Buy Now</small>
                    </li>
                </ul> 
            Sidebar Footer -->
        </nav>
        <!-- sidebar-wrapper  -->

        <!-- Start Page Content -->
        <main class="page-content">
            <!-- Top Header -->
            <div class="top-header">
                <div class="header-bar d-flex justify-content-between border-bottom">
                    <div class="d-flex align-items-center">
                        <a href="#" class="logo-icon me-3">
                            <img src="assets/images/user/admin_logo.png" alt="logo" height="30" class="small" alt="">
                            <span class="big">
                                <img src="assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                                <img src="assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                            </span>
                        </a>
                        <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                        <div class="search-bar p-0 d-none d-md-block ms-2">
                            <div id="search" class="menu-search mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="form-control border rounded" name="s" id="s" placeholder="Search Keywords...">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item mb-0">
                            <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <div class="btn btn-icon btn-soft-light"><i class="ti ti-settings"></i></div>
                            </a>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-icon btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-bell"></i></button>
                                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>

                                <div class="dropdown-menu dd-menu shadow rounded border-0 mt-3 p-0" data-simplebar style="height: 320px; width: 290px;">
                                    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                                        <h6 class="mb-0 text-dark">Notifications</h6>
                                        <span class="badge bg-soft-danger rounded-pill">3</span>
                                    </div>
                                    <div class="p-3">
                                        <a href="#!" class="dropdown-item features feature-primary key-feature p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-2">
                                                    <i class="ti ti-shopping-cart"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title">Order Complete</h6>
                                                    <small class="text-muted">15 min ago</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/client/04.jpg" class="avatar avatar-md-sm rounded-circle border shadow me-2" alt="">
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title"><span class="fw-bold">Message</span> from Luis</h6>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-2">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title"><span class="fw-bold">One Refund Request</span></h6>
                                                    <small class="text-muted">2 hour ago</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-2">
                                                    <i class="ti ti-truck-delivery"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title">Deliverd your Order</h6>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/client/15.jpg" class="avatar avatar-md-sm rounded-circle border shadow me-2" alt="">
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title"><span class="fw-bold">Cally</span> started following you</h6>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/client/05.jpg" class="avatar avatar-ex-small rounded" alt=""></button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                    <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                                        <img src="assets/images/client/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="flex-1 ms-2">
                                            <span class="d-block">Cristina Julia</span>
                                            <small class="text-muted">UI / UX Designer</small>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-dark" href="index.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span> Dashboard</a>
                                    <a class="dropdown-item text-dark" href="profile.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Profile</a>
                                    <a class="dropdown-item text-dark" href="email.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span> Email</a>
                                    <div class="dropdown-divider border-top"></div>
                                    <a class="dropdown-item text-dark" href="lock-screen.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-lock"></i></span> Lockscreen</a>
                                    <a class="dropdown-item text-dark" href="login.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Top Header -->