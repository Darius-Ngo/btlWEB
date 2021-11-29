<?php 
	$baseUrl = '../../';
	require_once('../../layout/header.php');
	$SID= $_GET['ID'];
	$conn = mysqli_connect("localhost","root","","eatfood");
    $sql = "select * from productstore where ID = $SID";
    $query = mysqli_query($conn,$sql);
 ?>

<div class="TheChuaSP active" id="SP1">
			<!-- /*Thẻ đồ ăn hàng trên*/ -->
			<div class="TheChinh">
				<?php foreach ($query as $key => $value) { ?>
				<div class="TheDoAn"><a href="#">
					<div>
						<img class="TheAnh" src="<?php echo $value['Image'] ?>">
						<br>
						<b><?php echo $value['name'] ?></b>
					</div>
					<div class="TheDoAnChinh">
						<i class="material-icons">sell</i>
						<p><?php echo $value['price'] ?></p>
					</div>
				</a></div>
				<?php } ?>

			</div>

 <?php 
	require_once('../../layout/footer.php');
 ?>