<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo17@2x.jpg');">
    <div class="hero bg-black-75">
        <div class="hero-inner">
            <div class="content content-full">
                <div class="row justify-content-center">
                    <div class="col-md-6 py-5 text-center">
                        <div class="push">
                            <a class="link-fx font-w700 font-size-h1" href="index.php">
                                <span class="text-white">Dash</span><span class="text-primary">mix</span>
                            </a>
                            <p class="text-uppercase font-w700 font-size-sm text-white-75">Coming Soon</p>
                        </div>

                        <!-- Countdown.js (.js-countdown class is initialized in js/pages/op_coming_soon.min.js which was auto compiled from _js/pages/op_coming_soon.js), for more examples you can check out https://github.com/hilios/jQuery.countdown -->
                        <div class="js-countdown"></div>

                        <form class="push" action="op_coming_soon.php" method="POST" onsubmit="return false;">
                            <div class="form-group row justify-content-center">
                                <div class="col-md-10 col-xl-6">
                                    <div class="input-group">
                                        <input type="email" class="form-control border-0" placeholder="Enter your email..">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-outline-light">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a class="btn btn-sm btn-dark" href="be_pages_generic_blank.php">
                            <i class="fa fa-arrow-left mr-1"></i> Go Back to Dashboard
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

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-countdown/jquery.countdown.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/op_coming_soon.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>