<html>
<head>
<title>Mobigin</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



</head>
<body>
    
<!--------------------------------------------------------HEADER---------------------------------------------------------->
<a href="http://localhost/phas2/home.php"><img src="logo.png"></a>
        <a href="https://www.facebook.com/"><img src="fb.png" class="rounded float-right"  alt="responsive"></a>
        <a href="https://www.instagram.com/"><img src="insta.png" class="rounded float-right"  alt="responsive"></a>
        <a href="https://web.whatsapp.com/"><img src="whatsapp.png" class="rounded float-right"  alt="responsive"></a> 
        <a href="https://twitter.com/"><img src="tweet.png" class="rounded float-right"  alt="responsive"></a>


    <nav class="navbar navbar-light" style="background-color:black">
    <a href="http://localhost/phas2/viewproduct.php">View Product</a>
    <a href="http://localhost/phas2/addproduct.php">Add Product</a>

    <a href ="logout.php" >LOGOUT</a>

  </nav>

  <!--View Table-->

    <?php
        $conn = mysqli_connect('localhost','root','','products');
        $sql = "SELECT * FROM pd";
        $result = $conn->query($sql);
    ?>

  <!DOCTYPE html>

<head>
  <title>Basic Level Crud  Example</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  
  <div class="container-fluid">
  
     <h2>Product Table</h2>
  <br>

          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>product ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Code</th>
        <th>Product Stock</th>
        <th>Product Discount</th>
        <th>Product Size</th>
        <th>Product Details</th>
        <th>Product Picture</th>
      </tr>
    </thead>
    <tbody>
     <?php while($res = mysqli_fetch_array($result)){ ?>
      <tr>
        <td><?php echo $res['productId'] ?></td>
        <td><?php echo $res['productName']?></td>
        <td><?php echo $res['productPrice'] ?></td>
        <td><?php echo $res['productCode'] ?></td>
        <td><?php echo $res['productInstock'] ?></td>
        <td><?php echo $res['productDiscount'] ?></td>
        <td><?php echo $res['productSizes'] ?></td>
        <td><?php echo $res['productDetails'] ?></td>
        <td><img src="<?php echo $res['img'] ?>" style="width:50px;height:50px;" > </td>


        <td><button class="btn btn-warning"><a href="updateproduct.php?productId=<?php echo 
        $res['productId']?>" style="color:white">Update</a></button> <button class="btn btn-danger" onclick="delete_row(<?php  echo $res['productId']   ?>)">Delete</button></td>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>
<script>
  function delete_row(id)
  {
    //console.log($id);
    //return false;
    if(confirm("Are you sure you want to delete?"))
    {
      window.location.href="delete.php?productId="+id+"";
    }
  }
</script>

 <!------------------------------------------------------FOOTER-------------------------------------------------------------->


 <footer class="page-footer font-small indigo">

<!-- Footer Links -->
<div class="container">

<!-- Grid row-->
<div class="row text-center d-flex justify-content-center pt-5 mb-3">

    <!-- Grid column -->
    <div class="col-md-2 mb-3">
    <h6 class="text-uppercase font-weight-bold">
        <a href="file:///G:/phase1/page2.html">About us</a>
    </h6>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 mb-3">
    <h6 class="text-uppercase font-weight-bold">
        <a href="file:///G:/phase1/page3.html">Products</a>
    </h6>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 mb-3">
    <h6 class="text-uppercase font-weight-bold">
        <a href="file:///G:/phase1/page4.html">Contact</a>
    </h6>
    </div>
    <!-- Grid column -->

</div>
<!-- Grid row-->
<hr class="rgba-white-light" style="margin: 0 15%;">

<!-- Grid row-->
<div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

    <!-- Grid column -->
    <div class="col-md-8 col-12 mt-5">
    <p style="line-height: 1.7rem">We provide best Quality Dry Nuts in best prices.We deliever online all type of Dry Nuts and 
    Crackers with free home delivery and our products are also availabe in stores.</p>
    </div>
    <!-- Grid column -->

</div>
<!-- Grid row-->
<hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

<!-- Grid row-->
<div class="row pb-3">

    <!-- Grid column -->
    <div class="col-md-12">

    <div>
        
        <nav class="navbar navbar-right" style="margin-right: 100px;">
        <!-- Facebook -->
        <a class="fb-ic">
        <i class="fab fa-facebook-f fa-lg white-text mr-4" > </i>
        <a  href="https://www.facebook.com/"><img src="fb.png" >
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
        <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
        <a href="https://twitter.com/"><img src="tweet.png">
        <!--Instagram-->
        <a class="ins-ic">
        <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
        <a href="https://instagram.com/"><img src="insta.png">
        </a>
        <!--Whastapp-->
        <a class="ins-ic">
            <i class="fab fa-whatsapp fa-lg white-text mr-4"> </i>
            <a href="https://web.whatsapp.com/"><img src="whatsapp.png">
            </a>

    </div>

    </div>
    <!-- Grid column -->

</div>
<!-- Grid row-->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
<a href="https://www.hyperstarpakistan.com/">Carrefore</a>
</div>

</footer>

  </body>
  </html>
