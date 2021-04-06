<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Welcome to forums</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="be_pages_forum_categories.php">Forum</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Categories -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Categories</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <!-- Intro Category -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th colspan="2">Introduction</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Topics</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Posts</th>
                        <th class="d-none d-md-table-cell" style="width: 180px;">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 65px;">
                            <i class="fa fa-check text-success fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Welcome</a>
                            <div class="text-muted mt-2 mb-1">Introduce yourself to our community</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 23, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-bell text-danger fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Announcements</a>
                            <div class="text-muted mt-2 mb-1">For all recent news</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 15, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-certificate text-warning fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Terms &amp; Conditions</a>
                            <div class="text-muted mt-2 mb-1">Please read and comply with our forum’s rules</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 21, 2018</em></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Intro Category -->

            <!-- Web App Category -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th colspan="2">Web App</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Topics</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Posts</th>
                        <th class="d-none d-md-table-cell" style="width: 180px;">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 65px;">
                            <i class="fa fa-burn text-xinspire fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Getting Started</a>
                            <div class="text-muted mt-2 mb-1">If you are a new user, here you will find everything you need</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">annasco</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 17, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-bolt text-xeco fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Tutorials</a>
                            <div class="text-muted mt-2 mb-1">The best place to learn new stuff</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">justinhunt</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 23, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-wrench text-xmodern fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Plugins</a>
                            <div class="text-muted mt-2 mb-1">Creating or looking for an existing plugin?</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">barbaga</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 22, 2018</em></span>
                        </td>
                    </tr>
                    <tr class="font-size-sm">
                        <td></td>
                        <td>
                            <span class="font-w600">Subforum:</span> <a class="font-w600" href="be_pages_forum_topics.php">How to build</a>
                            <div class="text-muted mt-1">Looking for info about creating your own plugin?</div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span>by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 22, 2018</em></span>
                        </td>
                    </tr>
                    <tr class="font-size-sm">
                        <td></td>
                        <td>
                            <span class="font-w600">Subforum:</span> <a class="font-w600" href="be_pages_forum_topics.php">Showcase</a>
                            <div class="text-muted mt-1">Did you create a plugin? Showcase it here</div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span>by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 22, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-cog text-info fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">API</a>
                            <div class="text-muted mt-2 mb-1">Take advantage of our powerful API</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">davidfu</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 17, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-flask text-xsmooth fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Extentions</a>
                            <div class="text-muted mt-2 mb-1">Extend our web application’s features</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">bettylee</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 13, 2018</em></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Web App Category -->

            <!-- Support Category -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th colspan="2">Support</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Topics</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Posts</th>
                        <th class="d-none d-md-table-cell" style="width: 180px;">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 65px;">
                            <i class="fa fa-question-circle text-xwork fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Questions</a>
                            <div class="text-muted mt-2 mb-1">Need assistance? Don’t worry, we are here to help</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">johnex</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 20, 2018</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-gamepad text-success fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Playground</a>
                            <div class="text-muted mt-2 mb-1">Discuss with other users</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">johnex</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $dm->get_name(); ?></a><br>on <em>June 24, 2018</em></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Support Category -->
        </div>
    </div>
    <!-- END Categories -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
