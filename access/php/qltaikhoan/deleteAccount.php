<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Kiểm tra giữa kỳ</title>
</head>
<body>
    <?php 
        $ID = $_GET['id'];
        $conn= mysqli_connect("localhost","root","","EatFood");
      if($conn==true)
      {
        $query="select * from account where id = '".$ID."'";
        $result=mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)) {
          if($row["Job"] == 'admin'){
            echo "<script type='text/javascript'>";
            echo "alert('Không thể xóa tài khoản admin.');";
            echo "window.location.href='http://localhost:8080/Web-Food/access/php/qltaikhoan/indexTK.php';";
            echo "</script>";
          }else {
            $query="delete from account where id = '".$ID."'";
            $result=mysqli_query($conn,$query);
            if($result>0){
                echo "<script type='text/javascript'>";
                echo "alert('Xóa dữ liệu thành công');";
                echo "window.location.href='http://localhost:8080/Web-Food/access/php/qltaikhoan/indexTK.php';";
                echo "</script>";
            }
            else{
              echo "Xóa thất bại !";
            }
          }
        }
      }
      else
      {
      	echo "Kết nối không thành công " . mysqli_connect_error();
      }
    ?>
</body>
</html>