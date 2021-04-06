<?php
/**
 * dashboards/social_compact/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of each page
 *
 */
?>

<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="btn btn-dual mr-2" href="index.php">
                <i class="fa fa-campground"></i>
            </a>
            <!-- END Logo -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-dual d-lg-none" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-fw fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Search form in larger screens -->
            <form class="d-none d-lg-inline-block" action="be_pages_generic_search.php" method="POST">
                <input type="text" class="form-control form-control-sm border-0 rounded-lg px-3" placeholder="Search.." id="page-header-search-input-full" name="page-header-search-input-full">
            </form>
            <!-- END Search form in larger screens -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div>
            <!-- User Profile -->
            <a class="btn btn-dual d-none d-sm-inline-block"  href="javascript:void(0)">
                <i class="fa fa-user-circle mr-1"></i> Stella
            </a>
            <!-- END User Profile -->

            <!-- Notifications Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="badge badge-secondary badge-pill">6</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                       Notifications
                    </div>
                    <ul class="nav-items my-2">
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mx-3">
                                    <i class="fa fa-fw fa-user-plus text-primary"></i>
                                </div>
                                <div class="media-body font-size-sm pr-2">
                                    <div class="font-w600">John Doe send you a friend request!</div>
                                    <div class="text-muted font-italic">6 min ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mx-3">
                                    <i class="fa fa-fw fa-user-plus text-primary"></i>
                                </div>
                                <div class="media-body font-size-sm pr-2">
                                    <div class="font-w600">Elisa Doe send you a friend request!</div>
                                    <div class="text-muted font-italic">10 min ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mx-3">
                                    <i class="fa fa-check-circle text-success"></i>
                                </div>
                                <div class="media-body font-size-sm pr-2">
                                    <div class="font-w600">Backup completed successfully!</div>
                                    <div class="text-muted font-italic">2 hours ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mx-3">
                                    <i class="fa fa-fw fa-user-plus text-primary"></i>
                                </div>
                                <div class="media-body font-size-sm pr-2">
                                    <div class="font-w600">George Smith send you a friend request!</div>
                                    <div class="text-muted font-italic">3 hours ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mx-3">
                                    <i class="fa fa-exclamation-circle text-warning"></i>
                                </div>
                                <div class="media-body font-size-sm pr-2">
                                    <div class="font-w600">You are running out of space. Please consider upgrading your plan.</div>
                                    <div class="text-muted font-italic">1 day ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mx-3">
                                    <i class="fa fa-envelope-open text-info"></i>
                                </div>
                                <div class="media-body font-size-sm pr-2">
                                    <div class="font-w600">You have a new message!</div>
                                    <div class="text-muted font-italic">2 days ago</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="p-2 border-top">
                        <a class="btn btn-light btn-block text-center" href="javascript:void(0)">
                            <i class="fa fa-fw fa-eye mr-1"></i> View All
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Notifications Dropdown -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-dual" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="fa fa-fw fa-comment-alt"></i>
            </button>
            <!-- END Toggle Side Overlay -->

            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-dual d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-primary">
        <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.php" method="POST">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control border-0" placeholder="Search your network.." id="page-header-search-input" name="page-header-search-input">
                </div>
            </form>
       </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary-darker">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->
