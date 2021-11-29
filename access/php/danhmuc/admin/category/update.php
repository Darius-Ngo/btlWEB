<?php 
    $title = 'Home admin';
    $baseUrl = '../';
    require_once('../layout/header.php');
    $conn = mysqli_connect("localhost","root","","eatfood");
    if(isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        $sql_cate = "select * from category where category_id = $category_id";
        $query = mysqli_query($conn,$sql_cate);

        $data = mysqli_fetch_assoc($query);
    }

    if(isset($_POST['name'])) {
        $name = $_POST['name'];

        if(isset($_FILES['image'])) {
            $file = $_FILES['image'];
            $file_name = $file['name'];
            if(empty($file_name)) {
                $file_name = $data['image'];
            } else {
                move_uploaded_file($file['tmp_name'],'uploads_cate/'.$file_name);
            }
        }

        $sql = "update category set name='$name',image = '$file_name' where category_id = $category_id";
        $query_update = mysqli_query($conn,$sql);

        if($query_update == true) {
            header("Location: index.php");
        } else {
            echo 'Loi';
        }
    }

?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Sửa Danh Mục Sản Phẩm</h3>
            <div class="panel-body">
				<form method="post" role="form" action="" enctype="multipart/form-data">
					<div class="form-group">
                        <label for="">Tên danh mục sản phẩm:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['name'] ?>">
					</div>
                    <div class="form-group">
                        <label for="">Ảnh:</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <img src="uploads_cate/<?php echo $data['image'] ?>" alt="" style="margin-top:4px">
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