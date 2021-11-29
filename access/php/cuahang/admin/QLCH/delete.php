<?php 
		$ID = $_GET['ID'];
		$conn= mysqli_connect("localhost", "root", "", "eatfood");
		if ($conn == true) {
			$query= "delete from store where ID='".$ID."'";

			$result= mysqli_query($conn, $query);
			if ($result> 0) {
				echo "<script type='text/javascript'>";
				echo "alert('Xóa dữ liệu thành công');";
				echo "window.location.href='index.php';";
				echo "</script>";
			}else{
				echo "delete error";
			}
		}else{
			echo "Connect is error " . mysqli_connect_error();
		}
	 ?>