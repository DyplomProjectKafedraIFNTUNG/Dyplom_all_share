<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-15 06:29:28 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1305 PROCEDURE dyplom_kafedra_calculation.getTeachersLoad does not exist ~ APPPATH\classes\Controller\teacher.php [ 33 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:33
2013-05-15 06:29:28 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(33): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\views\pages\teacher.php(4): Teacher->getTeacher()
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\VertrigoServ\www\kohana\www\application\views\main.php(67): Kohana_View->__toString()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php:33
2013-05-15 06:30:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: val ~ APPPATH\views\pages\teacher.php [ 11 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\teacher.php:11
2013-05-15 06:30:07 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\teacher.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 11, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(67): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\teacher.php:11
2013-05-15 07:50:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Student' not found ~ APPPATH\views\pages\student.php [ 3 ] in :
2013-05-15 07:50:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:53:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Student' not found ~ APPPATH\classes\Controller\student.php [ 10 ] in :
2013-05-15 07:53:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:54:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Student' not found ~ APPPATH\classes\Controller\student.php [ 10 ] in :
2013-05-15 07:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:54:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Student' not found ~ APPPATH\classes\Controller\student.php [ 10 ] in :
2013-05-15 07:54:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:11:12 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/student/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-15 08:11:12 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/student/...')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/student/...', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(22): Kohana_View::factory('/pages/student/...')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_info()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-15 08:11:40 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/student/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-15 08:11:40 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/student/...')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/student/...', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(22): Kohana_View::factory('/pages/student/...')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_info()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-15 08:15:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function vardump() ~ APPPATH\views\pages\info.php [ 3 ] in :
2013-05-15 08:15:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:19:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\main.php [ 12 ] in :
2013-05-15 08:19:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 18:01:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\views\pages\tinfo.php [ 2 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php:2
2013-05-15 18:01:34 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 2, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php:2
2013-05-15 18:04:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\views\pages\tinfo.php [ 2 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php:2
2013-05-15 18:04:56 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 2, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php:2
2013-05-15 18:10:59 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1305 PROCEDURE dyplom_kafedra_calculation.getTeacherById does not exist ~ APPPATH\classes\Model\teacher.php [ 26 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:26
2013-05-15 18:10:59 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(26): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(18): Model_Teacher->getTeacherById('2')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_teacher()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:26
2013-05-15 18:13:19 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1305 PROCEDURE dyplom_kafedra_calculation.getTeacherById does not exist ~ APPPATH\classes\Model\teacher.php [ 26 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:26
2013-05-15 18:13:19 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(26): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(18): Model_Teacher->getTeacherById('2')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_teacher()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:26
2013-05-15 18:34:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\views\pages\tinfo.php [ 2 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php:2
2013-05-15 18:34:29 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 2, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php:2
2013-05-15 18:35:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\pages\tinfo.php [ 2 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php:2
2013-05-15 18:35:07 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php(2): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 2, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php:2
2013-05-15 18:35:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\pages\tinfo.php [ 2 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php:2
2013-05-15 18:35:42 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php(2): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 2, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\tinfo.php:2
2013-05-15 18:36:44 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1318 Incorrect number of arguments for PROCEDURE dyplom_kafedra_calculation.getTeacherById; expected 1, got 0 ~ APPPATH\classes\Model\teacher.php [ 26 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:26
2013-05-15 18:36:44 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php(26): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\teacher.php(18): Model_Teacher->getTeacherById(NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Teacher->action_teacher()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teacher))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\teacher.php:26
2013-05-15 18:50:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\views\pages\tinfo.php [ 2 ] in :
2013-05-15 18:50:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 18:51:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\views\pages\tinfo.php [ 2 ] in :
2013-05-15 18:51:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 20:40:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\student.php [ 23 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:23
2013-05-15 20:40:20 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 23, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_info()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:23
2013-05-15 20:40:33 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Controller_Student::getStudentById(), called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php on line 23 and defined ~ APPPATH\classes\Controller\student.php [ 28 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:28
2013-05-15 20:40:33 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(28): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\VertrigoServ...', 28, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(23): Controller_Student->getStudentById(Array)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_info()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:28
2013-05-15 20:41:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: student ~ APPPATH\classes\Controller\student.php [ 23 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:23
2013-05-15 20:41:08 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 23, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_info()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:23
2013-05-15 20:41:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\student.php [ 23 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:23
2013-05-15 20:41:21 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 23, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_info()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:23
2013-05-15 20:44:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\student.php [ 41 ] in :
2013-05-15 20:44:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 20:44:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Student::getStudentById() ~ APPPATH\classes\Controller\student.php [ 22 ] in :
2013-05-15 20:44:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :