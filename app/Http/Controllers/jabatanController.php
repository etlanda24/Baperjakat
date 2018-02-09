<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jabatan;

class jabatanController extends Controller
{
    public function index(){
    	$jabatans = jabatan::all();
    	return view('jabatan.index',compact($jabatans,'jabatans'));
    }

    public function create(){
    	return view('jabatan.create');
    }

    public function store(Request $request){
    	$jabatan = new jabatan();
    	$jabatan->id = $request->id;
    	$jabatan->nama_jabatan = $request->nama_jabatan;
    	$jabatan->id_unit= $request->id_unit;
    	$jabatan->id_eselon = $request->id_eselon;
    	$jabatan->save();

    	return redirect('/jabatan');
    }
}
