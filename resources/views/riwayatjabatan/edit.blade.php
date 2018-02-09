@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="
    margin-left: 0px;">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->
 <div class="panel-body">
                            <div>
                                <div class="col-lg-12">
                                    <form id="form" action="/riwayatjabatan/update/{{$riwayatjabatan->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <select name="id_user" class="form-control">
                                            <option value="{{$riwayatjabatan->id_user}}">{{$riwayatjabatan->nama}}</option>
                                            <option>----------------------------------------------------------------------------------------------------------</option>
                                            @foreach($pegawai as $nama)
                                                <option value="{{$nama->id}}">{{$nama->nama}}</option>
                                            @endforeach
                                            </select>
                                            @if ($errors->has('jenis_tempat_bekerja'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jenis_tempat_bekerja') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Tempat Bekerja</label>
                                            
                                            <select name="jenis_tempat_bekerja" class="form-control">
                                                <option value="{{$riwayatjabatan->jenis_tempat_bekerja}}">{{$riwayatjabatan->jenis_tempat_bekerja}}</option>
                                                <option>----------------------------------------------------------------------------------------------------------</option>
                                                <option value="Pemerintah Kota Padang">Pemerintah Kota Padang</option>
                                                <option value="Non Pemerintah Kota">Non Pemerintah Kota Padang</option>
                                            </select>
                                            @if ($errors->has('jenis_tempat_bekerja'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jenis_tempat_bekerja') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Jenis Jabatan</label>
                                            <select name="id_jabatan" class="form-control">
                                                <option value="{{$riwayatjabatan->id_jabatan}}">{{$riwayatjabatan->jenis_jabatan}}</option>
                                                <option>----------------------------------------------------------------------------------------------------------</option>
                                                @foreach ($refjabatan as $value)
                                                   <option value="{{$value->id}}">{{$value->nama}}</option>
                                                @endforeach
                                            </select>
                                            
                                            @if ($errors->has('jenis_jabatan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jenis_jabatan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Unit Kerja</label>
                                            <input type="text" name="unit_kerja" class="form-control" value="{{$riwayatjabatan->unit_kerja}}">
                                            @if ($errors->has('unit_kerja'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('unit_kerja') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Jabatan</label>
                                            <input type="text" class="form-control" name="jabatan" value="{{$riwayatjabatan->jabatan}}">
                                            @if ($errors->has('jabatan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jabatan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Mata Pelajaran</label>
                                            <input name="mata_pelajaran" class="form-control" value="{{$riwayatjabatan->mata_pelajaran}}">
                                            @if ($errors->has('mata_pelajaran'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('mata_pelajaran') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>No SK</label>
                                            <input name="no_sk" class="form-control" value="{{$riwayatjabatan->no_sk}}">
                                            @if ($errors->has('no_sk'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('no_sk') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal SK</label>
                                            <input type="date" name="tanggal_sk" class="form-control" value="{{$riwayatjabatan->tanggal_sk}}">
                                            @if ($errors->has('tanggal_sk'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_sk') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Pejabat Penetap</label>
                                            <input name="pejabat_penetap" type="text" class="form-control" value="{{$riwayatjabatan->pejabat_penetap}}">
                                            @if ($errors->has('pejabat_penetap'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('pejabat_penetap') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>TMT Jabatan</label>
                                            <input type="date" name="tmt_jabatan" class="form-control" value="{{$riwayatjabatan->tmt_jabatan}}">
                                            @if ($errors->has('tmt_jabatan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tmt_jabatan') }}</strong>
                                            </span>
                                            @endif
                                        </div>                                        
                                        <div class="form-group">
                                            <label>Periode</label>
                                            <input name="periode" class="form-control" value="{{$riwayatjabatan->periode}}">
                                            @if ($errors->has('periode'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('periode') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         
                                         
                                        <input type="hidden" name="_method" value="PUT">
                                         
                                        <button type="submit" class="btn btn-primary">Simpan</button>        
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                </div>
                            </div>
            </div>
        </div>
    </div>
</div>
@endsection
