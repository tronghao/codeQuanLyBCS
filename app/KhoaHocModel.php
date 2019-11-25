<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhoaHocModel extends Model
{
    protected $table = 'sinhvien';
    protected $fillable = ['id'];
    public $timestamps = false;

    public function getAllKhoaHoc()
    {
    	$kt = new KhoaHocModel();
    	$kq = $kt->select('KhoaHoc')->distinct()->get()->toArray();
    	return $kq;
    }
}
