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
                                    <form id="form" action="/pegawai/update/{{$pegawai->id}}"" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input name="nip_pegawai" class="form-control" value="{{$pegawai->nip_pegawai}}">
                                            @if ($errors->has('nip_pegawai'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nip_pegawai') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama" value="{{$pegawai->nama}}">
                                            @if ($errors->has('nama'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Jabatan</label>
                                            <select class="form-control" name="id_jabatan">
                                            <option value="{{$pegawai->id_jabatan}}">{{$pegawai->jabatan}}</option>
                                            <option>-----------------------------------------------------------------</option>
                                             @foreach ($refjabatan as $value)
                                             <option value="{{$value->id}}">{{$value->nama}}</option>
                                             @endforeach 
                                            </select>
                                            @if ($errors->has('id_jabatan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_jabatan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group" name="jenis_kelamin" id="jenis_kelamin">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                            <option value="{{$pegawai->jenis_kelamin}}">{{$pegawai->jenis_kelamin}}</option>
                                           
                                            <option>-------------------</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                             </select>
                                           
                                            @if ($errors->has('jenis_kelamin'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input name="tempat_lahir" class="form-control" value="{{$pegawai->tempat_lahir}}">
                                            @if ($errors->has('tempat_lahir'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            
                                            <input type="date" name="tanggal_lahir" class="form-control" value="{{$pegawai->tanggal_lahir}}">
                                            @if ($errors->has('tanggal_lahir'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Status Pegawai</label>
                                            <select class="form-control" name="status_pegawai">
                                            <option value="{{$pegawai->status_pegawai}}">{{$pegawai->status_pegawai}}</option>
                                           
                                            <option>-------------------</option>
                                            <option value="Honor">
                                                    Honor
                                                </option>
                                                <option value="PNS">
                                                    PNS
                                                </option>
                                                <option value="CPNS">
                                                    CPNS
                                                </option>
                                             </select>

                                           
                                            @if ($errors->has('status_pegawai'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('status_pegawai') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input name="agama" class="form-control" value="{{$pegawai->agama}}">
                                            @if ($errors->has('agama'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('agama') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <input name="alamat" class="form-control" value="{{$pegawai->alamat}}">
                                            @if ($errors->has('alamat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>No Telfon</label>
                                            <input name="no_telfon" class="form-control" value="{{$pegawai->no_telfon}}">
                                            @if ($errors->has('no_telfon'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('no_telfon') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Tunjangan</label>
                                            <input name="tunjangan" class="form-control" value="{{$pegawai->tunjangan}}">
                                            @if ($errors->has('tunjangan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tunjangan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Golongan</label>
                                            <select class="form-control" name="id_referensi_golongan">
                                            <option value="{{$pegawai->id_referensi_golongan}}">{{$pegawai->golongan}}</option>
                                            <option>-----------------------------------------------------------------</option>
                                             @foreach ($refgolongan as $value)
                                             <option value="{{$value->id}}">{{$value->nama_golongan}}</option>
                                             @endforeach 
                                            </select>
                                            @if ($errors->has('id_referensi_golongan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_referensi_golongan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>TMT Jabatan</label>
                                            <input type="date" name="tmt_jabatan" class="form-control" value="{{$pegawai->tmt_jabatan}}">
                                            @if ($errors->has('tmt_jabatan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tmt_jabatan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pertek</label>
                                            <input type="date" name="tgl_pertek" class="form-control" value="{{$pegawai->tgl_pertek}}">
                                            @if ($errors->has('tgl_pertek'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tgl_pertek') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor SK</label>
                                            <input name="no_sk" class="form-control" value="{{$pegawai->no_sk}}">
                                            @if ($errors->has('no_sk'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('no_sk') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal SK</label>
                                            <input type="date" name="tanggal_sk" class="form-control" value="{{$pegawai->tanggal_sk}}">
                                            @if ($errors->has('tanggal_sk'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_sk') }}</strong>
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
