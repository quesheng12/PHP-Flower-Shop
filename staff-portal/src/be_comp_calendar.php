<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->l_m_content = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/fullcalendar/main.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<!-- Full Calendar (functionality is initialized in js/pages/be_comp_calendar.min.js which was auto compiled from _js/pages/be_comp_calendar.js ) -->
<!-- For more info and examples you can check out https://fullcalendar.io/ -->
<div class="row no-gutters flex-xl-10-auto">
    <div class="col-xl-3">
        <div class="content">
            <!-- Toggle Side Content -->
            <div class="d-xl-none push">
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <button type="button" class="btn btn-block btn-alt-primary" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
                    Calendar Options
                </button>
            </div>
            <!-- END Toggle Side Content -->

            <!-- Side Content -->
            <div id="side-content" class="d-none d-xl-block push">
                <!-- Add Event Form -->
                <form class="js-form-add-event push">
                    <div class="input-group">
                        <input type="text" class="js-add-event form-control border-0" placeholder="Add Event..">
                        <div class="input-group-append">
                            <span class="input-group-text border-0 bg-white">
                                <i class="fa fa-fw fa-plus-circle"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <!-- END Add Event Form -->

                <!-- Event List -->
                <ul id="js-events" class="list list-events">
                    <li>
                        <div class="js-event p-2 text-white font-size-sm font-w500 bg-info">Codename X</div>
                    </li>
                    <li>
                        <div class="js-event p-2 text-white font-size-sm font-w500 bg-success">Weekend Adventure</div>
                    </li>
                    <li>
                        <div class="js-event p-2 text-white font-size-sm font-w500 bg-info">Project Mars</div>
                    </li>
                    <li>
                        <div class="js-event p-2 text-white font-size-sm font-w500 bg-warning">Meeting</div>
                    </li>
                    <li>
                        <div class="js-event p-2 text-white font-size-sm font-w500 bg-success">Walk the dog</div>
                    </li>
                    <li>
                        <div class="js-event p-2 text-white font-size-sm font-w500 bg-info">AI schedule</div>
                    </li>
                    <li>
                        <div class="js-event p-2 text-white font-size-sm font-w500 bg-success">Cinema</div>
                    </li>
                    <li>
                        <div class="js-event p-2 text-white font-size-sm font-w500 bg-danger">Project X</div>
                    </li>
                    <li>
                        <div class="js-event p-2 text-white font-size-sm font-w500 bg-warning">Skype Meeting</div>
                    </li>
                </ul>
                <div class="text-center">
                    <em class="font-size-sm text-muted">
                        <i class="fa fa-arrows-alt"></i> Drag and drop events on the calendar
                    </em>
                </div>
                <!-- END Event List -->
            </div>
            <!-- END Side Content -->
        </div>
    </div>
    <div class="col-xl-9 bg-body-dark">
        <div class="content">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <!-- Calendar Container -->
                    <div id="js-calendar" class="p-xl-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/fullcalendar/main.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_calendar.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
