@if(Session::has('thanhcong'))
		<p class="alert alert-danger" style="text-align: center">{{Session::get('thanhcong')}}</p>
@endif

@if(Session::has('thatbai'))
		<p class="alert alert-danger" style="text-align: center">{{Session::get('thatbai')}}</p>
@endif

@if(Session::has('Matkhausai'))
		<p class="alert alert-danger" style="text-align: center">{{Session::get('Matkhausai')}}</p>
@endif

@if(Session::has('Taikhoanktt'))
		<p class="alert alert-danger" style="text-align: center">{{Session::get('Taikhoanktt')}}</p>
@endif