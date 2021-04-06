<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Explore a category</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="be_pages_forum_categories.php">Forum</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Topics</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Topics -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Topics</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option mr-2">
                    <i class="fa fa-plus mr-1"></i> New Topic
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <!-- Topics -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th colspan="2">Welcome</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 100px;">Replies</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 100px;">Views</th>
                        <th class="d-none d-md-table-cell" style="width: 200px;">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 40px;">
                            <i class="fa fa-thumbtack text-xwork"></i>
                        </td>
                        <td>
                            <a class="font-w600" href="be_pages_forum_discussion.php">Welcome to our forums!</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>June 20, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 21, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">
                            <i class="fa fa-thumbtack text-xwork"></i>
                        </td>
                        <td>
                            <a class="font-w600" href="be_pages_forum_discussion.php">Big upgrades are coming soon!</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>June 25, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 18, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 40px;">
                            <i class="fa fa-thumbtack text-xwork"></i>
                        </td>
                        <td>
                            <a class="font-w600" href="be_pages_forum_discussion.php">Tips &amp; tricks for staying motivated</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>June 15, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 13, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a class="font-w600" href="be_pages_forum_discussion.php">2018, all the new features!</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>June 21, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 13, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a class="font-w600" href="be_pages_forum_discussion.php">Issue when saving a file, can you help me?</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>May 26, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 2, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a class="font-w600" href="be_pages_forum_discussion.php">New Features!</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>June 29, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 2, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a class="font-w600" href="be_pages_forum_discussion.php">Question about the new features!</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>June 28, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 1, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a class="font-w600" href="be_pages_forum_discussion.php">Which plan to choose?</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>March 12, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 1, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a class="font-w600" href="be_pages_forum_discussion.php">Your web app saved me tons of time</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>June 23, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 12, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a class="font-w600" href="be_pages_forum_discussion.php">Is it easy to upgrade my plan?</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>May 10, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 6, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a class="font-w600" href="be_pages_forum_discussion.php">Check out all those tips &amp; tricks!</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>May 5, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 5, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a class="font-w600" href="be_pages_forum_discussion.php">Review needed</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>May 3, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 4, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a class="font-w600" href="be_pages_forum_discussion.php">Testing out the API</a>
                            <div class="font-size-sm text-muted mt-1">
                                <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a> on <em>April 25, 2018</em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 300); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 3000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 4, 2018</em></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Topics -->

            <!-- Pagination -->
            <nav aria-label="Topics navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-left"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
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
    </div>
    <!-- END Topics -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
