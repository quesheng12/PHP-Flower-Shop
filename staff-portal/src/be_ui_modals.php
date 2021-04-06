<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Modals</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Elements</li>
                    <li class="breadcrumb-item active" aria-current="page">Modals</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Bootstrap Modals -->
    <!-- Modal functionality is auto initialized by Bootstrap in js/core/bootstrap.bundle.min.js -->
    <!-- For advanced modal usage you can check out https://getbootstrap.com/docs/4.5/components/modal/ -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Bootstrap Modals</h3>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-md-6">
                    <!-- Default Variation -->
                    <h2 class="content-heading pt-0">Default Variation</h2>
                    <p class="text-muted mb-2">
                        Modals are completely customizable and here we present the default one the block based one
                    </p>
                    <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-normal">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push" data-toggle="modal" data-target="#modal-default-normal">Default</button>
                    <!-- END Default Variation -->
                </div>
                <div class="col-md-6">
                    <!-- Size: Small -->
                    <h2 class="content-heading pt-md-0">Size: Small</h2>
                    <p class="text-muted mb-2">
                        If you don’t have much content, you can use the small size variation
                    </p>
                    <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-small">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push" data-toggle="modal" data-target="#modal-default-small">Default</button>
                    <!-- END Size: Small -->
                </div>
                <div class="col-md-6">
                    <!-- Size: Large -->
                    <h2 class="content-heading">Size: Large</h2>
                    <p class="text-muted mb-2">
                        If you need more space you can use the large size variation
                    </p>
                    <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-large">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push" data-toggle="modal" data-target="#modal-default-large">Default</button>
                    <!-- END Size: Large -->
                </div>
                <div class="col-md-6">
                    <!-- Size: Extra Large -->
                    <h2 class="content-heading">Size: Extra Large</h2>
                    <p class="text-muted mb-2">
                        If you need even more space you can use the extra large size variation
                    </p>
                    <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-extra-large">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push" data-toggle="modal" data-target="#modal-default-extra-large">Default</button>
                    <!-- END Size: Extra Large -->
                </div>
                <div class="col-md-6">
                    <!-- Position: Top -->
                    <h2 class="content-heading">Position: Top</h2>
                    <p class="text-muted mb-2">
                        You can position your modals at the top of the screen
                    </p>
                    <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-top">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push" data-toggle="modal" data-target="#modal-default-top">Default</button>
                    <!-- END Position: Top -->
                </div>
                <div class="col-md-6">
                    <!-- Position: Vertically Centered -->
                    <h2 class="content-heading">Position: Vertically Centered</h2>
                    <p class="text-muted mb-2">
                        You can center your modals in the middle of the screen
                    </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-block-vcenter">Block Design</button>
                    <button type="button" class="btn btn-alt-primary" data-toggle="modal" data-target="#modal-default-vcenter">Default</button>
                    <!-- END Position: Vertically Centered -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Bootstrap Modals -->

    <!-- Bootstrap Modals Animations -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Bootstrap Modals <small>Animations</small></h3>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-md-6">
                    <!-- Fade In -->
                    <h2 class="content-heading pt-0">Fade In</h2>
                    <p class="text-muted mb-2">
                        The default modal animation
                    </p>
                    <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-fadein">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push" data-toggle="modal" data-target="#modal-default-fadein">Default</button>
                    <!-- END Fade In -->
                </div>
                <div class="col-md-6">
                    <!-- Pop In -->
                    <h2 class="content-heading pt-md-0">Pop In</h2>
                    <p class="text-muted mb-2">
                        Poping in animation
                    </p>
                    <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-popin">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push" data-toggle="modal" data-target="#modal-default-popin">Default</button>
                    <!-- END Pop In -->
                </div>
                <div class="col-md-6">
                    <!-- Pop Out -->
                    <h2 class="content-heading">Pop Out</h2>
                    <p class="text-muted mb-2">
                        Poping out animation
                    </p>
                    <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-popout">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push" data-toggle="modal" data-target="#modal-default-popout">Default</button>
                    <!-- END Pop Out -->
                </div>
                <div class="col-md-6">
                    <!-- Slide Up -->
                    <h2 class="content-heading">Slide Up</h2>
                    <p class="text-muted mb-2">
                        Sliding from up animation
                    </p>
                    <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-slideup">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push" data-toggle="modal" data-target="#modal-default-slideup">Default</button>
                    <!-- END Slide Up -->
                </div>
                <div class="col-md-6">
                    <!-- Slide Right -->
                    <h2 class="content-heading">Slide Right</h2>
                    <p class="text-muted mb-2">
                        Sliding from right animation
                    </p>
                    <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-slideright">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push" data-toggle="modal" data-target="#modal-default-slideright">Default</button>
                    <!-- END Slide Right -->
                </div>
                <div class="col-md-6">
                    <!-- Slide Left -->
                    <h2 class="content-heading">Slide Left</h2>
                    <p class="text-muted mb-2">
                        Sliding from left animation
                    </p>
                    <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-slideleft">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push" data-toggle="modal" data-target="#modal-default-slideleft">Default</button>
                    <!-- END Slide Left -->
                </div>
                <div class="col-md-6">
                    <!-- From Right -->
                    <h2 class="content-heading">From Right</h2>
                    <p class="text-muted mb-2">
                        Coming from right with rotation animation
                    </p>
                    <button type="button" class="btn btn-primary push mb-md-0" data-toggle="modal" data-target="#modal-block-fromright">Block Design</button>
                    <button type="button" class="btn btn-alt-primary push mb-md-0" data-toggle="modal" data-target="#modal-default-fromright">Default</button>
                    <!-- END From Right -->
                </div>
                <div class="col-md-6">
                    <!-- From Left -->
                    <h2 class="content-heading">From Left</h2>
                    <p class="text-muted mb-2">
                        Coming from left with rotation animation
                    </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-block-fromleft">Block Design</button>
                    <button type="button" class="btn btn-alt-primary" data-toggle="modal" data-target="#modal-default-fromleft">Default</button>
                    <!-- END From Left -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Bootstrap Modals Animations -->

    <!-- Bootstrap Modals JavaScript -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Bootstrap Modals <small>JavaScript</small></h3>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-md-6">
                    <!-- Methods -->
                    <h2 class="content-heading pt-0">Methods</h2>
                    <p class="text-muted mb-2">
                        There are various methods you can use to handle the modals
                    </p>
                    <p class="font-w600 mb-0">
                        Show Modal
                    </p>
                    <p>
                        <code>jQuery('#modal-id').modal('show');</code>
                    </p>
                    <p class="font-w600 mb-0">
                        Hide Modal
                    </p>
                    <p>
                        <code>jQuery('#modal-id').modal('hide');</code>
                    </p>
                    <p class="font-w600 mb-0">
                        Toggle Modal
                    </p>
                    <p class="mb-md-0">
                        <code>jQuery('#modal-id').modal('toggle');</code>
                    </p>
                    <!-- END Methods -->
                </div>
                <div class="col-md-6">
                    <!-- Events -->
                    <h2 class="content-heading pt-md-0">Events</h2>
                    <p class="text-muted mb-2">
                        There are various events you can use to handle custom JS code. For example, initialize a plugin when a modal is shown
                    </p>
                    <p class="font-w600 mb-0">
                        When the modal is shown
                    </p>
                    <p>
                        <code>jQuery('#modal-id').on('shown.bs.modal', function (e) { // do something... })</code>
                    </p>
                    <p class="font-w600 mb-0">
                        When the modal is hidden
                    </p>
                    <p class="mb-md-0">
                        <code>jQuery('#modal-id').on('hidden.bs.modal', function (e) { // do something... })</code>
                    </p>
                    <!-- END Events -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Bootstrap Modals JavaScript -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>

<!-- Normal Default Modal -->
<div class="modal" id="modal-default-normal" tabindex="-1" role="dialog" aria-labelledby="modal-default-normal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Normal Default Modal -->

<!-- Normal Block Modal -->
<div class="modal" id="modal-block-normal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Normal Block Modal -->

<!-- Small Default Modal -->
<div class="modal" id="modal-default-small" tabindex="-1" role="dialog" aria-labelledby="modal-default-small" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Small Default Modal -->

<!-- Small Block Modal -->
<div class="modal" id="modal-block-small" tabindex="-1" role="dialog" aria-labelledby="modal-block-small" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text('small'); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Small Block Modal -->

<!-- Large Default Modal -->
<div class="modal" id="modal-default-large" tabindex="-1" role="dialog" aria-labelledby="modal-default-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Large Default Modal -->

<!-- Large Block Modal -->
<div class="modal" id="modal-block-large" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Large Block Modal -->

<!-- Extra Large Default Modal -->
<div class="modal" id="modal-default-extra-large" tabindex="-1" role="dialog" aria-labelledby="modal-default-extra-large" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Extra Large Default Modal -->

<!-- Extra Large Block Modal -->
<div class="modal" id="modal-block-extra-large" tabindex="-1" role="dialog" aria-labelledby="modal-block-extra-large" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Extra Large Block Modal -->

<!-- Top Default Modal -->
<div class="modal" id="modal-default-top" tabindex="-1" role="dialog" aria-labelledby="modal-default-top" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Top Default Modal -->

<!-- Top Block Modal -->
<div class="modal" id="modal-block-top" tabindex="-1" role="dialog" aria-labelledby="modal-block-top" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Top Block Modal -->

<!-- Vertically Centered Default Modal -->
<div class="modal" id="modal-default-vcenter" tabindex="-1" role="dialog" aria-labelledby="modal-default-vcenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Vertically Centered Default Modal -->

<!-- Vertically Centered Block Modal -->
<div class="modal" id="modal-block-vcenter" tabindex="-1" role="dialog" aria-labelledby="modal-block-vcenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Vertically Centered Block Modal -->

<!-- Fade In Default Modal -->
<div class="modal fade" id="modal-default-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-default-fadein" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Fade In Default Modal -->

<!-- Fade In Block Modal -->
<div class="modal fade" id="modal-block-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Fade In Block Modal -->

<!-- Pop In Default Modal -->
<div class="modal fade" id="modal-default-popin" tabindex="-1" role="dialog" aria-labelledby="modal-default-popin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Pop In Default Modal -->

<!-- Pop In Block Modal -->
<div class="modal fade" id="modal-block-popin" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Pop In Block Modal -->

<!-- Pop Out Default Modal -->
<div class="modal fade" id="modal-default-popout" tabindex="-1" role="dialog" aria-labelledby="modal-default-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Default Modal -->

<!-- Pop Out Block Modal -->
<div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Block Modal -->

<!-- Slide Up Default Modal -->
<div class="modal fade" id="modal-default-slideup" tabindex="-1" role="dialog" aria-labelledby="modal-default-slideup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideup" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Up Default Modal -->

<!-- Slide Up Block Modal -->
<div class="modal fade" id="modal-block-slideup" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideup" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Up Block Modal -->

<!-- Slide Right Default Modal -->
<div class="modal fade" id="modal-default-slideright" tabindex="-1" role="dialog" aria-labelledby="modal-default-slideright" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideright" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Right Default Modal -->

<!-- Slide Right Block Modal -->
<div class="modal fade" id="modal-block-slideright" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideright" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideright" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Right Block Modal -->

<!-- Slide Left Default Modal -->
<div class="modal fade" id="modal-default-slideleft" tabindex="-1" role="dialog" aria-labelledby="modal-default-slideleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideleft" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Left Default Modal -->

<!-- Slide Left Block Modal -->
<div class="modal fade" id="modal-block-slideleft" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideleft" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Left Block Modal -->

<!-- From Right Default Modal -->
<div class="modal fade" id="modal-default-fromright" tabindex="-1" role="dialog" aria-labelledby="modal-default-fromright" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fromright" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END From Right Default Modal -->

<!-- From Right Block Modal -->
<div class="modal fade" id="modal-block-fromright" tabindex="-1" role="dialog" aria-labelledby="modal-block-fromright" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fromright" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END From Right Block Modal -->

<!-- From Left Default Modal -->
<div class="modal fade" id="modal-default-fromleft" tabindex="-1" role="dialog" aria-labelledby="modal-default-fromleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fromleft" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-1">
                <?php $dm->get_text(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END From Left Default Modal -->

<!-- From Left Block Modal -->
<div class="modal fade" id="modal-block-fromleft" tabindex="-1" role="dialog" aria-labelledby="modal-block-fromleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fromleft" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text(); ?>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END From Left Block Modal -->

<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
