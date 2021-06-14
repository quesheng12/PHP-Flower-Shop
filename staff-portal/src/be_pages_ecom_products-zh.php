<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'en') {
    echo '<script>location.href="be_pages_ecom_products.php";</script>';
}
?>
<!-- Page Content -->
<div class="content">
    <!-- Quick Overview -->
    <div class="row row-deck">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_product_edit.php">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-success mb-1">
                        <i class="fa fa-plus"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-success text-uppercase mb-0">
                        增加新项目
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-danger mb-1">63</div>
                    <p class="font-w600 font-size-sm text-danger text-uppercase mb-0">
                        售罄
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.php">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-dark mb-1">690</div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        新
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.php">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-dark mb-1">36.963</div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        全部商品
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- END Quick Overview -->

    <!-- All Products -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">全部商品</h3>
            <div class="block-options">
                <div class="dropdown">
                    <button type="button" class="btn btn-light" id="dropdown-ecom-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        过滤器 <i class="fa fa-angle-down ml-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            新
                            <span class="badge badge-success badge-pill">260</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            售罄
                            <span class="badge badge-danger badge-pill">63</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            全部
                            <span class="badge badge-secondary badge-pill">36k</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content bg-body-dark">
            <!-- Search Form -->
            <form action="be_pages_ecom_products.php" method="POST" onsubmit="return false;">
                <div class="form-group">
                    <input type="text" class="form-control form-control-alt" id="dm-ecom-products-search" name="dm-ecom-products-search" placeholder="搜索商品...">
                </div>
            </form>
            <!-- END Search Form -->
        </div>
        <div class="block-content">
            <!-- All Products Table -->
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th class="d-none d-sm-table-cell text-center">增加</th>
                            <th class="d-none d-md-table-cell">商品</th>
                            <th>状态</th>
                            <th class="d-none d-sm-table-cell text-right">价值</th>
                            <th class="text-center">操作</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <?php
                        $badges['0']['class']   = "badge-success";
                        $badges['0']['text']    = "Available";
                        $badges['1']['class']   = "badge-danger";
                        $badges['1']['text']    = "Out of Stock";
                        ?>
                        <?php for ($i = 35; $i > 16; $i--) { ?>
                        <tr>
                            <td class="text-center font-size-sm">
                                <a class="font-w600" href="be_pages_ecom_product_edit.php">
                                    <strong>PID.0365<?php echo $i; ?></strong>
                                </a>
                            </td>
                            <td class="d-none d-sm-table-cell text-center font-size-sm"><?php echo sprintf('%02d', rand(1, 28)) . '/' . sprintf('%02d', rand(1, 12)); ?>/2019</td>
                            <td class="d-none d-md-table-cell font-size-sm">
                                <a class="font-w600" href="be_pages_ecom_product_edit.php">Product #<?php echo $i; ?></a>
                            </td>
                            <td>
                                <span class="badge<?php $rand = rand(0, 1); echo ($badges[$rand]['class']) ? " " . $badges[$rand]['class'] : ""; ?>"><?php echo $badges[$rand]['text']; ?></span>
                            </td>
                            <td class="text-right d-none d-sm-table-cell font-size-sm">
                                <strong>$<?php echo rand(10, 99); ?>,00</strong>
                            </td>
                            <td class="text-center font-size-sm">
                                <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.php">
                                    <i class="fa fa-fw fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-times text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- END All Products Table -->

            <!-- Pagination -->
            <nav aria-label="Photos Search Navigation">
                <ul class="pagination justify-content-end mt-2">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                            上一页
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                            下一页
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END Pagination -->
        </div>
    </div>
    <!-- END All Products -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
