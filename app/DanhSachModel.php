<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhSachModel extends Model
{
    protected $table = 'sinhvien';
    protected $fillable = ['id'];
    public $timestamps = false;

    public function getAllDanhSach()
    {
    	$kt = new DanhSachModel();
    	$kq = $kt->join('lop', 'lop.MaLop', '=',  'sinhvien.MaLop')->join('covanhoctap', 'covanhoctap.MaCV', '=', 'sinhvien.MaCV')->join('bomon', 'bomon.MaBoMon', '=', 'lop.MaBoMon')->get()->toArray();
    	return $kq;
    }

    public function findMaSV($maSV)
    {
    	$kt = new DanhSachModel();
    	$kq = $kt->where('MaSV','=',$maSV)->get()->toArray();
    	return $kq;
    }

    public function locDanhSach($cheDoLoc, $giaTriLoc)
    {
        $truong = '';
        if($cheDoLoc == "Bộ Môn")
            $truong = 'TenBoMon';
        else if($cheDoLoc == "Lớp")
            $truong = 'TenLop';
        else if($cheDoLoc == "Khóa Học")
            $truong = 'KhoaHoc';
        else if($cheDoLoc == "Cố Vấn Học Tập")
            $truong = 'HoTen_CV';
        
        $kt = new DanhSachModel();
        $kq = $kt->join('lop', 'lop.MaLop', '=',  'sinhvien.MaLop')->join('covanhoctap', 'covanhoctap.MaCV', '=', 'sinhvien.MaCV')->join('bomon', 'bomon.MaBoMon', '=', 'lop.MaBoMon')->where($truong , '=', $giaTriLoc)->get()->toArray();
        return $kq;
    }
}
