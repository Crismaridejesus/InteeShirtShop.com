<?php
include('include/header.php');
?>
        
        
        <div class="content_wrapper">
            
            
        <div id="sidebar">
            
         <div id="sidebar_title">Categories</div>
           <ul id="cats">
                     
            <?php   
             getCats();
               
             ?>
           
           </ul>
           
           
           
           <div id="sidebar_title">Brands</div>
           <ul id="cats">
              <?php
               getBrands();
               ?>
           </ul>
            
           </div><!---sidebar-->
            
            <div id="content_area">
                
                
                <div class="shopping_cart_container">
                    
                    
               <div id="shopping_cart" align="right" style="padding:15px;">
                   <?php
                   if(isset($_SESSION['email'])){
                       echo "Email:" .$_SESSION['email'];
                       
                   }else{
                       echo"";
                   }
                   
                   ?>
                   
                   <b style="color:navy">Your Cart- </b> Total-Items: <?php total_items();?> Total-Price: <?php total_price();?>
                
                </div><!---shopping_cart-->
                    <form action="" method="post" enctype="multipart/form-data">
                    <table align="center" width="100%">
                    <tr align="center">
                        <th>Remove</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Sub Total</th>
                        </tr>
                       
                        
                        
                        
                             
  
                      
                        
                        
                        
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
                        <td><input type="checkbox" name="remove[]" value="<?php echo $product_id;?>"/></td>
                        <td>
                            <?php echo $product_title; ?>
                             <br/> 
                            <img src="admin_area/product_images/<?php echo $product_image; ?>"/>
                             </td>
                             
                             
                      <td><a href="editcart.php?action=edit_quantity&product_id=<?php echo $row_qty['product_id']; ?>"><input type="button" value=" - <?php echo $qty;?> + "></a></td> 
                        <td><?php echo $sing_price; ?></td>
                         <td><?php echo $values_qty; ?></td>
                             
                            
                        </tr>
                        
                       <?php }} //end while ?>
                        
                        <tr align="center">
                            
                    
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> <b> Total:</b><?php echo total_price(); ?></td>
                        </tr>
                        
                    <tr align="right">
                        
                        
                        <td><input type="submit" name="update_cart" value="Update Cart"/></td>
                        <td></td>
                        <td><input type="submit" name="continue" value="Continue Shopping"></td>
                        <td><button><a href="checkout.php" style="text-decoration:none; color:white;">Checkout</a></button></td>
                       
                        
                        
                        </tr>
                        
                        
                        
                    </table>
                    </form>
                    
                   
        
        
       
</div>
       
  
<!---db tables insert product connection--->
 

          
                    
                   

                    
                    <?php
                    if(isset($_POST['remove'])){
                       
                        foreach($_POST['remove'] as $remove_id){
                            
                        $run_delete=mysqli_query($con,"delete from cart where product_id='$remove_id' AND ip_address='$ip'");
                            
                            if($run_delete){
                                echo "<script>Item deleted successfully</script>";
                                 echo "<script>window.open('cart.php','_self')</script>";
                                
                            }
                        }
                        
                    }
                    
                    if(isset($_POST['continue'])){
                        echo "<script>window.open('index.php','_self')</script>";
                        
                    }
                    ?>
               </div><!--shopping_cart_container-->
            <div id="product_box">
               
             
                
                </div><!--product-box-->
            </div><!--content-area-->
            
        </div><!--content-wrapper-->
        
        
        <?php
include('include/footer.php');

?>
        