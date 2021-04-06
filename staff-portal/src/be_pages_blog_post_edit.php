<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/flatpickr/flatpickr.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Edit Blog Post</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item">Blog</li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full content-boxed">
    <!-- New Post -->
    <form action="be_pages_blog_post_edit.php" method="POST" enctype="multipart/form-data" onsubmit="return false;">
        <div class="block">
            <div class="block-header block-header-default">
                <a class="btn btn-light" href="be_pages_blog_post_manage.php">
                    <i class="fa fa-arrow-left mr-1"></i> Manage Posts
                </a>
                <div class="block-options">
                    <div class="custom-control custom-switch custom-control-success">
                        <input type="checkbox" class="custom-control-input" id="dm-post-edit-active" name="dm-post-edit-active" checked>
                        <label class="custom-control-label" for="dm-post-edit-active">Set post as active</label>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="dm-post-edit-id">ID</label>
                            <input type="text" class="form-control-plaintext" id="dm-post-edit-id" name="dm-post-edit-id" value="150" readonly>
                        </div>
                        <div class="form-group">
                            <label for="dm-post-edit-title">Title</label>
                            <input type="text" class="form-control" id="dm-post-edit-title" name="dm-post-edit-title" placeholder="Enter a title.." value="An adventure of a lifetime">
                        </div>
                        <div class="form-group">
                            <label for="dm-post-edit-slug">Slug (url)</label>
                            <input type="text" class="form-control" id="dm-post-edit-slug" name="dm-post-edit-slug" value="an-adventure-of-a-lifetime" disabled>
                        </div>
                        <div class="form-group">
                            <label for="dm-post-edit-excerpt">Excerpt</label>
                            <textarea class="form-control" id="dm-post-edit-excerpt" name="dm-post-edit-excerpt" rows="3" placeholder="Enter an excerpt..">Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices.</textarea>
                            <div class="form-text text-muted font-size-sm font-italic">Visible on blog post list as a small description of the post.</div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-6">
                                <label>Featured Image</label>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="dm-post-edit-image" name="dm-post-edit-image" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="dm-post-edit-image">Choose a new image</label>
                                </div>
                                <div class="mt-2">
                                    <?php $dm->get_photo(19, false, 'img-fluid'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
                            <!-- For more info and examples you can check out http://ckeditor.com -->
                            <label>Body</label>
                            <textarea id="js-ckeditor" name="dm-post-edit-body">
                                &lt;p&gt;Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.&lt;/p&gt;
                                &lt;p&gt;Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.&lt;/p&gt;
                                &lt;p&gt;Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.&lt;/p&gt;
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Author</label>
                            <div class="form-group row items-push mb-0">
                                <div class="col-md-6 col-xl-4">
                                    <div class="custom-control custom-block custom-control-primary">
                                        <input type="radio" class="custom-control-input" id="dm-post-edit-author-1" name="dm-post-edit-authors" checked>
                                        <label class="custom-control-label" for="dm-post-edit-author-1">
                                            <span class="d-flex align-items-center">
                                                <?php $dm->get_avatar(8, '', 48); ?>
                                                <span class="ml-2">
                                                    <span class="font-w700"><?php $dm->get_name('female'); ?></span>
                                                    <span class="d-block font-size-sm text-muted">15 Posts</span>
                                                </span>
                                            </span>
                                        </label>
                                        <span class="custom-block-indicator">
                                            <i class="fa fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="custom-control custom-block custom-control-primary">
                                        <input type="radio" class="custom-control-input" id="dm-post-edit-author-2" name="dm-post-edit-authors">
                                        <label class="custom-control-label" for="dm-post-edit-author-2">
                                            <span class="d-flex align-items-center">
                                                <?php $dm->get_avatar(15, '', 48); ?>
                                                <span class="ml-2">
                                                    <span class="font-w700"><?php $dm->get_name('male'); ?></span>
                                                    <span class="d-block font-size-sm text-muted">15 Posts</span>
                                                </span>
                                            </span>
                                        </label>
                                        <span class="custom-block-indicator">
                                            <i class="fa fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="custom-control custom-block custom-control-primary">
                                        <input type="radio" class="custom-control-input" id="dm-post-edit-author-3" name="dm-post-edit-authors">
                                        <label class="custom-control-label" for="dm-post-edit-author-3">
                                            <span class="d-flex align-items-center">
                                                <?php $dm->get_avatar(14, '', 48); ?>
                                                <span class="ml-2">
                                                    <span class="font-w700"><?php $dm->get_name('male'); ?></span>
                                                    <span class="d-block font-size-sm text-muted">28 Posts</span>
                                                </span>
                                            </span>
                                        </label>
                                        <span class="custom-block-indicator">
                                            <i class="fa fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="custom-control custom-block custom-control-primary">
                                        <input type="radio" class="custom-control-input" id="dm-post-edit-author-4" name="dm-post-edit-authors">
                                        <label class="custom-control-label" for="dm-post-edit-author-4">
                                            <span class="d-flex align-items-center">
                                                <?php $dm->get_avatar(2, '', 48); ?>
                                                <span class="ml-2">
                                                    <span class="font-w700"><?php $dm->get_name('female'); ?></span>
                                                    <span class="d-block font-size-sm text-muted">3 Posts</span>
                                                </span>
                                            </span>
                                        </label>
                                        <span class="custom-block-indicator">
                                            <i class="fa fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="custom-control custom-block custom-control-primary">
                                        <input type="radio" class="custom-control-input" id="dm-post-edit-author-5" name="dm-post-edit-authors">
                                        <label class="custom-control-label" for="dm-post-edit-author-5">
                                            <span class="d-flex align-items-center">
                                                <?php $dm->get_avatar(5, '', 48); ?>
                                                <span class="ml-2">
                                                    <span class="font-w700"><?php $dm->get_name('female'); ?></span>
                                                    <span class="d-block font-size-sm text-muted">5 Posts</span>
                                                </span>
                                            </span>
                                        </label>
                                        <span class="custom-block-indicator">
                                            <i class="fa fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="custom-control custom-block custom-control-primary">
                                        <input type="radio" class="custom-control-input" id="dm-post-edit-author-6" name="dm-post-edit-authors">
                                        <label class="custom-control-label" for="dm-post-edit-author-6">
                                            <span class="d-flex align-items-center">
                                                <?php $dm->get_avatar(11, '', 48); ?>
                                                <span class="ml-2">
                                                    <span class="font-w700"><?php $dm->get_name('male'); ?></span>
                                                    <span class="d-block font-size-sm text-muted">7 Posts</span>
                                                </span>
                                            </span>
                                        </label>
                                        <span class="custom-block-indicator">
                                            <i class="fa fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-6">
                                <!-- Flatpickr Datetimepicker (.js-flatpickr class is initialized in Helpers.flatpickr()) -->
                                <!-- For more info and examples you can check out https://github.com/flatpickr/flatpickr -->
                                <label for="dm-post-edit-publish-date">Publish Date</label>
                                <input type="text" class="js-flatpickr form-control bg-white" id="dm-post-edit-publish-date" name="dm-post-edit-publish-date" data-enable-time="true" placeholder="Y-m-d H:i" value="2020-01-15 12:22">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content bg-body-light">
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-fw fa-check mr-1"></i> Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- END New Post -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/ckeditor/ckeditor.js'); ?>
<?php $dm->get_js('js/plugins/flatpickr/flatpickr.min.js'); ?>

<!-- Page JS Helpers (Flatpickr + CKEditor plugins) -->
<script>jQuery(function(){ CKEDITOR.config.height = '450px'; Dashmix.helpers(['flatpickr', 'ckeditor']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
