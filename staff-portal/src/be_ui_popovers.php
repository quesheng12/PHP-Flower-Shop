<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Popovers</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Elements</li>
                    <li class="breadcrumb-item active" aria-current="page">Popovers</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Popovers -->
    <!-- Bootstrap Popover (data-toggle="popover" and .js-popover class are initialized in Helpers.coreBootstrapPopover()) -->
    <!-- For advanced Popover usage you can check out https://getbootstrap.com/docs/4.5/components/popovers/ -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Examples</h3>
        </div>
        <div class="block-content">
            <!-- Default -->
            <h2 class="content-heading">Default</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        Show your popovers on hover
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row items-push text-center">
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-primary" data-toggle="popover" data-placement="top" title="Top Popover" data-content="This is example content. You can put a description or more info here.">Top</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-primary" data-toggle="popover" data-placement="right" title="Right Popover" data-content="This is example content. You can put a description or more info here.">Right</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-primary" data-toggle="popover" data-placement="bottom" title="Bottom Popover" data-content="This is example content. You can put a description or more info here.">Bottom</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-primary" data-toggle="popover" data-placement="left" title="Left Popover" data-content="This is example content. You can put a description or more info here.">Left</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Default -->

            <!-- Click Triggered -->
            <h2 class="content-heading">Click Triggered</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        Show your popovers on click
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row items-push text-center">
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-trigger="click" data-placement="top" title="Top Popover" data-content="This is example content. You can put a description or more info here.">Top</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-trigger="click" data-placement="right" title="Right Popover" data-content="This is example content. You can put a description or more info here.">Right</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-trigger="click" data-placement="bottom" title="Bottom Popover" data-content="This is example content. You can put a description or more info here.">Bottom</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-trigger="click" data-placement="left" title="Left Popover" data-content="This is example content. You can put a description or more info here.">Left</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Click Triggered -->

            <!-- Animation -->
            <h2 class="content-heading">Animation</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can enable a fade animation to your popovers
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row items-push text-center">
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-animation="true" data-placement="top" title="Top Popover" data-content="This is example content. You can put a description or more info here.">Top</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-animation="true" data-placement="right" title="Right Popover" data-content="This is example content. You can put a description or more info here.">Right</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-animation="true" data-placement="bottom" title="Bottom Popover" data-content="This is example content. You can put a description or more info here.">Bottom</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-animation="true" data-placement="left" title="Left Popover" data-content="This is example content. You can put a description or more info here.">Left</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Animation -->

            <!-- HTML -->
            <h2 class="content-heading">HTML</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can add HTML in your popovers as well
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row items-push text-center">
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-html="true" data-placement="top" title="Popover Title" data-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar10.jpg' alt=''></div>">Top</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-html="true" data-placement="right" title="Popover Title" data-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar2.jpg' alt=''></div>">Right</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-html="true" data-placement="bottom" title="Popover Title" data-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar5.jpg' alt=''></div>">Bottom</button>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <button type="button" class="btn btn-block btn-alt-primary" data-toggle="popover" data-html="true" data-placement="left" title="Popover Title" data-content="<div class='text-center'><img class='img-avatar' src='assets/media/avatars/avatar16.jpg' alt=''></div>">Left</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END HTML -->
        </div>
    </div>
    <!-- END Popovers -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
