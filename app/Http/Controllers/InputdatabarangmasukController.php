<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Databarangmasuk;
use App\Suratmasuk;
use App\Masterbarang;
use DB;
use PDF;

class InputdatabarangmasukController extends Controller
{
    public function index($id)
    {
        $suratjalan_barangmasuk = \App\Suratmasuk::find($id);
        $data_masterdatabarang = \App\Masterbarang::all();
        
        return view('inputdatabarangmasuk', ['suratjalan_barangmasuk' => $suratjalan_barangmasuk], ['data_masterdatabarang' => $data_masterdatabarang]);
    }
    public function detail($id)
    {
        $suratjalanbarangmasuk = Suratmasuk::findOrFail($id)
        ->where('id' ,'=', $id)
        ->get();
        // $row = $suratjalanbarangmasuk->masterdatabarang()->where('')

            return view('inputdatabarangmasuk_detail', ['suratjalanbarangmasuk' => $suratjalanbarangmasuk]);


        // $data_barangmasuk = \App\Databarangmasuk::all();
            // $suratjalan_barangmasuk = \App\Suratjalanbarangmasuk::find($id);
    }

    public function create(Request $request, $id)
    {
    	$databarangmasuk = Suratmasuk::find($id);
        
        $databarangmasuk->masterbarang()->attach($request->masterbarang_id, ['jumlah' => $request->jumlah]);
        $jumlahstoksaatini = Masterbarang::find($request->masterbarang_id)->stok;
        $jumlahstokditambah = $jumlahstoksaatini + $request->jumlah;
        Masterbarang::where('id',$request->masterbarang_id)->update(['stok' => $jumlahstokditambah]);
        return redirect('/barangmasuk')->with('sukses', 'Data Barang Masuk berhasil ditambahkan');
        
        

	}

    public function update(Request $request, $id)
    {
        $databarangmasuk = Suratmasuk::find($id);
        // if ($databarangmasuk->masterdatabarang()->where('masterdatabarang_id', $request->id)->exists()) {
        //     return redirect('/barangmasuk')->with('gagal', 'Data Barang Masuk gagal ditambahkan');   
        // }
        $databarangmasuk->masterbarang()->attach($request->masterbarang_id, ['jumlah' => $request->jumlah]);
        return redirect('/barangmasuk')->with('sukses', 'Data Barang Masuk berhasil ditambahkan');
    }

    public function edit($id,$idbarang)
    {
        $suratjalan_barangmasuk = Suratmasuk::findOrFail($id);
        $data_masterdatabarang = \App\Masterbarang::all();

        return view('inputdatabarangmasuk_edit', ['suratjalan_barangmasuk' => $suratjalan_barangmasuk], ['data_masterdatabarang' => $data_masterdatabarang]);
    }

    public function delete($id,$idbarang)
    {
        $suratjalanbarangmasuk = \App\Suratmasuk::find($id);
        $suratjalanbarangmasuk -> masterbarang()->detach($idbarang);
        return redirect()->back()->with('sukses', 'Surat Jalan Barang Masuk berhasil dihapus');
    }

    public function print($id)
    {
        $suratjalanbarangmasuk = Suratmasuk::find($id)
        ->where('id' ,'=', $id)
        ->get();

        // dd($suratjalanbarangmasuk);
        
        $pdf = PDF::loadView('pdf_masuk', ['suratjalanbarangmasuk' => $suratjalanbarangmasuk])->setPaper('a4', 'portrait');
        return $pdf->stream('Surat Jalan Barang Masuk','.pdf');
    }
}
