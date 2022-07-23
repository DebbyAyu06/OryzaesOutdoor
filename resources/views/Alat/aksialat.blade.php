@extends('sb-admin/app')
@section('title', 'Alat')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Data Alat</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ url('updatealat',$alt->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" id="number" name="nm_alat" class="form-control" placeholder="Nama Alat"
                    value="{{ $alt->nm_alat }}">
            </div>
            <div class="form-group">
                <input type="price" id="name" name="harga" class="form-control" placeholder="Harga"
                    value="{{ $alt->harga }}">
            </div>
            <div class="form-group">
                <input type="number" id="number" name="stok" class="form-control" placeholder="Stok"
                    value="{{ $alt->stok }}">
            </div>
            <div class="form-group">
                <input type="number" id="number" name="jumlah" class="form-control" placeholder="Jumlah"
                    value="{{ $alt->jumlah }}">
            </div>
            <div class="mb-3">
                <input class="form-control" type="file" name="gambar" id="formFileMultiple" multiple
                    value="{{ $alt->gambar }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
