<?php
//staff登陆检测
require '../../utils/check-staff-login.php';
require '../../utils/conn.php';
?>
<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/select2/css/select2.min.css'); ?>
<?php $dm->get_css('js/plugins/dropzone/dist/min/dropzone.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<?php
if (!isset($_GET['add'])) {
    $sql = "select * from item WHERE id=" . $_GET['id'];
    $rst = mysqli_query($conn, $sql);
    $item = mysqli_fetch_assoc($rst);
    $id = $item['id'];
    $type = 'edit';
} else {
    $sql = "select id from item ORDER BY id DESC LIMIT 1";
    $id = mysqli_fetch_assoc(mysqli_query($conn, $sql))['id'] + 1;
    $item = array(
        'id' => $id,
        'name' => '',
        'description' => '',
        'stock' => '',
        'price' => ''
    );
    $type = 'add';
}

?>

<!--picture upload 加载-->
<link href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/utils/picture-upload/css/default.css">
<link rel="stylesheet" type="text/css" href="/utils/picture-upload/css/default.css">
<link href="/utils/picture-upload/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<script src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="/utils/picture-upload/js/jquery-1.11.0.min.js"><\/script>')</script>
<script src="/utils/picture-upload/js/fileinput.js" type="text/javascript"></script>

<!-- Page Content -->
<div class="content">
    <!-- Quick Overview + Actions -->
    <div class="row row-deck">
        <div class="col-6 col-lg-4">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.php">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 mb-1">250</div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        Pending
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-4">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 mb-1">29</div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        Available
                    </p>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_product_edit.php">
                <div class="block-content py-5">
                    <div class="font-size-h3 text-danger mb-1">
                        <i class="fa fa-times"></i>
                    </div>
                    <p class="font-w600 font-size-sm text-danger text-uppercase mb-0">
                        Remove Product
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- END Quick Overview + Actions -->

    <!-- Info -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Info</h3>
        </div>
        <div class="block-content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <form action="../backend/product-edit.php" method="POST">
                        <input id="type" type="hidden" name="type" value="">
                        <div class="form-group">
                            <label for="dm-ecom-product-id">PID</label>
                            <input type="text" class="form-control" id="dm-ecom-product-id" name="id"
                                   value="<?php echo $item['id']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="dm-ecom-product-name">Name</label>
                            <input type="text" class="form-control" id="dm-ecom-product-name"
                                   name="name" value="<?php echo $item['name']; ?>">
                        </div>
                        <div class="form-group">
                            <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
                            <!-- For more info and examples you can check out http://ckeditor.com -->
                            <label>Description</label>
                            <textarea id="js-ckeditor"
                                      name="description"><?php echo $item['description']; ?></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="dm-ecom-product-price">Price in CNY (¥)</label>
                                <input type="text" class="form-control" id="dm-ecom-product-price"
                                       name="price" value="<?php echo $item['price']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="dm-ecom-product-stock">Stock</label>
                                <input type="text" class="form-control" id="dm-ecom-product-stock"
                                       name="stock" value="<?php echo $item['stock']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Published?</label>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="dm-ecom-product-published"
                                       name="dm-ecom-product-published" checked="">
                                <label class="custom-control-label" for="dm-ecom-product-published"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Info -->

    <!-- Media -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Preview Picture</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <!--                    <form id="form1" method="POST" action="../backend/product-image-upload.php"-->
                    <!--                          enctype="multipart/form-data">-->
                    <!--                        Select Preview Picture：<input type="file" name='file'/>-->
                    <!--                        <input id="img-id" type="hidden" name="id" value="">-->
                    <!--                        <input type="submit" value="submit">-->
                    <!--                    </form>-->
                    <form id="form1" method="post" action="../backend/product-image-upload.php"
                          enctype="multipart/form-data">
                        <input id="file-0a" class="file" type="file" name="file" multiple data-min-file-count="1">
                        <br>
                        <input id="img-id" type="hidden" name="id" value="">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Media -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $dm->get_js('js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js'); ?>
<?php $dm->get_js('js/plugins/ckeditor/ckeditor.js'); ?>
<?php $dm->get_js('js/plugins/dropzone/dropzone.min.js'); ?>

<!-- Page JS Helpers (Select2 + CKEditor plugins) -->
<script>
    jQuery(function () {
        Dashmix.helpers(['select2', 'maxlength', 'ckeditor']);
    });


    function getUrlParam(name) {
        //构造一个含有目标参数的正则表达式对象
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        //匹配目标参数
        var r = window.location.search.substr(1).match(reg);
        //返回参数值
        if (r != null) {
            return decodeURI(r[2]);
        }
        return null;
    }

    $("#img-id").val(getUrlParam('<?php echo $id;?>'));
    $("#type").val('<?php echo $type;?>');
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
