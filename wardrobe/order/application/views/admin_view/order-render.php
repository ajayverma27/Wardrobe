<table class="table table-row-bordered gy-5 table-striped border-0" id="admin_table">
    <thead>
        <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
            <th class="min-w-75px table_heading ps-3">Order No</th>
            <th class="min-w-125px table_heading">Customer Name</th>
            <th class="min-w-100px table_heading">Status</th>
            <th class="min-w-100px table_heading">Delivery Date</th>
            <th class="min-w-100px table_heading">Issues</th>
            <th class="min-w-275px table_heading part_item_width">Parts of Items</th>
            <th class="min-w-100px table_heading">Documents</th>
            <th class="min-w-50px table_heading"></th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
        <?php
        foreach ($order_data as $k => $ord_hist) {
            $order_name = $this->Common_model->get_singel("users", array('id' => $ord_hist->user_id));
            // $sql = "SELECT p.name AS name FROM `order` AS o JOIN `order_detail` AS od ON o.id=od.order_id JOIN `wardrobe_products` AS p ON p.id=od.product_id WHERE o.user_id=$ord_hist->user_id";
            // $product_data = $this->db->query($sql)->result();
            $order_detail = $this->Common_model->get_all("order_detail", null, array('order_id' => $ord_hist->id));
        ?>
            <tr class="verticle_center">
                <td>
                    <span class="table_data ps-3">#<?= $ord_hist->order_no ?></span>
                </td>
                <td class="pe-0">
                    <span class="table_data"><?= $order_name->company ?></span>
                </td>
                <td class="pe-0">
                    <?php if ($ord_hist->order_status == 1) { ?>
                        <span class="bdg_draft">Draft</span>
                    <?php } elseif ($ord_hist->order_status == 2) { ?>
                        <span class="bdg_production">In Production</span>
                    <?php } elseif ($ord_hist->order_status == 3) { ?>
                        <span class="bdg_priced">Priced</span>
                    <?php } else { ?>
                        <span class="bdg_completed">Completed</span>
                    <?php } ?>
                </td>
                <td class="pe-0">
                    <span class="table_data"><?= $ord_hist->created_at ?></span>
                </td>
                <td class="pe-0">
                    <span class="table_data"> - </span>
                </td>
                <td class="pe-0 pt-3 pb-2">
                    <?php foreach ($order_detail as $od) {

                        if ($od->sub_catid > 0) {
                            $product_data = $this->Common_model->get_singel("wardrobe_subcategory", array('id' => $od->sub_catid));
                    ?>
                            <div class="bdg_part_item_span"><?php echo $product_data->name; ?></div>
                        <?php

                        } else if ($od->product_id > 0) {
                            $product_data = $this->Common_model->get_singel("wardrobe_products", array('id' => $od->product_id));
                        ?>
                            <div class="bdg_part_item_span"><?php echo $product_data->name; ?></div>
                        <?php
                        } else {
                        ?>
                            <div class="bdg_part_item_span">Custom order</div>
                    <?php
                        }
                    }
                    ?>
                </td>
                <td class="pe-0">
                    <button data-position="bottom" class="tooltip_btn" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="get_order_detail('<?= $ord_hist->id ?>')">
                        <img src="<?= base_url() ?>assests/admin-assets/images/stickynote.svg">
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
                <td class="pe-0 cursor-pointer">
                    <a href="<?= base_url('order_management_details') ?>"><span class="table_data"><img src="<?= base_url() ?>assests/admin2-assets/images/export_table.svg"></span></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>