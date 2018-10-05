<?php 
$sql = "SELECT * FROM order_detal ";
$result = mysqli_query($conn, $sql);
 ?>
	<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm mới đơn hàng</h3>
	</div>
	<div class="panel-body">
		
		<?php 
		// Lấy dữ liệu trên form thông qua biến $_POST
		if (isset($_POST['Ten_nv'])) {
			$Ten_nv = $_POST['Ten_nv'];
			$product_id = $_POST['product_id'];
			$Gia_sp = $_POST['Gia_sp'];
			$so_luong = $_POST['so_luong'];
			$date_xuly = $_POST['date_xuly'];
			$da_ban = $_POST['da_ban'];

			$sql1 = "INSERT INTO order_detal(Ten_nv, product_id, Gia_sp, so_luong, date_xuly, da_ban) VALUES ('$Ten_nv','$product_id','$Gia_sp','$so_luong','$date_xuly','$da_ban')";
			$res = mysqli_query($conn, $sql1);
			
			if($res){
				header('location:index.php?controller=hoa-don');
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
		<form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
				
			 	<div class="form-group">
				<div class="col-sm-2">
					<label>Tên nhân viên</label>
				</div>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="Ten_nhan_vien" "/>
				</div>
			</div> 


				<div class="form-group">
					<div class="col-sm-2">
						<label>Tên sản phẩm</label>
					</div>
					<div class="col-sm-10">
						<select name="product" id="input" class="form-control" required="required">
						<?php while($row = mysqli_fetch_assoc($result)) : ?>
							<option value="<?php echo $row['id'] ?>"><?php echo $row['product_id'] ?></option>
						<?php endwhile; ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2">
						<label>Giá sản phẩm</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="Gia_sp" />
					</div>
				</div>

				
				<div class="form-group">
					<div class="col-sm-2">
						<label>Ngày tạo</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="date_xuly" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2">
						<label>Đã bán</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="da_ban" />
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
