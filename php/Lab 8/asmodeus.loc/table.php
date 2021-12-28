<style>
	table { border: 0; }
	td { padding: 5px; text-align: center; }
</style>
<!-- Область основного контента -->
<form action='<?= $_SERVER['REQUEST_URI']?>' method='POST'>
	<label>Количество колонок: </label><br/>
	<input name='cols' type='text' value="<?= @$_POST['cols']?>" /><br/>
	<label>Количество строк: </label><br/>
	<input name='rows' type='text' value="<?= @$_POST['rows']?>" /><br/>
	<label>Цвет: </label><br/>
	<input name='color' type='text' value="<?= @$_POST['color']?>" /><br/><br/>
	<input type='submit' value='Создать' />
</form>
<!-- Таблица -->
<table>
	<?php		
		
		drawTable(@$_POST['cols'], @$_POST['rows'], @$_POST['color']);						
	?>
</table>
<!-- Таблица -->
<!-- Область основного контента -->		