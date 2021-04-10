<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>


<div class="content">
    <iframe src="http://chat.com/index.php/index/index/lists?fromid=85"
            id = "frame"
            height="100%"
            width="100%"
            frameborder="0"
            scrolling="auto"
    ></iframe>
</div>
<script type="text/javascript">
    function changeFrameHeight(){
        var ifm= document.getElementById("frame");
        ifm.height=document.documentElement.clientHeight-56;
    }
    window.onresize=function(){ changeFrameHeight();}
    $(function(){changeFrameHeight();});
</script>


<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
