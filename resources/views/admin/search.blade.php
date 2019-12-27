


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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"><script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

  
</head>

<body>
  <div class="head">
    <div class="chu">
      <img src="{{ asset('public/img/bg.png') }}" style="max-width:100%;"/>
    </div>
  </div>
  
@include('admin.menu')

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
                                  <input type="tel" class="form-control" namwe="sdtSV"
                                  value="{{ $value['SDT_SV'] }}" pattern="[0-9]{10}">
                                </div>

                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Email:</span>
                                  </div>
                                  <input type="email" class="form-control" name="emailSV" value="{{ $value['Email_SV'] }}">
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
                                    <input type="tel" class="form-control" namwe="sdtSV"
                                    value="{{ $value['SDT_SV'] }}" pattern="[0-9]{10}">
                                  </div>

                                  <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Email:</span>
                                    </div>
                                    <input type="email" class="form-control" name="emailSV" value="{{ $value['Email_SV'] }}">
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

@include('admin.them')

@include('admin.loc')



<div class="container-fluid  footer" style="background: #666">

Bộ môn Công nghệ Thông tin - Trường Đại học Trà Vinh <br />

Địa chỉ: 126 Nguyễn Thiện Thành, Phường 5, TP. Trà Vinh <br />

Điện thoại: (+84) 294 3855246 (số nội bộ: 168 (C71.201), 238 (C71.202), 123 (C71.203))

</div>

</body>
</html>