<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Đăng nhập tài khoản</h3>
	</div>
	<div class="panel-body">
		<?php 
			if(isset($_POST['dang-nhap'])){
				$Email = $_POST['Email'];
				$Mat_khau = md5($_POST['Mat_khau']);
				
				$sql = "SELECT * FROM khach_hang WHERE Email = '$Email' AND Mat_khau = '$Mat_khau'";

				$kqtqua = mysqli_query($conn,$sql);
				// var_dump($kqtqua);die;
				if (mysqli_num_rows($kqtqua) == 1) {
					$kh = mysqli_fetch_assoc($kqtqua);
					$_SESSION['khach-hang'] = $kh;
					
				}else{
					echo '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Lỗi</strong> Email hoặc mật khẩu không đúng
				</div>';
				}
			}


			if(isset($_POST['dang-nhap'])){
				$Email = $_POST['Email'];
				$Mat_khau = md5($_POST['Mat_khau']);

				$sql = "SELECT * FROM quan_tri WHERE Email = '$Email' AND Mat_khau = '$Mat_khau'";

				$kqtqua = mysqli_query($conn,$sql);
				// var_dump($kqtqua);die;
				if (mysqli_num_rows($kqtqua) == 1) {
					$kh = mysqli_fetch_assoc($kqtqua);
					$_SESSION['quan_tri'] = $kh;
					header('location: index.php');
				}else{
					echo '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Lỗi</strong> Email hoặc mật khẩu không đúng
				</div>';
				}
			}
			

		?>
		<form action="" method="POST" role="form">
			<div class="form-group">
				<div class="form-group">
					<label  for="Email">Địa chỉ email</label>
					<input type="text" class="form-control" id="Email" name="Email">
				</div>
				<div class="form-group">
					<label  for="Mat_khau">Mật khẩu</label>
					<input type="password" class="form-control" id="Mat_khau" name="Mat_khau">
				</div>
			
				<button type="submit" name="dang-nhap" class="btn btn-primary">Đăng nhập</button>
				<button type="reset" class="btn btn-danger">Nhâp lại</button>
				<p>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Nếu không có tài khoản </strong> 
						<a href="index.php?module=dang-ky" class="label label-primary">Đăng ký</a>
					</div>
				</p>
		</form>
	</div>
</div>

