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
<?php
if(isset($_POST['submit'])){
$upper=strtoupper($_POST['str']);
echo"the uppercase is".$upper; 
}
?>

</body>
</html>