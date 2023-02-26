<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasir;

class KasirController extends Controller
{
    public function index()
    {
        $kasir = Kasir::all()->where('role','=','kasir');

        return view('kasir.kasir', compact(['kasir']));
    }   

    public function add()
    {
        $kasir = Kasir::all();

        return view('kasir.add', compact('kasir'));
    }

    //add barang
    public function create(Request $request)
    {
        Kasir::create($request->except('_token'));

        session()->flash('success', 'Data is added');
        return redirect('/kasir')->with('success','Data berhasil ditambah');
    }

    public function edit($id)
    {
        $kasir = Kasir::find($id);

        return view('kasir.edit', compact('kasir'));
    }

    // update barang
    public function update(Request $request, $id)
    {
        $kasir = Kasir::find($id);
        $kasir->update($request->except(['_token']));

        session()->flash("success", "Data is updated");
        return redirect('/barang')->with('success','Data berhasil ditambah');
    }

    //delete barang
    public function delete($id)
    {
        $kasirDelete = Kasir::find($id);
        $kasirDelete->delete();

        session()->flash("success", "Data berhasil dihapus");
        return redirect('/kasir');
    }

    public function test()
    {
        $kasir = Kasir::all();
        return view('welcome', compact(['kasir']));
    }
}
