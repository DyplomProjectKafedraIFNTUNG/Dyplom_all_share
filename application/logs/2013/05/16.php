<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-16 17:50:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: gr ~ APPPATH\views\pages\lessons.php [ 7 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\lessons.php:7
2013-05-16 17:50:16 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\lessons.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 7, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lessons))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\lessons.php:7
2013-05-16 17:51:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\page.php [ 11 ] in :
2013-05-16 17:51:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-16 17:52:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\page.php [ 11 ] in :
2013-05-16 17:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-16 17:52:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\page.php [ 11 ] in :
2013-05-16 17:52:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-16 17:52:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\page.php [ 11 ] in :
2013-05-16 17:52:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-16 17:52:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\page.php [ 11 ] in :
2013-05-16 17:52:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :