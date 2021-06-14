<script>
    function getQueryVariable(variable) {
        let query = window.location.search.substring(1);
        let vars = query.split("&");
        for (let i = 0; i < vars.length; i++) {
            let pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        return (false);
    }
</script>
<?php session_start();
if ($_SESSION['uid'] == null) {
    echo "Please log in.";
    header('location:http://123.56.136.219/user/login.php');
}
?>
<?php
if (isset($_SESSION['language']) && $_SESSION['language'] == 'en') {
    echo '<script>location.href="shop-single.php";</script>';
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop Detail</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut  icon" href="../images/favicon.ico" type="image/x-icon"/>

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
    <link href="../plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
    <script src="../plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>
    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <link rel="stylesheet" href="../assets/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">


</head>

<body>

<div class="main-wrapper">

    <?php include('../template/header-zh.php'); ?>

    <!--Page Banner Start-->
    <div class="page-banner" style="background-image: url(../assets/images/testimonial-bg.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title" 商品详情</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">主页</a></li>
                    <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">商店</a></li>
                    <li class="breadcrumb-item active" aria-current="page">商品详情</li>
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
                        <!--                        <span class="product-sku">SKU: <span></span></span>-->
                        <div class="product-rating">
                            <ul class="rating-star">
                                <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                <li class="rating-on"><i class="fa fa-star-o"></i></li>
                            </ul>
                            <!--                            <span>No reviews</span>-->
                        </div>
                        <div class="thumb-price">
                            <span class="current-price"></span>
                            <!--                            <span class="old-price">$29.00</span>-->
                            <!--                            <span class="discount">-34%</span>-->
                        </div>

                        <ul class="product-additional-information">
                            <!--                            <li>-->
                            <!--                                <button><i class="ti-ruler-pencil"></i> Size Guide</button>-->
                            <!--                            </li>-->
                            <!--                            <li>-->
                            <!--                                <button><i class="fa fa-truck"></i> Shipping</button>-->
                            <!--                            </li>-->
                            <li>
                                <!--                                <button><i class="ti-email"></i> Ask About This product</button>-->
                                <a href="http://42.193.97.82/index.php/index/index/index?fromid=<?php echo $_SESSION['uid']; ?>&toid=101">
                                    <button><i class="ti-email"></i> 询问相关内容</button>
                                </a>
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
                                <button class="btn btn-primary">加入购物车</button>
                            </div>
                            <!--                            <div class="action">-->
                            <!--                                <a href="#"><i class="fa fa-heart"></i></a>-->
                            <!--                            </div>-->
                        </div>

                        <!--                        <div class="dynamic-checkout-button disabled">-->
                        <!--                            <div class="checkout-checkbox">-->
                        <!--                                <input type="checkbox" id="disabled">-->
                        <!--                                <label for="disabled"><span></span> I agree with the terms and conditions </label>-->
                        <!--                            </div>-->
                        <!--                            <div class="checkout-btn">-->
                        <!--                                <button class="btn btn-primary">Buy it now</button>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                        <!--                        <div class="custom-payment-options">-->
                        <!--                            <p>Guaranteed safe checkout</p>-->

                        <!--                            <ul class="payment-options">-->
                        <!--                                <li><img src="../assets/images/payment-icon/payment-1.svg" alt=""></li>-->
                        <!--                                <li><img src="../assets/images/payment-icon/payment-2.svg" alt=""></li>-->
                        <!--                                <li><img src="../assets/images/payment-icon/payment-3.svg" alt=""></li>-->
                        <!--                                <li><img src="../assets/images/payment-icon/payment-4.svg" alt=""></li>-->
                        <!--                                <li><img src="../assets/images/payment-icon/payment-5.svg" alt=""></li>-->
                        <!--                                <li><img src="../assets/images/payment-icon/payment-7.svg" alt=""></li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->

                        <!--                        <div class="social-share">-->
                        <!--                            <span class="share-title">Share:</span>-->
                        <!--                            <ul class="social">-->
                        <!--                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
                        <!--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                        <!--                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->
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



    <!--Brand Start-->
    <!--    <div class="brand-area">-->
    <!--        <div class="container">-->
    <!--            <div class="brand-active swiper-container">-->
    <!--                <div class="swiper-wrapper">-->
    <!--                    <div class="single-brand swiper-slide">-->
    <!--                        <img src="../assets/images/brand/brand-1.jpg" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="single-brand swiper-slide">-->
    <!--                        <img src="../assets/images/brand/brand-2.jpg" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="single-brand swiper-slide">-->
    <!--                        <img src="../assets/images/brand/brand-3.jpg" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="single-brand swiper-slide">-->
    <!--                        <img src="../assets/images/brand/brand-4.jpg" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="single-brand swiper-slide">-->
    <!--                        <img src="../assets/images/brand/brand-5.jpg" alt="">-->
    <!--                    </div>-->
    <!--                    <div class="single-brand swiper-slide">-->
    <!--                        <img src="../assets/images/brand/brand-6.jpg" alt="">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--Brand End-->
    <div style="height: 50px"></div>

    <?php include("../template/footer-zh.html"); ?>

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

    function getQueryVariable(variable) {
        let query = window.location.search.substring(1);
        let vars = query.split("&");
        for (let i = 0; i < vars.length; i++) {
            let pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        return (false);
    }

    let stock;
    let id = getQueryVariable('id');
    $('#add_to_cart').html('<button class="btn btn-primary" onclick="add_to_cart(' + id + ', $(\'#quantity\').val())">Add to cart</button>');
    $.ajax({
        type: "POST",
        url: "item.php",
        data: {item_id: id},
        dataType: "json",
        success: function (data) {
            if (data == 200) {
                xtip.alert("error")
            } else {
                $('.shop-single-preview-image').html('<img class="product-zoom" src="' + data.image + '" alt="">');
                $('.title').html(data.name);
                $('.product-sku').html('SKU:' + data.stock);
                $('.current-price').html('￥' + data.price);
                $('.description').html(data.description);
                stock = data.stock;
            }
        }
    })

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
                xtip.msg("Added Successfully!");
            },
            error: function () {
                xtip.alert("error");
            }
        });
    }

</script>
</body>

</html>