<?php
/*
Plugin Name: Tiger FB LiveChat
Description: Add Facebook LiveChat to your site.
Version: 1.0
Author: Hari Huynh (Tiger Studio)
*/

function enqueue_fb_livechat_scripts() {
    // Enqueue JavaScript
    wp_enqueue_script('fb-livechat', plugin_dir_url(__FILE__) . 'js/element.js?cb=googleTranslateElementInit', array(), null, true);

    // Enqueue CSS
    wp_enqueue_style('fb-livechat-style', plugin_dir_url(__FILE__) . 'css/fb-livechat.css');
}

add_action('wp_enqueue_scripts', 'enqueue_fb_livechat_scripts');

function add_fb_livechat_markup() {
    ?>
    <div class="fb-livechat pc">
        <div class="ctrlq fb-overlay"></div>
        <div class="fb-widget pc">
            <div class="ctrlq fb-close"></div>
            <div class="fb-page" data-href="https://www.facebook.com/lalamdesignstudio" data-tabs="messages"
                 data-width="360" data-height="400" data-small-header="true"
                 data-hide-cover="true" data-show-facepile="false"></div>
            <div class="fb-credit"><a href="https://lalamdesign.vn/" target="_blank" rel="sponsored">Wellcome to
                    LALAMDESIGN.VN</a></div>
            <div id="fb-root"></div>
        </div>
        <a href="https://m.me/lalamdesignstudio" title="Gửi tin nhắn cho chúng tôi qua Facebook"
           class="ctrlq fb-button pc">
            <div class="bubble">1</div>
            <div class="bubble-msg">Bạn cần Lalamdesign.vn tư vấn?</div>
        </a>
    </div>
    <script src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&amp;version=v2.9"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <?php
}

add_action('wp_footer', 'add_fb_livechat_markup');
