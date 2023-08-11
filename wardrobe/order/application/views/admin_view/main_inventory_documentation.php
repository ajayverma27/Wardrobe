<?php include("include/header.php"); ?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<div class="d-flex flex-column flex-column-fluid">
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Documentation</h1>
				</div>
				<div class="d-flex align-items-center gap-2 gap-lg-3">
					<button type="button" id="edit_chips_modal" class=" edit_clip_btn" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
						<span><img src="assets/images/add_red.svg" class="img-fluid me-2">Return
						</span></button>
					<button type="button" id="edit_chips_modal" class=" edit_clip_btn" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
						<span><img src="assets/images/add_red.svg" class="img-fluid me-2">Receipt
						</span></button>
					<button type="button" class=" new_order_btn" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
						<span><img src="assets/images/add.svg" class="img-fluid me-2">Expense
						</span></button>
				</div>
			</div>
		</div>
		<div class="app-container container-fluid">
			<ul class="nav nav-tabs nav-line-tabs fs-6" role="tablist">
				<li class="nav-item order_nav" role="presentation">
					<a class="nav-link active sales_tab px-4" data-bs-toggle="tab" href="javascript:void(0)" aria-selected="true" role="tab">All</a>
				</li>
				<li class="nav-item order_nav" role="presentation">
					<a class="nav-link sales_tab px-4" href="javascript:void(0)" aria-selected="false" tabindex="-1" role="tab">Expense

					</a>
				</li>
				<li class="nav-item order_nav" role="presentation">
					<a class="nav-link sales_tab px-4" href="javascript:void(0)" aria-selected="false" tabindex="-1" role="tab">Return

					</a>

				</li>
				<li class="nav-item order_nav" role="presentation">
					<a class="nav-link sales_tab px-4" href="javascript:void(0)" aria-selected="false" tabindex="-1" role="tab">Receipt

					</a>
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
									<div class="ms-3 my-2 margin_remove">
										<!-- <a href="#" class="btn btn-sm btn-flex bg-body new_btn btn-active-color-danger fw-bold filter_btn " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<span>
												<img src="assets/images/sort.svg" class="img-fluid me-1">

											</span> Sort by: Date
										</a> -->
										<div class="sort_btn">
											<a class="btn btn-sm  bg-body  btn-active-color-danger filter_btn2 fw-bold  " data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
											<th class="min-w-100px table_heading ps-3 sorting sorting_asc" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order No: activate to sort column descending" style="width: 129.219px;"> No</th>
											<th class="min-w-100px table_heading sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Order Name: activate to sort column ascending" style="width: 278.733px;">Title</th>
											<th class="min-w-70px table_heading sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Product Name: activate to sort column ascending" style="width: 220.33px;">Status</th>
											<th class="min-w-100px table_heading sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 129.219px;">Name</th>
											<th class="min-w-100px table_heading sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 129.219px;">type</th>
											<th class="min-w-100px table_heading sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 129.219px;">Created Date</th>
											<th class="min-w-100px table_heading sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 129.219px;">Price</th>
											<th class="min-w-70px table_heading sorting" tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 91.3021px;"></th>
										</tr>
									</thead>
									<tbody class="fw-semibold text-gray-60">
										<tr class="even">
											<td class="sorting_1">
												<span class="table_data ps-3">#70443</span>
											</td>
											<td class="pe-0">
												<span class="table_data">SCONTO s.r.o</span>
											</td>
											<td class="pe-0">
												<span class="table_data"><span class="bdg_green">Opened</span></span>
											</td>
											<td class="pe-0">DTD - EGER</td>
											<td class="pe-0">
												<span class="bdg_draft" id="Expense_modal">Expense</span>
											</td>
											<td class="pe-0">
												<span class="table_data">15 Mar 2023</span>
											</td>
											<td class="pe-0">
												<span class="table_data">896,98€</span>
											</td>
											<td class="pe-0">
												<span class="table_data"><img src="assets/images/more.svg" alt="" srcset=""></span>

											</td>
										</tr>

										<tr class="odd">
											<td class="sorting_1">
												<span class="table_data ps-3">#70443</span>
											</td>
											<td class="pe-0">
												<span class="table_data">SCONTO s.r.o</span>
											</td>
											<td class="pe-0">
												<span class="table_data"><span class="bdg_draft_new">Closed</span></span>
											</td>
											<td class="pe-0">DTD - EGER</td>
											<td class="pe-0">
												<span class="bdg_priced">Return</span>
											</td>
											<td class="pe-0">
												<span class="table_data">15 Mar 2023</span>
											</td>
											<td class="pe-0">
												<span class="table_data">896,98€</span>
											</td>
											<td class="pe-0">
												<span class="table_data"><img src="assets/images/more.svg" alt="" srcset=""></span>

											</td>
										</tr>
										<tr class="even">
											<td class="sorting_1">
												<span class="table_data ps-3">#70443</span>
											</td>
											<td class="pe-0">
												<span class="table_data">SCONTO s.r.o</span>
											</td>
											<td class="pe-0">
												<span class="table_data"><span class="bdg_green">Opened</span></span>
											</td>
											<td class="pe-0">DTD - EGER</td>
											<td class="pe-0">
												<span class="bdg_priced_blue">Receipt</span>
											</td>
											<td class="pe-0">
												<span class="table_data">15 Mar 2023</span>
											</td>
											<td class="pe-0">
												<span class="table_data">896,98€</span>
											</td>
											<td class="pe-0">
												<span class="table_data"><img src="assets/images/more.svg" alt="" srcset=""></span>

											</td>
										</tr>
										<tr class="odd">
											<td class="sorting_1">
												<span class="table_data ps-3">#70443</span>
											</td>
											<td class="pe-0">
												<span class="table_data">SCONTO s.r.o</span>
											</td>
											<td class="pe-0">
												<span class="table_data"><span class="bdg_draft_new">Closed</span></span>
											</td>
											<td class="pe-0">DTD - EGER</td>
											<td class="pe-0">
												<span class="bdg_production">Expense</span>
											</td>
											<td class="pe-0">
												<span class="table_data">15 Mar 2023</span>
											</td>
											<td class="pe-0">
												<span class="table_data">896,98€</span>
											</td>
											<td class="pe-0">
												<span class="table_data"><img src="assets/images/more.svg" alt="" srcset=""></span>

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

				<label for="" class=" form-label date_label">Type</label>

				<div class="col-md-3 mb-4">
					<div class="form-check">
						<input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label order_label" for="">
							Return
						</label>
					</div>
				</div>
				<div class="col-md-3 mb-4">
					<div class="form-check">
						<input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label order_label" for="">
							Expense
						</label>
					</div>
				</div>
				<div class="col-md-10 mb-8">
					<div class="form-check">
						<input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label order_label" for="">
							Receipt
						</label>
					</div>
				</div>
				<div class="col-md-12 mb-8">
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
				<div class="mb-2">
					<label for="" class=" form-label date_label">Type</label>
				</div>
				<div class="col-md-4 mb-8">
					<div class="form-check">
						<input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label order_label" for="">
							Closed
						</label>
					</div>
				</div>
				<div class="col-md-4 mb-8">
					<div class="form-check">
						<input class="form-check-input cstm-check-input" type="checkbox" value="" id="flexCheckDefault">
						<label class="form-check-label order_label" for="">
							Open
						</label>
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
</div <?php include("include/footer.php"); ?>