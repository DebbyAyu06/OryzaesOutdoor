@extends('sb-admin/app')
@section('title', 'Diskon')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Diskon</h1>
</div>

<div class="card card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('simpandiskon') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" id="name" name="nm_diskon" class="form-control" placeholder="Nama Diskon">
            </div>
            <div class="form-group">
                <input type="text" id="name" name="ttl_diskon" class="form-control" placeholder="Diskon">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection