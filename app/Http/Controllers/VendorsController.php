<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendors;

class VendorsController extends Controller
{
    public function index()
    {
        $vendors = Vendors::all()->where('role','=','vendors');

        return view('vendors.vendors', compact(['vendors']));
    }   

    public function add()
    {
        $vendors = Vendors::all();

        return view('vendors.add', compact('vendors'));
    }

    //add barang
    public function create(Request $request)
    {
        Vendors::create($request->except('_token'));

        session()->flash('success', 'Data is added');
        return redirect('/vendors')->with('success','Data berhasil ditambah');
    }

    public function edit($id)
    {
        $vendors = Vendors::find($id);

        return view('vendors.edit', compact('vendors'));
    }

    // update barang
    public function update(Request $request, $id)
    {
        $vendors = Vendors::find($id);
        $vendors->update($request->except(['_token']));

        session()->flash("success", "Data is updated");
        return redirect('/vendors')->with('success','Data berhasil ditambah');
    }

    //delete barang
    public function delete($id)
    {
        $vendorsDelete = Vendors::find($id);
        $vendorsDelete->delete();

        session()->flash("success", "Data berhasil dihapus");
        return redirect('/vendors');
    }

    public function test()
    {
        $vendors = Vendors::all();
        return view('welcome', compact(['vendors$vendors']));
    }
}
