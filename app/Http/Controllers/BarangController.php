<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Vendors;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::with('vendor')->get();
        $vendors = Vendors::all();

        return view('barang.barang', compact(['data', 'vendors']));
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
        return redirect('/barang')->with('success','Data berhasil diedit');
    }

    //delete barang
    public function delete($id)
    {
        $barangDelete = Barang::find($id);
        $barangDelete->delete();

        session()->flash("success", "Data berhasil dihapus");
        return redirect('/barang');
    }

    //barcode
    public function barcode(Request $request){
        $dataBarang = array();
        
        foreach ((array)$request->barcode as $barcode){
            $barang = Barang::find($barcode);
            $dataBarang[] = $barang;
        }

        return $dataBarang;
    }
}
