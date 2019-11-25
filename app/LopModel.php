<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopModel extends Model
{
    protected $table = 'lop';
    protected $fillable = ['id'];
    public $timestamps = false;

    public function getAllLop()
    {
    	$kt = new LopModel();
    	$kq = $kt->select('TenLop')->get()->toArray();
    	return $kq;
    }
}
