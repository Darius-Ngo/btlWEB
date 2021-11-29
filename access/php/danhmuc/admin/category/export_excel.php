<?php 
    require_once('../Classes/PHPExcel.php');
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=DanhMucSanPham.xls");
    // header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
    // header("Content-Disposition: attachment; filename=DanhMucSanPham.xlsx");
?>

<br>
 <h3 style="margin-left: 400px;">Danh sách danh mục sản phẩm</h3>
 <table border='1'>
 <?php 
        $conn = mysqli_connect("localhost", "root", "","eatfood");
        if($conn) {
            $query = "SELECT * FROM category";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {   
                echo "<th>STT</th><th>Tên danh mục</th><th>File ảnh</th>";
                echo "</thead>";
                $index=1;
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr class = 'Tag-tr'>";
                    echo "<td> " .$index++ . "</td>";
                    echo "<td> " .$row['name'] . "</td>";
                    echo "<td> " .$row['image'] . "</td>";
                    echo "</tr>";
                }
            }
        }
    ?>
</table>