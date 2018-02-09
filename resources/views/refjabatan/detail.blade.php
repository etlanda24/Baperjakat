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
                                    <form id="form" action="/refjabatan">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nama Instansi</label>
                                            <input name="nama_instansi" class="form-control" value="{{$refjabatan->nama_instansi}}" readonly>
                                            @if ($errors->has('nama_instansi'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nama_instansi') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" class="form-control" value="{{$refjabatan->nama}}" readonly>
                                            @if ($errors->has('nama'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Eselon</label>
                                            <input name="eselon" class="form-control" value="{{$refjabatan->eselon}}" readonly>
                                            @if ($errors->has('eselon'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('eselon') }}</strong>
                                            </span>
                                            @endif
                                        </div><div class="form-group">
                                            <label>Unit</label>
                                            <input name="unit" class="form-control" value="{{$refjabatan->unit}}" readonly>
                                            @if ($errors->has('unit'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('unit') }}</strong>
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
