<?php 
    $title = 'Home admin';
    $baseUrl = '../';
    require_once('../layout/header.php');

    $conn = mysqli_connect("localhost","root","","eatfood");
    $sqlarea = "select * from area";
    $area = mysqli_query($conn,$sqlarea);

    if(isset($_GET['ID'])) {
        $ID = $_GET['ID'];
        $sql_prod = "select * from store where ID = $ID";
        $query_prod = mysqli_query($conn,$sql_prod);
        $data = mysqli_fetch_assoc($query_prod);
    }


    if(isset($_POST['StoreName'])) {
        $StoreName = $_POST['StoreName'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Address = $_POST['id'];
        
        if(isset($_FILES['Image'])) {
            $file = $_FILES['Image'];
            $file_name = $file['name'];
            if(empty($file_name)) {
                $file_name = $data['Image'];
            } else {
                move_uploaded_file($file['tmp_name'],'uploads/'.$file_name);
            }
        }

        $sql = "update store set StoreName = '$StoreName',PhoneNumber = '$PhoneNumber',Address = '$Address',Image = '$file_name' where ID = '$ID'";
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
        
		<h3>Sửa Cửa Hàng</h3>
            <div class="panel-body">
				<form method="post" role="form" action="" enctype="multipart/form-data">
					<div class="form-group">
                        <label for="">Tên Cửa Hàng:</label>
                        <input type="text" class="form-control" id="StoreName" name="StoreName" value="<?php echo $data['StoreName'] ?>">
					</div>
                    <div class="form-group">
                        <label for="">Số Điện Thoại:</label>
                        <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" value="<?php echo $data['PhoneNumber'] ?>">
					</div>
                    <div class="form-group">
                        <label for="">Địa Chỉ:</label>
                        <select class="form-control" id="id" name="id" require="required" >
                        <!-- <option value="">__________ Chọn Danh Mục __________</option> -->
                        <?php foreach($area as $key => $value) { ?>
                            <option value="<?php echo $value['id'] ?>" <?php echo (($value['id'] == $data['Address']) ? 'selected' : '' ) ?> ><?php echo $value['areaname'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh:</label>
                        <input type="file" class="form-control" id="Image" name="Image">
                        <img src="uploads/<?php echo $data['Image'] ?>" alt="" style="margin-top:4px">
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