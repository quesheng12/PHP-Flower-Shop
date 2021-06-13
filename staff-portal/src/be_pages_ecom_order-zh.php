<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'en') {
    echo '<script>location.href="be_pages_ecom_order.php?id="+getQueryVariable("id");</script>';
}
?>
<!-- Page Content -->
<div class="content">
    <!-- Quick Overview -->
    <div class="row row-deck">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content py-5">
                    <div class="item rounded-lg bg-xeco-lighter mx-auto mb-3">
                        <i class="fa fa-check text-xeco-dark"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        ORD.01852
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content py-5">
                    <div class="item rounded-lg bg-xeco-lighter mx-auto mb-3">
                        <i class="fa fa-check text-xeco-dark"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        付款
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content py-5">
                    <div class="item rounded-lg bg-xsmooth-lighter mx-auto mb-3">
                        <i class="fa fa-sync fa-spin text-xsmooth-dark"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        包裹
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content py-5">
                    <div class="item rounded-lg bg-body mx-auto mb-3">
                        <i class="fa fa-times text-muted"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        快递
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- END Quick Overview -->

    <!-- Products -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">商品</h3>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter font-size-sm">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 100px;">ID</th>
                            <th>商品名称</th>
                            <th class="text-center">库存</th>
                            <th class="text-center">数量</th>
                            <th class="text-right" style="width: 10%;">单价</th>
                            <th class="text-right" style="width: 10%;">价格</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><a href="be_pages_ecom_product_edit.php"><strong>PID.965</strong></a></td>
                            <td><a href="be_pages_ecom_product_edit.php"><strong>黑暗之魂 Ⅲ</strong></a></td>
                            <td class="text-center">50</td>
                            <td class="text-center"><strong>1</strong></td>
                            <td class="text-right">$59,00</td>
                            <td class="text-right">$59,00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="be_pages_ecom_product_edit.php"><strong>PID.755</strong></a></td>
                            <td><a href="be_pages_ecom_product_edit.php"><strong>控制</strong></a></td>
                            <td class="text-center">68</td>
                            <td class="text-center"><strong>1</strong></td>
                            <td class="text-right">$59,00</td>
                            <td class="text-right">$59,00</td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="be_pages_ecom_product_edit.php"><strong>PID.235</strong></a></td>
                            <td><a href="be_pages_ecom_product_edit.php"><strong>极限竞速 7</strong></a></td>
                            <td class="text-center">23</td>
                            <td class="text-center"><strong>1</strong></td>
                            <td class="text-right">$59,00</td>
                            <td class="text-right">$59,00</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right"><strong>总价:</strong></td>
                            <td class="text-right">$177,00</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right"><strong>总花费:</strong></td>
                            <td class="text-right">$177,00</td>
                        </tr>
                        <tr class="table-active">
                            <td colspan="5" class="text-right text-uppercase"><strong>总金额:</strong></td>
                            <td class="text-right"><strong>$0,00</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Products -->

    <!-- Customer -->
    <div class="row">
        <div class="col-sm-6">
            <!-- Billing Address -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">账单地址</h3>
                </div>
                <div class="block-content">
                    <div class="font-size-h4 mb-1">Helen Jacobs</div>
                    <address class="font-size-sm">
                        Sunset Str 598<br>
                        Melbourne<br>
                        Australia, 11-671<br><br>
                        <i class="fa fa-phone"></i> (999) 888-77777<br>
                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                    </address>
                </div>
            </div>
            <!-- END Billing Address -->    
        </div>
        <div class="col-sm-6">
            <!-- Shipping Address -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">配送地址</h3>
                </div>
                <div class="block-content">
                    <div class="font-size-h4 mb-1">Helen Jacobs</div>
                    <address class="font-size-sm">
                        Sunrise Str 620<br>
                        Melbourne<br>
                        Australia, 11-587<br><br>
                        <i class="fa fa-phone"></i> (999) 888-55555<br>
                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                    </address>
                </div>
            </div>
            <!-- END Shipping Address -->
        </div>
    </div>
    <!-- END Customer -->

    <!-- Log Messages -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">日志消息</h3>
        </div>
        <div class="block-content">
            <table class="table table-borderless table-striped table-vcenter font-size-sm">
                <tbody>
                    <tr>
                        <td class="font-size-base" style="width: 80px;">
                            <span class="badge badge-primary">订单</span>
                        </td>
                        <td style="width: 220px;">
                            <span class="font-w600">January 17, 2020 - 18:00</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)">支持</a>
                        </td>
                        <td class="text-success"><strong>订单完成</strong></td>
                    </tr>
                    <tr>
                        <td class="font-size-base">
                            <span class="badge badge-primary">订单</span>
                        </td>
                        <td>
                            <span class="font-w600">January 17, 2020 - 17:36</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)">支持</a>
                        </td>
                        <td class="text-warning"><strong>准备订单</strong></td>
                    </tr>
                    <tr>
                        <td class="font-size-base">
                            <span class="badge badge-success">支付</span>
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
                            <span class="badge badge-danger">邮箱</span>
                        </td>
                        <td>
                            <span class="font-w600">January 16, 2020 - 10:35</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)">支持</a>
                        </td>
                        <td class="text-danger"><strong>失踪的付款细节。电子邮件已发送，在处理前等待付款</strong></td>
                    </tr>
                    <tr>
                        <td class="font-size-base">
                            <span class="badge badge-primary">订单</span>
                        </td>
                        <td>
                            <span class="font-w600">January 15, 2020 - 14:59</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)">支持</a>
                        </td>
                        <td>所有的产品都可用</td>
                    </tr>
                    <tr>
                        <td class="font-size-base">
                            <span class="badge badge-primary">订单</span>
                        </td>
                        <td>
                            <span class="font-w600">January 15, 2020 - 14:29</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)">John Parker</a>
                        </td>
                        <td>订单提交</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Log Messages -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
