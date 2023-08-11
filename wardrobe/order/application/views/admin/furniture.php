<?php include("include/header.php"); 
// $data = $this->session->userdata('form_data');
// print_r($data);die;
?>

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

    <div class="flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class=" py-3 py-lg-6">

            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

                <div class="w-100 d-flex  me-3 mb-4 justify-content-between mobile_view align-items-center">
                    <div>
                        <ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold mb-4">
                            <li class="breadcrumb-item"><span class="order-breadcrumb">Orders</a></li>
                            <img src="<?= base_url() ?>assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                            </span>
                            <li class="breadcrumb-item"><span class="order-breadcrumb">New Order</span></li>
                            <img src="<?= base_url() ?>assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                            <li class="breadcrumb-item"><span class="order-breadcrumb">Orders by Piece - Fittings & Additional Assortment</span></li>
                            <img src="<?= base_url() ?>assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                            <li class="breadcrumb-item"><span class="New_Order">Furniture handles and hangers</span></li>

                        </ol>
                    </div>
                    <div class="shop_div">
                        <span class="shop">E-Shop</span> <img src="<?= base_url() ?>assests/admin-assets/images/E-shop.svg" alt="" srcset="">
                    </div>

                </div>
            </div>

        </div>




        <div id="kt_app_content" class="app-content flex-column-fluid">

            <div id="kt_app_content_container" class="app-container container-fluid">

                <div class="col-lg-12 ">
                    <div class="row">
                        <?php foreach($wardrobe_products as $product){?>
                            <div class="col-lg-3 col-md-3 mb-5">
                                <div class="card card-stretch-50 card-bordered ">
                                    <div class="card-header furniture_card_header px-5 py-8 position-relative">
                                    <a href="<?=base_url()?>product_detail/<?=$product->id?>"><div class="card-title mx-auto"><img src="<?= base_url($product->image) ?>" class="img-fluid"></a>
                                            <!-- <span class="badge badge_out_of_stock">Out of Stock</span> -->
                                        </div>
                                    </div>
                                    <div class="card-body furniture_card_body px-5 py-6">
                                        <div class="code_div">Code <span class="code_div_span"> <?=$product->code?></span></div>
                                        <div class="furniture_content my-4"><?=$product->description?></div>
                                        <div class="modal_title_header my-4">$<?=$product->price?><span class="piece_span"> / Piece</span></div>
                                        <div><button type="button" class=" view_product_btn mb-2 w-100" id="kt_engage_demos_toggle" onclick="product_detail(<?= $product->id ?>)">View Product</button></div>
                                    </div>

                                </div>
                            </div>
                        <?php } ?>
                        
                        
                        
                    </div>

                </div>
            </div>


        </div>


    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
</div>

<div id="kt_engage_demos" class="bg-body fitting_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <form action="../UserController/create_order" method="post">
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header border-0 ps-4" id="kt_engage_demos_header">
                <h3 class="card-title fw-bold modal_title_header">Product Details</h3>
                <div class="card-toolbar">
                    <button type="button" class="btn   h-40px w-40px me-n6" id="kt_engage_demos_close">
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
            <div class="card-body  px-4" id="kt_engage_demos_body">
                <input type="hidden" name="product_id" id="product_id">
                <h3 class="furniture_heading" id="product_name"></h3>
                <div>
                    <img src="" class="img-fluid" id="product_image">
                    <p class="modal_title_header" id="product_price"><span class="piece_span"> / Piece</span></p>
                    <p class="product_head">Product Description</p>
                    <p class="product_modal_content" id="product_description"></p>
                    <p class="product_modal_content mb-0"><span class="product_p_span">Item Type:</span> <span id="product_item_type"> </span> </p>
                    <p class="product_modal_content mb-0"><span class="product_p_span">Material:</span> <span id="product_material"> </span> </p>

                    <p class="product_modal_content mb-0"><span class="product_p_span">Color: </span> <span id="product_color"> </span> </p>
                    <p class="product_modal_content mb-0"><span class="product_p_span">Shape: </span> <span id="product_shape"> </span> </p>
                </div>
            </div>
            <div class=" px-5 mb-5">
                <button type="submit" class="btn apply_btn mb-2 w-100">Add to Cart</button>
            </div>
            <!--end::Body-->
        </div>
    </form>
    <!--end::Card-->
</div>

<?php include("include/footer.php"); ?>

<script>
    function product_detail(id) {
        $.ajax({
            url: "<?php echo base_url(); ?>UserController/product_detail",
            dataType: 'json',
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                $('#product_id').val(data.product_detail.id)
                $('#product_name').text(data.product_detail.name)
                $('#product_image').attr('src', '<?php echo base_url() ?>'+data.product_detail.image)
                $('#product_price').text('$'+data.product_detail.price)
                $('#product_description').text(data.product_detail.description)
                $('#product_item_type').text(data.product_detail.item_type)
                $('#product_material').text(data.product_detail.material)
                $('#product_color').text(data.product_detail.color)
                $('#product_shape').text(data.product_detail.shape)
            }
        });
    }
</script>