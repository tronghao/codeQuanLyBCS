<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhSachMienModel extends Model
{
    protected $table = 'danhsachmien';
    protected $fillable = ['id'];
    public $timestamps = false;

    public function getAll()
    {
    	$kt = new DanhSachMienModel();
    	$kq = $kt->where('tinhTrang','!=', "Cựu")->get()->toArray();
    	return $kq;
    }

    public function locTheoDoi($doi)
    {
    	$kt = new DanhSachMienModel();
    	$kq = $kt->where('doi','=',$doi)->get()->toArray();
    	return $kq;
    }

    public function locTheoCuuTNTT()
    {
    	$kt = new DanhSachMienModel();
    	$kq = $kt->where('tinhTrang','=','Cựu')->get()->toArray();
    	return $kq;
    }

    public function locTheoKhoaHoc($kHoc)
    {
    	$kt = new DanhSachMienModel();
    	$kq = $kt->where('khoaHoc','=',$kHoc)->get()->toArray();
    	return $kq;
    }

    public function thongKe()
    {
    	$kt = new DanhSachMienModel();
    	$kq = $kt->groupBy('khoaHoc')->where('tinhTrang','!=', "Cựu")->selectRaw('count(*) as soLuong, khoaHoc')->get()->toArray();
    	return $kq;
    }

    public function kiemTraTonTai($hoTen)
    {
        $kt = new DanhSachMienModel();
        $kq = $kt->where('hoVaTen','=',$hoTen)->count();
        return $kq;
    }

    
}
