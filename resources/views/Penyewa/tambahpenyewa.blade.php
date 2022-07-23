@extends('sb-admin/app')
@section('title', 'Penyewa')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Penyewa</h1>
</div>

<div class="card card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('simpanpenyewa') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" id="name" name="nama" class="form-control" placeholder="Nama Penyewa">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Alamat Penyewa" name="alamat"></textarea>
            </div>
            <div class="form-group">
                <input type="text" id="number" name="nohp" class="form-control" placeholder="Nomor Handphone">
            </div>
            <div class="form-group">
                <input type="text" id="name" name="jaminan" class="form-control" placeholder="Jaminan">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
