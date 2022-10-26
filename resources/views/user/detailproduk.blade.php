@extends('layouts.main')

@section('container')
<div class="container d-flex justify-content-evenly mt-5">

    <div class="border border-3 border-success">
        <img src="{{ asset("assets/img/obats/$obat->image") }}" alt="{{ $obat->slug }}" />
    </div>

    <form action="#" class="border-2" method="POST">
        <h1>Nama Obat : {{ $obat->nama }}</h1>
        <h2>Jenis Obat : <a href="/categories/{{ $obat->category->slug }}">{{ $obat->category->nama }}</a></h2>
        <p>Harga : Rp{{ $obat->harga }},00</p>
        <p>Stok : {{ $obat->stok }}</p>
        <p>Keluhan :
            @foreach ($obat->keluhans as $keluhan )
                <small>
                    | {{ $keluhan->nama }} |
                </small>
            @endforeach
        </p>
        <a href="/produk"><button class="btn btn-success">Kembali</button></a>
        <button type="submit" class="btn btn-success" value="{{ $obat->category->slug }}">Tambah ke Keranjang</button>
    </form>
</div>
@endsection
