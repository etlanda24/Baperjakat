<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\refjabatan;
use App\dataskpd;

class RefjabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refjabatan = refjabatan::all();
        return view('refjabatan.index',compact('refjabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $refjabatan = refjabatan::all();
       $dataskpd = dataskpd::all();
       return view('refjabatan.create',compact('refjabatan','dataskpd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $refjabatan = new refjabatan();
        $refjabatan->id_instansi = $request->id_instansi;

        $nama_instansi = dataskpd::find($request->id_instansi)->nama;
        $refjabatan->nama_instansi = $nama_instansi;
        $refjabatan->nama = $request->nama;
        $refjabatan->eselon = $request->eselon;
        $refjabatan->unit = $request->unit;
        $refjabatan->save();
        return redirect('/refjabatan');
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
       $refjabatan = refjabatan::find($id);
       $dataskpd = dataskpd::all();
        if(!$refjabatan)
            abort('404');

        return view('refjabatan.edit', compact('refjabatan','dataskpd'));
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
        $refjabatan = refjabatan::find($id);

        $refjabatan->id_instansi = $request->id_instansi;

        $nama_instansi = dataskpd::find($request->id_instansi)->nama;
        $refjabatan->nama_instansi = $nama_instansi;
        $refjabatan->nama_instansi = $nama_instansi;
        $refjabatan->nama = $request->nama;
        $refjabatan->eselon = $request->eselon;
        $refjabatan->unit = $request->unit;
        $refjabatan->save();
        return redirect('/refjabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $refjabatan = refjabatan::find($id);
        $refjabatan->delete();

        return redirect('/refjabatan');
    }
    public function detail($id)
    {
        $refjabatan = refjabatan::find($id);
        if(!$refjabatan)
            abort('404');

        return view('refjabatan.detail', compact('refjabatan'));
    }
}
