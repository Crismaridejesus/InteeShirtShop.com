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
}
    
    
    #quantity{
    color: black;
    font-size: 15px;
    outline: none;
    border: 02px solid #fe980f  ;
    border-radius: 5px;
    background: white;
    padding: 10px 15px;
    box-sizing: border-box;
    cursor: pointer;
        width: 100px;
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
                    
                    $row_pro=mysqli_fetch_array($run_query_by_pro_id);
                         $pro_id=$row_pro['product_id'];
                    $pro_cat=$row_pro['product_cat'];
                    $pro_brand=$row_pro['product_brand'];
                    $pro_title=$row_pro['product_title'];
                    $pro_price=$row_pro['product_price'];
                    $pro_image=$row_pro['product_image'];
                    $pro_desc=$row_pro['product_desc'];
                  
                    
                
                
                ?>
                
                
                
              
                
                 
                       
                 
                 
                  <div class='hero'>
        <div class='row'>
            <div class='col'>

                <div class='slider'>
                    <div class='product'>

                        <img src="admin_area/product_images/<?php echo $row_pro['product_image'] ?>" alt='' onclick='clickme(this)'>
                        

                    </div>
                    <div class='preview'>
                          <img src='admin_area/product_images/<?php echo $row_pro['product_image'] ?>' id='imagebox' width="450px" height="450px">
                    </div>
                </div>

            </div>
            <div class='col'>

                <div class='content'>
                   
                    <h2><?php echo $pro_title; ?></h2>
                    
                    <p class='price'>Description:<?php echo $pro_desc; ?>  </p>
                 
                   <p>Size: <select name='size'>

                            <option value='select size'>select size</option>
                            <option value='small'>small</option>
                            <option value='medium'>medium</option>
                            <option value='large'>large</option>

                        </select></p>
                   
             
                    
                    <a href='index.php?add_cart=<?php echo $pro_id; ?>' >
                        
                   <button type='button'  id="cart" >
                        <i class='fa fa-shopping-cart'></i>
                        Add to cart</button>
                        </a>
                 
                 
                 <?php }?>
                </div>

            </div>
        </div>


       



    </div>
 
                 
            
                 
           
                 
     
                 
                
            
                
                
                
               
                   
               
           
                
              
                
                
           
    <script>
        function clickme(smallImg) {

            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src;

        }

    </script>
                
                
                
                
                     

                </div><!--product-box-->
            </div><!--content-area-->
            
        </div><!--content-wrapper-->
        
        
        <?php
include('include/footer.php');

?>
        