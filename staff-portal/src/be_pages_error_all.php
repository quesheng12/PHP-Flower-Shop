<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Error Pages</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item">Error</li>
                    <li class="breadcrumb-item active" aria-current="page">All</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="row">
        <div class="col-md-4">
            <!-- 400 -->
            <a class="block block-rounded block-link-shadow" href="op_error_400.php">
                <div class="block-content text-center">
                    <div class="py-5">
                        <p class="display-4 text-warning font-w600 mb-2">400</p>
                        <p class="font-size-lg">Error Page<p>
                    </div>
                </div>
            </a>
            <!-- END 400 -->
        </div>
        <div class="col-md-4">
            <!-- 401 -->
            <a class="block block-rounded block-link-shadow" href="op_error_401.php">
                <div class="block-content text-center">
                    <div class="py-5">
                        <p class="display-4 text-info font-w600 mb-2">401</p>
                        <p class="font-size-lg">Error Page<p>
                    </div>
                </div>
            </a>
            <!-- END 401 -->
        </div>
        <div class="col-md-4">
            <!-- 403 -->
            <a class="block block-rounded block-link-shadow" href="op_error_403.php">
                <div class="block-content text-center">
                    <div class="py-5">
                        <p class="display-4 text-success font-w600 mb-2">403</p>
                        <p class="font-size-lg">Error Page<p>
                    </div>
                </div>
            </a>
            <!-- END 403 -->
        </div>
        <div class="col-md-4">
            <!-- 404 -->
            <a class="block block-rounded block-link-shadow" href="op_error_404.php">
                <div class="block-content text-center">
                    <div class="py-5">
                        <p class="display-4 text-danger font-w600 mb-2">404</p>
                        <p class="font-size-lg">Error Page<p>
                    </div>
                </div>
            </a>
            <!-- END 404 -->
        </div>
        <div class="col-md-4">
            <!-- 500 -->
            <a class="block block-rounded block-link-shadow" href="op_error_500.php">
                <div class="block-content text-center">
                    <div class="py-5">
                        <p class="display-4 text-dark font-w600 mb-2">500</p>
                        <p class="font-size-lg">Error Page<p>
                    </div>
                </div>
            </a>
            <!-- END 500 -->
        </div>
        <div class="col-md-4">
            <!-- 503 -->
            <a class="block block-rounded block-link-shadow" href="op_error_503.php">
                <div class="block-content text-center">
                    <div class="py-5">
                        <p class="display-4 text-muted font-w600 mb-2">503</p>
                        <p class="font-size-lg">Error Page<p>
                    </div>
                </div>
            </a>
            <!-- END 503 -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>