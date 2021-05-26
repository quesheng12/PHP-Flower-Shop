﻿<?php session_start();
if($_SESSION['uid']==null){
    echo "Please log in.";
    header('location:http://123.56.136.219/user/login.php');
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kngu - Flower HTML Bootstrap 5 Template </title>
    <meta name="robots" content="noindex, follow"/>
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
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7 position-static">
                        <div class="site-main-nav">
                            <nav class="site-nav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>
                                        <a href="#">Shop <span class="new">New</span></a>

                                        <ul class="mega-sub-menu">
                                            <li class="mega-dropdown">
                                                <a class="mega-title" href="#">Shop</a>

                                                <ul class="mega-item">
                                                    <li><a href="shop-grid-3.html">Shop Grid 3</a></li>
                                                    <li><a href="shop-grid-4.html">Shop Grid 4</a></li>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-grid-right-sidebar.html">Shop Grid Right
                                                        Sidebar</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop List Right
                                                        Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown">
                                                <a class="mega-title" href="#">Shop Single</a>

                                                <ul class="mega-item">
                                                    <li><a href="shop-single.php">Shop Single</a></li>
                                                    <li><a href="shop-single-affiliate.html">Shop Single Affiliate</a>
                                                    </li>
                                                    <li><a href="shop-single-variable.html">Shop Single Variable</a>
                                                    </li>
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
                                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left
                                                        Sidebar</a></li>
                                                    <li><a href="blog-single-right-sidebar.html">Blog Single Right
                                                        Sidebar</a></li>
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
                                                    <a href="shop-single.php"><img src="assets/images/cart/cart-1.jpg"
                                                                                   alt=""></a>
                                                    <span class="pro-quantity">1x</span>
                                                </div>
                                                <div class="cart-content">
                                                    <h6 class="title"><a href="shop-single.php">Rock Soapwort</a></h6>
                                                    <div class="cart-price">
                                                        <span class="sale-price">$70.00</span>
                                                        <span class="regular-price">$80.00</span>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="del-icon"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                            <div class="single-cart-box">
                                                <div class="cart-img">
                                                    <a href="shop-single.php"><img src="assets/images/cart/cart-2.jpg"
                                                                                   alt=""></a>
                                                    <span class="pro-quantity">1x</span>
                                                </div>
                                                <div class="cart-content">
                                                    <h6 class="title"><a href="shop-single.php">Rock Soapwort</a></h6>
                                                    <div class="cart-price">
                                                        <span class="sale-price">$70.00</span>
                                                        <span class="regular-price">$80.00</span>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="del-icon"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                            <div class="single-cart-box">
                                                <div class="cart-img">
                                                    <a href="shop-single.php"><img src="assets/images/cart/cart-3.jpg"
                                                                                   alt=""></a>
                                                    <span class="pro-quantity">1x</span>
                                                </div>
                                                <div class="cart-content">
                                                    <h6 class="title"><a href="shop-single.php">Rock Soapwort</a></h6>
                                                    <div class="cart-price">
                                                        <span class="sale-price">$70.00</span>
                                                        <span class="regular-price">$80.00</span>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="del-icon"><i
                                                        class="fa fa-trash"></i></a>
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
                        <a href="index.php"><img src="assets/images/logo/logo.png" alt=""></a>
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
                    <li><a href="index.php">Home</a></li>
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
                                    <li><a href="shop-single.php">Shop Single</a></li>
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
                <h2 class="title">Shop Single</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
                </ol>
            </div>
        </div>
    </div>
    <!--Page Banner End-->

    <!--Shop Single Start-->
    <div class="shop-single-page section-padding-4">
        <div class="container">


            <!--Shop Single Start-->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="shop-image">
                        <div class="shop-single-preview-image">
<!--                            <img class="product-zoom" src="assets/images/product-single/product-1.jpg" alt="">-->

<!--                            <span class="sticker-new label-sale">-34%</span>-->
                        </div>
                        <div id="gallery_01" class="shop-single-thumb-image shop-thumb-active swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-product-thumb">
<!--                                    <a class="active" href="#" data-image="assets/images/product-single/product-1.jpg">-->
<!--                                        <img src="assets/images/product-single/product-1.jpg" alt="">-->
<!--                                    </a>-->
                                </div>
                                <div class="swiper-slide single-product-thumb">
<!--                                    <a href="#" data-image="assets/images/product-single/product-2.jpg">-->
<!--                                        <img src="assets/images/product-single/product-2.jpg" alt="">-->
<!--                                    </a>-->
                                </div>
                                <div class="swiper-slide single-product-thumb">
<!--                                    <a href="#" data-image="assets/images/product-single/product-3.jpg">-->
<!--                                        <img src="assets/images/product-single/product-3.jpg" alt="">-->
<!--                                    </a>-->
                                </div>
                                <div class="swiper-slide single-product-thumb">
<!--                                    <a href="#" data-image="assets/images/product-single/product-4.jpg">-->
<!--                                        <img src="assets/images/product-single/product-4.jpg" alt="">-->
<!--                                    </a>-->
                                </div>
                            </div>

                            <!-- Add Arrows -->
                            <div class="swiper-thumb-next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-thumb-prev"><i class="fa fa-angle-left"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shop-single-content">
                        <h3 class="title"></h3>
                        <span class="product-sku">SKU: <span></span></span>
                        <div class="product-rating">
                            <ul class="rating-star">
                                <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                <li class="rating-on"><i class="fa fa-star-o"></i></li>
                            </ul>
                            <span>No reviews</span>
                        </div>
                        <div class="thumb-price">
                            <span class="current-price">$00.00</span>
<!--                            <span class="old-price">$29.00</span>-->
<!--                            <span class="discount">-34%</span>-->
                        </div>
                        <p class="description"></p>
                        $_SESSION['views']=1;

                        <ul class="product-additional-information">
                            <li>
                                <button><i class="ti-ruler-pencil"></i> Size Guide</button>
                            </li>
                            <li>
                                <button><i class="fa fa-truck"></i> Shipping</button>
                            </li>


                            <li>
<!--                             href = " http://42.193.97.82/index.php/index/index/index?fromid=" + _SESSION['uid'] +"&toid=101"   -->
                                <a href="http://42.193.97.82/index.php/index/index/index?fromid=<?php echo $_SESSION['uid']; ?>&toid=101"><button><i class="ti-email"></i> Ask About This product</button></a>
                            </li>
                        </ul>

                        <div class="product-quantity d-flex flex-wrap align-items-center">
                            <span class="quantity-title">Quantity: </span>
                            <form action="#">
                                <div class="quantity d-flex">
                                    <button type="button" class="sub"><i class="ti-minus"></i></button>
                                    <input type="text" id=quantity value="1"/>
                                    <button type="button" class="add"><i class="ti-plus"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="product-action d-flex flex-wrap">
                            <div class="action" id="add_to_cart">
                                <button class="btn btn-primary" >Add to cart</button>
                            </div>
                            <div class="action">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>

                        <div class="dynamic-checkout-button disabled">
                            <div class="checkout-checkbox">
                                <input type="checkbox" id="disabled">
                                <label for="disabled"><span></span> I agree with the terms and conditions </label>
                            </div>
                            <div class="checkout-btn">
                                <button class="btn btn-primary">Buy it now</button>
                            </div>
                        </div>

                        <div class="custom-payment-options">
                            <p>Guaranteed safe checkout</p>

                            <ul class="payment-options">
                                <li><img src="assets/images/payment-icon/payment-1.svg" alt=""></li>
                                <li><img src="assets/images/payment-icon/payment-2.svg" alt=""></li>
                                <li><img src="assets/images/payment-icon/payment-3.svg" alt=""></li>
                                <li><img src="assets/images/payment-icon/payment-4.svg" alt=""></li>
                                <li><img src="assets/images/payment-icon/payment-5.svg" alt=""></li>
                                <li><img src="assets/images/payment-icon/payment-7.svg" alt=""></li>
                            </ul>
                        </div>

                        <div class="social-share">
                            <span class="share-title">Share:</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shop Single End-->


            <!--Shop Single info Start-->
            <div class="shop-single-info">
                <div class="shop-info-tab">
                    <ul class="nav justify-content-center" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">Description</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab2" role="tab">Reviews</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="description">
                            <p></p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="reviews">
                            <h3 class="review-title">Customer Reviews</h3>

                            <ul class="reviews-items">
                                <li>
                                    <div class="single-review">
                                        <h6 class="name">Rosie Silva</h6>
                                        <div class="rating-date">
                                            <ul class="rating">
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span class="date">Oct 20, 2020</span>
                                        </div>

                                        <p>Proin bibendum dolor vitae neque ornare, vel mollis est venenatis. Orci
                                            varius natoque penatibus et magnis dis parturient montes, nascet</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-review">
                                        <h6 class="name">Rosie Silva</h6>
                                        <div class="rating-date">
                                            <ul class="rating">
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span class="date">Oct 20, 2020</span>
                                        </div>

                                        <p>Proin bibendum dolor vitae neque ornare, vel mollis est venenatis. Orci
                                            varius natoque penatibus et magnis dis parturient montes, nascet</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-review">
                                        <h6 class="name">Rosie Silva</h6>
                                        <div class="rating-date">
                                            <ul class="rating">
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                                <li class="rating-on"><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span class="date">Oct 20, 2020</span>
                                        </div>

                                        <p>Proin bibendum dolor vitae neque ornare, vel mollis est venenatis. Orci
                                            varius natoque penatibus et magnis dis parturient montes, nascet</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="reviews-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <label>Name</label>
                                                <input type="text" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <label>Email</label>
                                                <input type="text" placeholder="john.smith@example.com">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="reviews-rating">
                                                <label>Rating</label>
                                                <ul id="rating" class="rating">
                                                    <li class="star" title='Poor' data-value='1'><i
                                                            class="fa fa-star-o"></i></li>
                                                    <li class="star" title='Poor' data-value='2'><i
                                                            class="fa fa-star-o"></i></li>
                                                    <li class="star" title='Poor' data-value='3'><i
                                                            class="fa fa-star-o"></i></li>
                                                    <li class="star" title='Poor' data-value='4'><i
                                                            class="fa fa-star-o"></i></li>
                                                    <li class="star" title='Poor' data-value='5'><i
                                                            class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <label>Body of Review (1500)</label>
                                                <textarea placeholder="Write your comments here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <button class="btn btn-dark">Submit Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shop Single info End-->


        </div>
    </div>
    <!--Shop Single End-->


    <!--New Product Start-->
    <div class="new-product-area section-padding-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9 col-sm-11">
                    <div class="section-title text-center">
                        <h2 class="title">Related Products</h2>
                        <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange a
                            smile for you.</p>
                    </div>
                </div>
            </div>
            <div class="product-wrapper">
                <div class="swiper-container product-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="shop-single.php">
                                        <img src="assets/images/product/product-1.jpg" alt="">
                                    </a>
                                    <span class="sticker-new soldout-title">Soldout</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li><a href="compare.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Compare"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0);" data-tooltip="tooltip"
                                                   data-placement="left" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="shop-single.php">Spring Snowflake</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">$19.00</span>
                                        <span class="old-price">$29.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="shop-single.php">
                                        <img src="assets/images/product/product-2.jpg" alt="">
                                    </a>
                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li><a href="compare.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Compare"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0);" data-tooltip="tooltip"
                                                   data-placement="left" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="shop-single.php">Rock Soapwort</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="shop-single.php">
                                        <img src="assets/images/product/product-3.jpg" alt="">
                                    </a>

                                    <span class="sticker-new label-sale">-35%</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li><a href="compare.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Compare"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0);" data-tooltip="tooltip"
                                                   data-placement="left" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="product-countdown">
                                        <div data-countdown="2020/12/31"></div>
                                    </div>

                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="shop-single.php">Scarlet Sage</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">$39.00</span>
                                        <span class="old-price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="shop-single.php">
                                        <img src="assets/images/product/product-4.jpg" alt="">
                                    </a>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li><a href="compare.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Compare"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0);" data-tooltip="tooltip"
                                                   data-placement="left" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="shop-single.php">Foxglove Flower</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">$79.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="shop-single.php">
                                        <img src="assets/images/product/product-5.jpg" alt="">
                                    </a>

                                    <span class="sticker-new label-sale">-18%</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li><a href="compare.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Compare"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0);" data-tooltip="tooltip"
                                                   data-placement="left" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="shop-single.php">Summer Savory</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">$40.00</span>
                                        <span class="old-price">$85.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="shop-single.php">
                                        <img src="assets/images/product/product-6.jpg" alt="">
                                    </a>

                                    <span class="sticker-new label-sale">-10%</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li><a href="compare.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Compare"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0);" data-tooltip="tooltip"
                                                   data-placement="left" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="shop-single.php">Wild Roses</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">$19.00</span>
                                        <span class="old-price">$21.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="shop-single.php">
                                        <img src="assets/images/product/product-7.jpg" alt="">
                                    </a>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li><a href="compare.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Compare"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0);" data-tooltip="tooltip"
                                                   data-placement="left" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="shop-single.php">Sweet Alyssum</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="shop-single.php">
                                        <img src="assets/images/product/product-8.jpg" alt="">
                                    </a>

                                    <span class="sticker-new label-sale">-34%</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li><a href="compare.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Compare"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0);" data-tooltip="tooltip"
                                                   data-placement="left" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="shop-single.php">Lity Majesty Palm</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">$19.00</span>
                                        <span class="old-price">$29.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="shop-single.php">
                                        <img src="assets/images/product/product-9.jpg" alt="">
                                    </a>

                                    <span class="sticker-new soldout-title">Soldout</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                            <li><a href="compare.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Compare"><i class="icon-sliders"></i></a></li>
                                            <li><a href="wishlist.html" data-tooltip="tooltip" data-placement="left"
                                                   title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="javascript:void(0);" data-tooltip="tooltip"
                                                   data-placement="left" title="Quick View" data-toggle="modal"
                                                   data-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="shop-single.php">Majesty Palm</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">$19.00</span>
                                        <span class="old-price">$29.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Arrows -->
                    <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                    <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!--New Product End-->


    <!--Brand Start-->
    <div class="brand-area">
        <div class="container">
            <div class="brand-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="single-brand swiper-slide">
                        <img src="assets/images/brand/brand-1.jpg" alt="">
                    </div>
                    <div class="single-brand swiper-slide">
                        <img src="assets/images/brand/brand-2.jpg" alt="">
                    </div>
                    <div class="single-brand swiper-slide">
                        <img src="assets/images/brand/brand-3.jpg" alt="">
                    </div>
                    <div class="single-brand swiper-slide">
                        <img src="assets/images/brand/brand-4.jpg" alt="">
                    </div>
                    <div class="single-brand swiper-slide">
                        <img src="assets/images/brand/brand-5.jpg" alt="">
                    </div>
                    <div class="single-brand swiper-slide">
                        <img src="assets/images/brand/brand-6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Brand End-->


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
                                <p>A perfect blend of creativity, energy, communication, happiness and love. Let us
                                    arrange a smile for you. </p>
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
                    <p>Copyright 2020 &copy; <a href="http://www.bootstrapmb.com/">HasThemes</a> . All Rights Reserved
                    </p>
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


    <!-- Quick View  Start-->
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="quick-view-image">
                                <img src="assets/images/product-single/product-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="quick-view-content">
                                <h4 class="product-title">Sweet Alyssum</h4>
                                <div class="thumb-price">
                                    <span class="current-price">$19.00</span>
                                    <span class="old-price">$29.00</span>
                                    <span class="discount">-34%</span>
                                </div>
                                <div class="product-rating">
                                    <ul class="rating-star">
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <span>No reviews</span>
                                </div>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                    beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                                    desire, that they cannot foresee the pain and trouble that are bound to ensue; and
                                    equal blame belongs to those who fail in their duty through weakness of will</p>

                                <div class="quick-view-quantity-addcart d-flex flex-wrap">
                                    <form action="#">
                                        <div class="quantity d-inline-flex">
                                            <button type="button" class="sub"><i class="ti-minus"></i></button>
                                            <input type="text" value="1"/>
                                            <button type="button" class="add"><i class="ti-plus"></i></button>
                                        </div>
                                    </form>
                                    <div class="addcart-btn">
                                        <button class="btn btn-primary">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Quick View Tags End-->


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

    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        return (false);
    }

    let stock;
    let id=getQueryVariable('id');
    $('#add_to_cart').html('<button class="btn btn-primary" onclick="add_to_cart(' + id + ', $(\'#quantity\').val())">Add to cart</button>');
    $.ajax({
        type: "POST",
        url: "trading/item.php",
        data: {item_id: id},
        dataType: "json",
        success: function (data) {
            if (data == 200) {
                alert("error")
            } else {
                $('.shop-single-preview-image').html('<img class="product-zoom" src=' + data.image + ' alt="">');
                $('.title').html(data.name);
                $('.product-sku').html('SKU:' + data.stock);
                $('.current-price').html("$" + data.price);
                $('.description').html(data.description);
                stock = data.stock;
            }
        }
    })

    function add_to_cart(iid, q) {
        $.ajax({
            type: "POST",
            url: "trading/cart_query.php",
            data: {
                action: 2,
                item_id: iid,
                quantity: q
            },
            dataType: "json",
            success: function () {
                alert("Added Successfully!");
            },
            error: function () {
                alert("error");
            }
        });
    }

</script>
</body>

</html>