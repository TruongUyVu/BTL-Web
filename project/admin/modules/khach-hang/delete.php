<?php 
$Ma_kh = $_GET['Ma_kh'];
$sql = "DELETE FROM khach_hang WHERE Ma_kh = $Ma_kh";
$kq = mysqli_query($conn,$sql);
header('location: index.php?controller=khach-hang');
?>