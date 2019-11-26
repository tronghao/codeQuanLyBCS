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
    	$kq = $kt->whereRaw('username = ? and password = ?', [$user, $pass])->get()->count();
    	if($kq>0)
    		return true;
    	else return false;
    }

    public function updateMatKhau($user, $pass)
    {
        $kt = UserModel::where('username', '=', $user)->first();
        $kt->password = $pass;
        $kt->save();
    }
}
