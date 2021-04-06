<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/bootstrap-tourist/bootstrap-tourist.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div id="example-page-heading" class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Bootstrap Tourist</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active" aria-current="page">Tour</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<!-- Bootstrap Tourist (functionality is initialized in js/pages/be_comp_tour.min.js which was auto compiled from _js/pages/be_comp_tour.js ) -->
<!-- For more info and examples you can check out https://github.com/IGreatlyDislikeJavascript/bootstrap-tourist -->
<div class="content">
    <div class="content">
        <div class="block block-rounded">
            <div class="block-content text-center">
                <p>
                    You can easily set up your own custom tour for your application.
                </p>
            </div>
        </div>
        
        <!-- Dummy content -->
        <div class="block block-rounded">
            <div class="block-content">
                <p class="text-center py-8">...</p>
            </div>
        </div>
        <div class="block block-rounded">
            <div class="block-content">
                <p class="text-center py-8">...</p>
            </div>
        </div>
        <div class="block block-rounded">
            <div class="block-content">
                <p class="text-center py-8">...</p>
            </div>
        </div>
        <div class="block block-rounded">
            <div class="block-content">
                <p class="text-center py-8">...</p>
            </div>
        </div>
        <!-- END Dummy content -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/bootstrap-tourist/bootstrap-tourist.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_tour.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
