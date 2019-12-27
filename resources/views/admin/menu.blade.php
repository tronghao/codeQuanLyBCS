<div class="nav">
    <div class="dropdown">
         <form class="form-inline" action="{{asset('admin/tim-kiem')}}" method="post">
          {{csrf_field()}}
          <input type="text" class="search-query span2 searchBCS" placeholder="Tìm sinh viên ..." name="search">
        </form>
    </div>

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