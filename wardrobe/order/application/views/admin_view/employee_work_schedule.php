<?php include("include/header.php"); ?>

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

    <div class="flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class=" py-3 py-lg-6">

            <div id="kt_app_toolbar_container" class="app-container container-fluid ">

                <div class="w-100 d-flex  me-3 mb-5 justify-content-between mobile_view align-items-center">
                    <div>
                        <ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold mb-4">
                            <li class="breadcrumb-item"><span class="order-breadcrumb">All Employees</span></li>
                            <img src="assets/images/arrow-right.svg" alt="" srcset="">
                            </span>
                            <li class="breadcrumb-item"><span class="New_Order">Work Schedule</span></li>
                        </ol>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-flush mb-5 work_box_div card-bordered">
                            <div class="card-title d-flex flex-column mb-10">
                                <span class="work_box_title me-2 ">Client</span>
                            </div>
                            <div class="p-0 d-flex  justify-content-between  pt-0">
                                <div>
                                    <h5 class="courtney_name mb-3">Courtney Henry</h5>
                                    <p class="m-0 order_detail cursor-pointer" id="order_detail_modal_toggle">Order Details<span class="ms-2"><img src="assets/images/export.png" alt="" srcset=""></span></p>
                                </div>
                                <div class="d-flex flex-column justify-content-end">
                                    <button type="button" class=" new_order_btn work_box_send_btn">
                                        Send Notification<span><img src="assets/images/send-notification.svg" class="img-fluid me-2"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between mb-2">
                            <div>
                                <h6 class="overview_heading">Overview</h6>
                            </div>
                            <div class="d-flex flex-wrap flex-stack">
                                <div class="w-100px  div_work_select">
                                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body select_work">
                                        <option value="1" selected="selected" class="select_color_work">7 days</option>
                                        <option value="3">1 Months</option>
                                        <option value="4">1 Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-flush mb-5 card_cstm2" style="background-color: #FDF4FF;">
                                    <div class="card-title d-flex flex-column py-5 px-5">
                                        <span class="production_text me-2 ">In Production</span>
                                    </div>
                                    <div class="card-body d-flex align-items-end pt-0 px-5">
                                        <div class="d-flex align-items-center flex-column  w-100">
                                            <div class="d-flex justify-content-between  align-items-center opacity-75 w-100 mt-auto mb-2">
                                                <span class="Production_orders">27 Orders</span>
                                                <span><img src="assets/images/production_icon.svg" alt="" srcset=""></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-flush mb-5 card_cstm3" style="background-color: #ECFDF5;">
                                    <div class="card-title d-flex flex-column py-5 px-5">

                                        <span class="Completed_text me-2 ">Completed</span>
                                    </div>
                                    <div class="card-body d-flex align-items-end pt-0 px-5">
                                        <div class="d-flex align-items-center flex-column w-100">
                                            <div class="d-flex justify-content-between   align-items-center opacity-75 w-100 mt-auto mb-2">
                                                <span class="Completed_ordres">4 Orders</span>
                                                <span><img src="assets/images/completed_icon.svg" alt="" srcset=""></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-xl-12 mb-xl-10">
                        <div class="card-header align-items-center pt-5 gap-2 gap-md-5">
                            <div class="card-title col-12">
                                <div class="d-flex justify-content-between w-100 search_filter">
                                    <div class="sales_heading">
                                        Orders
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
                        <ul class="nav nav-tabs nav-line-tabs  fs-6 mb-5">
                            <li class="nav-item">
                                <a class="nav-link active sales_tab" data-bs-toggle="tab" href="#kt_tab_pane_1">Cutting Centre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sales_tab" href="#">ABS Centre</a>
                            </li>
                            <li class="nav-item position-relative ">
                                <a class="nav-link sales_tab" data-bs-toggle="tab" href="#kt_tab_pane_3" href="#">Door Centre </a><span class="red_badge"></span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sales_tab" href="#">A-Type Centre</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">



                                <table id="kt_ecommerce_products_table" class="table table-row-bordered gy-5 table-striped border-0">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                            <th class="min-w-150px"><span class="ps-4 table_heading ">Product Name</span></th>
                                            <th class="min-w-150px"><span class="table_heading ">Client Name</span></th>
                                            <th class="min-w-150px"> <span class="table_heading ">Status</span></th>
                                            <th class="min-w-200px"><span class="table_heading ">Meters (Morning - Evening)</span></th>
                                            <th class="min-w-150px"><span class="table_heading ">Specified Time</span></th>
                                            <th class="min-w-150px"><span class="table_heading ">Price</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-0">
                                            <td><span class="ps-4 table_data">Door</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">Cody Fisher</span>
                                            </td>
                                            <td><span class="bdg_production">In Production</span></td>
                                            <td><span class="table_data">240m - 920m</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">14.7 - 25.7</span>
                                            </td>
                                            <td class="pe-0">
                                                <span class="table_data">896,98€</span>
                                            </td>
                                        </tr>
                                        <tr class="border-0">
                                            <td><span class="ps-4 table_data">Srinka A-Type</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">Cody Fisher</span>
                                            </td>
                                            <td><span class="bdg_priced">Pending</span></td>
                                            <td><span class="table_data">240m - 920m</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">14.7 - 25.7</span>
                                            </td>
                                            <td class="pe-0">
                                                <span class="table_data">896,98€</span>
                                            </td>
                                        </tr>
                                        <tr class="border-0">
                                            <td><span class="ps-4 table_data">Door</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">Cody Fisher</span>
                                            </td>
                                            <td><span class="bdg_priced">Pending</span></td>
                                            <td><span class="table_data">240m - 920m</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">14.7 - 25.7</span>
                                            </td>
                                            <td class="pe-0">
                                                <span class="table_data">896,98€</span>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>
                            <div class=" tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                ...
                            </div>
                            <div class=" tab-pane fade" id="kt_tab_pane_3" role="tabpanel">


                                <table id="kt_ecommerce_products_table" class="table table-row-bordered gy-5 table-striped border-0">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                            <th class="min-w-150px"><span class="ps-4 table_heading ">Product Name</span></th>
                                            <th class="min-w-150px"><span class="table_heading ">Client Name</span></th>
                                            <th class="min-w-150px"> <span class="table_heading ">Status</span></th>
                                            <th class="min-w-200px"><span class="table_heading ">Time Spent</span></th>
                                            <th class="min-w-150px"><span class="table_heading ">Specified Time</span></th>
                                            <th class="min-w-150px"><span class="table_heading ">Price</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-0">
                                            <td><span class="ps-4 table_data">Door</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">Cody Fisher</span>
                                            </td>
                                            <td><span class="bdg_production">In Production</span></td>
                                            <td><span class="table_data">240min</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">14.7 - 25.7</span>
                                            </td>
                                            <td class="pe-0">
                                                <span class="table_data">896,98€</span>
                                            </td>
                                        </tr>
                                        <tr class="border-0">
                                            <td><span class="ps-4 table_data">Srinka A-Type</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">Cody Fisher</span>
                                            </td>
                                            <td><span class="bdg_priced">Pending</span></td>
                                            <td><span class="table_data">240min</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">14.7 - 25.7</span>
                                            </td>
                                            <td class="pe-0">
                                                <span class="table_data">896,98€</span>
                                            </td>
                                        </tr>
                                        <tr class="border-0">
                                            <td><span class="ps-4 table_data">Door</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">Cody Fisher</span>
                                            </td>
                                            <td><span class="bdg_priced">Pending</span></td>
                                            <td><span class="table_data">240min</span></td>
                                            <td class="pe-0">
                                                <span class="table_data">14.7 - 25.7</span>
                                            </td>
                                            <td class="pe-0">
                                                <span class="table_data">896,98€</span>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>
                            <div class=" tab-pane fade" id="kt_tab_pane_4" role="tabpanel">
                                ...
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!--Order Detail modal -->
<div id="order_detail_modal" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#order_detail_modal_toggle" data-kt-drawer-close="#kt_engage_demos_close">

    <div class="card shadow-none rounded-0 w-100">

        <div class="card-header border-0 ps-5" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold modal_title_header">Order Details</h3>
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

            <h6 class="order_deatil">Polička A-Type
                <span class="mx-2">·</span>
                <span class="order_detail">View Order</span>
                <span class="ms-1"><img src="assets/images/export.png" alt="" srcset=""></span>
            </h6>
            <div class="filter_img_div mt-5">
                <img src="assets/images/Group.png" class="img-fluid">
            </div>

        </div>


    </div>

</div>

<?php include("include/footer.php"); ?>