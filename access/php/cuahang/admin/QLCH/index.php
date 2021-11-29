<?php 
    $title = 'Home admin';
    $baseUrl = '../';
    require_once('../layout/header.php');
    $conn = mysqli_connect("localhost","root","","eatfood");
    $sql = "select store.*,area.areaname from store, area where store.Address = area.id";
    $query = mysqli_query($conn,$sql);
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Quản Lý Cửa Hàng</h3>

        <form method="post">
            <input type="text" name="txtSearch" placeholder="Search" id="txtSearch" value="<?php echo isset($_POST['txtSearch']) ? $_POST['txtSearch'] : ''?>">
            <button type="submit" name="btnSearch" id="btnSearch" style="margin-bottom: 10px; background-color: #28a745; border-radius: 6px; outline:none; color:#fff" >Search</button>
            <button type="submit" name="btnReload" id="btnReload" style="margin-bottom: 10px; background-color: #28a745; border-radius: 6px; outline:none; color:#fff" >Reload</button>
        </form>

		<a href="add.php" class="btn btn-success">Thêm mới</a>

		<table id="tbl" class="table table-bordered table-hover" style="margin-top: 20px; ">
			<thead>
				<tr> 
					<th>STT</th>
					<th>Tên Cửa Hàng</th>
					<th>Số Điện Thoại</th>
					<th>Địa Chỉ</th>
					<th>Ảnh</th>
					<th style="width: 50px"></th>
					<th style="width: 50px"></th>
				</tr>
			</thead>
			<tbody>
	    <?php foreach($query as $key => $value) { ?>
		        <tr>
					<th><?php echo $key + 1  ?></th>
					<td><?php echo $value['StoreName'] ?></td>
					<td><?php echo $value['PhoneNumber']  ?></td>
					<td><?php echo $value['areaname']  ?></td>
					<td><img src="uploads/<?php echo $value['Image'] ?>" alt="" width="50px"></td>
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
            $query = "select * from store where StoreName like N'%".$Keyword."%' or Address like N'%".$Keyword."%'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0 && $result != null ) {
                echo "<table id='tbl' class='table table-bordered table-hover' style='margin-top: 20px; '>";
                echo "<thead>";
                echo "<th>STT</th><th>Tên Cửa Hàng</th><th>Số Điện Thoại</th><th>Địa Chỉ</th><th>Ảnh</th><th style='width: 50px'></th><th style='width: 50px'></th>";
                echo "</thead>";
                $index=1;
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td> " .$index++  . "</td>";
                    echo "<td> " .$row['StoreName'] . "</td>";
                    echo "<td> " .$row['PhoneNumber'] . "</td>";
                    echo "<td> " .$row['Address'] . "</td>";
                    echo "<td> <img src='uploads/".$row['Image']." ' width='50px'> </td>";
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