@extends('Guest.top')

@section('noidung')
		@if(isset($info))
			<script>
				alert($info);
			</script>
		@endif
	 <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã lớp</th>
                <th>Tên lớp</th>
                <th>Tên ban cán sự</th>
                <th>Chức vụ</th>
                <th>SDT</th>
                <th>Email lớp </th>
                <th>Tên cố vấn </th>
                <th>Chi Tiết</th>
              </tr>
            </thead>
            <tbody>
           		@php $i=1; @endphp
              @foreach($duLieu as $value)

				<tr>	
					<th> {{ $i }} </th>
					<th> {{ $value['MaLop'] }} </th>
					<th> {{ $value['TenLop'] }} </th>
					<th> {{ $value['HoTen_SV'] }} </th>
					<th> {{ $value['ChucVu_SV'] }} </th>
					<th> {{ $value['SDT_SV'] }} </th>
					<th> {{ $i }} </th>
					<th> {{ $value['HoTen_CV'] }} </th>
					<th> <button class="btn btn-success">Chi Tiết</button> </th>
				</tr>
				

				@php $i++ @endphp
              @endforeach
            </tbody>
          </table>
@endsection
