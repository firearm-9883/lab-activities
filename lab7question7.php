<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		if ($_POST['num1']>=$_POST['num2'] && $_POST['num1']>=$_POST['num3']){
			echo $_POST['num1']."is largest";
		}
		else if ($_POST['num2']>=$_POST['num1']&& $_POST['num2']>=$_POST['num3']){
			echo $_POST['num2']."is largest";
		}else{
			echo $_POST['num3']."is largest";
		}
	?>
<form method="POST">
	enter num1:<br>
	<input type="text" name="num1" id="num1">
	<br>
	enter num2:<br>
	<input type="text" name="num2" id="num2">
	<br>
	enter num3:<br>
   <input type="text" name="num3" id="num3">
<br>
<input type="submit" value="display">
</form>
</body>
</html>