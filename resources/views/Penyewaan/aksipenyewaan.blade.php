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
                <select class="form-select" id="penyewa" name="penyewa">
                    <option selected disabled>Pilih Nama Penyewa</option>
                </select>
            </div>
            <div class="row form-group">
                <div class="col">
                    <input type="date" class="form-control" name="tgl_sewa" placeholder="Tanggal Sewa" nm_alat>
                </div>
                <div class="col">
                    <input type="date" class="form-control" name="tgl_kmbl" placeholder="Tanggal Kembali">
                </div>
                <div class="col">
                    <input type="text" id="name" class="form-control" placeholder="Estimasi" disabled>
                </div>
            </div>
            <div class="form-group">
                <div class="container1">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn add_form_field btn-primary btn-sm">Tambah Alat</a>
                    </div>
                    <div class="row mt-3">
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
                <select class="form-select" id="diskon" name="diskon">
                    <option selected disabled>Pilih Diskon</option>

                </select>
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