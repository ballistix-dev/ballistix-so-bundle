<?php

/*
Widget Name: Ballistix: Fancybox
Description: Fancybox Widget by Ballistix
Author: Ballistix SPE
Author URI: https://ballistix.com
Widget URI: http://example.com/ballistix-fancybox-widget-docs,
Video URI: http://example.com/ballistix-fancybox-widget-video
*/

class BALLISTIX_FANCYBOX_WIDGET extends SiteOrigin_Widget {

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'ballistix-fancybox-widget',

            // The name of the widget for display purposes.
            __('Ballistix: Fancybox', 'ballistix-fancybox-widget-text-domain'),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('A fancybox widget.', 'ballistix-fancybox-widget-text-domain'),
                'help'        => 'http://example.com/ballistix-fancybox-widget-docs',
            ),

            //The $control_options array, which is passed through to WP_Widget
            array(
            ),

            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(

            ),

            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }

    function initialize() {

        $this->register_frontend_scripts(
            array(
                array(
                    'fancybox',
                    'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js',
                    array('jquery'),
                    '3.5.7',
                    TRUE
                )
            )
        );

        $this->register_frontend_scripts(
            array(
                array(
                    'ballistix-fancybox-widget',
                    plugin_dir_url(__FILE__) . 'js/fancybox.js',
                    array('jquery', 'fancybox'),
                    '0.0.2',
                    TRUE
                )
            )
        );

        $this->register_frontend_styles(
            array(
                array(
                    'fancybox',
                    'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css',
                    array( ),
                    '3.5.7',
                )
            )
        );

    }
    function get_template_name($instance) {
        return 'base';
    }

    function get_style_name($instance) {
        return '';
    }
}

siteorigin_widget_register('ballistix-fancybox-widget', __FILE__, 'BALLISTIX_FANCYBOX_WIDGET');
