        <table class="table table-row-bordered gy-5 table-striped border-0" id="kt_ecommerce_products_table">
			<thead>
				<tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
					<th class="min-w-100px table_heading ps-3">S No.</th>
					<th class="min-w-100px table_heading">Order No</th>
					<th class="min-w-100px table_heading">Order Name</th>
					<th class="min-w-100px table_heading">Status</th>
					<th class="min-w-100px table_heading">Created Date</th>
					<th class="min-w-100px table_heading">Price</th>
					<th class="min-w-70px table_heading">Action</th>
				</tr>
			</thead>
			<tbody class="fw-semibold text-gray-600">
			<?php 
			if($order_data){
			foreach ($order_data as $k=>$ord_hist){ 
				?>
				<tr>
					<td>
						<span class="table_data ps-3"><?=($k+1)?></span>
					</td>
					<td>
						<span class="table_data ps-3">#<?=$ord_hist->order_no?></span>
					</td>
					<td class="pe-0">
						<span class="table_data"><?=$order_name->company?></span>
					</td>
					<td class="pe-0">
						<?php if($ord_hist->order_status == 1){ ?>
							<span class="bdg_draft">Draft</span>
							<?php }elseif($ord_hist->order_status == 2){ ?>
								<span class="bdg_production">In Production</span>
							<?php }elseif($ord_hist->order_status == 3){ ?>
								<span class="bdg_priced">Priced</span>
							<?php }else{ ?>
								<span class="bdg_completed">Completed</span>
							<?php } ?>
					</td>
					<td class="pe-0">
						<span class="table_data"><?=$ord_hist->created_at?></span>
					</td>
					<td class="pe-0">
						<span class="table_data"><?=$ord_hist->total_price?>€</span>
					</td>
					<td class="pe-0">
						<button data-position="bottom" class="tooltip_btn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="get_order_detail('<?=$ord_hist->id?>')">
							<img src="<?=base_url()?>assests/admin-assets/images/stickynote.svg">
							<!-- <span class="toolTip tooltip_span">
								<h6 class="tooltip_h6">What’s include ?</h6>
								<ul class="mb-0">
									<li class="tooltip_li">Delivery note</li>
									<li class="tooltip_li">Invoice</li>
								</ul>
								<span class="tooltip_p mb-0">Click on the row to view details</span>
							</span> -->
						</button>
					</td>
				</tr>
			<?php } }else{ ?>
				<tr>
					<td colspan="6">No Data Found</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>