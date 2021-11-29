<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./access/font/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./access/font/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- hieu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="./access/style/styleProduct.css">
    <link rel="stylesheet" href="./access/style/base.css">
    <link rel="stylesheet" href="./access/style/grid.css">
    <link rel="stylesheet" href="http://localhost:8080/Web-Food/access/style/style.css">
    <link rel="stylesheet" href="./access/style/style-form.css">
    <link rel="stylesheet" href="./access/style/responsive.css">
    <title>EAT Food - Địa điểm ăn uống, ẩm thực, ăn gì ở đâu tại Hà Nội, nhà hàng,...</title>
    <link rel="icon" href="./access/img/header/logo.jpg" type="image/x-icon" />
    <style>
        .slick-next:before, 
        .slick-prev:before {
            font-size: 36px !important; 
            color: #999 !important;
        }
        .introduce-list-item {
            display: flex;
            justify-content: center;
            max-width: 1200px;
            max-height: 154px;
            flex-wrap: wrap;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <!-- TopBar -->
    <header class="header-topBar">
        <ul class="topBar_list">
            <li class="topBar_item"><a href="" class="topBar_link active">Khám Phá</a></li>
            <li class="topBar_item"><a href="" class="topBar_link">Đặt Giao Hàng</a></li>
            <li class="topBar_item"><a href="./access/php/giohang-donhang/vongquaymayman/VòngQuayGiảiThưởng-NgẫuNhiên.html" class="topBar_link new">Săn Voucher
                <!-- new icon -->
                <p class="note-new">NEW</p>
            </a></li>
            <li class="topBar_item"><a href="" class="topBar_link">NowPOS</a></li>
            <li class="topBar_item"><a href="http://localhost:8080/Web-Food/access/php/giohang-donhang/indexall.php" class="topBar_link new">Đi Chợ
                <!-- new icon -->
                <p class="note-new">NEW</p>
            </a></li>
        </ul>
    </header>
    <!-- ToolBar -->
    <header class="header-toolBar">
        <div class="toolBar-category">
            <div class="toolBar_logo">
                <img src="./access/img/header/logo.jpg" alt="" class="toolBar_logo-img">
            </div>
            <div class="toolBar-category_places">
                <p class="category_place-name">Hà Nội</p>
                <i class="fas fa-sort-down category_place-icon"></i>
                
                <!-- form select-places -->
                <div class="form-places">
                    <div class="form-places_label">
                        <i class="fas fa-globe-asia form-places_label-icon"></i>
                        <p class="form-places_label-content">Tỉnh Thành</p>
                    </div>
                    <div class="form-places_search">
                        <i class="fas fa-search form-places_search-icon"></i>
                        <input type="search" name="" id="" placeholder="Tìm tỉnh thành" class="form-places_search-input">
                    </div>
                    <div class="form-places_select">
                        <!-- <a href="" class="form-places_select-link">
                            <p class="places_select-link-name">City name</p>
                            <p class="places_select-link-number">number</p>
                        </a>-->                       
                    </div>
                    <div class="form-places_footer">
                        <ul class="form-places_footer-list">
                            <li class="form-places_footer-item">
                                <i class="fas fa-map-marker-alt form-places_footer-icon"></i>
                                <p class="form-places_footer-content">334k</p>
                            </li>
                            <li class="form-places_footer-item">
                                <i class="fas fa-comment form-places_footer-icon"></i>
                                <p class="form-places_footer-content">1M</p>
                            </li>
                            <li class="form-places_footer-item">
                                <i class="fas fa-camera form-places_footer-icon"></i>
                                <p class="form-places_footer-content">10M</p>
                            </li>
                            <li class="form-places_footer-item">
                                <i class="fas fa-bookmark form-places_footer-icon"></i>
                                <p class="form-places_footer-content">25M</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="toolBar-category_activities">
                <p class="category_activity-name">Ăn uống</p>
                <i class="fas fa-sort-down category_activity-icon"></i>

                <!-- form select-activities -->
                <div class="form-activeties">
                    <div class="form-activeties_heading">
                        <i class="fas fa-bars form-activeties_heading-icon"></i>
                        Select category
                    </div>
                    <ul class="form-activeties_list">
                        <li class="form-activeties_item">
                            <p class="form-activeties_item-content">Ăn uống</p>
                            <i class="fas fa-angle-right form-activeties_item-icon"></i>
                            <!-- select more -->
                            <ul class="form-activeties_select-list">
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/AnUong/image-1.png" alt="" class="form-activeties_select-link-img"> Sang trọng</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/AnUong/image-2.png" alt="" class="form-activeties_select-link-img"> Buffet</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/AnUong/image-3.png" alt="" class="form-activeties_select-link-img"> Nhà hàng</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/AnUong/image-4.png" alt="" class="form-activeties_select-link-img"> Ăn vặt/vỉa hè</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/AnUong/image-5.png" alt="" class="form-activeties_select-link-img"> Ăn chay</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/AnUong/image-6.jfif" alt="" class="form-activeties_select-link-img"> Cafe</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/AnUong/image-7.jfif" alt="" class="form-activeties_select-link-img"> Quán nhậu</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/AnUong/image-8.png" alt="" class="form-activeties_select-link-img"> Quán ăn</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/AnUong/image-9.png" alt="" class="form-activeties_select-link-img"> Bar</a>
                            </ul>
                        </li>
                        <li class="form-activeties_item">
                            <p class="form-activeties_item-content">Du lịch</p>
                            <i class="fas fa-angle-right form-activeties_item-icon"></i>
                            <!-- select more -->
                            <ul class="form-activeties_select-list">
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DuLich/image-1.png" alt="" class="form-activeties_select-link-img"> Thăm quan & Chụp ảnh</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DuLich/image-2.png" alt="" class="form-activeties_select-link-img"> Khách sạn</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DuLich/image-3.png" alt="" class="form-activeties_select-link-img"> Khu nghỉ dưỡng</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DuLich/image-4.png" alt="" class="form-activeties_select-link-img"> Du lịch sinh thái</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DuLich/image-5.png" alt="" class="form-activeties_select-link-img"> Tàu du lịch</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DuLich/image-6.png" alt="" class="form-activeties_select-link-img"> Công viện vui chơi</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DuLich/image-7.png" alt="" class="form-activeties_select-link-img"> Bảo tàng</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DuLich/image-8.png" alt="" class="form-activeties_select-link-img"> Di tích</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DuLich/image-9.png" alt="" class="form-activeties_select-link-img"> Nhà thờ</a>
                            </ul>
                        </li>
                        <li class="form-activeties_item">
                            <p class="form-activeties_item-content">Cưới hỏi</p>
                            <i class="fas fa-angle-right form-activeties_item-icon"></i>
                             <!-- select more -->
                             <ul class="form-activeties_select-list">
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/CuoiHoi/image-1.png" alt="" class="form-activeties_select-link-img"> Tiệc cưới/hội nghị</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/CuoiHoi/image-2.png" alt="" class="form-activeties_select-link-img"> Chụp ảnh cưới</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/CuoiHoi/image-3.png" alt="" class="form-activeties_select-link-img"> Trang điểm</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/CuoiHoi/image-4.png" alt="" class="form-activeties_select-link-img"> Áo cưới</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/CuoiHoi/image-5.png" alt="" class="form-activeties_select-link-img"> Hoa cưới</a>
                            </ul>
                        </li>
                        <li class="form-activeties_item">
                            <p class="form-activeties_item-content">Đẹp khỏe</p>
                            <i class="fas fa-angle-right form-activeties_item-icon"></i>
                             <!-- select more -->
                             <ul class="form-activeties_select-list">
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DepKhoe/image-1.png" alt="" class="form-activeties_select-link-img"> Spa/Massage</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DepKhoe/image-2.png" alt="" class="form-activeties_select-link-img"> Làm tóc/gội đầu</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DepKhoe/image-3.png" alt="" class="form-activeties_select-link-img"> Thể dục thẩm mĩ</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DepKhoe/image-4.png" alt="" class="form-activeties_select-link-img"> Tiệm nail</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DepKhoe/image-5.png" alt="" class="form-activeties_select-link-img"> Chăm sóc da</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DepKhoe/image-6.png" alt="" class="form-activeties_select-link-img"> Mỹ phẩm</a>
                            </ul>
                        </li>
                        <li class="form-activeties_item">
                            <p class="form-activeties_item-content">Giải trí</p>
                            <i class="fas fa-angle-right form-activeties_item-icon"></i>
                             <!-- select more -->
                             <ul class="form-activeties_select-list">
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/GiaiTri/image-1.png" alt="" class="form-activeties_select-link-img"> Karaoke</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/GiaiTri/image-2.png" alt="" class="form-activeties_select-link-img"> Billiards</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/GiaiTri/image-3.png" alt="" class="form-activeties_select-link-img"> Rạp chiếu phim</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/GiaiTri/image-4.png" alt="" class="form-activeties_select-link-img"> Sân khấu</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/GiaiTri/image-5.png" alt="" class="form-activeties_select-link-img"> Khu chơi game</a>
                            </ul>
                        </li>
                        <li class="form-activeties_item">
                            <p class="form-activeties_item-content">Mua sắm</p>
                            <i class="fas fa-angle-right form-activeties_item-icon"></i>
                             <!-- select more -->
                             <ul class="form-activeties_select-list">
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/MuaSam/image-1.png" alt="" class="form-activeties_select-link-img"> Shop/cửa hàng</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/MuaSam/image-2.png" alt="" class="form-activeties_select-link-img"> Siêu thị</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/MuaSam/image-3.png" alt="" class="form-activeties_select-link-img"> Trung tâm thương mại</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/MuaSam/image-4.png" alt="" class="form-activeties_select-link-img"> Chợ</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/MuaSam/image-5.png" alt="" class="form-activeties_select-link-img"> Mua sắm online</a>
                            </ul>
                        </li>
                        <li class="form-activeties_item">
                            <p class="form-activeties_item-content">Giáo dục</p>
                            <i class="fas fa-angle-right form-activeties_item-icon"></i>
                             <!-- select more -->
                             <ul class="form-activeties_select-list">
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/GiaoDuc/image-1.png" alt="" class="form-activeties_select-link-img"> Đại Học & Cao Đẳng</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/GiaoDuc/image-2.png" alt="" class="form-activeties_select-link-img"> Trung tâm giáo dục</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/GiaoDuc/image-3.png" alt="" class="form-activeties_select-link-img"> Trung tâm ngoại ngữ</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/GiaoDuc/image-4.png" alt="" class="form-activeties_select-link-img"> Nhà sách/thư viện</a>
                            </ul>
                        </li>
                        <li class="form-activeties_item">
                            <p class="form-activeties_item-content">Dịch vụ</p>
                            <i class="fas fa-angle-right form-activeties_item-icon"></i>
                             <!-- select more -->
                             <ul class="form-activeties_select-list">
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DichVu/image-1.png" alt="" class="form-activeties_select-link-img"> Bank-ATM</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DichVu/image-2.png" alt="" class="form-activeties_select-link-img"> Trạm xăng</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DichVu/image-3.png" alt="" class="form-activeties_select-link-img"> Viễn thông</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DichVu/image-4.png" alt="" class="form-activeties_select-link-img"> Vận tải</a>
                                <a href="#" class="form-activeties_select-link">
                                    <img src="./access/img/header/Select activities/DichVu/image-5.png" alt="" class="form-activeties_select-link-img"> Giặt ủi</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="toolBar-category_download">
                <i class="fas fa-mobile-alt category_download-icon"></i>
                <p class="category_download-app">APP</p>

                <!-- form download -->
                <div class="form-download">
                    <div class="form-download_QR">
                        <img src="./access/img/header/QR.png" alt="" class="form-download_QR-img">
                    </div>
                    <div class="form-download_app">
                        <a href="#" class="form-download_app-link">
                            <img src="./access/img/header/AppStore.png" alt="" class="form-download_app-img">
                        </a>
                        <a href="#" class="form-download_app-link">
                            <img src="./access/img/header/GG Play.png" alt="" class="form-download_app-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="toolBar-login">
            <a href="./access/php/register.php" class="toolBar-register active">Đăng ký</a>
            <div class="toolBar-account active">Đăng Nhập</div>

            <div class="toolBar-User">
                <?php
                 $sdt = $_POST['phoneNumber'];
                 $pass = $_POST['password'];
                 $conn = mysqli_connect("localhost", "root", "","EatFood");
                 if($conn) {
                 // step 2
                 $query = "SELECT * FROM account where SDT = '".$sdt."' and passWord = '".$pass."'";
                 // step 3
                 $result = mysqli_query($conn, $query);
                 if(mysqli_num_rows($result) > 0) {
                     while($row = mysqli_fetch_assoc($result)) {
                         echo '<img src="./access/img/gallery/'.$row["image"].'" alt="" class="User_img">';
                         echo '<p class="User_name">'.$row["userName"].'</p>';
                     }
                 }
                 }
                ?>
                <!-- form user-menu -->
                <ul class="user-menu_list">
                    <li class="user-menu_item user-menu_header">
                    <?php
                    $sdt = $_POST['phoneNumber'];
                     $pass = $_POST['password'];
                    $conn = mysqli_connect("localhost", "root", "","EatFood");
                     if($conn) {
                     // step 2
                     $query = "SELECT * FROM account where SDT = '".$sdt."' and passWord = '".$pass."'";
                     // step 3
                     $result = mysqli_query($conn, $query);
                     if(mysqli_num_rows($result) > 0) {
                     while($row = mysqli_fetch_assoc($result)) {
                        echo '<img src="./access/img/gallery/'.$row["image"].'" alt="" class="user-menu_header-img">';
                        echo '<span class="user-menu_header-name">'.$row["userName"].'</span>';
                    }
                }
                }
                ?>                      
                    </li>
                    <li class="user-menu_item menu_item-border-top">
                        <i class="far fa-comment-dots menu-item_icon menu-item_icon-green"></i>
                        <span class="menu-item_content">Hoạt động cá nhân </span>
                    </li>
                    <li class="user-menu_item">
                        <i class="far fa-bookmark menu-item_icon menu-item_icon-green"></i>
                        <span class="menu-item_content">Lưu chữ </span>
                    </li>
                    <li class="user-menu_item menu_item-border-top">
                        <i class="fas fa-history menu-item_icon menu-item_icon-blue"></i>
                        <span class="menu-item_content">Lịch sử đặt hàng </span>
                    </li>
                    <li class="user-menu_item">
                        <i class="fab fa-cc-visa menu-item_icon menu-item_icon-blue"></i>
                        <span class="menu-item_content">Thanh toán </span>
                    </li>
                    <li class="user-menu_item">
                        <i class="fas fa-poll menu-item_icon menu-item_icon-blue"></i>
                        <span class="menu-item_content">Điểm thưởng </span>
                    </li>
                    <li class="user-menu_item menu_item-border-top">
                        <i class="fas fa-envelope-open-text menu-item_icon"></i>
                        <span class="menu-item_content">Góp ý </span>
                    </li>
                    <li class="user-menu_item changePassWord-item" onclick="changePassWord();">
                        <i class="fas fa-key menu-item_icon"></i>
                        <span class="menu-item_content">Đổi mật khẩu </span>
                    </li>
                    <li class="user-menu_item">
                        <i class="fas fa-cog menu-item_icon"></i>
                        <span class="menu-item_content">Cài đặt </span>
                    </li>
                    <li class="user-menu_item menu_item-border-top user-menu_item-sign-out">
                        <i class="fas fa-power-off menu-item_icon"></i>
                        <span class="menu-item_content">Đăng xuất </span>
                        <i class="fas fa-sign-out-alt menu-item_icon-out"></i>
                    </li>
                </ul>
            </div>

            <div class="toolBar-admin" id="admin">Admin
                <!-- form control -->
                <ul class="control-menu_list">
                    <li class="user-menu_item-header">
                        <span class="menu-item_content" style="font-weight: bold; font-size: 13px;">Chức năng Admin </span>
                    </li>
                    <a href="./access/php/qltaikhoan/indexTK.php" class="control-menu_item menu_item-border-top">
                        <i class="fas fa-user-circle " style="color: green;"></i>
                        <span class="menu-item_content">Tài khoản người dùng</span>
                    </a>
                    <a href="./access/php/cuahang/admin/index.php" class="control-menu_item">
                        <i class="fas fa-store" style="color: #00aff2;"></i>
                        <span class="menu-item_content">Cửa hàng liên kết</span>
                    </a>
                    <a href="./access/php/danhmuc/admin/category/index.php" class="control-menu_item ">
                        <i class="fas fa-hamburger" style="color: orangered;"></i>
                        <span class="menu-item_content">Danh mục & Sản phẩm</span>
                    </a>
                    <a href="./access/php/giohang-donhang/order_listing.php" class="control-menu_item ">
                        <i class="far fa-file-alt" style="color: orange;"></i>
                        <span class="menu-item_content">Đơn hàng </span>
                    </a>
                </ul>
            </div>

            <div class="toolBar-notification">
                <i class="fas fa-bell toolBar-notification_icon"></i>
                <!-- form notifications -->
                <div class="form-notifications ">
                    <div class="form-notifications_heading">
                        <h3 class="notifications_heading-content">Thông báo mới từ Eat Food</h3>
                    </div>
                    <ul class="form-notifications_list">
                        <!-- <li class="form-notifications_item">
                            <a href="#" class="form-notifications_link new-notification">
                                <img src="./access/img/header/img-notification/image-1.jpg" alt="" class="form-notifications_link-img">
                                <div class="form-notifications_link-content">
                                    <h4 class="notifications-content_heading">restaurant name</h4>
                                    <span class="notifications-content_content">notifications</span>
                                </div>
                            </a>                          
                        </li> -->
                    </ul>
                    <div class="form-notifications_footer">
                        <span class="form-notifications_footer-content">Đánh dấu là đã xem</span>
                    </div>
                </div>
            </div>
            <div class="toolBar-add-button">
                <i class="ti-plus add-button_icon"></i>

                <!-- form add element -->
                <div class="form-add-element">
                    <h4 class="form-add_heading">Bạn có thể</h4>
                    <ul class="form-add_list">
                        <li class="form-add_item">
                            <a href="#" class="form-add_link">
                                <i class="fas fa-map-marker-alt form-add_link-icon"></i>
                                <div class="form-add_link-content">
                                    <p class="form-add_link-name">Tạo địa điểm</p>
                                    <span class="form-add_link-description">Sẽ được duyệt trong vòng 48 tiếng</span>
                                </div>
                            </a>
                        </li>
                        <li class="form-add_item">
                            <a href="#" class="form-add_link">
                                <i class="fas fa-comment form-add_link-icon"></i>
                                <div class="form-add_link-content">
                                    <p class="form-add_link-name">Viết bình luận</p>
                                    <span class="form-add_link-description">Để chia sẻ trải nghiệm cho cộng đồng</span>
                                </div>
                            </a>
                        </li>
                        <li class="form-add_item">
                            <a href="#" class="form-add_link">
                                <i class="fas fa-bars form-add_link-icon"></i>
                                <div class="form-add_link-content">
                                    <p class="form-add_link-name">Tạo bộ sưu tập</p>
                                    <span class="form-add_link-description">Để lưu trữ địa điểm của bạn</span>
                                </div>
                            </a>
                        </li>
                        <li class="form-add_item">
                            <a href="#" class="form-add_link">
                                <i class="fas fa-thumbs-down form-add_link-icon"></i>
                                <div class="form-add_link-content">
                                    <p class="form-add_link-name">Góp ý</p>
                                    <span class="form-add_link-description">Để phục vụ bạn tốt hơn</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="toolBar-languages">
                <img src="./access/img/header/vn.png" alt="" class="toolBar-languages_img">

                <!-- select languages -->
                <div class="select-languages">
                    <img src="./access/img/header/us.png" alt="" class="select-languages_img">
                    <span class="select-languages_name">EN</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Slider -->
    <div class="header-slider">
        <img src="./access/img/header/slider.jpg" alt="" class="slider_img">
        <div class="header-search">
            <i class="fas fa-search header-search_icon"></i>
            <input type="search" name="" id="" placeholder="Hôm nay bạn muốn ăn gì nào?" class="header-search_input">
        </div>
        <section class="header-address">
            <label for="" class="address-heading">Địa chỉ của bạn</label>
            <div class="select-address">
                <i class="fas fa-map-marker-alt address-map_icon"></i>
                <label for="" class="address-label">Hà Nội</label>
                <i class="fas fa-chevron-right address-select_icon"></i>
            </div>
        </section>
    </div>

    <!-- Content -->
    <!-- hiếu -->
    <div class="introduce hieu grid wide">
        <div class="container">
            <div class="introduce-slide-container">
                <div class="introduce-slide filtering">
                    <div class="introduce-slide-img ">
                        <a href="#">
                            <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-1957-1623993489?w=393&type=o" alt="Anh">
                        </a>
                    </div>
                    <div class="introduce-slide-img ">
                        <a href="#">
                            <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-1845-1622537721?w=393&type=o" alt="Anh">
                        </a>
                    </div>
                    <div class="introduce-slide-img ">
                        <a href="#">
                            <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-1804-1621311479?w=393&type=o" alt="Anh">
                        </a>
                    </div>
                    <div class="introduce-slide-img ">
                        <a href="#">
                            <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-1962-1624004669?w=393&type=o" alt="Anh">
                        </a>
                    </div>
                    <div class="introduce-slide-img ">
                        <a href="#">
                            <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-2116-1633672829?w=393&type=o" alt="Anh">
                        </a>
                    </div>
                    <div class="introduce-slide-img ">
                        <a href="#">
                            <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-2137-1634904721?w=393&type=o" alt="Anh">
                        </a>
                    </div>
                    <div class="introduce-slide-img ">
                        <a href="#">
                            <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-2141-1635274090?w=393&type=o" alt="Anh">
                        </a>
                    </div>
                    <div class="introduce-slide-img ">
                        <a href="#">
                            <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-2152-1635579019?w=393&type=o" alt="Anh">
                        </a>
                    </div>
                    <div class="introduce-slide-img ">
                        <a href="#">
                            <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-2076-1632161294?w=393&type=o" alt="Anh">
                        </a>
                    </div>
                    <div class="introduce-slide-img ">
                        <a href="#">
                            <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-2080-1633058050?w=393&type=o" alt="Anh">
                        </a>
                    </div>
                </div>
            </div>
        </div>
            <!-- JS Hiếu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.filtering').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow:`<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>`,
        nextArrow:`<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>`,
        dots: true,
        });

        var filtered = false;

        $('.js-filter').on('click', function(){
        if (filtered === false) {
            $('.filtering').slick('slickFilter',':even');
            $(this).text('Unfilter Slides');
            filtered = true;
        } else {
            $('.filtering').slick('slickUnfilter');
            $(this).text('Filter Slides');
            filtered = false;
        }
        });
    </script>
        <div class="introduce-title">
            <h2>CHỌN THEO THỂ LOẠI</h2>
        </div>
    <?php 
        require_once('./access/php/danhmuc/user/index.php');
    ?>      
    </div>
    
    <!-- Tú -->
    <div class="heading-content">
        <h2>SẢN PHẨM</h2>
    </div>
    <div class="container-product grid wide">
        <div class="row">
            <div class="col l-2-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="http://localhost:8080/Web-Food/access/php/giohang-donhang/detail.php?ID=11">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="./access/img/product/1-1.png" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Trà Sữa Thái Xanh</div>
                        <div class="portfolio-caption-subheading text-muted">30.000đ</div>
                        <div class="portfolio-caption-subheading text-muted">4.3km</div>
                        <button type="button" class="btn btn-warning" style=";margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%">Xem  </button>
                    </div>
                </div>
            </div>
            <div class="col l-2-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="http://localhost:8080/Web-Food/access/php/giohang-donhang/detail.php?ID=12">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="./access/img/product/2-1.png" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Tôm Hùm hấp xả</div>
                        <div class="portfolio-caption-subheading text-muted">105.000đ</div>
                        <div class="portfolio-caption-subheading text-muted">6.6km</div>
                        <button type="button" class="btn btn-warning" style=";margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%">Xem</button>
                    </div>
                </div>
            </div>
            <div class="col l-2-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="http://localhost:8080/Web-Food/access/php/giohang-donhang/detail.php?ID=13">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="./access/img/product/3-1.png" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Cháo Ếch Singapore</div>
                        <div class="portfolio-caption-subheading text-muted">45.000đ</div>
                        <div class="portfolio-caption-subheading text-muted">7.6km</div>
                        <button type="button" class="btn btn-warning" style=";margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%">Xem</button>
                    </div>
                </div>
            </div>
            <div class="col l-2-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="http://localhost:8080/Web-Food/access/php/giohang-donhang/detail.php?ID=14">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="./access/img/product/4-1.png" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Mì Kim Chi Hải Sản </div>
                        <div class="portfolio-caption-subheading text-muted">49.000đ</div>
                        <div class="portfolio-caption-subheading text-muted">7.5km</div>
                        <button type="button" class="btn btn-warning" style=";margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%">Xem</button>
                    </div>
                </div>
            </div>
            <div class="col l-2-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="http://localhost:8080/Web-Food/access/php/giohang-donhang/detail.php?ID=15">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="./access/img/product/5-1.png" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Bánh Cua Tôm Càng</div>
                        <div class="portfolio-caption-subheading text-muted">88.000đ</div>
                        <div class="portfolio-caption-subheading text-muted">8.5km</div>
                        <button type="button" class="btn btn-warning" style=";margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%">Xem</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="http://localhost:8080/Web-Food/access/php/giohang-donhang/indexall.php" class="btn-view-all">
        XEM TẤT CẢ
        <i class="fas fa-chevron-right btn-view-all-icon"></i>
    </a>

    <!-- Hiệp -->
    <div class="heading-content">
        <h2>KHU VỰC</h2>
    </div>
        <!-- load cửa hàng -->
    <?php 
        require_once('./access/php/cuahang/user/index.php');
    ?>


    <!-- Nam -->
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
                        <img src="./access/img/footer/Shoppe.png" alt="Download QR" class="footer__download-qr">
                        <div class="footer__download-apps">
                            <a href="https://www.apple.com/app-store/" class="footer__download-apps-link">
                                <img src="./access/img/footer/App-Store.png" alt="App Store" class="footer__download-apps-img">
                            </a>
                            <a href="https://play.google.com/store" class="footer__download-apps-link">
                                <img src="./access/img/footer/CH-Play.png" alt="Google play" class="footer__download-apps-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <a href="http://online.gov.vn/Home/WebDetails/43990" class="footer__logo">
                <img src="./access/img/footer/logo-bct.png" alt="Google play" class="footer__logo-img">
            </a>
            <div class="grid">
                <p class="footer__text-bottom">© Giấy CNĐKDN: 0313546809 – Ngày cấp: 24/11/2015, được sửa đổi lần thứ 1 ngày 01/04/2016.
                <br> Cơ quan cấp: Phòng Đăng ký kinh doanh – Sở kế hoạch và Đầu tư TP.HCM                        
                <br> Địa chỉ đăng ký kinh doanh: Lầu 4, Tòa nhà Mirae, 268 Tô Hiến Thành, Phường 15, Quận 10, Tp. Hồ Chí Minh, Việt Nam.</p>
            </div>
        </div>
    </footer>

    <!-- form login -->
    <div class="overlay-login overlay">
        <div class="form-login">
            <div class="form-heading">
                <i class="fas fa-arrow-left form-heading_icon-back"></i>
                <div class="form-heading_content">
                    <img src="./access/img/header/logo.jpg" alt="" class="form-heading_logo">
                    <h4 class="form-heading_name">Eat Food</h4>
                </div>
                <i class="fas fa-times form-heading_icon"></i>
            </div>
            <form method="post" class="form-login_main">
                <h4 class="form-main_heading">Chào mừng đến với Eat Food</h4>
                <span class="form-main_description">Nhập số điện thoại của bạn để tiếp tục</span>
                <div class="form-login_input active">
                    <div class="login-input_label">
                        <img src="./access/img/header/vn.png" alt="" class="login-input_label-img">
                        <span class="login-input_label-number">+84</span>
                    </div>
                    <input type="number" name="phoneNumber" id="phoneNumber" class="login-input_input" required oninvalid="setCustomValidity('Nhập SĐT để tiếp tục')" oninput="setCustomValidity('')">
                </div>
                <div class="form-login_input-pass">
                    <input type="password" name="password" id="password" class="login-input_pass" required oninvalid="setCustomValidity('Nhập mật khẩu để đăng nhập')" oninput="setCustomValidity('')" >
                    <a href="#" class="login-input_forget-pass">Quên mật khẩu?</a>
                </div>
                <div class="form-login_btn active"><span>Tiếp tục</span></div>
                <button type="submit" class="form-login_btn-2" name="loginBtn">Đăng nhập</button>
                <div class="form-login_other">
                    <span class="form-login_or">Hoặc</span>
                    <a href="#" class="form-login_facebook">
                        <i class="fab fa-facebook form-login_facebook-icon"></i>
                        <span class="form-login_facebook-content">Đăng nhập với Facebook</span>
                    </a>
                    <a href="#" class="form-login_rules">Điều khoản & Điều kiện sử dụng</a>
                </div>
            </form>
        </div>
    </div>
    <!-- form forgotpassword -->
    <div class="overlay-forgotpassword overlay">
        <div class="form-forgotpassword">
            <div class="form-forgotpass-heading">
                <div class="form-forgotpass-heading_content">
                    Quên mật khẩu
                </div>
                <i class="fas fa-times form-forgotpass_icon"></i>
            </div>
            <form method="post" action= "./access/php/forgotPassword.php" class="form-forgotpass_main">
                <h4 class="form-forgot_main-content">Nhập thông tin để lấy mật khẩu</h4>
                <input type="text" name="txtsdt" id="txtsdt" class="form-forgotpass_input-sdt" placeholder="Số điện thoại" required oninvalid="setCustomValidity('Nhập SĐT của bạn')" oninput="setCustomValidity('')">
                <select name="txtcauhoi" id="txtcauhoi">
                    <option>--câu hỏi bảo mật--</option>
                    <option value="cau1">Bạn có người yêu chưa?</option>
                    <option value="cau2">Bạn học ngành gì?</option>
                    <option value="cau3">Bạn thích đi du lịch không?</option>
                    <option value="cau4">Bạn thường làm gì lúc rảnh?</option>
                </select>
                <input type="password" name="txttraloi" id="txttraloi" class="form-forgotpass_input-traloi" placeholder="câu trả lời bảo mật"  required oninvalid="setCustomValidity('Nhập câu trả lời')" oninput="setCustomValidity('')">
                <button type="submit" class="form-forgotpass_btn">Lấy mật khẩu</button>
            </form>
        </div>
    </div>

    <!-- form changePassWord -->
    <div class="overlay overlay-change-password">
        <div class="form-change-password">
            <div class="form-changepassword-heading">
                <div class="form-changepassword-heading_content">
                    Đổi mật khẩu
                </div>
                <i class="fas fa-times form-change-password_icon"></i>
            </div>
            <form method="post" onsubmit="return validateForm();" action="./access/php/ChangePassword.php" class="form-changepassword_main">
                <h4 class="form-changepw_main-content">Nhập thông tin để đổi mật khẩu</h4>
                <input type="text" name="txtsdt" id="txtchangepwsdt" class="form-changepw_input-sdt" placeholder="Số điện thoại" required oninvalid="setCustomValidity('Nhập SĐt của bạn')" oninput="setCustomValidity('')">
                <input type="password" name="txtpasswordnow" id="txtpasswordnow" class="form-changepw_input-pwnow" placeholder="Mật khẩu hiện tại" required oninvalid="setCustomValidity('Nhập mật khẩu hiện tại')" oninput="setCustomValidity('')">
                <input type="password" name="txtpasswordnew" id="txtpasswordnew" class="form-changepw_input-pwnew" placeholder="Mật khẩu mới" required oninvalid="setCustomValidity('Nhập mật khẩu mới')" oninput="setCustomValidity('')">
                <input type="password" name="txtpasswordconfirm" id="txtpasswordconfirm" class="form-changepw_input-pwconfirm" placeholder="Xác nhận mật khẩu mới"  required oninvalid="setCustomValidity('Xác nhận mật khẩu mới')" oninput="setCustomValidity('')">
                <label for="" class="form-notify"></label>
                <button type="submit" class="form-changepassword_btn">Đổi mật khẩu</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        function validateForm() {
            $password = document.getElementById('txtpasswordnew');
            $confirmpassword = document.getElementById('txtpasswordconfirm');
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

    <!-- form select address -->
    <div class="overlay overlay-address">
        <div class="Map-form-container">
            <div class="Map-select"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59727.711381237415!2d106.11611296755733!3d20.670312868816026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135c0481befec0d%3A0xdf299ab9e4751a2a!2zVGnDqm4gTOG7rywgSMawbmcgWcOqbiwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1634634514733!5m2!1svi!2s" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" id="map"></iframe></div>
            <h1 class="Map-form-content"> Chọn nơi giao hàng</h1>
            <div class="Map-form_input">
                <i class="fas fa-map-marker-alt Map-form_input-icon"></i>
                <input type="text" name="Address" id="Address" class="Map-form_input-input" placeholder="Nhập địa chỉ của bạn">
            </div>
            <div class="Map-form_location">
                <i class="ti-target Map-form_location-icon"></i>
                <div class="Map-form_location-content">
                    <h4 class="Map-form_location-heading">Vị trí hiện tại</h4>
                    <p class="Map-form_location-now">Cương Chính, Tiên Lữ, Hưng Yên</p>
                </div>
            </div>
            <div class="Map-form_footer">
                <span class="Map-form_footer-content">
                    <i class="fas fa-arrow-left Map-form_footer-icon"></i>
                    Trở lại
                </span>
            </div>
            <div class="Select-location_now">
                <i class="ti-target Select-location_icon"></i>
            </div>
        </div>
    </div>

    <!-- JS long -->
    <script src="http://localhost:8080/Web-Food/access/style/main.js"></script>

     <!-- nút ring ring -->
     <div class="ring-wrapper">     
        <div class="ring">
            <a href="tel: 0358102912 " title="gọi ngay">
                <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show">
                    <div class="coccoc-alo-ph-circle hide-on-mobile"></div>
                    <div class="coccoc-alo-ph-circle-fill"></div>
                    <div class="coccoc-alo-ph-img-circle"></div>
                </div>
            </a>
        </div>
    </div>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['loginBtn'])) {
            Login();
        }
        function Login(){
            $sdt = $_POST['phoneNumber'];
            $pass = $_POST['password'];
            $conn = mysqli_connect("localhost", "root", "","EatFood");
            if($conn) {
            $query = "SELECT * FROM account where SDT = '".$sdt."' and passWord = '".$pass."'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<script type='text/javascript'>";
                    echo "UserBtn.classList.add('login');";
                    echo "</script>";
                    echo "<script type='text/javascript'>";
                    echo "const BtnRegister = $('.toolBar-register');";
                    echo "BtnRegister.classList.remove('active');";
                    echo "</script>";
                    echo "<script type='text/javascript'>";
                    echo "LoginBtn.classList.remove('active');";
                    echo "</script>";
                    echo "<script type='text/javascript'>";
                    // echo "alert('Đăng nhập thành công.');";
                    echo "</script>";
                    if($row["Job"] == "admin") {
                        echo "<script type='text/javascript'>";
                        echo "document.getElementById('admin').classList.add('active');";
                        echo "</script>";
                    }
                }
            }else {
                echo "<script type='text/javascript'>";
                echo "alert('Đăng nhập thất bại!');";
                echo "</script>";
            }
            }
        }
    ?>
</body>
</html>