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
                                    <form id="form" action="{{ url('/refjenjangpendidikan/store') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Tingkat Pendidikan</label>
                                            <input name="tingkat_pendidikan" class="form-control" placeholder="Masukkan Tingkat Pendidikan" required="">
                                            @if ($errors->has('tingkat_pendidikan'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('tingkat_pendidikan') }}</strong>
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
