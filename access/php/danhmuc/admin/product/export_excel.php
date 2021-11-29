<?php 
    require_once('../Classes/PHPExcel.php');
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=DanhSachSanPham.xls");
?>

<br>
 <h3 style="margin-left: 400px;">Danh sách danh mục sản phẩm</h3>
 <table border='1'>
 <?php 
        $conn = mysqli_connect("localhost", "root", "","eatfood");
        if($conn) {
            $query = "select product.*, category.name as 'name_cate' from category,product where category.category_id = product.category_id";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {   
                echo "<th>STT</th><th>Tên danh mục</th><th>Tên sản phẩm</th><th>Giá</th><th>Mô tả</th>";
                echo "</thead>";
                $index=1;
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr class = 'Tag-tr'>";
                    echo "<td> " .$index++ . "</td>";
                    echo "<td> " .$row['name_cate'] . "</td>";
                    echo "<td> " .$row['name'] . "</td>";
                    echo "<td> " .$row['price'] . "</td>";
                    echo "<td> " .$row['content'] . "</td>";
                    echo "</tr>";
                }
            }
        }
    ?>
</table>