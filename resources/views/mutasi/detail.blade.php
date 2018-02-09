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
                                    <form id="form" action="/refgolongan">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nama Golongan</label>
                                            <input name="nama_golongan" class="form-control" value="{{$refgolongan->nama_golongan}}" readonly>
                                            @if ($errors->has('nama_golongan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nama_golongan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Pangkat</label>
                                            <input name="pangkat" class="form-control" value="{{$refgolongan->pangkat}}" readonly>
                                            @if ($errors->has('pangkat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('pangkat') }}</strong>
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
