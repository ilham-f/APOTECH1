@extends('layouts.main')

@section('container')
    <h1 class="mt-4 text-center">Keranjang</h1>

    <div class="container border my-4 rounded shadow">
        <div class="row p-3">
            <div class="col card m-2">
                <h4 class="text-success my-3">Obat</h4>
                <div class="row">
                    <div class="col mx-3">
                        {{-- Mulai Obat --}}
                        <div class="row mb-3">
                            <div class="card">
                                <div class="row g-0 mt-4">
                                    <div class="col-1">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
<<<<<<< Updated upstream
                                    <div class="col-3">
                                        <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" class="img-fluid rounded-start" alt="...">
=======
                                    <div class="col-4">
                                        <img src="{{ asset("storage/".$obat->attributes->image) }}" class="img-fluid rounded-start" alt="{{ $obat->slug }}">
>>>>>>> Stashed changes
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Akhir Obat --}}
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
                <button class=" w-100 btn btn-success mt-3 mb-3">Beli</button>
            </div>
        </div>
    </div>
@endsection
