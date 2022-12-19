@extends('layouts.main')

@section('container')
    <div class="container-fluid d-flex justify-content-center align-items-center bg-success" style="height: 91.5vh;">
        <div class="card shadow" style="width: 1200px; height: 600px">
            <div class="card-body d-flex justify-content-between py-4">
                <div class="col-md-4 text-center"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; width: 20%">
                    <div class="d-flex flex-column align-items-center">
                        @if (Auth::user()->jk == 1)
                            <img src="{{ asset('assets/img/male.jpg') }}" alt="Avatar" class="img-fluid" style="width: 80px;" />
                        @else
                            <img src="{{ asset('assets/img/female.jpg') }}" alt="Avatar" class="img-fluid" style="width: 80px;" />
                        @endif
                        <small class="fst-italic mt-2 mb-3">{{ Auth::user()->nama }}</small>
                    </div>
                    <button style="width: 60%;" class="btn btn-outline-success mb-2"
                        onclick="location.href='/profile'"><small>Profil Saya</small>
                    </button>
                    <button style="width: 60%;" class="btn btn-outline-success mb-2" data-bs-toggle="modal"
                        data-bs-target="#profil-{{ Auth::user()->id }}"><small>Ubah Profil</small>
                    </button>
                    <button style="width: 60%;" class="btn btn-outline-success mb-2" data-bs-toggle="modal"
                        data-bs-target="#ubahpw"><small>Ubah Password</small>
                    </button>
                    <button style="width: 60%;" class="btn btn-outline-success" onclick="location.href='/rwytpmblian'"
                        type="button">
                        <small>Pesanan Saya</small>
                    </button>
                </div>
                <div class="col-md-7 me-4" style="width: 70%">
                    <div class="card-body p-3">
                        <div class="col">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="card-text">ID Pembelian : {{ $transaksi->id }}</h6>
                                            <small class="card-text">Tanggal Pembelian : {{ $transaksi->tanggal }}</small>
                                            <br>
                                            <small class="card-text">Alamat Pengiriman : {{ $transaksi->alamat }}</small>
                                            <br>
                                            <small class="card-text">Jam : {{ $transaksi->jam }} WIB</small>
                                            <br>
                                            <small class="card-text">Status : {{ $transaksi->status }}</small>
                                            <h6 class="card-text mt-2">Detail Barang</h6>
                                            @foreach ($transaksi->obats as $obat)
                                                <div class="card mt-2">
                                                    <div class="row g-0">
                                                        <div class="col-4">
                                                            <img src="{{ asset("storage/$obat->image") }}"
                                                                class="img-fluid rounded-start" alt="{{ $obat->image }}">
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{ $obat->nama }}</h5>
                                                                <p class="card-text">Rp.{{ $obat->harga }},00</p>
                                                                <p class="card-text">Kuantitas : {{ $obat->pivot->qty }}
                                                                </p>
                                                                <p class="card-text">Subtotal :
                                                                    {{ $obat->pivot->pricesum }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="mt-2">
                                                <small class="card-text">Total Pembelian : Rp.{{ $transaksi->total_harga }},00</small>
                                                <br>
                                                <small class="card-text">Jumlah Barang : {{ $transaksi->jumlah_barang }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
