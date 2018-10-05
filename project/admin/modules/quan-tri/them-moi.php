<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm mới nhân viên</h3>
	</div>
	<div class="panel-body">
		<!-- <pre> -->
		<?php 
		
			//print_r($_POST);

		?>
		<!-- </pre> -->
		<?php 
		// Lấy dữ liệu trên form thông qua biến $_POST
		if (isset($_POST['Ten_dang_nhap'])) {
			
			$Ten_dang_nhap = $_POST['Ten_dang_nhap'];
			$Email = $_POST['Email'];
			$Mat_khau= $_POST['Mat_khau'];
			$Quyen_han = $_POST['Quyen_han'];
			$sql = "INSERT INTO quan_tri(Ten_dang_nhap, Email, Mat_khau, Quyen_han) Values('$Ten_dang_nhap','$Email', '$Mat_khau', '$Quyen_han')";
			$res = mysqli_query($conn, $sql);

			if($res){
				header('location: index.php?controller=quan-tri');
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
						<label>Tài khoản </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Ten_dang_nhap" >
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2">
						<label>Email</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control"  >
					</div>
				</div>	

				<div class="form-group">
					<div class="col-sm-2">
						<label>Mật khẩu</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="password" >
					</div>
					
				</div>
				<div class="form-group">
					<div class="col-sm-2">
						<label>Nhập lại mật khẩu</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="password" >
					</div>
					
				</div>
				<div class="form-group">
					<div class="col-sm-2">
						<label>Quyền Hạn</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="" >
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
