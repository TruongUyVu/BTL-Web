<?php 
	
	if(isset($_GET['Ma_lk'])){
		$Ma_lk = $_GET['Ma_lk'];
		$sql2 = "SELECT * FROM linh_kien WHERE Ma_lk = $Ma_lk";
		$kqsanpham = mysqli_query($conn,$sql2);
		$result = mysqli_fetch_assoc($kqsanpham);
	}
?>
<div class="products">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Chỉnh sửa linh kiện</h3>
		</div>
		<div class="panel-body">
		<?php
			$file_name = $result['anh_lk'];
			if(isset($_POST['save'])){

				if (!empty($_FILES)) {
						
					$file = $_FILES['anh_lk'];
					$fileName = $file['name'];
					$tmp_name = $file['tmp_name'];

					// Thực hiện upload file sử dụng hàm move_uploaded_file('file trên thư mục tạm','thư mục cần upload lên')
					if (move_uploaded_file($tmp_name, '../uploads/'.$fileName)) {
						$file_name = $file['name'];
					}

				}
				
				$Ten_lk = $_POST['Ten_lk'];
				$anh_lk = $file_name;
				$Mo_ta = $_POST['Mo_ta'];
				$gia_lk = $_POST['gia_lk'];
				$Trang_thai = $_POST['Trang_thai'];
				$So_luong = $_POST['So_luong'];
				

				$sqlupdate = "UPDATE linh_kien SET Ten_lk = '$Ten_lk', anh_lk = '$anh_lk', Mo_ta = '$Mo_ta', gia_lk = '$gia_lk', Trang_thai = '$Trang_thai', So_luong = '$So_luong' WHERE Ma_lk = $Ma_lk";

				// echo '<br/>';
				// var_dump($sqlupdate);

				$res = mysqli_query($conn,$sqlupdate);
				
				if ($res) {
					header('location: index.php?controller=linh-kien');
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
						<label>Tên linh kiện</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Ten_lk" value="<?php echo $result['Ten_lk']; ?>" />
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-2">
						<label>Ảnh linh kiện</label>
					</div>
					<div class="col-sm-10">
						<img src="../uploads/<?php echo $result['anh_lk']; ?>" alt="" class="img-responsive">
						<input type="file" name="anh_lk" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-2">
						<label>Mô tả linh kiện</label>
					</div>
					<div class="col-sm-10">
						<textarea name="Mo_ta" id="Mo_ta" class="form-control" rows="3" required="required"><?php echo $result['Mo_ta']; ?></textarea>
					</div>
				</div>	
				<div class="form-group">
					<div class="col-sm-2">
						<label>Giá linh kiện</label>
					</div>
					<div class="col-sm-10">
						<input name="gia_lk" class="form-control" type="text" minlength="0" value="<?php echo $result['gia_lk']; ?>"/>
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
						<input name="So_luong" class="form-control" type="number" minlength="0" value="<?php echo $result['So_luong']; ?>"/>
					</div>
				</div>	
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" name="save" class="btn btn-primary" onclick="alert('Sửa thành công'); value="Click me" ">Sửa</button>
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