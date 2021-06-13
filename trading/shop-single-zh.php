<?php session_start();
if($_SESSION['uid']==null){
    echo "请先登录";
    header('location:http://123.56.136.219/user/login-zh.php');
}
?>
<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'en') {
    echo '<script>location.href="shop-single.php?id="+getQueryVariable("id");</script>';
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>商品</title>
    <meta name="robots" content="noindex, follow"/>
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
    <link rel="stylesheet" href="../assets/css/style.css">


</head>

<body>

<div class="main-wrapper">


    <!--Top Notification Start-->
    <div class="top-notification-bar text-center">
        <div class="container">
            <div class="notification-entry">
                <p>所有的特色产品五折起售 <a href="#">现在购买</a></p>
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
                            <a href="index.html"><img src="../assets/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7 position-static">
                        <div class="site-main-nav">
                            <nav class="site-nav">
                                <ul>
                                    <li><a href="index.html">主页</a></li>
                                    <li>
                                        <a href="#">商店 <span class="new">新</span></a>

                                        <ul class="mega-sub-menu">
                                            <li class="mega-dropdown">
                                                <a class="mega-title" href="#">商店</a>

                                                <ul class="mega-item">
                                                    <li><a href="shop-grid-3.html">商店网格 3</a></li>
                                                    <li><a href="shop-grid-4.html">商店网格 4</a></li>
                                                    <li><a href="shop-list.php">商店列表</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">商店网格左侧侧边栏</a>
                                                    </li>
                                                    <li><a href="shop-grid-right-sidebar.html">商店网格右侧侧边栏</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">商店列表左侧侧边栏</a>
                                                    </li>
                                                    <li><a href="shop-list-right-sidebar.html">商店列表右侧侧边栏</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown">
                                                <a class="mega-title" href="#">商店单</a>

                                                <ul class="mega-item">
                                                    <li><a href="shop-single.php">商店单</a></li>
                                                    <li><a href="shop-single-affiliate.html">商店单分支</a>
                                                    </li>
                                                    <li><a href="shop-single-variable.html">商店单变量</a>
                                                    </li>
                                                    <li><a href="shop-single-group.html">商店单组</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown">
                                                <a class="mega-title" href="#">页面</a>

                                                <ul class="mega-item">
                                                    <li><a href="cart.php">购物车</a></li>
                                                    <li><a href="wishlist.html">心愿单</a></li>
                                                    <li><a href="compare.html">对比</a></li>
                                                    <li><a href="checkout.html">结算</a></li>
                                                    <li><a href="empty-cart.html">空购物车</a></li>
                                                    <li><a href="my-account.html">我的账户</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown">
                                                <a class="menu-banner" href="#">
                                                    <img src="../assets/images/menu-banner.jpg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">日志</a>

                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">日志</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">日志</a></li>
                                                    <li><a href="blog-left-sidebar.html">日志左侧侧边栏</a></li>
                                                    <li><a href="blog-right-sidebar.html">日志右侧侧边栏</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Blog Single</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-single-left-sidebar.html">商店单左侧侧边栏</a></li>
                                                    <li><a href="blog-single-right-sidebar.html">商店单右侧侧边栏</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">页面 <span class="sale">促销</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">关于</a></li>
                                            <li><a href="cart.php">购物车</a></li>
                                            <li><a href="wishlist.html">心愿单</a></li>
                                            <li><a href="compare.html">比较</a></li>
                                            <li><a href="checkout.html">付款</a></li>
                                            <li><a href="empty-cart.html">空购物车</a></li>
                                            <li><a href="my-account.html">我的账户</a></li>
                                            <li><a href="login.html">登录</a></li>
                                            <li><a href="register.html">注册</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">联系</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="header-meta-info">
                            <div class="header-search">
                                <form action="#">
                                    <input type="text" placeholder="店内搜索 ">
                                    <button><i class="icon-search"></i></button>
                                </form>
                            </div>
                            <div class="header-account">
                                <div class="header-account-list dropdown top-link">
                                    <a href="#" role="button" data-toggle="dropdown"><i class="icon-users"></i></a>

                                    <ul class="dropdown-menu ">
                                        <li><a href="#">交付</a></li>
                                        <li><a href="#">法律条款</a></li>
                                        <li><a href="#">安全支付</a></li>
                                        <li><a href="#">商店地图</a></li>
                                        <li><a href="#">关于我们</a></li>
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
                                                    <a href="shop-single.php"><img src="../assets/images/cart/cart-1.jpg"
                                                                                   alt=""></a>
                                                    <span class="pro-quantity">1x</span>
                                                </div>
                                                <div class="cart-content">
                                                    <h6 class="title"><a href="shop-single.php">岩石肥皂草</a></h6>
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
                                                    <a href="shop-single.php"><img src="../assets/images/cart/cart-2.jpg"
                                                                                   alt=""></a>
                                                    <span class="pro-quantity">1x</span>
                                                </div>
                                                <div class="cart-content">
                                                    <h6 class="title"><a href="shop-single.php">岩石肥皂草</a></h6>
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
                                                    <a href="shop-single.php"><img src="../assets/images/cart/cart-3.jpg"
                                                                                   alt=""></a>
                                                    <span class="pro-quantity">1x</span>
                                                </div>
                                                <div class="cart-content">
                                                    <h6 class="title"><a href="shop-single.php">岩石肥皂草</a></h6>
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
                                                <li> 总计 : <span>$189.00</span></li>
                                            </ul>
                                        </li>
                                        <li class="product-btn">
                                            <a href="checkout.html" class="btn btn-dark btn-block">付款</a>
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
                        <a href="index.html"><img src="../assets/images/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-meta-info">
                        <div class="header-account">
                            <div class="header-account-list dropdown top-link">
                                <a href="#" role="button" data-toggle="dropdown"><i class="icon-users"></i></a>

                                <ul class="dropdown-menu ">
                                    <li><a href="#">交付</a></li>
                                    <li><a href="#">法律条款</a></li>
                                    <li><a href="#">安全支付</a></li>
                                    <li><a href="#">商店地图</a></li>
                                    <li><a href="#">关于我们</a></li>
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
                    <li><a href="index.html">主页</a></li>
                    <li>
                        <a href="#">商店 <span class="new">新</span></a>

                        <ul class="mega-sub-menu">
                            <li class="mega-dropdown">
                                <a class="mega-title" href="#">商店</a>

                                <ul class="mega-item">
                                    <li><a href="shop-grid-3.html">商店网格 3</a></li>
                                    <li><a href="shop-grid-4.html">商店网格 4</a></li>
                                    <li><a href="shop-list.php">商店列表</a></li>
                                    <li><a href="shop-grid-left-sidebar.html">商店网格左侧侧边栏</a>
                                    </li>
                                    <li><a href="shop-grid-right-sidebar.html">商店网格右侧侧边栏</a></li>
                                    <li><a href="shop-list-left-sidebar.html">商店列表左侧侧边栏</a></li>
                                    <li><a href="shop-list-right-sidebar.html">商店列表右侧侧边栏</a></li>
                                </ul>
                            </li>
                            <li class="mega-dropdown">
                                <a class="mega-title" href="#">商店单</a>

                                <ul class="mega-item">
                                    <li><a href="shop-single.php">商店单</a></li>
                                    <li><a href="shop-single-affiliate.html">商店单分支</a>
                                    </li>
                                    <li><a href="shop-single-variable.html">商店单变量</a>
                                    </li>
                                    <li><a href="shop-single-group.html">商店单组</a></li>
                                </ul>
                            </li>
                            <li class="mega-dropdown">
                                <a class="mega-title" href="#">页面</a>

                                <ul class="mega-item">
                                    <li><a href="cart.php">购物车</a></li>
                                    <li><a href="wishlist.html">心愿单</a></li>
                                    <li><a href="compare.html">对比</a></li>
                                    <li><a href="checkout.html">结算</a></li>
                                    <li><a href="empty-cart.html">空购物车</a></li>
                                    <li><a href="my-account.html">我的账户</a></li>
                                </ul>
                            </li>
                            <li class="mega-dropdown">
                                <a class="menu-banner" href="#">
                                    <img src="../assets/images/menu-banner.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">日志</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="#">Blog</a>
                            <li>
                                <a href="#">日志</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">日志</a></li>
                                    <li><a href="blog-left-sidebar.html">日志左侧侧边栏</a></li>
                                    <li><a href="blog-right-sidebar.html">日志右侧侧边栏</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">日志单</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-single-left-sidebar.html">日志单左侧侧边栏</a></li>
                                    <li><a href="blog-single-right-sidebar.html">日志单右侧侧边栏</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">页面 <span class="sale">促销</span></a>
                        <ul class="sub-menu">
                            <li><a href="about.html">关于</a></li>
                            <li><a href="cart.php">购物车</a></li>
                            <li><a href="wishlist.html">心愿单</a></li>
                            <li><a href="compare.html">比较</a></li>
                            <li><a href="checkout.html">付款</a></li>
                            <li><a href="empty-cart.html">空购物车</a></li>
                            <li><a href="my-account.html">我的账户</a></li>
                            <li><a href="login.html">登录</a></li>
                            <li><a href="register.html">注册</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">联系</a></li>
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
                <h2 class="title">商店单</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">主页</a></li>
                    <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">商店</a></li>
                    <li class="breadcrumb-item active" aria-current="page">商店单</li>
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
                            <span>暂无评论</span>
                        </div>
                        <div class="thumb-price">
                            <span class="current-price">$00.00</span>
<!--                            <span class="old-price">$29.00</span>-->
<!--                            <span class="discount">-34%</span>-->
                        </div>
                        <p class="description"></p>

                        <ul class="product-additional-information">
                            <li>
                                <button><i class="ti-ruler-pencil"></i> 尺寸指南</button>
                            </li>
                            <li>
                                <button><i class="fa fa-truck"></i> 发货</button>
                            </li>
                            <li>
                                <button><i class="ti-email"></i> 询问这个产品</button>
                            </li>
                        </ul>

                        <div class="product-quantity d-flex flex-wrap align-items-center">
                            <span class="quantity-title">数量: </span>
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
                                <button class="btn btn-primary" >加入购物车</button>
                            </div>
                            <div class="action">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>

                        <div class="dynamic-checkout-button disabled">
                            <div class="checkout-checkbox">
                                <input type="checkbox" id="disabled">
                                <label for="disabled"><span></span>我同意这些条款 </label>
                            </div>
                            <div class="checkout-btn">
                                <button class="btn btn-primary">即刻购买</button>
                            </div>
                        </div>

                        <div class="custom-payment-options">
                            <p>安全付款</p>

                            <ul class="payment-options">
                                <li><img src="../assets/images/payment-icon/payment-1.svg" alt=""></li>
                                <li><img src="../assets/images/payment-icon/payment-2.svg" alt=""></li>
                                <li><img src="../assets/images/payment-icon/payment-3.svg" alt=""></li>
                                <li><img src="../assets/images/payment-icon/payment-4.svg" alt=""></li>
                                <li><img src="../assets/images/payment-icon/payment-5.svg" alt=""></li>
                                <li><img src="../assets/images/payment-icon/payment-7.svg" alt=""></li>
                            </ul>
                        </div>

                        <div class="social-share">
                            <span class="share-title">分享:</span>
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
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">描述</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab2" role="tab">评论</a>
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
                            <h3 class="review-title">顾客评论</h3>

                            <ul class="reviews-items">
                                <li>
                                    <div class="single-review">
                                        <h6 class="name">罗西席尔瓦</h6>
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

                                        <p>你的生命有危险，你的生命有危险。奥利奇
                                            所有的孩子都是孩子，孩子是孩子</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-review">
                                        <h6 class="name">罗西席尔瓦</h6>
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

                                        <p>你的生命有危险，你的生命有危险。奥利奇
                                            所有的孩子都是孩子，孩子是孩子</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-review">
                                        <h6 class="name">罗西席尔瓦</h6>
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

                                        <p>你的生命有危险，你的生命有危险。奥利奇
                                            所有的孩子都是孩子，孩子是孩子</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="reviews-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <label>名字</label>
                                                <input type="text" placeholder="输入你的名字">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <label>邮箱</label>
                                                <input type="text" placeholder="john.smith@example.com">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="reviews-rating">
                                                <label>等级</label>
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
                                                <label>评价机构 (1500)</label>
                                                <textarea placeholder="写下你的评论"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <button class="btn btn-dark">提交评论</button>
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
                        <h2 class="title">相关产品</h2>
                        <p>它是创造力、活力、沟通能力、幸福和爱的完美结合。让我们安排一个微笑对你。</p>
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
                                        <img src="../assets/images/product/product-1.jpg" alt="">
                                    </a>
                                    <span class="sticker-new soldout-title">售罄</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.php" data-tooltip="tooltip" data-placement="left"
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
                                    <h4 class="product-name"><a href="shop-single.php">春雪片莲</a></h4>
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
                                        <img src="../assets/images/product/product-2.jpg" alt="">
                                    </a>
                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.php" data-tooltip="tooltip" data-placement="left"
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
                                    <h4 class="product-name"><a href="shop-single.php">岩石肥皂草</a></h4>
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
                                        <img src="../assets/images/product/product-3.jpg" alt="">
                                    </a>

                                    <span class="sticker-new label-sale">-35%</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.php" data-tooltip="tooltip" data-placement="left"
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
                                    <h4 class="product-name"><a href="shop-single.php">一串红</a></h4>
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
                                        <img src="../assets/images/product/product-4.jpg" alt="">
                                    </a>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.php" data-tooltip="tooltip" data-placement="left"
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
                                    <h4 class="product-name"><a href="shop-single.php">毛地黄花</a></h4>
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
                                        <img src="../assets/images/product/product-5.jpg" alt="">
                                    </a>

                                    <span class="sticker-new label-sale">-18%</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.php" data-tooltip="tooltip" data-placement="left"
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
                                    <h4 class="product-name"><a href="shop-single.php">盛夏滋味</a></h4>
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
                                        <img src="../assets/images/product/product-6.jpg" alt="">
                                    </a>

                                    <span class="sticker-new label-sale">-10%</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.php" data-tooltip="tooltip" data-placement="left"
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
                                    <h4 class="product-name"><a href="shop-single.php">野玫瑰</a></h4>
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
                                        <img src="../assets/images/product/product-7.jpg" alt="">
                                    </a>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.php" data-tooltip="tooltip" data-placement="left"
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
                                    <h4 class="product-name"><a href="shop-single.php">香雪球</a></h4>
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
                                        <img src="../assets/images/product/product-8.jpg" alt="">
                                    </a>

                                    <span class="sticker-new label-sale">-34%</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.php" data-tooltip="tooltip" data-placement="left"
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
                                    <h4 class="product-name"><a href="shop-single.php">横威严棕榈</a></h4>
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
                                        <img src="../assets/images/product/product-9.jpg" alt="">
                                    </a>

                                    <span class="sticker-new soldout-title">售罄</span>

                                    <div class="action-links">
                                        <ul>
                                            <li><a href="cart.php" data-tooltip="tooltip" data-placement="left"
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
                                    <h4 class="product-name"><a href="shop-single.php">陛下棕榈</a></h4>
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
                        <img src="../assets/images/brand/brand-1.jpg" alt="">
                    </div>
                    <div class="single-brand swiper-slide">
                        <img src="../assets/images/brand/brand-2.jpg" alt="">
                    </div>
                    <div class="single-brand swiper-slide">
                        <img src="../assets/images/brand/brand-3.jpg" alt="">
                    </div>
                    <div class="single-brand swiper-slide">
                        <img src="../assets/images/brand/brand-4.jpg" alt="">
                    </div>
                    <div class="single-brand swiper-slide">
                        <img src="../assets/images/brand/brand-5.jpg" alt="">
                    </div>
                    <div class="single-brand swiper-slide">
                        <img src="../assets/images/brand/brand-6.jpg" alt="">
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
                                <p>它是创造力、活力、沟通能力、幸福和爱的完美结合。
                                    让我们为你安排一个微笑。 </p>
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
                            <h4 class="footer-widget-title">信息</h4>

                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="#">检索项目</a></li>
                                    <li><a href="#">进阶搜索</a></li>
                                    <li><a href="#">帮助 & Faqs</a></li>
                                    <li><a href="#">商店位置</a></li>
                                    <li><a href="#">订单 & 退货</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">我的账户</h4>

                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="#">交付</a></li>
                                    <li><a href="#">法律条款</a></li>
                                    <li><a href="#">安全支付</a></li>
                                    <li><a href="#">商店地图</a></li>
                                    <li><a href="about.html">关于我们</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">帮助</h4>

                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="#">FAQ’s</a></li>
                                    <li><a href="#">定价计划</a></li>
                                    <li><a href="#">轨迹</a></li>
                                    <li><a href="#">我的订单</a></li>
                                    <li><a href="#">退货</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">客服</h4>

                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="my-account.html">我的账户</a></li>
                                    <li><a href="#">使用条款</a></li>
                                    <li><a href="#">交付 & 退货</a></li>
                                    <li><a href="#">礼品卡</a></li>
                                    <li><a href="#">法律条款</a></li>
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
                    <p>Copyright 2020 &copy; <a href="http://www.bootstrapmb.com/">HasThemes</a> . 版权所有
                    </p>
                </div>
                <!--Right End-->

                <!--Right Start-->
                <div class="copyright-payment">
                    <img src="../assets/images/payment.png" alt="">
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
                                <img src="../assets/images/product-single/product-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="quick-view-content">
                                <h4 class="product-title">香雪球</h4>
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
                                    <span>没有评论</span>
                                </div>
                                <p>另一方面，我们义愤填膺地谴责和厌恶那些被当下欢乐的魅力所迷惑和挫败的人，他们被欲望所蒙蔽，无法预见必然会发生的痛苦和麻烦；同样的责任属于那些因意志薄弱而失职的人</p>

                                <div class="quick-view-quantity-addcart d-flex flex-wrap">
                                    <form action="#">
                                        <div class="quantity d-inline-flex">
                                            <button type="button" class="sub"><i class="ti-minus"></i></button>
                                            <input type="text" value="1"/>
                                            <button type="button" class="add"><i class="ti-plus"></i></button>
                                        </div>
                                    </form>
                                    <div class="addcart-btn">
                                        <button class="btn btn-primary">加入购物车</button>
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
    // let quan = $('#quantity').val();
    $('#add_to_cart').html('<button class="btn btn-primary" onclick="add_to_cart(' + 1 + ', ' + id + ', $(\'#quantity\').val())">添加购物车</button>');
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

    function add_to_cart(uid, iid, q) {
        $.ajax({
            type: "POST",
            url: "trading/cart_query.php",
            data: {
                action: 2,
                user_id: uid,
                item_id: iid,
                quantity: q
            },
            dataType: "json",
            success: function () {
                alert("添加成功！");
            },
            error: function () {
                alert("错误");
            }
        });
    }

</script>
</body>

</html>