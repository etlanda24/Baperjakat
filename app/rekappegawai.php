<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekappegawai extends Model
{
    protected $guarded=[];

    public function jabatannya()
    {
    	return $this->belongsTo('App\refjabatan','id_jabatan');
    }
}
