<?php
/**
 * php-mvc
 * @author Clayton Williams
 */

/** The absolute path to the project */
define('ROOT', __DIR__.DIRECTORY_SEPARATOR);
/** Define a path to the core (application) folder after the root */
define('CORE', ROOT.'core'.DIRECTORY_SEPARATOR);

/** Framework configs (sql, directories, debug) */
require ROOT."configuration.php";

/** Main application */
require CORE."Application.php";

/** namespace */
use core\Application;

/** Start application */
$application = new Application();
