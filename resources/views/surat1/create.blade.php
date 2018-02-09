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
                                    <form id="form" action="{{ url('/surat1/store') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Tanggal Surat</label>
                                            <input type="date" name="tanggal_surat" class="form-control" placeholder="Masukkan Tanggal Surat">
                                            @if ($errors->has('tanggal_surat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_surat') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Surat</label>
                                            <input name="nomor_surat" class="form-control" placeholder="Masukkan Nomor Surat">
                                            @if ($errors->has('nomor_surat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nomor_surat') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor</label>
                                            <input name="nomor" class="form-control" placeholder="Masukkan Nomor">
                                            @if ($errors->has('nomor'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nomor') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control" placeholder="Masukkan Tanggal">
                                            @if ($errors->has('tanggal'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Keputusan</label>
                                            <input name="nomor_keputusan" class="form-control" placeholder="Masukkan Nomor Keputusan">
                                            @if ($errors->has('nomor_keputusan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nomor_keputusan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Tanggal Keputusan</label>
                                            <input type="date" name="tanggal_keputusan" class="form-control" placeholder="Masukkan Tanggal Keputusan">
                                            @if ($errors->has('tanggal_keputusan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_keputusan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Tanggal Pelantikan</label>
                                            <input type="date" name="tanggal_pelantikan" class="form-control" placeholder="Masukkan Tanggal Pelantikan">
                                            @if ($errors->has('tanggal_pelantikan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_pelantikan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pegawai Lama</label>
                                            <select class="form-control" name="id_pegawai_lama">
                                                @foreach ($pegawai as $key)
                                                    <option value="{{$key->id}}">{{$key->nama}} - {{$key->nip_pegawai}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_pegawai_lama'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_pegawai_lama') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pegawai Baru</label>
                                            <select class="form-control" name="id_pegawai_baru">
                                                @foreach ($pegawai as $key)
                                                    <option value="{{$key->id}}">{{$key->nama}} - {{$key->nip_pegawai}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_pegawai_baru'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_pegawai_baru') }}</strong>
                                            </span>
                                            @endif
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
