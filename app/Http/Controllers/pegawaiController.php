<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pegawai;
use App\dataskpd;
use App\refjabatan;
use App\refgolongan;
use App\User;
use App\Mutasi;
use Dompdf\Dompdf;

class pegawaiController extends Controller
{
     public function index(){
        $pegawais = pegawai::all();

    	return view('pegawai.index',compact('pegawais'));
    }

    public function create(){

        $refjabatan = refjabatan::all();
        $refgolongan = refgolongan::all();
        $user = User::all();
    	return view('pegawai.create',compact('refjabatan','user','refgolongan'));
    }

    public function store(Request $request){
        $jabatan = refjabatan::find($request->id_jabatan)->nama;
        $golongan = refgolongan::find($request->id_referensi_golongan)->nama_golongan;
        
    	$pegawai = new pegawai();
    	$pegawai->nip_pegawai = $request->nip_pegawai;       
        $pegawai->nama = $request->nama;        
        $pegawai->id_jabatan = $request->id_jabatan;
        $pegawai->jabatan = $jabatan;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
    	$pegawai->tempat_lahir = $request->tempat_lahir;
    	$pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->status_pegawai = $request->status_pegawai;
    	$pegawai->agama = $request->agama;
        $pegawai->alamat = $request->alamat;
        $pegawai->no_telfon = $request->no_telfon;
        $pegawai->tunjangan = $request->tunjangan;
        $pegawai->id_referensi_golongan = $request->id_referensi_golongan;
        $pegawai->golongan = $golongan;
        $pegawai->tmt_jabatan = $request->tmt_jabatan;
        $pegawai->tgl_pertek = $request->tgl_pertek;
        $pegawai->no_sk = $request->no_sk;
        $pegawai->tanggal_sk = $request->tanggal_sk;
    	$pegawai->save();

    	return redirect('/pegawai');
    }
    public function update(Request $request, $id)
    {
        $jabatanbaru = $request->id_jabatan;
        $jabatanlama = pegawai::find($id)->id_jabatan;

        $jabatan = refjabatan::find($request->id_jabatan)->nama;
        $golongan = refgolongan::find($request->id_referensi_golongan)->nama_golongan;


        if($jabatanbaru == $jabatanlama)
        {
            
        }
        else
        {
           $mutasi = new Mutasi;
           $mutasi->id_pegawai = $id;
           $mutasi->nip_pegawai = $request->nip_pegawai;
           $mutasi->nama_pegawai = $request->nama; 
           $mutasi->id_jabatan_lama = $jabatanlama; 
           $mutasi->nama_jabatan_lama =  pegawai::find($id)->jabatan;
           $mutasi->no_sk_lama = pegawai::find($id)->no_sk;
           $mutasi->tanggal_sk_lama = pegawai::find($id)->tanggal_sk; 
           $mutasi->tmt_jabatan_lama = pegawai::find($id)->tmt_jabatan;
           $mutasi->golongan_lama = pegawai::find($id)->golongan;
           $mutasi->instansi_lama = refjabatan::find($jabatanlama)->nama_instansi;

           $mutasi->id_jabatan_baru = $jabatanbaru; 
           $mutasi->nama_jabatan_baru = $jabatan;
           $mutasi->no_sk_baru = $request->no_sk;
           $mutasi->tanggal_sk_baru = $request->tanggal_sk; 
           $mutasi->tmt_jabatan_baru = $request->tmt_jabatan;
           $mutasi->golongan_baru = $golongan;
           $mutasi->instansi_baru = refjabatan::find($jabatanbaru)->nama_instansi;
           $mutasi->save();           
        }
        
        $pegawai = pegawai::find($id);
        $pegawai->nip_pegawai = $request->nip_pegawai;       
        $pegawai->nama = $request->nama;        
        $pegawai->id_jabatan = $request->id_jabatan;
        $pegawai->jabatan = $jabatan;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->status_pegawai = $request->status_pegawai;
        $pegawai->agama = $request->agama;
        $pegawai->alamat = $request->alamat;
        $pegawai->no_telfon = $request->no_telfon;
        $pegawai->tunjangan = $request->tunjangan;
        $pegawai->id_referensi_golongan = $request->id_referensi_golongan;
        $pegawai->golongan = $golongan;        
        $pegawai->tmt_jabatan = $request->tmt_jabatan;
        $pegawai->tgl_pertek = $request->tgl_pertek;
        $pegawai->no_sk = $request->no_sk;
        $pegawai->tanggal_sk = $request->tanggal_sk;
        $pegawai->save();

        
        

       
        return redirect('/pegawai');
    }

    public function delete($id)
    {
     
        $pegawai = pegawai::find($id);
        $pegawai->delete();

        return redirect('pegawai');
    }

    public function detail($id)
    {
        $pegawai = pegawai::find($id);
        if(!$pegawai)
            abort('404');

        return view('pegawai.detail', compact('pegawai'));
    }

    public function edit($id)
    {
         $refjabatan = refjabatan::all();
         $refgolongan = refgolongan::all();
         $pegawai = pegawai::find($id);
         $user = User::all();
        if(!$pegawai)
            abort('404');

        return view('pegawai.edit', compact('pegawai','user','refjabatan','refgolongan'));
    }
    public function cetak()
    {
        $pegawais = pegawai::all();
        $a = time();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pegawai/cetakpegawai',compact('pegawais')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($a.'-pegawai.pdf');
    }
}
