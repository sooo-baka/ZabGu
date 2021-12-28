<form action='<?= $_SERVER['REQUEST_URI']?>' method='POST'>
	<select name='sel'>
		<option value="1">Yandex</option>
		<option value="2">Google</option>
		<option value="3">Mail</option>
		<option value="4">Rambler</option>
	</select>
	<INPUT TYPE="submit" name="Перенаправить" />
</form>
<?php
	$loc = @$_POST['sel'];	
	$url;
	
	switch($loc){
		case "1": $url = 'https://yandex.ru'; break;
		case "2": $url = 'https://google.com'; break;
		case "3": $url = 'https://mail.ru'; break;
		case "4": $url = 'https://rambler.ru'; break;
	}
	if ($url) 
		header("Location: $url");
?>
