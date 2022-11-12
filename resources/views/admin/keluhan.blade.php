@extends('admin.layouts.main')

@section('content')

<div class="container">
    <h1 class="text-center mb-3">Tabel Keluhan</h1>
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

                        <button class="btn btn-info text-light" data-toggle="modal" data-target="#modalCenter-{{ $keluhan->id }}">Ubah</button>
                        <form action="/tabelkeluhan/{{ $keluhan->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus keluhan?')">Hapus</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@foreach ($keluhans as $keluhan)
    <div class="modal fade" id="modalCenter-{{ $keluhan->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Ubah Keluhan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row d-flex flex-column" action="/tabelkeluhan/{{ $keluhan->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="col mb-3">
                        <label for="obat" class="form-label">Nama Keluhan</label>
                        <input type="text" name="nama" class="form-control" value="{{$keluhan->nama}}" />
                    </div>
                    <button type="submit" class="btn btn-info ms-3 text-light" style="width: 150px">Simpan</button>
                </form>

            </div>
            </div>
        </div>
    </div>
@endforeach

@endsection

