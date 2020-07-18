@extends("frontend.master")
@section('title','Chi tết sản phẩm')
@section('content')
<script type="text/javascript">
	function Capnhat(giatri, id){
		$.get(
			'{{asset('fend/giohang/capnhat')}}',
			{quantity:giatri,id:id},
			function(){
				location.reload();
			}
			);
	}
</script>
<div id="wrap-inner">
	<div id="list-cart">
		<h3 style="color:black">Giỏ hàng</h3>
		@if(Cart::getContent()->count() >= 1)
		<form>

			<table class="table table-bordered .table-responsive text-center">
				<tr class="active">
					<td width="11.111%">ẢNH SẢN PHẨM </td>
					<td width="22.222%">TÊN SẢN PHẨM</td>
					<td width="16.6665%">ĐƠN GIÁ</td>
					<td width="22.222%">SỐ LƯỢNG</td>
					<td width="16.6665%">TỔNG CỘNG</td>
					<td width="11.112%">Xóa</td>
				</tr>
				@foreach($items as $item)
				<tr>
					<td><img class="img-responsive" style="width:200px;height:75px" src="{{asset('lib/storage/app/avatar/'.$item->attributes->img)}}"></td>
					<td>{{$item->name}}</td>
					<td><span class="price">{{number_format($item->price,0,',','.')}}VND</span></td>
					<td>
						<div class="form-group">
							<input class="form-control" type="number"
							value="{{$item->quantity}}"
							onchange="Capnhat(this.value,'{{$item->id}}')">
						</div>
					</td>
					<td><span class="price">
						{{number_format($item->price*$item->quantity,0,',','.')}} VND</span></td>
					<td><a href="{{asset('fend/giohang/xoa/'.$item->id)}}" class="btn btn-danger">Xóa</a></td>
				</tr>
				@endforeach
			</table>
			<div class="row" id="total-price">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<b>Tổng thanh toán:</b>
					<span class="total-price">{{number_format($total)}} VND</span>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<a href="{{asset('fend/giohang/xoa/all')}}"
					class="btn btn-success">Xóa giỏ hàng</a>
					<a href="{{asset('fend/trangchu')}}" class="btn btn-warning">Mua tiếp</a>
				</div>
			</div>
		</form>
		<div id="xac-nhan">
			<h3 style="color:black">Xác nhận mua hàng</h3>
			<form method="post" action="{{route('postThanhtoan')}}" >
				{{csrf_field()}}
				<div class="form-group">
					<label for="email">Email address:</label>
					<input required type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="name">Họ và tên:</label>
					<input required type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="phone">Số điện thoại:</label>
					<input required type="number" class="form-control" id="phone" name="phone">
				</div>
				<div class="form-group">
					<label for="add">Địa chỉ:</label>
					<input required type="text" class="form-control" id="add" name="add">
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-danger">Xác nhận mua hàng</button>
				</div>
			</form>
		</div>
		@else
		<h5>Giỏ hàng rỗng</h5>
		@endif

	</div>
</div>
@endsection