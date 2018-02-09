<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\refgolongan;

class RefgolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refgolongan = refgolongan::all();
        return view('refgolongan.index',compact('refgolongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refgolongan = refgolongan::all();
        return view('refgolongan.create',compact('refgolongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $refgolongan = new refgolongan();
        $refgolongan->nama_golongan = $request->nama_golongan;
        $refgolongan->pangkat = $request->pangkat;
        $refgolongan->save();
        return redirect('/refgolongan');
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
        $refgolongan = refgolongan::find($id);
        if(!$refgolongan)
            abort('404');

        return view('refgolongan.edit', compact('refgolongan'));
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
        $refgolongan = refgolongan::find($id);
        $refgolongan->nama_golongan = $request->nama_golongan;
        $refgolongan->pangkat = $request->pangkat;
        $refgolongan->save();
        return redirect('/refgolongan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $refgolongan = refgolongan::find($id);
        $refgolongan->delete();

        return redirect('/refgolongan');
    }
    public function detail($id)
    {
        $refgolongan = refgolongan::find($id);
        if(!$refgolongan)
            abort('404');

        return view('refgolongan.detail', compact('refgolongan'));
    }
}
