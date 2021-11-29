<?php 

		$category_id = $_GET['category_id'];
		$conn= mysqli_connect("localhost", "root", "", "eatfood");
		if ($conn == true) {
			$query= "select * from product where product.category_id='".$category_id."'";
			$result= mysqli_query($conn, $query);
			if ($result == true) {
				if(mysqli_fetch_assoc($result) > 0) {
					echo "<script type='text/javascript'>";
					echo "alert('Không thể xóa danh mục có sản phẩm');";
					echo "window.location.href='index.php';";
					echo "</script>";
				}else {
					$query= "delete from category where category_id='".$category_id."'";
					$result= mysqli_query($conn, $query);
					if ($result> 0) {
					echo "<script type='text/javascript'>";
					echo "alert('Xóa dữ liệu thành công');";
					echo "window.location.href='index.php';";
					echo "</script>";
					}else{
					echo "delete error";
					}
				}
			}else{
				$query= "delete from category where category_id='".$category_id."'";
				$result= mysqli_query($conn, $query);
				if ($result> 0) {
					echo "<script type='text/javascript'>";
					echo "alert('Xóa dữ liệu thành công');";
					echo "window.location.href='index.php';";
					echo "</script>";
				}else{
					echo "delete error";
				}
			}
			
		}else{
			echo "Connect is error " . mysqli_connect_error();
		}
	 ?>