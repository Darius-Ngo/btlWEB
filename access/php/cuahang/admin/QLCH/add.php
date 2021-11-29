<?php 
    $title = 'Home admin';
    $baseUrl = '../';
    require_once('../layout/header.php');
    $conn = mysqli_connect("localhost","root","","eatfood");
    $sqlarea = "select * from area";
    $area = mysqli_query($conn,$sqlarea);

    if(isset($_POST['StoreName'])) {
        $StoreName = $_POST['StoreName'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Address = $_POST['id'];

        if(isset($_FILES['Image'])) {
            $file = $_FILES['Image'];
            $file_name = $file['name'];
            move_uploaded_file($file['tmp_name'],'uploads/'.$file_name);
        }
        $sql = "insert into store(StoreName,PhoneNumber,Address,Image) values ('$StoreName','$PhoneNumber','$Address','$file_name')";
        $query = mysqli_query($conn,$sql);

        if($query == true) {
            header('location: index.php');
        } else {
            echo 'Loi';
        }
    }
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
        
		<h3>Thêm Cửa Hàng</h3>
            <div class="panel-body">
				<form method="post" role="form" action="" enctype="multipart/form-data">
					<div class="form-group">
                        <label for="">Tên Cửa Hàng:</label>
                        <input type="text" class="form-control" id="StoreName" name="StoreName">
					</div>
                    <div class="form-group">
                        <label for="">Số Điện Thoại:</label>
                        <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber">
                    </div>
                    <div class="form-group">
                        <label for="">Địa Chỉ:</label>
                        <select class="form-control" id="id" name="id" require="required">
                        <option value="">__________ Chọn Khu Vực __________</option>
                        <?php foreach($area as $key => $value) { ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['areaname'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh:</label>
                        <input type="file" class="form-control" id="Image" name="Image" required="required">
					</div>
					<div style="display:flex">
                        <button class="btn btn-success" type="submit" name="sbm">Lưu</button>
                        <a href="index.php" class="btn btn-success" style="display: block;margin-left: 8px">Quay lại</a>
                    </div>
				</form>
			</div>
        
	</div>
</div>


<?php 
    require_once('../layout/footer.php');
?>