<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\DanhSachController;
use App\BomonModel;
use App\LopModel;
use App\KhoaHocModel;
use App\CoVanModel;
use App\DanhSachModel;

class GuestController extends Controller
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
        // $khoaHoc = ;
        // $coVan = ;
        // $lop = ;
        if($id == null)
        {
            return view('guest.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan'));
        }
        else if($id == 1)
        {
            $info = "Tên tài khoản hoặc mật khẩu không đúng!";
            return view('guest.trang-chu')->with(compact('info', 'data', 'boMon', 'lop', 'khoaHoc', 'coVan'));
        }
        else if($id == 2)
        {
            $info = "Bạn cần đăng nhập!";
            return view('guest.trang-chu')->with(compact('info', 'data', 'boMon', 'lop', 'khoaHoc', 'coVan'));
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

    	return view('guest.trang-chu')->with(compact('dataLoc', 'boMon', 'lop', 'khoaHoc', 'coVan'));
    }

    public function timKiem(Request $rq)
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

        $ds = new DanhSachModel();
        $kqSearch = $ds->findSV($rq->search); 
        return view('guest.search')->with(compact('boMon','lop', 'khoaHoc', 'coVan', 'kqSearch'));
    }
}
