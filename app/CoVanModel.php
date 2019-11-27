<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BomonModel;

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

    public function getMaCoVanQuaName($name)
    {
    	$kt = new CoVanModel();
    	$kq = $kt->where('HoTen_CV', '=', $name)->get()->toArray();
    	return $kq[0]['MaCV'];
    }

    public function tonTai($maCV)
    {
    	$kt = new CoVanModel();
    	$kq = $kt->where('MaCV', '=', $maCV)->get()->count();
    	if($kq>0)
    		return true;
    	else return false;
    }

    public function themCoVan($rq)
    {
			$kt = new CoVanModel();
			$bm = new BomonModel();
			if($kt->tonTai($rq->maCV))
			{
				return false;
			}
			else
			{
				$kt->MaCV = $rq->maCV;
				$kt->HoTen_CV = $rq->hoTenCV;
				$kt->Email_CV = $rq->emailCV;
				$kt->SDT_CV = $rq->sdtCV;
				$kt->MaBoMon = $bm->getMaBoMonQuaName($rq->tenBoMon);
				$kt->save();
				return true;
			}
    }
}
