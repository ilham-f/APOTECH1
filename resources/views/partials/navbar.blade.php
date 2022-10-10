<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <div class="image">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logoApotech" style="display: block; height: 50px;">
        </div>
        <a class="navbar-brand" href="/">Apotech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex" role="search">
                <input class="form-control" type="search" placeholder="Cari Obat / Keluhan" aria-label="Search" style="border-radius: 5px 0 0 5px;">
                <button class="btn btn-success" type="submit" style="border-radius: 0 5px 5px 0;">
                    <i class="bi bi-search"></i>
                </button>
            </form>

            <form class="d-flex">
                <div class="text-center ms-2">
                    <a class="btn btn-outline-dark mt-auto" href="/keranjang">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-success text-white ms-1 rounded-pill">0</span>
                    </a>
                </div>
            </form>

            <form class="d-flex">
                <div class="text-center ms-2">
                    <a class="btn btn-outline-dark mt-auto" href="/kirimresep">
                        <i class="bi-card-text me-1"></i>
                        Kirim Resep
                    </a>
                </div>
            </form>

            <form class="d-flex">
                <div class="text-center ms-2">
                    <a class="btn btn-outline-dark mt-auto" href="/login">Masuk</a>
                </div>
            </form>

            <form class="d-flex">
                <div class="text-center ms-2">
                    <a class="btn btn-outline-dark mt-auto" href="/signUp">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</nav>
