<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\pegawai;
use App\surat2;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class Surat2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat2 = surat2::all();
        return view('surat2.index',compact('surat2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = pegawai::all();

        return view('surat2.create',compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $surat2 = new surat2();
        $surat2->create($request->all());
        return redirect('/surat2');
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
        $surat2 = surat2::find($id);
        $pegawai = pegawai::all();

        return view('surat2.edit',compact('surat2','pegawai'));

    }

    public function detail($id)
    {
        $surat2 = surat2::find($id);
        $pegawai = pegawai::all();

        return view('surat2.detail',compact('surat2','pegawai'));

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
        $surat2 = surat2::find($id);
        $surat2->update($request->all());
        return redirect('/surat2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $surat2 = surat2::find($id);
        $surat2->delete();

        return redirect('/surat2');
    }
    public function cetak($id)
    {
        //ngambil data surat
        $surat2 = surat2::find($id);

        //masukkan ke template
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('surat2/surat2',compact('surat2')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Surat Melaksanakan Tugas'.time().'.pdf');
 
    }
}
