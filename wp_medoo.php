<?php 
/**
Plugin Name: wp_medoo
Description: it's a function for medoo.com database library
Version: 1.0.2
Requires at least: 6.1
Requires PHP: 7.4
Author: Ken 
License: GPLv2
*/

/**
* 数据库连接
*/
$medoo_db_config['db_name'] = DB_NAME; 
$medoo_db_config['db_host'] = DB_HOST;
$medoo_db_config['db_user'] = DB_USER;
$medoo_db_config['db_pwd']  = DB_PASSWORD;
$medoo_db_config['db_port'] = 3306; 
/**
* 启动数据库连接
*/
include __DIR__.'/../db_medoo/inc/db/boot.php';
 