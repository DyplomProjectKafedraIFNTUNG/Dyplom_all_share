<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-24 11:49:50 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-04-24 11:49:50 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-04-24 11:50:03 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-04-24 11:50:03 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137