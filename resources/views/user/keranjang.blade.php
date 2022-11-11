@extends('layouts.main')

@section('container')

<div class="container-fluid py-3 px-5 bg-success" style="display:block;">
        <div class="row p-4">
            <div class="col card m-2">
                <h4 class="text-success my-3">Obat</h4>
                <div class="row">
                    <div class="col mx-3">
                        {{-- Mulai Obat --}}
                        @foreach ($obats->slice(0,4) as $obat)
                        <div class="row mb-3">
                            <div class="card">
                                <div class="row g-0 mt-4">
                                    <div class="col-1">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                    <div class="col-3">
                                        <img src="assets/img/obats/{{ $obat->image }}" class="img-fluid rounded-start" alt="{{ $obat->slug }}">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $obat->nama }}</h5>
                                            <p class="card-text">Rp{{ $obat->harga }},00</p>
                                            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups" id="tambahstok">
                                                <div class="btn-group me-2" role="group" aria-label="First group">
                                                    <button disabled id="kurang" type="button" min="0" class="btn btn-outline-secondary"
                                                        onclick="counter(this.id)">-</button>
                                                    <div class="input-group" style="width: 45px">
                                                        <input id="value" type="text" class="form-control rounded-0 text-center" value="1">
                                                        {{-- <div id="value">1</div> --}}
                                                    </div>
                                                    <button id="tambah" type="button" min="0" class="btn btn-outline-secondary"
                                                        onclick="counter(this.id)">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- Akhir Obat --}}
                    </div>
                </div>
            </div>
            {{-- Ringkasan Belanja --}}
            <div class="col-4 card m-2" style="height: 320px">
                <h4 class="text-success mt-3">Ringkasan Belanja</h4>
                <div class="card mt-2 p-3">
                    <p>Jumlah Barang :</p>
                    <p>Total Harga :</p>
                    <hr>
                    <p>Rp. - </p>
                </div>
                <button class=" w-100 btn btn-success mt-3 mb-3">Beli</button>
            </div>
            {{-- Akhir Ringkasan --}}
        </div>
</div>

@endsection

<script>
    function counter(clicked_id) {
        var counter = document.getElementById('value').value;

        if (counter < 1) {
            document.getElementById("kurang").disabled = true;
        }
        else {
            document.getElementById("kurang").disabled = false;
        }
        var parsed = parseInt(counter);

        let result = clicked_id == "kurang" ? parsed - 1 : parsed + 1;

        console.log(counter);
        if(result < 0 || result == 0){
            result = 1;
        }
        document.getElementById('value').value = result;
    }
</script>
