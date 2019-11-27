<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CoVanHocTap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covanhoctap', function(Blueprint $table)
        {
            $table->String('MaCV', 10)->unique();
            $table->String('HoTen_CV', 30);
            $table->String('SDT_CV', 10);
            $table->String('Email_CV', 30);
            $table->String('MaBoMon', 10);
            $table->foreign('MaBoMon')->references('MaBoMon')->on('bomon')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covanhoctap');
    }
}
