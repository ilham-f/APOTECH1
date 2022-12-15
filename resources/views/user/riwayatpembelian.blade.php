@extends('layouts.main')

@section('container')

<div class="row container-fluid">
    {{-- <div class="row"> --}}
        @include('partials.sidebaruser')
            <div class="col">
                @if (!$transaksi->count())
                    <p>Belum ada Riwayat Pembelian</p>
                    @else
                    @foreach ($transaksi as $tra)
                    {{-- Cards Pembelian --}}
                    <div class="card mt-3">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Tanggal : {{ $tra->tanggal }}</h5>
                                    <p class="card-text">Pukul : {{ $tra->jam }} WIB</p>
                                    <p class="card-text">Total : Rp.{{ $tra->total_harga }},00</p>
                                    <p class="card-text">Status : {{ $tra->status }}</p>
                                    <a href="/pembelian/{{ $tra->id }}" class="btn btn-success">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
            </div>
    {{-- </div> --}}
</div>

@endsection
