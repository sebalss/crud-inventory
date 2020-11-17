<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratkeluar;
use App\Masterbarang;
use DB;
use Carbon\Carbon;

class SuratjalanbarangkeluarController extends Controller
{
    public function index()
    {
    	$suratjalanbarangkeluar = \App\Suratkeluar::all();
    	return view('inputdatabarangkeluar_view', ['suratjalanbarangkeluar' => $suratjalanbarangkeluar]);
    }

    protected function kode(){
        $kd="";
        $query = DB::table('suratkeluar')
            ->select(DB::raw('MAX(RIGHT(id,3)) as kd_max'))
            ->where('tanggal',Carbon::today());
                if ($query->count()>0) {
                    foreach ($query->get() as $key ) {
                        $tmp = ((int)$key->kd_max)+1;
                        $kd = sprintf("%04s", $tmp);
                    }
                } else {
                    $kd = "001";
                }

            return  date('dmy').$kd;
    }

    public function create(Request $request)
    {
    	 $tambah = new Suratkeluar;

        $tambah->id = $this->kode();
        $tambah->tanggal = $request->tanggal;
        $tambah->nama_penerima = $request->nama_penerima;
        $tambah->alamat = $request->alamat;
        $tambah->save();
    	return redirect('/barangkeluar')->with('sukses', 'Surat Jalan Barang Keluar berhasil diinput');
    }

    public function edit($id)
    {
    	$suratjalan_barangkeluar = \App\Suratkeluar::find($id);
    	return view('suratjalanbarangkeluar_edit', ['suratjalan_barangkeluar' => $suratjalan_barangkeluar]);
    }

    public function update(Request $request, $id)
    {
    	$suratjalanbarangkeluar = \App\Suratkeluar::find($id);
    	$suratjalanbarangkeluar -> update($request -> all());
    	return redirect('/barangkeluar')->with('sukses', 'Surat Jalan Barang Keluar berhasil diupdate');
	}

	public function delete($id)
    {
    	$suratjalanbarangkeluar = \App\Suratkeluar::find($id);
    	$suratjalanbarangkeluar -> delete($suratjalanbarangkeluar);
    	return redirect('/barangkeluar')->with('sukses', 'Surat Jalan Barang Keluar berhasil dihapus');
	}
}
