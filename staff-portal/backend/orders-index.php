<?php
include('../../utils/conn.php');
$index = $_POST['index'] - 1;
$type = $_POST['type'];

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

$sql_array = array(
    'all' => "select id,user_id,service,status,time from orders ORDER BY time DESC LIMIT " . ($index * 10) . ",10",
    'wait-payment' => "select id,user_id,service,status,time from orders WHERE status='OFFLINE_WAIT_PAYMENT' or status='DELIVERY_WAIT_PAYMENT' ORDER BY time DESC LIMIT " . ($index * 10) . ",10",
    'for-delivery' => "select id,user_id,service,status,time from orders WHERE status='FOR_DELIVERY' ORDER BY time DESC LIMIT " . ($index * 10) . ",10",
    'finished' => "select id,user_id,service,status,time from orders WHERE status='FINISHED' ORDER BY time DESC LIMIT " . ($index * 10) . ",10",
    'canceled' => "select id,user_id,service,status,time from orders WHERE status='CANCELED' ORDER BY time DESC LIMIT " . ($index * 10) . ",10",
    'delivering' => "select id,user_id,service,status,time from orders WHERE status='DELIVERING' ORDER BY time DESC LIMIT " . ($index * 10) . ",10",
    'offline' => "select id,user_id,service,status,time from orders WHERE status='OFFLINE' ORDER BY time DESC LIMIT " . ($index * 10) . ",10",
);

$sql = $sql_array[$type];
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