<?php 
    $title = 'Home admin';
    $baseUrl = '../';
    require_once('../layout/header.php');
    $conn = mysqli_connect("localhost","root","","eatfood");
    $sql = "select product.*, category.name as 'name_cate' from category,product where category.category_id = product.category_id";
    $category = mysqli_query($conn,$sql);
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Quản Lý Sản Phẩm</h3>

        <form method="post">
        <input type="text" name="txtSearch" placeholder="Search" style="border-radius: 6px;border:none; font-size:16px" id="txtSearch" value="<?php echo isset($_POST['txtSearch']) ? $_POST['txtSearch'] : ''?>">
            <button type="submit" name="btnSearch" id="btnSearch" style="margin-bottom: 10px; background-color: #28a745; border-radius: 6px;border: none;font-size: 16px;color:#fff" >Search</button>
            <button type="submit" name="btnReload" id="btnReload" style="margin-bottom: 10px; background-color: #28a745; border-radius: 6px;border: none;font-size: 16px;color:#fff" >Reload</button>
        </form>

		<a href="add.php" class="btn btn-success">Thêm mới</a>
        <a href="export_excel.php" class="btn btn-success" style="float:right">Xuất Excel</a>

		<table id="tbl" class="table table-bordered table-hover" style="margin-top: 8px">
			<thead>
				<tr> 
					<th>STT</th>
					<th>Tên danh mục</th>
					<th>Tên Sản Phẩm</th>
					<th>Giá</th>
					<th>Ảnh</th>
					<th>Mô tả</th>
					<th style="width: 50px"></th>
					<th style="width: 50px"></th>
				</tr>
			</thead>
			<tbody>
	    <?php foreach($category as $key => $value) { ?>
		        <tr>
					<th><?php echo $key + 1  ?></th>
					<td><?php echo $value['name_cate'] ?></td>
					<td><?php echo $value['name']  ?></td>
					<td><?php echo $value['price']  ?></td>
					<td><img src="http://localhost:8080/Web-Food/access/php/giohang-donhang/assets/img/<?php echo $value['image'] ?>" alt="" width="50px"></td>
					<td><?php echo $value['content']  ?></td>
					<td style="width: 50px">
						<a href='update.php?ID=<?php echo $value['ID'] ?>' class="btn btn-warning">Sửa</a>
					</td>
					<td style="width: 50px">
						<a href='delete.php?ID=<?php echo $value['ID'] ?>' class="btn btn-danger">Xoá</a>
					</td>
				</tr>
        <?php } ?>

			</tbody>
		</table>
	</div>
</div>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['btnSearch'])) { 
        search();
    }
    function search(){
        echo "<script type='text/javascript'> var Main = document.getElementById('tbl'); Main.innerHTML = ''</script>";
        $Keyword = $_POST['txtSearch']; 
        $conn = mysqli_connect("localhost","root","","eatfood");
        if($conn == true) { 
            $query = "select product.*, category.name as 'categoryName' from product, category where product.name like N'%".$Keyword."%' and category.category_id = product.category_id";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0 && $result != null ) {
                echo "<table id='tbl' class='table table-bordered table-hover' style='margin-top: 20px; '>";
                echo "<thead>";
                echo "<th>STT</th><th>Tên danh mục</th><th>Tên sản phẩm</th><th>Giá</th><th>Ảnh</th><th>Mô tả</th><th style='width: 50px'></th><th style='width: 50px'></th>";
                echo "</thead>";
                $index=1;
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td> " .$index++ . "</td>";
                    echo "<td> " .$row['categoryName'] . "</td>";
                    echo "<td> " .$row['name'] . "</td>";
                    echo "<td> " .$row['price'] . "</td>";
                    echo "<td> <img src='http://localhost:8080/Web-Food/access/php/giohang-donhang/assets/img/".$row['image']." ' width='50px'> </td>";
                    echo "<td> " .$row['content'] . "</td>";
                    echo "<td> " . "<a href='update.php?ID=". $row['ID']."' class='btn btn-warning'>Sửa</a>" . "</td>";
                    echo "<td> " . "<a href='delete.php?ID=". $row['ID']."' class='btn btn-danger'>Xóa</a>" . "</td>";
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


<?php 
    require_once('../layout/footer.php');
?>