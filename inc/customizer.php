<?php
add_action('customize_register' , 'all_customize_setting');
function all_customize_setting($wp_customize){
    // Copyright Text 
    $wp_customize->add_section('hotel_copyright_text_section' , array(
        'title' => __('Copyright Text Change' , 'rijon'),
        'description' => 'Change Your Copyright Text Change Here',
    ));
    $wp_customize->add_setting('hotel_copyright_text_setting' , array(
        'default' => 'Copyright &copy; 2023 || Powered By Rijon Ahmed',
    ));
    $wp_customize->add_control('hotel_copyright_text_setting' , array(
        'label' => __('Copyright Text Change' , 'rijon'),
        'description' => 'Change Your Copyright Text Here',
        'section' => 'hotel_copyright_text_section',
        'setting' => 'hotel_copyright_text_setting',
    ));


}