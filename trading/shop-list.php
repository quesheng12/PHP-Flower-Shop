<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop List</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut  icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/helper.css">
    <link rel="stylesheet" href="../assets/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="../assets/css/style.min.css">
    <link href="../plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
    <script src="../plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>
</head>

<body>

    <div class="main-wrapper">

        <?php include('../template/header.html'); ?>

        <!--Page Banner Start-->
        <div class="page-banner" style="background-image: url(../assets/images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">Products</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--Page Banner End-->

        <!--Shop Start-->
        <div class="shop-page section-padding-6">
            <div class="container">

                <!--Shop Top Bar Start-->
                <div class="shop-top-bar d-sm-flex align-items-center justify-content-between">
                    <div class="top-bar-btn">
                        <ul class="nav" role="tablist">
                            <li class="nav-item"><a class="nav-link grid" data-toggle="tab" href="#grid" role="tab"></a></li>
                            <li class="nav-item"><a class="nav-link list active" data-toggle="tab" href="#list" role="tab"></a></li>
                        </ul>
                    </div>
                    <div class="top-bar-sorter">
                        <div class="sorter-wrapper d-flex align-items-center">
                            <label>Sort by:</label>
                            <select class="sorter wide" name="SortBy" id="SortBy" onchange="SortBy()">
                                <option value="best-selling">Best Selling</option>
                                <option value="title-ascending">Alphabetically, A-Z</option>
                                <option value="title-descending">Alphabetically, Z-A</option>
                                <option value="price-ascending">Price, low to high</option>
                                <option value="price-descending">Price, high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="top-bar-page-amount">

                    </div>
                </div>
                <!--Shop Top Bar End-->


                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="grid" role="tabpanel">

                    </div>
                    <div class="tab-pane fade show active" id="list" role="tabpanel">

                    </div>
                </div>


                <!--Pagination Start-->
                <div class="page-pagination">

                </div>
                <!--Pagination End-->


            </div>
        </div>
        <!--Shop End-->


        <!--Footer Section Start-->
        <div class="footer-area">
            <div class="container">
                <div class="footer-widget-area section-padding-6">
                    <div class="row justify-content-between">

                        <!--Footer Widget Start-->
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <a class="footer-logo" href="#"><img src="../assets/images/logo/logo2.png" alt=""></a>
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
                                    <h4 class="product-title"></h4>
                                    <div class="thumb-price">
                                        <span class="current-price"></span>

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
                                    <p class="description"></p>

                                    <div class="quick-view-quantity-addcart d-flex flex-wrap">
                                        <div action="#">
                                            <div class="quantity d-inline-flex">
                                                <button type="button" class="sub"><i class="ti-minus"></i></button>
                                                <input type="text" value="1" />
                                                <button type="button" class="add"><i class="ti-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="addcart-btn">
                                            <button class="btn btn-primary add_to_cart">Add to cart</button>
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


    <!--====== Use the minified version Apendix listed below for better performance and remove the Apendix listed above ======-->
    <script src="../assets/js/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>


    <!-- Google Map js -->
    <script src="http://www.google.cn/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
    <script src="../assets/js/map-script.js"></script>

    <script>
        let num = 0;
        let page = 1;
        let sort = 'best-selling';
        let search2 = '';
        let color = '';
        let type = '';
        if(getQueryVariable('color')){
            color = getQueryVariable('color');
        }
        if(getQueryVariable('type')){
            type = getQueryVariable('type');
        }
        if(getQueryVariable('search')){
            search2 = getQueryVariable('search');
        }
        if(getQueryVariable('sort')){
            // sort = getQueryVariable('sort');
            $('#SortBy').val(getQueryVariable('sort'));
            SortBy();
        }
        $(document).ready(function() {
            page_select(page);
        });

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

        function SortBy() {
            sort = $('#SortBy option:selected').val();
            page_select(1);
        }

        function to(id) {
            window.location.href = 'shop-single.php?id=' + id;
        }
        function pre_page() {
            if(page>1) {
                page_select(page - 1);
            }
            else{
                xtip.alert("It's already the first page!");
            }
        }
        function next_page() {
            if(page < Math.ceil(num/12)){
                page_select(page + 1)
            }
            else{
                xtip.alert("It's already the last page!");
            }

        }
        function page_select(p) {
            page = p;
            $.ajax({
                type: "POST",
                url: "shoplist.php",
                data: {action: 2,
                       color: color,
                       type: type,
                       search: search2
                },
                async: false,
                success: function(data) {
                    if(data!=0) {
                        num = data;
                        let max = p * 12;
                        if (max > num) {
                            max = num;
                        }
                        let str1 = '<p>Showing ' + ((p - 1) * 12 + 1) + ' - ' + max + ' of ' + num + ' result</p>';
                        $('.top-bar-page-amount').html(str1);
                    }
                    else{
                        $('#myTabContent').html('<center>There is nothing here</center>');
                    }
                },
                error: function () {
                    xtip.alert("error");
                }
            });
            $.ajax({
                type: "POST",
                url: "shoplist.php",
                data: {action: 1,
                       color: color,
                       type: type,
                       sort: sort,
                       search: search2,
                       page: p},
                dataType: "json",
                success: function (data) {
                    let grid_html = '<div class="row">\n';
                    let list_html = '';
                    for (let key in data) {
                            grid_html += '<div class="col-lg-3 col-sm-6">\n' +
                                '                                <div class="single-product">\n' +
                                '                                    <div class="product-image">\n' +
                                '                                        <a href="javascript:void(0);" onclick="to(' + data[key]['id'] + ')">\n' +
                                '                                            <img src="' + data[key]['image'] + '" alt="">\n' +
                                '                                        </a>\n' +
                                '                                        <div class="action-links">\n' +
                                '                                            <ul>\n' +
                                '                                                <li><a href="javascript:void(0);" onclick="add_to_cart(' + data[key]['id'] + ', 1)"  data-tooltip="tooltip" data-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>\n' +
                                '                                                <li><a href="javascript:void(0);" data-tooltip="tooltip" data-placement="left" title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-eye"></i></a></li>\n' +
                                '                                            </ul>\n' +
                                '                                        </div>\n' +
                                '                                    </div>\n' +
                                '                                    <div class="product-content text-center">\n' +
                                '                                        <ul class="rating">\n' +
                                '                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>\n' +
                                '                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>\n' +
                                '                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>\n' +
                                '                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>\n' +
                                '                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>\n' +
                                '                                        </ul>\n' +
                                '                                        <h4 class="product-name"><a href="javascript:void(0);" onclick="to(' + data[key]['id'] + ')">' + data[key]['name'] + '</a></h4>\n' +
                                '                                        <div class="price-box">\n' +
                                '                                            <span class="current-price">￥' + data[key]['price'] + '</span>\n' +
                                '                                        </div>\n' +
                                '                                    </div>\n' +
                                '                                </div>\n' +
                                '                            </div>';


                            list_html += '<div class="single-product product-list">\n' +
                                '                            <div class="product-image">\n' +
                                '                                <a href="javascript:void(0);" onclick="to(' + data[key]['id'] + ')">\n' +
                                '                                    <img src="' + data[key]['image'] + '" alt="">\n' +
                                '                                </a>\n' +
                                '\n' +
                                '                                <div class="action-links">\n' +
                                '                                    <ul>\n' +
                                '                                        <li><a href="javascript:void(0);" data-tooltip="tooltip" data-placement="left" title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-eye"></i></a></li>\n' +
                                '                                    </ul>\n' +
                                '                                </div>\n' +
                                '                            </div>\n' +
                                '                            <div class="product-content">\n' +
                                '                                <ul class="rating">\n' +
                                '                                    <li class="rating-on"><i class="fa fa-star-o"></i></li>\n' +
                                '                                    <li class="rating-on"><i class="fa fa-star-o"></i></li>\n' +
                                '                                    <li class="rating-on"><i class="fa fa-star-o"></i></li>\n' +
                                '                                    <li class="rating-on"><i class="fa fa-star-o"></i></li>\n' +
                                '                                    <li class="rating-on"><i class="fa fa-star-o"></i></li>\n' +
                                '                                </ul>\n' +
                                '                                <h4 class="product-name"><a href="javascript:void(0);" onclick="to(' + data[key]['id'] + ')">' + data[key]['name'] + '</a></h4>\n' +
                                '                                <div class="price-box">\n' +
                                '                                    <span class="current-price">￥' + data[key]['price'] + '</span>\n' +
                                '                                </div>\n' +
                                '                                <p>' + data[key]['description'] + '</p>\n' +
                                '\n' +
                                '                                <ul class="action-links">\n' +
                                '                                    <li><a href="javascript:void(0);" onclick="add_to_cart(' + data[key]['id'] + ', 1)" class="add-cart" data-tooltip="tooltip" data-placement="top" title="Add to cart"> Add to cart </a></li>\n' +
                                '                                </ul>\n' +
                                '                            </div>\n' +
                                '                        </div>';
                    }
                    grid_html += '</div>';
                    $('#grid').html(grid_html);
                    $('#list').html(list_html);
                    $('.product-content>:nth-child(6)').hide();
                    $('.product-content>:nth-child(7)').hide();
                },
                error: function () {
                    xtip.alert("error");
                }

            });
            let maxpage = Math.ceil(num/12);
            let html = '<ul class="pagination justify-content-center">\n' +
                '                        <li class="page-item"><a class="page-link prev" id=p0 href="#" onclick="pre_page()">Prev</a></li>\n' +
                '                        <li class="page-item"><a class="page-link" id=p1 href="#" onclick="page_select(' + (p-2) + ')">' + (p-2) + '</a></li>\n' +
                '                        <li class="page-item"><a class="page-link" id=p2 href="#" onclick="page_select(' + (p-1) + ')">' + (p-1) + '</a></li>\n' +
                '                        <li class="page-item"><a class="page-link active" id=p3 href="#" onclick="page_select(' + (p) + ')">' + p + '</a></li>\n' +
                '                        <li class="page-item"><a class="page-link" id=p4 href="#" onclick="page_select(' + (p+1) + ')">' + (p+1) + '</a></li>\n' +
                '                        <li class="page-item"><a class="page-link" id=p5 href="#" onclick="page_select(' + (p+2) + ')">' + (p+2) + '</a></li>\n' +
                '                        <li class="page-item"><a class="page-link next" id=p6 href="#" onclick="next_page()">Next</a></li>\n' +
                '                    </ul>';
            $('.page-pagination').html(html);
            if(p==1){
                $('#p0, #p1, #p2').hide();
            }
            else if(p==2){
                $('#p1').hide();
            }
            if(p==maxpage){
                $('#p4, #p5, #p6').hide();
            }
            else if(p==maxpage-1){
                $('#p5').hide();
            }
            document.body.scrollTop=0;
        }

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
                success: function (data) {
                    xtip.msg("Added Successfully!");
                    console.log(data)
                },
                error: function () {
                    xtip.alert("Please Login First!");
                    window.location.href = '../user/login.php';
                }
            });
        }

    </script>
</body>

</html>