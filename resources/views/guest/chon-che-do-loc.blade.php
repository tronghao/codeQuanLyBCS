@extends('top')
@section('noidung')
	<div class="container" id="nhanxet">

  <form class="container-fluid " method="post" action="{{ asset('loc-danh-sach') }}">
    {{ csrf_field() }}
    <div class="form-group col-xs-12 col-sm-12 col-md-12" id="nhanxettitle"></div>
    <div class="form-group col-xs-12 col-sm-6 col-md-3 col-md-offset-4">
      <label for="exampleFormControlInput1" style="color: #fff">Chế độ lọc</label>
      <select name="chedo" class="form-control" id="exampleFormControlSelect1">
        <option>--Chọn--</option>
        <option>Theo Bộ Môn</option>
        <option>Theo Lớp</option>
        <option>Theo Khóa Học</option>
        <option>Theo CVHT</option>
      </select>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-1 col-md-offset-0">
      </br>
      <button name="loc" type="submit" class="btn btn-primary">Lọc</button>
    </div>

  </form>
  </div>
@endsection