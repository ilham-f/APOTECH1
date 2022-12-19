<?php

namespace App\Http\Controllers;

use App\Models\Obat;
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
<<<<<<< Updated upstream
        return view('user.produk', [
            "title" => "Semua Produk",
            "obats" => Obat::with(['category', 'keluhans'])->latest()->get()
=======

        return view('user.produk', [
            "obats" => Obat::latest()->filter(request(['search']))->paginate(8)->withQueryString()
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        //
=======
        $validated = $request->validate([
            'nama' => ['required'],
            'category_id' => ['required'],
            'slug' => ['required'],
            'harga' => ['required'],
            'stok' => ['required'],
            'image' => ['image','file']
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('obats');
        }

        Obat::create($validated);

        $obatt = Obat::latest('id')->first();

        foreach ($request->input('keluhans') as $keluhan) {
            $obatt->keluhans()->attach($keluhan);
        }

        return redirect('/tabelobat')->with('alert', 'Obat baru berhasil ditambahkan');
>>>>>>> Stashed changes
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
            "title" => "Detail Produk",
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
