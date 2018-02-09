@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="
    margin-left: 0px;">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body" style="overflow: auto;">
                    
                    
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Nip Pegawai</th>
                                        <th>Jabatan Lama</th>
                                        <th>Jabatan Baru</th>
                                        <th>Periode</th>
                                        @if (Auth::check() && Auth::user()->role == '1')
                                        <th width="10%">ACTION</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                            
                                 @foreach($mutasi as $key)
                                 <tr class="gradeU">
                                    <td>{{$key->nama_pegawai}}</td>
                                    <td>{{$key->nip_pegawai}}</td>
                                    <td>{{$key->nama_jabatan_lama}}</td>
                                    <td>{{$key->nama_jabatan_baru}}</td>
                                    <td>{{$key->created_at->year}}</td>
                                @if (Auth::check() && Auth::user()->role == '1')    
                                   <td> 
                                   <form id="{{$key->id}}" style="">
                                        {{ csrf_field()}}
                                        <div class="btn-group">
                                        <button class="btn btn-danger" onclick="return klik()" formaction="/mutasi/delete/{{$key->id}}" formmethod="POST">Delete</button>
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
                                                <option value="{{$key->year}}">{{$key->year}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                
                                <button class="btn btn-danger" formaction="/mutasi/cetak">Cetak</button></div></form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection