<?php include("include/header.php"); ?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <h6 class="sales_heading">Available Documents</h6>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="row g-5 g-xl-10">
                    <div class="col-xl-12 mb-xl-10">
                        <ul class="nav nav-tabs nav-line-tabs  fs-6">
                            <li class="nav-item">
                                <a class="nav-link active sales_tab" data-bs-toggle="tab" href="#kt_tab_pane_1">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sales_tab" data-bs-toggle="tab" href="#kt_tab_pane_2" href="#">Invoice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sales_tab" data-bs-toggle="tab" href="#kt_tab_pane_3" href="#">Price Quote</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sales_tab" data-bs-toggle="tab" href="#kt_tab_pane_4" href="#">Credit Invoice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sales_tab" data-bs-toggle="tab" href="#kt_tab_pane_5" href="#">Delivery Note</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
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
                                                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-325px ps-14 input_search_font" placeholder="Search orders by Order No, Customer Name">
                                            </div>
                                            <div class="d-flex align-items-center btn_index_ch">

                                                <div class="my-2 ms-3 margin_remove">
                                                    <a href="#" id="filter_modal" class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold" id="filter_index_modal_admin_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
                                                                    <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover  sort_dropdown_text px-3 d-block"><img src="assets/images/calendar.svg" alt="" srcset=""> &nbsp; Created Date <span class=""></span></a>
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
                                <div id="kt_ecommerce_report_returns_export" class="d-none"></div>
                                <div class="card-body pt-0">
                                    <table id="kt_ecommerce_products_table" class="table table-row-bordered gy-5 table-striped border-0">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                                <th><span class="ps-4 table_heading">Document Name</span></th>
                                                <th class="reason_width"><span class="table_heading ">Document Type</span></th>
                                                <th> <span class="table_heading">Status</span></th>
                                                <th><span>Document Date</span></th>
                                                <th><span class="table_heading"></span></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td class="pe-0">
                                                    <span class="bdg_priced">Return</span>
                                                </td>
                                                <td><span class="bdg_green" id="status_modal">paid</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td><span class="bdg_draft" id="Expense_modal">Expense</span></td>
                                                <td><span class="bdg_green">Opened</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td><span class="bdg_draft" id="Expense_modal">Expense</span></td>
                                                <td><span class="bdg_green">Opened</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class=" tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
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
                                                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-325px ps-14 input_search_font" placeholder="Search orders by Order No, Customer Name">
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
                                                                    <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover  sort_dropdown_text px-3 d-block"><img src="assets/images/calendar.svg" alt="" srcset=""> &nbsp; Created Date <span class=""></span></a>
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
                                <div id="kt_ecommerce_report_returns_export" class="d-none"></div>
                                <div class="card-body pt-0">
                                    <table id="kt_ecommerce_products_table" class="table table-row-bordered gy-5 table-striped border-0">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                                <th><span class="ps-4 table_heading">Document Name</span></th>
                                                <th class="reason_width"><span class="table_heading ">Document Type</span></th>
                                                <th> <span class="table_heading">Status</span></th>
                                                <th><span>Document Date</span></th>
                                                <th><span class="table_heading"></span></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td class="pe-0">
                                                    <span class="bdg_priced">Return</span>
                                                </td>
                                                <td><span class="bdg_green">paid</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td><span class="bdg_draft" id="Expense_modal">Expense</span></td>
                                                <td><span class="bdg_green">Opened</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td><span class="bdg_draft" id="Expense_modal">Expense</span></td>
                                                <td><span class="bdg_green">Opened</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class=" tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
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
                                                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-325px ps-14 input_search_font" placeholder="Search orders by Order No, Customer Name">
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
                                                                    <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover  sort_dropdown_text px-3 d-block"><img src="assets/images/calendar.svg" alt="" srcset=""> &nbsp; Created Date <span class=""></span></a>
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
                                <div id="kt_ecommerce_report_returns_export" class="d-none"></div>
                                <div class="card-body pt-0">
                                    <table id="kt_ecommerce_products_table" class="table table-row-bordered gy-5 table-striped border-0">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                                <th><span class="ps-4 table_heading">Document Name</span></th>
                                                <th class="reason_width"><span class="table_heading ">Document Type</span></th>
                                                <th> <span class="table_heading">Status</span></th>
                                                <th><span>Document Date</span></th>
                                                <th><span class="table_heading"></span></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td class="pe-0">
                                                    <span class="bdg_priced">Return</span>
                                                </td>
                                                <td><span class="bdg_green">paid</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td><span class="bdg_draft" id="Expense_modal">Expense</span></td>
                                                <td><span class="bdg_green">Opened</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td><span class="bdg_draft" id="Expense_modal">Expense</span></td>
                                                <td><span class="bdg_green">Opened</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class=" tab-pane fade" id="kt_tab_pane_4" role="tabpanel">
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
                                                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-325px ps-14 input_search_font" placeholder="Search orders by Order No, Customer Name">
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
                                                                    <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover  sort_dropdown_text px-3 d-block"><img src="assets/images/calendar.svg" alt="" srcset=""> &nbsp; Created Date <span class=""></span></a>
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
                                <div id="kt_ecommerce_report_returns_export" class="d-none"></div>
                                <div class="card-body pt-0">
                                    <table id="kt_ecommerce_products_table" class="table table-row-bordered gy-5 table-striped border-0">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                                <th><span class="ps-4 table_heading">Document Name</span></th>
                                                <th class="reason_width"><span class="table_heading ">Document Type</span></th>
                                                <th> <span class="table_heading">Status</span></th>
                                                <th><span>Document Date</span></th>
                                                <th><span class="table_heading"></span></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td class="pe-0">
                                                    <span class="bdg_priced">Return</span>
                                                </td>
                                                <td><span class="bdg_green">paid</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td><span class="bdg_draft" id="Expense_modal">Expense</span></td>
                                                <td><span class="bdg_green">Opened</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td><span class="bdg_draft" id="Expense_modal">Expense</span></td>
                                                <td><span class="bdg_green">Opened</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class=" tab-pane fade" id="kt_tab_pane_5" role="tabpanel">
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
                                                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-325px ps-14 input_search_font" placeholder="Search orders by Order No, Customer Name">
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
                                                                    <div class="position-relative"><a href="#" class="menu-link cstm_menu_hover  sort_dropdown_text px-3 d-block"><img src="assets/images/calendar.svg" alt="" srcset=""> &nbsp; Created Date <span class=""></span></a>
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
                                <div id="kt_ecommerce_report_returns_export" class="d-none"></div>
                                <div class="card-body pt-0">
                                    <table id="kt_ecommerce_products_table" class="table table-row-bordered gy-5 table-striped border-0">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                                <th><span class="ps-4 table_heading">Document Name</span></th>
                                                <th class="reason_width"><span class="table_heading ">Document Type</span></th>
                                                <th> <span class="table_heading">Status</span></th>
                                                <th><span>Document Date</span></th>
                                                <th><span class="table_heading"></span></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td class="pe-0">
                                                    <span class="bdg_priced">Return</span>
                                                </td>
                                                <td><span class="bdg_green">paid</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td><span class="bdg_draft" id="Expense_modal">Expense</span></td>
                                                <td><span class="bdg_green">Opened</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td><span class="bdg_draft" id="Expense_modal">Expense</span></td>
                                                <td><span class="bdg_green">Opened</span></td>
                                                <td><span>15 Mar 2023</span></td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/document-download.svg"></span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="table_data"><img src="assets/images/export_table.svg"></span>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
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

                <label for="" class=" form-label date_label">Document Type</label>

                <div class="d-flex gap-20 align-item-center">
                    <div class=" mb-4">
                        <div class="form-check">
                            <input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label order_label" for="">
                                Invoice
                            </label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label order_label" for="">
                                Price Quote
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-8 align-item-center">
                    <div class=" mb-4">
                        <div class="form-check">
                            <input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label order_label" for="">
                                Credit Invoice
                            </label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label order_label" for="">
                                Delivery Note
                            </label>
                        </div>
                    </div>
                </div>
                <div><label for="" class=" form-label date_label">Date Range</label></div>
                <div class="col-md-6">
                    <div class="mb-8">
                        <label class="form-label">From</label>
                        <input class="form-control date_control" placeholder="Pick date rage" id="kt_daterangepicker_3">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-8">
                        <label class="form-label">To</label>
                        <input class="form-control date_control" placeholder="Pick date rage" id="kt_daterangepicker_4">
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

<!-- Expense-modal -->

<div id="kt_engage_demos" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '400px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#Expense_modal" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold text-gray-700">Add Expense</h3>
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
                        <label for="" class=" form-label order_label">Title</label>
                        <input type="text" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Number</label>
                        <input type="text" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-8">
                        <label for="" class=" form-label order_label">Date</label>
                        <select class="form-select" aria-label="Select example">
                            <option>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="mb-8">
                    <label for="" class=" form-label date_label">Status</label>
                    <div class="d-flex gap-4">
                        <div class="form-check form-check-custom form-check-red form-check-solid me-8">
                            <input class="form-check-input" name="Problem_Type" type="radio" value="" id="Problem_Type">
                            <label class="form-check-label checknew_label" for="Problem_Type">
                                Opened
                            </label>
                        </div>
                        <div class="form-check form-check-custom form-check-red form-check-solid">
                            <input class="form-check-input" name="Problem_Type" type="radio" value="" id="Problem_Type2">
                            <label class="form-check-label checknew_label" for="Problem_Type2">
                                Closed
                            </label>
                        </div>

                    </div>
                </div>
                <div class="mb-3">
                    <label for="text" class=" form-label date_label">Item Details</label>
                </div>
                <div class="col-md-12">
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
                <div class="col-md-12">
                    <div class="mb-8">
                        <label for="" class=" form-label order_label">Material Type</label>
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
                        <input type="text" class="form-control order_no_control" placeholder="Type here" />
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
                <div class="col-md-12">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">MU Price</label>
                        <input type="text" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Final Price</label>
                        <input type="text" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Final Price with VAT</label>
                        <input type="text" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Out of Stock Notification</label>
                        <input type="text" class="form-control order_no_control" placeholder="Type here" />
                    </div>
                </div>


            </div>

        </div>
        <div class="bottom_btn_div px-5 mb-5">
            <button type="button" class="btn apply_btn mb-2 ">Save</button>
            <button type="button" class="btn cancel_btn " id="kt_engage_demos_close">Cancel</button>
        </div>
        <!--end::Body-->
    </div>
    <!--end::modal-->
</div>
<!-- status -->

<div id="kt_engage_demos" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '400px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#status_modal" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold text-gray-700">Change Status</h3>
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
                    <div class="mb-6">
                        <label for="" class="d-block form-label status_update ">Status</label>
                        <div class="card-toolbar">
								<button class=" border-0  order_draft_button" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
									<span class="bdg_green">paid</span>
									</span>
								</button>
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded coustm_dropdown status_dropdown " data-kt-menu="true">
									<div class="menu-item ">
										<a href="#" class="menu-link cstm_menu_hover overview_text ">Paid</a>
									</div>
									<div class="menu-item ">
										<a href="#" class="menu-link cstm_menu_hover  overview_text">Not Paid</a>
									</div>
									<div class="menu-item ">
										<a href="#" class="menu-link cstm_menu_hover overview_text">Past Due</a>
									</div>
								</div>
							</div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-6">
                        <label for="" class="d-block form-label status_update">Last Updated</label>
                        <span class="fw-bold" >15 Mar 2023 at 4:30 pm</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-6">
                        <label for="" class=" form-label order_label">Document Name</label>
                        <input type="text" class="form-control order_no_control" placeholder="DR_Slaes_3756942" />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="mb-6">
                        <label for="" class=" form-label order_label">Document Type</label>
                        <input type="text" class="form-control order_no_control" placeholder="Invoice" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-6">
                        <label for="" class=" form-label order_label">Document Date</label>
                        <input type="text" class="form-control order_no_control" placeholder="15 Mar 2023" />
                    </div>
                </div>
            </div>
            <div class="px-5 mb-5">
            <button type="button" class="btn update_btn mb-2 ">Update</button>
           
        </div>
        </div>
       
        <!--end::Body-->
    </div>
    <!--end::modal-->
</div>
</div <?php include("include/footer.php"); ?>