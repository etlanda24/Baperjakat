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
                                    <form id="form" action="/datauser/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="name" class="form-control" value="{{$user->name}}">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" class="form-control" value="{{$user->email}}">
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input name="password" class="form-control" placeholder="Masukkan Password Baru">
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
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
