<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\refjenjangpendidikan;

class RefjenjangpendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refjenjangpendidikan = refjenjangpendidikan::all();
        return view('refjenjangpendidikan.index',compact('refjenjangpendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refjenjangpendidikan = refjenjangpendidikan::all();
        return view('refjenjangpendidikan.create',compact('refjenjangpendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $refjenjangpendidikan = new refjenjangpendidikan();
        $refjenjangpendidikan->tingkat_pendidikan = $request->tingkat_pendidikan;
        $refjenjangpendidikan->save();
        return redirect('/refjenjangpendidikan');
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
        $refjenjangpendidikan = refjenjangpendidikan::find($id);
        if(!$refjenjangpendidikan)
            abort('404');

        return view('refjenjangpendidikan.edit', compact('refjenjangpendidikan'));
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
        $refjenjangpendidikan = refjenjangpendidikan::find($id);
        $refjenjangpendidikan->tingkat_pendidikan = $request->tingkat_pendidikan;
        $refjenjangpendidikan->save();
        return redirect('/refjenjangpendidikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $refjenjangpendidikan = refjenjangpendidikan::find($id);
        $refjenjangpendidikan->delete();

        return redirect('/refjenjangpendidikan');
    }
    public function detail($id)
    {
        $refjenjangpendidikan = refjenjangpendidikan::find($id);
        if(!$refjenjangpendidikan)
            abort('404');

        return view('refjenjangpendidikan.detail', compact('refjenjangpendidikan'));
    }
}
