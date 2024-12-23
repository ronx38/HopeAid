<?php

namespace App\Http\Controllers;
use App\Models\Documentation;
use App\Models\Donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function dashboard(){
        $donasi = Donasi::all();
        $user = Auth::user();
        return view('userpage.dashboard', compact('user', 'donasi'));
    }

    public function articlePage(){
        $user = Auth::user();
        return view('userpage.article', compact('user'));
    }

    public function documentationPage(){
        $user = Auth::user();
        $documentations = Documentation::all();

        return view('userpage.documentation', compact('documentations', 'user'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function supportPage(){
        $user = Auth::user();
        return view('userpage.support', compact('user'));
    }

    public function FAQPage(){
        $user = Auth::user();
        return view('userpage.faq', compact('user'));
    }

}

