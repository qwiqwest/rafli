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

    //add barang
    public function create(Request $request)
    {
        Barang::create($request->except('_token'));

        session()->flash('message', 'Data is added');
        return redirect('/tambah-barang');
    }

    // update barang
    public function update(Request $request, $id)
    {
        $data = Barang::find($id);
        $data->update($request->except(['_token']));

        session()->flash("message", "Data is updated");
        return redirect('/tambah-barang');
    }

    //delete barang
    public function delete($id)
    {
        $barangDelete = Barang::find($id);
        $barangDelete->delete();

        session()->flash("message", "Data is deleted");
        return redirect('/tambah-barang');
    }
}
