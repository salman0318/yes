<!DOCTYPE html>

<head>
	<title>Bootstrap Example</title>

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


<?php

//include('accessControl.php');
if(isset($_POST['submit']))
{
	//var_dump('form submitted');
	//die();
    $conn = mysqli_connect('localhost','root','','products');
	
        
        //$prid=$_POST['pid'];
		$prname=$_POST['pname'];
		$prprice=$_POST['pprice'];
        $prcode=$_POST['pcode'];
        $prdiscount=$_POST['pdiscount'];
        $prstock=$_POST['pstock'];
        $prsize=$_POST['psize'];
        $prdetails=$_POST['pdetail'];
        $primg=$_POST['ppicture'];

        $res = "INSERT INTO pd(productName,productPrice,productCode,productInstock,productDiscount,productSizes,productDetails,img) VALUES('$prname','$prprice','$prcode','$prstock','$prdiscount','$prsize','$prdetails','$primg')";
        mysqli_query($conn,$res);
	
		header('Location: viewproduct.php');
}
?>


	<div class="container">

		<h2>Add New Product</h2><br>
		
		<form action=""  method="POST">
			<!-- <div class="form-group">
				<label >Product ID:</label>
				<input type="number" class="form-control" id="pid" placeholder="Enter Product ID" name="pid">
			</div> -->
			<div class="form-group">
				<label >Product Name:</label>
				<input type="text" class="form-control" id="pname" placeholder="Enter Product Name" name="pname">
			</div>
			<div class="form-group">
				<label >Product Price:</label>
				<input type="number" class="form-control" id="pprice" placeholder="Enter Product price" name="pprice">
			</div>
            <div class="form-group">
				<label >Product Code:</label>
				<input type="text" class="form-control" id="pcode" placeholder="Enter Product code" name="pcode">
			</div>
            <div class="form-group">
				<label >Product Stock(Y/N):</label>
				<input type="boolean" class="form-control" id="pstock" placeholder="Enter Product stock" name="pstock">
			</div>
            <div class="form-group">
				<label >Product Discount:</label>
				<input type="number" class="form-control" id="pdiscount" placeholder="Enter Product discount" name="pdiscount">
			</div>
            <div class="form-group">
				<label >Product Sizes:</label>
				<input type="text"  id="psize" class="form-control" placeholder="Enter Product size" name="psize">
			</div>
            <div class="form-group">
				<label >Product Detail:</label>
				<input type="textbox"  id="pdetail" class="form-control" placeholder="Enter Product details" name="pdetail">
			</div>
            <div class="form-group">
				<label >Product Image:</label>
                <input type="file" id="ppicture" name="ppicture">
			</div>
			<button type="submit" name="submit" class="btn btn-default">Submit</button>
		</form>
	</div>


</body>
</html>
