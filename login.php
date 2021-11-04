<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $sdt = $_POST['phoneNumber'];
    $pass = $_POST['password'];
    $conn = mysqli_connect("localhost", "root", "","EatFood");
    echo $sdt;
    echo $pass;
    if($conn) {
        // step 2
        $query = "SELECT * FROM account where SDT = '".$sdt."' and passWord = '".$pass."'";
        // step 3
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0) {
            echo "<script type='text/javascript'>";
            echo "alert('Đăng nhập thành công');";
            echo "window.location.href='index.html';";
            echo "</script>";
        }
    }
?>
</body>
</html>