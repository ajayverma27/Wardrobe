<?php include("include/header.php"); ?>

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

    <div class="flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class=" py-3 py-lg-6">

            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

                <div class="w-100 d-flex  me-3 mb-4 justify-content-between mobile_view align-items-center">
                    <div>
                        <ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold mb-4">
                            <li class="breadcrumb-item"><span class="order-breadcrumb">Orders</a></li>
                            <img src="<?=base_url()?>assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                            </span>
                            <li class="breadcrumb-item"><span class="order-breadcrumb">New Order</span></li>
                            <img src="<?=base_url()?>assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                            <li class="breadcrumb-item"><span class="order-breadcrumb">Orders by Piece - Fittings & Additional Assortment</span></li>
                            <img src="<?=base_url()?>assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                            <li class="breadcrumb-item"><span class="New_Order">Furniture handles and hangers</span></li>

                        </ol>
                    </div>
                    <div class="shop_div">
                        <span class="shop">E-Shop</span> <img src="<?=base_url()?>assests/admin-assets/images/E-shop.svg" alt="" srcset="">
                    </div>

                </div>
            </div>
            <div class="d-flex align-baseline  px-5 mobile_view">
                <div class="col-md-10 col-lg-10 mb-7">
                    <div class="d-flex align-items-center position-relative px-3">

                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                            </svg>
                        </span>

                        <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid fitting_search   ps-14" placeholder="Search">

                    </div>
                </div>
                <div class="col-md-2 col-lg-2">
                    <div class="sort_btn search_margin_mobile">
                        <a class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold  " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <span class="svg-icon svg-icon-6 svg-icon-muted new_btn">
                                <img src="<?=base_url()?>assests/admin-assets/images/sort.svg" alt="" srcset=""> Sort by: Price
                            </span>
                        </a>

                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px sort_date_dropdown" data-kt-menu="true">
                            <div class="border-bottom">
                                <div class=" menu-item align-items-center px-3">
                                    <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover  sort_dropdown_text px-3 d-block"><img src="<?=base_url()?>assests/admin-assets/images/calendar.svg" alt="" srcset=""> &nbsp; Created Date <span class=""></a>
                                        <div class="position-absolute tick_set"><img src="<?=base_url()?>assests/admin-assets/images/tick-circle.svg" alt="" srcset=""></div>
                                    </div>

                                </div>
                                <div class="menu-item px-3 ">
                                    <a href="#" class="menu-link cstm_menu_hover sort_dropdown_text px-3"><img src="<?=base_url()?>assests/admin-assets/images/textalign-left.svg" alt="" srcset=""> &nbsp; Order Number</a>
                                </div>
                            </div>

                            <div class=" menu-item align-items-center px-3">
                                <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover sort_dropdown_text px-3"><img src="<?=base_url()?>assests/admin-assets/images/arrow-down-black.svg" alt="" srcset=""> &nbsp; Descending <div class="position-absolute tick_set"><img src="<?=base_url()?>assests/admin-assets/images/tick-circle.svg" alt="" srcset=""></div></a></div>

                            </div>

                            <div class="menu-item px-3">
                                <a href="#" class="menu-link cstm_menu_hover sort_dropdown_text px-3"><img src="<?=base_url()?>assests/admin-assets/images/arrow-up.svg" alt="" srcset=""> &nbsp; Ascending</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>




        <div id="kt_app_content" class="app-content flex-column-fluid">

            <div id="kt_app_content_container" class="app-container container-fluid">

                <div class="col-lg-12 ">
                    <div class="row">
                        <?php foreach($wardrobe_sub_subcategory as $sub_subcat){?> 
                            <div class="col-lg-3 col-md-3 mb-7">
                                <a href="<?=base_url()?>furniture/<?=$sub_subcat->id?>"><div class="door_boxses" id="kt_engage_demos_toggle">
                                    <img src="<?=base_url()?>assests/admin-assets/images/furniture_handle.svg" class="door-images" alt="" srcset="">
                                    <span><?=$sub_subcat->name?></span>
                                </div></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>


            </div>


        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>



<?php include("include/footer.php"); ?>