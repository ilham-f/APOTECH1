@extends('layouts.main')

@section('container')

<div class="row container-fluid">
    {{-- <div class="row"> --}}
        @include('partials.sidebaruser')
            <div class="col">
                {{-- Cards Pembelian --}}
                <div class="card">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                        <h2 class="card-text">ID Pembelian : {{ $transaksi->id }}</h2>
                          <h5 class="card-text">Tanggal Pembelian : {{ $transaksi->tanggal }}</h5>
                          <h5 class="card-text">Alamat Pengiriman : {{ $transaksi->alamat }}</h5>
                          <h5 class="card-text">Jam : {{  $transaksi->jam }} WIB</h5>
                          <h5 class="card-text">Status : {{ $transaksi->status }}</h5>
                          <h4 class="card-text">Detail Barang</h4>
                          @foreach ($transaksi->obats as $obat)
                          <div class="card mt-2">
                              <div class="row g-0">
                                  <div class="col-4">
                                      <img src="{{ asset("assets/img/obats/$obat->image") }}" class="img-fluid rounded-start" alt="{{ $obat->image }}">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $obat->nama }}</h5>
                                            <p class="card-text">Rp.{{ $obat->harga }},00</p>
                                            <p class="card-text">Kuantitas : {{ $obat->pivot->qty }}</p>
                                            <p class="card-text">Subtotal : {{ $obat->pivot->pricesum }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <h5 class="card-text">Total Pembelian : Rp.{{ $transaksi->total_harga }},00</h5>
                            <h5 class="card-text">Jumlah Barang : {{ $transaksi->jumlah_barang }}</h5>
                          <a href="/rwytpmblian" class="btn btn-success mt-2">Kembali</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
    {{-- </div> --}}
</div>

@endsection
