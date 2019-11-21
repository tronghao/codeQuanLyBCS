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

 Route::get('/', 'GuestController@getTrangChu');
 Route::post('loc-danh-sach', 'GuestController@locDanhSach');
 Route::get('test', function(){
 	return view('guest.testLocDanhSach');
 });
Route::get('dang-nhap', 'UserController@dangNhap');
// Route::get('thong-ke', 'DanhSachMienController@thongKe');
// Route::get('xem-danh-sach-theo-khoa/{khoa}', 'DanhSachMienController@xemTheoKhoa');
// Route::get('hinh-anh', 'DanhSachMienController@hinhAnh');
// Route::get('dang-nhap', 'DanhSachMienController@getDangNhap');
// Route::post('dang-nhap', 'DanhSachMienController@postDangNhap');

// Route::group(['middleware' => 'thanhvien'], function () {
//     Route::get('them-thanh-vien', 'DanhSachMienController@getThemThanhVien');
//     Route::post('them-thanh-vien', 'DanhSachMienController@postThemThanhVien');
//     Route::get('cuu/{id}', 'DanhSachMienController@cuu');
//     Route::get('sua-thanh-vien/{id}', 'DanhSachMienController@getSuaThanhVien');
//     Route::post('sua-thanh-vien/{id}', 'DanhSachMienController@postSuaThanhVien');
//     Route::get('them-hinh-anh', 'DanhSachMienController@getThemHinhAnh');
//     Route::post('them-hinh-anh', 'DanhSachMienController@postThemHinhAnh');
//     Route::get('dang-xuat', 'DanhSachMienController@dangXuat');
// });



