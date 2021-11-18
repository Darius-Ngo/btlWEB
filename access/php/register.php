<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/base.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/grid.css">
    <title>Đăng ký tài khoản</title>
    <style>
        .container-header {
            position: fixed;
            left: 0;
            right: 0;
            height: 6rem;
            background-color: #fff;
            display: flex;
            align-items: center;
            color: #000;
        }
        .header_logo {
            height: 100%;
            margin-left: 10rem;
        }
        .header_content {
            font-size: 2.4rem;
            cursor: pointer;
            padding: 12px;
        }
        .header_content:hover {
            color: orangered;
        }
        .body-web {
            width: 100%;
            height: 100rem;
            background-image: url('https://bloganh.net/wp-content/uploads/2021/03/cach-chup-anh-do-an.jpg');
            background-repeat: no-repeat;
            background-size: contain;
            display: flex;
        }
        .container-form {
            width: 54rem;
            /* height: 50rem; */
            margin: auto;
            padding: 4rem 5rem;
            background-color: #fff;
            border-radius:6px;
        }
        .form-heading {
            text-align: center;
            font-size: 2.4rem;
        }
        input,
        select {
            width: 100%;
            height: 3.4rem;
            margin: 10px 0;
            padding: 6px 10px;
            border: 2px solid #999;
            border-radius: 4px;
            outline: none;
        }
        input:focus,
        select:focus {
            border: 2px solid rgb(233, 159, 132);
            transition: linear 0.5s;
        }
        #registerBtn {
            width: 100%;
            height: 3.4rem;
            border-radius: 20px;
            border: none;
            background-color: orangered;
            color: white;
            font-size: 1.8rem;
            margin: 16px 0;
        }
        .link-form_link {
            color:rgb(241, 122, 79);
            padding-left: 4px;
        }
        .link-form_link:hover{
            color: orangered;
        }
        .form-notify {
            font-size: 1.4rem;
            color: red;
        }
    </style>
</head>
<body>
    <header class="container-header">
        <img src="../img/header/logo.jpg" alt="" class="header_logo">
        <a href="http://localhost:8080/Web-Food/index.php" class="header_content">Trang chủ</a>
    </header>
    <div class="body-web">
        <div class="container-form">
            <h1 class="form-heading">Đăng ký tài khoản</h1>
            <form action="" method="post" onsubmit="return validateForm();">
                <input type="text" name="userName" id="userName" placeholder="* Họ và tên" required oninvalid="setCustomValidity('Nhập tên của bạn')" oninput="setCustomValidity('')">
                <input type="number" name="phoneNumber" id="phoneNumber" placeholder="* Số điện thoại" required oninvalid="setCustomValidity('Nhập SĐT của bạn')" oninput="setCustomValidity('')">
                <input type="password" name="passWord" id="passWord" placeholder="* Mật khẩu" required oninvalid="setCustomValidity('Nhập mật khẩu tối thiểu 6 ký tự')" oninput="setCustomValidity('')" minlength="6">
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="* Xác nhận mật khẩu" required oninvalid="setCustomValidity('Xác nhận mật khẩu')" oninput="setCustomValidity('')" minlength="6">
                <select name="question" id="question">
                    <option >--Câu hỏi bảo mật--</option>
                    <option value="cau1">Bạn có người yêu chưa?</option>
                    <option value="cau2">Bạn học ngành gì?</option>
                    <option value="cau3">Bạn thích đi du lịch không?</option>
                    <option value="cau4">Bạn thường làm gì lúc rảnh?</option>
                </select>
                <input type="password" name="answer" id="answer" placeholder="* Trả lời bảo mật" required oninvalid="setCustomValidity('Nhập câu trả lời bảo mật')" oninput="setCustomValidity('')">
                <input type="file" name="image" id="image" textContent = "Chọn ảnh của bạn">
                <span class="form-notify"></span>
                <button type="submit" name="registerBtn" id="registerBtn">Đăng ký</button>
            </form>
            <span class="link-form">Bạn đã có tài khoản?<a href="http://localhost:8080/Web-Food/index.php" class="link-form_link">Đăng nhập</a></span>
        </div>
    </div>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['registerBtn'])) {
            validate();
        }
        function validate() {
            $sdt = $_POST['phoneNumber'];
            $conn = mysqli_connect("localhost", "root", "","EatFood");
            if($conn) {
                // step 2
                $query = "SELECT * FROM account where SDT = '".$sdt."'";
                // step 3
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0) {
                    echo '<script type="text/javascript">';
                    echo 'confirm("SĐT này đã được đăng ký trước đó vui lòng chọn SĐT khác.");';
                    echo '</script>';
                }else {
                   register();
                }
            }
        }
        function register() {
            $sdt = $_POST['phoneNumber'];
            $userName = $_POST['userName'];
            $image = $_POST['image'];
            $question = $_POST['question'];
            $answer = $_POST['answer'];
            $pass = $_POST['passWord'];
            $confirmpass = $_POST['confirmPassword'];
            $conn = mysqli_connect("localhost", "root", "","EatFood");
            if($conn) {
                if($image == "") {
                    $query = "INSERT INTO account VALUES ('','".$userName."','daidien.jpg','".$pass."','".$sdt."','".$question."','".$answer."')";
                }else {
                    $query =  "INSERT INTO account VALUES ('','".$userName."','".$image."','".$pass."','".$sdt."','".$question."','".$answer."')";
                } 
                mysqli_query($conn, $query);
                echo '<script type="text/javascript">';
                echo ' alert("Đăng ký tài khoản thành công.");';
                echo '</script>';
            }
        }
    ?>

    <footer class="footer">
        <div class="grid wide">
            <div class="grid__row">
                <div class="grid__column-2-4">
                    <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                    <p class="footer-text">Công ty cổ phần ABCXYZ Việt Nam</p>
                    <p>
                        <b class="footer-text">Tòa nhà A, Tầng 2-201, 54 Triều Khúc, Thanh Xuân - Tp. Hà Nội </b>
                    </p>
                    <ul class="footer-list">
                        <li class="footer-item">
                        Hotline:<a href="tel:0394977310" class="footer-item__link"
                                 style="color:rgb(92,92,92) ;">0394977310</a>
                            </li>
                            <li class="footer-list">
                                Liên hệ hợp tác/tài trợ:
                                <a href="mailto:phuongnam2k1a@gmail.com" class="footer-item__link"
                                 style="color:#0897ee ;">phuongnam2k1a@gmail.com</a>
                            </li>
                            <li class="footer-list">
                                Liên hệ truyền thông:
                                <a href="mailto:namlovet0608@gmail.com" class="footer-item__link"
                                 style="color:#0897ee ;">namlovet0608@gmail.com</a>
                            </li>
                    </ul>
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading">Giới thiệu</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="" class="footer-item__link";">Giới thiệu về EAT FOOD</a>
                        </li>
                        <li>
                            <a href="" class="footer-item__link";">Tuyển dụng</a>
                        </li>
                        <li>
                            <a href="" class="footer-item__link";">ĐIều khoản</a>
                        </li>
                </ul>
                <h3 class="footer__heading">Theo dõi chúng tôi trên</h3>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="https://www.facebook.com/tubin.0704" class="footer-item__link" >
                            <i class="footer-item__icon fab fa-facebook"></i>
                            Facebook</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/ndnam_manu/" class="footer-item__link" >
                            <i class="footer-item__icon fab fa-instagram"></i>
                            Instagram</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/" class="footer-item__link" >
                            <i class="footer-item__icon fab fa-linkedin"></i>
                            Linkedin</a>
                    </li>
            </ul>
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading">Danh mục</h3>
                    <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item__link">EAT FOOD - giao đồ ăn</a>
                    </li>
                    <li>
                        <a href="" class="footer-item__link">EAT MART - đi chợ</a>
                    </li>
                    <li>
                        <a href="" class="footer-item__link">EAT ZAT - giặt ủi</a>
                    </li>
                    <li>
                        <a href="" class="footer-item__link">EAT POINT - tích điểm</a>
                    </li>
                    <li>
                        <a href="" class="footer-item__link">EAT DRINK - giao nước uống</a>
                    </li>
                    <li>
                        <a href="" class="footer-item__link">EAT SEND - vận chuyển</a>
                    </li>
            </ul>
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading">Hợp tác</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                        <a href="" class="footer-item__link">Mở của hàng trên EAT FOOD</a>
                        </li>
                        <li>
                            <a href="" class="footer-item__link">Mở của hàng trên EAT MART</a>
                        </li>
                        <li>
                            <a href="" class="footer-item__link">Mở của hàng trên EAT ZAT</a>
                        </li>
                        <li>
                            <a href="" class="footer-item__link">Mở của hàng trên EAT POINT</a>
                        </li>
                        <li>
                            <a href="" class="footer-item__link">Mở của hàng trên EAT DRINK</a>
                        </li>
                        <li>
                            <a href="" class="footer-item__link">Mở của hàng trên EAT SEND</a>
                        </li>
                </ul>
                    <h3></h3>
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                    <div class="footer__download">
                        <img src="../img/footer/Shoppe.png" alt="Download QR" class="footer__download-qr">
                        <div class="footer__download-apps">
                            <a href="https://www.apple.com/app-store/" class="footer__download-apps-link">
                                <img src="../img/footer/App-Store.png" alt="App Store" class="footer__download-apps-img">
                            </a>
                            <a href="https://play.google.com/store" class="footer__download-apps-link">
                                <img src="../img/footer/CH-Play.png" alt="Google play" class="footer__download-apps-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <a href="http://online.gov.vn/Home/WebDetails/43990" class="footer__logo">
                <img src="../img/footer/logo-bct.png" alt="Google play" class="footer__logo-img">
            </a>
            <div class="grid">
                <p class="footer__text-bottom">© Giấy CNĐKDN: 0313546809 – Ngày cấp: 24/11/2015, được sửa đổi lần thứ 1 ngày 01/04/2016.
                <br> Cơ quan cấp: Phòng Đăng ký kinh doanh – Sở kế hoạch và Đầu tư TP.HCM                        
                <br> Địa chỉ đăng ký kinh doanh: Lầu 4, Tòa nhà Mirae, 268 Tô Hiến Thành, Phường 15, Quận 10, Tp. Hồ Chí Minh, Việt Nam.</p>
            </div>
        </div>
    </footer>
    
    <script type="text/javascript">
        function validateForm() {
            $password = document.getElementById('passWord');
            $confirmpassword = document.getElementById('confirmPassword');
            $notification = document.querySelector('.form-notify');
            if($password.value ==$confirmpassword.value) {
                return true;
            }
            else {
                $notification.textContent = 'Mật khẩu xác nhận không khớp.';
                confirmPassword.value = "";
                confirmPassword.focus();
                return false;
            }
        }
    </script>
</body>
</html>