<?php include("include/header.php"); ?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <h6 class="book_heading">Sales Support <span> <img src="assets/images/arrow-right.svg" alt="" srcset=""></span><span class="sample_book_span">How to place a new order</span></h6>
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
                            <button type="button" class=" new_order_btn" id="add_modal">
                                <span><img src="assets/images/add.svg" class="img-fluid me-2">Add Video
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
                                            <img src="assets/images/video.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">Step 1</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">Watch Video<span> <img src="assets/images/play-circle.svg" class="img-fluid"></span></a></p>
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
                                            <img src="assets/images/video.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">Step 1</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">Watch Video<span> <img src="assets/images/play-circle.svg" class="img-fluid"></span></a></p>
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
                                            <img src="assets/images/video.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">Step 1</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">Watch Video<span> <img src="assets/images/play-circle.svg" class="img-fluid"></span></a></p>
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
                                            <img src="assets/images/video.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">Step 1</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">Watch Video<span> <img src="assets/images/play-circle.svg" class="img-fluid"></span></a></p>
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
                                            <img src="assets/images/video.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">Step 1</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">Watch Video<span> <img src="assets/images/play-circle.svg" class="img-fluid"></span></a></p>
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
                                            <img src="assets/images/video.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-7 py-3">
                                        <h6 class="box_heading">Step 1</h6>
                                        <p class=" mb-0"><a href="sales_sample_book.php" class="box-p1">Watch Video<span> <img src="assets/images/play-circle.svg" class="img-fluid"></span></a></p>
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
<!-- add video modal -->
<div id="kt_engage_demos" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '400px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#add_modal" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold text-gray-700">Add Video</h3>
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
            <div class="col-md-12">
                    <div class=" mb-10">
                        <form id="file-upload-form" class="uploader">
                            <input id="file-upload" type="file" name="fileUpload" accept="image/*">

                            <label for="file-upload" id="file-drag" class="animated wow zoomInUp delay-1s">
                                <img id="file-image" src="#" alt="Preview" class="hidden">
                                <div id="start1" class="align-items-center d-flex flex-column justify-content-center">
                                    <div class="border_div_modal">
                                        <img src="assets/images/document-upload.svg">

                                    </div>
                                    <p class="img_upload_span mb-0">Drag or upload video here</p>
                                    <div id="notimage" class="hidden">Please select an image</div>
                                    <span id="file-upload-btn" class="text-center upload_color">Click to upload</span>
                                </div>
                                <div id="response1" class="hidden mb-0">
                                    <div id="messages" class="mb-0"></div>


                                </div>
                            </label>
                        </form>
                    </div>
                </div>
            <div class="col-md-12">
                    <div class="mb-8">
                        <label for="" class=" form-label order_label">Belonging to Video</label>
                        <select class="form-select" aria-label="Select example">
                            <option>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-8">
                        <label for="" class=" form-label order_label">Step Number</label>
                        <input class="form-control order_no_control " placeholder="Type here" />
                    </div>
                </div>

                <div class=" px-5 mb-5">
                    <button type="button" class="btn  apply_btn mb-2  ">Add</button>

                </div>
            </div>

        </div>
 
    </div>
</div>
<!-- end modal -->
<?php include("include/footer.php"); ?>