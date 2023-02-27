<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Vendors;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();

        return view('barang.barang', compact(['data']));
    }   

    public function add()
    {
        $data = Barang::all();
        $vendors = Vendors::all();

        return view('barang.tambah-barang', compact('data','vendors'));
    }

    //add barang
    public function create(Request $request)
    {
        Barang::create($request->except('_token'));

        session()->flash('success', 'Data is added');
        return redirect('/barang')->with('success','Data berhasil ditambah');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        $vendors = Vendors::all();

        return view('barang.edit', compact('barang','vendors'));
    }

    // update barang
    public function update(Request $request, $id)
    {
        $data = Barang::find($id);
        $data->update($request->except(['_token']));

        session()->flash("success", "Data is updated");
        return redirect('/barang')->with('success','Data berhasil ditambah');
    }

    //delete barang
    public function delete($id)
    {
        $barangDelete = Barang::find($id);
        $barangDelete->delete();

        session()->flash("success", "Data berhasil dihapus");
        return redirect('/barang');
    }

    public function test()
    {
        $data = Barang::all();
        return view('welcome', compact(['data']));
    }
}
