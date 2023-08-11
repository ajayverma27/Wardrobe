<?php include("include/header.php");
$data = $this->session->userdata('form_data');
// print_r($data);die;
?>
<style>
    .flag {
        height: 32px;
        width: 32px;

    }

    .error {
        color: red;
    }

    .border-error {
        border: 1px red solid !important;
    }
</style>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

                <div class="w-100 d-flex  me-3 mb-2 justify-content-between mobile_view">
                    <div>
                        <ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold mb-4">
                            <li class="breadcrumb-item"><span href="#" class="order-breadcrumb">Orders</span></li>
                            <img src="assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                            </span>
                            <li class="breadcrumb-item"><span href="#" class="order-breadcrumb">New Order</span></li>
                            <img src="assests/admin-assets/images/arrow-right.svg" alt="" srcset="">

                            <li class="breadcrumb-item"><span href="#" class="New_Order">Products With Numerical Configuration - Basic</span></li>

                        </ol>
                    </div>

                    <div class="shop_div">
                        <button type="submit" class="confirm_btn"><span class=" me-2" id="kt_engage_demos_toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Place Order</span></button>
                        <a href="https://denir.sk/"><span class="shop">E-Shop</span> <img src="assests/admin-assets/images/E-shop.svg" alt="" srcset=""></a>
                    </div>

                </div>
            </div>


        </div>



        <div id="kt_app_content" class="app-content flex-column-fluid">

            <div id="kt_app_content_container" class="app-container container-fluid">

                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6" role="tablist">
                    <?php if (!empty($wardrobe_type)) {
                        foreach ($wardrobe_type as $key => $wtype) {
                    ?>
                            <li class="nav-item">
                                <a class="nav-link order_nav_link <?= $key == 0 ? 'active' : '' ?>" data-bs-toggle="tab" href="#kt_tab_pane_<?= $key + 1 ?>"><?= $wtype->name ?></a>
                            </li>
                    <?php }
                    } ?>
                </ul>

                <div class="tab-content" id="myTabContent">

                    <?php if (!empty($wardrobe_type)) {
                        foreach ($wardrobe_type as $key => $wtype) {
                            $wardrobe_category = $this->Common_model->get_all('wardrobe_category', null, array('w_type_id' => $wtype->id));
                            if (!empty($wardrobe_category)) {

                    ?>
                                <div class="tab-pane fade show <?= $key == 0 ? 'active' : '' ?>" id="kt_tab_pane_<?= $key + 1 ?>" role="tabpanel">
                                    <div class="d-flex justify-content-between mb-10 mobile_view">
                                        <div class="<?php if ($wtype->id == 1) {
                                                        echo 'col-md-4';
                                                    } ?> mb-7">
                                            <ul class=" border-0 cstm_nav-tabs cstm_nav-tabs2 fs-4 mb-n2 mx-auto nav nav-custom nav-line-tabs nav-line-tabs-2x nav-tabs px-2 " role="tablist">
                                                <?php
                                                foreach ($wardrobe_category as $ck => $cat) {
                                                ?>
                                                    <li class="m-0 nav-item <?php if ($wtype->id == 1) {
                                                                                echo 'new_item';
                                                                            } ?> new_item2 pb-2" role="presentation">
                                                        <a class="m-0 mt-1 nav-link newsales_tab px-5 <?= $ck == 0 ? 'active' : '' ?>" data-bs-toggle="tab" href="#Fittings<?= $cat->id ?>" aria-selected="true" role="tab"><?= $cat->name ?>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div class="">
                                            <div class="d-flex align-items-center position-relative px-3">

                                                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>

                                                <input type="text" data-kt-ecommerce-category-filter="search" class="form-control cstm_search2  ps-14" placeholder="Search">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">

                                        <?php
                                        foreach ($wardrobe_category as $ck => $cat) {
                                            $subcat_data = $this->Common_model->get_all('wardrobe_subcategory', null, array('category_id' => $cat->id));
                                            if (!empty($subcat_data)) {
                                        ?>
                                                <div class="tab-pane fade active <?= $ck == 0 ? 'show' : '' ?>" id="Fittings<?= $cat->id ?>" role="tab-panel">
                                                    <div class="col-lg-12 ">
                                                        <div class="row">
                                                            <?php foreach ($subcat_data as $subcat) { ?>
                                                                <div class="col-lg-3 col-md-3 mb-7 material-boxes">
                                                                    <a href="<?= $subcat->w_type_id != 1 ? 'fitting/' . $subcat->id : 'JavaScript:void(0)' ?>" <?php if ($subcat->w_type_id == 1) { ?> onclick="open_configuation('<?= $subcat->id ?>')" <?php } ?>>
                                                                        <div class="door_boxses">
                                                                            <img src="<?= base_url($subcat->image) ?>" class="door-images" alt="" srcset="">
                                                                            <span><?= $subcat->name ?></span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                </div>

                                        <?php }
                                        } ?>


                                    </div>
                                </div>

                    <?php }
                        }
                    } ?>


                    <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div style="text-align:center"><span class="order-details_head">Please specify your custom order details</span></div>
                                <form id="custom-order" method="post" action="UserController/custom_order_place" enctype="multipart/form-data">
                                    <div class="mt-8 mb-8">
                                        <div class="d-flex justify-content-center align-items-center uploader">


                                            <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

                                            <label for="file-upload" id="file-drag" class="animated wow zoomInUp delay-1s">
                                                <img id="file-image" src="#" alt="Preview" class="hidden">
                                                <div id="start1" class="align-items-center d-flex flex-column justify-content-center">
                                                    <div class="border_div_modal">
                                                        <img src="<?= base_url() ?>assests/admin-assets/images/document-upload.svg">

                                                    </div>
                                                    <p class="img_upload_span mb-0">Drag or upload image here</p>
                                                    <div id="notimage" class="hidden">Please select an image</div>
                                                    <span id="file-upload-btn" class="text-center upload_color">Click to upload</span>
                                                </div>
                                                <div id="response1" class="hidden mb-0">
                                                    <div id="messages" class="mb-0"></div>


                                                </div>
                                            </label>

                                        </div>
                                        <div class="mt-3 mb-3">
                                            <span class="meas">Measurements</span>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-7">
                                                    <label for="exampleFormControlInput1" class=" form-label psw_label">Width</label><input class="form-control meas_input error" placeholder="Type here" name="width" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-7">
                                                    <label for="exampleFormControlInput1" class=" form-label psw_label">Height</label><input class="form-control meas_input" placeholder="Type here" name="height" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-7">
                                                    <label for="exampleFormControlInput1" class=" form-label psw_label">Depth</label><input class="form-control meas_input" placeholder="Type here" name="depth" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2 mb-3">
                                            <span class="meas mb-3">General Details</span>
                                            <div class="mb-7">
                                                <label for="" class=" mt-3 form-label psw_label">Expected Delivery Date</label><input type="date" class="form-control" name="delivery_date" onclick="this.showPicker();" />
                                                <span class="change_cls"> <img src="assets/images/calendar_new.svg" alt="" srcset=""></span>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-3">
                                            <label for="comment">Description</label>
                                            <textarea class="form-control" rows="5" id="comment" name="description" placeholder="Write here"></textarea>
                                        </div>
                                        <div style="text-align:center"><button type="submit" class="send_meas_btn" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                                Send
                                            </button></div>
                                    </div>
                            </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>


        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->

</div>
</div>

<!-- door-modal start -->
<div class="modal fade" tabindex="-1" id="door_modal">
    <div class="modal-dialog modal-dialog modal-xl  modal-dialog-centered cstm_modal">
        <div class="modal-content ">
            <form action="UserController/config_cart" method="POST">
                <input type="hidden" name="sub_cat_id" id="sub-cat-id">
                <div class="modal-header">
                    <h3 class="Configure">Configure: <span class="configure_door">Door</span></h3>

                    <!--begin::Close-->
                    <div class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body table-responsive">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="product_details">Fill product details</p>
                        </div>
                        <div>
                            <p class="dimension_details">Add dimension to the selected product</p>
                        </div>
                    </div>

                    <table class="table configure_tbl get-clone-after">
                        <tr>
                            <td colspan="8" class="table_background">Door</td>
                            <td colspan="7" class="table_background">Rails</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="table_background pcs_td" onclick="add_more()"><i class="fa fa-plus" style="font-size:24px"></i></td>
                            <td colspan="2" class="table_background ">Dimension</td>
                            <td colspan="5" class="table_background ">Filling</td>
                            <td class="table_background frame_td" rowspan="2">Frame</td>
                            <td colspan="2" rowspan="2" class="table_background frame_td">Type</td>
                            <td rowspan="2" class="table_background lenth_td frame_td">Length (mm)</td>
                            <td rowspan="2" class="table_background lenth_td frame_td">No. Pcs</td>
                            <td rowspan="2" class="table_background pcs_td"></td>
                        </tr>
                        <tr>
                            <td class="table_background mm_td">Width (mm)</td>
                            <td class="table_background mm_td">Height (mm)</td>
                            <td colspan="5" class="table_background dtd_td">DTD or GLASS</td>
                        </tr>
                        <tr class="get-clone ">
                            <td class="add-more">
                                <input type="hidden" name="exist[]" value="0">
                                <input type="hidden" name="exist_ids[]" value="0">
                            </td>
                            <td><input type="text" class="form-control" name="width[]" required></td>
                            <td><input type="text" class="form-control" name="height[]" required></td>


                            <td class="td_fixed">
                                <select class="form-select select select_table_td" name="dtd_thickenss[]" required>
                                    <option>Select</option>
                                    <option value="10">10 mm</option>
                                    <option value="18">18 mm</option>
                                    <option value="28">28 mm</option>
                                    <option value="36">36 mm</option>
                                </select>

                            </td>
                            <td class="td_fixed">
                                <select class="my-select form-select select select_table_td" name="dtd_material[]" required>
                                    <option value="">select</option>
                                    <?php if ($materials) {
                                        foreach ($materials as $material) {
                                    ?>
                                            <option value="<?= $material->id ?>" data-image="<?= base_url($material->image) ?>">
                                                <?= $material->color ?></option>
                                    <?php }
                                    } ?>

                                </select>
                            </td>



                            <td class="blank_td">/</td>
                            <td class="td_fixed">
                                <select class="form-select select select_table_td" name="galss_thickness[]" required>
                                    <option>Select</option>
                                    <option value="10">10 mm</option>
                                    <option value="18">18 mm</option>
                                    <option value="28">28 mm</option>
                                    <option value="36">36 mm</option>
                                </select>

                            </td>
                            <td class="td_fixed">
                                <select class="my-select form-select select select_table_td" name="galss_material[]" required>
                                    <option value="">select</option>
                                    <?php if ($materials) {
                                        foreach ($materials as $material) {
                                    ?>
                                            <option value="<?= $material->id ?>" data-image="<?= base_url($material->image) ?>">
                                                <?= $material->color ?></option>
                                    <?php }
                                    } ?>

                                </select>
                            </td>
                            <td class="td_fixed">
                                <select class="form-select select_table_td" name="frame_id[]" required>
                                    <option>Select</option>
                                    <?php if ($frame_data) {
                                        foreach ($frame_data as $material) {
                                    ?>
                                            <option value="<?= $material->id ?>">
                                                <?= $material->name ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </td>
                            <td class="td_fixed">
                                <select class="form-select select_table_td" name="typea_id[]" required>
                                    <option>Select</option>
                                    <?php if ($typea_data) {
                                        foreach ($typea_data as $material) {
                                    ?>
                                            <option value="<?= $material->id ?>">
                                                <?= $material->name ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </td>
                            <td class="td_fixed">
                                <select class="form-select select_table_td" name="typeb_id[]" required>
                                    <option>Select</option>
                                    <?php if ($typeb_data) {
                                        foreach ($typeb_data as $material) {
                                    ?>
                                            <option value="<?= $material->id ?>">
                                                <?= $material->name ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </td>
                            <td><input type="text" class="form-control" name="depth[]" required></td>
                            <td><input type="text" class="form-control td_cstm_input" name="pcs[]" required></td>
                            <td class="trash_td remove-row"><img src="assests/admin-assets/images/trash.svg" alt="" srcset=""></td>
                        </tr>



                    </table>

                </div>

                <div class="modal-footer border-0">
                    <a href="order_cart" class=" btn privious2_btn"><img src="assests/admin-assets/images/arrow-left.svg" alt="" srcset=""> <span class="modal_text_index me-2">Previous</span></a>
                    <button type="submit" class=" btn add_cart_btn"><span class=" me-2">Add to Cart</span></button>
                    <!--<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>-->
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </form>
        </div>
    </div>
</div>
<!-- door-modal end -->



<form action="UserController/order_place" method="post">
    <div id="kt_engage_demos" class="bg-body calendar_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '1149px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100 px-9">
            <!--begin::Header-->
            <div class="card-header px-0" id="kt_engage_demos_header">
                <?php $order_no = rand(1, 99999); ?>
                <input type="hidden" name="order_no" value="<?= $order_no ?>">
                <h3 class="card-title modal_heading_order">Order #<?= $order_no ?></h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="modal-body pb-0  pt-3">
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="py-1"><span class="order_name">Total price</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span> <span class="order_modal_data total-biiling"></span></td>
                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Order Name</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data"><?= $data['order_name'] ?></span></td>

                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Order Date</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data"><?= date('d m Y') ?></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="py-1"><span class="order_name">Delivery Date</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span> <span class=" order_modal_data"><?= date('d m Y', strtotime($data['delivery_date'])) ?></span></td>
                                </tr>
                                <tr>
                                    <td class="py-1"><span class="order_name">Transport Type</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data"><?php if ($data['transport_type'] == 1) {
                                                                                                                                echo 'Buyer';
                                                                                                                            } else {
                                                                                                                                echo 'Supplier';
                                                                                                                            } ?></span></td>

                                </tr>
                                <?php
                                if ($user_address->zip_code > 0) {
                                    $zip_code = $user_address->zip_code;
                                } else {
                                    $zip_code = '';
                                }

                                if (!empty($user_address->address)) {
                                    $address = $user_address->address . ', ';
                                } else {
                                    $address = '';
                                }

                                if (!empty($user_address->city)) {
                                    $city = $user_address->city . ', ';
                                } else {
                                    $city = '';
                                }
                                ?>
                                <tr>
                                    <td class="py-1"><span class="order_name">Delivery Address</span></td>
                                    <td class="modal_gap py-1"><span class="py-1">:</span><span class=" order_modal_data"><?= $address . $city . $zip_code ?> </span></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-row-bordered gy-5 border-0 mt-9 table-responsive">
                            <thead>
                                <tr class="fw-semibold fs-6 text-muted bg-light align-baseline">
                                    <th class="min-w-100px table_heading ps-4">Product Name</th>
                                    <th class="min-w-100px table_heading">Wholesale (Without VAT)</th>
                                    <th class="min-w-70px  table_heading">Retail (With VAT)</th>
                                    <th class="min-w-100px table_heading">MO Discount</th>
                                    <th class="min-w-100px table_heading">Price after discount</th>
                                    <th class="min-w-100px table_heading">Quantity</th>
                                    <th class="min-w-100px table_heading">Action</th>

                                </tr>
                            </thead>
                            <?php
                            $gtotal = 0;
                            $vat_total = 0;
                            $dis_total = 0;
                            foreach ($cart as $cart_data) {
                                $discountper = 0;
                                if ($cart_data->product_id > 0) {
                                    $product_data = $this->Common_model->get_singel('wardrobe_products', array('id' => $cart_data->product_id));
                                    $pimage = $product_data->image;
                                    $pname = $product_data->name;
                                    $pprice = $product_data->price;
                                    $new_pprice = $cart_data->quantity * $product_data->price;
                                    $pdiscount = $pprice - $product_data->discount_price;
                                    $discountper = $product_data->discount;

                                    $dis_total = $dis_total + $product_data->discount_price;
                                } else {
                                    $subcat_data = $this->Common_model->get_singel('wardrobe_subcategory', array('id' => $cart_data->sub_catid));

                                    $product_details = json_decode($cart_data->product_details);
                                    $frame_data = $this->Common_model->get_singel('frame', array('id' => $product_details->frame));
                                    $typea_data = $this->Common_model->get_singel('type_a', array('id' => $product_details->typea));
                                    $typeb_data = $this->Common_model->get_singel('type_b', array('id' => $product_details->typeb));
                                    $dtd_data = $this->Common_model->get_singel('sunmica_price', array('id' => $product_details->dtdm));
                                    $glass_data = $this->Common_model->get_singel('sunmica_price', array('id' => $product_details->glassm));

                                    $pimage = $subcat_data->image;
                                    $pname = $subcat_data->name;
                                    $pprice = $frame_data->price + $typea_data->price + $typeb_data->price + $dtd_data->price + $glass_data->price;
                                    $new_pprice = $cart_data->quantity * ($frame_data->price + $typea_data->price + $typeb_data->price + $dtd_data->price + $glass_data->price);
                                    $pdiscount = $pprice;
                                }

                                $gtotal = $gtotal + $new_pprice;

                                $wvat = $pprice + ($pprice * 1.2) / 100;
                                $vat_total = $vat_total + ($pprice * 1.2) / 100;

                            ?>
                                <tbody class="fw-semibold text-gray-600">
                                    <tr class="verticle_center">
                                        <td class="align-items-center d-flex image_gap ps-4">
                                            <span><img src="<?= base_url($pimage) ?>" class="handles_img"></span>
                                            <span class="table_data"><?= $pname ?></span>
                                        </td>
                                        <td class="pe-0">
                                            <span class="table_data">$<?= $pprice ?></span>
                                        </td>
                                        <td class="pe-0">
                                            <span class="table_data">$<?= $wvat ?></span>
                                        </td>
                                        <td class="pe-0">
                                            <input type="email" class="form-control bdg_discount" value="<?= number_format($discountper, 0, '.', ''); ?>%" readonly />

                                        </td>
                                        <td class="pe-0">
                                            <span class="table_data">$<?= $pdiscount ?></span>
                                        </td>
                                        <td class="pe-0">
                                            <span class="table_data"><?= $cart_data->quantity ?></span>
                                        </td>
                                        <td class="pe-0">
                                            <span class="table_heading me-2">View Configuration</span><span><img src="assests/admin-assets/images/export-black.svg" class="img-fluid "></span>
                                        </td>

                                    </tr>


                                </tbody>
                            <?php }  ?>
                        </table>
                    </div>
                </div>
                <div class="main_div_box mb-6">
                    <div class="d-flex justify-content-between">
                        <div class="one|_box">
                            <span class="sub_font">
                                Subtotal
                            </span>
                            <span class="sub_font">
                                VAT
                            </span>
                            <span class="sub_font">
                                Total Discount
                            </span>

                        </div>
                        <div class="two|_box">
                            <span class="sub_font">
                                <?php echo number_format($gtotal, 2) ?>€
                            </span>
                            <span class="sub_font">
                                <?php echo number_format($vat_total, 2) ?>€
                            </span>
                            <span class="sub_font">
                                <?php echo $dis_total ?>€
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">

                        <div> <span class="sub_font2">Total price</span></div>
                        <div><span class="sub_font2 total-biiling"></span></div>
                    </div>
                </div>
            </div>

            <!-- <div class=" modal-footer d-flex align-items-center justify-content-between border-0 pt-0  mb-10"> -->
            <div class=" modal-footer d-flex align-items-center border-0 pt-0  mb-10">
                <!-- <div class="align-items-center d-flex">
                    <a href="order_details"><button type="button" class="Previous_btn2 btn "> <img src="assests/admin-assets/images/arrow-left.svg" alt="" srcset=""> Previous</button></a>
                </div> -->
                <?php
                $user =  $this->session->userdata('userdata');
                $cart_item = $this->Common_model->get_singel("cart", array('user_id' => $user['users_id']));
                ?>
                <div class="bttn_footer_mobile gap-3 d-flex">
                    <a href="order_details"><button type="button" class="privious2_btn"><span class="me-2 modal_text_index"><span><img src="assests/admin-assets/images/arrow-left.svg" class="img-fluid"></span> Previous</span></button></a>
                    <button type="submit" class="confirm_btn " <?php if (empty($cart_item)) {
                        echo 'disabled';
                    } ?>><span class=" me-2">Confirm</span></button>
                </div>
            </div>
            <!--end::Body-->
        </div>
</form>
<!--end::Card-->
</div>
<!-- end modal -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
<script>
    let clonehtml = $('.get-clone').html()

    function add_more() {
        //$("#content div").last().append("<p>LAST ELEMENT!</p>");
        $('.get-clone-after').last().append('<tr>' + clonehtml + '</tr>');
        $('.my-select').select2({
            templateResult: formatState,
            templateSelection: formatState,
            placeholder: 'Select',
            allowClear: true
        });


    }

    $(document).on('click', '.remove-row', function() {
        $(this).parents('tr').remove()
    })

    function open_configuation(id) {
        $('#sub-cat-id').val(id)
        $('#door_modal').modal('show')
        $.ajax({
            type: "POST",
            url: "UserController/get_configure_cart",
            data: {
                subcid: id
            },
            dataType: "text",
            cache: false,
            success: function(data) {
                if (data != 0) {
                    $('.get-clone-after .get-clone').before(data);
                } else {
                    $('.all-cart').remove()
                }
            }
        });

    }

    function delete_cart(id) {

        $.ajax({
            type: "POST",
            url: "UserController/delete_cart",
            data: {
                id: id
            },
            dataType: "text",
            cache: false,
            success: function(data) {
                if (data == 1) {
                    $('#cart-' + id).remove();
                }
            }
        });

    }


    $("#custom-order").validate({
        rules: {
            width: {
                required: true,
            },
            height: {
                required: true,
            },
            fileUpload: {
                required: true,
            },

        },
        messages: {
            width: {
                required: "Enter width",
            },
            height: {
                required: "Enter height",
            },
            fileUpload: {
                required: "Enter height",
            },

        },
        highlight: function(element) {
            $(element).addClass("border-error");
        },
        unhighlight: function(element) {
            $(element).removeClass("border-error");
        },
        submitHandler: function(form) {
            if ($('input#file-upload')[0].files[0] == undefined) {
                return false;
            } else {
                return true;
            }
        }
    });

    // $('.total-biiling').text('<//?= $gtotal ?> €')
    $('.total-biiling').text('<?php echo number_format($gtotal + $vat_total - $dis_total, 2) ?> €')
</script>

<?php include("include/footer.php"); ?>