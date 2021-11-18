<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
</head>
<body>
<?php 
    $sdt = $_POST['txtsdt'];
    $pwnow = $_POST['txtpasswordnow'];
    $pwnew = $_POST['txtpasswordnew'];
    $conn = mysqli_connect("localhost", "root", "","EatFood");
    if($conn) {
        $query = "SELECT * FROM account where SDT = '".$sdt."' and passWord = '".$pwnow."'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0) {
            $query = "UPDATE account SET PassWord = '".$pwnew."' where SDT = '".$sdt."'";
            $result = mysqli_query($conn, $query);
            echo "<script type='text/javascript'>";
            echo "alert('Đổi mật khẩu thành công.');";
            echo "window.location.href='http://localhost:8080/Web-Food/index.php';";
            echo "</script>";
        }else {
            echo "<script type='text/javascript'>";
            echo "alert('Thông tin cung cấp không chính xác!');";
            echo "window.location.href='http://localhost:8080/Web-Food/index.php';";
            echo "</script>";
        }
    }
?>
</body>
</html>