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
define('DB_NAME', 'myacl');
define('DB_USER', 'root');
define('DB_PASS', '');
define('ENC_KEY', 'ciprojectsetup123456789098');

/******* DEFAULT DEBUG ********/
define('DEBUG', '0'); //array('ERROR' => 1, 'DEBUG' => 2, 'INFO' => 3, 'ALL' => 4);
/******* CUSTOM DEBUG ********/
define('C_DEBUG', '1');
define('DEBUG_SCRIPT', '1'); 
define('CUSTOM_APP_LOG', 'APP'); 
define('DB_QUERIES_LOG', '1');