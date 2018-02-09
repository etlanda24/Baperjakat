<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\pegawai;
use App\refjenisdiklat;
use App\riwayatdiklat;
use App\user;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class riwayatdiklatController extends Controller
{
   public function index(){
    	$riwayatdiklat = riwayatdiklat::all();        
        $periode = riwayatdiklat::groupBy('periode')->get();
    	return view('riwayatdiklat.index',compact('riwayatdiklat','periode'));
    }

    public function create(){
        $pegawai = pegawai::all();
        $refjenisdiklat = refjenisdiklat::all();
    	return view('riwayatdiklat.create',compact('pegawai','refjenisdiklat'));
    }

    public function store(Request $request){
    	$riwayatdiklat = new riwayatdiklat();
        $nama = pegawai::find($request->id_user)->nama;
        $riwayatdiklat->id_user = $request->id_user;
        $riwayatdiklat->nama = $nama;
        $riwayatdiklat->jenis_diklat = $request->jenis_diklat;
        $riwayatdiklat->nama_diklat = $request->nama_diklat;
        $riwayatdiklat->tempat_diklat = $request->tempat_diklat;
        $riwayatdiklat->penyelenggara_diklat = $request->penyelenggara_diklat;
        $riwayatdiklat->angkatan = $request->angkatan;
        $riwayatdiklat->tanggal_mulai = $request->tanggal_mulai;
        $riwayatdiklat->tanggal_selesai = $request->tanggal_selesai;
        $riwayatdiklat->jumlah_jam = $request->jumlah_jam;
        $riwayatdiklat->nomor_sttp = $request->nomor_sttp;
        $riwayatdiklat->tanggal_sttp = $request->tanggal_sttp;
        $riwayatdiklat->periode = $request->periode;
    	
    	$riwayatdiklat->save();

    	return redirect('/riwayatdiklat');
    }
    public function edit($id)
    {
         $riwayatdiklat = riwayatdiklat::find($id);
         $refjenisdiklat = refjenisdiklat::all();
         $pegawai = pegawai::all();
        if(!$riwayatdiklat)
            abort('404');

        return view('riwayatdiklat.edit', compact('riwayatdiklat','pegawai','refjenisdiklat'));
    }
    public function detail($id)
    {
         $riwayatdiklat = riwayatdiklat::find($id);
         $refjenisdiklat = refjenisdiklat::all();
         $pegawai = pegawai::all();
        if(!$riwayatdiklat)
            abort('404');

        return view('riwayatdiklat.detail', compact('riwayatdiklat','pegawai','refjenisdiklat'));
    }
    public function update(Request $request,$id){
        $riwayatdiklat = riwayatdiklat::find($id);
        $nama = pegawai::find($request->id_user)->nama;
        $riwayatdiklat->id_user = $request->id_user;
        $riwayatdiklat->nama = $nama;
        $riwayatdiklat->jenis_diklat = $request->jenis_diklat;
        $riwayatdiklat->nama_diklat = $request->nama_diklat;
        $riwayatdiklat->tempat_diklat = $request->tempat_diklat;
        $riwayatdiklat->penyelenggara_diklat = $request->penyelenggara_diklat;
        $riwayatdiklat->angkatan = $request->angkatan;
        $riwayatdiklat->tanggal_mulai = $request->tanggal_mulai;
        $riwayatdiklat->tanggal_selesai = $request->tanggal_selesai;
        $riwayatdiklat->jumlah_jam = $request->jumlah_jam;
        $riwayatdiklat->nomor_sttp = $request->nomor_sttp;
        $riwayatdiklat->tanggal_sttp = $request->tanggal_sttp;
        $riwayatdiklat->periode = $request->periode;
        
        $riwayatdiklat->save();

        return redirect('/riwayatdiklat');
    }
    public function delete($id)
    {
     
        $riwayatdiklat = riwayatdiklat::find($id);
        $riwayatdiklat->delete();

        return redirect('/riwayatdiklat');
    }
    public function cetak(Request $request)
    {
        $periode = $request->periode;
        if($periode==0){
            $riwayatdiklat = riwayatdiklat::all();
        }else{
            $riwayatdiklat = riwayatdiklat::where('periode',$periode)->get();
        }

        $a = time();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('riwayatdiklat/cetakriwayatdiklat',compact('riwayatdiklat')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($a.'-riwayatdiklat.pdf');
    }
}
