<?php
//staff登陆检测
require '../../utils/check-staff-login.php';
?>
<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<script src="../../js/jquery-3.5.1.js"></script>
<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'zh') {
    echo '<script>location.href="be_pages_ecom_products-zh.php";</script>';
}
?>
<?php
$sql = "select COUNT(id) as num from item WHERE stock=0";
$out_stock = mysqli_fetch_assoc(mysqli_query($conn, $sql))['num'];
?>

<!-- Page Content -->
<div class="content">
    <!-- Quick Overview -->
    <div class="row row-deck">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_product_add.php">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-success mb-1">
                        <i class="fa fa-plus"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-success text-uppercase mb-0">
                        Add New
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-danger mb-1"><?php echo $out_stock; ?></div>
                    <p class="font-w600 font-size-sm text-danger text-uppercase mb-0">
                        Out of stock
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.php">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-dark mb-1">0</div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        New
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.php">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-dark mb-1">15</div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        All Products
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- END Quick Overview -->

    <!-- All Products -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Products</h3>
            <div class="block-options">
                <div class="dropdown">
                    <button type="button" class="btn btn-light" id="dropdown-ecom-filters" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Filters <i class="fa fa-angle-down ml-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                           href="javascript:void(0)">
                            New
                            <span class="badge badge-success badge-pill">260</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                           href="javascript:void(0)">
                            Out of Stock
                            <span class="badge badge-danger badge-pill">63</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                           href="javascript:void(0)">
                            All
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
                    <input type="text" class="form-control form-control-alt" id="dm-ecom-products-search"
                           name="dm-ecom-products-search" placeholder="Search all products..">
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
                        <!--                        <th class="d-none d-sm-table-cell text-center">Added</th>-->
                        <th class="d-none d-md-table-cell">Product</th>
                        <th>Status</th>
                        <th class="d-none d-sm-table-cell text-right">Price</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="tbody">
                    </tbody>
                </table>
            </div>
            <!-- END All Products Table -->

            <!-- Pagination -->
            <nav aria-label="Photos Search Navigation">
                <ul id="index-ul" class="pagination justify-content-end mt-2">
                    <li class="page-item" data-index="prev">
                        <a class="page-link" href="javascript:void(0)" tabindex="-1"
                           aria-label="Previous">
                            Prev
                        </a>
                    </li>
                    <li class="page-item active" data-index="1">
                        <a class="page-link"
                           href="javascript:void(0)">1</a>
                    </li>
                    <?php
                    $sql = "select COUNT('id') as num from item";
                    $num = mysqli_fetch_assoc(mysqli_query($conn, $sql))['num'];
                    if ($num % 10 == 0) {
                        $num = $num / 10;
                    } else {
                        $num = $num / 10 + 1;
                    }
                    for ($i = 2; $i <= $num; $i++) { ?>
                        <li class="page-item" data-index="<?php echo $i; ?>">
                            <a class="page-link"
                               href="javascript:void(0)"><?php echo $i; ?></a>
                        </li>
                    <?php } ?>
                    <li class="page-item" data-index="next">
                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                            Next
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

<script>
    function get_item(index) {
        $.post(
            '../backend/item-index.php',
            {
                'index': index,
                'current': $('.page-item.active').attr('data-index')
            },
            function (data) {
                $('#tbody').html(data);
            }
        )
    }

    function index_active(index) {
        $('#index-ul').find('.page-item').removeClass('active');
        $('#index-ul').find('.page-item').eq(index).addClass('active');
        get_item(index);
    }

    $('.page-item').on('click', function () {
        let index = $(this).attr('data-index');
        let current_active = parseInt($('#index-ul').find('.page-item.active').attr('data-index'));
        if (index === 'prev') {
            if (current_active !== 1)
                index_active(current_active - 1);
        } else if (index === 'next') {
            if (current_active !== parseInt(<?php echo $num;?>))
                index_active(current_active + 1);
        } else {
            index_active(index);
        }
    })

    get_item("1");
</script>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
