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
                                    <form id="form" action="{{ url('/pegawai/store') }}" method="POST" class="contact_form" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="col-lg-2">
                                            <label>NIP</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="nip_pegawai" class="form-control" placeholder="Masukkan NIP">
                                            @if ($errors->has('nip_pegawai'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nip_pegawai') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Nama</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                                            @if ($errors->has('nama'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                         <div class="col-lg-2">
                                            <label>Jabatan</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <select class="form-control" name="id_jabatan">
                                               @foreach ($refjabatan as $value)
                                                <option value="{{$value->id}}">{{$value->nama}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_jabatan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_jabatan') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                         
                                        <div class="col-lg-2" name="jenis_kelamin" id="jenis_kelamin">
                                            <label>Jenis Kelamin</label>
                                             </div>
                                            <div class="col-lg-10">
                                            <label>
                                                    <input type="radio" name="jenis_kelamin" value="Laki-Laki">
                                                   Laki-laki
                                            </label><br>
                                            <label>
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan">
                                                    Perempuan
                                            </label>
                                            @if ($errors->has('jenis_kelamin'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>Tempat Lahir</label>
                                             </div>
                                            <div class="col-lg-10">
                                            <input name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                                            @if ($errors->has('tempat_lahir'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>Tanggal Lahir</label>
                                             </div>
                                            <div class="col-lg-10">
                                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir">
                                            @if ($errors->has('tanggal_lahir'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>Status Pegawai</label>
                                             </div>
                                            <div class="col-lg-10">
                                            <select class="form-control" name="status_pegawai">
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
                                            @endif<br>
                                        </div>
                                        <div class="col-lg-2"">
                                            <label>Agama</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="agama" class="form-control" placeholder="Masukkan Agama">
                                            @if ($errors->has('agama'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('agama') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>Alamat</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="alamat" class="form-control" placeholder="Masukkan Alamat">
                                            @if ($errors->has('alamat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>No Telfon</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="no_telfon" class="form-control" placeholder="Masukkan Nomor Telfon">
                                            @if ($errors->has('no_telfon'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('no_telfon') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>Tunjangan</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="tunjangan" class="form-control" placeholder="Masukkan Tunjangan">
                                            @if ($errors->has('tunjangan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tunjangan') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Golongan</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <select class="form-control" name="id_referensi_golongan">
                                               @foreach ($refgolongan as $value)
                                                <option value="{{$value->id}}">{{$value->nama_golongan}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_referensi_golongan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_referensi_golongan') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                        <div class="col-lg-2"">
                                            <label>TMT Jabatan</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="date" name="tmt_jabatan" class="form-control" placeholder="Masukkan TMT Jabatan">
                                            @if ($errors->has('tmt_jabatan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tmt_jabatan') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                        <div class="col-lg-2"">
                                            <label>Tanggal Pertek</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="date" name="tgl_pertek" class="form-control" placeholder="Masukkan Tanggal Pertek">
                                            @if ($errors->has('tgl_pertek'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tgl_pertek') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                        <div class="col-lg-2"">
                                            <label>Nomor SK</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="no_sk" class="form-control" placeholder="Masukkan Tunjangan">
                                            @if ($errors->has('no_sk'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('no_sk') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                        <div class="col-lg-2"">
                                            <label>Tanggal SK</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="date" name="tanggal_sk" class="form-control" placeholder="Masukkan Tanggal SK">
                                            @if ($errors->has('tanggal_sk'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_sk') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>

                                        
                                       
                                         
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
