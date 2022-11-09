<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\Category;
use App\Models\Keluhan;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin');
    }

    public function tabelobat(){
        return view('admin.obat', [
            'obats' => Obat::all()
        ]);
    }

    public function tambahobat(){
        return view('admin.tambahobat', [
            'categories' => Category::all()
        ]);
    }

    public function tabelkategori(){
        return view('admin.kategori',[
            'categories' => Category::all()
        ]);
    }

    public function tambahkategori(){
        return view('admin.tambahkategori');
    }

    public function tabelkeluhan(){
        return view('admin.keluhan',[
            'keluhans' => Keluhan::all()
        ]);
    }

    public function tambahkeluhan(){
        return view('admin.tambahkeluhan');
    }

}
