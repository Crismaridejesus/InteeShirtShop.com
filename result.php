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
               if(isset($_GET['search'])){
                 
                   $search_query=$_GET['user_query'];
                    $run_query_by_pro_id=mysqli_query($con,"select * from products where product_keywords like'%$search_query%'");
                    
                    while($row_pro=mysqli_fetch_array($run_query_by_pro_id)){
                         $pro_id=$row_pro['product_id'];
                    $pro_cat=$row_pro['product_cat'];
                    $pro_brand=$row_pro['product_brand'];
                    $pro_title=$row_pro['product_title'];
                    $pro_price=$row_pro['product_price'];
                    $pro_image=$row_pro['product_image'];
                    
                   echo "
                    <div id='single_product'>
                    <h3>$pro_title</h3>
                    <img src='admin_area/product_images/$pro_image' width='250' height='250'/>
                    
                     <P><b>Price: $pro_price</b></p>
                     <a href='detail.php?pro_id=$pro_id'>Details</a>
                   
                   <a href='homepage.php?add_cart=$pro_id'>
                    <button style='float:right'>Add to cart </button></a>
                    
                   
                    </div>

                   " ;
                    }
               }
                ?>
                
                <?php
                get_pro_by_cat_id();
                ?>
                
                <?php
              get_pro_by_brand_id();
                ?>
                
                </div><!--product-box-->
            </div><!--content-area-->
            
        </div><!--content-wrapper-->
        
        
        <?php
include('include/footer.php');

?>
        