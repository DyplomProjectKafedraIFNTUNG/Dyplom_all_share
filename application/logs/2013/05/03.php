<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-03 02:22:12 --- CRITICAL: Database_Exception [ 1146 ]: Table 'test.faculties' doesn't exist [ SELECT * FROM faculties ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 02:22:12 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM f...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(16): Kohana_Database_Query->execute()
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(15): Model_Faculty->get_all()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_faculty()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 02:22:40 --- CRITICAL: Database_Exception [ 1146 ]: Table 'test.faculties' doesn't exist [ SELECT * FROM faculties ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 02:22:40 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM f...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(16): Kohana_Database_Query->execute()
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(15): Model_Faculty->get_all()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_faculty()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 05:30:25 --- CRITICAL: Database_Exception [ 1146 ]: Table 'test.faculties' doesn't exist [ SELECT * FROM faculties ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 05:30:25 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM f...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(16): Kohana_Database_Query->execute()
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(15): Model_Faculty->get_all()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_faculty()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 07:17:08 --- CRITICAL: Database_Exception [ 1146 ]: Table 'test.faculties' doesn't exist [ SELECT * FROM faculties ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 07:17:08 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM f...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(16): Kohana_Database_Query->execute()
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(15): Model_Faculty->get_all()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_faculty()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 07:52:00 --- CRITICAL: Database_Exception [ 1146 ]: Table 'test.faculties' doesn't exist [ SELECT * FROM faculties ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 07:52:00 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM f...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(16): Kohana_Database_Query->execute()
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(15): Model_Faculty->get_all()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_faculty()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 08:41:58 --- CRITICAL: Database_Exception [ 1146 ]: Table 'test.faculties' doesn't exist [ SELECT * FROM faculties ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 08:41:58 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM f...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(16): Kohana_Database_Query->execute()
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(15): Model_Faculty->get_all()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_faculty()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 08:42:18 --- CRITICAL: Database_Exception [ 1146 ]: Table 'test.faculties' doesn't exist [ SELECT * FROM faculties ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 08:42:18 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM f...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(16): Kohana_Database_Query->execute()
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(15): Model_Faculty->get_all()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_faculty()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-03 18:55:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 13 ] in :
2013-05-03 18:55:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-03 18:55:48 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Faculty::$_db ~ APPPATH\classes\Controller\faculty.php [ 11 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php:11
2013-05-03 18:55:48 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\VertrigoServ...', 11, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_faculty()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php:11
2013-05-03 18:56:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 13 ] in :
2013-05-03 18:56:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-03 19:16:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 13 ] in :
2013-05-03 19:16:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-03 19:17:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 13 ] in :
2013-05-03 19:17:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-03 19:18:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 13 ] in :
2013-05-03 19:18:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-03 19:18:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\faculty.php [ 13 ] in :
2013-05-03 19:18:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :