<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\pegawai;
use App\rekappegawai;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periode = rekappegawai::groupBy('periode')->get();
        $rekappegawai = rekappegawai::all();
        return view('rekappegawai.index',compact('rekappegawai','periode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $checkboxes = $request->input('checkbox');
        if($checkboxes==null){
        }
        else

           foreach($checkboxes as $id) 
        
        {
            
            $pegawai = pegawai::find($id);
            $rekappegawai = new rekappegawai();
            $rekappegawai->nip_pegawai = $pegawai->nip_pegawai;
            $rekappegawai->nama = $pegawai->nama;
            $rekappegawai->id_jabatan = $pegawai->id_jabatan;
            $rekappegawai->jabatan = $pegawai->jabatan;
            $rekappegawai->jenis_kelamin = $pegawai->jenis_kelamin;
            $rekappegawai->tempat_lahir = $pegawai->tempat_lahir;
            $rekappegawai->tanggal_lahir = $pegawai->tanggal_lahir;
            $rekappegawai->status_pegawai = $pegawai->status_pegawai;
            $rekappegawai->agama = $pegawai->agama;
            $rekappegawai->alamat = $pegawai->alamat;
            $rekappegawai->no_telfon = $pegawai->no_telfon;
            $rekappegawai->tunjangan = $pegawai->tunjangan;
            $rekappegawai->id_referensi_golongan = $pegawai->id_referensi_golongan;
            $rekappegawai->golongan = $pegawai->golongan;
            $rekappegawai->tmt_jabatan = $pegawai->tmt_jabatan;
            $rekappegawai->tgl_pertek = $pegawai->tgl_pertek;
            $rekappegawai->no_sk = $pegawai->no_sk;
            $rekappegawai->tanggal_sk = $pegawai->tanggal_sk;
            $rekappegawai->periode = $request->periode;
            $rekappegawai->save();
        }
            return redirect('/rekappegawai');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
     
        $rekappegawai = rekappegawai::find($id);
        $rekappegawai->delete();

        return redirect('rekappegawai');
    }
    public function detail($id)
        {
            $rekappegawai = rekappegawai::find($id);
            if(!$rekappegawai)
                abort('404');

            return view('rekappegawai.detail', compact('rekappegawai'));
        }
    public function cetak(Request $request)
    {
        $periode = $request->periode;
        if($periode==0){
            $rekappegawai = rekappegawai::all();
        }else{
            $rekappegawai = rekappegawai::where('periode',$periode)->get();
        }
        
        $a = time();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('rekappegawai/cetakrekappegawai',compact('rekappegawai','periode')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($a.'-rekappegawai.pdf');
    }
}
