<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SinhVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhvien', function(Blueprint $table)
        {
            $table->String('MaSV', 10)->unique();
            $table->String('HoTen_SV', 30);
            $table->String('SDT_SV', 10);
            $table->String('Email_SV', 30);
            $table->String('ChucVu_SV', 10);
            $table->String('ChuyenNganh', 40);
            $table->String('KhoaHoc', 9);
            $table->DateTime('NamSinh');
            $table->String('NoiSinh', 50);
            $table->String('HeDaoTao', 9);
            $table->String('MaLop', 10);
            $table->String('MaCV', 10);
            $table->foreign('MaLop')->references('MaLop')->on('lop');
            $table->foreign('MaCV')->references('MaCV')->on('covanhoctap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sinhvien');
    }
}
