<?php include("include/header.php"); ?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">

                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Overview</h1>


                </div>

            </div>

        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">

            <div id="kt_app_content_container" class="app-container container-fluid">

                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">

                    <div class="col-md-3 col-lg-3  col-xxl-3 ">
                        <div class="card card-flush mb-5 card_cstm1" style="background-color:#F5F3FF;">
                            <div class="card-title d-flex flex-column py-5 px-10">
                                <span class=" draft_text  me-2 ">Draft</span>
                            </div>
                            <div class="card-body d-flex align-items-end pt-0">
                                <div class="d-flex align-items-center flex-column  w-100">
                                    <div class="d-flex justify-content-between opacity-75 w-100 mt-auto mb-2">
                                        <span class="draf_orders"><?= $draft_order ?> Orders</span>
                                        <span><img src="<?= base_url() ?>assests/admin2-assets/images/draft_icon.svg" alt="" srcset=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3  col-xxl-3 ">
                        <div class="card card-flush mb-5 card_cstm2" style="background-color: #FDF4FF;">
                            <div class="card-title d-flex flex-column py-5 px-10">
                                <span class="production_text me-2 ">In Production</span>
                            </div>
                            <div class="card-body d-flex align-items-end pt-0">
                                <div class="d-flex align-items-center flex-column  w-100">
                                    <div class="d-flex justify-content-between  opacity-75 w-100 mt-auto mb-2">
                                        <span class="Production_orders"><?= $production_order ?> Orders</span>
                                        <span><img src="<?= base_url() ?>assests/admin2-assets/images/production_icon.svg" alt="" srcset=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3  col-xxl-3 ">
                        <div class="card card-flush mb-5 card_cstm3" style="background-color: #ECFDF5;">
                            <div class="card-title d-flex flex-column py-5 px-10">
                                <span class="Completed_text me-2 ">Completed</span>
                            </div>
                            <div class="card-body d-flex align-items-end pt-0">
                                <div class="d-flex align-items-center flex-column w-100">
                                    <div class="d-flex justify-content-between  opacity-75 w-100 mt-auto mb-2">
                                        <span class="Completed_ordres"><?= $complete_order ?> Orders</span>
                                        <span><img src="<?= base_url() ?>assests/admin2-assets/images/completed_icon.svg" alt="" srcset=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3  col-xxl-3 ">
                        <div class="card card-flush  mb-5 card_cstm4" style="background-color: #FFFBEB;">
                            <div class="card-title d-flex flex-column py-5 px-10">
                                <span class="Priced_text me-2 ">Priced</span>
                            </div>
                            <div class="card-body d-flex align-items-end pt-0">
                                <div class="d-flex align-items-center flex-column  w-100">
                                    <div class="d-flex justify-content-between  opacity-75 w-100 mt-auto mb-2">
                                        <span class="Priced_orders"><?= $priced_order ?> Orders</span>
                                        <span> <img src="<?= base_url() ?>assests/admin2-assets/images/priced_icon.svg" alt="" srcset=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">

                    <div class="col-xl-8">

                        <div class="card card-flush h-md-100" style="background:#F8FAFC;">

                            <div class="card-header pt-5 mb-6 px-2">

                                <h3 class="card-title align-items-start flex-column">
                                    <span class="overview_text mb-2">Overview</span>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="total_orders_text">Sales </span>
                                    </div>
                                </h3>

                                <!-- Monthly filter button start-->
                                <div class="card-toolbar">
                                    <button class=" calendar_btn  justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        Monthly&nbsp;
                                        <img src="<?= base_url() ?>assests/admin2-assets/images/calendar_btn.svg" alt="" srcset="">
                                        </span>
                                    </button>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded coustm_dropdown " data-kt-menu="true">
                                        <div class="menu-item ">
                                            <a href="#" class="menu-link cstm_menu_hover overview_text ">Daily</a>
                                        </div>

                                        <div class="menu-item ">
                                            <a href="#" class="menu-link cstm_menu_hover  overview_text">Monthly</a>
                                        </div>

                                        <div class="menu-item ">
                                            <a href="#" class="menu-link cstm_menu_hover overview_text">Yearly</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Monthly filter button end-->

                            </div>

                            <!-- Graph show start -->
                            <div class="card-body py-0 px-0">
                                <div id="kt_charts_widget_3_chart" style="height: 350px"></div>
                            </div>
                            <!-- Graph show end -->
                        </div>
                    </div>

                    <div class="col-md-4 col-md-4 col-lg-4  col-xxl-4">
                        <div class="row">
                            <div class="col-md-12 col-lg-12  col-xxl-12 ">

                                <div class="card card-flush mb-5 stock_div card-bordered">



                                    <div class="card-title d-flex flex-column py-5 px-10">

                                        <span class="low_cls me-2 ">Low stock items</span>



                                    </div>


                                    <div class="card-body d-flex align-items-end pt-0">

                                        <div class="d-flex align-items-center flex-column  w-100">
                                            <div class="d-flex justify-content-between opacity-75 w-100 mt-auto mb-2">
                                                <span class="no_cls1">0</span>
                                                <span>Manage <img src="<?= base_url() ?>assests/admin2-assets/images/export.png" alt="" srcset=""></span>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                            </div>
                            <div class="col-md-12 col-lg-12  col-xxl-12 ">

                                <div class="card card-flush mb-5 stock_div card-bordered">



                                    <div class="card-title d-flex flex-column py-5 px-10">

                                        <span class=" cstomer_cls  me-2 ">Customers</span>



                                    </div>


                                    <div class="card-body d-flex align-items-end pt-0">

                                        <div class="d-flex align-items-center flex-column  w-100">
                                            <div class="d-flex justify-content-between opacity-75 w-100 mt-auto mb-2">
                                                <span class="no_cls"><?= $total_users ?></span>
                                                <span><img src="<?= base_url() ?>assests/admin2-assets/images/blue_contact.svg" alt="" srcset=""></span>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                            </div>
                            <div class="col-md-12 col-lg-12  col-xxl-12 ">

                                <div class="card card-flush mb-5 stock_div card-bordered">



                                    <div class="card-title d-flex flex-column py-5 px-10">

                                        <span class=" cstomer_cls  me-2 ">Employees</span>



                                    </div>


                                    <div class="card-body d-flex align-items-end pt-0">

                                        <div class="d-flex align-items-center flex-column  w-100">
                                            <div class="d-flex justify-content-between opacity-75 w-100 mt-auto mb-2">
                                                <span class="no_cls">0</span>
                                                <span><img src="<?= base_url() ?>assests/admin2-assets/images/blue_contact.svg" alt="" srcset=""></span>
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
        <!--end::Content container-->
    </div>
    <!--end::Content-->
    <div class="col-lg-12 col-md-12 px-9">
        <div class="d-flex align-items-center mb-2 justify-content-between">

            <span class="total_orders_text py-3">New orders</span>
            <a href="#"><span class=" pt-2 order_details_text2">View all <img src="<?= base_url() ?>assests/admin2-assets/images/export.svg" alt="" srcset=""></span></a>
        </div>
        <div class="table-responsive">
            <table class="table table-rounded table-striped border gy-6 gs-6" id="kt_ecommerce_products_table">
                <thead>
                    <tr class=" border-bottom border-gray-200 tr_head">
                        <th class="table_th">Order No</th>
                        <th class="table_th">Order Name</th>
                        <th class="table_th part_item_width">Product Name</th>
                        <th class="table_th">Status</th>
                        <th class="table_th">Created Date</th>
                        <th class="table_th">Price</th>
                        <th class="table_th"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($order_data as $k => $ord_hist) {
                        $order_name = $this->Common_model->get_singel("users", array('id' => $ord_hist->user_id));
                        // $sql = "SELECT p.name AS name FROM `order` AS o JOIN `order_detail` AS od ON o.id=od.order_id JOIN `wardrobe_products` AS p ON p.id=od.product_id WHERE o.user_id=$ord_hist->user_id";
                        // $product_data = $this->db->query($sql)->result();
                        $order_detail = $this->Common_model->get_all("order_detail", null, array('order_id' => $ord_hist->id));
                    ?>
                        <tr>
                            <td class="table_td">#<?= $ord_hist->order_no ?></td>
                            <td class="table_td"><?= $order_name->company ?></td>
                            <td class="pe-0 pt-3 pb-2">
                                <?php foreach ($order_detail as $od) {

                                    if ($od->sub_catid > 0) {
                                        $product_data = $this->Common_model->get_singel("wardrobe_subcategory", array('id' => $od->sub_catid));
                                ?>
                                        <div class="bdg_part_item_span"><?php echo $product_data->name; ?></div>
                                    <?php

                                    } else if ($od->product_id > 0) {
                                        $product_data = $this->Common_model->get_singel("wardrobe_products", array('id' => $od->product_id));
                                    ?>
                                        <div class="bdg_part_item_span"><?php echo $product_data->name; ?></div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="bdg_part_item_span">Custom order</div>
                                <?php
                                    }
                                }
                                ?>
                            </td>
                            <td>
                                <?php if ($ord_hist->order_status == 1) { ?>
                                    <span class="bdg_draft">Draft</span>
                                <?php } elseif ($ord_hist->order_status == 2) { ?>
                                    <span class="bdg_production">In Production</span>
                                <?php } elseif ($ord_hist->order_status == 3) { ?>
                                    <span class="bdg_priced">Priced</span>
                                <?php } else { ?>
                                    <span class="bdg_completed">Completed</span>
                                <?php } ?>
                            </td>
                            <td class="table_td"><?= $ord_hist->created_at ?></td>
                            <td class="table_td"><?= $ord_hist->total_price ?>€</td>
                            <td class="table_td"><img src="<?= base_url() ?>assests/admin2-assets/images/stickynote.svg" alt="" srcset=""></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>


</div>
<?php include("include/footer.php"); ?>

<script>
    var monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    var dateshow = [];
    var net_profit = ['<?= $order_day_0 ?>', '<?= $order_day_1 ?>', '<?= $order_day_2 ?>', '<?= $order_day_3 ?>', '<?= $order_day_5 ?>', '<?= $order_day_5 ?>', '<?= $order_day_6 ?>'];

    for (var i = 0; i < 7; i++) {
        let n = new Date();
        n.setDate(n.getDate() - i);
        dateshow[i] = n.getDate() + '/' + monthNames[n.getMonth()];
    }

    //assests/admin-assets/js/custom/widgets.js
    var initChartsWidget3 = function() {
        var element = document.getElementById("kt_charts_widget_3_chart");

        if (!element) {
            return;
        }

        var chart = {
            self: null,
            rendered: false
        };

        var initChart = function() {
            var height = parseInt(KTUtil.css(element, 'height'));
            var labelColor = KTUtil.getCssVariableValue('--kt-gray-500');
            var borderColor = KTUtil.getCssVariableValue('--kt-gray-200');
            var baseColor = KTUtil.getCssVariableValue('--kt-info');
            var lightColor = KTUtil.getCssVariableValue('--kt-info-light');

            var options = {
                series: [{
                    name: 'Sale',
                    data: net_profit
                }],
                chart: {
                    fontFamily: 'inherit',
                    type: 'area',
                    height: 350,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {

                },
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    type: 'solid',
                    opacity: 1
                },
                stroke: {
                    curve: 'smooth',
                    show: true,
                    width: 3,
                    colors: ['#F1555D']
                },
                xaxis: {
                    // categories: ['2/May', '3/May', '4/May', '5/May', '6/May', '7/May', '8/May'],
                    categories: dateshow,
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: labelColor,
                            fontSize: '14px'
                        }
                    },
                    crosshairs: {
                        position: 'front',
                        stroke: {
                            color: '#f1555d',
                            width: 1,
                            dashArray: 3
                        }
                    },
                    tooltip: {
                        enabled: true,
                        formatter: undefined,
                        offsetY: 0,
                        style: {
                            fontSize: '12px'
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: labelColor,
                            fontSize: '12px'
                        }
                    }
                },
                states: {
                    normal: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    hover: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    active: {
                        allowMultipleDataPointsSelection: false,
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    }
                },
                tooltip: {
                    style: {
                        fontSize: '12px'
                    },
                    y: {
                        formatter: function(val) {
                            return "$" + val + " "
                        }
                    }
                },
                colors: ['#f7e5e7'],
                grid: {
                    borderColor: borderColor,
                    strokeDashArray: 4,
                    yaxis: {
                        lines: {
                            show: true
                        }
                    }
                },
                markers: {
                    strokeColor: '#f1555d',
                    strokeWidth: 3
                }
            };

            chart.self = new ApexCharts(element, options);
            chart.self.render();
            chart.rendered = true;
        }

        // Init chart
        initChart();

        // Update chart on theme mode change
        KTThemeMode.on("kt.thememode.change", function() {
            if (chart.rendered) {
                chart.self.destroy();
            }

            initChart();
        });
    }
</script>