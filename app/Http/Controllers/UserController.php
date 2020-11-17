<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$user = \App\User::all();
    	return view('/owner.tambahuser_view', ['user' => $user]);
    }

    public function create(Request $request)
    {
    	\App\User::create($request->all());
    	return redirect('tambahuser_view')->with('sukses', 'Data User berhasil diinput');
    }


    public function edit($id)
    {
    	$user = \App\user::find($id);
    	return view('owner.tambahuser_edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
    	$user = \App\User::find($id);
    	$user -> update($request -> all());
    	return redirect('owner.tambahuser_view')->with('sukses', 'Data User berhasil diupdate');
	}

	public function delete($id)
    {
    	$user = \App\User::find($id);
    	$user -> delete($user);
    	return redirect('owner.tambahuser_view')->with('sukses', 'Data User berhasil dihapus');
	}
}
