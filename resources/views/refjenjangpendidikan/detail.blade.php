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
                                    <form id="form" action="/refjenjangpendidikan">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>SD</label>
                                            <input type="text" class="form-control" name="sd" value="{{$refjenjangpendidikan->sd}}" readonly>
                                            @if ($errors->has('sd'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('sd') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>SMP</label>
                                            <input type="text" class="form-control" name="smp" value="{{$refjenjangpendidikan->smp}}" readonly>
                                            @if ($errors->has('smp'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('smp') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>SMA</label>
                                            <input type="text" class="form-control" name="sma" value="{{$refjenjangpendidikan->sma}}" readonly>
                                            @if ($errors->has('sma'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('sma') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>S1</label>
                                            <input type="text" class="form-control" name="s1" value="{{$refjenjangpendidikan->s1}}" readonly>
                                            @if ($errors->has('s1'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('s1') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>S2</label>
                                            <input type="text" class="form-control" name="s2" value="{{$refjenjangpendidikan->s2}}" readonly>
                                            @if ($errors->has('s2'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('s2') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>S3</label>
                                            <input type="text" class="form-control" name="s3" value="{{$refjenjangpendidikan->s3}}" readonly>
                                            @if ($errors->has('s3'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('s3') }}</strong>
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
