@extends('sb-admin/app')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Penyewaan</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('tambahsewa') }}" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus-square"></i>
            </span>
            <span class="text">Tambah Data</span>
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>NAMA PENYEWA</th>
                        <th>TGL SEWA</th>
                        <th>TGL KEMBALI</th>
                        <th>ALAT</th>
                        <th>JUMLAH ALAT</th>
                        <th>STATUS</th>
                        <th>DISKON</th>
                        <th>TOTAL</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                @foreach ( $penyewaan as $sewa)
                <tbody>
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td></td>
                        <td>{{ $sewa['tgl_sewa'] }}</td>
                        <td>{{ $sewa['tgl_kmbl'] }}</td>
                        <td>{{ $sewa->alat->nm_alat }}</td>
                        <td>{{ $sewa['jmlh_alat'] }}</td>
                        <td>{{ $sewa->status }}</td>
                        <td>{{ $sewa->diskon }}</td>
                        <td>{{ $sewa['total_byr'] }}</td>
                        <td class="text-center">
                            <a href="{{ url('editsewa', $sewa->id) }}"><i class="fas fa-edit"
                                    aria-hidden="true"></i></a>
                            |
                            <a href="{{ url('deletesewa', $sewa->id) }}"><i class="fa fa-trash" aria-hidden="true"
                                    style="color: red"></i></a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection