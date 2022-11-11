@extends('admin.layouts.main')

@section('content')

<div class="container">
    <h1 class="text-center mb-3">Tabel Obat</h1>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    @if(session('isDelete'))
        <div class="alert alert-success">{{ session('isDelete') }}</div>
    @endif
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
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{  $obat->nama }}</td>
                    <td>{{ $obat->stok }}</td>
                    <td class="d-flex justify-content-around">

                        <button class="btn btn-info text-light" data-toggle="modal" data-target="#modalCenter-{{ $obat->id }}">Ubah</button>
                        <form action="/tabelobat/{{ $obat->id }}" method="post">
                            @csrf
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

<!-- Modal -->
@foreach ($obats as $obat)
    <div class="modal fade" id="modalCenter-{{ $obat->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Ubah Obat</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row d-flex flex-column" action="/tabelobat/{{ $obat->id }}" method="post">
                    @csrf
                    <div class="col mb-3">
                        <label for="obat" class="form-label">Nama Obat</label>
                        <input type="text" name="nama" class="form-control" value={{$obat->nama}} />
                    </div>
                    <div class="col mb-3">
                        <label for="obat" class="form-label">Stok</label>
                        <input type="text" name="stok" class="form-control" value={{$obat->stok}} />
                    </div>
                    <button type="submit" class="btn btn-info ms-3 text-light" style="width: 150px">Simpan</button>
                </form>

            </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
