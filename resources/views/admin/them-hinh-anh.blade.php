@extends('../top')
@section('noidung')
	<div class="container" id="nhanxet">

	  <form class="container-fluid " method="post" action="{{ asset('them-hinh-anh') }}">
	  	{{ csrf_field() }}
		<div class="form-group col-xs-12 col-sm-12 col-md-12" id="nhanxettitle">Thêm Hình Ảnh Hoạt Động</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-3 col-md-offset-2">
			<label for="exampleFormControlInput1" style="color: #fff">Hoạt Động:</label>
			<input name="noiDung" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-3 col-md-offset-1">
			<label for="exampleFormControlInput1" style="color: #fff">Đường Link</label>
			<input name="src" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
			<button name="guiungtuyen" type="submit" class="btn btn-primary">Thêm</button>
		</div>
	</form>
	</div>

	@if(isset($info))
		 <div class="container alert alert-info">
		    <strong>{{ $info }}</strong>
		  </div>
	@endif
@endsection