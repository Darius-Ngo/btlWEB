<?php 
    $title = 'Home admin';
    $baseUrl = '../';
    require_once('../layout/header.php');
    $conn = mysqli_connect("localhost","root","","eatfood");
    $query_cate = mysqli_query($conn, "select * from category");
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Quản Lý Danh Mục Sản Phẩm</h3>

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
					<th>Ảnh</th>
					<th style="width: 50px"></th>
					<th style="width: 50px"></th>
				</tr>
			</thead>
			<tbody>
	    <?php foreach($query_cate as $key => $value) { ?>
		        <tr>
					<th><?php echo $key + 1  ?></th>
					<td><?php echo $value['name']  ?></td>
                    <td><img src="uploads_cate/<?php echo $value['image'] ?>" alt="" width="50px"></td>
					<td style="width: 50px">
						<a href='update.php?category_id=<?php echo $value['category_id'] ?>' class="btn btn-warning">Sửa</a>
					</td>
					<td style="width: 50px">
						<a onclick='return confirm("Bạn có muốn xóa dữ liệu không?")' href='delete.php?category_id=<?php echo $value['category_id'] ?>' class="btn btn-danger">Xoá</a>
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
            $query = "select * from category where name like N'%".$Keyword."%'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0 && $result != null ) {
                echo "<table id='tbl' class='table table-bordered table-hover' style='margin-top: 20px;'>";
                echo "<thead>";
                echo "<th>STT</th><th>Tên danh mục</th><th>Ảnh</th><th style='width: 50px'></th><th style='width: 50px'></th>";
                echo "</thead>";
                $index=1;
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td> " .$index++ . "</td>";
                    echo "<td> " .$row['name'] . "</td>";
                    echo "<td> <img src='uploads_cate/".$row['image']." ' width='50px'> </td>";
                    echo "<td> " . "<a href='update.php?category_id=". $row['category_id']."' class='btn btn-warning'>Sửa</a>" . "</td>";
                    echo "<td> " . "<a href='delete.php?category_id=". $row['category_id']."' class='btn btn-danger'>Xóa</a>" . "</td>";
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