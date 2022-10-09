@extends('layouts.main')

@section('container')
    <h1 class="text-center mt-5">Kirim Resep</h1>

    <div class="container px-4 px-lg-5 mt-5">
        <div class="card shadow">
            <div class="card-body d-flex flex-column align-items-center">
                {{-- <hr class="border border-success border-1 opacity-100 w-100"> --}}
                <h3 class="card-title text-success">Unggah Resep</h3>
                <div class="border border-3 border-success d-flex flex-column border-success mt-3 w-100 rounded p-2 justify-content-center align-items-center" style="height: 300px">
                    <p class="text-success display-6">Tarik File ke Sini</p>
                    <p class="display-6">atau</p>
                    <input class="form-control w-25 mt-2" type="file" id="formFile">

                </div>
                <button class="btn btn-success mt-3 w-25">Kirim</button>
            </div>
        </div>
    </div>
@endsection
