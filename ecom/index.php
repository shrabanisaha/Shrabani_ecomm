<html>

<head>

    <title>template</title>

    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">𝓬𝓪𝓻𝓪</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="template1.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                 <li class="nav-item"> <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
                </li>
                <li class="nav-item"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search_btn">Search</button></li>
              </ul>


            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-cart-shopping"></i>&nbsp; Cart
                    </a>
                    <div class="dropdown-menu" style="width:400px;">
                        <div class="card-header bg-primary"></div>
                        <div class="card">

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-3">S.No.</div>
                                    <div class="col-md-3">Product Image</div>
                                    <div class="col-md-3">Product Name</div>
                                    <div class="col-md-3">Product Price</div>



                                </div>

                            </div>

                            <div class="card-footer"></div>
                        </div>

                    </div>
                </li>

                <!-- <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;SignIn</a>
   </li>
-->


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-right-to-bracket"></i>&nbsp; SignIn
                    </a>
                    <div class="dropdown-menu" style="width:300px;">
                        <div class="card-header bg-primary">Login</div>
                        <div class="card">

                            <div class="card-header bg-primary">

                                <label for="email"> Email </label>
                                <input type="email" name="email" id="email" class="form-control">
                                <label for="pass"> Passowrd </label>
                                <input type="password" name="pass" id="pass" class="form-control">
                                <br>
                                <input type="button" name="login" id="login" value="login" class="btn btn-success" style="float:right">
                            </div>

                            <div class="card-footer"></div>
                        </div>

                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-user"></i>&nbsp;SignUp</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>

    <div class="row">

        <div class="col-md-1"></div>
        <div class="col md-2">
            <div class="d-flex align-items-start">
                <div id="display_cat">


                </div>

            </div>


            <!--   

            <nav class="nav nav-pills flex-column">

                <li class="nav-item active"><a href="#" class="nav-link active">Categories</a></li>
                <a class="nav-link text-white" href="#">Mens formal pants</a>
                <a class="nav-link text-white" href="#">Mens formal shirts</a>
                <a class="nav-link text-white" href="#">Mens casual shirts</a>
                <a class="nav-link text-white" href="#">Womens formal pants</a>
                <a class="nav-link text-white" href="#">Womens formal shirts</a>
            </nav>-->



            <div class="d-flex">

                <div id="display_brands">


                </div>
                <!--<div class='nav nav-pills flex-column'>
                    <li class='nav-item active'><a href='#' class='nav-link active'>Brands</a></li>
                    <li class='nav-item '><a href='#' class='nav-link'>Brands</a></li>
                    <li class='nav-item '><a href='#' class='nav-link'>Brands</a></li>
                    <li class='nav-item '><a href='#' class='nav-link'>Brands</a></li>
                    <li class='nav-item '><a href='#' class='nav-link'>Brands</a></li>
                </div>-->
            </div>
        </div>



        <div class="col-md-8">

            <div class="container">
                <div class="card">
                    <div class="card-header bg-primary text-white"> Products</div>
                    <div class="card-body">
                        <div id="display_products">


                        </div>
                        <!--  <div class="row">

                            <div class="col-md-4">

                                

                                <div class="card">
                                    <div class="card-header bg-primary text-white"> samsung s22</div>
                                    <div class="card-body">
                                        <img src="images/s22.jpg" />

                                    </div>
                                    <div class="card-footer">Rs. 35000

                                        <button class="btn btn-success btn-sm" style="float:right">Add to Cart</button>

                                    </div>
                                </div>

                            </div>


                        </div>
-->







                    </div>
                    <div class="card-footer"></div>
                </div>

            </div>

        </div>



        <div class="col-md-1"></div>

    </div>


    <div class="row mine">

        <div class="col md-4">

            <h1>𝓬𝓪𝓻𝓪</h1>

            <b>Contact</b>


            <p>Address:562 Washington road,Street32,San Francisco</p>
            <p>Phone:+01 22222 36/(+91)01 2345 6789</p>
            <p>Hours:10:00-18:00,Mon-Sat</p>

            <b>Follow Us</b>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>

        </div>


        <div class="col md-2">

            <h4><b>About</b></h4>
            <p>About us</p>
            <p>Delivery information</p>
            <p>Privacy policy</p>
            <p>Terms and Condition</p>
            <p>Contact us</p>

        </div>


        <div class="col md-2">
            <h4><b>My account</b></h4>
            <p>Sign-in</p>
            <p>View cart</p>
            <p>My wishlist</p>
            <p>Track my order</p>
            <p>Help</p>

        </div>


        <div class="col md-4">
            <h4><b>Install app</b></h4>
            <p>From app store or google app</p>

            <button type="button" class="btn btn-dark"><i class="fa-brands fa-apple">App store</i></button> <br> <br>
            <button type="button" class="btn btn-dark"><i class="fa-brands fa-google-play">Google play</i></button>

            <br> <br>

            <p>Secured Payment Gateways</p>
            <i class="fa-solid fa-credit-card"></i>
            <i class="fa-solid fa-wallet"></i>
            <i class="fa-solid fa-wifi"></i>
            <i class="fa-brands fa-paypal"></i>

        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>
