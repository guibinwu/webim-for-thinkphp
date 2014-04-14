<?php

/**
 * WebIM 入口
 *
 * @copyright   (C) 2014 NexTalk.IM
 * @license     http://nextalk.im/license
 * @lastmodify  2014-04-06
 */ 

define('APP_NAME', 'Webim');
define('APP_PATH', './');
define('APP_DEBUG', TRUE);

if(phpversion() < '5.3.10') {
    exit('PHP version should be > 5.3.10');
}

define('WEBIM_DEBUG', true);
define('WEBIM_PRODUCT', 'thinkphp');

if(WEBIM_DEBUG) {
	error_reporting( E_ALL );
} else {
	error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT );
}

function WEBIM_PATH() {
	global $_SERVER;
    $name = htmlspecialchars($_SERVER['SCRIPT_NAME'] ? $_SERVER['SCRIPT_NAME'] : $_SERVER['PHP_SELF']); 
    return substr( $name, 0, strrpos( $name, '/' ) ) . "/";
}

function WEBIM_IMAGE($img) {
    return WEBIM_PATH() . "static/images/{$img}";
}

/**
 *
 * WebIM Libraries
 *
 * https://github.com/webim/webim-php
 *
 */
require './vendor/autoload.php';

require './ThinkPHP_Plugin.php';

require "../ThinkPHP/ThinkPHP.php";


