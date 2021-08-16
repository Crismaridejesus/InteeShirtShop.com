<?php
include('include/header.php');
?>



<style>
.hero{
    width: 100%;
}
.row{
    width: 90%;
    height: 100vh;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.col{
    flex-basis: 45%;
}
.slider{
    height: 80vh;
    display: flex;
}
.product img{
    height: 19vh;
    margin-bottom: 9px;
    cursor: pointer;
    opacity: 0.6;
}

.product img:hover{
    opacity: 1;
}


.preview img{
    height: 100%;
}
p{
    margin-bottom: 20px;
}
.brand{
    background: #008000;
    width: fit-content;
    color: #fff;
    font-size: 12px;
    padding: 2px 5px;
}
h2{
    font-size: 45px;
    color: #555;
    margin-bottom: 20px;
}
.rating{
    display: flex;
    height: 15px;
}
.rating .fa{
    color: #008000;
}
.price{
    color: #fe980f;
    font-size: 26px;
    font-weight: bold;
    padding-top: 10px;
}
input{
    width: 100px;
    border: 1px solid #ccc;
    font-weight: bold;
    text-align: center;
}
    #cart{
    color: #fff;
    font-size: 15px;
    outline: none;
    border: 0;
    border-radius: 5px;
    background: #fe980f;
    padding: 10px 15px;
    box-sizing: border-box;
    cursor: pointer;
        width: 150px;
}
    
    #quantity{
    color: black;
    font-size: 15px;
    outline: none;
    border: 2px solid #fe980f ;
    border-radius: 5px;
    background: white;
    padding: 10px 10px;
    box-sizing: border-box;
    cursor: pointer;
        width: 150px;
}
    
button .fa{
    margin-right: 10px;
}
.related{
    width: 90%;
    margin: 0 auto 40px;
}
.related .row{
    width: 100%;
    height: auto;
}
.columns{
    flex-basis: 22%;
    height: 100%;
}
.items img{
    width: 100%;
}
.details{
    margin-top: 20px;
}
.details p{
    font-size: 14px;
    margin-bottom: 10px;
}
.details .rating{
    margin: 10px 0;
}












    
    
    </style>

        
        
        <div class="content_wrapper">
            
            
     
            
            
            
            
<?php
$edit_brand=mysqli_query($con,"select * from cart where product_id='$_GET[product_id]'");
$fetch_brand=mysqli_fetch_array($edit_brand);
            
            $edit_product=mysqli_query($con,"select * from products where product_id='$_GET[product_id]'");
$fetch_product=mysqli_fetch_array($edit_product);
            $product_desc=$fetch_product['product_desc'];
         

?>


<div class="form_box">
    
    <form action="" method="post" enctype="multipart/form-data">
    <table class="tb_design" align="center" width="50%"  bgcolor="lightgray">
        
       
       
      
        
        
       
        
        
            <div class="hero">
        <div class="row">
            <div class="col">

                <div class="slider">
                    <div class="product">

                        <img src="admin_area/product_images/<?php echo $fetch_product['product_image'] ?>" alt="" onclick="clickme(this)">
                        

                    </div>
                    <div class='preview'>
                        <img src='admin_area/product_images/<?php echo $fetch_product['product_image'] ?>' id='imagebox' width="450px" height="px">
                    </div>
                </div>

            </div>
            <div class='col'>

                <div class='content'>
                   
                    <h2><?php echo $fetch_brand['product_title']; ?></h2>
                    
                    <p class='price'>Description:<?php echo $product_desc; ?>  </p>
                 
                   
                      
        
                            

               
                 
                            
                            
             <h3>Quantity:
                 <input type="number" id="quantity"  name="quanti" min="1" max="10" value="<?php echo $fetch_brand['quantity'] ?>" size="100" required/></h3>
          <br>
                    <br>
        <input type="submit" name="edit_brand" value="Add To Cart" id="cart">
        
       
                    <br>
                    
                    
                   
                  
                 
                 
                    
                 
                </div>

            </div>
        </div>


       



    </div>
        
        
        
        
        
        
        
        
        
        
        
        </table>
        </form>
</div>
            
            
            
            
         
            
            
            
            
            
            
            
            
            
            
            
            
       
  
<!---db tables insert product connection--->
 <?php
       if(isset($_POST['edit_brand'])){
              
          
        $quantity=$_POST['quanti'];
        $update_quantity=mysqli_query($con,"update cart set quantity='$quantity' where product_id='$_GET[product_id]'");
    
        if($update_quantity){
        
              echo "<script>window.open('cart.php','_self')</script>";
           
            
        
            
        
    }
           
        
}


?>

























