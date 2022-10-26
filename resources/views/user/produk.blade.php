@extends('layouts.main')

@section('container')

<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @if($obats->count())
                @foreach ($obats as $obat)
                <div class="col mb-5">
                <div class="card h-100 shadow">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('assets/img/obats/'.$obat->image) }}" alt="{{ $obat->slug }}" />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $obat->nama }}</h5>
                            <!-- Product price-->
                            <p>Rp. {{ $obat->harga }}</p>
                            <p>Keluhan :
                            @foreach ($obat->keluhans as $keluhan )
                                {{ $keluhan->nama." " }}
                            @endforeach
                            </p>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-success mt-auto" href="/produk/{{ $obat->slug }}">Detail Produk</a></div>
                    </div>
                </div>
                </div>
                @endforeach
            @else
            <p class="text-center">Tidak Ada</p>
            @endif
    </div>
</div>
@endsection
