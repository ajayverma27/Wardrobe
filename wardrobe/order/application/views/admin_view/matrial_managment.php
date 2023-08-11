<?php include("include/header.php"); ?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Material Management</h1>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <button type="button" id="edit_chips_modal" class=" edit_clip_btn" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                        <span><img src="assets/images/edit-clip.svg" class="img-fluid me-2">Edit Chips
                        </span></button>
                    <button type="button" id="kt_engage_demos_toggle" class=" new_order_btn" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                        <span><img src="assets/images/add.svg" class="img-fluid me-2">Add Product
                        </span></button>
                </div>
            </div>
        </div>
        <div class="app-container container-fluid">

            <div class="loco_cat loco_section py-4 py-sm-5 bg-fa swiper-btns">

                <div class="row">
                    <div class="col-10">
                        <div class="swiper-container loco_cat__carousel" data-slides-per-view="6" data-space-between="12" data-loop="true" data-free-mode="true" data-click="false" data-center-xs-slide="false" data-spvxs="2" data-spvsm="3" data-spvmd="4" data-spvlg="5" data-spvxl="7">

                            <div class="swiper-wrapper py-3">
                                <div class="swiper-slide">
                                    <div class="card  card-bordered product_card">
                                        <span>DTD Materials</span>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="card  card-bordered product_card">
                                        <span>DTD Materials</span>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="card  card-bordered product_card">
                                        <span>DTD Materials</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card  card-bordered product_card">
                                        <span>DTD Materials</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card  card-bordered product_card">
                                        <span>DTD Materials</span>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="card  card-bordered product_card">
                                        <span>DTD Materials</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-flex loco_section__head justify-content-end  align-items-sm-center mb-2 mb-md-2 mt-3">

                            <div class="loco_section__carobtn d-none d-sm-inline-block">
                                <button class="btn btn_product_left2  carousel__btn_prev mr-1">
                                    <img src="assets/images/arrow-left2.svg" class="new_arrow ">
                                </button>
                                <button class="btn btn_product_right2  carousel__btn_next">
                                    <img src="assets/images/arrow-right.svg" class="new_arrow">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="">
                <div class="card card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
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
                                <div class="d-flex align-items-center btn_index_ch">

                                    <div class="my-2 ms-3 margin_remove">
                                        <a href="#" id="filter_modal" class="btn btn-sm  bg-body  btn-active-color-danger filter_btn2 fw-bold" id="filter_index_modal_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                                                <img src="assets/images/candle.svg" class="img-fluid">
                                            </span>
                                            Filter</a>
                                    </div>
                                    <div class=" my-2 margin_remove">
                                        <div class="sort_btn">
                                            <a class="btn btn-sm  bg-body  btn-active-color-danger filter_btn2 fw-bold  " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-6 svg-icon-muted new_btn">
                                                    <img src="assets/images/sort.svg" alt="" srcset=""> Sort by: Newest first
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table table-row-bordered gy-5 table-striped border-0 dataTable no-footer" aria-describedby="kt_ecommerce_products_table_info">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                            <th class="min-w-100px table_heading ps-3 " tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order No: activate to sort column descending" style="width: 129.219px;">Material</th>
                                            <th class="min-w-100px table_heading sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Order Name: activate to sort column ascending" style="width: 278.733px;">Material Code</th>
                                            <th class="min-w-70px table_heading sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Product Name: activate to sort column ascending" style="width: 220.33px;"></th>

                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        <tr class="even ">
                                            <td class="sorting_1 w-25">
                                                <div class="d-flex align-items-center gap-8">
                                                    <img src="assets/images/Rectangle 5.svg" alt="" srcset=""><span>DTDL M6120 NTL Sonoma Oak Nature</span>
                                                </div>
                                            </td>
                                            <td class="pe-0 w-50">
                                                <span class="table_data">70443</span>
                                            </td>
                                            <td class="pe-0">
                                                <!-- <span class="table_data"><img src="assets/images/more.svg" alt="" srcset=""></span> -->
                                                <div class="sort_btn">
                                                    <a class="btn btn-sm  bg-body  btn-active-color-danger filter_btn2 fw-bold  " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <span class="table_data"><img src="assets/images/more.svg" alt="" srcset=""></span>
                                                    </a>

                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px sort_date_dropdown" data-kt-menu="true">
                                                        <span class="sort_dropdown_text2 mb-3 text-center">Show This Product Under</span>
                                                        <div class="border-bottom">
                                                            <div class=" menu-item align-items-center px-3 mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label sort_dropdown_text2" for="">
                                                                        Wardrobe Configurator
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div class="menu-item px-3 mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label sort_dropdown_text2" for="">
                                                                        Cabinet Configurator
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=" menu-item align-items-center px-3 mb-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Edge board Configurator
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="menu-item px-3 mb-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Configurator by Picture
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Ordering System
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>




                                        </tr>
                                        <tr class="odd ">
                                            <td class="sorting_1 ">
                                                <div class="d-flex align-items-center gap-8">
                                                    <img src="assets/images/Rectangle 5.svg" alt="" srcset=""><span>DTDL M6120 NTL Sonoma Oak Nature</span>
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <span class="table_data">70443</span>
                                            </td>
                                            <td class="pe-0">
                                                <div class="sort_btn">
                                                    <a class="btn btn-sm  btn-active-color-danger filter_btn2 fw-bold  " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <span class="table_data"><img src="assets/images/more.svg" alt="" srcset=""></span>
                                                    </a>

                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px sort_date_dropdown" data-kt-menu="true">
                                                        <span class="sort_dropdown_text2 mb-3 text-center">Show This Product Under</span>
                                                        <div class="border-bottom">
                                                            <div class=" menu-item align-items-center px-3 mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label sort_dropdown_text2" for="">
                                                                        Wardrobe Configurator
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div class="menu-item px-3 mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label sort_dropdown_text2" for="">
                                                                        Cabinet Configurator
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=" menu-item align-items-center px-3 mb-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Edge board Configurator
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="menu-item px-3 mb-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Configurator by Picture
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Ordering System
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>




                                        </tr>

                                        <tr class="even">
                                            <td class="sorting_1 ">
                                                <div class="d-flex align-items-center gap-8">
                                                    <img src="assets/images/Rectangle 5.svg" alt="" srcset=""><span>DTDL M6120 NTL Sonoma Oak Nature</span>
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <span class="table_data">70443</span>
                                            </td>
                                            <td class="pe-0">
                                                <div class="sort_btn">
                                                    <a class="btn btn-sm btn-active-color-danger filter_btn2 fw-bold  " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <span class="table_data"><img src="assets/images/more.svg" alt="" srcset=""></span>
                                                    </a>

                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px sort_date_dropdown" data-kt-menu="true">
                                                        <span class="sort_dropdown_text2 mb-3 text-center">Show This Product Under</span>
                                                        <div class="border-bottom">
                                                            <div class=" menu-item align-items-center px-3 mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label sort_dropdown_text2" for="">
                                                                        Wardrobe Configurator
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div class="menu-item px-3 mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label sort_dropdown_text2" for="">
                                                                        Cabinet Configurator
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=" menu-item align-items-center px-3 mb-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Edge board Configurator
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="menu-item px-3 mb-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Configurator by Picture
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Ordering System
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>




                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1 w-50">
                                                <div class="d-flex align-items-center gap-8">
                                                    <img src="assets/images/Rectangle 5.svg" alt="" srcset=""><span>DTDL M6120 NTL Sonoma Oak Nature</span>
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <span class="table_data">70443</span>
                                            </td>
                                            <td class="pe-0">
                                                <div class="sort_btn">
                                                    <a class="btn btn-sm    btn-active-color-danger filter_btn2 fw-bold  " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <span class="table_data"><img src="assets/images/more.svg" alt="" srcset=""></span>
                                                    </a>

                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px sort_date_dropdown" data-kt-menu="true">
                                                        <span class="sort_dropdown_text2 mb-3 text-center">Show This Product Under</span>
                                                        <div class="border-bottom">
                                                            <div class=" menu-item align-items-center px-3 mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label sort_dropdown_text2" for="">
                                                                        Wardrobe Configurator
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div class="menu-item px-3 mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label sort_dropdown_text2" for="">
                                                                        Cabinet Configurator
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=" menu-item align-items-center px-3 mb-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Edge board Configurator
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="menu-item px-3 mb-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Configurator by Picture
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input  cstm-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                <label class="form-check-label sort_dropdown_text2" for="">
                                                                    Ordering System
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>




                                        </tr>
                                    </tbody>



                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                    <div class="dataTables_length" id="kt_ecommerce_products_table_length"><label><select name="kt_ecommerce_products_table_length" aria-controls="kt_ecommerce_products_table" class="form-select form-select-sm form-select-solid">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></label></div>
                                    <div class="dataTables_info" id="kt_ecommerce_products_table_info" role="status" aria-live="polite">Showing 1 to 6 of 6 records</div>
                                </div>
                                <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_products_table_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="kt_ecommerce_products_table_previous"><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="kt_ecommerce_products_table_next"><a href="#" aria-controls="kt_ecommerce_products_table" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer pt-0">
                        <div class="load_more_btn">
                            Load more<span><img src="assets/images/cloud-change.svg"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- filter-modal -->
<div id="kt_engage_demos" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '400px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#filter_modal" data-kt-drawer-close="#kt_engage_demos_close">
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
                <div class="col-md-6">
                    <div class="mb-8">
                        <label for="" class=" form-label order_label">Order Number</label>
                        <select class="form-select" aria-label="Select example">
                            <option>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-8">
                        <label for="" class=" form-label order_label">Order Number</label>
                        <select class="form-select" aria-label="Select example">
                            <option>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div><label for="" class=" form-label date_label">Product Size</label></div>
                <div class="col-md-6">
                    <div class="mb-8">
                        <label class="form-label">Min</label>
                        <input class="form-control " placeholder="Set min size" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-8">
                        <label class="form-label">Max</label>
                        <input class="form-control " placeholder="Set max size" />
                    </div>
                </div>
                <div><label for="" class=" form-label date_label">Product Weight</label></div>
                <div class="col-md-6">
                    <div class="mb-8">
                        <label class="form-label">Min</label>
                        <input class="form-control " placeholder="Set min size" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-8">
                        <label class="form-label">Max</label>
                        <input class="form-control " placeholder="Set max size" />
                    </div>
                </div>

                <div class="mb-8">
                    <label for="" class=" form-label date_label">Availability</label>
                    <div class="d-flex gap-4">
                        <div class="form-check form-check-custom form-check-red form-check-solid me-8">
                            <input class="form-check-input" name="Problem_Type" type="radio" value="" id="Problem_Type">
                            <label class="form-check-label checknew_label" for="Problem_Type">
                                Available
                            </label>
                        </div>
                        <div class="form-check form-check-custom form-check-red form-check-solid">
                            <input class="form-check-input" name="Problem_Type" type="radio" value="" id="Problem_Type2">
                            <label class="form-check-label checknew_label" for="Problem_Type2">
                                Out of stock
                            </label>
                        </div>
                        <div class="form-check form-check-custom form-check-red form-check-solid">
                            <input class="form-check-input" name="Problem_Type" type="radio" value="" id="Problem_Type2">
                            <label class="form-check-label checknew_label" for="Problem_Type2">
                                To Order
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-8">
                    <label for="" class=" form-label date_label">Status</label>
                    <div class="d-flex gap-4">
                        <div class="form-check form-check-custom form-check-red form-check-solid me-8">
                            <input class="form-check-input" name="Problem_Type" type="radio" value="" id="Problem_Type">
                            <label class="form-check-label checknew_label" for="Problem_Type">
                                Active
                            </label>
                        </div>
                        <div class="form-check form-check-custom form-check-red form-check-solid">
                            <input class="form-check-input" name="Problem_Type" type="radio" value="" id="Problem_Type2">
                            <label class="form-check-label checknew_label" for="Problem_Type2">
                                Inactive
                            </label>
                        </div>

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
    <!--end::modal-->
</div>

<!-- add-product-modal -->
<div id="kt_engage_demos" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold text-gray-700">Add Product</h3>
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
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Product Name</label>
                        <input type="email" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
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
                                    <p class="img_upload_span mb-0">Drag or upload image here</p>
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
                <div class="col-md-6">
                    <div class="mb-8">
                        <label for="" class=" form-label order_label">Category</label>
                        <select class="form-select" aria-label="Select example">
                            <option>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-8">
                        <label for="" class=" form-label order_label">MU</label>
                        <select class="form-select" aria-label="Select example">
                            <option>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Quantity</label>
                        <input type="email" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Color</label>
                        <input type="email" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Brand</label>
                        <input type="email" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Rabat (%)</label>
                        <input type="email" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Product Size</label>
                        <input type="email" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Product Weight</label>
                        <input type="email" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
                <div class="mb-8">
                    <label for="" class=" form-label date_label">Product Visibility</label>
                    <div class="d-flex gap-4">
                        <div class="form-check form-check-custom form-check-red form-check-solid me-8">
                            <input class="form-check-input" name="Problem_Type" type="radio" value="" id="Problem_Type">
                            <label class="form-check-label checknew_label" for="Problem_Type">
                                Active
                            </label>
                        </div>
                        <div class="form-check form-check-custom form-check-red form-check-solid">
                            <input class="form-check-input" name="Problem_Type" type="radio" value="" id="Problem_Type2">
                            <label class="form-check-label checknew_label" for="Problem_Type2">
                                Inactive
                            </label>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Low Stock Notification</label>
                        <input type="email" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Out of Stock Notification</label>
                        <input type="email" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
                <div class="mb-8">
                    <label for="" class=" form-label date_label">Assembly Instructions</label>
                    <div class="d-flex gap-4">
                        <div class="form-check form-check-custom form-check-red form-check-solid me-8">
                            <input class="form-check-input" name="Problem_Type" type="radio" value="" id="Problem_Type">
                            <label class="form-check-label checknew_label" for="Problem_Type">
                                Video Instruction
                            </label>
                        </div>
                        <div class="form-check form-check-custom form-check-red form-check-solid">
                            <input class="form-check-input" name="Problem_Type" type="radio" value="" id="Problem_Type2">
                            <label class="form-check-label checknew_label" for="Problem_Type2">
                                Text Instruction
                            </label>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-10">
                        <label for="" class="form-label order_label">Description</label>
                        <textarea class="form-control textarea_new" id="exampleFormControlTextarea1" rows="3">Write here</textarea>
                    </div>
                </div>
<!-- video upload -->


            </div>

        </div>
        <div class="bottom_btn_div px-5 mb-5">
            <button type="button" class="btn apply_btn mb-2 ">Apply</button>
            <button type="button" class="btn cancel_btn " id="kt_engage_demos_close">Cancel</button>
        </div>
        <!--end::Body-->
    </div>
    <!--end::modal-->
</div>

<!-- edit-chips-modal -->
<div id="kt_engage_demos" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '400px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#edit_chips_modal" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold text-gray-700">Edit Chips</h3>
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
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Add Chip</label>
                        <input class="form-control form-control-sm order_no_control" placeholder="Enter chip name" value="tag1, tag2, tag3" id="kt_tagify_3" />
                    </div>
                </div>

            </div>



            <!-- <div class="bottom_btn_div px-5 mb-5">
                <button type="button" class="btn apply_btn mb-2 ">Apply</button>
                <button type="button" class="btn cancel_btn " id="kt_engage_demos_close">Cancel</button>
            </div> -->
            <!--end::Body-->
        </div>
        <!--end::modal-->
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#slideProduct-ow').addClass('m-0');
    });
    if (window.matchMedia('(max-width: 767px)').matches) {
        $('#slideProduct').removeAttr('data-tns-items');
    };
</script>


<script src="assets/plugins/global/plugins.bundle.js"></script>
<script>
    var input1 = document.querySelector("#kt_tagify_3");
    var input2 = document.querySelector("#kt_tagify_4");
    var input2 = document.querySelector("#kt_tagify_5");

    // Initialize Tagify components on the above inputs
    new Tagify(input1);
    new Tagify(input2);
    new Tagify(input3);
</script>
<?php include("include/footer.php"); ?>