<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng Nhập</title>

	<base href="{{asset('public/frontend')}}/">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/styles2.css" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container-fluid haed-top">
			<div class="flex-row container">
				<div class="col-sm-3 loge">
					<a href="{{asset('fend/trangchu')}}">FirtTime <span class="glyphicon glyphicon-hand-up"></span></p></i></a>
				</div>
				<div class="col-sm-6">
					<h3>QUẢN LÝ CỬA HÀNG THỜI TRANG</h3>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</header>
	<main id="main">
		<div class="flex-row container">
			<div class="col-sm-12">
				<h3 class="text-center title">Đăng Nhập Tài khoản</h3>
				<div class="col-sm-3"></div>
				<div class="col-sm-6 dkcontent">
					@include('frontend.thongbao')
					<form class="form-horizontal" action="{{route('postDangnhap')}}" method="post">
						{{csrf_field()}}
						<div class="form-group">
							<label class="control-label col-sm-4" for="text">Tên đăng nhập:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="tendn" placeholder="Enter Tên đăng nhập" name="username">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="pwd">Mật khẩu:</label>
							<div class="col-sm-8">
								<input type="password" class="form-control" id="pwd" placeholder="Enter Mật khẩu" name="pwd">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-8">
								<div class="checkbox">
									<label><input type="checkbox" name="remember"> Nhớ</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-8">
								<button type="submit" class="btn btn-primary">
								Đăng nhập</button>
								<a href="{{asset('fend/trangchu')}}" class="btn btn-danger">
								Hủy</a>
								<div class="or">
									<div class="_1-lZms col-sm-4" style="margin-top: 10px"></div>
									<span class="_2vzJrV col-sm-3">HOẶC</span>
									<div class="_1-lZms col-sm-5" style="margin-top: 10px"></div>
								</div>
								<div class="header-social wthree">
									<div class="col-sm-5 left">
										<a href="#" class="face fa fa-facebook-official">
											<h5><img src="img/facebook.png" alt="anh facebook" style="height:15px; width:20px">
											Facebook</h5></a>
									</div>
									<div class="col-sm-5 right">
										<a href="#" class="google">
											<h5>
											<img src="img/google.png" alt="anh facebook"
											style="height:15px; width:20px">
											google</h5></a>
									</div>

								</div>
							</div>

						</div>
					</form>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</main>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
</script>
</body>
</html>