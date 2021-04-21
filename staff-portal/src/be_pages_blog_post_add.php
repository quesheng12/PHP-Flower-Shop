<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">New Blog Post</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item">Blog</li>
                    <li class="breadcrumb-item active" aria-current="page">New</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full content-boxed">
    <!-- New Post -->
    <form action="../backend/news-release.php" method="POST" enctype="multipart/form-data" >
        <div class="block">
            <div class="block-header block-header-default">
                <a class="btn btn-light" href="be_pages_blog_post_manage.php">
                    <i class="fa fa-arrow-left mr-1"></i> Manage Posts
                </a>
                <div class="block-options">
                    <div class="custom-control custom-switch custom-control-success">
                        <input type="checkbox" class="custom-control-input" id="dm-post-add-active"
                               name="dm-post-add-active">
                        <label class="custom-control-label" for="dm-post-add-active">Set post as active</label>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="dm-post-add-title">Title</label>
                            <input type="text" class="form-control" id="dm-post-add-title" name="title"
                                   placeholder="Enter a title..">
                        </div>
                        <div class="form-group">
                            <label for="dm-post-add-excerpt">Excerpt</label>
                            <textarea class="form-control" id="dm-post-add-excerpt" name="excerpt" rows="3"
                                      placeholder="Enter an excerpt.."></textarea>
                            <div class="form-text text-muted font-size-sm font-italic">Visible on blog post list as a
                                small description of the post.
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-6">
                                <label>Featured Image</label>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="dm-post-add-image"
                                           name="pre_image" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="dm-post-add-image">Choose an image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
                            <!-- For more info and examples you can check out http://ckeditor.com -->
                            <label>Body</label>
                            <textarea id="js-ckeditor" name="content"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content bg-body-light">
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-fw fa-check mr-1"></i> Create Post
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

<!-- Page JS Helpers (CKEditor plugin) -->
<script>jQuery(function () {
        CKEDITOR.config.height = '450px';
        Dashmix.helpers(['ckeditor']);
    });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
