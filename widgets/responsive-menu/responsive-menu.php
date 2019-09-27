<?php

/*
Widget Name: Ballistix: Responsive Menu
Description: Responsive Menu Widget by Ballistix
Author: Ballistix SPE
Author URI: https://ballistix.com
Widget URI: http://example.com/ballistix-responsive-menu-widget-docs,
Video URI: http://example.com/ballistix-responsive-menu-widget-video
*/

class BALLISTIX_RESPONSIVE_MENU_WIDGET extends SiteOrigin_Widget {

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'ballistix-responsive-menu-widget',

            // The name of the widget for display purposes.
            __('Ballistix: Responsive Menu', 'ballistix-responsive-menu-widget-text-domain'),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('A Responsive Menu Widget.', 'ballistix-responsive-menu-widget-text-domain'),
                'help'        => 'http://example.com/ballistix-responsive-menu-widget-docs',
            ),

            //The $control_options array, which is passed through to WP_Widget
            array(
            ),

            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
              'some_selection' => array(
                  'type' => 'select',
                  'label' => __( 'Select Menu', 'widget-form-fields-text-domain' ),
                  //'default' => 'the_other_thing',
                  'options' => $this->wp_get_menu_array()
              )
            ),

            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }

    function wp_get_menu_array() {
        
        $menus = get_terms('nav_menu');
        
        
        if($menus) {
            
            $result[0] = 'Select a menu';
            
            foreach($menus as $menu){
                
                $result[$menu->slug] =  $menu->name;
            
            }
        } else {
            
            $result['none'] = "Create a menu first";
        }
        
        return($result);

    }

    function initialize() {

        $this->register_frontend_scripts(
            array(
                array(
                    'ballistix-responsive-menu-widget',
                    plugin_dir_url(__FILE__) . 'js/responsive-menu.js',
                    array( ),
                    '0.0.2',
                    TRUE
                )
            )
        );

    }
    function get_template_name($instance) {
        return 'base';
    }

    function get_style_name($instance) {
        return 'default';
    }
}

siteorigin_widget_register('ballistix-responsive-menu-widget', __FILE__, 'BALLISTIX_RESPONSIVE_MENU_WIDGET');
