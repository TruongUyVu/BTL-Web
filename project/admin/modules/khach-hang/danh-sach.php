<?php 
$sql = "SELECT * FROM khach_hang";
$ketqua = mysqli_query($conn,$sql);
?>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách tài khoản</h3>
	</div>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên tài khoản</th>
					<th>Email</th>
					<th>Điện thoại</th>
					<th>Địa chỉ</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
			<?php $n=1; while($qt = mysqli_fetch_assoc($ketqua)) : ?>
				<tr>
					<td><?php echo $n; ?></td>
					<td><?php echo $qt['Ten_kh']; ?></td>
					<td><?php echo $qt['Email']; ?></td>
					<td><?php echo $qt['Dien_thoai']; ?></td>
					<td><?php echo $qt['Dia_chi']; ?></td>
					
					<td>

						<a href="index.php?controller=khach-hang&view=chinh-sua&Ma_kh=<?php echo $qt['Ma_kh'] ?>" class="label label-success">
							<span class="glyphicon glyphicon-pencil"></span>Sửa
						</a>
						<a href="index.php?controller=khach-hang&view=delete&Ma_kh=<?php echo $qt['Ma_kh'] ?>" class="label label-danger">
							<span class="glyphicon glyphicon-pencil"></span>Xóa
						</a>
					</td>
				</tr>
			<?php $n++; endwhile; ?>
			</tbody>
		</table>
	</div>
</div>