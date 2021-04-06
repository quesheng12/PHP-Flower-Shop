<?php
/**
 * dashboards/tasks/views/inc_header.php
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
        <div>
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-dual" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Left Section -->

        <!-- Middle Section -->
        <div>
            <!-- Logo -->
            <a class="font-w600 text-dual tracking-wide" href="index.php">
                Dash<span class="opacity-75">mix</span>
                <span class="font-w400">Tasks</span>
            </a>
            <!-- END Logo -->
        </div>
        <!-- END Middle Section -->

        <!-- Right Section -->
        <div>
            <!-- Shortcuts Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-dual" id="page-header-shortcuts-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-th-large"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg rounded-0 p-0" aria-labelledby="page-header-shortcuts-dropdown">
                    <div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo22.jpg');">
                        <div class="bg-primary-op font-w600 text-white text-center px-3 py-4">
                            <div class="font-size-h4">Projects</div>
                            <div class="font-size-h6 font-w400 text-white-75">Most Recent</div>
                        </div>
                    </div>
                    <div class="row no-gutters bg-white push">
                        <div class="col-6 border-right border-bottom">
                            <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                                    <div>
                                        <i class="fa fa-2x fa-briefcase text-success"></i>
                                        <div class="font-w600 mt-2">Acme Inc</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 border-bottom">
                            <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                                    <div>
                                        <i class="fa fa-2x fa-briefcase text-warning"></i>
                                        <div class="font-w600 mt-2">Example.com</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 border-right">
                            <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                                    <div>
                                        <i class="fa fa-2x fa-briefcase text-info"></i>
                                        <div class="font-w600 mt-2">Store Inc</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                                    <div>
                                        <i class="fa fa-2x fa-briefcase text-danger"></i>
                                        <div class="font-w600 mt-2">Test Ltd</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Shortcuts Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-white">
        <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.php" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    <div class="input-group-append">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                    </div>
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
                <i class="fa fa-fw fa-2x fa-sun fa-spin"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->
