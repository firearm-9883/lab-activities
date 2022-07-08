<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
if(isset($_POST['num'])){
$num=$_POST['num'];
for($i=1;$i<=10;$i++){
	$mul=$num*$i;
	echo $num."*".$i."=".$mul;
	echo "<br>";
}
}
?>
<form method="post">
	enter the number:<br>
	<input type="text" name="num" id="num">
	<br>
	<input type="submit" value="display">
</form>
</body>
</html>