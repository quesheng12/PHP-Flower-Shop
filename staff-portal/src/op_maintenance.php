<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo24@2x.jpg');">
    <div class="hero bg-black-90">
        <div class="hero-inner">
            <div class="content content-full">
                <div class="px-3 py-5 text-center">
                    <div class="mb-3">
                        <a class="link-fx font-w700 font-size-h1" href="index.php">
                            <span class="text-white">Dash</span><span class="text-primary">mix</span>
                        </a>
                        <p class="text-uppercase font-w700 font-size-sm text-muted">Maintenance Mode</p>
                    </div>
                    <h1 class="text-white font-w700 mt-5 mb-3">Working on some stuff..</h1>
                    <h2 class="h3 text-white-75 font-w400 text-muted mb-5">Don’t worry though, we’ll be back soon!</h2>
                    <a class="btn btn-hero-primary mb-3" href="op_status.php">
                        <i class="fa fa-flask mr-1"></i> Check out Status Page
                    </a>
                    <br>
                    <a class="btn btn-sm btn-dark" href="be_pages_generic_blank.php">
                        <i class="fa fa-arrow-left mr-1"></i> Go Back
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