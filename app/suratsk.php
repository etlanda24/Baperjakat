<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suratsk extends Model
{
	protected $guarded = [];

	public function pegawai()
	{
		return $this->belongsTo('App\pegawai','id_pegawai');
	}

	public function sekda()
	{
		return $this->belongsTo('App\pegawai','id_sekda');
	}
}
