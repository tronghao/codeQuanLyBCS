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

    public function tonTai($maBm)
    {
    	$kt = new BomonModel();
    	$kq = $kt->where('MaBoMon', '=', $maBm)->get()->count();
    	if($kq>0)
    		return true;
    	else return false;
    }

    public function themBoMon($rq)
    {
			$kt = new BomonModel();
			if($kt->tonTai($rq->maBoMon))
			{
				return false;
			}
			else
			{
				$kt->MaBoMon = $rq->maBoMon;
				$kt->TenBoMon = $rq->tenBoMon;
				$kt->save();
				return true;
			}
    }

    public function getMaBoMonQuaName($name)
    {
    	$kt = new BomonModel();
    	$kq = $kt->where('TenBoMon', '=', $name)->get()->toArray();
    	return $kq[0]['MaBoMon'];
    }
}
