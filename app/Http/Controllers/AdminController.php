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
    public function getTrangChu()
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
        return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan'));
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
