<?php include("include/header.php"); ?>

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <h6 class="sales_heading">Refund & Complaints</h6>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="row g-5 g-xl-10">
                    <div class="col-xl-12 mb-xl-10">
                        <ul class="nav nav-tabs nav-line-tabs  fs-6">
                            <li class="nav-item">
                                <a class="nav-link active sales_tab" data-bs-toggle="tab" href="#kt_tab_pane_1">Submitted</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sales_tab" href="#">Resolved</a>
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
                                            <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search complaints" />
                                        </div>
                                        <div class="my-2">
                                            <a href="#" class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold" id="filter_modal_toggle" class="btn btn-sm btn-flex bg-body new_btn btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                                                    <img src="<?=base_url()?>assests/admin-assets/images/candle.svg" class="img-fluid">

                                                </span>
                                                Filter</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="kt_ecommerce_report_returns_export" class="d-none"></div>
                                <div class="card-body pt-0">
                                    <table id="kt_ecommerce_products_table" class="table table-row-bordered gy-5 table-striped border-0">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                                <th><span class="ps-4 table_heading">Order No</span></th>
                                                <th class="reason_width"><span class="table_heading ">Reason</span></th>
                                                <th> <span class="table_heading">Type</span></th>
                                                <th><span class="table_heading">Complaint Date</span></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-0">
                                                <td><span class="ps-4 table_data">#70443</span></td>
                                                <td><span class="table_data">Missing item when I open the received order. So I need a...</span></td>
                                                <td><button type="submit" class="table_btn_complaint"><span>Complaint</span></button></td>
                                                <td><span class="table_data">15 Mar 2023</span></td>
                                                <td><span class="table_heading me-2 cursor-pointer" id="kt_engage_demos_toggle" class="engage-demos-toggle engage-btn btn shadow-sm fs-6 px-4 rounded-top-0" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">View</span><span><img src="<?=base_url()?>assests/admin-assets/images/export_table.svg"></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="ps-4 table_data">#23340</span></td>
                                                <td><span class="table_data">Order not delivered on time. So I need a refund.</span></td>
                                                <td><button type="submit" class="table_btn_refund "><span>Refund</span></button></td>
                                                <td><span class="table_data">5 Mar 2023</span></td>
                                                <td><span class="table_heading me-2 cursor-pointer">View</span><span><img src="<?=base_url()?>assests/admin-assets/images/export_table.svg"></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="ps-4 table_data">#20079</span></td>
                                                <td><span class="table_data">Missing item when I open the received order. So I need a...</span></td>
                                                <td><button type="submit" class="table_btn_complaint"><span>Complaint</span></button></td>
                                                <td><span class="table_data">16 Feb 2023</span></td>
                                                <td><span class="table_heading me-2 cursor-pointer" id="kt_engage_demos_toggle" class="engage-demos-toggle engage-btn btn shadow-sm fs-6 px-4 rounded-top-0" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">View</span><span><img src="<?=base_url()?>assests/admin-assets/images/export_table.svg"></span></td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class=" tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                ...
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
                                <p class="mb-0 attach_p">View in Documents<span class="ms-1"><img src="<?=base_url()?>assests/admin-assets/images/export.png" class="img-fluid"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--MODAL-->
<div id="filter_modal" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#filter_modal_toggle" data-kt-drawer-close="#kt_engage_demos_close">

    <div class="card shadow-none rounded-0 w-100">

        <div class="card-header border-0 ps-5" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold modal_title_header">Filter by</h3>
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
                <div class="col-md-10">
                    <div class="mb-10">
                        <label for="" class=" form-label order_label">Order Number</label>
                        <input type="text" class="form-control order_no_control" placeholder="Type order number" />
                    </div>
                </div>
                <div><label class=" form-label date_label">Type</label></div>
                <div class="d-flex align-items-center mt-3 mb-7">
                    <div class="form-check me-5">
                        <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label type_label" for="flexCheckChecked">
                            Complaint
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label type_label" for="flexCheckChecked">
                            Refund
                        </label>
                    </div>
                </div>
                <div><label class=" form-label date_label">Date Range</label></div>
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
            <button type="button" class="btn apply_btn mb-2 ">Apply</button>
            <button type="button" class="btn cancel_btn " id="kt_engage_demos_close">Cancel</button>
        </div>

    </div>

</div>

<?php include("include/footer.php"); ?>