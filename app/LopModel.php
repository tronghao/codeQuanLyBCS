<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BomonModel;
use App\CoVanModel;

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

    public function tonTai($maLop)
    {
    	$kt = new LopModel();
    	$kq = $kt->where('MaLop', '=', $maLop)->get()->count();
    	if($kq>0)
    		return true;
    	else return false;
    }

    public function themLop($rq)
    {
			$kt = new LopModel();
			$bm = new BomonModel();
			$cv = new CoVanModel();
			if($kt->tonTai($rq->maLop))
			{
				return false;
			}
			else
			{
				$kt->MaLop = $rq->maLop;
				$kt->TenLop = $rq->tenLop;
				$kt->EmailLop = $rq->emailLop;
				$kt->MaBoMon = $bm->getMaBoMonQuaName($rq->tenBoMon);
				$kt->MaCV = $cv->getMaCoVanQuaName($rq->tenCoVan);
				$kt->save();
				return true;
			}
    }
}
