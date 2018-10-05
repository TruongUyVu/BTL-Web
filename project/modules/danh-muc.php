<?php 
$Ma_dm = isset($_GET['ma_dm']) ? $_GET['ma_dm'] : 0;

// Lay các sản phẩm theo mã danh mục
$sqlsp = "Select * From san_pham Where Ma_dm = $Ma_dm";
$ressp = mysqli_query($conn, $sqlsp);

$sqldm = "Select Ten_dm From danh_muc Where Ma_dm = $Ma_dm";
$resdm = mysqli_query($conn, $sqldm);
$dm = mysqli_fetch_assoc($resdm);
// var_dump($dm);die;
?>

<h3><?php echo $dm['Ten_dm'] ?> ( Có <?php echo mysqli_num_rows($ressp); ?> sản phẩm )</h3>
<div class="products">
<?php while($prokm = mysqli_fetch_assoc($ressp)) : ?>
<div class="col-xs-6 col-sm-4 col-md-4">
	<div class="thumbnail">
		<img src="uploads/<?php echo $prokm['Anh_ap'] ?>" alt="">
		<div class="caption text-center">
			<h3><?php echo $prokm['Ten_sp'] ?></h3>
			<p>
			
				Giá: <strong><?php echo $prokm['Gia_sp'] ?> đ</strong>
			
			<p>
				<a href="index.php?module=san-pham&ma_sp=<?php echo $prokm['Ma_sp'] ?>" class="btn btn-primary">Xem</a>
				
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>
<!-- products -->
