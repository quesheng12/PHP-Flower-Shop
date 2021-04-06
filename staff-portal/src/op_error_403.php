<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo18@2x.jpg');">
    <div class="hero bg-gd-fruit-op align-items-sm-start">
        <div class="hero-inner">
            <div class="content content-full">
                <div class="px-3 py-5 text-center text-sm-left">
                    <div class="display-1 text-warning font-w700 invisible" data-toggle="appear">403</div>
                    <h1 class="h2 font-w700 text-white mt-5 mb-3 invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="300">Oops.. You just found an error page..</h1>
                    <h2 class="h3 font-w400 text-white-75 mb-5 invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="450">We are sorry but you do not have permission to access this page..</h2>
                    <div class="invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                        <a class="btn btn-hero-light" href="be_pages_error_all.php">
                            <i class="fa fa-arrow-left mr-1"></i> Back to all Errors
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>