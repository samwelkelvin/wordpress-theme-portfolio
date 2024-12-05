<?php

try {

	/**
	 * Load config files.
	 */
	require get_template_directory() . '/inc/config.php';


    /**
     * Load scripts files.
     */
    require get_template_directory() . '/inc/scripts.php';

    /**
     * Load menu walkers.
     */
    require get_template_directory() . '/inc/bootsrap-menu-walker.php';

    // Register menu walkers

    // main menu
    register_nav_menu('primary', __('Header Menu (Primary menu)'));

} catch (Throwable $th) {

    echo $th->getMessage();

    throw $th;
}