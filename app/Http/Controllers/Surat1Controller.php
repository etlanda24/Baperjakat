<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\pegawai;
use App\surat1;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class Surat1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat1 = surat1::all();
        return view('surat1.index',compact('surat1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = pegawai::all();

        return view('surat1.create',compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $surat1 = new surat1();
        $surat1->create($request->all());
        return redirect('/surat1');
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
        $surat1 = surat1::find($id);
        $pegawai = pegawai::all();

        return view('surat1.edit',compact('surat1','pegawai'));

    }

    public function detail($id)
    {
        $surat1 = surat1::find($id);
        $pegawai = pegawai::all();

        return view('surat1.detail',compact('surat1','pegawai'));

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
        $surat1 = surat1::find($id);
        $surat1->update($request->all());
        return redirect('/surat1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $surat1 = surat1::find($id);
        $surat1->delete();

        return redirect('/surat1');
    }

    public function cetak($id)
    {
        //ngambil data surat
        $surat1 = surat1::find($id);

        //masukkan ke template
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('surat1/surat1',compact('surat1')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Surat Pelantikan'.time().'.pdf');
 
    }
}
