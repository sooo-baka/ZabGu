<?php 
	define('COPYRIGHT', 'Веб-мастер');
	setlocale(LC_ALL, "russian");
	
	include 'inc/data.inc.php';
	include 'inc/lib.inc.php';
	include 'inc/cookie.inc.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= $title ?></title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="header">
			<!-- Заголовок -->
			
			<h1><?=$header?></h1>
			
			
			<!-- Заголовок -->
			<!-- Верхняя часть страницы -->
			<!--<span class="slogan">Знания - сила</span>-->
			<?php include 'inc/top.inc.php'; ?>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">					
			<!-- Область основного контента -->
			<?php
				switch($id) {
					case 'about': include 'about.php'; break;
					case 'contact': include 'contact.php'; break;
					case 'table': include 'table.php'; break;
					case 'select': include 'select.php'; break;
					default: include 'inc/index.inc.php'; break;
				}
			?>
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<?php include 'inc/menu.inc.php'; ?>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<?php include 'inc/bottom.inc.php' ?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>