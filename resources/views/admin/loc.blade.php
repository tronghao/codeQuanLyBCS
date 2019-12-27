
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
