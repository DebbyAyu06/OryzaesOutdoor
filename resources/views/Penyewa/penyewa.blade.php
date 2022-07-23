@extends('sb-admin/app')
@section('title', 'Penyewa')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Penyewa</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('tambahpenyewa') }}" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus-square"></i>
            </span>
            <span class="text">Tambah Data</span>
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>NOMOR HP</th>
                        <th>JAMINAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                @foreach ($penyewa as $item)
                <tbody>
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['alamat'] }}</td>
                        <td>{{ $item['nohp'] }}</td>
                        <td class="text-center">{{ $item['jaminan'] }}</td>
                        <td class="text-center">
                            <a href="{{ url('editpenyewa', $item->id) }}"><i class="fas fa-edit"
                                    aria-hidden="true"></i></a>
                            |
                            <a href="{{ url('deletepenyewa', $item->id) }}"><i class="fas fa-trash-alt"
                                    aria-hidden="true" style="color: red"></i></a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
