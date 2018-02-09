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
                                    <form id="form" action="/refpendidikan/update/{{$refpendidikan->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <input type="text" class="form-control" name="jurusan" value="{{$refpendidikan->jurusan}}">
                                            @if ($errors->has('jurusan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('jurusan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Lembaga Pendidikan</label>
                                            <input type="text" class="form-control" name="lembaga_pendidikan" value="{{$refpendidikan->lembaga_pendidikan}}">
                                            @if ($errors->has('lembaga_pendidikan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('lembaga_pendidikan') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input type="text" class="form-control" name="kota" value="{{$refpendidikan->kota}}">
                                            @if ($errors->has('kota'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('kota') }}</strong>
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
