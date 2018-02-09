<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\refpendidikan;

class RefpendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refpendidikan = refpendidikan::all();
        return view('refpendidikan.index',compact('refpendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refpendidikan = refpendidikan::all();
        return view('refpendidikan.create',compact('refpendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $refpendidikan = new refpendidikan();
        $refpendidikan->jurusan = $request->jurusan;
        $refpendidikan->lembaga_pendidikan = $request->lembaga_pendidikan;
        $refpendidikan->kota = $request->kota;
        $refpendidikan->save();
        return redirect('/refpendidikan');
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
        $refpendidikan = refpendidikan::find($id);
        if(!$refpendidikan)
            abort('404');

        return view('refpendidikan.edit', compact('refpendidikan'));
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
        $refpendidikan = refpendidikan::find($id);
        $refpendidikan->jurusan = $request->jurusan;
        $refpendidikan->lembaga_pendidikan = $request->lembaga_pendidikan;
        $refpendidikan->kota = $request->kota;
        $refpendidikan->save();
        return redirect('/refpendidikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $refpendidikan = refpendidikan::find($id);
        $refpendidikan->delete();

        return redirect('/refpendidikan');
    }
    public function detail($id)
    {
        $refpendidikan = refpendidikan::find($id);
        if(!$refpendidikan)
            abort('404');

        return view('refpendidikan.detail', compact('refpendidikan'));
    }
}
