@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table id="jabatan" name="jabatan" class="table table-bordered">
                        <thead>
                            <td>Id</td>
                            <td>nama_jabatan</td>
                             <td>id_unit</td>
                            <td>id_eselon</td>
                        </thead>
                        <tbody>
                            @foreach($jabatans as $key)
                            <tr>
                                <td>{{$key->id}}</td>
                                <td>{{$key->nama_jabatan}}</td>
                                <td>{{$key->id_unit}}</td>
                                <td>{{$key->id_eselon}}</td>
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
