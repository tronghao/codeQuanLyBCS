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
          array('MaBoMon'=>'BM01','TenBoMon'=>'Xây dựng'),
          array('MaBoMon'=>'BM02','TenBoMon'=>'Công nghệ thông tin'),
          array('MaBoMon'=>'BM03','TenBoMon'=>'Điện - Điện tử'),
          array('MaBoMon'=>'BM04','TenBoMon'=>'Cơ khí động lực'),
        ]);

       DB::table('covanhoctap')->insert([
          array('MaCV'=>'00281','HoTen_CV'=>'Trần Văn Khánh','SDT_CV'=>'0907010130','Email_CV'=>' tranvankhanh@tvu.edu.vn','MaBoMon'=>'BM01'),
          array('MaCV'=>'14238','HoTen_CV'=>'Huỳnh Văn Hiệp','SDT_CV'=>'0963887689','Email_CV'=>' hvhiep@tvu.edu.vn','MaBoMon'=>'BM01'),
          array('MaCV'=>'16350','HoTen_CV'=>'Từ Hồng Nhung','SDT_CV'=>'0989006496','Email_CV'=>' thnhung@tvu.edu.vn','MaBoMon'=>'BM01'),
          array('MaCV'=>'00707','HoTen_CV'=>'Nguyễn Phú Nhuận','SDT_CV'=>'0907892130','Email_CV'=>' npnhuan@tvu.edu.vn','MaBoMon'=>'BM01'),
          array('MaCV'=>'00283','HoTen_CV'=>'Nguyễn Thành Công','SDT_CV'=>'0985440459','Email_CV'=>' nguyenthanhcong@tvu.edu.vn ','MaBoMon'=>'BM01'),
          array('MaCV'=>'00275','HoTen_CV'=>'Nguyễn Thanh Tâm','SDT_CV'=>'0982284405','Email_CV'=>' tamxd@tvu.edu.vn','MaBoMon'=>'BM01'),
          array('MaCV'=>'00276','HoTen_CV'=>'Nguyễn Vy Thanh','SDT_CV'=>'','Email_CV'=>'','MaBoMon'=>'BM01'),
          array('MaCV'=>'00285','HoTen_CV'=>'Huỳnh Thị Mỹ Dung','SDT_CV'=>'0937242249','Email_CV'=>'mydung@tvu.edu.vn','MaBoMon'=>'BM01'),
          array('MaCV'=>'03546','HoTen_CV'=>'Phan Thị Phương Nam','SDT_CV'=>'0989236166','Email_CV'=>' ptpnam@tvu.edu.vn','MaBoMon'=>'BM02'),
          array('MaCV'=>'00243','HoTen_CV'=>'Huỳnh Văn Thanh','SDT_CV'=>'0977654181','Email_CV'=>' hvthanh@tvu.edu.vn','MaBoMon'=>'BM02'),
          array('MaCV'=>'00258','HoTen_CV'=>'Nhan Minh Phúc','SDT_CV'=>'0918603819','Email_CV'=>' nhanminhphuc@tvu.edu.vn','MaBoMon'=>'BM02'),
          array('MaCV'=>'00252','HoTen_CV'=>'Trầm Hoàng Nam','SDT_CV'=>'0977810235','Email_CV'=>' tramhoangnam@tvu.edu.vn','MaBoMon'=>'BM02'),
          array('MaCV'=>'00241','HoTen_CV'=>'Nguyễn Hoàng Duy Thiện','SDT_CV'=>'0989274222','Email_CV'=>' thiennhd@tvu.edu.vn','MaBoMon'=>'BM02'),
          array('MaCV'=>'00251','HoTen_CV'=>'Trịnh Quốc Việt','SDT_CV'=>'0354696999','Email_CV'=>' tqviettv@tvu.edu.vn','MaBoMon'=>'BM02'),
          array('MaCV'=>'14204','HoTen_CV'=>'Nguyễn Bá Nhiệm','SDT_CV'=>'0983303609','Email_CV'=>' nhiemnb@tvu.edu.vn','MaBoMon'=>'BM02'),
          array('MaCV'=>'03562','HoTen_CV'=>'Nguyễn Khắc Quốc','SDT_CV'=>'0918085180','Email_CV'=>' nkquoc@tvu.edu.vn','MaBoMon'=>'BM02'),
          array('MaCV'=>'00246','HoTen_CV'=>'Nguyễn Ngọc Đan Thanh','SDT_CV'=>'0916741252','Email_CV'=>' ngocdanthanhdt@tvu.edu.vn','MaBoMon'=>'BM02'),
          array('MaCV'=>'02405','HoTen_CV'=>'Nguyễn Thanh Hiền','SDT_CV'=>'0984503463','Email_CV'=>'nthien@tvu.edu.vn','MaBoMon'=>'BM03'),
          array('MaCV'=>'14189','HoTen_CV'=>'Phan Thế Hiếu','SDT_CV'=>'','Email_CV'=>' thehieu@tvu.edu.vn','MaBoMon'=>'BM03'),
          array('MaCV'=>'12704','HoTen_CV'=>'Kim Anh Tuấn','SDT_CV'=>'0979166740','Email_CV'=>' katuan@tvu.edu.vn','MaBoMon'=>'BM03'),
          array('MaCV'=>'14209','HoTen_CV'=>'Triệu Quốc Huy','SDT_CV'=>'0918439231','Email_CV'=>' tqhuy@tvu.edu.vn','MaBoMon'=>'BM03'),
          array('MaCV'=>'12695','HoTen_CV'=>'Nguyễn Ngọc Tiền','SDT_CV'=>'','Email_CV'=>'nntien@tvu.edu.vn','MaBoMon'=>'BM03'),
          array('MaCV'=>'12703','HoTen_CV'=>'Nguyễn Hoàng Vũ','SDT_CV'=>'0979710444','Email_CV'=>'nghvu@tvu.edu.vn ','MaBoMon'=>'BM03'),
          array('MaCV'=>'12694','HoTen_CV'=>'Lê Thanh Tùng','SDT_CV'=>'0908710097','Email_CV'=>'lttung@tvu.edu.vn ','MaBoMon'=>'BM03'),
          array('MaCV'=>'00262','HoTen_CV'=>'Phạm Minh Triết','SDT_CV'=>'0916130123','Email_CV'=>'minhtriet@tvu.edu.vn','MaBoMon'=>'BM03'),
          array('MaCV'=>'00238','HoTen_CV'=>'Nguyễn Đức Hiệu','SDT_CV'=>'0908288380','Email_CV'=>' ndhieu@tvu.edu.vn','MaBoMon'=>'BM03'),
          array('MaCV'=>'14190','HoTen_CV'=>'Phạm Tấn Hưng','SDT_CV'=>'0907839644','Email_CV'=>' pthung@tvu.edu.vn','MaBoMon'=>'BM03'),
          array('MaCV'=>'14230','HoTen_CV'=>'Cao Phương Thảo','SDT_CV'=>'0766719277','Email_CV'=>'cpthao@tvu.edu.vn ','MaBoMon'=>'BM03'),
          array('MaCV'=>'14191','HoTen_CV'=>'Bùi Thị Thu Thủy','SDT_CV'=>'0917817219','Email_CV'=>'thuybui@tvu.edu.vn','MaBoMon'=>'BM03'),
          array('MaCV'=>'14221','HoTen_CV'=>'Trần Văn Điền','SDT_CV'=>'','Email_CV'=>'','MaBoMon'=>'BM04'),
          array('MaCV'=>'00270','HoTen_CV'=>'Huỳnh Thanh Bảnh','SDT_CV'=>'0944311311','Email_CV'=>' banhhuynh@tvu.edu.vn','MaBoMon'=>'BM04'),
          array('MaCV'=>'12711','HoTen_CV'=>'Nguyễn Vũ Lực','SDT_CV'=>'0918677454','Email_CV'=>' nguyenvuluc@tvu.edu.vn','MaBoMon'=>'BM04'),
          array('MaCV'=>'00267','HoTen_CV'=>'Phan Văn Tuân','SDT_CV'=>'0919762700','Email_CV'=>' pvtuan@tvu.edu.vn','MaBoMon'=>'BM04'),
          array('MaCV'=>'06742','HoTen_CV'=>'Ngô Thanh Hà','SDT_CV'=>'0918586973','Email_CV'=>'tam@tvu.edu.vn','MaBoMon'=>'BM04'),
          array('MaCV'=>'14223','HoTen_CV'=>'Đặng Hoàng Vũ','SDT_CV'=>'0367985935','Email_CV'=>'hoangvuck@tvu.edu.vn ','MaBoMon'=>'BM04'),
          array('MaCV'=>'14259','HoTen_CV'=>'Thạch Ngọc Phúc','SDT_CV'=>'0973475358','Email_CV'=>' tnphuc@tvu.edu.vn','MaBoMon'=>'BM04'),
          array('MaCV'=>'00268','HoTen_CV'=>'Trương Văn Mến','SDT_CV'=>'','Email_CV'=>' tvmen@tvu.edu.vn','MaBoMon'=>'BM04'),
          array('MaCV'=>'00269','HoTen_CV'=>'Dương Minh Hùng','SDT_CV'=>'0985959190','Email_CV'=>'duongminhhung1806@tvu.edu.vn','MaBoMon'=>'BM04'),
          array('MaCV'=>'00274','HoTen_CV'=>'Tăng Tấn Minh','SDT_CV'=>'0939.303.250','Email_CV'=>' tanminh@tvu.edu.vn','MaBoMon'=>'BM04'),
        ]);

       DB::table('lop')->insert([
          array('MaLop'=>'DA16XDCD','TenLop'=>'ĐH Xây dựng Cầu đường 2016','EmailLop'=>'','MaBoMon'=>'BM01','MaCV'=>'00281'),
          array('MaLop'=>'DA16XDDC','TenLop'=>'ĐH Xây dựng Dân dụng và Công nghiệp 2016','EmailLop'=>'','MaBoMon'=>'BM01','MaCV'=>'14238'),
          array('MaLop'=>'DA17XD','TenLop'=>'ĐH Công nghệ KT công trình Xây dựng 2017','EmailLop'=>'da17xd@sv.tvu.edu.vn','MaBoMon'=>'BM01','MaCV'=>'16350'),
          array('MaLop'=>'DA17XDGT','TenLop'=>'ĐH Kỹ thuật xây dựng công trình giao thông 2017','EmailLop'=>'da17xdgt@sv.tvu.edu.vn','MaBoMon'=>'BM01','MaCV'=>'00707'),
          array('MaLop'=>'DA18XD','TenLop'=>'ĐH Công nghệ KT công trình Xây dựng 2018','EmailLop'=>'','MaBoMon'=>'BM01','MaCV'=>'00283'),
          array('MaLop'=>'DA18XDGT','TenLop'=>'ĐH Kỹ thuật xây dựng công trình giao thông 2018','EmailLop'=>'','MaBoMon'=>'BM01','MaCV'=>'00275'),
          array('MaLop'=>'DA19XD','TenLop'=>'ĐH Công nghệ KT công trình Xây dựng 2019','EmailLop'=>'','MaBoMon'=>'BM01','MaCV'=>'00276'),
          array('MaLop'=>'DA19XDGT','TenLop'=>'ĐH Kỹ thuật xây dựng công trình giao thông 2019','EmailLop'=>'','MaBoMon'=>'BM01','MaCV'=>'00285'),
          array('MaLop'=>'DA16TT','TenLop'=>'ĐH Công nghệ thông tin 2016','EmailLop'=>'','MaBoMon'=>'BM02','MaCV'=>'03546'),
          array('MaLop'=>'DA16QTM','TenLop'=>'ĐH Quản Trị Mạng 2016','EmailLop'=>'','MaBoMon'=>'BM02','MaCV'=>'00243'),
          array('MaLop'=>'DA17TT','TenLop'=>'ĐH Công nghệ thông tin 2017','EmailLop'=>'da17tt@sv.tvu.edu.vn','MaBoMon'=>'BM02','MaCV'=>'00258'),
          array('MaLop'=>'DA17QTM','TenLop'=>'ĐH Quản Trị Mạng 2017','EmailLop'=>'da17tt@sv.tvu.edu.vn','MaBoMon'=>'BM02','MaCV'=>'00252'),
          array('MaLop'=>'DA18TTA','TenLop'=>'ĐH Công nghệ thông tin 2018','EmailLop'=>'','MaBoMon'=>'BM02','MaCV'=>'00241'),
          array('MaLop'=>'DA18TTB','TenLop'=>'ĐH Công nghệ thông tin 2018','EmailLop'=>'','MaBoMon'=>'BM02','MaCV'=>'00251'),
          array('MaLop'=>'DA19TTA','TenLop'=>'ĐH Công nghệ thông tin 2019','EmailLop'=>'','MaBoMon'=>'BM02','MaCV'=>'14204'),
          array('MaLop'=>'DA19TTB','TenLop'=>'ĐH Công nghệ thông tin 2019','EmailLop'=>'','MaBoMon'=>'BM02','MaCV'=>'03562'),
          array('MaLop'=>'CA17TT','TenLop'=>'Cao đẳng Công nghệ thông tin 2017','EmailLop'=>'ca17tt@sv.tvu.edu.vn','MaBoMon'=>'BM02','MaCV'=>'00246'),
          array('MaLop'=>'DA16DCN','TenLop'=>'ĐH Điện công nghiệp 2016','EmailLop'=>'','MaBoMon'=>'BM03','MaCV'=>'02405'),
          array('MaLop'=>'DA16KDHT','TenLop'=>'ĐH Hệ thống điện 2016','EmailLop'=>'','MaBoMon'=>'BM03','MaCV'=>'14189'),
          array('MaLop'=>'DA16DTH','TenLop'=>'ĐH Công nghệ kỹ thuật điều khiển và tự động hoá 2016','EmailLop'=>'','MaBoMon'=>'BM03','MaCV'=>'12704'),
          array('MaLop'=>'DA17DCN','TenLop'=>'ĐH Điện công nghiệp 2017','EmailLop'=>'da17kd@sv.tvu.edu.vn','MaBoMon'=>'BM03','MaCV'=>'14209'),
          array('MaLop'=>'DA17KDHT','TenLop'=>'ĐH Hệ thống điện 2017','EmailLop'=>'da17kd@sv.tvu.edu.vn','MaBoMon'=>'BM03','MaCV'=>'12695'),
          array('MaLop'=>'DA17DT','TenLop'=>'ĐH CN Kỹ thuật Điều khiển & tự động hoá 2017','EmailLop'=>'da17dt@sv.tvu.edu.vn','MaBoMon'=>'BM03','MaCV'=>'12703'),
          array('MaLop'=>'DA18KD','TenLop'=>'ĐH CNKT Điện, điện tử 2018','EmailLop'=>'','MaBoMon'=>'BM03','MaCV'=>'12694'),
          array('MaLop'=>'DA18DT','TenLop'=>'ĐH CN Kỹ thuật Điều khiển & tự động hoá 2018','EmailLop'=>'','MaBoMon'=>'BM03','MaCV'=>'00262'),
          array('MaLop'=>'DA19KDA','TenLop'=>'ĐH Công nghệ kỹ thuật Điện, điện tử A 2019','EmailLop'=>'','MaBoMon'=>'BM03','MaCV'=>'00238'),
          array('MaLop'=>'DA19KDB','TenLop'=>'ĐH Công nghệ kỹ thuật Điện, điện tử B 2019','EmailLop'=>'','MaBoMon'=>'BM03','MaCV'=>'14190'),
          array('MaLop'=>'DA19DT','TenLop'=>'ĐH CN Kỹ thuật Điều khiển & tự động hoá 2019','EmailLop'=>'','MaBoMon'=>'BM03','MaCV'=>'14230'),
          array('MaLop'=>'CA17KD','TenLop'=>'ĐH CNKT Điện, điện tử 2017','EmailLop'=>'','MaBoMon'=>'BM03','MaCV'=>'14209'),
          array('MaLop'=>'CA18KD','TenLop'=>'ĐH CNKT Điện, điện tử 2018','EmailLop'=>'','MaBoMon'=>'BM03','MaCV'=>'14191'),
          array('MaLop'=>'CA19KD','TenLop'=>'ĐH CNKT Điện, điện tử 2019','EmailLop'=>'','MaBoMon'=>'BM03','MaCV'=>'14209'),
          array('MaLop'=>'DA16CKC','TenLop'=>' ĐH Cơ khí chế tạo máy 2016','EmailLop'=>'','MaBoMon'=>'BM04','MaCV'=>'14221'),
          array('MaLop'=>'DA16CNOT','TenLop'=>'ĐH Công nghệ Ô tô 2016','EmailLop'=>'','MaBoMon'=>'BM04','MaCV'=>'00270'),
          array('MaLop'=>'DA17CKC','TenLop'=>' ĐH Cơ khí chế tạo máy 2017','EmailLop'=>'da17ckc@sv.tvu.edu.vn','MaBoMon'=>'BM04','MaCV'=>'12711'),
          array('MaLop'=>'DA17CNOT','TenLop'=>'ĐH Công nghệ Ô tô 2017','EmailLop'=>'da17cnot@sv.tvu.edu.vn','MaBoMon'=>'BM04','MaCV'=>'00267'),
          array('MaLop'=>'DA18CKC','TenLop'=>'ĐH Cơ khí chế tạo máy 2018','EmailLop'=>'','MaBoMon'=>'BM04','MaCV'=>'06742'),
          array('MaLop'=>'DA18CNOT','TenLop'=>'ĐH Công nghệ Ô tô 2018','EmailLop'=>'','MaBoMon'=>'BM04','MaCV'=>'14223'),
          array('MaLop'=>'DA19CK','TenLop'=>'ĐH Công nghệ kỹ thuật cơ khí 2019','EmailLop'=>'','MaBoMon'=>'BM04','MaCV'=>'14259'),
          array('MaLop'=>'DA19CNOTA','TenLop'=>'ĐH Công nghệ Ô tô 2019','EmailLop'=>'','MaBoMon'=>'BM04','MaCV'=>'00268'),
          array('MaLop'=>'DA19CNOTB','TenLop'=>'ĐH Công nghệ Ô tô 2019','EmailLop'=>'','MaBoMon'=>'BM04','MaCV'=>'00270'),
          array('MaLop'=>'CA17CK','TenLop'=>'ĐH Công nghệ kỹ thuật cơ khí 2017','EmailLop'=>'ca17ck@sv.tvu.edu.vn','MaBoMon'=>'BM04','MaCV'=>'00269'),
          array('MaLop'=>'CA18CK','TenLop'=>'ĐH Công nghệ kỹ thuật cơ khí 2018','EmailLop'=>'','MaBoMon'=>'BM04','MaCV'=>'00274'),
        ]);

       DB::table('sinhvien')->insert([
      		array('MaSV'=>'111716022','HoTen_SV'=>'Bùi Văn Trọng','SDT_SV'=>'0399812847','Email_SV'=>'111716022@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ KT Công trình Xây dựng','KhoaHoc'=>'2016-2020','NamSinh'=>'1998-03-03','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA16XDCD','MaCV'=>'00281'),
          array('MaSV'=>'111716001','HoTen_SV'=>'Võ Tuấn Cảnh','SDT_SV'=>'0365190404','Email_SV'=>'111716001@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ KT Công trình Xây dựng','KhoaHoc'=>'2016-2020','NamSinh'=>'1996-03-10','NoiSinh'=>'Tỉnh Đồng Tháp','HeDaoTao'=>'Đại học','MaLop'=>'DA16XDDC','MaCV'=>'14238'),
          array('MaSV'=>'111717014','HoTen_SV'=>'Nguyễn Quốc Phong','SDT_SV'=>'0967548584','Email_SV'=>'111717014@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ KT Công trình Xây dựng','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-05-12','NoiSinh'=>'TP Hồ Chí Minh','HeDaoTao'=>'Đại học','MaLop'=>'DA17XD','MaCV'=>'16350'),
          array('MaSV'=>'111717033','HoTen_SV'=>'Đặng Huy Hiếu','SDT_SV'=>'0357965959','Email_SV'=>'111717033@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Công nghệ KT Công trình Xây dựng','KhoaHoc'=>'2017-2021','NamSinh'=>'1998-02-16','NoiSinh'=>'Tỉnh Đồng Nai','HeDaoTao'=>'Đại học','MaLop'=>'DA17XD','MaCV'=>'16350'),
          array('MaSV'=>'111717032','HoTen_SV'=>'Trầm Thị Kim Anh','SDT_SV'=>'0383576223','Email_SV'=>'111717032@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Công nghệ KT Công trình Xây dựng','KhoaHoc'=>'2017-2021','NamSinh'=>'1996-02-12','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17XD','MaCV'=>'16350'),
          array('MaSV'=>'116817007','HoTen_SV'=>'Trần Văn Thiện','SDT_SV'=>'0395171723','Email_SV'=>'116817007@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Kỹ thuật xây dựng công trình giao thông','KhoaHoc'=>'2017-2021','NamSinh'=>'2036-02-26','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17XDGT','MaCV'=>'00707'),
          array('MaSV'=>'111717030','HoTen_SV'=>'Lâm Hữu Nhân','SDT_SV'=>'0971015445','Email_SV'=>'111717030@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Kỹ thuật xây dựng công trình giao thông','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-10-25','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17XDGT','MaCV'=>'00707'),
          array('MaSV'=>'111718012','HoTen_SV'=>'Phạm Thị Hồng Ngân','SDT_SV'=>'0966305624','Email_SV'=>'111718012@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ KT Công trình Xây dựng','KhoaHoc'=>'2018-2022','NamSinh'=>'2000-01-19','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA18XD','MaCV'=>'00283'),
          array('MaSV'=>'111718039','HoTen_SV'=>'Tạ Thiết Tường','SDT_SV'=>'','Email_SV'=>'111718039@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Công nghệ KT Công trình Xây dựng','KhoaHoc'=>'2018-2022','NamSinh'=>'2000-12-12','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA18XD','MaCV'=>'00283'),
          array('MaSV'=>'116818005','HoTen_SV'=>'Nguyễn Duy Linh','SDT_SV'=>'0984990344','Email_SV'=>'116818005@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Kỹ thuật xây dựng công trình giao thông','KhoaHoc'=>'2018-2022','NamSinh'=>'2000-07-15','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA18XDGT','MaCV'=>'00275'),
          array('MaSV'=>'111718010','HoTen_SV'=>'Trần Thị Huyền Mi','SDT_SV'=>'0357151256','Email_SV'=>'116818010@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Kỹ thuật xây dựng công trình giao thông','KhoaHoc'=>'2018-2022','NamSinh'=>'2000-06-20','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA18XDGT','MaCV'=>'00275'),
          array('MaSV'=>'111719015','HoTen_SV'=>'Nguyễn Nhật Trường','SDT_SV'=>'0968554467','Email_SV'=>'111719015@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ KT Công trình Xây dựng','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-02-10','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19XD','MaCV'=>'00276'),
          array('MaSV'=>'111719008','HoTen_SV'=>'Mai Thúy Phương','SDT_SV'=>'0987721027','Email_SV'=>'111719008@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Công nghệ KT Công trình Xây dựng','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-10-04','NoiSinh'=>'Tỉnh Sóc Trăng','HeDaoTao'=>'Đại học','MaLop'=>'DA19XD','MaCV'=>'00276'),
          array('MaSV'=>'116819003','HoTen_SV'=>'Võ Trọng Điền','SDT_SV'=>'0834202353','Email_SV'=>'116819003@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Kỹ thuật xây dựng công trình giao thông','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-08-21','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19XDGT','MaCV'=>'00285'),
          array('MaSV'=>'116819013','HoTen_SV'=>'Đặng Thị Phương Lan','SDT_SV'=>'0335207327','Email_SV'=>'116819013@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Kỹ thuật xây dựng công trình giao thông','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-09-01','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19XDGT','MaCV'=>'00285'),
          array('MaSV'=>'110116034','HoTen_SV'=>'Lê Hồ Anh Khoa','SDT_SV'=>'0762843042','Email_SV'=>'110116034@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2016-2020','NamSinh'=>'1998-05-19','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA16TT','MaCV'=>'03546'),
          array('MaSV'=>'110116054','HoTen_SV'=>'Thạch Đa Ny','SDT_SV'=>'0901006932','Email_SV'=>'110116054@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó Học Tập','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2016-2020','NamSinh'=>'1996-08-24','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA16TT','MaCV'=>'03546'),
          array('MaSV'=>'110116044','HoTen_SV'=>'Cao Mộng Ngân','SDT_SV'=>'0946334626','Email_SV'=>'110116044@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó Phong Trào','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2016-2020','NamSinh'=>'1997-02-21','NoiSinh'=>'Tỉnh Kiên Giang','HeDaoTao'=>'Đại học','MaLop'=>'DA16TT','MaCV'=>'03546'),
          array('MaSV'=>'110116067','HoTen_SV'=>'Lâm Thị Thanh Thảo','SDT_SV'=>'0978859829','Email_SV'=>'110116067@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Quản trị mạng','KhoaHoc'=>'2016-2020','NamSinh'=>'1998-06-11','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA16QTM','MaCV'=>'00243'),
          array('MaSV'=>'110117058','HoTen_SV'=>'Nguyễn Huỳnh Hữu Tài','SDT_SV'=>'0563564480','Email_SV'=>'110117058@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-10-17','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17TT','MaCV'=>'00258'),
          array('MaSV'=>'110117046','HoTen_SV'=>'Nguyễn Thị Thuỳ Dương','SDT_SV'=>'0386983170','Email_SV'=>'110117046@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-08-20','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17TT','MaCV'=>'00258'),
          array('MaSV'=>'110117035','HoTen_SV'=>'Nguyễn Minh Thư','SDT_SV'=>'0346286872','Email_SV'=>'110117035@sv.tvu.edu.vn','ChucVu_SV'=>'Bí Thư','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-11-10','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17TT','MaCV'=>'00258'),
          array('MaSV'=>'110117012','HoTen_SV'=>'Phan Minh Khang','SDT_SV'=>'0345777452','Email_SV'=>'110117012@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Quản trị mạng','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-11-12','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17QTM','MaCV'=>'00252'),
          array('MaSV'=>'110118025','HoTen_SV'=>'Nguyễn Hữu Hồ','SDT_SV'=>'0397276602','Email_SV'=>'110118025@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2018-2022','NamSinh'=>'2000-02-25','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA18TTA','MaCV'=>'00241'),
          array('MaSV'=>'110118039','HoTen_SV'=>'Nguyễn Ngọc Thanh Ngân','SDT_SV'=>'0796869205','Email_SV'=>'110118039@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2018-2022','NamSinh'=>'2000-07-17','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA18TTA','MaCV'=>'00241'),
          array('MaSV'=>'110118139','HoTen_SV'=>'Võ Phi Hoàng','SDT_SV'=>'0367881184','Email_SV'=>'110118139@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2018-2022','NamSinh'=>'1996-04-29','NoiSinh'=>'Tỉnh Kiên Giang','HeDaoTao'=>'Đại học','MaLop'=>'DA18TTB','MaCV'=>'00251'),
          array('MaSV'=>'110118125','HoTen_SV'=>'Ngô Thanh Hiếu','SDT_SV'=>'0961769183','Email_SV'=>'110118125@sv.tvu.edu.vn','ChucVu_SV'=>'','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2018-2022','NamSinh'=>'2000-10-18','NoiSinh'=>'Tỉnh Sóc Trăng','HeDaoTao'=>'Đại học','MaLop'=>'DA18TTB','MaCV'=>'00251'),
          array('MaSV'=>'110119042','HoTen_SV'=>'Trần Thị Tú Quyên','SDT_SV'=>'0388177617','Email_SV'=>'110119042@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-08-18','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19TTA','MaCV'=>'14204'),
          array('MaSV'=>'110119073','HoTen_SV'=>'Lâm Quốc Hoài','SDT_SV'=>'0378286136','Email_SV'=>'110119073@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-07-25','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19TTB','MaCV'=>'03562'),
          array('MaSV'=>'110119127','HoTen_SV'=>'Nguyễn Thanh Xuân','SDT_SV'=>'0374354042','Email_SV'=>'110119127@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Công nghệ thông tin','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-08-03','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19TTB','MaCV'=>'03562'),
          array('MaSV'=>'112116073','HoTen_SV'=>'Trần Kim Sony','SDT_SV'=>'0922676887','Email_SV'=>'112116073@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2016-2020','NamSinh'=>'1998-04-05','NoiSinh'=>'Tỉnh Vĩnh Long','HeDaoTao'=>'Đại học','MaLop'=>'DA16DCN','MaCV'=>'02405'),
          array('MaSV'=>'112116019','HoTen_SV'=>'Nguyễn Lê Trường Giang','SDT_SV'=>'','Email_SV'=>'112116019@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2016-2020','NamSinh'=>'1998-04-12','NoiSinh'=>'Tỉnh Bến Tre','HeDaoTao'=>'Đại học','MaLop'=>'DA16DCN','MaCV'=>'02405'),
          array('MaSV'=>'112116047','HoTen_SV'=>'Võ Minh Luyến','SDT_SV'=>'0724834825','Email_SV'=>'112116047@sv.tvu.edu.vn','ChucVu_SV'=>'Bí Thư','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2016-2020','NamSinh'=>'1998-10-27','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA16DCN','MaCV'=>'02405'),
          array('MaSV'=>'112116010','HoTen_SV'=>'Đỗ Minh Đẹp','SDT_SV'=>'0982248716','Email_SV'=>'112116010@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2016-2020','NamSinh'=>'1998-06-19','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA16KDHT','MaCV'=>'14189'),
          array('MaSV'=>'115216013','HoTen_SV'=>'Lưu Chí Bảo','SDT_SV'=>'0326551798','Email_SV'=>'115216013@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'CN Kỹ thuật Điều khiển & tự động hoá','KhoaHoc'=>'2016-2020','NamSinh'=>'1998-03-23','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA16DTH','MaCV'=>'12704'),
          array('MaSV'=>'112117061','HoTen_SV'=>'Lê Quốc Khánh','SDT_SV'=>'0787814663','Email_SV'=>'112117061@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-07-09','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17DCN','MaCV'=>'14209'),
          array('MaSV'=>'112117081','HoTen_SV'=>'Trầm Gia Hòa','SDT_SV'=>'0979601397','Email_SV'=>'112117081@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-09-07','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17DCN','MaCV'=>'14209'),
          array('MaSV'=>'112117073','HoTen_SV'=>'Huỳnh Thành Trọng','SDT_SV'=>'0367429401','Email_SV'=>'112117073@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-03-18','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17KDHT','MaCV'=>'12695'),
          array('MaSV'=>'115217002','HoTen_SV'=>'Lê Hoàng Khương','SDT_SV'=>'0354645796','Email_SV'=>'115217002@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'CN Kỹ thuật Điều khiển & tự động hoá','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-03-23','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17DT','MaCV'=>'12703'),
          array('MaSV'=>'112118042','HoTen_SV'=>'Nguyễn Văn Đa Vi','SDT_SV'=>'0376738545','Email_SV'=>'112118042@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2018-2022','NamSinh'=>'2000-08-16','NoiSinh'=>'Tình Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA18KD','MaCV'=>'12694'),
          array('MaSV'=>'115218007','HoTen_SV'=>'Điều Minh Hiểu','SDT_SV'=>'0981425777','Email_SV'=>'115218007@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2018-2022','NamSinh'=>'2000-05-09','NoiSinh'=>'Tỉnh Vĩnh Long','HeDaoTao'=>'Đại học','MaLop'=>'DA18DT','MaCV'=>'00262'),
          array('MaSV'=>'112119032','HoTen_SV'=>'Kiên Thành Luật','SDT_SV'=>'0368173167','Email_SV'=>'112119032@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-12-28','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19KDA','MaCV'=>'00238'),
          array('MaSV'=>'112119057','HoTen_SV'=>'Phan Duy Khánh','SDT_SV'=>'0356239196','Email_SV'=>'112119057@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2019-2023','NamSinh'=>'2000-12-10','NoiSinh'=>'Tình Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19KDB','MaCV'=>'14190'),
          array('MaSV'=>'112119082','HoTen_SV'=>'Phạm Hoàng Vĩ','SDT_SV'=>'0888932130','Email_SV'=>'112119082@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2019-2023','NamSinh'=>'2000-03-13','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19KDB','MaCV'=>'14190'),
          array('MaSV'=>'115219011','HoTen_SV'=>'Đoàn Lê Thành Đạt','SDT_SV'=>'0378748372','Email_SV'=>'115219011@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'CN Kỹ thuật Điều khiển & tự động hoá','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-11-21','NoiSinh'=>'Tình Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19DT','MaCV'=>'14230'),
          array('MaSV'=>'212117013','HoTen_SV'=>'Hồ Hoàng Ngân','SDT_SV'=>'0984994112','Email_SV'=>'212117013@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2017-2020','NamSinh'=>'1999-09-24','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Cao đẳng','MaLop'=>'CA17KD','MaCV'=>'14209'),
          array('MaSV'=>'212118012','HoTen_SV'=>'Nguyễn Đăng Khoa','SDT_SV'=>'0968955494','Email_SV'=>'212118012@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Phó','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2018-2021','NamSinh'=>'2000-07-05','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Cao đẳng','MaLop'=>'CA18KD','MaCV'=>'14191'),
          array('MaSV'=>'212119007','HoTen_SV'=>'Hồ Văn Thanh','SDT_SV'=>'0584985406','Email_SV'=>'212119007@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp Trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật điện, điện tử','KhoaHoc'=>'2019-2022','NamSinh'=>'2001-01-31','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Cao đẳng','MaLop'=>'CA19KD','MaCV'=>'14209'),
          array('MaSV'=>'111816034','HoTen_SV'=>'Nguyễn Minh Tài','SDT_SV'=>'0828383987','Email_SV'=>'111816034@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2016-2020','NamSinh'=>'1997-09-25','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA16CKC','MaCV'=>'14221'),
          array('MaSV'=>'111816018','HoTen_SV'=>'Trần Thế Duy','SDT_SV'=>'0338654620','Email_SV'=>'111816018@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2016-2020','NamSinh'=>'1998-12-02','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA16CNOT','MaCV'=>'00270'),
          array('MaSV'=>'111816021','HoTen_SV'=>'Hồng Quốc Huy','SDT_SV'=>'0325639898','Email_SV'=>'111816021@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp phó','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2016-2020','NamSinh'=>'1998-08-29','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA16CNOT','MaCV'=>'00270'),
          array('MaSV'=>'111817041','HoTen_SV'=>'Kim Ngọc An','SDT_SV'=>'0328176004','Email_SV'=>'111817041@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-12-17','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17CKC','MaCV'=>'12711'),
          array('MaSV'=>'111817052','HoTen_SV'=>'Nguyễn Văn Pháp','SDT_SV'=>'0392266873','Email_SV'=>'111817052@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2017-2021','NamSinh'=>'1999-09-05','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA17CNOT','MaCV'=>'00267'),
          array('MaSV'=>'111818118','HoTen_SV'=>'Trang Tài Phú','SDT_SV'=>'0335570325','Email_SV'=>'111818118@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2018-2022','NamSinh'=>'2000-02-29','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA18CKC','MaCV'=>'06742'),
          array('MaSV'=>'111818006','HoTen_SV'=>'Sơn Quốc Bình','SDT_SV'=>'0396297138','Email_SV'=>'111818006@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp phó','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2018-2022','NamSinh'=>'2000-09-03','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA18CKC','MaCV'=>'06742'),
          array('MaSV'=>'111818112','HoTen_SV'=>'Dương Thanh Khang','SDT_SV'=>'0304264840','Email_SV'=>'111818112@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2018-2023','NamSinh'=>'2000-05-07','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA18CNOT','MaCV'=>'14223'),
          array('MaSV'=>'111818013','HoTen_SV'=>'Kim Ngọc Hoàng','SDT_SV'=>'0569120730','Email_SV'=>'111818013@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp phó','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2018-2023','NamSinh'=>'2000-11-16','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA18CNOT','MaCV'=>'14223'),
          array('MaSV'=>'111819034','HoTen_SV'=>'Lê Gia Khánh','SDT_SV'=>'0347682357','Email_SV'=>'111819034@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2019-2023','NamSinh'=>'2000-11-16','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19CK','MaCV'=>'14259'),
          array('MaSV'=>'111819070','HoTen_SV'=>'Diệp Minh Luân','SDT_SV'=>'0337203503','Email_SV'=>'111819070@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp phó','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-06-28','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19CK','MaCV'=>'14259'),
          array('MaSV'=>'118019008','HoTen_SV'=>'Sơn Thái Hào','SDT_SV'=>'0825661214','Email_SV'=>'118019008@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp trưởng','ChuyenNganh'=>'Công nghệ kỹ thuật ô tô','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-12-14','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19CNOTA','MaCV'=>'00268'),
          array('MaSV'=>'118019032','HoTen_SV'=>'Trần Thanh Quyền','SDT_SV'=>'0333446825','Email_SV'=>'118019032@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp phó','ChuyenNganh'=>'Công nghệ kỹ thuật ô tô','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-04-01','NoiSinh'=>'Tỉnh Sóc Trăng','HeDaoTao'=>'Đại học','MaLop'=>'DA19CNOTA','MaCV'=>'00268'),
          array('MaSV'=>'118019012','HoTen_SV'=>'Hồng Phan Trung Hiếu','SDT_SV'=>'0924609727','Email_SV'=>'118019012@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp phó','ChuyenNganh'=>'Công nghệ kỹ thuật ô tô','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-03-11','NoiSinh'=>'TP Hồ Chí Minh','HeDaoTao'=>'Đại học','MaLop'=>'DA19CNOTA','MaCV'=>'00268'),
          array('MaSV'=>'118019111','HoTen_SV'=>'Khương Tú Ngân','SDT_SV'=>'0774063634','Email_SV'=>'118019111@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp trưởng','ChuyenNganh'=>'Công nghệ kỹ thuật ô tô','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-02-21','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19CNOTB','MaCV'=>'00270'),
          array('MaSV'=>'118019081','HoTen_SV'=>'Kim Châu Khang','SDT_SV'=>'0978574427','Email_SV'=>'118019081@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp phó','ChuyenNganh'=>'Công nghệ kỹ thuật ô tô','KhoaHoc'=>'2019-2023','NamSinh'=>'2001-04-02','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Đại học','MaLop'=>'DA19CNOTB','MaCV'=>'00270'),
          array('MaSV'=>'118019133','HoTen_SV'=>'Nguyễn Thanh Ngân','SDT_SV'=>'0908322602','Email_SV'=>'118019133@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp phó','ChuyenNganh'=>'Công nghệ kỹ thuật ô tô','KhoaHoc'=>'2019-2023','NamSinh'=>'1998-05-29','NoiSinh'=>'Tỉnh Vĩnh Long','HeDaoTao'=>'Đại học','MaLop'=>'DA19CNOTB','MaCV'=>'00270'),
          array('MaSV'=>'211817017','HoTen_SV'=>'Huỳnh Thanh Phong','SDT_SV'=>'0961559301','Email_SV'=>'211817017@sv.tvu.edu.vn','ChucVu_SV'=>'Bí thư','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2017-2020','NamSinh'=>'1999-01-06','NoiSinh'=>'Trà Vinh','HeDaoTao'=>'Cao đẳng','MaLop'=>'CA17CK','MaCV'=>'00269'),
          array('MaSV'=>'211818012','HoTen_SV'=>'Nguyễn Ngọc Phú','SDT_SV'=>'0903651824','Email_SV'=>'211818012@sv.tvu.edu.vn','ChucVu_SV'=>'Lớp trưởng','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2018-2021','NamSinh'=>'1988-02-05','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Cao đẳng','MaLop'=>'CA18CK','MaCV'=>'00274'),
          array('MaSV'=>'211818007','HoTen_SV'=>'Nguyễn Tuấn Kiệt','SDT_SV'=>'0907192217','Email_SV'=>'211818007@sv.tvu.edu.vn','ChucVu_SV'=>'','ChuyenNganh'=>'Công nghệ Kỹ thuật Cơ khí','KhoaHoc'=>'2018-2021','NamSinh'=>'1999-02-03','NoiSinh'=>'Tỉnh Trà Vinh','HeDaoTao'=>'Cao đẳng','MaLop'=>'CA18CK','MaCV'=>'00274'),
      	]); 

       DB::table('user')->insert([
          array('username'=>'admin','password'=>'123456')
        ]);
    }
}
