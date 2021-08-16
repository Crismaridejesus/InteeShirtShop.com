<?php

session_start();
include('include/db.php');
include('function/function.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online shopping</title>
    
    <link rel="stylesheet" href="Style.css" media="all"/>
    <script src="js/jquery-3.4.1.js"></script>
    <style>
    .noti_cart_number{
    background: red;
    color: white;
    position: absolute;
    top: -5px;
    left: 25px;
    padding: 1px 3px 1px 3px;
}
    </style>
    
    </head>

   
    <body>
        
        <!--start here--->
    <div class="main_wrapper">
        
        <div class="header_wrapper" style="background:white;">
        
        <div class="header_logo" style="background:radial-gradient(lightblue,blue);">
      <a href="index.php">
          <img id="logo"  src="images/logo.png" style="width:150px; height:100px;" /> 
            </a>
        
        </div><!---header-logo--->
        
        
       
           
            
        </div><!--header_wrapper-->
        
        
        
      <?php include('js/drop_down_menu.php'); ?>

      
   

    <div class="contact_title" style="margin-bottom:40px; text-align:center;">
   
          <div><h1 style="text-align:center; height:100px; padding-top:30px">Hi! How can I Help You?</h1></div>
        
        
        <div style="width:500px; margin-left:34%; ">
        <h2 style="border-bottom:5px solid gray;">We are always ready to serve you!</h2>
        </div>
        <p>You can reach us via:</p>
        <ul style="list-style:none;" >
        <li>Telephone#:02 777 770 </li>
            <li>Cellphone#:Globe:09263453690,Smart:09362919134</li>
            <li>Gmail:insteeshop@gmail.com</li>
        
        </ul>
      
    
        
    </div>
       
    
    
    <div id="footer">
    <div class="foot_con">
    
    
  <div class="story">
    <h1>Our Story</h1>
    <p>This is my first ecommerce website</p>
    </div>
        
        
        <div class="links">
            <h2>Important Links</h2>
         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="all_product.php">product</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="contact.php">contact us</a></li>
            
            
            </ul>
        </div>
        
        <div class="media">
             <h2>Follow us</h2>
        <ul>
            <li><a href="index.php">Facebook</a></li>
            <li><a href="all_product.php">Instagram</a></li>
            <li><a href="customer/my_account.php">Twitter</a></li>
            <li><a href="contact.php">Tiktok</a></li>
            
            
            </ul>
        </div>
        
        <div class="final_logo">
        <img src="images\logo.png" height="200px"; width="250px;">
        
        </div>
         
    </div>
    
    
           
    
        </div>
       
    
    
 
   
        </div><!----main-wrapper-->
    
    </body>
</html>
  

