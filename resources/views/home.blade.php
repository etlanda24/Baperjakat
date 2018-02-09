@extends('layouts.app')

@section('content')
<div class="col-md-12"><h1>Dashboard</h1></div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                 <div class="tab-content">
                                    <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        {{$datauser}}
                                    </h3>
                                    <p>
                                        Data User
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="/datauser" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <br>
                            <div class="small-box bg-aqua" >
                                <div class="inner">
                                    <h3>
                                        {{$dataskpd}}
                                    </h3>
                                    <p>
                                        Data SKPD
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="/dataskpd" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <br>
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        {{$pegawai}}
                                    </h3>
                                    <p>
                                        Data Pegawai
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="/pegawai" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>

                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        {{$riwayatjabatan}}<sup style="font-size: 20px"></sup>
                                    </h3>
                                    <p>
                                        Riwayat Jabatan
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/riwayatjabatan" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <br>
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        {{$riwayatdiklat}}<sup style="font-size: 20px"></sup>
                                    </h3>
                                    <p>
                                        Riwayat Diklat
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/riwayatdiklat" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <br>
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        {{$riwayatpendidikan}}<sup style="font-size: 20px"></sup>
                                    </h3>
                                    <p>
                                        Riwayat Pendidikan
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/riwayatpendidikan" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        {{$refjabatan}}
                                    </h3>
                                    <p>
                                        Referensi Jabatan
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/refjabatan" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <br>
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        {{$refjenisdiklat}}
                                    </h3>
                                    <p>
                                        Referensi Jenis Diklat
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/refjenisdiklat" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <br>
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        {{$refgolongan}}
                                    </h3>
                                    <p>
                                        Referensi Golongan
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/refgolongan" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        {{$refjenjangpendidikan}}
                                    </h3>
                                    <p>
                                        Referensi Jenjang Pendidikan
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="/refjenjangpendidikan" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <br>
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        {{$refpendidikan}}
                                    </h3>
                                    <p>
                                        Referensi Pendidikan
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="/refpendidikan" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    </div><!-- /.row -->
                            </div><!-- nav-tabs-custom -->      <!-- <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Home</li>
                    </ol> -->
                </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
