<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-31 11:13:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\views\pages\kinfo.php [ 9 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:9
2013-05-31 11:13:36 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 9, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(67): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(56): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:9
2013-05-31 11:14:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\views\pages\kinfo.php [ 9 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:9
2013-05-31 11:14:47 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 9, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(67): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(56): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:9
2013-05-31 11:15:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kaf ~ APPPATH\views\pages\kinfo.php [ 9 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:9
2013-05-31 11:15:05 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 9, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(67): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(56): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:9
2013-05-31 11:37:41 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Lessons::$_model ~ APPPATH\classes\Controller\lessons.php [ 16 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\lessons.php:16
2013-05-31 11:37:41 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\lessons.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\VertrigoServ...', 16, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Lessons->action_linfo()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lessons))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\lessons.php:16
2013-05-31 11:38:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Lessons' not found ~ APPPATH\classes\Controller\lessons.php [ 15 ] in :
2013-05-31 11:38:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-31 11:41:26 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1305 PROCEDURE dyplom_kafedra_calculation.getLessonsById does not exist ~ APPPATH\classes\Model\lessons.php [ 7 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\lessons.php:7
2013-05-31 11:41:26 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\lessons.php(7): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\lessons.php(17): Model_Lessons->getLessonsById('1')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Lessons->action_linfo()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lessons))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\lessons.php:7