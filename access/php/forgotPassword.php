<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
</head>
<body>
<?php 
    $sdt = $_POST['txtsdt'];
    $question = $_POST['txtcauhoi'];
    $answer = $_POST['txttraloi'];
    $conn = mysqli_connect("localhost", "root", "","EatFood");
    if($conn) {
        // step 2
        $query = "SELECT passWord FROM account where SDT = '".$sdt."' and CauHoi = '".$question."' and TraLoi = '".$answer."'";
        // step 3
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<script type='text/javascript'>";
                echo "alert('Mật khẩu của bạn là: ". $row["passWord"] .".');";
                echo "window.location.href='http://localhost:8080/Web-Food/index.php';";
                echo "</script>";
            }
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