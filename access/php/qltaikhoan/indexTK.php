<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Test upload database</title>

    <style>
        #lblthongbao{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="heading-content">Quản lý tài khoản</h1>
        <a href="http://localhost:8080/Web-Food/index.php" class="btnback">
            <i class="fas fa-home btnback-icon"></i> Trang Chủ
        </a>
        <form action="" method="post" class="form-search">
            <div class="input-element">
                <label class="lable-input" for="txtsearch" >Tìm theo tên hoặc SĐT:</label>
                <input type="text" id="txtsearch" name="txtsearch" class="input-taginput" placeholder="Nhập thông tin cần tìm" required oninvalid="setCustomValidity('Nhập thông tin để tìm kiếm')" oninput="setCustomValidity('')">
            </div>
            <button type="submit" class="btn-form" name = "btnsearch" id="btnsearch">
            <i class="fas fa-search icon-form"></i>Tìm kiếm
            </button>
        </form>
        <form action="" method="post" class="form-input">
            <div class="input-group">
                <div class="input-element">
                    <label class="lable-input" for="txtid" >ID:</label>
                    <input type="text" id="txtid" name="txtid" class="input-taginput" placeholder="ID sẽ tự động tăng" readonly>
                </div>
                <div class="input-element">
                    <label class="lable-input" for="txtname">Tên người dùng: </label>
                    <input type="text" id= "txtname" name = "txtname" class="input-taginput" placeholder = "*" required oninvalid="setCustomValidity('Nhập tên người dùng')" oninput="setCustomValidity('')">
                </div>
            </div>
            <div class="input-group">
                <div class="input-element">
                    <label class="lable-input" for="txtsdt">SĐT: </label>
                    <input type="number" id="txtsdt" name = "txtsdt" placeholder="*" class="input-taginput" required oninvalid="setCustomValidity('Nhập SĐT người dùng')" oninput="setCustomValidity('')">
                </div>
                <div class="input-element">
                    <label class="lable-input" for="txtcauhoi">Câu hỏi bảo mật: </label>
                    <select name="txtcauhoi" id="txtcauhoi" class="input-taginput">
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
                    <input type="text" id="txtpassword" name = "txtpassword" class="input-taginput" placeholder = "*" required oninvalid="setCustomValidity('Mật khẩu tối thiểu 6 ký tự')" oninput="setCustomValidity('')" minlength= "6">
                </div>
                <div class="input-element">
                    <label class="lable-input" for="txttraloi">Câu trả lời bảo mật: </label>
                    <input type="text" id="txttraloi" name = "txttraloi" placeholder="*" class="input-taginput" required oninvalid="setCustomValidity('Nhập câu trả lời')" oninput="setCustomValidity('')">                    
                </div>
            </div>
            <div class="input-group">
                <div class="input-element">
                    <label class="lable-input" for="txtnghiepvu">Nghiệp vụ: </label>
                    <select name="txtnghiepvu" id="txtnghiepvu" class="input-taginput">
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
            <label for="txtsdt" id = "lblthongbao"></label>
            <div class="button-group">
                <button type="submit" class="btn-form" id = "btnsave" name="btnsave">
                <i class="far fa-address-card icon-form"></i>
                Thêm tài khoản
                </button>
                <a href = "exportExcel.php" type="submit" class="btn-form" id = "btnexcel" name="btnexcel">
                    <i class="far fa-file-excel icon-form" ></i>xuất excel
                </a>
            </div>
        </form>
        <h3>Danh sách tài khoản hiện hành</h3>
        <div id="container-table">
        <?php 
        $conn = mysqli_connect("localhost", "root", "","EatFood");
        if($conn) {
            $query = "SELECT * FROM account";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {   
            echo "<table cellspacing= 0 id='tblmain'><thead>";
                echo "<th>ID</th><th>Người sử dụng</th><th>SĐT</th><th>Mật khẩu</th><th>Câu hỏi bảo mật</th><th>Câu trả lời</th><th>Ảnh</th><th>Nghiệp vụ</th><th>Ngày tạo</th><th>Thao tác</th>";
                echo "</thead>";

                while($row = mysqli_fetch_assoc($result)) {
                    $showCH = "";
                    switch($row["CauHoi"]) {
                        case "cau1":
                            $showCH = 'Bạn có người yêu chưa?';
                            break;
                        case "cau2":
                            $showCH = 'Bạn học ngành gì?';
                            break;
                        case "cau3":
                            $showCH = 'Bạn thích đi du lịch không?';
                            break;
                        case "cau4":
                            $showCH = 'Bạn thường làm gì lúc rảnh?';
                            break;
                    }
                    echo "<tr class = 'Tag-tr'>";
                    echo "<td class = 'Tag-td'>". $row["id"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["userName"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["SDT"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["passWord"] . "</td>";
                    echo "<td class = 'Tag-td'>". $showCH . "</td>";
                    echo "<td class = 'Tag-td'>". $row["TraLoi"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["image"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["Job"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["NgayTao"] . "</td>";
                    echo "<td class = 'Tag-td'>". "<a href = 'updateAccount.php?id=".$row['id']."' class = 'btnupdate'><i class='fas fa-edit icon-form'></i> Sửa</a>" ." ".
                    "<a onclick='return confirm(\"Bạn có muốn xóa dữ liệu không\")'' href = 'deleteAccount.php?id=".$row['id']."'class = 'btndelete'><i class='fas fa-trash-alt icon-form'></i> Xóa</a>" . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
    ?>
    </div>
    <!-- search -->
    <?php 
	 	if ($_SERVER['REQUEST_METHOD'] == "POST"  and isset($_POST['btnsearch'])) {
	 		Search();
	 	}
	 	function Search(){
            echo "<script type='text/javascript'>var Main = document.getElementById('tblmain'); Main.innerHTML = '';</script>";
            $keyword = $_POST['txtsearch'];     
	 		$conn= mysqli_connect("localhost", "root", "", "EatFood");
	 		if ($conn != true) {
	 			die("Connect error". mysqli_connect_error());
	 		}else{
	 			$query = "select * from account where SDT like N'%".$keyword."%'or userName like N'%".$keyword."%'";
	 			$result = mysqli_query($conn, $query);

	 			if ($result != null && mysqli_num_rows($result)>0) {
                    echo "<table cellspacing= 0 id='tblmain'><thead>";
                echo "<th>ID</th><th>Người sử dụng</th><th>SĐT</th><th>Mật khẩu</th><th>Câu hỏi bảo mật</th><th>Câu trả lời</th><th>Ảnh</th><th>Nghiệp vụ</th><th>Ngày tạo</th><th>Thao tác</th>";
                echo "</thead>";

                while($row = mysqli_fetch_assoc($result)) {
                    $showCH = "";
                    switch($row["CauHoi"]) {
                        case "cau1":
                            $showCH = 'Bạn có người yêu chưa?';
                            break;
                        case "cau2":
                            $showCH = 'Bạn học ngành gì?';
                            break;
                        case "cau3":
                            $showCH = 'Bạn thích đi du lịch không?';
                            break;
                        case "cau4":
                            $showCH = 'Bạn thường làm gì lúc rảnh?';
                            break;
                    }
                    echo "<tr class = 'Tag-tr'>";
                    echo "<td class = 'Tag-td'>". $row["id"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["userName"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["SDT"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["passWord"] . "</td>";
                    echo "<td class = 'Tag-td'>". $showCH . "</td>";
                    echo "<td class = 'Tag-td'>". $row["TraLoi"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["image"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["Job"] . "</td>";
                    echo "<td class = 'Tag-td'>". $row["NgayTao"] . "</td>";
                    echo "<td class = 'Tag-td'>". "<a href = 'updateAccount.php?id=".$row['id']."' class = 'btnupdate'><i class='fas fa-edit icon-form'></i> Sửa</a>" ." ".
                    "<a onclick='return confirm(\"Bạn có muốn xóa dữ liệu không\")'' href = 'deleteAccount.php?id=".$row['id']."'class = 'btndelete'><i class='fas fa-trash-alt icon-form'></i> Xóa</a>" . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                
	 			}else{
	 				echo "Không tìm thấy.";
	 			}
	 		}
	 		mysqli_close($conn);
	 	}
	?>

    </div>
    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnsave'])) {
            CheckPhonenumber();
        }

        function CheckPhonenumber() {
            $sdt = $_POST['txtsdt'];
            $conn = mysqli_connect("localhost", "root", "","EatFood");
            if($conn){
            $query = "SELECT * FROM account WHERE SDT = '$sdt'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {   
                echo "<script type='text/javascript'>";
                echo "document.getElementById('lblthongbao').textContent = 'SĐT đã được sử dụng, vui lòng chọn số khác.'";
                echo "</script>";
                echo "<script type='text/javascript'>";
                echo "document.getElementById('txtsdt').focus()";
                echo "</script>";
            }else {
                InsertData();
            }
        }
        }

        function InsertData()
        {
            $userName = $_POST['txtname'];
            $sdt = $_POST['txtsdt'];
            $password = $_POST['txtpassword'];
            $question = $_POST['txtcauhoi'];
            $answer = $_POST['txttraloi'];
            $Job = $_POST['txtnghiepvu'];
            $image = $_POST['txthinhanh'];
        $conn = mysqli_connect("localhost", "root", "","EatFood");
        if($conn){
            $query = "INSERT INTO account(userName, image, passWord, SDT, CauHoi, TraLoi, Job) VALUES ('".$userName."','".$image."','".$password."','".$sdt."','".$question."','".$answer."','".$Job."')";
            $result = mysqli_query($conn, $query);
            if($result) {   
                echo "<script type='text/javascript'>";
                echo "alert('Thêm thành công.');";
                echo "window.location.href='http://localhost:8080/Web-Food/access/php/qltaikhoan/indexTK.php';";
                echo "</script>";
            }
        } else {
            echo 'fault';
        }
        }
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnupdate'])) {
            $state = 'update';
            echo "<script type='text/javascript'>";
            echo "alert('update thành công.');";
            echo "</script>";
        }
    ?>
    
</body>
</html>