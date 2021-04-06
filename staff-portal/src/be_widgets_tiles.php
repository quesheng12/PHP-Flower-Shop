<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Tiles</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Widgets</li>
                    <li class="breadcrumb-item active" aria-current="page">Tiles</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
    <!-- Ratio 1:1 -->
    <h2 class="content-heading">Ratio 1:1</h2>
    <div class="row gutters-tiny push">
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">15</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Accounts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">3</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Notifications</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-xmodern" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-xmodern-lighter">98</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Users</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-gd-lake" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">63</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Followers</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-fruit-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-bookmark text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Bookmarks</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-sublime-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-chart-bar text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Charts</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Ratio 1:1 -->

    <!-- Ratio 4:3 -->
    <h2 class="content-heading">Ratio 4:3</h2>
    <div class="row gutters-tiny push">
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">12</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Sales</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">87</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Games</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-xsmooth" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-xsmooth-lighter">19</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Messages</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-gd-lake" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">51</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">People</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-sea-op aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="fa fa-2x fa-boxes text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Projects</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-aqua-op aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="fa fa-2x fa-wifi text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Wifi</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Ratio 4:3 -->

    <!-- Ratio 16:9 -->
    <h2 class="content-heading">Ratio 16:9</h2>
    <div class="row gutters-tiny push">
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">5</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Requests</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">72</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Songs</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-xinspire" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">26</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Wallets</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-xwork" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">45</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Reviews</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-leaf-op aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-calendar text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Events</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-sun-op aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="fa fa-2x fa-rocket text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Launch</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Ratio 16:9 -->

    <!-- Text based -->
    <h2 class="content-heading">Text based</h2>
    <div class="row gutters-tiny push">
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">15</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Accounts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">3</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Notifications</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">46</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Messages</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">98</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Users</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">63</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Followers</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-black">3</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Tickets</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-primary">15</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Accounts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-xsmooth">3</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Notifications</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-xmodern">46</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Messages</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-xeco">98</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Users</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-xinspire">63</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Followers</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-danger">3</div>
                        <div class="font-w600 mt-2 text-uppercase text-muted">Tickets</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-primary" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-primary-lighter">15</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Accounts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-xsmooth" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-xsmooth-lighter">3</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Notifications</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-xmodern" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-xmodern-lighter">46</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Messages</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-xeco" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-xeco-lighter">98</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Users</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-gd-lake" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">63</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Followers</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-gd-dusk" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">3</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Tickets</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-primary-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">15</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Accounts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-xsmooth-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">3</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Notifications</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-xmodern-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">46</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Messages</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-xeco-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">98</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Users</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-lake-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">63</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Followers</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo15.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-dusk-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="font-size-h1 font-w300 text-white">3</div>
                        <div class="font-w600 mt-2 text-uppercase text-white-75">Tickets</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Text based -->

    <!-- Icon based -->
    <h2 class="content-heading">Icon based</h2>
    <div class="row gutters-tiny">
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-user-circle"></i>
                        <div class="font-w600 mt-3 text-uppercase">Accounts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-flag"></i>
                        <div class="font-w600 mt-3 text-uppercase">Notifications</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-envelope-open"></i>
                        <div class="font-w600 mt-3 text-uppercase">Messages</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-sticky-note"></i>
                        <div class="font-w600 mt-3 text-uppercase">Notes</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-bookmark"></i>
                        <div class="font-w600 mt-3 text-uppercase">Bookmarks</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-chart-bar"></i>
                        <div class="font-w600 mt-3 text-uppercase">Charts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-user-circle text-primary"></i>
                        <div class="font-w600 mt-3 text-uppercase">Accounts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-flag text-xsmooth"></i>
                        <div class="font-w600 mt-3 text-uppercase">Notifications</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-envelope-open text-xmodern"></i>
                        <div class="font-w600 mt-3 text-uppercase">Messages</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-sticky-note text-danger"></i>
                        <div class="font-w600 mt-3 text-uppercase">Notes</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-bookmark text-warning"></i>
                        <div class="font-w600 mt-3 text-uppercase">Bookmarks</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-chart-bar text-xeco"></i>
                        <div class="font-w600 mt-3 text-uppercase">Charts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-primary" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-user-circle text-primary-lighter"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Accounts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-xsmooth" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-flag text-xsmooth-lighter"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Notifications</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-xmodern" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-envelope-open text-xmodern-lighter"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Messages</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-danger" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-sticky-note text-danger-light"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Notes</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-gd-fruit" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-bookmark text-white-75"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Bookmarks</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-gd-sublime" href="javascript:void(0)">
                <div class="block-content block-content-full aspect-ratio-16-9 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-chart-bar text-white-75"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Charts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-primary-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-user-circle text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Accounts</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-xsmooth-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-flag text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Notifications</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-xmodern-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-envelope-open text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Messages</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-danger-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-sticky-note text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Notes</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-fruit-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-bookmark text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Bookmarks</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-sublime-op aspect-ratio-1-1 d-flex justify-content-center align-items-center">
                    <div>
                        <i class="far fa-2x fa-chart-bar text-white"></i>
                        <div class="font-w600 mt-3 text-uppercase text-white">Charts</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Icon based -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
