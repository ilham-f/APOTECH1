{{-- @dd($obat->keluhans->last()) --}}
@extends('layouts.main')

@section('container')
<div class="container vh-100 d-flex justify-content-evenly mt-5">

    <div class="">
        <img src="{{ asset("assets/img/obats/$obat->image") }}" alt="{{ $obat->slug }}" />
    </div>

    <div class="container">
        <h1>Nama Obat : {{ $obat->nama }}</h1>
        <h2>Jenis Obat : <a href="/categories/{{ $obat->category->slug }}">{{ $obat->category->nama }}</a></h2>
        <p>Harga : Rp{{ $obat->harga }},00</p>
        <p>Stok : {{ $obat->stok }}</p>
        <p>Keluhan :
            @foreach ($obat->keluhans as $keluhan )
                @if ($keluhan == $obat->keluhans->last())
                <small>{{ $keluhan->nama}}</small>
                @else
                    <small>
                        {{ $keluhan->nama . ", " }}
                    </small>
                @endif
            @endforeach
        </p>
        <a href="{{ url()->previous() }}"><button class="btn btn-success">Kembali</button></a>
        <button type="submit" class="btn btn-success" value="{{ $obat->category->slug }}">Tambah ke Keranjang</button>
    </div>
</div>
@endsection
