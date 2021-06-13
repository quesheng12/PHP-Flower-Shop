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
    <style type="text/css">
        .table-wrapper{
            margin: 10px 200px 200px;
            /*margin: auto;*/
            box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
        }

        .fl-table {
            border-radius: 5px;
            font-size: 12px;
            font-weight: normal;
            border: none;
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
            background-color: white;
        }

        .fl-table td, .fl-table th {
            text-align: center;
            padding: 8px;
        }

        .fl-table td {
            border-right: 1px solid #f8f8f8;
            font-size: 12px;
        }

        .fl-table thead th {
            color: #ffffff;
            background: #4FC3A1;
        }


        .fl-table thead th:nth-child(odd) {
            color: #ffffff;
            background: #324960;
        }

        .fl-table tr:nth-child(even) {
            background: #F8F8F8;
        }

        /* Responsive */

        @media (max-width: 767px) {
            .fl-table {
                display: block;
                width: 100%;
            }
            .table-wrapper:before{
                content: "Scroll horizontally >";
                display: block;
                text-align: right;
                font-size: 11px;
                color: white;
                padding: 0 0 10px;
            }
            .fl-table thead, .fl-table tbody, .fl-table thead th {
                display: block;
            }
            .fl-table thead th:last-child{
                border-bottom: none;
            }
            .fl-table thead {
                float: left;
            }
            .fl-table tbody {
                width: auto;
                position: relative;
                overflow-x: auto;
            }
            .fl-table td, .fl-table th {
                padding: 20px .625em .625em .625em;
                height: 60px;
                vertical-align: middle;
                box-sizing: border-box;
                overflow-x: hidden;
                overflow-y: auto;
                width: 120px;
                font-size: 13px;
                text-overflow: ellipsis;
            }
            .fl-table thead th {
                text-align: left;
                border-bottom: 1px solid #f7f7f9;
            }
            .fl-table tbody tr {
                display: table-cell;
            }
            .fl-table tbody tr:nth-child(odd) {
                background: none;
            }
            .fl-table tr:nth-child(even) {
                background: transparent;
            }
            .fl-table tr td:nth-child(odd) {
                background: #F8F8F8;
                border-right: 1px solid #E6E4E4;
            }
            .fl-table tr td:nth-child(even) {
                border-right: 1px solid #E6E4E4;
            }
            .fl-table tbody td {
                display: block;
                text-align: center;
            }
        }
    </style>
</head>
<body>
<div class="main-wrapper">

    <?php include('../../template/header.php'); ?>

    <div class="overlay"></div>
    <!--Overlay-->
    <div style="margin-left: 14%">
        <h2 style="font-size: 110%">快速升级策略</h2><br>
        <div>
            <div>
                <h3 style="color: red; font-size: 100%">一步升级1级</h3><br>
                <div>积分制用于以合理的方式回馈客户。让我们在这里做一个简单的介绍！</div><br>
            </div>
            <div>
                <h3 style="color: red; font-size: 100%">经验，等级的来源</h3><br>
                <div>我们花店的积分制为顾客定义了等级。一个高水平的人在购买产品时可以得到更多的折扣，也有资格购买有限的产品。
                    <br>用户在购买我们的花卉产品时可以获得体验。用户购买的产品越多，用户的水平就越高，用户可以获得的折扣也就越多。
                </div><br>
                <h3 style="color: green; font-size: 100%">成绩和经验的比较</h3><br>
                <div class="table-wrapper" style="margin-right: 30%;text-align: center">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>等级</th>
                            <th>经验</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>100</td>


                        </tr>
                        <tr>
                            <td>2</td>
                            <td>200</td>


                        </tr>
                        <tr>
                            <td>3</td>
                            <td>300</td>


                        </tr>
                        <tr>
                            <td>4</td>
                            <td>400</td>

                        </tr>
                        <tr>
                            <td>5</td>
                            <td>500</td>

                        </tr>
                        <tr>
                            <td>6</td>
                            <td>600</td>


                        </tr>
                        <tr>
                            <td>
                                MAX
                            </td>
                            <td>600+
                            </td>
                        </tr>

                        <tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>
    <div>

    </div>

    <?php include('../../template/footer.html'); ?>
</div>
</body>
