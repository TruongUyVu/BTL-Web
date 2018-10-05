<?php 
	
	$sql1 = "SELECT Ma_dm, Ten_dm From	danh_muc";
	$kqdanhmuc = mysqli_query($conn, $sql1);
?>
<div class="products">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Thêm mới sản phẩm</h3>
		</div>
		<div class="panel-body">
			<?php 
				if (!empty($_FILES)) {
					
					$file = $_FILES['Anh_ap'];
					$file_name = $file['name'];
					$tmp_name = $file['tmp_name'];

					// Thực hiện upload file sử dụng hàm move_uploaded_file('file trên thư mục tạm','thư mục cần upload lên')
					move_uploaded_file($tmp_name, '../uploads/'.$file_name);

				}
				if (isset($_POST['Ten_sp'])) {
					$Ten_sp = $_POST['Ten_sp'];
					$Ma_dm = $_POST['Ma_dm'];
					$Anh_ap = $file_name;
					$Mo_ta = $_POST['Mo_ta'];
					$Gia_sp = $_POST['Gia_sp'];
					$Trang_thai = $_POST['Trang_thai'];
					$Ngay_tao = date('Y-mm-dd');

					$sql = "INSERT INTO san_pham(Ten_sp,Ma_dm,Anh_ap,Mo_ta,Gia_sp,Trang_thai,Ngay_tao) VALUES('$Ten_sp','$Ma_dm','$Anh_ap','$Mo_ta','$Gia_sp','$Trang_thai','$Ngay_tao')";

					$res = mysqli_query($conn,$sql);

					if ($res) {
						header('location: index.php?controller=san-pham');
					}else{
						echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Lỗi!</strong> Không thể thêm mới vui lòng thử lại...
					</div>';
					}
					 //echo $sql;
					 //var_dump($res);
				}
			?>
			<form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-sm-2">
						<label>Tên sản phẩm</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Ten_sp" placeholder="Nhập tên sản phẩm ..."/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2">
						<label>Tên danh mục</label>
					</div>
					<div class="col-sm-10">
						<select name="Ma_dm" id="input" class="form-control" required="required">
						<?php while($row = mysqli_fetch_assoc($kqdanhmuc)) : ?>
							<option value="<?php echo $row['Ma_dm'] ?>"><?php echo $row['Ten_dm'] ?></option>
						<?php endwhile; ?>
						</select>
					</div>
				</div>	
				<div class="form-group">
					<div class="col-sm-2">
						<label>Ảnh sản phẩm</label>
					</div>
					<div class="col-sm-10">
						<input type="file" name="Anh_ap" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-2">
						<label>Mô tả sản phẩm</label>
					</div>
					<div class="col-sm-10">
						<textarea name="Mo_ta" id="inputMo_ta" class="form-control" rows="4" required="required"></textarea>
					</div>
				</div>	
				<div class="form-group">
					<div class="col-sm-2">
						<label>Giá sản phẩm</label>
					</div>
					<div class="col-sm-10">
						<input name="Gia_sp" class="form-control" type="number" minlength="0"/>
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
</div>
<script type="text/javascript">
	CKEDITOR.replace('Mo_ta',{
		uiColor:'#d1d1d1'
	});
</script>