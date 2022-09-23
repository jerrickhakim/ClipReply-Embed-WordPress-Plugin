<?php

if (!defined('ABSPATH')) exit; // EXIT



add_ux_builder_shortcode('clipreply_iframe', array(
    'name' => __('ClipReply IFrame', 'clipreply-embed'),
    'category' => __('ClipReply'),
    'thumbnail' =>  plugins_url('../assets/flow.png', __FILE__),
    'options' => array(
        'url' => array(
            'type' => 'textfield',
            'full_width' => true,
            'default' => 'https://clipreply.com/nFLVPMx5x1',
            'heading' => 'ClipReply URL',
            'description' => 'Enter in the url to your ClipReply Flow.',
        ),
        'height' => array(
            'type' => 'slider',
            'heading' => 'Height',
            'responsive' => true,
            'default' => 500,
            'unit' => 'px',
            'max' => 800,
            'min' => 300,
            'on_change' => array(
                'style' => 'height: {{ value }}px'
            ),
        ),
        'width' => array(
            'type' => 'slider',
            'heading' => 'Width',
            'responsive' => true,
            'default' => '100',
            'unit' => '%',
            'max' => '100',
            'min' => '0',
            'on_change' => array(
                'style' => 'width: {{ value }}%'
            ),
        ),


    ),
));


add_ux_builder_shortcode('clipreply_widget', array(
    'name' => __('ClipReply Widget', 'clipreply-embed'),
    'category' => __('ClipReply'),
    'thumbnail' =>  plugins_url('../assets/widget.png', __FILE__),
    'options' => array(
        'id' => array(
            'type' => 'textfield',
            'full_width' => true,
            'default' => 'nFLVPMx5x1',
            'heading' => 'ClipReply Flow ID',
            'description' => 'Enter in the id to your ClipReply Flow. Note this is not the URL.',
        ),
        'text' => array(
            'type' => 'textfield',
            'full_width' => true,
            'default' => "Let's Talk",
            'heading' => 'Trigger button text',
            'description' => 'Enter thr text your would like to appear on the call to action trigger',
        ),
        'color' => array(
            'type' => 'colorpicker',
            'heading' => __('Color'),
            'default' => '#FF1D22',
            'alpha' => true,
            'format' => 'hex',
            'position' => 'bottom right',
            'on_change' => array(
                'selector' => '.overlay',
                'style' => 'background-color: {{ value }}',
            ),
        ),

        'triggerStyle' => array(
            'type' => 'select',
            'heading' => 'Trigger Style',
            'default' => 'slim',
            'options' => ['slim' => 'slim', 'circle' => 'circle'],
        ),
        'position' => array(
            'type' => 'select',
            'heading' => 'Postion',
            'default' => 'bottom-right',
            'options' => ['bottom-right' => 'bottom-right', 'bottom-left' => 'bottom-left'],
        ),
        'disabled' => array(
            'type' => 'radio-buttons',
            'heading' => __('Disabled'),
            'default' => 'false',
            'options' => array(
                'false'  => array('title' => 'Off'),
                'true'  => array('title' => 'On'),
            ),
        ),
        'demolishOnDismiss' => array(
            'type' => 'radio-buttons',
            'heading' => __('Demolish on Dismiss'),
            'default' => 'false',
            'options' => array(
                'false'  => array('title' => 'Off'),
                'true'  => array('title' => 'On'),
            ),
        ),
        'demolishOnClose' => array(
            'type' => 'radio-buttons',
            'heading' => __('Demolish on Close'),
            'default' => 'false',
            'options' => array(
                'false'  => array('title' => 'Off'),
                'true'  => array('title' => 'On'),
            ),
        ),


    ),
));


add_ux_builder_shortcode('clipreply_video', array(
    'name' => __('ClipReply Video', 'clipreply-embed'),
    'category' => __('ClipReply'),
    'thumbnail' =>  plugins_url('../assets/video.png', __FILE__),
    'options' => array(
        'url' => array(
            'type' => 'textfield',
            'full_width' => true,
            'default' => 'https://clipreply.com/video/Ii3XN4vmw4CiXzqRHu2S/5n4y02a6HR',
            'heading' => 'ClipReply URL',
            'description' => 'Enter in the url to your ClipReply Video.',
        ),

        'primaryColor' => array(
            'type' => 'colorpicker',
            'heading' => __('Color'),
            'default' => '#FF1D22',
            'alpha' => true,
            'format' => 'hex',
            'position' => 'bottom right',
            'on_change' => array(
                'selector' => '.overlay',
                'style' => 'background-color: {{ value }}',
            ),
        ),

        'height' => array(
            'type' => 'slider',
            'vertical' => true,
            'heading' => 'Height',
            'default' => 500,
            'max' => 800,
            'min' => 300,
            'on_change' => array(
                'style' => 'height: {{ value }}px'
            ),

        ),

        'width' => array(
            'type' => 'slider',
            'heading' => 'Width',
            'responsive' => true,
            'default' => '100',
            'unit' => '%',
            'max' => '100',
            'min' => '0',
            'on_change' => array(
                'style' => 'width: {{ value }}%'
            ),
        ),

        'advanced_options' => array(
            'type' => 'group',
            'heading' => 'Advanced',
            'options' => array(
                'class' => array(
                    'type' => 'textfield',
                    'heading' => 'Class',
                    'param_name' => 'class',
                    'default' => '',
                ),
                'visibility'  => array(
                    'type' => 'select',
                    'heading' => 'Visibility',
                    'default' => '',
                    'options' => array(
                        ''   => 'Visible',
                        'hidden'  => 'Hidden',
                        'hide-for-medium'  => 'Only for Desktop',
                        'show-for-small'   =>  'Only for Mobile',
                        'show-for-medium hide-for-small' =>  'Only for Tablet',
                        'show-for-medium'   =>  'Hide for Desktop',
                        'hide-for-small'   =>  'Hide for Mobile',
                    ),
                ),
            ),
        ),




    ),
));
