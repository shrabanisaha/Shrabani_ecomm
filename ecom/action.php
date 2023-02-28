<?php 

include("conn.php");

if (isset($_POST["category"])){
    
 
    
$display_sql = mysqli_query($con,"SELECT * FROM  categories");
    
    
echo "<div class='nav nav-pills flex-column'><li class='nav-item active'><a href='#' class='nav-link active'>Categories</a></li>";
    while($row=mysqli_fetch_array($display_sql)){
        $cid=$row["cat_id"];
        $cat_title=$row["cat_title"];
        
        echo " <li class='nav-item'><a href='#' class='nav-link category'  cid='$cid'>$cat_title</a></li>";
    }
    
    echo"</div>";
    }

if (isset($_POST["brands"])){
    
 
    
$display_sql = mysqli_query($con,"SELECT * FROM  brands");
    
    
echo "<div class='nav nav-pills flex-column'><li class='nav-item active'><a href='#' class='nav-link active'>Brands</a></li>";
    while($row=mysqli_fetch_array($display_sql)){
        $bid=$row["brand_id"];
        $brand_title=$row["brand_title"];
        
        echo " <li class='nav-item'><a href='#' class='nav-link brand'  bid='$bid'>$brand_title</a></li>";
    }
    
    echo"</div>";
    }


if (isset($_POST["products"])){
    
 
    
$display_sql = mysqli_query($con,"SELECT * FROM  products order by rand() limit 0,9");
    
    
echo "<div class='row'>";
    while($row=mysqli_fetch_array($display_sql)){
        
        $pro_id=$row["product-id"];
        $pro_cat=$row["product_cat"];
        $pro_brand=$row["product_brand"];
        $pro_title=$row["product-title"];
        $pro_price=$row["product-price"];
        $pro_qty=$row["product-qty"];
        $pro_desc=$row["product-desc"];
        $pro_image=$row["product-image"];
        $pro_key=$row["product_keywords"];
        
        echo "<div class='col-md-4'>

                                

                                <div class='card'>
                                    <div class='card-header bg-primary text-white'> $pro_title</div>
                                    <div class='card-body'>
                                        <img src='images/$pro_image' />

                                    </div>
                                    <div class='card-footer'>Rs.  $pro_price

                                        <button class='btn btn-success btn-sm' style='float:right'>Add to Cart</button>

                                    </div>
                                </div>

                            </div> ";
    }
    
    echo"</div>";
    }


if(isset($_POST["getcat"])||(isset($_POST["getbrand"]))||(isset($_POST["search"]))){
    if(isset($_POST["getcat"])){
    $cid=$_POST["cid"];
 $sql = mysqli_query($con,"SELECT * FROM  products where product_cat='$cid'");
    }
    
    else if(isset($_POST["getbrand"])){
    
    $bid=$_POST["bid"];
 $sql = mysqli_query($con,"SELECT * FROM  products where product_brand='$bid'");
        
    }
    
    else if(isset($_POST["search"])){
    
    $key=$_POST["key"];
   
 $sql = mysqli_query($con,"SELECT * FROM  products where  product_keywords  like '%$key%'");
    }
    echo "<div class='row'>";
    while($row=mysqli_fetch_array($sql)){
        
        $pro_id=$row["product-id"];
        $pro_cat=$row["product_cat"];
        $pro_brand=$row["product_brand"];
        $pro_title=$row["product-title"];
        $pro_price=$row["product-price"];
        $pro_qty=$row["product-qty"];
        $pro_desc=$row["product-desc"];
        $pro_image=$row["product-image"];
        $pro_key=$row["product_keywords"];
        
        echo "<div class='col-md-4'>

                                

                                <div class='card'>
                                    <div class='card-header bg-primary text-white'> $pro_title</div>
                                    <div class='card-body'>
                                        <img src='images/$pro_image' />

                                    </div>
                                    <div class='card-footer'>Rs. $pro_price

                                        <button class='btn btn-success btn-sm' style='float:right'>Add to Cart</button>

                                    </div>
                                </div>

                            </div> ";
    }
    
    echo"</div>";
}





?>
