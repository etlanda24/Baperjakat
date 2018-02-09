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
                                    <form id="form" action="/suratsk">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Tanggal Surat</label>
                                            <input name="tanggal_surat" class="form-control" value="{{$suratsk->tanggal_surat}}" disabled>
                                            @if ($errors->has('tanggal_surat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_surat') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Surat</label>
                                            <input name="nomor_surat" class="form-control" value="{{$suratsk->nomor_surat}}" disabled>
                                            @if ($errors->has('nomor_surat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nomor_surat') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Berita Acara</label>
                                            <input name="nomor_berita_acara" class="form-control" value="{{$suratsk->nomor_berita_acara}}" disabled>
                                            @if ($errors->has('nomor_berita_acara'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nomor_berita_acara') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Berita Acara</label>
                                            <input name="tanggal_berita_acara" class="form-control" value="{{$suratsk->tanggal_berita_acara}}" disabled>
                                            @if ($errors->has('tanggal_berita_acara'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_berita_acara') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Urut</label>
                                            <input name="nomor_urut" class="form-control" value="{{$suratsk->nomor_urut}}" disabled>
                                            @if ($errors->has('nomor_urut'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nomor_urut') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <select class="form-control" name="id_pegawai" disabled>
                                            <option value="{{$suratsk->id_pegawai}}">{{$suratsk->nama_pegawai}} - {{$suratsk->nip_pegawai}}</option>
                                            <option disabled="">----------</option>
                                                @foreach ($pegawai as $key)
                                                    <option value="{{$key->id}}">{{$key->nama}} - {{$key->nip_pegawai}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_pegawai'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_pegawai') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan Baru</label>
                                            <select class="form-control" name="id_jabatan_baru" disabled>
                                                <option value="{{$suratsk->id_jabatan_baru}}">{{$suratsk->jabatan_baru}}</option>
                                                <option disabled="">-------------</option>
                                                @foreach ($refjabatan as $key)
                                                    <option value="{{$key->id}}">{{$key->nama}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_jabatan_baru'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_jabatan_baru') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Penetapan</label>
                                            <input name="tanggal_penetapan" class="form-control" value="{{$suratsk->tanggal_penetapan}}" disabled>
                                            @if ($errors->has('tanggal_penetapan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_penetapan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Sekda</label>
                                            <select class="form-control" name="id_sekda" disabled>
                                                <option value="{{$suratsk->id_sekda}}">{{$suratsk->nama_sekda}} - {{$suratsk->nip_sekda}}</option>
                                            <option disabled="">----------</option>
                                                @foreach ($pegawai as $key)
                                                    <option value="{{$key->id}}">{{$key->nama}} - {{$key->nip_pegawai}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_sekda'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_sekda') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Walikota</label>
                                            <select class="form-control" name="id_walikota" disabled>
                                                <option value="{{$suratsk->id_walikota}}">{{$suratsk->nama_walikota}} - {{$suratsk->nip_walikota}}</option>
                                            <option disabled="">----------</option>
                                                @foreach ($pegawai as $key)
                                                    <option value="{{$key->id}}">{{$key->nama}} - {{$key->nip_pegawai}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_walikota'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_walikota') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                       
                                        
                                         
                                        <button type="submit" class="btn btn-primary">Kembali</button> 
                                    </form>
                                </div>
                                </div>
                            </div>
            </div>
        </div>
    </div>
</div>
@endsection
