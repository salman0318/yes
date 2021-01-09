<?php

session_start();


$con = mysqli_connect('localhost','root','','logindata');



$name = $_POST['user'];
$pass = $_POST['password'];

$s =   "select * from sign where name ='$name' && pasword = '$pass'";
$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);


if($num == 1)
{
    $_SESSION['username']=$name;
    header('location:viewproduct.php');
}
else{

    header('location:login.php');
}

?>