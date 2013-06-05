<?php defined('SYSPATH') or die('No direct script access.');
/**
* Вывод ошибок
*/
error_reporting(E_ALL ^ E_NOTICE);
 
/**
 * Старт генерации ,подсчета памяти
 */
define('START_TIME', microtime(TRUE));
define('START_MEMORY', memory_get_usage());
 
/**
 * Объявление сессий
 */
session_name ('PS');
session_start ();
 
/**
 * Подключение к базе данных посредством PDO
 */
require_once SYSPATH.'config/db_connect.php';
try {
 $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_BASE, DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (Exception $e) {
 echo 'Ошибка соединения с базой данных';
 die;
}
 
/**
 * Подключение функций
 */
require_once SYSPATH.'functions.php';
?>