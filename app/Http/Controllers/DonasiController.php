<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donasi;
use Storage;

class DonasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function Index()
    {
    	$donatur = Donasi::all();
		return view('admin.index', compact('donatur'));  
    }

    public function donatur()
    {
    	$donatur = Donasi::all();
		return view('admin.donatur', compact('donatur'));  
    }

    public function hapus($id)
	{
        $donatur = Donasi::where('id', $id)->first();
        Storage::delete($donatur->gambar);

        $donatur = Donasi::where('id', $id)->delete();

		return redirect()->route('donaturs');
    }
    
    public function ubah($id)
    {
    	$donatur = Donasi::where('id', $id)->first();

    	return view('admin.ubah', compact('donatur'));
    }

    public function update(Request $request, $id)
    {
        
        $donatur = Donasi::where('id', $id)->first();
        // if ($donatur->gambar){
        //     Storage::delete($donatur->gambar);
        // }
    	$donatur ->nama = $request ->nama;
    	$donatur ->jumlah_donasi = $request ->jumlah_donasi;
        $donatur ->no_wa = $request ->no_wa;
        // $donatur ->gambar = $request -> file('gambar')->store('gambars');
    	$donatur ->save();
    	return redirect()->route('donaturs');
    }

    public function show($id)
    {
    	$donatur = Donasi::find($id);

    	return view('admin.show', compact('donatur'));
    }


}
