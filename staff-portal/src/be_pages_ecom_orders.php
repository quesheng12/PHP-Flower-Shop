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
<?php
include('../../utils/conn.php');
$today = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(id) as num FROM orders WHERE TO_DAYS(NOW()) - TO_DAYS(time) < 1"))['num'];
$yesterday = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(id) as num FROM orders WHERE TO_DAYS(NOW()) - TO_DAYS(time) = 1"))['num'];
$this_month = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(id) as num FROM orders WHERE DATE_SUB(CURDATE(), INTERVAL 30 DAY) <= time"))['num'];
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
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)">
                                Pending..
                                <span class="badge badge-primary badge-pill">78</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)">
                                Processing
                                <span class="badge badge-secondary badge-pill">12</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)">
                                For Delivery
                                <span class="badge badge-secondary badge-pill">20</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)">
                                Canceled
                                <span class="badge badge-secondary badge-pill">5</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)">
                                Delivered
                                <span class="badge badge-secondary badge-pill">280</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)">
                                All
                                <span class="badge badge-secondary badge-pill">19k</span>
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
                        <tbody>
                        <?php
                        $badges['DELIVERY_WAIT_PAYMENT']['class'] = "badge-secondary";
                        $badges['DELIVERY_WAIT_PAYMENT']['text'] = "Wait payment";
                        $badges['OFFLINE_WAIT_PAYMENT']['class'] = "badge-secondary";
                        $badges['OFFLINE_WAIT_PAYMENT']['text'] = "Wait payment";
                        $badges['FOR_DELIVERY']['class'] = "badge-info";
                        $badges['FOR_DELIVERY']['text'] = "For delivery";
                        $badges['FINISHED']['class'] = "badge-success";
                        $badges['FINISHED']['text'] = "Finished";
                        $badges['CANCELED']['class'] = "badge-danger";
                        $badges['CANCELED']['text'] = "Canceled";
                        $badges['OFFLINE']['class'] = "badge-warning";
                        $badges['OFFLINE']['text'] = "Offline";
                        $badges['DELIVERING']['class'] = "badge-primary";
                        $badges['DELIVERING']['text'] = "Delivering";

                        $sql = "select id,user_id,service,status,time from orders ORDER BY time DESC";
                        $rst = mysqli_query($conn, $sql);
                        ?>
                        <?php while ($arr = mysqli_fetch_assoc($rst)) { ?>
                            <tr>
                                <td class="text-center">
                                    <a class="font-w600" href="be_pages_ecom_order.php?id=<?php echo $arr['id']; ?>">
                                        <strong>ORD.<?php echo $arr['id']; ?></strong>
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell text-center"><?php echo $arr['time'] ?></td>
                                <td class="font-size-base">
                                <span class="badge badge-pill<?php $status = $arr['status'];
                                echo ($badges[$status]['class']) ? " " . $badges[$status]['class'] : ""; ?>"><?php echo $badges[$status]['text']; ?></span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="font-w600"
                                       href="">USER.<?php echo $arr['user_id']; ?></a>
                                </td>
                                <!--                            <td class="d-none d-xl-table-cell text-center">-->
                                <!--                                <a class="font-w600" href="be_pages_ecom_order.php">-->
                                <?php //echo rand(1, 9); ?><!--</a>-->
                                <!--                            </td>-->
                                <!--                            <td class="d-none d-sm-table-cell text-right">-->
                                <!--                                <strong>$-->
                                <?php //echo rand(25, 2500) . ',' . rand(10, 99); ?><!--</strong>-->
                                <!--                            </td>-->
                                <td class="text-center font-size-base">
                                    <a class="btn btn-sm btn-alt-secondary"
                                       href="be_pages_ecom_order.php?id=<?php echo $arr['id']; ?>">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <!--                                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">-->
                                    <!--                                    <i class="fa fa-fw fa-times text-danger"></i>-->
                                    <!--                                </a>-->
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- END All Orders Table -->

                <!-- Pagination -->
                <nav aria-label="Photos Search Navigation">
                    <ul class="pagination justify-content-end mt-2">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                Prev
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

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>