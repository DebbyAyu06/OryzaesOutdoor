@extends('sb-admin/app')
@section('title', 'Diskon')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Diskon</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ url('updatediskon', $dis->id) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" id="name" name="nm_diskon" class="form-control" placeholder="Nama Penyewa"
                    value="{{ $dis->nm_diskon }}">
            </div>
            <div class="form-group">
                <input type="text" id="number" name="nohp" class="form-control" placeholder="Nomor Handphone"
                    value="{{ $dis->ttl_diskon * 100 }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </form>
    </div>
</div>
@endsection