<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-13 10:20:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function full_name() on a non-object ~ APPPATH\views\pages\user.php [ 1 ] in :
2013-05-13 10:20:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 16:28:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function full_name() on a non-object ~ APPPATH\views\pages\user.php [ 1 ] in :
2013-05-13 16:28:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 16:40:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function full_name() on a non-object ~ APPPATH\views\pages\user.php [ 1 ] in :
2013-05-13 16:40:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 16:41:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function full_name() on a non-object ~ APPPATH\views\pages\user.php [ 1 ] in :
2013-05-13 16:41:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 16:41:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function full_name() on a non-object ~ APPPATH\views\pages\user.php [ 1 ] in :
2013-05-13 16:41:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 16:42:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function full_name() on a non-object ~ APPPATH\views\pages\user.php [ 1 ] in :
2013-05-13 16:42:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 16:43:36 --- CRITICAL: ErrorException [ 1 ]: Class 'DbConnect' not found ~ APPPATH\views\pages\user.php [ 3 ] in :
2013-05-13 16:43:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 16:45:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\user.php [ 38 ] in :
2013-05-13 16:45:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 16:45:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fac ~ APPPATH\views\pages\user.php [ 6 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\user.php:6
2013-05-13 16:45:50 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\user.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 6, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(67): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\user.php:6
2013-05-13 17:35:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\pages\user.php [ 8 ] in :
2013-05-13 17:35:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 17:36:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\pages\user.php [ 8 ] in :
2013-05-13 17:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 17:37:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\pages\user.php [ 8 ] in :
2013-05-13 17:37:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 17:40:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\pages\user.php [ 8 ] in :
2013-05-13 17:40:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 17:40:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\pages\user.php [ 8 ] in :
2013-05-13 17:40:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 17:58:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\pages\user.php [ 8 ] in :
2013-05-13 17:58:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 18:00:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\pages\user.php [ 19 ] in :
2013-05-13 18:00:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 18:03:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\pages\user.php [ 8 ] in :
2013-05-13 18:03:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 18:15:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\pages\user.php [ 8 ] in :
2013-05-13 18:15:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-13 18:16:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\pages\user.php [ 11 ] in :
2013-05-13 18:16:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :