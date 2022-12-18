<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Obat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = auth()->user()->id;
        return view('user.riwayatpembelian', [
            'transaksi' => Transaksi::where('user_id', '=', $userid)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function buat(Request $request)
    {

        $userid = auth()->user()->id;

        Transaksi::create([
            'user_id' => $userid,
            'jumlah_barang' => \Cart::session($userid)->getTotalQuantity(),
            'total_harga' => \Cart::session($userid)->getTotal(),
            'tanggal' => Carbon::now()->translatedFormat('d F Y'),
            'jam' => Carbon::now()->format('H:i'),
            'alamat' => $request->alamat
        ]);

        $transaksi = Transaksi::latest('id')->first();

        $cartItems = \Cart::session($userid)->getContent();

        // dd($cartItems);

        foreach ($cartItems as $obat) {
            $transaksi->obats()->attach($obat->id, ['qty' => $obat->quantity, 'pricesum' => $obat->getPriceSum()]);
            Obats::where('id', $obat->id)->decrement('stok', $obat->quantity);
        }

        return redirect()->route('after');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransaksiRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        return view('user.detailpembelian', [
            'transaksi' => $transaksi
        ]);
    }

    public function after()
    {
        return view('user.afterpembelian');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransaksiRequest  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
