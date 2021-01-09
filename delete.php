<?php

$conn = mysqli_connect('localhost','root','','products');
//include('accessControl.php');
   $row_id=$_GET['productId'];
   $delete_query="DELETE FROM pd where productId=".$row_id."";
  
   if($conn->query($delete_query))
   {
   	/*delete successfully*/
   
   header('Location: viewproduct.php?message="deleted successfully"');
    
   }
   else
   {

     
   header('Location: viewproduct.php?message="Some thing went wrong"');
   }

   //header('Location: main.php');
 ?>