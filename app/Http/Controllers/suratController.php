<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\pegawai;
use App\refgolongan;
use App\refjabatan;
use App\suratsk;
use App\surat1;
use App\User;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class suratController extends Controller
{
    public function testing(){
        $pegawai = pegawai::find(2);
        $suratsk = suratsk::find(2);

        $surat1 = surat1::find(1);
        return view('testing',compact('surat1'));
    }
     public function indexsk(){
    	$suratsk = suratsk::all();

    	return view('suratsk.index',compact('suratsk'));
    }

    public function create(){
        $pegawai = pegawai::all();
        $refjabatan = refjabatan::all();
    	return view('suratsk.create',compact('pegawai','refjabatan'));
    }

    public function store(Request $request){
        $suratsk = new suratsk();
        $suratsk->tanggal_surat = $request->tanggal_surat;
        $suratsk->nomor_surat = $request->nomor_surat;
        $suratsk->nomor_berita_acara = $request->nomor_berita_acara;
        $suratsk->tanggal_berita_acara = $request->tanggal_berita_acara;
        $suratsk->nomor_urut = $request->nomor_urut;
        $suratsk->tanggal_penetapan = $request->tanggal_penetapan;

        $suratsk->id_pegawai = $request->id_pegawai;

        $nama_pegawai = pegawai::find($request->id_pegawai)->nama;
        $nip_pegawai = pegawai::find($request->id_pegawai)->nip_pegawai;
        $golongan_pegawai = pegawai::find($request->id_pegawai)->golongan;
        $jabatan_lama = pegawai::find($request->id_pegawai)->jabatan;
        
        $suratsk->nama_pegawai = $nama_pegawai;
        $suratsk->nip_pegawai = $nip_pegawai;
        $suratsk->golongan_pegawai = $golongan_pegawai;
        $suratsk->jabatan_lama = $jabatan_lama;

        $suratsk->id_jabatan_baru = $request->id_jabatan_baru;
        $jabatan_baru = refjabatan::find($request->id_jabatan_baru)->nama;
        $suratsk->jabatan_baru = $jabatan_baru;

        $suratsk->id_sekda = $request->id_sekda;
        $nama_sekda = pegawai::find($request->id_sekda)->nama;
        $nip_sekda = pegawai::find($request->id_sekda)->nip_pegawai;
        $suratsk->nama_sekda = $nama_sekda;
        $suratsk->nip_sekda = $nip_sekda;

        $suratsk->id_walikota = $request->id_walikota;
        $nama_walikota = pegawai::find($request->id_walikota)->nama;
        $nip_walikota = pegawai::find($request->id_walikota)->nip_pegawai;
        $suratsk->nama_walikota = $nama_walikota;
        $suratsk->nip_walikota = $nip_walikota;


        $suratsk->save();
    	return redirect('/suratsk');
    }
    public function delete($id)
    {
        $surat = suratsk::find($id);
        $surat->delete();
        return redirect('/suratsk');
    }
    public function edit($id)
    {   
        $pegawai = pegawai::all();
        $suratsk = suratsk::find($id);
        $refjabatan = refjabatan::all();
        return view('suratsk.edit',compact('suratsk','pegawai','refjabatan'));
    }
    public function detail($id)
    {   
        $pegawai = pegawai::all();
        $suratsk = suratsk::find($id);
        $refjabatan = refjabatan::all();
        return view('suratsk.detail',compact('suratsk','pegawai','refjabatan'));
    }
    public function update(Request $request,$id)
    {
       
        $suratsk = suratsk::find($id);
        $suratsk->tanggal_surat = $request->tanggal_surat;
        $suratsk->nomor_surat = $request->nomor_surat;
        $suratsk->nomor_berita_acara = $request->nomor_berita_acara;
        $suratsk->tanggal_berita_acara = $request->tanggal_berita_acara;
        $suratsk->nomor_urut = $request->nomor_urut;
        $suratsk->tanggal_penetapan = $request->tanggal_penetapan;

        $suratsk->id_pegawai = $request->id_pegawai;

        $nama_pegawai = pegawai::find($request->id_pegawai)->nama;
        $nip_pegawai = pegawai::find($request->id_pegawai)->nip_pegawai;
        $golongan_pegawai = pegawai::find($request->id_pegawai)->golongan;
        $jabatan_lama = pegawai::find($request->id_pegawai)->jabatan;
        
        $suratsk->nama_pegawai = $nama_pegawai;
        $suratsk->nip_pegawai = $nip_pegawai;
        $suratsk->golongan_pegawai = $golongan_pegawai;
        $suratsk->jabatan_lama = $jabatan_lama;

        $suratsk->id_jabatan_baru = $request->id_jabatan_baru;
        $jabatan_baru = refjabatan::find($request->id_jabatan_baru)->nama;
        $suratsk->jabatan_baru = $jabatan_baru;

        $suratsk->id_sekda = $request->id_sekda;
        $nama_sekda = pegawai::find($request->id_sekda)->nama;
        $nip_sekda = pegawai::find($request->id_sekda)->nip_pegawai;
        $suratsk->nama_sekda = $nama_sekda;
        $suratsk->nip_sekda = $nip_sekda;

        $suratsk->id_walikota = $request->id_walikota;
        $nama_walikota = pegawai::find($request->id_walikota)->nama;
        $nip_walikota = pegawai::find($request->id_walikota)->nip_pegawai;
        $suratsk->nama_walikota = $nama_walikota;
        $suratsk->nip_walikota = $nip_walikota;


        $suratsk->save();

        return redirect('/suratsk'); 
    }
    public function cetak($id)
    {
        //ngambil data surat
        $suratsk = suratsk::find($id);

        //masukkan ke template
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('suratsk/suratsk',compact('suratsk')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Surat SK'.time().'.pdf');
 
    }

    public function cetak2()
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('surat/surat'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Surat SK'.time().'.pdf');
    }


    public function surat1()
    {
       $dompdf = new Dompdf();
       $dompdf->loadHtml(view('surat/surat'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('surat1.pdf');
 
    }

    public function surat2()
    {
       $dompdf = new Dompdf();
       $dompdf->loadHtml(view('surat/surat3'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('surat2.pdf');
 
    }

    public function surat3()
    {
       $dompdf = new Dompdf();
       $dompdf->loadHtml(view('surat/surat3-b'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('surat3.pdf');
 
    }

    public function surat4()
    {
       $dompdf = new Dompdf();
       $dompdf->loadHtml(view('surat/surat3-c'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('surat4.pdf');
 
    }


    public function checkbox(Request $request)
    {
       $checkboxes = $request->input('checkbox');
      
       foreach($checkboxes as $id) 
    {
        $golongan = refgolongan::find($id);
        $golonganbaru = new refgolongan();
        $golonganbaru->nama_golongan = $golongan->nama_golongan;
        $golonganbaru->pangkat = $golongan->pangkat;
        $golonganbaru->save();
        // DB::table('customer')->where('id', $id)->delete();
    }
        return redirect('/refgolongan');
    }
}
