@extends('layouts.app')

@section('content')
<div class="col-md-12"><h1>Data Pegawai</h1></div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="
    margin-left: 0px;">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body" style="overflow: auto;">
                    @if (Auth::check() && Auth::user()->role == '1')
                    <a href="pegawai/create"><i class="fa fa-plus"></i> Tambah Data</a>
                    @endif
                    <br>
                    <form action="/rekappegawai/create">
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nip</th>
                                        <th>Nama</th>                                        
                                        <th>Jabatan</th>
                                        
                                        @if (Auth::check() && Auth::user()->role == '1')
                                        <th width="20%">ACTION</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($pegawais as $key)
                                 <tr class="gradeU">
                                    <td><input type="checkbox" name="checkbox[]" value="{{$key->id}}"></td>
                                    <td>{{$key->nip_pegawai}}</td>
                                    <td>{{$key->nama}}</td>
                                    <td>{{$key->jabatan}}</td>
                                   @if (Auth::check() && Auth::user()->role == '1')
                                    <td>
                                        <form id="{{$key->id}}" style="">
                                        {{ csrf_field()}}
                                        <div class="btn-group">
                                        <button class="btn btn-info" formaction="/pegawai/edit/{{$key->id}}">Edit</button>
                                        <button class="btn btn-warning" formaction="/pegawai/detail/{{$key->id}}">Detail</button>

                                        <button class="btn btn-danger" onclick="return klik()" formaction="/pegawai/delete/{{$key->id}}" formmethod="POST">Delete</button>
                                        {{method_field('delete')}}
                                        </div></form>
                                    </td>
                                    @endif
                                 </tr>
                                 @endforeach
                                </tbody>
                                </table><div class="btn-group">


                            <div class="col-lg-12" style="padding-left: 0">
                                    
                                    <div class="col-lg-6" style="padding-left: 0">
                                       <input class="form-control" name="periode" placeholder="Periode" >
                                    </div>
                                <div class="btn-group">
                                <button class="btn btn-primary">Export</button>
                                <button class="btn btn-danger" formaction="/pegawai/cetak">Cetak</button>
                                </div>
                            </div>
                            </form>

                                
                                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection