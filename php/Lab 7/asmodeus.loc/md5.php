<html>
<head>
	<title>Хеширование MD5</title>
</head>

<body>
<h1>Хеширование MD5</h1>
<?
$str = $_GET["str"];
?>
<form action="<?=$_SERVER["PHP_SELF"]?>">
	Строка:
	<input type="text" name="str" value="<?=$str?>">
	<input type="submit" value="MD5">
</form>
<?
if ($str) {
	echo "<h2>", md5($str) ,"</h2>";
	
	/* 
	Вычисляет MD5 хэш строки str используя алгоритм MD5 RSA Data Security, Inc. и возвращает этот хэш. 
	Хэш представляет собой 32-значное шестнадцатеричное число. 
	Если необязательный аргумент raw_output имеет значение TRUE, 
	то возвращается бинарная строка из 16 символов.
	*/
}
?>
</body>
</html>
