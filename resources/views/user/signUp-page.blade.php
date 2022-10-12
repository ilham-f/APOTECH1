@extends('layouts.main')

@section('container')
        <!-- Masthead-->
        <div class="mainCon" style="height: 91.5vh;">
            <div class="masthead">
                <div class="masthead-content text-white">
                    <div class="container-fluid px-4 pt-4 border rounded">
                        <h1 class="fst-italic text-success lh-1 mb-4">Daftar di Apotech</h1>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- login input-->
                            <div class="loginInput">
                                <form class="row g-3" action="" method="POST">
                                    <div class="col-auto">
                                        <label for="NoTelp" class="visually-hidden"></label>
                                        <input type="text" class="form-control mb-2" id="NoTelp" placeholder="No. Telepon">
                                    </div>
                                    <div class="col-auto">
                                        <label for="staticEmail2" class="visually-hidden"></label>
                                        <input type="text" class="form-control mb-2" id="Email" placeholder="Alamat">
                                    </div>
                                    <div class="col-auto">
                                        <label for="inputPassword2" class="visually-hidden"></label>
                                        <input type="password" class="form-control mb-2" id="inputPassword2" placeholder="Password">
                                    </div>
                                    <div class="col-auto">
                                        <label for="inputPassword2" class="visually-hidden"></label>
                                        <input type="password" class="form-control mb-2" id="inputPassword2" placeholder="Konfirmasi Password">
                                    </div>
                                    <div class="mt-4">
                                        <a class="btn btn-success" style="width: 100%;" href="/homeAfter">Daftar</a>
                                    </div>
                                    <p class="mt-4 text-dark" style="font-size: 13px; text-align: center;">Sudah mempunyai akun? <a href="/login" class="text-success" style="font-size: 13px; font-weight: 600;">Masuk >></a></p>
                                </form>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="email:email">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
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
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
