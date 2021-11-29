<?php 
    $title = 'Category';
    $baseUrl = '../';
    require_once('../layout/header.php');
    $conn = mysqli_connect("localhost","root","","eatfood");
    
    if(isset($_POST['name'])) {
        $name = $_POST['name'];

        if(isset($_FILES['image'])) {
            $file = $_FILES['image'];
            $file_name = $file['name'];
            move_uploaded_file($file['tmp_name'],'uploads_cate/'.$file_name);
        }

        $sql = "insert into category(name,image) values ('$name','$file_name')";
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
		<h3>Thêm Danh Mục Sản Phẩm</h3>

			<div class="panel-body">
				<form method="post" role="form" enctype="multipart/form-data">
					<div class="form-group">
					  <label for="">Tên Danh Mục:</label>
					  <input type="text" class="form-control" id="name" name="name">
					</div>
                    <div class="form-group">
                        <label for="">Ảnh:</label>
                        <input type="file" class="form-control" id="image" name="image" required="required">
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