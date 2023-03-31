<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\User;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporan()
    {
        $laporan = Laporan::with('users')->get();
        $users = User::all();

        return view('transaksi.laporan', compact(['laporan','users']));
    }   
    public function delete($id)
    {
        $laporanDelete = Laporan::find($id);
        $laporanDelete->delete();

        session()->flash("success", "Data berhasil dihapus");
        return redirect('/laporan-transaksi');
    }
}
