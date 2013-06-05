<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-19 15:37:04 --- CRITICAL: View_Exception [ 0 ]: The requested view user/create could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-19 15:37:04 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/create')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/create', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(22): Kohana_View::factory('user/create')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-19 18:04:59 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-19 18:04:59 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-19 18:11:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\login.php [ 7 ] in :
2013-05-19 18:11:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-19 18:39:33 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 18:39:33 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:17:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:17:06 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:17:13 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:17:13 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:17:18 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:17:18 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:17:26 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:17:26 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:17:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:17:38 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:18:14 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 19:18:14 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Cookie.php:67
2013-05-19 21:45:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ';' or '{' ~ APPPATH\classes\Controller\account.php [ 6 ] in :
2013-05-19 21:45:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-19 21:45:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ';' or '{' ~ APPPATH\classes\Controller\account.php [ 6 ] in :
2013-05-19 21:45:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-19 21:45:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\account.php [ 8 ] in :
2013-05-19 21:45:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-19 21:55:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 16 ] in :
2013-05-19 21:55:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-19 21:56:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 16 ] in :
2013-05-19 21:56:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-19 21:56:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 16 ] in :
2013-05-19 21:56:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :