<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BomonModel;
use App\CoVanModel;

class LopModel extends Model
{
    protected $table = 'lop';
    protected $fillable = ['MaLop'];
    public $timestamps = false;
    protected $primaryKey = "MaLop";
    protected $keyType = "string";

    public function getAllLop()
    {
    	$kt = new LopModel();
    	$kq = $kt->select('MaLop' ,'TenLop')->get()->toArray();
    	return $kq;
    }

    public function getAllLopAndInfo()
    {
        $kt = new LopModel();
        $kq = $kt->join('bomon', 'bomon.MaBoMon', '=', 'lop.MaBoMon')->join('covanhoctap', 'covanhoctap.MaCV', '=', 'lop.MaCV')->get()->toArray();
        return $kq;
    }

    public function getAllThongTinLop()
    {
        $kt = new LopModel();
        $kq = $kt->join('bomon', 'bomon.MaBoMon', '=', 'lop.MaBoMon')->join('covanhoctap', 'covanhoctap.MaCV', '=', 'lop.MaCV')->select('MaLop', 'TenLop', 'EmailLop', 'HoTen_CV', 'SDT_CV', 'Email_CV', 'TenBoMon')->get()->toArray();
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

    public function tonTaiTheoTen($tenLop, $maLop)
    {
        $kt = new LopModel();
        $kq = $kt->whereRaw('TenLop = ? and MaLop = ?', [$tenLop, $maLop])->get()->count();
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

    public function getMaLopQuaName($name)
    {
    	$kt = new LopModel();
    	$kq = $kt->where('TenLop', '=', $name)->get()->toArray();
    	return $kq[0]['MaLop'];
    }

    public function xoaLop($maLop)
    {
        $kt = new LopModel();
        $kt->where('MaLop', '=', $maLop)->delete();
    }

    public function suaLop($maLop, $rq)
    {
        $bm = new BomonModel();
        $cv = new CoVanModel();
        $kt = LopModel::where('MaLop', '=', $maLop)->first();
        $kt->TenLop = $rq->tenLop;
        $kt->EmailLop = $rq->emailLop;
        $kt->MaBoMon = $bm->getMaBoMonQuaName($rq->tenBoMon);
        $kt->MaCV = $cv->getMaCoVanQuaName($rq->tenCoVan);
        $kt->save();
    }
}
