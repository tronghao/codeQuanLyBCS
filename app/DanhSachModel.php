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
    	$kq = $kt->join('lop', 'lop.MaLop', '=',  'sinhvien.MaLop')->join('covanhoctap', 'covanhoctap.MaCV', '=', 'sinhvien.MaCV')->join('bomon', 'bomon.MaBoMon', '=', 'lop.MaBoMon')->get()->toArray();
    	return $kq;
    }

    public function locDanhSach($cheDoLoc, $giaTriLoc)
    {
        $truong = '';
        if($cheDoLoc == "bomon")
            $truong = 'TenBoMon';
        else if($cheDoLoc == "lop"){
            $truong = 'TenLop';
            $gt = explode(" – ", $giaTriLoc);
            $kt = new DanhSachModel();
            $kq = $kt->join('lop', 'lop.MaLop', '=',  'sinhvien.MaLop')->join('covanhoctap', 'covanhoctap.MaCV', '=', 'sinhvien.MaCV')->join('bomon', 'bomon.MaBoMon', '=', 'lop.MaBoMon')->whereRaw($truong." = ? and lop.MaLop = ?" ,[$gt[1], $gt[0]])->get()->toArray();
            return $kq;
        }
        else if($cheDoLoc == "khoahoc")
            $truong = 'KhoaHoc';
        else if($cheDoLoc == "cvht")
            $truong = 'HoTen_CV';
        
        $kt = new DanhSachModel();
        $kq = $kt->join('lop', 'lop.MaLop', '=',  'sinhvien.MaLop')->join('covanhoctap', 'covanhoctap.MaCV', '=', 'sinhvien.MaCV')->join('bomon', 'bomon.MaBoMon', '=', 'lop.MaBoMon')->where($truong , '=', $giaTriLoc)->get()->toArray();
        return $kq;
    }

    public function themDuLieu($cheDo, $rq)
    {
        if($cheDo == "bomon")
        {
            $bm = new BomonModel();
            $kq = $bm->themBoMon($rq);
        }
        else if($cheDo == 'lop')
        {
            $lp = new LopModel();
            $kq = $lp->themLop($rq);
        }else if($cheDo == 'cvht')
        {
            $lp = new CoVanModel();
            $kq = $lp->themCoVan($rq);
        }else if($cheDo == 'sinhvien')
        {
            $sv = new SinhVienModel();
            $kq = $sv->themSinhVien($rq);
        }

        return $kq;
    }

    public function findSV($find)
    {
        $sv = new DanhSachModel();
        $kq = $sv->where('HoTen_SV', 'like', "%$find%")->join('lop', 'lop.MaLop', '=',  'sinhvien.MaLop')->join('covanhoctap', 'covanhoctap.MaCV', '=', 'sinhvien.MaCV')->join('bomon', 'bomon.MaBoMon', '=', 'lop.MaBoMon')->get()->toArray();
        return $kq;
    }
}
