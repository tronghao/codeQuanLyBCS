<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DanhSachController;
use App\BomonModel;
use App\LopModel;
use App\KhoaHocModel;
use App\CoVanModel;
use App\SinhVienModel;

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
        else if($id == 3)
        {
            $info = "Thêm thành công!";
            return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info'));
        }
        else if($id == 4)
        {
            $info = "Lỗi thêm dữ liệu, dữ liệu bị trùng!";
            return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info'));
        }
        else if($id == 5)
        {
            $info = "Đã cập nhật thông tin!";
            return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info'));
        }
        else if($id == 6)
        {
            $info = "Xóa thành công!";
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

    public function themDuLieu($cheDo, Request $rq)
    {
        $ds = new DanhSachController();
        $kq = $ds->themDuLieu($cheDo, $rq);
        if($kq == true)
        {
            return redirect('admin/home/3');
        }
        else
        {
            return redirect('admin/home/4');
        }
    }

    public function xoaSinhVien($maSV)
    {
    	$sv = new SinhVienModel();
    	$sv->xoaSinhVien($maSV);
    	return redirect('admin/home/6');
    }

    public function suaSinhVien($maSV, Request $rq)
    {
    	$sv = new SinhVienModel();
    	$sv->suaSinhVien($maSV, $rq);
    	return redirect('admin/home/5');
    }

    public function quanLyBoMon($id = null)
    {
    	$kt = new BomonModel();
    	$data = $kt->getAllBoMon();

        $bm = new BomonModel(); 
        $boMon = $bm->getAllBoMon();

        $lp = new LopModel(); 
        $lop = $lp->getAllLop();

        $kh = new KhoaHocModel(); 
        $khoaHoc = $kh->getAllKhoaHoc();

        $cv = new CoVanModel(); 
        $coVan = $cv->getAllCoVan();
        if($id == null)
    	   return view('admin.quan-ly-bo-mon')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan'));
        else if($id == 1)
        {
            $info = "Cập nhật thành công!";
            return view('admin.quan-ly-bo-mon')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info'));
        }
        else if($id == 2)
        {
            $info = "Xóa Thành Công!";
            return view('admin.quan-ly-bo-mon')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info'));
        }
    }

    public function xoaBoMon($maBM)
    {
        $bm = new BomonModel();
        $bm->xoaBoMon($maBM);
        return redirect('admin/quan-ly/bomon/2');
    }

    public function suaBoMon($maBM, Request $rq)
    {
        $bm = new BomonModel();
        $bm->suaBoMon($maBM, $rq);
        return redirect('admin/quan-ly/bomon/1');
    }

    public function quanLyLop($id = null)
    {
        $kt = new LopModel();
        $data = $kt->getAllLopAndInfo();

        $bm = new BomonModel(); 
        $boMon = $bm->getAllBoMon();

        $lp = new LopModel(); 
        $lop = $lp->getAllLop();

        $kh = new KhoaHocModel(); 
        $khoaHoc = $kh->getAllKhoaHoc();

        $cv = new CoVanModel(); 
        $coVan = $cv->getAllCoVan();
        if($id == null)
           return view('admin.quan-ly-lop')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan'));
        else if($id == 1)
        {
            $info = "Cập nhật thành công!";
            return view('admin.quan-ly-lop')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info'));
        }
        else if($id == 2)
        {
            $info = "Xóa Thành Công!";
            return view('admin.quan-ly-lop')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info'));
        }
    }

    public function xoaLop($maLop)
    {
        $bm = new LopModel();
        $bm->xoaLop($maLop);
        return redirect('admin/quan-ly/lop/2');
    }

    public function suaLop($maLop, Request $rq)
    {
        $bm = new LopModel();
        $bm->suaLop($maLop, $rq);
        return redirect('admin/quan-ly/lop/1');
    }

    public function quanLyCoVan($id = null)
    {
        $kt = new CoVanModel();
        $data = $kt->getAllCoVanAndInfo();

        $bm = new BomonModel(); 
        $boMon = $bm->getAllBoMon();

        $lp = new LopModel(); 
        $lop = $lp->getAllLop();

        $kh = new KhoaHocModel(); 
        $khoaHoc = $kh->getAllKhoaHoc();

        $cv = new CoVanModel(); 
        $coVan = $cv->getAllCoVan();
        if($id == null)
           return view('admin.quan-ly-co-van')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan'));
        else if($id == 1)
        {
            $info = "Cập nhật thành công!";
            return view('admin.quan-ly-co-van')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info'));
        }
        else if($id == 2)
        {
            $info = "Xóa Thành Công!";
            return view('admin.quan-ly-co-van')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info'));
        }
    }

    public function xoaCoVan($maCV)
    {
        $cv = new CoVanModel();
        $cv->xoaCoVan($maCV);
        return redirect('admin/quan-ly/cvht/2');
    }

    public function suaCoVan($maCV, Request $rq)
    {
        $cv = new CoVanModel();
        $cv->suaCoVan($maCV, $rq);
        return redirect('admin/quan-ly/cvht/1');
    }
}
