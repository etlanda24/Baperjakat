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
                                    
                                   <td> <form action="/cetak"><button class="btn btn-info">Cetak</button> <button class="btn btn-danger" formaction="/cetak2">Cetak 2</button></form></td>
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