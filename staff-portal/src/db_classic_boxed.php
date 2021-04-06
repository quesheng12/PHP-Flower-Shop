<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/classic_boxed/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light border-top border-bottom">
    <div class="content content-full py-1">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-sm text-uppercase font-w700 mt-2 mb-0 mb-sm-2">
                <i class="fa fa-angle-right fa-fw text-primary"></i> Welcome Admin
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3 font-size-sm" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Quick Navigation -->
    <a class="block block-bordered text-center d-sm-none" href="javascript:void(0)" data-toggle="class-toggle" data-target=".js-classic-nav" data-class="d-none d-sm-block">
        <div class="block-content block-content-full text-center">
            <i class="fa fa-bars mr-1"></i> Navigation
        </div>
    </a>
    <div class="block block-bordered js-classic-nav d-none d-sm-block">
        <div class="block-content block-content-full">
            <div class="row no-gutters border">
                <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                    <a class="block block-bordered block-link-pop text-center mb-0" href="javascript:void(0)">
                        <div class="block-content block-content-full text-center">
                            <div class="py-2">
                                <i class="far fa-2x fa-compass text-primary d-none d-sm-inline-block mb-3"></i>
                                <div>Dashboard</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                    <a class="block block-bordered block-link-pop text-center mb-0" href="javascript:void(0)">
                        <div class="block-content block-content-full text-center">
                            <div class="py-2">
                                <i class="fa fa-2x fa-shopping-basket text-primary d-none d-sm-inline-block mb-3"></i>
                                <div>Orders</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                    <a class="block block-bordered block-link-pop text-center mb-0" href="javascript:void(0)">
                        <div class="block-content block-content-full text-center">
                            <div class="py-2">
                                <i class="far fa-2x fa-user-circle text-primary d-none d-sm-inline-block mb-3"></i>
                                <div>Customers</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                    <a class="block block-bordered block-link-pop text-center mb-0" href="javascript:void(0)">
                        <div class="block-content block-content-full text-center">
                            <div class="py-2">
                                <i class="far fa-2x fa-edit text-primary d-none d-sm-inline-block mb-3"></i>
                                <div>Settings</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Quick Navigation -->

    <!-- Statistics -->
    <div class="row">
        <!-- Wallet -->
        <div class="col-lg-6 invisible" data-toggle="appear">
            <div class="block block-bordered">
                <div class="block-content">
                    <div class="px-sm-3 pt-sm-3 clearfix" style="min-height: 260px;">
                        <i class="fa fa-chart-line fa-2x text-gray-light float-right"></i>
                        <p class="display-4 text-black font-w300 mb-2">
                            4.860 <span class="font-size-h5 font-w600 text-muted">USD</span>
                        </p>
                        <p class="text-muted w-75">
                            You had <strong>15</strong> orders today and <strong>12</strong> orders yesterday. You seem to be doing great, so keep it up!
                        </p>
                        <a class="btn btn-hero-sm btn-outline-primary btn-square mr-1 mb-1" href="javascript:void(0)">
                            <i class="far fa-money-bill-alt fa-fw mr-1"></i> Latest Orders
                        </a>
                        <a class="btn btn-hero-sm btn-outline-primary btn-square mr-1 mb-1" href="javascript:void(0)">
                            <i class="far fa-user fa-fw mr-1"></i> Account
                        </a>
                    </div>
                </div>
                <div class="block-content p-1 overflow-hidden">
                    <!-- Sparkline Container -->
                    <span class="js-sparkline" data-type="line"
                                                data-points="[340,390,360,420,385,366,440,470]"
                                                data-width="100%"
                                                data-height="189px"
                                                data-chart-range-min="320"
                                                data-fill-color="rgba(6,101,208,.1)"
                                                data-spot-color="transparent"
                                                data-min-spot-color="transparent"
                                                data-max-spot-color="transparent"
                                                data-highlight-spot-color="#0665d0"
                                                data-highlight-line-color="#0665d0"
                                                data-tooltip-prefix="$"></span>
                </div>
            </div>
        </div>
        <!-- Wallet -->

        <!-- Various Stats -->
        <div class="col-lg-6 invisible" data-toggle="appear">
            <!-- Weekly Orders -->
            <div class="block block-bordered mb-lg-2">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="ml-3">
                        <p class="font-size-h2 font-w300 text-black mb-0">
                            160
                        </p>
                        <a class="link-fx font-size-sm font-w600 text-muted text-uppercase mb-0" href="javascript:void(0)">
                            Orders
                        </a>
                    </div>
                    <div>
                        <!-- Sparkline Container -->
                        <span class="js-sparkline" data-type="line"
                                                    data-points="[15,18,22,19,16,21,19]"
                                                    data-width="100px"
                                                    data-height="60px"
                                                    data-line-color="#3c90df"
                                                    data-fill-color="rgba(60,144,223,.1)"
                                                    data-spot-color="transparent"
                                                    data-min-spot-color="transparent"
                                                    data-max-spot-color="transparent"
                                                    data-highlight-spot-color="#3c90df"
                                                    data-highlight-line-color="#3c90df"
                                                    data-tooltip-suffix="Orders"></span>
                    </div>
                </div>
            </div>
            <!-- END Weekly Orders -->

            <!-- Weekly Visits -->
            <div class="block block-bordered mb-lg-2">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="ml-3">
                        <p class="font-size-h2 font-w300 text-black mb-0">
                            3.670
                        </p>
                        <a class="link-fx font-size-sm font-w600 text-muted text-uppercase mb-0" href="javascript:void(0)">
                            Visits
                        </a>
                    </div>
                    <div>
                        <!-- Sparkline Container -->
                        <span class="js-sparkline" data-type="line"
                                                    data-points="[352,480,698,758,523,625,780]"
                                                    data-width="100px"
                                                    data-height="60px"
                                                    data-line-color="#689550"
                                                    data-fill-color="rgba(104,149,80,.1)"
                                                    data-spot-color="transparent"
                                                    data-min-spot-color="transparent"
                                                    data-max-spot-color="transparent"
                                                    data-highlight-spot-color="#689550"
                                                    data-highlight-line-color="#689550"
                                                    data-tooltip-suffix="Visits"></span>
                    </div>
                </div>
            </div>
            <!-- END Weekly Visits -->

            <!-- Weekly Followers -->
            <div class="block block-bordered mb-lg-2">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="ml-3">
                        <p class="font-size-h2 font-w300 text-black mb-0">
                            630
                        </p>
                        <a class="link-fx font-size-sm font-w600 text-muted text-uppercase mb-0" href="javascript:void(0)">
                            Followers
                        </a>
                    </div>
                    <div>
                        <!-- Sparkline Container -->
                        <span class="js-sparkline" data-type="line"
                                                    data-points="[89,78,115,98,82,136,112]"
                                                    data-width="100px"
                                                    data-height="60px"
                                                    data-line-color="#ffb119"
                                                    data-fill-color="rgba(255,177,25,.1)"
                                                    data-spot-color="transparent"
                                                    data-min-spot-color="transparent"
                                                    data-max-spot-color="transparent"
                                                    data-highlight-spot-color="#ffb119"
                                                    data-highlight-line-color="#ffb119"
                                                    data-tooltip-suffix="Followers"></span>
                    </div>
                </div>
            </div>
            <!-- END Weekly Followers -->

            <!-- Weekly Tickets -->
            <div class="block block-bordered mb-lg-2">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="ml-3">
                        <p class="font-size-h2 font-w300 text-black mb-0">
                            32
                        </p>
                        <a class="link-fx font-size-sm font-w600 text-muted text-uppercase mb-0" href="javascript:void(0)">
                            Tickets
                        </a>
                    </div>
                    <div>
                        <!-- Sparkline Container -->
                        <span class="js-sparkline" data-type="line"
                                                    data-points="[1,6,3,5,4,8,2]"
                                                    data-width="100px"
                                                    data-height="60px"
                                                    data-line-color="#e04f1a"
                                                    data-fill-color="rgba(224,79,26,.1)"
                                                    data-spot-color="transparent"
                                                    data-min-spot-color="transparent"
                                                    data-max-spot-color="transparent"
                                                    data-highlight-spot-color="#e04f1a"
                                                    data-highlight-line-color="#e04f1a"
                                                    data-tooltip-suffix="Tickets"></span>
                    </div>
                </div>
            </div>
            <!-- END Weekly Tickets -->
        </div>
        <!-- END Various Stats -->
    </div>
    <!-- END Statistics -->

    <!-- Latest Orders and Customers -->
    <div class="row row-deck">
        <!-- Latest Orders -->
        <div class="col-lg-6 invisible" data-toggle="appear">
            <div class="block block-bordered">
                <div class="block-header border-bottom">
                    <h3 class="block-title">Latest Orders</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-settings"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm">
                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                        <thead class="thead-light">
                            <tr class="text-uppercase">
                                <th class="font-w700">ID</th>
                                <th class="d-none d-sm-table-cell font-w700">Date</th>
                                <th class="font-w700">State</th>
                                <th class="d-none d-sm-table-cell font-w700 text-right" style="width: 120px;">Price</th>
                                <th class="font-w700 text-center" style="width: 60px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="font-w600">#00235</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $999,99
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#00234</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $2.299,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#00233</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $1200,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#00232</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-danger">Cancelled</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $399,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#00231</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $349,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#00230</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $999,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#00229</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $39,99
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#00228</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $499,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#00227</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $325,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block-content block-content-full block-content-sm border-top text-center">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">View More..</a>
                </div>
            </div>
        </div>
        <!-- END Latest Orders -->

        <!-- Latest Customers -->
        <div class="col-lg-6 invisible" data-toggle="appear">
            <div class="block block-bordered">
                <div class="block-header border-bottom">
                    <h3 class="block-title">Latest Customers</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-settings"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm">
                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                        <thead class="thead-light">
                            <tr class="text-uppercase">
                                <th class="font-w700" style="width: 80px;">ID</th>
                                <th class="d-none d-sm-table-cell font-w700 text-center">Photo</th>
                                <th class="font-w700">Name</th>
                                <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 80px;">Orders</th>
                                <th class="font-w700 text-center" style="width: 60px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="font-w600">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <?php $dm->get_avatar(0, 'male', 32); ?>
                                </td>
                                <td class="font-w600">
                                    <?php $dm->get_name('male'); ?>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx font-w600" href="javascript:void(0)">5</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <?php $dm->get_avatar(0, 'female', 32); ?>
                                </td>
                                <td class="font-w600">
                                    <?php $dm->get_name('female'); ?>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx font-w600" href="javascript:void(0)">14</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <?php $dm->get_avatar(0, 'male', 32); ?>
                                </td>
                                <td class="font-w600">
                                    <?php $dm->get_name('male'); ?>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx font-w600" href="javascript:void(0)">15</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <?php $dm->get_avatar(0, 'female', 32); ?>
                                </td>
                                <td class="font-w600">
                                    <?php $dm->get_name('female'); ?>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx font-w600" href="javascript:void(0)">36</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <?php $dm->get_avatar(0, 'male', 32); ?>
                                </td>
                                <td class="font-w600">
                                    <?php $dm->get_name('male'); ?>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx font-w600" href="javascript:void(0)">3</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <?php $dm->get_avatar(0, 'female', 32); ?>
                                </td>
                                <td class="font-w600">
                                    <?php $dm->get_name('female'); ?>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx font-w600" href="javascript:void(0)">1</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <?php $dm->get_avatar(0, 'male', 32); ?>
                                </td>
                                <td class="font-w600">
                                    <?php $dm->get_name('male'); ?>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx font-w600" href="javascript:void(0)">12</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block-content block-content-full block-content-sm border-top text-center">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">View More..</a>
                </div>
            </div>
        </div>
        <!-- END Latest Customers -->
    </div>
    <!-- END Latest Orders and Customers -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>

<!-- Page JS Helpers (jQuery Sparkline Plugin) -->
<script>jQuery(function(){ Dashmix.helpers('sparkline'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
