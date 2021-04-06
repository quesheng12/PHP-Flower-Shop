<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/summernote/summernote-bs4.css'); ?>
<?php $dm->get_css('js/plugins/simplemde/simplemde.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Form Editors</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active" aria-current="page">Editors</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Summernote (.js-summernote + .js-summernote-air classes are initialized in Helpers.summernote()) -->
    <!-- For more info and examples you can check out http://summernote.org/ -->
    <h2 class="content-heading">Summernote</h2>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Air Mode <small>Inline Editing</small></h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-settings"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <!-- Summernote Container -->
            <div class="js-summernote-air">
                <h3 class="h4">This is an Air-mode editable area.</h3>
                <ul>
                  <li>Select a text to reveal the toolbar.</li>
                  <li>Edit rich document on-the-fly, so elastic!</li>
                </ul>
                <p>End of air-mode area!</p>
            </div>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Full Editor</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-settings"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <!-- Summernote Container -->
            <div class="js-summernote">Hello Summernote!</div>
        </div>
    </div>
    <!-- END Summernote -->

    <!-- SimpleMDE Editor (js-simplemde class is initialized in Helpers.simpleMDE()) -->
    <!-- For more info and examples you can check out https://github.com/NextStepWebs/simplemde-markdown-editor -->
    <h2 class="content-heading">SimpleMDE</h2>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Markdown Editor</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-settings"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <form action="be_forms_editors.php" method="POST" onsubmit="return false;">
                <div class="form-group">
                    <!-- SimpleMDE Container -->
                    <textarea class="js-simplemde" id="simplemde" name="simplemde">Hello SimpleMDE!</textarea>
                </div>
            </form>
        </div>
    </div>
    <!-- END SimpleMDE Editor -->

    <!-- CKEditor 4 (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
    <!-- For more info and examples you can check out http://ckeditor.com -->
    <h2 class="content-heading">CKEditor 4</h2>
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
                    <!-- CKEditor 4 Inline Container -->
                    <div id="js-ckeditor-inline">Hello inline CKEditor 4! Click this text to edit it!</div>
                </div>
            </form>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Full Editor</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-settings"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <form action="be_forms_editors.php" method="POST" onsubmit="return false;">
                <div class="form-group">
                    <!-- CKEditor 4 Classic Container -->
                    <textarea id="js-ckeditor" name="ckeditor">Hello classic CKEditor 4!</textarea>
                </div>
            </form>
        </div>
    </div>
    <!-- END CKEditor 4 -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/summernote/summernote-bs4.min.js'); ?>
<?php $dm->get_js('js/plugins/simplemde/simplemde.min.js'); ?>
<?php $dm->get_js('js/plugins/ckeditor/ckeditor.js'); ?>

<!-- Page JS Helpers (Summernote + SimpleMDE + CKEditor plugins) -->
<script>jQuery(function(){ Dashmix.helpers(['summernote', 'simplemde', 'ckeditor']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
