<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Chi tiết đơn hàng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./assets/css/stylecart.css" >   
        <script type="text/javascript" src="./assets/qrcode.min.js"></script>
        <script type="text/javascript">
        function onReady()
        {
            var qrcode = new QRCode("id_qrcode", {
                text:"http://localhost:8080/Web-Food/",
                width:80,
                height:80,
                colorDark:"#000000",
                colorLight:"#ffffff",
                correctLevel:QRCode.CorrectLevel.H
            });
        }
        /*correctLevel: khả năng sửa mã, có 4 cấp độ là L (7%), M (15%), Q (25%), H (30%). Khả năng càng cao, ảnh càng phức tạp và đọc lâu hơn, thông thường cấp độ M được dùng nhiều.*/
        </script>       
    </head>
    <body onload = onReady()>
       <?php
        session_start();
            $conn = mysqli_connect("localhost", "root","", "EatFood"); 
            $orders = mysqli_query($conn, "SELECT orders.name, orders.address, orders.phone, orders.note,time, order_detail.*, product.name as product_name 
            FROM orders
            INNER JOIN order_detail ON Orders.id = order_detail.orderID
            INNER JOIN product ON product.id = order_detail.product_id
            WHERE orders.id = " . $_GET['ID']);
            $orders = mysqli_fetch_all($orders, MYSQLI_ASSOC);
                  
        ?>  
        <div id="order-detail-wrapper">
            <div id="order-detail">
                <h1 style="text-align: center;">EATFOOD</h1>
                <h2 style="text-align: center;">Chi tiết đơn hàng</h2>
                <label>Người nhận: </label><span> <?= $orders[0]['name'] ?></span><br/>
                <label>Điện thoại: </label><span> <?= $orders[0]['phone'] ?></span><br/>
                <label>Địa chỉ: </label><span> <?= $orders[0]['address'] ?></span><br/>
                <label>Ngày đặt: </label><span> <?= $orders[0]['time'] ?></span><br/>
                <hr/>
                <h3>Danh sách sản phẩm</h3>
                <ul>
                    <?php
                    $totalQuantity = 0;
                    $totalMoney = 0;
                    foreach ($orders as $row) {
                        ?>
                        <li>
                            <span class="item-name"><?= $row['product_name'] ?></span>
                            <span class="item-quantity"> - SL: <?= $row['quantity'] ?> sản phẩm</span>
                        </li>
                        <?php
                        $totalMoney += ($row['price'] * $row['quantity']);
                        $totalQuantity += $row['quantity'];
                    }
                    ?>
                </ul>
                <hr/>
                <label>Tổng SL:</label> <?= $totalQuantity ?> - <label>Tổng tiền:</label> <?= number_format($totalMoney, 0, ",", ".") ?> đ
                <p><label>Ghi chú: </label><?= $orders[0]['note'] ?></p>
                <p>     
                    <div id="id_qrcode">Mua hàng ở:</div> 
                </p>
            </div>
        </div>
    </body>
</html>