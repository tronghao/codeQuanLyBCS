<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('bomon')->insert([
          array('MaBoMon'=>'BM01','TenBoMon'=>'Công Nghệ Thông Tin'),
          array('MaBoMon'=>'BM02','TenBoMon'=>'Cơ Khí Động Lực'),
        ]);

       DB::table('covanhoctap')->insert([
          array('MaCV'=>'GV03','HoTen_CV'=>'NhanMinhPhuc', 'SDT_CV'=>'0918603819', 'Email_CV'=>'nmphuc@tvu.edu.vn', "MaBoMon"=>"BM01"),
           array('MaCV'=>'GV04','HoTen_CV'=>'DuongNgocVanKhanh', 'SDT_CV'=>'0918603819', 'Email_CV'=>'dnvk@tvu.edu.vn', "MaBoMon"=>"BM02"),
        ]);

       DB::table('lop')->insert([
          array('MaLop'=>'DA17TT','TenLop'=>'Công Nghệ Thông Tin 17', 'EmailLop' => 'DA17TT@tvu.edu.vn' ,'MaBoMon'=>'BM01', 'MaCV'=>'GV03'),
          array('MaLop'=>'DA16CKC','TenLop'=>'Cơ Khí 16', 'EmailLop' => 'DA16CKC@tvu.edu.vn', 'MaBoMon'=>'BM02', 'MaCV'=>'GV04'),
        ]);

       DB::table('sinhvien')->insert([
      		array('MaSV'=>'110117058','HoTen_SV'=>'Nguyễn Huỳnh Hữu Tài', 'SDT_SV'=>'01863564480', 'Email_SV'=>'110117058@sv.tvu.edu.vn', "ChucVu_SV"=>"Lớp Trưởng", "ChuyenNganh"=>"Công Nghệ Phần Mềm", 'KhoaHoc'=>'2017-2021', 'NamSinh'=>'1999-01-01', 'NoiSinh'=>'Châu Thành - Trà Vinh', "HeDaoTao"=>"Chính Quy", "MaLop"=>"DA17TT", "MaCV"=>"GV03"),
      		array('MaSV'=>'110117046','HoTen_SV'=>'Nguyễn Thị Thùy Dương', 'SDT_SV'=>'', 'Email_SV'=>'110117046@sv.tvu.edu.vn', "ChucVu_SV"=>"Lớp Phó", "ChuyenNganh"=>"Công Nghệ Phần Mềm", 'KhoaHoc'=>'2017-2021', 'NamSinh'=>'1999-01-01', 'NoiSinh'=>'Trà Vinh', "HeDaoTao"=>"Chính Quy", "MaLop"=>"DA17TT", "MaCV"=>"GV03"),
          array('MaSV'=>'110117035','HoTen_SV'=>'Nguyễn Minh Thư', 'SDT_SV'=>'01646286872', 'Email_SV'=>'110117035@sv.tvu.edu.vn', "ChucVu_SV"=>"Bí Thư", "ChuyenNganh"=>"Công Nghệ Phần Mềm", 'KhoaHoc'=>'2017-2021', 'NamSinh'=>'1999-11-10', 'NoiSinh'=>'Tiểu Cần - Trà Vinh', "HeDaoTao"=>"Chính Quy", "MaLop"=>"DA17TT", "MaCV"=>"GV03"),
          array('MaSV'=>'110117111','HoTen_SV'=>'Nguyễn Yến Nhi', 'SDT_SV'=>'01646286872', 'Email_SV'=>'110117111@sv.tvu.edu.vn', "ChucVu_SV"=>"Bí Thư", "ChuyenNganh"=>"Cơ Khí Động Lực", 'KhoaHoc'=>'2016-2020', 'NamSinh'=>'1999-11-10', 'NoiSinh'=>'Tiểu Cần - Trà Vinh', "HeDaoTao"=>"Chính Quy", "MaLop"=>"DA16CKC", "MaCV"=>"GV04"),
      	]); 

       DB::table('user')->insert([
          array('username'=>'admin','password'=>'123456')
        ]);
    }
}
