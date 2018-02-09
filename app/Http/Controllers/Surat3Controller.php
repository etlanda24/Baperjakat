<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\pegawai;
use App\surat3;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class Surat3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat3 = surat3::all();
        return view('surat3.index',compact('surat3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = pegawai::all();

        return view('surat3.create',compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $surat3 = new surat3();
        $surat3->create($request->all());
        return redirect('/surat3');
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
        $surat3 = surat3::find($id);
        $pegawai = pegawai::all();

        return view('surat3.edit',compact('surat3','pegawai'));

    }

    public function detail($id)
    {
        $surat3 = surat3::find($id);
        $pegawai = pegawai::all();

        return view('surat3.detail',compact('surat3','pegawai'));

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
        $surat3 = surat3::find($id);
        $surat3->update($request->all());
        return redirect('/surat3');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $surat3 = surat3::find($id);
        $surat3->delete();

        return redirect('/surat3');
    }
    
    public function cetak($id)
    {

        //ngambil data surat
        $surat3 = surat3::find($id);

        //masukkan ke template
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('surat3/surat3',compact('surat3')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Surat Menduduki Jabatan'.time().'.pdf');
 
    }
}
