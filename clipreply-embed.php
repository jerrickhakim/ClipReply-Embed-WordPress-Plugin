<?php
/*
Plugin Name: ClipReply Embed
Plugin URI: https://clipreply.com
Description: Embed your ClipReply Flows and videos on WordPress using shortcodes.
Version: 1.0.0
Author: ClipReply
Author URI: http://clipreply.com
Text Domain: clipreply-embed
Network: true
*/


/**
 * Exit if accessed directly
 */

if (!defined('ABSPATH')) exit; // EXIT

// Define plugin path
define('CLIPREPLY_EMBED_PATH', plugin_dir_path(__FILE__));


class ClipReplyEmbed
{


    public function __construct()
    {

        add_shortcode('clipreply_iframe', [$this, "iframe_shortcode"]);
        add_shortcode('clipreply_widget', [$this, "widget_shortcode"]);
        add_shortcode('clipreply_video', [$this, "clipreply_video"]);
    }


    /**
     * iframe_shortcode shortcode
     */

    public function iframe_shortcode($atts)
    {


        $atts = shortcode_atts(
            array(
                'url'      => 'https://clipreply.com/nFLVPMx5x1',
                'height'      => '500',
                'width'      => '100',
            ),
            $atts
        );


        ob_start();

        require(CLIPREPLY_EMBED_PATH . 'public-html/iframe-embed.php');

        $output = ob_get_clean();

        return $output;
    }


    /**
     * widget_shortcode shortcode
     */

    public function widget_shortcode($atts)
    {


        $atts = shortcode_atts(
            array(
                'id'                => 'nFLVPMx5x1',
                'text'              => "Let's Talk",
                'color'             => '#FF1D22',
                'triggerStyle'      => 'slim',
                'position'          => 'bottom-right',
                'disabled'          => false,
                'demolishOnDismiss' => false,
                'demolishOnClose'   => false,
            ),
            $atts
        );


        ob_start();

        require(CLIPREPLY_EMBED_PATH . 'public-html/widget-embed.php');

        $output = ob_get_clean();

        return $output;
    }

    /**
     * clipreply_video shortcode
     */

    public function clipreply_video($atts)
    {


        $atts = shortcode_atts(
            array(
                'url'               => 'https://clipreply.com/video/Ii3XN4vmw4CiXzqRHu2S/5n4y02a6HR',
                'primaryColor'      => '#FF1D22',
                'height'            => '500px',
                'width'             => '100%',
                'visibility'        => "",
                'class'             => "",

            ),
            $atts
        );


        ob_start();

        require(CLIPREPLY_EMBED_PATH . 'public-html/video-embed.php');

        $output = ob_get_clean();

        return $output;
    }
}


new ClipReplyEmbed();


/**
 * Flatsome Integration
 */

$theme = wp_get_theme(); // gets the current theme
if ('Flatsome' == $theme->name || 'Flatsome' == $theme->parent_theme) {

    add_action(
        'ux_builder_setup',
        function () {

            require_once CLIPREPLY_EMBED_PATH . 'integrations/flatsome.php';
        }
    );
}
