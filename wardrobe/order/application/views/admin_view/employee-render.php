<table class="table table-row-bordered gy-5 table-striped border-0" id="kt_ecommerce_products_table">
    <thead>
        <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
            <th class="min-w-200px table_heading ps-3">Sno.</th>
            <th class="min-w-200px table_heading ps-3">Employee Name</th>
            <th class="min-w-175px table_heading">Email</th>
            <th class="min-w-150px table_heading text-center">Orders Assigned </th>
            <th class="min-w-250px table_heading">Recent Delivery</th>
            <th class="min-w-125px table_heading"></th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
        <?php
        $x = 1;
        if (!empty($emp)) {
            foreach ($emp as $employee) {
        ?>
                <tr>
                    <td class="pe-0">
                        <span class="table_data ps-3">
                            <?php echo $x++; ?></span>
                    </td>
                    <td class="pe-0" id="ename-<?= $employee->id ?>">
                        <span class="table_data ps-3"><?php echo $employee->name; ?></span>
                    </td>
                    <td class="pe-0" id="email-<?= $employee->id ?>">
                        <span class="table_data"><?php echo $employee->email; ?></span>
                    </td>
                    <td class="pe-0 text-center">
                        <span class="table_data">4</span>
                    </td>
                    <td class="pe-0" id="edate-<?= $employee->id ?>">
                        <span class="table_data"><?php echo $employee->created_at; ?></span>
                    </td>
                    <td class="pe-0">
                        <div class="d-flex gap-6">
                            <div class="cursor-pointer" id="employe_profile_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" onclick="getFun(<?php echo $employee->id; ?>)">
                                <span class="table_heading me-2">Profile</span><span><img src="<?= base_url() ?>assests/admin2-assets/images/export-black.svg" class="img-fluid "></span>
                            </div>
                            <div>
                                <span class="table_heading me-2">Work Schedule</span><span><img src="<?= base_url() ?>assests/admin2-assets/images/export-black.svg" class="img-fluid "></span>
                            </div>
                        </div>
                    </td>
                </tr>
        <?php }
        } ?>
    </tbody>
</table>