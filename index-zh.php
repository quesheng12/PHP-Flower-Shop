<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'en') {
    echo '<script>location.href="index.php";</script>';
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flower Shop</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut  icon" href="/images/favicon.ico" type="image/x-icon"/>

</head>

<body>

<div class="main-wrapper">
    <div id="head-fill"></div>
    <?php include('template/header-zh.html'); ?>

    <!--Slider Start-->
    <div class="slider-area">

        <div class="swiper-container slider-active">
            <div class="swiper-wrapper">

                <!--Single Slider Start-->
                <div class="single-slider swiper-slide animation-style-01"
                     style="background-image: url(assets/images/slider/slider-1.jpg);height: 500px;">
                    <div class="container">
                        <div class="slider-content">
                            <h2 class="main-title" style="color: white">在本店购买鲜花<br>我们将竭尽所能尽快送货给您!</h2>
                        </div>
                    </div>
                </div>
                <!--Single Slider End-->

                <!--Single Slider Start-->
                <div class="single-slider swiper-slide animation-style-01"
                     style="background-image: url(assets/images/slider/slider-2.jpg);height: 500px">
                    <div class="container">
                        <div class="slider-content">
                            <h5 class="sub-title">享受8折 <br> 新用户！</h5>
                            <h2 class="main-title">母亲节快乐!</h2>
                            <p>母亲会喜欢的花！</p>

                            <ul class="slider-btn">
                                <li><a href="shop-single.php" class="btn btn-round btn-primary">开始购物</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Single Slider End-->
            </div>
            <!--Swiper Wrapper End-->

            <!-- Add Arrows -->
            <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
            <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

        </div>
        <!--Swiper Container End-->
    </div>
    <!--Slider End-->


    <!--Popular Product Start-->
    <div class="features-product-area section-padding-5">
        <div class="container">
            <div class="col-lg-2 col-md-3 col-sm-2 align-items-start">
                <img src="image/Title/icon2.png">
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 col-sm-9">
                    <div class="section-title text-center">

                        <img src="image/Title/花.png">
                    </div>
                </div>
            </div>
            <div class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
                <div class="row items-push js-gallery img-fluid-100">
                    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <a class="img-link  img-thumb img-lightbox"
                           href="trading/shop-list.php?type=rose">
                            <img class="img-fluid" src="assets/images/product/rose.jpg" alt="">
                        </a>
                        <div class="product-content text-center">
                            <h4 class="product-name"><a
                                        href="trading/shop-list.php?type=rose">玫瑰</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <a class="img-link  img-thumb img-lightbox"
                           href="trading/shop-list.php?color=blue">
                            <img class="img-fluid" src="assets/images/product/blue.jpg" alt="">
                        </a>
                        <div class="product-content text-center">
                            <h4 class="product-name"><a
                                        href="trading/shop-list.php?color=blue">蓝色</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <a class="img-link  img-thumb img-lightbox"
                           href="trading/shop-list.php?type=carnation">
                            <img class="img-fluid" src="assets/images/product/carnation.jpg" alt="">
                        </a>
                        <div class="product-content text-center">
                            <h4 class="product-name"><a
                                        href="trading/shop-list.php?type=carnation">康乃馨</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <a class="img-link  img-thumb img-lightbox"
                           href="trading/shop-list.php?color=red">
                            <img class="img-fluid" src="assets/images/product/red.jpg" alt="">
                        </a>
                        <div class="product-content text-center">
                            <h4 class="product-name"><a
                                        href="trading/shop-list.php?color=red">红色</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <a class="img-link  img-thumb img-lightbox"
                           href="trading/shop-list.php?color=pink">
                            <img class="img-fluid" src="assets/images/product/pink.jpg" alt="">
                        </a>
                        <div class="product-content text-center">
                            <h4 class="product-name"><a
                                        href="trading/shop-list.php?color=pink">粉色</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <a class="img-link  img-thumb img-lightbox"
                           href="trading/shop-list.php?type=chrysanthemum">
                            <img class="img-fluid" src="assets/images/product/chrysanthemum.jpg" alt="">
                        </a>
                        <div class="product-content text-center">
                            <h4 class="product-name"><a
                                        href="trading/shop-list.php?type=chrysanthemum">菊花</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <a class="img-link  img-thumb img-lightbox"
                           href="trading/shop-list.php?type=lili">
                            <img class="img-fluid" src="assets/images/product/lily.jpg" alt="">
                        </a>
                        <div class="product-content text-center">
                            <h4 class="product-name"><a
                                        href="trading/shop-list.php?type=lili">百合</a></h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <a class="img-link  img-thumb img-lightbox"
                           href="trading/shop-list.php?color=white">
                            <img class="img-fluid" src="assets/images/product/white.jpg" alt="">
                        </a>
                        <div class="product-content text-center">
                            <h4 class="product-name"><a
                                        href="trading/shop-list.php?color=white">白色</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!--Popular Product End-->

    <!--Recommendation Start-->
    <div class="new-product-area section-padding-2">
        <div class="container">
            <div class="col-lg-2 col-md-3 col-sm-2 align-items-start">
                <img src="image/Title/icon2.png">
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 col-sm-9">
                    <div class="section-title text-center">

                        <img src="image/Title/reword.png">
                    </div>
                </div>
            </div>
            <div class="product-wrapper">
                <div class="swiper-container product-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="trading/shop-single.php?id=31">
                                        <img src="images/item/31/pink-product-SWEET EMBRACE6327680.jpg" alt="">
                                    </a>

                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="trading/shop-single.php?id=31">甜蜜拥抱</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">￥299.9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="trading/shop-single.php?id=34">
                                        <img src="images/item/34/pink-product-BLUSH DELIGHT3864440.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="trading/shop-single.php?id=34">胭脂爽</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">￥279.9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="trading/shop-single.php?id=37">
                                        <img src="images/item/37/pink-product-PERFECT PINKS5603580.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="trading/shop-single.php?id=37">完美大粉红</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">￥299.9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="trading/shop-single.php?id=35">
                                        <img src="images/item/35/pink-product-COUNTRY FIELDS3924160.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="trading/shop-single.php?id=35">乡村领域</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">￥299.9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="trading/shop-single.php?id=41">
                                        <img src="images/item/41/pink-product-VELVET CLOUD8370530.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="trading/shop-single.php?id=41">天鹅绒云</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">￥299.9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="trading/shop-single.php?id=39">
                                        <img src="images/item/39/pink-product-SUMMER HOLIDAY2597410.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="trading/shop-single.php?id=39">夏日假期</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">￥299.9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="trading/shop-single.php?id=43">
                                        <img src="images/item/43/white-product-LILY DELIGHT9013320.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="trading/shop-single.php?id=43">百合爽</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">￥299.9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="trading/shop-single.php?id=45">
                                        <img src="images/item/45/white-product-SPRING SKIES3511800.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="trading/shop-single.php?id=45">初春天空</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">￥399.9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="trading/shop-single.php?id=44">
                                        <img src="images/item/44/white-product-MOONLIGHT ROSES6936560.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <h4 class="product-name"><a href="trading/shop-single.php?id=44">月色如你</a></h4>
                                    <div class="price-box">
                                        <span class="current-price">￥279.9</span>
                                        <!--                                        <span class="old-price">$29.00</span>-->
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
    <!--Recommendation End-->

    <!--News Start-->
    <div class="blog-area blog-bg section-padding-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-9 col-sm-2">
                    <div class="section-title text-center">
                        <h2 class="title">最新新闻</h2>
                    </div>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="swiper-container blog-active">
                    <div class="swiper-wrapper">
                        <?php
                        include('utils/conn.php');
                        $sql = "select id, title, excerpt, pre_image, date from news order by date desc limit 5";
                        $rst = mysqli_query($conn, $sql);
                        $num = 1;
                        $data = array();
                        while ($arr = mysqli_fetch_assoc($rst)) {
                            $node = array(
                                "id" => $arr['id'],
                                "title" => $arr['title'],
                                "excerpt" => $arr['excerpt'],
                                "pre_image" => $arr['pre_image'],
                                "date" => $arr['date']
                            );
                            $data[$num] = $node;
                            $num++;
                        }
                        $html = '';
                        for ($i = 1; $i <= count($data); $i++) {
                            $html .= '<div class="swiper-slide">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="staff-portal/src/be_pages_blog_story.php?id=' . $data[$i]['id'] . '"><img src="' . $data[$i]['pre_image'] . '"
                                                                                  alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a href="staff-portal/src/be_pages_blog_story.php?id=' . $data[$i]['id'] . '">' . $data[$i]['title'] . '</a></h4>
                                    <div class="articles-date">
                                        <p><span>' . $data[$i]['date'] . '</span></p>
                                    </div>
                                    <p>' . $data[$i]['excerpt'] . '</p>

                                    <div class="blog-footer">
                                        <a class="more" href="blog-single-right-sidebar.html">继续阅读</a>
                                        <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        }
                        echo $html;
                        ?>

                    </div>

                    <!-- Add Arrows -->
                    <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                    <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!--Blog End-->


    <hr>

    <?php include('template/footer-zh.html'); ?>


</div>

<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/main.js"></script>


<!--<script src="http://www.google.cn/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>-->
<!--<script src="assets/js/map-script.js"></script>-->

</body>

</html>