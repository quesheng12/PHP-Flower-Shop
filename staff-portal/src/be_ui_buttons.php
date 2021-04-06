<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Buttons</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Elements</li>
                    <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Buttons Styles -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Styles</h3>
        </div>
        <div class="block-content">
            <!-- Default -->
            <h2 class="content-heading">Default</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        The default button style with various colors to choose from. Prefer using 2 or max 3 button color variations in your web project to provide a better UX and make it more accesible for your users.
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row items-push-2x text-center text-sm-left">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <div class="mt-2">
                                <code>btn-primary</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <div class="mt-2">
                                <code>btn-secondary</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-success">Success</button>
                            <div class="mt-2">
                                <code>btn-success</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-info">Info</button>
                            <div class="mt-2">
                                <code>btn-info</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-warning">Warning</button>
                            <div class="mt-2">
                                <code>btn-warning</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-danger">Danger</button>
                            <div class="mt-2">
                                <code>btn-danger</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-dark">Dark</button>
                            <div class="mt-2">
                                <code>btn-dark</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-light">Light</button>
                            <div class="mt-2">
                                <code>btn-light</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Default -->

            <!-- Outline -->
            <h2 class="content-heading">Outline</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        Outline styles are also available for all previous color variations
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row items-push-2x text-center text-sm-left">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <div class="mt-2">
                                <code>btn-outline-primary</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                            <div class="mt-2">
                                <code>btn-outline-secondary</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-success">Success</button>
                            <div class="mt-2">
                                <code>btn-outline-success</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-info">Info</button>
                            <div class="mt-2">
                                <code>btn-outline-info</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                            <div class="mt-2">
                                <code>btn-outline-warning</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                            <div class="mt-2">
                                <code>btn-outline-danger</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-dark">Dark</button>
                            <div class="mt-2">
                                <code>btn-outline-dark</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-light">Light</button>
                            <div class="mt-2">
                                <code>btn-outline-light</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Outline -->

            <!-- Hero -->
            <h2 class="content-heading">Hero</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        Perfect style to use in landing pages or for call to action buttons
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row items-push-2x text-center text-sm-left">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-primary">Primary</button>
                            <div class="mt-2">
                                <code>btn-hero-primary</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-secondary">Secondary</button>
                            <div class="mt-2">
                                <code>btn-hero-secondary</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-success">Success</button>
                            <div class="mt-2">
                                <code>btn-hero-success</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-info">Info</button>
                            <div class="mt-2">
                                <code>btn-hero-info</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-warning">Warning</button>
                            <div class="mt-2">
                                <code>btn-hero-warning</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-danger">Danger</button>
                            <div class="mt-2">
                                <code>btn-hero-danger</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-dark">Dark</button>
                            <div class="mt-2">
                                <code>btn-hero-dark</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-light">Light</button>
                            <div class="mt-2">
                                <code>btn-hero-light</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Alternate -->
            <h2 class="content-heading">Alternate Style</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        The alternate button style offers a more subtle design style.
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row items-push-2x text-center text-sm-left">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-primary">Primary</button>
                            <div class="mt-2">
                                <code>btn-alt-primary</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-secondary">Secondary</button>
                            <div class="mt-2">
                                <code>btn-alt-secondary</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-success">Success</button>
                            <div class="mt-2">
                                <code>btn-alt-success</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-info">Info</button>
                            <div class="mt-2">
                                <code>btn-alt-info</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-warning">Warning</button>
                            <div class="mt-2">
                                <code>btn-alt-warning</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-danger">Danger</button>
                            <div class="mt-2">
                                <code>btn-alt-danger</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-dark">Dark</button>
                            <div class="mt-2">
                                <code>btn-alt-dark</code>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-light">Light</button>
                            <div class="mt-2">
                                <code>btn-alt-light</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Alternate -->
        </div>
    </div>
    <!-- END Buttons Styles -->

    <!-- Button Effects -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Effects</h3>
        </div>
        <div class="block-content">
            <!-- Ripple -->
            <!-- Ripple functionality ([data-toggle="click-ripple"] is initialized in Helpers.coreRipple()) -->
            <h2 class="content-heading">Ripple</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        Inspired by Material design, adding a ripple animation on click is just a data attribute away <code>data-toggle=&quot;click-ripple&quot;</code>
                    </p>
                </div>
                <div class="col-lg-8">
                    <!-- Default -->
                    <h3 class="h4">Default Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-primary" data-toggle="click-ripple">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-secondary" data-toggle="click-ripple">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-success" data-toggle="click-ripple">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-info" data-toggle="click-ripple">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-warning" data-toggle="click-ripple">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-danger" data-toggle="click-ripple">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-dark" data-toggle="click-ripple">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-light" data-toggle="click-ripple">Light</button>
                        </div>
                    </div>
                    <!-- END Default -->

                    <!-- Outline -->
                    <h3 class="h4">Outline Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-primary" data-toggle="click-ripple">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-secondary" data-toggle="click-ripple">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-success" data-toggle="click-ripple">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-info" data-toggle="click-ripple">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-warning" data-toggle="click-ripple">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-danger" data-toggle="click-ripple">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-dark" data-toggle="click-ripple">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-light" data-toggle="click-ripple">Light</button>
                        </div>
                    </div>
                    <!-- END Outline -->

                    <!-- Hero -->
                    <h3 class="h4">Hero Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-primary" data-toggle="click-ripple">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-secondary" data-toggle="click-ripple">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-success" data-toggle="click-ripple">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-info" data-toggle="click-ripple">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-warning" data-toggle="click-ripple">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-danger" data-toggle="click-ripple">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-dark" data-toggle="click-ripple">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-light" data-toggle="click-ripple">Light</button>
                        </div>
                    </div>
                    <!-- END Hero -->

                    <!-- Alternate -->
                    <h3 class="h4">Alternate Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-primary" data-toggle="click-ripple">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-secondary" data-toggle="click-ripple">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-success" data-toggle="click-ripple">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-info" data-toggle="click-ripple">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-warning" data-toggle="click-ripple">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-danger" data-toggle="click-ripple">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-dark" data-toggle="click-ripple">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-light" data-toggle="click-ripple">Light</button>
                        </div>
                    </div>
                    <!-- END Alternate -->
                </div>
            </div>
            <!-- END Ripple -->
        </div>
    </div>
    <!-- END Button Effects -->

    <!-- Button Variations -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Variations</h3>
        </div>
        <div class="block-content">
            <!-- Small Size -->
            <h2 class="content-heading">Small Size</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can use the classes <code>btn-sm</code> and <code>btn-hero-sm</code> to make your buttons smaller
                    </p>
                </div>
                <div class="col-lg-8">
                    <!-- Default -->
                    <h3 class="h4">Default Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-light">Light</button>
                        </div>
                    </div>
                    <!-- Default -->

                    <!-- Outline -->
                    <h3 class="h4">Outline Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-outline-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-outline-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-outline-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-outline-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-outline-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-outline-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-outline-light">Light</button>
                        </div>
                    </div>
                    <!-- END Outline -->
                    
                    <!-- Hero -->
                    <h3 class="h4">Hero Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-sm btn-hero-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-sm btn-hero-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-sm btn-hero-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-sm btn-hero-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-sm btn-hero-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-sm btn-hero-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-sm btn-hero-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-sm btn-hero-light">Light</button>
                        </div>
                    </div>
                    <!-- END Hero -->

                    <!-- Alternate -->
                    <h3 class="h4">Alternate Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-alt-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-alt-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-alt-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-alt-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-alt-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-alt-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-alt-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-sm btn-alt-light">Light</button>
                        </div>
                    </div>
                    <!-- END Alternate -->
                </div>
            </div>
            <!-- END Small Size -->

            <!-- Large Size -->
            <h2 class="content-heading">Large Size</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can use the classes <code>btn-lg</code> and <code>btn-hero-lg</code> to make your buttons larger
                    </p>
                </div>
                <div class="col-lg-8">
                    <!-- Default -->
                    <h3 class="h4">Default Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-light">Light</button>
                        </div>
                    </div>
                    <!-- END Default -->

                    <!-- Outline -->
                    <h3 class="h4">Outline Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-outline-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-outline-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-outline-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-outline-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-outline-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-outline-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-outline-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-outline-light">Light</button>
                        </div>
                    </div>
                    <!-- END Outline -->

                    <!-- Hero -->
                    <h3 class="h4">Hero Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-lg btn-hero-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-lg btn-hero-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-lg btn-hero-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-lg btn-hero-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-lg btn-hero-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-lg btn-hero-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-lg btn-hero-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-lg btn-hero-light">Light</button>
                        </div>
                    </div>
                    <!-- END Hero -->

                    <!-- Alternate -->
                    <h3 class="h4">Alternate Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-alt-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-alt-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-alt-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-alt-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-alt-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-alt-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-alt-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-lg btn-alt-light">Light</button>
                        </div>
                    </div>
                    <!-- END Alternate -->
                </div>
            </div>
            <!-- END Large Size -->

            <!-- Square -->
            <h2 class="content-heading">Square</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can remove border radius from your buttons if you are looking for a sharp look by using the class <code>btn-square</code>
                    </p>
                </div>
                <div class="col-lg-8">
                    <!-- Default -->
                    <h3 class="h4">Default Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-light">Light</button>
                        </div>
                    </div>
                    <!-- END Default -->

                    <!-- Outline -->
                    <h3 class="h4">Outline Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-outline-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-outline-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-outline-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-outline-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-outline-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-outline-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-outline-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-outline-light">Light</button>
                        </div>
                    </div>
                    <!-- END Outline -->

                    <!-- Hero -->
                    <h3 class="h4">Hero Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-hero-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-hero-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-hero-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-hero-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-hero-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-hero-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-hero-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-hero-light">Light</button>
                        </div>
                    </div>
                    <!-- END Hero -->

                    <!-- Alternate -->
                    <h3 class="h4">Alternate Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-alt-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-alt-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-alt-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-alt-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-alt-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-alt-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-alt-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-square btn-alt-light">Light</button>
                        </div>
                    </div>
                    <!-- END Alternate -->
                </div>
            </div>
            <!-- END Square -->

            <!-- Rounded -->
            <h2 class="content-heading">Rounded</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        Fully rounded buttons are available for all available button styles
                    </p>
                </div>
                <div class="col-lg-8">
                    <!-- Default -->
                    <h3 class="h4">Default Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-light">Light</button>
                        </div>
                    </div>
                    <!-- END Default -->

                    <!-- Outline -->
                    <h3 class="h4">Outline Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-outline-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-outline-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-outline-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-outline-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-outline-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-outline-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-outline-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-outline-light">Light</button>
                        </div>
                    </div>
                    <!-- END Outline -->

                    <!-- Hero -->
                    <h3 class="h4">Hero Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-hero-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-hero-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-hero-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-hero-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-hero-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-hero-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-hero-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-hero-light">Light</button>
                        </div>
                    </div>
                    <!-- END Hero -->

                    <!-- Alternate -->
                    <h3 class="h4">Alternate Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-alt-primary">Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-alt-secondary">Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-alt-success">Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-alt-info">Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-alt-warning">Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-alt-danger">Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-alt-dark">Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-rounded btn-alt-light">Light</button>
                        </div>
                    </div>
                    <!-- END Alternate -->
                </div>
            </div>
            <!-- END Rounded -->

            <!-- Disabled -->
            <h2 class="content-heading">Disabled</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        If an action is not available in a specific state of your website/app, you can easily disable your buttons
                    </p>
                </div>
                <div class="col-lg-8">
                    <!-- Default -->
                    <h3 class="h4">Default Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-primary" disabled>Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-secondary" disabled>Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-success" disabled>Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-info" disabled>Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-warning" disabled>Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-danger" disabled>Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-dark" disabled>Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-light" disabled>Light</button>
                        </div>
                    </div>
                    <!-- END Default -->

                    <!-- Outline -->
                    <h3 class="h4">Outline Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-primary" disabled>Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-secondary" disabled>Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-success" disabled>Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-info" disabled>Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-warning" disabled>Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-danger" disabled>Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-dark" disabled>Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-outline-light" disabled>Light</button>
                        </div>
                    </div>
                    <!-- END Outline -->

                    <!-- Hero -->
                    <h3 class="h4">Hero Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-primary" disabled>Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-secondary" disabled>Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-success" disabled>Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-info" disabled>Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-warning" disabled>Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-danger" disabled>Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-dark" disabled>Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-hero-light" disabled>Light</button>
                        </div>
                    </div>
                    <!-- END Hero -->

                    <!-- Alternate -->
                    <h3 class="h4">Alternate Style</h3>
                    <div class="row items-push text-center text-sm-left mb-4">
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-primary" disabled>Primary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-secondary" disabled>Secondary</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-success" disabled>Success</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-info" disabled>Info</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-warning" disabled>Warning</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-danger" disabled>Danger</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-dark" disabled>Dark</button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button type="button" class="btn btn-alt-light" disabled>Light</button>
                        </div>
                    </div>
                    <!-- END Alternate -->
                </div>
            </div>
            <!-- END Disabled -->

            <!-- Icons -->
            <h2 class="content-heading">Icons</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can use any of the <a href="be_ui_icons.php">available icons</a> in your buttons to visualize its intended action
                    </p>
                </div>
                <div class="col-lg-8">
                    <!-- Default -->
                    <h3 class="h4">Default Style</h3>
                    <div class="mb-4">
                        <button type="button" class="btn btn-success mr-1 mb-3">
                            <i class="fa fa-fw fa-plus mr-1"></i> Add User
                        </button>
                        <button type="button" class="btn btn-info mr-1 mb-3">
                            <i class="fa fa-fw fa-download mr-1"></i> Download
                        </button>
                        <button type="button" class="btn btn-warning mr-1 mb-3">
                            <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Are you sure?
                        </button>
                        <button type="button" class="btn btn-primary mr-1 mb-3">
                            <i class="fa fa-fw fa-upload mr-1"></i> Upload
                        </button>
                        <button type="button" class="btn btn-secondary mr-1 mb-3">
                            <i class="fab fa-fw fa-bluetooth-b mr-1"></i> 3 Connections
                        </button>
                        <button type="button" class="btn btn-danger mr-1 mb-3">
                            <i class="fa fa-fw fa-times mr-1"></i> Delete
                        </button>
                        <button type="button" class="btn btn-primary mr-1 mb-3">
                            <i class="fa fa-fw fa-thumbs-up mr-1"></i> Like
                        </button>
                        <button type="button" class="btn btn-secondary mr-1 mb-3">
                            <i class="fa fa-fw fa-play mr-1"></i> Play
                        </button>
                        <button type="button" class="btn btn-dark mr-1 mb-3">
                            <i class="fa fa-fw fa-box mr-1"></i> 10 Products
                        </button>
                    </div>
                    <!-- END Default -->

                    <!-- Outline -->
                    <h3 class="h4">Outline Style</h3>
                    <div class="mb-4">
                        <button type="button" class="btn btn-outline-success mr-1 mb-3">
                            <i class="fa fa-fw fa-plus mr-1"></i> Add User
                        </button>
                        <button type="button" class="btn btn-outline-info mr-1 mb-3">
                            <i class="fa fa-fw fa-download mr-1"></i> Download
                        </button>
                        <button type="button" class="btn btn-outline-warning mr-1 mb-3">
                            <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Are you sure?
                        </button>
                        <button type="button" class="btn btn-outline-primary mr-1 mb-3">
                            <i class="fa fa-fw fa-upload mr-1"></i> Upload
                        </button>
                        <button type="button" class="btn btn-outline-secondary mr-1 mb-3">
                            <i class="fab fa-fw fa-bluetooth-b mr-1"></i> 3 Connections
                        </button>
                        <button type="button" class="btn btn-outline-danger mr-1 mb-3">
                            <i class="fa fa-fw fa-times mr-1"></i> Delete
                        </button>
                        <button type="button" class="btn btn-outline-primary mr-1 mb-3">
                            <i class="fa fa-fw fa-thumbs-up mr-1"></i> Like
                        </button>
                        <button type="button" class="btn btn-outline-secondary mr-1 mb-3">
                            <i class="fa fa-fw fa-play mr-1"></i> Play
                        </button>
                        <button type="button" class="btn btn-outline-dark mr-1 mb-3">
                            <i class="fa fa-fw fa-box mr-1"></i> 10 Products
                        </button>
                    </div>
                    <!-- END Outline -->

                    <!-- Hero -->
                    <h3 class="h4">Hero Style</h3>
                    <div class="mb-4">
                        <button type="button" class="btn btn-hero-success mr-1 mb-3">
                            <i class="fa fa-fw fa-plus mr-1"></i> Add User
                        </button>
                        <button type="button" class="btn btn-hero-info mr-1 mb-3">
                            <i class="fa fa-fw fa-download mr-1"></i> Download
                        </button>
                        <button type="button" class="btn btn-hero-warning mr-1 mb-3">
                            <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Are you sure?
                        </button>
                        <button type="button" class="btn btn-hero-primary mr-1 mb-3">
                            <i class="fa fa-fw fa-upload mr-1"></i> Upload
                        </button>
                        <button type="button" class="btn btn-hero-secondary mr-1 mb-3">
                            <i class="fab fa-fw fa-bluetooth-b mr-1"></i> 3 Connections
                        </button>
                        <button type="button" class="btn btn-hero-danger mr-1 mb-3">
                            <i class="fa fa-fw fa-times mr-1"></i> Delete
                        </button>
                        <button type="button" class="btn btn-hero-primary mr-1 mb-3">
                            <i class="fa fa-fw fa-thumbs-up mr-1"></i> Like
                        </button>
                        <button type="button" class="btn btn-hero-secondary mr-1 mb-3">
                            <i class="fa fa-fw fa-play mr-1"></i> Play
                        </button>
                        <button type="button" class="btn btn-hero-dark mr-1 mb-3">
                            <i class="fa fa-fw fa-box mr-1"></i> 10 Products
                        </button>
                    </div>
                    <!-- END Hero -->

                    <!-- Alternate -->
                    <h3 class="h4">Alternate Style</h3>
                    <div class="mb-4">
                        <button type="button" class="btn btn-alt-success mr-1 mb-3">
                            <i class="fa fa-fw fa-plus opacity-50 mr-1"></i> Add User
                        </button>
                        <button type="button" class="btn btn-alt-info mr-1 mb-3">
                            <i class="fa fa-fw fa-download opacity-50 mr-1"></i> Download
                        </button>
                        <button type="button" class="btn btn-alt-warning mr-1 mb-3">
                            <i class="fa fa-fw fa-exclamation-triangle opacity-50 mr-1"></i> Are you sure?
                        </button>
                        <button type="button" class="btn btn-alt-primary mr-1 mb-3">
                            <i class="fa fa-fw fa-upload opacity-50 mr-1"></i> Upload
                        </button>
                        <button type="button" class="btn btn-alt-secondary mr-1 mb-3">
                            <i class="fab fa-fw fa-bluetooth opacity-50-b mr-1"></i> 3 Connections
                        </button>
                        <button type="button" class="btn btn-alt-danger mr-1 mb-3">
                            <i class="fa fa-fw fa-times opacity-50 mr-1"></i> Delete
                        </button>
                        <button type="button" class="btn btn-alt-primary mr-1 mb-3">
                            <i class="fa fa-fw fa-thumbs-up opacity-50 mr-1"></i> Like
                        </button>
                        <button type="button" class="btn btn-alt-secondary mr-1 mb-3">
                            <i class="fa fa-fw fa-play opacity-50 mr-1"></i> Play
                        </button>
                        <button type="button" class="btn btn-alt-dark mr-1 mb-3">
                            <i class="fa fa-fw fa-box opacity-50 mr-1"></i> 10 Products
                        </button>
                    </div>
                    <!-- END Alternate -->
                </div>
            </div>
            <!-- END Icons -->

            <!-- Be Creative -->
            <h2 class="content-heading">Be Creative</h2>
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-muted">
                        Mix any of the available classes to create the button style you want to use in your project
                    </p>
                </div>
                <div class="col-lg-8">
                    <button type="button" class="btn btn-hero-lg btn-square btn-hero-secondary mr-1 mb-3">
                        <i class="fa fa-fw fa-wifi mr-1"></i> Wifi Available
                    </button>
                    <button type="button" class="btn btn-rounded btn-danger mr-1 mb-3">
                        <i class="fa fa-fw fa-times mr-1"></i> Rounded
                    </button>
                    <button type="button" class="btn btn-success mr-1 mb-3">
                        <i class="fa fa-fw fa-check"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-warning mr-1 mb-3">
                        <i class="fa fa-fw fa-exclamation-circle"></i>
                    </button>
                    <button type="button" class="btn btn-hero-lg btn-outline-primary mr-1 mb-3">
                        <i class="fab fa-fw fa-instagram mr-1"></i> Post your image
                    </button>
                    <button type="button" class="btn btn-rounded btn-hero-success mr-1 mb-3">
                        <i class="fa fa-fw fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-lg btn-secondary mr-1 mb-3">
                        <i class="fab fa-fw fa-youtube mr-1"></i> YouTube
                    </button>
                    <button type="button" class="btn btn-hero-sm btn-square btn-outline-warning mr-1 mb-3">
                        <i class="far fa-fw fa-envelope mr-1"></i> Messages
                    </button>
                    <button type="button" class="btn btn-sm btn-hero-dark mr-1 mb-3">
                        <i class="fab fa-fw fa-dribbble mr-1"></i> Dribbble
                    </button>
                    <button type="button" class="btn btn-sm btn-primary mr-1 mb-3">
                        <i class="fa fa-fw fa-archive mr-1"></i> Archive
                    </button>
                    <button type="button" class="btn btn-sm btn-secondary mr-1 mb-3">
                        <i class="fa fa-fw fa-wrench mr-1"></i> Preferences
                    </button>
                    <button type="button" class="btn btn-lg btn-square btn-light mr-1 mb-3">
                        <i class="fa fa-fw fa-cog mr-1"></i> Options
                    </button>
                    <button type="button" class="btn btn-alt-danger mr-1 mb-3">
                        <i class="fa fa-fw fa-times opacity-50 mr-1"></i> Delete
                    </button>
                    <button type="button" class="btn btn-alt-primary mr-1 mb-3">
                        <i class="fa fa-fw fa-thumbs-up mr-1"></i> Like
                    </button>
                    <button type="button" class="btn btn-hero-sm btn-rounded btn-outline-dark mr-1 mb-3">
                        <i class="fa fa-fw fa-image mr-1"></i> Picture
                    </button>
                    <button type="button" class="btn btn-lg btn-warning mr-1 mb-3">
                        <i class="fa fa-fw fa-tint mr-1"></i> Themes
                    </button>
                    <button type="button" class="btn btn-hero-sm btn-hero-primary mr-1 mb-3">
                        <i class="fa fa-fw fa-arrow-down mr-1"></i> Down
                    </button>
                    <button type="button" class="btn btn-hero-lg btn-rounded btn-hero-success mr-1 mb-3">
                        <i class="si si-rocket mr-1"></i> Launch Product
                    </button>
                    <button type="button" class="btn btn-hero-sm btn-square btn-hero-info mr-1 mb-3">
                        <i class="si si-chemistry mr-1"></i> Lab
                    </button>
                </div>
            </div>
            <!-- END Be Creative -->
        </div>
    </div>
    <!-- END Button Variations -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
