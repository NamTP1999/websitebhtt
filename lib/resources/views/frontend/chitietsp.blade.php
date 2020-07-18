@extends("frontend.master")
@section('title','Chi tết sản phẩm')
@section('content')
<h3 style="color:black">Chi tiết sản phẩm</h3>
<div id="wrap-inner">
	<div id="product-info">
		<div class="clearfix"></div>
		<h4>{{$product->prod_name}}</h4>
		<div class="row">
			<div id="product-img" class="col-xs-12 col-sm-12 col-md-4 text-center">
				{{-- <img src="{{asset('lib/storage/app/avatar/'.$product->prod_img)}}" class="img-thumbnail" style="width:15em;height: 15em"> --}}

				<img src="{{asset('lib/storage/app/avatar/'.$product->prod_img)}}" class="big_img">
				<ul class="items">
					<li><img src="{{asset('lib/storage/app/avatar/'.$product->prod_img)}}" class="small_img"></li>
					<li><img src="img/1 (2).jpg" class="small_img"></li>
					<li><img src="img/1 (3).jpg" class="small_img"></li>
					<li><img src="img/1 (4).jpg" class="small_img"></li>
					<li><img src="img/1 (5).jpg" class="small_img"></li>
				</ul>
			</div>
			<div id="product-details" class="col-xs-12 col-sm-12 col-md-8">
				<p><b>Giá:</b> <span class="price">
					{{number_format($product->prod_price,'0',',','.')}} VND</span></p>
					<p><b>Mô tả:</b><span> {{$product->prod_description}}</span></p>
					<p class="add-cart text-center" style="margin-top: 8em">
						<a href="{{asset('fend/giohang/them/'.$product->prod_id)}}"
							style="text-decoration: none;width: 20em">
						Thêm vào giỏ</a></p>
					</div>
				</div>
			</div>

			<div id="comment">
				<div class="col-md-9 comment">
					<form method="post" action="{{route('postBinhluan',['id' => $product ->prod_id])}}">
						{{csrf_field()}}
						<div class="form-group">
							<label for="cm">Bình luận:</label>
							<textarea required rows="10" id="content" class="form-control" name="content"></textarea>
						</div>
						<div class="form-group text-right">
							<button type="submit" class="btn btn-danger">Gửi</button>
						</div>
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
			<div id="comment-list">
				@foreach($comments as $comment )
				<ul>
					<li class="com-title">
						<b>Tài khoản : {{$comment->com_name}}</b>
						<br>
						<span>{{date('d/m/Y H:i', strtotime($comment->created_at))}}</span>
					</li>
					<li class="com-details">
						<p>{{$comment->com_content}}</p>
					</li>
				</ul>
				@endforeach
			</div>
		</div>
@endsection