<?php 

$ketqua2 = mysqli_query($conn,"SELECT * FROM linh_kien");
$tong_so_dong = mysqli_num_rows($ketqua2);
$so_dong_tren_trang = 4;

$so_trang = ceil($tong_so_dong/$so_dong_tren_trang);
$trang_hien_tai = !empty($_GET['trang']) ? $_GET['trang'] : 1;

$bat_dau = ($trang_hien_tai - 1) * $so_dong_tren_trang;
// echo $bat_dau;
$ketqua = mysqli_query($conn,"SELECT * FROM linh_kien Order By Ma_lk DESC LIMIT $bat_dau,$so_dong_tren_trang");

if(!empty($_POST['tu_khoa'])){
	$tu_khoa = $_POST['tu_khoa'];
	$ketqua = mysqli_query($conn,"SELECT * FROM linh_kien WHERE Ten_lk LIKE '%$tu_khoa%'");
}

?>
<div class="producs">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Linh Kiện</h3>
		</div>
		<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
		
			<div class="form-group">
				<input type="text" class="form-control" name="tu_khoa" placeholder="Nhập vào từ khóa tìm kiếm">
			</div>
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
			<a href="index.php?controller=linh-kien&view=them-moi" class="btn btn-success">
			<span class="glyphicon glyphicon-plus"></span>
			Thêm mới</a>

		</form>
			<p>
				
			</p>

			<table class="table">
				<thead>
					<tr>
						<th style="text-align:center">Mã</th>
						<th>Ảnh</th>
						<th>Tên</th>
						<th>Giá</th>
						<th style="text-align:center">Ngày tạo</th>
						<th style="text-align:center">Trạng thái</th>
						<th style="text-align:center">Tình trạng</th>
						<th style="text-align:center">Số lượng</th>
					</tr>
					
				</thead>
				<tbody>
				<!-- Duyệt dữ liệu theo cấu trúc của bản sử dung vòng lặp while -->
				<?php while ($dong = mysqli_fetch_assoc($ketqua)) { ?>
					<tr>
						<td style="text-align:center">
							<?php echo $dong['Ma_lk']; ?>
						</td>
						<td style="text-align:center">
							<img src="../uploads/<?php echo $dong['anh_lk']; ?>" width="60">
						</td>
						<td><?php echo $dong['Ten_lk']; ?></td>
						<td><?php echo $dong['gia_lk']; ?></td>
						<td style="text-align:center">
							<?php echo $dong['Ngay_tao']; ?>
						</td>
						<td style="text-align:center">
							<?php if ($dong['Trang_thai'] == 1) { ?>
								<label class="label label-success">Đã kích hoạt</label>
							<?php }else{ ?>
								<label class="label label-danger">Ko kích hoạt</label>
						<?php } ?>
						</td>

						<td style="text-align:center">
							<a href="index.php?controller=linh-kien&view=chinh-sua&Ma_lk=<?php echo $dong['Ma_lk']; ?>" class="btn btn-xs btn-success">
								<span class="glyphicon glyphicon-pencil"></span> Sửa
							</a>	
							
							<a href="index.php?controller=linh-kien&view=delete&Ma_lk=<?php echo $dong['Ma_lk']; ?>" class="btn btn-xs btn-danger">
								<span class="glyphicon glyphicon-trash"></span> Xóa
							</a>	
						</td>
						<td style="text-align:center">
							<?php echo $dong['So_luong']; ?>
						</td>

					</tr>
				<?php } ?>
					
				</tbody>
			</table>
<?php 
$lui = $trang_hien_tai > 1 ? $trang_hien_tai - 1:1;
$tien = $trang_hien_tai < $so_trang ? $trang_hien_tai + 1 : $trang_hien_tai;
?>
			<div class="text-center">
				<ul class="pagination">
				<li><a href="index.php?controller=linh-kien&trang=<?php echo $lui;?>">&laquo;</a></li>
				<?php for($i = 1; $i<=$so_trang;$i++) : 
				$active = $trang_hien_tai == $i ? 'active' : '';
				?>
					<li class="<?php echo $active; ?>"><a href="index.php?controller=linh-kien&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
				<?php endfor; ?>
					<li><a href="index.php?controller=linh-kien&trang=<?php echo $tien; ?>">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>