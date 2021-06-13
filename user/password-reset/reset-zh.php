<!DOCTYPE html>
<html lang="en">
<head>
    <title>Password Reset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Unique Subscribe Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"/>
    <link href="/plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
    <script src="/plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="/js/jquery.form.js"></script>
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
</head>
<body>
<h1></h1>
<div class="main-agile">
    <div class="alert-close"></div>
    <div class="content-wthree">
        <img src="images/send-symbol.png" alt="image">
        <h2>Password Reset</h2>
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <form id="form1" action="" method="post">
            <input type="text" class="email" name="toemail" placeholder="Email" required="required">
            <input type="submit" value="Reset">
        </form>
    </div>
</div>
</body>
<script>
    $(':submit').click(function () {
        $('#form1').ajaxForm({
            url: 'password-reset.php',
            success: function (data, status) {
                console.log(data)
                if (data != 200) {
                    xtip.msg('Send Successfully!')
                } else {
                    xtip.msg('Wrong Email Address');
                }
                // alert(status);
            }, error: function () {
                console.log(2222)
            }
        });
    });
</script>
</html>