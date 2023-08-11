<?php include("include/header.php"); ?>

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack" style="border-bottom:1px solid #E2E8F0 ;">

                <div class="w-100 flex-wrap me-3 mb-2">


                    <ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold mb-4">
                        <li class="breadcrumb-item"><a href="#" class="order-breadcrumb">Orders</a></li>
                        <img src="assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                        </span>
                        <li class="breadcrumb-item"><a href="#" class="New_Order">New Order</a></li>

                    </ol>
                    <div class="d-flex justify-content-between mobile_view">
                        <?php
                        $user =  $this->session->userdata('userdata');
                        $count = $this->Common_model->get_all('cart', null, array('user_id' => $user['users_id'])); ?>
                        <div>
                            <h1 class="page-heading d-flex   fs-3 flex-column justify-content-center order-details_text ">Order Cart (<?= count($count) ?>)</h1>
                        </div>
                        <div class="order_pdf_div"> <span>Wholesale price quote <img src="assests/admin-assets/images/document-download.svg" alt="" srcset=""></span> <span>Retail price quote <img src="assests/admin-assets/images/document-download.svg" alt="" srcset=""></span><span>Order PDF <img src="assests/admin-assets/images/document-download.svg" alt="" srcset=""></span><a href="configuration"><button href="order-cart.php" type="button" class="btn add_items_btn">Add Items <img src="assests/admin-assets/images/add_red.svg" alt="" srcset=""></button></a></div>
                    </div>
                </div>

            </div>

        </div>
        <?php
        $user =  $this->session->userdata('userdata'); 
        $cart_item = $this->Common_model->get_singel("cart", array('user_id' => $user['users_id']));
        if (!empty($cart_item)) {
        ?>
        <form action="UserController/order_place" method="post">
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-fluid">

                    
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
                                        $disc = $product_data->discount_price;
                                        $discountper = $product_data->discount;

                                        $dis_total = $dis_total + ($product_data->discount_price*$cart_data->quantity);
                                    } else {
                                        $subcat_data = $this->Common_model->get_singel('wardrobe_subcategory', array('id' => $cart_data->sub_catid));

                                        $product_details = json_decode($cart_data->product_details);
                                        $frame_data = $this->Common_model->get_singel('frame', array('id' => $product_details->frame));
                                        $typea_data = $this->Common_model->get_singel('type_a', array('id' => $product_details->typea));
                                        $typeb_data = $this->Common_model->get_singel('type_b', array('id' => $product_details->typeb));
                                        $dtd_data = $this->Common_model->get_singel('sunmica_price', array('id' => $product_details->dtdm));
                                        $glass_data = $this->Common_model->get_singel('sunmica_price', array('id' => $product_details->glassm));

                                        $pimage = $subcat_data->image;
                                        $disc=0;
                                        $pname = $subcat_data->name;
                                        $pprice = $frame_data->price + $typea_data->price + $typeb_data->price + $dtd_data->price + $glass_data->price;
                                        $new_pprice = $cart_data->quantity * ($frame_data->price + $typea_data->price + $typeb_data->price + $dtd_data->price + $glass_data->price);
                                        $pdiscount = $pprice;
                                    }

                                    $gtotal = $gtotal + $new_pprice;

                                    $wvat = $pprice + ($pprice * 1.2) / 100;
                                    $vat_total = $vat_total + (($cart_data->quantity *$pprice * 1.2) / 100);

                                ?>
                                <tbody class="fw-semibold text-gray-600">
                                    <tr class="verticle_center" id="remove_div<?php echo $cart_data->id; ?>">
                                        <td class="align-items-center d-flex image_gap ps-4">
                                            <span><img src="<?= base_url($pimage) ?>" class="handles_img"></span>
                                            <span class="table_data"><?= $pname ?></span>
                                        </td>
                                        <td class="pe-0">
                                            $<span class="table_data price-cls" data-id="<?= $cart_data->id?>" id="price-<?= $cart_data->id?>"><?= $pprice ?></span>
                                            <input type="hidden" class="discount-cls" data-id="<?= $cart_data->id?>" id="discount-<?= $cart_data->id?>" value="<?php echo $disc ?>">
                                        </td>
                                        <td class="pe-0">
                                            $<span class="table_data"><?= $wvat ?></span>
                                        </td>
                                        <td class="pe-0">
                                            <input type="email" class="form-control bdg_discount" value="<?= number_format($discountper, 0, '.', ''); ?>%" readonly />

                                        </td>
                                        <td class="pe-0">
                                            $<span class="table_data"><?= $pdiscount ?></span>
                                        </td>
                                        <td class="pe-0">
                                            <span class="table_data" id="hide_qty<?=$cart_data->id?>"><?= $cart_data->quantity ?></span>
                                            <div class="quantity" style="display:none" id="prod_edit<?=$cart_data->id?>">
                                                <a href="#" class="quantity__minus" onclick="minus_qty(<?=$cart_data->id?>)"><span>-</span></a>
                                                <input name="quantity" type="text" class="quantity__input" id="quantity__input<?=$cart_data->id?>" value="<?=$cart_data->quantity?>">
                                                <a href="#" class="quantity__plus" onclick="plus_qty(<?=$cart_data->id?>)"><span>+</span></a>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <div class="d-flex align-item-center gap-4"><span class="table_heading me-2" style="cursor:pointer" onclick="edit_product(<?=$cart_data->id?>)">Edit</span><span><img src="assests/admin-assets/images/export-black.svg" class="img-fluid "></span> <span class="table_heading me-2" id="del_tab_name" data-msg="cart" onclick="delete_fun(<?=$cart_data->id?>,'id')" style="cursor:pointer">Remove</span><span><img src="assests/admin-assets/images/new_trash.svg" class="img-fluid "></span></div>
                                        </td>

                                    </tr>


                                </tbody>
                                <?php } ?>
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
                                <span class="sub_font" id="subprice">
                                    <?php echo number_format($gtotal, 2) ?>€
                                </span>
                                <span class="sub_font" id="vat_amt">
                                    <?php echo number_format($vat_total, 2) ?>€
                                </span>
                                <span class="sub_font" id="discount_amt">
                                    <?php echo number_format($dis_total, 2) ?>€
                                </span>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">

                            <div> <span class="sub_font2">Total price</span></div>
                            <div><span class="sub_font2" id="total_amt"><?php echo number_format($gtotal + $vat_total - $dis_total, 2) ?>€</span></div>
                        </div>
                    </div>
                    <div class=" modal-footer d-flex align-items-center justify-content-between border-0 pt-0  mb-10">
                        <div class="align-items-center d-flex">
                            <a href="order_details"><button type="button" class="Previous_btn2 btn "> <img src="assests/admin-assets/images/arrow-left.svg" alt="" srcset=""> Previous</button></a>
                        </div>
                        <div class="bttn_footer_mobile gap-3 d-flex">
                            <button type="button" class="privious2_btn"><span class="me-2 modal_text_index">Request price quote</span></button>
                            <button type="submit" class="confirm_btn " <?php if (empty($cart_item)) {
                                echo 'disabled';
                            } ?>><span class=" me-2">Place Order</span></button>
                        </div>
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->

            </div>
        </form>
        <?php }else{ ?>
        <div class="col-lg-12">
            <div class="card_add d-flex justify-content-center mt-19">
                <img src="assests/admin-assets/images/cart.svg" alt="" srcset="">
            </div>
            <div class="text-center mt-4">
                <p class="cart_content">Add items for the cart.<br>Added items will be shown here</p>
            </div>
            <div class="text-center">
                <div class="mb-5"><a href="configuration"><button type="button" class=" btn add_itembtn2">Add Item</button></a></div>
                <div class="Previous_btn_box"><a href="order_details"><button type="button" class="Previous_btn btn "> <img src="assests/admin-assets/images/arrow-left.svg" alt="" srcset=""> Previous</button></a></div>
            </div>
        </div>
        <?php } ?>


    </div>
</div>

<?php include("include/footer.php"); ?>

<script>

    function calculation(){
        let gtotal = 0;
        let vat_total = 0;
        let disc_total = 0;
        $('.price-cls').each(function(ind){
            let id = $(this).attr('data-id');
            let qty = $('#quantity__input'+id).val();
            let thisval = $(this).text();
            let thisprice = thisval*qty
            gtotal = parseFloat(gtotal) + parseFloat(thisprice);
            vat_total = parseFloat(vat_total) + ((parseFloat(thisprice) * 1.2) / 100);
        })

        $('.discount-cls').each(function(ind){
            let id = $(this).attr('data-id');
            let qty = $('#quantity__input'+id).val();
            let thisval = $(this).val();
            let thisprice = thisval*qty
            disc_total = parseFloat(disc_total) + parseFloat(thisprice);
        })
        
        $('#subprice').text(gtotal.toFixed(2)+'€');
        $('#vat_amt').text(vat_total.toFixed(2)+'€');
        $('#discount_amt').text(disc_total.toFixed(2)+'€');
        $('#total_amt').text((gtotal+vat_total-disc_total).toFixed(2)+'€');
    }
    function edit_product(id){
       $('#prod_edit'+id).show()
       $('#hide_qty'+id).hide()
    }

    function minus_qty(id){ 
        const input = $('#quantity__input'+id);
        var value = input.val();
        if (value > 1) {
        value--;
        }
        input.val(value);

        $.ajax({
            url: 'UserController/update_product_qty',
            method: 'post',
            data:{id:id,quantity:value},
            success: function (data) {
                calculation()
            }
        });
    }

    function plus_qty(id){
        const input = $('#quantity__input'+id);
        var value = input.val();
        value++;
        input.val(value);

        $.ajax({
            url: 'UserController/update_product_qty',
            method: 'post',
            data:{id:id,quantity:value},
            success: function (data) {
                calculation()
            }
        });
    }

</script>