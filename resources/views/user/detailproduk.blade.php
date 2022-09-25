@extends('layouts.main')

@section('container')
<div class="container mt-5 text-center">
    <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
    <h1>Nama Obat : {{ $obat->nama }}</h1>
    <h2>Jenis Obat : <a href="/categories/{{ $obat->category->slug }}">{{ $obat->category->nama }}</a></h2>
    <p>Harga : Rp. {{ $obat->harga }}</p>
    <p>Stok : {{ $obat->stok }}</p>
    <a href="/produk"><button class="btn btn-success">Kembali</button></a>
</div>
@endsection
