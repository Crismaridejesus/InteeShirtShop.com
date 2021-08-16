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
                <div class="title" style="width:180px; margin-left:45%;">
                <h1 style="border-bottom:5px solid orange;">All Products</h1>
                </div>
              <?php
                if(isset($_GET['add_cart'])){
                    $product_id=$_GET['add_cart'];
                    $ip=get_ip();
                    $run_check_pro=mysqli_query($con,"select * from cart where product_id='$product_id'");
                    if(mysqli_num_rows($run_check_pro) > 0){
                        echo "";
                    }else{
                        
                        $fetch_pro=mysqli_query($con,"select * from products where product_id='$product_id'");
                        $fetch_pro=mysqli_fetch_array($fetch_pro);
                        $pro_title=$fetch_pro['product_title'];
                       
                        $run_insert_pro=mysqli_query($con,"insert into cart (product_id,product_title,ip_address) values ('$product_id','$pro_title','$ip')");
                        
                        echo "<script>window.open('all_product.php','_self')</script>";
                        
                    }
                }
                ?>
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
        