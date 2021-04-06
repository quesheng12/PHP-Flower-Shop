<?php
/**
 * dashboards/file_hosting/views/inc_header.php
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
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-dual mr-1 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Toggle Sidebar Mini Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-dual mr-1 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                <i class="fa fa-fw fa-ellipsis-v"></i>
            </button>
            <!-- END Toggle Sidebar Mini Mode -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-dual d-lg-none" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-fw fa-search"></i> <span class="ml-1 d-none d-sm-inline-block">Search..</span>
            </button>
            <!-- END Open Search Section -->

            <!-- Search form in larger screens -->
            <form class="d-none d-lg-inline-block ml-1" action="be_pages_generic_search.php" method="POST">
                <input type="text" class="form-control border-0 rounded" placeholder="Search All Files.." id="page-header-search-input-full" name="page-header-search-input-full" style="min-width: 320px;">
            </form>
            <!-- END Search form in larger screens -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div>
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-lg-inline mx-1">lisa.d@example.com</span>
                    <span class="badge badge-pill badge-dark">VIP</span>
                    <i class="fa fa-fw fa-angle-down ml-1"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 overflow-hidden" aria-labelledby="page-header-user-dropdown">
                    <div class="row no-gutters">
                        <div class="col-5 d-flex align-items-center justify-content-center bg-image p-2" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo10.jpg');">
                            <?php $dm->get_avatar(1, '', 96, true); ?>
                        </div>
                        <div class="col-7 p-2 font-size-sm">
                            <a class="dropdown-item font-w600" href="be_pages_generic_profile.php">
                                <i class="fa fa-fw fa-user-circle mr-1"></i>
                                Lisa Doe
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-pencil-alt mr-1"></i>
                                Edit My Profile
                            </a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="op_auth_signin.php">
                                <i class="fa fa-fw fa-sign-out-alt mr-1"></i>
                                Log Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-header-dark">
        <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.php" method="POST">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control border-0" placeholder="Search All Files.." id="page-header-search-input" name="page-header-search-input">
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
