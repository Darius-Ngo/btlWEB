<?php
    $baseUrl = '';
    require_once('layout_user/header.php');

    $conn = mysqli_connect("localhost","root","","eatfood");
    $sql = "select * from category";
    $category = mysqli_query($conn,$sql);

?>
    <div class="container">
        <div class="introduce-list-item">
            <?php foreach ($category as $key => $value) { ?>
            <a href='http://localhost:8080/Web-Food/access/php/danhmuc/user/product_user/index.php?category_id=<?php echo $value['category_id'] ?>' class="category-item">
                <div class="category-item-img">
                    <img src="http://localhost:8080/Web-Food/access/php/danhmuc/admin/category/uploads_cate/<?php echo $value['image'] ?>" alt="" width="50px">
                </div>
                <div class="category-item-title"><b><?php echo $value['name'] ?></b></div>
            </a>
            <?php } ?>
        </div>
        <a href="http://localhost:8080/Web-Food/access/php/danhmuc/user/product_user/product_all.php" class="btn-view-all">
            XEM TẤT CẢ
            <i class="fas fa-chevron-right btn-view-all-icon"></i>
        </a>


<?php
    require_once('layout_user/footer.php');
?>