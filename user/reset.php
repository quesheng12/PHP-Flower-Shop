<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'zh') {
    echo '<script>location.href="reset-zh.php";</script>';
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Login</title>
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
    <script src="../plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.form.js"></script>
</head>
<body>

<?php include('../template/header.php'); ?>

<div class="content col-md-12">
    <div class="col-md-1"></div>
    <div class="col-md-10 m-auto">
        <div class="col-md-8 col-sm-12">
            <form id="form1" class="form1" method="post">
                <h1><strong>Reset Password</strong></h1>
                <input id="id" type="hidden" name="id">
                <input id="p1" type="password" name="password" class="input" placeholder="Password"><br>
                <input id="p2" type="password" class="input" placeholder="Confirm Password"><br>
                <input type="submit" class="submit" value="Confirm"><br>
                <p>By clicking, I confirm that I have read and agree to <br>the Flowershop <a href="">Terms of Service,
                        Privacy Policy.</a></p>
            </form>
        </div>

        <div class="col-md-4 .d-sm-none .d-md-block">
            <img src="../image/reset.jpg" class="imgs"/>
        </div>
    </div>

</div>

<?php include('../template/footer.html'); ?>

<script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="../assets/js/plugins.min.js"></script>
<script src="../assets/js/main.js"></script>
<script>
    $('#id').val(getQueryVariable('id'));

    $(':submit').click(function () {
        if ($('#p1').val() == $('#p2').val()) {
            $('#form1').ajaxForm({
                url: 'reset-back.php',
                success: function (data, status) {
                    console.log(data)
                    if (data == 100) {
                        // alert("登录成功")
                        xtip.msg('Reset Successfully!')
                        setTimeout(function () {
                            //内容3秒后执行
                            location.href = '../index.php';
                        }, 2000);
                    } else if (data == 200) {
                        // alert("用户名或密码错误")
                        xtip.alert('Something Wrong', 'e');
                    }
                    // alert(status);
                }, error: function () {
                    console.log(2222)
                }
            });
        } else {
            xtip.msg("Two passwords not match");
        }

    });

    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        return (false);
    }
</script>
</body>
</html>