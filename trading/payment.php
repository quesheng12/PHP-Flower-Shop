<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Payment</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../assets/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="../assets/css/style.min.css">
    <link rel="stylesheet" href="/style/payment.css">
    <link href="/plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
    <script src="/plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>
    <link href="/style/altha/style.css" rel="stylesheet">
    <link href="/style/altha/responsive.css" rel="stylesheet">
    <link href="/style/altha/color.css" rel="stylesheet">

    <!--    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">-->
    <!--    <link rel="icon" href="images/favicon.png" type="image/x-icon">-->
    <!-- Google Fonts -->
    <!--    <link rel="preconnect" href="https://fonts.gstatic.com">-->
    <!--    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;500;600&family=Barlow+Condensed:wght@300;400;500;600;700;800&display=swap"-->
    <!--          rel="stylesheet">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="/js/altha/respond.js"></script><![endif]-->
    <?php
    session_start();
    include('../utils/authcode.php');
    include('../utils/conn.php');
    $price = $_SESSION['price'];
    $id = $_GET['id'];
    $sql = "SELECT value FROM dictionary WHERE input = '" . $id . "'";
    $id = mysqli_fetch_assoc(mysqli_query($conn, $sql))['value'];

    $sql = 'SELECT status, discount FROM orders WHERE id=' . $id;
    $order = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    $status = $order['status'];
    if ($status == "DELIVERY_WAIT_PAYMENT") {
        $price = (float)$price + 5;
    }
    ?>
</head>

<body>
<?php include("../template/header.html"); ?>
<div class="page-wrapper-two">
    <!-- Preloader -->
    <!--    <div class="loader-wrap">-->
    <!--        <div class="preloader"></div>-->
    <!--        <div class="layer layer-one"><span class="overlay"></span></div>-->
    <!--        <div class="layer layer-two"><span class="overlay"></span></div>        -->
    <!--        <div class="layer layer-three"><span class="overlay"></span></div>        -->
    <!--    </div>-->

    <div class="wrapper-box">
        <!-- Bnner Section -->
        <section class="banner-section wow fadeIn">
            <div class="banner-slider-image">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="bg" style="background-image: url(/image/spread_front.png);">
                                <img class="tdcore" src="/image/2dcore.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider-content">
                <!--                <div class="side-text">AVANT</div>-->
                <div class="swiper-container banner-slider">
                    <div class="swiper-wrapper">
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="content-outer">
                                <div class="content-box">
                                    <div class="inner">
                                        <h5>Flower<span>Shop</span></h5>
                                        <h1>Scan the code to pay your order</h1>
                                        <div class="text">
                                            <?php
                                            if ($order['discount'] != 0) {
                                                echo '¥ <del style="color: grey">' . $price . '</del><span style="color: red;"> ' . ($price * (100 - $order['discount']) / 100) . '</span>';
                                            } else {
                                                echo '¥ ' . $price;
                                            }
                                            ?>
                                        </div>
                                        <div class="link-box"><a id="finish-payment" href="#">Finished Payment</a></div>
                                        <div class="link-box"><a id="share" href="#">Share This Order</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Bnner Section -->
    </div>
</div>
<!--End pagewrapper-->
<div id="share-wrapper">
    <!-- <div>
        <div style="font-weight: 700;
    font-size: large;
    color: #e40068;margin-left: 20px;
    margin-top: 10px;">
            Share URL:
        </div>
        <div style="    font-size: medium;
    margin-top: 12px;
    text-align: center;">
            http://123.56.136.219/spread/spread.html?input=<?php echo $_GET['id']; ?>
        </div>
    </div>-->
</div>

<?php include("../template/footer.html"); ?>


<script src="/js/altha/jquery.js"></script>
<script src="/js/altha/popper.min.js"></script>
<script src="/js/altha/bootstrap.min.js"></script>
<script src="/js/altha/wow.js"></script>
<script src="/js/altha/swiper.min.js"></script>
<script src="/js/altha/TweenMax.min.js"></script>
<script src="/js/altha/jquery.nicescroll.min.js"></script>
<script src="/js/altha/util.js"></script>
<!--<script src="/js/altha/scrollbar.js"></script>-->
<script src="/js/altha/script.js"></script>
<script src="/assets/js/plugins.min.js"></script>
<script src="/assets/js/main.js"></script>
<script>
    console.log("<?php echo $price; ?>");
    var option = {
        type: 'noready',
        content: '#share-wrapper',
        title: 'Share',
        width: (document.documentElement.clientWidth / 4) + 'px',
        height: '200px',
        min: true,
        shade: true,
        shadeClose: true,
        app: false,
    }

    if (document.documentElement.clientWidth <= 580) {
        option.app = true;
        option.height = '200px';
    }

    //屏幕尺寸变化时设置弹窗app切换
    $(window).resize(function () {
        var w = document.documentElement.clientWidth;
        if (w <= 580) {
            option.app = true;
            option.height = '100px';
            option.width = (document.documentElement.clientWidth / 2) + 'px'
        } else {
            option.app = false;
            option.height = '300px';
            option.width = (document.documentElement.clientWidth / 2) + 'px'
        }
    })

    function open_form() {
        xtip.open(option);
    }

    console.log('<?php echo str_replace('+', '\+', $_GET['id']);?>');
    $('#finish-payment').on('click', function () {
        $.post('finish_payment.php',
            {'id': '<?php echo str_replace('+', '\+', $_GET['id']);?>'},
            function (data, status) {
                console.log(data)
                if (data == '100') {
                    xtip.msg("Successful payment");
                    setTimeout(function () {
                        location.href = '/trading/cart.html';
                    }, 1000)
                }
            })
    })

    $('#share').on('click', function () {
        open_form();
    })
</script>
</body>
</html>