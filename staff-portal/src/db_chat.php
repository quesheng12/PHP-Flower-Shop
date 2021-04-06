<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/chat/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
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
<div class="block hero flex-column mb-0 bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19@2x.jpg');">
    <!-- Chat #5 Header -->
    <div class="block-header block-header-default w-100 bg-white-95 shadow-lg" style="min-height: 70px; height: 70px;">
        <h3 class="block-title">
            <?php $dm->get_avatar(7, false, 32); ?>
            <span class="font-size-sm font-w600 ml-2">Lisa Smith</span>
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option">
                <i class="fa fa-cog"></i>
            </button>
            <button type="button" class="btn-block-option d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-users"></i>
            </button>
        </div>
    </div>
    <!-- END Chat #5 Header -->

    <!-- Chat #5 Messages -->
    <div class="js-chat-messages block-content block-content-full text-wrap-break-word overflow-y-auto w-100 flex-grow-1 px-lg-8 px-xlg-10 bg-white-90" data-chat-id="5"></div>

    <!-- Chat #5 Input -->
    <div class="js-chat-form block-content p-3 w-100 d-flex align-items-center bg-white-95 shadow-lg" style="min-height: 70px; height: 70px;">
        <form class="w-100" action="db_chat.php" method="POST">
            <div class="input-group">
                <div class="input-group-prepend d-sm-none dropup">
                    <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-plus"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-file-alt fa-fw mr-1"></i> Upload File
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-image fa-fw mr-1"></i> Upload Image
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-microphone-alt fa-fw mr-1"></i> Record Audio
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-smile fa-fw mr-1"></i> Add Stickers
                        </a>
                    </div>
                </div>
                <div class="input-group-prepend d-none d-sm-flex">
                    <button type="button" class="btn btn-link">
                        <i class="fa fa-file-alt"></i>
                    </button>
                    <button type="button" class="btn btn-link">
                        <i class="fa fa-image"></i>
                    </button>
                    <button type="button" class="btn btn-link">
                        <i class="fa fa-microphone-alt"></i>
                    </button>
                    <button type="button" class="btn btn-link">
                        <i class="fa fa-smile"></i>
                    </button>
                </div>
                <input type="text" class="js-chat-input form-control form-control-alt border-0 bg-transparent" data-target-chat-id="5" placeholder="Type a message..">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-link">
                        <i class="fab fa-telegram-plane"></i>
                        <span class="d-none d-sm-inline ml-1 font-w600">Send</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- END Chat #5 Input -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/be_comp_chat.min.js'); ?>
<script>
    jQuery(function(){
        // Add demonstration headers and messages for Chat #5
        Chat.addHeader(5, 'Yesterday');
        Chat.addMessage(5, 'Hi there!');
        Chat.addMessage(5, 'How are you? I wanted to talk about the new project. Feel free to ping me when you find some time, thanks!');
        Chat.addHeader(5, 'Just Now', 'self');
        Chat.addMessage(5, 'Hey Lisa, I’m currently available!', 'self');
        Chat.addMessage(5, 'Let me know about the progress you’ve made, so we can move forward!', 'self');
        Chat.addMessage(5, 'Moreover, please be sure to let Nick know about it!', 'self');
    });
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
