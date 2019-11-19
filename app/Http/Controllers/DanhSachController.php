<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DanhSachModel;


class DanhSachController extends Controller
{
    public function getDanhSach()
    {  
        $kt = new DanhSachModel();
        $data['duLieu'] = $kt->getAllDanhSach();
        return $data;

    }

    public function xemThongTin($maSV)
    {
        $kt = new DanhSachModel();
        $data['duLieu'] = $kt->findMaSV($maSV);
        return view('xem-thong-tin')->with($data);
    }

    public function getCheDoLoc()
    {
        return view('guest.chon-che-do-loc');
    }

    public function getLocDanhSach(Request $rq)
    {
    	
    }

    public function locDanhSach($cheDoLoc, $giaTriLoc)
    {
        $kt = new DanhSachModel();
    	$data['duLieu'] = $kt->locDanhSach($cheDoLoc, $giaTriLoc);
        return $data;
    }

    // public function thongKe()
    // {
    // 	$kt = new DanhSachMienModel();
    // 	$data['duLieu'] = $kt->thongKe();
    // 	return view('thong-ke')->with($data);
    // }

    // public function xemTheoKhoa($khoa)
    // {
    // 	$kt = new DanhSachMienModel();
    // 	$data['duLieu2'] = $kt->locTheoKhoaHoc($khoa);
    // 	return view('thong-ke')->with($data);
    // }

    // public function hinhAnh()
    // {
    // 	$data['duLieu'] = hinhAnhModel::all();
    // 	return view('hinh-anh')->with($data);
    // }

    // public function getDangNhap()
    // {
    //     return view('dang-nhap');
    // }

    // public function postDangNhap(Request $rq)
    // {
    //     if($rq->usename == "admin" && $rq->password == "@2019@")
    //     {
    //         $rq->Session()->put('user',"admin");
    //         return redirect('');
    //     }
    //     else
    //     {
    //         return view('dang-nhap')->with('error','Sai Thông Tin Đăng Nhập');
    //     }
    // }

    // public function getThemThanhVien()
    // {
    //     return view('admin.them-thanh-vien');
    // }

    // public function postThemThanhVien(Request $rq)
    // {
    //     $data = array(
    //                 'tenThanh' => $rq->tenThanh,
    //                 'hoVaTen' => $rq->hoVaTen,
    //                 'ngaySinh' => $rq->ngaySinh,
    //                 'soDienThoai' => $rq->sdt,
    //                 'khoaHoc' => $rq->khoaHoc,
    //                 'nganhHoc' => $rq->nganhHoc,
    //                 'hoDao' => $rq->hoDao,
    //                 'maLop' => $rq->maLop,
    //                 'mssv' => $rq->mssv,
    //                 'tinhTrang' => $rq->tinhTrang,
    //                 'doi' => $rq->doi,
    //                 'ghiChu' => $rq->ghiChu,
    //             );
    //     $kt = new DanhSachMienModel();
    //     $kq = $kt->kiemTraTonTai($data['hoVaTen']);
    //     if($kq == 0)
    //     {
    //         //$thanhVien = new DanhSachMienModel();
    //         $kt->tenThanh = $data['tenThanh'];
    //         $kt->hoVaTen = $data['hoVaTen'];
    //         $kt->ngaySinh = $data['ngaySinh'];
    //         $kt->soDienThoai = $data['soDienThoai'];
    //         $kt->khoaHoc = $data['khoaHoc'];
    //         $kt->nganhHoc = $data['nganhHoc'];
    //         $kt->hoDao = $data['hoDao'];
    //         $kt->maLop = $data['maLop'];
    //         $kt->mssv = $data['mssv'];
    //         $kt->tinhTrang = $data['tinhTrang'];
    //         $kt->doi = $data['doi'];
    //         $kt->ghiChu = $data['ghiChu'];
    //         $kt->save();
    //         return view('admin.them-thanh-vien')->with('info', 'Thêm Thành Công');
    //     }
    //     else
    //     {
    //         return view('admin.them-thanh-vien')->with('info', 'Thành Viên Đã Tồn Tại');
    //     }
        
    // }

    // public function cuu($id)
    // {
    //     $kt = DanhSachMienModel::find($id);
    //     $kt->tinhTrang = 'Cựu';
    //     $kt->save();
    //     return redirect('danh-sach-mien');
    // }

    // public function getSuaThanhVien($id)
    // {
    //     $data['duLieu'] = DanhSachMienModel::find($id)->get();
    //     return view('admin.sua-thanh-vien')->with($data);
    // }

    // public function postSuaThanhVien(Request $rq, $id)
    // {
    //     $data = array(
    //                 'tenThanh' => $rq->tenThanh,
    //                 'hoVaTen' => $rq->hoVaTen,
    //                 'ngaySinh' => $rq->ngaySinh,
    //                 'soDienThoai' => $rq->sdt,
    //                 'khoaHoc' => $rq->khoaHoc,
    //                 'nganhHoc' => $rq->nganhHoc,
    //                 'hoDao' => $rq->hoDao,
    //                 'maLop' => $rq->maLop,
    //                 'mssv' => $rq->mssv,
    //                 'tinhTrang' => $rq->tinhTrang,
    //                 'doi' => $rq->doi,
    //                 'ghiChu' => $rq->ghiChu,
    //             );
    //     $kt = DanhSachMienModel::find($id);
         
    //         $kt->tenThanh = $data['tenThanh'];
    //         $kt->hoVaTen = $data['hoVaTen'];
    //         $kt->ngaySinh = $data['ngaySinh'];
    //         $kt->soDienThoai = $data['soDienThoai'];
    //         $kt->khoaHoc = $data['khoaHoc'];
    //         $kt->nganhHoc = $data['nganhHoc'];
    //         $kt->hoDao = $data['hoDao'];
    //         $kt->maLop = $data['maLop'];
    //         $kt->mssv = $data['mssv'];
    //         $kt->tinhTrang = $data['tinhTrang'];
    //         $kt->doi = $data['doi'];
    //         $kt->ghiChu = $data['ghiChu'];
    //         $kt->save();
           
    //         return redirect('danh-sach-mien');
    // }

    // public function getThemHinhAnh()
    // {
    //     return view('admin.them-hinh-anh');
    // }

    // public function postThemHinhAnh(Request $rq)
    // {
        
    //     $kt = new hinhAnhModel();
    //     $kt->noiDung = $rq->noiDung;
    //     $kt->src = $rq->src;
    //     $kt->save();
    //     return view('admin.them-hinh-anh')->with('info', 'Thêm Thành Công');
    // }

    // public function DangXuat(request $rq)
    // {
    //     $rq->Session()->flush();
    //     return redirect('');
    // }
}
