<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'ORM',   //вказуємо, що авторизація буде проводитись через ORM
	'hash_method'  => 'sha256',
	'hash_key'     => 'рандомний рядок для побудови хешу',
	'lifetime'     => 1209600, //час життя сесії в секундах
	'session_type' => Session::$default,
	'session_key'  => 'auth_user', //ім'я ключа сесії

	// Username/password combinations for the Auth File driver
	'users' => array(
		// 'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
	),

);
