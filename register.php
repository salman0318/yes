<html>
<head>
<title>User login and registration page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" type="test/css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<!--------------------------------------------------------HEADER---------------------------------------------------------->
<a href="http://localhost/phas2/home.php"><img src="logo.png"></a>
        <a href="https://www.facebook.com/"><img src="fb.png" class="rounded float-right"  alt="responsive"></a>
        <a href="https://www.instagram.com/"><img src="insta.png" class="rounded float-right"  alt="responsive"></a>
        <a href="https://web.whatsapp.com/"><img src="whatsapp.png" class="rounded float-right"  alt="responsive"></a> 
        <a href="https://twitter.com/"><img src="tweet.png" class="rounded float-right"  alt="responsive"></a>







<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h2>Register Here</h2>
<form action="sign.php" method ="post">
<div class="form-group">
<lable>User Name</lable>
<input type="text" name="user" class="form-control" required>  
</div>
<div class="form-group">
<lable>Password</lable>
<input type="password" name="password" class="form-control" required>  
</div>
 <button type="submit" class="btn btn-primary">Register</button>

</form>
<a href="http://localhost/phas2/login.php"><button class="btn btn-primary">Login</button></a>
</div>
<div class="col-md-3"></div>
</div>
</div>
</div>

<!------------------------------------------------------FOOTER-------------------------------------------------------------->


<footer class="page-footer font-small indigo">

<!-- Footer Links -->
<div class="container">


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