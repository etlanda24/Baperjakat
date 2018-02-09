<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class refgolongan extends Model
{
    protected $guarded = [];

    public function pegawais()
    {
    	return $this->hasMany('App\pegawai');
    }
}
