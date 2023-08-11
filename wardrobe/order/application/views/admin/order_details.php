<style>
    .error{
        color:red;
    }
    .border-error{
        border: 1px red solid !important;
    }
</style>
<?php include("include/header.php"); 
$data = $this->session->userdata('form_data');
?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack" style="border-bottom:1px solid #E2E8F0 ;">

                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-2">


                    <ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold mb-4">
                        <li class="breadcrumb-item"><a href="#" class="order-breadcrumb">Orders</a></li>
                        <img src="assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                        </span>
                        <li class="breadcrumb-item"><a href="#" class="New_Order">New Order</a></li>

                    </ol>
                    <h1 class="page-heading d-flex   fs-3 flex-column justify-content-center order-details_text ">Order Details</h1>
                </div>

            </div>

        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">

            <div id="kt_app_content_container" class="app-container container-fluid">
                <h3 class="card-title align-items-start flex-column mb-5">
                    <span class="card-label genral_text fs-3 mb-1">General Details</span>

                </h3>
                <form action="UserController/order_data" method="post" id="formData">
                    <div class="col-lg-8 col-md-8">
                        <div class="row g-5 g-xl-10 mb-3">
                            <div class="col-lg-6 col-md-6">
                            <?php 
                            $user =  $this->session->userdata('userdata');
                            $udata = $this->Common_model->get_singel('users',array('id'=>$user['users_id'])); ?>
                                <div class="mb-7">
                                    <label for="exampleFormControlInput1" class=" form-label order_label">Order Name</label>
                                    <input type="text" class="form-control order-control" name="order_name" value="<?=$udata->company?>" readonly>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="mb-7">
                                    <label for="exampleFormControlInput1" class="form-label order_label">Expected Delivery Date</label>
                                    <input type="date" name="delivery_date" value="<?php if(!empty($data['delivery_date'])){ echo $data['delivery_date']; }?>" class="form-control order-control error" placeholder="Select delivery date" onclick="this.showPicker();" />
                                    <span class="change_cls"> <img src="assests/admin-assets/images/calendar_new.svg" alt="" srcset=""></span>
                                </div>
                            </div>
                        </div>

                        <h3 class="card-title align-items-start flex-column mb-5">
                            <span class="card-label genral_text fs-3 mb-1">Transportation Handled by</span>

                        </h3>
                        <div class=" check_box_div mb-10">
                        <div class="d-flex">
                            <div class="form-check form-check-custom form-check-red form-check-solid me-8">
                                <input class="form-check-input" name="transport_type" type="radio" value="1" <?php if(!empty($data['transport_type']) == 1){ echo 'checked'; } ?> id="Problem_Type" />
                                <label class="form-check-label checknew_label" for="Problem_Type">
                                Buyer
                                </label>
                            </div>
                            <div class="form-check form-check-custom form-check-red form-check-solid">
                                <input class="form-check-input" name="transport_type" type="radio" value="2" <?php if(!empty($data['transport_type']) == 2){ echo 'checked'; } ?> id="Problem_Type2" />
                                <label class="form-check-label checknew_label" for="Problem_Type2">
                                Supplier
                                </label>
                            </div>
                        </div>
                        </div>
                        <h3 class="card-title align-items-start flex-column mb-5">
                            <span class="card-label genral_text fs-3 mb-1">Delivery Address</span>

                        </h3>
                        <?php
                        $user =  $this->session->userdata('userdata');
                        $user_address = $this->Common_model->get_singel('users',array('id'=>$user['users_id']));

                        if($user_address->zip_code > 0){
                            $zip_code = $user_address->zip_code;
                        }else{
                            $zip_code = '';
                        }

                        if(!empty($user_address->address)){
                            $address = $user_address->address.', ';
                        }else{
                            $address = '';
                        }

                        if(!empty($user_address->city)){
                            $city = $user_address->city.', ';
                        }else{
                            $city = '';
                        }
                        ?>
                        <div class="form-floating mb-5">
                            <input type="text" class="form-control text_control" name="delivery_address" id="floatingInputValue" value="<?=$address.$city.$zip_code?>" />
                            <label for="floatingInputValue" class="text_control2">Home</label>
                            <span class="change_cls"  data-bs-toggle="modal" data-bs-target="#kt_modal_1">Change <img src="assests/admin-assets/images/location.svg" alt="" srcset=""></span>
                            <div class="error-message"></div>
                        </div>

                        <div class="form-floating">

                            <label class="text_label" for="floatingTextarea2">Write here</label>
                            <textarea class="form-control" placeholder="Leave a comment here" name="note" id="floatingTextarea2" style="height: 100px"><?php if(!empty($data['note'])){ echo $data['note']; } ?></textarea>
                            <div class="error-message"></div>
                        </div>
                        <div class="text-center mt-4"><button type="submit" class="btn next_btn">Next <img src="assests/admin-assets/images/next.svg" alt="" srcset="" class="cross_close"></button></div>

                    </div>

                    <div class="modal fade" tabindex="-1" id="kt_modal_1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header ">
                                    <h3 class="modal-title change_address_tittle">Change Delivery Address</h3>

                                    <!--begin::Close-->
                                    <div class=" btn-close" data-bs-dismiss="modal" aria-label="Close">

                                    </div>
                                    <!--end::Close-->
                                </div>

                                <div class="modal-body">
                                    <div class="mb-7">
                                        <label for="exampleFormControlInput1" class=" form-label order_label">Street and Number</label>
                                        <input type="text" class="form-control order-control" id="address" name="address" placeholder="Enter here" />
                                    </div>
                                    <div class="mb-7">
                                    <label for="exampleFormControlInput1" class=" form-label order_label">City</label>
                                        <select class="form-select order-control" id="city" aria-label="Select example" name="city">
                                            <option>Select city</option>
                                            <option value="Bratislava">Bratislava</option>
                                            <option value="Košice">Košice</option>
                                            <option value="Prešov">Prešov</option>
                                            <option value="Žilina">Žilina</option>
                                            <option value="Nitra">Nitra</option>
                                            <option value="Banská Bystrica">Banská Bystrica</option>
                                        </select>
                                    </div>
                                    <div class="mb-7">
                                        <label for="exampleFormControlInput1" class=" form-label order_label">Zip Code</label>
                                        <input type="number" class="form-control order-control" id="zip_code" name="zip_code" placeholder="Enter here" />
                                    </div>
                                </div>

                                <div class="modal-footer border-0">
                                    <button type="button" class="btn modal_cancel_btn " data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn save_modal_btn" id="change_address" data-bs-dismiss="modal">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->

    </div>


</div>

<?php include("include/footer.php"); ?>

<script>
$(document).ready(function () {
    $("#formData").validate({
        rules: {
            delivery_date: {
                required: true,
            },
            delivery_address: {
                required: true,
            },
            transport_type: {
                required: true,
            },
            note: {
                required: true,
            },
        },
        messages: {
            delivery_date: {
                required: "Delivery date is required",
            },
            delivery_address: {
                required: "Address is required",
            },
            transport_type: {
                required: "Transport Type is required",
            },
            note: {
                required: "Note is required",
            },
        },
        errorPlacement: function (error, element) {
            if (element.attr("type") === "radio") {
                error.insertAfter(element.parent().parent());
            }else if (element.attr("name") === "note") {
                error.appendTo(element.parent().find(".error-message"));
            }else if (element.attr("name") === "delivery_address") {
                error.appendTo(element.parent().find(".error-message"));
            }else {
                error.insertAfter(element);
            }
        },
        highlight: function (element) {
            $(element).addClass("border-error");
        },
        unhighlight: function (element) {
            $(element).removeClass("border-error");
        },
        
    });
});
</script>

<script>
    $(document).ready(function() {
      $("#change_address").click(function() {
        var address = $("#address").val();
        var city = $("#city").val();
        var zip_code = $("#zip_code").val();
        $('#floatingInputValue').val(address+', '+city+', '+zip_code);

        $.ajax({
            url: 'UserController/update_user_address',
            method: 'post',
            data: {address:address,city:city,zip_code:zip_code},
            success: function(response) {
            },
        });
      });
    });
</script>