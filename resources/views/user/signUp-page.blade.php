@extends('layouts.main')

@section('container')
        <!-- Masthead-->
        <div class="mainCon" style="height: 91.5vh;">
            <div class="masthead">
                <div class="masthead-content text-white">
                    <div class="container-fluid px-4 pt-4 border rounded">
                        <h1 class="fst-italic text-success lh-1 mb-4">Daftar di Apotech</h1>

                        {{-- login input --}}
                            <div class="loginInput">
                                <form class="row g-3" action="/regis" method="post">
                                    @csrf
                                    <div class="col-auto">
                                        <input type="text" name="email" class="form-control mb-2" id="email" placeholder="Email">
                                    </div>
                                    <div class="col-auto">
                                        <input type="password" name="password" class="form-control mb-2" id="password1" placeholder="Password">
                                    </div>
                                    <div class="col-auto">
                                        <input type="password" name="password_confirmation" class="form-control mb-2" id="password2" placeholder="Konfirmasi Password">
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-success" style="width: 100%;">Daftar</button>
                                    </div>
                                    <p class="mt-4 text-dark" style="font-size: 13px; text-align: center;">Sudah mempunyai akun? <a href="/login" class="text-success" style="font-size: 13px; font-weight: 600;">Masuk >></a></p>
                                </form>
                            </div>

                    </div>
                </div>
            </div>
            <div class="containerImg">
                <img src="assets/img/logo.png" alt="logoApotech">
                <a class="fst-italic" style="color: #235323;" href="/">Apotech</a>
            </div>
        </div>
        <!-- end of maincon -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts-login.js"></script>
@endsection
