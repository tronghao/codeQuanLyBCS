@extends('top')
@section('noidung')

  <div class="container" style="background:#f5f6fa">
  </br>
 <table class="table table-bordered" style="border:1px solid #ccc; text-align:center">
    <thead >
      <tr >
        <th style="text-align:center;">STT</th>
        <th style="text-align:center">Nội dung</th>
        <th style="text-align:center">Đường Link</th>
    </thead>
    <tbody>
      @php $stt = 1; @endphp
      @foreach($duLieu as $value)
         <tr>
          <td>{{ $stt }}</td> 
          <td>{{ $value['noiDung'] }}</td>
          <td><a href=" {{ $value['src'] }}">Xem</a></td>
         </tr>
         @php $stt++; @endphp
      @endforeach
           
      </tbody>
  </table>
    
  </div>
@endsection