<?php include("include/header.php"); ?>

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

    <div class="flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class=" py-3 py-lg-6">

            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

                <div class="w-100 d-flex  me-3 mb-4 justify-content-between mobile_view align-items-center">
                    <div>
                        <ol class="breadcrumb breadcrumb-separatorless text-muted fs-6 fw-semibold mb-4">
                            <li class="breadcrumb-item"><span class="order-breadcrumb">Orders</a></li>
                            <img src="assests/admin-assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                            </span>
                            <li class="breadcrumb-item"><span class="order-breadcrumb">New Order</span></li>
                            <img src="assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                            <li class="breadcrumb-item"><span class="order-breadcrumb">...</span></li>
                            <img src="assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                            <li class="breadcrumb-item"><span class="order-breadcrumb">Furniture handles and hangers</span></li>
                            <img src="assests/admin-assets/images/arrow-right.svg" alt="" srcset="">
                            <li class="breadcrumb-item"><span class="New_Order">Product Details</span></li>

                        </ol>
                    </div>
                    <div class="shop_div">
                        <span class="shop">E-Shop</span> <img src="assests/admin-assets/images/E-shop.svg" alt="" srcset="">
                    </div>

                </div>
            </div>

        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="col-md-12">
                    <form action="<?=base_url('UserController/create_order')?>" method="post">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="product_img py-19">
                                <img src="<?=base_url($wardrobe_products->image)?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h6 class="product_heading"><?=$wardrobe_products->name?></h6>
                            <div class="d-flex my-5" style="gap:6px;">
                                <div class="product_code">Code</div>
                                <div class="product_code_number"><?=$wardrobe_products->code?></div>
                                <!-- <div class="badge product_out_of_stock ms-6">Out of Stock</div> -->
                            </div>
                            <input type="hidden" name="product_id" value="<?=$wardrobe_products->id?>">
                            <div class="my-5">
                                <span class="product_price">$ <?=$wardrobe_products->price?></span><span class="span_unit"> / unit</span>
                            </div>
                            <div class="d-flex" style="gap:12px;">
                                <div class="quantity">
                                    <a href="#" class="quantity__minus"><span>-</span></a>
                                    <input name="quantity" type="text" class="quantity__input" value="1">
                                    <a href="#" class="quantity__plus"><span>+</span></a>
                                </div>
                                <div class="d-flex align-items-center gap-2 gap-lg-3">
                                    <a href="../order_cart"><button type="submit" class=" new_order_btn" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                        <span><img src="<?=base_url('assests/admin-assets/images/shopping-cart.svg')?>" class="img-fluid me-2">Add to Cart
                                    </button></a>
                                </div>

                            </div>

                        </div>
                    </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-5 pt-6">
                        <h5 class="border-1 border-bottom description_head pb-2">Product Description</h5>
                        <p class="product_modal_content mt-5"><?=$wardrobe_products->description?></p>
                        <p class="product_modal_content mb-0"><span class="product_p_span">Item Type:</span> <?=$wardrobe_products->item_type?></p>
                        <p class="product_modal_content mb-0"><span class="product_p_span">Material:</span> <?=$wardrobe_products->material?></p>

                        <p class="product_modal_content mb-0"><span class="product_p_span">Color: </span> <?=$wardrobe_products->color?></p>
                        <p class="product_modal_content mb-0"><span class="product_p_span">Shape: </span> <?=$wardrobe_products->shape?></p>
                    </div>
                    <div class="col-md-12 mt-5 pt-6">
                        <h5 class="border-1 border-bottom description_head pb-2">Assembly Instructions</h5>
                        <div class="mt-5">
                            <!-- <video class="video_div" controls>
                                <source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
                            </video> -->
                            <video id="my-video" class="video-js video_div" controls preload="auto"  poster="<?=base_url('assests/admin-assets/images/video_img.jpg')?>" data-setup="{}">
                                <source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
                               
                            </video>
                        </div>
                    </div>
                    <div class="tns tns-default mt-10" style="direction: ltr">
                        <h4 class="related_product">Related Products</h4>
                        <!--begin::Slider-->
                        <div id="slideProduct" data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="4" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">

                            
                            <?php foreach($wardrobe_all_products as $product){?>
                            <div class="product_detail_padding pe-5 py-5">
                                <div class="card card-stretch-50 card-bordered ">
                                    <div class="card-header furniture_card_header px-5 py-8 position-relative">
                                        <div class="card-title mx-auto"><img src="<?= base_url($product->image) ?>" class="img-fluid">
                                            <!-- <span class="badge badge_out_of_stock">Out of Stock</span> -->
                                        </div>
                                    </div>
                                    <div class="card-body furniture_card_body px-5 py-6">
                                        <div class="code_div">Code <span class="code_div_span"> <?=$product->code?></span></div>
                                        <div class="furniture_content my-4"><?=$product->description?></div>
                                        <div class="modal_title_header my-4">$<?=$product->price?><span class="piece_span"> / Piece</span></div>
                                        <a href="<?=base_url()?>product_detail/<?=$product->id?>"><div><button type="button" class=" view_product_btn mb-2 w-100">View Product</button></div></a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
                        </div>
                        <!--end::Slider-->

                        <!--begin::Slider button-->
                        <button class="btn btn-icon btn-active-color-primary btn_product btn_product_left" id="kt_team_slider_prev1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M11.2499 14.9401L6.35988 10.0501C5.78238 9.47256 5.78238 8.52756 6.35988 7.95006L11.2499 3.06006" stroke="#F1555D" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <!--end::Slider button-->

                        <!--begin::Slider button-->
                        <button class="btn btn-icon btn-active-color-primary btn_product btn_product_right" id="kt_team_slider_next1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M6.68262 14.9401L11.5726 10.0501C12.1501 9.47256 12.1501 8.52756 11.5726 7.95006L6.68262 3.06006" stroke="#F8FAFC" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <!--end::Slider button-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <div id="kt_engage_demos" class="bg-body fitting_modal" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '360px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">

    <div class="card shadow-none rounded-0 w-100">
        
        <div class="card-header border-0 ps-4" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold modal_title_header">Product Details</h3>
            <div class="card-toolbar">
                <button type="button" class="btn   h-40px w-40px me-n6" id="kt_engage_demos_close">
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    
                </button>
            </div>
        </div>
        
        <div class="card-body  px-4" id="kt_engage_demos_body">
            <h3 class="furniture_heading">Furniture handle</h3>
            <div>
                <img src="assests/admin-assets/images/Vertical.svg" class="img-fluid">
                <p class="modal_title_header">$25,120.55<span class="piece_span"> / Piece</span></p>
                <p class="product_head">Product Description</p>
                <p class="product_modal_content">Made of high-quality solid wood, the surface is smooth and shiny, not easy to rust, durable and can be used for a long time.</p>
                <p class="product_modal_content mb-0"><span class="product_p_span">Item Type:</span> Coat hook</p>
                <p class="product_modal_content mb-0"><span class="product_p_span">Material:</span> Beech</p>

                <p class="product_modal_content mb-0"><span class="product_p_span">Color: </span> Khaki</p>
                <p class="product_modal_content mb-0"><span class="product_p_span">Shape: </span> Giraffe</p>
            </div>
        </div>
        <div class=" px-5 mb-5">
            <button type="button" class="btn apply_btn mb-2 w-100">Add to Card</button>

        </div>
        
    </div>
 
</div> -->

<?php include("include/footer.php"); ?>
<script>
    $(document).ready(function() {
        $('#slideProduct-ow').addClass('m-0');
    });
    if (window.matchMedia('(max-width: 767px)').matches) {
        $('#slideProduct').removeAttr('data-tns-items');
    };
</script>

<script>
    $(document).ready(function() {
    const minus = $('.quantity__minus');
    const plus = $('.quantity__plus');
    const input = $('.quantity__input');
    minus.click(function(e) {
        e.preventDefault();
        var value = input.val();
        if (value > 1) {
        value--;
        }
        input.val(value);
    });
    
    plus.click(function(e) {
        e.preventDefault();
        var value = input.val();
        value++;
        input.val(value);
    })
    });
</script>