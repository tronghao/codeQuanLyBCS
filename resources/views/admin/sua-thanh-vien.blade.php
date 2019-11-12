@extends('../top')
@section('noidung')
	<div class="container" id="nhanxet">

	  <form class="container-fluid " method="post" action="{{ asset('sua-thanh-vien/'.$duLieu[0]['id']) }}">
	  	{{ csrf_field() }}
		<div class="form-group col-xs-12 col-sm-12 col-md-12" id="nhanxettitle">Sửa Thành Viên</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-2">
			<label for="exampleFormControlInput1" style="color: #fff">Tên Thánh:</label>
			<input value="{{ $duLieu[0]['tenThanh'] }}" name="tenThanh" type="text" class="form-control" id="exampleFormControlInput1" placeholder="tên thánh">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
			<label for="exampleFormControlInput1" style="color: #fff">Họ Và Tên:</label>
			<input value="{{ $duLieu[0]['hoVaTen'] }}" name="hoVaTen" type="text" class="form-control" id="exampleFormControlInput1" placeholder="họ và tên">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
			<label for="exampleFormControlSelect1" style="color: #fff">Ngày Sinh:</label>
			<input value="{{ $duLieu[0]['ngaySinh'] }}" name="ngaySinh" type="text" class="form-control" id="exampleFormControlInput1" placeholder="ngày sinh">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-2">
			<label for="exampleFormControlInput1" style="color: #fff">Số Điện Thoại:</label>
			<input value="{{ $duLieu[0]['soDienThoai'] }}" name="sdt" type="text" class="form-control"  id="exampleFormControlInput1" placeholder="phone">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
			<label for="exampleFormControlInput1" style="color: #fff">Khóa Học:</label>
			<input value="{{ $duLieu[0]['khoaHoc'] }}" name="khoaHoc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="khóa học">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
			<label for="exampleFormControlSelect1" style="color: #fff">Ngành Học:</label>
			<input value="{{ $duLieu[0]['nganhHoc'] }}" name="nganhHoc" type="text" class="form-control" id="exampleFormControlInput1" placeholder="ngành học">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-2">
			<label for="exampleFormControlInput1" style="color: #fff">Họ Đạo:</label>
			<input value="{{ $duLieu[0]['hoDao'] }}" name="hoDao" type="text" class="form-control" id="exampleFormControlInput1" placeholder="họ đạo">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
			<label for="exampleFormControlInput1" style="color: #fff">Mã Lớp:</label>
			<input value="{{ $duLieu[0]['maLop'] }}" name="maLop" type="text" class="form-control" id="exampleFormControlInput1" placeholder="mã lớp">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
			<label for="exampleFormControlSelect1" style="color: #fff">MSSV:</label>
			<input value="{{ $duLieu[0]['mssv'] }}" name="mssv" type="text" class="form-control" id="exampleFormControlInput1" placeholder="mssv">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-2">
			<label for="exampleFormControlInput1" style="color: #fff">Tình Trạng:</label>
			<input value="{{ $duLieu[0]['tinhTrang'] }}" name="tinhTrang" type="text" class="form-control"  id="exampleFormControlInput1" placeholder="tình trạng">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
			<label for="exampleFormControlInput1" style="color: #fff">Đội:</label>
			<input value="{{ $duLieu[0]['doi'] }}" name="doi" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Đội">
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-md-2 col-md-offset-1">
			<label for="exampleFormControlSelect1" style="color: #fff">Ghi Chú:</label>
			<input value="{{ $duLieu[0]['ghiChu'] }}" name="ghiChu" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
			<button name="guiungtuyen" type="submit" class="btn btn-primary">Sửa Thành Viên</button>
		</div>
	</form>
	</div>

	@if(isset($info))
		 <div class="container alert alert-info">
		    <strong>{{ $info }}</strong>
		  </div>
	@endif
@endsection