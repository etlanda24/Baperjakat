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
                                    <form id="form" action="/surat/update/{{$surats->id}}" method="POST" class="contact_form" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        
                                       <div class="col-lg-2"">
                                            <label>Pengirim</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <select class="form-control" name="id_pengirim">
                                            <option value="{{$surats->id_pengirim}}">{{$surats->nama_pengirim}}</option>
                                            <option>---------------</option>
                                            @foreach($pegawai as $nama)
                                            <option value="{{$nama->id}}">{{$nama->nama}}</option>
                                            @endforeach                                          </select>
                                            @if ($errors->has('id_pengirim'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_pengirim') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>Penerima</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <select class="form-control" name="id_penerima">
                                            <option value="{{$surats->id_penerima}}">{{$surats->nama_penerima}}</option>
                                            <option>---------------</option>
                                            @foreach($pegawai as $nama)
                                            <option value="{{$nama->id}}">{{$nama->nama}}</option>
                                            @endforeach                                          </select>
                                            @if ($errors->has('id_penerima'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('id_penerima') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                        <div class="col-lg-2"">
                                            <label>Jenis Surat</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="jenis_surat" class="form-control" value="{{$surats->jenis_surat}}">
                                            @if ($errors->has('jenis_surat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jenis_surat') }}</strong>
                                            </span>
                                            @endif<br>
                                        </div>
                                        <div class="col-lg-2"">
                                            <label>Tanggal Surat</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="date" name="tanggal_surat" class="form-control" value="{{$surats->tanggal_surat}}">
                                            @if ($errors->has('tanggal_surat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_surat') }}</strong>
                                            </span>
                                            @endif<br>
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
