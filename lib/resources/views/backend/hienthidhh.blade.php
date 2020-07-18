@extends("backend.master")
@section('title','Hiển thị đơn hàng hủy')
@section('main')
<main>
	<div class="flex-row container ad-content">
		<div class="col-sm-2 sidenav content-left">
			<ul class="nav menu">
				<li ><a href="{{asset('admin/trangchu')}}">Trang chủ</a></li>
				<li ><a href="{{asset('admin/sanpham')}}">Sản phẩm</a></li>
				<li ><a href="{{asset('admin/danhmuc')}}">Danh mục</a></li>
				<li class="active"><a href="{{asset('admin/donhang/hangdat')}}">Đơn hàng</a></li>
				<li ><a href="{{asset('admin/khachhang')}}">Khách hàng</a></li>
			</ul>
		</div>
		<div class="col-sm-10 content-right">
			<h4>Đơn hàng</h4>
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách đơn hàng</div>
				<div class="panel-body">
					<ul class="nav menu navbar-nav" style="border:solid 1px black">
						<li ><a href="{{asset('admin/donhang/hangdat')}}">Đơn hàng đặt</a></li>
						<li class="active"><a href="{{asset('admin/donhang/hanghuy')}}">Đơn hàng hủy</a></li>
					</ul>
					<div class="clearfix"></div>
					<div class="bootstrap-table">
						<div class="table-responsive">
							<table class="table table-bordered" style="margin-top:20px;">
								<thead>
									<tr class="bg-primary">
										<th style="width: 5%">ID</th>
										<th>Họ và tên</th>
										<th>Tên sản phẩm</th>
										<th>Giá sản phẩm</th>
										<th style="width: 5%">SL</th>
										<th>Địa chỉ</th>
										<th>Tổng thu</th>
										<th>Ghi chú</th>
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Nguyễn văn A</td>
										<td>Áo thun</td>
										<td>300 000 VND</td>
										<td>2</td>
										<td>Số 2, Quang trung,Hải châu,ĐN</td>
										<td>600 000 VND</td>
										<td>Màu đỏ</td>
										<td><a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Nguyễn văn A</td>
										<td>Áo thun</td>
										<td>300 000 VND</td>
										<td>2</td>
										<td>Số 2, Quang trung,Hải châu,ĐN</td>
										<td>600 000 VND</td>
										<td>Màu đỏ</td>
										<td><a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Nguyễn văn A</td>
										<td>Áo thun</td>
										<td>300 000 VND</td>
										<td>2</td>
										<td>Số 2, Quang trung,Hải châu,ĐN</td>
										<td>600 000 VND</td>
										<td>Màu đỏ</td>
										<td><a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a></td>
									</tr>
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