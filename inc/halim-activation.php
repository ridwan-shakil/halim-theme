<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';



function halim_register_required_plugins()
{

    $plugins = array(

        // This is an example of how to include a plugin bundled with a theme.
        array(
            'name'               => 'Contact Form 7', // The plugin name.
            'slug'               => 'contact-form-7', // The plugin slug (typically the folder name).
            // 'source'             => get_template_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),

        array(
            'name'      => 'Advanced Custom Fields: Font Awesome',
            'slug'      => 'advanced-custom-fields-font-awesome',
            'required'  => true,
        ),
        // premium plugin and custom plugin loading from local 
        array(
            'name'         => 'Advanced Custom Fields PRO', // The plugin name.
            'slug'         => 'advanced-custom-fields-pro',
            'source'       =>  get_template_directory() . '/plugins/advanced-custom-fields-pro.zip',
            'required'     => true,

        ),
        array(
            'name'      => 'Halim Custom Post Type',
            'slug'      => 'halim-cpt',
            'source'      => get_template_directory() . '/plugins/halim-cpt.zip',
            'required'  => true,
        ),
        array(
            'name'      => 'Gutenberg Template and Pattern Library & Redux Framework',
            'slug'      => 'redux-framework',
            'required'  => true,
        ),
        // demo data importer plugin 
        array(
            'name'      => 'One Click Demo Import',
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ),
        // widget importer & exporter plugin 
        array(
            'name'      => 'Widget Importer & Exporter',
            'slug'      => 'widget-importer-exporter',
            'required'  => true,
        ),


    );

    $config = array(
        'id'           => 'halim',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.


    );



    tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'halim_register_required_plugins');
