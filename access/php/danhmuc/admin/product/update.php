<?php 
    $title = 'Home admin';
    $baseUrl = '../';
    require_once('../layout/header.php');

    $conn = mysqli_connect("localhost","root","","eatfood");
    $sql = "select * from category ";
    $query_cate = mysqli_query($conn,$sql);

    if(isset($_GET['ID'])) {
        $product_id = $_GET['ID'];
        $sql_prod = "select * from product where ID = $product_id";
        $query_prod = mysqli_query($conn,$sql_prod);
        $data = mysqli_fetch_assoc($query_prod);
    }


    if(isset($_POST['name'])) {
        $name = $_POST['name'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];
        $description = $_POST['content'];
        
        if(isset($_FILES['image'])) {
            $file = $_FILES['image'];
            $file_name = $file['name'];
            if(empty($file_name)) {
                $file_name = $data['image'];
            } else {
                move_uploaded_file($file['tmp_name'],'http://localhost:8080/Web-Food/access/php/giohang-donhang/assets/img/'.$file_name);
            }
        }

        $sql = "update product set category_id = '$category_id',name = '$name',price = '$price',image = '$file_name',content = '$description' where ID = '$product_id'";
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
        
		<h3>Sửa Sản Phẩm</h3>
            <div class="panel-body">
				<form method="post" role="form" action="" enctype="multipart/form-data">
					<div class="form-group">
                        <label for="">Tên sản phẩm:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['name'] ?>">
					</div>
					<div class="form-group">
                        <label for="">Tên danh mục:</label>
                        <select class="form-control" id="category_id" name="category_id" require="required" >
                        <!-- <option value="">__________ Chọn Danh Mục __________</option> -->
                        <?php foreach($query_cate as $key => $value) { ?>
                            <option value="<?php echo $value['category_id'] ?>" <?php echo (($value['category_id'] == $data['category_id']) ? 'selected' : '' ) ?> ><?php echo $value['name'] ?></option>
                        <?php } ?>
                        </select>
					</div>
					<div class="form-group">
                        <label for="">Giá:</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $data['price'] ?>">
					</div>
                    <div class="form-group">
                        <label for="">Ảnh:</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <img src="http://localhost:8080/Web-Food/access/php/giohang-donhang/assets/img/<?php echo $data['image'] ?>" alt="" style="margin-top:4px">
					</div>
                    <div class="form-group">
                        <label for="">Mô tả:</label>
                        <input type="text" class="form-control" id="content" name="content" value="<?php echo $data['content'] ?>">
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