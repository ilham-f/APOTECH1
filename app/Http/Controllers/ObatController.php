<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Category;
use App\Http\Requests\StoreObatRequest;
use App\Http\Requests\UpdateObatRequest;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $obats = Obat::all();

        if(request('search')) {
            return view('user.produk', [
                "obats" => Obat::with(['category', 'keluhans'])->where('nama', 'like', '%'.request('search').'%')->get()
            ]);
        }

        return view('user.produk', [
            "obats" => Obat::with(['category', 'keluhans'])->latest()->get()
        ]);
    }

    public function home()
    {

        return view('user.home-page', [
            'categories' => Category::all(),
            'obats' => Obat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreObatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(Obat $obat)
    {
        return view('user.detailproduk', [
            "obat" => $obat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit(Obat $obat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateObatRequest  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateObatRequest $request, Obat $obat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat $obat)
    {
        //
    }
}
