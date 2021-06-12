
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>FlowerShop</title>

    <meta name="description" content="">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="FlowerShop">
    <meta property="og:site_name" content="FLowerShop">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <!--        <link rel="shortcut icon" href="--><!--/media/favicons/favicon.png">-->
    <!--        <link rel="icon" type="image/png" sizes="192x192" href="--><!--/media/favicons/favicon-192x192.png">-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>

<link rel="stylesheet" href="/assets/css/plugins-min/plugins.min.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/style/style.css">
<script src="../../js/jquery-3.5.1.js"></script>

<div id="head-fill"></div>
<!--Header Section Start-->
<div class="header-section d-none d-lg-block">
    <!--    背景透明    -->
    <!--    style="background: linear-gradient(0deg, rgba(255,255,255,0.3)0%, rgba(145,145,145,0.3)100%)!important"    -->
    <div class="main-header">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="/index.php"><img src="/assets/images/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7 position-static">
                    <div class="site-main-nav">
                        <nav class="site-nav">
                            <ul>
                                <li><a href="/index.php">Home</a></li>
                                <li>
                                    <a href="/trading/shop-list.php">Shop</a>

                                    <ul class="mega-sub-menu">
                                        <li class="mega-dropdown">
                                            <a class="mega-title">FLOWERS BY COLOUR</a>

                                            <ul class="mega-item">
                                                <li><a href="/trading/shop-list.php?color=pink">Pink</a></li>
                                                <li><a href="/trading/shop-list.php?color=white">White</a></li>
                                                <li><a href="/trading/shop-list.php?color=blue">Blue</a></li>
                                                <!--                                                        <li><a href="shop-list.php?color=orange">Orange</a></li>-->
                                                <li><a href="/trading/shop-list.php?color=red">Red</a></li>
                                                <li><a href="/trading/shop-list.php?color=yellow">Yellow</a></li>
                                                <li><a href="/trading/shop-list.php?color=purple">Purple</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown">
                                            <a class="mega-title">FLOWER VARIETIES</a>

                                            <ul class="mega-item">
                                                <li><a href="/trading/shop-list.php?type=rose">Rose</a></li>
                                                <li><a href="/trading/shop-list.php?type=lily">Lily</a></li>
                                                <li><a href="/trading/shop-list.php?type=chrysanthemum">Chrysanthemum</a></li>
                                                <li><a href="/trading/shop-list.php?type=carnation">Carnation</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown">
                                            <a class="mega-title">SORT BY</a>

                                            <ul class="mega-item">
                                                <li><a href="/trading/shop-list.php?sort=best-selling">Best Selling</a></li>
                                                <li><a href="/trading/shop-list.php?sort=title-ascending">Alphabetically, A-Z</a></li>
                                                <li><a href="/trading/shop-list.php?sort=title-descending">Alphabetically, Z-A</a></li>
                                                <li><a href="/trading/shop-list.php?sort=price-ascending">Price, low to high</a></li>
                                                <li><a href="/trading/shop-list.php?sort=price-descending">Price, high to low</a></li>
                                            </ul>
                                        </li>
                                        <!--                                                <li class="mega-dropdown">-->
                                        <!--                                                    <a class="mega-title">DEAL OF THE WEEK</a>-->
                                        <!--                                                    <a class="menu-banner">-->
                                        <!--                                                        <img src="../assets/images/menu-banner.jpg" alt="">-->
                                        <!--                                                    </a>-->
                                        <!--                                                </li>-->
                                    </ul>
                                </li>
                                <li>
                                    <a href="/staff-portal/src/be_pages_blog_grid.php">News</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        <li><a href="/presentation/about-us/index.html">Our Company</a></li>
                                        <li><a href="/presentation/employee-style.html">Employee Style</a></li>
                                        <li><a href="/sunrise/sunrise.html">Sunrise</a></li>
                                    </ul>
                                </li>
                                <li><a href="/utils/contact-route.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header-meta-info">
                        <div class="header-search">

                            <input type="text" id="searchFor" placeholder="Search">
                            <button onclick="searchfor()"><i class="icon-search"></i></button>

                        </div>
                        <div class="header-account">
                            <div class="header-account-list top-link">
                                <a href="/user/personal-profile/personal-profile.php" role="button"><i
                                        class="icon-users"></i></a>
                            </div>
                            <div class="header-account-list mini-cart">
                                <a href="/trading/cart.php" role="button">
                                    <i class="icon-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                        <div style="margin-left: 8%; margin-right: 5%;">
                            <a id="zh" href="#" onclick="language_switch('zh')">zh</a></div>
                        <div style="float:left;width: 1px;height: 20px; background: darkgray;"></div>
                        <div style="margin-left: 5%;"><a id="en" href="#" onclick="language_switch('en')">en</a></div>
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
                    <a href="/index.php"><img src="/assets/images/logo/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-6">
                <div class="header-meta-info">
                    <div class="header-account">
                        <div class="header-account-list dropdown top-link">
                            <a href="/user/personal-profile/personal-profile.php" role="button"><i class="icon-users"></i></a>

                            <!--                            <ul class="dropdown-menu ">-->
                            <!--                                <li><a href="#">My Orders</a></li>-->
                            <!--                                <li><a href="#">Sign In</a></li>-->
                            <!--                                <li><a href="#">Register</a></li>-->
                            <!--                                <li><a href="#">My Account</a></li>-->
                            <!--                                <li><a href="#">Log Out</a></li>-->
                            <!--                            </ul>-->
                        </div>
                        <div class="header-account-list mini-cart">
                            <a href="/trading/cart.php">
                                <i class="icon-shopping-cart"></i>
                                <!--                                <span class="item-count ">0</span>-->
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
                    <div style="margin-left: 5%; margin-right: 5%;"><a href="#">zh</a></div>
                    <div style="float:left;width: 1px;height: 20px; background: darkgray;"></div>
                    <div style="margin-left: 5%;"><a href="#">en</a></div>
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
            <input type="text" id="searchFor2" placeholder="Search our store">
            <button onclick="searchfor2()"><i class="icon-search" style="color: #ff1493"></i></button>
        </div>
    </div>

    <div class="site-main-nav">
        <nav class="site-nav">
            <ul class="navbar-mobile-wrapper">
                <li><a href="/index.php">Home</a></li>
                <li>
                    <a href="#">Shop</a>

                    <ul class="mega-sub-menu">
                        <li>
                            <a href="/trading/shop-list.php">All Flowers</a>
                        </li>
                        <li>
                            <a href="#">FLOWERS BY COLOUR</a>

                            <ul class="sub-menu">
                                <li><a href="/trading/shop-list.php?color=pink">Pink</a></li>
                                <li><a href="/trading/shop-list.php?color=white">White</a></li>
                                <li><a href="/trading/shop-list.php?color=blue">Blue</a></li>
                                <!--                                                        <li><a href="shop-list.php?color=orange">Orange</a></li>-->
                                <li><a href="/trading/shop-list.php?color=red">Red</a></li>
                                <li><a href="/trading/shop-list.php?color=yellow">Yellow</a></li>
                                <li><a href="/trading/shop-list.php?color=purple">Purple</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">FLOWER VARIETIES</a>

                            <ul class="sub-menu">
                                <li><a href="/trading/shop-list.php?type=rose">Rose</a></li>
                                <li><a href="/trading/shop-list.php?type=lily">Lily</a></li>
                                <li><a href="/trading/shop-list.php?type=chrysanthemum">Chrysanthemum</a></li>
                                <li><a href="/trading/shop-list.php?type=carnation">Carnation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">SORT BY</a>

                            <ul class="sub-menu">
                                <li><a href="/trading/shop-list.php?sort=best-selling">Best Selling</a></li>
                                <li><a href="/trading/shop-list.php?sort=title-ascending">Alphabetically, A-Z</a></li>
                                <li><a href="/trading/shop-list.php?sort=title-descending">Alphabetically, Z-A</a></li>
                                <li><a href="/trading/shop-list.php?sort=price-ascending">Price, low to high</a></li>
                                <li><a href="/trading/shop-list.php?sort=price-descending">Price, high to low</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="/staff-portal/src/be_pages_blog_grid.php">News</a>
                </li>
                <li>
                    <a href="#">About us</a>
                    <ul class="sub-menu">
                        <li><a href="/presentation/about-us/index.html">Our Company</a></li>
                        <li><a href="/presentation/employee-style.html">Employee Style</a></li>
                        <li><a href="/sunrise/sunrise.html">Sunrise</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact us</a></li>
            </ul>
        </nav>
    </div>

    <!--    <div class="header-social">-->
    <!--        <ul class="social">-->
    <!--            <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
    <!--            <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
    <!--            <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
    <!--            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
    <!--            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
    <!--        </ul>-->
    <!--    </div>-->

</div>
<!--Header Mobile Menu End-->

<div class="overlay"></div>
<!--Overlay-->

<script src="../trading/search.js"></script>
<script>
    function language_switch(language) {
        $.post('/utils/language-switch.php',
            {
                'language': language
            },
            function () {
                location.reload();
            })
    }
</script><!-- Hero -->
<div class="bg-image"
     style="background-image: url('assets/media/photos/photo9@2x.jpg');">
    <div class="bg-black-50">
        <div class="content content-top content-full text-center">
            <h1 class="font-w700 text-white mt-5 mb-2 invisible" data-toggle="appear">
                Check out our latest stories
            </h1>
            <h3 class="font-w400 text-white-75 mb-5 invisible" data-toggle="appear" data-timeout="400">Be inspired
                and
                create something amazing today.</h3>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
    <div class="row row-deck" id="news-wrapper">

        <!-- Story -->
        <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
            <a class="block block-rounded block-link-pop"
               href="be_pages_blog_story.php?id=9">
                <img class="img-fluid" src="/images/news/9/笑脸1413830.png" alt="">
                <div class="block-content">
                    <h4 class="mb-1">asdasd</h4>
                    <p class="font-size-sm">
                        <span class="text-primary"></span>
                        2021-06-12 09:06:45                        </p>
                    <p>
                        sfd                        </p>
                </div>
            </a>
        </div>
        <!-- END Story -->


        <!-- Story -->
        <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
            <a class="block block-rounded block-link-pop"
               href="be_pages_blog_story.php?id=10">
                <img class="img-fluid" src="/images/news/9/笑脸1413830.png" alt="">
                <div class="block-content">
                    <h4 class="mb-1">asdasd</h4>
                    <p class="font-size-sm">
                        <span class="text-primary"></span>
                        2021-06-12 09:06:45                        </p>
                    <p>
                        sfd                        </p>
                </div>
            </a>
        </div>
        <!-- END Story -->


        <!-- Story -->
        <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
            <a class="block block-rounded block-link-pop"
               href="be_pages_blog_story.php?id=11">
                <img class="img-fluid" src="/images/news/9/笑脸1413830.png" alt="">
                <div class="block-content">
                    <h4 class="mb-1">asdasd</h4>
                    <p class="font-size-sm">
                        <span class="text-primary"></span>
                        2021-06-12 09:06:45                        </p>
                    <p>
                        sfd                        </p>
                </div>
            </a>
        </div>
        <!-- END Story -->


        <!-- Story -->
        <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
            <a class="block block-rounded block-link-pop"
               href="be_pages_blog_story.php?id=12">
                <img class="img-fluid" src="/images/news/9/笑脸1413830.png" alt="">
                <div class="block-content">
                    <h4 class="mb-1">asdasd</h4>
                    <p class="font-size-sm">
                        <span class="text-primary"></span>
                        2021-06-12 09:06:45                        </p>
                    <p>
                        sfd                        </p>
                </div>
            </a>
        </div>
        <!-- END Story -->


        <!-- Story -->
        <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
            <a class="block block-rounded block-link-pop"
               href="be_pages_blog_story.php?id=13">
                <img class="img-fluid" src="/images/news/9/笑脸1413830.png" alt="">
                <div class="block-content">
                    <h4 class="mb-1">asdasd</h4>
                    <p class="font-size-sm">
                        <span class="text-primary"></span>
                        2021-06-12 09:06:45                        </p>
                    <p>
                        sfd                        </p>
                </div>
            </a>
        </div>
        <!-- END Story -->


        <!-- Story -->
        <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
            <a class="block block-rounded block-link-pop"
               href="be_pages_blog_story.php?id=14">
                <img class="img-fluid" src="/images/news/9/笑脸1413830.png" alt="">
                <div class="block-content">
                    <h4 class="mb-1">asdasd</h4>
                    <p class="font-size-sm">
                        <span class="text-primary"></span>
                        2021-06-12 09:06:45                        </p>
                    <p>
                        sfd                        </p>
                </div>
            </a>
        </div>
        <!-- END Story -->

    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul id="index-ul" class="pagination justify-content-center push">
            <li class="page-item active" data-index="1">
                <a class="page-link">1</a>
            </li>
            <li class="page-item" data-index="2">
                <a class="page-link"
                   href="javascript:void(0)">2</a>
            </li>
        </ul>
    </nav>
    <!-- END Pagination -->
</div>
<!-- END Page Content -->
<!--Footer Section Start-->
<div class="footer-area">
    <div class="container">
        <div class="footer-widget-area section-padding-6">
            <div class="row justify-content-between">

                <!--Footer Widget Start-->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <a class="footer-logo" href="#"><img src="/assets/images/logo/logo2.png" alt=""></a>
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
<script>
    function get_news(index) {
        $.post(
            '../backend/news-index.php',
            {
                'index': index
            },
            function (data) {
                console.log(data)
                $('#news-wrapper').html(data);
            }
        )
        // $('#news-wrapper').html('<div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn"> <a class="block block-rounded block-link-pop" href="be_pages_blog_story.php?id=9"> <img class="img-fluid" src="/images/news/9/笑脸1413830.png" alt=""><div class="block-content"><h4 class="mb-1">asdasd</h4><p class="font-size-sm"> <span class="text-primary"></span>2021-06-12 09:06:45                </p> <p>sfd                </p> </div> </a> </div>')
    }

    function index_active(index) {
        $('#index-ul').find('.page-item').removeClass('active');
        $('#index-ul').find('.page-item').eq(index - 1).addClass('active');
        get_news(index);
    }

    function index_init() {
        $('.page-item').on('click', function () {
            let index = $(this).attr('data-index');
            index_active(index);
        })
        // get_news(1)
    }

    index_init()
</script>

<script src="/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="/assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="/assets/js/plugins.min.js"></script>
<script src="/assets/js/main.js"></script>

</main>
<!-- END Main Container -->

<!-- Footer -->
<!--<footer id="page-footer" class="bg-body-light">-->
<!--    <div class="content py-0">-->
<!--        <div class="row font-size-sm">-->
<!--            <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">-->
<!--                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>-->
<!--            </div>-->
<!--            <div class="col-sm-6 order-sm-1 text-center text-sm-left">-->
<!--                <a class="font-w600" href="https://1.envato.market/r6y" target="_blank">--><!--</a> &copy; <span data-toggle="year-copy"></span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
<!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
    Dashmix JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/js.cookie.min.js
-->
<script src="assets/js/dashmix.core.min.js"></script>

<!--
    Dashmix JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="assets/js/dashmix.app.min.js"></script>
</body>
</html>
