
<div class="view_product_box">






<h2>View Brands</h2>
<div class="border_bottom">
    
    
    <form action="" method="post" enctype="multipart/form-data">
        
        
    <table width="100%">
        <thead>
        <tr>
            
            <th><input type="checkbox" id="checkAll">Check</th>
            <th>ID</th>
            <th>Title</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Edit</th>
            </tr>
        
        </thead>
        
        <?php
        $all_brands=mysqli_query($con,"select * from brands order by brand_id ASC");
        $i=1;
        
        while($row=mysqli_fetch_array($all_brands)){
            
            
        
        
        ?>
        
        
        <tbody>
        <tr>
           <td><input type="checkbox" name="deleteAll[]" value="<?php echo $row['brand_id']; ?>"/></td> 
            <td><?php echo $i; ?></td>
            <td><?php echo $row['brand_title']; ?></td> 
           
            
            <td><?php
                if($row['visible']==1){
                   echo "Approved" ;
                    
                }else{
                    echo "Pending";
                }
                
                ?></td>
            
            <td><a href="index.php?action=view_brand&delete_brand=<?php echo $row['brand_id']; ?>">Delete</a></td>
            <td><a href="index.php?action=edit_brand&brand_id=<?php echo $row['brand_id']; ?>">Edit</a></td>
           
            </tr>
        
        </tbody>
        <?php $i++; } ?>
        
        <tr>
        <td><input type="submit" name="delete_all" value="Remove"></td>
        </tr>
        </table>
    
    </form>
</div>
    
</div>

<?php
if(isset($_GET['delete_brand'])){
    
    $delete_brand=mysqli_query($con,"delete from brands where brand_id='$_GET[delete_brand]'");
     if($delete_brand){
         echo "<script>alert('Brands has been deleted sucessfully')</script>";
         echo "<script>window.open('index.php?action=view_brand','_self')</script>";
     }
    
    
    
}

if(isset($_POST['deleteAll'])){
    
    $remove=$_POST['deleteAll'];
    
    foreach($remove as $key){
        
        $run_remove=mysqli_query($con,"delete  from brands where brand_id='$key'");
        
        if($run_remove){
        echo "<script>alert('Items selected have been deleted sucessfully')</script>";
         echo "<script>window.open('index.php?action=view_brand','_self')</script>";
}else{
        
            echo "<script>alert('Mysqli Failed: mysqli_error ($con)!')</script>";
            
        }
}
}

?>



