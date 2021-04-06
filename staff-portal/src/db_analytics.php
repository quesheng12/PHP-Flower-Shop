<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/analytics/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Navigation -->
<div class="bg-white">
    <div class="content">
        <!-- Toggle Main Navigation -->
        <div class="d-lg-none push">
            <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
            <button type="button" class="btn btn-block btn-light d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                Menu
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <!-- END Toggle Main Navigation -->

        <!-- Main Navigation -->
        <div id="main-navigation" class="d-none d-lg-block push">
            <ul class="nav-main nav-main-horizontal nav-main-hover">
                <?php $dm->build_nav(false, true); ?>
                <li class="nav-main-item ml-lg-auto">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-brush"></i>
                        <span class="nav-main-link-name">Themes</span>
                    </a>
                    <ul class="nav-main-submenu nav-main-submenu-right">
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-default"></i>
                                <span class="nav-main-link-name">Default</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xwork.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xwork"></i>
                                <span class="nav-main-link-name">xWork</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xmodern.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xmodern"></i>
                                <span class="nav-main-link-name">xModern</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xeco.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xeco"></i>
                                <span class="nav-main-link-name">xEco</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xsmooth.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xsmooth"></i>
                                <span class="nav-main-link-name">xSmooth</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xinspire.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xinspire"></i>
                                <span class="nav-main-link-name">xInspire</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xdream.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xdream"></i>
                                <span class="nav-main-link-name">xDream</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xpro.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xpro"></i>
                                <span class="nav-main-link-name">xPro</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="<?php echo $dm->assets_folder; ?>/css/themes/xplay.min.css" href="#">
                                <i class="nav-main-link-icon fa fa-circle text-xplay"></i>
                                <span class="nav-main-link-name">xPlay</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END Main Navigation -->
    </div>
</div>
<!-- END Navigation -->

<!-- Page Content -->
<div class="content content-full">
    <!-- Overview -->
    <div class="d-flex justify-content-between align-items-center py-3">
        <h2 class="h3 font-w400 mb-0">Overview</h2>
        <div class="dropdown">
            <button type="button" class="btn btn-sm btn-light px-3" id="dropdown-analytics-overview" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Last 30 days <i class="fa fa-fw fa-angle-down"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-overview">
                <a class="dropdown-item" href="javascript:void(0)">This Week</a>
                <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">This Month</a>
                <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
            </div>
        </div>
    </div>
    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-primary-lighter mx-auto my-3">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="text-black display-4 font-w700">35.8k</div>
                    <div class="text-muted mt-1">Visitors</div>
                    <div class="py-3 font-size-h4 font-w700 text-success">
                        <i class="fa fa-caret-up mr-1"></i>
                        15.7%
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="150">
            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-xinspire-lighter mx-auto my-3">
                        <i class="fa fa-eye text-xinspire-dark"></i>
                    </div>
                    <div class="text-black display-4 font-w700">98.5k</div>
                    <div class="text-muted mt-1">Page views</div>
                    <div class="py-3 font-size-h4 font-w700 text-danger">
                        <i class="fa fa-caret-down mr-1"></i>
                        2.4%
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="300">
            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-xsmooth-lighter mx-auto my-3">
                        <i class="fa fa-columns text-xsmooth"></i>
                    </div>
                    <div class="text-black display-4 font-w700">25</div>
                    <div class="text-muted mt-1">Pages per visit</div>
                    <div class="py-3 font-size-h4 font-w700 text-success">
                        <i class="fa fa-caret-up mr-1"></i>
                        52.5%
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="450">
            <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-xplay-lighter mx-auto my-3">
                        <i class="fa fa-level-up-alt text-xplay"></i>
                    </div>
                    <div class="text-black display-4 font-w700">12.5%</div>
                    <div class="text-muted mt-1">Bounce Rate</div>
                    <div class="py-3 font-size-h4 font-w700 text-danger">
                        <i class="fa fa-caret-down mr-1"></i>
                        5.7%
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Overview -->

    <!-- Visitors Growth -->
    <div class="d-flex justify-content-between align-items-center pt-5 pb-3">
        <h2 class="h3 font-w400 mb-0">Visitors Growth</h2>
        <div class="dropdown">
            <button type="button" class="btn btn-sm btn-light px-3" id="dropdown-analytics-visitors-growth" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                This Week <i class="fa fa-fw fa-angle-down"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-visitors-growth">
                <a class="dropdown-item" href="javascript:void(0)">Last 30 days</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">This Month</a>
                <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
            </div>
        </div>
    </div>
    <div class="block block-rounded block-fx-pop invisible" data-toggle="appear">
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-md-5 col-lg-4 d-md-flex align-items-md-center">
                    <div class="p-md-2 p-lg-3">
                        <div class="text-black display-4 font-w700">3,687</div>
                        <div class="font-size-lg font-w700">Your new website visitors</div>
                        <div class="py-3 d-flex align-items-center">
                            <div class="bg-success-lighter px-2 py-1 rounded mr-3">
                                <i class="fa fa-fw fa-caret-up text-success"></i>
                            </div>
                            <p class="mb-0">
                                You have a <span class="font-w600 text-success">25% Growth</span> in the last 30 days. Keep it up!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <div class="p-md-2 p-lg-3">
                        <!-- Bars Chart Container -->
                        <!-- Chart.js Chart is initialized in js/pages/db_analytics.min.js which was auto compiled from _js/pages/db_analytics.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-analytics-bars"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Visitors Growth -->

    <!-- Quick Statistics -->
    <div class="d-flex justify-content-between align-items-center pt-5 pb-3">
        <h2 class="h3 font-w400 mb-0">Quick Statistics</h2>
        <div class="dropdown">
            <button type="button" class="btn btn-sm btn-light px-3" id="dropdown-analytics-quick-stats" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Last 30 days <i class="fa fa-fw fa-angle-down"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-quick-stats">
                <a class="dropdown-item" href="javascript:void(0)">This Week</a>
                <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">This Month</a>
                <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
            </div>
        </div>
    </div>
    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
            <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-lg font-w600 text-muted mb-3">Followers</div>
                    <div class="text-black font-size-h1 font-w700">1,500</div>
                    <div class="font-size-h4 font-w700 text-success">
                        <i class="fa fa-caret-up mr-1"></i>
                        25.6%
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="150">
            <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-lg font-w600 text-muted mb-3">Comments</div>
                    <div class="text-black font-size-h1 font-w700">910</div>
                    <div class="font-size-h4 font-w700 text-success">
                        <i class="fa fa-caret-up mr-1"></i>
                        18.6%
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="300">
            <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-lg font-w600 text-muted mb-3">Downloads</div>
                    <div class="text-black font-size-h1 font-w700">57.5k</div>
                    <div class="font-size-h4 font-w700 text-success">
                        <i class="fa fa-caret-up mr-1"></i>
                        14.9%
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="450">
            <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-lg font-w600 text-muted mb-3">Tickets</div>
                    <div class="text-black font-size-h1 font-w700">75</div>
                    <div class="font-size-h4 font-w700 text-danger">
                        <i class="fa fa-caret-down mr-1"></i>
                        1.7%
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
            <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-lg font-w600 text-muted mb-3">Likes</div>
                    <div class="text-black font-size-h1 font-w700">39.6k</div>
                    <div class="font-size-h4 font-w700 text-success">
                        <i class="fa fa-caret-up mr-1"></i>
                        39.8%
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="150">
            <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-lg font-w600 text-muted mb-3">Errors</div>
                    <div class="text-black font-size-h1 font-w700">3</div>
                    <div class="font-size-h4 font-w700 text-danger">
                        <i class="fa fa-caret-down mr-1"></i>
                        25%
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="300">
            <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-lg font-w600 text-muted mb-3">Apps</div>
                    <div class="text-black font-size-h1 font-w700">290</div>
                    <div class="font-size-h4 font-w700 text-success">
                        <i class="fa fa-caret-up mr-1"></i>
                        1.2%
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear" data-timeout="450">
            <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-lg font-w600 text-muted mb-3">New Accounts</div>
                    <div class="text-black font-size-h1 font-w700">6,300</div>
                    <div class="font-size-h4 font-w700 text-success">
                        <i class="fa fa-caret-up mr-1"></i>
                        3.7%
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Quick Statistics -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/easy-pie-chart/jquery.easypiechart.min.js'); ?>
<?php $dm->get_js('js/plugins/chart.js/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/db_analytics.min.js'); ?>

<!-- Page JS Helpers (Easy Pie Chart Plugin) -->
<script>jQuery(function(){ Dashmix.helpers('easy-pie-chart'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>

