<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\pegawai;
use App\refpendidikan;
use App\riwayatpendidikan;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class riwayatpendidikanController extends Controller
{
    public function index(){
    	$riwayatpendidikan = riwayatpendidikan::all();
    	return view('riwayatpendidikan.index',compact('riwayatpendidikan'));
    }

    public function create(){
        $pegawai = pegawai::all();
        $refpendidikan = refpendidikan::all();
    	return view('riwayatpendidikan.create',compact('pegawai','refpendidikan'));
    }

    public function store(Request $request){

        $nama_pegawai = pegawai::find($request->id_pegawai)->nama;
        $nip_pegawai = pegawai::find($request->id_pegawai)->nip_pegawai;


        $nama_jurusan = refpendidikan::find($request->id_jurusan)->jurusan;
        $nama_lembaga = refpendidikan::find($request->id_jurusan)->lembaga_pendidikan;



    	$riwayatpendidikan = new riwayatpendidikan();
        $riwayatpendidikan->id_pegawai = $request->id_pegawai;
        $riwayatpendidikan->nama_pegawai = $nama_pegawai;
        $riwayatpendidikan->nip_pegawai = $nip_pegawai;
        $riwayatpendidikan->tingkat_pendidikan = $request->tingkat_pendidikan;
        $riwayatpendidikan->nama_lembaga = $nama_lembaga;
        $riwayatpendidikan->fakultas = $request->fakultas;        
        $riwayatpendidikan->id_jurusan = $request->id_jurusan;
        $riwayatpendidikan->jurusan = $nama_jurusan;
        $riwayatpendidikan->alamat = $request->alamat;
        $riwayatpendidikan->provinsi = $request->provinsi;
        $riwayatpendidikan->kota = $request->kota;
        $riwayatpendidikan->rektor = $request->rektor;
        $riwayatpendidikan->no_ijazah = $request->no_ijazah;
        $riwayatpendidikan->tgl_ijazah = $request->tgl_ijazah;
        $riwayatpendidikan->save();

    	return redirect('/riwayatpendidikan');
    }
    public function edit($id)
    {
        $pegawai = pegawai::all();
        $riwayatpendidikan = riwayatpendidikan::find($id);
        $refpendidikan = refpendidikan::all();
        if(!$riwayatpendidikan)
            abort('404');

        return view('riwayatpendidikan.edit', compact('riwayatpendidikan','pegawai','refpendidikan'));
    }
    public function detail($id)
    {
        $pegawai = pegawai::all();
        $riwayatpendidikan = riwayatpendidikan::find($id);
        if(!$riwayatpendidikan)
            abort('404');

        return view('riwayatpendidikan.detail', compact('riwayatpendidikan','pegawai'));
    }
    public function update(Request $request,$id){
        $nama_pegawai = pegawai::find($request->id_pegawai)->nama;
        $nip_pegawai = pegawai::find($request->id_pegawai)->nip_pegawai;


        $nama_jurusan = refpendidikan::find($request->id_jurusan)->jurusan;
        $nama_lembaga = refpendidikan::find($request->id_jurusan)->lembaga_pendidikan;

        $riwayatpendidikan = riwayatpendidikan::find($id);
        $riwayatpendidikan->id_pegawai = $request->id_pegawai;
        $riwayatpendidikan->nama_pegawai = $nama_pegawai;
        $riwayatpendidikan->nip_pegawai = $nip_pegawai;
        $riwayatpendidikan->tingkat_pendidikan = $request->tingkat_pendidikan;
        $riwayatpendidikan->nama_lembaga = $nama_lembaga;
        $riwayatpendidikan->fakultas = $request->fakultas;        
        $riwayatpendidikan->id_jurusan = $request->id_jurusan;
        $riwayatpendidikan->jurusan = $nama_jurusan;
        $riwayatpendidikan->alamat = $request->alamat;
        $riwayatpendidikan->provinsi = $request->provinsi;
        $riwayatpendidikan->kota = $request->kota;
        $riwayatpendidikan->rektor = $request->rektor;
        $riwayatpendidikan->no_ijazah = $request->no_ijazah;
        $riwayatpendidikan->tgl_ijazah = $request->tgl_ijazah;
        $riwayatpendidikan->save();
        

        return redirect('/riwayatpendidikan');
    }
    public function delete($id)
    {
     
        $riwayatpendidikan = riwayatpendidikan::find($id);
        $riwayatpendidikan->delete();

        return redirect('/riwayatpendidikan');
    }
    public function cetak()
    {
        $riwayatpendidikan = riwayatpendidikan::all();
        $a = time();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('riwayatpendidikan/cetakriwayatpendidikan',compact('riwayatpendidikan')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($a.'-riwayatpendidikan.pdf');
    }
}
