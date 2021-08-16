<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


    
    
    
    
    
    <h2> Checkout Form</h2>
    
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php total_items();?></b></span></h4>
    
    <?php
                         $total=0;
                        $ip=get_ip();
       
       $run_cart=mysqli_query($con,"select * from cart where ip_address='$ip'");
       while($fetch_cart=mysqli_fetch_array($run_cart)){
           
           $product_id=$fetch_cart['product_id'];
           $result_products=mysqli_query($con,"select * from products  where product_id='$product_id'");
           
           while($fetch_product=mysqli_fetch_array($result_products)){
               $product_price=array($fetch_product['product_price']);
               $product_title=$fetch_product['product_title'];
               $product_image=$fetch_product['product_image'];
               $sing_price=$fetch_product['product_price'];
               
               $values=array_sum($product_price);
               
               $run_qty =mysqli_query($con,"select * from cart where product_id='$product_id'");
               $row_qty=mysqli_fetch_array($run_qty);
               $qty=$row_qty['quantity'];
               
               $values_qty=$values * $qty;
               
               
               $total+=$values_qty;
               
               
           
       
           
       
     
                        
                        
                        ?>


  
    
      
    
      <p><td>
                            <?php echo $product_title; ?>
                             <br/> 
                             </td><span class="price"> <td><?php echo $sing_price; ?></td></span></p>
      
      <hr>
     
        <?php } } ?>
    
      <tr>
                        <td colspan="4" align="right"><b>Sub Total:</b></td>
                        <span class="price"><td><?php echo total_price(); ?></td></span>
                        </tr>
    
    </div>
       
   
        <input type="submit" value="Continue to checkout" name="checkout" class="btn">
    
 
 


</body>
</html>


 <?php 
                   
         if(isset($_GET['checkout'])){
             
             echo "<script>hello</script>";
         }          
  
                   
                   ?>
                        
                        
















