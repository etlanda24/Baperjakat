@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/eselon/store') }}">
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

                        <div class="form-group{{ $errors->has('tunjangan') ? ' has-error' : '' }}">
                            <label for="tunjangan" class="col-md-4 control-label">Tunjangan</label>

                            <div class="col-md-6">
                                <input id="tunjangan" type="tunjangan" class="form-control" name="tunjangan" value="{{ old('tunjangan') }}">

                                @if ($errors->has('tunjangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tunjangan') }}</strong>
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
