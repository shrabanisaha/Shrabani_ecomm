<?php

include ("conn.php");

$id=$_GET['editid'];

echo $id;

$select=mysqli_query($con,"SELECT * FROM dothis WHERE id='$id'");


while($row=mysqli_fetch_array($select)) {
    
    $id=$row['id'];
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $email=$row['email'];
    $password=$row['password'];
    $confirmpassword=$row['confirmpassword'];
    $address1=$row['address1'];
    $address2=$row['address2'];
    
}
?>


<html>
<head>
    <title>ecom</title>
<body>
    
   <form action="registationform.php?editid=<?php echo $id ?>" method="POST">
     
<p><label>firstname:</label><input type="text" name="firstname" placeholder="firstname" value="<?php echo $firstname?>"></p> 
       
<p><label>lastname:</label><input type="text" name="lastname" placeholder="lastname" value="<?php echo $lastname?>"></p>
       
<p><label>email:</label><input type="email" name="email" placeholder="email" value="<?php echo $email?>"></p>
       
<p><label>password:</label><input type="text" name="password" placeholder="password" value="<?php echo $password?>"></p>
       
<p><label>confirmpassword:</label><input type="text" name="confirmpassword" placeholder="confirmpassword" value="<?php echo $confirmpassword?>"></p>
       
<p><label>address1:</label><input type="text" name="address1" placeholder="address1" value="<?php echo $address1?>"></p>
       
<p><label>address2:</label><input type="text" name="address2" placeholder="address2" value="<?php echo $address2?>"></p>
       
<p><input type="submit" name="submit" name="submit" value="register"></p>
     
    </form> 
     
     
    </body>
    
    </head>

</html>