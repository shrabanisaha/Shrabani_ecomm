<?php

include("conn.php");

if(isset($_POST["category"])){
    
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    
    
    
    if(password=confirmpassword){
    
    
     $insert= "INSERT INTO `abc table`(`id`, `firstname`, `lastname`, `email`, `password`, `confirmpassword`, `address1`, `address2`) VALUES ('NULL', '$firstname','$lastname','$email','$password','$confirmpassword','$address1','$address2')";
    
    
    $insert_query = mysqli_query($con,$insert);
    
    
    if($insert_query){
        
        
        echo"sucessfully inserted";
        
        
        
    }
      
      else{
          
          
          
          echo "mysqli_error($con)";
      }
      
      
}
    
    

    
    
}


else{
    
    
   echo"wrong"; 
    
    
    
}
    



?>

        







    
    

    





    