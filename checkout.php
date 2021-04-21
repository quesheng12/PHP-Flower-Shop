<?php
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
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

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
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <link rel="stylesheet" href="assets/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">


</head>

<body>

    <div class="main-wrapper">


        <!--Top Notification Start-->
        <div class="top-notification-bar text-center">
            <div class="container">
                <div class="notification-entry">
                    <p>All featured product 50% off <a href="#">Shop Now</a></p>
                </div>
            </div>
            <div class="notification-close">
                <button class="notification-close-btn"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!--Top Notification End-->

        <!--Header Section Start-->
        <div class="header-section d-none d-lg-block">
            <div class="main-header">
                <div class="container position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/images/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 position-static">
                            <div class="site-main-nav">
                                <nav class="site-nav">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>
                                            <a href="#">Shop <span class="new">New</span></a>

                                            <ul class="mega-sub-menu">
                                                <li class="mega-dropdown">
                                                    <a class="mega-title" href="#">Shop</a>

                                                    <ul class="mega-item">
                                                        <li><a href="shop-grid-3.html">Shop Grid 3</a></li>
                                                        <li><a href="shop-grid-4.html">Shop Grid 4</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                                        <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="mega-title" href="#">Shop Single</a>

                                                    <ul class="mega-item">
                                                        <li><a href="shop-single.html">Shop Single</a></li>
                                                        <li><a href="shop-single-affiliate.html">Shop Single Affiliate</a></li>
                                                        <li><a href="shop-single-variable.html">Shop Single Variable</a></li>
                                                        <li><a href="shop-single-group.html">Shop Single Group</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="mega-title" href="#">Page</a>

                                                    <ul class="mega-item">
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="compare.html">Compare</a></li>
                                                        <li><a href="checkout.php">Checkout</a></li>
                                                        <li><a href="empty-cart.html">Empty Cart</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="menu-banner" href="#">
                                                        <img src="assets/images/menu-banner.jpg" alt="">
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
                                                        <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                                        <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Pages <span class="sale">Sale</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="checkout.php">Checkout</a></li>
                                                <li><a href="empty-cart.html">Empty Cart</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
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
                                    <div class="header-account-list dropdown top-link">
                                        <a href="#" role="button" data-toggle="dropdown"><i class="icon-users"></i></a>

                                        <ul class="dropdown-menu ">
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="#">Legal Notice</a></li>
                                            <li><a href="#">Secure payment</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                            <li><a href="#">About us</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-account-list dropdown mini-cart">
                                        <a href="#" role="button" data-toggle="dropdown">
                                            <i class="icon-shopping-bag"></i>
                                            <span class="item-count ">3</span>
                                        </a>

                                        <ul class="dropdown-menu ">
                                            <li class="product-cart">
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="shop-single.html"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                                        <span class="pro-quantity">1x</span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="shop-single.html">Rock Soapwort</a></h6>
                                                        <div class="cart-price">
                                                            <span class="sale-price">$70.00</span>
                                                            <span class="regular-price">$80.00</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="del-icon"><i class="fa fa-trash"></i></a>
                                                </div>
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="shop-single.html"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                                                        <span class="pro-quantity">1x</span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="shop-single.html">Rock Soapwort</a></h6>
                                                        <div class="cart-price">
                                                            <span class="sale-price">$70.00</span>
                                                            <span class="regular-price">$80.00</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="del-icon"><i class="fa fa-trash"></i></a>
                                                </div>
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="shop-single.html"><img src="assets/images/cart/cart-3.jpg" alt=""></a>
                                                        <span class="pro-quantity">1x</span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="shop-single.html">Rock Soapwort</a></h6>
                                                        <div class="cart-price">
                                                            <span class="sale-price">$70.00</span>
                                                            <span class="regular-price">$80.00</span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="del-icon"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </li>
                                            <li class="product-total">
                                                <ul class="cart-total">
                                                    <li> Total : <span>$189.00</span></li>
                                                </ul>
                                            </li>
                                            <li class="product-btn">
                                                <a href="checkout.php" class="btn btn-dark btn-block">Checkout</a>
                                            </li>
                                        </ul>
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
                    <div class="col-6">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-meta-info">
                            <div class="header-account">
                                <div class="header-account-list dropdown top-link">
                                    <a href="#" role="button" data-toggle="dropdown"><i class="icon-users"></i></a>

                                    <ul class="dropdown-menu ">
                                        <li><a href="#">Delivery</a></li>
                                        <li><a href="#">Legal Notice</a></li>
                                        <li><a href="#">Secure payment</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">About us</a></li>
                                    </ul>
                                </div>
                                <div class="header-account-list mini-cart">
                                    <a href="#">
                                        <i class="icon-shopping-bag"></i>
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
                    <form action="#">
                        <input type="text" placeholder="Search our store ">
                        <button><i class="icon-search"></i></button>
                    </form>
                </div>
            </div>

            <div class="site-main-nav">
                <nav class="site-nav">
                    <ul class="navbar-mobile-wrapper">
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="#">Shop <span class="new">New</span></a>

                            <ul class="mega-sub-menu">
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">Shop</a>

                                    <ul class="mega-item">
                                        <li><a href="shop-grid-3.html">Shop Grid 3</a></li>
                                        <li><a href="shop-grid-4.html">Shop Grid 4</a></li>
                                        <li><a href="shop-list.html">Shop List</a></li>
                                        <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                        <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">Shop Single</a>

                                    <ul class="mega-item">
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                        <li><a href="shop-single-affiliate.html">Shop Single Affiliate</a></li>
                                        <li><a href="shop-single-variable.html">Shop Single Variable</a></li>
                                        <li><a href="shop-single-group.html">Shop Single Group</a></li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">Page</a>

                                    <ul class="mega-item">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="empty-cart.html">Empty Cart</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <a class="menu-banner" href="#">
                                        <img src="assets/images/menu-banner.jpg" alt="">
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
                                        <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                        <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages <span class="sale">Sale</span></a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="compare.html">Compare</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="empty-cart.html">Empty Cart</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
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
        <div class="page-banner" style="background-image: url(assets/images/testimonial-bg.jpg);">
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
                                                        <li class="cus-radio">
                                                            <input type="radio" name="shipping" id="radio3" value="OFFLINE">
                                                            <label for="radio3"><span></span> Local Pickup</label>
                                                        </li>
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
                                <a class="footer-logo" href="#"><img src="assets/images/logo/logo-white.png" alt=""></a>
                                <div class="footer-widget-text">
                                    <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange a smile for you. </p>
                                </div>
                                <div class="widget-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Footer Widget End-->
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Information</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">Search Terms</a></li>
                                        <li><a href="#">Advanced Search</a></li>
                                        <li><a href="#">Helps & Faqs</a></li>
                                        <li><a href="#">Store Location</a></li>
                                        <li><a href="#">Orders & Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">My Account</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">Delivery</a></li>
                                        <li><a href="#">Legal Notice</a></li>
                                        <li><a href="#">Secure payment</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="about.html">About us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Help</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">FAQ’s</a></li>
                                        <li><a href="#">Pricing Plans</a></li>
                                        <li><a href="#">Track</a></li>
                                        <li><a href="#">Your Order</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Customer Service</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Deliveries & Returns</a></li>
                                        <li><a href="#">Gift card</a></li>
                                        <li><a href="#">Legal Notice</a></li>
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
                <div class="copyright-wrapper text-center d-lg-flex align-items-center justify-content-between">

                    <!--Right Start-->
                    <div class="copyright-content">
                        <p>Copyright 2020 &copy; <a href="http://www.bootstrapmb.com/">HasThemes</a> . All Rights Reserved</p>
                    </div>
                    <!--Right End-->

                    <!--Right Start-->
                    <div class="copyright-payment">
                        <img src="assets/images/payment.png" alt="">
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
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
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
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


    <!-- Google Map js -->
    <script src="http://www.google.cn/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
    <script src="assets/js/map-script.js"></script>
    <script>
        let choose = 0;
        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "trading/address.php",
                dataType: "json",
                success: function (data) {
                    showAddress(data);
                },
                error: function () {
                    alert("error");
                }
            });

            $('.item').html('<?php echo f($pp); ?>');
            $('.subtotal').html('$'+'<?php echo $pp['subtotal']; ?>');
            $('.final-total').html('$'+'<?php echo (int)$pp['subtotal']+$pp['total_quantity']*0.01; ?>');
            $('#radio2').click(function() {
                $('.final-total').html('$'+'<?php echo (int)$pp['subtotal']+$pp['total_quantity']*0.01; ?>');
                $('.choose-address').css({'z-index':'', 'background':'', 'opacity': '', 'display': ''});
                $('.btn-choose-address').removeAttr("disabled");
            });
            $('#radio3').click(function() {
                $('.final-total').html('$'+'<?php echo $pp['subtotal']; ?>');
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
                    url: "trading/order.php",
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
                        alert("Check Successfully!");
                        window.location.href = 'shop-list.html';
                    },
                    error: function () {
                        alert("error");
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