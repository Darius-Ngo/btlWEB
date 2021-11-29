<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Chi tiết sản phẩm</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./assets/css/stylecart.css" >
    </head>
    <body>
    <?php
       $conn = mysqli_connect("localhost", "root","", "EatFood");
       if ($conn == true){
        $query = "SELECT * FROM `product` WHERE `id` = ".$_GET['ID'];
        $result = mysqli_query($conn, $query);
        $product = mysqli_fetch_assoc($result);
       $imgLibrary = mysqli_query($conn, "SELECT * FROM `image_library` WHERE `product_id` = ".$_GET['ID']);
        $product['images'] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
        
    }
    

        ?>
        <div class="container"> 
            <h2>Chi tiết sản phẩm</h2>
            <div id="product-detail">
                <div id="product-img">
                   <img src="./assets/img/<?php echo $product['image']?>" />                   

                </div>
                <div id="product-info">
                    <h1><?php echo $product['name']?></h1>
                    <label>Giá: </label><span class="product-price"><?php echo  number_format($product['price'], 0, ",", ".") ?> VND</span><br/>
                    <form id="add-to-cart-form" action="cart.php?action=add" method="POST">
                       
                        <input type="text" value="1" name="quantity[<?php echo $product['ID']?>]" size="2" /><br/>
                        <input type="submit" value="Mua sản phẩm" />
                    </form>
                    <?php if(!empty($product['images'])){ ?>
                    <div id="gallery">
                        <ul>
                            <?php foreach($product['images'] as $img) { ?>
                                <li><img src="<?php echo $img['path']?>" /></li>

                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
                <div class="clear-both"></div>
                <?php echo $product['content']?>
            </div>
        </div>

    </body>
</html>