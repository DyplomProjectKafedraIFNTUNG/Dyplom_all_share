<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-22 06:28:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 31 ] in :
2013-05-22 06:28:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 06:30:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 28 ] in :
2013-05-22 06:30:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 06:31:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH\classes\Controller\user.php [ 28 ] in :
2013-05-22 06:31:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 06:51:26 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php:211
2013-05-22 06:51:26 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\VertrigoServ...', 211, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('password', 'n', 'o')
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(407): Kohana_Validation->rules('password', Array)
#3 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1266): Kohana_ORM->_validation()
#4 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(Object(Validation))
#5 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#6 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(40): Model_Auth_User->create_user(Array, Array)
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php:211
2013-05-22 06:56:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ MODPATH\orm\classes\Model\Auth\User.php [ 59 ] in :
2013-05-22 06:56:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 07:01:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User' not found ~ APPPATH\classes\Model\user.php [ 3 ] in :
2013-05-22 07:01:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 07:42:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User' not found ~ APPPATH\classes\Controller\user.php [ 29 ] in :
2013-05-22 07:42:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 07:50:31 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-22 07:50:31 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->save()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-22 07:56:57 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-22 07:56:57 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->save()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php:1299
2013-05-22 07:58:50 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'vdsd@mail.ru' for key 'uniq_email' [ INSERT INTO `users` (`email`, `password`, `username`) VALUES ('vdsd@mail.ru', 'c76359452be563063fa365c0029e4cdbaa21ec9c533f89c399250a985d645b82', 'vjvjvvv4556') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 07:58:50 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(36): Kohana_ORM->save()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:02:14 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2724996' for key 'uniq_username' [ INSERT INTO `users` (`email`, `password`, `username`) VALUES ('mamba@mail.ru', 'ac067217bdd69c233129b0de1b5a217b86807a95ce3348dab56878ab45e52b1d', '2724996') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:02:14 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(36): Kohana_ORM->save()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:05:15 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2724996' for key 'uniq_username' [ INSERT INTO `users` (`email`, `password`, `username`) VALUES ('mamba@mail.ru', 'ac067217bdd69c233129b0de1b5a217b86807a95ce3348dab56878ab45e52b1d', '2724996') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:05:15 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(36): Kohana_ORM->save()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:06:08 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2724996' for key 'uniq_username' [ INSERT INTO `users` (`email`, `password`, `username`) VALUES ('mamba@mail.ru', 'ac067217bdd69c233129b0de1b5a217b86807a95ce3348dab56878ab45e52b1d', '2724996') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:06:08 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(36): Kohana_ORM->save()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:06:51 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2724996' for key 'uniq_username' [ INSERT INTO `users` (`email`, `password`, `username`) VALUES ('mamba@mail.ru', 'ac067217bdd69c233129b0de1b5a217b86807a95ce3348dab56878ab45e52b1d', '2724996') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:06:51 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(36): Kohana_ORM->save()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:07:31 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:07:31 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:08:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\user.php [ 27 ] in :
2013-05-22 08:08:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 08:09:09 --- CRITICAL: ReflectionException [ 0 ]: Function unique() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php:396
2013-05-22 08:09:09 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('unique')
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1270): Kohana_Validation->check()
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php:396
2013-05-22 08:11:03 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2724996' for key 'uniq_username' [ INSERT INTO `users` (`email`, `password`, `username`) VALUES ('mamba@mail.ru', 'ac067217bdd69c233129b0de1b5a217b86807a95ce3348dab56878ab45e52b1d', '2724996') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:11:03 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(36): Kohana_ORM->save()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:12:23 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php:211
2013-05-22 08:12:23 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\VertrigoServ...', 211, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('username', Array, 'is_unique')
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(407): Kohana_Validation->rules('username', Array)
#3 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1266): Kohana_ORM->_validation()
#4 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php:211
2013-05-22 08:13:49 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:13:49 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:19:32 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:19:32 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:19:45 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:19:45 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:20:02 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:20:02 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:27:02 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'gdfgdfgdfg' for key 'uniq_username' [ INSERT INTO `users` (`email`, `password`, `username`) VALUES ('fdksdfsdf@mai.ru', 'd5f5bba6f19fa09ed97ea83889ef34b32cc453dc17eca55a83b4870d8870e8dd', 'gdfgdfgdfg') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:27:02 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(36): Kohana_ORM->save()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:27:33 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database.php:507
2013-05-22 08:27:33 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\VertrigoServ...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 D:\VertrigoServ\www\kohana\www\application\classes\Model\user.php(13): Kohana_Database_Query->execute()
#5 [internal function]: Model_User->is_unique('gdfgdfgdfg')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#7 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1270): Kohana_Validation->check()
#8 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#9 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database.php:507
2013-05-22 08:27:44 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'count(*)' in 'field list' [ SELECT `count(*)` FROM `users` WHERE `email` = 'gdfgdfgdfg' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:27:44 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `count(*...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Model\user.php(13): Kohana_Database_Query->execute()
#2 [internal function]: Model_User->is_unique('gdfgdfgdfg')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1270): Kohana_Validation->check()
#5 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:28:03 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database.php:507
2013-05-22 08:28:03 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\VertrigoServ...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 D:\VertrigoServ\www\kohana\www\application\classes\Model\user.php(13): Kohana_Database_Query->execute()
#5 [internal function]: Model_User->is_unique('gdfgdfgdfg')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#7 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1270): Kohana_Validation->check()
#8 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#9 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database.php:507
2013-05-22 08:28:23 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'gdfgdfgdfg' for key 'uniq_username' [ INSERT INTO `users` (`email`, `password`, `username`) VALUES ('fdksdfsdf@mai.ru', 'd5f5bba6f19fa09ed97ea83889ef34b32cc453dc17eca55a83b4870d8870e8dd', 'gdfgdfgdfg') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:28:23 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(36): Kohana_ORM->save()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:29:39 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'gdfgdfgdfg' for key 'uniq_username' [ INSERT INTO `users` (`email`, `password`, `username`) VALUES ('fdksdfsdf@mai.ru', 'd5f5bba6f19fa09ed97ea83889ef34b32cc453dc17eca55a83b4870d8870e8dd', 'gdfgdfgdfg') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:29:39 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(36): Kohana_ORM->save()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:31:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::orwhere() ~ APPPATH\classes\Model\user.php [ 13 ] in :
2013-05-22 08:31:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 08:31:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::orWhere() ~ APPPATH\classes\Model\user.php [ 13 ] in :
2013-05-22 08:31:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 08:32:11 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'gdfgdfgdfg' for key 'uniq_username' [ INSERT INTO `users` (`email`, `password`, `username`) VALUES ('fdksdfsdf@mai.ru', 'd5f5bba6f19fa09ed97ea83889ef34b32cc453dc17eca55a83b4870d8870e8dd', 'gdfgdfgdfg') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:32:11 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(36): Kohana_ORM->save()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 08:32:28 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:32:28 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:33:02 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:33:02 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(34): Kohana_ORM->check()
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:34
2013-05-22 08:33:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\user.php [ 83 ] in :
2013-05-22 08:33:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 08:34:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::validate() ~ APPPATH\classes\Controller\user.php [ 44 ] in :
2013-05-22 08:34:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 08:34:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::validate() ~ APPPATH\classes\Controller\user.php [ 37 ] in :
2013-05-22 08:34:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 08:35:41 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Model_User::unique() should be compatible with that of Kohana_ORM::unique() ~ APPPATH\classes\Model\user.php [ 3 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\user.php:3
2013-05-22 08:35:41 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\user.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'D:\VertrigoServ...', 3, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Core.php(511): require('D:\VertrigoServ...')
#2 [internal function]: Kohana_Core::auto_load('Model_User')
#3 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(30): spl_autoload_call('Model_User')
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\user.php:3
2013-05-22 09:00:46 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant username - assumed 'username' ~ APPPATH\classes\Controller\user.php [ 97 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:97
2013-05-22 09:00:46 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(97): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\VertrigoServ...', 97, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php:97
2013-05-22 09:07:52 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 09:07:52 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(41): Kohana_ORM->add('roles', Object(Model_Role))
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 09:09:27 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 09:09:27 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(41): Kohana_ORM->add('roles', Object(Model_Role))
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 09:13:08 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 09:13:08 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(43): Kohana_ORM->add('roles', Object(Model_Role))
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2013-05-22 09:20:57 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-22 09:20:57 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1359): Kohana_ORM->check(NULL)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(270): Model_Auth_User->complete_login()
#3 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\VertrigoServ\www\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('vdvd', '1111', false)
#5 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(100): Kohana_Auth->login('vdvd', '1111', false)
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-22 09:22:54 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-22 09:22:54 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1359): Kohana_ORM->check(NULL)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(270): Model_Auth_User->complete_login()
#3 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\VertrigoServ\www\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('vdvd', '1111', false)
#5 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(100): Kohana_Auth->login('vdvd', '1111', false)
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-22 09:28:01 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-22 09:28:01 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php(1359): Kohana_ORM->check(NULL)
#1 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Model\Auth\User.php(94): Kohana_ORM->update()
#2 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(270): Model_Auth_User->complete_login()
#3 D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\Auth\ORM.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\VertrigoServ\www\kohana\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('vdvd', '1111', false)
#5 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(100): Kohana_Auth->login('vdvd', '1111', false)
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in D:\VertrigoServ\www\kohana\www\modules\orm\classes\Kohana\ORM.php:1359
2013-05-22 11:38:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 104 ] in :
2013-05-22 11:38:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 11:41:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 104 ] in :
2013-05-22 11:41:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 11:43:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 104 ] in :
2013-05-22 11:43:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 11:44:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\user.php [ 104 ] in :
2013-05-22 11:44:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 11:45:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 105 ] in :
2013-05-22 11:45:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 11:47:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 105 ] in :
2013-05-22 11:47:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 11:47:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 105 ] in :
2013-05-22 11:47:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 11:54:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 104 ] in :
2013-05-22 11:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 11:58:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\Controller\user.php [ 104 ] in :
2013-05-22 11:58:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 12:46:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 104 ] in :
2013-05-22 12:46:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 12:46:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\user.php [ 104 ] in :
2013-05-22 12:46:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 12:47:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\user.php [ 104 ] in :
2013-05-22 12:47:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 12:48:00 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\common.php [ 12 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:12
2013-05-22 12:48:00 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(12): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\VertrigoServ...', 12, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:12
2013-05-22 12:51:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::redirect() ~ APPPATH\classes\Controller\user.php [ 104 ] in :
2013-05-22 12:51:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 12:54:14 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php on line 8 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php:43
2013-05-22 12:54:14 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\VertrigoServ...', 43, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(8): Kohana_Controller->__construct()
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(6): Controller_Common->__construct()
#3 [internal function]: Controller_User->__construct(Object(Request), Object(Response))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php:43
2013-05-22 12:54:35 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Common::__construct(), called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php on line 6 and defined ~ APPPATH\classes\Controller\common.php [ 7 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:7
2013-05-22 12:54:35 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\VertrigoServ...', 7, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(6): Controller_Common->__construct()
#2 [internal function]: Controller_User->__construct(Object(Request), Object(Response))
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:7
2013-05-22 12:56:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 109 ] in :
2013-05-22 12:56:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 12:59:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 110 ] in :
2013-05-22 12:59:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 13:01:57 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\common.php [ 17 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:17
2013-05-22 13:01:57 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(17): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\VertrigoServ...', 17, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:17
2013-05-22 13:03:24 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Controller::__construct() must be an instance of Response, none given, called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php on line 9 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php:43
2013-05-22 13:03:24 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\VertrigoServ...', 43, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(9): Kohana_Controller->__construct(Object(Request))
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(7): Controller_Common->__construct(Object(Request))
#3 [internal function]: Controller_User->__construct(Object(Request), Object(Response))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php:43
2013-05-22 13:03:48 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Controller::__construct() must be an instance of Response, none given, called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php on line 7 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php:43
2013-05-22 13:03:48 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\VertrigoServ...', 43, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\user.php(7): Kohana_Controller->__construct(Object(Request))
#2 [internal function]: Controller_User->__construct(Object(Request), Object(Response))
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php:43
2013-05-22 13:35:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\Controller\test.php [ 5 ] in :
2013-05-22 13:35:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 13:36:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\Controller\test.php [ 5 ] in :
2013-05-22 13:36:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 13:37:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\Controller\test.php [ 5 ] in :
2013-05-22 13:37:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 13:37:35 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\test.php [ 7 ] in :
2013-05-22 13:37:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 13:40:39 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\test.php [ 11 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\test.php:11
2013-05-22 13:40:39 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\test.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\VertrigoServ...', 11, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Test->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\test.php:11
2013-05-22 13:41:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\Controller\test.php [ 4 ] in :
2013-05-22 13:41:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 13:44:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 6 ] in D:\VertrigoServ\www\kohana\www\application\views\main.php:6
2013-05-22 13:44:36 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\main.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 6, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Core.php(668): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(255): Kohana_Core::find_file('views', Object(View))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(25): Kohana_View::factory(Object(View))
#9 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#15 {main} in D:\VertrigoServ\www\kohana\www\application\views\main.php:6
2013-05-22 13:44:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 6 ] in D:\VertrigoServ\www\kohana\www\application\views\main.php:6
2013-05-22 13:44:36 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\main.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 6, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\I18n.php(164): strtr('The requested v...', Array)
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Kohana\Exception.php(53): __('The requested v...', Array)
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#9 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(25): Kohana_View::factory(Object(View))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#17 {main} in D:\VertrigoServ\www\kohana\www\application\views\main.php:6
2013-05-22 13:44:36 --- CRITICAL: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: title
	
		APPPATH\views\main.php [ 6 ]
		 1 &lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
 2 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
 3 &lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
 4 &lt;head&gt;
 5 &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
 6 &lt;title&gt;&lt;?php echo $title; ?&gt;&lt;/title&gt;
 7 &lt;meta name="description" content="&lt;?php echo $description; ?&gt;" /&gt;
 8 &lt;link href="&lt;?php echo URL::base() ?&gt;public/css/style.css" rel="stylesheet" media="screen"&gt;
 9 &lt;link href="&lt;?php echo URL::base() ?&gt;public/css/bootstrap.min.css" rel="stylesheet" media="screen"&gt;
10 &lt;script src="http://code.jquery.com/jquery.js"&gt;&lt;/script&gt;
11 &lt;script src="../public/js/bootstrap.min.js"&gt;&lt;/script&gt;
		
					
				
					
													APPPATH\views\main.php [ 6 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(25) "Undefined variable: title"
						
											
							2
							string(57) "D:\VertrigoServ\www\kohana\www\application\views\main.php"
						
											
							3
							integer 6
						
											
							4
							array(2) (
    "kohana_view_filename" => string(57) "D:\VertrigoServ\www\kohana\www\application\views\main.php"
    "kohana_view_data" => array(0) 
)
						
										
				
													 1 &lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
 2 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
 3 &lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
 4 &lt;head&gt;
 5 &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
 6 &lt;title&gt;&lt;?php echo $title; ?&gt;&lt;/title&gt;
 7 &lt;meta name="description" content="&lt;?php echo $description; ?&gt;" /&gt;
 8 &lt;link href="&lt;?php echo URL::base() ?&gt;public/css/style.css" rel="stylesheet" media="screen"&gt;
 9 &lt;link href="&lt;?php echo URL::base() ?&gt;public/css/bootstrap.min.css" rel="stylesheet" media="screen"&gt;
10 &lt;script src="http://code.jquery.com/jquery.js"&gt;&lt;/script&gt;
11 &lt;script src="../public/js/bootstrap.min.js"&gt;&lt;/script&gt;

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(57) "D:\VertrigoServ\www\kohana\www\application\views\main.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(57) "D:\VertrigoServ\www\kohana\www\application\views\main.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 } // End View

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH\classes\Kohana\I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(57) "D:\VertrigoServ\www\kohana\www\application\views\main.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH\classes\Kohana\Kohana\Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(57) "D:\VertrigoServ\www\kohana\www\application\views\main.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 259 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(57) "D:\VertrigoServ\www\kohana\www\application\views\main.php"
        protected _data => array(0) 
    }
)
						
										
				
													254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
263 		$this-&gt;_file = $path;
264 

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(57) "D:\VertrigoServ\www\kohana\www\application\views\main.php"
    protected _data => array(0) 
}
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(57) "D:\VertrigoServ\www\kohana\www\application\views\main.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH\classes\Controller\common.php [ 25 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(57) "D:\VertrigoServ\www\kohana\www\application\views\main.php"
    protected _data => array(0) 
}
						
										
				
													20 		parent::before();
21 
22 		if ($this-&gt;auto_render === TRUE)
23 		{
24 			// Load the template
25 			$this-&gt;template = View::factory($this-&gt;template);
26 		}
27 		View::set_global('title', 'Мій сайт');				
28         View::set_global('description', 'Сайт');
29         $this-&gt;template-&gt;content = '';
30         $this-&gt;template-&gt;styles = array('style');

							
								
				
					
													SYSPATH\classes\Kohana\Controller.php [ 69 ]
											
					&raquo;
					Controller_Common->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_User(4) {
    public template => object View(2) {
        protected _file => string(57) "D:\VertrigoServ\www\kohana\www\application\views\main.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(4) "page"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(4) "User"
        protected _action => string(6) "create"
        protected _uri => string(11) "user/create"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(2) (
            "session" => NULL
            "authautologin" => string(40) "670ad7c5d2a469fb6bfafec5e36a058a03ffb666"
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => NULL
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH\classes\Kohana\Request\Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "page"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "User"
    protected _action => string(6) "create"
    protected _uri => string(11) "user/create"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(2) (
        "session" => NULL
        "authautologin" => string(40) "670ad7c5d2a469fb6bfafec5e36a058a03ffb666"
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => NULL
}
						
										
				
													109 		$orig_response = $response = Response::factory();
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH\classes\Kohana\Request.php [ 990 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "page"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "User"
    protected _action => string(6) "create"
    protected _uri => string(11) "user/create"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(2) (
        "session" => NULL
        "authautologin" => string(40) "670ad7c5d2a469fb6bfafec5e36a058a03ffb666"
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													985 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
986 				':uri' =&gt; $this-&gt;_uri,
987 			));
988 		}
989 
990 		return $this-&gt;_client-&gt;execute($this);
991 	}
992 
993 	/**
994 	 * Returns whether this request is the initial request Kohana received.
995 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT\index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (65)
		
			
								
					DOCROOT\index.php
				
								
					APPPATH\bootstrap.php
				
								
					SYSPATH\classes\Kohana\Core.php
				
								
					SYSPATH\classes\Kohana.php
				
								
					SYSPATH\classes\I18n.php
				
								
					SYSPATH\classes\Kohana\I18n.php
				
								
					SYSPATH\classes\Kohana\Exception.php
				
								
					SYSPATH\classes\Kohana\Kohana\Exception.php
				
								
					SYSPATH\classes\Log.php
				
								
					SYSPATH\classes\Kohana\Log.php
				
								
					SYSPATH\classes\Config.php
				
								
					SYSPATH\classes\Kohana\Config.php
				
								
					SYSPATH\classes\Log\File.php
				
								
					SYSPATH\classes\Kohana\Log\File.php
				
								
					SYSPATH\classes\Log\Writer.php
				
								
					SYSPATH\classes\Kohana\Log\Writer.php
				
								
					SYSPATH\classes\Config\File.php
				
								
					SYSPATH\classes\Kohana\Config\File.php
				
								
					SYSPATH\classes\Kohana\Config\File\Reader.php
				
								
					SYSPATH\classes\Kohana\Config\Reader.php
				
								
					SYSPATH\classes\Kohana\Config\Source.php
				
								
					SYSPATH\classes\Cookie.php
				
								
					SYSPATH\classes\Kohana\Cookie.php
				
								
					SYSPATH\classes\Route.php
				
								
					SYSPATH\classes\Kohana\Route.php
				
								
					SYSPATH\classes\Request.php
				
								
					SYSPATH\classes\Kohana\Request.php
				
								
					SYSPATH\classes\HTTP\Request.php
				
								
					SYSPATH\classes\Kohana\HTTP\Request.php
				
								
					SYSPATH\classes\HTTP\Message.php
				
								
					SYSPATH\classes\Kohana\HTTP\Message.php
				
								
					SYSPATH\classes\HTTP\Header.php
				
								
					SYSPATH\classes\Kohana\HTTP\Header.php
				
								
					SYSPATH\classes\Request\Client\Internal.php
				
								
					SYSPATH\classes\Kohana\Request\Client\Internal.php
				
								
					SYSPATH\classes\Request\Client.php
				
								
					SYSPATH\classes\Kohana\Request\Client.php
				
								
					SYSPATH\classes\Arr.php
				
								
					SYSPATH\classes\Kohana\Arr.php
				
								
					SYSPATH\classes\Response.php
				
								
					SYSPATH\classes\Kohana\Response.php
				
								
					SYSPATH\classes\HTTP\Response.php
				
								
					SYSPATH\classes\Kohana\HTTP\Response.php
				
								
					SYSPATH\classes\Profiler.php
				
								
					SYSPATH\classes\Kohana\Profiler.php
				
								
					APPPATH\classes\Controller\user.php
				
								
					APPPATH\classes\Controller\common.php
				
								
					SYSPATH\classes\Controller\Template.php
				
								
					SYSPATH\classes\Kohana\Controller\Template.php
				
								
					SYSPATH\classes\Controller.php
				
								
					SYSPATH\classes\Kohana\Controller.php
				
								
					SYSPATH\classes\View.php
				
								
					SYSPATH\classes\Kohana\View.php
				
								
					APPPATH\views\main.php
				
								
					SYSPATH\classes\Debug.php
				
								
					SYSPATH\classes\Kohana\Debug.php
				
								
					APPPATH\classes\Date.php
				
								
					SYSPATH\classes\Kohana\Date.php
				
								
					SYSPATH\views\kohana\error.php
				
								
					SYSPATH\classes\HTML.php
				
								
					SYSPATH\classes\Kohana\HTML.php
				
								
					SYSPATH\classes\UTF8.php
				
								
					SYSPATH\classes\Kohana\UTF8.php
				
								
					SYSPATH\classes\View\Exception.php
				
								
					SYSPATH\classes\Kohana\View\Exception.php
				
							
		
				Loaded extensions (44)
		
			
								
					Core
				
								
					bcmath
				
								
					calendar
				
								
					ctype
				
								
					date
				
								
					ereg
				
								
					filter
				
								
					ftp
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mcrypt
				
								
					SPL
				
								
					odbc
				
								
					pcre
				
								
					Reflection
				
								
					session
				
								
					standard
				
								
					mysqlnd
				
								
					tokenizer
				
								
					zip
				
								
					zlib
				
								
					libxml
				
								
					dom
				
								
					PDO
				
								
					bz2
				
								
					SimpleXML
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					apache2handler
				
								
					openssl
				
								
					curl
				
								
					gd
				
								
					mbstring
				
								
					mysql
				
								
					mysqli
				
								
					Phar
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					SQLite
				
								
					mhash
				
								
					xdebug
				
							
		
														$_COOKIE
		
			
								
					session
					string(26) "paf4u76l5sgk7ue1bnfge14gi2"
				
								
					authautologin
					string(81) "a686cb1e9509eec491620f8b663a45713451d6ad~670ad7c5d2a469fb6bfafec5e36a058a03ffb666"
				
							
		
						$_SERVER
		
			
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					HTTP_HOST
					string(14) "127.0.0.1:8080"
				
								
					HTTP_USER_AGENT
					string(72) "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(35) "ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3"
				
								
					HTTP_ACCEPT_ENCODING
					string(13) "gzip, deflate"
				
								
					HTTP_COOKIE
					string(133) "session=paf4u76l5sgk7ue1bnfge14gi2; authautologin=a686cb1e9509eec491620f8b663a45713451d6ad%7E670ad7c5d2a469fb6bfafec5e36a058a03f&nbsp;&hellip;"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					PATH
					string(419) "D:\server\php\;C:\PROGRA~2\Borland\CBUILD~1\Bin;C:\PROGRA~2\Borland\CBUILD~1\Projects\Bpl;C:\Program Files (x86)\NVIDIA Corporat&nbsp;&hellip;"
				
								
					SystemRoot
					string(10) "C:\Windows"
				
								
					COMSPEC
					string(27) "C:\Windows\system32\cmd.exe"
				
								
					PATHEXT
					string(53) ".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC"
				
								
					WINDIR
					string(10) "C:\Windows"
				
								
					SERVER_SIGNATURE
					string(0) ""
				
								
					SERVER_SOFTWARE
					string(32) "Apache/2.2.23 (Win32) PHP/5.3.18"
				
								
					SERVER_NAME
					string(9) "127.0.0.1"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(4) "8080"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(19) "D:/VertrigoServ/www"
				
								
					SERVER_ADMIN
					string(14) "root@localhost"
				
								
					SCRIPT_FILENAME
					string(40) "D:/VertrigoServ/www/kohana/www/index.php"
				
								
					REMOTE_PORT
					string(5) "64769"
				
								
					REDIRECT_URL
					string(19) "/kohana/user/create"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(19) "/kohana/user/create"
				
								
					SCRIPT_NAME
					string(17) "/kohana/index.php"
				
								
					PATH_INFO
					string(12) "/user/create"
				
								
					PATH_TRANSLATED
					string(31) "D:\VertrigoServ\www\user\create"
				
								
					PHP_SELF
					string(29) "/kohana/index.php/user/create"
				
								
					REQUEST_TIME
					integer 1369248276
				
							
		
			

 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 13:44:36 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename(Object(View))
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(25): Kohana_View::factory(Object(View))
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 14:00:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Controller\user.php [ 125 ] in :
2013-05-22 14:00:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 14:00:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 17 ] in :
2013-05-22 14:00:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 14:17:29 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 14:17:29 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/info')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/info', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(25): Kohana_View::factory('/pages/info')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_info()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 14:18:23 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 14:18:23 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/info')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/info', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(25): Kohana_View::factory('/pages/info')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_info()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 14:19:40 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 14:19:40 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/info')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/info', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(25): Kohana_View::factory('/pages/info')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_sinfo()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 14:19:49 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/info could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 14:19:49 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/info')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/info', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(25): Kohana_View::factory('/pages/info')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_sinfo()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 14:20:14 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/sinfo could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 14:20:14 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/sinfo')
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/sinfo', NULL)
#2 D:\VertrigoServ\www\kohana\www\application\classes\Controller\student.php(25): Kohana_View::factory('/pages/sinfo')
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Student->action_sinfo()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php:137
2013-05-22 14:21:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: surname ~ APPPATH\views\pages\sinfo.php [ 3 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php:3
2013-05-22 14:21:14 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php(3): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 3, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(41): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php:3
2013-05-22 14:21:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: surname ~ APPPATH\views\pages\sinfo.php [ 4 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php:4
2013-05-22 14:21:36 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 4, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(41): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php:4
2013-05-22 14:21:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: surname ~ APPPATH\views\pages\sinfo.php [ 4 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php:4
2013-05-22 14:21:42 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 4, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(41): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php:4
2013-05-22 14:21:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: surname ~ APPPATH\views\pages\sinfo.php [ 4 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php:4
2013-05-22 14:21:58 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 4, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(41): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Student))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\sinfo.php:4
2013-05-22 14:23:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Faculty' not found ~ APPPATH\views\pages\faculty.php [ 3 ] in :
2013-05-22 14:23:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 14:23:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Faculty' not found ~ APPPATH\views\pages\faculty.php [ 3 ] in :
2013-05-22 14:23:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 14:34:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\faculty.php [ 30 ] in :
2013-05-22 14:34:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 14:35:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: fname ~ APPPATH\views\pages\faculty.php [ 10 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php:10
2013-05-22 14:35:07 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 10, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(41): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php:10
2013-05-22 14:35:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: fname ~ APPPATH\views\pages\faculty.php [ 10 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php:10
2013-05-22 14:35:30 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 10, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(41): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php:10
2013-05-22 14:35:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: fname ~ APPPATH\views\pages\faculty.php [ 10 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php:10
2013-05-22 14:35:40 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 10, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(41): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php:10
2013-05-22 14:36:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: fname ~ APPPATH\views\pages\faculty.php [ 10 ] in D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php:10
2013-05-22 14:36:23 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\VertrigoServ...', 10, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(41): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\pages\faculty.php:10
2013-05-22 14:43:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getFacutyById() on a non-object ~ APPPATH\classes\Controller\faculty.php [ 28 ] in :
2013-05-22 14:43:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 14:43:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\admin\faculty\edit.php [ 2 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:2
2013-05-22 14:43:49 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 2, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(41): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:2
2013-05-22 14:45:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH\classes\Controller\faculty.php [ 35 ] in :
2013-05-22 14:45:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 14:45:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\faculty.php [ 41 ] in :
2013-05-22 14:45:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 14:45:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\admin\faculty\edit.php [ 2 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:2
2013-05-22 14:45:32 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 2, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(41): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:2
2013-05-22 15:03:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function find_all() ~ APPPATH\classes\Controller\common.php [ 36 ] in :
2013-05-22 15:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 15:10:06 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 988 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-22 15:10:06 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(36): Kohana_ORM->find_all()
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-22 15:10:13 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-22 15:10:13 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(36): Kohana_ORM->find()
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-22 15:10:14 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-22 15:10:14 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(36): Kohana_ORM->find()
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-22 15:12:39 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 988 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-22 15:12:39 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(36): Kohana_ORM->find_all()
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-22 15:13:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\common.php [ 39 ] in :
2013-05-22 15:13:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 15:13:54 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH\classes\Controller\common.php [ 39 ] in :
2013-05-22 15:13:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 15:16:08 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\common.php [ 36 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-22 15:16:08 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\VertrigoServ...', 36, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:36
2013-05-22 15:18:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2013-05-22 15:18:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 15:18:32 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php on line 9 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php:43
2013-05-22 15:18:32 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\VertrigoServ...', 43, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(9): Kohana_Controller->__construct()
#2 [internal function]: Controller_Common->__construct(Object(Request), Object(Response))
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php:43
2013-05-22 15:18:42 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Controller::__construct() must be an instance of Response, none given, called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php on line 9 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php:43
2013-05-22 15:18:42 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\VertrigoServ...', 43, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(9): Kohana_Controller->__construct(Object(Request))
#2 [internal function]: Controller_Common->__construct(Object(Request), Object(Response))
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php:43
2013-05-22 15:19:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_User::loadRoles() ~ APPPATH\classes\Controller\common.php [ 10 ] in :
2013-05-22 15:19:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 15:23:35 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\common.php [ 65 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:65
2013-05-22 15:23:35 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(65): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\VertrigoServ...', 65, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(10): Controller_Common->_loadRoles()
#2 [internal function]: Controller_Common->__construct(Object(Request), Object(Response))
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:65
2013-05-22 15:23:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\common.php [ 62 ] in :
2013-05-22 15:23:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 15:30:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\admin\faculty\edit.php [ 2 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:2
2013-05-22 15:30:28 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 2, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:2
2013-05-22 15:31:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\admin\faculty\edit.php [ 2 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:2
2013-05-22 15:31:48 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 2, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:2
2013-05-22 15:32:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\admin\faculty\edit.php [ 2 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:2
2013-05-22 15:32:31 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 2, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:2
2013-05-22 15:32:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\admin\faculty\edit.php [ 13 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:13
2013-05-22 15:32:46 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 13, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:13
2013-05-22 15:32:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\admin\faculty\edit.php [ 13 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:13
2013-05-22 15:32:47 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 13, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:13
2013-05-22 15:57:20 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\faculty.php [ 55 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php:55
2013-05-22 15:57:20 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(55): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\VertrigoServ...', 55, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php:55
2013-05-22 16:05:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: token ~ APPPATH\views\admin\faculty\edit.php [ 9 ] in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:9
2013-05-22 16:05:48 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 9, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\VertrigoServ\www\kohana\www\application\views\main.php(65): Kohana_View->__toString()
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(61): include('D:\VertrigoServ...')
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\VertrigoServ...', Array)
#7 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(49): Kohana_View->render()
#8 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#11 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#14 {main} in D:\VertrigoServ\www\kohana\www\application\views\admin\faculty\edit.php:9
2013-05-22 16:30:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\Controller\faculty.php [ 38 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php:38
2013-05-22 16:30:50 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\VertrigoServ...', 38, Array)
#1 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#7 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php:38
2013-05-22 16:34:01 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Common::_redirect(), called in D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php on line 48 and defined ~ APPPATH\classes\Controller\common.php [ 54 ] in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:54
2013-05-22 16:34:01 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php(54): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\VertrigoServ...', 54, Array)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(48): Controller_Common->_redirect()
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Controller\common.php:54
2013-05-22 16:44:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\faculty.php [ 50 ] in :
2013-05-22 16:44:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 16:44:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\faculty.php [ 50 ] in :
2013-05-22 16:44:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-22 16:47:22 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'jpg, sdfsdf)' at line 1 ~ APPPATH\classes\Model\faculty.php [ 38 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:38
2013-05-22 16:47:22 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(38): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(50): Model_Faculty->updateFaculty('1', 'fsdf', '1.jpg', 'sdfsdf')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:38
2013-05-22 16:48:02 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'jpg, sdfsdf)' at line 1 ~ APPPATH\classes\Model\faculty.php [ 39 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:48:02 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(39): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(50): Model_Faculty->updateFaculty('1', 'fsdf', '1.jpg', 'sdfsdf')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:48:41 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1318 Incorrect number of arguments for PROCEDURE dyplom_kafedra_calculation.updateFaculty; expected 4, got 0 ~ APPPATH\classes\Model\faculty.php [ 39 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:48:41 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(39): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(50): Model_Faculty->updateFaculty('1', 'fsdf', '1.jpg', 'sdfsdf')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:48:52 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1318 Incorrect number of arguments for PROCEDURE dyplom_kafedra_calculation.updateFaculty; expected 4, got 1 ~ APPPATH\classes\Model\faculty.php [ 39 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:48:52 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(39): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(50): Model_Faculty->updateFaculty('1', 'fsdf', '1.jpg', 'sdfsdf')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:49:22 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'jpg, sdfsdf)' at line 1 ~ APPPATH\classes\Model\faculty.php [ 39 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:49:22 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(39): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(50): Model_Faculty->updateFaculty('1', 'fsdf', '1.jpg', 'sdfsdf')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:49:42 --- CRITICAL: PDOException [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'fsdf' in 'field list' ~ APPPATH\classes\Model\faculty.php [ 39 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:49:42 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(39): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(50): Model_Faculty->updateFaculty('1', 'fsdf', '1.jpg', 'sdfsdf')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:50:00 --- CRITICAL: PDOException [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'fsdf' in 'field list' ~ APPPATH\classes\Model\faculty.php [ 39 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:50:00 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(39): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(50): Model_Faculty->updateFaculty('1', 'fsdf', '1.jpg', 'sdfsdf')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:50:54 --- CRITICAL: PDOException [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'вылао' in 'field list' ~ APPPATH\classes\Model\faculty.php [ 39 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:50:54 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(39): PDOStatement->execute()
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(50): Model_Faculty->updateFaculty('1', '??????????', '1.jpg', 'sdfsdf')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:39
2013-05-22 16:53:42 --- CRITICAL: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ APPPATH\classes\Model\faculty.php [ 40 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:40
2013-05-22 16:53:42 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(40): PDOStatement->fetchAll(2)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(50): Model_Faculty->updateFaculty('1', '??????????', '1.jpg', 'sdfsdf')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:40
2013-05-22 16:54:04 --- CRITICAL: PDOException [ HY000 ]: SQLSTATE[HY000]: General error ~ APPPATH\classes\Model\faculty.php [ 40 ] in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:40
2013-05-22 16:54:04 --- DEBUG: #0 D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php(40): PDOStatement->fetchAll(2)
#1 D:\VertrigoServ\www\kohana\www\application\classes\Controller\faculty.php(50): Model_Faculty->updateFaculty('1', '??????????', '1.jpg', 'sdfsdf')
#2 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Faculty->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Faculty))
#5 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\VertrigoServ\www\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\VertrigoServ\www\kohana\www\index.php(117): Kohana_Request->execute()
#8 {main} in D:\VertrigoServ\www\kohana\www\application\classes\Model\faculty.php:40