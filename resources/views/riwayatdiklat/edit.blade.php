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
                                    <form id="form" action="/riwayatdiklat/update/{{$riwayatdiklat->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <select class="form-control" name="id_user">
                                            <option value="{{$riwayatdiklat->id_user}}">{{$riwayatdiklat->nama}}</option>
                                            <option>------------------------------------------------</option>
                                            @foreach ($pegawai as $user)
                                            <option value="{{$user->id}}">{{$user->nama}}</option>
                                            @endforeach    
                                            </select>
                                            @if ($errors->has('id_user'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_user') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Diklat</label>
                                            <select name="jenis_diklat" class="form-control">
                                                <option value="{{$riwayatdiklat->jenis_diklat}}">{{$riwayatdiklat->jenis_diklat}}</option>
                                                <option>-----------</option>
                                                @foreach ($refjenisdiklat as $value)
                                                    <option value="{{$value->nama_diklat}}">{{$value->nama_diklat}}</option>
                                                @endforeach
                                            </select>
                                            
                                            @if ($errors->has('jenis_diklat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jenis_diklat') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Nama Diklat</label>
                                            <input name="nama_diklat" class="form-control" value="{{$riwayatdiklat->nama_diklat}}">
                                            @if ($errors->has('nama_diklat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nama_diklat') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Tempat Diklat</label>
                                            <input type="text" name="tempat_diklat" class="form-control" value="{{$riwayatdiklat->tempat_diklat}}">
                                            @if ($errors->has('tempat_diklat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tempat_diklat') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Penyelenggara Diklat</label>
                                            <input name="penyelenggara_diklat" type="text" class="form-control" value="{{$riwayatdiklat->penyelenggara_diklat}}">
                                            @if ($errors->has('penyelenggara_diklat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('penyelenggara_diklat') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Angkatan</label>
                                            <input name="angkatan" class="form-control" value="{{$riwayatdiklat->angkatan}}">
                                            @if ($errors->has('angkatan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('angkatan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Tanggal Mulai</label>
                                            <input type="date" name="tanggal_mulai" class="form-control" value="{{$riwayatdiklat->tanggal_mulai}}">
                                            @if ($errors->has('tanggal_mulai'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_mulai') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Selesai</label>
                                            <input type="date" name="tanggal_selesai" class="form-control" value="{{$riwayatdiklat->tanggal_selesai}}">
                                            @if ($errors->has('tanggal_selesai'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_selesai') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Jumlah Jam</label>
                                            <input name="jumlah_jam" type="text" class="form-control" value="{{$riwayatdiklat->jumlah_jam}}">
                                            @if ($errors->has('jumlah_jam'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jumlah_jam') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor STTP</label>
                                            <input name="nomor_sttp" class="form-control" value="{{$riwayatdiklat->nomor_sttp}}">
                                            @if ($errors->has('nomor_sttp'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nomor_sttp') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Tanggal STTP</label>
                                            <input type="date" name="tanggal_sttp" class="form-control" value="{{$riwayatdiklat->tanggal_sttp}}">
                                            @if ($errors->has('tanggal_sttp'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_sttp') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Periode</label>
                                            <input name="periode" class="form-control" value="{{$riwayatdiklat->periode}}">
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
