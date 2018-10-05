<?php 
$Ma_qt = $_GET['Ma_qt'];
$sql = "DELETE FROM quan_tri WHERE Ma_qt = $Ma_qt";
$kq = mysqli_query($conn,$sql);
header('location: index.php?controller=quan-tri');
?>