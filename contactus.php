<html>
    <head>
        <title>Contact Us</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
        
        
    </head>
    <body>
<!--------------------------------------------------------HEADER---------------------------------------------------------->
<a href="http://localhost/phas2/home.php"><img src="logo.png"></a>
        <a href="https://www.facebook.com/"><img src="fb.png" class="rounded float-right"  alt="responsive"></a>
        <a href="https://www.instagram.com/"><img src="insta.png" class="rounded float-right"  alt="responsive"></a>
        <a href="https://web.whatsapp.com/"><img src="whatsapp.png" class="rounded float-right"  alt="responsive"></a> 
        <a href="https://twitter.com/"><img src="tweet.png" class="rounded float-right"  alt="responsive"></a>

<!---------------------------------------------------------NAVBAR---------------------------------------------------------->
        <nav class="navbar navbar-right" style="background-color:rgba(0, 0, 0, 0.747); ">
            <a style="color: white;" href="http://localhost/phas2/home.php">Home</a>
            <a style="color: white;" href="http://localhost/phas2/aboutus.php">About US</a>
            <a style="color: white;" href="http://localhost/phas2/products.php">Products</a>
            <a style="color: white;" href="http://localhost/phas2/contactus.php">Contact Us</a>
            <a style="color: white;" href="http://localhost/phas2/login.php">Login/Register</a>
        
        </nav>

<!-----------------------------------------------------Contact Us----------------------------------------------------------->
<br> <br>
<h3>Contact Us</h3>
<div class="container">
<div class="row" width: 1200px;>
    
    <div class="col-lg-9" > 
      
        <label>Name:</label>
        <input  type="text" name="first" size="20" maxlength="20" >
        </br>
        
        <label>Email:</label>
        <input type="email" name="pass" maxlength="10"></br>
        
        <label>Phone:</label>
        <input type="number" name="num"></br>
        
        <label>Role:</label>
        Student<input type="radio" name="radiobutton" value="male">
        Teacher<input type="radio" name="radiobutton1" value="male">
        </br>
        <label >City:</label>
        <select name="dropdown">
            <option value="Lahore"selected >Lahore </option>
            <option value="Karachi" > Karachi </option>
            <option value="Pindi"> Pindi </option>
        </select>
        </br>	
        <label>Message</label><br>
        <textarea col="30" rows="5"></textarea><br><br>
        <button>Submit</button>
    </div>  
        
    <div class="col-lg-3" >
                <div style="border: solid black;height:250px;">
                        <p>
                            1-KM Defence Road<br>
                            UOL, Lahore Pakistan
                        </p>
                </div>  
                <br>
                <div id="googleMap" style=" height:250px; border: solid black;">

                <script>
                function myMap() {
                var mapProp= {
                  center:new google.maps.LatLng(51.508742,-0.120850),
                  zoom:5,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
                </script>
                
                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
                
            </div>
        </div>
    </div>




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