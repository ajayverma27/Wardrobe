<?php include("include/header.php"); ?>
<style>
    .error{
        color:red;
    }
    .border-error{
        border: 1px red solid !important;
    }
</style>

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid ">
        <div id="kt_app_content" class="app-content flex-column-fluid">

            <div id="kt_app_content_container" class="app-container container-fluid">

                <div class="row g-5 g-xl-10">

                    <div class="col-xl-3 col-md-4 mb-xl-10 card_cstm_height" style="border-right: 1px solid #ddd;">

                        <div class="card h-xl-100">
                            <div class="card_body">
                                <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column me-5 mb-3 mb-md-0 fs-6 pt-5">
                                    <li class="nav-item w-100 me-0 mb-4">
                                        <a class="nav-link cstm_nav_link active" data-bs-toggle="tab" href="#kt_vtab_pane_1"><img src="assets/images/discount-circle.svg" class="img_change" alt="" srcset=""> Retails Margins</a>
                                    </li>
                                    <li class="nav-item w-100 me-0 mb-4">
                                        <a class="nav-link cstm_nav_link" data-bs-toggle="tab" href="#kt_vtab_pane_2"><img src="assets/images/lock.svg" class="img_change" alt="" srcset=""> Change Password</a>
                                    </li>
                                    <li class="nav-item w-100 mb-4">
                                        <a class="nav-link cstm_nav_link" data-bs-toggle="tab" href="#kt_vtab_pane_3"><img src="assets/images/confrigator.svg" class="img_change" alt="" srcset=""> Configurators</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-6  mb-5 mb-xl-10">
                        <div class="tab-content pt-5" id="myTabContent" style="overflow-x: hidden;">
                            <div class="tab-pane fade show active" id="kt_vtab_pane_1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-7">
                                            <label for="exampleFormControlInput1" class=" form-label psw_label">Door</label>
                                            <input type="email" class="form-control  psw_control" placeholder="200.00%" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-7">
                                            <label for="exampleFormControlInput1" class=" form-label psw_label">Interior</label>
                                            <input type="email" class="form-control psw_control" placeholder="0.00%" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-7">
                                            <label for="exampleFormControlInput1" class="form-label psw_label">Accessories</label>
                                            <input type="email" class="form-control psw_control" placeholder="0.00%" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-7">
                                            <label for="exampleFormControlInput1" class=" form-label psw_label">Cabinets</label>
                                            <input type="email" class="form-control psw_control" placeholder="0.00%" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-7">
                                            <label for="exampleFormControlInput1" class=" form-label psw_label">Containers</label>
                                            <input type="email" class="form-control psw_control" placeholder="0.00%" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-7">
                                            <label for="exampleFormControlInput1" class="form-label psw_label">AL Door</label>
                                            <input type="email" class="form-control psw_control" placeholder="0.00%" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-7">
                                            <label for="exampleFormControlInput1" class=" form-label psw_label">Profiles</label>
                                            <input type="email" class="form-control psw_control" placeholder="0.00%" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-7">
                                            <label for="exampleFormControlInput1" class=" form-label psw_label">Glass Shelves</label>
                                            <input type="email" class="form-control psw_control" placeholder="0.00%" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-7">
                                            <label for="exampleFormControlInput1" class="form-label psw_label">Reg AL</label>
                                            <input type="email" class="form-control psw_control " placeholder="0.00%" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                                    <form method="post" action="UserController/change_password" id="formData" class="error">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="mb-7 position-relative">
                                                <label for="exampleFormControlInput1" class=" form-label psw_label">Current Password</label>
                                                <input type="text" class="form-control psw_control" placeholder="Type current password" name="old_password" id="old_password">
                                                <img src="assets/images/eye-slash.svg" alt="" class="icon_img" srcset="">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="mb-7 position-relative">
                                                <label for="exampleFormControlInput1" class=" form-label psw_label">New Password</label>
                                                <input type="text" class="form-control psw_control" placeholder="Type new password" name="new_password" id="new_password">
                                                <img src="assets/images/eye-slash.svg" alt="" class="icon_img" srcset="">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="mb-7 position-relative">
                                                <label for="exampleFormControlInput1" class=" form-label psw_label">Re-Type New Password</label>
                                                <input type="text" class="form-control psw_control" placeholder="Re-Type new password" name="confirm_password" id="confirm_password">
                                                <img src="assets/images/eye-slash.svg" alt="" class="icon_img" srcset="">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="text-center"><button type="submit" class="btn update_btn">Update</a></div>
                                        </div>
                                    </div>
                                    <!-- <div class="update_popup" style="display:none;">
                                        <div class="d-flex justify-content-around">
                                            <div class="p_update"><span class="tick_123"><img src="assets/images/tick-circle.svg" alt="" srcset=""> Password updated</span>
                                                <p class="p_small_content mt-3">Password has been updated successfully</p>
                                            </div>
                                            <div><img src="assets/images/close-square.svg" alt="" srcset="" class="cross_close"></div>
                                        </div>
                                    </div> -->
                                </form>
                                </div>
                            <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

</div>

</div>


</div>
<?php include("include/footer.php"); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>

<script>
    $("#formData").validate({
    rules: {
        old_password: {
            required: true, 
            maxlength: 10,
            remote: {
                url: "<?php echo base_url('UserController/chk_old_password') ?>",
                type: "post",
                data: {
                    phone: function() {
                        return $('#old_password').val();
                    }
                },
            }
        },
        new_password: {
            required: true,
        },
        confirm_password: {
            required: true,
            equalTo: "#new_password", 
        },
    },
    messages: {
        old_password: {
            required: "Enter old password",
            remote:"Your old password is wrong"
        },
        new_password: {
            required: "Enter new password",
        },
        confirm_password: {
            required: "Re-enter your password",
            equalTo: "Password not match",
        },
    },
    highlight: function (element) {
        $(element).addClass("border-error");
    },
    unhighlight: function (element) {
        $(element).removeClass("border-error");
    },
});
</script>

<script>

$(document).on('click','.update_btn',function(){
    $('.update_popup').fadeIn();
  setTimeout(function(){ 
        $('.update_popup').fadeOut();
    }, 3000);
})
$(document).on('click','.cross_close',function(){
    $('.update_popup').fadeOut();
})
</script>