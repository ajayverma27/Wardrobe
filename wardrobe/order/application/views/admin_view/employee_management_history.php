<?php include("include/header.php"); ?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar pt-5 pb-0">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="w-100 d-flex  justify-content-between mobile_view align-items-center">
                    <div>
                        <ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold mb-4">
                            <li class="breadcrumb-item"><span class="order-breadcrumb">All Customers</span></li>
                            <img src="assets/images/arrow-right.svg" alt="" srcset="">
                            </span>
                            <li class="breadcrumb-item"><span class="New_Order">Profile</span></li>

                        </ol>
                    </div>
                </div>

            </div>
        </div>



        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="">
                <div class="card card-flush">
                    <div class="card-header align-items-center pb-3 gap-2 gap-md-5">
                        <div class="card-title col-12">
                            <div class="d-flex justify-content-between w-100 search_filter">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-325px ps-14 input_search_font" placeholder="Search employees by name, email" />
                                </div>
                                <div class="d-flex align-items-center btn_index_ch">

                                    <div class="my-2 ms-3 margin_remove">
                                        <a href="#" class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold" id="filter_employe_history_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <span class=" me-1">
                                                <img src="assets/images/candle.svg" class="img-fluid">
                                            </span>
                                            Filter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table table-row-bordered gy-5 table-striped border-0" id="kt_ecommerce_products_table">
                            <thead>
                                <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                    <th class=" table_heading ps-3">Employee Name</th>
                                    <th class=" table_heading">Product Name</th>
                                    <th class=" table_heading ">Client </th>
                                    <th class=" table_heading">Status</th>
                                    <th class=" table_heading">Time Spent</th>
                                    <th class=" table_heading">Specified Time</th>
                                    <th class=" table_heading">Price </th>

                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Door</span>
                                    </td>
                                    <td class="pe-0 ">
                                        <span class="table_data">Leslie Alexander</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_completed">Completed</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">896,98€n</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Door</span>
                                    </td>
                                    <td class="pe-0 ">
                                        <span class="table_data">Leslie Alexander</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_production">In Production</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">896,98€n</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Door</span>
                                    </td>
                                    <td class="pe-0 ">
                                        <span class="table_data">Leslie Alexander</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_completed">Completed</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">896,98€n</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Door</span>
                                    </td>
                                    <td class="pe-0 ">
                                        <span class="table_data">Leslie Alexander</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_completed">Completed</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">896,98€n</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Door</span>
                                    </td>
                                    <td class="pe-0 ">
                                        <span class="table_data">Leslie Alexander</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_production">In Production</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">896,98€n</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="table_data ps-3">Courtney Henry</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">Door</span>
                                    </td>
                                    <td class="pe-0 ">
                                        <span class="table_data">Leslie Alexander</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="bdg_completed">Completed</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">240 min</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data">896,98€n</span>
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
<div id="filter_employe_history" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#filter_employe_history_toggle" data-kt-drawer-close="#kt_engage_demos_close">

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
            <div class="row mb-3">
                <div>
                    <label class=" form-label date_label">Status</label>
                    <div class="row">
                        <div class="col-md-5 mt-2">
                            <div class="form-check">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    Completed
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
                    </div>
                </div>
                <div class="mt-8">
                    <label class=" form-label date_label  mb-0">Centre</label>
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-check me-5">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    Cutting Centre
                                </label>
                            </div>

                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-check">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    ABS Centre
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-check me-5">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    Door Centre
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-check">
                                <input class="form-check-input checkbox_type mt-1" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label type_label" for="flexCheckChecked">
                                    A-Typ centre
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <label class=" form-label date_label">Price Range</label>
                    <div class="">
                        <div class="my-2">
                            <span>Min: €<input type="number" maxlength="4" value="0" class="from border-0 w-50px ms-1" /></span><span> - </span><span>Max: €<input type="number" maxlength="4" value="1000" class="to border-0 w-50px ms-1" /></span>
                        </div>
                        <input type="text" class="js-range-slider" name="my_range" value="" data-skin="round" data-type="double" data-min="0" data-max="1000" data-grid="false" />
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







<?php include("include/footer.php"); ?>