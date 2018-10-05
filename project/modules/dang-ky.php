<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Đăng ký tài khoản mới</h3>
	</div>
	<div class="panel-body">
		<?php 
			if(isset($_POST['dang-ky'])){
				$Ten_kh = $_POST['Ten_kh'];
				$Email = $_POST['Email'];
				$Dien_thoai = $_POST['Dien_thoai'];
				$Dia_chi = $_POST['Dia_chi'];
				$Facebook = $_POST['Facebook'];
				$Mat_khau = md5($_POST['Mat_khau']);
				$Ngay_tao = date('Y-m-d');
				$Trang_thai = 0;

				$sql = "INSERT INTO khach_hang(Ten_kh,Email,Dien_thoai,Dia_chi,Facebook,Ngay_tao,Mat_khau,Trang_thai) VALUES('$Ten_kh','$Email','$Dien_thoai','$Dia_chi','$Facebook','$Ngay_tao','$Mat_khau','$Trang_thai')";

				$kqtqua = mysqli_query($conn,$sql);

				if ($kqtqua) {
					echo '<script type="text/javascript">alert("Đăng ký thành công")</script>';
					header('location: index.php?module=dang-nhap');
				}else{
					echo '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Lỗi</strong> Vui lòng kiểm tra lại
				</div>';
				}
			}

		?>
		<form action="" method="POST" role="form">
			<div class="form-group">
					<label  for="Ten_kh">Họ và tên</label>
					<input type="text" class="form-control" id="Ten_kh" name="Ten_kh">
				</div>
				<div class="form-group">
					<label  for="Email">Địa chỉ email</label>
					<input type="text" class="form-control" id="Email" name="Email">
				</div>
			
				<div class="form-group">
					<label  for="Dien_thoai">Điện thoại</label>
					<input type="text" class="form-control" id="Dien_thoai" name="Dien_thoai">
				</div>
				<div class="form-group">
					<label  for="Dia_chi">Địa chỉ</label>
					<input type="text" class="form-control" id="Dia_chi" name="Dia_chi">
				</div>
				<div class="form-group">
					<label  for="Facebook">Facebook</label>
					<input type="text" class="form-control" id="Facebook" name="Facebook">
				</div>
				<div class="form-group">
					<label  for="Mat_khau">Mật khẩu</label>
					<input type="password" class="form-control" id="Mat_khau" name="Mat_khau">
				</div>
			
				<button type="submit" name="dang-ky" class="btn btn-primary">Đăng ký</button>
				<button type="reset" class="btn btn-danger">Nhập lại</button>

				<p>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Nếu như đã có tài khoản</strong> 
						<a href="index.php?module=dang-nhap" class="label label-success">Đăng nhập</a>
					</div>
				</p>
		</form>
	</div>
</div>

