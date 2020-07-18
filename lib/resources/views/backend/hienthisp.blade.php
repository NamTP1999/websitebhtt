@extends("backend.master")
@section('title','Hiện Thị Sản Phẩm')
@section('main')
<main>
	<div class="flex-row container ad-content">
		<div class="col-sm-2 sidenav content-left">
			<ul class="nav menu">
				<li ><a href="{{asset('admin/trangchu')}}">Trang chủ</a></li>
				<li class="active"><a href="{{asset('sanpham')}}">Sản phẩm</a></li>
				<li ><a href="{{asset('admin/danhmuc')}}">Danh mục</a></li>
				<li ><a href="{{asset('admin/donhang/hangdat')}}">Đơn hàng</a></li>
				<li ><a href="{{asset('admin/khachhang')}}">Khách hàng</a></li>
			</ul>
		</div>
		<div class="col-sm-10 content-right">
			<h4>Sản phẩm</h4>
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách sản phẩm</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<a href="{{asset('admin/sanpham/themsp')}}" class="btn btn-primary">Thêm sản phẩm</a>
							<table class="table table-bordered" style="margin-top:20px;">
								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th width="30%">Tên Sản phẩm</th>
										<th>Giá sản phẩm</th>
										<th width="20%">Ảnh sản phẩm</th>
										<th>Danh mục</th>
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@foreach($listprod as $prod)
									<tr>
										<td>{{$prod->prod_id}}</td>
										<td>{{$prod->prod_name}}</td>
										<td>{{$prod->prod_price}}</td>
										<td>
											<img width="100px" src="{{asset('lib/storage/app/avatar/'.$prod->prod_img)}}" class="thumbnail">
										</td>
										<td>{{$prod->prod_cate}}</td>
										<td>
											<a href="{{asset('admin/sanpham/suasp/'.$prod->prod_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											<a href="{{asset('admin/sanpham/xoasp/'.$prod->prod_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
										</td>
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
</main>
@endsection