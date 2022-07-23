@extends('sb-admin/app')
@section('title', 'Alat')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Alat</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('simpanalat') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" id="number" name="nm_alat" class="form-control" placeholder="Nama Alat">
            </div>
            <div class="form-group">
                <input type="price" id="name" name="harga" class="form-control" placeholder="Harga">
            </div>
            <div class="form-group">
                <input type="number" id="number" name="stok" class="form-control" placeholder="Stok">
            </div>
            <div class="form-group">
                <input type="number" id="number" name="jumlah" class="form-control" placeholder="Jumlah">
            </div>
            <div class="mb-3">
                <!-- <label for="formFileMultiple" class="form-label">Gambar Alat</label> -->
                <input class="form-control" type="file" name="gambar" id="formFileMultiple" multiple>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
