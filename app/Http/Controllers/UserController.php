<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserModel;

class UserController extends Controller
{
    public function dangNhap(Requests $rq)
    {
    	$kt = new UserModel();
		$kq = $kt->tonTaiUser($rq->tenDangNhap, $rq->matKhau);
		if($kq == true)
		{
			return view('indes.php/admin.trang-chu');
		}
		else
		{
			return view('index.php/guest.trang-chu')->with('info', 'Tên tài khoản hoặc mật khẩu không đúng!');
		}
    }
}
