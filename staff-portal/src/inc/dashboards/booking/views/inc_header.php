<?php
/**
 * dashboards/booking/views/inc_header.php
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
            <a class="font-w600 text-white tracking-wide" href="index.php">
                Dash<span class="opacity-75">mix</span>
                <span class="font-w400">Booking</span>
            </a>
            <!-- END Logo -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-dual ml-2" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-search"></i>
            </button>
            <!-- END Open Search Section -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div>
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-dual dropdown-toggle" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php $dm->get_avatar(1, '', 32, true); ?>
                    <span class="d-none d-sm-inline ml-1">Jessica</span>
                    <span class="badge badge-pill badge-warning ml-1">.genius</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="rounded-top font-w600 text-white text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo13.jpg');">
                        <div class="p-3">
                            <?php $dm->get_avatar(1, '', 64, true); ?>
                        </div>
                        <div class="p-3 bg-black-75">
                            <a class="text-white font-w600" href="be_pages_generic_profile.php">Jessica Taylor</a>
                            <div class="text-white-75">jesst@example.com</div>
                        </div>
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            Profile
                            <i class="fa fa-fw fa-user text-black-50 ml-1"></i>
                        </a>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            Bookings
                            <div>
                                <span class="badge badge-pill badge-primary">3</span>
                                <i class="fa fa-fw fa-pencil-alt text-black-50 ml-1"></i>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            Travel Guides
                            <i class="fa fa-fw fa-plane text-black-50 ml-1"></i>
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            Billing
                            <div>
                                <span class="badge badge-pill badge-primary">1</span>
                                <i class="fa fa-fw fa-money-bill-wave-alt text-black-50 ml-1"></i>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            Settings
                            <i class="fa fa-fw fa-cog text-black-50 ml-1"></i>
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" href="op_auth_signin.php">
                            Sign Out
                            <i class="fa fa-fw fa-sign-out-alt text-danger ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-white">
        <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.php" method="POST">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control" placeholder="Where to?" id="page-header-search-input" name="page-header-search-input">
                </div>
            </form>
       </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-white">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-2x fa-sun fa-spin text-primary"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->
