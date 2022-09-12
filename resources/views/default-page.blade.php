<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Coming Soon - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/default.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Masthead-->
            <div class="masthead">
                <div class="masthead-content text-white">
                    <div class="container-fluid px-4 pt-4">
                        <h1 class="fst-italic lh-1 mb-4">Daftar</h1>
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
                                <form class="row g-3">
                                    <div class="col-auto" style="width: 300px;">
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
                                    <div class="col-auto d-flex mt-4">
                                        <button type="submit" class="btn btn-outline-primary" style="width: 300px;">Daftar</button>
                                    </div>
                                    <p class="mt-4" style="font-size: 13px; text-align: center;">Sudah mempunyai akun? <a href="#" style="font-size: 13px;">Masuk >></a></p>
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
                <div class="image">
                            <img src="assets/img/logo.png" alt="logoApotech" style="display: block; width: 150px;">
                            <a class="navbar-brand" href="#!">Apotech</a>
                </div>
            </div>  
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
