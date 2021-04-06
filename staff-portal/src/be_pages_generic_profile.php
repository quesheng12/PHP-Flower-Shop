<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo17@2x.jpg');">
    <div class="bg-black-25">
        <div class="content content-full">
            <div class="py-5 text-center">
                <a class="img-link" href="be_pages_generic_profile.php">
                    <?php $dm->get_avatar(10, '', 96, true); ?>
                </a>
                <h1 class="font-w700 my-2 text-white">George Taylor</h1>
                <h2 class="h4 font-w700 text-white-75">
                    Product Manager <a class="text-primary-lighter" href="javascript:void(0)">@ProXdesign</a>
                </h2>
                <button type="button" class="btn btn-hero-primary">
                    <i class="fa fa-fw fa-user-plus mr-1"></i> Add
                </button>
                <button type="button" class="btn btn-hero-dark">
                    <i class="fa fa-fw fa-envelope mr-1"></i> Message
                </button>
            </div>
       </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full content-boxed">
    <!-- Latest Friends -->
    <h2 class="content-heading">
        <i class="si si-users mr-1"></i> Latest Friends
    </h2>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15.jpg');">
                    <?php $dm->get_avatar(0, 'female', 64, true); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600"><?php $dm->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Product Designer</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-plus text-muted mr-1"></i> Add
                    </a>
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-user-circle text-muted mr-1"></i> Profile
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo4.jpg');">
                    <?php $dm->get_avatar(0, 'male', 64, true); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600"><?php $dm->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Senior Developer</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-plus text-muted mr-1"></i> Add
                    </a>
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-user-circle text-muted mr-1"></i> Profile
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo1.jpg');">
                    <?php $dm->get_avatar(0, 'male', 64, true); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600"><?php $dm->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Junior Designer</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-plus text-muted mr-1"></i> Add
                    </a>
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-user-circle text-muted mr-1"></i> Profile
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo3.jpg');">
                    <?php $dm->get_avatar(0, 'female', 64, true); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600"><?php $dm->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Marketing</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-plus text-muted mr-1"></i> Add
                    </a>
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-user-circle text-muted mr-1"></i> Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <button type="button" class="btn btn-alt-primary">
            Check out more <i class="fa fa-arrow-right ml-1"></i>
        </button>
    </div>
    <!-- END Latest Friends -->

    <!-- Latest Projects -->
    <h2 class="content-heading">
        <i class="si si-briefcase mr-1"></i> Latest Projects
    </h2>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full bg-info">
                    <div class="my-3">
                        <i class="fab fa-2x fa-windows text-white-75"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600">Windows App</div>
                    <div class="font-size-sm text-muted">Accounting Dashboard</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-briefcase text-muted mr-1"></i> View Project
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full bg-warning">
                    <div class="my-3">
                        <i class="fa fa-2x fa-mobile text-white-75"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600">iOS App</div>
                    <div class="font-size-sm text-muted">Accounting Dashboard</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-briefcase text-muted mr-1"></i> View Project
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full bg-danger">
                    <div class="my-3">
                        <i class="fa fa-2x fa-globe text-white-75"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600">Website Design</div>
                    <div class="font-size-sm text-muted">https://example.com</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-briefcase text-muted mr-1"></i> View Project
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full bg-success">
                    <div class="my-3">
                        <i class="fa fa-2x fa-birthday-cake text-white-75"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600">Special Icon Set</div>
                    <div class="font-size-sm text-muted">3000 icons</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-briefcase text-muted mr-1"></i> View Project
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right">
        <button type="button" class="btn btn-alt-primary">
            Check out more <i class="fa fa-arrow-right ml-1"></i>
        </button>
    </div>
    <!-- END Latest Projects -->

    <!-- Latest Posts -->
    <h2 class="content-heading">
        <i class="si si-note mr-1"></i> Latest Posts
    </h2>
    <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-1"><em>3 hours ago</em></p>
            <h4 class="font-size-base text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-1"></i> 5 things I've learned working from home
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-1"><em>2 days ago</em></p>
            <h4 class="font-size-base text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-1"></i> Vue.js or React? Let’s dive in!
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-1"><em>1 week ago</em></p>
            <h4 class="font-size-base text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-1"></i> 10 important things I wish I knew
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-1"><em>2 weeks ago</em></p>
            <h4 class="font-size-base text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-1"></i> Bringing your productivity back
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-1"><em>1 month ago</em></p>
            <h4 class="font-size-base text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-1"></i> Creating a super smooth CSS animation
            </h4>
        </div>
    </a>
    <div class="text-right">
        <button type="button" class="btn btn-alt-primary">
            Check out more <i class="fa fa-arrow-right ml-1"></i>
        </button>
    </div>
    <!-- END Latest Posts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
