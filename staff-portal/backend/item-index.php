<?php
include('../../utils/conn.php');
$index = $_POST['index'] - 1;

$badges['0']['class'] = "badge-success";
$badges['0']['text'] = "Available";
$badges['1']['class'] = "badge-danger";
$badges['1']['text'] = "Out of Stock";

$sql = "select id,name,stock,price from item ORDER BY id DESC LIMIT " . ($index * 10) . ",10";
$rst = mysqli_query($conn, $sql);
?>
<?php while ($arr = mysqli_fetch_assoc($rst)) { ?>
    <tr>
        <td class="text-center font-size-sm">
            <a class="font-w600" href="be_pages_ecom_product_edit.php?id=<?php echo $arr['id']; ?>">
                <strong>PID.<?php echo $arr['id']; ?></strong>
            </a>
        </td>
        <!--                            <td class="d-none d-sm-table-cell text-center font-size-sm">--><?php //echo sprintf('%02d', rand(1, 28)) . '/' . sprintf('%02d', rand(1, 12)); ?>
        <!--                                /2019-->
        <!--                            </td>-->
        <!--                            <td class="d-none d-md-table-cell font-size-sm">-->
        <!--                                <a class="font-w600" href="be_pages_ecom_product_edit.php">Product-->
        <!--                                    #--><?php //echo $i; ?><!--</a>-->
        <!--                            </td>-->
        <td>
            <a class="font-w600" href="be_pages_ecom_product_edit.php?id=<?php echo $arr['id']; ?>">
                <strong><?php echo $arr['name']; ?></strong>
            </a>
        </td>
        <td>
                                <span class="badge<?php
                                echo ($arr['stock'] == 0) ? " " . $badges['1']['class'] : " " . $badges['0']['class']; ?>"><?php echo ($arr['stock'] == 0) ? "" . $badges['1']['text'] : "" . $badges['0']['text']; ?></span>
        </td>
        <td class="text-right d-none d-sm-table-cell font-size-sm">
            <strong>¥<?php echo $arr['price']; ?></strong>
        </td>
        <td class="text-center font-size-sm">
            <a class="btn btn-sm btn-alt-secondary"
               href="be_pages_ecom_product_edit.php?id=<?php echo $arr['id']; ?>">
                <i class="fa fa-fw fa-eye"></i>
            </a>
            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                <i class="fa fa-fw fa-times text-danger"></i>
            </a>
        </td>
    </tr>
<?php } ?>