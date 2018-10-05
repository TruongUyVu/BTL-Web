<?php 
session_start();
if (isset($_SESSION['khach-hang'])) {
	unset($_SESSION['khach-hang']);
}

header('location: index.php');
?>