<?php 
	$baseUrl = '';
    require_once('layout/header.php');
    $conn = mysqli_connect("localhost","root","","eatfood");
    $sql = "select * from store";
    $query = mysqli_query($conn,$sql);
    $sqlSD = "select * from area";
    $query_area = mysqli_query($conn,$sqlSD);

?>

		<div id="KhuVuc">
			<p class="KhuVuc_Heading">Hà Nội</p>
			<ul id="ThanhCuon">
				<?php foreach ($query_area as $key => $value) { ?>
				<li class="KhuVuc_Item" id="Q1"><a href="http://localhost:8080/Web-Food/access/php/cuahang/user/load_store/index.php?Address=<?php echo $value['id'] ?>"><?php echo $value['areaname'] ?></a></li>
				<?php } ?>
			</ul>
		</div>

<!-- -------------      Thẻ div đồ ăn khác           ----------------------------------------------------- -->
		<div class="TheChuaSP active" id="SP1">
			<!-- /*Thẻ đồ ăn hàng trên*/ -->
			<div class="TheChinh row">
				<?php foreach ($query as $key => $value) { ?>
				<div class="TheDoAn"><a href="#">
					<div>
						<img class="TheAnh" src="http://localhost:8080/Web-Food/access/php/cuahang/admin/QLCH/uploads/<?php echo $value['Image'] ?>">
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
		</div>

			

<?php 
    require_once('layout/footer.php');
?>