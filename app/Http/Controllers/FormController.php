<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function formPage($id){
        $forms = Donasi::findOrFail($id);
        $user = Auth::user();
        return view('userpage.form', compact('user', 'forms'));
    }

    public function formInsert(Request $req, $id){
         $req->validate([
            'telp' => 'required',
            'jenis_donasi' => 'required'
        ]);

        $filePath = public_path('bukti/');
        $forms = new Form;
        $forms->user_id = Auth::user()->id;
        $forms->donasi_id = Donasi::findOrFail($id)->id;
        $forms->name = Auth::user()->name;
        $forms->email = Auth::user()->email;
        $forms->no_telp = $req->input('telp');
        $forms->notes = $req->input('notes');
        $forms->jenis_donasi_id = $req->input('jenis_donasi');
        // $forms->no_resi = $req->input('resi');
        // $forms->nominal = $req->input('nominal-radio') == true ? $req->input('nominal-radio') : $req->input('nominal');

        $file = $req->hasFile('photo');
        if($file){
            $photo = $req->file('photo');
            $fileName = time().$photo->getClientOriginalName();
            $photo->move($filePath, $fileName);
        }

        if($forms->jenis_donasi_id == 1 ){
            DB::table('uangs')->insert([
                'jenis_donasi_id' => 1,
                'user_id' => Auth::user()->id,
                'nominal' => $req->input('nominal-radio') == true ? $req->input('nominal-radio') : $req->input('nominal'),
                'photo' => $fileName
            ]);

            $option = $req->input('nominal-radio') == true ? $req->input('nominal-radio') : $req->input('nominal');

            $currentValue = DB::table('donasis')->where('id', $forms->donasi_id)->value('collected');
            $newValue = $currentValue + $option;

            DB::table('donasis')->where('id', $forms->donasi_id)->update([
                'collected' => $newValue
            ]);

        } else if($forms->jenis_donasi_id == 2){
            DB::table('barangs')->insert([
                'jenis_donasi_id' => 2,
                'user_id' => Auth::user()->id,
                'tipe_barang' => $req->input('choice'),
                'no_resi' => $req->input('resi')
            ]);
        }

        // $forms->tipe_barang = $req->input('choice');
        // dd($req->all());
        $forms->save();

        return redirect()->route('dashboardPage');
    }
}
