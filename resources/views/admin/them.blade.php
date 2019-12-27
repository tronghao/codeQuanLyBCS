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
                      <input type="text" class="form-control" name="maSV" required>
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Họ tên:</span>
                      </div>
                      <input type="text" class="form-control" name="hoTenSV" required>
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Số điện thoại:</span>
                      </div>
                      <input type="tel" class="form-control" name="sdtSV" pattern="[0-9]{10}">
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Email:</span>
                      </div>
                      <input type="email" class="form-control" name="emailSV">
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
                      <input type="text" class="form-control" name="chuyenNganh" list="listChuyenNganh">
                      <datalist id="listChuyenNganh">
                          @foreach($chuyenNganh as $value)
                              <option value="{{$value['ChuyenNganh']}}" />
                          @endforeach                        
                      </datalist>
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Khóa học:</span>
                      </div>
                      <input type="text" class="form-control" name="khoaHoc" list="listKhoaHoc">
                      <datalist id="listKhoaHoc">
                          @foreach($khoaHoc as $value)
                              <option value="{{$value['KhoaHoc']}}" />
                          @endforeach                        
                      </datalist>
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
                      <select name="heDaoTao" class="custom-select">
                              <option>Đại học</option>
                              <option>Cao Đẳng</option>      
                        </select>
                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Tên lớp:</span>
                      </div>
                        <input type="text" class="form-control" name="tenLop" list="listTenLop">
                        <datalist id="listTenLop">
                          @foreach($lop as $value)
                                    <option value="{{ $value['MaLop'].' – '.$value['TenLop'] }}" />
                          @endforeach
                        </select>

                    </div>

                    <div class="input-group mb-3 input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Tên cố vấn:</span>
                      </div>
                        <input id="inputCoVan" type="text" class="form-control" name="tenCoVan" list="listCoVan" onchange="kiemTraCoVan()">
                        <datalist id="listCoVan">
                          @foreach($coVan as $value)
                                <option value="{{ $value['HoTen_CV'] }}" />
                          @endforeach
                        </datalist>
                        <script>


                        </script> 
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
                  <input type="text" class="form-control" name="maCV" required>
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Họ tên:</span>
                  </div>
                  <input type="text" class="form-control" name="hoTenCV" required>
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Số điện thoại:</span>
                  </div>
                  <input type="tel" class="form-control" name="sdtCV" pattern="[0-9]{10}">
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Email:</span>
                  </div>
                  <input type="email" class="form-control" name="emailCV">
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
                  <input type="text" class="form-control" name="maLop" required>
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Tên lớp:</span>
                  </div>
                  <input type="text" class="form-control" name="tenLop" required>
                </div>

                <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Email lớp:</span>
                  </div>
                  <input type="email" class="form-control" name="emailLop">
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
                <input type="text" class="form-control" name="maBoMon" required>
            </div>

            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                  <span class="input-group-text">Tên bộ môn:</span>
                </div>
                <input type="text" class="form-control" name="tenBoMon" required>
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
