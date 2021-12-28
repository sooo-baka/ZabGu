<!DOCTYPE html>
<html>
	<head>
		<title>Наш сайт</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="header">
			<!-- Верхняя часть страницы -->
			<!--<span class="slogan">Знания - сила</span>-->
			<? include 'inc/top.inc.php'; ?>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">			
			<!-- Область основного контента -->
			<? include 'inc/index.inc.php' ?>
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<? include 'inc/menu.inc.php'; ?>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<? include 'inc/bottom.inc.php' ?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>