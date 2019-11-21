<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $fillable = ['id'];
    public $timestamps = false;

    public function tonTaiUser($user, $pass)
    {
    	$kt = new UserModel();
    	$kq = $kt->whereRaw('usename = ? and password = ?', [$user, $pass])->get()->count();
    	if($kq!=0)
    		return true;
    	else return false;
    }
}}
