<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="../assets/css/style.min.css">
    <link href="../plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="/style/payment.css">
    <script src="../plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.form.js"></script>
</head>
<body>

<?php include('../template/header.html'); ?>

<div class="content col-md-12">
    <div class="col-md-3"></div>
    <div class="col-md-6 wrapper">
        <p class="info">Scan the QR code below to pay</p>
        <img src="/image/2dcore.png">
        <div class="col-md-12 btn-wrapper">
            <div class="col-md-2"></div>
            <button id="share" class="btn btn-primary col-md-3">Share</button>
            <div class="col-md-2"></div>
            <button class="btn btn-primary col-md-3">Done!</button>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

<?php include('../template/footer.html'); ?>
</body>
</html>