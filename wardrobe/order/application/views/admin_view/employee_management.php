<?php include("include/header.php"); ?>

<?php
if (!empty($this->session->flashdata('success'))) {

    echo $this->session->flashdata('success');
} elseif (!empty($this->session->flashdata('failed'))) {

    echo $this->session->flashdata('failed');
}
?>
<style>
    .error {
        color: red;
    }
    .border-error{
        border: 1px red solid !important;
    }
</style>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">All Employees</h1>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class=" app-container container-fluid">

                <div class=" align-items-center pb-5 gap-2 gap-md-5">
                    <div class="card-title col-12">
                        <div class="d-flex justify-content-between w-100 search_filter">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-325px ps-14 input_search_font" placeholder="Search employees by name, email" />
                            </div>
                            <div class="d-flex align-items-center btn_index_ch">

                                <div class="my-2 ms-3 margin_remove">
                                    <a href="#" class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold" id="filter_employe_modal_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span class=" me-1">
                                            <img src="<?= base_url() ?>assests/admin2-assets/images/candle.svg" class="img-fluid">
                                        </span>
                                        Filter</a>
                                </div>
                                <div class="my-2 ms-3 margin_remove">
                                    <a href="#" class="btn btn-sm  bg-body  btn-active-color-danger filter_btn fw-bold">
                                        <span class="me-1">
                                            <img src="<?= base_url() ?>assests/admin2-assets/images/timer.svg" class="img-fluid">
                                        </span>
                                        History</a>
                                </div>
                                <div class="ms-3 my-2 margin_remove">
                                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                                        <button type="button" class=" new_order_btn" data-bs-toggle="modal" data-bs-target="#add_employe_modal">
                                            <span><img src="<?= base_url() ?>assests/admin2-assets/images/add.svg" class="img-fluid me-2">Add Employee
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" pt-0" id="datalist">
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
                </div>
                <div class=" pt-0">
                    <div class="load_more_btn">
                        Load more<span><img src="<?= base_url() ?>assests/admin2-assets/images/cloud-change.svg"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!--customer modal-->
<div class="modal fade" tabindex="-1" id="add_employe_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add Customer</h3>

                <!--begin::Close-->
                <div class=" btn-close" data-bs-dismiss="modal" aria-label="Close">

                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body pt-5 pb-2">
                <form action="AdminController/add_employee" method="post" enctype="multipart/form-data" id="formData">
                    <div class="mb-3">
                        <label class="form-label order_form_label">Employee Name</label>
                        <input type="text" class="form-control input_form_new" name="name" id="name" placeholder="Type name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label order_form_label">Email </label>
                        <input type="email" name="email" id="e_email" class="form-control input_form_new" placeholder=" example@email.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label order_form_label">Password</label>
                        <input type="password" name="password" id="password" class="form-control input_form_new" placeholder="Type password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label order_form_label">Confirm Password</label>
                        <input type="password" name="cpassword" id="cpassword" class="form-control input_form_new" placeholder="Re-type password">
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class=" btn_cancel_new" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn_add_new">Add</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>


<!--MODAL-->
<div id="filter_employe_modal" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#filter_employe_modal_toggle" data-kt-drawer-close="#kt_engage_demos_close">
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


                <div><label class=" form-label date_label">DeliveryDate Range</label></div>
                <div class="col-md-6">
                    <div class="mb-0">
                        <label class="form-label">From</label>
                        <input class="form-control date_control" name="date1" placeholder="Pick date rage" id="kt_daterangepicker_3" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-0">
                        <label class="form-label">To</label>
                        <input class="form-control date_control" placeholder="Pick date rage" name="date2" id="kt_daterangepicker_4" />
                    </div>
                </div>
            </div>

        </div>
        <div class="bottom_btn_div px-5">
            <button type="button" onclick="date_filter()" class="btn apply_btn mb-2 w-100">Apply</button>
            <button type="button" class="btn cancel_btn mb-3 w-100" id="kt_engage_demos_close">Cancel</button>
        </div>

    </div>

</div>

<!--MODAL-->
<div id="employe_profile_modal" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#employe_profile_toggle" data-kt-drawer-close="#kt_engage_demos_close">
    <div class="card shadow-none rounded-0 w-100">

        <div class="card-header border-0 ps-5" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold modal_title_header">Profile</h3>
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
        <form method="post" action="get_employee" id="profiledata">
            <div class="card-body cstm_card_body" id="kt_engage_demos_body">
                <div class="d-flex btn_8gap mb-5">
                    <div class="frame_filter mt-1">
                        <img src="<?= base_url() ?>assests/admin2-assets/images/frame.svg">
                    </div>
                    <div class="">
                        <div class="order_filter_name">Name</div>
                        <div class="order_filter_name1" id="uname"></div>
                    </div>
                </div>
                <div class="d-flex btn_8gap mb-5">
                    <div class="frame_filter mt-1">
                        <img src="<?= base_url() ?>assests/admin2-assets/images/email_filter.svg">
                    </div>
                    <div class="">
                        <div class="order_filter_name">Email</div>
                        <div class="order_filter_name1" id="uemail"></div>
                    </div>
                </div>
                <div class="d-flex btn_8gap mb-5">
                    <div class="frame_filter mt-1">
                        <img src="<?= base_url() ?>assests/admin2-assets/images/timer_dark.svg">
                    </div>
                    <div class="">
                        <div class="order_filter_name">Account Created on</div>
                        <div class="order_filter_name1" id="udate">15 Jun 2023, 12:30</div>
                    </div>
                </div>
                <hr />
                <div class="d-flex justify-content-between align-items-center my-5 cursor-pointer" id="change_password_modal_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <div class="d-flex btn_8gap align-items-center">
                        <div class="frame_filter mt-1">
                            <img src="<?= base_url() ?>assests/admin2-assets/images/lock_dark.svg">
                        </div>
                        <div class="">
                            <div class="order_filter_name">Change Password</div>
                        </div>
                    </div>
                    <div>
                        <img src="<?= base_url() ?>assests/admin2-assets/images/arrow-right.svg">
                    </div>
                </div>

            </div>

            <div class="bottom_btn_div px-5">

                <button type="button" class="btn cancel_btn mb-3 w-100" data-bs-toggle="modal" data-bs-target="#delete_employe_account" id="delete_btn_card">Delete Account</button>

            </div>
        </form>
    </div>

</div>

<!--MODAL-->
<div id="change_password_modal" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#change_password_modal_toggle" data-kt-drawer-close="#kt_engage_demos_close">
    <div class="card shadow-none rounded-0 w-100">

        <div class="card-header border-0 ps-5" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold modal_title_header"> <span class="me-4" id="passwordSidemodal"> <img src="<?= base_url() ?>assests/admin2-assets/images/arrow-left_black.svg" class="img-fluid cursor-pointer"></span>Change Password</h3>
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
                <form action="<?php echo base_url(); ?>AdminController/changePassword" method="POST" enctype="multipart/form-data" id="uformData">
                    <div class="col-md-12">
                        <div class="mb-5">
                            <label for="" class=" form-label order_form_label">New Password</label>
                            <input type="password" name="npassword" id="npassword" class="form-control input_form_new" placeholder="Type password" />
                            <?php echo form_error('npassword'); ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-5">
                            <label for="" class=" form-label order_form_label">Type password</label>
                            <input type="password" name="cpassword" id="cpassword" class="form-control input_form_new" placeholder="Re-type password" />
                            <?php echo form_error('cpassword'); ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <input type="hidden" name="id" id="cid">
                            <button type="update" name="update" value="update" class="btn update_btn mb-2 w-100">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>


<!--delete employe modal-->
<div class="modal fade" tabindex="-1" id="delete_employe_account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Delete Employee</h3>
                <div class=" btn-close cursor-pointer" data-bs-dismiss="modal" aria-label="Close">
                </div>

            </div>

            <div class="modal-body pt-5 pb-2">
                <p class="modal_p">Are you sure you want to delete this account?</p>
            </div>
            <input type="hidden" name="id" id="wid">
            <div class="modal-footer border-0 pt-0">
                <button type="button" class=" btn_cancel_new" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn_add_new " id="kt_docs_sweetalert_basic" onclick="pro_delete()" data-bs-dismiss="modal" aria-label="Close">Delete</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
<script>
    $(document).on("click", "#passwordSidemodal", function() {
        $("#change_password_modal").removeClass('drawer-on');
        $(".drawer-overlay:not(:first)").hide();
    })
</script>
<script>
    $(document).on("click", "#delete_btn_card", function() {
        $("#employe_profile_modal").removeClass('drawer-on');
        $(".drawer-overlay").hide();
    })
</script>
<script>
    const button = document.getElementById('kt_docs_sweetalert_basic');

    button.addEventListener('click', e => {
        e.preventDefault();

        Swal.fire({
            text: "Account deleted",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Done",
            preConfirm: () => {
                location.reload();
            },
            customClass: {
                confirmButton: "btn_add_new"
            }
        });
    });
</script>

<script type="text/javascript">
    //edit function start here
    function getFun(id) {
        let ename = $('#ename-' + id).text();
        $('#uname').text(ename)

        let email = $('#email-' + id).text();
        $('#uemail').text(email)

        let edate = $('#edate-' + id).text();
        $('#udate').text(edate)

        $('#wid').val(id);
        $('#cid').val(id);
    }
</script>

<script type="text/javascript">
    function pro_delete() {
        let id = $('#wid').val();

        $.ajax({
            url: "<?php echo base_url(); ?>AdminController/delete_profile",
            type: "Post",
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(data) {

                if (data == 1) {
                    $('#text_msg1').text('Profile Deleted Successfully');
                    $('#msg').html(data);
                    $('#rmv' + id).remove();

                }

            }
        });
    }
</script>

<script>
    $("#formData").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
                remote: {
                    url: "<?php echo base_url('AdminController/chk_duplicate') ?>",
                    type: "post",
                    data: {
                        email: function() {
                            return $('#e_email').val();
                        }
                    },
                }
            },
            password: {
                required: true,
                // digits: true,
                maxlength: 60,
            },
            cpassword: {
                required: true,
                // digits: true,
                maxlength: 60,
                equalTo: "#password",
            },
        },
        messages: {
            name: {
                required: "Enter Employee Name",
            },
            email: {
                email: "This does not appear to be a valid email",
                required: "Enter Employee Email",
                remote: "This email is already exist.",
            },
            password: {
                required: "Enter password",
                // digits: "Enter numbers only",
            },
            cpassword: {
                required: "Enter Re-Type Password",
                // digits: "Enter numbers only",
                equalTo: "Password don't matched",
            },
        },
        highlight: function(element) {
            $(element).addClass("border-error");
        },
        unhighlight: function(element) {
            $(element).removeClass("border-error");
        },
    });
</script>
<script>
    $("#uformData").validate({
        rules: {
            npassword: {
                required: true,
                maxlength: 60,
            },
            cpassword: {
                required: true,
                maxlength: 60,
                equalTo: "#npassword",
            },
        },
        messages: {
            npassword: {
                required: "Enter your new password",
            },
            cpassword: {
                required: "Enter Re-Type Password",
                equalTo: "Password don't matched",
            },
        },
    });
</script>
<script>
    function date_filter() {
        let sdate = $('#kt_daterangepicker_3').val()
        let edate = $('#kt_daterangepicker_4').val()
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>AdminController/employee_date_filter",
            data: {
                sdate: sdate,
                edate: edate
            },
            dataType: "text",
            cache: false,
            success: function(data) {
                $('#datalist').html(data);
                $('#kt_ecommerce_products_table').DataTable({
                    retrieve: true,
                });
            }
        });
    }
</script>

<?php include("include/footer.php"); ?>