<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Databarangkeluar;
use App\Suratkeluar;
use App\Masterbarang;
use DB;
use PDF;

class InputdatabarangkeluarController extends Controller
{
    public function index($id)
    {
        $suratjalan_barangkeluar = \App\Suratkeluar::find($id);
        $data_masterdatabarang = \App\Masterbarang::all();
        return view('inputdatabarangkeluar', ['suratjalan_barangkeluar' => $suratjalan_barangkeluar], ['data_masterdatabarang' => $data_masterdatabarang]);
    }
    public function detail($id)
    {
        $suratjalanbarangkeluar = Suratkeluar::findOrFail($id)
        ->where('id' ,'=', $id)
        ->get();


        // $row = $suratjalanbarangkeluar->masterdatabarang()->where('')

            return view('inputdatabarangkeluar_detail', ['suratjalanbarangkeluar' => $suratjalanbarangkeluar]);


        // $data_barangkeluar = \App\Databarangkeluar::all();
            // $suratjalan_barangkeluar = \App\Suratjalanbarangkeluar::find($id);
    }

    public function create(Request $request, $id)
    {
    	$databarangkeluar = Suratkeluar::find($id);
        
        $jumlahstoksaatini = Masterbarang::find($request->masterbarang_id)->stok;
        $jumlahstokdikurang = $jumlahstoksaatini - $request->jumlah;
        if ($jumlahstokdikurang >= 0) {
            $databarangkeluar->masterbarang()->attach($request->masterbarang_id, ['jumlah' => $request->jumlah]);
            Masterbarang::where('id',$request->masterbarang_id)->update(['stok' => $jumlahstokdikurang]);
            return redirect('/barangkeluar')->with('sukses', 'Data Barang Keluar berhasil ditambahkan pada Surat Jalan ' .$id);    
        }else{
            return redirect('/barangkeluar')->with('gagal', 'Data Barang Keluar gagal ditambahkan pada Surat Jalan ' .$id .' karena stok tidak cukup');
        }
	}

    public function edit($id,$idbarang)
    {
        $suratjalan_barangkeluar = Suratkeluar::findOrFail($id);
        $data_masterdatabarang = \App\Masterbarang::all();

        return view('inputdatabarangkeluar_edit', ['suratjalan_barangkeluar' => $suratjalan_barangkeluar], ['data_masterdatabarang' => $data_masterdatabarang]);
    }

    public function delete($id,$idbarang)
    {
        $suratjalanbarangkeluar = \App\Suratkeluar::find($id);
        $suratjalanbarangkeluar -> masterbarang()->detach($idbarang);
        return redirect()->back()->with('sukses', 'Surat Jalan Barang keluar berhasil dihapus');
    }

    public function print($id)
    {
        $suratjalanbarangkeluar = Suratkeluar::find($id)
        ->where('id' ,'=', $id)
        ->get();

        // dd($suratjalanbarangmasuk);
        
        $pdf = PDF::loadView('pdf_keluar', ['suratjalanbarangkeluar' => $suratjalanbarangkeluar])->setPaper('a4', 'portrait');
        return $pdf->stream('Surat Jalan Barang Keluar','.pdf');
    }
}
