<?php 
    $title = 'Home admin';
    $baseUrl = '';
    require_once('layout/header.php');
    $conn = mysqli_connect("localhost","root","","eatfood");
    $sql = "select * from store";
    $category = mysqli_query($conn,$sql);
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Quản Lý Cửa Hàng</h3>

       
	</div>
</div>

<?php 
    require_once('layout/footer.php');
?>