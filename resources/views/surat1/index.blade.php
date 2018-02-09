@extends('layouts.app')

@section('content')
<div class="col-md-12"><h1>Surat Pelantikan</h1></div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="
    margin-left: 0px;">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body" style="overflow: auto;">
                    @if (Auth::check() && Auth::user()->role == '1')
                    <a href="/surat1/create"><i class="fa fa-plus"></i> Tambah Data</a>
                    @endif
                    <br>
                    <form>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        
                                        <th>Tanggal Surat</th>
                                        <th>Nomor Surat</th>
                                        <th>Tanggal Pelantikan</th>
                                        <th>Pegawai Lama</th>
                                        <th>Jabatan Pegawai Lama</th>
                                        <th>Pegawai Baru</th>
                                        <th>Jabatan Pegawai Baru</th>
                                        
                                         @if (Auth::check() && Auth::user()->role == '1')
                                        <th width="25%">ACTION</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                            
                                 @foreach($surat1 as $key)
                                 <tr class="gradeU">
                                    
                                    <td>{{$key->tanggal_surat}}</td>
                                    <td>{{$key->nomor_surat}}</td>
                                    <td>{{$key->tanggal_pelantikan}}</td>
                                    <td>{{$key->lama->nama}}</td>
                                    <td>{{$key->lama->jabatannya->nama}}</td>
                                    <td>{{$key->baru->nama}}</td>
                                    <td>{{$key->baru->jabatannya->nama}}</td>
                                   @if (Auth::check() && Auth::user()->role == '1') 
                                   <td> 
                                   <form id="{{$key->id}}" style="">
                                        {{ csrf_field()}}
                                        <div class="btn-group">
                                        <button class="btn btn-info" formaction="/surat1/edit/{{$key->id}}">Edit</button>
                                        <button class="btn btn-warning" formaction="/surat1/detail/{{$key->id}}">Detail</button>
                                        <button class="btn btn-success" formaction="/surat1/cetak/{{$key->id}}">Cetak</button>

                                        <button class="btn btn-danger" onclick="return klik()" formaction="/surat1/delete/{{$key->id}}" formmethod="POST">Delete</button>
                                        {{method_field('delete')}}
                                        </div></form></td>
                                    @endif
                                 </tr>
                                 @endforeach
                                 
                                
                                
                                </tbody>
                                </table>
                              </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection