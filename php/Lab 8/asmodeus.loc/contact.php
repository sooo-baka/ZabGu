<?php
	define('DB_HOST','localhost');
	define('DB_LOGIN','root');
	define('DB_PASSWORD','root');
	define('DB_NAME','web');
	$link=mysqli_connect(DB_HOST,DB_LOGIN, DB_PASSWORD, DB_NAME);
	
	function clearStr($data){
		global $link;
		return mysqli_real_escape_string($link,trim(strip_tags($data)));
	}
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = clearStr($_POST['subject']);
		$msg = clearStr($_POST['body']);
		$email = clearStr($_POST['email']);
		$sql = "INSERT INTO msgs_contact(name, msg, email) VALUES('$name','$msg', '$email')";
		mysqli_query($link,$sql) or die(mysqli_error($link));
		header('Location:'.$_SERVER['REQUEST_URI']);
		exit;
	}
?>
<!-- Область основного контента -->
<h3>Адрес</h3>
<h3>Задайте вопрос</h3>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
	<label>E-Mail: </label><br />
	<input name='email' type='text' size="50"/><br />	
	<label>Тема письма: </label><br />
	<input name='subject' type='text' size="50"/><br />
	<label>Содержание: </label><br />
	<textarea name='body' cols="50" rows="10"></textarea><br /><br />
	<input type='submit' value='Отправить' />
</form>	
<!-- Область основного контента -->		