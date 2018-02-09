<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dataskpd;
use App\Http\Requests;

class dataskpdController extends Controller
{
    public function index()
    {
    	$dataskpd = dataskpd::all();
    	return view('dataskpd.index',compact('dataskpd'));
    }

    public function create()
    {
    	return view('dataskpd.create');
    }

    public function store(Request $request)
    {
        
    	$dataskpd = new dataskpd();
    	$dataskpd->nama = $request->nama;
    	$dataskpd->alamat = $request->alamat;
    	$dataskpd->save();

    	return redirect('dataskpd');
    }
    public function update(Request $request, $id)
    {
        $dataskpd = dataskpd::find($id);
        $dataskpd ->nama = $request->nama;
        $dataskpd ->alamat = $request->alamat;
        $dataskpd ->save();

        return redirect('dataskpd');
    }

    public function delete($id)
    {
     
        $dataskpd = dataskpd::find($id);
        $dataskpd->delete();

        return redirect('dataskpd');
    }

    public function detail($id)
    {
        $dataskpd = dataskpd::find($id);
        if(!$dataskpd)
            abort('404');

        return view('dataskpd.edit', compact('dataskpd'));
    }

    public function edit($id)
    {
         $dataskpd = dataskpd::find($id);
        if(!$dataskpd)
            abort('404');

        return view('dataskpd.edit', compact('dataskpd'));
    }
}
