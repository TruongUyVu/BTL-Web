<?php 
if($kh) :
$Ma_kh = $kh['Ma_kh'];
$sql = "SELECT  FROM hoa_don WHERE Ma_kh = $Ma_kh";
$ketqua = mysqli_query($conn,$sql);
?>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách đơn hàng đã đặt</h3>
	</div>
	<div class="panel-body">
		Các đơn hàng mà quý khách đã đặt tại cửa hàng của chúng tôi
	</div>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Ngày mua</th>
					<th>Tổng số lượng</th>
					<th>Tổng tiền</th>
					<th>Trạng thái</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
			<?php $n=1; while($dh = mysqli_fetch_assoc($ketqua)) : ?>
				<tr>
					<td><?php echo $n; ?></td>
					<td><?php echo $dh['Ngay_tao']; ?></td>
					<td><?php echo $dh['Tong_so_luong']; ?></td>
					<td><?php echo number_format($dh['Tong_tien'],0,'',','); ?> VND</td>
					<td>
					<?php if($dh['Trang_thai'] == 1) :?>
						<span class="label label-success">Đã xử lý</span>
					<?php else: ?>
						<span class="label label-danger">Chờ xử lý</span>
					<?php endif; ?>
					</td>
					<td>

						<a href="index.php?module=don-hang-chi-tiet&ma_hd=<?php echo $dh['Ma_hd'] ?>" class="label label-success">Xem chi tiết</a>
					</td>
				</tr>
			<?php $n++; endwhile; ?>
			</tbody>
		</table>
	</div>
</div>
<?php else: ?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Lỗi </strong> quý khách vui lòng đăng nhập để xem thông tin đơn hàng
	</div>
<?php endif; ?>