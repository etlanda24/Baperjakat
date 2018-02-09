<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Mutasi;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mutasi = Mutasi::all();

$periode = DB::table("mutasis")
    ->select(DB::raw('count(id) as `data`'),DB::raw('YEAR(created_at) year'))
               ->groupby('year')
               ->get();
        return view('mutasi.index',compact('mutasi','periode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $mutasi = Mutasi::find($id);
        $mutasi->delete();

        return redirect('/mutasi');
    }
    public function detail($id)
    {
        $mutasi = mutasi::find($id);
        if(!$mutasi)
            abort('404');

        return view('mutasi.detail', compact('mutasi'));
    }
    public function cetak(Request $request)
    {
        
        $periode = $request->periode;
        if($periode==0){
            $mutasi = mutasi::all();
        }else{
            $mutasi = mutasi::whereYear('created_at', '=', $periode)->get();
        }
        
        $a = time();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('mutasi/cetakmutasi',compact('mutasi','periode')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4','landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($a.'-mutasi.pdf');
    }
}
