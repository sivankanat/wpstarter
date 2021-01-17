<?php
/**
 * Textdomain Functions
 *
 * @package textdomain
 * @author <sivankanat@gmail.com>
 * @since 1.0.1
 *
 */

define('THEMEDIR', dirname(__FILE__) . '/');
define('ADMINDIR', dirname(__FILE__) . '/admin//');
define('PARTDIR', dirname(__FILE__) . '/parts//');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')):
    require_once dirname(__FILE__) . '/vendor/autoload.php';
endif;

new App;
new App_Setup;
new App_Assets;
