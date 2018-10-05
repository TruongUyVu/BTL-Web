<?php 

$sqllk = "Select * From linh_kien ";
$reslk = mysqli_query($conn, $sqllk);
?>

<div class="products" style="margin-top: 15px">
<?php while($reslk1 = mysqli_fetch_assoc($reslk)) : ?>
<div class="col-xs-6 col-sm-3 col-md-3">
	<div class="thumbnail">
		<img src="uploads/<?php echo $reslk1['anh_lk'] ?>" alt="">
		<div class="caption text-center">
			<h3  style="height: 80px"><?php echo $reslk1['Ten_lk'] ?></h3>
			<p style="padding: 10px">
				Giá: <?php echo $reslk1['gia_lk'] ?>
				
				
			
			</p>
			<p>
				<a href="index.php?module=chi-tiet-lk&Ma_lk=<?php echo $reslk1['Ma_lk'] ?>" class="btn btn-primary">Xem</a>
				
				
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>
<!-- products -->

