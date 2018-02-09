@extends('layouts.app')

@section('content')
<div class="col-md-12"><h1>Riwayat Diklat</h1></div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="
    margin-left: 0px;">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body" style="overflow: auto;">
                    @if (Auth::check() && Auth::user()->role == '1')
                    <a href="riwayatdiklat/create"><i class="fa fa-plus"></i> Tambah Data</a>
                    @endif
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Jenis Diklat</th>
                                        <th>Nama Diklat</th>
                                        <th>Periode</th>
                                        <th>Tempat Diklat</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        @if (Auth::check() && Auth::user()->role == '1')
                                        <th width="20%">ACTION</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($riwayatdiklat as $key)
                                 <tr class="gradeU">
                                    <td>{{$key->nama}}</td>
                                    <td>{{$key->jenis_diklat}}</td>
                                    <td>{{$key->nama_diklat}}</td>
                                    <td>{{$key->periode}}</td>
                                    <td>{{$key->tempat_diklat}}</td>
                                    <td>{{$key->tanggal_mulai}}</td>
                                    <td>{{$key->tanggal_selesai}}</td>
                                    @if (Auth::check() && Auth::user()->role == '1')
                                    <td> 
                                   <form id="{{$key->id}}" style="">
                                        {{ csrf_field()}}
                                        <div class="btn-group">
                                        <button class="btn btn-info" formaction="/riwayatdiklat/edit/{{$key->id}}">Edit</button>
                                        <button class="btn btn-warning" formaction="/riwayatdiklat/detail/{{$key->id}}">Detail</button>

                                        <button class="btn btn-danger" onclick="return klik()" formaction="/riwayatdiklat/delete/{{$key->id}}" formmethod="POST">Delete</button>
                                        {{method_field('delete')}}
                                        </div></form></td>
                                    @endif
                                 </tr>
                                 @endforeach
                                </tbody>
                                </table>
                                 <form>
                               <div class="col-lg-12" style="padding-left: 0">

                                    <div class="col-lg-4" style="padding-left: 0">
                                        <select name="periode" class="form-control">
                                            <option disabled selected>Pilih Periode Cetak</option>
                                            <option value="0">Semua</option>
                                            @foreach ($periode as $key)
                                                <option value="{{$key->periode}}">{{$key->periode}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                
                                <button class="btn btn-danger" formaction="/riwayatdiklat/cetak">Cetak</button></div></form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection