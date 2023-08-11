<div class="row">
	<div class="col-md-6 col-lg-5">
		<table class="table mb-0">
			<tbody>
				<tr>
					<td class="py-1"><span class="order_name">Total price</span></td>
					<td class="modal_gap py-1"><span class="py-1">:</span> <span class=" order_modal_data"><?= $order_data->total_price ?>€</span></td>
				</tr>
				<tr>
					<td class="py-1"><span class="order_name">Order Name</span></td>
					<td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data"><?= $users_data->company ?></span></td>

				</tr>
				<tr>
					<td class="py-1"><span class="order_name">Order Date</span></td>
					<td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data"><?= $order_data->created_at ?> </span></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-6 col-lg-7">
		<table class="table mb-0">
			<tbody>
				<tr>
					<td class="py-1"><span class="order_name">Delivery Date</span></td>
					<td class="modal_gap py-1"><span class="py-1">:</span> <span class=" order_modal_data"><?= $order_data->delivery_date ?> </span></td>
				</tr>
				<tr>
					<td class="py-1"><span class="order_name">Transport Type</span></td>
					<td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data">Buyer</span></td>

				</tr>
				<tr>
					<td class="py-1"><span class="order_name">Delivery Address</span></td>
					<td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data"><?= $users_data->address . ',' . $users_data->city . ',' . $users_data->zip_code ?> </span></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


<div class="row">
	<div class="table-responsive">
		<table class="table table-row-bordered gy-5 border-0 mt-9 table-responsive" id="kt_ecommerce_products_table_1">
			<thead>
				<tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
					<th class="min-w-100px table_heading ps-4">Product Name</th>
					<th class="min-w-100px table_heading">Wholesale (Without VAT)</th>
					<th class="min-w-70px table_heading">Retail (Without VAT)</th>
					<th class="min-w-100px table_heading">MO Discount</th>
					<th class="min-w-100px table_heading">Price after discount</th>
					<!-- <th class="min-w-100px table_heading">Action</th> -->

				</tr>
			</thead>
			<tbody class="fw-semibold text-gray-600">

				<?php if ($order_detail) {
					$pname = '';
					$pimage = '';
					$discount = '';
					foreach ($order_detail as $details) {
						if ($details->sub_catid > 0) {
							$product_data = $this->Common_model->get_singel("wardrobe_subcategory", array('id' => $details->sub_catid));
							$pname = $product_data->name;
							$pimage = $product_data->image;
							$discount = 0;
						} else if ($details->product_id > 0) {
							$product_data = $this->Common_model->get_singel("wardrobe_products", array('id' => $details->product_id));
							$pname = $product_data->name;
							$pimage = $product_data->image;
							$discount = 2;
						} else {
							$pdetail = json_decode($details->product_details);
							$pimage = $pdetail->fname;
							$pname = 'Custom Order';
							$discount = 0;
						}
				?>
						<tr class="verticle_center">
							<td class="align-items-center d-flex image_gap ps-4">
								<span><img src="<?= base_url($pimage) ?>" class="" style="max-width: 30px;"></span>
								<span class="table_data"><?= $pname ?></span>
							</td>
							<td class="pe-0">
								<span class="table_data">$<?= $details->price ?></span>
							</td>
							<td class="pe-0">
								<span class="table_data">$<?= $details->price ?></span>
							</td>
							<td class="pe-0">
								<input type="email" class="form-control bdg_discount" value="<?= $discount ?>%" readonly />
							</td>
							<td class="pe-0">
								<span class="table_data">$<?= ($details->price - $details->discount) ?></span>
							</td>
							<!-- <td class="pe-0">
										<span class="table_heading me-2">View Configuration</span><span><img src="assets/images/export-black.svg" class="img-fluid "></span>
									</td> -->

						</tr>
				<?php }
				} ?>

			</tbody>
		</table>
	</div>
</div>