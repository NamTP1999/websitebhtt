<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng ký</title>

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
						<h3 class="text-center title">Đăng Ký Tài Khoản</h3>
						<div class="col-sm-3"></div>
						<div class="col-sm-6 dkcontent">
							@include('frontend.thongbao')
							<form class="form-horizontal" action="{{route('postDangky')}}" method="post" >
								{{csrf_field()}}
							<div class="form-group">
						      <label class="control-label col-sm-4" for="text">Họ và Tên:</label>
						      <div class="col-sm-8">
						        <input type="text" class="form-control" id="name" placeholder="Enter Ho va Ten" name="name">
						     </div>
						 	</div>
						     <div class="form-group">
						      <label class="control-label col-sm-4" for="text">Địa chỉ:</label>
						      <div class="col-sm-8">
						        <input type="text" class="form-control" id="address" placeholder="Enter dia chi" name="address">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-4" for="gmail">Gmail:</label>
						      <div class="col-sm-8">
						        <input type="gmail" class="form-control" id="gmail" placeholder="Enter gmail" name="gmail">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-4" for="text">Điện thoại:</label>
						      <div class="col-sm-8">
						        <input type="member" class="form-control" id="phone" placeholder="Enter SDT" name="phone">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-4" for="text">Tên đăng nhập:</label>
						      <div class="col-sm-8">
						        <input type="text" class="form-control" id="username" placeholder="Enter ten dang nhap" name="username">
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="control-label col-sm-4" for="pwd">Mật khẩu:</label>
						      <div class="col-sm-8">
						        <input type="password" class="form-control"
						   id="password" placeholder="Enter password" name="password">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="control-label col-sm-4" for="nlpwd">Nhập lại mật khẩu:</label>
						      <div class="col-sm-8">
						        <input type="password" class="form-control" id="nlpwd" placeholder="Enter password" name="nlpwd">
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
						        <button type="submit" class="btn btn-primary">Đăng ký</button>
						        	<a href="{{asset('fend/trangchu')}}" class="btn btn-danger">Hủy</a>
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