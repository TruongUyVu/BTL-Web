<?php 
	

	if(isset($_GET['Ma_dm'])){
		$Ma_dm = $_GET['Ma_dm'];
		$sql2 = "SELECT * FROM danh_muc WHERE Ma_dm = $Ma_dm";
		$kqdanhmuc = mysqli_query($conn,$sql2);
		$result = mysqli_fetch_assoc($kqdanhmuc);
	}
?>
<div class="products">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Chỉnh sửa danh mục</h3>
		</div>
		<div class="panel-body">
		<?php
			
			if(isset($_POST['save'])){
				$Ten_dm = $_POST['Ten_dm'];
				$Ma_dm_cha = $_POST['Ma_dm_cha'];
				$Trang_thai = $_POST['Trang_thai'];

				$sqlupdate = "UPDATE danh_muc SET Ten_dm = '$Ten_dm', Ma_dm_cha = '$Ma_dm_cha', Trang_thai = '$Trang_thai' WHERE Ma_dm = $Ma_dm";


				$res = mysqli_query($conn,$sqlupdate);
				
				if ($res) {
					header('location: index.php?controller=danh-muc');
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
						<label>Tên danh mục</label>
					</div>
					<div class="col-sm-10">
						<input type="text" name="Ten_dm" class="form-control" value="<?php echo $result['Ten_dm']; ?>">
					</div>
				</div>	
				
				<div class="form-group">
					<div class="col-sm-2">
						<label>Tên danh mục</label>
					</div>
					
					<div class="col-sm-10">
						<select name="Ma_dm_cha" id="input" class="form-control" required="required">
							<option value="">--Chọn danh mục--</option>
							<option value="0" <?php if ($result['Ma_dm_cha']  == 0) echo "selected";
							 ?> >Danh mục 1</option>
							<option value="1" <?php if ($result['Ma_dm_cha']  == 1) echo "selected";
							 ?>>Danh mục 2</option>
							<option value="2" <?php if ($result['Ma_dm_cha']  == 2) echo "selected";
							 ?>>Danh mục 3</option>
						</select>
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