<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Custom Form Controls</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active" aria-current="page">Custom Controls</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Switches -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Switches</h3>
        </div>
        <div class="block-content">
            <!-- Default -->
            <h2 class="content-heading">Default</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        These are the default custom switches
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label>Switches</label>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom1" name="example-sw-custom1" checked>
                            <label class="custom-control-label" for="example-sw-custom1">Option 1</label>
                        </div>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom2" name="example-sw-custom2">
                            <label class="custom-control-label" for="example-sw-custom2">Option 2</label>
                        </div>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom3" name="example-sw-custom3">
                            <label class="custom-control-label" for="example-sw-custom3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Inline Switches</label>
                        <div class="custom-control custom-switch custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-inline1" name="example-sw-custom-inline1" checked>
                            <label class="custom-control-label" for="example-sw-custom-inline1">Option 1</label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-inline2" name="example-sw-custom-inline2">
                            <label class="custom-control-label" for="example-sw-custom-inline2">Option 2</label>
                        </div>
                        <div class="custom-control custom-switch custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-inline3" name="example-sw-custom-inline3">
                            <label class="custom-control-label" for="example-sw-custom-inline3">Option 3</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Default -->

            <!-- Large Size -->
            <h2 class="content-heading">Large Size</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can use bigger controls if you like
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label>Switches</label>
                        <div class="custom-control custom-switch custom-control-lg mb-2">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-lg1" name="example-sw-custom-lg1" checked>
                            <label class="custom-control-label" for="example-sw-custom-lg1">Option 1</label>
                        </div>
                        <div class="custom-control custom-switch custom-control-lg mb-2">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-lg2" name="example-sw-custom-lg2">
                            <label class="custom-control-label" for="example-sw-custom-lg2">Option 2</label>
                        </div>
                        <div class="custom-control custom-switch custom-control-lg mb-2">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-lg3" name="example-sw-custom-lg3">
                            <label class="custom-control-label" for="example-sw-custom-lg3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Inline Switches</label>
                        <div class="custom-control custom-switch custom-control-lg custom-control-inline mb-2">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-inline-lg1" name="example-sw-custom-inline-lg1" checked>
                            <label class="custom-control-label" for="example-sw-custom-inline-lg1">Option 1</label>
                        </div>
                        <div class="custom-control custom-switch custom-control-lg custom-control-inline mb-2">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-inline-lg2" name="example-sw-custom-inline-lg2">
                            <label class="custom-control-label" for="example-sw-custom-inline-lg2">Option 2</label>
                        </div>
                        <div class="custom-control custom-switch custom-control-lg custom-control-inline mb-2">
                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-inline-lg3" name="example-sw-custom-inline-lg3">
                            <label class="custom-control-label" for="example-sw-custom-inline-lg3">Option 3</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Large Size -->

            <!-- Themed -->
            <h2 class="content-heading">Themed</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can easily use various colors for your custom switches
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group row">
                        <label class="col-12">Default Size</label>
                        <div class="col-6">
                            <div class="custom-control custom-switch custom-control-primary mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-primary1" name="example-sw-primary1">
                                <label class="custom-control-label" for="example-sw-custom-primary1">Primary</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-success mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-success1" name="example-sw-success1">
                                <label class="custom-control-label" for="example-sw-custom-success1">Success</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-info mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-info1" name="example-sw-info1">
                                <label class="custom-control-label" for="example-sw-custom-info1">Info</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-warning mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-warning1" name="example-sw-warning1">
                                <label class="custom-control-label" for="example-sw-custom-warning1">Warning</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-danger mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-danger1" name="example-sw-danger1">
                                <label class="custom-control-label" for="example-sw-custom-danger1">Danger</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-light mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-light1" name="example-sw-light1">
                                <label class="custom-control-label" for="example-sw-custom-light1">Light</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-dark mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-dark1" name="example-sw-dark1">
                                <label class="custom-control-label" for="example-sw-custom-dark1">Dark</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-switch custom-control-primary mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-primary2" name="example-sw-primary2" checked>
                                <label class="custom-control-label" for="example-sw-custom-primary2">Primary</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-success mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-success2" name="example-sw-success2" checked>
                                <label class="custom-control-label" for="example-sw-custom-success2">Success</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-info mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-info2" name="example-sw-info2" checked>
                                <label class="custom-control-label" for="example-sw-custom-info2">Info</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-warning mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-warning2" name="example-sw-warning2" checked>
                                <label class="custom-control-label" for="example-sw-custom-warning2">Warning</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-danger mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-danger2" name="example-sw-danger2" checked>
                                <label class="custom-control-label" for="example-sw-custom-danger2">Danger</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-light mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-light2" name="example-sw-light2" checked>
                                <label class="custom-control-label" for="example-sw-custom-light2">Light</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-dark mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-dark2" name="example-sw-dark2" checked>
                                <label class="custom-control-label" for="example-sw-custom-dark2">Dark</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label class="col-12">Large Size</label>
                        <div class="col-6">
                            <div class="custom-control custom-switch custom-control-primary custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-primary-lg1" name="example-sw-primary-lg1">
                                <label class="custom-control-label" for="example-sw-custom-primary-lg1">Primary</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-success custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-success-lg1" name="example-sw-success-lg1">
                                <label class="custom-control-label" for="example-sw-custom-success-lg1">Success</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-info custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-info-lg1" name="example-sw-info-lg1">
                                <label class="custom-control-label" for="example-sw-custom-info-lg1">Info</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-warning custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-warning-lg1" name="example-sw-warning-lg1">
                                <label class="custom-control-label" for="example-sw-custom-warning-lg1">Warning</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-danger custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-danger-lg1" name="example-sw-danger-lg1">
                                <label class="custom-control-label" for="example-sw-custom-danger-lg1">Danger</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-light custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-light-lg1" name="example-sw-light-lg1">
                                <label class="custom-control-label" for="example-sw-custom-light-lg1">Light</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-dark custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-dark-lg1" name="example-sw-dark-lg1">
                                <label class="custom-control-label" for="example-sw-custom-dark-lg1">Dark</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-switch custom-control-primary custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-primary-lg2" name="example-sw-primary-lg2" checked>
                                <label class="custom-control-label" for="example-sw-custom-primary-lg2">Primary</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-success custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-success-lg2" name="example-sw-success-lg2" checked>
                                <label class="custom-control-label" for="example-sw-custom-success-lg2">Success</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-info custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-info-lg2" name="example-sw-info-lg2" checked>
                                <label class="custom-control-label" for="example-sw-custom-info-lg2">Info</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-warning custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-warning-lg2" name="example-sw-warning-lg2" checked>
                                <label class="custom-control-label" for="example-sw-custom-warning-lg2">Warning</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-danger custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-danger-lg2" name="example-sw-danger-lg2" checked>
                                <label class="custom-control-label" for="example-sw-custom-danger-lg2">Danger</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-light custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-light-lg2" name="example-sw-light-lg2" checked>
                                <label class="custom-control-label" for="example-sw-custom-light-lg2">Light</label>
                            </div>
                            <div class="custom-control custom-switch custom-control-dark custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-dark-lg2" name="example-sw-dark-lg2" checked>
                                <label class="custom-control-label" for="example-sw-custom-dark-lg2">Dark</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Themed -->
        </div>
    </div>
    <!-- END Switches -->

    <!-- Checkboxes -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Checkboxes</h3>
        </div>
        <div class="block-content">
            <!-- Based on Bootstrap -->
            <h2 class="content-heading">Based on Bootstrap</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        These are the default Bootstrap custom checkboxes
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label>Checkboxes</label>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom1" name="example-cb-custom1" checked>
                            <label class="custom-control-label" for="example-cb-custom1">Option 1</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom2" name="example-cb-custom2">
                            <label class="custom-control-label" for="example-cb-custom2">Option 2</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom3" name="example-cb-custom3">
                            <label class="custom-control-label" for="example-cb-custom3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Inline Checkboxes</label>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom-inline1" name="example-cb-custom-inline1" checked>
                            <label class="custom-control-label" for="example-cb-custom-inline1">Option 1</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom-inline2" name="example-cb-custom-inline2">
                            <label class="custom-control-label" for="example-cb-custom-inline2">Option 2</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom-inline3" name="example-cb-custom-inline3">
                            <label class="custom-control-label" for="example-cb-custom-inline3">Option 3</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Based on Bootstrap -->

            <!-- Large Size -->
            <h2 class="content-heading">Large Size</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can use bigger controls if you like
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label>Checkboxes</label>
                        <div class="custom-control custom-checkbox custom-control-lg mb-1">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom-lg1" name="example-cb-custom-lg1" checked>
                            <label class="custom-control-label" for="example-cb-custom-lg1">Option 1</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-lg mb-1">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom-lg2" name="example-cb-custom-lg2">
                            <label class="custom-control-label" for="example-cb-custom-lg2">Option 2</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-lg mb-1">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom-lg3" name="example-cb-custom-lg3">
                            <label class="custom-control-label" for="example-cb-custom-lg3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Inline Checkboxes</label>
                        <div class="custom-control custom-checkbox custom-control-lg custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom-inline-lg1" name="example-cb-custom-inline-lg1" checked>
                            <label class="custom-control-label" for="example-cb-custom-inline-lg1">Option 1</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-lg custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom-inline-lg2" name="example-cb-custom-inline-lg2">
                            <label class="custom-control-label" for="example-cb-custom-inline-lg2">Option 2</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-lg custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="example-cb-custom-inline-lg3" name="example-cb-custom-inline-lg3">
                            <label class="custom-control-label" for="example-cb-custom-inline-lg3">Option 3</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Large Size -->

            <!-- Themed -->
            <h2 class="content-heading">Themed</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can easily use various colors for your custom checkboxes
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group row">
                        <label class="col-12">Default Size</label>
                        <div class="col-6">
                            <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-primary1" name="example-cb-custom-primary1">
                                <label class="custom-control-label" for="example-cb-custom-primary1">Primary</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-success mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-success1" name="example-cb-custom-success1">
                                <label class="custom-control-label" for="example-cb-custom-success1">Success</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-info mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-info1" name="example-cb-custom-info1">
                                <label class="custom-control-label" for="example-cb-custom-info1">Info</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-warning mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-warning1" name="example-cb-custom-warning1">
                                <label class="custom-control-label" for="example-cb-custom-warning1">Warning</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-danger mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-danger1" name="example-cb-custom-danger1">
                                <label class="custom-control-label" for="example-cb-custom-danger1">Danger</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-light mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-light1" name="example-cb-custom-light1">
                                <label class="custom-control-label" for="example-cb-custom-light1">Light</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-dark mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-dark1" name="example-cb-custom-dark1">
                                <label class="custom-control-label" for="example-cb-custom-dark1">Dark</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-primary2" name="example-cb-custom-primary2" checked>
                                <label class="custom-control-label" for="example-cb-custom-primary2">Primary</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-success mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-success2" name="example-cb-custom-success2" checked>
                                <label class="custom-control-label" for="example-cb-custom-success2">Success</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-info mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-info2" name="example-cb-custom-info2" checked>
                                <label class="custom-control-label" for="example-cb-custom-info2">Info</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-warning mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-warning2" name="example-cb-custom-warning2" checked>
                                <label class="custom-control-label" for="example-cb-custom-warning2">Warning</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-danger mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-danger2" name="example-cb-custom-danger2" checked>
                                <label class="custom-control-label" for="example-cb-custom-danger2">Danger</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-light mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-light2" name="example-cb-custom-light2" checked>
                                <label class="custom-control-label" for="example-cb-custom-light2">Light</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-dark mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-dark2" name="example-cb-custom-dark2" checked>
                                <label class="custom-control-label" for="example-cb-custom-dark2">Dark</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label class="col-12">Large Size</label>
                        <div class="col-6">
                            <div class="custom-control custom-checkbox custom-control-primary custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-primary-lg1" name="example-cb-custom-primary-lg1">
                                <label class="custom-control-label" for="example-cb-custom-primary-lg1">Primary</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-success custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-success-lg1" name="example-cb-custom-success-lg1">
                                <label class="custom-control-label" for="example-cb-custom-success-lg1">Success</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-info custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-info-lg1" name="example-cb-custom-info-lg1">
                                <label class="custom-control-label" for="example-cb-custom-info-lg1">Info</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-warning custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-warning-lg1" name="example-cb-custom-warning-lg1">
                                <label class="custom-control-label" for="example-cb-custom-warning-lg1">Warning</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-danger custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-danger-lg1" name="example-cb-custom-danger-lg1">
                                <label class="custom-control-label" for="example-cb-custom-danger-lg1">Danger</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-light custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-light-lg1" name="example-cb-custom-light-lg1">
                                <label class="custom-control-label" for="example-cb-custom-light-lg1">Light</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-dark custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-dark-lg1" name="example-cb-custom-dark-lg1">
                                <label class="custom-control-label" for="example-cb-custom-dark-lg1">Dark</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-checkbox custom-control-primary custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-primary-lg2" name="example-cb-custom-primary-lg2" checked>
                                <label class="custom-control-label" for="example-cb-custom-primary-lg2">Primary</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-success custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-success-lg2" name="example-cb-custom-success-lg2" checked>
                                <label class="custom-control-label" for="example-cb-custom-success-lg2">Success</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-info custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-info-lg2" name="example-cb-custom-info-lg2" checked>
                                <label class="custom-control-label" for="example-cb-custom-info-lg2">Info</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-warning custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-warning-lg2" name="example-cb-custom-warning-lg2" checked>
                                <label class="custom-control-label" for="example-cb-custom-warning-lg2">Warning</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-danger custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-danger-lg2" name="example-cb-custom-danger-lg2" checked>
                                <label class="custom-control-label" for="example-cb-custom-danger-lg2">Danger</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-light custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-light-lg2" name="example-cb-custom-light-lg2" checked>
                                <label class="custom-control-label" for="example-cb-custom-light-lg2">Light</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-dark custom-control-lg mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-dark-lg2" name="example-cb-custom-dark-lg2" checked>
                                <label class="custom-control-label" for="example-cb-custom-dark-lg2">Dark</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Themed -->

            <!-- Shapes -->
            <h2 class="content-heading">Shapes</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can easily use a different shape for your checkboxes
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group row">
                        <label class="col-12">Default Size</label>
                        <div class="col-6">
                            <div class="custom-control custom-checkbox custom-checkbox-square custom-control-primary mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-square1" name="example-cb-custom-square1" checked>
                                <label class="custom-control-label" for="example-cb-custom-square1">Square 1</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-square custom-control-success mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-square2" name="example-cb-custom-square2" checked>
                                <label class="custom-control-label" for="example-cb-custom-square2">Square 2</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-square custom-control-warning mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-square3" name="example-cb-custom-square3" checked>
                                <label class="custom-control-label" for="example-cb-custom-square3">Square 3</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-primary mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-circle1" name="example-cb-custom-circle1" checked>
                                <label class="custom-control-label" for="example-cb-custom-circle1">Circle 1</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-success mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-circle2" name="example-cb-custom-circle2" checked>
                                <label class="custom-control-label" for="example-cb-custom-circle2">Circle 2</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-warning mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-circle3" name="example-cb-custom-circle3" checked>
                                <label class="custom-control-label" for="example-cb-custom-circle3">Circle 3</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label class="col-12">Large Size</label>
                        <div class="col-6">
                            <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg custom-control-danger mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-square-lg1" name="example-cb-custom-square-lg1">
                                <label class="custom-control-label" for="example-cb-custom-square-lg1">Square 1</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg custom-control-info mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-square-lg2" name="example-cb-custom-square-lg2">
                                <label class="custom-control-label" for="example-cb-custom-square-lg2">Square 2</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-square custom-control-lg custom-control-dark mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-square-lg3" name="example-cb-custom-square-lg3">
                                <label class="custom-control-label" for="example-cb-custom-square-lg3">Square 3</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-lg custom-control-danger mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-circle-lg1" name="example-cb-custom-circle-lg1">
                                <label class="custom-control-label" for="example-cb-custom-circle-lg1">Circle 1</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-lg custom-control-info mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-circle-lg2" name="example-cb-custom-circle-lg2">
                                <label class="custom-control-label" for="example-cb-custom-circle-lg2">Circle 2</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox-rounded-circle custom-control-lg custom-control-dark mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-circle-lg3" name="example-cb-custom-circle-lg3">
                                <label class="custom-control-label" for="example-cb-custom-circle-lg3">Circle 3</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Shapes -->

            <!-- Blocks -->
            <h2 class="content-heading">Blocks</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        Block based checkboxes which enable you to put any content inside them, perfect for modern selections
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group row items-push mb-0">
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block1" name="example-cb-custom-block1">
                                <label class="custom-control-label" for="example-cb-custom-block1">
                                    <span class="d-flex align-items-center">
                                        <?php $dm->get_avatar(8, '', 48); ?>
                                        <span class="ml-2">
                                            <span class="font-w700"><?php $dm->get_name('female'); ?></span>
                                            <span class="d-block font-size-sm text-muted">Web Designer</span>
                                        </span>
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block2" name="example-cb-custom-block2" checked>
                                <label class="custom-control-label" for="example-cb-custom-block2">
                                    <span class="d-flex align-items-center">
                                        <?php $dm->get_avatar(9, '', 48); ?>
                                        <span class="ml-2">
                                            <span class="font-w700"><?php $dm->get_name('male'); ?></span>
                                            <span class="d-block font-size-sm text-muted">Web Developer</span>
                                        </span>
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-success">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block3" name="example-cb-custom-block3">
                                <label class="custom-control-label" for="example-cb-custom-block3">
                                    <span class="d-block text-center">
                                        <i class="fa fa-check fa-2x mb-2 text-black-50"></i><br>
                                        Unchecked Success
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-success">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block4" name="example-cb-custom-block4" checked>
                                <label class="custom-control-label" for="example-cb-custom-block4">
                                    <span class="d-block text-center">
                                        <i class="fa fa-check fa-2x mb-2 text-black-50"></i><br>
                                        Checked Success
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-info">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block5" name="example-cb-custom-block5">
                                <label class="custom-control-label" for="example-cb-custom-block5">
                                    <span class="d-block text-center">
                                        <i class="fa fa-info fa-2x mb-2 text-black-50"></i><br>
                                        Unchecked Info
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-info">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block6" name="example-cb-custom-block6" checked>
                                <label class="custom-control-label" for="example-cb-custom-block6">
                                    <span class="d-block text-center">
                                        <i class="fa fa-info fa-2x mb-2 text-black-50"></i><br>
                                        Checked Info
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-warning">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block7" name="example-cb-custom-block7">
                                <label class="custom-control-label" for="example-cb-custom-block7">
                                    <span class="d-block text-center">
                                        <i class="fa fa-exclamation fa-2x mb-2 text-black-50"></i><br>
                                        Unchecked Warning
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-warning">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block8" name="example-cb-custom-block8" checked>
                                <label class="custom-control-label" for="example-cb-custom-block8">
                                    <span class="d-block text-center">
                                        <i class="fa fa-exclamation fa-2x mb-2 text-black-50"></i><br>
                                        Checked Warning
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-danger">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block9" name="example-cb-custom-block9">
                                <label class="custom-control-label" for="example-cb-custom-block9">
                                    <span class="d-block text-center">
                                        <i class="fa fa-times fa-2x mb-2 text-black-50"></i><br>
                                        Unchecked Danger
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-danger">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block10" name="example-cb-custom-block10" checked>
                                <label class="custom-control-label" for="example-cb-custom-block10">
                                    <span class="d-block text-center">
                                        <i class="fa fa-times fa-2x mb-2 text-black-50"></i><br>
                                        Checked Danger
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-dark">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block11" name="example-cb-custom-block11">
                                <label class="custom-control-label" for="example-cb-custom-block11">
                                    <span class="d-block text-center">
                                        <i class="fa fa-burn fa-2x mb-2 text-black-50"></i><br>
                                        Unchecked Dark
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-dark">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block12" name="example-cb-custom-block12" checked>
                                <label class="custom-control-label" for="example-cb-custom-block12">
                                    <span class="d-block text-center">
                                        <i class="fa fa-burn fa-2x mb-2 text-black-50"></i><br>
                                        Checked Dark
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-light">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block13" name="example-cb-custom-block13">
                                <label class="custom-control-label" for="example-cb-custom-block13">
                                    <span class="d-block text-center">
                                        <i class="fa fa-crown fa-2x mb-2 text-black-50"></i><br>
                                        Unchecked Light
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-light">
                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-block14" name="example-cb-custom-block14" checked>
                                <label class="custom-control-label" for="example-cb-custom-block14">
                                    <span class="d-block text-center">
                                        <i class="fa fa-crown fa-2x mb-2 text-black-50"></i><br>
                                        Checked Light
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Blocks -->
        </div>
    </div>
    <!-- END Checkboxes -->

    <!-- Radios -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Radios</h3>
        </div>
        <div class="block-content">
            <!-- Based on Bootstrap -->
            <h2 class="content-heading">Based on Bootstrap</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        These are the default Bootstrap custom radios
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label>Radios</label>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input" id="example-rd-custom1" name="example-rd-custom" checked>
                            <label class="custom-control-label" for="example-rd-custom1">Option 1</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input" id="example-rd-custom2" name="example-rd-custom">
                            <label class="custom-control-label" for="example-rd-custom2">Option 2</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input" id="example-rd-custom3" name="example-rd-custom">
                            <label class="custom-control-label" for="example-rd-custom3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Inline Radios</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-inline1" name="example-rd-custom-inline" checked>
                            <label class="custom-control-label" for="example-rd-custom-inline1">Option 1</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-inline2" name="example-rd-custom-inline">
                            <label class="custom-control-label" for="example-rd-custom-inline2">Option 2</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-inline3" name="example-rd-custom-inline">
                            <label class="custom-control-label" for="example-rd-custom-inline3">Option 3</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Based on Bootstrap -->

            <!-- Large Size -->
            <h2 class="content-heading">Large Size</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can use bigger controls if you like
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label>Radios</label>
                        <div class="custom-control custom-radio custom-control-lg mb-1">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-lg1" name="example-rd-custom-lg" checked>
                            <label class="custom-control-label" for="example-rd-custom-lg1">Option 1</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-lg mb-1">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-lg2" name="example-rd-custom-lg">
                            <label class="custom-control-label" for="example-rd-custom-lg2">Option 2</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-lg mb-1">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-lg3" name="example-rd-custom-lg">
                            <label class="custom-control-label" for="example-rd-custom-lg3">Option 3</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Inline Radios</label>
                        <div class="custom-control custom-radio custom-control-inline custom-control-lg">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-inline-lg1" name="example-rd-custom-inline-lg" checked>
                            <label class="custom-control-label" for="example-rd-custom-inline-lg1">Option 1</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline custom-control-lg">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-inline-lg2" name="example-rd-custom-inline-lg">
                            <label class="custom-control-label" for="example-rd-custom-inline-lg2">Option 2</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline custom-control-lg">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-inline-lg3" name="example-rd-custom-inline-lg">
                            <label class="custom-control-label" for="example-rd-custom-inline-lg3">Option 3</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Large Size -->

            <!-- Themed -->
            <h2 class="content-heading">Themed</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You can easily use various colors for your custom radios
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group row">
                        <label class="col-12">Default Size</label>
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-primary mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-primary1" name="example-rd-custom-primary" checked>
                                <label class="custom-control-label" for="example-rd-custom-primary1">Primary 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-primary mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-primary2" name="example-rd-custom-primary">
                                <label class="custom-control-label" for="example-rd-custom-primary2">Primary 2</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-success mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-success1" name="example-rd-custom-success" checked>
                                <label class="custom-control-label" for="example-rd-custom-success1">Success 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-success mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-success2" name="example-rd-custom-success">
                                <label class="custom-control-label" for="example-rd-custom-success2">Success 2</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-info mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-info1" name="example-rd-custom-info" checked>
                                <label class="custom-control-label" for="example-rd-custom-info1">Info 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-info mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-info2" name="example-rd-custom-info">
                                <label class="custom-control-label" for="example-rd-custom-info2">Info 2</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-warning mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-warning1" name="example-rd-custom-warning" checked>
                                <label class="custom-control-label" for="example-rd-custom-warning1">Warning 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-warning mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-warning2" name="example-rd-custom-warning">
                                <label class="custom-control-label" for="example-rd-custom-warning2">Warning 2</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-danger mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-danger1" name="example-rd-custom-danger" checked>
                                <label class="custom-control-label" for="example-rd-custom-danger1">Danger 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-danger mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-danger2" name="example-rd-custom-danger">
                                <label class="custom-control-label" for="example-rd-custom-danger2">Danger 2</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-light mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-light1" name="example-rd-custom-light" checked>
                                <label class="custom-control-label" for="example-rd-custom-light1">Light 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-light mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-light2" name="example-rd-custom-light">
                                <label class="custom-control-label" for="example-rd-custom-light2">Light 2</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-dark mb-1">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-dark1" name="example-rd-custom-dark" checked>
                            <label class="custom-control-label" for="example-rd-custom-dark1">Dark 1</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-dark mb-1">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-dark2" name="example-rd-custom-dark">
                            <label class="custom-control-label" for="example-rd-custom-dark2">Dark 2</label>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <label class="col-12">Large Size</label>
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-primary custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-primary-lg1" name="example-rd-custom-primary-lg" checked>
                                <label class="custom-control-label" for="example-rd-custom-primary-lg1">Primary 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-primary custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-primary-lg2" name="example-rd-custom-primary-lg">
                                <label class="custom-control-label" for="example-rd-custom-primary-lg2">Primary 2</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-success custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-success-lg1" name="example-rd-custom-success-lg" checked>
                                <label class="custom-control-label" for="example-rd-custom-success-lg1">Success 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-success custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-success-lg2" name="example-rd-custom-success-lg">
                                <label class="custom-control-label" for="example-rd-custom-success-lg2">Success 2</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-info custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-info-lg1" name="example-rd-custom-info-lg" checked>
                                <label class="custom-control-label" for="example-rd-custom-info-lg1">Info 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-info custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-info-lg2" name="example-rd-custom-info-lg">
                                <label class="custom-control-label" for="example-rd-custom-info-lg2">Info 2</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-warning custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-warning-lg1" name="example-rd-custom-warning-lg" checked>
                                <label class="custom-control-label" for="example-rd-custom-warning-lg1">Warning 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-warning custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-warning-lg2" name="example-rd-custom-warning-lg">
                                <label class="custom-control-label" for="example-rd-custom-warning-lg2">Warning 2</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-danger custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-danger-lg1" name="example-rd-custom-danger-lg" checked>
                                <label class="custom-control-label" for="example-rd-custom-danger-lg1">Danger 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-danger custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-danger-lg2" name="example-rd-custom-danger-lg">
                                <label class="custom-control-label" for="example-rd-custom-danger-lg2">Danger 2</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-radio custom-control-light custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-light-lg1" name="example-rd-custom-light-lg" checked>
                                <label class="custom-control-label" for="example-rd-custom-light-lg1">Light 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-light custom-control-lg mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-light-lg2" name="example-rd-custom-light-lg">
                                <label class="custom-control-label" for="example-rd-custom-light-lg2">Light 2</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-dark custom-control-lg mb-1">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-dark-lg1" name="example-rd-custom-dark-lg" checked>
                            <label class="custom-control-label" for="example-rd-custom-dark-lg1">Dark 1</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-dark custom-control-lg mb-1">
                            <input type="radio" class="custom-control-input" id="example-rd-custom-dark-lg2" name="example-rd-custom-dark-lg">
                            <label class="custom-control-label" for="example-rd-custom-dark-lg2">Dark 2</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Themed -->

            <!-- Blocks -->
            <h2 class="content-heading">Blocks</h2>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="text-muted">
                        You could also use block based radios, perfect for custom content selections such as modern pricing tables
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="form-group row items-push mb-0">
                        <div class="col-md-4">
                            <div class="custom-control custom-block custom-control-primary mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-block1" name="example-rd-custom-block">
                                <label class="custom-control-label" for="example-rd-custom-block1">
                                    <span class="d-block font-w400 text-center my-3">
                                        <span class="font-size-h4 font-w600">Personal</span>
                                        <span class="d-block font-size-h2 font-w300 py-3 m-3 bg-body-light rounded">$5<small> /m</small></span>
                                        <span class="d-block mb-2">10 projects</span>
                                        <span class="d-block mb-2">2 clients</span>
                                        <span class="d-block mb-2">500MB</span>
                                        <span class="d-block mb-2">Email Support</span>
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-control custom-block custom-control-primary mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-block2" name="example-rd-custom-block">
                                <label class="custom-control-label" for="example-rd-custom-block2">
                                    <span class="d-block font-w400 text-center my-3">
                                        <span class="font-size-h4 font-w600">Business</span>
                                        <span class="d-block font-size-h2 font-w300 py-3 m-3 bg-body-light rounded">$15<small> /m</small></span>
                                        <span class="d-block mb-2">100 projects</span>
                                        <span class="d-block mb-2">15 clients</span>
                                        <span class="d-block mb-2">2GB</span>
                                        <span class="d-block mb-2">Full Support</span>
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-control custom-block custom-control-primary mb-1">
                                <input type="radio" class="custom-control-input" id="example-rd-custom-block3" name="example-rd-custom-block">
                                <label class="custom-control-label" for="example-rd-custom-block3">
                                    <span class="d-block font-w400 text-center my-3">
                                        <span class="font-size-h4 font-w600">VIP</span>
                                        <span class="d-block font-size-h2 font-w300 py-3 m-3 bg-body-light rounded">$30<small> /m</small></span>
                                        <span class="d-block mb-2">500 projects</span>
                                        <span class="d-block mb-2">50 clients</span>
                                        <span class="d-block mb-2">10GB</span>
                                        <span class="d-block mb-2">Full Support</span>
                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Blocks -->
        </div>
    </div>
    <!-- END Radios -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
