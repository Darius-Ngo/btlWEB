<?php 
    $title = 'Đơn hàng';
    $baseUrl = '';
    require_once('headercart.php');
?>


<div class="row">
    <div class="col-md-12">
    <div class="listing-items">
        <style type="text/css">
            th {
                background: #818181;  color: #fff;
                font-size: 1rem;
            }
            td{
                 background: #e6dddd;
                 color: #181c21; 
                 font-size: 1rem; 
            }
        </style>
        <form method="POST">
       <br>
        <input type="text" name="txtSearch" placeholder="Search" id="txtSearch" value="<?php echo isset($_POST['txtSearch']) ? $_POST['txtSearch'] : ''?>">
        <button type="submit" name="btnSearch" id="btnSearch" style="margin-bottom: 10px; background-color: #28a745; border-radius: 6px; outline:none; color:#fff" >Search</button>
        <button type="submit" name="btnReload" id="btnReload" style="margin-bottom: 10px; background-color: #28a745; border-radius: 6px; outline:none; color:#fff" >Reload</button>
<?php
    $conn = mysqli_connect("localhost", "root","", "EatFood"); 
    if ($conn == true) {
            //b2
            //echo "Kết nối thành công";
            $order = "SELECT * FROM `orders`ORDER BY ID DESC";
                    $result= mysqli_query($conn, $order);
            if (mysqli_num_rows($result) > 0) {
                echo "<table id='table-order' class='table table-bordered table-hover' style='margin-top: 20px;''><thead>";
                echo "<th>ID</th><th>Tên người nhận</th><th>Địa chỉ</th><th>Điện thoại</th><th>Ghi chú</th><th>Ngày tạo</th><th style='width: 80px'>In đơn</th><th style='width: 50px'></th>";
                echo "</thead>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["ID"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["note"] . "</td>";
                    echo "<td>" . $row["time"] . "</td>";                    
                    echo "<td> " . "<a href='order_printing.php?ID=".$row['ID']."' class='btn btn-success'>In</a>" . "</td>";
                    echo "<td> " . "<a href='order_listing_delete.php?ID=".$row['ID']."' class='btn btn-danger'>Xóa</a>" . "</td>";                    
                    echo "</tr>";
                }
            }
        }
    ?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['btnSearch'])) { 
        search();
    }
    function search(){
        echo "<script type='text/javascript'> var Main = document.getElementById('table-order'); Main.innerHTML = ''</script>";
        $Keyword = $_POST['txtSearch']; 
        $conn = mysqli_connect("localhost","root","","EatFood");
        if($conn == true) { 
            $query = "SELECT * FROM `orders` where name like N'%".$Keyword."%'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0 && $result != null ) {
                echo "<table id='tbl' class='table table-bordered table-hover' style='margin-top: 20px; '>";
                echo "<thead>";
                 echo "<th>ID</th><th>Tên người nhận</th><th>Địa chỉ</th><th>Điện thoại</th><th>Ngày tạo</th><th>In đơn</th><th style='width: 50px'></th>";
                echo "</thead>";
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["ID"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["note"] . "</td>";
                    echo "<td>" . $row["time"] . "</td>";                    
                    echo "<td> " . "<a href='order_printing.php?ID=".$row['ID']."' class='btn btn-success'>In</a>" . "</td>";
                    echo "<td> " . "<a href='order_listing_delete.php?ID=".$row['ID']."' class='btn btn-danger'>Xóa</a>" . "</td>"; 
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Khong co du lieu";
            }
        } else {
            echo "ket noi that bai ";
        }
    }
    ?>
        
      </form>  
    </div>
    </div>
</div>

<?php 
    require_once('footercart.php');
?>