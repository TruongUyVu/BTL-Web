<?php 
	session_start();
	require '../common/connect_db.php';
	if (empty($_SESSION['admin_login'])) {
		header('location: dang-nhap.php');
	}else{
		$user = $_SESSION['admin_login'];


		/*Phân quyền*/
		// $Ma_qt = $user['Ma_qt'];
		// $sql_link = "Select l.link,qtl.Id_link,qtl.Ma_qt From links l inner join quan_tri_link qtl on qtl.Id_link = l.Id_link Where qtl.Ma_qt = $Ma_qt";

		// $link_res = mysqli_query($conn,$sql_link);
		// $data_link = [];
		// while ($link = mysqli_fetch_assoc($link_res)) {
		// 	$data_link[] = $link['link'];}
		}


	
 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>
		<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Trang Chủ</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['Ten_dang_nhap'] ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="thoat.php">Thoát</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">Menu</h3>
						</div>
						<div class="panel-body">
							<div class="list-group">
								<a href="index.php" class="list-group-item">Trang chủ</a>
								<a href="?controller=danh-muc" class="list-group-item">Danh mục sản phẩm</a>
								<a href="?controller=san-pham" class="list-group-item">Ô tô</a>
								<a href="?controller=linh-kien" class="list-group-item">Phụ Tùng</a>
								<a href="?controller=khach-hang" class="list-group-item">Khách hàng</a>
								<a href="?controller=quan-tri" class="list-group-item">Quản trị</a>
       
								<!-- <a href="?controller=hoa-don" class="list-group-item">Đơn hàng</a> -->
								
								<a href="?controller=thong-ke" class="list-group-item">Thống kê</a>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<?php 
						$controller = isset($_GET['controller']) ? $_GET['controller'] : 'main';
						// $view = $_GET['view'];
						$view = isset($_GET['view']) ? $_GET['view'] : 'danh-sach';
						$route = $controller .'-'.$view;
						include 'modules/'.$controller.'/'.$view.'.php';

						/*Phân quyền
						*/
						// $ten_link = str_replace('-', ' ', $route);
						// $ten_link = ucwords($ten_link);

						// // kiem tra link co ton tai chua
						// $sql_check_link = "SELECT link FROM links WHERE link ='$route'";
						// $check_link_res = mysqli_query($conn,$sql_check_link);

						// $sql_insert_link = "Insert into links(Ten_link,link) values('$ten_link','$route')";

						// if (mysqli_num_rows($check_link_res) == 0) {
						// 	mysqli_query($conn,$sql_insert_link);
						// }
						
						
						
						// if (in_array($route, $data_link)) {
						// 	include 'modules/'.$controller.'/'.$view.'.php';
						// }else{
						// 	include 'modules/loi/loi-quyen.php';
						// }
					?>	

				</div>
			</div>
			
		</div>

		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src=""></script>
	</body>
</html>
