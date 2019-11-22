<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\DanhSachController;

class GuestController extends Controller
{
    public function getTrangChu($id = null)
    {
        $ds = new DanhSachController();
        $data = $ds->getDanhSach();
        if($id == null)
        {
            return view('guest.trang-chu')->with(compact('data'));
        }
        else if($id == 1)
        {
            $info = "Tên tài khoản hoặc mật khẩu không đúng!";
            return view('guest.trang-chu')->with(compact('info', 'data'));
        }
    	
    }

    public function locDanhSach(Request $rq)
    {
    	$ds = new DanhSachController();
    	$err = false;
    	if($rq->cheDoLoc == "Bộ Môn")
    	{
    		if($rq->giaTriLoc == "--Chọn Bộ Môn--")
    		{
    			$err = true;
    		}
    		else
    		{
    			$data = $ds->locDanhSach($rq->cheDoLoc, $rq->giaTriLoc);
    		}
    	}
    	else if($rq->cheDoLoc == "Lớp")
    	{
    		if($rq->giaTriLoc == "--Chọn Bộ Môn--")
    		{
    			$err = true;
    		}
    		else
    		{
    			$data = $ds->locDanhSach($rq->cheDoLoc, $rq->giaTriLoc);
    		}
    	}
    	else if($rq->cheDoLoc == "Khóa Học")
    	{
    		if($rq->giaTriLoc == "--Chọn Bộ Môn--")
    		{
    			$err = true;
    		}
    		else
    		{
    			$data = $ds->locDanhSach($rq->cheDoLoc, $rq->giaTriLoc);
    		}
    	}else if($rq->cheDoLoc == "Cố Vấn Học Tập")
    	{
    		if($rq->giaTriLoc == "--Chọn Bộ Môn--")
    		{
    			$err = true;
    		}
    		else
    		{
    			$data = $ds->locDanhSach($rq->cheDoLoc, $rq->giaTriLoc);
    		}
    	}

    	if($err == true)
    	{
    		return redirect('');
    	}
    	else
    	{
    		return view('guest.ket-qua-loc')->with($data);
    	}
    }
}
