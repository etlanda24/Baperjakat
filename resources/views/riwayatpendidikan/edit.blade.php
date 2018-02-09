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
                                    <form id="form" action="/riwayatpendidikan/update/{{$riwayatpendidikan->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <select name="id_pegawai" class="form-control">
                                                <option value="{{$riwayatpendidikan->id_pegawai}}">{{$riwayatpendidikan->nama_pegawai}}</option>
                                                <option>--------------</option>
                                                @foreach ($pegawai as $value)
                                                <option value="{{$value->id}}">{{$value->nama}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_pegawai'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_pegawai') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tingkat Pendidikan</label>
                                            <select name="tingkat_pendidikan" class="form-control">
                                                <option value="{{$riwayatpendidikan->tingkat_pendidikan}}">{{$riwayatpendidikan->tingkat_pendidikan}}</option>
                                                <option>--------------</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                            @if ($errors->has('tingkat_pendidikan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tingkat_pendidikan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Fakultas</label>
                                            <input name="fakultas" class="form-control" value="{{$riwayatpendidikan->fakultas}}">
                                            @if ($errors->has('fakultas'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('fakultas') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Jurusan</label>
                                            <select class="form-control" name="id_jurusan">
                                                <option value="{{$riwayatpendidikan->id_jurusan}}">{{$riwayatpendidikan->jurusan}}</option>
                                                <option disabled>----------</option>
                                                @foreach ($refpendidikan as $key)
                                                    <option value="{{$key->id}}">{{$key->jurusan}}</option>
                                                @endforeach
                                            </select>
                                            
                                            @if ($errors->has('id_jurusan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_jurusan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                           <textarea name="alamat" class="form-control" >{{$riwayatpendidikan->alamat}}</textarea>
                                            @if ($errors->has('alamat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <select class="form-control" name="provinsi">
                                            <option value="{{$riwayatpendidikan->provinsi}}">{{$riwayatpendidikan->provinsi}}</option>
                                            <option>------------</option>
                                            <option value="Aceh">Aceh</option>
                                            <option value="Bali">Bali</option>
                                            <option value="Banten">Banten</option>
                                            <option value="Bengkulu">Bengkulu</option>
                                            <option value="Gorontalo">Gorontalo</option>
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Jambi">Jambi</option>
                                            <option value="Jawa Barat">Jawa Barat</option>
                                            <option value="Jawa Tengah">Jawa Tengah</option>
                                            <option value="Jawa Timur">Jawa Timur</option>
                                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                                            <option value="Lampung">Lampung</option>
                                            <option value="Maluku">Maluku</option>
                                            <option value="Maluku Utara">Maluku Utara</option>
                                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                            <option value="Papua">Papua</option>
                                            <option value="Papua Barat">Papua Barat</option>
                                            <option value="Riau">Riau</option>
                                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                                            <option value="Sumatera Barat">Sumatera Barat</option>
                                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                                            <option value="Sumatera Utara">Sumatera Utara</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                            </select>
                                            @if ($errors->has('provinsi'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('provinsi') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten/Kota</label>
                                            <input name="kota" class="form-control" value="{{$riwayatpendidikan->kota}}">
                                            @if ($errors->has('kota'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('kota') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Kepsek/Rektor</label>
                                            <input name="rektor" class="form-control" value="{{$riwayatpendidikan->rektor}}">
                                            @if ($errors->has('rektor'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('rektor') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Ijazah</label>
                                            <input name="no_ijazah" class="form-control" value="{{$riwayatpendidikan->no_ijazah}}">
                                            @if ($errors->has('no_ijazah'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('no_ijazah') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Ijazah</label>
                                            <input type="date" name="tgl_ijazah" class="form-control" value="{{$riwayatpendidikan->tgl_ijazah}}">
                                            @if ($errors->has('tgl_ijazah'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tgl_ijazah') }}</strong>
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
