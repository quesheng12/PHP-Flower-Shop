<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/tasks/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo13@2x.jpg');">
    <div class="bg-primary-dark-op">
        <div class="content content-full content-top text-center">
            <div class="pt-4 pb-3">
                <h1 class="font-w300 text-white mb-1">Acme Inc</h1>
                <h2 class="h3 font-w300 text-white-75">Web Design &amp; Development</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
    <div class="row">
        <div class="col-md-4">
            <!-- Toggle Side Content -->
            <div class="d-md-none push">
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <button type="button" class="btn btn-block btn-hero-dark" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
                    Project Details
                </button>
            </div>
            <!-- END Toggle Side Content -->

            <!-- Side Content -->
            <div id="side-content" class="d-none d-md-block push">
                <!-- Completion -->
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Completion</h3>
                    </div>
                    <div class="block-content">
                        <div class="progress push">
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 34%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <span class="font-size-sm font-w600">34%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Completion -->

                <!-- About -->
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">About</h3>
                    </div>
                    <div class="block-content">
                        <p>
                            This is an important project where we should focus our main efforts for the next few years.
                        </p>
                        <p>
                            Be helpful and responsive, this is one of the biggest projects we have ever worked on and we have to prove ourselves.
                        </p>
                        <p class="text-muted">
                            November 6, 2023
                        </p>
                    </div>
                </div>
                <!-- END About -->

                <!-- People -->
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">People</h3>
                    </div>
                    <div class="block-content">
                        <a class="img-link mx-1 push" href="javascript:void(0)">
                            <?php $dm->get_avatar(2, '', 48); ?>
                        </a>
                        <a class="img-link mx-1 push" href="javascript:void(0)">
                            <?php $dm->get_avatar(3, '', 48); ?>
                        </a>
                        <a class="img-link mx-1 push" href="javascript:void(0)">
                            <?php $dm->get_avatar(9, '', 48); ?>
                        </a>
                        <a class="img-link mx-1 push" href="javascript:void(0)">
                            <?php $dm->get_avatar(10, '', 48); ?>
                        </a>
                        <a class="img-link mx-1 push" href="javascript:void(0)">
                            <?php $dm->get_avatar(12, '', 48); ?>
                        </a>
                        <a class="img-link mx-1 push" href="javascript:void(0)">
                            <?php $dm->get_avatar(1, '', 48); ?>
                        </a>
                        <a class="img-link mx-1 push" href="javascript:void(0)">
                            <?php $dm->get_avatar(4, '', 48); ?>
                        </a>
                        <a class="img-link mx-1 push" href="javascript:void(0)">
                            <?php $dm->get_avatar(5, '', 48); ?>
                        </a>
                        <a class="img-link mx-1 push" href="javascript:void(0)">
                            <?php $dm->get_avatar(14, '', 48); ?>
                        </a>
                        <a class="img-link mx-1 push" href="javascript:void(0)">
                            <?php $dm->get_avatar(15, '', 48); ?>
                        </a>
                    </div>
                </div>
                <!-- END People -->
            </div>
            <!-- END Side Content -->
        </div>
        <div class="col-md-8">
            <!-- Tasks, custom functionality is initialized in js/pages/be_pages_projects_tasks.min.js which was auto compiled from _js/pages/be_pages_projects_tasks.js -->
            <div class="js-tasks">
                <!-- Add task -->
                <form id="js-task-form" action="be_pages_projects_tasks.php" method="POST">
                    <input class="form-control form-control-lg font-size-base border-2x" type="text" id="js-task-input" name="js-task-input" placeholder="Add a task and press enter..">
                </form>
                <!-- END Add task -->

                <!-- Tasks List -->
                <h2 class="content-heading pb-0 mb-3 border-0 d-flex justify-content-between align-items-center">
                    Active <span class="js-task-badge badge badge-pill badge-primary animated fadeIn"></span>
                </h2>
                <div class="js-task-list">
                    <!-- Task -->
                    <div class="js-task block block-rounded block-fx-pop block-fx-pop mb-2 animated fadeIn" data-task-id="9" data-task-completed="false" data-task-starred="false">
                        <table class="table table-borderless table-vcenter mb-0">
                            <tr>
                                <td class="text-center pr-0" style="width: 38px;">
                                    <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                        <input type="checkbox" class="custom-control-input" id="tasks-cb-id9" name="tasks-cb-id9">
                                        <label class="custom-control-label" for="tasks-cb-id9"></label>
                                    </div>
                                </td>
                                <td class="js-task-content font-w600 pl-0">
                                    Backend framework
                                </td>
                                <td class="text-right" style="width: 100px;">
                                    <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                        <i class="far fa-star fa-fw"></i>
                                    </button>
                                    <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                        <i class="fa fa-times fa-fw"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Task -->

                    <!-- Task -->
                    <div class="js-task block block-rounded block-fx-pop mb-2 animated fadeIn" data-task-id="8" data-task-completed="false" data-task-starred="false">
                        <table class="table table-borderless table-vcenter mb-0">
                            <tr>
                                <td class="text-center pr-0" style="width: 38px;">
                                    <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                        <input type="checkbox" class="custom-control-input" id="tasks-cb-id8" name="tasks-cb-id8">
                                        <label class="custom-control-label" for="tasks-cb-id8"></label>
                                    </div>
                                </td>
                                <td class="js-task-content font-w600 pl-0">
                                    Customer on-boarding process
                                </td>
                                <td class="text-right" style="width: 100px;">
                                    <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                        <i class="far fa-star fa-fw"></i>
                                    </button>
                                    <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                        <i class="fa fa-times fa-fw"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Task -->

                    <!-- Task -->
                    <div class="js-task block block-rounded block-fx-pop mb-2 animated fadeIn" data-task-id="7" data-task-completed="false" data-task-starred="false">
                        <table class="table table-borderless table-vcenter mb-0">
                            <tr>
                                <td class="text-center pr-0" style="width: 38px;">
                                    <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                        <input type="checkbox" class="custom-control-input" id="tasks-cb-id7" name="tasks-cb-id7">
                                        <label class="custom-control-label" for="tasks-cb-id7"></label>
                                    </div>
                                </td>
                                <td class="js-task-content font-w600 pl-0">
                                    Logo design
                                </td>
                                <td class="text-right" style="width: 100px;">
                                    <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                        <i class="far fa-star fa-fw"></i>
                                    </button>
                                    <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                        <i class="fa fa-times fa-fw"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Task -->

                    <!-- Task -->
                    <div class="js-task block block-rounded block-fx-pop mb-2 animated fadeIn" data-task-id="6" data-task-completed="false" data-task-starred="false">
                        <table class="table table-borderless table-vcenter mb-0">
                            <tr>
                                <td class="text-center pr-0" style="width: 38px;">
                                    <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                        <input type="checkbox" class="custom-control-input" id="tasks-cb-id6" name="tasks-cb-id6">
                                        <label class="custom-control-label" for="tasks-cb-id6"></label>
                                    </div>
                                </td>
                                <td class="js-task-content font-w600 pl-0">
                                    Website Marketing
                                </td>
                                <td class="text-right" style="width: 100px;">
                                    <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                        <i class="far fa-star fa-fw"></i>
                                    </button>
                                    <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                        <i class="fa fa-times fa-fw"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Task -->
                </div>
                <!-- END Tasks List -->

                <!-- Starred Tasks List -->
                <h2 class="content-heading pb-0 mb-3 border-0 d-flex justify-content-between align-items-center">
                    Starred <span class="js-task-badge-starred badge badge-pill badge-primary animated fadeIn"></span>
                </h2>
                <div class="js-task-list-starred">
                    <!-- Task -->
                    <div class="js-task block block-rounded block-fx-pop mb-2 animated fadeIn" data-task-id="5" data-task-completed="false" data-task-starred="true">
                        <table class="table table-borderless table-vcenter mb-0">
                            <tr>
                                <td class="text-center pr-0" style="width: 38px;">
                                    <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                        <input type="checkbox" class="custom-control-input" id="tasks-cb-id5" name="tasks-cb-id5">
                                        <label class="custom-control-label" for="tasks-cb-id5"></label>
                                    </div>
                                </td>
                                <td class="js-task-content font-w600 pl-0">
                                    Brand Identity
                                </td>
                                <td class="text-right" style="width: 100px;">
                                    <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                        <i class="fa fa-times fa-fw"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Task -->

                    <!-- Task -->
                    <div class="js-task block block-rounded block-fx-pop mb-2 animated fadeIn" data-task-id="4" data-task-completed="false" data-task-starred="true">
                        <table class="table table-borderless table-vcenter mb-0">
                            <tr>
                                <td class="text-center pr-0" style="width: 38px;">
                                    <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                        <input type="checkbox" class="custom-control-input" id="tasks-cb-id4" name="tasks-cb-id4">
                                        <label class="custom-control-label" for="tasks-cb-id4"></label>
                                    </div>
                                </td>
                                <td class="js-task-content font-w600 pl-0">
                                    UI design and implementation
                                </td>
                                <td class="text-right" style="width: 100px;">
                                    <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                        <i class="fa fa-times fa-fw"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Task -->
                </div>
                <!-- END Starred Tasks List -->

                <!-- Tasks List Completed -->
                <h2 class="content-heading pb-0 mb-3 border-0 d-flex justify-content-between align-items-center">
                    Completed <span class="js-task-badge-completed badge badge-pill badge-primary animated fadeIn"></span>
                </h2>
                <div class="js-task-list-completed">
                    <!-- Completed Task -->
                    <div class="js-task block block-rounded block-fx-pop mb-2 animated fadeIn" data-task-id="3" data-task-completed="true" data-task-starred="false">
                        <table class="table table-borderless table-vcenter bg-body mb-0">
                            <tr>
                                <td class="text-center pr-0" style="width: 38px;">
                                    <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                        <input type="checkbox" class="custom-control-input" id="tasks-cb-id3" name="tasks-cb-id3" checked>
                                        <label class="custom-control-label" for="tasks-cb-id3"></label>
                                    </div>
                                </td>
                                <td class="js-task-content font-w600 pl-0">
                                    <del>Website and App Wireframes</del>
                                </td>
                                <td class="text-right" style="width: 100px;">
                                    <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                        <i class="far fa-star fa-fw"></i>
                                    </button>
                                    <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                        <i class="fa fa-times fa-fw"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Completed Task -->

                    <!-- Completed Task -->
                    <div class="js-task block block-rounded block-fx-pop mb-2 animated fadeIn" data-task-id="2" data-task-completed="true" data-task-starred="false">
                        <table class="table table-borderless table-vcenter bg-body mb-0">
                            <tr>
                                <td class="text-center pr-0" style="width: 38px;">
                                    <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                        <input type="checkbox" class="custom-control-input" id="tasks-cb-id2" name="tasks-cb-id2" checked>
                                        <label class="custom-control-label" for="tasks-cb-id2"></label>
                                    </div>
                                </td>
                                <td class="js-task-content font-w600 pl-0">
                                    <del>Contract Signing</del>
                                </td>
                                <td class="text-right" style="width: 100px;">
                                    <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                        <i class="far fa-star fa-fw"></i>
                                    </button>
                                    <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                        <i class="fa fa-times fa-fw"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Completed Task -->

                    <!-- Completed Task -->
                    <div class="js-task block block-rounded block-fx-pop mb-2 animated fadeIn" data-task-id="1" data-task-completed="true" data-task-starred="false">
                        <table class="table table-borderless table-vcenter bg-body mb-0">
                            <tr>
                                <td class="text-center pr-0" style="width: 38px;">
                                    <div class="js-task-status custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary custom-control-lg">
                                        <input type="checkbox" class="custom-control-input" id="tasks-cb-id1" name="tasks-cb-id1" checked>
                                        <label class="custom-control-label" for="tasks-cb-id1"></label>
                                    </div>
                                </td>
                                <td class="js-task-content font-w600 pl-0">
                                    <del>Explore ideas</del>
                                </td>
                                <td class="text-right" style="width: 100px;">
                                    <button type="button" class="js-task-star btn btn-sm btn-link text-warning">
                                        <i class="far fa-star fa-fw"></i>
                                    </button>
                                    <button type="button" class="js-task-remove btn btn-sm btn-link text-danger">
                                        <i class="fa fa-times fa-fw"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END Completed Task -->
                </div>
                <!-- END Tasks List Completed -->
            </div>
            <!-- END Tasks -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_pages_projects_tasks.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
