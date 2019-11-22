<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BomonModel extends Model
{
    protected $table = 'bomon';
    protected $fillable = ['id'];
    public $timestamps = false;

    public function getAllBoMon()
    {
    	$kt = new BomonModel();
    	$kq = $kt->select('TenBoMon')->get()->toArray();
    	return $kq;
    }
}
