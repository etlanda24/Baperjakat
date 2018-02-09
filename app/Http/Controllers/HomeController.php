<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\dataskpd;
use App\home;
use App\User;
use App\pegawai;
use App\refgolongan;
use App\refjabatan;
use App\refjenisdiklat;
use App\refjenjangpendidikan;
use App\refpendidikan;
use App\riwayatdiklat;
use App\riwayatjabatan;
use App\riwayatpendidikan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datauser = User::count();
        $dataskpd = dataskpd::count();
        $pegawai = pegawai::count();
        $riwayatjabatan = riwayatjabatan::count();
        $riwayatdiklat = riwayatdiklat::count();
        $riwayatpendidikan = riwayatpendidikan::count();
        $refjabatan = refjabatan::count();
        $refgolongan = refgolongan::count();
        $refjenisdiklat = refjenisdiklat::count();
        $refjenjangpendidikan = refjenjangpendidikan::count();
        $refpendidikan = refpendidikan::count();
        return view('home',compact('datauser','dataskpd','pegawai','riwayatjabatan','riwayatdiklat','riwayatpendidikan','refjabatan','refgolongan','refjenisdiklat','refjenjangpendidikan','refpendidikan'));
    }
   
}
