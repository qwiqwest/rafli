<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

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

        return view('barang.tambah-barang', compact('data'));
    }

    //add barang
    public function create(Request $request)
    {
        Barang::create($request->except('_token'));

        session()->flash('success', 'Data is added');
        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);

        return view('barang.edit', compact('barang'));
    }

    // update barang
    public function update(Request $request, $id)
    {
        $data = Barang::find($id);
        $data->update($request->except(['_token']));

        session()->flash("success", "Data is updated");
        return redirect('/barang');
    }

    //delete barang
    public function delete($id)
    {
        $barangDelete = Barang::find($id);
        $barangDelete->delete();

        session()->flash("success", "Data is deleted");
        return redirect('/barang');
    }

    public function test()
    {
        $data = Barang::all();
        return view('welcome', compact(['data']));
    }
}
