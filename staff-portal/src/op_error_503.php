<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo22@2x.jpg');">
    <div class="hero bg-white-95 align-items-sm-start">
        <div class="hero-inner">
            <div class="content content-full">
                <div class="px-3 py-5 text-center text-sm-right">
                    <div class="display-1 text-muted font-w700">503</div>
                    <h1 class="h2 font-w700 mt-5 mb-3">Oops.. You just found an error page..</h1>
                    <h2 class="h3 font-w400 text-muted mb-5">We are sorry but our service is currently not available..</h2>
                    <a class="btn btn-hero-primary" href="be_pages_error_all.php">
                        <i class="fa fa-arrow-left mr-1"></i> Back to all Errors
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