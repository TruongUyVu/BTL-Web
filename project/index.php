<?php 
	ob_start();
	session_start();
	require 'common/connect_db.php';
	$kh = isset($_SESSION['khach-hang']) ? $_SESSION['khach-hang'] : [];

 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang chủ</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/style.css" />
		<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

		<script src="public/js/select2.js" type="text/javascript"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class=""><a href="index.php">Trang chủ</a></li>
						<li><a href="index.php?module=gioi-thieu">Giới thiệu</a></li>
						<li class=""><a href="index.php?module=san-pham">Sản Phẩm</a></li>
						
						
						<li><a href="index.php?module=linh-kien">Phụ tùng</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="index.php?module=bao-hanh">Bảo hành - Bảo dưỡng</a></li>
								<li class=""><a href="index.php?module=tra-gop">Mua xe trả góp</a></li>
							</ul>
						</li>
						<li><a href="index.php?module=lien-he">Liên hệ</a></li>
						
						

					<script type="text/javascript"></script>

					 
					<form class="navbar-form navbar-left" action="index.php?module=search" method="POST" role="search">
						
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" name="tu_khoa">
						</div>
						<button type="submit" class="btn btn-default">Tìm Kiếm</button>
					</form>

					
					<form class="navbar-form navbar-left" role="search" method="Post">
						<!-- <div class="form-group">
							<input type="text" class="form-control" placeholder="Search" name="tu_khoa">
						</div> -->
						
						<!-- <button type="submit" class="btn btn-default" >Tìm Kiếm</button> -->
					</form>
					<ul class="nav navbar-nav navbar-right">
						
						<?php if(!$kh) : ?>
						<!-- <li><a href="index.php?module=dang-nhap">Đăng nhập</a></li> -->
						<li><a href="index.php?module=dang-ky">Đăng Ký</a></li>
						<?php else:  ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="index.php?module=thong-tin">Thông tin cá nhân</a></li>
								<li><a href="index.php?module=don-hang">Đơn hàng của tôi</a></li>
								<li><a href="#">Thay đổi mật khẩu</a></li>
								<li><a href="thoat.php">Thoát</a></li>
							</ul>
						</li>
					<?php endif; ?>
					</ul>
				</div><!-- /.navbar-collapse -->


	
			</div>
		</nav>
<!-- //slide header// -->	
<div id="carousel-id" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-id" data-slide-to="0" class=""></li>
		<li data-target="#carousel-id" data-slide-to="1" class=""></li>
		<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item">
			<img  alt="First slide" src="uploads/1.jpg"  width="100%">
			<div class="container">
				
			</div>
		</div>
		<div class="item">
			<img src="uploads/3-1.jpg" width="100%" >
			<div class="container">
				
			</div>
		</div>
		<div class="item active">
			<img src="uploads/4-1.jpg">
			<div class="container">
				
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

<?php 
// truy van danh sach danh muc voi trang thai = 1
$sqldanhmuc = "Select * From danh_muc Where Trang_thai = 1";
$resdanhmuc = mysqli_query($conn, $sqldanhmuc);

?>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>Danh mục sản phẩm</h3>
					<div class="list-group">
					<?php while($danhmuc = mysqli_fetch_assoc($resdanhmuc)) { ?>
						<a href="index.php?module=danh-muc&ma_dm=<?php echo $danhmuc['Ma_dm'] ?>" class="list-group-item"><?php echo $danhmuc['Ten_dm'] ?></a><br>
					<?php } ?>
				

					
					</div>
					<!--  <div class="form-group">
													<form action="index.php?module=search" method="POST" role="search">
													<select id="khoanggia" class="form-control"required="required" >
														<option value="0">Chọn  khoảng giá</option>
														<option value="300000000-600000000">300tr ~ 600tr</option>
														<option value="600000000-1000000000 ">600tr ~ 1 tỷ</option>
														<option value=">1000000000">Trên 1 tỷ </option>
													</select>
													
													
											</div>
												<button type="submit" name ="submit" value="Kiểm tra">Kiểm tra</button>
												</form>
														 -->	
					</div> 
				

				<div class="col-md-9">
					<?php 
						$modules = isset($_GET['module']) ? $_GET['module'] : 'home';
						

						$fileName = $modules.'.php';

						$file_path = 'modules/'.$fileName;
						// echo $file_path;

						include $file_path;
					?>


						
					
				</div>
			</div>
		</div>
		
			<div class="container-fluid footer-hyundai">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
        


        <!--Footer-->

        


<ul class="footer-content">
        <li> <i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ Showroom : Số 138 Phạm Văn Đồng, Bắc Từ Liêm, Hà Nội</li>
        <li><i class="fa fa-phone" aria-hidden="true"></i> Kinh Doanh : 0904675566</li>
        <li><i class="fa fa-phone" aria-hidden="true"></i> Kinh Doanh : 0989335656</li>
        <li> <i class="fa fa-envelope prefix"></i> Email : info@hyundaiphamvandong.vn</li>
        
    </ul>





    
    </div>
        
        <div class="col-lg-6">
            <iframe class="map-site" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14891.803017567447!2d105.785379!3d21.074629!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad0959af0dc73751!2zSHl1bmRhaSBQaOG6oW0gVsSDbiDEkOG7k25n!5e0!3m2!1svi!2s!4v1508991115062" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
    </div>
    </div>

    <div class="container-fluid">
    <!--End Main-->
    <!--Footer-->
        <footer id="footer" class="page-footer center-on-small-only">
            <div class="container">
            <div class="footer-copyright">
                    <div class="copyright-footer">Copyright 2017 © <strong>Hyundai Phạm Văn Đồng</strong>
                    <div class="right">
                        <a href="https://www.facebook.com/HyundaiPVD/"></a>
                        <a href="https://www.youtube.com/channel/UCTiaOzZi-AoCPrFtANCAGhg"></a>
                    </div>
             </div>
                
            </div>
            </div>
            <!--/.Copyright-->
        </footer>
                                                                                                                                                                                                                 
<div class="scrol-top">
        <i class="fa fa-arrow-circle-o-up fa-3x" aria-hidden="true"></i>
        <script type="text/javascript">
            jQuery(".scrol-top").click(function () {
                $('html,body').animate({ scrollTop: ".menu-head" }, 1000);
            });
        </script>
    </div>
        <script type="text/javascript">
        new WOW().init();
    </script>
    </div>
    </div>
		

   
   


		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script>   
$('#myCarousel').carousel({ 
    interval:   1000    
});
</script>
		<script type="text/javascript">
		var isme = $('input#isme').is(':checked');

		$('input#isme').click(function(event) {
			var isme = $('input#isme').is(':checked');
			if(isme){
				$('input#Ten_nhan').val($('input#Ten_kh').val());
				$('input#Email_nhan').val($('input#Email').val());
				$('input#Dien_thoai_nhan').val($('input#Dien_thoai').val());
				$('input#Dia_chi_nhan').val($('input#Dia_chi').val());
			}else{
				$('input#Ten_nhan').val('');
				$('input#Email_nhan').val('');
				$('input#Dien_thoai_nhan').val('');
				$('input#Dia_chi_nhan').val('');
			}
		});
		
		</script>
		
</script>
	</body>
</html>