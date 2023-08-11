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
                                <a class="nav-link active sales_tab px-4" data-bs-toggle="tab" href="#kt_tab_pane_1">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sales_tab px-4" href="#">Invoice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sales_tab px-4" href="#">Price Quote</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sales_tab px-4" href="#">Credit Invoice</a>
                            </li>
                            <li class="nav-item position-relative">
                                <a class="nav-link sales_tab px-4 " href="#">Delivery Note </a>
                                <span class="red_badge"></span>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                                <div class="card-title">
                                    <div class="d-flex justify-content-between align-items-center my-3 search_filter">
                                        <div class="d-flex align-items-center position-relative my-2">
                                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search documents" />
                                        </div>
                                        <div class="d-flex">
                                            <div class="my-2">
                                                <a href="#" class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold" id="filter_document_modal_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                                                        <img src="<?=base_url()?>assests/admin-assets/images/candle.svg" class="img-fluid">
                                                    </span>
                                                    Filter</a>
                                            </div>
                                            <div class="ms-3 my-2">
                                            <div class="sort_btn">
											<a class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold  " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
												<span class="svg-icon svg-icon-6 svg-icon-muted new_btn">
													<img src="<?=base_url()?>assests/admin-assets/images/sort.svg" alt="" srcset=""> Sort by: Date
												</span>
											</a>

											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px sort_date_dropdown" data-kt-menu="true">
												<div class="border-bottom">
													<div class=" menu-item align-items-center px-3">
														<div class="position-relative"><a href="#" class="menu-link cstm_menu_hover  sort_dropdown_text px-3 d-block"><img src="<?=base_url()?>assests/admin-assets/images/calendar.svg" alt="" srcset=""> &nbsp; Created Date <span class=""></a>
														<div class="position-absolute tick_set"><img src="<?=base_url()?>assests/admin-assets/images/tick-circle.svg" alt="" srcset=""></div></div>
														
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
                                </div>

                                <div class="card-body pt-0 table-responsive">
                                    <table class="table table-row-bordered gy-5 table-striped border-0" id="kt_ecommerce_products_table">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                                <th><span class="ps-4 table_heading">Document Name</span></th>
                                                <th class="document_width_table"><span class="table_heading ">Document Type</span></th>
                                                <th><span class="table_heading">Status</span></th>
                                                <th><span class="table_heading">Document Date</span></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">DR_Slaes_3756942</span></td>
                                                <td><span class="bdg_draft">Invoice</span></td>
                                                <td><span class="bdg_paid">Paid</span></td>
                                                <td><span class="table_data">15 Mar 2023</span></td>
                                                <td><span><img src="<?=base_url()?>assests/admin-assets/images/document-download.svg"></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="ps-4 table_data">DR_Slaes_2345687</span></td>
                                                <td><span class="bdg_priced_quote">Price Quote</span></td>
                                                <td><span class="line_table"> - </span></td>
                                                <td><span class="table_data">5 Mar 2023</span></td>
                                                <td><span><img src="<?=base_url()?>assests/admin-assets/images/document-download.svg"></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="ps-4 table_data">DR_Slaes_1368906</span></td>
                                                <td><span class="bdg_priced">Credit Invoice</span></td>
                                                <td><span class="line_table"> - </span></td>
                                                <td><span class="table_data">16 Feb 2023</span></td>
                                                <td><span><img src="<?=base_url()?>assests/admin-assets/images/document-download.svg"></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="ps-4 table_data">DR_Slaes_3756923</span></td>
                                                <td><span class="bdg_draft">Invoice</span></td>
                                                <td><span class="bdg_not_paid">Not Paid</span></td>
                                                <td><span class="table_data">2 Feb 2023</span></td>
                                                <td><span><img src="<?=base_url()?>assests/admin-assets/images/document-download.svg"></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="ps-4 table_data">DR_Slaes_3756121</span></td>
                                                <td><span class="bdg_delivery">Delivery Note</span></td>
                                                <td><span class="line_table"> - </span></td>
                                                <td><span class="table_data">2 Jan 2023</span></td>
                                                <td><span><img src="<?=base_url()?>assests/admin-assets/images/document-download.svg"></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="ps-4 table_data">DR_Slaes_3751456</span></td>
                                                <td><span class="bdg_priced_quote">Price Quote</span></td>
                                                <td><span class="line_table"> - </span></td>
                                                <td><span class="table_data">4 Dec 2022</span></td>
                                                <td><span><img src="<?=base_url()?>assests/admin-assets/images/document-download.svg"></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="ps-4 table_data">DR_Slaes_1580533</span></td>
                                                <td><span class="bdg_draft">Invoice</span></td>
                                                <td><span class="bdg_past_due">Past Due</span></td>
                                                <td><span class="table_data">19 Dec 2022</span></td>
                                                <td><span><img src="<?=base_url()?>assests/admin-assets/images/document-download.svg"></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="ps-4 table_data">DR_Slaes_2456703</span></td>
                                                <td><span class="bdg_delivery">Delivery Note</span></td>
                                                <td><span class="line_table"> - </span></td>
                                                <td><span class="table_data">30 Dec 2022</span></td>
                                                <td><span><img src="<?=base_url()?>assests/admin-assets/images/document-download.svg"></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="ps-4 table_data">DR_Slaes_1264789</span></td>
                                                <td><span class="bdg_priced_quote">Price Quote</span></td>
                                                <td><span class="line_table"> - </span></td>
                                                <td><span class="table_data">28 Nov 2022</span></td>
                                                <td><span><img src="<?=base_url()?>assests/admin-assets/images/document-download.svg"></span></td>
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
<!--modal-->
<div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
    <div class="card shadow-none rounded-0 w-100">
        <div class="card-header border-0" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold modal_title">Complaint Details</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon text-dark h-40px w-40px me-n6" id="kt_engage_demos_close">

                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="card-body pt-1" id="kt_engage_demos_body">
            <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body" data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
                <div class="mb-0">
                    <div class="d-flex flex-stack">
                        <h3 class="mb-0 modal_order_id">Order #23340</h3>
                        <a href="#" class="fw-semibold order_details"><span>View Order Details</span>
                            <spn class=""><img src="<?=base_url()?>assests/admin-assets/images/export.png" class="img-fluid"></span>
                        </a>
                    </div>
                    <div class="modal_body py-5 px-7 my-8 rounded">

                        <div class="d-flex">
                            <div class=" pt-1 me-3">
                                <div class="rounded_box color_green"></div>
                            </div>
                            <div>
                                <p class="modal_p1 color_green mb-1">Complaint submitted</p>
                                <p class="modal_p1 color_green mb-0">15 Mar 2023, 2:28pm</p>
                            </div>
                        </div>
                        <div class="border_div">
                            <span class="border_left"></span>
                        </div>
                        <div class="d-flex">
                            <div class=" pt-1 me-3">
                                <div class="rounded_box1"></div>
                            </div>
                            <div>
                                <p class="modal_p1 color_blue mb-1">Complaint Resolved</p>
                                <p class="modal_p1 color_blue mb-0">Pending</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h6 class="reason_h6">Complaint Reason</h6>
                        <p class="reason_p mt-1">Missing item when I open the received order. So I need a refund for the missing item or deliver the missing item.</p>
                    </div>
                    <div class="mt-8">
                        <h6 class="reason_h6">Attached Files</h6>
                        <div class="attach_div d-flex border mt-4">
                            <div class="attach_img_div">
                                <img src="<?=base_url()?>assests/admin-assets/images/document-text.svg" class="img-fluid">
                            </div>
                            <div class="d-flex flex-column justify-content-center ms-1">
                                <p class="mb-0 invoice_p">Credit Invoice</p>
                                <p class="mb-0 attach_p">View in Documents<span class="ms-1"><img src="assets/images/export.png" class="img-fluid"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--MODAL-->
<div id="filter_document_modal" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#filter_document_modal_toggle" data-kt-drawer-close="#kt_engage_demos_close">

    <div class="card shadow-none rounded-0 w-100">

        <div class="card-header border-0 ps-5" id="kt_engage_demos_header">
            <h3 class="card-title modal_title_header">Filter by</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon  h-40px w-40px me-n6" id="kt_engage_demos_close">

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
                <div><label class=" form-label date_label">Document Type</label></div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-check me-5">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    Invoice
                                </label>
                            </div>

                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-check">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    Price Quote
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-check me-5">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    Credit Invoice
                                </label>
                            </div>

                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-check">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    Delivery Note
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
        <div class="bottom_btn_div px-5 mb-2">
            <button type="button" class="btn apply_btn mb-2 w-100">Apply</button>
            <button type="button" class="btn cancel_btn w-100" id="kt_engage_demos_close">Cancel</button>
        </div>

    </div>

</div>

<?php include("include/footer.php"); ?>