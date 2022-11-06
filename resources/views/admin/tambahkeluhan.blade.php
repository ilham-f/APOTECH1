@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <h1>Tambah Kategori</h1>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                      <label for="obat" class="form-label">Nama Kategori</label>
                      <input type="text" class="form-control" id="obat" aria-describedby="obat">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" aria-describedby="slug">
                        <div id="slughelp" class="form-text">Ketik nama Obat dengan " - " sebagai pengganti spasi</div>
                    </div>
                    <div class="submit d-flex flex-row-reverse mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
