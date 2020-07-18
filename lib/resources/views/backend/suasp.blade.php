@extends("backend.master")
@section('title','Sửa sản phẩm')
@section('main')
<main>
	<div class="flex-row container ad-content">
		<div class="col-sm-2 sidenav content-left">
			<ul class="nav menu">
				<li ><a href="{{asset('admin/trangchu')}}">Trang chủ</a></li>
				<li class="active"><a href="{{asset('admin/sanpham')}}">Sản phẩm</a></li>
				<li ><a href="{{asset('admin/danhmuc')}}">Danh mục</a></li>
				<li ><a href="{{asset('admin/donhang/hangdat')}}">Đơn hàng</a></li>
				<li ><a href="{{asset('admin/khachhang')}}">Khách hàng</a></li>
			</ul>
		</div>
		<div class="col-sm-10 content-right">
			<h4>Sản phẩm</h4>
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-primary">
						<div class="panel-heading">Sửa sản phẩm</div>
						<div class="panel-body">
							<form method="post" action="{{route('postSuaSP', ['id' => $product ->prod_id])}}" enctype="multipart/form-data">
								{{csrf_field()}}
								<div class="row" style="margin-bottom:40px">
									<div class="col-xs-8">
										<div class="form-group" >
											<label>Tên sản phẩm</label>
											<input  type="text" value="{{$product->prod_name}}" name="name" class="form-control">
										</div>
										<div class="form-group" >
											<label>Giá sản phẩm</label>
											<input  type="number" value="{{$product->prod_price}}" name="price" class="form-control">
										</div>
										<div class="form-group" >
											<label>Ảnh sản phẩm</label>
											<input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
											<img id="avatar" class="thumbnail" width="300px" src="{{asset('lib/storage/app/avatar/'.$product->prod_img)}}">
										</div>

										<div class="form-group" >
											<label>Khuyến mãi</label>
											<input  type="text" value="{{$product->prod_promotion}}" name="promotion" class="form-control">
										</div>
										<div class="form-group" >
											<label>Miêu tả</label>
											<textarea required name="description" class="ckeditor mieuta"></textarea>
										</div>
										<div class="form-group" >
											<label>Danh mục</label>
											<select name="cate" class="form-control">
												@foreach($listcate as $cate)
												<option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
												@endforeach
											</select>
										</div>
										<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
										<a href="{{asset('admin/sanpham')}}" class="btn btn-danger">Hủy bỏ</a>
									</div>
								</div>
							</form>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</main>
@endsection