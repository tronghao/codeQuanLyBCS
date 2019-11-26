<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DanhSachController;
use App\BomonModel;
use App\LopModel;
use App\KhoaHocModel;
use App\CoVanModel;

class AdminController extends Controller
{
    public function getTrangChu($id = null)
    {
    	$ds = new DanhSachController();
        $data = $ds->getDanhSach();

        $bm = new BomonModel(); 
        $boMon = $bm->getAllBoMon();

        $lp = new LopModel(); 
        $lop = $lp->getAllLop();

        $kh = new KhoaHocModel(); 
        $khoaHoc = $kh->getAllKhoaHoc();

        $cv = new CoVanModel(); 
        $coVan = $cv->getAllCoVan();

        if($id == null)
        {
        	return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan'));
        }else if($id == 1)
        {
        	$info = "Đổi mật khẩu thành công";
        	return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info'));
        }else if($id == 2)
        {
        	$info = "Đổi mật khẩu không thành công, mật khẩu cũ không khớp!";
        	return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info'));
        }
        
    }

    public function locDanhSach($cheDo, Request $rq)
    {
    	$ds = new DanhSachController();
        $dataLoc = $ds->locDanhSach($cheDo, $rq->value);

        $bm = new BomonModel(); 
        $boMon = $bm->getAllBoMon();

        $lp = new LopModel(); 
        $lop = $lp->getAllLop();

        $kh = new KhoaHocModel(); 
        $khoaHoc = $kh->getAllKhoaHoc();

        $cv = new CoVanModel(); 
        $coVan = $cv->getAllCoVan();

    	return view('admin.trang-chu')->with(compact('dataLoc', 'boMon', 'lop', 'khoaHoc', 'coVan'));
    }
}
