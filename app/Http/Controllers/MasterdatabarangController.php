<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterdatabarangController extends Controller
{
    public function index()
    {
    	$data_masterdatabarang = \App\Masterbarang::all();
    	return view('masterdatabarang_view', ['data_masterdatabarang' => $data_masterdatabarang]);
    }
    public function laporan()
    {
        $laporan = \App\Masterbarang::all();
        return view('owner.ownerstokdatabarang', ['laporan' => $laporan]);
    }

    public function laporanadmin()
    {
        $laporanadmin = \App\Masterbarang::all();
        return view('cetakstokbarang', ['laporanadmin' => $laporanadmin]);
    }

    public function create(Request $request)
    {
    	\App\Masterbarang::create($request->all());
    	return redirect('/masterdatabarang_view')->with('sukses', 'Master Data Barang berhasil diinput');
    }


    public function edit($id)
    {
    	$masterdatabarang = \App\Masterbarang::find($id);
    	return view('masterdatabarang_edit', ['masterdatabarang' => $masterdatabarang]);
    }

    public function update(Request $request, $id)
    {
    	$masterdatabarang = \App\Masterbarang::find($id);
    	$masterdatabarang -> update($request -> all());
    	return redirect('/masterdatabarang_view')->with('sukses', 'Master Data Barang berhasil diupdate');
	}

	public function delete($id)
    {
    	$masterdatabarang = \App\Masterbarang::find($id);
    	$masterdatabarang -> delete($masterdatabarang);
    	return redirect('/masterdatabarang_view')->with('sukses', 'Master Data Barang berhasil dihapus');
	}
}
