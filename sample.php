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

<body>

<h2> Checkout Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post" enctype="multipart/form-data">
      
        <div class="row">
          <div class="col-50">
            <h3>Shipping Address</h3>
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="fname" name="firstname" required placeholder="John M. Doe">
               
              
              <label for="fname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="fname" name="lastname" placeholder="John M. Doe" required>
              
              
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
          <input type="text" id="email" name="email" placeholder="john@example.com" required>
            
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
            
              <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" required>

        
              
              
              <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="2300" required>
              </div>
            </div>
          </div>

        
          
        </div>
           <div class="col-25">
              


    <div class="container">

     
        <h4>Cart <span class='price' style='color:black'><i class='fa fa-shopping-cart'></i><input type="text"  name="totalitem" value="<?php total_items(); ?> "></span>
        </h4>
        <br>
         <hr>
        <br>
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
        
        
                         <tr align="center">
                        
                        <td>
                             <p><?php echo $product_title; ?> <span class="price"> <?php echo $values_qty; ?></span></p>
                             <br/> 
                             
                       </td>
                             
                        </tr>
                        
                       <?php }} //end while ?>
        
          
        
      
        
        <p><b>Total:</b> <span class='price' style='color:black'><input type="text" name="totalprice" style="font-weight:bolder;" value="<?php total_price(); ?>"></span></p>
        
        
        
       
        
        
        
        
    </div>
  </div>
       
            <div class="col-50">
            <h3>Payment Method</h3>
           <select name="payment_method">
                
                <option>PayMaya</option>
                <option>Gcash</option>
                <option>PayPal</option>
               <option>Palawan Express</option>
               <option>Cebuanna</option>
                
                </select>
           
          
          </div>
        <input type="submit" value="Continue to checkout" class="btn"  name="checkout">
      </form>
    </div>
  </div>

</div>

</body>

    
 <?php
    if(isset($_POST['checkout'])){
        
       
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zip=$_POST['zip'];
        $method=$_POST['payment_method'];
        $totalprice=$_POST['totalprice'];
        $totalitem=$_POST['totalitem'];
        
        
        
        $insert_check=mysqli_query($con,"insert into payment (pay_firstname,pay_lastname,pay_email,pay_address,pay_city,pay_state,pay_zip,pay_method,total_price,total_items) values ('$firstname',' $lastname','$email','$address','$city','$state','$zip','$method','$totalprice','$totalitem') ");
        
        
                    if($insert_check){
           
                $run_cart=mysqli_query($con,"select * from cart where ip_address='$ip'");
                while($fetch_cart=mysqli_fetch_array($run_cart)){
           
                $product_id=$fetch_cart['product_id'];
                $result_products=mysqli_query($con,"select * from products  where product_id='$product_id'");
           
                 while($fetch_product=mysqli_fetch_array($result_products)){
                 $product_price=array($fetch_product['product_price']);
                 $product_title=$fetch_product['product_title'];
                 $sing_price=$fetch_product['product_price'];
                        
                  
                        
                        
            $insert_order=mysqli_query($con,"insert into orders (order_title,order_price,customer_email) values ('$product_title','$sing_price','$email')");    
            $delete_product=mysqli_query($con,"delete  from cart where ip_address='$ip'");  
                        
                        if($delete_product){
                   
                            
                echo "<script>alert('Items Was Successfully Place! Thank You For Purchasing!      Receiver Name:Maricris B. De Jesus Mobile number:09261203742')</script>";
                              echo "<script>window.open('account.php','_self')</script>";
                        
                        }
                    
                     
                     
                      
                  }  
                    
                    }
                
    }
        
        
        
        
    }
    
    
    
    
    ?>   
    
    