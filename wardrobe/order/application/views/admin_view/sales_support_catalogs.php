<?php include("include/header.php"); ?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <h6 class="book_heading">Sales Support <span> <img src="assets/images/arrow-right.svg" alt="" srcset=""></span><span class="sample_book_span">Catalogs</span></h6>
            </div>
        </div>
        <div class=" align-items-center py-5 gap-2 gap-md-5 px-7">
            <div class="card-title col-12">
                <div class="d-flex justify-content-between w-100 search_filter">
                    <div class="d-flex align-items-center position-relative my-1">
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                            </svg>
                        </span>
                        <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-325px ps-14 input_search_font" placeholder="Search orders by Order No, Order Name">
                    </div>
                    <div class="d-flex align-items-center btn_index_ch gap-2">
                        <div class=" my-2 margin_remove">
                            <div class="sort_btn">
                                <a class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold  " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-6 svg-icon-muted new_btn">
                                        <img src="assets/images/sort.svg" alt="" srcset=""> Sort by: Creation Date
                                    </span>
                                </a>

                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px sort_date_dropdown" data-kt-menu="true">
                                    <div class="border-bottom">
                                        <div class=" menu-item align-items-center px-3">
                                            <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover  sort_dropdown_text px-3 d-block"><img src="assets/images/calendar.svg" alt="" srcset=""> &nbsp; Created Date <span class=""></span></a>
                                                <div class="position-absolute tick_set"><img src="assets/images/tick-circle.svg" alt="" srcset=""></div>
                                            </div>

                                        </div>
                                        <div class="menu-item px-3 ">
                                            <a href="#" class="menu-link cstm_menu_hover sort_dropdown_text px-3"><img src="assets/images/textalign-left.svg" alt="" srcset=""> &nbsp; Order Number</a>
                                        </div>
                                    </div>

                                    <div class=" menu-item align-items-center px-3">
                                        <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover sort_dropdown_text px-3"><img src="assets/images/arrow-down-black.svg" alt="" srcset=""> &nbsp; Descending <div class="position-absolute tick_set"><img src="assets/images/tick-circle.svg" alt="" srcset=""></div></a></div>

                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link cstm_menu_hover sort_dropdown_text px-3"><img src="assets/images/arrow-up.svg" alt="" srcset=""> &nbsp; Ascending</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                            <button type="button" class=" new_order_btn" id="tutoral_category_modal">
                                <span><img src="assets/images/add.svg" class="img-fluid me-2"> Add Catalog
                                </span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">

            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="row">
                    <div class="col-md-4 mt-5">
                        <div class="border_box">
                            <div class="d-flex justify-content-between">

                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-5">
                                        <div class="image_sales2 py-5">
                                            <img src="assets/images/Group.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">DTD Materials</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">View  <span> <img src="assets/images/export.png" class="img-fluid"></span></a></p>
                                    </div>

                                </div>

                                <div class="delete_div px-3">
                                    <div class="trash_div">
                                        <img src="assets/images/trash.svg" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="border_box">
                            <div class="d-flex justify-content-between">

                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-5">
                                        <div class="image_sales2 py-5">
                                            <img src="assets/images/Group.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">ABS Materials</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">View all <span> <img src="assets/images/export.png" class="img-fluid"></span></a></p>
                                    </div>

                                </div>

                                <div class="delete_div px-3">
                                    <div class="trash_div">
                                        <img src="assets/images/trash.svg" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="border_box">
                            <div class="d-flex justify-content-between">

                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-5">
                                        <div class="image_sales2 py-5">
                                            <img src="assets/images/Group.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">Profil Materials</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">View all <span> <img src="assets/images/export.png" class="img-fluid"></span></a></p>
                                    </div>

                                </div>

                                <div class="delete_div px-3">
                                    <div class="trash_div">
                                        <img src="assets/images/trash.svg" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="border_box">
                            <div class="d-flex justify-content-between">

                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-5">
                                        <div class="image_sales2 py-5">
                                            <img src="assets/images/Group.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">DTD Materials</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">View all <span> <img src="assets/images/export.png" class="img-fluid"></span></a></p>
                                    </div>

                                </div>

                                <div class="delete_div px-3">
                                    <div class="trash_div">
                                        <img src="assets/images/trash.svg" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="border_box">
                            <div class="d-flex justify-content-between">

                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-5">
                                        <div class="image_sales2 py-5">
                                            <img src="assets/images/Group.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">ABS Materials</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">View all <span> <img src="assets/images/export.png" class="img-fluid"></span></a></p>
                                    </div>

                                </div>

                                <div class="delete_div px-3">
                                    <div class="trash_div">
                                        <img src="assets/images/trash.svg" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="border_box">
                            <div class="d-flex justify-content-between">

                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-5">
                                        <div class="image_sales2 py-5">
                                            <img src="assets/images/Group.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">Profil Materials</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">View all <span> <img src="assets/images/export.png" class="img-fluid"></span></a></p>
                                    </div>

                                </div>

                                <div class="delete_div px-3">
                                    <div class="trash_div">
                                        <img src="assets/images/trash.svg" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php"); ?>