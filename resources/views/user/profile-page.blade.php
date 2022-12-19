@extends('layouts.mainafter')

@section('container')
<<<<<<< Updated upstream
=======
    <div class="container-fluid d-flex justify-content-center align-items-center bg-success" style="height: 90.5vh;">
        <div class="card shadow" style="width: 1200px; height: 580px;">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div class="d-flex py-5">
                    <div class="col-md-4 text-center"
                        style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <div class="d-flex flex-column align-items-center">
                            @if (Auth::user()->jk == 1)
                                <img src="assets/img/male.jpg"
                                    alt="Avatar" class="img-fluid" style="width: 80px;" />
                            @else
                                <img src="assets/img/female.jpg"
                                alt="Avatar" class="img-fluid" style="width: 80px;" />
                            @endif
                            <small class="fst-italic mt-2 mb-3">{{ Auth::user()->nama }}</small>
                        </div>
                        <button style="width: 60%;" class="btn btn-success mb-2" data-bs-toggle="modal"
                            data-bs-target="#profil-{{ Auth::user()->id }}"><small>Ubah Profil</small>
                        </button>
                        <button style="width: 60%;" class="btn btn-success mb-2" data-bs-toggle="modal"
                            data-bs-target="#ubahpw"><small>Ubah Password</small>
                        </button>
                        <button style="width: 60%;" class="btn btn-success" onclick="location.href='/rwytpmblian'"
                            type="button">
                            <small>Pesanan Saya</small>
                        </button>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-3">
                            @if (session('status'))
                                <div class="alert alert-success">{{ session('status') }}</div>
                            @endif
                            <h6>Akun Saya</h6>
                            <hr class="mt-0 mb-3">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Email</h6>
                                    <p class="text-muted">{{ Auth::user()->email }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Phone</h6>
                                    <p class="text-muted">{{ Auth::user()->notelp }}</p>
                                </div>
                                <div class="col-10 mb-3">
                                    <h6>Alamat</h6>
                                    <p class="text-muted">{{ Auth::user()->alamat }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
>>>>>>> Stashed changes

<div class="container-fluid">
    <div class="row">
        @include('partials.sidebaruser')
            <div class="col py-3">
                <h2 class="text-success">Saudara User - example@email.com</h2>
                <label for="pilihnegara">Negara</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihnegara">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                <label for="pilihprovinsi">Provinsi</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihprovinsi">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                <label for="pilihkota">Kota</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihkota">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                <label for="pilihkec">Kecamatan</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihkec">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                <label for="pilihkel">Kelurahan</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihkel">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                <label for="pilihkodepos">Kode Pos</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihkodepos">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Detail Alamat</label>
                    <textarea class="form-control w-50" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <label for="notelp">No Telp</label>
                <div class="input-group mb-3 w-50">
                    <span class="input-group-text">+62</span>
                    <input type="text" class="form-control" id="notelp" placeholder="">
                </div>

                <button class="btn btn-success">Simpan</button>
            </div>
    </div>
</div>

@endsection
