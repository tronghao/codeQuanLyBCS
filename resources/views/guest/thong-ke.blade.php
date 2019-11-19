@extends('top')
@section('noidung')
@if(isset($duLieu))
  <div class="container" style="background:#f5f6fa">
  </br>
 <table class="table table-bordered" style="border:1px solid #ccc; text-align:center">
    <thead >
      <tr >
        <th style="text-align:center;">Khóa Học</th>
        <th style="text-align:center">Số Lượng</th>
        <th style="text-align:center"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($duLieu as $value)
         <tr>
          <td>{{ $value['khoaHoc'] }}</td>
          <td>{{ $value['soLuong'] }}</td>
          <td><a href="{{ asset('xem-danh-sach-theo-khoa/'.$value['khoaHoc']) }}">Xem danh sách</a></td>
         </tr>
      @endforeach
           
      </tbody>
  </table>
    
  </div>
@endif
@if(isset($duLieu2))
  <div class="container" style="background:#f5f6fa">
  </br>
 <table class="table table-bordered" style="border:1px solid #ccc; text-align:center">
    <thead >
      <tr >
        <th style="text-align:center;">STT</th>
        <th style="text-align:center">Thánh</th>
        <th style="text-align:center">Họ Và Tên</th>
        <th style="text-align:center">Ngày Sinh</th>
         <th style="text-align:center">Số Điện Thoại</th>
         <th style="text-align:center">Khóa Học</th>
         <th style="text-align:center">Ngành Học</th>
         <th style="text-align:center">Họ Đạo</th>
         <th style="text-align:center">Mã Lớp</th>
         <th style="text-align:center">Mssv</th>
      </tr>
    </thead>
    <tbody>
      @php $stt = 1; @endphp
      @foreach($duLieu2 as $value)
         <tr>
          <td>{{ $stt }}</td> 
          <td>{{ $value['tenThanh'] }}</td>
          <td>{{ $value['hoVaTen'] }}</td>
          <td>{{ $value['ngaySinh'] }}</td>
          <td>{{ $value['soDienThoai'] }}</td>
          <td>{{ $value['khoaHoc'] }}</td>
          <td>{{ $value['nganhHoc'] }}</td>
          <td>{{ $value['hoDao'] }}</td>
          <td>{{ $value['maLop'] }}</td>
          <td>{{ $value['mssv'] }}</td>
         </tr>
         @php $stt++; @endphp
      @endforeach
           
      </tbody>
  </table>
    
  </div>
@endif
@endsection