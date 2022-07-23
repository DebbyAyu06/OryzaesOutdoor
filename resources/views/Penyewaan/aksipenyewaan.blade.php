@extends('sb-admin/app')
@section('title', 'Penyewaan')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Data Penyewaan</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ url('updatesewa',$pen->id) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Nama Penyewa" disabled>
            </div>
            <div class="row form-group">
                <div class="col">
                    <input type="date" class="form-control" name="tgl_sewa" placeholder="Tanggal Sewa">
                </div>
                <div class="col">
                    <input type="date" class="form-control" name="tgl_kmbl" placeholder="Tanggal Kembali">
                </div>
                <div class="col">
                    <input type="text" id="name" class="form-control" placeholder="Estimasi" disabled>
                </div>
            </div>
            <div class="form-group">
                <div class="row container1">
                    <a class="btn add_form_field">Add New Field &nbsp;
                        <span style="font-size:16px; font-weight:bold;">+ </span>
                    </a>
                    <div class="row">
                        <div class="col">
                            <select class="form-select" id="alat" name="alat">
                                <option selected disabled>Pilih Alat</option>

                            </select>
                        </div>
                        <div class="col">
                            <input type="number" id="number" name="jmlh_alat" class="form-control"
                                placeholder="Jumlah Alat">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <select class="form-select" name="status">
                    <option selected disabled>Pilih Status</option>
                    <option value="1">Sewa</option>
                    <option value="2">Selesai</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" id="name" name="diskon" class="form-control" placeholder="Diskon" disabled>
            </div>
            <div class="form-group">
                <input type="text" id="name" name="total_byr" class="form-control" placeholder="Total">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
