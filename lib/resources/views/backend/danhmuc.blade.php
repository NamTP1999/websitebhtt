@extends("backend.master")
@section('title','Danh mục sản phẩm')
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
				<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						<div class="panel-body">
							<form method="post" action="{{route('postDanhmuc')}}">
								{{csrf_field()}}
								@include('backend.thongbao')
								<div class="form-group">
									<label>Tên danh mục:</label>
									<input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
								</div>
								<div class="form-group">
									<input type="submit" name="oke" value="Thêm mới" class="btn btn-danger">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-7 col-lg-7">
					<div class="panel panel-primary">
						<div class="panel-heading">Danh sách danh mục</div>
						<div class="panel-body">
							<div class="bootstrap-table">
								<table class="table table-bordered">
									<thead>
										<tr class="bg-primary">
											<th>Tên danh mục</th>
											<th style="width:40%">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($listcate as $cate)
										<tr>
											<td>{{$cate->cate_name}}</td>
											<td>
												<a href="{{asset('admin/danhmuc/suadm/'.$cate->cate_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
												<a href="{{asset('admin/danhmuc/xoadm/'.$cate->cate_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
	</div>
</main>
@endsection