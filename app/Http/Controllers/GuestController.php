<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\DanhSachController;
use App\BomonModel;

class GuestController extends Controller
{
    public function getTrangChu($id = null)
    {
        $ds = new DanhSachController();
        $data = $ds->getDanhSach();

        $bm = new BomonModel(); 
        $boMon = $bm->getAllBoMon();
        // $khoaHoc = ;
        // $coVan = ;
        // $lop = ;
        if($id == null)
        {
            return view('guest.trang-chu')->with(compact('data', 'boMon'));
        }
        else if($id == 1)
        {
            $info = "Tên tài khoản hoặc mật khẩu không đúng!";
            return view('guest.trang-chu')->with(compact('info', 'data', 'boMon'));
        }
        else if($id == 2)
        {
            $info = "Bạn cần đăng nhập!";
            return view('guest.trang-chu')->with(compact('info', 'data', 'boMon'));
        }
    }

    public function locDanhSach($cheDo, Request $rq)
    {
    	$ds = new DanhSachController();
        $dataLoc = $ds->locDanhSach($cheDo, $rq->value);
    	return view('guest.trang-chu')->with(compact('dataLoc'));
    }
}
