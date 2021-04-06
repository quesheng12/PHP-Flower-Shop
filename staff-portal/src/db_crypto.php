<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/crypto/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-white">
    <div class="content py-0">
        <ul class="nav nav-tabs nav-tabs-alt border-bottom-0 justify-content-center justify-content-md-start">
            <li class="nav-item">
                <a class="nav-link text-body-color py-4 active" href="db_crypto.php">
                    <i class="fa fa-rocket fa-fw text-gray"></i> <span class="d-none d-md-inline ml-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body-color py-4" href="db_crypto.php">
                    <i class="fa fa-arrows-alt-h fa-fw text-gray"></i> <span class="d-none d-md-inline ml-1">Buy/Sell</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body-color py-4" href="db_crypto.php">
                    <i class="fa fa-wallet fa-fw text-gray"></i> <span class="d-none d-md-inline ml-1">Accounts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body-color py-4" href="db_crypto.php">
                    <i class="fa fa-wrench fa-fw text-gray"></i> <span class="d-none d-md-inline ml-1">Tools</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body-color py-4" href="db_crypto.php">
                    <i class="fa fa-cog fa-fw text-gray"></i> <span class="d-none d-md-inline ml-1">Settings</span>
                </a>
            </li>
            <li class="nav-item ml-auto d-none d-md-flex align-items-center">
                <button type="button" class="btn btn-sm btn-alt-success d-none d-lg-inline-block mb-1">
                    <i class="fa fa-magic fa-fw mr-1"></i> Special Offer
                </button>
            </li>
        </ul>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Bitcoin Overview -->
    <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block align-items-center">
            <li class="nav-item">
                <a class="nav-link text-body-color active" href="javascript:void(0)">
                    <span class="d-sm-none">BTC</span>
                    <span class="d-none d-sm-inline">Bitcoin <span class="text-muted font-size-sm">$14.000</span></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body-color" href="javascript:void(0)">
                    <span class="d-sm-none">ETH</span>
                    <span class="d-none d-sm-inline">Ethereum <span class="text-muted font-size-sm">$1.100</span></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body-color" href="javascript:void(0)">
                    <span class="d-sm-none">LTC</span>
                    <span class="d-none d-sm-inline">Litecoin <span class="text-muted font-size-sm">$250</span></span>
                </a>
            </li>
            <li class="nav-item ml-auto">
                <div class="block-options mr-3">
                    <div class="dropdown" role="group">
                        <button type="button" class="btn-block-option" id="crypto-dates" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="si si-calendar"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="crypto-dates">
                            <button type="button" class="btn btn-sm btn-block btn-light" tabindex="-1">Last  Hour</button>
                            <button type="button" class="btn btn-sm btn-block btn-light" tabindex="-1">Last  Week</button>
                            <button type="button" class="btn btn-sm btn-block btn-light active" tabindex="-1">Last  Month</button>
                            <button type="button" class="btn btn-sm btn-block btn-light" tabindex="-1">Last Year</button>
                            <div class="dropdown-divider"></div>
                            <button type="button" class="btn btn-sm btn-block btn-light" tabindex="-1">All Time</button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="block-content block-content-full border-bottom">
            <div class="row text-center">
                <div class="col-lg-4 py-3">
                    <div class="font-size-h1 font-w300 text-black mb-0">
                        $14.000
                    </div>
                    <div class="font-size-sm font-w700 text-muted text-uppercase">
                        Bitcoin Price
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="font-size-h1 font-w300 text-black mb-0">
                        <span class="text-success">+</span> $3.500
                    </div>
                    <div class="font-size-sm font-w700 text-muted text-uppercase">
                        Since Last Month (USD)
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="font-size-h1 font-w300 text-black mb-0">
                        <span class="text-success">+</span> 133%
                    </div>
                    <div class="font-size-sm font-w700 text-muted text-uppercase">
                        Since Last Month (%)
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full">
            <!-- Bitcoin Chart.js Container (.js-chartjs-bitcoin class is initialized in js/pages/db_crypto.min.js which was auto compiled from _js/pages/db_crypto.js), for more examples you can check out http://www.chartjs.org/docs/ -->
            <canvas class="js-chartjs-bitcoin" height="400"></canvas>
        </div>
    </div>
    <!-- END Bitcoin Overview -->

    <!-- Portfolio and Recent Activity -->
    <div class="row row-deck">
        <div class="col-xl-6">
            <!-- Your Portfolio -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Your Portfolio</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter">
                        <tbody>
                            <tr>
                                <td style="width: 32px;">
                                    <i class="fa fa-circle text-warning"></i>
                                </td>
                                <td style="width: 140px;">
                                    <strong>Bitcoin</strong>
                                </td>
                                <td class="d-none d-sm-table-cell" style="width: 140px;">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <span class="font-size-sm">0.50 BTC</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    <span class="font-size-sm">~ $7.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-circle text-info"></i>
                                </td>
                                <td>
                                    <strong>Ethereum</strong>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <span class="font-size-sm">3.00 ETH</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    <span class="font-size-sm">~ $3.300</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-circle text-muted"></i>
                                </td>
                                <td>
                                    <strong>Litecoin</strong>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-muted" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <span class="font-size-sm">10.00 LTC</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    <span class="font-size-sm">~ $2.500</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-circle text-danger"></i>
                                </td>
                                <td>
                                    <strong>US Dollars</strong>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <span class="font-size-sm">2.000 USD</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    <span class="font-size-sm">$2.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-circle text-success"></i>
                                </td>
                                <td>
                                    <strong>Euros</strong>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <span class="font-size-sm">0 EUR</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    <span class="font-size-sm">0€</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-circle text-xsmooth"></i>
                                </td>
                                <td>
                                    <strong>British Pounds</strong>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-xsmooth" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <span class="font-size-sm">0 GBP</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    <span class="font-size-sm">£0</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block-content block-content-full border-top text-muted text-center font-w600">
                    Total Balance ~ $14.800,00
                </div>
            </div>
            <!-- END Your Portfolio -->
        </div>
        <div class="col-xl-6">
            <!-- Recent Activity -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Recent Activity</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content border-bottom">
                    <table class="table table-striped table-borderless table-vcenter">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    <div class="font-size-sm font-w700 text-uppercase">May</div>
                                    15
                                </td>
                                <td class="text-center text-warning" style="width: 40px;">
                                    <i class="fa fa-arrow-left"></i>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="font-w600">Bought Bitcoin</div>
                                    <div class="font-size-sm text-muted">Using USD Wallet</div>
                                </td>
                                <td class="text-right">
                                    <div class="font-w600">+0.030000 BTC</div>
                                    <div class="font-size-sm text-muted">-568,83 USD</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="font-size-sm font-w700 text-uppercase">May</div>
                                    12
                                </td>
                                <td class="text-center text-warning">
                                    <i class="fa fa-arrow-left"></i>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="font-w600">Bought Bitcoin</div>
                                    <div class="font-size-sm text-muted">Using USD Wallet</div>
                                </td>
                                <td class="text-right">
                                    <div class="font-w600">+0.030000 BTC</div>
                                    <div class="font-size-sm text-muted">-521,64 USD</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="font-size-sm font-w700 text-uppercase">May</div>
                                    11
                                </td>
                                <td class="text-center text-success">
                                    <i class="fa fa-arrow-right"></i>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="font-w600">Sold Bitcoin</div>
                                    <div class="font-size-sm text-muted">Using USD Wallet</div>
                                </td>
                                <td class="text-right">
                                    <div class="font-w600">-0.060000 BTC</div>
                                    <div class="font-size-sm text-muted">+1014,25 USD</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="font-size-sm font-w700 text-uppercase">May</div>
                                    9
                                </td>
                                <td class="text-center text-warning">
                                    <i class="fa fa-arrow-left"></i>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="font-w600">Bought Bitcoin</div>
                                    <div class="font-size-sm text-muted">Using USD Wallet</div>
                                </td>
                                <td class="text-right">
                                    <div class="font-w600">+0.060000 BTC</div>
                                    <div class="font-size-sm text-muted">-1014,25 USD</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block-content block-content-full block-content-sm text-center">
                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-arrow-down mr-1"></i> More transactions..
                    </a>
                </div>
            </div>
            <!-- END Recent Activity -->
        </div>
    </div>
    <!-- END Portfolio and Recent Activity -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/chart.js/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/db_crypto.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
