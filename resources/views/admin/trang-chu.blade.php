


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Giao diện Ban cán sự</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="{{ asset('public/css/style2.css') }}" />

  
</head>

<body>
    <div class="head">
        <div class="chu">
            <img src="{{ asset('public/img/bg.png') }}" style="max-width:100%;"/>
        </div>
    </div>
    <div class="nav">
        <div class="dropdown">

            <button type="button" class="btn btn-sm btn-primary dropdown-toggle ml-auto them_moi" data-toggle= "dropdown">Thêm mới</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#" data-toggle="modal">Bộ môn</a>
                <a class="dropdown-item" href="#" data-toggle="modal">Lớp</a>
                <a class="dropdown-item" href="#" data-toggle="modal">Cố vấn học tập</a>
                <a class="dropdown-item" href="#" data-toggle="modal">Sinh viên</a>  
            </div>

            <button type="button" class="btn btn-sm btn-primary dropdown-toggle ml-auto loc_danh_sach" data-toggle="dropdown">Lọc danh sách</button>
            <div class="dropdown-menu ">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_BoMon">Theo bộ môn</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_Khoa">Theo khóa</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_Lop">Theo lớp</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_CoVan">Theo cố vấn</a>  
            </div>

            <button type="button" class="btn btn-sm btn-primary doi_mat_khau " data-toggle="modal" data-target="#myModal">Đổi mật khẩu</button>
            <button type="button" class="btn btn-sm btn-primary dang_xuat ">Đăng xuất</button>
        </div>

        <!-- Dang Nhap -->

                        <div class="modal fade" id="myModal">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                             <div class="modal-header">
                                <h4 class="modal-title">Đổi mật khẩu</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                                              <!-- Modal body -->
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-10 offset-md-1">
                                  <form class="box" action="{{ asset('dang-nhap') }}" method="post">
                                    {{ csrf_field() }}
                                   <div class="form-group form-inline">
                                      <label for="" class="ml-5 mr-3">Mật khẩu cũ</label>
                                      <input type="password" name="tenDangNhap" class="form-control" />
                                   </div>
                                   <div class="form-group form-inline">
                                      <label for="" class="ml-5 mr-2">Mật khẩu mới</label>
                                      <input type="password" name="matKhau" class="form-control" />
                                   </div>
                                   <div class="row"> 
                                      <div class="col-md-7 offset-md-4">
                                        <button type="submit" class="btn btn-info ml-auto">Đổi mật khẩu</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div> 
                            </div>
                          </div>            
               </div>
</div>

</div>
<!--------------------------------->
<div class="content" style="background: white; height: auto;">

  	@if(isset($info))
      <script type='text/javascript'>
        var info = "<?php echo $info; ?>";;
        alert(info);
      </script>
    @endif
    @if(isset($data))
      <div class="table-responsive">
        <h4 style="padding: 5px">Danh Sách Ban Cán Sự Khoa Kỹ Thuật Và Công Nghệ</h4>
        <table class="table table-bordered table-sm">
            <thead>
              <tr style="    background: #E95A13;
    color: white;">
                <th class="text-center">STT</th>
                <th class="text-center">Mã lớp</th>
                <th class="text-center">Tên lớp</th>
                <th class="text-center">Tên ban cán sự</th>
                <th class="text-center">Chức vụ</th>
                <th class="text-center">SDT</th>
                <th class="text-center">Email lớp </th>
                <th class="text-center">Tên cố vấn </th>
                <th class="text-center">Chi Tiết</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($data as $duLieu)
                  @foreach($duLieu as $value)
            <tr>  
              <td> {{ $i }} </td>
              <td> {{ $value['MaLop'] }} </td>
              <td> {{ $value['TenLop'] }} </td>
              <td> {{ $value['HoTen_SV'] }} </td>
              <td> {{ $value['ChucVu_SV'] }} </td>
              <td> {{ $value['SDT_SV'] }} </td>
              <td> {{ $i }} </td>
              <td> {{ $value['HoTen_CV'] }} </td>
              <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{ '#modal_chitiet_'.$value['MaSV'] }}"> Chi Tiết </button> </td>
              <!---------------MODAL CHI TIẾT---------------->

                <div class="modal" id="{{ 'modal_chitiet_'.$value['MaSV'] }}">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header" style="text-align: center;">
                        <h4 class="modal-title">Thông tin sinh viên</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body" style="float:left; font-family:'Times New Roman';" >
                          <div class="container">
                            <h5><strong>Mã số sinh viên:</strong> {{ $value["MaSV"] }}</h5>
                            <h5><strong>Họ và tên:</strong> {{ $value["HoTen_SV"] }}</h5>
                            <h5><strong>SDT:</strong> {{ $value["SDT_SV"] }}</h5>
                            <h5><strong>Email:</strong> {{ $value["Email_SV"] }}</h5>
                            <h5><strong>Chức vụ:</strong> {{ $value["ChucVu_SV"] }}</h5>
                            <h5><strong>Chuyên nghành:</strong> {{ $value["ChuyenNganh"] }}</h5>
                            <h5><strong>Khóa học:</strong> {{ $value["KhoaHoc"] }}</h5>
                            <h5><strong>Nơi sinh:</strong> {{ $value["NoiSinh"] }}</h5>
                            <h5><strong>Hệ đào tạo:</strong> {{ $value["HeDaoTao"] }}</h5>
                            <h5><strong>Tên lớp:</strong> {{ $value["TenLop"] }}</h5>
                            <h5><strong>Tên cố vấn:</strong> {{ $value["HoTen_CV"] }}</h5>
                        </div>
                       </div>
                     </div>
                   </div>
                </div>


                <!--------------------------------------------------------->
            </tr>
            @php $i++ @endphp
                  @endforeach
                @endforeach
            </tbody>
          </table>
      </div>
    @endif

        @if(isset($dataLoc))
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
              @foreach($dataLoc as $duLieu)
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
                @endforeach
            </tbody>
          </table>
    @endif
    
</div>




<!-----------------LỌC THEO BỘ MÔN---------------->
	<div class="modal" id="modal_BoMon">
 		 <div class="modal-dialog modal-dialog-centered">
  			  <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Lọc theo bộ môn</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

   					 <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <form>
                            <label for="sel1">Bộ môn:</label>
                            <select class="form-control" id="sel1">
                              {{--@foreach($boMon as $value)
                                    <option> {{ $value["TenBoMon"] }} </option>
                              @endforeach--}}
                            </select>
                            <div class="modal-footer">
                               <button type="submit" class="btn btn-info ml-auto">Lọc</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>
	</div>
<!-------------------------------------------------------->

<!-----------------LỌC THEO LỚP---------------->
	<div class="modal" id="modal_Lop">
 		 <div class="modal-dialog modal-dialog-centered">
  			  <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Lọc theo lớp</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

   					 <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <form>
                            <label for="sel1">Lớp:</label>
                            <select class="form-control" id="sel1">
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                            </select>
                            <div class="modal-footer">
                               <button type="submit" class="btn btn-info ml-auto">Lọc</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>
	</div>
<!-------------------------------------------------------->


<!-----------------LỌC THEO KHÓA---------------->
<div class="modal" id="modal_Khoa">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Lọc theo khóa</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
        <div class="form-group">
          <form>
            <label for="sel1">Khóa:</label>
            <select class="form-control" id="sel1">
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
              <option>2019</option>
              <option>2020</option>
          </select>
          <div class="modal-footer">
           <button type="submit" class="btn btn-info ml-auto">Lọc</button>
       </div>
   </form>
</div>
</div>
</div>
</div>
</div>
<!-------------------------------------------------------->

<!-----------------LỌC THEO CỐ VẤN---------------->
<div class="modal" id="modal_CoVan">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Lọc theo cố vấn </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
        <div class="form-group">
          <form>
            <label for="sel1">Tên cố vấn:</label>
            <select class="form-control" id="sel1">
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
          </select>
          <div class="modal-footer">
           <button type="submit" class="btn btn-info ml-auto">Lọc</button>

       </div>
   </form>
</div>
</div>
</div>
</div>
</div>
<!-------------------------------------------------------->





<div class="container-fluid  footer" style="background: #666">

Bộ môn Công nghệ Thông tin - Trường Đại học Trà Vinh <br />

Địa chỉ: 126 Nguyễn Thiện Thành, Phường 5, TP. Trà Vinh <br />

Điện thoại: (+84) 294 3855246 (số nội bộ: 168 (C71.201), 238 (C71.202), 123 (C71.203))

</div>

</body>
</html>
