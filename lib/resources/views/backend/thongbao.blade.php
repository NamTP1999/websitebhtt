@if(Session::has('fail'))
		<p class="alert alert-danger" style="text-align: center">{{Session::get('fail')}}</p>
@endif

@foreach($errors -> all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
@endforeach