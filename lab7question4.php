<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$b=0;
$a=0;
if(isset($_POST['num'])){
$num=$_POST['num'];
$numlength = strlen($num); 
for($i=0;$i<$numlength;$i++){
	$a=$num%10;
	$b=$b+$a;
	$num=$num/10;
}

	echo "sum is".$b;
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