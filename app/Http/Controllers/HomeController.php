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
}
