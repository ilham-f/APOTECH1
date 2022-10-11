@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Tambah Obat</h1>
        <div class="card">
            <div class="card-body">
                <form>
                    <label for="pilihkategori">Kategori</label>
                    <br>
                    <select class="form-select w-50 border-1 rounded" aria-label="Default select example" id="pilihkategori">
                        <option selected>Pilih Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->nama }}</option>
                        @endforeach
                      </select>
                    <div class="mb-3 mt-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" aria-describedby="slug">
                        <div id="slughelp" class="form-text">Ketik nama Obat dengan " - " sebagai pengganti spasi</div>
                    </div>
                    <div class="mb-3">
                      <label for="obat" class="form-label">Nama Obat</label>
                      <input type="text" class="form-control" id="obat" aria-describedby="obat">
                    </div>

                    <label for="tambahstok">Stok</label>
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups" id="tambahstok">
                        <div class="btn-group me-2" role="group" aria-label="First group">
                            <button type="button" class="btn btn-outline-secondary">-</button>
                            <div class="input-group" style="width: 45px">
                                <input type="text" class="form-control rounded-0 text-center" placeholder="1" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            </div>
                            <button type="button" class="btn btn-outline-secondary">+</button>
                        </div>
                    </div>
                    <div class="submit d-flex flex-row-reverse mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
