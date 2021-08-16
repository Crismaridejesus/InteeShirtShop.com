<?php include('include/db.php');?>
    
    <style>
    * {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
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
    width: 30px;
    border: 1px solid #ccc;
    font-weight: bold;
    text-align: center;
}
button{
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

<body>

    <div class="hero">
        <div class="row">
            <div class="col">

                <div class="slider">
                    <div class="product">
                        
                        
                          <?php
                if(isset($_GET['pro_id'])){
                   $product_id= $_GET['pro_id'];
                    
                    $run_query_by_pro_id=mysqli_query($con,"select * from products where product_id='$product_id'");
                        
                         while($row_pro=mysqli_fetch_array($run_query_by_pro_id)){
                        
                        ?>
                        

                        <img src="admin_area/product_images/<?php $row_pro['product_image']; ?>" alt="" onclick="clickme(this)">
                        echo "<img src='admin_area/product_images/$pro_image' class='detail_image'/>

                    </div>
                    <div class="preview">
                        <img src="images/product1.png" id="imagebox" alt="">
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="content">
                    <p class="brand">Brand: Varanga</p>
                    <h2>Woman Black Quirky Print Empire Dress</h2>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p class="price">Brand: Varanga</p>
                    <p>Size: <select name="size">

                            <option value="select size">select size</option>
                            <option value="small">small</option>
                            <option value="medium">medium</option>
                            <option value="large">large</option>

                        </select></p>
                    <p>Quantity: <input type="text" value="1"></p>
                    <button type="button">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart</button>
                </div>

            </div>
        </div>
<?php } }?>

        <div class="related">
            <h2>related items</h2>
            <div class="row">
                <div class="columns">
                    <div class="items">
                        <img src="images/item1.png" alt="">
                        <div class="details">
                            <p>Woman Brown Solid Biker Jacket</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>

                            <p>USD $120.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                        <img src="images/item2.png" alt="">
                        <div class="details">
                            <p>Navy Blue Flared Palazzos</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>USD $80.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                        <img src="images/item3.png" alt="">
                        <div class="details">
                            <p>Jacquard Banarasi Dupatta</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>USD $110.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                        <img src="images/item4.png" alt="">
                        <div class="details">
                            <p>Printed Straight Kurta</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>USD $100.00</p>

                        </div>
                    </div>
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



</body>


