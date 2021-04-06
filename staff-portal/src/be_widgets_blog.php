<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Blog</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Widgets</li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Stories with multiple links -->
    <h2 class="content-heading">Stories with multiple links</h2>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <!-- Story #1 -->
            <div class="block block-rounded">
                <div class="block-content pb-8 text-right bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo10.jpg');">
                    <a class="badge badge-primary font-w700 p-2 text-uppercase" href="javascript:void(0)">
                        Travel
                    </a>
                </div>
                <div class="block-content">
                    <a class="font-w600 text-dark" href="javascript:void(0)">
                        Exploring the forest in the mist
                    </a>
                    <p class="font-size-sm text-muted mt-1">
                        <?php echo $dm->get_name(); ?> &middot; 12 min
                    </p>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-1"></i> 643
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-heart mr-1"></i> 45
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-comments mr-1"></i> 12
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story #1 -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Story #2 -->
            <div class="block block-rounded">
                <div class="block-content pb-8 text-right bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo21.jpg');">
                    <a class="badge badge-warning font-w700 p-2 text-uppercase" href="javascript:void(0)">
                        Tutorials
                    </a>
                </div>
                <div class="block-content">
                    <a class="font-w600 text-dark" href="javascript:void(0)">
                        Learn to Code
                    </a>
                    <p class="font-size-sm text-muted mt-1">
                        <?php echo $dm->get_name(); ?> &middot; 9 min
                    </p>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-1"></i> 456
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-heart mr-1"></i> 67
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-comments mr-1"></i> 56
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story #2 -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Story #3 -->
            <div class="block block-rounded">
                <div class="block-content pb-8 text-right bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo4.jpg');">
                    <a class="badge badge-danger font-w700 p-2 text-uppercase" href="javascript:void(0)">
                        Inspiration
                    </a>
                </div>
                <div class="block-content">
                    <a class="font-w600 text-dark" href="javascript:void(0)">
                        How to move forward
                    </a>
                    <p class="font-size-sm text-muted mt-1">
                        <?php echo $dm->get_name(); ?> &middot; 16 min
                    </p>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-1"></i> 789
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-heart mr-1"></i> 78
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-comments mr-1"></i> 23
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story #3 -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Story #4 -->
            <div class="block block-rounded">
                <div class="block-content pb-8 text-right bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo25.jpg');">
                    <a class="badge badge-success font-w700 p-2 text-uppercase" href="javascript:void(0)">
                        Coding
                    </a>
                </div>
                <div class="block-content">
                    <a class="font-w600 text-dark" href="javascript:void(0)">
                        Build your next project
                    </a>
                    <p class="font-size-sm text-muted mt-1">
                        <?php echo $dm->get_name(); ?> &middot; 15 min
                    </p>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-1"></i> 643
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-heart mr-1"></i> 45
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-comments mr-1"></i> 14
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story #4 -->
        </div>
    </div>
    <!-- END Stories with multiple links -->

    <!-- Link Stories -->
    <h2 class="content-heading">Link Stories</h2>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <!-- Story #5 -->
            <a class="block block-rounded" href="javascript:void(0)">
                <div class="block-content pb-8 bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo9.jpg');">
                    <span class="badge badge-primary font-w700 p-2 text-uppercase">
                        Travel
                    </span>
                </div>
                <div class="block-content text-center">
                    <p class="font-w600 text-dark mb-1">
                        Exploring the forest in the mist
                    </p>
                    <p class="font-size-sm text-muted">
                        <?php echo $dm->get_name(); ?> &middot; 12 min
                    </p>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-eye mr-1"></i> 344
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-heart mr-1"></i> 56
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-comments mr-1"></i> 35
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #5 -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Story #6 -->
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content pb-8 bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo22.jpg');">
                    <span class="badge badge-warning font-w700 p-2 text-uppercase">
                        Tutorials
                    </span>
                </div>
                <div class="block-content text-center">
                    <p class="font-w600 text-dark mb-1">
                        Learn to Code
                    </p>
                    <p class="font-size-sm text-muted">
                        <?php echo $dm->get_name(); ?> &middot; 9 min
                    </p>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-eye mr-1"></i> 600
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-heart mr-1"></i> 87
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-comments mr-1"></i> 17
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #6 -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Story #7 -->
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <div class="block-content pb-8 bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo5.jpg');">
                    <span class="badge badge-danger font-w700 p-2 text-uppercase">
                        Inspiration
                    </span>
                </div>
                <div class="block-content text-center">
                    <p class="font-w600 text-dark mb-1">
                        How to move forward
                    </p>
                    <p class="font-size-sm text-muted">
                        <?php echo $dm->get_name(); ?> &middot; 16 min
                    </p>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-eye mr-1"></i> 890
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-heart mr-1"></i> 56
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-comments mr-1"></i> 14
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #7 -->
        </div>
        <div class="col-md-6 col-xl-3">
            <!-- Story #8 -->
            <a class="block block-rounded block-link-rotate" href="javascript:void(0)">
                <div class="block-content pb-8 bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo24.jpg');">
                    <span class="badge badge-success font-w700 p-2 text-uppercase">
                        Coding
                    </span>
                </div>
                <div class="block-content text-center">
                    <p class="font-w600 text-dark mb-1">
                        Build your next project
                    </p>
                    <p class="font-size-sm text-muted">
                        <?php echo $dm->get_name(); ?> &middot; 15 min
                    </p>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-eye mr-1"></i> 467
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-heart mr-1"></i> 34
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-comments mr-1"></i> 12
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #8 -->
        </div>
    </div>
    <!-- END Link Stories -->

    <!-- Cover Link Stories -->
    <h2 class="content-heading">Cover Link Stories</h2>
    <div class="row row-deck">
        <div class="col-md-6 col-xl-4">
            <!-- Story #9 -->
            <a class="block block-rounded bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo9.jpg');" href="javascript:void(0)">
                <div class="block-content bg-black-50">
                    <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-primary font-w700 p-2 text-uppercase">
                                Travel
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-white font-w600 mr-1">
                                <i class="fa fa-fw fa-eye text-white-50"></i> 400
                            </span>
                            <span class="text-white font-w600 mr-1">
                                <i class="fa fa-fw fa-heart text-white-50"></i> 89
                            </span>
                            <span class="text-white font-w600 mr-1">
                                <i class="fa fa-fw fa-comments text-white-50"></i> 44
                            </span>
                        </p>
                    </div>
                    <p class="font-size-lg font-w700 text-white mb-1">
                        Exploring the forest in the mist
                    </p>
                    <p class="font-w600 text-white-75">
                        <?php echo $dm->get_name(); ?> &middot; 12 min
                    </p>
                </div>
            </a>
            <!-- END Story #9 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #10 -->
            <a class="block block-rounded bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo11.jpg');" href="javascript:void(0)">
                <div class="block-content bg-black-50">
                    <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-danger font-w700 p-2 text-uppercase">
                                Inspiration
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-white font-w600 mr-1">
                                <i class="fa fa-fw fa-eye text-white-50"></i> 433
                            </span>
                            <span class="text-white font-w600 mr-1">
                                <i class="fa fa-fw fa-heart text-white-50"></i> 78
                            </span>
                            <span class="text-white font-w600 mr-1">
                                <i class="fa fa-fw fa-comments text-white-50"></i> 43
                            </span>
                        </p>
                    </div>
                    <p class="font-size-lg font-w700 text-white mb-1">
                        Building successful web apps
                    </p>
                    <p class="font-w600 text-white-75">
                        <?php echo $dm->get_name(); ?> &middot; 16 min
                    </p>
                </div>
            </a>
            <!-- END Story #10 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #11 -->
            <a class="block block-rounded bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo22.jpg');" href="javascript:void(0)">
                <div class="block-content bg-black-50">
                    <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-success font-w700 p-2 text-uppercase">
                                Coding
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-white font-w600 mr-1">
                                <i class="fa fa-fw fa-eye text-white-50"></i> 789
                            </span>
                            <span class="text-white font-w600 mr-1">
                                <i class="fa fa-fw fa-heart text-white-50"></i> 22
                            </span>
                            <span class="text-white font-w600 mr-1">
                                <i class="fa fa-fw fa-comments text-white-50"></i> 14
                            </span>
                        </p>
                    </div>
                    <p class="font-size-lg font-w700 text-white mb-1">
                        How to build your next project
                    </p>
                    <p class="font-w600 text-white-75">
                        <?php echo $dm->get_name(); ?> &middot; 32 min
                    </p>
                </div>
            </a>
            <!-- END Story #11 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #12 -->
            <a class="block block-rounded bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo9.jpg');" href="javascript:void(0)">
                <div class="block-content bg-white-90">
                    <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-primary font-w700 p-2 text-uppercase">
                                Travel
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-muted font-w600 mr-1">
                                <i class="fa fa-fw fa-eye text-black-25"></i> 400
                            </span>
                            <span class="text-muted font-w600 mr-1">
                                <i class="fa fa-fw fa-heart text-black-25"></i> 89
                            </span>
                            <span class="text-muted font-w600 mr-1">
                                <i class="fa fa-fw fa-comments text-black-25"></i> 44
                            </span>
                        </p>
                    </div>
                    <p class="font-size-lg font-w700 mb-1">
                        Exploring the forest in the mist
                    </p>
                    <p class="font-w600 text-muted">
                        <?php echo $dm->get_name(); ?> &middot; 12 min
                    </p>
                </div>
            </a>
            <!-- END Story #12 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #13 -->
            <a class="block block-rounded bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo11.jpg');" href="javascript:void(0)">
                <div class="block-content bg-white-90">
                    <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-danger font-w700 p-2 text-uppercase">
                                Inspiration
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-muted font-w600 mr-1">
                                <i class="fa fa-fw fa-eye text-black-25"></i> 400
                            </span>
                            <span class="text-muted font-w600 mr-1">
                                <i class="fa fa-fw fa-heart text-black-25"></i> 89
                            </span>
                            <span class="text-muted font-w600 mr-1">
                                <i class="fa fa-fw fa-comments text-black-25"></i> 44
                            </span>
                        </p>
                    </div>
                    <p class="font-size-lg font-w700 mb-1">
                        Building successful web apps
                    </p>
                    <p class="font-w600 text-muted">
                        <?php echo $dm->get_name(); ?> &middot; 16 min
                    </p>
                </div>
            </a>
            <!-- END Story #13 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #14 -->
            <a class="block block-rounded bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo22.jpg');" href="javascript:void(0)">
                <div class="block-content bg-white-90">
                    <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-success font-w700 p-2 text-uppercase">
                                Coding
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-muted font-w600 mr-1">
                                <i class="fa fa-fw fa-eye text-black-25"></i> 400
                            </span>
                            <span class="text-muted font-w600 mr-1">
                                <i class="fa fa-fw fa-heart text-black-25"></i> 89
                            </span>
                            <span class="text-muted font-w600 mr-1">
                                <i class="fa fa-fw fa-comments text-black-25"></i> 44
                            </span>
                        </p>
                    </div>
                    <p class="font-size-lg font-w700 mb-1">
                        How to build your next project
                    </p>
                    <p class="font-w600 text-muted">
                        <?php echo $dm->get_name(); ?> &middot; 32 min
                    </p>
                </div>
            </a>
            <!-- END Story #14 -->
        </div>
        <div class="col-lg-4">
            <!-- Story #15 -->
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <?php $dm->get_photo(21, true, 'img-fluid'); ?>
                <div class="block-content">
                    <h4 class="mb-1">Get things done</h4>
                    <p class="font-size-sm">
                        <span class="text-primary"><?php $dm->get_name(); ?></span> on March 30, 2019 · <em class="text-muted">9 min</em>
                    </p>
                    <p>
                        Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet....
                    </p>
                </div>
            </a>
            <!-- END Story #15 -->
        </div>
        <div class="col-lg-4">
            <!-- Story #16 -->
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <?php $dm->get_photo(13, true, 'img-fluid'); ?>
                <div class="block-content">
                    <h4 class="mb-1">What to do in the night market</h4>
                    <p class="font-size-sm">
                        <span class="text-primary"><?php $dm->get_name(); ?></span> on March 24, 2019 · <em class="text-muted">8 min</em>
                    </p>
                    <p>
                        Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet....
                    </p>
                </div>
            </a>
            <!-- END Story #17 -->
        </div>
        <div class="col-lg-4">
            <!-- Story #18 -->
            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                <?php $dm->get_photo(23, true, 'img-fluid'); ?>
                <div class="block-content">
                    <h4 class="mb-1">Work &amp; Travel</h4>
                    <p class="font-size-sm">
                        <span class="text-primary"><?php $dm->get_name(); ?></span> on March 21, 2019 · <em class="text-muted">14 min</em>
                    </p>
                    <p>
                        Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet....
                    </p>
                </div>
            </a>
            <!-- END Story #18 -->
        </div>
    </div>
    <!-- END Cover Link Stories -->

    <!-- Authors -->
    <h2 class="content-heading">Authors</h2>
    <div class="row row-deck">
        <div class="col-md-6 col-xl-4">
            <!-- Author #1 -->
            <div class="block block-rounded">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-body-dark">
                    <div class="mr-3">
                        <p class="font-w600 mb-0"><?php $dm->get_name('male'); ?></p>
                        <p class="font-size-sm font-italic text-muted mb-0">
                            54k Followers
                        </p>
                    </div>
                    <?php $dm->get_avatar(0, 'male', 48, true); ?>
                </div>
                <div class="block-content">
                    <div class="list-group push">
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <h5 class="font-size-base mb-1">Exploring alternative marketing</h5>
                            <small>March 20, 2019</small>
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <h5 class="font-size-base mb-1">Learn Laravel in 5 simple steps</h5>
                            <small>March 15, 2019</small>
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <h5 class="font-size-base mb-1">Inspiring Results</h5>
                            <small>February 23, 2019</small>
                        </a>
                    </div>
                </div>
                <div class="block-content bg-body-light">
                    <div class="d-flex justify-content-between push">
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            <i class="fa fa-fw fa-pencil-alt mr-1"></i> 78 Stories
                        </a>
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            More <i class="fa fa-fw fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Author #1 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Author #2 -->
            <div class="block block-rounded">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-primary">
                    <div class="mr-3">
                        <p class="font-w600 text-white mb-0"><?php $dm->get_name('male'); ?></p>
                        <p class="font-size-sm font-italic text-white-50 mb-0">
                            54k Followers
                        </p>
                    </div>
                    <?php $dm->get_avatar(0, 'male', 48, true); ?>
                </div>
                <div class="block-content">
                    <div class="list-group push">
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <h5 class="font-size-base mb-1">Exploring alternative marketing</h5>
                            <small>March 20, 2019</small>
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <h5 class="font-size-base mb-1">Learn Laravel in 5 simple steps</h5>
                            <small>March 15, 2019</small>
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <h5 class="font-size-base mb-1">Inspiring Results</h5>
                            <small>February 23, 2019</small>
                        </a>
                    </div>
                </div>
                <div class="block-content bg-body-light">
                    <div class="d-flex justify-content-between push">
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            <i class="fa fa-fw fa-pencil-alt mr-1"></i> 78 Stories
                        </a>
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            More <i class="fa fa-fw fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Author #2 -->
        </div>
        <div class="col-xl-4">
            <!-- Author #3 -->
            <div class="block block-rounded">
                <div class="block-content bg-image p-0" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo16.jpg');">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-primary-dark-op">
                        <div class="mr-3">
                            <p class="font-w600 text-white mb-0"><?php $dm->get_name('male'); ?></p>
                            <p class="font-size-sm font-italic text-white-50 mb-0">
                                54k Followers
                            </p>
                        </div>
                        <?php $dm->get_avatar(0, 'male', 48, true); ?>
                    </div>
                </div>
                <div class="block-content">
                    <div class="list-group push">
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <h5 class="font-size-base mb-1">Exploring alternative marketing</h5>
                            <small>March 20, 2019</small>
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <h5 class="font-size-base mb-1">Learn Laravel in 5 simple steps</h5>
                            <small>March 15, 2019</small>
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <h5 class="font-size-base mb-1">Inspiring Results</h5>
                            <small>February 23, 2019</small>
                        </a>
                    </div>
                </div>
                <div class="block-content bg-body-light">
                    <div class="d-flex justify-content-between push">
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            <i class="fa fa-fw fa-pencil-alt mr-1"></i> 78 Stories
                        </a>
                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                            More <i class="fa fa-fw fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Author #3 -->
        </div>
    </div>
    <!-- Authors -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
