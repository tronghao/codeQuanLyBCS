<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lop', function(Blueprint $table)
        {
            $table->String('MaLop', 10)->unique();
            $table->String('TenLop', 30);
            $table->String('EmailLop', 30);
            $table->String('MaBoMon', 10);
            $table->String('MaCV', 10);
            $table->foreign('MaBoMon')->references('MaBoMon')->on('bomon');
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
        Schema::dropIfExists('lop');
    }
}
