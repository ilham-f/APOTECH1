@extends('layouts.main')

@section('container')
        <!-- Masthead-->
        <div class="mainCon" style="height: 91.5vh;">
            <div class="masthead">
                <div class="masthead-content">
                    <div class="container-fluid px-4 pt-4 border rounded">
                        <h1 class="fst-italic text-success lh-1 mb-4">Masuk Sebagai Admin</h1>

                            <!-- login input-->
                            <div class="loginInput">
                                <form class="row g-3" action="/login" method="post">
                                    @csrf
                                    <div class="col-auto">
                                        <input type="text" name="email" class="form-control mb-2" id="email" placeholder="Email">
                                    </div>
                                    <div class="col-auto">
                                        <input type="password" name="password" class="form-control mb-2" id="password" placeholder="Password">
                                    </div>
                                    <div class="col-auto d-flex mt-4">
                                        <button type="submit" class="btn btn-success" style="width: 100%">Masuk</button>
                                    </div>
                                    <p class="mt-4" style="font-size: 13px; text-align: center;">Belum punya akun? <a href="/regis" class="text-success" style="font-size: 13px; font-weight: 600;">Daftar >></a></p>
                                </form>
                            </div>
                            {{-- <div class="invalid-feedback mt-2" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="email:email">Email is not valid.</div> --}}

                    </div>
                </div>
            </div>
            <div class="containerImg">
                <div class="image d-flex">
                            <img src="assets/img/logo.png" alt="logoApotech">
                            <a class="fst-italic" href="/home">Apotech</a>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts-login.js"></script>
        <script>
            let msg = '{{Session::get('alert')}}';

            let exist = '{{Session::has('alert')}}';

            if(exist){
                alert(msg);
            }
        </script>
@endsection
