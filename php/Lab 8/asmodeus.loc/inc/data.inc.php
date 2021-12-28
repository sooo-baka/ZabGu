<?php
	

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
		['link' => 'Домой', 'href' => 'index.php'],
		['link' => 'О нас', 'href' => 'index.php?id=about'],
		['link' => 'Контакты', 'href' => 'index.php?id=contact'],
		['link' => 'FOR', 'href' => 'for.php'],
		['link' => 'WHILE', 'href' => 'while.php'],
		['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
		['link' => 'SELECT', 'href' => 'index.php?id=select']
	];
	
	$title = 'Наш сайт';
	$header = "$welcome, Гость";
	$id = strtolower(strip_tags(trim($_GET['id'])));
	switch($id) {
		case 'about': {			
			$title = 'О сайте';
			$header = 'О нашем сайте';
			break;
		}
		case 'contact': {			
			$title = 'Контакты';
			$header = 'Обратная связь';
			break;
		}
		case 'table': {			
			$title = 'Таблица умножения';
			$header = 'Таблица умножения';
			break;
		}
	}
?>