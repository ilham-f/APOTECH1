<<<<<<< Updated upstream
@extends('layouts.mainafter')

@section('container')
<<<<<<< Updated upstream

<div class="container">
    <div class="row">
        @include('partials.sidebaruser')
            <div class="col py-3">
                <h2 class="text-success">Saudara User - example@email.com</h2>
                <label for="pilihnegara">Negara</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihnegara">
                    <option selected>Pilih Negara</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
=======
@extends('partials.profil')

@section('content')
    <div class="container-fluid" style="background-color: #F8F9FA;">
        <div class="row d-flex justify-content-center align-items-center" style="margin-top: 50px">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3 border-0 shadow" style="border-radius: .5rem;">
                    <div class="row g-0 my-5">
                        <div class="col-md-4 text-center"
                            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <div class="d-flex flex-column align-items-center">
                                <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-Vector-PNG-File.png"
                                    alt="Avatar" class="img-fluid" style="width: 80px;" />
                                <small class="fst-italic mt-2 mb-3">{{ Auth::user()->nama }}</small>
                            </div>
                            <button style="width: 50%;" class="btn btn-success mb-2" data-bs-toggle="modal"
                                data-bs-target="#profil-{{ Auth::user()->id }}"><small>Ubah Profil</small>
                            </button>
                            <button style="width: 50%;" class="btn btn-success mb-2" data-bs-toggle="modal"
                                data-bs-target="#ubahpw"><small>Ubah Password</small>
                            </button>
                            <button style="width: 50%;" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#ubah-{{ Auth::user()->id }}"><small>Pesanan Saya</small>
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
                                    <div class="col-6 mb-3">
                                        <h6>Alamat</h6>
                                        <p class="text-muted">{{ Auth::user()->alamat }}</p>
                                    </div>
                                </div>
=======
    <div class="container-fluid d-flex justify-content-center align-items-center bg-success" style="height: 91.5vh;">
        <div class="card shadow" style="width: 1200px; height: 600px">
            <div class="card-body d-flex justify-content-between py-4">
                <div class="col-md-4 text-center"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; width: 20%">
                    <div class="d-flex flex-column align-items-center">
                        @if (Auth::user()->jk == 1)
                            <img src="assets/img/male.jpg" alt="Avatar" class="img-fluid" style="width: 80px;" />
                        @else
                            <img src="assets/img/female.jpg" alt="Avatar" class="img-fluid" style="width: 80px;" />
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
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <h4>Akun Saya</h4>
                        <hr class="mt-0 mb-3">
                        <div class="row pt-1">
                            <div class="col-6 mb-3">
                                <h6>Email</h6>
                                <p class="text-muted">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="col-6 mb-3">
                                <h6>No. Telepon</h6>
                                <p class="text-muted">{{ Auth::user()->notelp }}</p>
                            </div>
                            <div class="col-10 mb-3">
                                <h6>Alamat</h6>
                                <p class="text-muted">{{ Auth::user()->alamat }}</p>
>>>>>>> Stashed changes
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
>>>>>>> Stashed changes

    <!-- Modal Ubah-->
    @foreach ($users as $user)
        <div class="modal fade" id="profil-{{ $user->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah Profil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form class="row d-flex flex-column" action="/profil/{{ $user->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="col mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $user->nama }}" />
                            </div>
                            <div class="col mb-3">
<<<<<<< Updated upstream
=======
                                <label for="jk">Jenis Kelamin</label>
                                <br>
                                <select class="form-select border-1 rounded mt-2" name="jk">
                                    <option selected>Jenis Kelamin</option>
                                    @if (!$user->jk)
                                        <option value="1">Laki-laki</option>
                                        <option value="0">Perempuan</option>
                                    @elseif ($user->jk == 1)
                                        <option selected value="{{ $user->jk }}">Laki-laki</option>
                                        <option value="0">Perempuan</option>
                                    @elseif ($user->jk == 0)
                                        <option selected value="{{ $user->jk }}">Perempuan</option>
                                        <option value="1">Laki-laki</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col mb-3">
>>>>>>> Stashed changes
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $user->email }}" />
                            </div>
                            <div class="col mb-3">
                                <label for="notelp" class="form-label">No. Telepon</label>
                                <input type="text" name="notelp" class="form-control" value="{{ $user->notelp }}" />
                            </div>
                            <div class="col mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $user->alamat }}" />
                            </div>
                            <button type="submit" class="btn btn-info ms-3 text-light" style="width: 150px">Simpan</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Modal Ubah Pw --}}
    <div class="modal fade" id="ubahpw" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form class="row d-flex flex-column" action="/ubahpw" method="post">
                        @method('put')
                        @csrf
                        <div class="col mb-3">
                            <label for="password_lama" class="form-label">Password Lama</label>
                            <input type="password" name="password_lama" class="form-control" />
                        </div>
                        <div class="col mb-3">
                            <label for="password" class="form-label">Password Baru</label>
                            <input type="password" name="password" class="form-control" />
                        </div>
                        <div class="col mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" name="password_confirmation" class="form-control" />
                        </div>
                        <button type="submit" class="btn btn-info ms-3 text-light" style="width: 150px">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="">Logout</a>
                </div>
<<<<<<< Updated upstream

                <button class="btn btn-success">Simpan</button>
            </div>
    </div>
</div>

=======
            </div>
        </div>
    </div>
>>>>>>> Stashed changes
@endsection
