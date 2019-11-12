<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản Lý Ban Cán Sự - DHTV</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css')}}">
<script src="{{ asset('public/jquery/jquery.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
</head>

<body>
	
	<div id="container-fluid">
		<header class="container" id="headbody">
			<nav class="navbar navbar-default" role="navigation">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">

					<ul class="nav navbar-nav navbar-right" id="menutren"> 
						@yield('home') 
						<!-- <li><a href="{{ asset('/') }}">Home</a></li>  -->     					
						<li><a href="{{ asset('danh-sach') }}">Danh Sách</a></li>
						<li><a href="{{ asset('che-do-loc') }}">Lọc Danh Sách</a></li>
						@if(Session::has('user'))
							<li><a href="{{ asset('them-thanh-vien') }}">Thêm thành viên</a></li>
							<li><a href="{{ asset('them-hinh-anh') }}">Thêm hình ảnh</a></li>
							<li><a href="{{ asset('dang-xuat') }}">Đăng Xuất</a></li>
						@else
							<li><a href="{{ asset('dang-nhap') }}">Đăng Nhập</a></li>
						@endif
											
					</ul>
				</div><!-- /.navbar-collapse -->

			</nav>

		</header>
	</div>
	@yield('noidung')
	
</body>
</html>