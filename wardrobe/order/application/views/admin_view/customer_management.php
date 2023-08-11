<?php include("include/header.php"); ?>
<style>
    .error{
        color:red;
    }
    .border-error{
        border: 1px red solid !important;
    }
</style>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 pt-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="sales_heading">All Customers</h1>
                </div>
            </div>
        </div> 
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-fluid">

                <div class=" col-12 pb-3 ">
                    <div class="d-flex justify-content-between w-100 search_filter">
                        <div class="d-flex align-items-center position-relative my-1 input_search_mobile">
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                </svg>
                            </span>
                            <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-325px ps-14 input_search_font" placeholder="Search customers by name, email" />
                        </div>
                        <div class="d-flex align-items-center btn_index_ch">
                            <div class="my-2 ms-3 margin_remove">
                                <a href="#" class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold" id="filter_customer_modal_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                                        <img src="<?=base_url()?>assests/admin2-assets/images/candle.svg" class="img-fluid">
                                    </span>
                                    Filter</a>
                            </div>
                            <div class="ms-3 my-2 margin_remove">
                                <div class="d-flex align-items-center gap-2 gap-lg-3">
                                    <button type="button" class=" new_order_btn" data-bs-toggle="modal" data-bs-target="#kt_modal_stacked_1">
                                        <span><img src="<?=base_url()?>assests/admin2-assets/images/add.svg" class="img-fluid me-2">Add Customer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="filter-order-data">
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
                            foreach ($user_data as $user_hist){ 
                                $order_count = $this->Common_model->row_counts('order',array('user_id'=>$user_hist->id));
                            ?>
                            <tr>
                                <td>
                                    <span class="table_data ps-3"><?=$user_hist->company?></span>
                                </td>
                                <td class="pe-0">
                                    <span class="table_data"><?=$user_hist->email?></span>
                                </td>
                                <td class="pe-0 text-center">
                                    <span class="table_data"><?=$order_count?></span>
                                </td>

                                <td class="pe-0">
                                    <span class="table_data"><?=$user_hist->created_at?></span>
                                </td>
                                <td class="pe-0">
                                    <a href="<?=base_url('customer_management_profile/')?><?=$user_hist->id?>"> <span class="table_heading me-2">Profile</span><span><img src="<?=base_url()?>assests/admin2-assets/images/export-black.svg" class="img-fluid "></span></a>
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
<!--customer modal-->
<form action="AdminController/add_customer" method="post" id="kt_sign_in_form" class="error">
<div class="modal fade" tabindex="-1" id="kt_modal_stacked_1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add Customer</h3>


                <div class=" btn-close cursor-pointer" data-bs-dismiss="modal" aria-label="Close">

                </div>

            </div>
 
            <div class="modal-body pt-5 pb-2">
                <div class="mb-3">
                    <label class="form-label order_form_label">Customer Name</label>
                    <input type="text" name="name" class="form-control input_form_new" placeholder="Type name">
                </div>
                <div class="mb-3">
                    <label class="form-label order_form_label">Email </label>
                    <input type="email" name="email" class="form-control input_form_new" placeholder=" example@email.com">
                </div>
                <div class="mb-3">
                    <label class="form-label order_form_label">Password</label>
                    <input type="password" name="password" id="password" class="form-control input_form_new" placeholder="Type password">
                </div>
                <div class="mb-3">
                    <label class="form-label order_form_label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control input_form_new" placeholder="Re-type password">
                </div>

            </div>
            
            <div class="modal-footer border-0 pt-0">
                <button type="button" class=" btn_cancel_new" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn_add_new ">Add</button>
            </div>
        </div>
    </div>
</div>
</form>


<!--MODAL-->
<div id="filter_customer_modal" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#filter_customer_modal_toggle" data-kt-drawer-close="#kt_engage_demos_close">

    <div class="card shadow-none rounded-0 w-100">

        <div class="card-header border-0 ps-5" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold modal_title_header">Filter by</h3>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-10">
                        <label for="" class=" form-label order_form_label">Email</label>
                        <input type="email" id="user-email" class="form-control input_form_new" placeholder="Type email here" />
                    </div>
                </div>

                <div><label class=" form-label date_label">Date Range</label></div>
                <div class="col-md-6">
                    <div class="mb-0">
                        <label class="form-label">From</label>
                        <input class="form-control date_control" placeholder="Pick date rage" id="kt_daterangepicker_3" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-0">
                        <label class="form-label">To</label>
                        <input class="form-control date_control" placeholder="Pick date rage" id="kt_daterangepicker_4" />
                    </div>
                </div>
            </div>

        </div>
        <div class="bottom_btn_div px-5">
            <button type="button" class="btn apply_btn mb-2 w-100" onclick="filter_apply()">Apply</button>
            <button type="button" class="btn cancel_btn mb-3 w-100" id="kt_engage_demos_close">Cancel</button>
        </div>

    </div>

</div>
<?php include("include/footer.php"); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>

<script>
    $("#kt_sign_in_form").validate({
    rules: {
        name: {
            required: true,
        },
        email: {
            required: true,
            email: true,
            remote: {
                url: "<?php echo base_url('Admin_Login/chk_duplicate') ?>",
                type: "post",
                data: {
                    email: function() {
                        return $('#email').val();
                    }
                },
            }
        },
        password: {
            required: true,
        },
        cpassword: {
            required: true,
            equalTo: '#password',
        },
    },
    messages: {
        name: {
            required: "Enter company name",
        },
        email: {
            email: "This does not appear to be a valid email",
            required: "Enter your email",
            remote:"This email is already exist."
        },
        password: {
            required: "Enter your password",
        },
        cpassword: {
            required: "Re-type ypur password",
            equalTo: "Please enter the same password as above",
        },
    },
    highlight: function (element) {
        $(element).addClass("border-error");
    },
    unhighlight: function (element) {
        $(element).removeClass("border-error");
    },
});


function filter_apply() {
    let email = $('#user-email').val()
    let sdate = $('#kt_daterangepicker_3').val()
    let edate = $('#kt_daterangepicker_4').val()
    $.ajax({
        type: "POST",
        url: "<?= base_url() ?>AdminController/customer_filter_order",
        data: {
            email: email,
            sdate: sdate,
            edate: edate
        },
        dataType: "text",
        cache: false,
        success: function(data) {
            $('.filter-order-data').html(data);
            $('#kt_ecommerce_products_table').DataTable({
                retrieve: true,
            });
        }
    });
}
</script>

