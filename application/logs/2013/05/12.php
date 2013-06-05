<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-12 14:49:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\main.php [ 20 ] in :
2013-05-12 14:49:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-12 19:21:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\classes\Controller\user.php [ 13 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:13
2013-05-12 19:21:46 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 13, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Core.php(511): require('D:\VertrigoServ...')
#2 [internal function]: Kohana_Core::auto_load('Controller_User')
#3 [internal function]: spl_autoload_call('Controller_User')
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_User')
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:13