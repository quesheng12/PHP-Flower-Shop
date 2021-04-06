<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/messages/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/summernote/summernote-bs4.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="row no-gutters flex-lg-10-auto">
    <div class="col-lg-5 col-xl-3 h100-scroll">
        <div class="content">
            <!-- Toggle Side Content -->
            <div class="row gutters-tiny d-lg-none push">
                <div class="col-12 text-center mb-4">
                    <!-- Logo -->
                    <a class="font-size-lg font-w600 tracking-wide text-dark" href="index.php">
                        Dash<span class="opacity-75">mix</span>
                        <span class="font-w400">Messages</span>
                    </a>
                    <!-- END Logo -->
                </div>
                <div class="col-6">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-primary btn-block" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-bars opacity-50 mr-1"></i> Menu
                    </button>
                </div>
                <div class="col-6">
                    <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                    <button type="button" class="btn btn-alt-primary btn-block" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
                        <i class="fa fa-envelope opacity-50 mr-1"></i> Messages
                    </button>
                </div>
            </div>
            <!-- END Toggle Side Content -->

            <!-- Side Content -->
            <div id="side-content" class="d-none d-lg-block push">
                <!-- Search Messages -->
                <form action="db_messages.php" method="POST" onsubmit="return false;">
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
                                <i class="fa fa-fw fa-certificate mr-1"></i> VIP
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-exclamation-circle mr-1"></i> Important
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Sorting/Filtering -->

                <!-- Messages -->
                <div class="list-group font-size-sm">
                    <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <span class="badge badge-pill badge-primary m-1 float-right">1</span>
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
                    <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <span class="badge badge-pill badge-primary m-1 float-right">2</span>
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
                        <span class="badge badge-pill badge-primary m-1 float-right">1</span>
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
                        <span class="badge badge-pill badge-primary m-1 float-right">3</span>
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
                        <span class="badge badge-pill badge-primary m-1 float-right">9</span>
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
                        <span class="badge badge-pill badge-primary m-1 float-right">6</span>
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
                </div>
                <!-- END Messages -->
            </div>
            <!-- END Side Content -->
        </div>
    </div>
    <div class="col-lg-7 col-xl-9 h100-scroll bg-body-dark">
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
                                    <a class="font-w600 link-fx" href="javascript:void(0)">Mary Taylor</a>
                                    <div class="font-size-sm text-muted">m.taylor@example.com</div>
                                </div>
                                <div class="col-sm-5 d-sm-flex align-items-sm-center">
                                    <div class="font-size-sm font-italic text-muted text-sm-right w-100 mt-2 mt-sm-0">
                                        <p class="mb-0">April 2, 2018</p>
                                        <p class="mb-0">12:30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <p>Dear Admin,</p>
                    <?php $dm->get_text(); ?>
                    <?php $dm->get_text('small'); ?>
                    <p>All the best,</p>
                    <p>Mary</p>
                </div>
                <div class="block-content bg-body-light">
                    <div class="row gutters-tiny">
                        <div class="col-4 col-xl-2">
                            <div class="options-container fx-item-rotate-r">
                                <?php $dm->get_photo(16, false, 'img-fluid options-item'); ?>
                                <div class="options-overlay bg-black-75">
                                    <div class="options-overlay-content">
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="font-size-sm text-muted pt-2">
                                <i class="fa fa-paperclip"></i> 1a.jpg (785Kb)
                            </p>
                        </div>
                        <div class="col-4 col-xl-2">
                            <div class="options-container fx-item-rotate-r">
                                <?php $dm->get_photo(4, false, 'img-fluid options-item'); ?>
                                <div class="options-overlay bg-black-75">
                                    <div class="options-overlay-content">
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="font-size-sm text-muted pt-2">
                                <i class="fa fa-paperclip"></i> 1b.jpg (685kb)
                            </p>
                        </div>
                        <div class="col-4 col-xl-2">
                            <div class="options-container fx-item-rotate-r">
                                <?php $dm->get_photo(9, false, 'img-fluid options-item'); ?>
                                <div class="options-overlay bg-black-75">
                                    <div class="options-overlay-content">
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="font-size-sm text-muted pt-2">
                                <i class="fa fa-paperclip"></i> 1c.jpg (698kb)
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
