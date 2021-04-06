<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->l_m_content = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/summernote/summernote-bs4.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row no-gutters flex-md-10-auto">
    <div class="col-md-4 col-lg-5 col-xl-3">
        <div class="content">
            <!-- Toggle Side Content -->
            <div class="d-md-none push">
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <button type="button" class="btn btn-block btn-alt-primary" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
                    Inbox Menu
                </button>
            </div>
            <!-- END Toggle Side Content -->

            <!-- Side Content -->
            <div id="side-content" class="d-none d-md-block push">
                <!-- New Message -->
                <button type="button" class="btn btn-block btn-alt-success mb-3">
                    <i class="fa fa-plus mr-1"></i> New Message
                </button>
                <!-- END New Message -->

                <!-- Search Messages -->
                <form action="be_pages_generic_inbox.php" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control border-0" placeholder="Search Messages..">
                            <div class="input-group-append">
                                <span class="input-group-text border-0 bg-white">
                                    <i class="fa fa-fw fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END Search Messages -->

                <!-- Sorting/Filtering -->
                <div class="d-flex justify-content-between mb-2">
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm btn-link font-w600 dropdown-toggle" id="inbox-msg-sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sort by
                        </button>
                        <div class="dropdown-menu font-size-sm" aria-labelledby="inbox-msg-sort">
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-sort-amount-down mr-1"></i> Newest
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-sort-amount-up mr-1"></i> Oldest
                            </a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm btn-link font-w600 dropdown-toggle" id="inbox-msg-filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filter by
                        </button>
                        <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="inbox-msg-filter">
                            <a class="dropdown-item active" href="javascript:void(0)">
                                <i class="fa fa-fw fa-asterisk mr-1"></i> New
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-archive mr-1"></i> Archived
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times-circle mr-1"></i> Deleted
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Sorting/Filtering -->

                <!-- Messages -->
                <div class="list-group font-size-sm">
                    <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <span class="badge badge-pill badge-dark m-1 float-right">3</span>
                        <p class="font-size-h6 font-w700 mb-0">
                            New Photo Pack
                        </p>
                        <p class="text-muted mb-2">
                            Our new photo pack is now available to go live and we couldn’t be more excited..
                        </p>
                        <p class="font-size-sm text-muted mb-0">
                            <strong><?php $dm->get_name(); ?></strong>, 3 min ago
                        </p>
                    </a>
                    <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <span class="badge badge-pill badge-dark m-1 float-right">2</span>
                        <p class="font-size-h6 font-w700 mb-0">
                            Action required
                        </p>
                        <p class="text-muted mb-2">
                            Your account is inactive for a long time and you have to confirm your email once again..
                        </p>
                        <p class="font-size-sm text-muted mb-0">
                            <strong><?php $dm->get_name(); ?></strong>, 1 hour ago
                        </p>
                    </a>
                    <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <span class="badge badge-pill badge-dark m-1 float-right">9</span>
                        <p class="font-size-h6 font-w700 mb-0">
                            You have a new message
                        </p>
                        <p class="text-muted mb-2">
                            Hi there, please check your profile, there is a new message waiting for you.
                        </p>
                        <p class="font-size-sm text-muted mb-0">
                            <strong><?php $dm->get_name(); ?></strong>, 4 hours ago
                        </p>
                    </a>
                    <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <span class="badge badge-pill badge-dark m-1 float-right">6</span>
                        <p class="font-size-h6 font-w700 mb-0">
                            Best of last week
                        </p>
                        <p class="text-muted mb-2">
                            Last week has been full of new releases and products from indie developers.
                        </p>
                        <p class="font-size-sm text-muted mb-0">
                            <strong><?php $dm->get_name(); ?></strong>, 2 days ago
                        </p>
                    </a>
                    <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <span class="badge badge-pill badge-dark m-1 float-right">1</span>
                        <p class="font-size-h6 font-w700 mb-0">
                            Website Released
                        </p>
                        <p class="text-muted mb-2">
                            Our new website is live, feel free to visit it and let us know what..
                        </p>
                        <p class="font-size-sm text-muted mb-0">
                            <strong><?php $dm->get_name(); ?></strong>, 2 days ago
                        </p>
                    </a>
                    <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <span class="badge badge-pill badge-dark m-1 float-right">1</span>
                        <p class="font-size-h6 font-w700 mb-0">
                            Error with modal
                        </p>
                        <p class="text-muted mb-2">
                            There seems to be an issue when opening a modal, could you please check it..
                        </p>
                        <p class="font-size-sm text-muted mb-0">
                            <strong><?php $dm->get_name(); ?></strong>, 3 days ago
                        </p>
                    </a>
                </div>
                <!-- END Messages -->
            </div>
            <!-- END Side Content -->
        </div>
    </div>
    <div class="col-md-8 col-lg-7 col-xl-9 bg-body-dark">
        <!-- Main Content -->
        <div class="content">
            <!-- Message -->
            <div class="block block-rounded">
                <div class="block-content block-content-sm block-content-full bg-body-light">
                    <div class="media py-3">
                        <div class="mr-3 ml-2 overlay-container overlay-right">
                            <?php $dm->get_avatar(0, 'female', 48); ?>
                            <i class="far fa-circle text-white overlay-item font-size-sm bg-success rounded-circle"></i>
                        </div>
                        <div class="media-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <a class="font-w600 link-fx" href="be_pages_generic_profile.php">Sara Fields</a>
                                    <div class="font-size-sm text-muted">s.fields@example.com</div>
                                </div>
                                <div class="col-sm-5 d-sm-flex align-items-sm-center">
                                    <div class="font-size-sm font-italic text-muted text-sm-right w-100 mt-2 mt-sm-0">
                                        <p class="mb-0">March 15, 2018</p>
                                        <p class="mb-0">14:25</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <p>Dear John,</p>
                    <?php $dm->get_text('small'); ?>
                    <p>Best Regards,</p>
                    <p>Sara</p>
                </div>
                <div class="block-content bg-body-light">
                    <div class="row gutters-tiny">
                        <div class="col-6 col-sm-4 col-md-5 col-lg-4 col-xl-3">
                            <div class="options-container fx-item-zoom-in">
                                <?php $dm->get_photo(7, false, 'img-fluid options-item'); ?>
                                <div class="options-overlay bg-black-75">
                                    <div class="options-overlay-content">
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-download mr-1"></i> Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="font-size-sm text-muted pt-2">
                                <i class="fa fa-paperclip"></i> Mountain.jpg (785Kb)
                            </p>
                        </div>
                        <div class="col-6 col-sm-4 col-md-5 col-lg-4 col-xl-3">
                            <div class="options-container fx-item-zoom-in">
                                <?php $dm->get_photo(8, false, 'img-fluid options-item'); ?>
                                <div class="options-overlay bg-black-75">
                                    <div class="options-overlay-content">
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-download mr-1"></i> Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="font-size-sm text-muted pt-2">
                                <i class="fa fa-paperclip"></i> Fireplace.jpg (685kb)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Message -->

            <!-- Reply -->
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <!-- Summernote (.js-summernote class is initialized in Helpers.summernote()) -->
                    <!-- For more info and examples you can check out http://summernote.org/ -->
                    <div class="js-summernote" data-height="100"></div>
                    <button type="button" class="btn btn-alt-primary mt-2">Send Message</button>
                </div>
            </div>
            <!-- END Reply -->
        </div>
        <!-- END Main Content -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/summernote/summernote-bs4.min.js'); ?>

<!-- Page JS Helpers (Summernote plugin) -->
<script>jQuery(function(){ Dashmix.helpers('summernote'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
