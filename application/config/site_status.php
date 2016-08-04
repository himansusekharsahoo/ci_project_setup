<?php

/**
 * Declare only the constants for global configuration
 */
define('SITE_IS_DOWN', '0');
define('SITE_DOWN_MSG', '');
define('GLOBAL_NOTICE', '');
define('APP_HOST', $_SERVER['HTTP_HOST']);
define('APP_VER', 'ci_project_setup');
define('APP_BASE', 'http://'.APP_HOST.'/'.APP_VER.'/');
define('DB_HOST', $_SERVER['HTTP_HOST']);
define('DB_NAME', 'my_acl');
define('DB_USER', 'root');
define('DB_PASS', '');
define('ENC_KEY', 'ciprojectsetup123456789098');