<?php

/*
Widget Name: Ballistix: Modal
Description: Modal Widget by Ballistix
Author: Ballistix SPE
Author URI: https://ballistix.com
Widget URI: http://example.com/ballistix-modal-widget-docs,
Video URI: http://example.com/ballistix-modal-widget-video
*/

class BALLISTIX_MODAL_WIDGET extends SiteOrigin_Widget {

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'ballistix-modal-widget',

            // The name of the widget for display purposes.
            __('Ballistix: Modal', 'ballistix-modal-widget-text-domain'),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('A fancybox widget.', 'ballistix-modal-widget-text-domain'),
                'help'        => 'http://example.com/ballistix-modal-widget-docs',
            ),

            //The $control_options array, which is passed through to WP_Widget
            array(
            ),

            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'title' => array(
                    'type' => 'text',
                    'label' => __( 'Title.', 'widget-form-fields-text-domain' )
                ),
                'modal_type'    => array(
                    'type'    => 'radio',
                    'default' => 'image_gallery',
                    'label'   => __( 'Modal Type', 'siteorigin-widgets' ),
                    'state_emitter' => array(
                        'callback' => 'select',
                        'args' => array( 'modal_type' )
                    ),
                    'options' => array(
                        'image_gallery' => __( 'Image Gallery', 'siteorigin-widgets' ),
                        'video_media'      => __( 'Video URL', 'siteorigin-widgets' ),
                        'inline_content'      => __( 'Inline Content', 'siteorigin-widgets' ),
                    )
                ),
                'video_media' => array(
                    'type' => 'link',
                    'label' => __('Some URL goes here', 'widget-form-fields-text-domain'),
                    'default' => 'http://www.example.com',
                    'state_handler' => array(
                        'modal_type[inline_content]' => array('hide'),
                        'modal_type[video_media]' => array('show'),
                        'modal_type[image_gallery]' => array('hide')
                    ),
                ),
                'inline_content' => array(
                    'type' => 'tinymce',
                    'label' => __( 'Visually edit, richly.', 'widget-form-fields-text-domain' ),
                    'default' => 'An example of a long message.</br>It is even possible to add a few html tags.</br><a href="siteorigin.com" target="_blank"">Links!</a>',
                    'rows' => 10,
                    'default_editor' => 'html',
                    'button_filters' => array(
                        'mce_buttons' => array( $this, 'filter_mce_buttons' ),
                        'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
                        'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
                        'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
                        'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
                    ),
                    'state_handler' => array(
                        'modal_type[inline_content]' => array('show'),
                        'modal_type[video_media]' => array('hide'),
                        'modal_type[image_gallery]' => array('hide')
                    ),
                ),
                'image_gallery' => array(
                    'type' => 'repeater',
                    'label' => __( 'A repeating repeater.' , 'widget-form-fields-text-domain' ),
                    'item_name'  => __( 'Repeater item', 'siteorigin-widgets' ),
                    'state_handler' => array(
                        'modal_type[inline_content]' => array('hide'),
                        'modal_type[video_media]' => array('hide'),
                        'modal_type[image_gallery]' => array('show')
                    ),
                    'fields' => array(
                        'repeat_text' => array(
                            'type' => 'text',
                            'label' => __( 'A text field in a repeater item.', 'widget-form-fields-text-domain' )
                        ),
                        'repeat_checkbox' => array(
                            'type' => 'checkbox',
                            'label' => __( 'A checkbox in a repeater item.', 'widget-form-fields-text-domain' )
                        )
                    )
                )

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

siteorigin_widget_register('ballistix-modal-widget', __FILE__, 'BALLISTIX_MODAL_WIDGET');
