


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
  
  <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"><script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

  
</head>

<body>
  <div class="head">
    <div class="chu">
      <img src="{{ asset('public/img/bg.png') }}" style="max-width:100%;"/>
    </div>
  </div>
  <div class="nav">
    <div class="dropdown">
      <a href="{{ asset('admin/dang-xuat') }}"><button type="button" class="btn btn-sm btn-primary dang_xuat ">Đăng xuất</button></a>
    </div>

    <div class="dropdown">
      <button type="button" class="btn btn-sm btn-primary doi_mat_khau " data-toggle="modal" data-target="#myModal">Đổi mật khẩu</button>
    </div>
    <div class="dropdown">
      <button type="button" class="btn btn-sm btn-primary dropdown-toggle ml-auto loc_danh_sach" data-toggle="dropdown">Lọc danh sách</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_BoMon">Theo bộ môn</a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_Khoa">Theo khóa</a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_Lop">Theo lớp</a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_CoVan">Theo cố vấn</a>  
      </div>
    </div>
    <div class="dropdown">
      <button type="button" class="btn btn-sm btn-primary dropdown-toggle ml-auto them_moi" data-toggle= "dropdown">Thêm mới</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_them_moi_BoMon">Bộ môn</a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_them_moi_Lop">Lớp</a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_them_moi_CoVan">Cố vấn học tập</a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_them_moi_SV">Sinh viên</a>  
      </div>
    </div>

  <div class="dropdown">
      <button type="button" class="btn btn-sm btn-primary dropdown-toggle ml-auto quan_ly" data-toggle= "dropdown">Quản lý</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ asset('admin/quan-ly/bomon') }}" >Bộ môn</a>
        <a class="dropdown-item" href="{{ asset('admin/quan-ly/lop') }}" >Lớp</a>
        <a class="dropdown-item" href="{{ asset('admin/quan-ly/cvht') }}" >Cố vấn học tập</a>

      </div>
    </div>

    <div class="dropdown">
      <a href="{{ asset('admin/home')}}"><button type="button" class="btn btn-sm btn-primary trang_chu" >Trang chủ</button></a>
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
              <form class="box" action="{{ asset('admin/doi-mat-khau') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group form-inline">
                  <label for="" class="ml-5 mr-3">Mật khẩu cũ</label>
                  <input type="password" name="matKhauCu" class="form-control" />
                </div>
                <div class="form-group form-inline">
                  <label for="" class="ml-5 mr-2">Mật khẩu mới</label>
                  <input type="password" name="matKhauMoi" class="form-control" />
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
         <div class="container-fluid">  
          <a href="{{ asset('xuat-excel/sinhvien') }}"><button type="button" class="btn btn-success" style="float: right; margin-top: 3px;">Xuất excel</button></a>
         </div>
        <h4 style="padding: 5px">Danh Sách Ban Cán Sự Lớp Khoa Kỹ Thuật Và Công Nghệ</h4>
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
                <th class="text-center"></th>
                <th class="text-center"></th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($data as $duLieu)
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
              <td class="text-center"><button type="button" class="btn btn-success " data-toggle="modal" data-target="{{ '#modal_Sua_'.$value['MaSV'] }}"> Sửa </button> </td>
              <td class="text-center"><a href="{{ asset('admin/xoa-sinh-vien/'.$value['MaSV']) }}"> <button type="button" class="btn btn-primary" style="background-color: red; border: 0;"> Xóa </button> </a> </td>
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
                            <h5><strong>Ngày Sinh:</strong> {{ $value["NamSinh"] }}</h5>
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
                <!---------------MODAL SỬA---------------->
                  <div class="modal fade" id="{{ 'modal_Sua_'.$value['MaSV'] }}">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Cập nhật thông tin sinh viên</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          <div class="container">
                            <form action="{{ asset('admin/sua/sinh-vien/'.$value['MaSV']) }}" method="post">
                          {{ csrf_field() }}
                                
                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Họ tên:</span>
                                  </div>
                                  <input type="text" class="form-control" name="hoTenSV" value="{{ $value['HoTen_SV'] }}">
                                </div>

                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Số điện thoại:</span>
                                  </div>
                                  <input type="text" class="form-control" namwe="sdtSV"
                                  value="{{ $value['SDT_SV'] }}">
                                </div>

                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Email:</span>
                                  </div>
                                  <input type="text" class="form-control" name="emailSV" value="{{ $value['Email_SV'] }}">
                                </div>

                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Chức vụ:</span>
                                  </div>
                                  <input type="text" class="form-control" name="chucVuSV" value="{{ $value['ChucVu_SV'] }}">
                                </div>

                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Chuyên ngành:</span>
                                  </div>
                                  <input type="text" class="form-control" name="chuyenNganh" value="{{ $value['ChuyenNganh'] }}">
                                </div>

                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Khóa học:</span>
                                  </div>
                                  <input type="text" class="form-control" name="khoaHoc" value="{{ $value['KhoaHoc'] }}">
                                </div>
             
                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Ngày sinh:</span>
                                  </div>
                                  
                                    <input class="form-control" type="date" value="{{ $value['NamSinh'] }}" name="ngaySinh">
  
                                </div>

                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Nơi sinh:</span>
                                  </div>
                                  <input type="text" class="form-control" name="noiSinh" value="{{ $value['NoiSinh'] }}">
                                </div>

                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Hệ đào tạo:</span>
                                  </div>
                                  <input type="text" class="form-control" name="heDaoTao" value="{{ $value['HeDaoTao'] }}">
                                </div>

                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Tên lớp:</span>
                                  </div>
               
                                    <select name="tenLop" class="custom-select">
                                      @foreach($lop as $value1)
                                        @if($value['TenLop'] == $value1['TenLop'])
                                            <option selected> {{ $value1["TenLop"] }} </option>
                                        @else 
                                          <option> {{ $value1["TenLop"] }} </option>
                                        @endif
                                      @endforeach
                                    </select>

                                </div>

                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Tên cố vấn:</span>
                                  </div>

                                    <select name="tenCoVan" class="custom-select">
                                      @foreach($coVan as $value1)
                                        @if($value['HoTen_CV'] == $value1['HoTen_CV'])
                                            <option selected> {{ $value1["HoTen_CV"] }} </option>
                                        @else 
                                            <option > {{ $value1["HoTen_CV"] }} </option>
                                        @endif
                                      @endforeach
                                    </select>
             
                                </div>

                            </div>
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-info ml-auto">Cập Nhật</button>
                          </div> 
                      </form> 
                           
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
                <th class="text-center"></th>
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
              <td class="text-center"> <button type="button" class="btn btn-success " data-toggle="modal" data-target="{{ '#modal_Sua_'.$value['MaSV'] }}"> Sửa </button> </td>
              <td class="text-center" width="90px"><a href="{{ asset('admin/xoa-sinh-vien/'.$value['MaSV']) }}"> <button type="button" class="btn btn-primary" style="background-color: red; border: 0;"> Xóa </button> </a> </td>
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
                   <!---------------MODAL SỬA---------------->
                    <div class="modal fade" id="{{ 'modal_Sua_'.$value['MaSV'] }}">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Cập nhật thông tin sinh viên</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                            <div class="container">
                              <form action="{{ asset('admin/sua/sinh-vien/'.$value['MaSV']) }}" method="post">
                            {{ csrf_field() }}
                                  
                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Họ tên:</span>
                                    </div>
                                    <input type="text" class="form-control" name="hoTenSV" value="{{ $value['HoTen_SV'] }}">
                                  </div>

                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Số điện thoại:</span>
                                    </div>
                                    <input type="text" class="form-control" namwe="sdtSV"
                                    value="{{ $value['SDT_SV'] }}">
                                  </div>

                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Email:</span>
                                    </div>
                                    <input type="text" class="form-control" name="emailSV" value="{{ $value['Email_SV'] }}">
                                  </div>

                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Chức vụ:</span>
                                    </div>
                                    <input type="text" class="form-control" name="chucVuSV" value="{{ $value['ChucVu_SV'] }}">
                                  </div>

                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Chuyên ngành:</span>
                                    </div>
                                    <input type="text" class="form-control" name="chuyenNganh" value="{{ $value['ChuyenNganh'] }}">
                                  </div>

                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Khóa học:</span>
                                    </div>
                                    <input type="text" class="form-control" name="khoaHoc" value="{{ $value['KhoaHoc'] }}">
                                  </div>
               
                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Ngày sinh:</span>
                                    </div>
                                    
                                      <input class="form-control" type="date" value="{{ $value['NamSinh'] }}" name="ngaySinh">
    
                                  </div>

                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Nơi sinh:</span>
                                    </div>
                                    <input type="text" class="form-control" name="noiSinh" value="{{ $value['NoiSinh'] }}">
                                  </div>

                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Hệ đào tạo:</span>
                                    </div>
                                    <input type="text" class="form-control" name="heDaoTao" value="{{ $value['HeDaoTao'] }}">
                                  </div>

                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Tên lớp:</span>
                                    </div>
                 
                                      <select name="tenLop" class="custom-select">
                                        @foreach($lop as $value1)
                                          @if($value['TenLop'] == $value1['TenLop'])
                                              <option selected> {{ $value1["TenLop"] }} </option>
                                          @else 
                                            <option> {{ $value1["TenLop"] }} </option>
                                          @endif
                                        @endforeach
                                      </select>

                                  </div>

                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Tên cố vấn:</span>
                                    </div>

                                      <select name="tenCoVan" class="custom-select">
                                        @foreach($coVan as $value1)
                                          @if($value['HoTen_CV'] == $value1['HoTen_CV'])
                                              <option selected> {{ $value1["HoTen_CV"] }} </option>
                                          @else 
                                              <option > {{ $value1["HoTen_CV"] }} </option>
                                          @endif
                                        @endforeach
                                      </select>
               
                                  </div>

                              </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-info ml-auto">Cập Nhật</button>
                            </div> 
                        </form> 
                             
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


<!-----------------THÊM SINH VIÊN---------------->
<div class="modal fade" id="modal_them_moi_SV">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm sinh viên</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
            <form action="{{ asset('admin/them/sinhvien') }}" method="post">
              {{ csrf_field() }}
                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Mã số:</span>
                      </div>
                      <input type="text" class="form-control" name="maSV">
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Họ tên:</span>
                      </div>
                      <input type="text" class="form-control" name="hoTenSV">
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Số điện thoại:</span>
                      </div>
                      <input type="text" class="form-control" name="sdtSV">
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Email:</span>
                      </div>
                      <input type="text" class="form-control" name="emailSV">
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Chức vụ:</span>
                      </div>
                      <input type="text" class="form-control" name="chucVuSV">
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Chuyên nghành:</span>
                      </div>
                      <input type="text" class="form-control" name="chuyenNganh">
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Khóa học:</span>
                      </div>
                      <input type="text" class="form-control" name="khoaHoc">
                    </div>
 
                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Ngày sinh:</span>
                      </div>
                      
                        <input class="form-control" type="date" name="ngaySinh">

                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Nơi sinh:</span>
                      </div>
                      <input type="text" class="form-control" name="noiSinh">
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Hệ đào tạo:</span>
                      </div>
                      <input type="text" class="form-control" name="heDaoTao">
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Tên lớp:</span>
                      </div>
   
                        <select name="tenLop" class="custom-select">
                          @foreach($lop as $value)
                                    <option> {{ $value["TenLop"] }} </option>
                          @endforeach
                        </select>

                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Tên cố vấn:</span>
                      </div>

                        <select name="tenCoVan" class="custom-select">
                          @foreach($coVan as $value)
                                <option> {{ $value["HoTen_CV"] }} </option>
                          @endforeach
                        </select>
 
                    </div>

                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info ml-auto">Thêm</button>
              </div> 
          </form> 
    </div>
  </div>
</div>

<!--------------------------------------------------->
<!-----------------THÊM CỐ VẤN HỌC TẬP---------------->
<div class="modal fade" id="modal_them_moi_CoVan">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm cố vấn</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
          <form action="{{ asset('admin/them/cvht') }}" method="post">
              {{ csrf_field() }}
                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Mã cố vấn:</span>
                  </div>
                  <input type="text" class="form-control" name="maCV">
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Họ tên:</span>
                  </div>
                  <input type="text" class="form-control" name="hoTenCV">
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Số điện thoại:</span>
                  </div>
                  <input type="text" class="form-control" name="sdtCV">
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Email:</span>
                  </div>
                  <input type="text" class="form-control" name="emailCV">
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Mã bộ môn:</span>
                  </div>

                       <select class="custom-select" name="tenBoMon">
                        @foreach($boMon as $value)
                              <option> {{ $value["TenBoMon"] }} </option>
                        @endforeach
                      </select>

                </div>
              

            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-info ml-auto">Thêm</button>
          </div>  
       </form>   
  </div>
</div>
</div>

<!--------------------------------------------------->

<!-----------------THÊM LỚP---------------->
<div class="modal fade" id="modal_them_moi_Lop">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm lớp</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
            <form action="{{ asset('admin/them/lop') }}" method="post">
              {{ csrf_field() }}
                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Mã lớp:</span>
                  </div>
                  <input type="text" class="form-control" name="maLop">
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Tên lớp:</span>
                  </div>
                  <input type="text" class="form-control" name="tenLop">
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Email lớp:</span>
                  </div>
                  <input type="text" class="form-control" name="emailLop">
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Tên bộ môn:</span>
                  </div>

                      <select class="custom-select" name="tenBoMon">
                        @foreach($boMon as $value)
                              <option> {{ $value["TenBoMon"] }} </option>
                        @endforeach
                      </select>

                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Tên cố vấn:</span>
                  </div>

                      <select class="custom-select" name="tenCoVan">
                        @foreach($coVan as $value)
                              <option> {{ $value["HoTen_CV"] }} </option>
                        @endforeach
                      </select>

                </div>

           
      </div>
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="submit" class="btn btn-info ml-auto">Thêm</button>
    </div>  
  </form>
  </div>
</div>
</div>

<!-----------------THÊM BỘ MÔN---------------->
<div class="modal fade" id="modal_them_moi_BoMon">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm bộ môn</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
         
          <form action="{{ asset('admin/them/bomon') }}" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text">Mã bộ môn:</span>
                </div>
                <input type="text" class="form-control" name="maBoMon">
            </div>

            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text">Tên bộ môn:</span>
                </div>
                <input type="text" class="form-control" name="tenBoMon">
            </div>
          
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-info ml-auto">Thêm</button>
      </div>
    </form>    
    </div>
  </div>
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
                        <form action="{{ asset('admin/loc-danh-sach/bomon') }}" method="post">
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
                        <form action="{{ asset('admin/loc-danh-sach/lop') }}" method="post">
                          {{ csrf_field() }}
                            <label for="sel1">Lớp:</label>
                            <select class="form-control" id="sel1" name="value">
                              @foreach($lop as $value)
                                    <option> {{ $value["TenLop"] }} </option>
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
          <form action="{{ asset('admin/loc-danh-sach/khoahoc') }}" method="post">
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
          <form action="{{ asset('admin/loc-danh-sach/cvht') }}" method="post">
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