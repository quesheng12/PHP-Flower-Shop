<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<script src="../../js/jquery-3.5.1.js"></script>

<!--<link rel="stylesheet" href="/Group9-web/kugu-asset/css/plugins-min/plugins.min.css">-->
<div id="content" class="content">
    <iframe src="http://chat.com/index.php/index/index/lists?fromid=85"
            id="frame"
            frameborder="0"
            scrolling="auto"
            width="100%"
            height="100%"

    ></iframe>
</div>
<script>
    var h=$(window).height();
    // console.log(h)
    $("#content").height(h-150);
    $(window).resize(function() {
         h=$(window).height();
        $("#content").height(h-150);
        // console.log(h)
    });
</script>
<!--<script type="text/javascript">-->
<!--    window.onload = function () {-->
<!--        var dom = document.getElementById("chat");//绑定最外面的div-->
<!---->
<!--        var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;-->
<!---->
<!--        var observer = new MutationObserver(function (e) {-->
<!--            height = dom.offsetHeight + 'px';-->
<!--            //window.parent.postMessage(height, '*')  发送给父页面-->
<!--        });-->
<!---->
<!--        var options = {-->
<!--            childList: true,-->
<!--            attributes: true,-->
<!--            subtree: true,-->
<!--        };-->
<!--        observer.observe(dom, options);-->
<!--    }-->
<!--</script>-->


<!--<script type="text/javascript">-->
<!--    function changeFrameHeight(){-->
<!--        var ifm= document.getElementById("frame");-->
<!--        ifm.height=document.documentElement.clientHeight-56;-->
<!--    }-->
<!--    window.onresize=function(){ changeFrameHeight();}-->
<!--    $(function(){changeFrameHeight();});-->
<!--</script>-->

<!--<script type="text/javascript">-->
<!--    window.onresize = function () {-->
<!--        console.log($(window).height())-->
<!--    }-->
<!--</script>-->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
