<?php include("include/header.php"); ?>

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

	<div class="flex-column flex-column-fluid">

		<div id="kt_app_toolbar" class=" py-3 py-lg-6">

			<div id="kt_app_toolbar_container" class="app-container container-fluid ">

				<div class="w-100 d-flex justify-content-between mobile_view align-items-center">
					<div class="mb-7">
						<ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold">
							<li class="breadcrumb-item"><span class="order-breadcrumb">Order Management</span></li>
							<img src="<?= base_url() ?>assests/admin2-assets/images/arrow-right.svg" alt="" srcset="">
							</span>
							<li class="breadcrumb-item ms-1"><span class="New_Order">Order #70443</span></li>
						</ol>
					</div>
					<div class="d-flex btn_8gap mb-7">
						<?php
						if (!empty($report->problem_type)) {
							if ($report->problem_type == 1) { ?>
								<div class="order_refund_btn">
									<span class="export_span">This order has a refund</span>
								</div>
								<div class="export_div"><span class="export_span">View Refund</span></div>
							<?php } else if ($report->problem_type == 2) { ?>
								<div class="order_complaint_btn">
									<span class="complaint_span">This order has a complaint</span>
								</div>
								<div class="export_div"><span class="export_span">View Complaint</span></div>
							<?php } ?>
						<?php } else { ?>
							<div class="export_div" style="display:none"><span class="export_span"></span></div>
						<?php } ?>
						<a href="<?=base_url('generate_pdf')?>"><div class="export_div_background">
							<img src="<?= base_url() ?>assests/admin2-assets/images/export_white.svg" alt="" srcset=""><span class="export_span export_span_color">Export</span>
						</div></a>
						<div class="export_div d-none">
							<img src="<?= base_url() ?>assests/admin2-assets/images/E-shop.svg" alt="" srcset=""><span class="export_span">Export</span>
						</div>
					</div>

				</div>
				<div class="d-flex align-baseline mobile_view">
					<div class="col-md-9 col-lg-9 mb-7">
						<table class="table mb-0">
							<tbody>
								<tr>
									<td class="py-1 order_div_width"><span class="order_name">Customer Name</span></td>
									<td class="modal_gap py-1"><span class="py-1">:</span> <span class=" order_modal_data"><?= $users_data->company ?></span><span class="box-p1 ">View Profile <img src="<?= base_url() ?>assests/admin2-assets/images/E-shop.svg" alt="" srcset=""></span></td>
								</tr>
								<tr>
									<td class="py-1 order_div_width"><span class="order_name">Delivery Date</span></td>
									<td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data"><?php echo date("d M Y", strtotime($order_data->delivery_date)) ?></span></td>

								</tr>
								<tr>
									<td class="py-1 order_div_width"><span class="order_name">Transport Type</span></td>
									<td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data">
											<?php
											if (!empty($order_data->transport_type)) {
												if ($order_data->transport_type == 1) {
													echo "Buyer";
												} else if ($order_data->transport_type == 2) {
													echo "Supplier";
												}
											} else {
												echo "";
											} ?>
									</td>
								</tr>
								<tr>
									<td class="py-1 order_div_width"><span class="order_name">Delivery Address</span></td>
									<td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data"><?= $users_data->address . ',' . $users_data->city . ',' . $users_data->zip_code ?></span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="d-flex order_page_gap">
							<div>
								<label class="form-label order_form_label">Discount</label>
								<input type="text" class="form-control" id="discount_percent" value="">
							</div>
							<div>
								<label class="form-label order_form_label">Price Coefficient</label>
								<input type="text" id="price_coefficient" class="form-control" value="">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<h6 class="avail_document mb-4">Available Documents</h6>
						<div class="d-flex order_page_gap1">
							<div class="align-items-center d-flex">
								<span><img src="<?= base_url() ?>assests/admin2-assets/images/Group.png" class="img-fluid avail_document_img"></span><span class="ms-2 document_name">Delivery Note</span>
							</div>
							<div class="align-items-center d-flex">
								<span><img src="<?= base_url() ?>assests/admin2-assets/images/Group.png" class="img-fluid avail_document_img"></span><span class="ms-2 document_name">Invoice</span>
							</div>
							<div class="align-items-center d-flex">
								<span><img src="<?= base_url() ?>assests/admin2-assets/images/Group.png" class="img-fluid avail_document_img"></span><span class="ms-2 document_name">Cutting Plans</span>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-10">
								<div class="row">
									<div class="col-md-5">
										<div class="mb-0 mobile_margin_label">
											<label class="form-label">From</label>
											<input class="form-control input_order_height" placeholder="Pick date rage" id="kt_daterangepicker_3" />
										</div>
									</div>
									<div class="col-md-5">
										<div class="mb-0 mobile_margin_label">
											<label class="form-label">To</label>
											<input class="form-control input_order_height" placeholder="Pick date rage" id="kt_daterangepicker_4" />
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="div_right">
									<h6 class="status_head mb-4">Status</h6>
									<div class="card-toolbar">
										<button class=" border-0  order_draft_button" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
											<?php
											if ($order_data->order_status == 1) { ?>
												<span class="bdg_draft">Draft</span>
											<?php } elseif ($order_data->order_status == 2) { ?>
												<span class="bdg_production">In Production</span>
											<?php } elseif ($order_data->order_status == 5) { ?>
												<span class="bdg_priced">Pending</span>
											<?php } elseif ($order_data->order_status == 4) { ?>
												<span class="bdg_completed">Completed</span>
											<?php } ?>

										</button>
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded coustm_dropdown coustm_dropdown_order " data-kt-menu="true">
											<div class="menu-item draft_status" <?php if($order_data->order_status == 1){ echo "style='display:none'"; } ?>>
												<a href="#" onclick="status_update(1,<?= $this->uri->segment(2) ?>)" class="menu-link cstm_menu_hover overview_text">Draft</a>
											</div>
											<div class="menu-item production_status" <?php if($order_data->order_status == 2){ echo "style='display:none'"; } ?>>
												<a href="#" onclick="status_update(2,<?= $this->uri->segment(2) ?>)" class="menu-link cstm_menu_hover overview_text">In Production</a>
											</div>
											<div class="menu-item priced_status" <?php if($order_data->order_status == 5){ echo "style='display:none'"; } ?>>
												<a href="#" onclick="status_update(5,<?= $this->uri->segment(2) ?>)" class="menu-link cstm_menu_hover  overview_text">Pending</a>
											</div>
											<div class="menu-item completed_status" <?php if($order_data->order_status == 4){ echo "style='display:none'"; } ?>>
												<a href="#" onclick="status_update(4,<?= $this->uri->segment(2) ?>)" class="menu-link cstm_menu_hover overview_text">Completed</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-5">
					<div class="table-responsive">
						<table class="table table-row-bordered gy-5 border-0 mt-9 table-responsive">
							<thead>
								<tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
									<th class="min-w-250px ps-4 table_heading">Product Name</th>
									<th class="min-w-200px table_heading">Price</th>
									<th class="min-w-350px table_heading text-center">MO Discount</th>
									<th class="min-w-200px table_heading">Action</th>
								</tr>
							</thead>
							<tbody class="fw-semibold text-gray-600">
								<?php if ($order_detail) {
									$pname = '';
									$pimage = '';
									$discount = '';
									$gtotal = 0;
									$vat_total = 0;
									$dis_total = 0;
									$total_discount_percent = 0;
									foreach ($order_detail as $details) {
										if ($details->sub_catid > 0) {
											$product_data = $this->Common_model->get_singel("wardrobe_subcategory", array('id' => $details->sub_catid));
											$pname = $product_data->name;
											$pimage = $product_data->image;
											$discount = 0;

											$product_details = json_decode($details->product_details);
											$frame_data = $this->Common_model->get_singel('frame', array('id' => $product_details->frame));
											$typea_data = $this->Common_model->get_singel('type_a', array('id' => $product_details->typea));
											$typeb_data = $this->Common_model->get_singel('type_b', array('id' => $product_details->typeb));
											$dtd_data = $this->Common_model->get_singel('sunmica_price', array('id' => $product_details->dtdm));
											$glass_data = $this->Common_model->get_singel('sunmica_price', array('id' => $product_details->glassm));

											$pprice = $frame_data->price + $typea_data->price + $typeb_data->price + $dtd_data->price + $glass_data->price;
											$new_pprice = $details->quantity * ($frame_data->price + $typea_data->price + $typeb_data->price + $dtd_data->price + $glass_data->price);
										} else if ($details->product_id > 0) {
											$product_data = $this->Common_model->get_singel("wardrobe_products", array('id' => $details->product_id));
											$pname = $product_data->name;
											$pprice = $product_data->price;
											$new_pprice = $details->quantity * $product_data->price;
											$pimage = $product_data->image;
											$discount = $product_data->discount;
											$total_discount_percent = $total_discount_percent + ($product_data->discount * $details->quantity);
											$dis_total = $dis_total + ($product_data->discount_price * $details->quantity);
										} else {
											$pdetail = json_decode($details->product_details);
											$pimage = $pdetail->fname;
											$pname = 'Custom Order';
											$discount = 0;
										}

										$gtotal = $gtotal + $new_pprice;
										$vat_total = $vat_total + (($details->quantity * $pprice * 1.2) / 100);
								?>
										<tr class="verticle_center">
											<td class="align-items-center d-flex image_gap ps-4">
												<span><img src="<?= base_url($pimage) ?>" class="product_img_table"></span>
												<span class="table_data"><?= $pname ?></span>
											</td>
											<td class="pe-0">
												<span class="table_data">$<?= $details->price ?></span>
											</td>

											<td class="pe-0">
												<input type="email" class="bdg_discount form-control mx-auto" value="<?= $discount ?>%" readonly />
											</td>

											<td class="pe-0">
												<span class="table_heading me-2">View Configuration</span><span><img src="<?= base_url() ?>assests/admin2-assets/images/export-black.svg" class="img-fluid "></span>
											</td>

										</tr>
								<?php }
								} ?>

							</tbody>
						</table>
					</div>
				</div>
				<div class="total_bill">
					<div class="d-flex justify-content-between">
						<div>
							<p class="total_bill_p">Subtotal</p>
							<p class="total_bill_p">VAT</p>
							<p class="total_bill_p">Total Discount</p>
						</div>
						<input type="hidden" value="<?php echo number_format($dis_total, 2) ?>" id="tot_discount">
						<input type="hidden" value="<?php echo number_format($total_discount_percent, 2) ?>" id="tot_discount_percent">
						<div>
							<p class="total_bill_p"><?php echo number_format($gtotal, 2) ?>€</p>
							<p class="total_bill_p"><?php echo number_format($vat_total, 2) ?>€</p>
							<p class="total_bill_p"><?php echo number_format($dis_total, 2) ?>€</p>
						</div>
					</div>
					<hr />
					<div class="d-flex justify-content-between">
						<p class="total_bill_p1">Total price</p>
						<p class="total_bill_p1"><?php echo number_format($gtotal + $vat_total - $dis_total, 2) ?>€</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mt-5">
						<!-- <div>
							<span class="box-p1 ">Send Notification <img src="<?= base_url() ?>assests/admin2-assets/images/E-shop.svg" alt="" srcset=""></span>
						</div> -->
						<div class="align-items-center d-flex cursor-pointer">
							<span class="report_span" id="notification_index_modal_toggle">Send Notification</span><span class="ms-1"><img src="<?= base_url() ?>assests/admin2-assets/images/E-shop.svg" alt="" srcset=""></span>
						</div>
					</div>
					<div class="col-md-6 mt-5">
						<div class="btn_8gap d-flex justify-content-end mobile_change_position">
							<a href="<?=base_url('order_management')?>"><button type="button" class=" cancel_btn_order ">Cancel</button></a>
							<button type="button" class=" anufacturing_btn_order ">Start Manufacturing</button>
						</div>

					</div>
				</div>


			</div>

		</div>
	</div>
</div>

<!--notification modal -->
<form action="<?php echo base_url('AdminController/notification') ?>" method="post">
<div id="notification_index_modal" class="bg-body calendar_modal report_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#notification_index_modal_toggle" data-kt-drawer-close="#kt_engage_demos_close">

	<div class="card shadow-none rounded-0 w-100">

		<div class="card-header border-0 ps-5" id="kt_engage_demos_header">
			<h3 class="card-title fw-bold  modal_title_header">Send Notification</h3>
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
		<input type="hidden" name="id" value="<?=$this->uri->segment(2)?>">
		<div class="card-body cstm_card_body" id="kt_engage_demos_body">
			<div class="row">
				<div><label class=" form-label date_label">Title</label>
					<input type="text" name="title" class="form-control order_no_control" placeholder="Type title" required>
				</div>

				<div class="mt-8">
					<label class=" form-label date_label d-block">Description</label>
					<textarea class="textarea_modal " name="description" placeholder="Write here" required></textarea>
				</div>
			</div>
		</div>
		<div class="bottom_btn_div px-5 mb-2">
			<button type="submit" class="btn apply_btn mb-2 w-100">Send</button>
			<button type="button" class="btn cancel_btn " id="kt_engage_demos_close">Cancel</button>
		</div>


	</div>
</div>
</form>

<?php include("include/footer.php"); ?>

<script>
	function status_update(status, id) {

		if (status == 1) {
			$('.draft_status').hide();
		}else{
			$('.draft_status').show();
		}
		
		if(status == 2){
			$('.production_status').hide();
		}else{
			$('.production_status').show();
		}
		
		if(status == 3){
			$('.priced_status').hide();
		}else{
			$('.priced_status').show();
		}
		
		if(status == 4){
			$('.completed_status').hide();
		}else{
			$('.completed_status').show();
		}

		$.ajax({
			type: "POST",
			url: "<?= base_url() ?>AdminController/status_update",
			data: {
				status: status,
				id: id
			},
			dataType: "json",
			success: function(data) {
				if (data == 1) {
					$('.order_draft_button').html('<span class="bdg_draft">Draft</span>');
				} else if (data == 2) {
					$('.order_draft_button').html('<span class="bdg_production">In Production</span>');
				} else if (data == 5) {
					$('.order_draft_button').html('<span class="bdg_priced">Pending</span>');
				} else if (data == 4) {
					$('.order_draft_button').html('<span class="bdg_completed">Completed</span>');
				}


			}
		});
	}

	let discount = $('#tot_discount').val();
	let discount_percent = $('#tot_discount_percent').val();
	$('#price_coefficient').val(discount);
	$('#discount_percent').val(discount_percent+'%');
</script>