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
use App\DanhSachModel;

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

        $sv = new SinhVienModel();
        $chuyenNganh = $sv->getAllChuyenNganh();

        if($id == null)
        {
        	return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'chuyenNganh'));
        }else if($id == 1)
        {
        	$info = "Đổi mật khẩu thành công";
        	return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
        }else if($id == 2)
        {
        	$info = "Đổi mật khẩu không thành công, mật khẩu cũ không khớp!";
        	return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
        }
        else if($id == 3)
        {
            $info = "Thêm thành công!";
            return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
        }
        else if($id == 4)
        {
            $info = "Lỗi thêm dữ liệu, dữ liệu bị trùng!";
            return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
        }
        else if($id == 5)
        {
            $info = "Đã cập nhật thông tin!";
            return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
        }
        else if($id == 6)
        {
            $info = "Xóa thành công!";
            return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
        }
        else if($id == 7)
        {
            $info = "Lỗi thêm sinh viên - Tên cố vấn không tồn tại!";
            return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
        }
        else if($id == 8)
        {
            $info = "Lỗi thêm sinh viên - Mã lớp và tên lớp không tồn tại!";
            return view('admin.trang-chu')->with(compact('data', 'boMon', 'lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
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

        $sv = new SinhVienModel();
        $chuyenNganh = $sv->getAllChuyenNganh();
    	return view('admin.trang-chu')->with(compact('dataLoc', 'boMon', 'lop', 'khoaHoc', 'coVan', 'chuyenNganh'));
    }

    public function themDuLieu($cheDo, Request $rq)
    {
        if($cheDo == "sinhvien")
        {
           $cv = new CoVanModel();
           if($cv->tonTaiTheoTen($rq->tenCoVan) == false)
                return redirect('admin/home/7');
            $lop = new LopModel();
            $gtLop = explode(' – ', $rq->tenLop);
            if(count($gtLop) < 2)
                return redirect("admin/home/8");
            if($lop->tonTaiTheoTen($gtLop[1], $gtLop[0]) == false)
                return redirect('admin/home/8');
        }
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

        $sv = new SinhVienModel();
        $chuyenNganh = $sv->getAllChuyenNganh();
        if($id == null)
    	   return view('admin.quan-ly-bo-mon')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'chuyenNganh'));
        else if($id == 1)
        {
            $info = "Cập nhật thành công!";
            return view('admin.quan-ly-bo-mon')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
        }
        else if($id == 2)
        {
            $info = "Xóa Thành Công!";
            return view('admin.quan-ly-bo-mon')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
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

        $sv = new SinhVienModel();
        $chuyenNganh = $sv->getAllChuyenNganh();
        if($id == null)
           return view('admin.quan-ly-lop')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'chuyenNganh'));
        else if($id == 1)
        {
            $info = "Cập nhật thành công!";
            return view('admin.quan-ly-lop')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
        }
        else if($id == 2)
        {
            $info = "Xóa Thành Công!";
            return view('admin.quan-ly-lop')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
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

        $sv = new SinhVienModel();
        $chuyenNganh = $sv->getAllChuyenNganh();
        if($id == null)
           return view('admin.quan-ly-co-van')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'chuyenNganh'));
        else if($id == 1)
        {
            $info = "Cập nhật thành công!";
            return view('admin.quan-ly-co-van')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
        }
        else if($id == 2)
        {
            $info = "Xóa Thành Công!";
            return view('admin.quan-ly-co-van')->with(compact('data', 'boMon','lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh'));
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

    public function timKiem(Request $rq)
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

        $sv = new SinhVienModel();
        $chuyenNganh = $sv->getAllChuyenNganh();
        $ds = new DanhSachModel();
        $kqSearch = $ds->findSV($rq->search); 
        return view('admin.search')->with(compact('boMon','lop', 'khoaHoc', 'coVan', 'info', 'chuyenNganh', 'kqSearch'));
    }
}
