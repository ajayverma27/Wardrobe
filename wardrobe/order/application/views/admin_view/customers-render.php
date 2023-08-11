<table class="table table-row-bordered gy-5 table-striped border-0" id="kt_ecommerce_products_table">
    <thead>
        <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
            <th class="min-w-200px table_heading ps-3">Customer Name</th>
            <th class="min-w-175px table_heading">Email</th>
            <th class="min-w-150px table_heading text-center">Orders Assigned </th>
            <th class="min-w-250px table_heading">Recent Delivery</th>
            <th class="min-w-125px table_heading"></th>

        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
        <?php
        foreach ($user_data as $user_hist) {
            $order_count = $this->Common_model->row_counts('order', array('user_id' => $user_hist->id));
        ?>
            <tr>
                <td>
                    <span class="table_data ps-3"><?= $user_hist->company ?></span>
                </td>
                <td class="pe-0">
                    <span class="table_data"><?= $user_hist->email ?></span>
                </td>
                <td class="pe-0 text-center">
                    <span class="table_data"><?= $order_count ?></span>
                </td>

                <td class="pe-0">
                    <span class="table_data"><?= $user_hist->created_at ?></span>
                </td>
                <td class="pe-0">
                    <a href="<?= base_url('customer_management_profile/') ?><?= $user_hist->id ?>"> <span class="table_heading me-2">Profile</span><span><img src="<?= base_url() ?>assests/admin2-assets/images/export-black.svg" class="img-fluid "></span></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>