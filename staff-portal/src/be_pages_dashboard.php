<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="content">
    <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
        <div>
            <h1 class="h2 mb-1">
                Dashboard
            </h1>
            <p class="mb-0">
                Welcome, admin! You have <a class="font-w500" href="javascript:void(0)">5 new notifications</a>.
            </p>
        </div>
        <div class="mt-4 mt-md-0">
            <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
                <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-sm btn-alt-primary px-3" id="dropdown-analytics-overview" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Overview -->
    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded text-center d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1">
                    <div class="item rounded-lg bg-body-dark mx-auto my-3">
                        <i class="fa fa-users text-muted"></i>
                    </div>
                    <div class="text-black font-size-h1 font-w700">2,388</div>
                    <div class="text-muted mb-3">Registered Users</div>
                    <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-lighter">
                        <i class="fa fa-caret-up mr-1"></i>
                        19.2%
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500" href="javascript:void(0)">
                        View all users
                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded text-center d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1">
                    <div class="item rounded-lg bg-body-dark mx-auto my-3">
                        <i class="fa fa-level-up-alt text-muted"></i>
                    </div>
                    <div class="text-black font-size-h1 font-w700">14.6%</div>
                    <div class="text-muted mb-3">Bounce Rate</div>
                    <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-danger bg-danger-lighter">
                        <i class="fa fa-caret-down mr-1"></i>
                        2.3%
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500" href="javascript:void(0)">
                        Explore analytics
                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded text-center d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1">
                    <div class="item rounded-lg bg-body-dark mx-auto my-3">
                        <i class="fa fa-chart-line text-muted"></i>
                    </div>
                    <div class="text-black font-size-h1 font-w700">386</div>
                    <div class="text-muted mb-3">Confirmed Sales</div>
                    <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-lighter">
                        <i class="fa fa-caret-up mr-1"></i>
                        7.9%
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500" href="javascript:void(0)">
                        View all sales
                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded text-center d-flex flex-column">
                <div class="block-content block-content-full">
                    <div class="item rounded-lg bg-body-dark mx-auto my-3">
                        <i class="fa fa-wallet text-muted"></i>
                    </div>
                    <div class="text-black font-size-h1 font-w700">$4,920</div>
                    <div class="text-muted mb-3">Total Earnings</div>
                    <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-danger bg-danger-lighter">
                        <i class="fa fa-caret-down mr-1"></i>
                        0.3%
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500" href="javascript:void(0)">
                        Withdrawal options
                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Overview -->

    <!-- Store Growth -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Store Growth
            </h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-md-5 col-xl-4 d-md-flex align-items-md-center">
                    <div class="p-md-2 p-lg-3">
                        <div class="py-3">
                            <div class="text-black font-size-h1 font-w700">1,430</div>
                            <div class="font-w600">Your new website Customers</div>
                            <div class="py-3 d-flex align-items-center">
                                <div class="bg-success-lighter p-2 rounded mr-3">
                                    <i class="fa fa-fw fa-arrow-up text-success"></i>
                                </div>
                                <p class="mb-0">
                                    You have a <span class="font-w600 text-success">12% customer growth</span> in the last 30 days. This is amazing, keep it up!
                                </p>
                            </div>
                        </div>
                        <div class="py-3">
                            <div class="text-black font-size-h1 font-w700">65</div>
                            <div class="font-w600">New products added</div>
                            <div class="py-3 d-flex align-items-center">
                                <div class="bg-success-lighter p-2 rounded mr-3">
                                    <i class="fa fa-fw fa-arrow-up text-success"></i>
                                </div>
                                <p class="mb-0">
                                    You’ve managed to add <span class="font-w600 text-success">12% more products</span> in the last 30 days. Store’s portfolio is growing!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-xl-8 d-md-flex align-items-md-center">
                    <div class="p-md-2 p-lg-3 w-100">
                        <!-- Bars Chart Container -->
                        <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-analytics-bars"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Store Growth -->
    
    <!-- Latest Orders + Stats -->
    <div class="row">
        <div class="col-md-8">
            <!--  Latest Orders -->
            <div class="block block-rounded block-mode-loading-refresh">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Latest Orders
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="si si-chemistry"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-dot-circle opacity-50 mr-1"></i> Pending
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-times-circle opacity-50 mr-1"></i> Canceled
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-check-circle opacity-50 mr-1"></i> Completed
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-eye opacity-50 mr-1"></i> View All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                        <thead>
                            <tr class="text-uppercase">
                                <th>Product</th>
                                <th class="d-none d-xl-table-cell">Date</th>
                                <th>Status</th>
                                <th class="d-none d-sm-table-cell text-right" style="width: 120px;">Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="font-w600">iPhone 11 Pro</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right font-w500">
                                    $1199,99
                                </td>
                                <td class="text-center text-nowrap font-w500">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">MacBook Pro 15"</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right font-w500">
                                    $2.299,00
                                </td>
                                <td class="text-center text-nowrap font-w500">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">Nvidia GTX 2080 Ti</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right font-w500">
                                    $1200,00
                                </td>
                                <td class="text-center text-nowrap font-w500">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">Playstation 4 Pro</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-danger">Canceled</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right font-w500">
                                    $399,00
                                </td>
                                <td class="text-center text-nowrap font-w500">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">Nintendo Switch</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right font-w500">
                                    $349,00
                                </td>
                                <td class="text-center text-nowrap font-w500">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">iPhone 11</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right font-w500">
                                    $999,00
                                </td>
                                <td class="text-center text-nowrap font-w500">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">Airpods Pro</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right font-w500">
                                    $39,99
                                </td>
                                <td class="text-center text-nowrap font-w500">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">Xbox One X</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right font-w500">
                                    $499,00
                                </td>
                                <td class="text-center text-nowrap font-w500">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm text-center">
                    <a class="font-w500" href="javascript:void(0)">
                        View all orders
                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                    </a>
                </div>
            </div>
            <!-- END Latest Orders -->
        </div>
        <div class="col-md-4 d-flex flex-column">
            <!-- Stats -->
            <div class="block block-rounded">
                <div class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">
                    <div class="mr-3">
                        <p class="font-size-h3 font-w700 mb-0">
                            35,698
                        </p>
                        <p class="text-muted mb-0">
                            Completed orders
                        </p>
                    </div>
                    <div class="item rounded-lg bg-body-dark">
                        <i class="fa fa-check text-muted"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm text-center">
                    <a class="font-w500" href="javascript:void(0)">
                        View Archive
                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                    </a>
                </div>
            </div>
            <div class="block block-rounded text-center d-flex flex-column flex-grow-1">
                <div class="block-content block-content-full d-flex align-items-center flex-grow-1">
                    <div class="w-100">
                        <div class="item rounded-lg bg-body-dark mx-auto my-3">
                            <i class="fa fa-archive text-muted"></i>
                        </div>
                        <div class="text-black font-size-h1 font-w700">75</div>
                        <div class="text-muted mb-3">Products out of stock</div>
                        <div class="d-inline-block px-3 py-1 rounded-lg font-size-sm font-w600 text-warning bg-warning-lighter">
                            5% of portfolio
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500" href="javascript:void(0)">
                        Order supplies
                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                    </a>
                </div>
            </div>
            <!-- END Stats -->
        </div>
    </div>
    <!-- END Latest Orders + Stats -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/chart.js/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_pages_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
