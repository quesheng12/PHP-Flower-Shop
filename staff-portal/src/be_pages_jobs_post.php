<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/select2/css/select2.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero Section -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo21@2x.jpg');">
    <div class="bg-gd-white-op-rl">
        <div class="content content-boxed text-center py-5">
            <h1 class="h2 mb-2">Post a new Job</h1>
            <p class="font-size-lg font-w400 text-muted mb-0">
                1 more remaining, <a href="javascript:void(0)">upgrade your account today</a>!
            </p>
        </div>
    </div>
</div>
<!-- END Hero Section -->

<!-- Page Content -->
<div class="content content-boxed">
    <!-- Current Jobs -->
    <h2 class="content-heading">
        <i class="fa fa-briefcase text-muted mr-1"></i> Your current jobs
    </h2>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="d-sm-flex">
                <div class="ml-sm-2 mr-sm-4 py-2 text-center">
                    <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                        <i class="fab fa-fw fa-cloudsmith"></i>
                    </a>
                    <a class="btn btn-sm btn-light" href="be_pages_jobs_apply.php">
                        <i class="fa fa-pencil-alt text-info"></i>
                    </a>
                    <a class="btn btn-sm btn-light" href="be_pages_jobs_apply.php">
                        <i class="fa fa-times text-danger"></i>
                    </a>
                </div>
                <div class="py-2">
                    <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                        React Developer
                    </a>
                    <div class="font-size-sm font-w600 text-muted mb-2">
                        Development - 3 hours ago
                    </div>
                    <p class="text-muted mb-2">
                        Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                    </p>
                    <div>
                        <a class="badge badge-primary font-w600" href="javascript:void(0)">Web</a>
                        <a class="badge badge-primary font-w600" href="javascript:void(0)">React</a>
                        <a class="badge badge-primary font-w600" href="javascript:void(0)">Social</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="d-sm-flex">
                <div class="ml-sm-2 mr-sm-4 py-2 text-center">
                    <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                        <i class="fab fa-fw fa-cloudsmith"></i>
                    </a>
                    <a class="btn btn-sm btn-light" href="be_pages_jobs_apply.php">
                        <i class="fa fa-pencil-alt text-info"></i>
                    </a>
                    <a class="btn btn-sm btn-light" href="be_pages_jobs_apply.php">
                        <i class="fa fa-times text-danger"></i>
                    </a>
                </div>
                <div class="py-2">
                    <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                        SEO Ninja
                    </a>
                    <div class="font-size-sm font-w600 text-muted mb-2">
                        Marketing - 10 hours ago
                    </div>
                    <p class="text-muted mb-2">
                        Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                    </p>
                    <div>
                        <a class="badge badge-primary font-w600" href="javascript:void(0)">Web</a>
                        <a class="badge badge-primary font-w600" href="javascript:void(0)">SEO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Current Jobs -->

    <!-- Post Job form -->
    <h2 class="content-heading">
        <i class="fa fa-plus text-success mr-1"></i> Post a new Job
    </h2>
    <form action="be_pages_jobs_post.php" method="POST">
        <div class="block block-rounded bg-white">
            <!-- Job Information section -->
            <div class="block-content block-content-full">
                <h2 class="content-heading">Job Information</h2>
                <div class="row items-push">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            Please fill all the required Job information
                        </p>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="form-group">
                            <label for="post-title">Title</label>
                            <input type="text" class="form-control" id="post-title" name="post-title">
                        </div>
                        <div class="form-group">
                            <label for="post-location">Location</label>
                            <input type="text" class="form-control" id="post-location" name="post-location">
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="post-salary-min">Salary</label>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" id="post-salary-min" name="post-salary-min" placeholder="Min">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" id="post-salary-max" name="post-salary-max" placeholder="Max">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="post-description">Description</label>
                            <textarea class="form-control" id="post-description" name="post-description" rows="6"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Job Information section -->

            <!-- Job Meta section -->
            <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
            <!-- For more info and examples you can check out https://github.com/select2/select2 -->
            <div class="block-content block-content-full">
                <h2 class="content-heading">Job Meta</h2>
                <div class="row items-push">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            A few extra meta fields and we are almost done
                        </p>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="form-group">
                            <label for="post-type">Type</label>
                            <select class="js-select2 form-control" id="post-type" name="post-type" style="width: 100%;" data-placeholder="Choose type..">
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="1">Full Time</option>
                                <option value="2">Freelance</option>
                                <option value="3">Part Time</option>
                                <option value="4">Internship</option>
                                <option value="5">Temporary</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="post-category">Category</label>
                            <select class="js-select2 form-control" id="post-category" name="post-category" style="width: 100%;" data-placeholder="Choose category..">
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="1">Accounting</option>
                                <option value="2">Counseling</option>
                                <option value="3">Administration</option>
                                <option value="4">Human Resources</option>
                                <option value="5">IT and Computers</option>
                                <option value="6">Design</option>
                                <option value="7">Development</option>
                                <option value="8">Management</option>
                                <option value="9">Marketing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="post-tags">Tags</label>
                            <select class="js-select2 form-control" id="post-tags" name="post-tags" style="width: 100%;" data-placeholder="Choose tags.." multiple>
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="1">Web</option>
                                <option value="2">React</option>
                                <option value="3">Social</option>
                                <option value="4">SEO</option>
                                <option value="5">WordPress</option>
                                <option value="6">Angular</option>
                                <option value="7">CMS</option>
                                <option value="8">JavaScript</option>
                                <option value="9">Vue.js</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Job Meta section -->

            <!-- Files section -->
            <div class="block-content">
                <h2 class="content-heading">Related Files/Images</h2>
                <div class="row items-push">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            Feel free to upload any Job related images or other files
                        </p>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="form-group">
                            <div class="custom-file">
                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="post-files" name="post-files" multiple>
                                <label class="custom-file-label" for="post-files">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Files section -->

            <!-- Submit Form -->
            <div class="block-content block-content-full pt-0">
                <div class="form-group row">
                    <div class="col-lg-6 offset-lg-5">
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-plus mr-1"></i> Post new Job
                        </button>
                    </div>
                </div>
            </div>
            <!-- END Submit Form -->
        </div>
    </form>
    <!-- END Post Job Form -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/select2/js/select2.full.min.js'); ?>

<!-- Page JS Helpers (Select2 plugin) -->
<script>jQuery(function(){ Dashmix.helpers(['select2']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
