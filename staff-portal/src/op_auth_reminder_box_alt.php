<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo16@2x.jpg');">
    <div class="row no-gutters justify-content-center bg-black-75">
        <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
            <!-- Reminder Block -->
            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                    <!-- Header -->
                    <div class="mb-2 text-center">
                        <a class="link-fx text-warning font-w700 font-size-h1" href="index.php">
                            <span class="text-dark">Dash</span><span class="text-warning">mix</span>
                        </a>
                        <p class="text-uppercase font-w700 font-size-sm text-muted">Password Reminder</p>
                    </div>
                    <!-- END Header -->

                    <!-- Reminder Form -->
                    <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/op_auth_reminder.min.js which was auto compiled from _js/pages/op_auth_reminder.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-reminder" action="be_pages_auth_all.php" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" id="reminder-credential" name="reminder-credential" placeholder="Username or Email">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-hero-warning">
                                <i class="fa fa-fw fa-reply mr-1"></i> Reset Password
                            </button>
                        </div>
                    </form>
                    <!-- END Reminder Form -->
                </div>
            </div>
            <!-- END Reminder Block -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/op_auth_reminder.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>