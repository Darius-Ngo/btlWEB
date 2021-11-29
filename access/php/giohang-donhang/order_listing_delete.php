<?php 
    $title = '';
    $baseUrl = '';
    require_once('headercart.php');
?>

<?php
$id = $_GET['ID'];
$conn = mysqli_connect("localhost","root","","EatFood");
    if($conn==true){
        $query = "DELETE FROM orders WHERE ID='".$id."'";
        $resutl = mysqli_query($conn,$query);
        if($resutl>0){
            echo "<script type= 'text/javascript'>";
            echo "alert('Xóa dữ liệu thành công');";
            echo "window.location.href='order_listing.php';";
            echo "</script>";
        }
        else{
            echo "Delete error";
        }
    }
    else{
        echo "Connect error: " .mysqli_connect_error();
    }
  ?>