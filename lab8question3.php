<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form  method="post">
        Enter string: <br>
        <input type="text" name="str" id="str">
        <input type="submit" name="submit">
   </form>

</body>
</html>


<?php
if(isset($_POST["submit"])){
	echo "Button pressED";
	$count =$_POST['str'];
	echo"<br/>the length is ".str_word_count($count);
}
?>