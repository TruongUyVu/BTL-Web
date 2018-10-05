<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm mới danh mục</h3>
	</div>
	<div class="panel-body">
		<!-- <pre> -->
		<?php 
		
			//print_r($_POST);

		?>
		<!-- </pre> -->
		<?php 
		// Lấy dữ liệu trên form thông qua biến $_POST
		if (isset($_POST['Ten_dm'])) {

			$Ten_dm = $_POST['Ten_dm'];
			$Ma_dm_cha = $_POST['Ma_dm_cha'];
			$Trang_thai = $_POST['Trang_thai'];

			$sql = "INSERT INTO danh_muc(Ten_dm,Ma_dm_cha,Trang_thai) Values('$Ten_dm',$Ma_dm_cha,$Trang_thai)";
			$res = mysqli_query($conn, $sql);

			if($res){
				header('location: index.php?controller=danh-muc');
			}else{
				echo '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Lỗi!</strong> Không thể thêm mới vui lòng thử lại...
				</div>';
			}

		}
			
		?>
		<form action="" method="POST" class="form-horizontal" role="form">
				<div class="form-group">
					<div class="col-sm-2">
						<label>Tên danh mục</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Ten_dm" placeholder="Nhập tên danh mục ..."/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2">
						<label>Tên danh mục cha</label>
					</div>
					<div class="col-sm-10">
						<select name="Ma_dm_cha" id="input" class="form-control" required="required">
							<option value="0">Chọn danh mục cha</option>
						</select>
					</div>
				</div>	

				<div class="form-group">
					<div class="col-sm-2">
						<label>Trạng thái</label>
					</div>
					<div class="col-sm-10">
						<select name="Trang_thai" id="input" class="form-control" required="required">
							<option value="0">Không kích hoạt</option>
							<option value="1">Kích hoạt</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" class="btn btn-primary">Thêm mới</button>
						<button type="reset" class="btn btn-danger">Xóa</button>
					</div>
				</div>
		</form>
	</div>
</div>
