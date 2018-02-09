<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = "datapegawais";
    protected $guarded = [];

    public function golongan()
    {
        return $this->belongsTo('App\refgolongan');
    }

    public function suratsks()
    {
        return $this->hasMany('App\suratsk','id_pegawai');
    }

    public function surat_sekdas()
    {
        return $this->hasMany('App\suratsk','id_sekda');
    }

    public function surat1_lamas()
    {
        return $this->hasMany('App\surat1','id_pegawai_lama');
    }
    public function surat1_barus()
    {
        return $this->hasMany('App\surat1','id_pegawai_baru');
    }

    public function surat2_lamas()
    {
        return $this->hasMany('App\surat2','id_pegawai_lama');
    }
    public function surat2_barus()
    {
        return $this->hasMany('App\surat2','id_pegawai_baru');
    }
    public function surat3_lamas()
    {
        return $this->hasMany('App\surat3','id_pegawai_lama');
    }
    public function surat3_barus()
    {
        return $this->hasMany('App\surat3','id_pegawai_baru');
    }

    public function jabatannya()
    {
    	return $this->belongsTo('App\refjabatan','id_jabatan');
    }
}
