@extends("backend.master")
@section('title','Hiển thị khách hàng')
@section('main')
<main>
	<div class="flex-row container ad-content">
		<div class="col-sm-2 sidenav content-left">
			<ul class="nav menu">
				<li ><a href="{{asset('admin/trangchu')}}">Trang chủ</a></li>
				<li ><a href="{{asset('admin/sanpham')}}">Sản phẩm</a></li>
				<li ><a href="{{asset('admin/danhmuc')}}">Danh mục</a></li>
				<li ><a href="{{asset('admin/donhang/hangdat')}}">Đơn hàng</a></li>
				<li class="active"><a href="{{asset('admin/khachhang')}}">Khách hàng</a></li>
			</ul>
		</div>
		<div class="col-sm-10 content-right">
			<h4>Khách hàng</h4>
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách khách hàng</div>
				<div class="panel-body">
					<div class="clearfix"></div>
					<div class="bootstrap-table">
						<div class="table-responsive">
							<table class="table table-bordered" style="margin-top:20px;">
								<thead>
									<tr class="bg-primary">
										<th style="width: 5%">ID</th>
										<th>Họ và tên</th>
										<th>Địa chỉ</th>
										<th>Gmail</th>
										<th >Số điện thoại</th>
										<th>Tên tài khoản</th>
										<th>Mật khẩu</th>
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@foreach($listuser as $user)
									<tr>
										<td>{{$user->u_id}}</td>
										<td>{{$user->u_name}}</td>
										<td>{{$user->address}}</td>
										<td>{{$user->u_gmail}}</td>
										<td>{{$user->u_phone}}</td>
										<td>{{$user->u_username}}</td>
										<td>{{$user->u_password}}</td>
										<td><a href="{{asset('admin/khachhang/xoakh/'.$user->u_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				{{-- <div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div id="pagination" style="margin-left:30">
							<ul class="pagination pagination-lg justify-content-center">
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
										<span class="sr-only">Previous</span>
									</a>
								</li>
								<li class="page-item disabled"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
										<span class="sr-only">Next</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4"></div>
				</div> --}}

			</div>
		</div>
	</div>
</div>
</main>
@endsection