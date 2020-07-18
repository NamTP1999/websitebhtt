<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') </title>
  <base href="{{asset('public/frontend')}}/">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap2.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/styles2.css" rel="stylesheet">
  <link href="css/slick-theme.css" rel="stylesheet" />
  <link href="css/slick.css" rel="stylesheet" />
</head>
<body>
  <header>
    <div class="container-fluid haed-top">
      <div class="flex-row container">
        <div class="col-sm-3 loge">
          <a href="{{asset('fend/trangchu')}}">FirtTime <span class="glyphicon glyphicon-hand-up"></span></p></i></a>
        </div>
        <div class="col-sm-6 name-page">
          <h3>SHOP BÁN ĐỒNG HỒ</h3>
        </div>
        <div class="col-sm-3">
          <ul class="nav navbar-nav navbar-right">
            @if(Session::has('TenTK'))
            <li style="line-height: 50px;color: #dc1616;" class="glyphicon glyphicon-user">.{{Session::get('TenTK')}}</li>
            <li><a href="{{asset('fend/dangxuat')}}" >Đăng xuất</a></li>
            @else
            <li><a href="{{asset('fend/dangky')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="{{asset('fend/dangnhap')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @endif
          </ul>
        </div>
      </div>
    </div>
    <div class="head-bottom">
      <div class="flex-row">
        <nav class="navbar-inverse">
          <div class="container">
            <form class="navbar-form navbar-left" method="get"
            action="{{asset('fend/timkiem')}}">
            <div class="form-group">
              <input type="text" class="form-control" name="result" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Tìm kiếm</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="navbar-brand" href="{{asset('fend/giohang/hienthi')}}">Giỏ hàng
             <span class="glyphicon glyphicon-shopping-cart"></span></a>
           </li>
         </ul>
       </div>
     </nav>
   </div>
 </div>
</header>
<main>
  <div class="flex-row container">
    <div class="flex-row">
      <div class="col-xs-12 col-md-3 content-left">
        <div class="panel panel-default danhmuc">
          <div class="panel-heading">Danh mục sản phẩm</div>
          <ul class="list-group">
            @foreach($listcate as $cate)
            <li class="list-group-item"><a href="{{asset('fend/danhmuc/'.$cate ->cate_id)}}">
              {{$cate->cate_name}}</a></li>
              @endforeach
            </ul>
          </div>

          <div id="banner-l" class="text-center">
            <div class="banner-l-item">
              <a href="#"><img src="img/banner_dh1.2.jpg" alt="" class="img-thumbnail"
                style="width: 100%"></a>
              </div>
              <div class="banner-l-item">
                <a href="#"><img src="img/banner_giamgia2.png" alt="" class="img-thumbnail" style="width: 100%"></a>
              </div>
              <div class="banner-l-item">
                <a href="#"><img src="img/banner_giamgia3.jpg" alt="" class="img-thumbnail" style="width: 100%"></a>
              </div>

              <div class="banner-l-item">
                <a href="#"><img src="img/blackfriday.jpg" alt="" class="img-thumbnail"style="width: 100%"></a>
              </div>

            </div>
          </div>
          <div class="col-xs-12 col-md-9 content-right">
            @yield('content')
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="container-fluid footer-end">
        <div class="flex-row container">
          <div class="col-xs-12 col-md-2 loge">
            <a href="{{asset('admin/trangchu')}}">FirtTime <span class="glyphicon glyphicon-hand-up"></span></p></i></a>
          </div>
          <div class="col-md-5">
            <h4>Liên hệ</h4>
            <b>Địa chỉ:     </b><span>Số .., Phan châu trinh- Q.Hải Châu - TP Đà Nẵng</span><br>
            <b>Điện thoại:      </b><span>0859399737</span><br>
            <b>Email:       </b><span>namphamt1999@gmail.com</span><br>
            <b>Skype:       </b><span>namphamt1999</span><br>
          </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </footer>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery2.min.js" type="text/javascript"></script>
    <script src="js/zoomsl.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
      $('#calendar').datepicker({
      });
      !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
          $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
      }(window.jQuery);

      $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
      })
      $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
      });
      function changeImg(input){
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if(input.files && input.files[0]){
          var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function(e){
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src',e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
            }
          }
          $(document).ready(function() {
            $('#avatar').click(function(){
              $('#img').click();
            });
          });
        </script>
        <script type="text/javascript">
          $(document).ready(function(){
            $(".small_img").click(function(){
              $(".big_img").attr('src',$(this).attr('src'));
            });
          });
        </script>
        <script type="text/javascript">
          $(document).ready(function(){
            $(".big_img").imagezoomsl();
          });
        </script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('.items').slick({
              infinite: true,
              slidesToShow: 3,
              slidesToScroll: 3
            });
          });
        </script>
      </body>
      </html>