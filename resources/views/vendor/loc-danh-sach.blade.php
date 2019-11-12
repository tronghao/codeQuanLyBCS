@extends('top')
@section('noidung')
	<div class="container" id="nhanxet">

  <form class="container-fluid " method="post" action="{{ asset('loc-danh-sach') }}">
    {{ csrf_field() }}
    <div class="form-group col-xs-12 col-sm-12 col-md-12" id="nhanxettitle"></div>
    <div class="form-group col-xs-12 col-sm-6 col-md-3 col-md-offset-4">
      <label for="exampleFormControlInput1" style="color: #fff">Chế độ Lọc</label>
      <select name="chedo" class="form-control" id="exampleFormControlSelect1">
        <option>Theo Lớp</option>
        <option>Theo Bộ Môn</option>
        <option>Theo Khóa Học</option>
        <option>Theo CVHT</option>
      </select>
    </div>
    <div class="form-group col-xs-12 col-sm-6 col-md-3 col-md-offset-4">
      <label for="exampleFormControlInput1" style="color: #fff">Chế độ Lọc</label>
      <select name="chedo" class="form-control" id="exampleFormControlSelect1">
        <option>Theo Lớp</option>
        <option>Theo Bộ Môn</option>
        <option>Theo Khóa Học</option>
        <option>Theo CVHT</option>
      </select>
    </div>
    <div class="form-group col-xs-12 col-sm-6 col-md-3 col-md-offset-4">
      <label for="exampleFormControlInput1" style="color: #fff">Chế độ Lọc</label>
      <select name="chedo" class="form-control" id="exampleFormControlSelect1">
        <option>Theo Lớp</option>
        <option>Theo Bộ Môn</option>
        <option>Theo Khóa Học</option>
        <option>Theo CVHT</option>
      </select>
    </div>
    <div class="form-group col-xs-12 col-sm-6 col-md-3 col-md-offset-4">
      <label for="exampleFormControlInput1" style="color: #fff">Chế độ Lọc</label>
      <select name="chedo" class="form-control" id="exampleFormControlSelect1">
        <option>Theo Lớp</option>
        <option>Theo Bộ Môn</option>
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
  @if(isset($duLieu))
  <div class="container" style="background:#f5f6fa">
  </br>
 <table class="table table-bordered" style="border:1px solid #ccc; text-align:center">
    <thead >
      <tr >
        <th style="text-align:center;">STT</th>
        <th style="text-align:center">Thánh</th>
        <th style="text-align:center">Họ Và Tên</th>
         <th style="text-align:center">Số Điện Thoại</th>
         <th style="text-align:center">Khóa Học</th>
         <th style="text-align:center">Ngành Học</th>
         <th style="text-align:center">Họ Đạo</th>
         <th style="text-align:center">Mssv</th>
        <th style="text-align:center"></th>
      </tr>
    </thead>
    <tbody>
      @php $stt = 1; @endphp
      @foreach($duLieu as $value)
         <tr>
          <td>{{ $stt }}</td> 
          <td>{{ $value['tenThanh'] }}</td>
          <td>{{ $value['hoVaTen'] }}</td>
          <td>{{ $value['soDienThoai'] }}</td>
          <td>{{ $value['khoaHoc'] }}</td>
          <td>{{ $value['nganhHoc'] }}</td>
          <td>{{ $value['hoDao'] }}</td>
          <td>{{ $value['mssv'] }}</td>
          <td>{{ $value['ghiChu'] }}</td>
         </tr>
         @php $stt++; @endphp
      @endforeach
           
      </tbody>
  </table>
    
  </div>

  @endif
@endsection