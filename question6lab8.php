<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        enter  the string:<br>
        <input type ="text" name="string" id="string">
        <br>
        <input type="submit" value="dislplay">
</form>
<?php
if (isset($_POST['srting'])){
    $rev=strrev($_POST["string"]);
    if($_POST["string"]==$rev){
        echo"the string is palindrome";
    }else{
        echo"the string is not palindrome";
    }

}
?>
</body>
</html>