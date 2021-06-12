<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personnal Profile</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut  icon" href="/images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../../staff-portal/src/assets/css/dashmix.min.css">
    <link rel="stylesheet" href="../../kugu-asset/css/helper.css">
    <link rel="stylesheet" href="../../kugu-asset/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="../../kugu-asset/css/style.min.css">
    <link rel="stylesheet" href="../../style/personal-profile.css">
    <link href="../../plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
    <script src="../../plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>
    <script src="../../kugu-asset/js/vendor/jquery-3.3.1.min.js"></script>
    <script>
        $.get("login-check.php", function (data) {
            if (!data) {
                location.href = '../login.php';
            }
        });
    </script>
    <?php
    session_start();
    include("../../utils/conn.php");
    ?>
</head>

<body>
<div class="main-wrapper">

    <?php include('../../template/header.php'); ?>

    <div class="overlay"></div>
    <!--Overlay-->

    <!--My Account Start-->
    <div class="register-page section-padding-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4">
                    <div class="my-account-menu mt-30">
                        <ul class="nav account-menu-list flex-column">
                            <li>
                                <a class="active" data-toggle="pill" href="#pills-account"><i
                                            class="fa fa-user"></i> Account Details</a>
                            </li>
                            <li>
                                <a data-toggle="pill" href="#pills-order"><i class="fa fa-shopping-cart"></i> Order</a>
                            </li>
                            <li>
                                <a data-toggle="pill" href="#pills-address"><i class="fa fa-map-marker"></i> Address</a>
                            </li>
                            <li>
                                <a data-toggle="pill" href="#pills-edit-account"><i class="fa fa-user"></i> Edit Account</a>
                            </li>
                            <li>
                                <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-md-8 account-right">
                    <div class="tab-content my-account-tab mt-30" id="pills-tabContent">
                        <div class="tab-pane fade active" id="pills-account">
                            <div class="header box col-lg-12 col-md-12">
                                <div class="header__left">
                                    <div class="header__photo"><img
                                                class="header__photo-img"
                                                src="../../kugu-images/main-photo.svg"
                                                alt="Ronald Robertson"></div>
                                    <div class="header__base-info"><h4
                                                class="title titl--h4">Ronald Robertson</h4>
                                    </div>
                                </div>
                                <div class="header__right">
                                    <ul class="header__contact">
                                        <li><span class="overhead">Email: </span><span id="email"></span></li>
                                        <li><span class="overhead">Phone: </span><span id="phone"></span></li>
                                        <li><span class="overhead">Current Level:
                                            <?php
                                            $sql = "select level from user where id=" . $_SESSION['uid'];
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
//                                                echo"<span>".$row['level']."</span>";
                                                if ($row['level'] < 100) {
                                                    echo "<span>" . "1" . "</span>";
                                                    echo "<br>";
                                                    $exp = 100 - $row['level'];
                                                    echo "<span>You have " . $exp . " exp left to upgrade!<a href='Introduction.php' style='border-bottom:1px solid #00F; color:#090'>What is this?</a></span>";
                                                } elseif (100 <= $row['level'] && $row['level'] < 200) {
                                                    echo "<span>" . "2" . "</span>";
                                                    echo "<br>";
                                                    $exp = 200 - $row['level'];
                                                    echo "<span>You have " . $exp . " exp left to upgrade!<a href='Introduction.php' style='border-bottom:1px solid #00F; color:#090'>What is this?</a></span>";
                                                } elseif (200 <= $row['level'] && $row['level'] < 300) {
                                                    echo "<span>" . "3" . "</span>";
                                                    echo "<br>";
                                                    $exp = 300 - $row['level'];
                                                    echo "<span>You have " . $exp . " exp left to upgrade!<a href='Introduction.php'style='border-bottom:1px solid #00F; color:#090'>What is this?</a></span>";
                                                } elseif (300 <= $row['level'] && $row['level'] < 400) {
                                                    echo "<span>" . "4" . "</span>";
                                                    echo "<br>";
                                                    $exp = 400 - $row['level'];
                                                    echo "<span>You have " . $exp . " exp left to upgrade!<a href='Introduction.php'style='border-bottom:1px solid #00F; color:#090'>What is this?</a></span>";
                                                } elseif (400 <= $row['level'] && $row['level'] < 500) {
                                                    echo "<span>" . "5" . "</span>";
                                                    echo "<br>";
                                                    $exp = 500 - $row['level'];
                                                    echo "<span>You have " . $exp . " exp left to upgrade!<a href='Introduction.php'style='border-bottom:1px solid #00F; color:#090'>What is this?</a></span>";
                                                } elseif (500 <= $row['level'] && $row['level'] < 600) {
                                                    echo "<span>" . "6" . "</span>";
                                                    echo "<br>";
                                                    $exp = 600 - $row['level'];
                                                    echo "<span>You have " . $exp . " exp left to upgrade!<a href='Introduction.php'style='border-bottom:1px solid #00F; color:#090'>What is this?</a></span>";
                                                } else {
                                                    echo "<span>" . "MAX" . "</span>";
                                                    echo "<br>";
                                                    echo "<span>You have reached the highest level!<a href='Introduction.php'style='border-bottom:1px solid #00F; color:#090'>What is this?</a> </span>";
                                                }
                                            }
                                            ?></span></li>
                                        <?php


                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-order">
                            <div class="my-account-order account-wrapper">
                                <h4 class="account-title">Orders</h4>
                                <div class="account-table text-center mt-30 table-responsive">
                                    <div id="order-view-modal">
                                        <!--<table id='quick-view-table' class="table table-borderless table-striped table-vcenter font-size-sm">
                                            <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-right" >Unit Cost</th>
                                                <th class="text-right" >Price</th>
                                            </tr>
                                            </thead>
                                            <tbody id='tbody'>
                                            </tbody>
                                        </table>
                                        <div id='btns' class='col-md-12'>
                                        </div>-->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-striped table-vcenter font-size-sm">
                                            <thead>
                                            <tr>
                                                <th class="text-center" style="width: 100px;">ID</th>
                                                <th class="d-none d-sm-table-cell text-center">Submitted</th>
                                                <th>Status</th>
                                                <!--                                                <th class="d-none d-xl-table-cell">Customer</th>-->
                                                <!--                        <th class="d-none d-xl-table-cell text-center">Products</th>-->
                                                <!--                        <th class="d-none d-sm-table-cell text-right">Value</th>-->
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $badges['DELIVERY_WAIT_PAYMENT']['class'] = "badge-secondary";
                                            $badges['DELIVERY_WAIT_PAYMENT']['text'] = "Wait payment";
                                            $badges['OFFLINE_WAIT_PAYMENT']['class'] = "badge-secondary";
                                            $badges['OFFLINE_WAIT_PAYMENT']['text'] = "Wait payment";
                                            $badges['FOR_DELIVERY']['class'] = "badge-info";
                                            $badges['FOR_DELIVERY']['text'] = "For delivery";
                                            $badges['FINISHED']['class'] = "badge-success";
                                            $badges['FINISHED']['text'] = "Finished";
                                            $badges['CANCELED']['class'] = "badge-danger";
                                            $badges['CANCELED']['text'] = "Canceled";
                                            $badges['OFFLINE']['class'] = "badge-warning";
                                            $badges['OFFLINE']['text'] = "Offline";
                                            $badges['DELIVERING']['class'] = "badge-primary";
                                            $badges['DELIVERING']['text'] = "Delivering";

                                            $sql = "select COUNT(id) as num from orders WHERE user_id=" . $_SESSION['uid'] . " ORDER BY time DESC";
                                            $num = mysqli_fetch_assoc(mysqli_query($conn, $sql))['num'];
                                            $sql = "select id,user_id,service,status,time from orders WHERE user_id=" . $_SESSION['uid'] . " ORDER BY time DESC";
                                            $rst = mysqli_query($conn, $sql);
                                            ?>
                                            <?php $n = 0;
                                            while ($arr = mysqli_fetch_assoc($rst)) { ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <a class="font-w600"
                                                           href="be_pages_ecom_order.php?id=<?php echo $arr['id']; ?>">
                                                            <strong>ORD.<?php echo $num - $n++; ?></strong>
                                                        </a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center"><?php echo $arr['time'] ?></td>
                                                    <td class="font-size-base">
                                <span class="badge badge-pill<?php $status = $arr['status'];
                                echo ($badges[$status]['class']) ? " " . $badges[$status]['class'] : ""; ?>"><?php echo $badges[$status]['text']; ?></span>
                                                    </td>
                                                    <!--                                                    <td class="d-none d-xl-table-cell">-->
                                                    <!--                                                        <a class="font-w600"-->
                                                    <!--                                                           href="be_pages_ecom_customer.php">USER.-->
                                                    <?php //echo $arr['user_id']; ?><!--</a>-->
                                                    <!--                                                    </td>-->
                                                    <!--                            <td class="d-none d-xl-table-cell text-center">-->
                                                    <!--                                <a class="font-w600" href="be_pages_ecom_order.php">-->
                                                    <?php //echo rand(1, 9); ?><!--</a>-->
                                                    <!--                            </td>-->
                                                    <!--                            <td class="d-none d-sm-table-cell text-right">-->
                                                    <!--                                <strong>$-->
                                                    <?php //echo rand(25, 2500) . ',' . rand(10, 99); ?><!--</strong>-->
                                                    <!--                            </td>-->
                                                    <td class="text-center font-size-base">
                                                        <a class="btn btn-sm btn-alt-secondary order-view"
                                                           data-id="<?php echo $arr['id']; ?>">
                                                            <i class=" fa fa-fw fa-eye"></i>
                                                        </a>
                                                        <!--                                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">-->
                                                        <!--                                    <i class="fa fa-fw fa-times text-danger"></i>-->
                                                        <!--                                </a>-->
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-address">
                            <div class="my-account-address account-wrapper">
                                <h4 class="account-title">Address</h4>
                                <div id="address-form">
                                    <!--<form id="" method="post" action="address-manage.php"
                                          style="padding: 0 20px">
                                        <input id="address-form-type" type="hidden" name="type" value="">
                                        <input id="address-form-id" type="hidden" name="id" value="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="single-form">
                                                    <input id="form-province" type="text" name="province"
                                                           placeholder="Province*" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="single-form">
                                                    <input id="form-city" type="text" name="city" placeholder="City*"
                                                           required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="single-form">
                                                    <input id="form-area" type="text" name="area" placeholder="Area*"
                                                           required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <input id="form-detail" type="text" name="detail"
                                                           placeholder="Detail Address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input id="form-name" type="text" name="name" placeholder="Name*"
                                                           required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input id="form-phone" type="text" name="phone"
                                                           placeholder="Phone Number*" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6 m-auto">
                                                <div class="single-form">
                                                    <button class="btn btn-primary m-auto" style="display: block">
                                                        Confirm
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>-->
                                </div>
                                <div class="row">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-edit-account">
                            <div class="my-account-details account-wrapper">
                                <h4 class="account-title">Account Details</h4>
                                <div class="account-details">
                                    <form id="edit-personal-profiles" method="post" action="user-information-edit.php">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input id="info-first-name" type="text" name="first_name"
                                                           placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input id="info-last-name" type="text" name="last_name"
                                                           placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <input id="info-email" type="text" name="email"
                                                           placeholder="Email address">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <input id="info-phone" type="text" name="phone"
                                                           placeholder="Phone number">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <h5 class="title">Password change</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <input type="password" name="c-password"
                                                           placeholder="Current Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input id="new-password" type="password" name="new-password"
                                                           placeholder="New Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input type="password" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <button class="btn btn-primary">Save Change</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--My Account End-->

    <?php include('../../template/footer.html'); ?>

</div>
<div id="share-wrapper">
    <!-- <div>
        <div style="font-weight: 700;
    font-size: large;
    color: #e40068;margin-left: 20px;
    margin-top: 10px;">
            Share URL:
        </div>
        <div id='share-url' style="    font-size: medium;
    margin-top: 12px;
    text-align: center;">
            http://123.56.136.219/spread/spread.html?input=
        </div>
    </div>-->
</div>

<script src="../../kugu-asset/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="../../kugu-asset/js/plugins.min.js"></script>
<script src="../../kugu-asset/js/main.js"></script>
<script src="../../js/jquery.form.js"></script>

<!--自用js文件-->
<script src="../../js/personal-profile.js"></script>

</body>

</html>