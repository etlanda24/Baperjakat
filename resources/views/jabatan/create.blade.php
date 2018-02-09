@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/jabatan/store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <label for="id" class="col-md-4 control-label">id</label>

                            <div class="col-md-6">
                                <input id="id" type="number" class="form-control" name="id" value="{{ old('id') }}">

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama_jabatan') ? ' has-error' : '' }}">
                            <label for="nama_jabatan" class="col-md-4 control-label">nama_jabatan</label>

                            <div class="col-md-6">
                                <input id="nama_jabatan" type="text" class="form-control" name="nama_jabatan" value="{{ old('nama_jabatan') }}">

                                @if ($errors->has('nama_jabatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_jabatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_unit') ? ' has-error' : '' }}">
                            <label for="id_unit" class="col-md-4 control-label">id_unit</label>

                            <div class="col-md-6">
                                <input id="id_unit" type="number" class="form-control" name="id_unit" value="{{ old('nama_jabatan') }}">

                                @if ($errors->has('id_unit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_unit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('id_eselon') ? ' has-error' : '' }}">
                            <label for="id_eselon" class="col-md-4 control-label">id_eselon</label>

                            <div class="col-md-6">
                                <input id="id_eselon" type="number" class="form-control" name="id_eselon" value="{{ old('nama_jabatan') }}">

                                @if ($errors->has('id_eselon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_eselon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    simpan
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
