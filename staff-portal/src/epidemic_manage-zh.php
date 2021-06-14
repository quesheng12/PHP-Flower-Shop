<?php
//staff登陆检测
require '../../utils/check-staff-login.php';
?>
<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<link href="/plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
<link href="/style/epidemic_manage.css" type="text/css" rel="stylesheet"/>
<script src="/plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>
<script src="/js/jquery-3.5.1.js"></script>

<?php
include('../../utils/conn.php');
$sql = 'SELECT epidemic from general LIMIT 1';
$epi = mysqli_fetch_assoc(mysqli_query($conn, $sql))['epidemic'];
if ($epi) {
    $btn_class = 'button-e';
    $open_str = 'close';
} else {
    $btn_class = 'button-ne';
    $open_str = 'open';
}
?>
<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'en') {
    echo '<script>location.href="epidemic_manage.php";</script>';
}
?>

<!-- Page Content -->
<div class="content">
    <div id='button' class="<?php echo $btn_class; ?>"><i class="fa fa-bell"></i></div>
    <p class="description">
         点击按钮去<span><?php echo $open_str; ?></span>史诗模型
    </p>
    <?php if (!$epi) { ?>
        <p class="description">
            所有离线订单将会被取消并且不能被建立
        </p>
    <?php } ?>
</div>
<!-- END Page Content -->

<script>
    $('#button').on('click', function () {
        xtip.confirm('Are you sure you want to turn <?php if ($epi) {
            echo "off";
        } else {
            echo "on";
        } ?> epidemic mode？', function () {
            $.post('../backend/epidemic_manage.php',
                {},
                function (data, status) {
                    console.log(data)
                    location.reload();
                })
        }, {'title': 'Warning'});
    })
</script>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
