<?php
//staff登陆检测
require '../../utils/check-staff-login.php';
?>
<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'zh') {
    echo '<script>location.href="be_comp_chat-zh.php";</script>';
}
?>
<script src="/js/jquery-3.5.1.js"></script>

<div class="content">
    <iframe src="http://42.193.97.82/index.php/index/index/lists?fromid=101"
            id="frame"
            class="frame"
            height="100%"
            width="100%"
            frameborder="0"
            scrolling="auto"
    ></iframe>
</div>
<script type="text/javascript">
    function changeFrameHeight() {
        $('.frame').height(document.documentElement.clientHeight - 56);
        // ifm.height = document.documentElement.clientHeight - 56;
    }

    window.onresize = function () {
        changeFrameHeight();
    }
    window.onLoad = function () {
        setTimeout(function () {
            changeFrameHeight();
        }, 500)
    };
    $(function () {
        changeFrameHeight();
    });
</script>


<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
