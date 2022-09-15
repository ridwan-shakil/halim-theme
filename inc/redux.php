<?php
if (!class_exists('Redux')) {
    return;
}

$opt_name = 'redux_demo';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'display_name'         => $theme->get('Name'),
    'display_version'      => $theme->get('Version'),
    'menu_title'           => esc_html__('Sample Options', 'halim'),
    'customizer'           => true,
);

Redux::setArgs($opt_name, $args);

Redux::setSection($opt_name, array(
    'title'  => esc_html__('Basic Field', 'halim'),
    'id'     => 'basic',
    'desc'   => esc_html__('Basic field with no subsections.', 'halim'),
    'icon'   => 'el el-home',
    'fields' => array(
        array(
            'id'       => 'opt-text',
            'type'     => 'text',
            'autocomplete' => true,
            'title'    => esc_html__('Title', 'halim'),
            'desc'     => esc_html__('Title.', 'halim'),
            'subtitle' => esc_html__('Example subtitle.', 'halim'),
            'hint'     => array(
                'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
            )
        ),
        array(
            'id'       => 'opt-textarea',
            'type'     => 'textarea',
            'title'    => esc_html__('Description', 'halim'),
            'desc'     => esc_html__('Example description.', 'halim'),
            'subtitle' => esc_html__('Example description.', 'halim'),

        )
    )
));

Redux::setSection($opt_name, array(
    'title'  => esc_html__('Gallery Page', 'halim'),
    'id'     => 'Gallery',
    'desc'   => esc_html__('Gallery page with no subsections.', 'halim'),
    'icon'   => 'el el-home',
    'fields' => array(
        array(
            'id'       => 'opt-gallery',
            'type'     => 'gallery',
            'title'    => esc_html__('Add/Edit Gallery', 'halim'),
            'subtitle' => esc_html__('Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'halim'),
            'desc'     => esc_html__('This is the description field, again good for additional info.', 'halim'),
        ),

    )
));
