<?php

	if(!isset($_GET["productId"])) {
		header('Location: viewproduct.php');
		exit();
	}
$user_id=$_GET['productId']; 
$conn = mysqli_connect('localhost','root','','products');
$user_data=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM pd where productId=".$user_id.""));

if(isset($_POST['submit']))
{

		//update the user
        $prid=$_POST['user_ID'];
		$prname=$_POST['pname'];
		$prprice=$_POST['pprice'];
        $prcode=$_POST['pcode'];
        $prdiscount=$_POST['pdiscount'];
        $prstock=$_POST['pstock'];
        $prsize=$_POST['psize'];
        $prdetails=$_POST['pdetail'];
        $primg=$_POST['ppicture'];
        $res = "UPDATE pd SET productName= '$prname',productPrice= '$prprice',productCode= '$prcode',productInstock= '$prstock',productDiscount= '$prdiscount',productSizes= '$prsize',productDetails= '$prdetails',img= '$primg' Where productId='$prid'";
		mysqli_query($conn,$res);
	
		header('Location: viewproduct.php');
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Product</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Edit User</h2><br>
		
		<form action=""  method="post">
			<input type="hidden" name="user_ID" value="<?php echo $_GET['productId'] ?>">
			<div class="form-group">
				<label for="pname">Product Name:</label>
				<input type="text" class="form-control" id="pname"  name="pname" value="<?php echo $user_data['productName']; ?>">
			</div>
			<div class="form-group">
				<label for="pprice">Product Price:</label>
				<input type="number" class="form-control" id="pprice" name="pprice"
				value="<?php echo $user_data['productPrice']; ?>">
			</div>
			<div class="form-group">
				<label >Product Code:</label>
				<input type="text" class="form-control" id="pcode" name="pcode" value="<?php echo $user_data['productCode']; ?>">
			</div>
            <div class="form-group">
				<label >Product Stock:</label>
				<input type="text" class="form-control" id="pstock" name="pstock" value="<?php echo $user_data['productInstock']; ?>">
			</div>
            <div class="form-group">
				<label >Product Discount:</label>
				<input type="number" class="form-control" id="pdiscount" name="pdiscount" value="<?php echo $user_data['productDiscount']; ?>">
			</div>
            <div class="form-group">
				<label >Product Sizes:</label>
				<input type="text" class="form-control" id="psize" name="psize" value="<?php echo $user_data['productSizes']; ?>">
			</div>
            <div class="form-group">
				<label >Product Details:</label>
				<input type="textbox" class="form-control" id="pdetail" name="pdetail" value="<?php echo $user_data['productDetails']; ?>">
			</div>
            <div class="form-group">
				<label >Product Image:</label>
                <input type="file" id="ppicture" name="ppicture">
			</div>
			<img src="<?php echo $res['img'] ?>" style="width:50px;height:50px;" >
			<button type="submit" name="submit" class="btn btn-default">Submit</button>
		</form>
	</div>

	
</body>
</html>