<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/minimal/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo10@2x.jpg');">
    <div class="bg-primary-op">
        <div class="content content-full content-top text-center">
            <div class="pt-4 pb-3">
                <h1 class="font-w300 text-white mb-2">Dashboard</h1>
                <h2 class="h4 font-w300 text-white-75">Welcome to your personal web application</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="row">
        <!-- Quick Stats -->
        <div class="col-6 col-md-3 invisible" data-toggle="appear">
            <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h2 mb-1">15</div>
                        <div class="text-muted">Sales</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-3 invisible" data-toggle="appear" data-timeout="250">
            <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h2 mb-1">$120</div>
                        <div class="text-muted">Earnings</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-3 invisible" data-toggle="appear" data-timeout="500">
            <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h2 mb-1">$1.450</div>
                        <div class="text-muted">Balance</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-3 invisible" data-toggle="appear" data-timeout="750">
            <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h2 mb-1">2</div>
                        <div class="text-muted">Tickets</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Quick Stats -->

        <!-- Charts -->
        <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.sparkline() -->
        <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
        <div class="col-md-6 invisible" data-toggle="appear">
            <a class="block block-rounded block-link-pop bg-in" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex justify-content-between">
                    <div class="mr-3">
                        <i class="fa fa-2x fa-money-bill-alt text-primary-lighter"></i>
                    </div>
                    <div>
                        <p class="font-size-h3 font-w300 mb-0">
                            + 15%
                        </p>
                        <p class="text-muted mb-0">
                            Earnings
                        </p>
                    </div>
                </div>
                <div class="block-content block-content-full overflow-hidden">
                    <!-- Sparkline Container -->
                    <span class="js-sparkline" data-type="line"
                                                data-points="[120,140,60,85,160,180,120]"
                                                data-width="100%"
                                                data-height="140px"
                                                data-fill-color="transparent"
                                                data-spot-color="transparent"
                                                data-min-spot-color="transparent"
                                                data-max-spot-color="transparent"
                                                data-highlight-spot-color="#0665d0"
                                                data-highlight-line-color="#0665d0"
                                                data-tooltip-prefix="$"></span>
                </div>
            </a>
        </div>
        <div class="col-md-6 invisible" data-toggle="appear" data-timeout="500">
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex justify-content-between">
                    <div class="mr-3">
                        <p class="font-size-h3 font-w300 mb-0">
                            + 55%
                        </p>
                        <p class="text-muted mb-0">
                            Sales
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-2x fa-boxes text-primary-lighter"></i>
                    </div>
                </div>
                <div class="block-content block-content-full overflow-hidden">
                    <!-- Sparkline Container -->
                    <span class="js-sparkline" data-type="line"
                                                data-points="[45,28,36,63,70,85,120]"
                                                data-width="100%"
                                                data-height="140px"
                                                data-line-color="#689550"
                                                data-fill-color="transparent"
                                                data-spot-color="transparent"
                                                data-min-spot-color="transparent"
                                                data-max-spot-color="transparent"
                                                data-highlight-spot-color="#689550"
                                                data-highlight-line-color="#689550"
                                                data-tooltip-suffix="Sales"></span>
                </div>
            </a>
        </div>
        <div class="col-md-6 invisible" data-toggle="appear">
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex justify-content-between">
                    <div class="mr-3">
                        <i class="fa fa-2x fa-users text-primary-lighter"></i>
                    </div>
                    <div>
                        <p class="font-size-h3 font-w300 mb-0">
                            3.590
                        </p>
                        <p class="text-muted mb-0">
                            Accounts
                        </p>
                    </div>
                </div>
                <div class="block-content block-content-full overflow-hidden">
                    <!-- Sparkline Container -->
                    <span class="js-sparkline" data-type="line"
                                                data-points="[320,420,180,98,520,630,250]"
                                                data-width="100%"
                                                data-height="140px"
                                                data-line-color="#333"
                                                data-fill-color="transparent"
                                                data-spot-color="transparent"
                                                data-min-spot-color="transparent"
                                                data-max-spot-color="transparent"
                                                data-highlight-spot-color="#333"
                                                data-highlight-line-color="#333"
                                                data-tooltip-suffix="Accounts"></span>
                </div>
            </a>
        </div>
        <div class="col-md-6 invisible" data-toggle="appear" data-timeout="500">
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex justify-content-between">
                    <div class="mr-3">
                        <p class="font-size-h3 font-w300 mb-0">
                            80
                        </p>
                        <p class="text-muted mb-0">
                            Tickets
                        </p>
                    </div>
                    <div>
                        <i class="fa fa-2x fa-ticket-alt text-primary-lighter"></i>
                    </div>
                </div>
                <div class="block-content block-content-full overflow-hidden">
                    <!-- Sparkline Container -->
                    <span class="js-sparkline" data-type="line"
                                                data-points="[3,5,8,2,1,6,7]"
                                                data-width="100%"
                                                data-height="140px"
                                                data-line-color="#ffb119"
                                                data-fill-color="transparent"
                                                data-spot-color="transparent"
                                                data-min-spot-color="transparent"
                                                data-max-spot-color="transparent"
                                                data-highlight-spot-color="#ffb119"
                                                data-highlight-line-color="#ffb119"
                                                data-tooltip-suffix="Tickets"></span>
                </div>
            </a>
        </div>
        <!-- END Charts -->

        <!-- More Stats -->
        <div class="col-md-6 invisible" data-toggle="appear">
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="py-3 border-right">
                                <div class="item item-circle bg-body-light mx-auto">
                                    <i class="fa fa-user-circle text-primary"></i>
                                </div>
                                <p class="font-size-h3 font-w300 mt-3 mb-0">
                                    9
                                </p>
                                <p class="text-muted mb-0">
                                    Clients
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="py-3 border-right">
                                <div class="item item-circle bg-body-light mx-auto">
                                    <i class="fa fa-chart-line text-primary"></i>
                                </div>
                                <p class="font-size-h3 font-w300 mt-3 mb-0">
                                    3
                                </p>
                                <p class="text-muted mb-0">
                                    Invoices
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="py-3">
                                <div class="item item-circle bg-body-light mx-auto">
                                    <i class="fa fa-comments text-primary"></i>
                                </div>
                                <p class="font-size-h3 font-w300 mt-3 mb-0">
                                    2
                                </p>
                                <p class="text-muted mb-0">
                                    Chats
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 invisible" data-toggle="appear" data-timeout="500">
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="py-3 border-right">
                                <div class="item item-circle bg-body-light mx-auto">
                                    <i class="fa fa-briefcase text-primary"></i>
                                </div>
                                <p class="font-size-h3 font-w300 mt-3 mb-0">
                                    61
                                </p>
                                <p class="text-muted mb-0">
                                    Projects
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="py-3 border-right">
                                <div class="item item-circle bg-body-light mx-auto">
                                    <i class="fa fa-paint-brush text-primary"></i>
                                </div>
                                <p class="font-size-h3 font-w300 mt-3 mb-0">
                                    6
                                </p>
                                <p class="text-muted mb-0">
                                    Themes
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="py-3">
                                <div class="item item-circle bg-body-light mx-auto">
                                    <i class="fa fa-wrench text-primary"></i>
                                </div>
                                <p class="font-size-h3 font-w300 mt-3 mb-0">
                                    15
                                </p>
                                <p class="text-muted mb-0">
                                    Plugins
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END More Stats -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>

<!-- Page JS Helpers (jQuery Sparkline Plugin) -->
<script>jQuery(function(){ Dashmix.helpers('sparkline'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
