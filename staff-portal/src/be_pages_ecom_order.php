<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<?php
include('../../utils/conn.php');
$oid = $_GET['id'];
if (!isset($oid)) {
    echo "<script>location.href='be_pages_ecom_orders.php';</script>";
    exit();
}

$total_price = 0;
$sql = "select * from order_item where oid=" . $oid;
$rst = mysqli_query($conn, $sql);
?>
<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'zh') {
    echo '<script>location.href="be_pages_ecom_order-zh.php?id="+getQueryVariable("id");</script>';
}
?>
<!-- Page Content -->
<div class="content">
    <!-- Quick Overview -->
    <div id="status-manage" class="row row-deck">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" data-statu="0" href="javascript:void(0)">
                <div class="block-content py-5">
                    <div id="status" class="item rounded-lg bg-warning-light mx-auto mb-3">
                        <i class="fa fa-clock"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        ORD.<?php echo $oid; ?>
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" data-statu="1"
               href="javascript:void(0)">
                <div class="block-content py-5">
                    <div class="item rounded-lg bg-xsmooth-lighter mx-auto mb-3">
                        <i class="fa fa-sync fa-spin text-xsmooth-dark"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        In Delivering
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" data-statu="3"
               href="javascript:void(0)">
                <div class="block-content py-5">
                    <div class="item rounded-lg bg-xeco-lighter mx-auto mb-3">
                        <i class="fa fa-check text-xeco-dark"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        Finished
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" data-statu="4"
               href="javascript:void(0)">
                <div class="block-content py-5">
                    <div class="item rounded-lg bg-xplay mx-auto mb-3">
                        <i class="fa fa-times text-xwork-dark"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        Cancel
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- END Quick Overview -->

    <!-- Products -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Products</h3>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter font-size-sm">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;">ID</th>
                        <th>Product Name</th>
                        <th class="text-center">Stock</th>
                        <th class="text-center">Qty</th>
                        <th class="text-right" style="width: 10%;">Unit Cost</th>
                        <th class="text-right" style="width: 10%;">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($arr = mysqli_fetch_assoc($rst)) { ?>
                        <?php
                        $sql = "select name,price,stock from item where id=" . $arr['item_id'] . " ORDER BY id";
                        $item = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                        ?>
                        <tr>
                            <td class="text-center"><a
                                        href="be_pages_ecom_product_edit.php"><strong>PID.<?php echo $arr['item_id']; ?></strong></a>
                            </td>
                            <td>
                                <a href="be_pages_ecom_product_edit.php?id=<?php echo $arr['item_id']; ?>"><strong><?php echo $item['name']; ?></strong></a>
                            </td>
                            <td class="text-center"><?php echo $item['stock']; ?></td>
                            <td class="text-center"><strong><?php echo $arr['quantity']; ?></strong></td>
                            <td class="text-right">¥<?php echo $item['price']; ?></td>
                            <td class="text-right">¥<?php $total_price += $arr['quantity'] * $item['price'];
                                echo $arr['quantity'] * $item['price']; ?></td>
                        </tr>
                    <?php } ?>
                    <!--                    <tr>-->
                    <!--                        <td colspan="5" class="text-right"><strong>Total Price:</strong></td>-->
                    <!--                        <td class="text-right">$177,00</td>-->
                    <!--                    </tr>-->
                    <!--                    <tr>-->
                    <!--                        <td colspan="5" class="text-right"><strong>Total Paid:</strong></td>-->
                    <!--                        <td class="text-right">$177,00</td>-->
                    <!--                    </tr>-->
                    <tr class="table-active">
                        <td colspan="5" class="text-right text-uppercase"><strong>Total Price:</strong></td>
                        <td class="text-right"><strong>¥<?php echo $total_price; ?></strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Products -->

    <?php
    $sql = "select status,address_id from orders where id=" . $oid;
    $order = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    $sql = "select * from address where id=" . $order['address_id'];
    //    $address = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    ?>

    <!-- Customer -->
    <div class="row">
        <div class="col-sm-12">
            <!-- Billing Address -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Address</h3>
                </div>
                <div class="block-content">
                    <?php if ($address = mysqli_fetch_assoc(mysqli_query($conn, $sql))) { ?>
                        <div class="font-size-h4 mb-1"><?php echo $address['name']; ?></div>
                        <address class="font-size-sm">
                            <?php echo $address['province'] . "<br>" . $address['city'] . "<br>" . $address['area'] . "<br>" . $address['detail']; ?>
                            <br><br>
                            <i class="fa fa-phone"></i> <?php echo $address['phone']; ?><br>
                        </address>
                    <?php } ?>
                </div>
            </div>
            <!-- END Billing Address -->
        </div>
    </div>
    <!-- END Customer -->

    <!-- Log Messages -->
    <!--<div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Log Messages</h3>
        </div>
        <div class="block-content">
            <table class="table table-borderless table-striped table-vcenter font-size-sm">
                <tbody>
                <tr>
                    <td class="font-size-base" style="width: 80px;">
                        <span class="badge badge-primary">Order</span>
                    </td>
                    <td style="width: 220px;">
                        <span class="font-w600">January 17, 2020 - 18:00</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)">Support</a>
                    </td>
                    <td class="text-success"><strong>Order Completed</strong></td>
                </tr>
                <tr>
                    <td class="font-size-base">
                        <span class="badge badge-primary">Order</span>
                    </td>
                    <td>
                        <span class="font-w600">January 17, 2020 - 17:36</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)">Support</a>
                    </td>
                    <td class="text-warning"><strong>Preparing Order</strong></td>
                </tr>
                <tr>
                    <td class="font-size-base">
                        <span class="badge badge-success">Payment</span>
                    </td>
                    <td>
                        <span class="font-w600">January 16, 2020 - 18:10</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)">John Parker</a>
                    </td>
                    <td class="text-success"><strong>Payment Completed</strong></td>
                </tr>
                <tr>
                    <td class="font-size-base">
                        <span class="badge badge-danger">Email</span>
                    </td>
                    <td>
                        <span class="font-w600">January 16, 2020 - 10:35</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)">Support</a>
                    </td>
                    <td class="text-danger"><strong>Missing payment details. Email was sent and awaiting for payment
                            before processing</strong></td>
                </tr>
                <tr>
                    <td class="font-size-base">
                        <span class="badge badge-primary">Order</span>
                    </td>
                    <td>
                        <span class="font-w600">January 15, 2020 - 14:59</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)">Support</a>
                    </td>
                    <td>All products are available</td>
                </tr>
                <tr>
                    <td class="font-size-base">
                        <span class="badge badge-primary">Order</span>
                    </td>
                    <td>
                        <span class="font-w600">January 15, 2020 - 14:29</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)">John Parker</a>
                    </td>
                    <td>Order Submitted</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>-->
    <!-- END Log Messages -->
</div>
<!-- END Page Content -->
<script src="../../js/jquery-3.5.1.js"></script>
<script>
    switch ("<?php echo $order['status']?>") {
        case 'DELIVERING':
            $('#status').attr('class', "item rounded-lg bg-xsmooth-lighter mx-auto mb-3");
            $('#status').find('i').attr('class', 'fa fa-sync fa-spin text-xsmooth-dark');
            $("#status-manage").find("a").first().attr('data-statu', '1');
            break;
        case 'FINISHED':
            $('#status').attr('class', "item rounded-lg bg-xeco-lighter mx-auto mb-3");
            $('#status').find('i').attr('class', 'fa fa-check text-xeco-dark');
            $("#status-manage").find("a").first().attr('data-statu', '3');
            break;
        case 'CANCELED':
            $('#status').attr('class', "item rounded-lg bg-xplay mx-auto mb-3");
            $('#status').find('i').attr('class', 'fa fa-times text-xwork-dark');
            $("#status-manage").find("a").first().attr('data-statu', '4');
            break;
        case 'OFFLINE':
            $('#status').attr('class', "item rounded-lg bg-primary-light mx-auto mb-3");
            $('#status').find('i').attr('class', 'fa fa-hand-rock text-xwork');
            $("#status-manage").find("a").first().attr('data-statu', '2');
            break;
    }

    $("#status-manage").find("a").on('click', function () {
        console.log($(this).attr('data-statu'));
        let target_statu = parseInt($(this).attr('data-statu'));
        let now_statu = parseInt($("#status-manage").find("a").first().attr('data-statu'));
        if (now_statu !== 3 && now_statu !== 4 && target_statu > now_statu) {
            $.post("../backend/order-status-change.php",
                {
                    "oid":<?php echo $oid;?>,
                    "status": $(this).attr('data-statu')
                },
                function (data, status) {
                    alert('Status change to ' + data);
                    location.reload();
                });
        }
    })
</script>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
