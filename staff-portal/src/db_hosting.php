<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/hosting/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content content-full">
    <!-- Overview -->
    <h2 class="font-w300 mt-4 mb-3">Overview</h2>
    <div class="row">
        <div class="col-sm-6 col-lg-3 invisible" data-toggle="appear">
            <div class="block block-rounded block-fx-pop text-center">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <a class="link-fx text-primary font-size-h1 font-w600" href="javascript:void(0)">3</a>
                        <div class="font-size-sm font-w600 text-uppercase text-muted mt-1">Domains</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 invisible" data-toggle="appear" data-timeout="150">
            <div class="block block-rounded block-fx-pop text-center">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <a class="link-fx text-primary font-size-h1 font-w600" href="javascript:void(0)">1</a>
                        <div class="font-size-sm font-w600 text-uppercase text-muted mt-1">VPS Server</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 invisible" data-toggle="appear" data-timeout="300">
            <div class="block block-rounded block-fx-pop text-center">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <a class="link-fx text-primary font-size-h1 font-w600" href="javascript:void(0)">1</a>
                        <div class="font-size-sm font-w600 text-uppercase text-muted mt-1">Active Plan</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 invisible" data-toggle="appear" data-timeout="450">
            <div class="block block-rounded block-fx-pop text-center">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <a class="link-fx text-warning font-size-h1 font-w600" href="javascript:void(0)">$70</a>
                        <div class="font-size-sm font-w600 text-uppercase text-muted mt-1">Pending..</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Overview -->

    <!-- VPS -->
    <div class="d-flex justify-content-between align-items-center mt-6 mb-3">
        <h2 class="font-w300 mb-0">VPS</h2>
        <button type="button" class="btn btn-primary btn-sm btn-primary btn-rounded px-3" onclick="Dashmix.block('open', '#dm-add-server');">
            <i class="fa fa-plus mr-1"></i> Add Server
        </button>
    </div>
    <div class="overflow-hidden">
        <div id="dm-add-server" class="block block-rounded bg-body-dark d-none animated fadeIn">
            <div class="block-header bg-white-25">
                <h3 class="block-title">Add a new VPS</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-question"></i>
                    </button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                        <i class="si si-close"></i>
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full">
                <form action="db_hosting.php" method="POST" onsubmit="return false;">
                    <div class="form-group row gutters-tiny mb-0 items-push">
                        <div class="col-md-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        vps158875_
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="example-hosting-name" name="example-hosting-name" placeholder="Name..">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="custom-select" id="example-hosting-vps" name="example-hosting-vps">
                                <option value="0">Please select a config</option>
                                <option value="1">$19/m - 2GB RAM, 30GB Storage, Unlimited Domains</option>
                                <option value="2">$29/m - 4GB RAM, 60GB Storage, Unlimited Domains</option>
                                <option value="3">$49/m - 6GB RAM, 120GB Storage, Unlimited Domains</option>
                                <option value="4">$69/m - 8GB RAM, 240GB Storage, Unlimited Domains</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fa fa-plus mr-1"></i> Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="block block-rounded block-fx-pop mb-2 invisible" data-toggle="appear">
        <div class="block-content block-content-full border-left border-3x border-dark">
            <div class="d-md-flex justify-content-md-between align-items-md-center">
                <div class="p-1 p-md-3 w-50">
                    <h3 class="h4 font-w700 mb-1">vps158875_ny1</h3>
                    <p class="font-size-sm text-muted">
                        <i class="fa fa-map-pin mr-1"></i> New York
                    </p>
                    <div class="mb-0">
                        <div class="progress mb-1" style="height: 6px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 33%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="font-size-sm font-w600 mb-3">
                            <span class="font-w700">1GB</span> of <span class="font-w700">3GB</span> RAM
                        </p>
                        <div class="progress mb-1" style="height: 6px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="font-size-sm font-w600 mb-3">
                            <span class="font-w700">25GB</span> of <span class="font-w700">50GB</span> Disk Space
                        </p>
                    </div>
                </div>
                <div class="p-1 p-md-3 text-md-right">
                    <a class="btn btn-sm btn-alt-primary btn-rounded px-3 mr-1 my-1" href="javascript:void(0)">
                        <i class="fa fa-redo mr-1"></i> Restart
                    </a>
                    <a class="btn btn-sm btn-alt-primary btn-rounded px-3 mr-1 my-1" href="javascript:void(0)">
                        <i class="fa fa-wrench mr-1"></i> Manage
                    </a>
                    <a class="btn btn-sm btn-alt-danger btn-rounded px-3 my-1" href="javascript:void(0)">
                        <i class="fa fa-times mr-1"></i> Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END VPS -->

    <!-- Domains -->
    <div class="d-flex justify-content-between align-items-center mt-6 mb-3">
        <h2 class="font-w300 mb-0">Domains</h2>
        <button type="button" class="btn btn-primary btn-sm btn-primary btn-rounded px-3" onclick="Dashmix.block('open', '#dm-add-domain');">
            <i class="fa fa-plus mr-1"></i> Add Domain
        </button>
    </div>
    <div class="overflow-hidden">
        <div id="dm-add-domain" class="block block-rounded d-none bg-body-dark animated fadeIn">
            <div class="block-header bg-white-25">
                <h3 class="block-title">Add a new domain</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-question"></i>
                    </button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                        <i class="si si-close"></i>
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full">
                <form action="db_hosting.php" method="POST" onsubmit="return false;">
                    <div class="form-group row gutters-tiny mb-0 items-push">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="example-hosting-domain" name="example-hosting-domain" placeholder="example.com">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-alt-primary btn-block">
                                <i class="fa fa-arrows-alt-h mr-1"></i> Transfer
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fa fa-plus mr-1"></i> Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="block block-rounded block-fx-pop mb-2 invisible" data-toggle="appear">
        <div class="block-content block-content-full border-left border-3x border-success">
            <div class="d-md-flex justify-content-md-between align-items-md-center">
                <div class="p-1 p-md-3">
                    <h3 class="h4 font-w700 mb-1">example.com</h3>
                    <p class="font-size-sm mb-2">
                        <a class="mr-1 mb-1" href="javascript:void(0)">DNS</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">Visit</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">WebFTP</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">FTP</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">Add IP</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">Email</a>
                    </p>
                    <p class="font-size-sm text-muted mb-0">
                        Expires on 15th June, 2030
                    </p>
                </div>
                <div class="p-1 p-md-3">
                    <a class="btn btn-sm btn-alt-primary btn-rounded px-3 mr-1 my-1" href="javascript:void(0)">
                        <i class="fa fa-wrench mr-1"></i> Manage
                    </a>
                    <a class="btn btn-sm btn-alt-danger btn-rounded px-3 my-1" href="javascript:void(0)">
                        <i class="fa fa-times mr-1"></i> Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="block block-rounded block-fx-pop mb-2 invisible" data-toggle="appear" data-timeout="150">
        <div class="block-content block-content-full border-left border-3x border-success">
            <div class="d-md-flex justify-content-md-between align-items-md-center">
                <div class="p-1 p-md-3">
                    <h3 class="h4 font-w700 mb-1">example.co.uk</h3>
                    <p class="font-size-sm mb-2">
                        <a class="mr-1 mb-1" href="javascript:void(0)">DNS</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">Visit</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">WebFTP</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">FTP</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">Add IP</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">Email</a>
                    </p>
                    <p class="font-size-sm text-muted mb-0">
                        Expires on 12th October, 2027
                    </p>
                </div>
                <div class="p-1 p-md-3">
                    <a class="btn btn-sm btn-alt-primary btn-rounded px-3 mr-1 my-1" href="javascript:void(0)">
                        <i class="fa fa-wrench mr-1"></i> Manage
                    </a>
                    <a class="btn btn-sm btn-alt-danger btn-rounded px-3 my-1" href="javascript:void(0)">
                        <i class="fa fa-times mr-1"></i> Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="block block-rounded block-fx-pop mb-2 invisible" data-toggle="appear" data-timeout="300">
        <div class="block-content block-content-full border-left border-3x border-warning">
            <div class="d-md-flex justify-content-md-between align-items-md-center">
                <div class="p-1 p-md-3">
                    <h3 class="h4 font-w700 mb-1">example.io</h3>
                    <p class="font-size-sm mb-2">
                        <a class="mr-1 mb-1" href="javascript:void(0)">DNS</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">Visit</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">WebFTP</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">FTP</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">Add IP</a>
                        <a class="mr-1 mb-1" href="javascript:void(0)">Email</a>
                    </p>
                    <p class="font-size-sm mb-0">
                        <a class="font-w600 text-danger" href="javascript:void(0)">Expires in 1 week - Renew Today</a>
                    </p>
                </div>
                <div class="p-1 p-md-3">
                    <a class="btn btn-sm btn-alt-primary btn-rounded px-3 mr-1 my-1" href="javascript:void(0)">
                        <i class="fa fa-wrench mr-1"></i> Manage
                    </a>
                    <a class="btn btn-sm btn-alt-danger btn-rounded px-3 my-1" href="javascript:void(0)">
                        <i class="fa fa-times mr-1"></i> Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Domains -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
