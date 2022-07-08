<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$str=strrev($_POST['str']);
echo"the reverse of the strign is ".$str
?>
<form  method="post">
     Enter string: <br>
     <input type="text" name="str" id="str">
     <input type="submit" value="submit">
   </form>
</body>
</html>