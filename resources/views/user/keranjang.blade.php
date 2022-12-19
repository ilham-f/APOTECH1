@extends('layouts.main')

@section('container')
    <h1 class="mt-4 text-center">Keranjang</h1>

<<<<<<< Updated upstream
    <div class="container border my-4 rounded shadow">
        <div class="row p-3">
=======
    <div class="container-fluid py-3 px-5 bg-success">
        <div class="row p-4">
>>>>>>> Stashed changes
            <div class="col card m-2">
                <h4 class="text-success my-3">Obat</h4>
                <div class="row">
                    <div class="col mx-3">
<<<<<<< Updated upstream
                        {{-- Mulai Obat --}}
                        <div class="row mb-3">
                            <div class="card">
                                <div class="row g-0 mt-4">
                                    <div class="col-1">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                    <div class="col-3">
                                        <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Obat 1</h5>
                                            <p class="card-text">Rp. 15000</p>
                                            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-outline-secondary">-</button>
                                                    <div class="input-group" style="width: 45px">
                                                        <input type="text" class="form-control text-center" placeholder="1" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                                    </div>
                                                    <button type="button" class="btn btn-outline-secondary">+</button>
                                                </div>
                                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Akhir Obat --}}
                        {{-- Mulai Obat --}}
                        <div class="row mb-3">
                            <div class="card">
                                <div class="row g-0 mt-4">
                                    <div class="col-1">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                    <div class="col-3">
                                        <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Obat 2</h5>
                                            <p class="card-text">Rp. 15000</p>
                                            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-outline-secondary">-</button>
                                                    <div class="input-group" style="width: 45px">
                                                        <input type="text" class="form-control text-center" placeholder="1" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                                    </div>
                                                    <button type="button" class="btn btn-outline-secondary">+</button>
=======
                        @if (Cart::session(auth()->user()->id)->isEmpty())
                            <p class="text-center">Keranjang Kosong</p>
                        @else
                            {{-- Mulai Obat --}}
                            @foreach ($obats as $obat)
                                {{-- {{ dd($obat) }} --}}

                                <div class="row mb-3">
                                    <div class="card">
                                        <div class="row g-0 mt-4">
                                            <div class="">
                                            </div>

                                            <div class="col-4">
                                                <img src="{{ asset('storage/' . $obat->attributes->image) }}"
                                                    class="img-fluid rounded-start" alt="{{ $obat->slug }}">
                                            </div>

                                            <div class="col-7">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $obat->name }}</h5>
                                                    <p class="card-text">Rp{{ $obat->price }},00 / Unit</p>
                                                    <p class="card-text">Subtotal : {{ $obat->getPriceSum() }}</p>
                                                    <div class="d-flex">
                                                        <form action="{{ route('cart.update') }}" method="POST"
                                                            class="w-60">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $obat->id }}">
                                                            <input type="number" min="1" name="quantity"
                                                                value="{{ $obat->quantity }}"
                                                                class="btn btn-outline-success text-center"
                                                                style="width: 20%" />
                                                            <button type="submit" class="btn btn-info">Simpan</button>
                                                        </form>
                                                    </div>
>>>>>>> Stashed changes
                                                </div>
                                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Akhir Obat --}}
                        {{-- Mulai Obat --}}
                        <div class="row mb-3">
                            <div class="card">
                                <div class="row g-0 mt-4">
                                    <div class="col-1">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                    <div class="col-3">
                                        <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Obat 3</h5>
                                            <p class="card-text">Rp. 15000</p>
                                            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button type="button" class="btn btn-outline-secondary">-</button>
                                                    <div class="input-group" style="width: 45px">
                                                        <input type="text" class="form-control text-center" placeholder="1" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                                    </div>
                                                    <button type="button" class="btn btn-outline-secondary">+</button>
                                                </div>
                                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </div>
                                            <div class="col">
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $obat->id }}"
                                                        name="id">
                                                    <button class="btn btn-danger">x</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<<<<<<< Updated upstream
                            </div>
                        </div>
                        {{-- Akhir Obat --}}
=======
                            @endforeach
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger mb-3">Hapus Semua</button>
                            </form>
                            {{-- Akhir Obat --}}
                        @endif
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
            <div class="col-4 card m-2" style="height: 320px">
                <h4 class="text-success mt-3">Ringkasan Belanja</h4>
                <div class="card mt-2 p-3">
                    <p>Jumlah Barang :</p>
                    <p>Total Harga :</p>
                    <hr>
                    <p>Rp. - </p>
                </div>
<<<<<<< Updated upstream
                <button class=" w-100 btn btn-success mt-3 mb-3">Beli</button>
=======
                @if (!Cart::session(auth()->user()->id)->isEmpty())
                    <button type="button" class="mt-2 btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Beli
                    </button>
                @endif

>>>>>>> Stashed changes
            </div>
        </div>
<<<<<<< Updated upstream
    </div>
=======
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Pembelian</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (Cart::session(auth()->user()->id)->isEmpty())
                        <p>Keranjang Masih Kosong</p>
                    @else
                        <p>Apakah Anda Yakin menyelesaikan pembelian?</p>
                        <form action="{{ route('transaksi.store') }}" method="POST" id="form1">
                            @csrf
                            <label for="Alamat" class="">
                                <h6>Alamat Pengiriman</h6>
                            </label>
                            <input type="text" class="form-control w-75" placeholder="Alamat" id="alamat"
                                name="alamat" value="{{ Auth::user()->alamat }}" required>
                        </form>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    @if (!Cart::session(auth()->user()->id)->isEmpty())
                        <button form="form1" class="btn btn-success mt-3 mb-3">Beli</button>
                    @endif
                </div>
            </div>
        </div>
    </div>

>>>>>>> Stashed changes
@endsection
