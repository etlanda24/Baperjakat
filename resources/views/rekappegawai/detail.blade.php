@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1" style="
    margin-left: 0px;">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->
 <div class="panel-body">
                            <div>
                                <div class="col-lg-12">
                                    <form id="form" action="/rekappegawai" >
                                    {{ csrf_field() }}
                                        <div class="col-lg-2">
                                            <label>NIP</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="nip_pegawai" class="form-control" value="{{$rekappegawai->nip_pegawai}}" readonly>
                                            <br>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Nama</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="text" class="form-control" name="nama" value="{{$rekappegawai->nama}}" readonly>
                                           <br>
                                        </div>
                                         <div class="col-lg-2">
                                            <label>Jabatan</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="text" name="" class="form-control" value="{{$rekappegawai->id_jabatan}}" readonly>
                                            <br>
                                        </div>
                                         
                                        <div class="col-lg-2" name="jenis_kelamin" id="jenis_kelamin">
                                            <label>Jenis Kelamin</label>
                                             </div>
                                            <div class="col-lg-10">
                                            <input type="text" class="form-control" value="{{$rekappegawai->jenis_kelamin}}" readonly>
                                            <br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>Tempat Lahir</label>
                                             </div>
                                            <div class="col-lg-10">
                                            <input name="tempat_lahir" class="form-control" value="{{$rekappegawai->tempat_lahir}}" readonly>
                                            <br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>Tanggal Lahir</label>
                                             </div>
                                            <div class="col-lg-10">
                                            <input name="tanggal_lahir" class="form-control" value="{{$rekappegawai->tanggal_lahir}}" readonly>
                                            <br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>Status rekappegawai</label>
                                             </div>
                                            <div class="col-lg-10">
                                            <input type="text" name="" class="form-control" value="{{$rekappegawai->status_pegawai}}" readonly>
                                            <br>
                                        </div>
                                        <div class="col-lg-2"">
                                            <label>Agama</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="agama" class="form-control" value="{{$rekappegawai->agama}}" readonly>
                                            <br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>Alamat</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="alamat" class="form-control" value="{{$rekappegawai->alamat}}" readonly>
                                            <br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>No Telfon</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="no_telfon" class="form-control" value="{{$rekappegawai->no_telfon}}" readonly>
                                            <br>
                                        </div>
                                         <div class="col-lg-2"">
                                            <label>Tunjangan</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input name="tunjangan" class="form-control" value="{{$rekappegawai->tunjangan}}" readonly>
                                            <br>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Golongan</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="text" class="form-control" name="" value="{{$rekappegawai->id_referensi_golongan}}" readonly>
                                            <br>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>TMT Jabatan</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="text" class="form-control" name="" value="{{$rekappegawai->tmt_jabatan}}" readonly>
                                            <br>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Tanggal Pertek</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="text" class="form-control" name="" value="{{$rekappegawai->tgl_pertek}}" readonly>
                                            <br>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Nomor SK</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="text" class="form-control" name="" value="{{$rekappegawai->no_sk}}" readonly>
                                            <br>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Tanggal SK</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="text" class="form-control" name="" value="{{$rekappegawai->tanggal_sk   }}" readonly>
                                            <br>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Periode</label>
                                            </div>
                                            <div class="col-lg-10">
                                            <input type="text" class="form-control" name="" value="{{$rekappegawai->periode}}" readonly>
                                            <br>
                                        </div>
                                        

                                        
                                       
                                         
                                        <button type="submit" class="btn btn-primary">Kembali</button>    
                                    </form>
                                </div>
                                
                                </div>
                            </div>
            </div>
        </div>
    </div>
</div>
@endsection
