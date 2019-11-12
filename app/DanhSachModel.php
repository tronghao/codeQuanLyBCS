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
    	$kq = $kt->join('lop', 'lop.MaLop', '=',  'sinhvien.MaLop')->join('covanhoctap', 'covanhoctap.MaCV', '=', 'sinhvien.MaCV')->get()->toArray();
    	return $kq;
    }

    public function findMaSV($maSV)
    {
    	$kt = new DanhSachModel();
    	$kq = $kt->where('MaSV','=',$maSV)->get()->toArray();
    	return $kq;
    }
}
