<?php 
	

	if(isset($_GET['Ma_kh'])){
		$Ma_kh = $_GET['Ma_kh'];
		$sql2 = "SELECT * FROM khach_hang WHERE Ma_kh = $Ma_kh";
		$kqdanhmuc = mysqli_query($conn,$sql2);
		$result = mysqli_fetch_assoc($kqdanhmuc);
	}
?>
<div class="products">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Chỉnh sửa khách hàng</h3>
		</div>
		<div class="panel-body">
		<?php
			
			if(isset($_POST['save'])){
				$Ma_kh = $_POST['$Ma_kh']
				$Ten_kh = $_POST['Ten_kh'];
				$Email = $_POST['Email'];
				$Dien_thoai = $_POST['Dien_thoai'];
				$Dia_chi = $_POST['Dia_chi'];
				$Trang_thai = $_POST['Trang_thai'];
				

				$sqlupdate = "UPDATE khach_hang SET Ma_kh = '$Ma_kh', Ten_kh = '$Ten_kh', Email = '$Email', Dien_thoai = '$Dien_thoai', Dia_chi = '$Dia_chi', Trang_thai = '$Trang_thai' WHERE Ma_kh = $Ma_kh";


				$res = mysqli_query($conn,$sqlupdate);
				
				if ($res) {
					header('location: index.php?controller=khach-hang');
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
						<label>Tên khách hàng</label>
					</div>
					<div class="col-sm-10">
						<input type="text" name="Ten_kh" class="form-control" value="<?php echo $result['Ten_kh']; ?>">
					</div>
				</div>	
				
				<div class="form-group">
					<div class="col-sm-2">
						<label>Email</label>
					</div>
					
					<div class="col-sm-10">
						<input type="text" name="Ten_kh" class="form-control" value="<?php echo $result['Email']; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2">
						<label>Điện thoại</label>
					</div>
					
					<div class="col-sm-10">
						<input type="text" name="Dien_thoai" class="form-control" value="<?php echo $result['Dien_thoai']; ?>">
					</div>
				</div>	
				
				
				

				<div class="form-group">
					<div class="col-sm-2">
						<label>Trạng thái</label>
					</div>
					<div class="col-sm-10">
						<select name="Trang_thai" id="input" class="form-control" required="required">
							<option value="0" <?php if ($result['Trang_thai']  == 0) echo "selected";
							 ?>>Không kích hoạt</option>
							<option value="1" <?php if ($result['Trang_thai']  == 1) echo "selected";
							 ?>>Kích hoạt</option>
						</select>
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