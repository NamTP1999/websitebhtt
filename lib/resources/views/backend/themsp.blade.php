@extends("backend.master")
@section('title','Thêm sản phẩm')
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
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-primary">
						<div class="panel-heading">Thêm sản phẩm</div>
						<div class="panel-body">
							<form method="post" action="{{route('postThemSP')}}" enctype="multipart/form-data">
								{{csrf_field()}}
								<div class="row" style="margin-bottom:40px">
									<div class="col-xs-8">
										<div class="form-group" >
											<label>Tên sản phẩm</label>
											<input required type="text" name="name" class="form-control">
										</div>
										<div class="form-group" >
											<label>Giá sản phẩm</label>
											<input required type="number" name="price" class="form-control">
										</div>
										<div class="form-group" >
											<label>Ảnh sản phẩm</label>
											<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
											<img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
										</div>

										<div class="form-group" >
											<label>Khuyến mãi</label>
											<input required type="text" name="promotion" class="form-control">
										</div>
										<div class="form-group" >
											<label>Miêu tả</label>
											<textarea required name="description" class="ckeditor mieuta"></textarea>
											<script type="text/javascript">
												var editor = CKEDITOR.replace('description',{
													language:'vi',
													filebrowserImageBrowseUrl: '../../layout/backend/ckfinder/ckfinder.html?Type=Images',
													filebrowserFlashBrowseUrl: '../../layout/backend/ckfinder/ckfinder.html?Type=Flash',
													filebrowserImageUploadUrl: '../../layout/backend/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
													filebrowserFlashUploadUrl: '../../layout/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
												});
											</script>
										</div>
										<div class="form-group" >
											<label>Danh mục</label>
											<select required name="cate" class="form-control">
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