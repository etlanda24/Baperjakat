@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="
    margin-left: 0px;">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body" style="overflow: auto;">
                    <a href="surat/create"><i class="fa fa-plus"></i> Tambah Data</a>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Pengirim</th>
                                        <th>Penerima</th>                                        
                                        <th>Jenis Surat</th>
                                        <th>Tanggal Surat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($surats as $key)
                                 <tr class="gradeU">
                                    <td>{{$key->nama_pengirim}}</td>
                                    <td>{{$key->nama_penerima}}</td>
                                    <td>{{$key->jenis_surat}}</td>
                                    <td>{{$key->tanggal_surat}}</td>
                                    
                                   <td> <a href="/surat/edit/{{$key->id}}" class="btn btn-info pull-right" >Edit</a>
                                   <form id="{{$key->id}}" action="/surat/delete/{{$key->id}}" method="POST" style="">
                                        {{ csrf_field()}}
                                        <button class="btn btn-danger" onclick="return klik()">Delete</button>
                                        {{method_field('delete')}}
                                        </form></td>
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