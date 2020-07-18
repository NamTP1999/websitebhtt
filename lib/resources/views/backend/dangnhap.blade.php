<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập</title>

	<base href="{{asset('public/backend')}}/">
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
					<a href="#">FirtTime <span class="glyphicon glyphicon-hand-up"></span></p></i></a>
				</div>
				<div class="col-sm-6">
					<h3>ADMIN</h3>
					<h3>QUẢN LÝ CỬA HÀNG THỜI TRANG</h3>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</header>
	<main id="main">
		<div class="flex-row container content">
			<div class="col-sm-12">

				<h3 class="text-center title">Đăng nhập</h3>
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<form class="form-horizontal" action="{{route('postLogin')}}" method="post">
						{{csrf_field()}}
						@include('backend.thongbao')
						<div class="form-group">
							<label class="control-label col-sm-4" for="email">Tên đăng nhập:</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="pwd">Mật khẩu:</label>
							<div class="col-sm-8">
								<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-8">
								<div class="checkbox">
									<label><input type="checkbox" value="remember" name="remember"> Nhớ</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-8">
								<button type="submit" class="btn btn-primary">Đăng nhập</button>
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