<?php 
    $admin_name =  $this->session->userdata('admindata');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Wardrobe Admin</title>
    <meta charset="utf-8" />
    <meta name="description" content="Wardrobe" />
    <meta name="keywords" content="Wardrobe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Wardrobe" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Wardrobe" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="<?=base_url()?>assests/admin2-assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin2-assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin2-assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin2-assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin2-assets/css/admin.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin2-assets/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin2-assets/css/custom2.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin2-assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assests/admin2-assets/css/admin2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css">
    <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.2.0/css/swiper.min.css">
    <link href="<?=base_url()?>assests/admin2-assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://vjs.zencdn.net/5-unsafe/video-js.css">
</head>

<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <div id="kt_app_header" class="app-header">
                <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
                    <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                                    <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="#" class="d-lg-none">
                            <img alt="Logo" src="<?=base_url()?>assests/admin2-assets/images/Logo_DENIR_PNG.png" class="h-30px" />
                        </a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                        <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                            <div>
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Hi, <?php if(!empty($admin_name['admin_name'])){ echo $admin_name['admin_name']; }?></h1>
                                <span class="text-gray-400 pt-1 fw-semibold fs-6"><?php echo date("l, d M Y") ?></span>
                            </div>
                        </div>
                        <div class="app-navbar flex-shrink-0">
                            <div class="app-navbar-item ms-1 ms-lg-3">
                                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img src="<?=base_url()?>assests/admin2-assets/images/notification.svg">
                                </div>
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px notification_box_radius" data-kt-menu="true">
                                    <div class="d-flex flex-column bgi-no-repeat rounded-top px-8">
                                        <h3 class="align-items-center d-flex fw-semibold justify-content-between  py-8 mt-2 border-bottom  notification_header">Notifications
                                            <span class="fs-8 opacity-75 read_color">Mark all as read <span><img src="<?=base_url()?>assests/admin2-assets/images/sms.png" class=""></span></span>
                                        </h3>
                                    </div>
                                    <div class="tab-content pb-3">
                                        <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                                            <div class="scroll-y mh-325px px-5 mb-5">
                                                <div class="d-flex flex-stack py-4 align-items-baseline notification_header_box px-3">
                                                    <div class="d-flex ">
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                    <img src="<?=base_url()?>assests/admin2-assets/images/Icon.svg">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="d-flex fs-6 justify-content-between order_heading_div">Order Success</a>
                                                            <div class="text-gray-400 fs-7 order_details_div">Order #126554 has been created successfully</div>
                                                            <div><a href="#" class="view_order_div">View Order<span class="ms-2"><img src="<?=base_url()?>assests/admin2-assets/images/export.svg"></span></a></div>
                                                        </div>
                                                    </div>
                                                    <span class="badge badge_min fs-8">1 min</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4 align-items-baseline notification_header_box px-3">
                                                    <div class="d-flex ">
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                    <img src="<?=base_url()?>assests/admin2-assets/images/Icon1.svg">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="d-flex fs-6 justify-content-between order_heading_div">In Production </a>
                                                            <div class="text-gray-400 fs-7 order_details_div">Order #23340 has been moved to In Production</div>
                                                            <div><a href="#" class="view_order_div">View Order<span class="ms-2"><img src="<?=base_url()?>assests/admin2-assets/images/export.svg"></span></a></div>
                                                        </div>
                                                    </div>
                                                    <span class="badge badge_min fs-8">1 hr</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4 align-items-baseline notification_header_box px-3">
                                                    <div class="d-flex ">
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                    <img src="<?=base_url()?>assests/admin2-assets/images/Icon2.svg">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="d-flex fs-6 justify-content-betwee order_heading_div">Completed</a>
                                                            <div class="text-gray-400 fs-7 order_details_div">Order #5689 has been moved to completed</div>

                                                        </div>
                                                    </div>
                                                    <span class="badge badge_min fs-8">1 min</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4 align-items-baseline notification_header_box px-3">
                                                    <div class="d-flex ">
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                    <img src="<?=base_url()?>assests/admin2-assets/images/Icon3.svg">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="d-flex fs-6 justify-content-between"><span class="order_heading_div">Card declined</span> </a>
                                                            <div class="text-gray-400 fs-7 order_details_div">Your card has been declined due to insufficient funds. Please try to add a new card</div>

                                                        </div>
                                                    </div>
                                                    <span class="badge badge_min fs-8">1 min</span>
                                                </div>

                                            </div>
                                            <!-- <div class="py-3 text-center border-top">
                                                <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                    <span class="svg-icon svg-icon-5">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div> -->
                                        </div>
                                        <div class="tab-pane fade" id="kt_topbar_notifications_2" role="tabpanel">
                                            <div class="d-flex flex-column px-9">
                                                <div class="pt-10 pb-0">
                                                    <h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
                                                    <div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
                                                    <div class="text-center mt-5 mb-9">
                                                        <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                    </div>
                                                </div>
                                                <div class="text-center px-4">
                                                    <img class="mw-100 mh-200px" alt="image" src="<?=base_url()?>assests/admin2-assets/media/illustrations/sketchy-1/1.png" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Just now</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">2 hrs</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">5 hrs</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">2 days</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">1 week</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Mar 5</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">May 15</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Apr 3</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Jun 30</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Jul 10</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Sep 10</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Dec 10</span>
                                                </div>
                                            </div>
                                            <div class="py-3 text-center border-top">
                                                <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                    <span class="svg-icon svg-icon-5">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-navbar-item ms-1 ms-lg-3">
                                <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img src="<?=base_url()?>assests/admin2-assets/images/message-text.svg">
                                </div>
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px notification_box_radius" data-kt-menu="true">
                                    <div class="d-flex flex-column bgi-no-repeat rounded-top px-8">
                                        <h3 class="align-items-center d-flex fw-semibold justify-content-between  py-8 mt-2 border-bottom  notification_header">Messages
                                            <span class="fs-8 opacity-75 read_color">Mark all as read <span><img src="<?=base_url()?>assests/admin2-assets/images/sms.png" class=""></span></span>
                                        </h3>
                                    </div>
                                    <div class="tab-content pb-3">
                                        <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                                            <div class="scroll-y mh-325px px-5 mb-5">
                                                <div class="d-flex flex-stack py-4 align-items-baseline notification_header_box px-3">
                                                    <div class="d-flex ">
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                    <img src="<?=base_url()?>assests/admin2-assets/images/Image-msg1.svg">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="d-flex fs-6 justify-content-between order_heading_div">Black Friday Sale</a>
                                                            <div class="text-gray-400 fs-7 msg_details_div">Discount available for corner shelf...</div>

                                                        </div>
                                                    </div>
                                                    <span class="badge badge_min fs-8">1 min</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4 align-items-baseline notification_header_box px-3">
                                                    <div class="d-flex ">
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                    <img src="<?=base_url()?>assests/admin2-assets/images/Image-msg2.svg">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="d-flex fs-6 justify-content-between order_heading_div">Black Friday Sale</a>
                                                            <div class="text-gray-400 fs-7 msg_details_div">3 Tier Counter Shelf Corner</div>
                                                        </div>
                                                    </div>
                                                    <span class="badge badge_min fs-8">1 hr</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4 align-items-baseline notification_header_box px-3">
                                                    <div class="d-flex ">
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                    <img src="<?=base_url()?>assests/admin2-assets/images/Image-msg3.svg">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="d-flex fs-6 justify-content-between order_heading_div">15% Discount</a>
                                                            <div class="text-gray-400 fs-7 msg_details_div">Discount available for corner shelf...</div>
                                                        </div>
                                                    </div>
                                                    <span class="badge badge_min fs-8">1 min</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4 align-items-baseline notification_header_box px-3">
                                                    <div class="d-flex ">
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                    <img src="<?=base_url()?>assests/admin2-assets/images/Image-msg4.svg">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="d-flex fs-6 justify-content-between"><span class="order_heading_div">Summer Sale</span> </a>
                                                            <div class="text-gray-400 fs-7 msg_details_div">Discount available for corner shelf...</div>

                                                        </div>
                                                    </div>
                                                    <span class="badge badge_min fs-8">1 min</span>
                                                </div>

                                            </div>
                                            <!-- <div class="py-3 text-center border-top">
                                                <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                    <span class="svg-icon svg-icon-5">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div> -->
                                        </div>
                                        <div class="tab-pane fade" id="kt_topbar_notifications_2" role="tabpanel">
                                            <div class="d-flex flex-column px-9">
                                                <div class="pt-10 pb-0">
                                                    <h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
                                                    <div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
                                                    <div class="text-center mt-5 mb-9">
                                                        <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                    </div>
                                                </div>
                                                <div class="text-center px-4">
                                                    <img class="mw-100 mh-200px" alt="image" src="<?=base_url()?>assests/admin2-assets/media/illustrations/sketchy-1/1.png" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Just now</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">2 hrs</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">5 hrs</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">2 days</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">1 week</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Mar 5</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">May 15</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Apr 3</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Jun 30</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Jul 10</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Sep 10</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Dec 10</span>
                                                </div>
                                            </div>
                                            <div class="py-3 text-center border-top">
                                                <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                    <span class="svg-icon svg-icon-5">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-navbar-item ms-1 ms-lg-3  z-index-3" id="kt_header_user_menu_toggle">
                                <div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img src="<?=base_url()?>assests/admin2-assets/images/Avatar.png" alt="user" />
                                </div>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="<?=base_url()?>assests/admin2-assets/images/Avatar.png" />
                                            </div>
                                            <div class="d-flex flex-column">
                                                <!-- <div class="fw-bold d-flex align-items-center fs-5">Max Smith</div> -->
                                                <div>
                                                    <h1 class="fw-bold d-flex align-items-center fs-5 mb-0">Hi, <?php if(!empty($admin_name['admin_name'])){ echo $admin_name['admin_name']; }?></h1>
                                                    <span class="text-gray-400  fw-semibold fs-6 profile_box_date"><?php echo date("l, d M Y") ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <div class="menu-item px-5">
                                        <a href="#" class="menu-link px-5">My Profile</a>
                                    </div>
                                    <!--<div class="separator my-2"></div>-->
                                    <div class="menu-item px-5">
                                        <a href="#" class="menu-link px-5">Sign Out</a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                                <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
                                            <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                        <a href="#">
                            <img alt="Logo" src="<?=base_url()?>assests/admin2-assets/images/Logo_DENIR_PNG.png" class="h-25px app-sidebar-logo-default theme-light-show" />
                            <img alt="Logo" src="<?=base_url()?>assests/admin2-assets/images/Logo_DENIR_PNG.png" class="h-25px app-sidebar-logo-default theme-dark-show" />
                            <img alt="Logo" src="<?=base_url()?>assests/admin2-assets/images/Logo_DENIR_PNG.png" class="h-20px app-sidebar-logo-minimize" />
                        </a>
                    </div>
                    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
                            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

                                <div class="menu-item">
                                    <a class="menu-link" href="<?=base_url('admin-dashboard')?>">
                                        <span class="menu-icon">
                                            <img src="<?=base_url()?>assests/admin2-assets/images/dashboard.svg">
                                        </span>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="<?=base_url('order_management')?>">
                                        <span class="menu-icon">
                                            <img src="<?=base_url()?>assests/admin2-assets/images/note.svg">
                                        </span>
                                        <span class="menu-title">Order Management</span>
                                    </a>
                                </div>
                              
                                <!-- <div class="menu-item">
                                    <a class="menu-link" href="documents.php">
                                        <span class="menu-icon">
                                            <img src="<?=base_url()?>assests/admin2-assets/images/bag.svg">
                                        </span>
                                        <span class="menu-title">Inventory</span>
                                    </a>
                                </div> -->
                              <div class="menu-item">
                                    <a class="menu-link" href="<?=base_url('customer_management')?>">
                                        <span class="menu-icon">
                                            <img src="<?=base_url()?>assests/admin2-assets/images/people.svg">
                                        </span>
                                        <span class="menu-title">Customers Management</span>
                                    </a>
                                </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="<?=base_url('employee_management')?>">
                                        <span class="menu-icon">
                                            <img src="<?=base_url()?>assests/admin2-assets/images/profile-2user.svg">
                                        </span>
                                        <span class="menu-title">Employee Management</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="<?= base_url('admin-logout');?>">
                                        <span class="menu-icon">
                                            <img src="<?=base_url()?>assests/admin2-assets/images/logout.svg">
                                        </span>
                                        <span class="menu-title">Logout</span>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                    </div>
                </div>