<?php 
	

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM order_detal WHERE id = $id";
		$ketqua = mysqli_query($conn,$sql);
		$result = mysqli_fetch_assoc($ketqua);
	}
?>
<div class="products">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Chỉnh sửa đơn hàng</h3>
		</div>
		<div class="panel-body">
		<?php
			
			if(isset($_POST['save'])){
				$Ten_nv = $_POST['Ten_nv'];
				$product = $_POST['product_id'];	
				$Gia_sp = $_POST['Gia_sp'];
				$so_luong = $_POST['so_luong'];
				$date_xuly = $_POST['date_xuly'];
				$da_ban = $_POST['da_ban'];

				$sqlupdate = "UPDATE order_detal SET Ten_nv = '$Ten_nv', product_id = '$product', Gia_sp = '$Gia_sp', so_luong = '$so_luong', date_xuly = 'date_xuly',da_ban = '$da_ban' WHERE id = $id";


				$result = mysqli_query($conn,$sqlupdate);
				var_dump($result);
				echo $sqlupdate;
				if ($result) {
					
					header('location: index.php?controller=hoa-don');
				
				}else{
					echo '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Lỗi!</strong> Không thể sửa vui lòng thử lại...
				</div>';
				}
			}
			
			?>
			<form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
			
				<div class="form-group">
					<div class="col-sm-2">
							<label>Tên nhân viên</label>
					</div>
					<div class="col-sm-10">
						<input type="text" name="Ten_nhan" class="form-control" value="<?php echo $result['Ten_nv']; ?>"/>
					</div>	
				</div>
				
				<div class="form-group">
						<div class="col-sm-2">
							<label> Tên sản phẩm </label>
					</div>
					<div class="col-sm-10">
						<input type="text" name="san_pham" class="form-control" value="<?php echo $result['product_id']; ?>"/>
					</div>	
				</div>		
				<div class="form-group">
						<div class="col-sm-2">
							<label>Giá sản phẩm</label>
					</div>
						<div class="col-sm-10">
						<input type="text" name="Gia_sp" class="form-control" value="<?php echo $result['Gia_sp']; ?>">
						</div>
					
				</div>
				<!-- <div class="form-group">
						<div class="col-sm-2">
							<label>Ngày lập đơn</label>
					</div>
						<div class="col-sm-10">
						<input type="date" name="date_order" class="form-control" value="<?php echo $result['date_xuly']; ?>">
						</div>
					
				</div> -->


				<div class="form-group">
						<div class="col-sm-2">
							<label>Số lượng</label>
						</div>
						<div class="col-sm-10">
							<input type="number" name="So_luong" class="form-control" value="<?php echo $result['so_luong']; ?>">
						</div>
					
				</div>	

				
		
				

				
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" name="save" class="btn btn-primary">Sửa</button>
						<button type="reset" class="btn btn-danger">Làm lại</button>
					</div>
				</div>
		</form>
		</div>
	</div>
</div>