@extends('layouts.app')

@section('content')
<br><br>
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
                                        <th>Jenis Tempat Bekerja</th>
                                        <th>Jenis Jabatan</th>
                                        <th>Unit Kerja</th>
                                        <th>Jabatan</th>
                                        <th>Mata Pelajaran</th>
                                        <th>No SK</th>
                                        <th>Tanggal SK</th>
                                        <th>Pejabat Penetap</th>
                                        <th>TMT Jabatan</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($laporan as $key)
                                 <tr class="gradeU">
                                    <td>{{$key->jenis_tempat_bekerja}}</td>
                                    <td>{{$key->jenis_jabatan}}</td>
                                    <td>{{$key->unit_kerja}}</td>
                                    <td>{{$key->jabatan}}</td>
                                    <td>{{$key->mata_pelajaran}}</td>
                                    <td>{{$key->no_sk}}</td>
                                    <td>{{$key->tanggal_sk}}</td>
                                    <td>{{$key->pejabat_penetap}}</td>
                                    <td>{{$key->tmt_jabatan}}</td>
                                  
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