@extends('layouts.app')

@section('content')


<?php
function format_indo($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);               
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1]. " ". $tahun;
    return($result);
}
?>

<div class="col-md-12"><h1>Surat SK</h1></div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="
    margin-left: 0px;">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body" style="overflow: auto;">
                    @if (Auth::check() && Auth::user()->role == '1')
                    <a href="/suratsk/create"><i class="fa fa-plus"></i> Tambah Data</a>
                    @endif
                    <br>
                    <form>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        
                                        <th>Tanggal Surat</th>
                                        <th>Nomor Surat</th>
                                        <th>Nama Pegawai</th>
                                        <th>Nip Pegawai</th>
                                        <th>Jabatan Lama</th>
                                        <th>Jabatan Baru</th>
                                        
                                         @if (Auth::check() && Auth::user()->role == '1')
                                        <th width="25%">ACTION</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                            
                                 @foreach($suratsk as $key)
                                 <tr class="gradeU">
                                    
                                    <td>{{ format_indo($key->tanggal_surat)}}</td>
                                    <td>{{$key->nomor_surat}}</td>
                                    <td>{{$key->nama_pegawai}}</td>
                                    <td>{{$key->nip_pegawai}}</td>
                                    <td>{{$key->jabatan_lama}}</td>
                                    <td>{{$key->jabatan_baru}}</td>
                                   @if (Auth::check() && Auth::user()->role == '1') 
                                   <td> 
                                   <form id="{{$key->id}}" style="">
                                        {{ csrf_field()}}
                                        <div class="btn-group">
                                        <button class="btn btn-info" formaction="/suratsk/edit/{{$key->id}}">Edit</button>
                                        <button class="btn btn-warning" formaction="/suratsk/detail/{{$key->id}}">Detail</button>
                                        <button class="btn btn-success" formaction="/suratsk/cetak/{{$key->id}}">Cetak</button>

                                        <button class="btn btn-danger" onclick="return klik()" formaction="/suratsk/delete/{{$key->id}}" formmethod="POST">Delete</button>
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