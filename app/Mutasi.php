<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
protected $guarded = [];

	public function refjabatanlamas()
    {
    	return $this->hasMany('App\refjabatan','id','id_jabatan_lama');
    }

    public function refjabatanbarus()
    {
    	return $this->hasMany('App\refjabatan','id','id_jabatan_baru');
    }
}
