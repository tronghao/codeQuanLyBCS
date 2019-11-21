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
  <link rel="stylesheet" href="{{ asset('public/css/style2.css')}}" />
      
  
</head>

<body>
        <div class="chu">
	 		<img src="{{ asset('public/img/bg.png') }}" style="width:100%;"/>
            <h3> Thông tin ban cán sự</h3>
		</div>
        
         <div class="dropdown">
                     <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Lọc danh sách
                     </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_BoMon">Theo bộ môn</a>
                      
                      	<div class="modal" id="modal_BoMon">
                            <div class="modal-dialog">
                              <div class="modal-content">
                              
                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Modal Heading</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                  Modal body..
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                              </div>
                            </div>
                          </div>
  
    			
                      
                      <a class="dropdown-item" href="#">Theo khóa</a>
                      <a class="dropdown-item" href="#">Theo cố vấn</a>
                    </div>
          
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Đăng nhập</button>
                                               <!-- The Modal -->
                        <div class="modal" id="myModal">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            
                              <!-- Modal body -->
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-10 offset-md-1">
                                  <h2 style="padding: 10px auto">Ðăng Nhập</h2> 
                                  <form class="box" action="{{ asset('index.php/dang-nhap') }}" method="post">
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
                                        <button type="submit" class="btn btn-info">Đăng Nhập</button> &nbsp; &nbsp;
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
		@yield('noidung')
         

      
    
    </div>
</body>
</html>