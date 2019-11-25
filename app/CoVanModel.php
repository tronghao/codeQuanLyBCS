<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoVanModel extends Model
{
    protected $table = 'CoVanHocTap';
    protected $fillable = ['id'];
    public $timestamps = false;

    public function getAllCoVan()
    {
    	$kt = new CoVanModel();
    	$kq = $kt->select('HoTen_CV')->get()->toArray();
    	return $kq;
    }
}
