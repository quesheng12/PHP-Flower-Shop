<?php
//staff登陆检测
require '../../utils/check-staff-login.php';
?>
<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
    <link href="../../plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
    <script src="../../plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>
    <script src="../../js/jquery-3.5.1.js" type="text/javascript"></script>
<?php
include('../../utils/conn.php');
$today = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(id) as num FROM orders WHERE TO_DAYS(NOW()) - TO_DAYS(time) < 1"))['num'];
$yesterday = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(id) as num FROM orders WHERE TO_DAYS(NOW()) - TO_DAYS(time) = 1"))['num'];
$this_month = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(id) as num FROM orders WHERE DATE_SUB(CURDATE(), INTERVAL 30 DAY) <= time"))['num'];
?>
<?php
session_start();
if(isset($_SESSION['language']) && ($_SESSION['language'] == 'zh')){
    echo '<script>location.href="be_pages_ecom_orders-zh.php";</script>';
}
?>

    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <div class="row row-deck">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.php">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 text-primary mb-1"><?php echo $today; ?></div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Pending
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1"><?php echo $today; ?></div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Today
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1"><?php echo $yesterday; ?></div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Yesterday
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1"><?php echo $this_month; ?></div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            This Month
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

        <!-- All Orders -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">All Orders</h3>
                <div class="block-options">
                    <div class="dropdown">
                        <button type="button" class="btn btn-light" id="dropdown-ecom-filters" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            Filters
                            <i class="fa fa-angle-down ml-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-ecom-filters">
                            <a class="filter dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)" data-filter="wait-payment">
                                Wait Payment
                                <!--                                <span class="badge badge-primary badge-pill">78</span>-->
                            </a>
                            <a class="filter dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)" data-filter="for-delivery">
                                For Delivery
                                <!--                                <span class="badge badge-secondary badge-pill">12</span>-->
                            </a>
                            <a class="filter dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)" data-filter="delivering">
                                Delivering
                                <!--                                <span class="badge badge-secondary badge-pill">12</span>-->
                            </a>
                            <a class="filter dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)" data-filter="offline">
                                Offline
                                <!--                                <span class="badge badge-secondary badge-pill">20</span>-->
                            </a>
                            <a class="filter dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)" data-filter="finished">
                                Finished
                                <!--                                <span class="badge badge-secondary badge-pill">5</span>-->
                            </a>
                            <a class="filter dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)" data-filter="canceled">
                                Canceled
                                <!--                                <span class="badge badge-secondary badge-pill">280</span>-->
                            </a>
                            <a class="filter dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)" data-filter="all">
                                All
                                <!--                                <span class="badge badge-secondary badge-pill">19k</span>-->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content bg-body-dark">
                <!-- Search Form -->
                <form action="be_pages_ecom_orders.php" method="POST" onsubmit="return false;">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-alt" id="dm-ecom-orders-search"
                               name="dm-ecom-orders-search" placeholder="Search all orders..">
                    </div>
                </form>
                <!-- END Search Form -->
            </div>
            <div class="block-content">
                <!-- All Orders Table -->
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter font-size-sm">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th class="d-none d-sm-table-cell text-center">Submitted</th>
                            <th>Status</th>
                            <th class="d-none d-xl-table-cell">Customer</th>
                            <!--                        <th class="d-none d-xl-table-cell text-center">Products</th>-->
                            <!--                        <th class="d-none d-sm-table-cell text-right">Value</th>-->
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="tbody">

                        </tbody>
                    </table>
                </div>
                <!-- END All Orders Table -->

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
                        $sql = "select COUNT('id') as num from orders";
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
        <!-- END All Orders -->
    </div>
    <!-- END Page Content -->

    <script>
        function get_orders(index, type) {
            $.post(
                '../backend/orders-index.php',
                {
                    'index': index,
                    'type': type,
                    'current': $('.page-item.active').attr('data-index')
                },
                function (data) {
                    $('#tbody').html(data);
                }
            )
        }

        function index_active(index, type) {
            $('#index-ul').find('.page-item').removeClass('active');
            $('#index-ul').find('.page-item').eq(index).addClass('active');
            get_orders(index, type);
        }

        function index_init() {
            $('.page-item').on('click', function () {
                let type = $(this).attr('data-type');
                let index = $(this).attr('data-index');
                let current_active = parseInt($('#index-ul').find('.page-item.active').attr('data-index'));
                if (index === 'prev') {
                    if (current_active !== 1)
                        index_active(current_active - 1, type);
                } else if (index === 'next') {
                    if (current_active !== parseInt(<?php echo $num;?>))
                        index_active(current_active + 1, type);
                } else {
                    index_active(index, type);
                }
            })
        }

        index_init();

        $('.filter').on('click', function () {
            let type = $(this).attr('data-filter');
            get_orders("1", type)

            $.post('../backend/get-orders-type-number.php',
                {'type': $(this).attr('data-filter')},
                function (data) {
                    console.log(data)
                    let num = data / 10;
                    $('#index-ul').html(' <li class="page-item" data-index="prev"> <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">Prev </a> </li> <li class="page-item active" data-index="1"><a class="page-link"href="javascript:void(0)">1</a></li>')
                    if (data % 10 != 0) {
                        num += 1;
                    }
                    for (var i = 2; i <= num; i++) {
                        $('#index-ul').append('<li class="page-item" data-index="' + i + '"><a class="page-link"href="javascript:void(0)">' + i + '</a></li>');
                    }
                    $('#index-ul').append('<li class="page-item" data-index="next"> <a class="page-link" href="javascript:void(0)" aria-label="Next">Next </a> </li>');
                    index_init()
                    $('.page-item').attr('data-type', type)
                })
        })

        $('.page-item').attr('data-type', 'all')
        get_orders("1", "all");
    </script>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>