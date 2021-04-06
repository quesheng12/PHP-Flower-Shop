<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/booking/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Top Navigation -->
<div class="bg-white">
    <div class="content py-3">
        <ul class="nav nav-pills justify-content-center justify-content-md-start">
            <li class="nav-item mr-1">
                <a class="nav-link active" href="db_booking.php">
                    <i class="fa fa-building fa-fw"></i> <span class="d-none d-md-inline ml-1">Hotels</span>
                </a>
            </li>
            <li class="nav-item mr-1">
                <a class="nav-link" href="db_booking.php">
                    <i class="fa fa-plane fa-fw"></i> <span class="d-none d-md-inline ml-1">Flights</span>
                </a>
            </li>
            <li class="nav-item mr-1">
                <a class="nav-link" href="db_booking.php">
                    <i class="fa fa-car fa-fw"></i> <span class="d-none d-md-inline ml-1">Rent a car</span>
                </a>
            </li>
            <li class="nav-item ml-md-auto">
                <a class="nav-link" href="db_booking.php">
                    <i class="fa fa-star text-warning fa-fw"></i> <span class="d-none d-md-inline ml-1">Special Offers</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END Top Navigation -->

<!-- Search -->
<div class="content">
    <div class="text-center py-3">
        <h1 class="h3 font-w700 mb-2">Where are you going next?</h1>
        <h2 class="h5 font-w400 text-muted">Explore over 168 destinations with the best deals online!</h2>
    </div>
    <form action="db_booking.php" method="POST" onsubmit="return false;">
        <div class="form-group">
            <input type="text" class="form-control form-control-lg py-3 text-center" id="dm-booking-destination" name="dm-booking-destination" placeholder="Where do you want to go?">
        </div>
        <div class="form-group row items-push mb-0">
            <div class="col-md-6">
                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                    <input type="text" class="form-control" id="dm-booking-checkin" name="dm-booking-checkin" placeholder="Check in" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                    <div class="input-group-prepend input-group-append">
                        <span class="input-group-text font-w600">
                            <i class="fa fa-fw fa-arrow-right"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="dm-booking-checkout" name="dm-booking-checkout" placeholder="Check out" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                </div>
            </div>
            <div class="col-md-2">
                <select class="custom-select" id="example-hosting-vps" name="example-hosting-vps">
                    <option value="0">People..</option>
                    <option value="1">On my own</option>
                    <option value="2">2 People</option>
                    <option value="3">3 People</option>
                    <option value="4">4 People</option>
                    <option value="5">5 People</option>
                    <option value="6">6 People</option>
                    <option value="7">7 People</option>
                    <option value="8">8 People</option>
                    <option value="9">9 People</option>
                    <option value="10">10+ People</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </div>
        </div>
    </form>
</div>
<!-- END Search -->

<!-- Travel Packages -->
<div class="bg-white">
    <div class="content">
        <div class="row">
            <div class="col-md-6 d-md-flex align-items-md-stretch">
                <a class="block block-transparent w-100 d-md-flex align-items-md-stretch bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo14.jpg');" href="javascript:void(0)" data-toggle="click-ripple">
                    <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-bottom">
                        <div class="ribbon-box">
                            from <span class="font-w700">$2199</span>
                        </div>
                        <div class="pt-4 pb-6 px-md-3">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <h3 class="h1 font-w700 text-white mb-1">Hong Kong</h3>
                            <h5 class="font-w400 text-body-color-light">3 Day Tour</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="block block-transparent bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo16.jpg');" href="javascript:void(0)" data-toggle="click-ripple">
                    <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-bottom bg-black-25">
                        <div class="ribbon-box">
                            from <span class="font-w700">$1999</span>
                        </div>
                        <div class="pt-4 pb-6 px-md-3">
                            <h3 class="h1 font-w700 text-white mb-1">Mountain</h3>
                            <h5 class="font-w400 text-body-color-light">Weekly Tour</h5>
                        </div>
                    </div>
                </a>
                <a class="block block-transparent bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo5.jpg');" href="javascript:void(0)" data-toggle="click-ripple">
                    <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-bottom">
                        <div class="ribbon-box">
                            from <span class="font-w700">$1599</span>
                        </div>
                        <div class="pt-4 pb-6 px-md-3">
                            <h3 class="h1 font-w700 text-white mb-1">Greece</h3>
                            <h5 class="font-w400 text-body-color-light">10 Days Package</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a class="block block-transparent bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo17.jpg');" href="javascript:void(0)" data-toggle="click-ripple">
                    <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-bottom">
                        <div class="ribbon-box">
                            from <span class="font-w700">$3999</span>
                        </div>
                        <div class="pt-4 pb-6 px-md-3">
                            <h3 class="h1 font-w700 text-white mb-1">Xtreme</h3>
                            <h5 class="font-w400 text-body-color-light">For nature enthusiasts</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a class="block block-transparent bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo1.jpg');" href="javascript:void(0)" data-toggle="click-ripple">
                    <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-bottom bg-black-25">
                        <div class="ribbon-box">
                            from <span class="font-w700">$899</span>
                        </div>
                        <div class="pt-4 pb-6 px-md-3">
                            <h3 class="h1 font-w700 text-white mb-1">Berlin</h3>
                            <h5 class="font-w400 text-body-color-light">5 Days Tour</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a class="block block-transparent bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo3.jpg');" href="javascript:void(0)" data-toggle="click-ripple">
                    <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-bottom bg-black-10">
                        <div class="ribbon-box">
                            from <span class="font-w700">$1249</span>
                        </div>
                        <div class="pt-4 pb-6 px-md-3">
                            <h3 class="h1 font-w700 text-white mb-1">Rome</h3>
                            <h5 class="font-w400 text-body-color-light">Romantic Getaway</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="block block-transparent bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo12.jpg');" href="javascript:void(0)" data-toggle="click-ripple">
                    <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-bottom bg-black-10">
                        <div class="ribbon-box">
                            from <span class="font-w700">$299</span>
                        </div>
                        <div class="pt-4 pb-6 px-md-3">
                            <h3 class="h1 font-w700 text-white mb-1">New York</h3>
                            <h5 class="font-w400 text-body-color-light">Night food tour</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a class="block block-transparent bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo7.jpg');" href="javascript:void(0)" data-toggle="click-ripple">
                    <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-bottom bg-black-50">
                        <div class="ribbon-box">
                            from <span class="font-w700">$499</span>
                        </div>
                        <div class="pt-4 pb-6 px-md-3">
                            <h3 class="h1 font-w700 text-white mb-1">Metsovo</h3>
                            <h5 class="font-w400 text-body-color-light">Inspiring break</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Travel Packages -->

<!-- My Bookings -->
<div class="bg-body-dark">
    <div class="content content-full">
        <div class="text-center py-3">
            <h2 class="h3 font-w700 mb-2">My Bookings</h2>
            <h3 class="h5 font-w400 text-muted">Manage and handle all your upcoming bookings</h3>
        </div>
        <div class="block block-rounded block-transparent bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo6.jpg');">
            <div class="block-content block-content-full bg-black-75">
                <div class="d-md-flex justify-content-md-between align-items-md-center">
                    <div class="p-3 p-md-4">
                        <h3 class="h4 font-w700 text-white mb-1">Greece Vacation</h3>
                        <p class="text-white-75 font-w600 mb-0">
                            7 nights - in 20 days
                        </p>
                    </div>
                    <div class="p-3 p-md-4">
                        <a class="btn btn-sm btn-alt-primary px-3 mr-1 my-1" href="javascript:void(0)">
                            Change
                        </a>
                        <a class="btn btn-sm btn-alt-danger px-3 my-1" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded block-transparent bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo12.jpg');">
            <div class="block-content block-content-full bg-black-75">
                <div class="d-md-flex justify-content-md-between align-items-md-center">
                    <div class="p-3 p-md-4">
                        <h3 class="h4 font-w700 text-white mb-1">City Food Tour</h3>
                        <p class="text-white-75 font-w600 mb-0">
                            3 hours - in 4 months
                        </p>
                    </div>
                    <div class="p-3 p-md-4">
                        <a class="btn btn-sm btn-alt-primary px-3 mr-1 my-1" href="javascript:void(0)">
                            Change
                        </a>
                        <a class="btn btn-sm btn-alt-danger px-3 my-1" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded block-transparent bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19.jpg');">
            <div class="block-content block-content-full bg-black-75">
                <div class="d-md-flex justify-content-md-between align-items-md-center">
                    <div class="p-3 p-md-4">
                        <h3 class="h4 font-w700 text-white mb-1">Mountain Escape</h3>
                        <p class="text-white-75 font-w600 mb-0">
                            3 nights - in 1 year
                        </p>
                    </div>
                    <div class="p-3 p-md-4">
                        <a class="btn btn-sm btn-alt-primary px-3 mr-1 my-1" href="javascript:void(0)">
                            Change
                        </a>
                        <a class="btn btn-sm btn-alt-danger px-3 my-1" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END My Bookings -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>

<!-- Page JS Helpers (BS Datepicker plugins) -->
<script>jQuery(function(){ Dashmix.helpers(['datepicker']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
