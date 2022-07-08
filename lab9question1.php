<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn=mysqli_connect("localhost","root","");
    if(!$conn){
        die("connection failed".mysqli_connect_error());
    }else{
        echo"connect successfully";
    }
   // $sql="CREATE DATABASE db_test";
    function database(){
        $conn=mysqli_connect("localhost","root","");
    $sql="CREATE DATABASE db_test";
    if(mysqli_query ($conn,$sql)){
        echo "database creaated successfully";
    }else {
        echo "error creating database;".mysqli_error($conn);
    }
    }
    function table(){
        $dbname="db_test";
        $conn=mysqli_connect("localhost","root","",$dbname);
        $sql="CREATE TABLE user(
            id int primary key auto_increment not null,
             fullname varchar(20) NOT NULL,
             age int not null,
             phone_number char(10) not null unique
            )";
        if(mysqli_query ($conn,$sql)){
            echo "table  creaated successfully";
        }else {
            echo "error creating table;".mysqli_error($conn);
            mysqli_close($conn);
        }
        }
    function insert(){
        $dbname="db_test";
        $conn=mysqli_connect("localhost","root","",$dbname);
        $sql="INSERT INTO user 
        values(1,'bina lawati',20 ,'9817911272')";
        if(mysqli_query ($conn,$sql)){
            echo "table  creaated successfully";
        }else {
            echo "error creating table;".mysqli_error($conn);
            mysqli_close($conn);
        }
        }
        table();
        insert();
     ?>
</body>
</html>