<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">CKEditor 5 Inline</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active" aria-current="page">CKEditor 5 Inline</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- CKEditor 5 Inline (js-ckeditor5-inline in Helpers.ckeditor5()) -->
    <!-- For more info and examples you can check out http://ckeditor.com -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Inline Editor</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-settings"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <form action="be_forms_editors.php" method="POST" onsubmit="return false;">
                <div class="form-group">
                    <!-- CKEditor 5 Inline Container -->
                    <div id="js-ckeditor5-inline">Hello inline CKEditor 5! Click this text to edit it!</div>
                </div>
            </form>
        </div>
    </div>
    <!-- END CKEditor 5 Inline -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/ckeditor5-inline/build/ckeditor.js'); ?>

<!-- Page JS Helpers (CKEditor 5 plugins) -->
<script>jQuery(function(){ Dashmix.helpers(['ckeditor5']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
