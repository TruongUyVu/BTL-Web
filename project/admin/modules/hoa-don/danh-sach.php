<?php 
$ketqua1 = mysqli_query($conn,"SELECT * FROM order_detal");
$tong_so_dong = mysqli_num_rows($ketqua1);
$so_dong_tren_trang = 3;

$so_trang = ceil($tong_so_dong/$so_dong_tren_trang);
$trang_hien_tai = !empty($_GET['trang']) ? $_GET['trang'] : 1;

$bat_dau = ($trang_hien_tai - 1) * $so_dong_tren_trang;
// echo $bat_dau;
$ketqua = mysqli_query($conn,"SELECT * FROM order_detal ORDER BY id DESC LIMIT $bat_dau,$so_dong_tren_trang");



?>
<div class="product">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Đơn hàng</h3>
		</div>
		<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
		
			
			
			<a href="index.php?controller=hoa-don&view=them-moi" class="btn btn-success">
			<span class="glyphicon glyphicon-plus"></span>
			Thêm mới</a>

		</form>
			<p>
				
			</p>

			<table class="table">
				<thead>
					<tr>
						<th style="text-align:center">Mã</th>
						<th style="text-align:center">Tên nhân viên</th>
						<th style="text-align:center">Tên sản phẩm</th>
						
						<th style="text-align:center">Giá sản phẩm</th>
						
						<th style="text-align:center">Hành động</th>
						

						
					</tr>
					
				</thead>
				<tbody>
				<!-- Duyệt dữ liệu theo cấu trúc của bản sử dung vòng lặp while -->
				<?php while ($dong = mysqli_fetch_assoc($ketqua)) { ?>
					<tr>
						
						<td style="text-align:center">
							<?php echo $dong['id']; ?>
						</td>
						<td style="text-align:center">
							<?php echo $dong['Ten_nv']; ?>
						</td>
						<td style="text-align:center">
							<?php echo $dong['product_id']; ?>
						</td>
						
						<td><?php echo $dong['Gia_sp']; ?></td>
						
					
					
						</td>
					
						<td style="text-align:center">
							<a href="index.php?controller=hoa-don&view=chinh-sua&id=<?php echo $dong['id']; ?>" class="btn btn-xs btn-success">
								<span class="glyphicon glyphicon-pencil"></span> Sửa
							</a>	
							
							<a href="index.php?controller=hoa-don&view=delete&id=<?php echo $dong['id']; ?>" class="btn btn-xs btn-danger">
								<span class="glyphicon glyphicon-trash"></span> Xóa
							</a>	
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
				<li><a href="index.php?controller=hoa-don&trang=<?php echo $lui;?>">&laquo;</a></li>
				<?php for($i = 1; $i<=$so_trang;$i++) : 
				$active = $trang_hien_tai == $i ? 'active' : '';
				?>
					<li class="<?php echo $active; ?>"><a href="index.php?controller=hoa-don&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
				<?php endfor; ?>
					<li><a href="index.php?controller=hoa-don&trang=<?php echo $tien; ?>">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>