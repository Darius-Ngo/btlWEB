<?php 
    $title = 'Giỏ hàng của bạn';
    $baseUrl = '';
    require_once('headercart.php');
?>
<?php
    $conn = mysqli_connect("localhost", "root","", "EatFood");
 //ktra xem co session ko, neu ko thi tao moi
    if(!isset($_SESSION["cart"])){
    $_SESSION["cart"]= array();
 }
//ktra action
    if(isset($_GET['action'])){
        function update_cart($add = false){
             foreach ($_POST['quantity'] as $ID => $quantity) {
               if($quantity==0){
                unset($_SESSION["cart"][$ID]);
               }
               else{
                if ($add) {
                   $_SESSION["cart"][$ID] += $quantity;
                }
                else{

                    $_SESSION["cart"][$ID] = $quantity;
                }
               }              
            }
        }
        $error= false;
        $success = false;
    switch ($_GET['action']) {
        case 'add':           
            update_cart(true);
            header('Location:./cart.php'); 
        case 'delete':
        if(isset($_GET['ID'])){             
             unset($_SESSION["cart"][$_GET['ID']]);
        }   
        header('Location:./cart.php');        
           break; 
        case 'submit':
              if (isset($_POST['update_click'])) {
                  // code...
                update_cart();
                header('Location:./cart.php');
              }
              if(isset($_POST['order_click'])){
                if(empty($_POST['name'])){
                    $error = "Bạn chưa nhập tên";
                }elseif (empty($_POST['phone'])) {
                    $error = "Bạn chưa nhập SĐT";
                }elseif (empty($_POST['address'])) {
                    $error = "Bạn chưa nhập địa chỉ";
                } 
                elseif (empty($_POST['quantity'])) {//ktra giỏ có rỗng k
                    $error = "Giỏ hàng rỗng";
                }   
                if($error== false && !empty($_POST['quantity'])){//xử lý giỏ hàng vào dtb
                    $products = mysqli_query($conn,"SELECT * FROM `product` WHERE `id` IN (".implode(",", array_keys($_POST['quantity'])).")");    
                        $total=0;
                        $orderProducts = array();
                    while($row = mysqli_fetch_array($products)) {
                        $orderProducts[]= $row;
                        $total += $row['price'] * $_POST['quantity'][$row['ID']];                       
                    }
                    
                    $insertOrder = mysqli_query($conn,"INSERT INTO `orders`(`ID`,`name`, `phone`, `address`, `note`,`total`)VALUES ('null','".$_POST['name']."','".$_POST['phone']."','".$_POST['address']."', '".$_POST['note']."', '".$total."')");                
                    $orderID = $conn ->insert_id;
                    $insertString = "";
                                foreach ($orderProducts as $key => $product) {
                                    $insertString .= "(NULL,'" .$orderID ."','" .$product['ID']."','" .$_POST['quantity'][$product['ID']]."','".$product['price']."')";
                                    if ($key != count($orderProducts) - 1) {
                                        $insertString .= ",";
                                    }
                                }                 
                     $insertOrder = mysqli_query($conn, "INSERT INTO `order_detail` (`ID`, `orderID`, `product_id`, `quantity`, `price`) VALUES " . $insertString . ";");   
                    $success = "Đặt hàng thành công";
                                unset($_SESSION['cart']);     
                }            
              }
       default:
           // code...
           break;
   }
 }
    if(!empty($_SESSION["cart"])){
    $products = mysqli_query($conn, "SELECT * FROM `product` WHERE `id` IN (".implode(",", array_keys($_SESSION["cart"])).")");
    
    } 
?>
<div class="row">
    <div class="col-md-12">
   
        <?php if (!empty($error)) { ?> 
            <div id="notify-msg">
                <?= $error ?>. <a href="javascript:history.back()">Quay lại</a>
            </div>
        <?php } elseif (!empty($success)) { ?>
            <div id="notify-msg">
                <script type="text/javascript">
                    alert("Cảm ơn bạn đã mua hàng");
                </script>
                <?= $success ?>. <a href="http://localhost:8080/Web-Food/">Tiếp tục mua hàng</a>
            </div>
        <?php } else { ?>
        



        <h1>Giỏ hàng</h1>
            
            <form id="cart-form" action="cart.php?action=submit" method="POST">
            <table id="tbl" class="table table-bordered table-hover" style="margin-top: 20px;">
                <tr>
                    <th class="product-number">STT</th>
                    <th class="product-name">Tên sản phẩm</th>
                    <th class="product-img">Ảnh sản phẩm</th>
                    <th class="product-price">Đơn giá</th>
                    <th class="product-quantity">Số lượng</th>
                    <th class="total-money">Thành tiền</th>
                    <th class="product-delete">Xóa</th>
                </tr>
                <?php
                if (!empty($products)) {
                                $total = 0;
                                $num = 1;
                                while ($row = mysqli_fetch_array($products)) {
                                    ?>
                                    <tr>
                                        <td class="product-number"><?=$num++; ?></td>
                                        <td class="product-name"><?=$row['name'] ?></td>
                                        <td class="product-img"><img src="./assets/img/<?php echo $row['image']?>" /></td>
                                        <td class="product-price"><?=number_format($row['price'], 0, ",", ".") ?></td>
                                        <td class="product-quantity"><input type="text" value="<?= $_SESSION["cart"][$row['ID']] ?>" name="quantity[<?= $row['ID'] ?>]" /></td>
                                        <td class="total-money"><?=number_format($row['price'] * $_SESSION["cart"][$row['ID']], 0, ",", ".") ?></td>
                                        <td class="product-delete"><a href="cart.php?action=delete&ID=<?=$row['ID'] ?>">Xóa</a></td>
                                    </tr>
                                    <?php
                                    $total += $row['price'] * $_SESSION["cart"][$row['ID']];
                                   
                                }
                                ?>
                <tr id="row-total">
                    <td class="product-number">&nbsp;</td>
                    <td class="product-name">Tổng tiền</td>
                    <td class="product-img">&nbsp;</td>
                    <td class="product-price">&nbsp;</td>
                    <td class="product-quantity">&nbsp;</td>
                    <td class="total-money"><?= number_format($total, 0, ",", ".") ?> VNĐ</td>
                    <td class="product-delete">&nbsp;</td>
                </tr>
                <?php } ?>
            </table >
            <div id="form-button">
                    <input class="btn btn-success" type="submit" name="update_click" value="Cập nhật" style="height: 40px;" />
            </div>
            <hr>
            <div>
                <label>Người nhận: </label><input type="text" value="" name="name" />
            </div>
            <div>
                <label>Điện thoại: </label><input type="text" value="" name="phone" />
            </div>
            <div>
                    <label>Địa chỉ: </label><input type="text" value="" name="address" />
            </div>
            <div>
                    <label>Ghi chú: </label><textarea name="note" cols="50" rows="7" ></textarea>
            </div>
                <input class="btn btn-success" type="submit" name="order_click" value="Đặt hàng" style="height: 40px;" />
                </form>
            <?php } ;?>
        </div>
        </div>
<?php 
    require_once('footercart.php');
?>