<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        return view('user.home-page',[
            'obats' => Obat::all(),
            'categories' => Category::all()
        ]);
    }

    public function resep(){
        return view('user.kirimresep', [
        ]);
    }

    public function profile(){
        return view('user.profile-page', [
        ]);
    }

    public function ubahpw(){
        return view('user.ubahpassword', [
        ]);
    }

    public function riwayatbeli(){
        return view('user.riwayatpembelian', [
        ]);
    }
}
