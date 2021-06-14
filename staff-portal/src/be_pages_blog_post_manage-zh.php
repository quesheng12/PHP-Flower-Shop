<?php
//staff登陆检测
require '../../utils/check-staff-login.php';
?>
<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<?php
session_start();
if (isset($_SESSION['language']) && $_SESSION['language'] == 'en') {
echo '<script>location.href="be_pages_blog_post_manage.php";</script>';
}
?>
<link href="../../plugins/tanchuang/css/xtiper.css" type="text/css" rel="stylesheet"/>
<script src="../../plugins/tanchuang/js/xtiper.min.js" type="text/javascript"></script>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">管理所有Post</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">页面</li>
                    <li class="breadcrumb-item">博客</li>
                    <li class="breadcrumb-item active" aria-current="page">管理</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
    <!-- Posts Statistics -->
    <div class="row text-center">
        <div class="col-6 col-xl-6">
            <!-- All Posts -->
            <a class="block block-rounded" href="be_pages_blog_post_manage.php">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="far fa-2x fa-file-alt opacity-50"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            3
                        </p>
                        <p class="text-muted mb-0">
                            所有Post
                        </p>
                    </div>
                </div>
            </a>
            <!-- END All Posts -->
        </div>
        <div class="col-6 col-xl-6">
            <!-- New Post -->
            <a class="block block-rounded" href="be_pages_blog_post_add.php">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="fa fa-2x fa-plus text-success-light"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            <i class="fa fa-plus text-success-light mr-1 d-md-none"></i> 新的Post
                        </p>
                        <p class="text-muted mb-0">
                            创建新闻
                        </p>
                    </div>
                </div>
            </a>
            <!-- END New Post -->
        </div>
    </div>
    <!-- Post Statistics -->

    <!-- Posts -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Posts (150)</h3>
        </div>
        <div class="block-content">
            <!-- Search Posts -->
            <form class="push" action="be_pages_blog_post_manage.php" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Posts..">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
            <!-- END Search Posts -->

            <?php
            include('../../utils/conn.php');
            $sql = "SELECT id,title,date FROM news ORDER BY date DESC";
            $rst = mysqli_query($conn, $sql);
            ?>
            <!-- Posts Table -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 33%;">标题</th>
                    <th class="d-none d-xl-table-cell">创建</th>
                    <th style="width: 100px;" class="text-center">行动</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($news = mysqli_fetch_assoc($rst)) { ?>
                    <tr>
                        <td>
                            <?php echo $news['id']; ?>
                        </td>
                        <td>
                            <a href="be_pages_blog_story.php">
                                <?php echo $news['title']; ?>
                            </a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <?php echo $news['date']; ?>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light"
                               href="be_pages_blog_post_edit.php?id=<?php echo $news['id']; ?>">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)"
                               onclick="deleteNews(<?php echo $news['id']; ?>)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <!-- END Posts Table -->

            <!-- Posts Pagincation -->
            <nav aria-label="Posts Navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-double-left"></i>
                            </span>
                            <span class="sr-only">之前</span>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <!--       <li class="page-item">
                               <a class="page-link" href="javascript:void(0)">2</a>
                           </li>
                           <li class="page-item">
                               <a class="page-link" href="javascript:void(0)">3</a>
                           </li>
                           <li class="page-item">
                               <a class="page-link" href="javascript:void(0)">4</a>
                           </li>-->
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-double-right"></i>
                            </span>
                            <span class="sr-only">之后</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END Posts Pagincation -->
        </div>
    </div>
    <!-- END Posts -->
</div>
<!-- END Page Content -->
<script>
    function deleteNews(id) {
        xtip.confirm('Conform Delete News? id=' + id, function () {
            $.post('../backend/news-delete.php',
                {'id': id},
                function () {
                    xtip.alert('成功', 's');
                })
        });
    }
</script>
<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
