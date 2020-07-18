@extends("frontend.master")
@section('title','Danh mục sản phẩm')
@section('content')
<h3 style="color:black">Danh mục: {{$cate->cate_name}}</h3>
<div class="products">
	<div class="product-list row">
		@foreach($listprod as $prod)
		<div class="product-item col-md-3 col-sm-6 col-xs-12">
			<img src="{{asset('lib/storage/app/avatar/'.$prod->prod_img)}}" class="img-thumbnail"
			style="height: 12em;width: 100%;margin-top:10px">
			<b style="display: block;padding:10px  0px; ">
				{{$prod->prod_name}}</b>
				<p class="price">{{$prod->prod_price}} VND</p>
				<div class="marsk">
					<table>
						<tr>
							<td><a href="{{asset('fend/chitietsp/'.$prod->prod_id)}}" style="display: block;margin-bottom:10px ">Xem chi tiết</a></td>
							<td>
								<p class="btn-danger text-center" style="margin-left:2px">
									<a href="{{asset('fend/giohang/them/'.$prod->prod_id)}}" style="color:white;
									text-decoration: none;padding:1px ">Thêm vào giỏ</a></p>
								</td>
							</tr>
						</table>
					</div>
				</div>
		@endforeach
	</div>
</div>

@endsection