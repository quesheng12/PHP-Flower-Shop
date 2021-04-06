<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row no-gutters justify-content-center bg-body-dark">
    <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
        <!-- Sign Up Block -->
        <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo12.jpg');">
            <div class="row no-gutters">
                <div class="col-md-6 order-md-1 bg-white">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                        <!-- Header -->
                        <div class="mb-2 text-center">
                            <a class="link-fx text-success font-w700 font-size-h1" href="index.php">
                                <span class="text-dark">Dash</span><span class="text-success">mix</span>
                            </a>
                            <p class="text-uppercase font-w700 font-size-sm text-muted">Create New Account</p>
                        </div>
                        <!-- END Header -->

                        <!-- Sign Up Form -->
                        <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-signup" action="be_pages_auth_all.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-alt" id="signup-username" name="signup-username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-alt" id="signup-email" name="signup-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-alt" id="signup-password" name="signup-password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-alt" id="signup-password-confirm" name="signup-password-confirm" placeholder="Password Confirm">
                            </div>
                            <div class="form-group">
                                <a href="#" data-toggle="modal" data-target="#modal-terms">Terms &amp; Conditions</a>
                                <div class="custom-control custom-checkbox custom-control-primary">
                                    <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                    <label class="custom-control-label" for="signup-terms">I agree</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-hero-success">
                                    <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                </button>
                            </div>
                        </form>
                        <!-- END Sign Up Form -->
                    </div>
                </div>
                <div class="col-md-6 order-md-0 bg-xeco-op d-flex align-items-center">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                        <div class="media">
                            <a class="img-link mr-3" href="javascript:void(0)">
                                <?php $dm->get_avatar(0, 'female', 64, true); ?>
                            </a>
                            <div class="media-body">
                                <p class="text-white font-w600 mb-1">
                                    The service was a valuable asset to improve our conversions and marketing efforts! Thank you!
                                </p>
                                <a class="text-white-75 font-w600" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?>, CEO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Sign Up Block -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>

<!-- Terms Modal -->
<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text('medium', 2); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Terms Modal -->

<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/op_auth_signup.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>