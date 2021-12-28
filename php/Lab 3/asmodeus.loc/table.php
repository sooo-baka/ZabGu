<?php
	
	function drawTable($cols, $rows, $color)
	{
		for ($tr = 1; $tr <= $rows; $tr++)
		{
			echo '<tr>';

			for($td = 1; $td <= $cols; $td++)
			{
				$background = $color;
				if($tr == 1 || $td == 1)
					$background = 'gray;font-weight:bold';
					echo '<td style="background-color:', $background, '">', $tr * $td, '</td>';
			}
			echo "</tr>";
		}			
	}
?>
<style>
	table { border: 0; }
	td { padding: 5px; text-align: center; }
</style>
<!DOCTYPE html>
<html>
	<head>
		<title>Таблица умножения</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<span class="slogan">Знания - сила</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1>Таблица умножения</h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<!-- Таблица -->
			<table>
			<?php
				drawTable(10, 10, 'red');						
			?>
			</table>
			<!-- Таблица -->
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<h2>Навигация по сайту</h2>
			<!-- Меню -->
			<ul>
				<li><a href='index.php'>Домой</a></li>
				<li><a href='about.php'>О нас</a></li>
				<li><a href='contact.php'>Контакты</a></li>
			</ul>
			<!-- Меню -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			&copy; Веб-мастер, 2017
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>