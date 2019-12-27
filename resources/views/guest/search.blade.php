


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
           <form class="form-inline" action="{{asset('tim-kiem')}}" method="post">
            {{csrf_field()}}
            <input type="text" class="search-query span2 searchBCS" placeholder="Tìm sinh viên ..." name="search">
          </form>
      </div>
        <div class="dropdown">
            <button type="button" class="btn btn-sm btn-primary dropdown-toggle ml-auto loc_danh_sach_guest" data-toggle=     "dropdown">Lọc danh sách</button>
            <div class="dropdown-menu ">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_BoMon">Theo bộ môn</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_Khoa">Theo khóa</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_Lop">Theo lớp</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_CoVan">Theo cố vấn</a>  
            </div>
            <button type="button" class="btn btn-sm btn-primary dang_nhap " data-toggle="modal" data-target="#myModal">Đăng nhập
            </button>
        </div>

        <!-- Dang Nhap -->

                        <div class="modal fade" id="myModal">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                             <div class="modal-header">
                                <h4 class="modal-title">Đăng Nhập</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                                              <!-- Modal body -->
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-10 offset-md-1">
                                  <form class="box" action="{{ asset('dang-nhap') }}" method="post">
                                    {{ csrf_field() }}
                                   <div class="form-group form-inline">
                                      <label for="" class="ml-5 mr-3">Tài Khoản</label>
                                      <input type="text" name="tenDangNhap" class="form-control" />
                                   </div>
                                   <div class="form-group form-inline">
                                      <label for="" class="ml-5 mr-3">Mật Khẩu</label>
                                      <input type="password" name="matKhau" class="form-control" />
                                   </div>
                                   <div class="row"> 
                                      <div class="col-md-7 offset-md-4">
                                        <button type="submit" class="btn btn-info ml-auto">Đăng Nhập</button> &nbsp; &nbsp;
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div> 
                            </div>
                          </div>            
               </div>

          <div class="dropdown">
            <a href="{{ asset('')}}"><button type="button" class="btn btn-sm btn-primary trang_chu_guest" >Trang chủ</button></a>
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
    @if(isset($kqSearch))
      <div class="table-responsive">
        
        <h4 style="padding: 5px">Danh Sách Ban Cán Lớp Sự Khoa Kỹ Thuật Và Công Nghệ</h4>
        <table class="table table-bordered table-sm">
            <thead>
              <tr style="background: #E95A13; color: white;">
                <th class="text-center">STT</th>
                <th class="text-center">Mã lớp</th>
                <th class="text-center">Tên lớp</th>
                <th class="text-center">Tên ban cán sự</th>
                <th class="text-center">Chức vụ</th>
                <th class="text-center">SDT</th>
                <th class="text-center">Email lớp </th>
                <th class="text-center">Tên cố vấn </th>
                <th class="text-center"></th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
             
                  @foreach($kqSearch as $value)
            <tr>  
              <td class="text-center"> {{ $i }} </td>
              <td> {{ $value['MaLop'] }} </td>
              <td> {{ $value['TenLop'] }} </td>
              <td> {{ $value['HoTen_SV'] }} </td>
              <td> {{ $value['ChucVu_SV'] }} </td>
              <td class="text-center"> {{ $value['SDT_SV'] }} </td>
              <td> {{ $value['EmailLop'] }} </td>
              <td> {{ $value['HoTen_CV'] }} </td>
              <td class="text-center" width="90px"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{ '#modal_chitiet_'.$value['MaSV'] }}">Chi Tiết</button> </td>
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

            </tbody>
          </table>
      </div>
    @endif

        @if(isset($dataLoc))
      <div class="table-responsive">
        <h4 style="padding: 5px">Kết Quả Lọc</h4>
        <table class="table table-bordered table-sm">
            <thead>
              <tr style="background: #E95A13; color: white;">
                <th class="text-center">STT</th>
                <th class="text-center">Mã lớp</th>
                <th class="text-center">Tên lớp</th>
                <th class="text-center">Tên ban cán sự</th>
                <th class="text-center">Chức vụ</th>
                <th class="text-center">SDT</th>
                <th class="text-center">Email lớp </th>
                <th class="text-center">Tên cố vấn </th>
                <th class="text-center"></th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($dataLoc as $duLieu)
                  @foreach($duLieu as $value)
            <tr>  
              <td class="text-center"> {{ $i }} </td>
              <td> {{ $value['MaLop'] }} </td>
              <td> {{ $value['TenLop'] }} </td>
              <td> {{ $value['HoTen_SV'] }} </td>
              <td> {{ $value['ChucVu_SV'] }} </td>
              <td class="text-center"> {{ $value['SDT_SV'] }} </td>
              <td> {{ $value['EmailLop'] }} </td>
              <td> {{ $value['HoTen_CV'] }} </td>
              <td class="text-center" width="90px"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{ '#modal_chitiet_'.$value['MaSV'] }}"> Chi Tiết </button> </td>
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
                        <form action="{{ asset('loc-danh-sach/bomon') }}" method="post">
                          {{ csrf_field() }}
                            <label for="sel1">Bộ môn:</label>
                            <select class="form-control" id="sel1" name="value">
                              @foreach($boMon as $value)
                                    <option> {{ $value["TenBoMon"] }} </option>
                              @endforeach
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
                        <form action="{{ asset('loc-danh-sach/lop') }}" method="post">
                          {{ csrf_field() }}
                            <label for="sel1">Lớp:</label>
                            <select class="form-control" id="sel1" name="value">
                              @foreach($lop as $value)
                                    <option> {{ $value["MaLop"]." – ".$value["TenLop"] }} </option>
                              @endforeach
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
          <form action="{{ asset('loc-danh-sach/khoahoc') }}" method="post">
             {{ csrf_field() }}
            <label for="sel1">Khóa:</label>
            <select class="form-control" id="sel1" name="value">
              @foreach($khoaHoc as $value)
                    <option> {{ $value["KhoaHoc"] }} </option>
              @endforeach
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
          <form action="{{ asset('loc-danh-sach/cvht') }}" method="post">
             {{ csrf_field() }}
            <label for="sel1">Tên cố vấn:</label>
            <select class="form-control" id="sel1" name="value">
              @foreach($coVan as $value)
                    <option> {{ $value["HoTen_CV"] }} </option>
              @endforeach
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
