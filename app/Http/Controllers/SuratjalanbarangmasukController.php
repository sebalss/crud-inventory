<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratmasuk;
use App\Masterbarang;
use DB;
use Carbon\Carbon;

class SuratjalanbarangmasukController extends Controller
{
    public function index()
    {
    	$suratjalanbarangmasuk = \App\Suratmasuk::all();



    	return view('inputdatabarangmasuk_view', ['suratjalanbarangmasuk' => $suratjalanbarangmasuk ]);
    }

    protected function kode(){
        $kd="";
        $query = DB::table('suratmasuk')
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
        \App\Suratmasuk::create($request->all());
        return redirect('/barangmasuk')->with('sukses', 'Surat Jalan Barang Masuk berhasil diinput');
    }

    public function edit($id)
    {
    	$suratjalan_barangmasuk = \App\Suratmasuk::find($id);
    	return view('suratjalanbarangmasuk_edit', ['suratjalan_barangmasuk' => $suratjalan_barangmasuk]);
    }

    public function update(Request $request, $id)
    {
    	$suratjalanbarangmasuk = \App\Suratmasuk::find($id);
    	$suratjalanbarangmasuk -> update($request -> all());
    	return redirect('/barangmasuk')->with('sukses', 'Surat Jalan Barang Masuk berhasil diupdate');
	}

	public function delete($id)
    {
    	$suratjalanbarangmasuk = \App\Suratmasuk::find($id);
    	$suratjalanbarangmasuk -> delete($suratjalanbarangmasuk);
    	return redirect('/barangmasuk')->with('sukses', 'Surat Jalan Barang Masuk berhasil dihapus');
	}
}
