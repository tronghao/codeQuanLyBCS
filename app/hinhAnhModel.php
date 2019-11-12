<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhAnhModel extends Model
{
    protected $table = 'HinhAnh';
    protected $fillable = ['id'];
    public $timestamps = false;
}
