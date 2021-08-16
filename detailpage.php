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
                
                
            <div id="product_box">
               
                
                
                <?php
                if(isset($_GET['pro_id'])){
                   $product_id= $_GET['pro_id'];
                    
                    $run_query_by_pro_id=mysqli_query($con,"select * from products where product_id='$product_id'");
                    
                    while($row_pro=mysqli_fetch_array($run_query_by_pro_id)){
                         $pro_id=$row_pro['product_id'];
                    $pro_cat=$row_pro['product_cat'];
                    $pro_brand=$row_pro['product_brand'];
                    $pro_title=$row_pro['product_title'];
                    $pro_price=$row_pro['product_price'];
                    $pro_image=$row_pro['product_image'];
                    $pro_desc=$row_pro['product_desc'];
                   echo "
                    <div id='product'>
                    
                    <img src='admin_area/product_images/$pro_image' width='250' height='300px' style='float:left;'/>
                    <h3 class='protitle'>$pro_title</h3>
                     <P class='proprice'><b>Price: $pro_price php</b></p>
                     <p style='color:white; padding-bottom:20px;'>DESCRIPTION:$pro_desc</p>
                    <a href='index.php?add_cart=$pro_id' >
                    <button class='cartbtn' >Add to cart </button></a>
             
             

                   " ;
                        
                        
                    }
                }
                 
                
                ?>
                
                
              
                     

                </div><!--product-box-->
            </div><!--content-area-->
            
        </div><!--content-wrapper-->
        
        
        <?php
include('include/footer.php');

?>
        