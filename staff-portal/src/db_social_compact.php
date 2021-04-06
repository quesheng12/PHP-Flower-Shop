<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/social_compact/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/highlightjs/styles/atom-one-light.css'); ?>
<?php $dm->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content content-full">
    <div class="row gutters-tiny">
        <div class="col-lg-3 d-none d-lg-block">
            <!-- User and Main Navigation -->
            <div class="block block-bordered block-rounded">
                <div class="block-content">
                    <div class="bg-body rounded p-2 mb-3 d-flex align-items-center">
                        <a class="img-link d-inline-block" href="javascript:void(0)">
                            <?php $dm->get_avatar(8, '', 48); ?>
                        </a>
                        <div class="ml-3">
                            <a class="font-w600" href="javascript:void(0)">Stella Smith</a>
                            <div class="font-size-sm font-italic text-muted">Developer</div>
                        </div>
                    </div>
                    <ul class="nav-main">
                        <?php $dm->build_nav(); ?>
                    </ul>
                </div>
            </div>
            <!-- END User and Main Navigation -->
        </div>
        <div class="col-md-8 col-lg-6">
            <!-- Post Update -->
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <form action="db_social_compact.php" method="POST" onsubmit="return false;">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-alt" placeholder="What’s happening?">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary border-0">
                                    <i class="fa fa-pencil-alt mr-1"></i> Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Post Update -->

            <!-- Timeline -->
            <!-- Update #1 -->
            <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <div>
                        <a class="img-link" href="javascript:void(0)">
                            <?php $dm->get_avatar(0, 'female', 32, true); ?>
                        </a>
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>
                        <span class="font-size-sm text-muted">3 hrs ago</span>
                    </div>
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-times-circle text-danger mr-1"></i> Hide similar posts
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-thumbs-down text-warning mr-1"></i> Stop following this user
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Report this post
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-bookmark mr-1"></i> Bookmark this post
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <p>
                        How to get started your HTML page:
                    </p>
                    <pre><code class="html">&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;

        &lt;title&gt;Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- Your content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                    <hr>
                    <ul class="nav nav-pills font-size-sm push">
                        <li class="nav-item mr-1">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-thumbs-up mr-1"></i> Like
                            </a>
                        </li>
                        <li class="nav-item mr-1">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-comment-alt mr-1"></i> Comment
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-share-alt mr-1"></i> Share
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <p class="font-size-sm">
                        <i class="fa fa-thumbs-up text-info"></i>
                        <i class="fa fa-heart text-danger"></i>
                        <i class="far fa-smile text-warning mr-1"></i>
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>,
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>,
                        <a class="font-w600" href="javascript:void(0)">and 150 others</a>
                    </p>
                    <form action="db_social_compact.php" method="POST" onsubmit="return false;">
                        <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
                    </form>
                    <div class="pt-3 font-size-sm">
                        <div class="media">
                            <a class="img-link mr-2" href="javascript:void(0)">
                                <?php $dm->get_avatar(0, 'female', 32, true); ?>
                            </a>
                            <div class="media-body">
                                <p class="mb-1">
                                    <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>
                                    Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
                                </p>
                                <p>
                                    <a href="javascript:void(0)" class="mr-1">Like</a>
                                    <a href="javascript:void(0)">Comment</a>
                                </p>
                                <div class="media">
                                    <a class="img-link mr-2" href="javascript:void(0)">
                                        <?php $dm->get_avatar(0, 'male', 32, true); ?>
                                    </a>
                                    <div class="media-body">
                                        <p class="mb-1">
                                            <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>
                                            Odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)" class="mr-1">Like</a>
                                            <a href="javascript:void(0)">Comment</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Update #1 -->

            <!-- Update #2 -->
            <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <div>
                        <a class="img-link" href="javascript:void(0)">
                            <?php $dm->get_avatar(0, 'male', 32, true); ?>
                        </a>
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>
                        <span class="font-size-sm text-muted">5 hrs ago</span>
                    </div>
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-times-circle text-danger mr-1"></i> Hide similar posts
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-thumbs-down text-warning mr-1"></i> Stop following this user
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Report this post
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-bookmark mr-1"></i> Bookmark this post
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text('small'); ?>
                    <hr>
                    <ul class="nav nav-pills font-size-sm push">
                        <li class="nav-item mr-1">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-thumbs-up mr-1"></i> Like
                            </a>
                        </li>
                        <li class="nav-item mr-1">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-comment-alt mr-1"></i> Comment
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-share-alt mr-1"></i> Share
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <p class="font-size-sm">
                        <i class="fa fa-heart text-danger"></i>
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>,
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>,
                        <a class="font-w600" href="javascript:void(0)">and 36 others</a>
                    </p>
                    <form action="db_social_compact.php" method="POST" onsubmit="return false;">
                        <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
                    </form>
                </div>
            </div>
            <!-- END Update #2 -->

            <!-- Update #3 -->
            <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <div>
                        <a class="img-link" href="javascript:void(0)">
                            <?php $dm->get_avatar(0, 'female', 32, true); ?>
                        </a>
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>
                        <span class="font-size-sm text-muted">8 hrs ago</span>
                    </div>
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-times-circle text-danger mr-1"></i> Hide similar posts
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-thumbs-down text-warning mr-1"></i> Stop following this user
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Report this post
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-bookmark mr-1"></i> Bookmark this post
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <p>
                        Our city escape continues..
                    </p>
                    <div class="row gutters-tiny js-gallery img-fluid-100">
                        <!-- Magnific Popup (.js-gallery class is initialized in Helpers.magnific()) -->
                        <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                        <?php for ($i = 11; $i < 14; $i++) { ?>
                        <div class="col-4">
                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
                                <?php $dm->get_photo($i, false, 'img-fluid'); ?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <hr>
                    <ul class="nav nav-pills font-size-sm push">
                        <li class="nav-item mr-1">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-thumbs-up mr-1"></i> Like
                            </a>
                        </li>
                        <li class="nav-item mr-1">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-comment-alt mr-1"></i> Comment
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-share-alt mr-1"></i> Share
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <p class="font-size-sm">
                        <i class="fa fa-thumbs-up text-info"></i>
                        <i class="fa fa-heart text-danger"></i>
                        <i class="far fa-smile text-warning mr-1"></i>
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>,
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>,
                        <a class="font-w600" href="javascript:void(0)">and 43 others</a>
                    </p>
                    <form action="db_social_compact.php" method="POST" onsubmit="return false;">
                        <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
                    </form>
                </div>
            </div>
            <!-- END Update #3 -->

            <!-- Update #4 -->
            <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <div>
                        <a class="img-link" href="javascript:void(0)">
                            <?php $dm->get_avatar(0, 'female', 32, true); ?>
                        </a>
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>
                        <span class="font-size-sm text-muted">15 hrs ago</span>
                    </div>
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-times-circle text-danger mr-1"></i> Hide similar posts
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-thumbs-down text-warning mr-1"></i> Stop following this user
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Report this post
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-bookmark mr-1"></i> Bookmark this post
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <?php $dm->get_text('small', 2); ?>
                    <hr>
                    <ul class="nav nav-pills font-size-sm push">
                        <li class="nav-item mr-1">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-thumbs-up mr-1"></i> Like
                            </a>
                        </li>
                        <li class="nav-item mr-1">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-comment-alt mr-1"></i> Comment
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-share-alt mr-1"></i> Share
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <p class="font-size-sm">
                        <i class="fa fa-thumbs-up text-info"></i>
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>,
                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>,
                        <a class="font-w600" href="javascript:void(0)">and 5 others</a>
                    </p>
                    <form action="db_social_compact.php" method="POST" onsubmit="return false;">
                        <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
                    </form>
                </div>
            </div>
            <!-- END Update #4 -->
            <!-- END Timeline -->
        </div>
        <div class="col-md-4 col-lg-3">
            <!-- Group Suggestions -->
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="row gutters-tiny mb-2">
                        <div class="col-6">
                            <?php echo $dm->get_photo(18, false, 'img-fluid'); ?>
                        </div>
                        <div class="col-6">
                            <?php echo $dm->get_photo(16, false, 'img-fluid'); ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <a class="font-w600" href="javascript:void(0)">Hiking</a>
                            <div class="font-size-sm text-muted">68k Members</div>
                        </div>
                        <a class="btn btn-sm btn-alt-success d-inline-block" href="javascript:void(0)">
                            <i class="fa fa-fw fa-plus-circle text-success"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="row gutters-tiny mb-2">
                        <div class="col-6">
                            <?php echo $dm->get_photo(12, false, 'img-fluid'); ?>
                        </div>
                        <div class="col-6">
                            <?php echo $dm->get_photo(13, false, 'img-fluid'); ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <a class="font-w600" href="javascript:void(0)">Travel Photos</a>
                            <div class="font-size-sm text-muted">65k Members</div>
                        </div>
                        <a class="btn btn-sm btn-alt-success d-inline-block" href="javascript:void(0)">
                            <i class="fa fa-fw fa-plus text-success"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="row gutters-tiny mb-2">
                        <div class="col-6">
                            <?php echo $dm->get_photo(22, false, 'img-fluid'); ?>
                        </div>
                        <div class="col-6">
                            <?php echo $dm->get_photo(23, false, 'img-fluid'); ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <a class="font-w600" href="javascript:void(0)">Coding Frenzy</a>
                            <div class="font-size-sm text-muted">109k Members</div>
                        </div>
                        <a class="btn btn-sm btn-alt-success d-inline-block" href="javascript:void(0)">
                            <i class="fa fa-fw fa-plus-circle text-success"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="row gutters-tiny mb-2">
                        <div class="col-6">
                            <?php echo $dm->get_photo(9, false, 'img-fluid'); ?>
                        </div>
                        <div class="col-6">
                            <?php echo $dm->get_photo(6, false, 'img-fluid'); ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <a class="font-w600" href="javascript:void(0)">Nature Lovers</a>
                            <div class="font-size-sm text-muted">32k Members</div>
                        </div>
                        <a class="btn btn-sm btn-alt-success d-inline-block" href="javascript:void(0)">
                            <i class="fa fa-fw fa-plus-circle text-success"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Group Suggestions -->
        </div>
    </div>

    <!-- Pinned Chat Block -->
    <!-- Chat functionality is initialized in js/pages/be_comp_chat.min.js which was auto compiled from _js/pages/be_comp_chat.js -->
    <!--
        You can use the following JS function to add a header message to a chat window:
        Chat.addHeader(chatId, chatMsg, chatMsgLevel)

        chatId         : the data-chat-id attribute of the chat window
        chatMsg        : the header message you would like to add
        chatMsgLevel   : 'self' aligns the header to the right (default is left)

        You can use the following JS function to add a message to a chat window:
        Chat.addMessage(chatId, chatMsg, chatMsgLevel)

        chatId         : the data-chat-id attribute of the chat window
        chatMsg        : the message you would like to add
        chatMsgLevel   : 'self' the user sends the message (default is when the user receives the message)
    -->
    <div class="block block-mode-pinned">
        <!-- Chat #4 Header -->
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <?php $dm->get_avatar(7, false, 32); ?>
                <span class="font-size-sm font-w600 ml-2">Lisa Smith</span>
            </h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                    <i class="si si-close"></i>
                </button>
            </div>
        </div>
        <!-- END Chat #4 Header -->

        <!-- Chat #4 Messages -->
        <div class="js-chat-messages block-content block-content-full text-wrap-break-word overflow-y-auto" data-chat-id="4" style="height: 300px;"></div>

        <!-- Chat #4 Input -->
        <div class="js-chat-form block-content p-2 bg-body-light">
            <form action="db_social_compact.php" method="POST">
                <input type="text" class="js-chat-input form-control form-control-alt" data-target-chat-id="4" placeholder="Type a message..">
            </form>
        </div>
        <!-- END Chat #4 Input -->
    </div>
    <!-- END Pinned Chat Block -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/highlightjs/highlight.pack.min.js'); ?>
<?php $dm->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Highlight.js + Magnific Popup Plugins) -->
<script>jQuery(function(){ Dashmix.helpers(['highlightjs', 'magnific-popup']); });</script>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_chat.min.js'); ?>
<script>
    jQuery(function(){
        // Add demonstration headers and messages for Chat #4
        Chat.addHeader(4, 'Yesterday');
        Chat.addMessage(4, 'Hi there!');
        Chat.addHeader(4, 'Today', 'self');
        Chat.addMessage(4, 'Hey, how are you?', 'self');
    });
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
