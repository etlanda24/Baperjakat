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
                                    <form id="form" action="{{ url('/surat/store') }}" method="POST" class="contact_form" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        
                                       <div class="col-lg-2"">
                                            <label>Pengirim</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <select class="form-control" name="id_pengirim">
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
                                            <input name="jenis_surat" class="form-control" >
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
                                            <input type="date" name="tanggal_surat" class="form-control" >
                                            @if ($errors->has('tanggal_surat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tanggal_surat') }}</strong>
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
