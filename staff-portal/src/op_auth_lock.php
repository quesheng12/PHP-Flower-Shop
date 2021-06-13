<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<!-- jQuery Vide for video backgrounds, for more examples you can check out https://github.com/VodkaBears/Vide -->
<div class="bg-video" data-vide-bg="<?php echo $dm->assets_folder; ?>/media/videos/city_night" data-vide-options="posterType: jpg">
    <div class="row no-gutters bg-danger-op">
        <!-- Meta Info Section -->
        <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
            <div class="p-3">
                <p class="display-4 font-w700 text-white mb-0">
                    Visualise your idea..
                </p>
                <p class="font-size-h1 font-w600 text-white-75 mb-0">
                    ..and build it!
                </p>
            </div>
        </div>
        <!-- END Meta Info Section -->

        <!-- Main Section -->
        <div class="hero-static col-md-6 d-flex align-items-center bg-white">
            <div class="p-3 w-100">
                <!-- Header -->
                <div class="text-center">
                    <a class="link-fx text-danger font-w700 font-size-h1" href="index.php">
                        <span class="text-dark">Dash</span><span class="text-danger">mix</span>
                    </a>
                    <p class="text-uppercase font-w700 font-size-sm text-muted">Account Lock Screen</p>
                </div>
                <!-- END Header -->

                <!-- User -->
                <div class="py-4 text-center">
                    <?php $dm->get_avatar(10, '', 96); ?>
                    <p class="mt-3 mb-0 font-w600 font-size-lg">
                        John Doe
                    </p>
                    <p class="mb-0 text-muted font-italic">
                        Web Developer
                    </p>
                </div>
                <!-- END User -->

                <!-- Unlock Form -->
                <!-- jQuery Validation (.js-validation-lock class is initialized in js/pages/op_auth_lock.min.js which was auto compiled from _js/pages/op_auth_lock.js) -->
                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <div class="row no-gutters justify-content-center">
                    <div class="col-sm-8 col-xl-6">
                        <form class="js-validation-lock" action="be_pages_auth_all.php" method="POST">
                            <div class="form-group py-3">
                                <input type="password" class="form-control form-control-lg form-control-alt" id="lock-password" name="lock-password" placeholder="Password..">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-block btn-hero-lg btn-hero-danger">
                                    <i class="fa fa-fw fa-lock-open mr-1"></i> Unlock
                                </button>
                                <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                    <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="op_auth_reminder.php">
                                        <i class="fa fa-exclamation-triangle text-muted mr-1"></i> Forgot password
                                    </a>
                                    <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="staff-login.php">
                                        <i class="fa fa-sign-out-alt text-muted mr-1"></i> Sign Out
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Unlock Form -->
            </div>
        </div>
        <!-- END Main Section -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/vide/jquery.vide.min.js'); ?>
<?php $dm->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/op_auth_lock.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>