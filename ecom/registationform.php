<html>

<head>

    <title>template</title>

    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!--<style type="text/css">
        .first {
            text-decoration: underline;
            color: green;
            text-decoration-color: green;
        }

        body {
            background-image: url(images/background...png);
            background-size: 100rem;
            100rem;
        }

        .second {
            color: black;
        }

        .second:hover {
            color: green;
            text-decoration: underline;
            text-decoration-color: green;
        }


        .head {
            color: black;
        }

        .notspace {
            margin-top: 30px;
        }

        .space {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .mine {
            background-color: antiquewhite;
            color: black;
            margin-top: 40px;
            padding-left: 20px;
        }

    </style>

-->
</head>

<body>
    <nav class="navbar navbar-expand-lg navabr-dark bg-dark ">
        <a class="navbar-brand" href="#">𝓬𝓪𝓻𝓪</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="template2.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Products</a>
                </li>

            </ul></div></nav>
    
   
<div class="container">
        
<div class="row d-flex justify-content-center first">
    
    <div class="col-md-2"></div>
    
  
    <div class="col-md-8">
  
    <br>
    <h3>Registation form</h3>
        
        <br>
        
     <form action="registationform.php" method="POST"> 
    
 <div class="form-group row">
    <label for="inputuser" class="col-sm-2 col-form-label"><i class="fa fa-user"></i></label>
    <div class="col-md-4">
      <input type="text" class="form-control" id="user" name="firstname" placeholder="firstname">
    </div>
  </div>
         
         
         <div class="form-group row">
    <label for="inputuser" class="col-sm-2 col-form-label"><i class="fa fa-user"></i></label>
    <div class="col-md-4">
      <input type="text" class="form-control" id="user" name="lastname" placeholder="lastname">
    </div>
  </div>
   
    
     
    <div class="form-group row">
    <label for="inputemail" class="col-sm-2 col-form-label"><i class="fa fa-envelope"></i></label>
    <div class="col-md-4">
      <input type="email" class="form-control" id="email" name="email" placeholder="email">
    </div>
  </div>
    
     
      
    <div class="form-group row">
    <label for="inputpassword" class="col-sm-2 col-form-label"><i class="fa fa-key"></i></label>
    <div class="col-md-4">
      <input type="password" class="form-control" id="password" name="pass" placeholder="password">
    </div>
  </div>
         
         
         <div class="form-group row">
    <label for="inputpassword" class="col-sm-2 col-form-label"><i class="fa fa-key"></i></label>
    <div class="col-md-4">
      <input type="password" class="form-control" id="confirmpassword" name="pass" placeholder="confirmpassword">
    </div>
  </div>
        
         
         
         <div class="form-group row">
    <label for="inputpassword" class="col-sm-2 col-form-label"><i class="fa fa-address-card"></i></label>
    <div class="col-md-4">
      <input type="address1" class="form-control" id="address1" name="pass" placeholder="address1">
    </div>
  </div>
    
         
         <div class="form-group row">
    <label for="inputpassword" class="col-sm-2 col-form-label"><i class="fa fa-address-card"></i></label>
    <div class="col-md-4">
      <input type="address2" class="form-control" id="address1" name="pass" placeholder="address2">
    </div>
  </div>
    
    
    
      
    

    
         
         <br>
         
         <input type="submit" name="submit" value="submit">
    
    
    
        
    
    
    </form>

    </div>
    
    
 

       </div>
    
    </div>
        
               
   
    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
     <script src="js/main.js"></script>
        
</body>

</html>