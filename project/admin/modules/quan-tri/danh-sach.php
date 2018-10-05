<?php 
$sql = "SELECT * FROM quan_tri";
$ketqua = mysqli_query($conn,$sql);
?>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách tài khoản</h3>
		
	</div>
	<div class="panel-body">
	<form action="" method="POST" class="form-inline" role="form">
		
			
			
			<a href="index.php?controller=quan-tri&view=them-moi" class="btn btn-success">
			<span class="glyphicon glyphicon-plus"></span>
			Thêm mới</a>

		</form>
	</div>	
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên tài khoản</th>
					<th>Email</th>
					<th>Điện thoại</th>
					<th>Ngày tạo</th>
					<th>Phân quyền</th>
					<th>Trạng thái</th>
					<th>Hành động</th>

				</tr>
			</thead>
			<tbody>
			<?php $n=1; while($qt = mysqli_fetch_assoc($ketqua)) : ?>
				<tr>
					<td><?php echo $n; ?></td>
					<td><?php echo $qt['Ten_dang_nhap']; ?></td>
					<td><?php echo $qt['Email']; ?></td>
					<td><?php echo $qt['Dien_thoai']; ?></td>
					<td><?php echo $qt['Ngay_tao']; ?></td>
					<td>
						<?php if($qt['Quyen_han'] == 1) :?>
						<span class="label label-success">Admin</span>
						<?php else : ?>
						<span class="label label-danger">Nhân viên</span>
						<?php endif; ?>
					</td>
					<td>
					<?php if($qt['Trang_thai'] == 1) :?>
						<span class="label label-success">Đã kích hoạt</span>
					<?php else: ?>
						<span class="label label-danger">Chờ kích hoạt</span>
					<?php endif; ?>
					</td>
					<td>

						<a href="index.php?controller=quan-tri&view=chinh-sua&Ma_qt=<?php echo $qt['Ma_qt']; ?>" class="btn btn-xs btn-success">
								<span class="glyphicon glyphicon-pencil"></span> Sửa
							</a>	
						<a href="index.php?controller=quan-tri&view=delete&Ma_qt=<?php echo $qt['Ma_qt'] ?>" class="btn btn-xs btn-danger">
							<span class="glyphicon glyphicon-pencil"></span>Xóa
						</a>
					</td>
				</tr>
			<?php $n++; endwhile; ?>
			</tbody>
		</table>
	</div>
</div>