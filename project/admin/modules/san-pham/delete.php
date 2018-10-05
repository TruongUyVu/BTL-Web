<?php 
$Ma_sp = $_GET['Ma_sp'];
$sql = "DELETE FROM san_pham WHERE Ma_sp = $Ma_sp";
$kq = mysqli_query($conn,$sql);
header('location: index.php?controller=san-pham');
?>