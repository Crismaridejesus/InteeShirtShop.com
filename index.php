    <?php
include('include/header.php');
?>
        

 <div class="main_con">
    <div class="mother_con">
   
        <div class="con_one">
            
            <img src="admin_area/image/product_48.jpg" height="528px;" width="449px;">
    </div>
    
    
    <div class="con_two">
        <img src="admin_area/image/bg-con2.jpg.png" width="469px;" height="256px;">
    </div>
    
    
    <div class="con_three">
        <img src="admin_area/image/bg_con3.jpg" height="256px;" width="230px">
    </div>
    
     <div class="con_four">
         <img src="admin_area/image/con_4.jpg" height="256px;" width="230px">
    </div>
    
    <div class="con_five">
        <img src="admin_area/image/pc23-2.jpg" height="525px" width="275px;">
    </div>
    
    <div class="con_six">
           <img src="admin_area/image/product_14.jpg" height="256px;" width="265px">
    </div>
    
    <div class="con_sev">
        <img src="admin_area/image/pc14-1.jpg" height="260px;" width="265px">
    </div>
        
        
    </div>
    </div>







        
        <div class="content_wrapper">
            <div class="title" style="width:100px; margin-left:45%;">
            <h1 style="text-align:center; border-bottom:5px solid orange; font-size:40px;">Products</h1>
            </div>
          <?php  
            if(!isset($_GET['action'])){ ?>
                
            
            
            
            
            
      
            
           
                
                <?php
               cart();
                
                ?>
            <div id="productbox">
               
                
                <?php
               getPro();
                ?>
                
                <?php
                get_pro_by_cat_id();
                ?>
                
                <?php
              get_pro_by_brand_id();
                ?>
                
                
                
                </div><!--product-box-->
           
            <?php }else{ ?>
            
            <?php include ('login.php'); } ?>
        </div><!--content-wrapper-->
        
        
        <?php
include('include/footer.php');

?>
        