<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-23 07:07:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\faculty.php [ 21 ] in :
2013-05-23 07:07:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 07:08:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Faculty::removeFaculty() ~ APPPATH\classes\Controller\faculty.php [ 22 ] in :
2013-05-23 07:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 07:19:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Faculty::removeFaculty() ~ APPPATH\classes\Controller\faculty.php [ 22 ] in :
2013-05-23 07:19:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 07:44:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 960 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php:960
2013-05-23 07:44:19 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 960, Array)
#1 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#2 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php:960
2013-05-23 07:44:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\admin\faculty\create.php [ 10 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\create.php:10
2013-05-23 07:44:55 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\create.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 10, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\create.php:10
2013-05-23 07:46:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\faculty.php [ 27 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php:27
2013-05-23 07:46:21 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 27, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php:27
2013-05-23 07:49:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 26 ] in :
2013-05-23 07:49:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 07:49:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 26 ] in :
2013-05-23 07:49:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 07:50:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 26 ] in :
2013-05-23 07:50:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 07:50:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 26 ] in :
2013-05-23 07:50:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 07:50:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 26 ] in :
2013-05-23 07:50:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 07:50:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 26 ] in :
2013-05-23 07:50:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 07:51:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: desc ~ APPPATH\classes\Model\faculty.php [ 51 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:51
2013-05-23 07:51:00 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 51, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(26): Model_Faculty->addFaculty('6456456', 'dsd', '6456456')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:51
2013-05-23 07:52:30 --- CRITICAL: PDOException [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'nbvn' in 'field list' ~ APPPATH\classes\Model\faculty.php [ 52 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:52
2013-05-23 07:52:30 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(52): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(26): Model_Faculty->addFaculty('nbvn', 'dsd', 'nbvn')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:52
2013-05-23 07:52:45 --- CRITICAL: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ APPPATH\classes\Model\faculty.php [ 53 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:53
2013-05-23 07:52:45 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(53): PDOStatement->fetchAll()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(26): Model_Faculty->addFaculty('nbvn', 'dsd', 'nbvn')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:53
2013-05-23 07:53:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\faculty.php [ 30 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php:30
2013-05-23 07:53:02 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 30, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php:30
2013-05-23 08:00:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function lastInsertId() on a non-object ~ APPPATH\classes\Model\faculty.php [ 52 ] in :
2013-05-23 08:00:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 08:27:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: surn ~ APPPATH\views\pages\finfo.php [ 4 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:4
2013-05-23 08:27:58 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 4, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:4
2013-05-23 08:28:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Student::getFacultyById() ~ APPPATH\classes\Controller\student.php [ 24 ] in :
2013-05-23 08:28:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 08:29:13 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\student.php [ 26 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:26
2013-05-23 08:29:13 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(26): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\VertrigoServ...', 26, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_sinfo()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:26
2013-05-23 08:29:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: surn ~ APPPATH\views\pages\finfo.php [ 4 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:4
2013-05-23 08:29:32 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 4, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:4
2013-05-23 08:31:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\pages\finfo.php [ 3 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:3
2013-05-23 08:31:10 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php(3): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 3, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:3
2013-05-23 08:32:14 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\views\pages\finfo.php [ 3 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:3
2013-05-23 08:32:14 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php(3): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\VertrigoServ...', 3, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:3
2013-05-23 08:32:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\pages\finfo.php [ 3 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:3
2013-05-23 08:32:44 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php(3): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 3, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:3
2013-05-23 08:32:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '`', expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\pages\finfo.php [ 3 ] in :
2013-05-23 08:32:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 08:34:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\pages\finfo.php [ 8 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:8
2013-05-23 08:34:52 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 8, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:8
2013-05-23 08:35:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\views\pages\finfo.php [ 9 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:9
2013-05-23 08:35:44 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 9, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\finfo.php:9
2013-05-23 08:36:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ']' ~ APPPATH\views\pages\finfo.php [ 9 ] in :
2013-05-23 08:36:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 08:48:50 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Common::__construct(), called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\kafedra.php on line 9 and defined ~ APPPATH\classes\Controller\common.php [ 8 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:8
2013-05-23 08:48:50 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(8): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\VertrigoServ...', 8, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\kafedra.php(9): Controller_Common->__construct()
#2 [internal function]: Controller_Kafedra->__construct(Object(Request), Object(Response))
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:8
2013-05-23 08:49:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Kafedra' not found ~ APPPATH\views\pages\kafedra.php [ 3 ] in :
2013-05-23 08:49:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 08:50:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kaf ~ APPPATH\views\pages\kafedra.php [ 5 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\kafedra.php:5
2013-05-23 08:50:28 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\kafedra.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 5, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\kafedra.php:5
2013-05-23 08:51:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getAllKafedra() on a non-object ~ APPPATH\classes\Controller\kafedra.php [ 16 ] in :
2013-05-23 08:51:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 08:51:59 --- CRITICAL: ErrorException [ 2 ]: PDO::prepare() expects at least 1 parameter, 0 given ~ APPPATH\classes\Model\kafedra.php [ 32 ] in :
2013-05-23 08:51:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'PDO::prepare() ...', 'D:\VertrigoServ...', 32, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php(32): PDO->prepare()
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\kafedra.php(17): Model_Kafedra->getAllKafedra()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Kafedra->action_kafedra()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#9 {main} in :
2013-05-23 08:58:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\pages\kafedra.php [ 22 ] in :
2013-05-23 08:58:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 09:04:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: faculty ~ APPPATH\views\pages\kinfo.php [ 3 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:3
2013-05-23 09:04:21 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 3, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:3
2013-05-23 09:05:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: faculty ~ APPPATH\views\pages\kinfo.php [ 3 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:3
2013-05-23 09:05:10 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 3, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:3
2013-05-23 09:05:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: faculty ~ APPPATH\views\pages\kinfo.php [ 9 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:9
2013-05-23 09:05:40 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 9, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:9
2013-05-23 09:05:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\kinfo.php [ 9 ] in :
2013-05-23 09:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 09:07:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: faculty ~ APPPATH\views\pages\kinfo.php [ 3 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:3
2013-05-23 09:07:53 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 3, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\kinfo.php:3
2013-05-23 09:20:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: countries ~ APPPATH\views\admin\kafedra\edit.php [ 26 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\edit.php:26
2013-05-23 09:20:18 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 26, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\edit.php:26
2013-05-23 09:24:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: countries ~ APPPATH\views\admin\kafedra\edit.php [ 26 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\edit.php:26
2013-05-23 09:24:07 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 26, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\edit.php:26
2013-05-23 09:30:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Faculty::getAllFaculty() ~ APPPATH\classes\Controller\kafedra.php [ 114 ] in :
2013-05-23 09:30:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 09:31:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Faculty::getAllFaculty() ~ APPPATH\classes\Controller\kafedra.php [ 114 ] in :
2013-05-23 09:31:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 09:48:43 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' bvnbvn)' at line 1 ~ APPPATH\classes\Model\kafedra.php [ 26 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:26
2013-05-23 09:48:43 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php(26): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\kafedra.php(101): Model_Kafedra->updateKafedra('1', '1', 'nvbnbvn', false, 'bvnbvn')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Kafedra->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:26
2013-05-23 10:01:01 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'інформатики,, Кафедра інформатики)' at line 1 ~ APPPATH\classes\Model\kafedra.php [ 26 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:26
2013-05-23 10:01:01 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php(26): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\kafedra.php(101): Model_Kafedra->updateKafedra('1', '1', '?????????????? ...', false, '?????????????? ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Kafedra->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:26
2013-05-23 10:10:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: faculty ~ APPPATH\views\admin\kafedra\edit.php [ 27 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\edit.php:27
2013-05-23 10:10:00 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\edit.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 27, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\edit.php:27
2013-05-23 10:14:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\admin\kafedra\edit.php [ 14 ] in :
2013-05-23 10:14:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 10:15:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\admin\kafedra\edit.php [ 20 ] in :
2013-05-23 10:15:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 10:16:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\admin\kafedra\edit.php [ 20 ] in :
2013-05-23 10:16:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 10:23:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kafedra ~ APPPATH\views\admin\kafedra\create.php [ 30 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\create.php:30
2013-05-23 10:23:59 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\create.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 30, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\kafedra\create.php:30
2013-05-23 10:24:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\kafedra.php [ 45 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\kafedra.php:45
2013-05-23 10:24:39 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\kafedra.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 45, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Kafedra->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\kafedra.php:45
2013-05-23 10:25:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\kafedra.php [ 45 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\kafedra.php:45
2013-05-23 10:25:07 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\kafedra.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 45, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Kafedra->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kafedra))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\kafedra.php:45
2013-05-23 10:40:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Kafedra::removeKafedra() ~ APPPATH\classes\Controller\kafedra.php [ 82 ] in :
2013-05-23 10:40:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 10:47:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\pages\groups.php [ 9 ] in :
2013-05-23 10:47:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 10:47:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\pages\groups.php [ 9 ] in :
2013-05-23 10:47:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 10:58:42 --- CRITICAL: ErrorException [ 4096 ]: Object of class Closure could not be converted to string ~ SYSPATH\classes\Kohana\Route.php [ 241 ] in :
2013-05-23 10:58:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'D:\VertrigoServ...', 241, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Route.php(241): preg_replace('#[.\+*?[^\]${}=...', '\\$0', 'Object')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), NULL)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), NULL)
#4 D:\VertrigoServ\www\kohana\www\application\bootstrap.php(139): Kohana_Route::set('group_route', Object(Closure))
#5 D:\VertrigoServ\www\kohana\www\index.php(101): require('D:\VertrigoServ...')
#6 {main} in :
2013-05-23 10:58:54 --- CRITICAL: ErrorException [ 4096 ]: Object of class Closure could not be converted to string ~ SYSPATH\classes\Kohana\Route.php [ 241 ] in :
2013-05-23 10:58:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'D:\VertrigoServ...', 241, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Route.php(241): preg_replace('#[.\+*?[^\]${}=...', '\\$0', 'Object')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), NULL)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), NULL)
#4 D:\VertrigoServ\www\kohana\www\application\bootstrap.php(139): Kohana_Route::set('group_route', Object(Closure))
#5 D:\VertrigoServ\www\kohana\www\index.php(101): require('D:\VertrigoServ...')
#6 {main} in :
2013-05-23 10:59:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\groups.php [ 20 ] in :
2013-05-23 10:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 10:59:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\groups.php [ 20 ] in :
2013-05-23 10:59:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 10:59:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\groups.php [ 20 ] in :
2013-05-23 10:59:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 10:59:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\groups.php [ 19 ] in :
2013-05-23 10:59:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:00:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\groups.php [ 7 ] in :
2013-05-23 11:00:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:00:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\groups.php [ 7 ] in :
2013-05-23 11:00:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:00:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\groups.php [ 7 ] in :
2013-05-23 11:00:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:01:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\groups.php [ 7 ] in :
2013-05-23 11:01:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:01:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\groups.php [ 7 ] in :
2013-05-23 11:01:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:01:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\groups.php [ 7 ] in :
2013-05-23 11:01:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:02:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\groups.php [ 7 ] in :
2013-05-23 11:02:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:03:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\groups.php [ 7 ] in :
2013-05-23 11:03:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:03:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\groups.php [ 23 ] in :
2013-05-23 11:03:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:04:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\groups.php [ 7 ] in :
2013-05-23 11:04:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:05:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\groups.php [ 7 ] in :
2013-05-23 11:05:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:09:30 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\groups.php [ 24 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:24
2013-05-23 11:09:30 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(24): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\VertrigoServ...', 24, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:24
2013-05-23 11:11:03 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/groups/stundents could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-23 11:11:03 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/groups/s...')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/groups/s...', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(24): Kohana_View::factory('/pages/groups/s...')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-23 11:12:38 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/groups/stundents could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-23 11:12:38 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/groups/s...')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/groups/s...', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(24): Kohana_View::factory('/pages/groups/s...')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-23 11:13:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: gr ~ APPPATH\views\pages\groups\students.php [ 5 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:5
2013-05-23 11:13:09 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 5, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:5
2013-05-23 11:23:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\groups\students.php [ 5 ] in :
2013-05-23 11:23:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:23:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\pages\groups\students.php [ 5 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:5
2013-05-23 11:23:57 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 5, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:5
2013-05-23 11:24:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\pages\groups\students.php [ 6 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:6
2013-05-23 11:24:11 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 6, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:6
2013-05-23 11:27:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: GOSname ~ APPPATH\views\pages\groups\students.php [ 6 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:6
2013-05-23 11:27:27 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 6, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:6
2013-05-23 11:33:52 --- CRITICAL: PDOException [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'groups' in 'field list' ~ APPPATH\classes\Model\group.php [ 37 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 11:33:52 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php(37): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(25): Model_Group->getStudentsByGroup('groups')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 11:38:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\pages\groups.php [ 9 ] in :
2013-05-23 11:38:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:39:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\pages\groups.php [ 9 ] in :
2013-05-23 11:39:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 11:40:18 --- CRITICAL: View_Exception [ 0 ]: The requested view /admin/groups/group-edit could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-23 11:40:18 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/admin/groups/g...')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/admin/groups/g...', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(49): Kohana_View::factory('/admin/groups/g...')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-23 11:40:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\admin\group\group-edit.php [ 11 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-edit.php:11
2013-05-23 11:40:46 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-edit.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 11, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-edit.php:11
2013-05-23 11:42:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH\views\admin\group\group-edit.php [ 2 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-edit.php:2
2013-05-23 11:42:10 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 2, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-edit.php:2
2013-05-23 11:43:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\admin\group\group-edit.php [ 11 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-edit.php:11
2013-05-23 11:43:03 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-edit.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 11, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-edit.php:11
2013-05-23 11:50:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: study_form ~ APPPATH\classes\Controller\groups.php [ 51 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:51
2013-05-23 11:50:43 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 51, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:51
2013-05-23 11:55:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kafedra ~ APPPATH\classes\Controller\groups.php [ 54 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:54
2013-05-23 11:55:46 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 54, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:54
2013-05-23 12:04:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Model\kafedra.php [ 51 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:51
2013-05-23 12:04:31 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php(51): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 51, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(53): Model_Kafedra->prepareForSelect(Array)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:51
2013-05-23 12:05:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Model\kafedra.php [ 53 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:53
2013-05-23 12:05:21 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php(53): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 53, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(53): Model_Kafedra->prepareForSelect(Array)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:53
2013-05-23 12:06:51 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create)' at line 1 ~ APPPATH\classes\Model\group.php [ 37 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 12:06:51 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php(37): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(26): Model_Group->getStudentsByGroup('create')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 12:13:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\groups.php [ 51 ] in :
2013-05-23 12:13:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 12:20:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sfid ~ APPPATH\classes\Controller\groups.php [ 52 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:52
2013-05-23 12:20:36 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 52, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:52
2013-05-23 12:21:03 --- CRITICAL: ErrorException [ 2 ]: Missing argument 4 for Model_Group::updateGroupOfStudents(), called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php on line 52 and defined ~ APPPATH\classes\Model\group.php [ 57 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:57
2013-05-23 12:21:03 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php(57): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\VertrigoServ...', 57, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(52): Model_Group->updateGroupOfStudents('1', '1', '1')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:57
2013-05-23 12:21:26 --- CRITICAL: ErrorException [ 2 ]: Missing argument 4 for Model_Group::updateGroupOfStudents(), called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php on line 52 and defined ~ APPPATH\classes\Model\group.php [ 57 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:57
2013-05-23 12:21:26 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php(57): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\VertrigoServ...', 57, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(52): Model_Group->updateGroupOfStudents('1', '1', '1')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:57
2013-05-23 12:21:46 --- CRITICAL: PDOException [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'АКТ' in 'field list' ~ APPPATH\classes\Model\group.php [ 60 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:60
2013-05-23 12:21:46 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php(60): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(52): Model_Group->updateGroupOfStudents('1', '1', '1', '??????-11-11')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:60
2013-05-23 12:27:13 --- CRITICAL: PDOException [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'edit' in 'field list' ~ APPPATH\classes\Model\group.php [ 37 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 12:27:13 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php(37): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(26): Model_Group->getStudentsByGroup('edit')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 12:28:27 --- CRITICAL: PDOException [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'edit' in 'field list' ~ APPPATH\classes\Model\group.php [ 37 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 12:28:27 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php(37): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(26): Model_Group->getStudentsByGroup('edit')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 14:49:46 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create)' at line 1 ~ APPPATH\classes\Model\group.php [ 37 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 14:49:46 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php(37): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(26): Model_Group->getStudentsByGroup('create')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 14:50:39 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'create)' at line 1 ~ APPPATH\classes\Model\group.php [ 37 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 14:50:39 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php(37): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(26): Model_Group->getStudentsByGroup('create')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:37
2013-05-23 14:53:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: faculties ~ APPPATH\views\admin\group\create.php [ 29 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\group\create.php:29
2013-05-23 14:53:37 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\group\create.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 29, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\group\create.php:29
2013-05-23 15:03:06 --- CRITICAL: View_Exception [ 0 ]: The requested view /admin/group/create could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-23 15:03:06 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/admin/group/cr...')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/admin/group/cr...', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(80): Kohana_View::factory('/admin/group/cr...')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-23 15:03:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: faculties ~ APPPATH\views\admin\group\group-create.php [ 24 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-create.php:24
2013-05-23 15:03:31 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-create.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 24, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-create.php:24
2013-05-23 15:07:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Groups::_prepareForSelect() ~ APPPATH\classes\Controller\groups.php [ 83 ] in :
2013-05-23 15:07:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 15:12:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: additional_js ~ APPPATH\views\admin\group\group-create.php [ 1 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-create.php:1
2013-05-23 15:12:13 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-create.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 1, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-create.php:1
2013-05-23 15:12:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: additional_js ~ APPPATH\views\admin\group\group-create.php [ 1 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-create.php:1
2013-05-23 15:12:49 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-create.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 1, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\group\group-create.php:1
2013-05-23 15:30:19 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1318 Incorrect number of arguments for PROCEDURE dyplom_kafedra_calculation.getAllKafedrasFromFaculty; expected 1, got 0 ~ APPPATH\classes\Model\kafedra.php [ 24 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:24
2013-05-23 15:30:19 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php(24): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(96): Model_Kafedra->getAllKafedrasFromFaculty(NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_getKafedra()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:24
2013-05-23 15:30:21 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1318 Incorrect number of arguments for PROCEDURE dyplom_kafedra_calculation.getAllKafedrasFromFaculty; expected 1, got 0 ~ APPPATH\classes\Model\kafedra.php [ 24 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:24
2013-05-23 15:30:21 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php(24): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(96): Model_Kafedra->getAllKafedrasFromFaculty(NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_getKafedra()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:24
2013-05-23 15:30:46 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1318 Incorrect number of arguments for PROCEDURE dyplom_kafedra_calculation.getAllKafedrasFromFaculty; expected 1, got 0 ~ APPPATH\classes\Model\kafedra.php [ 24 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:24
2013-05-23 15:30:46 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php(24): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(97): Model_Kafedra->getAllKafedrasFromFaculty(NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_getKafedra()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\kafedra.php:24
2013-05-23 15:31:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function fetchAll() on a non-object ~ APPPATH\classes\Model\kafedra.php [ 25 ] in :
2013-05-23 15:31:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 15:31:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function fetchAll() on a non-object ~ APPPATH\classes\Model\kafedra.php [ 25 ] in :
2013-05-23 15:31:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 15:32:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function fetchAll() on a non-object ~ APPPATH\classes\Model\kafedra.php [ 25 ] in :
2013-05-23 15:32:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 15:32:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\groups.php [ 99 ] in :
2013-05-23 15:32:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 15:33:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kafedra ~ APPPATH\classes\Controller\groups.php [ 99 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:99
2013-05-23 15:33:56 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 99, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_getKafedra()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:99
2013-05-23 15:34:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: jsonEncoded ~ APPPATH\classes\Controller\groups.php [ 101 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:101
2013-05-23 15:34:18 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(101): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 101, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_getKafedra()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:101
2013-05-23 15:36:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_AS, expecting ';' ~ APPPATH\classes\Model\kafedra.php [ 32 ] in :
2013-05-23 15:36:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 15:45:02 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\common.php [ 36 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-23 15:45:02 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(36): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\VertrigoServ...', 36, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(19): Controller_Common->before()
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Groups->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-23 15:46:04 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\common.php [ 39 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:39
2013-05-23 15:46:04 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(39): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\VertrigoServ...', 39, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:39
2013-05-23 15:51:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\groups.php [ 101 ] in :
2013-05-23 15:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 16:00:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\groups.php [ 86 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:86
2013-05-23 16:00:54 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\VertrigoServ...', 86, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:86
2013-05-23 16:01:06 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\groups.php [ 86 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:86
2013-05-23 16:01:06 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\VertrigoServ...', 86, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:86
2013-05-23 16:01:38 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\groups.php [ 86 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:86
2013-05-23 16:01:38 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\VertrigoServ...', 86, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:86
2013-05-23 16:02:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: kafedras ~ APPPATH\classes\Controller\groups.php [ 90 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:90
2013-05-23 16:02:59 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 90, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:90
2013-05-23 16:08:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: fid ~ APPPATH\classes\Controller\groups.php [ 80 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:80
2013-05-23 16:08:47 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(80): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 80, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:80
2013-05-23 16:09:16 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\pages\groups\students.php [ 6 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:6
2013-05-23 16:09:16 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php(6): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\VertrigoServ...', 6, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(53): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:6
2013-05-23 16:10:45 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\pages\groups\students.php [ 6 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:6
2013-05-23 16:10:45 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php(6): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\VertrigoServ...', 6, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(53): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\groups\students.php:6
2013-05-23 16:44:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: additional_js ~ APPPATH\views\admin\student\student-create.php [ 1 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\student\student-create.php:1
2013-05-23 16:44:32 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\student\student-create.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 1, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(53): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\student\student-create.php:1
2013-05-23 16:48:54 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$param ~ APPPATH\classes\Controller\student.php [ 36 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:36
2013-05-23 16:48:54 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\VertrigoServ...', 36, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:36
2013-05-23 16:49:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$param ~ APPPATH\classes\Controller\student.php [ 36 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:36
2013-05-23 16:49:26 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\VertrigoServ...', 36, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:36
2013-05-23 16:49:54 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$param ~ APPPATH\classes\Controller\student.php [ 36 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:36
2013-05-23 16:49:54 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\VertrigoServ...', 36, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php:36
2013-05-23 16:50:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\student.php [ 36 ] in :
2013-05-23 16:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 16:59:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\admin\student\student-create.php [ 9 ] in :
2013-05-23 16:59:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 17:06:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\admin\student\student-create.php [ 17 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\student\student-create.php:17
2013-05-23 17:06:39 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\student\student-create.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 17, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(54): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(53): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\student\student-create.php:17
2013-05-23 17:21:18 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Student::addStudent(), called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php on line 51 and defined ~ APPPATH\classes\Model\student.php [ 37 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:37
2013-05-23 17:21:18 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php(37): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\VertrigoServ...', 37, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(51): Model_Student->addStudent()
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:37
2013-05-23 17:22:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: zalik1 ~ APPPATH\classes\Model\student.php [ 59 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:59
2013-05-23 17:22:52 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 59, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(61): Model_Student->addStudent('1', 'xcv', 'vxcv', 'xcvxv', 'xvxcvx', 'xcvcc', 'cvxv', NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:59
2013-05-23 17:23:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: zalik1 ~ APPPATH\classes\Model\student.php [ 59 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:59
2013-05-23 17:23:17 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 59, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(61): Model_Student->addStudent('1', 'xcv', 'vxcv', 'xcvxv', 'xvxcvx', 'xcvcc', 'cvxv', NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:59
2013-05-23 17:24:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: surname2 ~ APPPATH\classes\Model\student.php [ 59 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:59
2013-05-23 17:24:06 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 59, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(61): Model_Student->addStudent('1', 'xcv', 'vxcv', 'xcvxv', 'xvxcvx', 'xcvcc', 'cvxv', NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:59
2013-05-23 17:25:08 --- CRITICAL: ErrorException [ 2 ]: Missing argument 11 for Model_Student::addStudent(), called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php on line 61 and defined ~ APPPATH\classes\Model\student.php [ 47 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:47
2013-05-23 17:25:08 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php(47): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\VertrigoServ...', 47, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(61): Model_Student->addStudent('1', 'xcv', 'vxcv', 'xcvxv', 'xvxcvx', 'xcvcc', 'cvxv', NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:47
2013-05-23 17:26:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: zalik2 ~ APPPATH\classes\Model\student.php [ 60 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:60
2013-05-23 17:26:02 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 60, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(61): Model_Student->addStudent('1', 'xcv', 'vxcv', 'xcvxv', 'xvxcvx', 'xcvcc', 'cvxv', NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:60
2013-05-23 17:34:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: zalik2 ~ APPPATH\classes\Model\student.php [ 60 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:60
2013-05-23 17:34:43 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 60, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(61): Model_Student->addStudent('1', 'xcv', 'vxcv', 'xcvxv', 'xvxcvx', 'xcvcc', 'cvxv', NULL, NULL, NULL)
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:60
2013-05-23 17:35:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: zalik2 ~ APPPATH\classes\Model\student.php [ 60 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:60
2013-05-23 17:35:15 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 60, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(61): Model_Student->addStudent('1', 'xcv', 'vxcv', 'xcvxv', 'xvxcvx', 'xcvcc', 'cvxv', '0', '0', '0')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:60
2013-05-23 17:36:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: zalik2 ~ APPPATH\classes\Model\student.php [ 60 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:60
2013-05-23 17:36:10 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 60, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(61): Model_Student->addStudent('1', 'xcv', 'vxcv', 'xcvxv', 'xvxcvx', 'xcvcc', 'cvxv', '0', '0', '0')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\student.php:60
2013-05-23 17:51:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Group::removeStudent() ~ APPPATH\classes\Controller\groups.php [ 15 ] in :
2013-05-23 17:51:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-23 17:58:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\groups.php [ 14 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:14
2013-05-23 17:58:07 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 14, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_removeStudentFromGroup()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php:14
2013-05-23 18:00:33 --- CRITICAL: PDOException [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`dyplom_kafedra_calculation`.`groups_of_students`, CONSTRAINT `groups_of_students_ibfk_2` FOREIGN KEY (`sfid`) REFERENCES `study_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) ~ APPPATH\classes\Model\group.php [ 28 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:28
2013-05-23 18:00:33 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php(28): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\groups.php(88): Model_Group->addGroup('5', '3', 'mnbm', 'bnmbnm')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Groups->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Groups))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\group.php:28