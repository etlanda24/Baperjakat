<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\eselon;

class eselonController extends Controller
{
    public function index(){
    	$eselons = eselon::all();
    	return view('eselon.index',compact($eselons,'eselons'));
    }

    public function create(){
    	return view('eselon.create');
    }

    public function store(Request $request){
    	$eselon = new eselon();
    	$eselon->id = $request->id;
    	$eselon->tunjangan = $request->tunjangan;
    	$eselon->save();

    	return redirect('/eselon');
    }

     public function update(){
        return view('eselon.update');
    }
}
