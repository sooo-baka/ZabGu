<?php
	define('COPYRIGHT', 'Веб-мастер');
	setlocale(LC_ALL, "russian");

	$day = strftime('%d');
	$mon = strftime('%m');
	$year = strftime('%Y');
	$hour = (int) strftime('%H');
	$welcome = 'Доброй ночи';
	if($hour >= 6 && $hour < 12)
		$welcome = 'Доброе утро';
	elseif($hour >= 12 && $hour < 18)
		$welcome = 'Добрый день';
	elseif($hour >= 18 && $hour < 24)
		$welcome = 'Добрый вечер';

	$left_menu = [
		'home' => 'index.php',
		'about' => 'about.php',
		'contract' => 'contract.php'
	];

	$left_menu_2 = [
		['link' => 'Домой', 'href' => 'index.php'],
		['link' => 'О нас', 'href' => 'about.php'],
		['link' => 'Контакты', 'href' => 'contact.php'],
		['link' => 'FOR', 'href' => 'for.php'],
		['link' => 'WHILE', 'href' => 'while.php'],
		['link' => 'Таблица умножения', 'href' => 'table.php']
	];
?>