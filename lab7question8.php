<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$fact=1;
for($i=1;$i<=$_POST['num'];$i++){
	$fact=$fact*$i;
}
echo"the result is".$fact;
?>
<form>
	enter the number:<br>
	<input type="text" name="num" id="num">
	<br> 
	<input type="submit" value="submit">
</form>
</body>
</html>