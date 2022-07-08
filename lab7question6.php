<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
	 $num1=$_POST['num1'];
     $num2=$_POST['num2'];
   //  print_r($_POST);
	function addition(){
	    $add=$GLOBALS['num1']+$GLOBALS['num2'];
	    echo "<br/>the result is".$add;
	}
	function sub(){
		$sub=$GLOBALS['num1']-$GLOBALS['num2'];
		echo "<br/>the result is".$sub;
	}
	function multi(){
		$mul=$GLOBALS['num1']*$GLOBALS['num2'];
		echo "<br/>the result is".$mul;
	}
	addition();
	sub();
	multi();
?>
<form method="post">
	enter num1:<br>
	<input type="text" name="num1" id="num1">
	<br>
	enter num2:<br>
	<input type="text" name="num2" id="num2">
	<br>
	<input type="submit" value="submit">
</form>
</body>
</html>