@extends('top')
@section('noidung')
	<div class="container" style="background:#f5f6fa">
  </br>
    @if(!empty($duLieu))
      <h3 class="col-sm-12 col-md-8 col-md-offset-2" style="color: red; font-weight: bold; font-style:Italic">Thông tin của {{ $duLieu[0]["HoTen_SV"] }}</h3></br>
      <pre class="col-sm-12 col-md-8 col-md-offset-2">
        @php print_r($duLieu) @endphp
      </pre>
    @else
      <h3 class="col-sm-12 col-md-8" style="color: red; font-weight: bold; font-style:Italic">Không có sinh viên này</h3></br>
    @endif
  </div>
  </br> 

@endsection