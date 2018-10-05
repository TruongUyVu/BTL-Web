
<?php 

$sqlsp = "Select * From san_pham  Order By Ma_sp DESC LIMIT 6  ";
$ressp = mysqli_query($conn, $sqlsp);

$sqllk = "Select * From linh_kien  Order By Ma_lk DESC LIMIT 6  ";
$reslk = mysqli_query($conn, $sqllk);

// var_dump($resspkm);
?>
<h3>Ô tô </h3>
<div class="products">
<?php while($prokm = mysqli_fetch_assoc($ressp)) : ?>
<div class="col-xs-6 col-sm-4 col-md-4">
	<div class="thumbnail" >
		<img src="uploads/<?php echo $prokm['Anh_ap'] ?>" >
		<div class="caption text-center">
			<div class="name" style="width: 100%;
	height: 62px;">
			<h3><?php echo $prokm['Ten_sp'] ?></h3>
			</div>
			<p>
			
				Giá: <strong><?php echo number_format($prokm['Gia_sp'])?> đ</strong>
			
			</p>
			<p>
				<a href="index.php?module=chi-tiet-sp&ma_sp=<?php echo $prokm['Ma_sp'] ?>" class="btn btn-primary">Xem</a>
				
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>
<!-- products -->

<div class="text-center">
<a href="index.php?module=san-pham" class="btn btn-primary" >Xem thêm</a>
</div>

<h3>Phụ tùng </h3>
<div class="products">
<?php while($prokm2 = mysqli_fetch_assoc($reslk)) : ?>
<div class="col-xs-6 col-sm-4 col-md-4">
	<div class="thumbnail" >
		<img src="uploads/<?php echo $prokm2['anh_lk'] ?>" >
		<div class="caption text-center">
			<div class="name" style="width: 100%;
	height: 62px;">
			<h3><?php echo $prokm2['Ten_lk'] ?></h3>
			</div>
			<p>
			
				Giá: <strong><?php echo $prokm2['gia_lk'] ?> </strong>
			
			</p>
			<p>
				<a href="index.php?module=chi-tiet-lk&Ma_lk=<?php echo $prokm2['Ma_lk'] ?>" class="btn btn-primary">Xem</a>
				
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>
<!-- products -->
<div class="text-center">
<a href="index.php?module=linh-kien" class="btn btn-primary" style="margin-bottom: 10px">Xem thêm</a>
</div>