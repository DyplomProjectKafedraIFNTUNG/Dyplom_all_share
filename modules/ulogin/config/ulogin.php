<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	// Возможные значения: small, panel, window
	'type' 			=> 'panel',
	
	// на какой адрес придёт POST-запрос от uLogin
	'redirect_uri' 	=>	NULL,
	
	// Сервисы, выводимые сразу, раскомментируйте строку
	'providers'		=> array(
		//'vkontakte',
		//'facebook',
		//'twitter',
		//'google',
	),
	
	// Выводимые при наведении
	'hidden' 		=> array(
		//'odnoklassniki',
		//'mailru',
		//'yandex',
		//'livejournal',
		//'openid',
		//'linkedin',
		//'liveid',
		//'flickr',
		//'webmoney',
	),
	
	// Эти поля используются для поля username в таблице users
	'username' 		=> array (
		'first_name',
		'last_name',
	),
	
	// Обязательные поля
	'fields' 		=> array(
		'email',
	),
	
	// Необязательные поля
	//Доступны следующие поля: first_name - имя пользователя, last_name - фамилия, email - e-mail, nickname - псевдоним, bdate - дата рождения, sex - пол, phone - телефон, photo - квадратная аватарка (до 100*100), photo_big - самая большая аватарка, которая выдаётся выбранной соц. сетью, city - город, country - страна.
	'optional'		=> array(
		'photo',
	),
);
