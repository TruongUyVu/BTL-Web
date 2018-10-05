<?php 
$Ma_dm = isset($_GET['ma_dm']) ? $_GET['ma_dm'] : 0;
$sqlsp = "Select * From san_pham Where Ma_dm = $Ma_dm";
$ressp = mysqli_query($conn, $sqlsp);

?>

<div class="products">
<?php while($ressp = mysqli_fetch_assoc($ressp)) : ?>
<div class="col-xs-6 col-sm-4 col-md-4">
	<div class="thumbnail">
		<img src="uploads/<?php echo $prokm['Anh_ap'] ?>" alt="">
		<div class="caption text-center">
			<h3><?php echo $prokm['Ten_sp'] ?></h3>
			<p>
			
				Giá: <strong><?php echo $prokm['Gia_sp'] ?> đ</strong>
			
			<p>
				<a href="#" class="btn btn-primary">Xem</a>
				
				
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>
<!-- products -->
