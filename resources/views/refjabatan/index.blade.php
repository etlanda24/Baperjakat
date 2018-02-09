@extends('layouts.app')

@section('content')
<div class="col-md-12"><h1>Referensi Jabatan</h1></div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="
    margin-left: 0px;">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body" style="overflow: auto;">
                    @if (Auth::check() && Auth::user()->role == '1')
                    <a href="/refjabatan/create"><i class="fa fa-plus"></i> Tambah Data</a>
                    @endif
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID Instansi</th>
                                        <th>Nama</th>
                                        <th>Eselon</th>
                                        <th>Unit</th>
                                        
                                         @if (Auth::check() && Auth::user()->role == '1')
                                        <th width="20%">ACTION</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($refjabatan as $key)
                                 <tr class="gradeU">
                                    <td>{{$key->id_instansi}}</td>
                                    <td>{{$key->nama}}</td>
                                    <td>{{$key->eselon}}</td>
                                    <td>{{$key->unit}}</td>
                                   @if (Auth::check() && Auth::user()->role == '1') 
                                   <td> 
                                   <form id="{{$key->id}}" style="">
                                        {{ csrf_field()}}
                                        <div class="btn-group">
                                        <button class="btn btn-info" formaction="/refjabatan/edit/{{$key->id}}">Edit</button>
                                        <button class="btn btn-warning" formaction="/refjabatan/detail/{{$key->id}}">Detail</button>

                                        <button class="btn btn-danger" onclick="return klik()" formaction="/refjabatan/delete/{{$key->id}}" formmethod="POST">Delete</button>
                                        {{method_field('delete')}}
                                        </div></form></td>
                                    @endif
                                 </tr>
                                 @endforeach
                                </tbody>
                                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection