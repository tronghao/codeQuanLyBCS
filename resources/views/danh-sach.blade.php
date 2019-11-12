@extends('top')
@section('noidung')
	<div class="container" style="background:#f5f6fa">
  </br>
  <h3 class="col-sm-12 col-md-7" style="color: red; font-weight: bold; font-style:Italic">Danh sách Ban Cán Sự Khoa Kỹ Thuật Và Công Nghệ</h3></br>
 <table class="table table-bordered" style="border:1px solid #ccc; text-align:center">
    <thead >
      <tr >
        <th style="text-align:center;">STT</th>
        <th style="text-align:center">Mã Lớp</th>
        <th style="text-align:center">Cố Vấn Học Tập</th>
         <th style="text-align:center">Họ Và Tên SV</th>

         <th style="text-align:center">Điện Thoại</th>
         <th style="text-align:center">Chức vụ</th>
         <th style="text-align:center">Email</th>
         <th style="text-align:center"></th>
         @if(Session::has('user'))
            <th style="text-align:center"></th>
            <th style="text-align:center"></th>
        @endif
      </tr>
    </thead>
    <tbody>
    	@php $stt = 1; @endphp
      @foreach($duLieu as $value)
      	 <tr>
      	 	<td>{{ $stt }}</td>	
      	 	<td>{{ $value['MaLop'] }}</td>
      	 	<td>{{ $value['HoTen_CV'] }}</td>
      	
      	 	<td>{{ $value['HoTen_SV'] }}</td>

      	 	<td>{{ $value['SDT_SV'] }}</td>
      	 	<td>{{ $value['ChucVu_SV'] }}</td>
      	
          <td>{{ $value['Email_SV'] }}</td>
          <td> <a href="{{ asset('xem-thong-tin/'.$value['MaSV']) }}" ><button type="button" class="btn btn-success">{{"Xem Thông Tin"}}</button></a></td>
          @if(Session::has('user'))
            <td><a href="{{ asset('sua-thanh-vien/'.$value['id']) }}" ><button type="button" class="btn btn-success">Edit</button></a></td>
            <td><a href="{{ asset('cuu/'.$value['id']) }}" ><button type="button" class="btn btn-warning">Cựu</button></a></td>
          @endif
      	 </tr>
      	 @php $stt++; @endphp
      @endforeach
           
      </tbody>
  </table>
  	
  </div>
  </br>

@endsection