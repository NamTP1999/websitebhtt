@extends("backend.master")
@section('title','Sửa danh mục sản phẩm')
@section('main')
<main>
	<div class="flex-row container ad-content">
		<div class="col-sm-2 sidenav content-left">
			<ul class="nav menu">
				<li ><a href="{{asset('admin/trangchu')}}">Trang chủ</a></li>
				<li ><a href="{{asset('admin/sanpham')}}">Sản phẩm</a></li>
				<li class="active"><a href="{{asset('admin/danhmuc')}}">Danh mục</a></li>
				<li ><a href="{{asset('admin/donhang/hangdat')}}">Đơn hàng</a></li>
				<li ><a href="{{asset('admin/khachhang')}}">Khách hàng</a></li>
			</ul>
		</div>
		<div class="col-sm-10 content-right">
			<h4>Danh mục sản phẩm</h4>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-sm-12 col-md-6 ">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa danh mục
						</div>
						<div class="panel-body">
							<form method="post" action="{{route('postSuaDM', ['id' => $cate->cate_id])}}">
								{{csrf_field()}}
								@include('backend.thongbao')
								<div class="form-group">
									<label>Tên danh mục:</label>
									<input type="text" name="name" value="{{$cate->cate_name}}" class="form-control" placeholder="Tên danh mục...">
								</div>
								<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
								<a href="{{asset('admin/danhmuc')}}" class="btn btn-danger">Hủy bỏ</a>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-5"></div>
			</div>
		</div>
	</div>
</main>
@endsection