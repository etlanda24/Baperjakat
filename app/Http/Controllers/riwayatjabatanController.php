<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\laporan;
use App\pegawai;
use App\refjabatan;
use App\riwayatjabatan;
use App\user;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class riwayatjabatanController extends Controller
{
    public function index(){
        $riwayatjabatan = riwayatjabatan::all();
        $periode = riwayatjabatan::groupBy('periode')->get();
    	return view('riwayatjabatan.index',compact('riwayatjabatan','periode'));
    }

    public function create(){
        $refjabatan = refjabatan::all();
        $pegawai = pegawai::all();
    	return view('riwayatjabatan.create',compact('refjabatan','pegawai'));
    }

    public function store(Request $request){
        $nama = pegawai::find($request->id_user)->nama;
        $nip = pegawai::find($request->id_user)->nip_pegawai;
        $jenis_jabatan = refjabatan::find($request->id_jabatan)->nama;
    	$riwayatjabatan = new riwayatjabatan();
        $riwayatjabatan->id_user = $request->id_user;
        $riwayatjabatan->nama = $nama;
        $riwayatjabatan->nip_pegawai = $nip;
        $riwayatjabatan->jenis_tempat_bekerja = $request->jenis_tempat_bekerja;
        $riwayatjabatan->id_jabatan = $request->id_jabatan;
        $riwayatjabatan->jenis_jabatan = $jenis_jabatan;
        $riwayatjabatan->unit_kerja = $request->unit_kerja;
        $riwayatjabatan->jabatan = $request->jabatan;
        $riwayatjabatan->mata_pelajaran = $request->mata_pelajaran;
        $riwayatjabatan->no_sk = $request->no_sk;
        $riwayatjabatan->tanggal_sk = $request->tanggal_sk;
        $riwayatjabatan->pejabat_penetap = $request->pejabat_penetap;
        $riwayatjabatan->tmt_jabatan = $request->tmt_jabatan;
        $riwayatjabatan->periode = $request->periode;
        $riwayatjabatan->save();

        // $laporan = new laporan();
        // $laporan->jenis_tempat_bekerja = $request->jenis_tempat_bekerja;
        // $laporan->jenis_jabatan = $request->jenis_jabatan;
        // $laporan->unit_kerja = $request->unit_kerja;
        // $laporan->id_user = $request->id_user;
        // $laporan->nama = $nama;
        // $laporan->id_jabatan = $request->id_jabatan;
        // $laporan->jabatan = $jabatan;
        // $laporan->mata_pelajaran = $request->mata_pelajaran;
        // $laporan->no_sk = $request->no_sk;
        // $laporan->tanggal_sk = $request->tanggal_sk;
        // $laporan->pejabat_penetap = $request->pejabat_penetap;
        // $laporan->tmt_jabatan = $request->tmt_jabatan;
        // $laporan->save();

    	return redirect('/riwayatjabatan');
    }
    public function edit($id)
    {
        $pegawai = pegawai::all();
        $refjabatan = refjabatan::all();
        $riwayatjabatan = riwayatjabatan::find($id);
        if(!$riwayatjabatan)
            abort('404');

        return view('riwayatjabatan.edit', compact('riwayatjabatan','refjabatan','pegawai'));
    }
    public function detail($id)
    {
        $pegawai = pegawai::all();
        $refjabatan = refjabatan::all();
        $riwayatjabatan = riwayatjabatan::find($id);
        if(!$riwayatjabatan)
            abort('404');

        return view('riwayatjabatan.detail', compact('riwayatjabatan','refjabatan','pegawai'));
    }
    public function update(Request $request,$id){
        $nama = pegawai::find($request->id_user)->nama;
        $nip = pegawai::find($request->id_user)->nip_pegawai;
        $jenis_jabatan = refjabatan::find($request->id_jabatan)->nama;
        $riwayatjabatan =riwayatjabatan::find($id);
        $riwayatjabatan->id_user = $request->id_user;
        $riwayatjabatan->nama = $nama;
        $riwayatjabatan->nip_pegawai = $nip;
        $riwayatjabatan->jenis_tempat_bekerja = $request->jenis_tempat_bekerja;
        $riwayatjabatan->id_jabatan = $request->id_jabatan;
        $riwayatjabatan->jenis_jabatan = $jenis_jabatan;
        $riwayatjabatan->unit_kerja = $request->unit_kerja;
        $riwayatjabatan->jabatan = $request->jabatan;
        $riwayatjabatan->mata_pelajaran = $request->mata_pelajaran;
        $riwayatjabatan->no_sk = $request->no_sk;
        $riwayatjabatan->tanggal_sk = $request->tanggal_sk;
        $riwayatjabatan->pejabat_penetap = $request->pejabat_penetap;
        $riwayatjabatan->tmt_jabatan = $request->tmt_jabatan;
        $riwayatjabatan->periode = $request->periode;
        $riwayatjabatan->save();
        

        return redirect('/riwayatjabatan');
    }
    public function delete($id)
    {
     
        $riwayatjabatan = riwayatjabatan::find($id);
        $riwayatjabatan->delete();

        return redirect('/riwayatjabatan');
    }
    public function cetak(Request $request)
    {
        $periode = $request->periode;
        if($periode==0){
            $riwayatjabatan = riwayatjabatan::all();
        }else{
            $riwayatjabatan = riwayatjabatan::where('periode',$periode)->get();
        }
        
        $a = time();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('riwayatjabatan/cetakriwayatjabatan',compact('riwayatjabatan')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($a.'-riwayatjabatan.pdf');
    }
}
