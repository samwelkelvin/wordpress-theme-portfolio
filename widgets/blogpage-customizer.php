<?php

// blog page layout settings

function portfolio_show_sidebar($wp_customize)
{
    $wp_customize->add_setting('show_sidebar_in_blog_pages', array('default' => '', 'sanitize_callback' => 'sanitize_text_field'));

    // Controls
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'show_sidebar_in_blog_pages',
            array(
                'label' => esc_html__('Display Sidebar in blog pages', '_s'),
                'section' => 'blog-layout',
                'settings' => 'show_sidebar_in_blog_pages',
                'type' => 'checkbox',
            )
        )
    );
}

function portfolio_sidebar_position($wp_customize)
{
    $wp_customize->add_setting(
        'blog_pages_sidebar',
        array(
            'default' => 'right_sidebar', 
            'transport' => 'refresh', 
            'sanitize_callback' => 'theme_slug_sanitize_select'
            )
    );

    // Blog pages sidebar
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'blog_pages_sidebar',
            array(
                'label' => esc_html__('Blog Pages Sidebar location', '_s'),
                'section' => 'blog-layout',
                'settings' => 'blog_pages_sidebar',
                'type' => 'select',
                'choices' => array(
                    'left_sidebar' => esc_html__('Sidebar on the left side.', '_s'),
                    'right_sidebar' => esc_html__('Sidebar on the right side.', '_s'),
                ),
            )
        )
    );

    // Blog pages sidebar
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'blog_pages_sidebar',
            array(
                'label' => esc_html__('Blog Pages Sidebar location', '_s'),
                'section' => 'blog-layout',
                'settings' => 'blog_pages_sidebar',
                'type' => 'select',
                'choices' => array(
                    'left_sidebar' => esc_html__('Sidebar on the left side.', '_s'),
                    'right_sidebar' => esc_html__('Sidebar on the right side.', '_s'),
                ),
            )
        )
    );
}

function portfolio_theme_settings($wp_customize)
{
    $wp_customize->add_setting(
        'blog-layout',
        array(
            'default' => 0, 
            'transport' => 'refresh', 
            'sanitize_callback' => 'theme_slug_sanitize_select'
            )
    );

    // Blog page layout settings section

    $wp_customize->add_section(
        'blog-layout',
        array(
            'title' => esc_html__('Blog Page Layout', '_s'),
            'priority' => 30,
            'description' => esc_html__('Select the layout for your blog page.', '_s'),
        )
    );

    // Blog layout
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'blog-layout',
            array(
                'label' => esc_html__('Blog Layout', '_s'),
                'section' => 'blog-layout',
                'settings' => 'blog-layout',
                'type' => 'select',
                'choices' => array(
                    0 => esc_html__('Choose layout', '_s'),
                    'grid' => esc_html__('Grid', '_s'),
                    'list' => esc_html__('List', '_s'),
                ),
            )
        )
    );
}

add_action('customize_register', 'portfolio_theme_settings');
