


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
  
   @include('admin.menu')


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
          <a href="{{ asset('xuat-excel/bomon') }}"><button type="button" class="btn btn-success" style="float: right; margin-top: 3px;">Xuất excel</button></a>
         </div>
         <span style="color: red; font-size: 20px;">* Khi xóa bộ môn sẽ xóa các sinh viên, giảng viên và lớp liên quan đến bộ môn đó</span>
         <h4 style="padding: 5px">Danh Sách Các Bộ Môn Của Khoa Kỹ Thuật Và Công Nghệ</h4>
        <table class="table table-bordered table-sm">
            <thead>
              <tr style="background: #E95A13; color: white;">
                <th class="text-center">STT</th>
                <th class="text-center">Mã bộ môn</th>
                <th class="text-center">Tên bộ môn</th>
                <th class="text-center"></th>
                <th class="text-center"></th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($data as $value)

            <tr>  
              <td class="text-center"> {{ $i }} </td>
              <td> {{ $value['MaBoMon'] }} </td>
              <td> {{ $value['TenBoMon'] }} </td>
              <td class="text-center" width="70px"><button type="button" class="btn btn-success " data-toggle="modal" data-target="{{ '#modal_Sua_'.$value['MaBoMon'] }}"> Sửa </button> </td>
              <td class="text-center" width="70px"><a href="{{ asset('admin/xoa-bo-mon/'.$value['MaBoMon']) }}"> <button type="button" class="btn btn-primary" style="background-color: red; border: 0;"> Xóa </button> </a> </td>
              
                <!---------------MODAL SỬA---------------->
                  <div class="modal fade" id="{{ 'modal_Sua_'.$value['MaBoMon'] }}">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Cập nhật thông tin bộ môn</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          <div class="container">
                            <form action="{{ asset('admin/sua/bo-mon/'.$value['MaBoMon']) }}" method="post">
                          {{ csrf_field() }}
                                
                                <div class="input-group mb-3 input-group-sm">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Tên bộ môn:</span>
                                  </div>
                                  <input type="text" class="form-control" name="tenBoMon" value="{{ $value['TenBoMon'] }}">
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