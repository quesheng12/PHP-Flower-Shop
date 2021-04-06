<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/datatables/dataTables.bootstrap4.css'); ?>
<?php $dm->get_css('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">DataTables</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active" aria-current="page">DataTables</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Dynamic Table <small>Full</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">#</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th style="width: 15%;">Registered</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 21; $i++) { ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="font-w600">
                            <a href="be_pages_generic_blank.php"><?php $dm->get_name(); ?></a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            client<?php echo $i; ?><em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?php $dm->get_tag(); ?>
                        </td>
                        <td>
                            <em class="text-muted"><?php echo rand(2, 10); ?> days ago</em>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->

    <!-- Dynamic Table with Export Buttons -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Dynamic Table <small>Export Buttons</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">#</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th style="width: 15%;">Registered</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 21; $i++) { ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="font-w600">
                            <a href="be_pages_generic_blank.php"><?php $dm->get_name(); ?></a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            client<?php echo $i; ?><em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?php $dm->get_tag(); ?>
                        </td>
                        <td>
                            <em class="text-muted"><?php echo rand(2, 10); ?> days ago</em>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->

    <!-- Dynamic Table Full Pagination -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Dynamic Table <small>Full pagination</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">#</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th style="width: 15%;">Registered</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 21; $i++) { ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="font-w600"><?php $dm->get_name(); ?></td>
                        <td class="d-none d-sm-table-cell">
                            client<?php echo $i; ?><em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?php $dm->get_tag(); ?>
                        </td>
                        <td>
                            <em class="text-muted"><?php echo rand(2, 10); ?> days ago</em>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full Pagination -->

    <!-- Dynamic Table Simple -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Dynamic Table <small>With only sorting and pagination</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-simple class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">#</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th style="width: 15%;">Registered</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 21; $i++) { ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="font-w600"><?php $dm->get_name(); ?></td>
                        <td class="d-none d-sm-table-cell">
                            client<?php echo $i; ?><em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?php $dm->get_tag(); ?>
                        </td>
                        <td>
                            <em class="text-muted"><?php echo rand(2, 10); ?> days ago</em>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Simple -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/datatables/jquery.dataTables.min.js'); ?>
<?php $dm->get_js('js/plugins/datatables/dataTables.bootstrap4.min.js'); ?>
<?php $dm->get_js('js/plugins/datatables/buttons/dataTables.buttons.min.js'); ?>
<?php $dm->get_js('js/plugins/datatables/buttons/buttons.print.min.js'); ?>
<?php $dm->get_js('js/plugins/datatables/buttons/buttons.html5.min.js'); ?>
<?php $dm->get_js('js/plugins/datatables/buttons/buttons.flash.min.js'); ?>
<?php $dm->get_js('js/plugins/datatables/buttons/buttons.colVis.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_tables_datatables.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
