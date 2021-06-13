<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'zh') {
    echo '<script>location.href="be_pages_blog_grid-zh.php?id="+getQueryVariable("id");</script>';
}
?>
<link rel="stylesheet" href="/assets/css/plugins-min/plugins.min.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/style/style.css">
<script src="../../js/jquery-3.5.1.js"></script>

<?php
include('../../utils/conn.php');
$sql = "SELECT id,title,pre_image,date,excerpt FROM news";
$rst = mysqli_query($conn, $sql);
?>
<div id="head-fill"></div>
<?php include('../../template/header.php'); ?>
<!-- Hero -->
<div class="bg-image"
     style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo9@2x.jpg');">
    <div class="bg-black-50">
        <div class="content content-top content-full text-center">
            <h1 class="font-w700 text-white mt-5 mb-2 invisible" data-toggle="appear">
                Check out our latest stories
            </h1>
            <h3 class="font-w400 text-white-75 mb-5 invisible" data-toggle="appear" data-timeout="400">Be inspired
                and
                create something amazing today.</h3>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
    <div class="row row-deck" id="news-wrapper">
        <?php $sql = "select * from news ORDER BY date DESC LIMIT 0,6";
        $rst = mysqli_query($conn, $sql);

        while ($news = mysqli_fetch_assoc($rst)) { ?>

            <!-- Story -->
            <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                <a class="block block-rounded block-link-pop"
                   href="be_pages_blog_story.php?id=<?php echo $news['id']; ?>">
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
        <ul id="index-ul" class="pagination justify-content-center push">
            <li class="page-item active" data-index="1">
                <a class="page-link">1</a>
            </li>
            <?php
            $sql = "select COUNT('id') as num from news";
            $num = mysqli_fetch_assoc(mysqli_query($conn, $sql))['num'];
            if ($num % 6 == 0) {
                $num = $num / 6;
            } else {
                $num = $num / 6 + 1;
            }
            for ($i = 2;
                 $i <= $num;
                 $i++) { ?>
                <li class="page-item" data-index="<?php echo $i; ?>">
                    <a class="page-link"
                       href="javascript:void(0)"><?php echo $i; ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>
    <!-- END Pagination -->
</div>
<!-- END Page Content -->
<?php include('../../template/footer.html'); ?>

<script>
    // function get_news(index) {
    //     $.post(
    //         '../backend/news-index.php',
    //         {
    //             'index': index
    //         },
    //         function (data) {
    //             alert(data)
    //             alert(111)
    //             $('#news-wrapper').html(data);
    //         }
    //     )
    //     // $('#news-wrapper').html('<div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn"> <a class="block block-rounded block-link-pop" href="be_pages_blog_story.php?id=9"> <img class="img-fluid" src="/images/news/9/笑脸1413830.png" alt=""><div class="block-content"><h4 class="mb-1">asdasd</h4><p class="font-size-sm"> <span class="text-primary"></span>2021-06-12 09:06:45                </p> <p>sfd                </p> </div> </a> </div>')
    // }

    function index_active(index) {
        $('#index-ul').find('.page-item').removeClass('active');
        $('#index-ul').find('.page-item').eq(index - 1).addClass('active');
        // get_news(index);
    }

    function index_init() {
        $('.page-item').on('click', function () {
            let index = $(this).attr('data-index');
            index_active(index);
        })
        // get_news(1)
    }

    index_init()
</script>

<script src="/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="/assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="/assets/js/plugins.min.js"></script>
<script src="/assets/js/main.js"></script>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
