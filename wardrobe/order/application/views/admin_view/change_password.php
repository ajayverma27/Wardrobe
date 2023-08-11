<?php include("include/header.php"); ?>

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Change Password</h1>
                </div>

            </div>
        </div>
        <div class="app-container container-fluid">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-7">
                        <div class="mb-7 position-relative">
                            <label for="exampleFormControlInput1" class=" form-label psw_label">Current Password</label>
                            <input type="password" class="form-control psw_control" placeholder="Type current password" />
                            <img src="assets/images/eye-slash.svg" alt="" class="icon_img" srcset="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="mb-7 position-relative">
                            <label for="exampleFormControlInput1" class=" form-label psw_label">New Password</label>
                            <input type="password" class="form-control psw_control" placeholder="Type new password" />
                            <img src="assets/images/eye-slash.svg" alt="" class="icon_img" srcset="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="mb-7 position-relative">
                            <label for="exampleFormControlInput1" class=" form-label psw_label">Re-Type New Password</label>
                            <input type="password" class="form-control psw_control" placeholder="Re-Type new password" />
                            <img src="assets/images/eye-slash.svg" alt="" class="icon_img" srcset="">
                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="text-center"><button type="button" class="btn update_btn2">Update</button></div>
                    </div>


                </div>
            </div>
            <div class="update_popup2" style="display:none;">
                <div class="d-flex justify-content-around">
                    <div class="p_update"><span class="tick_123"><img src="assets/images/tick-circle.svg" alt="" srcset=""> Password updated</span>
                        <p class="p_small_content mt-3">Password has been updated successfully</p>
                    </div>
                    <div><img src="assets/images/close-square.svg" alt="" srcset="" class="cross_close"></div>
                </div>


            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
<script>
    $(document).on('click', '.update_btn2', function() {
        $('.update_popup2').fadeIn();
        setTimeout(function() {
            $('.update_popup2').fadeOut();
        }, 3000);
    })
    $(document).on('click', '.cross_close', function() {
        $('.update_popup2').fadeOut();
    })
</script>