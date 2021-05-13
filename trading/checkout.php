<?php
include ('../utils/conn.php');
session_start();

$p = $_POST;
$pp = json_decode($p['data'], true);
function f($pp){
    $html = '';
    for ($i = 0; $i < count($pp['id']); $i++) {
        $html .= '<tr>\n' .
            '                                                <td class="Product-name">\n' .
            '                                                    <p>' . $pp['name'][$i] . ' x ' . $pp['quantity'][$i] . '</p>\n' .
            '                                                </td>\n' .
            '                                                <td class="Product-price">\n' .
            '                                                    <p>' . $pp['price'][$i] . '</p>\n' .
            '                                                </td>\n' .
            '                                            </tr>\n';
    }
    return $html;
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kngu - Flower HTML Bootstrap 5 Template </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png">

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


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <link rel="stylesheet" href="../assets/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="../assets/css/style.min.css">
    <link href="../plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
    <script src="../plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>

</head>

<body>

    <div class="main-wrapper">


        <!--Top Notification Start-->
<!--        <div class="top-notification-bar text-center">-->
<!--            <div class="container">-->
<!--                <div class="notification-entry">-->
<!--                    <p>All featured product 50% off <a href="#">Shop Now</a></p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="notification-close">-->
<!--                <button class="notification-close-btn"><i class="fa fa-times"></i></button>-->
<!--            </div>-->
<!--        </div>-->
        <!--Top Notification End-->

        <!--Header Section Start-->
        <div class="header-section d-none d-lg-block">
            <!--    背景透明    -->
            <!--    style="background: linear-gradient(0deg, rgba(255,255,255,0.3)0%, rgba(145,145,145,0.3)100%)!important"    -->
            <div class="main-header">
                <div class="container position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="header-logo">
                                <a href="/index.php"><img src="../assets/images/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 position-static">
                            <div class="site-main-nav">
                                <nav class="site-nav">
                                    <ul>
                                        <li><a href="/index.php">Home</a></li>
                                        <li>
                                            <a href="#">Shop <span class="new">New</span></a>

                                            <ul class="mega-sub-menu">
                                                <li class="mega-dropdown">
                                                    <a class="mega-title">FLOWERS BY COLOUR</a>

                                                    <ul class="mega-item">
                                                        <li><a href="Pink.html">Pink</a></li>
                                                        <li><a href="White.html">White</a></li>
                                                        <li><a href="Blue.html">Blue</a></li>
                                                        <li><a href="Orange.html">Orange</a></li>
                                                        <li><a href="Red.html">Red</a></li>
                                                        <li><a href="Yellow.html">Yellow</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="mega-title">FLOWER VARIETIES</a>

                                                    <ul class="mega-item">
                                                        <li><a href="Roses.html">Roses</a></li>
                                                        <li><a href="Lilies.html">Lilies</a></li>
                                                        <li><a href="Gerbera.html">Gerbera</a></li>
                                                        <li><a href="Carnations.html">Carnations</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="mega-title">FUNERAL FLOWERS</a>

                                                    <ul class="mega-item">
                                                        <li><a href="Bestsellers.html">Bestsellers</a></li>
                                                        <li><a href="Sheaves.html">Sheaves</a></li>
                                                        <li><a href="Wreaths.html">Wreaths</a></li>
                                                        <li><a href="Arrangements.html">Arrangements</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="mega-title">DEAL OF THE WEEK</a>
                                                    <a class="menu-banner">
                                                        <img src="../assets/images/menu-banner.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Blog</a>

                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Blog Single</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-single-left-sidebar.html">Blog Single Left
                                                                Sidebar</a></li>
                                                        <li><a href="blog-single-right-sidebar.html">Blog Single Right
                                                                Sidebar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">About Us</a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html">Our Company</a></li>
                                                <li><a href="Employee.html">Employee Style</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-meta-info">
                                <div class="header-search">
                                    <form action="#">
                                        <input type="text" placeholder="Search our store ">
                                        <button><i class="icon-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-account">
                                    <div class="header-account-list top-link">
                                        <a href="/user/personal-profile/personal-profile.php" role="button"><i
                                                    class="icon-users"></i></a>
                                    </div>
                                    <div class="header-account-list mini-cart">
                                        <a href="../trading/cart.html" role="button">
                                            <i class="icon-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Header Section End-->


        <!--Header Mobile Start-->
        <div class="header-mobile d-lg-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col -6">
                        <div class="header-logo">
                            <a href="/index.php"><img src="../assets/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-meta-info">
                            <div class="header-account">
                                <div class="header-account-list dropdown top-link">
                                    <a href="#" role="button" data-toggle="dropdown"><i class="icon-users"></i></a>

                                    <ul class="dropdown-menu ">
                                        <li><a href="#">My Orders</a></li>
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="#">Register</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Log Out</a></li>
                                    </ul>
                                </div>
                                <div class="header-account-list mini-cart">
                                    <a href="../trading/cart.html">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="item-count ">0</span>
                                    </a>
                                </div>
                                <div class="header-account-list mobile-menu-trigger">
                                    <button id="menu-trigger">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Header Mobile End-->

        <!--Header Mobile Menu Start-->
        <div class="header-mobile-menu d-lg-none">

            <a href="javascript:void(0)" class="mobile-menu-close">
                <span></span>
                <span></span>
            </a>

            <div class="header-meta-info">
                <div class="header-search">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search our store ">
                        <button><i class="icon-search" style="color: deeppink"></i></button>
                    </form>
                </div>
            </div>

            <div class="site-main-nav">
                <nav class="site-nav">
                    <ul class="navbar-mobile-wrapper">
                        <li><a href="/index.php">Home</a></li>
                        <li>
                            <a href="#">Shop</a>

                            <ul class="mega-sub-menu">
                                <li class="mega-dropdown">
                                <li><a href="shop-grid-Spring.html">Spring</a></li>
                                <li><a href="shop-grid-Summer.html">Summer</a></li>
                                <li><a href="shop-grid-Autumn.html">Autumn</a></li>
                                <li><a href="shop-grid-Winter.html">Winter</a></li>
                                <li><a href="shop-grid-Plants.html">Plants</a></li>
                                <li><a href="shop-grid-Birthday.html">Birthday</a></li>
                                <li><a href="shop-grid-Wedding.html">Wedding</a></li>
                                <li><a href="shop-grid-Sale.html">Sale</a></li>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>

                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Blog 1</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog1.html">Blog 1-1</a></li>
                                        <li><a href="blog1-1.html">Blog1-2</a></li>
                                        <li><a href="blog1-2.html">Blog1-3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog 2</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog2-1.html">Blog2-1</a></li>
                                        <li><a href="blog2-2.html">Blog2-2</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div class="header-social">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>

        </div>
        <!--Header Mobile Menu End-->

        <div class="overlay"></div>
        <!--Overlay-->

        <!--Page Banner Start-->
        <div class="page-banner" style="background-image: url(../assets/images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">Checkout</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--Page Banner End-->

        <!--Register Start-->
        <div class="checkout-page section-padding-5">
            <div class="container">
<!--                <div class="checkout-info mt-30">-->
<!--                    <p class="info-header error"><i class="fa fa-exclamation-circle"></i> <strong>Error:</strong> Username is required.</p>-->
<!--                </div>-->

<!--                <div class="checkout-info mt-30">-->
<!--                    <p class="info-header"> <i class="fa fa-exclamation-circle"></i> Returning customer? <a data-toggle="collapse" href="#login">Click here to login</a></p>-->

<!--                    <div class="collapse" id="login">-->
<!--                        <div class="card-body">-->
<!--                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>-->
<!--                            <form action="#">-->

<!--                                <div class="row">-->
<!--                                    <div class="col-lg-6">-->
<!--                                        <div class="single-form">-->
<!--                                            <label>Username or email *</label>-->
<!--                                            <input type="email">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-lg-6">-->
<!--                                        <div class="single-form">-->
<!--                                            <label>Password</label>-->
<!--                                            <input type="password">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <div class="single-form d-flex align-items-center">-->
<!--                                    <button class="btn btn-primary">Login</button>-->
<!--                                    <div class="cus-checkbox">-->
<!--                                        <input type="checkbox" id="remember">-->
<!--                                        <label for="remember"><span></span> Remember Me</label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="forget">-->
<!--                                    <a href="#">Lost Your Password</a>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="checkout-info mt-30">-->
<!--                    <p class="info-header"> <i class="fa fa-exclamation-circle"></i> Have a coupon? <a data-toggle="collapse" href="#coupon">Click here to enter your code</a></p>-->

<!--                    <div class="collapse" id="coupon">-->
<!--                        <div class="card-body">-->
<!--                            <form action="#">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-lg-6">-->
<!--                                        <div class="single-form">-->
<!--                                            <input type="email" placeholder="Coupon code">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-lg-6">-->
<!--                                        <div class="single-form">-->
<!--                                            <button class="btn btn-primary">Login</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

                    <div class="row">
                        <div class="col-lg-7">
                            <div class="checkout-form mt-30">

                                <div class="checkout-title">
                                    <h4 class="title">Choose Your Address</h4>
                                </div>

                                <div class="choose-address">

                                </div>

                                <div class="single-form checkout-note">
                                    <label>Order notes</label>
                                    <textarea class="note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="checkout-review-order mt-30">
                                <div class="checkout-title">
                                    <h4 class="title">Your Order</h4>
                                </div>

                                <div class="checkout-review-order-table table-responsive mt-15">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="Product-name">Product</th>
                                                <th class="Product-price">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="item">

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Subtotal</p>
                                                </td>
                                                <td class="Product-price subtotal">
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Pickup Mode</p>
                                                </td>
                                                <td class="Product-price">
                                                    <ul class="shipping-list">
<!--                                                        <li class="cus-radio">-->
<!--                                                            <input type="radio" name="shipping" id="radio1" checked>-->
<!--                                                            <label for="radio1"><span></span> Flat Rate</label>-->
<!--                                                        </li>-->
                                                        <li class="cus-radio">
                                                            <input type="radio" name="shipping" id="radio2" value="DELIVERY" checked="checked">
                                                            <label for="radio2"><span></span> Delivery</label>
                                                        </li>
                                                        <?php
                                                        $sql = 'SELECT epidemic from general LIMIT 1';
                                                        $epi = mysqli_fetch_assoc(mysqli_query($conn, $sql))['epidemic'];
                                                        if($epi){
                                                        ?>
                                                        <li class="cus-radio">
                                                            <input type="radio" name="shipping" id="radio3" value="OFFLINE">
                                                            <label for="radio3"><span></span> Local Pickup</label>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Total</p>
                                                </td>
                                                <td class="total-price final-total">
                                                    <p></p>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="checkout-payment">
                                    <ul>
                                        <li>
                                            <div class="single-payment">
                                                <div class="payment-radio cus-radio">
                                                    <input type="radio" name="radio" id="wechat">
                                                    <label for="wechat"><span></span> WeChat Pay </label>

<!--                                                    <div class="payment-details">-->
<!--                                                        <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>-->
<!--                                                    </div>-->
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-payment">
                                                <div class="payment-radio cus-radio">
                                                    <input type="radio" name="radio" id="ali">
                                                    <label for="ali"><span></span> Alipay </label>

<!--                                                    <div class="payment-details">-->
<!--                                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>-->
<!--                                                    </div>-->
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-payment">
                                                <div class="payment-radio cus-radio">
                                                    <input type="radio" name="radio" id="cash" checked="checked">
                                                    <label for="cash"><span></span> Cash</label>

<!--                                                    <div class="payment-details">-->
<!--                                                        <p>Pay with cash upon delivery.</p>-->
<!--                                                    </div>-->
                                                </div>
                                            </div>
                                        </li>
<!--                                        <li>-->
<!--                                            <div class="single-payment">-->
<!--                                                <div class="payment-radio cus-radio">-->
<!--                                                    <input type="radio" name="radio" id="paypal">-->
<!--                                                    <label for="paypal"><span></span> Paypal <img class="payment" src="assets/images/payment-2.png" alt=""> <a href="#">What is PayPal?</a></label>-->

<!--                                                    <div class="payment-details">-->
<!--                                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </li>-->
                                    </ul>

                                    <div class="checkout-btn">
                                        <button class="btn btn-primary btn-block place-order">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!--Register End-->


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
                                <h4 class="footer-widget-title">About Us</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">Company</a></li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Wechat</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Help</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Customer Service</a></li>
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


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <script src="../assets/js/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>


    <!-- Google Map js -->
    <script src="http://www.google.cn/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
    <script src="../assets/js/map-script.js"></script>
    <script>
        let choose = 0;
        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "address.php",
                dataType: "json",
                success: function (data) {
                    showAddress(data);
                },
                error: function () {
                    xtip.alert("error");
                }
            });

            $('.item').html('<?php echo f($pp); ?>');
            $('.subtotal').html('￥'+'<?php echo $pp['subtotal']; ?>');
            $('.final-total').html('￥'+'<?php echo $pp['subtotal']+$pp['total_quantity']*5; ?>');
            $('#radio2').click(function() {
                $('.final-total').html('￥'+'<?php echo $pp['subtotal']+$pp['total_quantity']*5; ?>');
                $('.choose-address').css({'z-index':'', 'background':'', 'opacity': '', 'display': ''});
                $('.btn-choose-address').removeAttr("disabled");
            });
            $('#radio3').click(function() {
                $('.final-total').html('￥'+'<?php echo $pp['subtotal']; ?>');
                $('.choose-address').css({'z-index':100, 'background':'#dee2e6', 'opacity': 0.3, 'display': 'block'});
                $('.btn-choose-address').attr('disabled', 'disabled');
            });
            $('.place-order').click(function () {
                let service = '';
                let status = '';
                if($('[name="shipping"]:checked').val()=='DELIVERY'){
                    service = 'DELIVERY';
                    status = 'FOR_DELIVERY';
                }
                else if($('[name="shipping"]:checked').val()=='OFFLINE'){
                    service = 'OFFLINE';
                    status = 'OFFLINE';
                }
                let item = '<?php echo implode(', ', $pp['id']); ?>';
                let quantity = '<?php echo implode(', ', $pp['quantity']); ?>';
                $.ajax({
                    type: "POST",
                    url: "order.php",
                    data: {
                        action: 1,
                        service: service,
                        address: choose,
                        note: $('.note').val(),
                        status: status,
                        item: item.split(', '),
                        quantity: quantity.split(', ')
                    },
                    dataType: "json",
                    success: function () {
                        xtip.msg("Check Successfully!");
                        window.location.href = 'shop-list.html';
                    },
                    error: function () {
                        xtip.alert("error");
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "trading/cart_query.php",
                    data: {
                        action: 4
                    }
                })
            });
        });

        function c(id) {
            $('[data-address-id] .address-node').css('border', '');
            $('[data-address-id=' + id + '] .address-node').css('border', '2px solid red');
            choose = id;
        }
        function showAddress(data) {
            //设置address栏信息
            let address_str = "";
            let address_num = 0;
            for (let key in data) {
                address_num++;
                let add_temp = data[key];
                address_str += '            <div class="col-md-4" style="display: inline-flex" data-address-id="' + add_temp['id'] + '">\n' +
                    '                <div class="account-address mt-30 address-node">\n' +
                    '                    <h6 class="name">' + add_temp['name'] + '</h6>\n' +
                    '                    <p>' + add_temp['province'] + " " + add_temp['city'] + " " + add_temp['area'] + " " + add_temp['detail'] + '</p>\n' +
                    '                    <p>Mobile: ' + add_temp['phone'] + '</p>\n' +
                    '                    <a href="javascript:void(0)" onclick="c(' + add_temp['id'] + ')" class="btn btn-primary btn-choose-address"><i class="fa fa-edit"></i> Choose Address</a>\n' +
                    '                </div>\n' +
                    '            </div>';
            }
            $('.choose-address').html(address_str);
        }

    </script>
</body>

</html>