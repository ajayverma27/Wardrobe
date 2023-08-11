<?php include("include/header.php"); ?>
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">



        <div id="kt_app_content" class="app-content flex-column-fluid">

            <div id="kt_app_content_container" class=" container-fluid">

                <div class="row g-5 ">

                    <div class="col-xl-5 mb-xl-10" style="border-right: 1px solid #ddd;">

                        <div class="card tab_card">

                            <div class=" border-0 pt-5">
                                <div class="m-0 d-flex justify-content-between">

                                    <div>
                                        <a href="#" id="kt_engage_demos_toggle" class="btn btn-sm btn-flex bg-body new_btn btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

                                            <span class="svg-icon svg-icon-6 svg-icon-muted me-1" title="Check out 24 more demos" >
                                                <img src="<?=base_url()?>assests/admin-assets/images/candle.svg" alt="" srcset="">
                                            </span>
                                            <!--end::Svg Icon-->Filter</a>


                                    </div>


                            
                                    <div class="sort_btn">
                                        <button class="btn " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <span class="svg-icon svg-icon-6 svg-icon-muted new_btn">
                                                <img src="<?=base_url()?>assests/admin-assets/images/sort.svg" alt="" srcset=""> Sort by: Newest first
                                            </span>
                                        </button>
                                    
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                   
                                            <div class="menu-item px-3">
                                            <a href="#" class="menu-link cstm_menu_hover  px-3" ><img src="assets/images/arrow-down.svg" alt="" srcset=""> &nbsp; Newest First</a> 
                                            </div>
                                           
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link cstm_menu_hover  px-3" ><img src="<?=base_url()?>assests/admin-assets/images/arrow-up.svg" alt="" srcset=""> &nbsp;  Oldest First</a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>


                            </div>

                            <div class="card_body">
                                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                                    <ul class=" cstm_nav-tabs  nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4  mb-n2 mx-auto " role="tablist">

                                        <li class="nav-item new_item " role="presentation">
                                            <a class="nav-link mt-1 ms-1  active newsales_tab " data-bs-toggle="tab" href="#kt_ecommerce_add_product_general"  aria-selected="true" role="tab">Messages
                                                2</a>
                                        </li>

                                        <li class="nav-item new_item " role="presentation">
                                            <a class="nav-link mt-1 ms-1  newsales_tab " data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced"  aria-selected="false" role="tab" tabindex="-1">Notifications
                                                1</a>
                                        </li>

                                    </ul>
                                    <div class="d-flex align-items-center position-relative mx-auto w-100 px-3">

                                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                       
                                        <input type="text" data-kt-ecommerce-category-filter="search" class="form-control cstm_search  ps-14" placeholder="Search messages">

                                    </div>
                                    <div class="tab-content px-3">
                                        <div class="tab-pane fade active show" id="kt_ecommerce_add_product_general" role="tab-panel">



                                            <div class="d-flex flex-stack">

                                                <div class="symbol symbol-40px me-4">
                                                    <div class="symbol-label fs-2 fw-semibold  text-inverse-danger"><img src="<?=base_url()?>assests/admin-assets/images/msg1.svg" alt="" srcset=""></div>
                                                </div>

                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                                    <div class="flex-grow-1 me-2 ">
                                                        <a href="" class="cstm_font_semibold">Black Friday Sale
                                                            1 min</a>
                                                        <span class=" d-block  cstm_bold">Discount available for corner shelf...</span>
                                                    </div>

                                                    <a href="#" class="">

                                                        <span class="min_cls">
                                                            1 min
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>
                                            <div class="separator separator-dashed my-4"></div>
                                            <div class="d-flex flex-stack">

                                                <div class="symbol symbol-40px me-4">
                                                    <div class="symbol-label fs-2 fw-semibold  text-inverse-danger"><img src="<?=base_url()?>assests/admin-assets/images/msg2.svg" alt="" srcset=""></div>
                                                </div>

                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                                    <div class="flex-grow-1 me-2">
                                                        <a href="" class="cstm_font_semibold">Black Friday Sale
                                                            1 min</a>
                                                        <span class=" d-block  cstm_bold">Discount available for corner shelf...</span>
                                                    </div>

                                                    <a href="#" class="">

                                                        <span class="min_cls">
                                                            1 min
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>

                                            <div class="separator separator-dashed my-4"></div>
                                            <div class="d-flex flex-stack">

                                                <div class="symbol symbol-40px me-4">
                                                    <div class="symbol-label fs-2 fw-semibold  text-inverse-danger"><img src="<?=base_url()?>assests/admin-assets/images/msg3.svg" alt="" srcset=""></div>
                                                </div>

                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                                    <div class="flex-grow-1 me-2">
                                                        <a href="" class="cstm_font_semibold">Black Friday Sale
                                                            1 min</a>
                                                        <span class=" d-block  cstm_bold">Discount available for corner shelf...</span>
                                                    </div>

                                                    <a href="#" class="">

                                                        <span class="min_cls">
                                                            1 min
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>
                                            <div class="separator separator-dashed my-4"></div>
                                            <div class="d-flex flex-stack">

                                                <div class="symbol symbol-40px me-4">
                                                    <div class="symbol-label fs-2 fw-semibold  text-inverse-danger"><img src="<?=base_url()?>assests/admin-assets/images/msg2.svg" alt="" srcset=""></div>
                                                </div>

                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                                    <div class="flex-grow-1 me-2">
                                                        <a href="" class="cstm_font_semibold">Black Friday Sale
                                                            1 min</a>
                                                        <span class=" d-block  cstm_bold">Discount available for corner shelf...</span>
                                                    </div>

                                                    <a href="#" class="">

                                                        <span class="min_cls">
                                                            1 min
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>
                                            <div class="separator separator-dashed my-4"></div>
                                            <div class="d-flex flex-stack">

                                                <div class="symbol symbol-40px me-4">
                                                    <div class="symbol-label fs-2 fw-semibold  text-inverse-danger"><img src="<?=base_url()?>assests/admin-assets/images/msg5.svg" alt="" srcset=""></div>
                                                </div>

                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                                    <div class="flex-grow-1 me-2">
                                                        <a href="" class="cstm_font_semibold">Black Friday Sale
                                                            1 min</a>
                                                        <span class=" d-block  cstm_bold">Discount available for corner shelf...</span>
                                                    </div>

                                                    <a href="#" class="">

                                                        <span class="min_cls">
                                                            1 min
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>
                                            <div class="separator separator-dashed my-4"></div>
                                            <div class="d-flex flex-stack">

                                                <div class="symbol symbol-40px me-4">
                                                    <div class="symbol-label fs-2 fw-semibold  text-inverse-danger"><img src="<?=base_url()?>assests/admin-assets/images/msg1.svg" alt="" srcset=""></div>
                                                </div>

                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                                    <div class="flex-grow-1 me-2">
                                                        <a href="" class="cstm_font_semibold">Black Friday Sale
                                                            1 min</a>
                                                        <span class=" d-block  cstm_bold">Discount available for corner shelf...</span>
                                                    </div>

                                                    <a href="#" class="">

                                                        <span class="min_cls">
                                                            1 min
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>


                                            <div class="separator separator-dashed my-4"></div>



                                        </div>





                                        <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                                            <div class="d-flex flex-stack">

                                                <div class="symbol symbol-40px me-4">
                                                    <div class="symbol-label fs-2 fw-semibold  text-inverse-danger"><img src="<?=base_url()?>assests/admin-assets/images/order_success.svg" alt="" srcset=""></div>
                                                </div>

                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                                    <div class="flex-grow-1 me-2">
                                                        <a href="" class="cstm_font_semibold">Order Success
                                                            1 min</a>
                                                        <span class=" d-block  cstm_bold">Order #126554 has been created...</span>
                                                    </div>

                                                    <a href="#" class="">

                                                        <span class="min_cls">
                                                            1 min
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>
                                            <div class="separator separator-dashed my-4"></div>
                                            <div class="d-flex flex-stack">

                                                <div class="symbol symbol-40px me-4">
                                                    <div class="symbol-label fs-2 fw-semibold  text-inverse-danger"><img src="<?=base_url()?>assests/admin-assets/images/production.svg" alt="" srcset=""></div>
                                                </div>

                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                                    <div class="flex-grow-1 me-2">
                                                        <a href="" class="cstm_font_semibold">In Production
                                                        </a>
                                                        <span class=" d-block  cstm_bold">Order #23340 has been moved to...</span>
                                                    </div>

                                                    <a href="#" class="">

                                                        <span class="min_cls">
                                                            1 min
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>
                                            <div class="separator separator-dashed my-4"></div>
                                            <div class="d-flex flex-stack">

                                                <div class="symbol symbol-40px me-4">
                                                    <div class="symbol-label fs-2 fw-semibold  text-inverse-danger"><img src="<?=base_url()?>assests/admin-assets/images/completed.svg" alt="" srcset=""></div>
                                                </div>

                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                                    <div class="flex-grow-1 me-2">
                                                        <a href="" class="cstm_font_semibold">Completed

                                                        </a>
                                                        <span class=" d-block  cstm_bold">Order #126554 has been created...</span>
                                                    </div>

                                                    <a href="#" class="">

                                                        <span class="min_cls">
                                                            10:23 am
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>
                                            <div class="separator separator-dashed my-4"></div>
                                            <div class="d-flex flex-stack">

                                                <div class="symbol symbol-40px me-4">
                                                    <div class="symbol-label fs-2 fw-semibold  text-inverse-danger"><img src="<?=base_url()?>assests/admin-assets/images/card.svg" alt="" srcset=""></div>
                                                </div>

                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                                    <div class="flex-grow-1 me-2">
                                                        <a href="" class="cstm_font_semibold">Card declined

                                                        </a>
                                                        <span class=" d-block  cstm_bold">Your card has been declined due...</span>
                                                    </div>

                                                    <a href="#" class="">

                                                        <span class="min_cls">
                                                            3:48 pm
                                                        </span>
                                                    </a>

                                                </div>

                                            </div>
                                            <div class="separator separator-dashed my-4"></div>
                                        </div>

                                    </div>





                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-xl-7 mb-5 mb-xl-10">


                        <!-- msg-body start -->
                        <!-- <div class="card tab_caontent_card h-xl-100  ">
                        <div class="card-body   pb-0">

                                <div class="justify-content-center d-flex main_pickup_box">
                                    <div class="symbol symbol-40px me-4">
                                        <div class="symbol-label fs-2 fw-semibold  cstm_img-div"><img src="assets/images/msg_icons.svg" alt="" srcset=""></div>
                                        <div class="mt-5"><span class="pick_up ">Pickup where you left off</span>
                                            <span class="selece_msg">Select a message and see what’s<br> inside.</span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            </div>  -->
                        <!-- msg-body end -->


                        <!-- black-box-body start -->
                        <!-- <div class="card tab_caontent_card h-xl-100  ">
                                <div class="card-body  pb-0">
                                    <div class="black_friday_box">
                                        <div class="text-center">
                                        <p class="friday_head">BLACK FRIDAY</p>
                                        <img src="assets/images/black_friday.svg" alt="" srcset="">
                                    </div>
                                        <div class="friday_content mt-4">
                                        <p>Little Tree 5 Tier Corner Shelf, Rustic Corner Storage Rack Plant Stand Small Bookshelf for Living Room, Home Office, Kitchen, Small Space</p>
                                    </div>
                                    <div class="text-center"><a href="#" class="btn  buy_btn">Buy Now</a></div>
                                </div>
                               </div> 
                            </div> -->
                        <!-- black-box-body end -->

                        <!-- notification-box-body start -->
                        <!-- <div class="card tab_caontent_card h-xl-100  ">
                            <div class="card-body  pb-0">
                                <div class="justify-content-center d-flex main_pickup_box">
                                    <div class="symbol symbol-40px me-4">
                                        <div class="symbol-label fs-2 fw-semibold  cstm_img-div"><img src="assets/images/notification_img.svg" alt="" srcset=""></div>
                                        <div class="mt-5"><span class="pick_up ">Pickup where you left off</span>
                                            <span class="selece_msg">Select a message and see what’s<br> inside.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- notification-box-body end -->

                        <!-- order-details-box-body start -->
                        <div class="card tab_caontent_card  h-xl-100  ">
                            <div class="card-header pt-5 header-border">

                                <h3 class="card-title align-items-start flex-column">
                                    <span class="cstm_order_label">Order #5689</span>
                                    <span class=" pt-2 order_details_text">View Order Details <img src="<?=base_url()?>assests/admin-assets/images/export.svg" alt="" srcset=""></span>
                                </h3>

                                <div class="card-toolbar">
                                    <div class="d-flex gap-3"><span class="quetion_text  pt-2  fs-6">Have a question?</span>
                                        <span class=" order_details_text pt-2  fs-6"><img src="<?=base_url()?>assests/admin-assets/images/call.svg" alt="" srcset=""> Contact us</span>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body  pb-0">
                                <div class="complete_order_box">
                                    <div class="complete_box px-4 py-2 mb-4">
                                        <p class="complete-box-content">Completed <span class="content_time">10:23 am</span></p>
                                        <span class="quetion_text">Order has been moved to completed</span>
                                    </div>
                                    <div class="complete_box px-4 py-2 mb-4">
                                        <p class="complete-box-content">In Production <span class="content_time">7:25 am</span></p>
                                        <span class="quetion_text">Order has been moved to In Production</span>
                                    </div>
                                    <div class="complete_box px-4 py-2 mb-4">
                                        <p class="complete-box-content">Success <span class="content_time">6:48 am</span></p>
                                        <span class="quetion_text">Your order has been created</span>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- order-details-box-body end -->





                    </div>


                </div>
            </div>

        </div>

    </div>

</div>

</div>

</div>


</div>
<div id="kt_engage_demos" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold text-gray-700">Filter by</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body cstm_card_body" id="kt_engage_demos_body">
            <div class="row">
                <div class="col-md-10">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Order Number</label>
                        <input type="email" class="form-control order_no_control" placeholder="Type order number" />
                    </div>
                </div>
                <div><label for="" class=" form-label date_label">Date Range</label></div>
                <div class="col-md-6">
                    <div class="mb-0">
                        <label class="form-label">From</label>
                        <input class="form-control date_control" placeholder="Pick date rage" id="kt_daterangepicker_3" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-0">
                        <label class="form-label">To</label>
                        <input class="form-control date_control" placeholder="Pick date rage" id="kt_daterangepicker_4" />
                    </div>
                </div>
            </div>

        </div>
        <div class="bottom_btn_div px-5 mb-5">
            <button type="button" class="btn apply_btn mb-2 ">Apply</button>
            <button type="button" class="btn cancel_btn " id="kt_engage_demos_close">Cancel</button>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end:::Main-->

<?php include("include/footer.php"); ?>