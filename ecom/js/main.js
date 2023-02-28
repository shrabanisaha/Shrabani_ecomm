$(document).ready(function () {
    cat();

    function cat() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                category: 1
            },

            success: function (data) {

                $("#display_cat").html(data);
            }
        });


    }

    brands();

    function brands() {
        $.ajax({

            url: "action.php",
            method: "POST",
            data: {
                brands: 1
            },
            success: function (data) {
                $("#display_brands").html(data);
            }
        });

    }


    products();

    function products() {
        $.ajax({

            url: "action.php",
            method: "POST",
            data: {
                products: 1
            },
            success: function (data) {
                $("#display_products").html(data);
            }

        });

    }

    
    $("body").delegate(".category","click",function(event){
                event.preventDefault();       
                   var cid=$(this).attr("cid");
       $.ajax({
           
            url: "action.php",
            method: "POST",
            data: {
                getcat: 1,
                cid:cid
            },
            success: function (data) {
                $("#display_products").html(data);
            }
       });
                       });
    
    
    
    
     $("body").delegate(".brand","click",function(event){
                event.preventDefault();       
                   var bid=$(this).attr("bid");
       $.ajax({
           
            url: "action.php",
            method: "POST",
            data: {
                getbrand: 1,
                bid:bid
            },
            success: function (data) {
                $("#display_products").html(data);
            }
       });
                       });
    
    
    $("#search_btn").click(function(){
        
     var keyword= $("#search").val();
         $.ajax({
           
            url: "action.php",
            method: "POST",
            data: {
                search: 1,
                key:keyword
            },
            success: function (data) {
        $("#display_products").html(data);
            }
       });
     
    });
    
    
           });

    



