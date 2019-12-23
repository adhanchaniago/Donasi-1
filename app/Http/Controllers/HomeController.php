<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donasi;
use Storage;

class HomeController extends Controller
{
    public function Tambah()
    {
    	$donatur = Donasi::all();
		return view('home.tambah', compact('donatur'));   	
    }

    public function store(Request $request)
    {
    	$donatur = new Donasi;
    	$donatur ->nama = $request ->nama;
    	$donatur ->jumlah_donasi = $request ->jumlah_donasi;
        $donatur ->no_wa = $request ->no_wa;
        $donatur ->gambar = $request -> file('gambar')->store('gambars');
    	$donatur ->save();
    	return redirect()->route('donatur');
    }

}
