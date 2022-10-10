@extends('layouts.main')

@section('container')
        <!-- Header-->
        <header class="bg-success py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Apotech</h1>
                    <p class="lead fw-normal text-white-50 mb-0">The most important wealth is health</p>
                </div>
            </div>
        </header>

        <!-- Section-->
        <section class="py-5">
            <div class="filter d-flex justify-content-between" style="margin-left: 10%; margin-right: 10%;">
                <ul class="navbar-nav m-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Obat</a>
                        <ul class="dropdown-menu" style="padding: 0; border-radius: 5px;">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item border-0" href="/categories/{{ $category->slug }}">{{  $category->nama }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>

                <a href="/produk" class="m-4 d-flex justify-content-center align-items-center" role="button" style="text-decoration: none;">Lihat Semua >></a>
            </div>

            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-success">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Apotech 2022</p></div>
        </footer>
@endsection
