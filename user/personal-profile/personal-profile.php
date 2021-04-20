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
    <link rel="shortcut icon" type="image/x-icon" href="../../kugu-asset/images/favicon.png">

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
                location.href = '../login.html';
            }
        });
    </script>
</head>

<body>
<div class="main-wrapper">

    <?php include('../../template/header.html'); ?>

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
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-order">
                            <div class="my-account-order account-wrapper">
                                <h4 class="account-title">Orders</h4>
                                <div class="account-table text-center mt-30 table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="no">No</th>
                                            <th class="name">Name</th>
                                            <th class="date">Date</th>
                                            <th class="status">Status</th>
                                            <th class="total">Total</th>
                                            <th class="action">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mostarizing Oil</td>
                                            <td>Aug 22, 2020</td>
                                            <td>Pending</td>
                                            <td>$100</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Katopeno Altuni</td>
                                            <td>July 22, 2020</td>
                                            <td>Approved</td>
                                            <td>$45</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Murikhete Paris</td>
                                            <td>June 22, 2020</td>
                                            <td>On Hold</td>
                                            <td>$99</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-address">
                            <div class="my-account-address account-wrapper">
                                <h4 class="account-title col-md-12">Address</h4>
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
                                                    <input type="password" name="new-password"
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

    <!--Footer Section Start-->
    <div class="footer-area">
        <div class="container">
            <div class="footer-widget-area section-padding-6">
                <div class="row justify-content-between">

                    <!--Footer Widget Start-->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <a class="footer-logo" href="#"><img src="../../kugu-asset/images/logo/logo-white.png"
                                                                 alt=""></a>
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
                    <img src="../../kugu-asset/images/payment.png" alt="">
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

<script src="../../kugu-asset/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="../../kugu-asset/js/plugins.min.js"></script>
<script src="../../kugu-asset/js/main.js"></script>
<script src="../../js/jquery.form.js"></script>

<!--自用js文件-->
<script src="../../js/personal-profile.js"></script>

</body>

</html>