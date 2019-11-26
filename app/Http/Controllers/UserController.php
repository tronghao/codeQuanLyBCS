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
			$rq->Session()->put('user','admin');
			return redirect('admin/home');
		}
		else
		{
			//$info = 'Tên tài khoản hoặc mật khẩu không đúng!';
			return redirect('/1');
		}
    }

    public function doiMatKhau(request $rq)
    {
    	$kt = new UserModel();
    	if($kt->tonTaiUser($rq->session()->get('user'), $rq->matKhauCu))
    	{
    		//update mat khau
    		$kt->updateMatKhau($rq->session()->get('user'), $rq->matKhauMoi);
    		return redirect('admin/home/1');
    	}
    	else
    	{
    		return redirect('admin/home/2');
    	}
    }

    public function DangXuat(request $rq)
    {
    	$rq->Session()->flush();
    	return redirect('');
    }
}
