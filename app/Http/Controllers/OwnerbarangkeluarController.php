<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use \App\Suratkeluar;

class OwnerbarangkeluarController extends Controller
{
    public function awal()
    {
    	$suratjalanbarangkeluar = Suratkeluar::all();
    	return view('owner.ownerdatabarangkeluar_view', ['suratjalanbarangkeluar' => $suratjalanbarangkeluar]);
    }

    public function search(Request $request)
    {
    	
    	$dari = $request->dari;
    	$sampai = $request->sampai;

    	$hasil = Suratkeluar::whereDate('tanggal', '>=', $dari)->whereDate('tanggal', '<=', $sampai)->orderBy('tanggal', 'desc')->get();


        // dd($hasil->id;  
        return view('owner.hasilownersuratkeluar', ['hasil' => $hasil]);

    }
    function print()
    {
        $hasil = Suratkeluar::all();
        $pdf = PDF::loadView('owner.hasilownersuratkeluar', ['hasil' => $hasil]);
        return $pdf->stream();
    }
}
