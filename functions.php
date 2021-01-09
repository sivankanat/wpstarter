<?php
/**
 * Textdomain Functions
 *
 * @package textdomain
 * @author <sivankanat@gmail.com>
 * @since 1.0.0
 *
 */
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')):
    require_once dirname(__FILE__) . '/vendor/autoload.php';
endif;

new App;
new App_Setup;
new App_Assets;
