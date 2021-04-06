<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/landing/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-white overflow-hidden">
    <div class="content content-top text-md-center">
        <div class=" pt-4 pt-lg-6">
            <h1 class="font-w700 mb-2">
                Premium dashboard framework for developers
            </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p class="font-size-lg text-muted mb-4">
                    Create the most refreshing and powerful dashboards for your web applications. Built with the best tech, including Bootstrap 4, Sass and ES6.
                </p>
                <div>
                    <a class="btn btn-alt-success px-4 py-2 m-1" href="https://1.envato.market/r6y">
                        <i class="fa fa-fw fa-shopping-cart opacity-50 mr-1"></i> Purchase
                    </a>
                    <a class="btn btn-alt-primary px-4 py-2 m-1" href="be_pages_dashboard.php">
                        <i class="fa fa-fw fa-rocket opacity-50 mr-1"></i> Live Preview
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-image bg-image-top pt-4 pt-lg-6" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/various/promo_hero_bg.png');">
        <div class="content pb-0">
            <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_default@2x.png" alt="Hero Promo" style="margin-bottom: -20px;">
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Package  -->
<div id="dm-package" class="bg-white">
    <div class="content content-full">
        <div class="py-5 mt-3 mt-lg-5 text-md-center">
            <p class="font-size-sm text-uppercase text-primary font-w600 mb-2">
                Complete Package
            </p>
            <h2 class="h1 font-w700 mb-3">
                HTML, PHP &amp; Laravel
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="font-size-lg text-muted mb-0">
                        <strong>Dashmix</strong> comes packed with 2 full versions, 2 starter kits and a detailed documentation. It includes everything you need to start building the User Interface of your web application.
                    </p>
                </div>
            </div>
        </div>
        <div class="row items-push-2x">
            <div class="col-md-6">
                <!-- HTML Version -->
                <div class="media">
                    <div class="item item-rounded bg-primary text-white-75 font-w600 mr-4">
                        <i class="fab fa-2x fa-html5"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="mb-1">HTML Version</h4>
                        <p class="mb-0">
                            An abstract HTML version which can be used with any server side language/framework you prefer or currently working with.
                        </p>
                    </div>
                </div>
                <!-- END HTML Version -->
            </div>
            <div class="col-md-6">
                <!-- PHP Version -->
                <div class="media">
                    <div class="item item-rounded bg-primary text-white-75 font-w600 mr-4">
                        <i class="fab fa-2x fa-php"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="mb-1">PHP Version</h4>
                        <p class="mb-0">
                            An abstract PHP version which can come really handy as a starting point if you would like to build a custom PHP application.
                        </p>
                    </div>
                </div>
                <!-- END PHP Version -->
            </div>
            <div class="col-md-6">
                <!-- Laravel Starter Kit -->
                <div class="media">
                    <div class="item item-rounded bg-primary text-white-75 font-w600 mr-4">
                        <i class="fab fa-2x fa-laravel"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="mb-1">Laravel Starter Kit</h4>
                        <p class="mb-0">
                            Rocket start your custom Laravel project with the included starter kit! It includes vital page examples and main assets ready to work with Laravel Mix out of the box.
                        </p>
                    </div>
                </div>
                <!-- END Laravel Starter Kit -->
            </div>
            <div class="col-md-6">
                <!-- Get Started Version -->
                <div class="media push">
                    <div class="item item-rounded bg-primary text-white-75 font-w600 mr-4">
                        <i class="fa fa-2x fa-check"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="mb-1">Get Started Version + RTL Support</h4>
                        <p class="mb-0">
                            Includes vital framework files ready for production. You will also find 6 boilerplate pages (backend, boxed backend and landing - plus their RTL versions) to get you started.
                        </p>
                    </div>
                </div>
                <!-- END Get Started Version -->
            </div>
        </div>
    </div>
</div>
<!-- END Package -->

<!-- Dashboards -->
<div id="dm-dashboards">
    <div class="content content-full">
        <div class="py-5 mt-3 mt-lg-5 text-md-center">
            <p class="font-size-sm text-uppercase text-primary font-w600 mb-2">
                Powerful Layout
            </p>
            <h2 class="h1 font-w700 mb-3">
                20+ Web App Dashboards
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="font-size-lg text-muted mb-0">
                        You can create any dashboard design you want for your web application project with <strong>Dashmix</strong>. The possibilities are endless. We’ve created many different designs to give you an idea and help you build your own.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-max-width mx-auto">
        <div class="row justify-content-center no-gutters">
            <div class="col-xl-10 px-3">
                <div class="row row-deck">
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_file_hosting.php">
                            <div class="block-content bg-gd-xdream">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_file_hosting.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_file_hosting@2x.png 2x" alt="File Hosting Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    File Hosting
                                </h4>
                                <p class="text-muted mb-0">
                                    Cloud file hosting UI
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_wp_post.php">
                            <div class="block-content bg-gd-xwork">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_wp_post.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_wp_post@2x.png 2x" alt="WP Post Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    WP Post
                                </h4>
                                <p class="text-muted mb-0">
                                    A WordPress inspired UI
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_corporate_slim.php">
                            <div class="block-content bg-gd-xpro">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_corporate_slim.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_corporate_slim@2x.png 2x" alt="Corporate Slim Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Corporate Slim
                                </h4>
                                <p class="text-muted mb-0">
                                    Modern and clean interface
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_analytics.php">
                            <div class="block-content bg-xpro-dark">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_analytics.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_analytics@2x.png 2x" alt="Analytics Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Analytics
                                </h4>
                                <p class="text-muted mb-0">
                                    Web analytics interface
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_chat.php">
                            <div class="block-content bg-xdream-light">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_chat.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_chat@2x.png 2x" alt="Chat Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Chat
                                </h4>
                                <p class="text-muted mb-0">
                                    Communication interface
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_social_compact.php">
                            <div class="block-content bg-xmodern-light">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social_compact.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social_compact@2x.png 2x" alt="Social Compact Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Social Compact
                                </h4>
                                <p class="text-muted mb-0">
                                    UI similar to Facebook
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_travel.php">
                            <div class="block-content bg-gd-sea">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_travel.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_travel@2x.png 2x" alt="Travel Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Travel
                                </h4>
                                <p class="text-muted mb-0">
                                    Apartment renting interface
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_medical.php">
                            <div class="block-content bg-gd-sublime">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_medical.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_medical@2x.png 2x" alt="Medical Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Medical
                                </h4>
                                <p class="text-muted mb-0">
                                    Hospital based interface
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_tasks.php">
                            <div class="block-content bg-gd-aqua">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_tasks.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_tasks@2x.png 2x" alt="Tasks Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Tasks
                                </h4>
                                <p class="text-muted mb-0">
                                    Todo list web application
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_hosting.php">
                            <div class="block-content bg-xmodern">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_hosting.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_hosting@2x.png 2x" alt="Hosting Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Hosting
                                </h4>
                                <p class="text-muted mb-0">
                                    Perfect for custom web hosting
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_booking.php">
                            <div class="block-content bg-xinspire-darker">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_booking.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_booking@2x.png 2x" alt="Booking Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Booking
                                </h4>
                                <p class="text-muted mb-0">
                                    Building a travel business
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_gaming.php">
                            <div class="block-content bg-xeco-darker">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_gaming.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_gaming@2x.png 2x" alt="Gaming Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Gaming
                                </h4>
                                <p class="text-muted mb-0">
                                    Minecraft server
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_classic_boxed.php">
                            <div class="block-content bg-default-lighter">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_classic_boxed.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_classic_boxed@2x.png 2x" alt="Classic Boxed Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Classic Boxed
                                </h4>
                                <p class="text-muted mb-0">
                                    Corporate analytics dashboard
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_crypto.php">
                            <div class="block-content bg-dark">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_crypto.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_crypto@2x.png 2x" alt="Crypto Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Crypto
                                </h4>
                                <p class="text-muted mb-0">
                                    Portfolio management
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_banking.php">
                            <div class="block-content bg-xwork-light">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_banking.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_banking@2x.png 2x" alt="Banking Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Banking
                                </h4>
                                <p class="text-muted mb-0">
                                    Modern money dashboard
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_social.php">
                            <div class="block-content bg-xmodern-dark">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_social@2x.png 2x" alt="Social Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Social
                                </h4>
                                <p class="text-muted mb-0">
                                    For your new social network
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_dark.php">
                            <div class="block-content bg-dark">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_dark.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_dark@2x.png 2x" alt="Dark Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Dark
                                </h4>
                                <p class="text-muted mb-0">
                                    Utility based design
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_modern.php">
                            <div class="block-content bg-gd-dusk">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_modern.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_modern@2x.png 2x" alt="Modern Dashboard">                            </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Modern
                                </h4>
                                <p class="text-muted mb-0">
                                    Creative and media oriented
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_minimal.php">
                            <div class="block-content bg-xwork-lighter">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_minimal.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_minimal@2x.png 2x" alt="Minimal Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Minimal
                                </h4>
                                <p class="text-muted mb-0">
                                    For super clean and artistic apps
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="db_messages.php">
                            <div class="block-content bg-xsmooth">
                                <div class="pt-2 px-2 pull-b">
                                    <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_messages.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_dashboard_messages@2x.png 2x" alt="Messages Dashboard">
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <h4 class="h5 mb-1">
                                    Messages
                                </h4>
                                <p class="text-muted mb-0">
                                    Inbox web application
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="py-3 py-sm-5 px-md-7">
            <div class="block block-rounded block-transparent bg-body-dark">
                <div class="block-content block-content-full bg-gd-white-op-l">
                    <div class="row justify-content-sm-between align-items-center p-md-3">
                        <div class="col-sm-6">
                            <h4 class="mb-2">
                                Dashmix is full featured
                            </h4>
                            <p class="text-muted mb-sm-0">
                                It comes packed with tons of elements, widgets, components and ready designed pages!
                            </p>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                            <a class="btn btn-primary px-4 py-2" href="be_pages_dashboard.php">
                                Explore it!
                                <i class="fa fa-fw fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Dashboards -->

<!-- Widgets Collection -->
<div id="dm-widgets" class="bg-body-light">
    <div class="content">
        <div class="py-5 mt-3 mt-lg-5 text-md-center">
            <p class="font-size-sm text-uppercase text-primary font-w600 mb-2">
                Data Presentation
            </p>
            <h2 class="h1 font-w700 mb-3">
                Widgets Collection
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="font-size-lg text-muted mb-0">
                        Power your dashboards with carefully crafted widgets. Choose from a huge collection and various categories, including but not limited to Tiles, Statistics, Media, Users and Blog.
                    </p>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-6 d-md-flex align-items-md-center">
                <div class="row w-100 gutters-tiny">
                    <div class="col-sm-6">
                        <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                            <div class="block-content block-content-full bg-gd-fruit-op aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                                <div>
                                    <i class="far fa-2x fa-user-circle text-white"></i>
                                    <div class="font-w600 mt-3 text-uppercase text-white">Accounts</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a class="block text-center bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');" href="javascript:void(0)">
                            <div class="block-content block-content-full bg-gd-dusk-op aspect-ratio-4-3 d-flex justify-content-center align-items-center">
                                <div>
                                    <i class="fa fa-2x fa-inbox text-white"></i>
                                    <div class="font-w600 mt-3 text-uppercase text-white">Inbox (2)</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 d-md-flex align-items-md-center">
                <div class="py-3">
                    <h4 class="mb-2">
                        Tile Widgets
                    </h4>
                    <p class="mb-0 text-muted">
                        Super clean and effective tile design which can help you present statistics, create your custom menus or showcase vital information to your users.
                    </p>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-6 d-md-flex align-items-md-center">
                <a class="block block-rounded block-link-pop w-100 my-3 bg-image text-center" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo18.jpg');" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-white-90">
                        <?php $dm->get_avatar(15, false, 96, true); ?>
                        <p class="font-size-lg font-w600 mb-0 mt-2"><?php $dm->get_name('male'); ?></p>
                        <p class="text-muted mb-0">
                            Web Developer
                        </p>
                    </div>
                    <div class="block-content block-content-full bg-white">
                        <div class="row gutters-tiny my-2">
                            <div class="col-4">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-2x fa-boxes text-muted"></i>
                                </p>
                                <p class="font-size-sm mb-0">
                                    7 Projects
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-2x fa-user-tie text-muted"></i>
                                </p>
                                <p class="font-size-sm mb-0">
                                    98 Clients
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="mb-2">
                                    <i class="fa fa-fw fa-2x fa-money-bill-wave text-muted"></i>
                                </p>
                                <p class="font-size-sm mb-0">
                                    1.6k Sales
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-5 offset-md-1 d-md-flex align-items-md-center">
                <div class="py-3">
                    <h4 class="mb-2">
                        User Widgets
                    </h4>
                    <p class="mb-0 text-muted">
                        A vast collection of user related widgets can be used to create all kind of cards with information, perfect for user centric dashboards and web applications.
                    </p>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-6 d-md-flex align-items-md-center">
                <div class="block block-rounded w-100 text-center">
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
            </div>
            <div class="col-md-5 offset-md-1 d-md-flex align-items-md-center">
                <div class="py-3">
                    <h4 class="mb-2">
                        Blog Widgets
                    </h4>
                    <p class="mb-0 text-muted">
                        Lots of story and author based widgets for your blog of your web app. List and present your stories with style and in various ways.
                    </p>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-6 d-md-flex align-items-md-center">
                <a class="block block-rounded w-100 my-3 bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo18.jpg');" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex justify-content-between bg-primary-dark-op">
                        <div class="mr-3">
                            <p class="text-white font-size-h2 font-w300 mb-0">
                                +150%
                            </p>
                            <p class="text-white-75 font-size-sm font-w700 text-uppercase mb-0">
                                Sales
                            </p>
                        </div>
                        <div class="mt-2">
                            <i class="fa fa-2x fa-coins text-white-50"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full overflow-hidden bg-primary-dark-op">
                        <!-- Sparkline Container -->
                        <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.sparkline() -->
                        <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                        <span class="js-sparkline" data-type="line"
                                                    data-points="[25,36,25,36,48,29,53,64]"
                                                    data-width="100%"
                                                    data-height="150px"
                                                    data-line-color="#fff"
                                                    data-chart-range-min="15"
                                                    data-fill-color="transparent"
                                                    data-spot-color="transparent"
                                                    data-min-spot-color="transparent"
                                                    data-max-spot-color="transparent"
                                                    data-highlight-spot-color="#fff"
                                                    data-highlight-line-color="#fff"
                                                    data-tooltip-suffix="Sales"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-5 offset-md-1 d-md-flex align-items-md-center">
                <div class="py-3">
                    <h4 class="mb-2">
                        Statistic Widgets
                    </h4>
                    <p class="mb-0 text-muted">
                        All web applications need to present statistics to its users at some point, so we’ve made sure to provide many options to fulfil your project’s requirements.
                    </p>
                </div>
            </div>
        </div>
        <div class="py-3 py-sm-5 px-md-7">
            <div class="block block-rounded block-transparent bg-body">
                <div class="block-content block-content-full bg-gd-white-op-l">
                    <div class="row justify-content-sm-between align-items-center p-md-3">
                        <div class="col-sm-6">
                            <h4 class="mb-2">
                                Rich Widget Collection
                            </h4>
                            <p class="text-muted mb-sm-0">
                                Clean design and thoughtful decisions helped us craft an awesome widget collection.
                            </p>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                            <a class="btn btn-primary px-4 py-2" href="be_widgets_tiles.php">
                                Explore them all
                                <i class="fa fa-fw fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Widgets Collection -->

<!-- Info -->
<div class="content">
    <div class="py-5 py-md-7 text-center">
        <h2 class="mb-3">
            Crafted with <i class="fa fa-fw fa-heart text-danger"></i> by <a class="link-fx" href="https://1.envato.market/ydb">pixelcave</a>
        </h2>
        <p class="font-size-lg text-muted mb-0">
            Over-profit by choosing <strong>Dashmix</strong>. It is crafted with passion to enable you build the best dashboards.
        </p>
    </div>
</div>
<!-- END Info -->

<!-- Sophisticated Layout -->
<div id="dm-layout" class="bg-body-light overflow-hidden">
    <div class="content content-full">
        <div class="py-5 mt-3 mt-lg-5 text-md-center">
            <p class="font-size-sm text-uppercase text-primary font-w600 mb-2">
                Flexible &amp; Reusable
            </p>
            <h2 class="h1 font-w700 mb-3">
                Sophisticated Layout
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="font-size-lg text-muted mb-0">
                        Handcrafted layout coded to be fast, resposive and powerful. Build any kind of dashboard you need with a layout created to work fluently and without limitations.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-max-width mx-auto">
        <div class="row justify-content-center no-gutters">
            <div class="col-xl-10 px-3">
                <div class="row items-push-2x">
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_page_default.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_default.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_default@2x.png 2x" alt="Default Layout">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Default Layout
                        </h4>
                        <p class="mb-0 text-muted">
                            Left Sidebar, right Side Overlay and a fixed Header.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_page_flipped.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_flipped.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_flipped@2x.png 2x" alt="Flipped Layout">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Flipped Layout
                        </h4>
                        <p class="mb-0 text-muted">
                            Right Sidebar, Left Side Overlay and a fixed Header.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_sidebar_hidden.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_sidebar_hidden.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_sidebar_hidden@2x.png 2x" alt="Hidden Sidebar">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Hidden Sidebar
                        </h4>
                        <p class="mb-0 text-muted">
                            You can hide the main sidebar by default.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_content_side_left.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_side_left.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_side_left@2x.png 2x" alt="Left Side Content">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Left Side Content
                        </h4>
                        <p class="mb-0 text-muted">
                            You can have an inner left side content.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_content_side_right.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_side_right.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_side_right@2x.png 2x" alt="Right Side Content">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Right Side Content
                        </h4>
                        <p class="mb-0 text-muted">
                            You can have an inner right side content.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_page_native_scrolling.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_native_scrolling.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_native_scrolling@2x.png 2x" alt="Native Scrolling">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Native Scrolling
                        </h4>
                        <p class="mb-0 text-muted">
                            Custom Sidebar and Side Overlay scrolling functionality is disabled.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_sidebar_dark.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_sidebar_dark.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_sidebar_dark@2x.png 2x" alt="Dark Sidebar">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Dark Sidebar
                        </h4>
                        <p class="mb-0 text-muted">
                            You can have a dark themed Sidebar.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_header_static_dark.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_header_static.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_header_static@2x.png 2x" alt="Static Header">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Static Header
                        </h4>
                        <p class="mb-0 text-muted">
                            You can have a static Header as well.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_side_overlay_visible.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_side_overlay_visible.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_side_overlay_visible@2x.png 2x" alt="Visible Side Overlay">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Visible Side Overlay
                        </h4>
                        <p class="mb-0 text-muted">
                            You can make the Side Overlay visible by default.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_content_main_full_width.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_full_width.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_full_width@2x.png 2x" alt="Main Content Full Width">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Main Content Full Width
                        </h4>
                        <p class="mb-0 text-muted">
                            Content always takes up all the available width of the main container.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_content_main_narrow.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_narrow.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_narrow@2x.png 2x" alt="Main Content Narrow">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Main Content Narrow
                        </h4>
                        <p class="mb-0 text-muted">
                            Content uses a percentage width, so it is smaller than the available on larger screens.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 text-center">
                        <div class="mb-3">
                            <a class="img-link" href="be_layout_content_main_boxed.php">
                                <img class="img-fluid" src="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_boxed.png" srcset="<?php echo $dm->assets_folder; ?>/media/various/promo_layout_content_main_boxed@2x.png 2x" alt="Main Content Boxed">
                            </a>
                        </div>
                        <h4 class="h5 mb-2">
                            Main Content Boxed
                        </h4>
                        <p class="mb-0 text-muted">
                            Content has a max-width set, so it is boxed on larger screens.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="py-3 py-sm-5 px-md-7">
            <div class="block block-rounded block-transparent bg-body">
                <div class="block-content block-content-full bg-gd-white-op-l">
                    <div class="row justify-content-sm-between align-items-center p-md-3">
                        <div class="col-sm-6">
                            <h4 class="mb-2">
                                Powerful Layout
                            </h4>
                            <p class="text-muted mb-sm-0">
                                This is just a glimpse of all the available layout options! Be sure to check them all out!
                            </p>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                            <a class="btn btn-alt-primary px-4 py-2" href="be_layout_api.php">
                                Layout API
                                <i class="fa fa-fw fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Sophisticated Layout -->

<!-- Smart Toolkit -->
<div id="dm-toolkit" class="bg-white">
    <div class="content content-full">
        <div class="py-5 mt-3 mt-lg-5 text-md-center">
            <p class="font-size-sm text-uppercase text-primary font-w600 mb-2">
                Developer Friendly
            </p>
            <h2 class="h1 font-w700 mb-3">
                Smart Toolkit
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="font-size-lg text-muted mb-0">
                        Automation tools which handle everything and let you focus on the development. Feel free to use the included ones or your own, whatever works the best for you.
                    </p>
                </div>
            </div>
        </div>
        <div class="mb-5">
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center">
                    <div>
                        <h4 class="mb-2">
                            Web Server with Browsersync
                        </h4>
                        <p class="mb-0 text-muted">
                            Just a console command away from having a ready to use web server and serve your Dashmix project. It auto reloads on file changes and synchronizes your browsers for easy testing on multiple devices as you work.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row gutters-tiny w-100 py-4 my-3">
                        <div class="col-6">
                            <div class="item item-2x item-rounded ml-auto bg-xinspire-lighter">
                                <i class="fa fa-2x fa-server text-xinspire-dark"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item item-2x item-rounded mr-auto bg-xinspire-lighter">
                                <i class="fa fa-2x fa-redo fa-spin text-xinspire-dark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center">
                    <div>
                        <h4 class="mb-2">
                            Sass to CSS with Autoprefixer
                        </h4>
                        <p class="mb-0 text-muted">
                            Fully automated Sass to CSS compilation (on demand or on the fly) for a fluid and efficient workflow. Autoprefixer adds any required browser prefixes, so you can focus on your creativity.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row no-gutters w-100 py-4 my-3">
                        <div class="col-4">
                            <div class="item item-2x item-rounded mx-auto bg-xsmooth-lighter">
                                <i class="fab fa-2x fa-sass text-xsmooth-dark"></i>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center">
                            <div class="item item-circle bg-body-dark">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item item-2x item-rounded mx-auto bg-xwork-lighter">
                                <i class="fab fa-2x fa-css3 text-xwork-dark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center">
                    <div>
                        <h4 class="mb-2">
                            ES6 to ES5 with webpack and Babel
                        </h4>
                        <p class="mb-0 text-muted">
                            Write ES6 JS code with a modular approach and let webpack with Babel do its magic. It will bundle and compile everything to ES5 which most current browsers support and run.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row no-gutters w-100 py-4 my-3">
                        <div class="col-4">
                            <div class="item item-2x item-rounded mx-auto bg-xplay-lighter">
                                <span class="font-size-lg font-w700 text-xplay-dark">ES6</span>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center">
                            <div class="item item-circle bg-body-dark">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item item-2x item-rounded mx-auto bg-xwork-lighter">
                                <span class="font-size-lg font-w700 text-xwork-dark">ES5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center">
                    <div>
                        <h4 class="mb-2">
                            Production Ready
                        </h4>
                        <p class="mb-0 text-muted">
                            A build task is included which will produce a clean and ready for production project by including only minimized vital files.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row no-gutters w-100 py-4 my-3">
                        <div class="item item-2x item-rounded mx-auto bg-xeco-lighter">
                            <i class="fa fa-2x fa-wrench text-xeco-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Smart Toolkit -->

<!-- Handcrafted Design -->
<div id="dm-design" class="bg-body-light overflow-hidden">
    <div class="content content-full">
        <div class="py-5 mt-3 mt-lg-5 text-md-center">
            <p class="font-size-sm text-uppercase text-primary font-w600 mb-2">
                Crafted with love
            </p>
            <h2 class="h1 font-w700 mb-3">
                Handcrafted Design
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="font-size-lg text-muted mb-0">
                        Delivering a product that is useful, helpful and easy to use is our priority. Always built with care and attention to detail to enable you work more efficiently and effortlessly.
                    </p>
                </div>
            </div>
        </div>
        <div class="mb-5">
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center">
                    <div>
                        <h4 class="h5 mb-2">
                            Passion
                        </h4>
                        <p class="mb-0 text-muted">
                            We are passionate with what we do and love crafting products that can make your life easier and help you succeed. We pay attention to small details and always aiming for the best.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row no-gutters w-100 py-4 my-3 overflow-hidden">
                        <div class="row no-gutters text-center w-100 mb-2">
                            <div class="col-4">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-badge text-info"></i>
                                </div>
                                <strong>Quality</strong>
                            </div>
                            <div class="col-4">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-chemistry text-xsmooth"></i>
                                </div>
                                <strong>Creativity</strong>
                            </div>
                            <div class="col-4">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-heart text-danger"></i>
                                </div>
                                <strong>Passion</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-5 d-md-flex align-items-md-center">
                    <div>
                        <h4 class="h5 mb-2">
                            Commitment
                        </h4>
                        <p class="mb-0 text-muted">
                            We are committed to our work and stand by our projects. Our aim is to improve them in every update and offer the most full-featured packages with the smallest possible footprint
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1 offset-md-1 d-md-flex align-items-md-center">
                    <div class="block block-rounded block-fx-pop row no-gutters w-100 py-4 my-3 overflow-hidden">
                        <div class="row no-gutters text-center w-100 mb-2">
                            <div class="col-4">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-compass text-success"></i>
                                </div>
                                <strong>Motivation</strong>
                            </div>
                            <div class="col-4">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-energy text-warning"></i>
                                </div>
                                <strong>Simplicity</strong>
                            </div>
                            <div class="col-4">
                                <div class="item mx-auto">
                                    <i class="si fa-2x si-vector text-xinspire"></i>
                                </div>
                                <strong>Design</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Handcrafted Design -->

<!-- Full Featured -->
<div id="dm-features" class="bg-white">
    <div class="content content-full">
        <div class="py-5 mt-3 mt-lg-5 text-md-center">
            <p class="font-size-sm text-uppercase text-primary font-w600 mb-2">
                Limitless
            </p>
            <h2 class="h1 font-w700 mb-3">
                Full Featured
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="font-size-lg text-muted mb-0">
                        Tons of features included in <strong>Dashmix</strong> with the minimum performance cost. You can easily use only the ones you need without overloading your web apps with stuff you don’t need. Light and speedy UI is what you get.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-max-width mx-auto">        
        <div class="row justify-content-center no-gutters pb-5">
            <div class="col-xl-10 px-3">
                <div class="row">
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-fire text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Bootstrap 4
                        </h4>
                        <p class="mb-0 text-muted">
                            Dashmix is based on the latest version of world's most popular front-end component library.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fab fa-2x fa-sass text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Sass
                        </h4>
                        <p class="mb-0 text-muted">
                            Dashmix was built with Sass, overriding and extending Bootstrap in an intelligent way to ensure a perfect and modular workflow.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-file-code text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            ES6
                        </h4>
                        <p class="mb-0 text-muted">
                            Dashmix was built with ES6, the new major JavaScript release which enables us writing cleaner and better code.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fab fa-2x fa-node-js text-primary"></i>
                            <i class="fab fa-2x fa-npm text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Node.js &amp; npm
                        </h4>
                        <p class="mb-0 text-muted">
                            All development and production related dependencies can be installed through npm and used in any way you like.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-boxes text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            webpack
                        </h4>
                        <p class="mb-0 text-muted">
                            Module bundler already setup to work with Dashmix. Use it as much or as little as you want, it’s completely up to you.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fab fa-2x fa-gulp text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Gulp
                        </h4>
                        <p class="mb-0 text-muted">
                            Fully automated tasks to let you build your project faster. Web server with browser-sync, ES6 to ES5 and Sass to CSS compilation on the fly as you work.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-cubes text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Modular Design
                        </h4>
                        <p class="mb-0 text-muted">
                            Everything was built with modularity in mind. You can choose to include and use only what you need specifically for your project.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-bolt text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Extendability
                        </h4>
                        <p class="mb-0 text-muted">
                            You can easily extend or override both JS custom code as well as Sass styles without touching the original files, ensuring that updating will be easy.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-trophy text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Widgets
                        </h4>
                        <p class="mb-0 text-muted">
                            Tons of ready designed widgets and tiles are included to help you build all kind of dashboard pages.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-pallet text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Utility Based Design
                        </h4>
                        <p class="mb-0 text-muted">
                            Top class utility based design ensures reusability of existing styles to create new and unique pages.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fab fa-2x fa-html5 text-primary"></i>
                            <i class="fab fa-2x fa-css3-alt text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            HTML5 &amp; CSS3
                        </h4>
                        <p class="mb-0 text-muted">
                            Using the latest technologies, following the best practices. W3C valid code.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-desktop text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Fully Responsive
                        </h4>
                        <p class="mb-0 text-muted">
                            User Interface auto adjusts and looks great to any screen size.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-eye text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Retina Ready
                        </h4>
                        <p class="mb-0 text-muted">
                            User Interface looks crispy clear on high resolution screens.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-globe text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Cross Browser Support
                        </h4>
                        <p class="mb-0 text-muted">
                            It plays nice with all modern browsers including IE (11 and up).
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-rocket text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Fast &amp; Lightweight
                        </h4>
                        <p class="mb-0 text-muted">
                            It was handcrafted to be as fast and lightweight as possible.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fab fa-2x fa-laravel text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Laravel Starter Kit
                        </h4>
                        <p class="mb-0 text-muted">
                            Perfect for getting started with your Laravel based project
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fab fa-2x fa-html5 text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            HTML Version
                        </h4>
                        <p class="mb-0 text-muted">
                            The generic and abstract version which can be used with any framework or language.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fab fa-2x fa-php text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            PHP Version
                        </h4>
                        <p class="mb-0 text-muted">
                            A PHP version is included to assist you with your custom PHP project.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-space-shuttle fa-rotate-270 text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Get Started Version
                        </h4>
                        <p class="mb-0 text-muted">
                            Simple version with boilerplate pages to help you rocket start your project.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-long-arrow-alt-left text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            RTL Support
                        </h4>
                        <p class="mb-0 text-muted">
                            Boilerplate RTL pages are also included in 'Get Started' version providing a great starting point.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-cog text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Custom JS APIs
                        </h4>
                        <p class="mb-0 text-muted">
                            Powerful JavaScript APIs are included. Layout or blocks manipulation is just a JS call away.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-cogs text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Components
                        </h4>
                        <p class="mb-0 text-muted">
                            Carefully picked and integrated to enhance and enrich your project with great functionality.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-eye-dropper text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Creative Color Themes
                        </h4>
                        <p class="mb-0 text-muted">
                            9 carefully picked and integrated to enhance and enrich the UX of your users based on your project.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-gamepad text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            1600+ Font Based Icons
                        </h4>
                        <p class="mb-0 text-muted">
                            Tons of icons to choose from including the latest Font Awesome 5 icon pack.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-fighter-jet text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Super-Fast UI
                        </h4>
                        <p class="mb-0 text-muted">
                            GPU powered sidebar animations and smart CSS styles will ensure a great experience.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-columns text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Flexible Side Areas
                        </h4>
                        <p class="mb-0 text-muted">
                            Multiple available layouts and completely adjustable by using the powerful layout API.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-compass text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Dashboard Designs
                        </h4>
                        <p class="mb-0 text-muted">
                            Tons of handcrafted dashboards to inspire you build your own unique ones for your projects.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-file text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Designed Pages
                        </h4>
                        <p class="mb-0 text-muted">
                            All kinds of pages, carefully designed, to get inspired and create your own.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-file-alt text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Documentation
                        </h4>
                        <p class="mb-0 text-muted">
                            A detailed documentation is included to help you get familiar with template’s structure and features.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-check-square text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Easy Updating
                        </h4>
                        <p class="mb-0 text-muted">
                            Updating a template can be hard but we made customizations and updating a simple process.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="fa fa-2x fa-arrow-up text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Free Updates
                        </h4>
                        <p class="mb-0 text-muted">
                            All updates are free for existing customers to download. Great new features and updates at no extra cost.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5">
                        <div class="my-3">
                            <i class="far fa-2x fa-life-ring text-primary"></i>
                        </div>
                        <h4 class="h5 mb-2">
                            Support
                        </h4>
                        <p class="mb-0 text-muted">
                            By purchasing a license, you are eligible to email support. We are here to assist you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Full Featured -->

<!-- Call To Action -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19@2x.jpg');">
    <div class="bg-white-95">
        <div class="content content-full">
            <div class="py-5 py-md-8 text-center">
                <h2 class="mb-3">
                    Dash<span class="text-primary">mix</span> was crafted with <i class="fa fa-fw fa-heart text-danger"></i> by <a class="text-primary link-fx" href="https://1.envato.market/ydb">pixelcave</a>
                </h2>
                <p class="font-size-lg text-muted mb-4">
                    Passionate web design and development with over 14.000 customers worldwide.
                </p>
                <a class="btn btn-alt-success px-4 py-2 m-1" href="https://1.envato.market/r6y">
                    <i class="fa fa-fw fa-shopping-cart opacity-50 mr-1"></i> Purchase
                </a>
                <a class="btn btn-alt-primary px-4 py-2 m-1" href="be_pages_dashboard.php">
                    <i class="fa fa-fw fa-rocket opacity-50 mr-1"></i> Live Preview
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Call To Action -->

<!-- Footer -->
<footer id="page-footer" class="bg-white">
    <div class="content py-5">
        <div class="row font-size-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                <a class="font-w600" href="https://1.envato.market/r6y" target="_blank"><?php echo $dm->name . ' ' . $dm->version; ?></a> &copy; <span data-toggle="year-copy"></span>
            </div>
        </div>
    </div>
</footer>
<!-- END Footer -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>

<!-- Page JS Helpers (jQuery Sparkline Plugin) -->
<script>jQuery(function(){ Dashmix.helpers(['sparkline']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
