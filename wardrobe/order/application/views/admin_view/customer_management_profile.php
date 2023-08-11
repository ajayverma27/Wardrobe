<?php include("include/header.php"); ?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main"> 
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar pt-lg-6 pt-3">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="w-100 d-flex  justify-content-between mobile_view align-items-center">
                    <div>
                        <ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold mb-4">
                            <li class="breadcrumb-item"><span class="order-breadcrumb">All Customers</span></li>
                            <img src="<?=base_url()?>assests/admin2-assets/images/arrow-right.svg" alt="" srcset="">
                            </span>
                            <li class="breadcrumb-item ms-1"><span class="New_Order">Profile</span></li>

                        </ol>
                    </div>
                </div>

            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="">

                    <div class="col-12 pb-5">
                        <div class="d-flex justify-content-between w-100 search_filter">
                            <div class="col-md-9 d-flex flex-column justify-content-end">
                                <h5 class="customer_profile_name"><?=$user_data->company?><span class="box-p1 ms-2 cursor-pointer" id="view_order_modal_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" onclick="user_detail(<?=$user_data->id?>)">Details <img src="<?=base_url()?>assests/admin2-assets/images/E-shop.svg" alt="" srcset=""></span></h5>
                            </div>
                            <div class="col-md-3">
                                <div class=" float-end gap-lg-3 btn_margin_top">
                                    <button type="button" class=" new_order_btn">
                                        Send Notification<span><img src="<?=base_url()?>assests/admin2-assets/images/send-notification.svg" class="img-fluid me-2"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <table class="table table-row-bordered gy-5 table-striped border-0" id="kt_ecommerce_products_table">
                            <thead>
                                <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                    <th class="min-w-200px table_heading ps-3">Order Name</th>
                                    <th class="min-w-250px table_heading">Date</th>
                                    <th class="min-w-300px table_heading">Price</th>
                                    <th class="min-w-150px table_heading"></th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <?php
                                foreach($order_data as $ord_dta){
                                    $product_data = $this->Common_model->get_singel("wardrobe_products",array("id"=>$ord_dta->product_id));
                                ?>
                                <tr>
                                    <td>
                                        <span class="table_data ps-3"><?php if(!empty($product_data->name)){ echo $product_data->name; } ?></span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"><?php if(!empty($ord_dta->created_at)){ echo $ord_dta->created_at; } ?></span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_data"><?php if(!empty($product_data->price)){ echo $product_data->price; }else{ echo 0; } ?>€</span>
                                    </td>
                                    <td class="pe-0">
                                        <span class="table_heading me-2 cursor-pointer">View Order</span><span><img src="<?=base_url()?>assests/admin2-assets/images/export-black.svg" class="img-fluid "></span>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="load_more_btn">
                        Load more<span><img src="<?=base_url()?>assests/admin2-assets/images/cloud-change.svg"></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--MODAL-->
<form action="<?=base_url('AdminController/delete_user')?>" method="post">
<div id="view_order_modal" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#view_order_modal_toggle" data-kt-drawer-close="#kt_engage_demos_close">

    <div class="card shadow-none rounded-0 w-100">

        <div class="card-header border-0 ps-5" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold modal_title_header">Details</h3>
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
            <div class="d-flex btn_8gap mb-5">
                <div class="frame_filter mt-1">
                    <img src="<?=base_url()?>assests/admin2-assets/images/frame.svg">
                </div>
                <div class="">
                    <div class="order_filter_name">Name</div>
                    <div class="order_filter_name1" id="name"></div>
                </div>
            </div>
            <input type="hidden" name="user_id" id="user_id">
            <div class="d-flex btn_8gap mb-5">
                <div class="frame_filter mt-1">
                    <img src="<?=base_url()?>assests/admin2-assets/images/email_filter.svg">
                </div>
                <div class="">
                    <div class="order_filter_name">Email</div>
                    <div class="order_filter_name1" id="email"></div>
                </div>
            </div>
            <div class="d-flex btn_8gap mb-5">
                <div class="frame_filter mt-1">
                    <img src="<?=base_url()?>assests/admin2-assets/images/simcard.svg">
                </div>
                <div class="">
                    <div class="order_filter_name">Identification Number</div>
                    <div class="order_filter_name1" id="id_number"></div>
                </div>
            </div>
            <div class="d-flex btn_8gap mb-5">
                <div class="frame_filter mt-1">
                    <img src="<?=base_url()?>assests/admin2-assets/images/mobile.svg">
                </div>
                <div class="">
                    <div class="order_filter_name">Phone Number</div>
                    <div class="order_filter_name1" id="phone"></div>
                </div>
            </div>
        </div>
        <div class="bottom_btn_div px-5">
            <button type="submit" class="btn cancel_btn mb-3 w-100">Delete Account</button>
        </div>

    </div>

</div>
</form>
<?php include("include/footer.php"); ?>

<script>
    function user_detail(id){
        $.ajax({
            url: "<?php echo base_url(); ?>AdminController/get_user_detail",
            dataType: 'json',
            method: "POST",
            data: {
                id: id
            },
            success: function(data){
                $('#user_id').val(data.user_data.id);
                $('#name').text(data.user_data.company);
                $('#email').text(data.user_data.email);
                $('#id_number').text(data.user_data.id_number);
                $('#phone').text(data.user_data.phone);
            }
        });
    }
</script>