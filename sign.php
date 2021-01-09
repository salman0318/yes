<?php

session_start();


$con = mysqli_connect('localhost','root','','logindata');



$name = $_POST['user'];
$pass = $_POST['password'];

$s =   "select * from sign where name ='$name'";
$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);


if($num == 1)
{
    echo"User Name Already Taken";
}
else{

    $reg = "insert into sign(name,pasword) values('$name','$pass')";
    mysqli_query($con , $reg);
    echo "registration successfull";
    header('location:login.php');
}

?>