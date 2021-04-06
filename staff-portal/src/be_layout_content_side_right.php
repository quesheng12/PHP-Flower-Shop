<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->l_m_content = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row no-gutters flex-md-10-auto">
    <div class="col-md-4 col-lg-5 col-xl-3 order-md-1 bg-body-dark">
        <div class="content">
            <!-- Toggle Side Content -->
            <div class="d-md-none push">
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <button type="button" class="btn btn-block btn-alt-primary" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
                    Side Content
                </button>
            </div>
            <!-- END Toggle Side Content -->

            <!-- Side Content -->
            <div id="side-content" class="d-none d-md-block push">
                <p>Your side content..</p>
            </div>
            <!-- END Side Content -->
        </div>
    </div>
    <div class="col-md-8 col-lg-7 col-xl-9 order-md-0">
        <!-- Main Content -->
        <div class="content content-full">
            <div class="block block-rounded">
                <div class="block-content">
                    <p>Your main content..</p>
                </div>
            </div>
        </div>
        <!-- END Main Content -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
