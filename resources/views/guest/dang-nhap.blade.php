@extends('top')
@section('noidung')

	<div class="container" id="nhanxet">
		<form class="container-fluid " method="post" action="{{ asset('dang-nhap') }}">
			{{ csrf_field() }}
			<div class="form-group col-xs-12 col-sm-12 col-md-12" id="nhanxettitle">Đăng Nhập</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-3 col-md-offset-2">
				<label for="exampleFormControlInput1" style="color: #fff">Usename</label>
				<input name="usename" type="text" class="form-control" id="exampleFormControlInput1" placeholder="username">
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-3">
				<label for="exampleFormControlSelect1" style="color: #fff">Password</label>
				<input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
			</div>

			<div class="col-xs-12 col-sm-12 col-md-2" style="padding-top:25px;">
				<button name="dangnhap" type="submit" class="btn btn-primary">Đăng Nhập</button>
			</div>
		</form>
	</div>

	@if(isset($error))
		 <div class="container alert alert-danger">
		    <strong>{{ $error }}</strong>
		  </div>
	@endif

@endsection