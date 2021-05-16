<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/select2/css/select2.min.css'); ?>
<?php $dm->get_css('js/plugins/dropzone/dist/min/dropzone.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Quick Overview + Actions -->
    <div class="row row-deck">
        <div class="col-6 col-lg-4">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.php">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 mb-1">250</div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        等待
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-4">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 mb-1">29</div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        可用
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
                        移除商品
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- END Quick Overview + Actions -->

    <!-- Info -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">信息</h3>
        </div>
        <div class="block-content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <form action="be_pages_ecom_product_edit.php" method="POST" onsubmit="return false;">
                        <div class="form-group">
                            <label for="dm-ecom-product-id">PID</label>
                            <input type="text" class="form-control" id="dm-ecom-product-id" name="dm-ecom-product-id" value="1256" readonly>
                        </div>
                        <div class="form-group">
                            <label for="dm-ecom-product-name">姓名</label>
                            <input type="text" class="form-control" id="dm-ecom-product-name" name="dm-ecom-product-name" value="Bloodborne">
                        </div>
                        <div class="form-group">
                            <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
                            <!-- For more info and examples you can check out http://ckeditor.com -->
                            <label>描述</label>
                            <textarea id="js-ckeditor" name="dm-ecom-product-description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dm-ecom-product-description-short">简介</label>
                            <textarea class="form-control" id="dm-ecom-product-description-short" name="dm-ecom-product-description-short" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                            <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                            <label for="dm-ecom-product-category">种类</label>
                            <select class="js-select2 form-control" id="dm-ecom-product-category" name="dm-ecom-product-category" style="width: 100%;" data-placeholder="Choose one..">
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="1">电缆</option>
                                <option value="2" selected>电子游戏</option>
                                <option value="3">平板电脑</option>
                                <option value="4">笔记本电脑</option>
                                <option value="5">个人电脑</option>
                                <option value="6">家庭影院</option>
                                <option value="7">声音</option>
                                <option value="8">办公室</option>
                                <option value="9">适配器</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="dm-ecom-product-price">价格 (美元$)</label>
                                <input type="text" class="form-control" id="dm-ecom-product-price" name="dm-ecom-product-price" value="59,00">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="dm-ecom-product-stock">库存</label>
                                <input type="text" class="form-control" id="dm-ecom-product-stock" name="dm-ecom-product-stock" value="29">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">状态</label>
                            <div class="custom-control custom-radio custom-control-inline mb-1">
                                <input type="radio" class="custom-control-input" id="dm-ecom-product-condition-new" name="dm-ecom-product-condition" checked>
                                <label class="custom-control-label" for="dm-ecom-product-condition-new">New</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline mb-1">
                                <input type="radio" class="custom-control-input" id="dm-ecom-product-condition-old" name="dm-ecom-product-condition">
                                <label class="custom-control-label" for="dm-ecom-product-condition-old">Old</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>发布?</label>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="dm-ecom-product-published" name="dm-ecom-product-published" checked>
                                <label class="custom-control-label" for="dm-ecom-product-published"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-primary">更新</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Info -->

    <!-- Meta Data -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">摘要数据</h3>
        </div>
        <div class="block-content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <form action="be_pages_ecom_product_edit.php" method="POST" onsubmit="return false;">
                        <div class="form-group">
                            <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Helpers.maxlength()) -->
                            <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                            <label for="dm-ecom-product-meta-title">Title</label>
                            <input type="text" class="js-maxlength form-control" id="dm-ecom-product-meta-title" name="dm-ecom-product-meta-title" value="Bloodborne" maxlength="55" data-always-show="true" data-placement="top">
                            <small class="form-text text-muted">
                                最多55个字符
                            </small>
                        </div>
                        <div class="form-group">
                            <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                            <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                            <label for="dm-ecom-product-meta-keywords">关键字</label>
                            <select class="js-select2 form-control" id="dm-ecom-product-meta-keywords" name="dm-ecom-product-meta-keywords" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="1" selected>动作</option>
                                <option value="2" selected>角色扮演</option>
                                <option value="3">竞速</option>
                                <option value="4">战略</option>
                                <option value="5">冒险</option>
                                <option value="6">策略</option>
                                <option value="7">益智</option>
                                <option value="8">恐怖</option>
                                <option value="9">网游</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Helpers.maxlength()) -->
                            <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                            <label for="dm-ecom-product-meta-description">Description</label>
                            <textarea class="js-maxlength form-control" id="dm-ecom-product-meta-description" name="dm-ecom-product-meta-description" rows="4" maxlength="115" data-always-show="true" data-placement="top">Bloodborne is an action role-playing video game developed by FromSoftware.</textarea>
                            <small class="form-text text-muted">
                                最多115个字符
                            </small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Meta Data -->

    <!-- Media -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">媒体</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
                    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                    <form class="dropzone" action="be_pages_ecom_product_edit.php"></form>
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
<script>jQuery(function(){ Dashmix.helpers(['select2', 'maxlength', 'ckeditor']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
