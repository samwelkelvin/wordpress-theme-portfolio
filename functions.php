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

} catch (Throwable $th) {

    echo $th->getMessage();

    throw $th;
}