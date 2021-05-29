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
                                <li><a href="/index.php">主页</a></li>
                                <li>
                                    <a href="/trading/shop-list.php">商店</a>

                                    <ul class="mega-sub-menu">
                                        <li class="mega-dropdown">
                                            <a class="mega-title">鲜花颜色</a>

                                            <ul class="mega-item">
                                                <li><a href="/trading/shop-list.php?color=pink">粉色</a></li>
                                                <li><a href="/trading/shop-list.php?color=white">白色</a></li>
                                                <li><a href="/trading/shop-list.php?color=blue">蓝色</a></li>
                                                <!--                                                        <li><a href="shop-list.php?color=orange">Orange</a></li>-->
                                                <li><a href="/trading/shop-list.php?color=red">红色</a></li>
                                                <li><a href="/trading/shop-list.php?color=yellow">黄色</a></li>
                                                <li><a href="/trading/shop-list.php?color=purple">紫色</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown">
                                            <a class="mega-title">鲜花种类</a>

                                            <ul class="mega-item">
                                                <li><a href="/trading/shop-list.php?type=rose">玫瑰</a></li>
                                                <li><a href="/trading/shop-list.php?type=lily">百合</a></li>
                                                <li><a href="/trading/shop-list.php?type=chrysanthemum">菊花</a></li>
                                                <li><a href="/trading/shop-list.php?type=carnation">康乃馨</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-dropdown">
                                            <a class="mega-title">排序</a>

                                            <ul class="mega-item">
                                                <li><a href="/trading/shop-list.php?sort=best-selling">卖的最好</a></li>
                                                <li><a href="/trading/shop-list.php?sort=title-ascending">按字母顺序, A-Z</a></li>
                                                <li><a href="/trading/shop-list.php?sort=title-descending">按字母顺序, Z-A</a></li>
                                                <li><a href="/trading/shop-list.php?sort=price-ascending">价格, 从低到高</a></li>
                                                <li><a href="/trading/shop-list.php?sort=price-descending">价格, 从高到低</a></li>
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
                                    <a href="/staff-portal/src/be_pages_blog_grid.php">新闻</a>
                                </li>
                                <li>
                                    <a href="#">关于我们</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">公司简介</a></li>
                                        <li><a href="/presentation/employee-style.html">员工风采</a></li>
                                        <li><a href="/sunrise/sunrise.html">日出</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://42.193.97.82/index.php/index/index/index?fromid=<?php echo $_SESSION['uid']; ?>&toid=101">联系我们</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header-meta-info">
                        <div class="header-search">

                            <input type="text" id="searchFor" placeholder="搜索">
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
            <input type="text" id="searchFor2" placeholder="搜索">
            <button onclick="searchfor2()"><i class="icon-search" style="color: #ff1493"></i></button>
        </div>
    </div>

    <div class="site-main-nav">
        <nav class="site-nav">
            <ul class="navbar-mobile-wrapper">
                <li><a href="/index.php">主页</a></li>
                <li>
                    <a href="#">商店</a>

                    <ul class="mega-sub-menu">
                        <li>
                            <a href="/trading/shop-list.php">所有鲜花</a>
                        </li>
                        <li>
                            <a href="#">鲜花颜色</a>

                            <ul class="sub-menu">
                                <li><a href="/trading/shop-list.php?color=pink">粉色</a></li>
                                <li><a href="/trading/shop-list.php?color=white">白色</a></li>
                                <li><a href="/trading/shop-list.php?color=blue">蓝色</a></li>
                                <!--                                                        <li><a href="shop-list.php?color=orange">Orange</a></li>-->
                                <li><a href="/trading/shop-list.php?color=red">红色</a></li>
                                <li><a href="/trading/shop-list.php?color=yellow">黄色</a></li>
                                <li><a href="/trading/shop-list.php?color=purple">紫色</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">鲜花种类</a>

                            <ul class="sub-menu">
                                <li><a href="/trading/shop-list.php?type=rose">玫瑰</a></li>
                                <li><a href="/trading/shop-list.php?type=lily">百合</a></li>
                                <li><a href="/trading/shop-list.php?type=chrysanthemum">菊花</a></li>
                                <li><a href="/trading/shop-list.php?type=carnation">康乃馨</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">排序</a>

                            <ul class="sub-menu">
                                <li><a href="/trading/shop-list.php?sort=best-selling">卖的最好</a></li>
                                <li><a href="/trading/shop-list.php?sort=title-ascending">按字母顺序,A-Z</a></li>
                                <li><a href="/trading/shop-list.php?sort=title-descending">按字母顺序,Z-A</a></li>
                                <li><a href="/trading/shop-list.php?sort=price-ascending">价格,由低到高排序</a></li>
                                <li><a href="/trading/shop-list.php?sort=price-descending">价格,由高到低排序</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="/staff-portal/src/be_pages_blog_grid.php">新闻</a>
                </li>
                <li>
                    <a href="#">关于我们</a>
                    <ul class="sub-menu">
                        <li><a href="#">公司简介</a></li>
                        <li><a href="/presentation/employee-style.html">员工风采</a></li>
                        <li><a href="/sunrise/sunrise.html">日出</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">联系我们</a></li>
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
</script>