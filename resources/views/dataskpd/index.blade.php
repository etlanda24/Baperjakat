@extends('layouts.app')

@section('content')
<div class="col-md-12"><h1>Data SKPD</h1></div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="
    margin-left: 0px;">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body" style="overflow: auto;">
@if (Auth::check() && Auth::user()->role == '1')
                    <a href="dataskpd/create"><i class="fa fa-plus"></i> Tambah Data</a>
@endif
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        
                                        @if (Auth::check() && Auth::user()->role == '1')
                                        <th width="15%">ACTION</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($dataskpd as $key)
                                 <tr class="gradeU">

                                    <td>{!!substr($key->nama,0,100)!!}</td>
                                    <td>{!!substr($key->alamat,0,100)!!}</td>
                                   @if (Auth::check() && Auth::user()->role == '1') 
                                   <td> <a href="/dataskpd/edit/{{$key->id}}" class="btn btn-info pull-right" >Edit</a>
                                   <form id="{{$key->id}}" action="/dataskpd/delete/{{$key->id}}" method="POST" style="">
                                        {{ csrf_field()}}
                                        <button class="btn btn-danger" onclick="return klik()">Delete</button>
                                        {{method_field('delete')}}
                                        </form></td>
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