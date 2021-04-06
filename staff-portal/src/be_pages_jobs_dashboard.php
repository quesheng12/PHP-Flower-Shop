<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero Section -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo23@2x.jpg');">
    <div class="bg-gd-white-op-rl text-center">
        <div class="content content-boxed content-full py-5 py-md-7">
            <div class="row justify-content-center">
                <div class="col-md-10 col-xl-6">
                    <h1 class="h2 mb-2">
                        Find your dream job <span class="text-primary">today</span>.
                    </h1>
                    <p class="font-size-lg font-w400 text-muted">
                        We offer the most complete job platform to publish your job offers and apply for your dream job.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-10 col-lg-8 col-xl-6">
                    <div class="p-2 rounded bg-white shadow-sm">
                        <form class="form-inline" action="be_pages_jobs_dashboard.php" method="POST" onclick="return false;">
                            <label class="sr-only" for="example-job-search">Search Job</label>
                            <input type="text" class="form-control form-control-alt p-4 mb-2 mr-sm-2 mb-sm-0 flex-grow-1" id="example-job-search" name="example-job-search" placeholder="Search Jobs..">
                            <button type="submit" class="btn btn-hero-lg btn-hero-primary flex-grow-1 flex-sm-grow-0">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <div>
                    <p class="px-2 px-sm-4 font-size-h3 text-dark mb-0">6,584</p>
                    <p class="text-muted mb-0">
                        Active Jobs
                    </p>
                </div>
                <div class="px-2 px-sm-4 ml-2 ml-sm-4 border-left">
                    <p class="font-size-h3 text-dark mb-0">2,960</p>
                    <p class="text-muted mb-0">
                        Freelancers
                    </p>
                </div>
                <div class="px-2 px-sm-4 ml-2 ml-sm-4 border-left">
                    <p class="font-size-h3 text-dark mb-0">980</p>
                    <p class="text-muted mb-0">
                        Companies
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Hero Section -->

<!-- Page Content -->
<div class="content content-boxed content-full">
    <!-- Categories -->
    <div class="row row-deck">
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow d-flex justify-content-center align-items-start text-center bg-xpro" href="javascript:void(0)">
                <div class="block-content block-content-full bg-white mt-1 align-self-stretch">
                    <div class="py-4">
                        <i class="fa fa-2x fa-brush text-xpro"></i>
                        <p class="font-size-lg font-w600 mt-3 mb-1">
                            Design
                        </p>
                        <p class="text-muted mb-0">
                            Graphic, Web, Brand, Product, Packaging etc
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow d-flex justify-content-center align-items-start text-center bg-xinspire" href="javascript:void(0)">
                <div class="block-content block-content-full bg-white mt-1 align-self-stretch">
                    <div class="py-4">
                        <i class="fa fa-2x fa-code text-xinspire"></i>
                        <p class="font-size-lg font-w600 mt-3 mb-1">
                            Development
                        </p>
                        <p class="text-muted mb-0">
                            Desktop, Web, Cloud, Mobile, Gaming etc
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow d-flex justify-content-center align-items-start text-center bg-xsmooth" href="javascript:void(0)">
                <div class="block-content block-content-full bg-white mt-1 align-self-stretch">
                    <div class="py-4">
                        <i class="fa fa-2x fa-boxes text-xsmooth"></i>
                        <p class="font-size-lg font-w600 mt-3 mb-1">
                            Marketing
                        </p>
                        <p class="text-muted mb-0">
                            Internet, Mobile, B2B, B2C, Transactional etc
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow d-flex justify-content-center align-items-start text-center bg-xplay" href="javascript:void(0)">
                <div class="block-content block-content-full bg-white mt-1 align-self-stretchv">
                    <div class="py-4">
                        <i class="fa fa-2x fa-pencil-alt text-xplay"></i>
                        <p class="font-size-lg font-w600 mt-3 mb-1">
                            Writing
                        </p>
                        <p class="text-muted mb-0">
                            Graphic, Web, Brand, Product, Packaging etc
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Categories -->

    <!-- Jobs -->
    <table class="table table-striped table-hover table-borderless table-vcenter bg-white">
        <tbody>
            <tr>
                <td>
                    <div class="d-sm-flex">
                        <div class="ml-sm-2 mr-sm-4 py-3">
                            <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                                <i class="fab fa-fw fa-facebook"></i>
                            </a>
                            <a class="btn btn-sm btn-success btn-block" href="be_pages_jobs_apply.php">
                                Apply
                            </a>
                        </div>
                        <div class="py-3">
                            <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                                React Developer
                            </a>
                            <div class="font-size-sm font-w600 text-muted mb-2">
                                Development - 3 hours ago
                            </div>
                            <p class="text-muted mb-2">
                                Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                            </p>
                            <div>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Web</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">React</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Social</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-sm-flex">
                        <div class="ml-sm-2 mr-sm-4 py-3">
                            <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                                <i class="fab fa-fw fa-codepen"></i>
                            </a>
                            <a class="btn btn-sm btn-success btn-block" href="be_pages_jobs_apply.php">
                                Apply
                            </a>
                        </div>
                        <div class="py-3">
                            <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                                Web Designer
                            </a>
                            <div class="font-size-sm font-w600 text-muted mb-2">
                                Design - 5 hours ago
                            </div>
                            <p class="text-muted mb-2">
                                Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                            </p>
                            <div>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Web</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Photoshop</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Sketch</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">HTML</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">CSS</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-sm-flex">
                        <div class="ml-sm-2 mr-sm-4 py-3">
                            <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                                <i class="fab fa-fw fa-cloudsmith"></i>
                            </a>
                            <a class="btn btn-sm btn-success btn-block" href="be_pages_jobs_apply.php">
                                Apply
                            </a>
                        </div>
                        <div class="py-3">
                            <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                                SEO Ninja
                            </a>
                            <div class="font-size-sm font-w600 text-muted mb-2">
                                Marketing - 10 hours ago
                            </div>
                            <p class="text-muted mb-2">
                                Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                            </p>
                            <div>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Web</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">SEO</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-sm-flex">
                        <div class="ml-sm-2 mr-sm-4 py-3">
                            <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                                <i class="fab fa-fw fa-cuttlefish"></i>
                            </a>
                            <a class="btn btn-sm btn-success btn-block" href="be_pages_jobs_apply.php">
                                Apply
                            </a>
                        </div>
                        <div class="py-3">
                            <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                                News/Post Author
                            </a>
                            <div class="font-size-sm font-w600 text-muted mb-2">
                                Writing - 1 day ago
                            </div>
                            <p class="text-muted mb-2">
                                Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                            </p>
                            <div>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Web</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">WordPress</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Joomla</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Author</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-sm-flex">
                        <div class="ml-sm-2 mr-sm-4 py-3">
                            <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                                <i class="fab fa-fw fa-dashcube"></i>
                            </a>
                            <a class="btn btn-sm btn-success btn-block" href="be_pages_jobs_apply.php">
                                Apply
                            </a>
                        </div>
                        <div class="py-3">
                            <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                                Social Marketing Specialist
                            </a>
                            <div class="font-size-sm font-w600 text-muted mb-2">
                                Marketing - 2 days ago
                            </div>
                            <p class="text-muted mb-2">
                                Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                            </p>
                            <div>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Web</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">SEO</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Social</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-sm-flex">
                        <div class="ml-sm-2 mr-sm-4 py-3">
                            <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                                <i class="fab fa-fw fa-dribbble"></i>
                            </a>
                            <a class="btn btn-sm btn-success btn-block" href="be_pages_jobs_apply.php">
                                Apply
                            </a>
                        </div>
                        <div class="py-3">
                            <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                                UI Designer
                            </a>
                            <div class="font-size-sm font-w600 text-muted mb-2">
                                Design - 2 days ago
                            </div>
                            <p class="text-muted mb-2">
                                Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                            </p>
                            <div>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Mobile</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Sketch</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Adobe XD</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-sm-flex">
                        <div class="ml-sm-2 mr-sm-4 py-3">
                            <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                                <i class="fab fa-fw fa-buffer"></i>
                            </a>
                            <a class="btn btn-sm btn-success btn-block" href="be_pages_jobs_apply.php">
                                Apply
                            </a>
                        </div>
                        <div class="py-3">
                            <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                                Full Stack Developer
                            </a>
                            <div class="font-size-sm font-w600 text-muted mb-2">
                                Development - 3 days ago
                            </div>
                            <p class="text-muted mb-2">
                                Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                            </p>
                            <div>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Web</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Mobile</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">JavaScript</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">PHP</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-sm-flex">
                        <div class="ml-sm-2 mr-sm-4 py-3">
                            <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                                <i class="fab fa-fw fa-airbnb"></i>
                            </a>
                            <a class="btn btn-sm btn-success btn-block" href="be_pages_jobs_apply.php">
                                Apply
                            </a>
                        </div>
                        <div class="py-3">
                            <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                                Blog Editor
                            </a>
                            <div class="font-size-sm font-w600 text-muted mb-2">
                                Writing - 4 days ago
                            </div>
                            <p class="text-muted mb-2">
                                Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                            </p>
                            <div>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Web</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">WordPress</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Word</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-sm-flex">
                        <div class="ml-sm-2 mr-sm-4 py-3">
                            <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                                <i class="fab fa-fw fa-algolia"></i>
                            </a>
                            <a class="btn btn-sm btn-success btn-block" href="be_pages_jobs_apply.php">
                                Apply
                            </a>
                        </div>
                        <div class="py-3">
                            <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                                Frontend Developer
                            </a>
                            <div class="font-size-sm font-w600 text-muted mb-2">
                                Development - 1 week ago
                            </div>
                            <p class="text-muted mb-2">
                                Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                            </p>
                            <div>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Web</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">React</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Angular</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Vue.js</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-sm-flex">
                        <div class="ml-sm-2 mr-sm-4 py-3">
                            <a class="item item-rounded bg-body-dark text-dark font-size-h2 mb-2 mx-auto" href="javascript:void(0)">
                                <i class="fab fa-fw fa-bandcamp"></i>
                            </a>
                            <a class="btn btn-sm btn-success btn-block" href="be_pages_jobs_apply.php">
                                Apply
                            </a>
                        </div>
                        <div class="py-3">
                            <a class="link-fx h4 mb-1 d-inline-block text-dark" href="be_pages_jobs_listing.php">
                                UX Specialist for Mobile
                            </a>
                            <div class="font-size-sm font-w600 text-muted mb-2">
                                Design - 2 week ago
                            </div>
                            <p class="text-muted mb-2">
                                Ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, ege.
                            </p>
                            <div>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Mobile</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">iOS</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">Android</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">UX</a>
                                <a class="badge badge-primary font-w600" href="javascript:void(0)">UI</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- END Jobs -->
</div>
<!-- END Page Content -->

<!-- Call to Action -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo23@2x.jpg');">
    <div class="bg-white-95">
        <div class="content content-full text-center">
            <div class="py-3">
                <h3 class="mb-2 text-center">
                    Subscribe today
                </h3>
                <h4 class="font-w400 text-muted text-center">
                    We have the best job offerings in the world!
                </h4>
                <a class="btn btn-hero-primary" href="javascript:void(0)" data-toggle="click-ripple">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Call to Action -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
