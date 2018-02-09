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
                                    <form id="form" action="/refjenisdiklat/update/{{$refjenisdiklat->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nama Diklat</label>
                                            <input type="text" class="form-control" name="nama_diklat" value="{{$refjenisdiklat->nama_diklat}}">
                                            @if ($errors->has('nama_diklat'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nama_diklat') }}</strong>
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
