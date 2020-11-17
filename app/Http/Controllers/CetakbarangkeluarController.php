<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use \App\Suratkeluar;
class CetakbarangkeluarController extends Controller
{
    public function awal()
    {
    	$suratjalanbarangkeluar = Suratkeluar::all();
    	return view('cetakdatabarangkeluar_view', ['suratjalanbarangkeluar' => $suratjalanbarangkeluar]);
    }

    public function search(Request $request)
    {
    	
    	$dari = $request->dari;
    	$sampai = $request->sampai;

    	$hasil = Suratkeluar::whereDate('tanggal', '>=', $dari)->whereDate('tanggal', '<=', $sampai)->orderBy('tanggal', 'desc')->get();


        // dd($hasil->id;  
        return view('hasilsuratkeluar', ['hasil' => $hasil]);

    }
    function print()
    {
        $hasil = Suratkeluar::all();
        $pdf = PDF::loadView('hasilsuratkeluar', ['hasil' => $hasil]);
        return $pdf->stream();
    }
}
