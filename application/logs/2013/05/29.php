<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-29 04:40:42 --- CRITICAL: PDOException [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`dyplom_kafedra_calculation`.`teacher`, CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `kafedra` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) ~ APPPATH\classes\Model\teacher.php [ 78 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 04:40:42 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(78): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Model_Teacher->updateTeacher('5', 1, '??????????', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 05:55:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pic ~ APPPATH\views\pages\teacher.php [ 10 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\teacher.php:10
2013-05-29 05:55:40 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\teacher.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 10, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(66): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(56): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\teacher.php:10
2013-05-29 05:57:01 --- CRITICAL: PDOException [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`dyplom_kafedra_calculation`.`teacher`, CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `kafedra` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) ~ APPPATH\classes\Model\teacher.php [ 78 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 05:57:01 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(78): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Model_Teacher->updateTeacher('5', 1, '??????????', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 06:03:26 --- CRITICAL: PDOException [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`dyplom_kafedra_calculation`.`teacher`, CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `kafedra` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) ~ APPPATH\classes\Model\teacher.php [ 78 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 06:03:26 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(78): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Model_Teacher->updateTeacher('5', 1, '??????????', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 06:04:25 --- CRITICAL: PDOException [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`dyplom_kafedra_calculation`.`teacher`, CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `kafedra` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) ~ APPPATH\classes\Model\teacher.php [ 78 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 06:04:25 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(78): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Model_Teacher->updateTeacher('5', 1, '??????????', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 06:16:24 --- CRITICAL: PDOException [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`dyplom_kafedra_calculation`.`teacher`, CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `kafedra` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) ~ APPPATH\classes\Model\teacher.php [ 78 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 06:16:24 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(78): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Model_Teacher->updateTeacher('5', 1, '??????????', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 06:42:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: patronim ~ APPPATH\views\admin\teacher\edit.php [ 24 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php:24
2013-05-29 06:42:01 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 24, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(66): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(56): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php:24
2013-05-29 06:42:42 --- CRITICAL: PDOException [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`dyplom_kafedra_calculation`.`teacher`, CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `kafedra` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) ~ APPPATH\classes\Model\teacher.php [ 78 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 06:42:42 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(78): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Model_Teacher->updateTeacher('6', 1, '??????????', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 06:46:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: surname ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 06:46:01 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 06:48:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kid ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 06:48:10 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:13:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kid ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:13:54 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:15:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_LNUMBER, expecting '&' or T_VARIABLE ~ APPPATH\classes\Model\teacher.php [ 63 ] in :
2013-05-29 08:15:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 08:15:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kid ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:15:19 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:15:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kid ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:15:35 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:16:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kid ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:16:25 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:28:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kid ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:28:29 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:28:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: surname ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:28:49 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:29:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: patronim ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:29:27 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:31:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: surname ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:31:41 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:35:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: surname ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:35:03 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:36:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: surname ~ APPPATH\classes\Controller\teacher.php [ 100 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:36:15 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(100): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 100, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:100
2013-05-29 08:36:26 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1318 Incorrect number of arguments for PROCEDURE dyplom_kafedra_calculation.getTeacherById; expected 1, got 0 ~ APPPATH\classes\Model\teacher.php [ 31 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:31
2013-05-29 08:36:26 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(31): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(77): Model_Teacher->getTeacherById(NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_tinfo()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:31
2013-05-29 08:37:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Controller\teacher.php [ 107 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:37:10 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(107): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 107, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:37:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH\classes\Controller\teacher.php [ 107 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:37:53 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(107): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 107, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:37:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH\classes\Controller\teacher.php [ 107 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:37:59 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(107): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 107, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:38:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH\classes\Controller\teacher.php [ 107 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:38:06 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(107): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 107, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:38:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH\classes\Controller\teacher.php [ 107 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:38:11 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(107): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 107, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:39:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\teacher.php [ 107 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:39:27 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(107): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 107, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:107
2013-05-29 08:41:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kid ~ APPPATH\classes\Model\teacher.php [ 69 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:69
2013-05-29 08:41:30 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 69, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(112): Model_Teacher->updateTeacher('19', '????????????', '??????', '???????????????...', '???????????????...', '+333333333333', '???? 467866', '??????????????', '+3444444444', '19.jpg')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:69
2013-05-29 08:42:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: kid ~ APPPATH\classes\Controller\teacher.php [ 103 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 08:42:28 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(103): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 103, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 08:44:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: kafedra_id ~ APPPATH\classes\Controller\teacher.php [ 103 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 08:44:04 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(103): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 103, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 08:44:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kid ~ APPPATH\classes\Model\teacher.php [ 69 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:69
2013-05-29 08:44:29 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 69, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(113): Model_Teacher->updateTeacher('19', '????????????', '??????', '???????????????...', '???????????????...', '+333333333333', '???? 467866', '??????????????', '+3444444444', '19.jpg')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:69
2013-05-29 08:44:52 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1318 Incorrect number of arguments for PROCEDURE dyplom_kafedra_calculation.updateTeacher; expected 11, got 10 ~ APPPATH\classes\Model\teacher.php [ 78 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 08:44:52 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(78): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(113): Model_Teacher->updateTeacher('19', '????????????', '??????', '???????????????...', '???????????????...', '+333333333333', '???? 467866', '??????????????', '+3444444444', '19.jpg')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:78
2013-05-29 08:46:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: kaf_id ~ APPPATH\classes\Controller\teacher.php [ 103 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 08:46:15 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(103): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 103, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 14:36:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: patronim ~ APPPATH\views\admin\teacher\edit.php [ 24 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php:24
2013-05-29 14:36:55 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 24, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(67): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(56): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php:24
2013-05-29 14:37:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: patronim ~ APPPATH\views\admin\teacher\edit.php [ 24 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php:24
2013-05-29 14:37:24 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 24, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(67): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(56): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php:24
2013-05-29 14:37:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: patronim ~ APPPATH\views\admin\teacher\edit.php [ 24 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php:24
2013-05-29 14:37:31 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 24, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(67): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(56): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php:24
2013-05-29 14:41:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: patronim ~ APPPATH\views\admin\teacher\edit.php [ 24 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php:24
2013-05-29 14:41:12 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 24, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(67): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(56): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\teacher\edit.php:24
2013-05-29 14:42:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: kaf_id ~ APPPATH\classes\Controller\teacher.php [ 103 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 14:42:34 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(103): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 103, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 14:49:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: kid ~ APPPATH\classes\Controller\teacher.php [ 103 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 14:49:32 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(103): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 103, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 14:53:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: kid ~ APPPATH\classes\Controller\teacher.php [ 103 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 14:53:20 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(103): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 103, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:103
2013-05-29 14:55:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: patronim ~ APPPATH\classes\Controller\teacher.php [ 106 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:106
2013-05-29 14:55:04 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(106): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 106, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:106
2013-05-29 14:57:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: phone ~ APPPATH\classes\Controller\teacher.php [ 108 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:108
2013-05-29 14:57:26 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(108): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 108, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:108
2013-05-29 14:57:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\teacher.php [ 112 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:112
2013-05-29 14:57:54 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 112, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:112
2013-05-29 14:58:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: patronim ~ APPPATH\classes\Controller\teacher.php [ 113 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:113
2013-05-29 14:58:23 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 113, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:113
2013-05-29 14:58:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: patronimic ~ APPPATH\classes\Model\teacher.php [ 72 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:72
2013-05-29 14:58:57 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 72, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(113): Model_Teacher->updateTeacher('6', '5', '??????????', '??????????????', '???????????????...', '???????????????...', '+3333333333333', '???? 467866', '213213213', '1212312321', '6.jpg')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:72