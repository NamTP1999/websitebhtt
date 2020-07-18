@extends("backend.master")
@section('title','Trang chủ')
@section('main')
<main>
	<div class="flex-row container ad-content">
		<div class="col-sm-2 sidenav content-left">
			<ul class="nav menu" style="margin-top:1em">
				<li class="active"><a href="{{asset('admin/trangchu')}}">Trang chủ</a></li>
				<li ><a href="{{asset('admin/sanpham')}}">Sản phẩm</a></li>
				<li ><a href="{{asset('admin/danhmuc')}}">Danh mục</a></li>
				<li ><a href="{{asset('admin/donhang/hangdat')}}">Đơn hàng</a></li>
				<li ><a href="{{asset('admin/khachhang')}}">Khách hàng</a></li>
			</ul>
		</div>
		<div class="col-sm-10 content-right">
			<h4>Trang chủ</h4>
			<div class="row one">
				<div class="col-sm-6">
					<div class="panel panel-orange panel-widget">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<a href="{{asset('admin/khachhang')}}"><span class="glyphicon glyphicon-briefcase"></span></a>
							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<div class="large">{{$T_User}}</div>
								<div class="text-muted">Khách hàng</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel panel-orange panel-widget">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<a href="{{asset('admin/sanpham')}}"><span class="glyphicon glyphicon-user"></span></a>
							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<div class="large">{{$T_Product}}</div>
								<div class="text-muted">Sản phẩm</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row two">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="panel panel-orange panel-widget">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<a href="{{asset('admin/danhmuc')}}"><span class="glyphicon glyphicon-list-alt"></span></a>
							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<div class="large">{{$T_Cate}}</div>
								<div class="text-muted">Danh mục</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</div>
</main>
@endsection