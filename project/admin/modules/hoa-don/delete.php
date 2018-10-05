<?php 
$id = $_GET['id'];
$sql = "DELETE FROM order_detal WHERE id = $id";
$kq = mysqli_query($conn,$sql);
header('location: index.php?controller=hoa-don');
?>