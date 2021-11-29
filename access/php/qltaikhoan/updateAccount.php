<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
    <style>
        body {
            height: 716px;
        }
        #btnback {
            background-color: orange;
            font-size: 18px;
        }
        #lblthongbao {
            color: blue;
        }
    </style>
</head>
<body>
<?php
        if($_GET["id"] != "") {
            $id = $_GET["id"];
            $state = "update";
            $conn= mysqli_connect("localhost","root","","EatFood");
            if($conn==true)
            {
              $query="select * from account where id = '".$id."'";
              $result=mysqli_query($conn,$query);
              if(mysqli_num_rows($result)>0){
                   while($row=mysqli_fetch_assoc($result))
                  {
                    $userName = $row["userName"];
                    $sdt =  $row["SDT"];
                    $password = $row["passWord"];
                    $question = $row["CauHoi"];
                    $answer = $row["TraLoi"];
                    $Job =  $row["Job"];
                    $image =  $row["image"];
                  }
              }
              else{
                  echo "Không có bản ghi !";
              }
            }
        }
    ?>
    <div class="container">
        <h1 class="heading-content">Sửa thông tin tài khoản</h1>
        <form action="" method="post" class="form-input">
            <div class="input-group">
                <div class="input-element">
                    <label class="lable-input" for="txtid" >ID:</label>
                    <input value="<?php echo($id) ?>" type="text" id="txtid" name="txtid" class="input-taginput" placeholder="ID sẽ tự động tăng" readonly>
                </div>
                <div class="input-element">
                    <label class="lable-input" for="txtname">Tên người dùng: </label>
                    <input value="<?php echo isset($_POST['txtname']) ? $_POST['txtname'] : $userName ?>" type="text" id= "txtname" name = "txtname" class="input-taginput" placeholder = "*" required oninvalid="setCustomValidity('Nhập tên người dùng')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="input-group">
                <div class="input-element">
                    <label class="lable-input" for="txtsdt">SĐT: </label>
                    <input value="<?php echo isset($_POST['txtsdt']) ? $_POST['txtsdt'] : $sdt ?>" type="number" id="txtsdt" name = "txtsdt" placeholder="*" class="input-taginput" required oninvalid="setCustomValidity('Nhập SĐT người dùng')" oninput="setCustomValidity('')">
                </div>
                <div class="input-element">
                    <label class="lable-input" for="txtcauhoi">Câu hỏi bảo mật: </label>
                    <select value="<?php echo isset($_POST['txtcauhoi']) ? $_POST['txtcauhoi'] : $question ?>" name="txtcauhoi" id="txtcauhoi" class="input-taginput">
                        <option>-- câu hỏi bảo mật --</option>
                        <option value="cau1">Bạn có người yêu chưa?</option>
                        <option value="cau2">Bạn học ngành gì?</option>
                        <option value="cau3">Bạn thích đi du lịch không?</option>
                        <option value="cau4">Bạn thường làm gì lúc rảnh?</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <div class="input-element">
                    <label class="lable-input" for="txtpassword">Mật khẩu: </label>
                    <input value="<?php echo isset($_POST['txtpassword']) ? $_POST['txtpassword'] : $password ?>" type="text" id="txtpassword" name = "txtpassword" class="input-taginput" placeholder = "*" required oninvalid="setCustomValidity('Mật khẩu tối thiểu 6 ký tự')" oninput="setCustomValidity('')" minlength= "6">
                </div>
                <div class="input-element">
                    <label class="lable-input" for="txttraloi">Câu trả lời bảo mật: </label>
                    <input value="<?php echo isset($_POST['txttraloi']) ? $_POST['txttraloi'] : $answer ?>" type="text" id="txttraloi" name = "txttraloi" placeholder="*" class="input-taginput" required oninvalid="setCustomValidity('Nhập câu trả lời')" oninput="setCustomValidity('')">                    
                </div>
            </div>
            <div class="input-group">
                <div class="input-element">
                    <label class="lable-input" for="txtnghiepvu">Nghiệp vụ: </label>
                    <select value="<?php echo isset($_POST['txtnghiepvu']) ? $_POST['txtnghiepvu'] : $Job ?>" name="txtnghiepvu" id="txtnghiepvu" class="input-taginput">
                        <option >-- Nghiệp vụ --</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="input-element">
                    <label class="lable-input" for="txthinhanh">Ảnh đại diện: </label>
                    <input type="file" id="txthinhanh" class="input-taginput" name = "txthinhanh" required oninvalid="setCustomValidity('Chọn ảnh')" oninput="setCustomValidity('')">                    
                </div>
            </div>
            <label id = "lblthongbao"></label>
            <div class="button-group">
                <button type="submit" class="btn-form" id = "btnsave" name="btnsave">
                <i class="fas fa-save icon-form"></i>Lưu thông tin
                </button>
                <a type="submit" href="http://localhost:8080/Web-Food/access/php/qltaikhoan/indexTK.php" class="btn-form" id = "btnback" name="btnexcel">
                <i class="fas fa-arrow-circle-left icon-form"></i> Quay lại
                </a>
            </div>
        </form>
    </div>
    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnsave'])) {
            Update();
        }
        function Update()
        {
            $id = $_POST['txtid'];
            $userName = $_POST['txtname'];
            $sdt = $_POST['txtsdt'];
            $password = $_POST['txtpassword'];
            $question = $_POST['txtcauhoi'];
            $answer = $_POST['txttraloi'];
            $Job = $_POST['txtnghiepvu'];
            $image = $_POST['txthinhanh'];
        $conn = mysqli_connect("localhost", "root", "","EatFood");
        if($conn){
            $query = "UPDATE account SET userName = '".$userName."', image = '".$image."' , passWord = '".$password."', SDT = '".$sdt."', CauHoi = '".$question."', TraLoi = '".$answer."', Job = '".$Job."' WHERE id = '".$id."'";
            $result = mysqli_query($conn, $query);
            if($result) {   
                echo "<script type='text/javascript'>";
                echo "document.getElementById('lblthongbao').textContent = 'Cập nhật thông tin thành công.'";
                echo "</script>";
            }else {
                echo "<script type='text/javascript'>";
                echo "document.getElementById('lblthongbao').textContent = 'Cập nhật thất bại.'";
                echo "</script>";
            }
        }
        }
    ?>
</body>
</html>