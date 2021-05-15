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
    <link rel="stylesheet" href="../assets/css/style.min.css">
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

<?php include('../template/header.html'); ?>

<div class="content col-md-12">
    <div class="col-md-1"></div>
    <div class="col-md-10 m-auto">
        <div class="col-md-8 col-sm-12">
            <form id="form1" class="form1" method="post">
                <h1 class="h1"><strong>Log In</strong></h1>
                <p class="p"><strong>Don't have an account yet?</strong> <a href="signup.php">Sign up</a></p>
                <input id="i1" type="text" name="username" class="input" placeholder="Username"><br>
                <input id="i2" type="text" name="password" class="input" placeholder="Password"><br>
                <input type="checkbox" class="check1"> Keep me logged in<br>
                <input type="submit" name="submit" class="submit" value="LOG IN" style="border-radius: 2%"><br>
                <a class="a1" href="reset.html">Forgot your username or password?</a>
                <p>By clicking, I confirm that I have read and agree to <br>the Flowershop <a href="">Terms of Service,
                        Privacy Policy.</a></p>
            </form>
        </div>

        <div class="col-md-4 .d-sm-none .d-md-block">
            <img src="../image/login.png" class="imgs"/>
        </div>
    </div>

</div>

<?php include('../template/footer.html'); ?>

<script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="../assets/js/plugins.min.js"></script>
<script src="../assets/js/main.js"></script>
<script>
    $(':submit').click(function () {
        console.log(1111)
        $('#form1').ajaxForm({
            url: 'login_back.php',
            success: function (data, status) {
                console.log(data)
                if (data == 100) {
                    // alert("登录成功")
                    xtip.msg('Login Successfully!')
                    setTimeout(function () {
                        //内容3秒后执行
                        location.href = '../index.php';
                    }, 2000);
                } else if (data == 200) {
                    // alert("用户名或密码错误")
                    xtip.alert('Wrong Username or Password', 'e');
                }
                // alert(status);
            },error:function () {
                console.log(2222)
            }
        });
    });
</script>
</body>
</html>