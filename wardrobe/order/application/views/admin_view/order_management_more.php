<?php include("include/header.php"); ?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Orders</h1>
                </div>
              
            </div>
        </div>
        <div class="app-container container-fluid">
            <ul class="nav nav-tabs nav-line-tabs fs-6">
                <li class="nav-item order_nav">
                    <a class="nav-link active sales_tab px-4" data-bs-toggle="tab" href="">All</a>
                </li>
                <li class="nav-item order_nav">
                    <a class="nav-link sales_tab px-4" href="">Draft
                       
                    </a>
                </li>
                <li class="nav-item order_nav">
                    <a class="nav-link sales_tab px-4" href="">In Production
                        
                    </a>

                </li>
                <li class="nav-item order_nav">
                    <a class="nav-link sales_tab px-4" href="">Pending
                       
                    </a>
                </li>
                <li class="nav-item position-relative order_nav">
                    <a class="nav-link sales_tab px-4" href="">Completed</a>
                    <span class="red_badge"></span>
                </li>
            </ul>
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
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-325px ps-14 input_search_font" placeholder="Search orders by Order No, Customer Name" />
                                </div>
                                <div class="d-flex align-items-center btn_index_ch">
                                    
                                    <div class="my-2 ms-3 margin_remove">
                                        <a href="#" class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold" id="filter_index_modal_admin_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                                                <img src="assets/images/candle.svg" class="img-fluid">
                                            </span>
                                            Filter</a>
                                    </div>
                                    <div class="ms-3 my-2 margin_remove">
                                      
                                        <div class="sort_btn">
                                            <a class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold  " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-6 svg-icon-muted new_btn">
                                                    <img src="assets/images/sort.svg" alt="" srcset=""> Sort by: Date
                                                </span>
                                            </a>

                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px sort_date_dropdown" data-kt-menu="true">
                                                <div class="border-bottom">
                                                    <div class=" menu-item align-items-center px-3">
                                                        <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover  sort_dropdown_text px-3 d-block"><img src="assets/images/calendar.svg" alt="" srcset=""> &nbsp; Created Date <span class=""></a>
                                                            <div class="position-absolute tick_set"><img src="assets/images/tick-circle.svg" alt="" srcset=""></div>
                                                        </div>

                                                    </div>
                                                    <div class="menu-item px-3 ">
                                                        <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover sort_dropdown_text px-3"><img src="assets/images/textalign-left.svg" alt="" srcset=""> &nbsp; Order Number</a></div>
                                                    </div>
                                                </div>

                                                <div class=" menu-item align-items-center px-3">
                                                    <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover sort_dropdown_text px-3"><img src="assets/images/arrow-down-black.svg" alt="" srcset=""> &nbsp; Descending <div class="position-absolute tick_set"><img src="assets/images/tick-circle.svg" alt="" srcset=""></div></a></div>

                                                </div>

                                                <div class="menu-item px-3">
                                                    <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover sort_dropdown_text px-3"><img src="assets/images/arrow-up.svg" alt="" srcset=""> &nbsp; Ascending</a></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table table-row-bordered gy-5 table-striped border-0" id="admin_table">
                            <thead>
                                <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                    <th class="min-w-75px table_heading ps-3">Order No</th>
                                    <th class="min-w-175px table_heading">Customer Name</th>
                                    <th class="min-w-125px table_heading">Status</th>
                                    <th class="min-w-125px table_heading">Delivery Date</th>
                                    <th class="min-w-100px table_heading">Issues</th>
                                    <th class="min-w-300px table_heading part_item_width">Parts of Items</th>
                                    <th class="min-w-100px table_heading">Documents</th>
                                    <th class="min-w-75px table_heading"></th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">#70443</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_draft">Draft</span>

                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">15 Mar 2023</span>

                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"> - </span>
                                    </td>
                                    <td class="pe-0 pt-3 pb-2">
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                    </td>
                                    <td class="pe-0">
                                        <!-- <span><img src="assets/images/stickynote.svg"></span> -->
                                        <button data-position="bottom" class="tooltip_btn">
                                            <img src="assets/images/stickynote.svg">
                                            <span class="toolTip tooltip_span tooltip_span_admin">
                                                <h6 class="tooltip_h6">What’s include ?</h6>
                                                <ul class="mb-0">
                                                    <li class="tooltip_li tooltip_li_admin">Delivery note</li>
                                                    <li class="tooltip_li tooltip_li_admin">Invoice</li>
                                                    <li class="tooltip_li tooltip_li_admin">Cutting plans</li>
                                                </ul>
                                                <span class="tooltip_p mb-0">Click on the row to view details</span>
                                            </span>
                                        </button>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">#70443</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_production">In Production</span>

                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">15 Mar 2023</span>

                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"> - </span>
                                    </td>
                                    <td class="pe-0 pt-3 pb-2">
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                    </td>
                                    <td class="pe-0">
                                        <!-- <span><img src="assets/images/stickynote.svg"></span> -->
                                        <button data-position="bottom" class="tooltip_btn">
                                            <img src="assets/images/stickynote.svg">
                                            <span class="toolTip tooltip_span tooltip_span_admin">
                                                <h6 class="tooltip_h6">What’s include ?</h6>
                                                <ul class="mb-0">
                                                    <li class="tooltip_li tooltip_li_admin">Delivery note</li>
                                                    <li class="tooltip_li tooltip_li_admin">Invoice</li>
                                                    <li class="tooltip_li tooltip_li_admin">Cutting plans</li>
                                                </ul>
                                                <span class="tooltip_p mb-0">Click on the row to view details</span>
                                            </span>
                                        </button>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">#70443</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_priced">Pending</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">15 Mar 2023</span>

                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_priced">Complaint</span>
                                    </td>
                                    <td class="pe-0 pt-3 pb-2">
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                    </td>
                                    <td class="pe-0">
                                        <!-- <span><img src="assets/images/stickynote.svg"></span> -->
                                        <button data-position="bottom" class="tooltip_btn">
                                            <img src="assets/images/stickynote.svg">
                                            <span class="toolTip tooltip_span tooltip_span_admin">
                                                <h6 class="tooltip_h6">What’s include ?</h6>
                                                <ul class="mb-0">
                                                    <li class="tooltip_li tooltip_li_admin">Delivery note</li>
                                                    <li class="tooltip_li tooltip_li_admin">Invoice</li>
                                                    <li class="tooltip_li tooltip_li_admin">Cutting plans</li>
                                                </ul>
                                                <span class="tooltip_p mb-0">Click on the row to view details</span>
                                            </span>
                                        </button>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">#70443</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_completed">Completed</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">15 Mar 2023</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"> - </span>
                                    </td>
                                    <td class="pe-0 pt-3 pb-2">
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                    </td>
                                    <td class="pe-0">
                                        <!-- <span><img src="assets/images/stickynote.svg"></span> -->
                                        <button data-position="bottom" class="tooltip_btn">
                                            <img src="assets/images/stickynote.svg">
                                            <span class="toolTip tooltip_span tooltip_span_admin">
                                                <h6 class="tooltip_h6">What’s include ?</h6>
                                                <ul class="mb-0">
                                                    <li class="tooltip_li tooltip_li_admin">Delivery note</li>
                                                    <li class="tooltip_li tooltip_li_admin">Invoice</li>
                                                    <li class="tooltip_li tooltip_li_admin">Cutting plans</li>
                                                </ul>
                                                <span class="tooltip_p mb-0">Click on the row to view details</span>
                                            </span>
                                        </button>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">#70443</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_completed">Completed</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">15 Mar 2023</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_refund">Refund</span>
                                    </td>
                                    <td class="pe-0 pt-3 pb-2">
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                    </td>
                                    <td class="pe-0">
                                        <!-- <span><img src="assets/images/stickynote.svg"></span> -->
                                        <button data-position="bottom" class="tooltip_btn">
                                            <img src="assets/images/stickynote.svg">
                                            <span class="toolTip tooltip_span tooltip_span_admin">
                                                <h6 class="tooltip_h6">What’s include ?</h6>
                                                <ul class="mb-0">
                                                    <li class="tooltip_li tooltip_li_admin">Delivery note</li>
                                                    <li class="tooltip_li tooltip_li_admin">Invoice</li>
                                                    <li class="tooltip_li tooltip_li_admin">Cutting plans</li>
                                                </ul>
                                                <span class="tooltip_p mb-0">Click on the row to view details</span>
                                            </span>
                                        </button>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">#70443</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_production">In Production</span>

                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">15 Mar 2023</span>

                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"> - </span>
                                    </td>
                                    <td class="pe-0 pt-3 pb-2">
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                        <div class="bdg_part_item_span">Interior-3</div>
                                        <div class="bdg_part_item_span">Container-2</div>
                                        <div class="bdg_part_item_span">Rails-6</div>
                                        <div class="bdg_part_item_span">Door-6</div>
                                    </td>
                                    <td class="pe-0">
                                        <!-- <span><img src="assets/images/stickynote.svg"></span> -->
                                        <button data-position="bottom" class="tooltip_btn">
                                            <img src="assets/images/stickynote.svg">
                                            <span class="toolTip tooltip_span tooltip_span_admin">
                                                <h6 class="tooltip_h6">What’s include ?</h6>
                                                <ul class="mb-0">
                                                    <li class="tooltip_li tooltip_li_admin">Delivery note</li>
                                                    <li class="tooltip_li tooltip_li_admin">Invoice</li>
                                                    <li class="tooltip_li tooltip_li_admin">Cutting plans</li>
                                                </ul>
                                                <span class="tooltip_p mb-0">Click on the row to view details</span>
                                            </span>
                                        </button>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                    </td>
                                </tr>
                            </tbody>



                        </table>
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
<!--MODAL-->
<div id="filter_index_modal_admin" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#filter_index_modal_admin_toggle" data-kt-drawer-close="#kt_engage_demos_close">

    <div class="card shadow-none rounded-0 w-100">

        <div class="card-header border-0 ps-5" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold modal_title_header">Filter by</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon h-40px w-40px me-n6" id="kt_engage_demos_close">

                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>

                </button>
            </div>
        </div>

        <div class="card-body cstm_card_body" id="kt_engage_demos_body">
            <div class="row">
                <!-- <div class="col-md-10">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Order Number</label>
                        <input type="text" class="form-control order_no_control" placeholder="Type order number" />
                    </div>
                </div> -->
                <div><label class=" form-label date_label">Status</label></div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-5 mt-2">
                            <div class="form-check me-5">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    Draft
                                </label>
                            </div>

                        </div>
                        <div class="col-md-5 mt-2">
                            <div class="form-check">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    In Production
                                </label>
                            </div>
                        </div>
                        <div class="col-md-5 mt-2">
                            <div class="form-check me-5">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    Pending
                                </label>
                            </div>

                        </div>
                        <div class="col-md-5 mt-2">
                            <div class="form-check">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    Completed
                                </label>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="mt-8"><label class=" form-label date_label">Date Range</label></div>
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
        <div class="bottom_btn_div px-5">
            <button type="button" class="btn apply_btn mb-2 w-100">Apply</button>
            <button type="button" class="btn cancel_btn mb-3 w-100" id="kt_engage_demos_close">Cancel</button>
        </div>

    </div>

</div>





<!--Modal new order-->
<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content modal_width_order mx-auto">
            <div class="modal-header">
                <h3 class="modal-title modal_heading_order ">Order #70443</h3>

                <!--begin::Close-->
                <!-- <div class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
				</div> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--end::Close-->
            </div>

            <div class="modal-body pb-0">
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="py-1"><span class="order_name">Total price</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span> <span class=" order_modal_data">527,247€</span></td>
                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Order Name</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data">Shepherd's closet - built-in wardrobe</span></td>

                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Order Date</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data">15 Mar 2023 </span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="py-1"><span class="order_name">Delivery Date</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span> <span class=" order_modal_data">28 Mar 2023 </span></td>
                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Transport Type</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data">Buyer</span></td>

                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Delivery Address</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data">2118 Thornridge Cir. Syracuse, Connecticut 35624 </span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-row-bordered gy-5 border-0 mt-9 table-responsive" id="kt_ecommerce_products_table">
                            <thead>
                                <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                    <th class="min-w-100px table_heading ps-4">Product Name</th>
                                    <th class="min-w-100px table_heading">Wholesale (Without VAT)</th>
                                    <th class="min-w-70px table_heading">Retail (Without VAT)</th>
                                    <th class="min-w-100px table_heading">MO Discount</th>
                                    <th class="min-w-100px table_heading">Price after discount</th>
                                    <th class="min-w-100px table_heading">Action</th>

                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <tr class="verticle_center">
                                    <td class="align-items-center d-flex image_gap ps-4">
                                        <span><img src="assets/images/home-image.svg" class=""></span>
                                        <span class="table_data">Door</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">$25,120.55</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">$25,120.55</span>
                                    </td>
                                    <td class="pe-0">
                                        <input type="email" class="form-control bdg_discount" value="2%" />
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">$25,120.55</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_heading me-2">View Configuration</span><span><img src="assets/images/export-black.svg" class="img-fluid "></span>
                                    </td>

                                </tr>
                                <tr class="verticle_center">
                                    <td class="align-items-center d-flex image_gap ps-4">
                                        <span><img src="assets/images/home1-image.svg" class=""></span>
                                        <span class="table_data">Wardrobe</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">$25,120.55</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">$25,120.55</span>
                                    </td>
                                    <td class="pe-0">
                                        <input type="email" class="form-control bdg_discount" value="2%" />
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">$25,120.55</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_heading me-2">View Configuration</span><span><img src="assets/images/export-black.svg" class="img-fluid"></span>
                                    </td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class=" modal-footer d-flex align-items-center justify-content-between border-0 pt-0">
                <div class="align-items-center d-flex">
                    <span class="report_span" id="report_index_modal_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-dismiss="modal" aria-label="Close">Report a Problem</span><img src="assets/images/info-circle.svg" class="img-fluid ms-1"></span>
                </div>
                <div class="bttn_footer_mobile ">
                    <button type="button" class="btn_modal_index"><span class="modal_text_index me-2">Invoice</span><span><img src="assets/images/document-download-red.svg" class="img-fluid"></span></button>
                    <button type="button" class="btn_modal_index"><span class="modal_text_index me-2">Delivery Note</span><span><img src="assets/images/document-download-red.svg" class="img-fluid"></span></button>
                </div>
            </div>
        </div>
    </div>
</div>





<?php include("include/footer.php"); ?>