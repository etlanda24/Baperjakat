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
                                    <form id="form" action="{{ url('/refjabatan/store') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" class="form-control" placeholder="Masukkan Nama">
                                            @if ($errors->has('nama'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Instansi</label>
                                            <select class="form-control" name="id_instansi">
                                            @foreach ($dataskpd as $data)
                                                 <option value="{{$data->id}}"> {{$data->nama}} </option>
                                             @endforeach 
                                            </select>
                                            @if ($errors->has('nama'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Eselon</label>
                                            <input name="eselon" class="form-control" placeholder="Masukkan Eselon">
                                            @if ($errors->has('eselon'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('eselon') }}</strong>
                                            </span>
                                            @endif
                                        </div><div class="form-group">
                                            <label>Unit</label>
                                            <input name="unit" class="form-control" placeholder="Masukkan Unit">
                                            @if ($errors->has('unit'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('unit') }}</strong>
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
