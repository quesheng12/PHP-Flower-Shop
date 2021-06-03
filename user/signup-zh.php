<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'en') {
    echo '<script>location.href="signup.php";</script>';
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>注册</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/demo.css"/>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../kugu-asset/css/helper.css">
    <link rel="stylesheet" href="../kugu-asset/css/plugins-min/plugins.min.css">
    <link rel="stylesheet" href="../kugu-asset/css/style.min.css">
    <link rel="stylesheet" href="../style/login-signup.css">
    <link href="../plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
    <link rel="shortcut  icon" href="../images/favicon.ico" type="image/x-icon"/>
    <script src="../plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.form.js"></script>
</head>
<body>

<?php include('../template/header-zh.php'); ?>

<div class="content col-md-12">
    <div class="col-md-1"></div>
    <div class="col-md-10 m-auto">
        <div class="col-md-8 col-sm-12">
            <form id="form1" class="form1" method="post">
                <h1 class="h1"><strong>注册</strong></h1>
                <p class="p"><strong>已有账户? </strong><a href="login-zh.php">登陆</a></p>
                <input type="text" class="input" name="username" placeholder="用户名"><br>
                <input type="password" id="p1" class="input" name="password" placeholder="密码"><br>
                <input type="password" id="p2" class="input" placeholder="确认密码"><br>
                <!--            <input type="text" class="input" placeholder="Telephone Number"><br>-->
                <input type="submit" class="submit" name="submit" onclick="" value="注册"><br>
                <p>我确认已阅读并同意<strong>花店</strong>的<br> <a href="">服务条款、隐私政策。</a></p>
            </form>
        </div>

        <div class="col-md-4 .d-sm-none .d-md-block">
            <img src="../image/signup.jpg" class="imgs"/>
        </div>
    </div>

</div>

<?php include('../template/footer-zh.html'); ?>

<script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="../assets/js/plugins.min.js"></script>
<script src="../assets/js/main.js"></script>

<script>
    $(':submit').on('click', function (event) {
        if ($("#p1").val() === $("#p2").val()) {
            $('#form1').ajaxForm({
                url: 'signup_back.php',
                success: function (data, status) {
                    if (data === 100) {
                        // alert("注册成功")
                        xtip.msg('注册成功！');
                        setTimeout(function () {
                            //内容3秒后执行
                            location.href = '../index.php';
                        }, 2000);
                    } else if (data === 200) {
                        // alert("用户名重复")
                        xtip.alert('用户名已存在', 'e');
                    } else if (data === 300) {
                        // alert("注册失败")
                        xtip.alert('注册失败', 'e');
                    }
                }
            });
        } else {
            xtip.msg("两次密码不一致");
            return false;
        }
    });
</script
</body>
</html>