<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="./assets/css/style.css" rel="stylesheet" />
        <style>
            .portfolio-caption-heading {
                height: 76px !important;
                overflow: hidden;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
            }
        </style>
    </head>
    <body id="page-top" class="modal-open">
        <!-- Ket noi DB, lay du lieu -->
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'EatFood') or die ('Loi ket noi DB');
        $query = "SELECT * FROM product";
        $result = mysqli_query($conn, $query);
        ?>
         <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Khám phá món mới</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row" id="list-food">
                    <!-- Hien thi danh sach -->
                    <?php
                    echo '<script>';
                    echo 'var foods = []';
                    echo '</script>';
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            // Khai bao bien cho js
                            echo '<script>';
                            echo 'var food = {id: '.$row['ID'].', name: "'.$row['name'].'", price: '.$row['price'].', image: "'.$row['image'].'", distance: "'.$row['distance'].'", content: "'.$row['content'].'"};';
                            echo 'foods.push(food);';
                            echo '</script>';

                            // Cach 1: do du lieu bang php (Cach 2 ben file js)
                            // echo '<div class="col-lg-2 col-sm-6  mb-2">
                            //     <!-- Portfolio item 1-->
                            //     <div class="portfolio-item">
                            //         <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            //             <div class="portfolio-hover">
                            //                 <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            //             </div>
                            //             <img class="img-fluid" src="assets/img/'.$row['image'].'" alt="..." />
                            //         </a>
                            //         <div class="portfolio-caption">
                            //             <div class="portfolio-caption-heading">'.$row['name'].'</div>
                            //             <div class="portfolio-caption-subheading text-muted">'.number_format($row['price']).'đ</div>
                            //             <div class="portfolio-caption-subheading text-muted">'.$row['distance'].'km</div>
                            //             <button type="button" class="btn btn-warning" style=";margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%">Xem</button>
                            //         </div>
                            //     </div>
                            // </div>';
                        }
                    }
                    else {
                        echo 'Danh sách trống!';
                    }
                    ?>
                </div>
            </div>
        </section>
        
         <!-- Portfolio Modals-->
            <!-- Portfolio item 1 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase" id="modal-ten-mon">LẨU LY LỚN</h2>
                                        <p class="item-intro text-muted"></p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/1.png" alt="..." id="modal-anh" />
                                        <p></p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Giá: </strong>
                                                <span id="modal-gia-ban">35.000đ</span>
                                            </li>
                                            <li>
                                                <strong>Khoảng cách: </strong>
                                                <span id="modal-khoang-cach">4.1km</span>
                                            </li>
                                        </ul>
                                        <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                         <span class="input-group-text" id="inputGroup-sizing-sm">Ghi chú thêm:</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ví dụ: để đá riêng, ...">
                                        </div>
                                        <ul>
                                            <li>
                                                <strong>Số lượng: </strong>
                                        <input class="" onclick="var result = document.getElementById('quantity'); 
                                                        var qty = result.value; 
                                                        if( !isNaN(qty) &amp; qty > 1 ) result.value--;
                                                        return false;" 
                                                        type='button' value='-' />
                                        <input id='quantity' min='1' name='quantity' type='text' value='1' size='1' />
                                        <input onclick="var result = document.getElementById('quantity'); 
                                                        var qty = result.value; 
                                                        if( !isNaN(qty)) result.value++;
                                                        return false;" type='button' value='+' />
                                            </li>
                                        </ul>
                                        <p></p>
                                        <button onclick="location.href='http://localhost/TEST/cart.php?action=add';" class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                            <i class="fas fa-times me-1"></i>
                                            Đặt hàng
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PHÂN TRANG -->
            <?php
            // //KẾT NỐI CSDL
            // $conn = mysqli_connect('localhost', 'root', '', 'TEST3');
            // //TÌM TỔNG SỐ RECORDS
            // $result = mysqli_query($conn, 'select count(product_id) as total from product');
            // $row = mysqli_fetch_assoc($result);
            // $total_records = $row['total'];
 
            // //TÌM LIMIT VÀ CURRENT_PAGE
            // $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            // $limit = 12;
 
            // //TÍNH TOÁN TOTAL_PAGE VÀ START
            // // tổng số trang
            // $total_page = ceil($total_records / $limit);
    
            // // Giới hạn current_page trong khoảng 1 đến total_page
            // if ($current_page > $total_page){
            //     $current_page = $total_page;
            // }
            // else if ($current_page < 1){
            //     $current_page = 1;
            // }
 
            // // Tìm Start
            // $start = ($current_page - 1) * $limit;
 
            // //TRUY VẤN LẤY DANH SÁCH TIN TỨC
            // // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
            // $result = mysqli_query($conn, "SELECT * FROM product LIMIT $start, $limit");
 
            // ?>
            
            // <?php 
            //     //HIỂN THỊ PHÂN TRANG
            //     // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            //     if ($current_page > 1 && $total_page > 1){
            //         echo '<a href="indexall.php?page='.($current_page-1).'">Prev</a> | ';
            //     }
 
            //     // Lặp khoảng giữa
            //     for ($i = 1; $i <= $total_page; $i++){
            //         // Nếu là trang hiện tại thì hiển thị thẻ span
            //         // ngược lại hiển thị thẻ a
            //         if ($i == $current_page){
            //             echo '<span>'.$i.'</span> | ';
            //         }
            //         else{
            //             echo '<a href="indexall.php?page='.$i.'">'.$i.'</a> | ';
            //         }
            //     }
 
            //     // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            //     if ($current_page < $total_page && $total_page > 1){
            //         echo '<a href="indexall.php?page='.($current_page+1).'">Next</a> | ';
            //     }

            // Phân trang

            // Lấy số trang và kích thước trang
            $page = 1; $size = 18;
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            if(isset($_GET['size'])) {
                $size = $_GET['size'];
            }

            // Lấy tổng số sản phẩm trong DB
            $conn = mysqli_connect('localhost', 'root', '', 'EatFood');
            $query = "SELECT COUNT(*) total FROM product";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            
            // lấy dữ liệu
            $query = 'SELECT * FROM product LIMIT ' . $page . ', ' .$size;
            $result = mysqli_query($conn, $query);

            echo 'Đang ở trang: ' .$page;

            echo '<script>';
            echo 'var page = ' .$page . '; var size = ' . $size . ';';
            echo 'var numberProduct = ' .$row['total'] . ';';
            echo 'var foods = []';
            echo '</script>';
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    // Khai bao bien cho js
                    echo '<script>';
                    echo 'var food = {id: '.$row['ID'].', name: "'.$row['name'].'", price: '.$row['price'].', image: "'.$row['image'].'", distance: "'.$row['distance'].'", content: "'.$row['content'].'"};';
                    echo 'foods.push(food);';
                    echo '</script>';
                }
            }
            else {
                echo 'Danh sách trống!';
            }
            ?>

            <div class="app-content__pagination"></div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./assets/js/main.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
         </body>
</html>
