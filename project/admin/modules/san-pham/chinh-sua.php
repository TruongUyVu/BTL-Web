<?php 
	$sql1 = "SELECT Ma_dm, Ten_dm From	danh_muc";
	$kqdanhmuc = mysqli_query($conn, $sql1);

	if(isset($_GET['Ma_sp'])){
		$Ma_sp = $_GET['Ma_sp'];
		$sql2 = "SELECT * FROM san_pham WHERE Ma_sp = $Ma_sp";
		$kqsanpham = mysqli_query($conn,$sql2);
		$result = mysqli_fetch_assoc($kqsanpham);
	}
?>
<div class="products">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Chỉnh sửa sản phẩm</h3>
		</div>
		<div class="panel-body">
		<?php
			$file_name = $result['Anh_ap'];
			if(isset($_POST['save'])){

				if (!empty($_FILES)) {
						
					$file = $_FILES['Anh_ap'];
					$fileName = $file['name'];
					$tmp_name = $file['tmp_name'];

					// Thực hiện upload file sử dụng hàm move_uploaded_file('file trên thư mục tạm','thư mục cần upload lên')
					if (move_uploaded_file($tmp_name, '../uploads/'.$fileName)) {
						$file_name = $file['name'];
					}

				}

				$Ten_sp = $_POST['Ten_sp'];
				$Ma_dm = $_POST['Ma_dm'];
				$Anh_ap = $file_name;
				$Mo_ta = $_POST['Mo_ta'];
				$Gia_sp = $_POST['Gia_sp'];
				
				$Trang_thai = $_POST['Trang_thai'];

				$sqlupdate = "UPDATE san_pham SET Ten_sp = '$Ten_sp', Ma_dm = '$Ma_dm', Anh_ap = '$Anh_ap', Mo_ta = '$Mo_ta', Gia_sp = '$Gia_sp', Trang_thai = '$Trang_thai' WHERE Ma_sp = $Ma_sp";

				// echo '<br/>';
				// var_dump($sqlupdate);

				$res = mysqli_query($conn,$sqlupdate);
				
				if ($res) {
					header('location: index.php?controller=san-pham');
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
						<label>Tên sản phẩm</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Ten_sp" value="<?php echo $result['Ten_sp']; ?>" />
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
						<img src="../uploads/<?php echo $result['Anh_ap']; ?>" alt="" class="img-responsive">
						<input type="file" name="Anh_ap" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-2">
						<label>Mô tả sản phẩm</label>
					</div>
					<div class="col-sm-10">
						<textarea name="Mo_ta" id="Mo_ta" class="form-control" rows="3" required="required"><?php echo $result['Mo_ta']; ?></textarea>
					</div>
				</div>	
				<div class="form-group">
					<div class="col-sm-2">
						<label>Giá sản phẩm</label>
					</div>
					<div class="col-sm-10">
						<input name="Gia_sp" class="form-control" type="number" minlength="0" value="<?php echo $result['Gia_sp']; ?>"/>
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
						<button type="submit" name="save" class="btn btn-primary">Sửa</button>
						<button type="reset" class="btn btn-danger">Làm lại</button>
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