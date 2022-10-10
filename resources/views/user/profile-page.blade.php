@extends('layouts.mainafter')

@section('container')

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

                <label for="pilihprovinsi">Provinsi</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihprovinsi">
                    <option selected>Pilih Provinsi</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                <label for="pilihkota">Kota/Kabupaten</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihkota">
                    <option selected>Pilih Kota/Kabupaten</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                <label for="pilihkec">Kecamatan</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihkec">
                    <option selected>Pilih Kecamatan</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                <label for="pilihkel">Kelurahan</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihkel">
                    <option selected>Pilih Kelurahan</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>

                <label for="pilihkodepos">Kode Pos</label>
                <select class="form-select w-50" aria-label="Default select example" id="pilihkodepos">
                    <option selected>Pilih Kode Pos</option>
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
