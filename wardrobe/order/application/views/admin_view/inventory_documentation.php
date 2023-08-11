<?php include("include/header.php"); ?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-2">


                    <ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold mb-4">
                        <li class="breadcrumb-item"><a href="#" class="order-breadcrumb">Documentation</a></li>
                        <img src="assets/images/arrow-right.svg" alt="" srcset="">

                        <li class="breadcrumb-item"><a href="#" class="New_Order">70443</a></li>

                    </ol>

                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">

                    <button id="add_modal" type="button" id="kt_engage_demos_toggle" class=" new_order_btn" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                        <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.75 8.24961L15.9 2.09961" stroke="#F8FAFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.5004 5.1V1.5H12.9004" stroke="#F8FAFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.25 1.5H6.75C3 1.5 1.5 3 1.5 6.75V11.25C1.5 15 3 16.5 6.75 16.5H11.25C15 16.5 16.5 15 16.5 11.25V9.75" stroke="#F8FAFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Export
                        </span></button>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="row mb-5">
                    <div class="col-md-6 col-lg-5">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="py-1"><span class="order_name">Customer</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span> <span class=" order_modal_data">Courtney Henry</span></td>
                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Number</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data">70443</span></td>

                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Order Number</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data">578456  </span></td>
                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Status</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data"><span class="bdg_draft_new">Closed</span>  </span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="py-1"><span class="order_name">Created by</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span> <span class=" order_modal_data">Admin </span></td>
                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Created Date</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data">28 Mar 2023 </span></td>

                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Discount</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data">30%</span></td>
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
									<th class="min-w-100px table_heading ps-4">Category</th>
									<th class="min-w-100px table_heading">Material Type</th>
									<th class="min-w-70px table_heading">Quantity</th>
									<th class="min-w-100px table_heading">MU</th>
									<th class="min-w-100px table_heading">MU Price</th>
									<th class="min-w-100px table_heading">Final Price</th>
                                    <th class="min-w-100px table_heading">Final Price with VAT</th>
                                    <th></th>
								</tr>
							</thead>
							<tbody class="fw-semibold text-gray-600">
								<tr class="verticle_center">
									<td class="align-items-center d-flex image_gap ps-4">
							
										<span class="table_data">DTD Material</span>
									</td>
									<td class="pe-0">
										<span class="table_data">18mm Oak DTD</span>
									</td>
									<td class="pe-0">
										<span class="table_data">23</span>
									</td>
									<td class="pe-0">
                                    <span class="table_data">Set</span>
									</td>
									<td class="pe-0">
										<span class="table_data">16.45€</span>
									</td>
									<td class="pe-0">
                                    <span class="table_data">896,98€</span>
									</td>
                                    <td class="pe-0">
                                    <span class="table_data">896,98€</span>
									</td>
                                    <td><div class="d-flex align-items-center gap-3"><span><img src="assets/images/pencil_edit.svg" id="edit_modal" class=""></span><img src="assets/images/trash_new.svg" class=""></span></div></td>
								</tr>
							
                                <tr class="verticle_center">
									<td class="align-items-center d-flex image_gap ps-4">
							
										<span class="table_data">DTD Material</span>
									</td>
									<td class="pe-0">
										<span class="table_data">18mm Oak DTD</span>
									</td>
									<td class="pe-0">
										<span class="table_data">23</span>
									</td>
									<td class="pe-0">
                                    <span class="table_data">Set</span>
									</td>
									<td class="pe-0">
										<span class="table_data">16.45€</span>
									</td>
									<td class="pe-0">
                                    <span class="table_data">896,98€</span>
									</td>
                                    <td class="pe-0">
                                    <span class="table_data">896,98€</span>
									</td>
                                    <td><div class="d-flex align-items-center gap-3"><span><img src="assets/images/pencil_edit.svg" id="edit_modal" class=""></span><img src="assets/images/trash_new.svg" class=""></span></div></td>
								</tr>
                                <tr class="verticle_center">
									<td class="align-items-center d-flex image_gap ps-4">
							
										<span class="table_data">DTD Material</span>
									</td>
									<td class="pe-0">
										<span class="table_data">18mm Oak DTD</span>
									</td>
									<td class="pe-0">
										<span class="table_data">23</span>
									</td>
									<td class="pe-0">
                                    <span class="table_data">Set</span>
									</td>
									<td class="pe-0">
										<span class="table_data">16.45€</span>
									</td>
									<td class="pe-0">
                                    <span class="table_data">896,98€</span>
									</td>
                                    <td class="pe-0">
                                    <span class="table_data">896,98€</span>
									</td>
                                    <td><div class="d-flex align-items-center gap-3"><span><img src="assets/images/pencil_edit.svg" id="edit_modal" class=""></span><img src="assets/images/trash_new.svg" class=""></span></div></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<!-- edit modal -->
<div id="kt_engage_demos" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '400px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#add_modal" data-kt-drawer-close="#kt_engage_demos_close">
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
<!-- add-modal -->
<div id="kt_engage_demos" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '400px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#edit_modal" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold text-gray-700">Edit Product </h3>
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
<?php include("include/footer.php"); ?>