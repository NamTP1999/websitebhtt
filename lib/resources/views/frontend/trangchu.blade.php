@extends("frontend.master")
@section('title','Trang chủ')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/banner_dh.jpg" alt="Los Angeles" style="width:100%;height: 400px">
    </div>

    <div class="item">
      <img src="img/banner_dh2.jpg" alt="Chicago" style="width:100%;height: 400px">
    </div>

    <div class="item">
      <img src="img/banner_dh3.png" alt="New york" style="width:100%;height: 400px">
    </div>
  </div>

  <!-- Left and right controls -->
</div>
<h3 style="color:black">SẢN PHẨM NỔI BẬT</h3>
<div class="products">
  <h4>Áo</h4>
  <div class="product-list row">
   @foreach($listprod as $prod)
   <div class="product-item col-md-3 col-sm-6 col-xs-12">
    <a href="{{asset('fend/chitietsp/'.$prod->prod_id)}}">
      <img src="{{asset('lib/storage/app/avatar/'.$prod->prod_img)}}" class="img-thumbnail"
      style="height: 12em;width: 100%;margin-top:10px">
    </a>
    <b style="display: block;padding:10px  0px; ">
      {{$prod->prod_name}}</b>
      <div class="star"
              style="background-image: url(img/sao.png);width: 6.7em;height: 14px;margin-bottom: 10px;color:white">.</div>
      <p class="price">{{$prod->prod_price}} VND</p>
      <div class="marsk">
        <table>
          <tr>
            <td>

             </td>
          </tr>
          <tr>
            <td>
             <p class="btn-danger text-center" style="margin-left:1px">
              <a href="{{asset('fend/chitietsp/'.$prod->prod_id)}}"
                class="btn btn-danger">
              Thêm vào giỏ</a></p>
            </td>
          </tr>
        </table>
      </div>
    </div>
    @endforeach
  </div>
</div>
<div class="products">
  <h4>Quần</h4>
  @foreach($listprod2 as $prod)
  <div class="product-item col-md-3 col-sm-6 col-xs-12">
    <a href="{{asset('fend/chitietsp/'.$prod->prod_id)}}">
      <img src="{{asset('lib/storage/app/avatar/'.$prod->prod_img)}}" class="img-thumbnail"
      style="height: 12em;width: 100%;margin-top:10px">
    </a>
    <b style="display: block;padding:10px  0px; ">
      {{$prod->prod_name}}</b>
      <p class="price">{{$prod->prod_price}} VND</p>
      <div class="marsk">
        <table>
          <tr>
            <td>
             <p class="btn-danger text-center" style="margin-left:1px">
              <a href="{{asset('fend/chitietsp/'.$prod->prod_id)}}" style="color:white;
              text-decoration: none;padding:1px ">Thêm vào giỏ</a></p>
            </td>
          </tr>
        </table>
      </div>
    </div>
    @endforeach
  </div>
  @endsection