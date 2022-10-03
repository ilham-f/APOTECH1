@extends('layouts.main')

@section('container')
<div class="container mt-5 text-center">
    <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
    <h1>Nama Obat : {{ $obat->nama }}</h1>
    <h2>Jenis Obat : <a href="/categories/{{ $obat->category->slug }}">{{ $obat->category->nama }}</a></h2>
    <p>Harga : Rp. {{ $obat->harga }}</p>
    <p>Stok : {{ $obat->stok }}</p>
    <p>Keluhan :</p>
    <ul>
        @foreach ($obat->keluhans as $keluhan )
        <li class="d-inline border border-dark">
            {{ $keluhan->nama }}
        </li>
        @endforeach
    </ul>
    <a href="/produk"><button class="btn btn-success">Kembali</button></a>
    <a href="#"><button class="btn btn-success">Tambah ke Keranjang</button></a>
</div>
@endsection
