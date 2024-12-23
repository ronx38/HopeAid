<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Documentation;
use App\Models\Donasi;
use App\Models\Form;
use App\Models\Uang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Block\Document;

class AdminController extends Controller
{
    //Dashboard Page
    public function adminDashboard(){
        $donasi = Donasi::all();
        $user = Auth::user();
        return view('adminpage.admin_dashboard', compact('user', 'donasi'));
    }

    public function createDonation(){
        return view('adminpage.createDonation');
    }

    public function insertDonation(Request $req){

        $req->validate([
            'judul_donasi' => 'required|min:5',
            'deskripsi_donasi' => 'required|min:5',
            'target_donasi' => 'required|min:0|max:999999999',
            'photo_donasi' => 'image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);
        $publicPath = public_path('image_donation/');
        $donasi = new Donasi;
        $donasi->judul_donasi = $req->input('judul_donasi');
        $donasi->deskripsi = $req->input('deskripsi_donasi');
        $donasi->collected = 0;
        $donasi->target = $req->input('target_donasi');

        if($req->hasFile('photo_donasi')){
            $photo = $req->file('photo_donasi');
            $fileName = time().$photo->getClientOriginalName();
            $photo->move($publicPath, $fileName);

            $donasi->donasi_photo = $fileName;
        }

        $donasi->save();

        return redirect()->route('admin_dashboard');
    }

    public function deleteDonation(Donasi $id){
        $id->delete();

        return redirect()->route('admin_dashboard')
            ->with('success','Data berhasil di hapus' );
    }

    public function updateDonationPage(Donasi $id){
        return view('adminpage.updateDonation', compact('id'));
    }

    public function updateDonation(Request $req, $id){
        $req->validate([
            'judul_donasi' => 'required|min:5',
            'deskripsi_donasi' => 'required|min:5',
            'target_donasi' => 'required|min:0|max:999999999',
            'photo_donasi' => 'image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);
        $publicPath = public_path('image_donation/');
        $update_donasi = Donasi::findOrFail($id);
        $update_donasi->judul_donasi = $req->input('judul_donasi');
        $update_donasi->deskripsi = $req->input('deskripsi_donasi');
        $update_donasi->collected = 0;
        $update_donasi->target = $req->input('target_donasi');

        if($req->hasFile('photo_donasi')){
            $photo = $req->file('photo_donasi');
            $fileName = time().$photo->getClientOriginalName();
            $photo->move($publicPath, $fileName);

            $update_donasi->donasi_photo = $fileName;
        }

        $update_donasi->save();

        return redirect()->route('admin_dashboard');
    }

    // Documentation Page
    public function documentPage(){
        $dokum = Documentation::all();
        return view('adminpage.admin_documentation', compact('dokum'));
    }

    public function createDocum(){
        return view('adminpage.createDocum');
    }

    public function insertDocumentation(Request $req){
        $req->validate([
            'judul_dokum' => 'required|min:5',
            'deskripsi_dokum' => 'required|min:5',
            'photo_dokum' => 'image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);

        $publicPath = public_path('image_documentation/');
        $docum = new Documentation;
        $docum->judul_dokum = $req->input('judul_dokum');
        $docum->deskripsi_dokum = $req->input('deskripsi_dokum');

        if($req->hasFile('photo_dokum')){
            $photo = $req->file('photo_dokum');
            $fileName = time().$photo->getClientOriginalName();
            $photo->move($publicPath, $fileName);

            $docum->photo_dokum = $fileName;
        }

        $docum->save();

        return redirect()->route('documentation_page');
    }

    public function deleteDocumentation(Documentation $id){
        $id->delete();

        return redirect()->route('documentation_page')
            ->with('success','Data berhasil di hapus' );
    }

    public function updateDocumPage(Documentation $id){
        return view('adminpage.updateDocum', compact('id'));
    }

    public function updateDocumentation(Request $req, string $id){
        $req->validate([
            'judul_dokum' => 'required|min:5',
            'deskripsi_dokum' => 'required|min:5',
            'photo_dokum' => 'image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);

        $publicPath = public_path('image_documentation/');
        $update_docum = Documentation::findOrFail($id);
        $update_docum->judul_dokum = $req->input('judul_dokum');
        $update_docum->deskripsi_dokum = $req->input('deskripsi_dokum');

        if($req->hasFile('photo_dokum')){
            $photo = $req->file('photo_dokum');
            $fileName = time().$photo->getClientOriginalName();
            $photo->move($publicPath, $fileName);

            if($fileName !== $update_docum->photo_dokum){
                $update_docum->photo_dokum = $fileName;
            }
        }

        $update_docum->save();

        return redirect()->route('documentation_page');
    }

    //Check All Accounts that have been registered
    public function allAccountsPage(){
        $account = User::all()->where('role', 'like', 'user');
        return view('adminpage.admin_account', compact('account'));
    }

    //List of Uang
    public function UangPage(){
        $uang = Uang::all();
        $user = Auth::user();

        return view('adminpage.admin_uang', compact('uang', 'user'));
    }

    //List of Barang
    public function BarangPage(){
        $barang = Barang::all();
        $user = Auth::user();

        return view('adminpage.admin_barang', compact('barang', 'user'));
    }
}
