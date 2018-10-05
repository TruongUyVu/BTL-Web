<?php 

$sqlsp = "Select * From san_pham  Order By Ma_sp DESC   ";
$ressp = mysqli_query($conn, $sqlsp);
?>

<div class="products" style="margin-top: 15px">
<?php while($ressp1 = mysqli_fetch_assoc($ressp)) : ?>
<div class="col-xs-6 col-sm-3 col-md-3">
	<div class="thumbnail">
		<img src="uploads/<?php echo $ressp1['Anh_ap'] ?>" alt="">
		<div class="caption text-center">
			<h3  style="height: 80px"><?php echo $ressp1['Ten_sp'] ?></h3>
			<p style="padding: 10px">
				Giá: <?php echo ($ressp1['Gia_sp']) ?>
				
				
			
			</p>
			<p>
				<a href="index.php?module=chi-tiet-sp&ma_sp=<?php echo $ressp1['Ma_sp'] ?>" class="btn btn-primary">Xem</a>
				
				
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>
<!-- products -->
