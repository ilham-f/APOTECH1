@extends('admin.layouts.main')

@section('content')

<div class="container">
    <h1 class="text-center mb-3">Tabel Keluhan</h1>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Keluhan</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($keluhans as $keluhan)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{  $keluhan->nama }}</td>
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
