<?php

/**
 * Theme Customizer.
 *
 * @param mixed $input
 * @param mixed $setting
 */


// social media
function portfolio_social_media($wp_customize)
{
    // Settings
    $wp_customize->add_setting(
        'twitter',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw', // cleans URL from all invalid characters
            'transport' => 'refresh',
            'default' => '',
        )
    );

    $wp_customize->add_setting(
        'instagram',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
            'default' => '',
        )
    );

    $wp_customize->add_setting(
        'facebook',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
            'default' => '',
        )
    );

    $wp_customize->add_setting(
        'linkedin',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
            'default' => '',
        )
    );

    $wp_customize->add_setting(
        'github',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
            'default' => '',
        )
    );

    $wp_customize->add_setting(
        'youtube',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
            'default' => '',
        )
    );

    $wp_customize->add_setting(
        'show_social_media_handles',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'refresh',
            'default' => '',
        )
    );

    $wp_customize->add_setting(
        'tiktok',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw', // cleans URL from all invalid characters
            'transport' => 'refresh',
            'default' => '',
        )
    );

    $wp_customize->add_setting(
        'whatsapp',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw', // cleans URL from all invalid characters
            'transport' => 'refresh',
            'default' => '',
        )
    );

    // $wp_customize->add_setting('setting_id', array(
    //     'type' => 'theme_mod', // or 'option' not recommended for themes unless its a plugin
    //     'capability' => 'edit_theme_options',
    //     'theme_supports' => '', // Rarely needed.
    //     'default' => '',
    //     'transport' => 'refresh', // or postMessage
    //     'sanitize_callback' => '',
    //     'sanitize_js_callback' => '', // Basically to_json.
    // ));

    // Sections
    $wp_customize->add_section(
        'social-media',
        array(
            'title' => esc_html__('Social Media', '_s'),
            'priority' => 30,
            'description' => esc_html__('Enter the URL to your accounts for each social media for the icon to appear in the header.', '_s'),
        )
    );

    // Controls
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'show_social_media_handles',
            array(
                'label' => esc_html__('Display social media handles', '_s'),
                'section' => 'social-media',
                'settings' => 'show_social_media_handles',
                'type' => 'checkbox',
            )
        )
    );

    // Controls
    // Twitter
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'twitter',
            array(
                'label' => esc_html__('Twitter', '_s'),
                'section' => 'social-media',
                'settings' => 'twitter',
                'transport' => 'refresh',
                'type' => 'url',
            )
        )
    );
    // Instragram
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'instagram',
            array(
                'label' => esc_html__('Instagram', '_s'),
                'section' => 'social-media',
                'settings' => 'instagram',
                'type' => 'url',
            )
        )
    );
    // Facebook
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'facebook',
            array(
                'label' => esc_html__('Facebook', '_s'),
                'section' => 'social-media',
                'settings' => 'facebook',
                'type' => 'url',
            )
        )
    );
    // Linkedin
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'linkedin',
            array(
                'label' => esc_html__('Linkedin', '_s'),
                'section' => 'social-media',
                'settings' => 'linkedin',
                'type' => 'url',
            )
        )
    );
    // Github
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'github',
            array(
                'label' => esc_html__('Github', '_s'),
                'section' => 'social-media',
                'settings' => 'github',
                'type' => 'url',
            )
        )
    );
    // Youtube
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'youtube',
            array(
                'label' => esc_html__('YouTube', '_s'),
                'section' => 'social-media',
                'settings' => 'youtube',
                'type' => 'url',
            )
        )
    );

    // TikTok
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'tiktok',
            array(
                'label' => esc_html__('TikTok', '_s'),
                'section' => 'social-media',
                'settings' => 'tiktok',
                'type' => 'url',
            )
        )
    );

    // WhatsApp
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'whatsapp',
            array(
                'label' => esc_html__("What's App", '_s'),
                'section' => 'social-media',
                'settings' => 'whatsapp',
                'type' => 'url',
            )
        )
    );
}

add_action('customize_register', 'portfolio_social_media');
