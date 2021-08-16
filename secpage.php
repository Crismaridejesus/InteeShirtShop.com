<?php
include('include/header.php');
?>
        
        
        <div class="content_wrapper">
          
             <?php  
            if(!isset($_GET['action'])){ ?>
                
            
            
            
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
                <h1 style="text-align:center">All Products</h1>
                <div class="border_bottom">
            <div id="product_box">
               
               
                
                    <?php
                get_allpro()
                ?>     
            
                
                
                <?php
                get_pro_by_cat_id();
                ?>
                
                <?php
              get_pro_by_brand_id();
                ?>
                
                </div><!--product-box-->
                     <div class="pagination" style="position:relative; bottom:20px; padding-top:20px;">
          <a href="all_product.php">&laquo;</a>
            <a href="all_product.php">1</a>
                <a href="secpage.php">2</a>
                <a href="thirdpage.php">3</a>
                <a href="fourthpage.php">4</a>
                <a href="thirdpage.php">&raquo;</a>
                </div>
            </div><!--content-area-->
             <?php }else{ ?>
            
            <?php include ('login.php'); } ?>
        </div><!--content-wrapper-->
        
        
        <?php
include('include/footer.php');

?>
        