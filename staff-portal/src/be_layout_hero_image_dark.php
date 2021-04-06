<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->inc_footer     = false;
$dm->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo10@2x.jpg');">
    <div class="hero bg-primary-dark-op">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <h1 class="display-4 font-w700 text-white mb-3 invisible" data-toggle="appear" data-class="animated fadeInDown">
                    Dash<span class="text-primary-light">mix</span>
                </h1>
                <h2 class="font-w300 text-white-75 mb-5 invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="400">Building your idea is a journey.</h2>
                <div class="invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="800">
                    <a class="btn btn-hero-primary" href="be_layout_hero_image_dark.php">
                        <i class="fa fa-fw fa-rocket mr-1"></i> Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
