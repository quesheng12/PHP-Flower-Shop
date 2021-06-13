<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'en') {
    echo '<script>location.href="cart.php?id="+getQueryVariable("id");</script>';
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>购物车</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut  icon" href="../images/favicon.ico" type="image/x-icon" />

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css"> -->

    <!-- Icon Font CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plazaicon.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css"> -->

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css"> -->

    <!-- Helper CSS -->
    <link rel="stylesheet" href="../assets/css/helper.css">

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->


    <!--====== Use the minified version Apendix listed below for better performance and remove the Apendix listed above ======-->
    <link rel="stylesheet" href="../assets/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
    <script src="../plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>

</head>

<body>

<div class="main-wrapper">

    <?php include('../template/header.php'); ?>

    <!--Page Banner Start-->
    <div class="page-banner" style="background-image: url(../assets/images/testimonial-bg.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">你的购物车</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">主页</a></li>
                    <li class="breadcrumb-item active" aria-current="page">你的购物车</li>
                </ol>
            </div>
        </div>
    </div>
    <!--Page Banner End-->

    <!--Empty Cart Start-->
    <div class="empty-cart-page section-padding-5" hidden>
        <div class="container">
            <div class="empty-cart-content text-center">
                <h2 class="empty-cart-title">购物车</h2>
                <div class="empty-cart-img">
                    <img src="../assets/images/cart.png" alt="">
                </div>
                <p>你的购物车为空</p>
                <a href="shop-list.php" class="btn btn-primary"><i class="fa fa-angle-left"></i> 继续购物</a>
            </div>
        </div>
    </div>
    <!--Empty Cart End-->

    <!--Cart Start-->
    <div class="cart-page section-padding-5" hidden>
        <div class="container">
            <div class="cart-table table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="image">图片</th>
                        <th class="product">产品</th>
                        <th class="price">价格</th>
                        <th class="quantity">数量</th>
                        <th class="total">总共</th>
                        <th class="remove">移除</th>
                    </tr>
                    </thead>
                    <tbody id="cart-body" class="tbody">

                    </tbody>
                </table>
            </div>
            <div class="cart-btn">
                <div class="cart-btn-left">
                    <a href="#" class="btn btn-primary continue">继续购物</a>
                </div>
                <div class="cart-btn-right">
                    <a href="#" class="btn clear">清空购物车</a>
                    <!--                        <a href="#" class="btn">Update Cart</a>-->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">

                </div>
                <!--                <div class="col-lg-4">-->
                <!--                    <div class="cart-coupon">-->
                <!--                        <div class="cart-title">-->
                <!--                            <h4 class="title">Coupon Code</h4>-->
                <!--                            <p>Enter your coupon code if you have one.</p>-->
                <!--                        </div>-->
                <!--                        <div class="cart-form mt-25">-->
                <!--                            <form action="#">-->
                <!--                                <div class="single-form">-->
                <!--                                    <input type="text" placeholder="Enter your coupon code..">-->
                <!--                                </div>-->
                <!--                                <div class="cart-form-btn">-->
                <!--                                    <button class="btn btn-primary">Apply Coupon</button>-->
                <!--                                </div>-->
                <!--                            </form>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="col-lg-4">
                    <div class="cart-totals">
                        <div class="cart-title">
                            <h4 class="title">购物车总共</h4>
                        </div>
                        <div class="cart-total-table mt-25">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>
                                        <p class="value">小计</p>
                                    </td>
                                    <td>
                                        <p class="price subtotal"></p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-total-btn">
                            <button class="btn btn-primary btn-block checkout">进入结算</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Cart End-->


    <!--Footer Section Start-->
    <div class="footer-area">
        <div class="container">
            <div class="footer-widget-area section-padding-6">
                <div class="row justify-content-between">

                    <!--Footer Widget Start-->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <a class="footer-logo" href="#"><img src="../assets/images/logo/logo2.png" alt=""></a>
                            <div class="footer-widget-text">
                                <p>Group 9: Programmers Never Give Up</p>
                            </div>
                        </div>
                        <!--Footer Widget End-->
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">关于我们</h4>

                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="#">公司</a></li>
                                    <li><a href="#">服务</a></li>
                                    <li><a href="#">博客</a></li>
                                    <li><a href="#">微信</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">帮助</h4>

                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="#">帮助中心</a></li>
                                    <li><a href="#">客服中心</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Footer Section End-->

    <!--Copyright Section Start-->
    <div class="copyright-section">
        <div class="container">
            <div class="copyright-wrapper">

                <!--Right Start-->
                <div class="copyright-content" style="text-align: center">
                    <p>Copyright © 2021 Group9_PNG Inc. All Rights Reserved.</p>
                </div>
                <!--Right End-->
            </div>
        </div>
    </div>
    <!--Copyright Section End-->


    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <!--Back To End-->

</div>

<!-- JS
============================================ -->

<!-- Modernizer JS -->
<script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jQuery JS -->
<script src="../assets/js/vendor/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS -->
<!-- <script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script> -->

<!-- Plugins JS -->
<!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/jquery.countdown.min.js"></script>
<script src="assets/js/plugins/jquery.elevateZoom.min.js"></script>
<script src="assets/js/plugins/select2.min.js"></script>
<script src="assets/js/plugins/ajax-contact.js"></script> -->


<!--====== Use the minified version Apendix listed below for better performance and remove the Apendix listed above ======-->
<script src="../assets/js/plugins.min.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>


<!-- Google Map js -->
<script src="http://www.google.cn/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
<script src="../assets/js/map-script.js"></script>

<script>
    $(document).ready(function () {
        show_cart();
    });

    function to(id) {
        window.location.href = 'shop-single.php?id=' + id;
    }

    function add(id, q) {
        let s1 = $('[data-id=' + id + '] .number');
        if ((parseInt(s1.attr('value')) + q) >= 1) {
            let s2 = $('[data-id=' + id + '] .amount');
            s1.attr('value', (parseInt(s1.attr('value')) + q));
            $('[data-id=' + id + '] .item-total').html('￥' + (s2.html().substr(1) * s1.attr('value')).toFixed(1));
            add_to_cart(id, q);
            $('.subtotal').html('￥' + (Number(parseFloat($('.subtotal').html().substr(1)).toFixed(2)) + Number(parseFloat(s2.html().substr(1)).toFixed(2)) * q).toFixed(2));
        } else if ((parseInt(s1.attr('value')) + q) < 1) {
            let s2 = $('[data-id=' + id + '] .amount');
            let q2 = 1 - parseInt(s1.attr('value'));
            s1.attr('value', (parseInt(s1.attr('value')) + q2));
            $('[data-id=' + id + '] .item-total').html('￥' + (s2.html().substr(1) * s1.attr('value')).toFixed(1));
            add_to_cart(id, q2);
            $('.subtotal').html('￥' + (Number(parseFloat($('.subtotal').html().substr(1)).toFixed(2)) + Number(parseFloat(s2.html().substr(1)).toFixed(2)) * q2).toFixed(2));
        }
    }

    function total_quantity() {
        let i = 0;
        $('#cart-body').find('tr').each(function () {
            i += parseInt($(this).find('.number').attr('value'));
        });
        return i;
    }

    function show_cart() {
        let subtotal = 0;
        $.ajax({
            type: "POST",
            url: "cart_query.php",
            data: {
                action: 1
            },
            dataType: "json",
            success: function (data) {
                if(data==''){
                    $('.empty-cart-page').removeAttr('hidden');
                    $('.cart-page').hide();
                }
                else {
                    $('.cart-page').removeAttr('hidden');
                    $('.empty-cart-page').hide();
                    let html = '';
                    for (let key in data) {
                        html += '<tr data-id="' + data[key]['id'] + '">\n' +
                            '                                <td class="image">\n' +
                            '                                    <img src="' + data[key]['image'] + '" alt="">\n' +
                            '                                </td>\n' +
                            '                                <td class="product">\n' +
                            '                                    <a href="javascript:void(0);" onclick="to(' + data[key]['id'] + ')">' + data[key]['name'] + '</a>\n' +
                            '                                </td>\n' +
                            '                                <td class="price">\n' +
                            '                                    <span class="amount">￥' + data[key]['price'] + '</span>\n' +
                            '                                </td>\n' +
                            '                                <td class="quantity">\n' +
                            '                                    <form action="#">\n' +
                            '                                        <div class="quantity d-inline-flex">\n' +
                            '                                            <button type="button" class="sub" onclick="add(' + data[key]['id'] + ', -10)">-10</button>\n' +
                            '                                            <button type="button" class="sub" onclick="add(' + data[key]['id'] + ', -1)"><i class="ti-minus"></i></button>\n' +
                            '                                            <input type="text" class="number" readonly="readonly" value="' + data[key]['quantity'] + '" />\n' +
                            '                                            <button type="button" class="add" onclick="add(' + data[key]['id'] + ', 1)"><i class="ti-plus"></i></button>\n' +
                            '                                            <button type="button" class="add" onclick="add(' + data[key]['id'] + ', 10)">+10</button>\n' +
                            '                                        </div>\n' +
                            '                                    </form>\n' +
                            '                                </td>\n' +
                            '                                <td class="total">\n' +
                            '                                    <span class="total-amount item-total">￥' + (data[key]['price'] * data[key]['quantity']).toFixed(1) + '</span>\n' +
                            '                                </td>\n' +
                            '                                <td class="remove">\n' +
                            '                                    <a href="#" onclick="delete_single(' + data[key]['id'] + ')"><i class="ti-close"></i></a>\n' +
                            '                                </td>\n' +
                            '                            </tr>'
                        subtotal += data[key]['price'] * data[key]['quantity'];
                    }

                    $('.tbody').html(html);
                    $('.continue').click(function () {
                        window.location.href = 'shop-list.html';
                    });
                    $('.clear').click(function () {
                        delete_all();
                    });
                    $('.subtotal').html('￥' + subtotal.toFixed(1));

                    $('.checkout').click(function () {
                        let arr_id = [];
                        let arr_name = [];
                        let arr_quantity = [];
                        let arr_price = [];
                        $('#cart-body').find('tr').each(function () {
                            arr_id.push($(this).attr('data-id'));
                            arr_name.push($(this).find('.product a').html());
                            arr_quantity.push(parseInt($(this).find('.number').attr('value')));
                            arr_price.push($(this).find('.item-total').html());
                        });

                        let PARAMS = {
                            id: arr_id,
                            name: arr_name,
                            quantity: arr_quantity,
                            price: arr_price,
                            total_quantity: total_quantity(),
                            subtotal: $('.subtotal').html().substr(1)
                        };

                        let temp = document.createElement("form");
                        temp.action = 'checkout.php';
                        temp.method = "post";
                        temp.style.display = "none";
                        // for (var x in PARAMS) {
                        let opt = document.createElement("textarea");
                        opt.name = 'data';
                        opt.value = JSON.stringify(PARAMS);
                        temp.appendChild(opt);
                        // }
                        document.body.appendChild(temp);
                        temp.submit();

                    });
                }
            },
            error: function () {
                xtip.alert("Please Login First!");
                setTimeout(function (){
                    window.location.href = '../user/login.php';
                }, 2000);

            }
        });
    }

    function add_to_cart(iid, q) {
        $.ajax({
            type: "POST",
            url: "cart_query.php",
            data: {
                action: 2,
                item_id: iid,
                quantity: q
            },
            dataType: "json",
            success: function () {

            },
            error: function () {
                xtip.alert("error");
            }
        });
    }

    function delete_single(iid) {
        $.ajax({
            type: "POST",
            url: "cart_query.php",
            data: {
                action: 3,
                item_id: iid
            },
            dataType: "json",
            success: function () {
                show_cart();
                location.reload();
            },
            error: function () {
                xtip.alert("error");
            }
        });
    }

    function delete_all() {
        $.ajax({
            type: "POST",
            url: "cart_query.php",
            data: {
                action: 4
            },
            dataType: "json",
            success: function () {
                show_cart();
                location.reload();
            },
            error: function () {
                xtip.alert("error");
            }
        });
    }
</script>
</body>

</html>