<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DanhSachModel;
use Excel;
use App\BomonModel;

use App\CoVanModel;
use App\LopModel;


class DanhSachController extends Controller
{
    public function getDanhSach()
    {  
        $kt = new DanhSachModel();
        $data['duLieu'] = $kt->getAllDanhSach();
        return $data;

    }

    public function locDanhSach($cheDo, $value)
    {
        $kt = new DanhSachModel();
        $data['duLieu'] = $kt->locDanhSach($cheDo, $value);
        return $data;
    }

    public function getAllBoMon()
    {
        $kt = new DanhSachModel();
        $data = $kt->getAllBoMon();
        return $data;
    }

    public function themDuLieu($cheDo, Request $rq)
    {
        $kt = new DanhSachModel();
        $kq = $kt->themDuLieu($cheDo, $rq);
        return $kq;
    }

    public function xuatExcel($nd)
    {
        if($nd=="sinhvien")
        {
            $this->xuatExcelSinhVien();
            //return redirect()->back();
        }
        else if($nd=="bomon")
        {
            $this->xuatExcelBoMon();
            //return redirect()->back();
        }
        else if($nd=="covanhoctap")
        {
            $this->xuatExcelCoVan();
            //return redirect()->back();
        }
        else if($nd == "lop")
        {
             $this->xuatExcelLop();
            //return redirect()->back();
        }
    }

    public function xuatExcelBoMon()
    {
            $ext = "xlsx";
            
             Excel::create('BoMon', function($excel) {
                 $excel->sheet('bomon', function($sheet) {
                    $kt = new BomonModel();
                    $data= $kt->getAllBoMon();
                    $sheet->fromArray($data, null, 'A2', false, true);                   
                 });
            })->download($ext);
    }

    public function xuatExcelSinhVien()
    {
            $ext = "xlsx";
            
             Excel::create('SinhVien', function($excel) {
                 $excel->sheet('sinhvien', function($sheet) {
                    $kt = new DanhSachModel();
                    $data= $kt->getAllDanhSach();
                    $sheet->fromArray($data, null, 'A2', false, true);                   
                 });
            })->download($ext);
    }

    public function xuatExcelCoVan()
    {
    
             $ext = "xlsx";
            
             Excel::create('CoVan', function($excel) {
                 $excel->sheet('covan', function($sheet) {
                    $kt = new CoVanModel();
                    $data= $kt->getAllThongTinCoVan();
                    $sheet->fromArray($data, null, 'A2', false, true);                   
                 });
            })->download($ext);
    }

    public function xuatExcelLop()
    {
            $ext = "xlsx";
            
             Excel::create('Lop', function($excel) {
                 $excel->sheet('lop', function($sheet) {
                    $kt = new LopModel();
                    $data= $kt->getAllThongTinLop();
                    $sheet->fromArray($data, null, 'A2', false, true);                   
                 });
            })->download($ext);
    }
}
