<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\refjenisdiklat;

class RefjenisdiklatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refjenisdiklat = refjenisdiklat::all();
        return view('refjenisdiklat.index',compact('refjenisdiklat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refjenisdiklat = refjenisdiklat::all();
        return view('refjenisdiklat.create',compact('refjenisdiklat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $refjenisdiklat = new refjenisdiklat();
        $refjenisdiklat->nama_diklat = $request->nama_diklat;
        $refjenisdiklat->save();
        return redirect('/refjenisdiklat');
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
        $refjenisdiklat = refjenisdiklat::find($id);
        if(!$refjenisdiklat)
            abort('404');

        return view('refjenisdiklat.edit', compact('refjenisdiklat'));
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
        $refjenisdiklat = refjenisdiklat::find($id);
        $refjenisdiklat->nama_diklat = $request->nama_diklat;
        $refjenisdiklat->save();
        return redirect('/refjenisdiklat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $refjenisdiklat = refjenisdiklat::find($id);
        $refjenisdiklat->delete();

        return redirect('/refjenisdiklat');
    }
    public function detail($id)
    {
        $refjenisdiklat = refjenisdiklat::find($id);
        if(!$refjenisdiklat)
            abort('404');

        return view('refjenisdiklat.detail', compact('refjenisdiklat'));
    }
}
