<?php 
$Ma_dm = $_GET['Ma_dm'];
$sql = "DELETE FROM danh_muc WHERE Ma_dm = $Ma_dm";
$kq = mysqli_query($conn,$sql);
header('location: index.php?controller=danh-muc');
?>