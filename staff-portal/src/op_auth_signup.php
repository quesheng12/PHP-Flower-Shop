<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo12@2x.jpg');">
    <div class="row no-gutters justify-content-center bg-black-75">
        <!-- Main Section -->
        <div class="hero-static col-md-6 d-flex align-items-center bg-white">
            <div class="p-3 w-100">
                <!-- Header -->
                <div class="mb-3 text-center">
                    <a class="link-fx text-success font-w700 font-size-h1" href="index.php">
                        <span class="text-dark">Dash</span><span class="text-success">mix</span>
                    </a>
                    <p class="text-uppercase font-w700 font-size-sm text-muted">Create New Account</p>
                </div>
                <!-- END Header -->

                <!-- Sign Up Form -->
                <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <div class="row no-gutters justify-content-center">
                    <div class="col-sm-8 col-xl-6">
                        <form class="js-validation-signup" action="be_pages_auth_all.php" method="POST">
                            <div class="py-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg form-control-alt" id="signup-username" name="signup-username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg form-control-alt" id="signup-email" name="signup-email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password" name="signup-password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password-confirm" name="signup-password-confirm" placeholder="Password Confirm">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox custom-control-primary">
                                        <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                        <label class="custom-control-label" for="signup-terms">I agree to Terms &amp; Conditions</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-hero-lg btn-hero-success">
                                    <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                </button>
                                <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                    <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="op_auth_signin.php">
                                        <i class="fa fa-sign-in-alt text-muted mr-1"></i> Sign In
                                    </a>
                                    <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="#" data-toggle="modal" data-target="#modal-terms">
                                        <i class="fa fa-book text-muted mr-1"></i> Read Terms
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Sign Up Form -->
            </div>
        </div>
        <!-- END Main Section -->
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
                    <?php $dm->get_text('small', 5); ?>
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