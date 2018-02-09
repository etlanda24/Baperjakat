<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat3 extends Model
{
	protected $guarded = [];

	public function lama()
	{
		return $this->belongsTo('App\pegawai','id_pegawai_lama');
	}

	public function baru()
	{
		return $this->belongsTo('App\pegawai','id_pegawai_baru');
	}
}
