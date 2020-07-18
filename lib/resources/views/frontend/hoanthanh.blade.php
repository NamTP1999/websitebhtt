@extends("frontend.master")
@section('title','Hoàn thành')
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
        <img src="img/banner5.jpg" alt="Los Angeles" style="width:100%;">
    </div>

    <div class="item">
        <img src="img/banner2.png" alt="Chicago" style="width:100%;">
    </div>

    <div class="item">
        <img src="img/banner3.jpg" alt="New york" style="width:100%;">
    </div>
</div>

<!-- Left and right controls -->
                       <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                      </a> -->
</div>
    <div id="wrap-inner">
        <div id="complete">
            <b>Quý khách đã đặt hàng thành công từ shop FirstTime của chúng tôi!</b>
            <p> Hóa đơn mua hàng của Quý khách đã được chuyển đến Địa chỉ Email có trong phần Thông tin Khách hàng của chúng Tôi</p>
            <p> Sản phẩm của Quý khách sẽ được chuyển đến Địa có trong phần Thông tin Khách hàng sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</p>
            <p>• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng</p>
            <p>• Trụ sở chính:Số .., Phan châu trinh- Q.Hải Châu - TP Đà Nẵng</p>
            <p>Cám ơn Quý khách đã sử dụng Sản phẩm của shop chúng Tôi!</p>
        </div>
        <a href="{{asset('fend/trangchu')}}" class="btn btn-primary">Quay lại</a>
    </div>

@endsection