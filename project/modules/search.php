<?php 


	if(!empty($_POST['tu_khoa'])){
	$tu_khoa = $_POST['tu_khoa'];
	$ketqua = mysqli_query($conn,"SELECT * FROM san_pham WHERE Ten_sp LIKE '%$tu_khoa%' OR Gia_sp LIKE '%$tu_khoa%' ");
	
}

					
			if ($ketqua =='') {
				header('location:index.php?module=home');
			} 
			        elseif( mysqli_num_rows($ketqua) ){


  //Kiểm tra xem có giá trị trả về hay k
 ?>
<h3>Sản phẩm cần tìm</h3>
<div class="products">
<?php while($prokm = mysqli_fetch_assoc($ketqua)) : ?>
<div class="col-xs-6 col-sm-4 col-md-4">
	<div class="thumbnail" >
		<img src="uploads/<?php echo $prokm['Anh_ap'] ?>" >
		<div class="caption text-center">
			<h3><?php echo $prokm['Ten_sp'] ?></h3>
			<p>
			
				Giá: <strong><?php echo $prokm['Gia_sp'] ?> đ</strong>
			
			</p>
			<p>
				<a href="index.php?module=san-pham&ma_sp=<?php echo $prokm['Ma_sp'] ?>" class="btn btn-primary">Xem</a>
				
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>

<?php
		
        }else {
            echo 'Khong tim thay ket qua phu hop';
        }
 
?>


<?php
	if(!empty($_POST['tu_khoa'])){
		$tu_khoa = $_POST['tu_khoa'];
		$ketqua2 = mysqli_query($conn,"SELECT * FROM linh_kien WHERE Ten_lk LIKE '%$tu_khoa%'");

	if ($ketqua2 =='') {
		header('location:index.php?module=home');
	} 
	        elseif( mysqli_num_rows($ketqua2) ){


} ?>
<div class="products">
<?php while($reslk1 = mysqli_fetch_assoc($ketqua2)) : ?>
<div class="col-xs-6 col-sm-3 col-md-3">
	<div class="thumbnail">
		<img src="uploads/<?php echo $reslk1['anh_lk'] ?>" alt="">
		<div class="caption text-center">
			<h3><?php echo $reslk1['Ten_lk'] ?></h3>
			<p>
				Giá: <?php echo $reslk1['gia_lk'] ?>
				
			</p>
			<p>
				<a href="#" class="btn btn-primary">Xem</a>
				
				
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>
<?php
        }else {
            echo 'Khong tim thay ket qua phu hop';
        }
?>        
 <?php 
//if (isset($_GET['submit'])) {
		//$khoanggia = $_GET["khoanggia"];
        //$search = "SELECT * FROM san_pham WHERE Ma_sp != 0";
       // if ($khoanggia != '0') {
        //$khoanggia = explode('_', $khoanggia);	
  
       // $search .="AND Gia_sp BETWEEN '$khoanggia[0]' AND '$khoanggia[1]'";
        //$search1 = mysqli_query($conn, $search);
        //if( mysqli_num_rows($search1) ) {
        	/*echo "pre";
        	print_r($search1);*/

	



?>
	 	
<!-- <h3>Sản phẩm cần tìm</h3>
<div class="products">
<--!<?php while($res = mysqli_fetch_assoc($search1)) : ?> --/>
<div class="col-xs-6 col-sm-4 col-md-4">
	<div class="thumbnail" >
		<img src="uploads/<?php echo $res['Anh_ap'] ?>" >
		<div class="caption text-center">
			<h3><?php echo $res['Ten_sp'] ?></h3>
			<p>
			
				Giá: <strong><?php echo $res['Gia_sp'] ?> đ</strong>
			
			</p>
			<p>
				<a href="index.php?module=san-pham&Ma_sp=<?php echo $res['Ma_sp'] ?>" class="btn btn-primary">Xem</a>
				
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>	 -->