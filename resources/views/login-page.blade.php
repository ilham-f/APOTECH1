<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Daftar</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon1.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/stylesLogin.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Masthead-->
        <div class="mainCon">
            <div class="masthead">
                <div class="masthead-content text-white">
                    <div class="container-fluid px-4 pt-4">
                        <h1 class="fst-italic lh-1 mb-4">Masuk ke Apotech</h1>
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
                                        <input type="text" class="form-control mb-2" id="NoTelp" placeholder="Username/No. Telepon/Email">
                                    </div>
                                    <div class="col-auto">
                                        <label for="inputPassword2" class="visually-hidden"></label>
                                        <input type="password" class="form-control mb-2" id="inputPassword2" placeholder="Password">
                                    </div>
                                    <div class="col-auto d-flex mt-4">
                                        <a class="btn btn-outline-primary" href="/">Masuk</a>
                                    </div>
                                    <p class="mt-4" style="font-size: 13px; text-align: center;">Belum punya akun? <a href="/signUp" style="font-size: 13px;">Daftar >></a></p>
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
                <img src="assets/img/logo.png" alt="logoApotech" style="display: block; width: 150px;">
                <a class="navbar-brand" href="#!">Apotech</a>
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
    </body>
</html>
