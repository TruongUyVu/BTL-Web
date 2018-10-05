<?php 
$Ma_lk = !empty($_GET['Ma_lk']) ? $_GET['Ma_lk'] : 0;


$sql = "SELECT * FROM linh_kien  Where Ma_lk = $Ma_lk" ;

$res = mysqli_query($conn,$sql);


$pro = mysqli_fetch_assoc($res);

// echo '<pre>';
// print_r($pro);
// 	echo '</pre>';
?>

<div class="panel panel-primary">
	<div class="panel-body">
		<div class="row">
			<div class="">
				<img src="uploads/<?php echo $pro['anh_lk'] ; ?> " style="width: 50%">
					
				 
			</div>
			<div class="" style="padding: 0px 15px">
				<h1 class="pro_name">
					<?php echo $pro['Ten_lk'] ; ?>
				</h1>
				<p>Giá: <?php echo $pro['gia_lk'] ; ?></p>
				<p>Tình trạng: <?php if ($pro['So_luong'] > 0) {
					echo " <b style='color: red'>Còn hàng</b>";
				} else{
					echo "Hết hàng";
				}
				 ?></p>
				
				<p>
					<h4 class="mota">Mô tả</h4>
					<?php echo $pro['Mo_ta'] ; ?>
				</p>
				<p>
					
					<a href="" class="btn btn-danger">
					<span class="glyphicon glyphicon-earphone"></span>
					Gọi ngay:  0987529114</a>
				</p>
			</div>

		</div>
	</div>
</div>
