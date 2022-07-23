@extends('sb-admin/app')
@section('title', 'Penyewa')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Penyewa</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ url('updatepenyewa',$pen->id) }}" method="post">

            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" id="name" name="nama" class="form-control" placeholder="Nama Penyewa"
                    value="{{ $pen->nama }}">
            </div>
            <div class="form-group">
                <textarea name="alamat" class="form-control" placeholder="Alamat Penyewa">{{ $pen->alamat }}</textarea>
            </div>
            <div class="form-group">
                <input type="text" id="number" name="nohp" class="form-control" placeholder="Nomor Handphone"
                    value="{{ $pen->nohp }}">
            </div>
            <div class="form-group">
                <input type="text" id="name" name="jaminan" class="form-control" placeholder="Jaminan"
                    value="{{ $pen->jaminan }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </form>
    </div>
</div>
@endsection