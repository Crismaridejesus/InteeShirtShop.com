<?php
include('include/header.php');
?>
        
        
        <div class="content_wrapper">   
                
               
            <?php
            if(!isset($_SESSION['user_id'])){
                include('login.php');
           
            }else{
                include('sample.php');
            }
            
           
            ?>
               
           
            
        </div><!--content-wrapper-->
        
        
        <?php
include('include/footer.php');

?>

        