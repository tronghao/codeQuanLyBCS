<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CoVanModel;
use App\LopModel;

class SinhVienModel extends Model
{
    protected $table = 'sinhvien';
    protected $fillable = ['MaSV'];
    public $timestamps = false;
    public $primaryKey = 'MaSV';
    protected $keyType = 'string';

    public function tonTai($maSV)
    {
    	$kt = new SinhVienModel();
    	$kq = $kt->where('MaSV', '=', $maSV)->get()->count();
    	if($kq>0)
    		return true;
    	else return false;
    }

    public function themSinhVien($rq)
    {
		$kt = new SinhVienModel();
		$lp = new LopModel();
		$cv = new CoVanModel();
		if($kt->tonTai($rq->maSV))
		{
			return false;
		}
		else
		{
			$kt->MaSV = $rq->maSV;
            $kt->HoTen_SV = $rq->hoTenSV;
            $kt->SDT_SV = $rq->sdtSV;
            $kt->Email_SV = $rq->emailSV;
            $kt->ChucVu_SV = $rq->chucVuSV;
            $kt->ChuyenNganh = $rq->chuyenNganh;
            $kt->KhoaHoc = $rq->khoaHoc;
            $kt->NamSinh = $rq->ngaySinh;
            $kt->NoiSinh = $rq->noiSinh;
            $kt->HeDaoTao = $rq->heDaoTao;
            $kt->MaLop = $lp->getMaLopQuaName($rq->tenLop);
            $kt->MaCV = $cv->getMaCoVanQuaName($rq->tenCoVan);
			$kt->save();
			return true;
		}
    }

    public function xoaSinhVien($maSV)
    {
    	$kt = new SinhVienModel();
    	$kt->where('MaSV', '=', $maSV)->delete();
    }

    public function suaSinhVien($maSV, $rq)
    {
    	$lp = new LopModel();
		$cv = new CoVanModel();

    	$kt = SinhVienModel::where('MaSV', '=', $maSV)->first();
        $kt->HoTen_SV = $rq->hoTenSV;
        $kt->SDT_SV = $rq->sdtSV;
        $kt->Email_SV = $rq->emailSV;
        $kt->ChucVu_SV = $rq->chucVuSV;
        $kt->ChuyenNganh = $rq->chuyenNganh;
        $kt->KhoaHoc = $rq->khoaHoc;
        $kt->NamSinh = $rq->ngaySinh;
        $kt->NoiSinh = $rq->noiSinh;
        $kt->HeDaoTao = $rq->heDaoTao;
        $kt->MaLop = $lp->getMaLopQuaName($rq->tenLop);
        $kt->MaCV = $cv->getMaCoVanQuaName($rq->tenCoVan);
		$kt->save();
    }
}
