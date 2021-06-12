<?php
include('../../utils/conn.php');
$index = $_POST['index'] - 1;

$sql = "select * from news ORDER BY date DESC LIMIT " . ($index * 6) . ",6";
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