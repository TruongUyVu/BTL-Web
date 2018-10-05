<?php 
$Ma_lk = $_GET['Ma_lk'];
$sql = "DELETE FROM linh_kien WHERE Ma_lk = $Ma_lk";
$kq = mysqli_query($conn,$sql);
header('location: index.php?controller=linh-kien');
?>