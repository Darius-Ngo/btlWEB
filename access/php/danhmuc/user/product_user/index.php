<?php
    $baseUrl = '../';
    require_once('../layout_user/header.php');

    $conn = mysqli_connect("localhost","root","","eatfood");
    $sql_prod = "select * from product where category_id=$_GET[category_id]";
    $product = mysqli_query($conn,$sql_prod);


    // if(isset($_GET['category_id'])) {
    //     $sql = "select * from product where category_id = $category_id";
    //     $product = mysqli_query($conn,$sql);
    // }
    // else {
    //     echo 'ko';
    // }
?>

<div class="container">
           
        </div>

        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Khám phá món mới</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <?php foreach ($product as $key => $value) { ?>
                    <div class="col-lg-2 col-sm-6  mb-2">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="http://localhost:8080/Web-Food/access/php/giohang-donhang/detail.php?ID=<?php echo $value['ID'] ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="http://localhost:8080/Web-Food/access/php/giohang-donhang/assets/img/<?php echo $value['image'] ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $value['name'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $value['price'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $value['content'] ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </section>

<?php
    require_once('../layout_user/footer.php');
?>