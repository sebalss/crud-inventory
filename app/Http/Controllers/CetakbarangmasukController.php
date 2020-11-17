<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use \App\Suratmasuk;
class CetakbarangmasukController extends Controller
{
    public function index()
    {
    	$suratjalanbarangmasuk = \App\Suratmasuk::all();
    	return view('cetakdatabarangmasuk_view', ['suratjalanbarangmasuk' => $suratjalanbarangmasuk]);
    }

    public function search(Request $request)
    {
    	
    	$dari = $request->dari;
    	$sampai = $request->sampai;

    	$hasil = Suratmasuk::whereDate('tanggal', '>=', $dari)->whereDate('tanggal', '<=', $sampai)->orderBy('tanggal', 'desc')->get();


        // dd($hasil->id;  
        return view('hasilsuratmasuk', ['hasil' => $hasil]);

    }
    function print()
    {
        $hasil = Suratmasuk::all();
        $pdf = PDF::loadView('hasilsuratmasuk', ['hasil' => $hasil]);
        return $pdf->stream();
    }
}
