<?php 
	$baseUrl = '../';
	require_once('../layout/header.php');
	$aID= $_GET['Address'];
	$conn = mysqli_connect("localhost","root","","eatfood");
    $sql = "select * from store where Address = $aID";
    $query = mysqli_query($conn,$sql);
 ?>

<div class="TheChuaSP active" id="SP1">
			<!-- /*Thẻ đồ ăn hàng trên*/ -->
			<div class="TheChinh">
				<?php foreach ($query as $key => $value) { ?>
				<div class="TheDoAn"><a href="load_product/index.php?ID=<?php echo $value['ID'] ?>">
					<div>
						<img class="TheAnh" src="../../admin/QLCH/uploads/<?php echo $value['Image'] ?>">
						<br>
						<b><?php echo $value['StoreName'] ?></b>
					</div>
					<div class="TheDoAnChinh">
						<i class="material-icons">call</i>
						<p><?php echo $value['PhoneNumber'] ?></p>
					</div>
					<div class="Hang">
						<i class="material-icons">place</i>
						<p>
							<?php 
						$idArea = $value['Address'];
						$conn = mysqli_connect("localhost","root","","eatfood");
						$sqlAreaName = "select areaname from area where id='".$idArea."'";
					    $bbbb = mysqli_query($conn,$sqlAreaName);
					    
					    foreach ($bbbb as $key => $values) 
					    	echo $values['areaname']
					    
						 ?></p>
					</div>
				</a></div>
				<?php } ?>

			</div>
 <?php 
	require_once('../layout/footer.php');
 ?>