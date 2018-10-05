
<div class="products">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Thêm mới linh kiện</h3>
		</div>
		<div class="panel-body">
			<?php 
				if (!empty($_FILES)) {
					
		$upload_image="../uploads/";
		$file_tmp= isset($_FILES['anh_lk']['tmp_name']) ?$_FILES['anh_lk']['tmp_name'] :"";
		$file_name=isset($_FILES['anh_lk']['name']) ?$_FILES['anh_lk']['name'] :"";
		$file_type=isset($_FILES['anh_lk']['type']) ?$_FILES['anh_lk']['type'] :"";
		$file_size=isset($_FILES['anh_lk']['size']) ?$_FILES['anh_lk']['size'] :"";
		$file_error=isset($_FILES['anh_lk']['error']) ?$_FILES['anh_lk']['error'] :"";
		
		move_uploaded_file($file_tmp,$upload_image.$file_name);
				}
				if (isset($_POST['Ten_lk'])) {
					$Ten_lk = $_POST['Ten_lk'];
					$anh_lk = $file_name;
					$Mo_ta = $_POST['Mo_ta'];
					$gia_lk = $_POST['gia_lk'];
					$Trang_thai = $_POST['Trang_thai'];
					$Ngay_tao = date('Y-mm-dd');
					$So_luong = $_POST['So_luong'];

					$sql = "INSERT INTO linh_kien(Ten_lk,anh_lk,Mo_ta,gia_lk,Ngay_tao,Trang_thai,So_luong) VALUES('$Ten_lk','$anh_lk','$Mo_ta','$gia_lk','$Ngay_tao','$Trang_thai','$So_luong')";

					$res = mysqli_query($conn,$sql);
					/*var_dump($res);*/
					if ($res) {
						header('location: index.php?controller=linh-kien');
					}else{
						echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Lỗi!</strong> Không thể thêm mới vui lòng thử lại...
					</div>';
					}
					// echo $sql;
					// var_dump($res);
				}
			?>
			<form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-sm-2">
						<label>Tên linh kiện</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Ten_lk"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2">
						<label>Ảnh </label>
					</div>
					<div class="col-sm-10">
						<input type="file" name="anh_lk" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-2">
						<label>Mô tả sản phẩm</label>
					</div>
					<div class="col-sm-10">
						<textarea name="Mo_ta" id="inputMo_ta" class="form-control" rows="3" required="required"></textarea>
					</div>
				</div>	
				<div class="form-group">
					<div class="col-sm-2">
						<label>Giá sản phẩm</label>
					</div>
					<div class="col-sm-10">
						<input name="gia_lk" class="form-control" type="text" minlength="0"/>
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
					<div class="col-sm-2">
						<label>Số lượng</label>
					</div>
					<div class="col-sm-10">
						<input name="So_luong" class="form-control" type="number" minlength="0"/>
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