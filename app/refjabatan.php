<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class refjabatan extends Model
{
   protected $guarded = [];

   public function pegawais()
    {
    	return $this->hasMany('App\pegawai','id_jabatan');
    }

    public function rekappegawais()
    {
    	return $this->hasMany('App\rekappegawai','id_jabatan');
    }

    public function dataskpds()
    {
    	return $this->hasMany('App\dataskpd','id_instansi');
    }
	public function mutasilama()
	{
		return $this->belongsTo('App\Mutasi','id_jabatan_lama','id');
	}

	public function mutasibaru()
	{
		return $this->belongsTo('App\Mutasi','id','id_jabatan_baru');
	}

}
