<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Form Elements</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active" aria-current="page">Elements</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Elements -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Elements</h3>
        </div>
        <div class="block-content">
            <form action="be_forms_elements.php" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                <!-- Basic Elements -->
                <h2 class="content-heading pt-0">Basic</h2>
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            The most often used inputs you know and love
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-text-input">Text</label>
                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                        </div>
                        <div class="form-group">
                            <label for="example-email-input">Email</label>
                            <input type="email" class="form-control" id="example-email-input" name="example-email-input" placeholder="Emai Input">
                        </div>
                        <div class="form-group">
                            <label for="example-password-input">Password</label>
                            <input type="password" class="form-control" id="example-password-input" name="example-password-input" placeholder="Password Input">
                        </div>
                        <div class="form-group">
                            <label for="example-textarea-input">Textarea</label>
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                        </div>
                    </div>
                </div>
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            Browser’s default select boxes, showcasing both simple and multiple selections
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-select">Select</label>
                            <select class="form-control" id="example-select" name="example-select">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                                <option value="4">Option #4</option>
                                <option value="5">Option #5</option>
                                <option value="6">Option #6</option>
                                <option value="7">Option #7</option>
                                <option value="8">Option #8</option>
                                <option value="9">Option #9</option>
                                <option value="10">Option #10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-select-multiple">Multiple Select</label>
                            <select class="form-control" id="example-select-multiple" name="example-select-multiple" size="5" multiple>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                                <option value="4">Option #4</option>
                                <option value="5">Option #5</option>
                                <option value="6">Option #6</option>
                                <option value="7">Option #7</option>
                                <option value="8">Option #8</option>
                                <option value="9">Option #9</option>
                                <option value="10">Option #10</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            Browser’s default checkboxes and radios in various layouts
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label>Checkboxes</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default1" name="example-checkbox-default1">
                                <label class="form-check-label" for="example-checkbox-default1">Option 1</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default2" name="example-checkbox-default2">
                                <label class="form-check-label" for="example-checkbox-default2">Option 2</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default3" name="example-checkbox-default3" disabled>
                                <label class="form-check-label" for="example-checkbox-default3">Option 3</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Inline Checkboxes</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline1" name="example-checkbox-inline1">
                                <label class="form-check-label" for="example-checkbox-inline1">Option 1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline2" name="example-checkbox-inline2">
                                <label class="form-check-label" for="example-checkbox-inline2">Option 2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3" disabled>
                                <label class="form-check-label" for="example-checkbox-inline3">Option 3</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Radios</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default1" name="example-radios-default" value="option1" checked>
                                <label class="form-check-label" for="example-radios-default1">Option 1</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default2" name="example-radios-default" value="option2">
                                <label class="form-check-label" for="example-radios-default2">Option 2</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default3" name="example-radios-default" value="option2" disabled>
                                <label class="form-check-label" for="example-radios-default3">Option 3</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Inline Radios</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked>
                                <label class="form-check-label" for="example-radios-inline1">Option 1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                                <label class="form-check-label" for="example-radios-inline2">Option 2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="example-radios-inline3" name="example-radios-inline" value="option2" disabled>
                                <label class="form-check-label" for="example-radios-inline3">Option 3</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            Browser’s default file inputs, showcasing both single and multiple files
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5 overflow-hidden">
                        <div class="form-group">
                            <label class="d-block" for="example-file-input">File Input</label>
                            <input type="file" id="example-file-input" name="example-file-input">
                        </div>
                        <div class="form-group">
                            <label class="d-block" for="example-file-input-multiple">File Input (Multiple)</label>
                            <input type="file" id="example-file-input-multiple" name="example-file-input-multiple" multiple>
                        </div>
                    </div>
                </div>
                <!-- END Basic Elements -->

                <!-- Alternative Input Style -->
                <h2 class="content-heading">Alternative Style</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            You can enable an alternative style with background color
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-text-input-alt">Text</label>
                            <input type="text" class="form-control form-control-alt" id="example-text-input-alt" name="example-text-input-alt" placeholder="Text Input">
                        </div>
                        <div class="form-group">
                            <label for="example-password-input-alt">Password</label>
                            <input type="password" class="form-control form-control-alt" id="example-password-input-alt" name="example-password-input-alt" placeholder="Password Input">
                        </div>
                        <div class="form-group">
                            <label for="example-textarea-input-alt">Textarea</label>
                            <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="example-textarea-input-alt" rows="7" placeholder="Textarea content.."></textarea>
                        </div>
                    </div>
                </div>
                <!-- END Alternative Input Style -->

                <!-- Custom Controls -->
                <h2 class="content-heading">Custom Controls</h2>
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            A custom style is also included for checkboxes, radios, select boxes and files inputs as well
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label>Checkboxes</label>
                            <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox-custom1" name="example-checkbox-custom1" checked>
                                <label class="custom-control-label" for="example-checkbox-custom1">Option 1</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox-custom2" name="example-checkbox-custom2">
                                <label class="custom-control-label" for="example-checkbox-custom2">Option 2</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox-custom3" name="example-checkbox-custom3">
                                <label class="custom-control-label" for="example-checkbox-custom3">Option 3</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Inline Checkboxes</label>
                            <div class="custom-control custom-checkbox custom-control-inline custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox-custom-inline1" name="example-checkbox-custom-inline1" checked>
                                <label class="custom-control-label" for="example-checkbox-custom-inline1">Option 1</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox-custom-inline2" name="example-checkbox-custom-inline2">
                                <label class="custom-control-label" for="example-checkbox-custom-inline2">Option 2</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="example-checkbox-custom-inline3" name="example-checkbox-custom-inline3">
                                <label class="custom-control-label" for="example-checkbox-custom-inline3">Option 3</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Radios</label>
                            <div class="custom-control custom-radio custom-control-primary mb-1">
                                <input type="radio" class="custom-control-input" id="example-radio-custom1" name="example-radio-custom" checked>
                                <label class="custom-control-label" for="example-radio-custom1">Option 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-primary mb-1">
                                <input type="radio" class="custom-control-input" id="example-radio-custom2" name="example-radio-custom">
                                <label class="custom-control-label" for="example-radio-custom2">Option 2</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-primary mb-1">
                                <input type="radio" class="custom-control-input" id="example-radio-custom3" name="example-radio-custom">
                                <label class="custom-control-label" for="example-radio-custom3">Option 3</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Inline Radios</label>
                            <div class="custom-control custom-radio custom-control-inline custom-control-primary">
                                <input type="radio" class="custom-control-input" id="example-radio-custom-inline1" name="example-radio-custom-inline" checked>
                                <label class="custom-control-label" for="example-radio-custom-inline1">Option 1</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline custom-control-primary">
                                <input type="radio" class="custom-control-input" id="example-radio-custom-inline2" name="example-radio-custom-inline">
                                <label class="custom-control-label" for="example-radio-custom-inline2">Option 2</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline custom-control-primary">
                                <input type="radio" class="custom-control-input" id="example-radio-custom-inline3" name="example-radio-custom-inline">
                                <label class="custom-control-label" for="example-radio-custom-inline3">Option 3</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Custom Menu</label>
                            <select class="custom-select" id="example-select-custom" name="example-select-custom">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                                <option value="4">Option #4</option>
                                <option value="5">Option #5</option>
                                <option value="6">Option #6</option>
                                <option value="7">Option #7</option>
                                <option value="8">Option #8</option>
                                <option value="9">Option #9</option>
                                <option value="10">Option #10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Custom Multiple Menu</label>
                            <select class="custom-select" id="example-select-multiple-custom" name="example-select-multiple-custom" size="5" multiple>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                                <option value="4">Option #4</option>
                                <option value="5">Option #5</option>
                                <option value="6">Option #6</option>
                                <option value="7">Option #7</option>
                                <option value="8">Option #8</option>
                                <option value="9">Option #9</option>
                                <option value="10">Option #10</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            We have integrated custom functionality to make Bootstrap’s custom file input work like a default one. Try choosing a file
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label>Bootstrap’s Custom File Input</label>
                            <div class="custom-file">
                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="example-file-input-custom" name="example-file-input-custom">
                                <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bootstrap’s Custom File Input (Multiple)</label>
                            <div class="custom-file">
                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->
                                <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="example-file-input-multiple-custom" name="example-file-input-multiple-custom" multiple>
                                <label class="custom-file-label" for="example-file-input-multiple-custom">Choose files</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Custom Controls -->

                <!-- Static Inputs -->
                <h2 class="content-heading">Static</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            You can easily have static readonly inputs with different styles
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-static-input-plain">Plain Text</label>
                            <input type="text" readonly class="form-control-plaintext" id="example-static-input-plain" name="example-static-input-plain" value="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="example-static-input-readonly">Read Only</label>
                            <input type="text" readonly class="form-control" id="example-static-input-readonly" name="example-static-input-readonly" value="email@example.com">
                        </div>
                    </div>
                </div>
                <!-- END Static Inputs -->

                <!-- Input States -->
                <h2 class="content-heading">States</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            There are various states an input can have
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-text-input-valid">Valid State</label>
                            <input type="text" class="form-control is-valid" id="example-text-input-valid" name="example-text-input-valid" placeholder="Default Style..">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-alt is-valid" id="example-text-input-valid-alt" name="example-text-input-valid-alt" placeholder="Alternative Style..">
                            <div class="valid-feedback">Valid feedback</div>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input-invalid">Invalid State</label>
                            <input type="text" class="form-control is-invalid" id="example-text-input-invalid" name="example-text-input-invalid" placeholder="Default Style..">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-alt is-invalid" id="example-text-input-invalid-alt" name="example-text-input-invalid-alt" placeholder="Alternative Style..">
                            <div class="invalid-feedback">Invalid feedback</div>
                        </div>
                        <div class="form-group">
                            <label for="example-disabled-input">Disabled</label>
                            <input type="text" class="form-control" id="example-disabled-input" name="example-disabled-input" placeholder="Disabled State.." disabled>
                        </div>
                    </div>
                </div>
                <!-- END Input States -->

                <!-- Input Sizes -->
                <h2 class="content-heading">Sizes</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            You can also alter the size of your inputs
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-text-input-sm">Small</label>
                            <input type="text" class="form-control form-control-sm" id="example-text-input-sm" name="example-text-input-sm" placeholder="form-control-sm">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-alt form-control-sm" id="example-text-input-sm-alt" name="example-text-input-sm-alt" placeholder="form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input-normal">Normal</label>
                            <input type="text" class="form-control" id="example-text-input-normal" name="example-text-input-normal" placeholder="..">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-alt" id="example-text-input-normal-alt" name="example-text-input-normal-alt" placeholder="..">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input-lg">Large</label>
                            <input type="text" class="form-control form-control-lg" id="example-text-input-lg" name="example-text-input-lg" placeholder="form-control-lg">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-alt form-control-lg" id="example-text-input-lg-alt" name="example-text-input-lg-alt" placeholder="form-control-lg">
                        </div>
                    </div>
                </div>
                <!-- Input Sizes -->

                <!-- Input Grid Sizes -->
                <h2 class="content-heading">Grid Sizes</h2>
                <div class="row items-push">
                    <div class="col-lg-4">
                        <p class="text-muted">
                            You can also take advantage of the grid to manipulate your input width
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group row">
                            <label class="col-12">Label in the Grid</label>
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="col-3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder="col-4">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-5">
                                <input type="text" class="form-control" placeholder="col-5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="col-6">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-7">
                                <input type="text" class="form-control" placeholder="col-7">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="col-8">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-9">
                                <input type="text" class="form-control" placeholder="col-9">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-10">
                                <input type="text" class="form-control" placeholder="col-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-11">
                                <input type="text" class="form-control" placeholder="col-11">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="col-12">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Input Grid Sizes -->
            </form>
        </div>
    </div>
    <!-- END Elements -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
