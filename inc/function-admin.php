<?php

/*

@package notalcresttheme
    ==============================================================
                            Admin Page
    ==============================================================

*/

function nelson_notal_crest_admin_page(){
    // create admin menu page ----------------page title, menu title, capability or the user level to access the page, menus slug, function, icon url, position
    add_menu_page('Notal Crest Theme Options', 'Notal Crest', 'manage_options', 'nelson_notal_crest', 'nelson_notal_crest_create_page','dashicons-admin-generic', '109');

    // create submenupage
    add_submenu_page('nelson_notal_crest','Notal Crest Theme Options', 'Settings', 'manage_options', 'nelson_notal_crest', 'nelson_notal_crest_create_page');

    // create submenupage
    add_submenu_page('nelson_notal_crest','Notal Crest CSS Options', 'Custom CSS', 'manage_options', 'nelson_notal_crest_css', 'nelson_notal_crest_css_page');

    // Activate Custom Settings
    add_action('admin_init', 'notal_crest_custom_settings');
}

add_action('admin_menu', 'nelson_notal_crest_admin_page');

function notal_crest_custom_settings(){
    register_setting('notal_crest_settings_group', 'first_name');
    add_settings_section('');
}


function nelson_notal_crest_create_page(){
// admin page generation
    require_once(get_template_directory().'/inc/template/notal_crest_admin.php');
}

function nelson_notal_crest_css_page(){
    
}