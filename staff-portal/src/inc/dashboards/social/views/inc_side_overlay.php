<?php
/**
 * dashboards/social/views/inc_side_overlay.php
 *
 * Author: pixelcave
 *
 * The side overlay of each page
 *
 */
?>
<!-- Side Overlay-->
<aside id="side-overlay">
    <!-- Side Header -->
    <div class="bg-primary">
        <div class="content-header">
            <div class="font-size-lg font-w300 text-white">
                <i class="fa fa-users mr-1"></i> People
            </div>

            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-times-circle"></i>
            </a>
            <!-- END Close Side Overlay -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Side Content -->
    <div class="content-side">
        <form class="push" action="db_social.php" method="POST" onsubmit="return false;">
            <div class="input-group">
                <input class="form-control form-control-alt" placeholder="Search People..">
                <div class="input-group-append">
                    <span class="input-group-text input-group-text-alt">
                        <i class="fa fa-fw fa-search"></i>
                    </span>
                </div>
            </div>
        </form>
        <div class="block pull-x">
            <!-- Online -->
            <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase font-size-sm font-w700">Online</span>
            </div>
            <div class="block-content">
                <ul class="nav-items">
                    <li>
                        <a class="media py-2" href="javascript:void(0)">
                            <div class="mx-3 overlay-container">
                                <?php $dm->get_avatar(0, 'female', 48); ?>
                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                            </div>
                            <div class="media-body">
                                <div class="font-w600"><?php $dm->get_name('female'); ?></div>
                                <div class="font-size-sm text-muted">Photographer</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="media py-2" href="javascript:void(0)">
                            <div class="mx-3 overlay-container">
                                <?php $dm->get_avatar(0, 'male', 48); ?>
                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                            </div>
                            <div class="media-body">
                                <div class="font-w600"><?php $dm->get_name('male'); ?></div>
                                <div class="font-w400 font-size-sm text-muted">Web Designer</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="media py-2" href="javascript:void(0)">
                            <div class="mx-3 overlay-container">
                                <?php $dm->get_avatar(0, 'female', 48); ?>
                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                            </div>
                            <div class="media-body">
                                <div class="font-w600"><?php $dm->get_name('female'); ?></div>
                                <div class="font-w400 font-size-sm text-muted">Web Developer</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Online -->

            <!-- Busy -->
            <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase font-size-sm font-w700">Busy</span>
            </div>
            <div class="block-content">
                <ul class="nav-items">
                    <li>
                        <a class="media py-2" href="javascript:void(0)">
                            <div class="mx-3 overlay-container">
                                <?php $dm->get_avatar(0, 'female', 48); ?>
                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-danger"></span>
                            </div>
                            <div class="media-body">
                                <div class="font-w600"><?php $dm->get_name('female'); ?></div>
                                <div class="font-w400 font-size-sm text-muted">UI Designer</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Busy -->

            <!-- Away -->
            <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase font-size-sm font-w700">Away</span>
            </div>
            <div class="block-content">
                <ul class="nav-items">
                    <li>
                        <a class="media py-2" href="javascript:void(0)">
                            <div class="mx-3 overlay-container">
                                <?php $dm->get_avatar(0, 'male', 48); ?>
                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                            </div>
                            <div class="media-body">
                                <div class="font-w600"><?php $dm->get_name('male'); ?></div>
                                <div class="font-w400 font-size-sm text-muted">Copywriter</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="media py-2" href="javascript:void(0)">
                            <div class="mx-3 overlay-container">
                                <?php $dm->get_avatar(0, 'female', 48); ?>
                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                            </div>
                            <div class="media-body">
                                <div class="font-w600"><?php $dm->get_name('female'); ?></div>
                                <div class="font-w400 font-size-sm text-muted">Writer</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Away -->

            <!-- Offline -->
            <div class="block-content block-content-sm block-content-full bg-body">
                <span class="text-uppercase font-size-sm font-w700">Offline</span>
            </div>
            <div class="block-content">
                <ul class="nav-items">
                    <li>
                        <a class="media py-2" href="javascript:void(0)">
                            <div class="mx-3 overlay-container">
                                <?php $dm->get_avatar(0, 'male', 48); ?>
                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                            </div>
                            <div class="media-body">
                                <div class="font-w600"><?php $dm->get_name('male'); ?></div>
                                <div class="font-w400 font-size-sm text-muted">Teacher</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="media py-2" href="javascript:void(0)">
                            <div class="mx-3 overlay-container">
                                <?php $dm->get_avatar(0, 'female', 48); ?>
                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                            </div>
                            <div class="media-body">
                                <div class="font-w600"><?php $dm->get_name('female'); ?></div>
                                <div class="font-w400 font-size-sm text-muted">Photographer</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="media py-2" href="javascript:void(0)">
                            <div class="mx-3 overlay-container">
                                <?php $dm->get_avatar(0, 'female', 48); ?>
                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                            </div>
                            <div class="media-body">
                                <div class="font-w600"><?php $dm->get_name('female'); ?></div>
                                <div class="font-w400 font-size-sm text-muted">Front-end Developer</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="media py-2" href="javascript:void(0)">
                            <div class="mx-3 overlay-container">
                                <?php $dm->get_avatar(0, 'male', 48); ?>
                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                            </div>
                            <div class="media-body">
                                <div class="font-w600"><?php $dm->get_name('male'); ?></div>
                                <div class="font-w400 font-size-sm text-muted">UX Specialist</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Offline -->

            <!-- Add People -->
            <div class="block-content row justify-content-center border-top">
                <div class="col-9">
                    <a class="btn btn-block btn-primary" href="javascript:void(0)">
                        <i class="fa fa-fw fa-plus mr-1"></i> Add People
                    </a>
                </div>
            </div>
            <!-- END Add People -->
        </div>
    </div>
    <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->
