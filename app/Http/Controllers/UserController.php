<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\UserModel;

class UserController extends Controller
{
    public function dangNhap(Request $rq)
    {
    	$ds = new DanhSachController();
    	$duLieu = $ds->getDanhSach();

    	$kt = new UserModel();
		$kq = $kt->tonTaiUser($rq->tenDangNhap, $rq->matKhau);
		if($kq == true)
		{
			return view('admin.trang-chu');
		}
		else
		{
			//$info = 'Tên tài khoản hoặc mật khẩu không đúng!';
			return redirect('/1');
		}
    }
}
