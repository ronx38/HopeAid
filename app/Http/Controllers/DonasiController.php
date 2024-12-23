<?php

namespace App\Http\Controllers;

use App\Models\JenisDonasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DonasiController extends Controller
{
    public function index(){
        $donasi = JenisDonasi::all();
        $user = Auth::user();
        return view('adminpage.admin_TypesDonation', compact('user','donasi'));
    }

    public function create(){
        return view('adminpage.createTypesDonation');
    }

    public function store(Request $request)
{
    $request->validate([
        'item_donasi' => 'required|max:45',
    ],
    [
        'item_donasi.required' => 'Jenis Donasi wajib diisi',
    ]);

    DB::table('jenis_donasis')->insert([
        'item_donasi'=>$request->item_donasi,
    ]);

    return redirect()->route('index.index');
    }
    public function edit(JenisDonasi $id)
    {
        //
        return view('adminpage.updateTypesDonation', compact('id'));
    }

    public function update(Request $request, string $id)
{
    // validasi data
    $request->validate([
        'item_donasi' => 'required|max:45',
    ],
    [
        'item_donasi.required' => 'Jenis Donasi wajib diisi',
    ]);

    DB::table('jenis_donasis')->where('id',$id)->update([
        'item_donasi'=>$request->item_donasi,
    ]);
    return redirect()->route('index.index');
}
public function destroy(JenisDonasi $id)
{
    $id->delete();

    return redirect()->route(route: 'index.index')
            ->with('success','Data berhasil di hapus' );
}


}
