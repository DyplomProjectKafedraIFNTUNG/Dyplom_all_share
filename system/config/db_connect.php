<?php
/**
* Настройки базы данных
*/
 
if($_SERVER['REMOTE_ADDR'] != '127.0.0.1' && $_SERVER['REMOTE_ADDR'] != '::1'){
/**
* Настройки для хостинга
*/
define('DB_BASE', '');
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
} else {
/**
* Настройки для локальной машины
*/
define('DB_BASE', 'dyplom_kafedra_calculation');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'vertrigo');
}
?>