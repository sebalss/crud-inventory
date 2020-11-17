<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use \App\Suratmasuk;

class OwnerbarangmasukController extends Controller
{
    public function index()
    {
    	$suratjalanbarangmasuk = \App\Suratmasuk::all();
    	return view('owner.ownerdatabarangmasuk_view', ['suratjalanbarangmasuk' => $suratjalanbarangmasuk]);
    }

    public function search(Request $request)
    {
    	
    	$dari = $request->dari;
    	$sampai = $request->sampai;

    	$hasil = Suratmasuk::whereDate('tanggal', '>=', $dari)->whereDate('tanggal', '<=', $sampai)->orderBy('tanggal', 'desc')->get();


        // dd($hasil->id;  
        return view('owner.hasilownersuratmasuk', ['hasil' => $hasil]);

    }
    function print()
    {
        $hasil = Suratmasuk::all();
        $pdf = PDF::loadView('owner.hasilownersuratmasuk', ['hasil' => $hasil]);
        return $pdf->stream();
    }
}
