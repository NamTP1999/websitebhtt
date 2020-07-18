<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') </title>
	<base href="{{asset('public/frontend')}}/">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/styles2.css" rel="stylesheet">
</head>
<body style="color:black">
	<div id="banner-t" class="text-center">
		<div class="row">
			<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
				<a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail">
				</a>
			</div>
			<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
				<a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail">
				</a>
			</div>
		</div>
	</div>

	<div id="wrap-inner">
		<div id="khach-hang">
			<h3>Thông tin khách hàng</h3>
			<p>
				<span class="info">Khách hàng: </span>
				{{$info['name']}}
			</p>
			<p>
				<span class="info">Email: </span>
				{{$info['email']}}
			</p>
			<p>
				<span class="info">Điện thoại: </span>
				{{$info['phone']}}
			</p>
			<p>
				<span class="info">Địa chỉ: </span>
				{{$info['add']}}
			</p>
		</div>
		<div id="hoa-don">
			<h3>Hóa đơn mua hàng</h3>
			<table class="table-responsive" style="border:1px solid black">
				<tr style="background:#c89988" >
					<th width="30%">Tên sản phẩm</th>
					<th width="25%">Giá</th>
					<th width="20%">Số lượng</th>
					<th width="15%">Thành tiền</th>
				</tr>
				@foreach($items as $item)
				<tr style="border:1px solid black">
					<td>{{$item->name}}</td>
					<td class="price">{{$item->price}} VND</td>
					<td>{{$item->quantity}}</td>
					<td class="price">{{number_format($item->price*$item->quantity,0,',','.')}} VND</td>
				</tr>
				@endforeach
				<tr style="background:#ccc0c0">
					<td colspan="3">Tổng tiền:</td>
					<td class="total-price">{{number_format($total,0,',','.')}} VND</td>
				</tr>
			</table>
		</div>
		<div id="xac-nhan">
			<br>
			<p align="justify">
				<b>Quý khách đã đặt hàng thành công!</b><br />
				• Sản phẩm của Quý khách sẽ được chuyển đến sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
				• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
				<b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của shop chúng Tôi!</b>
			</p>
		</div>
	</div>
	<!-- end main -->
</body>

</html>