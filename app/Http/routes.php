<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('d', function()
{
	return view('admin.trang-chu');
});
Route::get('/{cd?}', 'GuestController@getTrangChu');
Route::post('dang-nhap', 'UserController@dangNhap');
Route::post('loc-danh-sach/{chedo}', 'GuestController@locDanhSach');
// Route::get('thong-ke', 'DanhSachMienController@thongKe');
// Route::get('xem-danh-sach-theo-khoa/{khoa}', 'DanhSachMienController@xemTheoKhoa');
// Route::get('hinh-anh', 'DanhSachMienController@hinhAnh');
// Route::get('dang-nhap', 'DanhSachMienController@getDangNhap');
// Route::post('dang-nhap', 'DanhSachMienController@postDangNhap');

Route::group(['prefix'=>'admin', 'middleware' => 'admin'], function () {
    Route::get('home/{id?}', 'AdminController@getTrangChu');

    Route::post('loc-danh-sach/{chedo}', 'AdminController@locDanhSach');

    Route::post('them/{cheDo?}', 'AdminController@themDuLieu');

    Route::get('xoa-sinh-vien/{maSV}', 'AdminController@xoaSinhVien');
    Route::post('sua/sinh-vien/{maSV}', 'AdminController@suaSinhVien');

    Route::get('xoa-bo-mon/{maBoMon}', 'AdminController@xoaBoMon');
    Route::post('sua/bo-mon/{maBoMon}', 'AdminController@suaBoMon');

    Route::get('xoa-lop/{maLop}', 'AdminController@xoaLop');
    Route::post('sua/lop/{maLop}', 'AdminController@suaLop');

    Route::get('xoa-co-van/{maCV}', 'AdminController@xoaCoVan');
    Route::post('sua/co-van/{maCV}', 'AdminController@suaCoVan');

    Route::get('quan-ly/bomon/{id?}', 'AdminController@quanLyBoMon');
    Route::get('quan-ly/lop/{id?}', 'AdminController@quanLyLop');
    Route::get('quan-ly/cvht/{id?}', 'AdminController@quanLyCoVan');

    Route::post('doi-mat-khau', 'UserController@doiMatKhau');

    Route::get('dang-xuat', 'UserController@dangXuat');
});



