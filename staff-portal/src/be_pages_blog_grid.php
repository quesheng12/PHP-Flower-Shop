<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>

<link rel="stylesheet" href="/assets/css/plugins-min/plugins.min.css">
<link rel="stylesheet" href="/assets/css/style.min.css">
<link rel="stylesheet" href="/style/style.css">

<?php
include('../../utils/conn.php');
$sql = "SELECT id,title,pre_image,date,excerpt FROM news";
$rst = mysqli_query($conn, $sql);
?>

<?php include('../../template/header.html'); ?>
<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo9@2x.jpg');">
    <div class="bg-black-50">
        <div class="content content-top content-full text-center">
            <h1 class="font-w700 text-white mt-5 mb-2 invisible" data-toggle="appear">
                Check out our latest stories
            </h1>
            <h3 class="font-w400 text-white-75 mb-5 invisible" data-toggle="appear" data-timeout="400">Be inspired and
                create something amazing today.</h3>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
    <div class="row row-deck">

        <?php while ($news = mysqli_fetch_assoc($rst)) { ?>

            <!-- Story -->
            <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                <a class="block block-rounded block-link-pop" href="be_pages_blog_story.php">
                    <img class="img-fluid" src="<?php echo $news['pre_image']; ?>" alt="">
                    <div class="block-content">
                        <h4 class="mb-1"><?php echo $news['title']; ?></h4>
                        <p class="font-size-sm">
                            <span class="text-primary"></span>
                            <?php echo $news['date']; ?>
<!--                            March 30, 2019-->
                        </p>
                        <p>
                            <?php echo $news['excerpt']; ?>
                        </p>
                    </div>
                </a>
            </div>
            <!-- END Story -->

        <?php } ?>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center push">
            <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)">5</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                    <span aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- END Pagination -->
</div>
<!-- END Page Content -->
<?php include('../../template/footer.html'); ?>

<script src="/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="/assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="/assets/js/plugins.min.js"></script>
<script src="/assets/js/main.js"></script>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
