<?php
/**
 * dashboards/dark/views/inc_side_overlay.php
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
    <div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/various/bg_side_overlay_header.jpg');">
        <div class="bg-primary-dark-op">
            <div class="content-header">
                <!-- User Avatar -->
                <a class="img-link mr-1" href="javascript:void(0)">
                    <?php $dm->get_avatar(12, '', 32, true); ?>
                </a>
                <!-- END User Avatar -->

                <!-- User Info -->
                <div class="ml-2">
                    <a class="text-white font-w600" href="javascript:void(0)">John Doe</a>
                    <div class="text-white-75 font-size-sm font-italic">Hacker</div>
                </div>
                <!-- END User Info -->

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Side Content -->
    <form action="db_dark.php" method="POST" onsubmit="return false;">
        <div class="content-side">
            <div class="block pull-x">
                <!-- Personal -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase font-size-sm font-w700">Personal</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" readonly class="form-control" id="staticEmail" value="Admin">
                    </div>
                    <div class="form-group">
                        <label for="so-profile-name">Name</label>
                        <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="George Taylor">
                    </div>
                    <div class="form-group">
                        <label for="so-profile-email">Email</label>
                        <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">
                    </div>
                </div>
                <!-- END Personal -->

                <!-- Password Update -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase font-size-sm font-w700">Password Update</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="form-group">
                        <label for="so-profile-password">Current Password</label>
                        <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                    </div>
                    <div class="form-group">
                        <label for="so-profile-new-password">New Password</label>
                        <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                    </div>
                    <div class="form-group">
                        <label for="so-profile-new-password-confirm">Confirm New Password</label>
                        <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
                    </div>
                </div>
                <!-- END Password Update -->

                <!-- Options -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase font-size-sm font-w700">Options</span>
                </div>
                <div class="block-content">
                    <div class="custom-control custom-checkbox custom-control-primary mb-1">
                        <input type="checkbox" class="custom-control-input" id="so-settings-status" name="so-settings-status" value="1">
                        <label class="custom-control-label" for="so-settings-status">Online Status</label>
                    </div>
                    <p class="text-muted font-size-sm w-100">
                        Make your online status visible to other users of your app
                    </p>
                    <div class="custom-control custom-checkbox custom-control-primary mb-1">
                        <input type="checkbox" class="custom-control-input" id="so-settings-notifications" name="so-settings-notifications" value="1" checked>
                        <label class="custom-control-label" for="so-settings-notifications">Notifications</label>
                    </div>
                    <p class="text-muted font-size-sm">
                        Receive desktop notifications regarding your projects and sales
                    </p>
                    <div class="custom-control custom-checkbox custom-control-primary mb-1">
                        <input type="checkbox" class="custom-control-input" id="so-settings-updates" name="so-settings-updates" value="1" checked>
                        <label class="custom-control-label" for="so-settings-updates">Auto Updates</label>
                    </div>
                    <p class="text-muted font-size-sm">
                        If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                    </p>
                </div>
                <!-- END Options -->

                <!-- Submit -->
                <div class="block-content row justify-content-center border-top">
                    <div class="col-9">
                        <button type="submit" class="btn btn-block btn-primary">
                            <i class="fa fa-fw fa-save mr-1"></i> Save
                        </button>
                    </div>
                </div>
                <!-- END Submit -->
            </div>
        </div>
    </form>
    <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->
