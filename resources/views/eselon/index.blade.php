@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table id="eselon" name="eselon" class="table table-bordered">
                        <thead>
                            <td>Id</td>
                            <td>Tunjangan</td>
                        </thead>
                        <tbody>
                            @foreach($eselons as $key)
                            <tr>
                                <td>{{$key->id}}</td>
                                <td>{{$key->tunjangan}}</td>
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
