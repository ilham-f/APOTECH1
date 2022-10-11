@extends('admin.layouts.main')

@section('content')

<div class="container">
    <h1 class="text-center mb-3">Tabel Obat</h1>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Obat</th>
            <th scope="col">Stok</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($obats as $obat)
                <tr>
                    <th scope="row">{{ $obat->id }}</th>
                    <td>{{  $obat->nama }}</td>
                    <td>{{ $obat->stok }}</td>
                    <td class="d-flex justify-content-around">
                        <button class="btn btn-info">Ubah</button>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection
